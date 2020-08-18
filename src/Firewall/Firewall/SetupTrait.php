<?php
/**
 * This file is part of the Shieldon package.
 *
 * (c) Terry L. <contact@terryl.in>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 * php version 7.1.0
 * 
 * @category  Web-security
 * @package   Shieldon
 * @author    Terry Lin <contact@terryl.in>
 * @copyright 2019 terrylinooo
 * @license   https://github.com/terrylinooo/shieldon/blob/2.x/LICENSE MIT
 * @link      https://github.com/terrylinooo/shieldon
 * @see       https://shieldon.io
 */

declare(strict_types=1);

namespace Shieldon\Firewall\Firewall;

use Psr\Http\Server\MiddlewareInterface;
use Shieldon\Firewall\Firewall\Captcha\CaptchaFactory;
use Shieldon\Firewall\Firewall\Driver\DriverFactory;
use Shieldon\Firewall\Log\ActionLogger;
use Shieldon\Firewall\Middleware\HttpAuthentication;
use Shieldon\Event\Event;
use RuntimeException;
use function Shieldon\Firewall\get_request;
use function Shieldon\Firewall\get_session_instance;
use function strpos;
use function time;

/*
 * Main Trait for Firwall class.
 */
trait SetupTrait
{
    /**
     * If status is false and then Sheldon will stop working.
     *
     * @var bool
     */
    protected $status = true;

    /**
     * Get options from the configuration file.
     * This method is same as `$this->getConfig()` but returning value from array directly.
     *
     * @param string $option  The option of the section in the the configuration.
     * @param string $section The section in the configuration.
     *
     * @return mixed
     */
    abstract protected function getOption(string $option, string $section = '');

    /**
     * Update configuration file.
     *
     * @return void
     */
    abstract protected function updateConfig(): void;

    /**
     * Set a variable to the configuration.
     *
     * @param string $field The field of the configuration.
     * @param mixed  $value The vale of a field in the configuration.
     *
     * @return void
     */
    abstract public function setConfig(string $field, $value): void;

    /**
     * Add middlewares and use them before going into Shieldon kernal.
     *
     * @param MiddlewareInterface $middleware A PSR-15 middlewares.
     *
     * @return void
     */
    abstract public function add(MiddlewareInterface $middleware): void;

    /**
     * Are database tables created? 
     *
     * @return bool
     */
    abstract protected function hasCheckpoint(): bool;

    /**
     * Are database tables created?
     * 
     * @param bool $create Is create the checkpoint file, or not.
     *
     * @return void
     */
    abstract protected function setCheckpoint(bool $create = true): void;

    /**
     * Set a data driver for the use of Shiedon Firewall.
     * Currently supports File, Redis, MySQL and SQLite.
     *
     * @return void
     */
    protected function setupDriver(): void
    {
        $driverType = $this->getOption('driver_type');
        $driverSetting = $this->getOption($driverType, 'drivers');

        if (isset($driverSetting['directory_path'])) {
            $driverSetting['directory_path'] = $driverSetting['directory_path'] ?: $this->directory . '/data_driver_' . $driverType;
        }

        $driverInstance = DriverFactory::getInstance($driverType, $driverSetting);

        if ($this->hasCheckpoint()) {
            $this->kernel->disableDbBuilder();
        } else {
            $this->setCheckpoint();
        }

        $this->status = false;

        if ($driverInstance !== null) {
            $this->kernel->setDriver($driverInstance);
            $this->status = true;
        }
    }

    /**
     * Filters
     *
     * (1) Session.
     * (2) Cookie generated by JavaScript code.
     * (3) HTTP referrer information.
     * (4) Pageview frequency.
     *
     * @return void
     */
    protected function setupFilters(): void
    {
        $filters = [
            'session',
            'cookie',
            'referer',
        ];

        $settings = [];
        $filterConfig = [];
        $filterLimit = [];

        foreach ($filters as $filter) {
            $setting = $this->getOption($filter, 'filters');

            $settings[$filter] = $setting;
            $filterConfig[$filter] = $setting['enable'];
            $filterLimit[$filter] = $setting['config']['quota']; // default: 5

            unset($setting);
        }

        $settings['frequency'] = $this->getOption('frequency', 'filters');
        $filterConfig['frequency'] = $settings['frequency']['enable'];

        $this->kernel->setFilters($filterConfig);

        $this->kernel->setProperty(
            'limit_unusual_behavior',
            $filterLimit
        );

        $frequencyQuota = [
            's' => $settings['frequency']['config']['quota_s'],
            'm' => $settings['frequency']['config']['quota_m'],
            'h' => $settings['frequency']['config']['quota_h'],
            'd' => $settings['frequency']['config']['quota_d'],
        ];

        $this->kernel->setProperty('time_unit_quota', $frequencyQuota);

        $this->kernel->setProperty(
            'cookie_name',
            $settings['cookie']['config']['cookie_name'] // default: ssjd
        );

        $this->kernel->setProperty(
            'cookie_domain',
            $settings['cookie']['config']['cookie_domain'] // default: ''
        );

        $this->kernel->setProperty(
            'cookie_value',
            $settings['cookie']['config']['cookie_value'] // default: 1
        );

        $this->kernel->setProperty(
            'interval_check_referer',
            $settings['referer']['config']['time_buffer']
        );

        $this->kernel->setProperty(
            'interval_check_session',
            $settings['session']['config']['time_buffer']
        );
    }

    /**
     * Components
     * 
     * (1) Ip
     * (2) Rdns
     * (3) Header
     * (4) User-agent
     * (5) Trusted bot
     *
     * @return void
     */
    protected function setupComponents(): void
    {
        $componentConfig = [
            'Ip'         => $this->getOption('ip', 'components'),
            'Rdns'       => $this->getOption('rdns', 'components'),
            'Header'     => $this->getOption('header', 'components'),
            'UserAgent'  => $this->getOption('user_agent', 'components'),
            'TrustedBot' => $this->getOption('trusted_bot', 'components'),
        ];

        foreach ($componentConfig as $className => $config) {
            $class = 'Shieldon\Firewall\Component\\' . $className;

            if ($config['enable']) {
                $componentInstance = new $class();

                if ($className === 'Ip') {
                    $this->kernel->setComponent($componentInstance);

                    // Need Ip component to be loaded before calling this method.
                    $this->setupAndApplyComponentIpManager();
                } else {
                    $componentInstance->setStrict($config['strict_mode']);
                    $this->kernel->setComponent($componentInstance);
                }
            }
        }
    }

    /**
     * Captcha modules.
     * 
     * (1) Google ReCaptcha
     * (2) Simple image captcha.
     *
     * @return void
     */
    protected function setupCaptchas(): void
    {
        $captchaList = [
            'recaptcha',
            'image',
        ];

        foreach ($captchaList as $captcha) {
            $setting = (array) $this->getOption($captcha, 'captcha_modules');

            // Initialize messenger instances from the factory/
            if (CaptchaFactory::check($setting)) {

                $this->kernel->setCaptcha(
                    CaptchaFactory::getInstance(
                        // The ID of the captcha module in the configuration.
                        $captcha, 
                        // The settings of the captcha module in the configuration.
                        $setting    
                    )
                );
            }

            unset($setting);
        }
    }

    /**
     * Set up the action logger.
     *
     * @return void
     */
    protected function setupLogger(): void
    {
        $loggerSetting = $this->getOption('action', 'loggers');

        if ($loggerSetting['enable']) {
            if (!empty($loggerSetting['config']['directory_path'])) {
                $this->kernel->setLogger(
                    new ActionLogger($loggerSetting['config']['directory_path'])
                );
            }
        }
    }

    /**
     * Apply the denied list and the allowed list to Ip Component.
     * 
     * @return void
     */
    protected function setupAndApplyComponentIpManager(): void
    {
        $ipList = (array) $this->getOption('ip_manager');

        $allowedList = [];
        $deniedList = [];

        foreach ($ipList as $ip) {

            if (0 === strpos($this->kernel->getCurrentUrl(), $ip['url']) ) {

                if ('allow' === $ip['rule']) {
                    $allowedList[] = $ip['ip'];
                }

                if ('deny' === $ip['rule']) {
                    $deniedList[] = $ip['ip'];
                }
            }
        }

        /** @scrutinizer ignore-call */ 
        $this->kernel->component['Ip']->setAllowedItems($allowedList);

        /** @scrutinizer ignore-call */ 
        $this->kernel->component['Ip']->setDeniedItems($deniedList);
    }

    /**
     * If you use CDN, please choose the real IP source.
     *
     * @return void
     */
    protected function setupIpSource(): void
    {
        $ipSourceType = $this->getOption('ip_variable_source');
        $serverParams = get_request()->getServerParams();

        /**
         * REMOTE_ADDR: general
         * HTTP_CF_CONNECTING_IP: Cloudflare
         * HTTP_X_FORWARDED_FOR: Google Cloud CDN, Google Load-balancer, AWS.
         * HTTP_X_FORWARDED_HOST: KeyCDN, or other CDN providers not listed here.
         */
        $key = array_search(true, $ipSourceType);
        $ip = $serverParams[$key];

        if (empty($ip)) {

            // @codeCoverageIgnoreStart
            throw new RuntimeException(
                'IP source is not set correctly.'
            );
            // @codeCoverageIgnoreEnd
        }

        $this->kernel->setIp($ip);
    }

    /**
     * Set deny attempts.
     *
     * @return void
     */
    protected function setupDenyTooManyAttempts(): void
    {
        $setting = $this->getOption('failed_attempts_in_a_row', 'events');

        $this->kernel->setProperty(
            'deny_attempt_enable',
            [
                'data_circle'     => $setting['data_circle']['enable'],     // false   
                'system_firewall' => $setting['system_firewall']['enable'], // false   
            ]
        );

        $this->kernel->setProperty(
            'deny_attempt_buffer',
            [
                'data_circle'     => $setting['data_circle']['buffer'],     // 10
                'system_firewall' => $setting['system_firewall']['buffer'], // 10
            ]
        );

        // Check the time of the last failed attempt.
        $recordAttempt = $this->getOption('record_attempt');

        $this->kernel->setProperty(
            'record_attempt_detection_period',
            $recordAttempt['detection_period'] // 5
        ); 

        $this->kernel->setProperty(
            'reset_attempt_counter',
            $recordAttempt['time_to_reset'] // 1800
        );  
    }

    /**
     * Set iptables working folder.
     *
     * @return void
     */
    protected function setupiptablesBridgeDirectory(): void
    {
        $iptablesSetting = $this->getOption('config', 'iptables');

        $this->kernel->setProperty(
            'iptables_watching_folder',
            $iptablesSetting['watching_folder']
        );
    }

    /**
     * Set the online session limit.
     *
     * @return void
     */
    protected function setupLimitSession(): void
    {
        $sessionLimitSetting = $this->getOption('online_session_limit');

        if ($sessionLimitSetting['enable']) {

            $onlineUsers = $sessionLimitSetting['config']['count'];       // default: 100
            $alivePeriod = $sessionLimitSetting['config']['period'];      // default: 300
            $isUniqueIp  = $sessionLimitSetting['config']['unique_only']; // false

            $this->kernel->limitSession($onlineUsers, $alivePeriod, $isUniqueIp);
        }
    }

    /**
     * Set the cron job.
     * This is triggered by the pageviews, not system cron job.
     *
     * @return void
     */
    protected function setupCronJob(): void 
    {
        $cronjobSetting = $this->getOption('reset_circle', 'cronjob');

        if ($cronjobSetting['enable']) {

            $nowTime = time();

            $lastResetTime = $cronjobSetting['config']['last_update'];

            if (!empty($lastResetTime) ) {
                $lastResetTime = strtotime($lastResetTime);
            } else {
                // @codeCoverageIgnoreStart

                $lastResetTime = strtotime(date('Y-m-d 00:00:00'));

                // @codeCoverageIgnoreEnd
            }

            if (($nowTime - $lastResetTime) > $cronjobSetting['config']['period']) {

                $updateResetTime = date('Y-m-d 00:00:00');

                // Update new reset time.
                $this->setConfig(
                    'cronjob.reset_circle.config.last_update',
                    $updateResetTime
                );

                $this->updateConfig();

                // Remove all logs.
                /** @scrutinizer ignore-call */ 
                $this->kernel->driver->rebuild();
            }
        }
    }

    /**
     * Set the URLs that want to be excluded from Shieldon protection.
     *
     * @return void
     */
    protected function setupExcludedUrls(): void
    {
        $excludedUrls = $this->getOption('excluded_urls');

        if (!empty($excludedUrls)) {
            $list = array_column($excludedUrls, 'url');

            $this->kernel->setExcludedList($list);
        }
    }

    /**
     * WWW-Athentication.
     *
     * @return void
     */
    protected function setupPageAuthentication(): void
    {
        $authenticateList = $this->getOption('www_authenticate');

        if (is_array($authenticateList)) {
            $this->add(
                new HttpAuthentication($authenticateList)
            );
        }
    }

    /**
     * Set dialog UI.
     *
     * @return void
     */
    protected function setupDialogUserInterface()
    {
        Event::AddListener('session_init',
            function() {
                $ui = $this->getOption('dialog_ui');

                if (!empty($ui)) {
                    get_session_instance()->set('shieldon_ui_lang', $ui['lang']);
                    $this->kernel->setDialog($this->getOption('dialog_ui'));
                }
            }
        );
    }
}
