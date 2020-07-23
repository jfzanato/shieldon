<?php

return [

    'reason_manual_ban' => '被管理員手動加入。',
    'reason_is_search_engine' => '搜尋引擎機器人。',
    'reason_is_google' => 'Google 機器人。',
    'reason_is_bing' => 'Bing 機器人。',
    'reason_is_yahoo' => 'Yahoo 機器人。',
    'reason_too_many_sessions' => '太多工作階段。',
    'reason_too_many_accesses' => '太多連線。',
    'reason_empty_js_cookie' => '無法建立 JS cookie。',
    'reason_empty_referer' => '空的來源網址。',
    'reason_reached_limit_day' => '達到每日限制。',
    'reason_reached_limit_hour' => '達到每小時限制。',
    'reason_reached_limit_minute' => '達到每分限制。',
    'reason_reached_limit_second' => '達到每秒限制。',
    'reason_invalid_ip' => '無效的 IP 位址。',
    'reason_deny_ip' => '被 IP 元件拒絕。',
    'reason_allow_ip' => '由 IP 元件允許。',
    'reason_component_ip' => '被 IP 元件拒絕。',
    'reason_component_rdns' => '被 RDNS 元件拒絕。',
    'reason_component_header' => '被標頭元件拒絕。',
    'reason_component_useragent' => '被用戶代理元件拒絕。',
    'reason_component_trusted_robot' => '被辨識為假造搜尋引擎資訊。',

    // Menu
    'nav_locale' => '語系',
    'menu_firewall' => '防火牆',
    'menu_status' => '狀態',
    'menu_overview' => '總覽',
    'menu_settings' => '設定',
    'menu_ip_manager' => 'IP 管理器',
    'menu_xss_protection' => 'XSS 防護',
    'menu_authentication' => '網頁認證',
    'menu_exclusion' => '例外清單',
    'menu_last_month' => '上月',
    'menu_this_month' => '本月',
    'menu_last_7_days' => '過去 7 日',
    'menu_yesterday' => '昨日',
    'menu_today' => '今天',
    'menu_ip_filter_logs' => '過濾器記錄',
    'menu_ip_rules' => 'IP 規則',
    'menu_sessions' => '工作階段',
    'menu_action_logs' => '動作記錄',
    'menu_data_circle' => '資料週期',
    'menu_operation_status' => '運行狀態',
    'menu_iptables_manager' => '管理器',
    'menu_iptables_status' => '狀態',
    'menu_messenger' => '通訊器',

    // Message
    'error_mysql_connection' => '無法連接您的 MySQL 資料庫，請檢查設定值。',
    'error_mysql_driver_not_supported' => '您的系統不支援 MySQL 驅動器。',
    'error_sqlite_driver_not_supported' => '您的系統不支援 SQLite 驅動器。',
    'error_sqlite_directory_not_writable' => 'SQLite 資料驅動器需要儲存目錄可寫入。',
    'error_redis_driver_not_supported' => '您的系統不支援 Redis 驅動器。',
    'error_file_directory_not_writable' => '檔案資料驅動器需要儲存目錄可寫入。',
    'error_logger_directory_not_writable' => '動作記錄器需要儲存目錄可寫入。',
    'error_invalid_json_file' => '無效的 JSON 檔。',
    'error_invalid_config_file' => '無效的 Shieldon 組態檔案。',
    'success_settings_saved' => '設定值已儲存。',
    'success_json_imported' => 'JSON 資料匯入成功。',

    // Others.
    'field_not_visible' => '無法在示範模式檢視此欄位。',
    'permission_required' => '需要權限。',

    // Header status bar.
    'channel' => '頻道',
    'mode' => '模式',
    'logout' => '登出',

    // Setting - authentication page.
    'auth_heading' => '認證方式',
    'auth_description' => '回應頭部字段 HTTP WWW-Authenticate 定義了獲取對資源的連接權限應該被使用的認證方式。',
    'auth_label_url_path' => '網址路徑',
    'auth_label_username' => '使用者',
    'auth_label_password' => '密碼',
    'auth_btn_submit' => '送出',
    'auth_label_encrypted' => '已加密',
    'auth_label_remove' => '移除',

    // Setting - exclusion page.
    'excl_heading' => '例外清單',
    'excl_description' => '請輸入要排除掉 Shieldon 保護的開頭網址。',

    // IP Manager
    'ipma_heading' => 'IP 管理器',
    'ipma_description' => 'IP 管理器不像規格表 (效期取決於資料週期)，任何動作都是永久性的。',
    'ipma_label_ip' => 'IP',
    'ipma_label_order' => '順序',
    'ipma_label_rule' => '規則',
    'ipma_label_action' => '動作',
    'ipma_label_plz_select' => '請選擇',
    'ipma_label_remove_ip' => '移除這個 IP',
    'ipma_label_allow_ip' => '允許這個 IP',
    'ipma_label_deny_ip' => '拒絕這個 IP',

    // Log
    'log_heading_captchas' => 'CAPTCHA 驗證',
    'log_heading_pageviews' => '網頁檢視數',
    'log_note_captcha_last_month' => 'CAPTCHA 上月份統計',
    'log_note_pageview_last_month' => '上月份總網頁檢視數',
    'log_note_captcha_last_7_days' => 'CAPTCHA 過去 7 日統計',
    'log_note_pageview_last_7_days' => '過去 7 日網頁檢視總數',
    'log_note_pageview_this_month' => '本月份網頁檢視總數',
    'log_note_captcha_this_month' => 'CAPTCHA 本月份統計',
    'log_note_captcha_today' => 'CAPTCHA 今日統計',
    'log_note_pageview_today' => '今日網頁檢視總數',
    'log_note_pageview_yesterday' => '昨日網頁檢視總數',
    'log_note_captcha_yesterday' => 'CAPTCHA 昨日統計',

    'log_label_last_month' => '上月',
    'log_label_this_month' => '本月',
    'log_label_last_7_days' => '過去 7 日',
    'log_label_yesterday' => '昨日',
    'log_label_today' => '今日',
    'log_msg_no_logger' => '不好意思，您必須執行動作記錄器才能使用這個功能。',
    'log_label_in_queue' => '排隊中',
    'log_label_in_blacklist' => '在黑名單中',
    'log_label_captcha' => 'CAPTCHA 驗證',
    'log_label_pageviews' => '網頁檢視',
    'log_label_session' => '工作階段',
    'log_label_solved' => '已解決',
    'log_label_failed' => '已失敗',
    'log_label_displays' => '顯示次數',
    'log_label_timezone' => '時區',
    'log_label_cache_time' => '報告產生時間',

    // Overview
    'overview_heading_data_circle' => '資料週期',
    'overview_label_mysql' => 'MySQL',
    'overview_text_rows' => 'rows',
    'overview_note_sql_db' => 'SQL 資料庫。',
    'overview_note_memory_db' =>  '使用記憶體的資料庫。',
    'overview_label_redis' => 'Redis',
    'overview_btn_close' => '關閉',
    'overview_btn_save' => '儲存',
    'overview_note_image_captcha' => '一個簡易型的文字圖片 CAPTCHA 驗證。',
    'overview_label_image_captcha' => '圖片 CAPTCHA 驗證',
    'overview_note_recaptcha' => '此功能服務由 Google 提供。',
    'overview_label_recaptcha' => 'reCAPTCHA',
    'overview_heading_captcha' => 'CAPTCHA 驗證模組',
    'overview_note_action_logger' => '記錄每一位訪客的行為。',
    'overview_label_action_logger' => '動作記錄器',
    'overview_heading_logger' => '記錄器',
    'overview_text_since' => '自',
    'overview_text_days' => '天',
    'overview_text_size' => '尺寸',
    'overview_note_useragent' => '分析來自訪客的 User-agent 資訊。',
    'overview_label_useragent' => '使用者代理',
    'overview_note_rdns' => '識別來自訪客的 IP 反查主機名稱 (RDNS)。',
    'overview_label_rdns' => 'RDNS',
    'overview_note_header' => '分析來自訪客的頭部字段資訊。',
    'overview_label_header' => '頭部字段',
    'overview_note_trustedbot' => '允許受歡迎的搜尋引擎檢索您的網站',
    'overview_label_trustedbot' => '信賴的機器人',
    'overview_note_ip' => '進階的 IP 位址管理功能。',
    'overview_label_ip' => 'IP',
    'overview_heading_components' => '元件',
    'overview_note_referer' => '檢查 HTTP 來源網址資訊。',
    'overview_label_referer' => '來源網址',
    'overview_note_frequency' => '檢查訪客有多頻繁檢閱網頁。',
    'overview_label_frequency' => '頻率',
    'overview_note_session' => '偵測是否多個工作階段由同一位訪客產生。',
    'overview_label_session' => '工作階段',
    'overview_note_cookie' => '檢查是否訪客可藉由 JavaScript 產生 cookie。',
    'overview_label_cookie' => 'Cookie',
    'overview_heading_filters' => '過濾器',
    'overview_label_sqlite' => 'SQLite',
    'overview_note_file_system' => '檔案系統。',
    'overview_label_file' => '檔案',
    'overview_reset_data_circle' => '重設資料週期',
    'overview_reset_action_logs' => '重設訪客動作記錄',
    'overview_thread_rows' => '列',
    'overview_thread_table' => '表',
    'overview_text_reset_data_circle_1' => '您想要重設當前的資料週期嗎？',
    'overview_text_reset_data_circle_2' => '進行這個動作將會移除所有目前資料週期的記錄，以及重建資料表。',
    'overview_text_reset_action_logs' => '您想要重設當前的訪客動作記錄嗎？',
    'overview_heading_messenger' => '通訊器模組',
    'overview_label_telegram' => 'Telegram',
    'overview_note_telegram' => '傳送通知到您的 Telegram 頻道。',
    'overview_label_linenotify' => 'Line Notify',
    'overview_note_linenotify' => '傳送通知到您的 Line 群組。',
    'overview_label_sendgrid' => 'SendGrid',
    'overview_note_sendgrid' => '透過 SendGrid API 傳送通知到您的 Email。',
    'overview_label_slack' => 'Slack',
    'overview_note_slack' => '透過 Slack API 傳送通知到您的 Slack 頻道。',
    'overview_label_slackwebhook' => 'Slack Webhook',
    'overview_note_slackwebhook' => '透過 Slack Webhook 傳送通知到您的 Slack 頻道。',
    'overview_label_mailgun' => 'MailGun',
    'overview_note_mailgun' => '透過 MailGun API 傳送通知到您的 Email。',
    'overview_label_smtp' => 'SMTP',
    'overview_note_smtp' => '透過 SMTP 伺服器傳送通知到您的 Email。',
    'overview_label_rocketchat' => 'RocketChat',
    'overview_note_rocketchat' => '傳送通知到您的 RocketChat 頻道。',
    'overview_label_mail' => 'Mail',
    'overview_note_mail' => '透過原生的 PHP 函式傳送通知到您的 Email。',

    // IP log table.
    'table_heading_ip_log' => 'IP 記錄表',
    'table_description_ip_log_1' => '這裡是 Shieldon 記錄使用者們行為有異的地方。',
    'table_description_ip_log_2' => '所有過程是自動化且即時性的，您可以忽略。',
    'table_description_ip_log_3' => 'IP 記錄表在新的資料週期開始後會被清除。',
    'table_label_resolved_hostname' => '反解主機名稱',
    'table_label_last_visit' => '上次造訪',
    'table_label_flags' => '旗標',

    // Rule table.
    'table_heading_rule' => '規則表',
    'table_description_rule_1' => '這是 Shieldon 在目前的資料週期內，暫時性地允許或拒絕使用者的地方。',
    'table_description_rule_2' => '所有過程是自動化且即時性的，您可以忽略。',
    'table_description_rule_3' => '規則表在新的資料週期開始時將會被重設。',
    'table_label_deny_ip_temporarily' => '暫時性地拒絕此 IP',
    'table_label_deny_ip_permanently' => '永久性地拒絕此 IP',
    'table_ip_placeholder' => '請填進一個 IP 位址',
    'table_label_type' => '類型',
    'table_label_reason' => '理由',
    'table_label_time' => '時間',
    'table_label_remove' => '移除',

    // Session table.
    'table_heading_session' => '工作階段表',
    'table_label_remain_seconds' => '剩餘秒數',
    'table_label_priority' => '優先權',
    'table_label_status' => '狀態',
    'table_label_session_id' => '工作階段 ID',
    'table_text_allowable' => '准許的',
    'table_text_expired' => '已失效',
    'table_text_waiting' => '等待中',
    'table_description_session_1' => '針對<strong>線上工作階段控管</strong>的即時記錄。所有過程是自動化且即時性的，您可以忽略。',
    'table_description_session_2' => '注意這個只有在您有啟用時才會運作。',
    'table_heading_limit' => '限制',
    'table_note_limit' => '線上工作階段限制',
    'table_heading_period' => '期間',
    'table_note_period' => '存續期間。 (分鐘)',
    'table_heading_online' => '線上',
    'table_note_online' => '線上工作階段限制。',

    // Xss protection.
    'xss_heading' => 'XSS 防護',
    'xss_description' => '預防跨站腳本攻擊。',
    'xss_label_variable' => '變數',
    'xss_text_eradicate_injection' => '針對單一變數消除潛在的注入字串。',
    'xss_label_single_variable' => '單一變數',
    'xss_label_variable_name' => '變數名稱',
    'xss_text_update_above_settings' => '更新以上設定值。',
    'xss_text_filter_cookie_variables' => '過濾全部 COOKIE 型態的變數。',
    'xss_text_filter_get_variables' => '過濾全部 GET 型態的變數。',
    'xss_text_filter_post_variables' => '過濾全部 POST 型態的變數。',

    // Tab
    'tab_heading_adminlogin' => '管理登入',
    'tab_heading_dialogui' => '對話框介面',
    'tab_heading_captchas' => 'CAPTCHA 驗證',
    'tab_heading_filters' => '過濾器',
    'tab_heading_components' => '元件',
    'tab_heading_daemon' => '守護進程',

    // Setting - admin login.
    'setting_heading_adminlogin' => ' 管理登入',
    'setting_label_last_modified' => '最近一次修改',
    'setting_label_password' => '密碼',
    'setting_label_user' => '使用者',

    // Setting - captcha.
    'setting_heading_recaptcha' => 'reCAPTCHA　驗證',
    'setting_label_recaptcha_key' => '網站金鑰',
    'setting_note_recaptcha_key' => '輸入您的網站的 Google reCaptcha 網站金鑰。',
    'setting_label_recaptcha_secret' => '密鑰',
    'setting_note_recaptcha_secret' => '輸入您的網站的 Google reCaptcha 密鑰。',
    'setting_label_recaptcha_version' => '版本',
    'setting_note_recaptcha_version' => '請輸入相對應版本的金鑰否則無法正常運作。',
    'setting_label_recaptcha_lang' => '語言代碼',
    'setting_note_recaptcha_lang' => 'ISO 639 - ISO 3166 代碼。舉例，zh-TW 代表台灣的繁體中文。',
    'setting_note_image_captcha_1' => '混合數字及英文小寫字母及大寫英文字母的字串。',
    'setting_note_image_captcha_2' => '只有小寫英文字母及大寫英文字母的字串。',
    'setting_note_image_captcha_3' => '只有數字型字串。',
    'setting_note_image_captcha_length' => '您想顯示多少字元長度的 CAPTCHA 驗證？',
    'setting_label_length' => '長度',
    'setting_heading_image_captcha' => '圖片型 CAPTCHA 驗證',

    // Setting - component.
    'setting_heading_component_ip' => 'IP',
    'setting_note_component_ip' => '通過啟用此選項來啟動 IP 管理器。',
    'setting_heading_component_tb' => '信任的機器人',
    'setting_note_component_tb_1' => '允許受歡迎的搜尋引擎檢索您的網站',
    'setting_note_component_tb_2' => '注意：把這個選項關閉將會衝擊到您的 SEO，因為機器人們將會進入檢查的程序。',
    'setting_label_strict_mode' => '嚴格模式',
    'setting_note_component_tb_3' => 'IP 反解的主機名稱和 IP 位址必須互相吻合。',
    'setting_heading_component_header' => '頭部字段',
    'setting_note_component_header_1' => '分析來自訪客的頭部字段資訊。',
    'setting_note_component_header_2' => '拒絕所有沒有常見頭部字段資訊的訪客。',
    'setting_heading_component_useragent' => '使用者代理',
    'setting_note_component_useragent_1' => '分析來自訪客的使用者代理資訊。',
    'setting_note_component_useragent_2' => '拒絕所有使用者代理資訊為空值的訪客。',
    'setting_heading_component_rdns' => '反向 DNS',
    'setting_note_component_rdns_1' => '一般而言，從電信業者配發的 IP 都會被設定 RDNS 記錄。此選項只在嚴格模式時運作。',
    'setting_note_component_rdns_2' => '
            嚴格模式封鎖訪客依照以下情況。<br />
            - IP 位址沒有 PTR 記錄。<br />
            - Ping 其 PTR 的回傳值和 IP 位址不一致。<br />
            - PTR 不是有效的 FQDN。<br />
            這個選項將封鎖幾乎全部的 Proxy 和 VPN 伺服器。而且一些 ISP 也許沒有為他們的 IP 位址提供 PTR 記錄。請小心使用。
        ',

    // Setting - daemon
    'setting_heading_enable' => '啟用',
    'setting_label_data_driver' => '資料驅動器',
    'setting_note_data_driver' => '藉由執行 Shieldon 開始保護您的網站。Shieldon 防火牆只有在這個選項啟用時才會運作。',
    'setting_label_driver_file' => '檔案系統',
    'setting_label_driver_mysql' => 'MySQL',
    'setting_label_driver_redis' => 'Redis',
    'setting_label_driver_sqlite' => 'SQLite',
    'setting_label_mysql_host' => '主機',
    'setting_label_mysql_dbname' => '資料庫名稱',
    'setting_label_mysql_user' => '使用者',
    'setting_label_mysql_password' => '密碼',
    'setting_label_mysql_charset' => '字符集',
    'setting_label_redis_host' => '主機',
    'setting_label_redis_port' => '端口',
    'setting_label_redis_auth' => '授權密碼',
    'setting_note_redis_auth' => '只有需要密碼時才必填。',
    'setting_note_driver_not_recommended' => '高流量網站不建議使用。',
    'setting_label_directory' => '目錄',
    'setting_note_directory' => '請填寫你要儲存資料的目錄的絕對路徑。',
    'setting_label_reset_data_cycle' => '重設資料週期',
    'setting_note_reset_data_cycle' => '自動地在每天 0:00 清除所有記錄。啟用這個選項能提升效能。',
    'setting_label_ip_source' => 'IP 來源',
    'setting_note_ip_source' => '您的網站在 CDN 服務背後？如果您使用 CDN，務必把這個設定值填寫正確，不然全部來自 CDN 的 IP 位址可能會被封鎖。',
    'setting_label_session_limit' => '工作階段限制',
    'setting_note_session_limit_1' => '當在線上的使用者數量達到限制範圍，其他未在隊列中的使用者必須排隊！',
    'setting_note_session_limit_2' => '以下圖片是範例。',
    'setting_label_online_limit' => '線上限制',
    'setting_note_online_limit' => '線上人數限制的最大值。',
    'setting_label_alive_period' => '存續期間',
    'setting_note_alive_period' => '單位：分鐘。',
    'setting_label_action_logs' => '動作記錄',
    'setting_label_action_logger' => '動作記錄器',
    'setting_heading_dailogui' => '對話框界面',
    'setting_label_language' => '語系',
    'setting_label_background_image' => '背景圖片',
    'setting_note_background_image' => '請加入該圖片的完整網址或相對路徑。',
    'setting_label_background_color' => '背景顏色',
    'setting_note_background_color' => '如果您不想用背景圖片的話，您可以指定一個背景顏色。',
    'setting_label_dialog_header' => '對話框頭部',
    'setting_text_for_example' => '舉例',
    'setting_label_font_color' => '字型顏色',
    'setting_label_shadow_opacity' => '陰影不透明度',
    'setting_note_shadow_opacity' => '範圍從 0 到 1，舉例來說，0.2 代表 20% 不透明度。',
    'setting_heading_filter_frequency' => '頻率',
    'setting_note_filter_frequency_1' => '不要在意人類使用者，如果他們達到限制範圍而被封鎖，他們可以藉由解決 CAPTCHA 驗證解除封鎖繼續瀏覽您的網站。',
    'setting_note_filter_frequency_2' => '以下圖片是範例。',
    'setting_label_secondly_limit' => '每秒限制',
    'setting_label_minutely_limit' => '每分鐘限制',
    'setting_label_hourly_limit' => '每小時限制',
    'setting_label_daily_limit' => '每日限制',
    'setting_note_secondly_limit' => '每秒鐘每位使用者可檢視的網頁數量。',
    'setting_note_minutely_limit' => '每分鐘每位使用者可檢視的網頁數量。',
    'setting_note_hourly_limit' => '每小時每位使用者可檢視的網頁數量。',
    'setting_note_daily_limit' => '每天每位使用者可檢視的網頁數量。',
    'setting_label_filter_cookie' => 'Cookie',
    'setting_label_filter_session' => '工作階段',
    'setting_note_filter_session' => '偵測是否多個工作階段由同一位訪客產生。',
    'setting_label_filter_referer' => '來源網址',
    'setting_note_filter_referer' => '檢查 HTTP 來源網址資訊。',
    'setting_label_quota' => '額度',
    'setting_note_quota' => '訪可在達到限制時將會被暫時地封鎖。',
    'setting_label_buffered_time' => '緩衝的時間',
    'setting_note_buffered_time' => '在第一次造訪您的網站的 n 秒後開始使用這個過濾器。',
    'setting_label_cookie_name' => 'Cookie 名',
    'setting_note_cookie_name' => '只限英文字元。',
    'setting_label_cookie_value' => 'Cookie 值',
    'setting_label_cookie_domain' => 'Cookie 域名',
    'setting_text_leave_blank' => '只要留空即套用預設值。',

    'setting_heading_deny_attempts' => '拒決多次嘗試',
    'setting_desc_deny_attempts' => '和意圖不軌的訪客說再見。',
    'setting_label_system_firewall' => '系統防火牆',
    'setting_note_install_iptables' => '確定您已經安裝 <strong>iptables</strong> 以及 <strong>ip6tables</strong> 在您的伺服器中，而且在 <strong>crontab</strong> 中正確地採用 <strong>iptables_bridge.sh</strong>。',
    'setting_label_watching_folder' => '監視資料夾',
    'setting_label_cronjob' => '系統排程',
    'setting_note_cronjob' => '請使用這段程式碼到您的伺服器中的 crontab 檔案。',
    'setting_note_iptables' => '<strong>iptables_bridge.sh</strong> 將會監視在此資料夾中的變化來套用指令到 iptables 裡。',
    'setting_label_deny_attempt_buffer' => '緩衝',
    'setting_desc_deny_attempt_buffer' => '連續多少次錯誤會觸發此事件。',
    'setting_label_record_attempt_detection_period' => '偵測期間',
    'setting_desc_record_attempt_detection_period' => '檢查現在和上次嘗試失敗的時間差。在時間差以內的失敗嘗試會被記錄。越大的數值表示越加嚴格。（單位：秒數）',
    'setting_label_record_attempt_reset' => '重設',
    'setting_desc_record_attempt_reset' => '在 n 秒後重設計數器。',
    'setting_button_choose_file' => '選擇檔案',
    'setting_note_import' => '請選擇先前匯出的 .json 檔。',
    'setting_button_export' => '匯出',
    'setting_button_import' => '匯入',

    // Messenger
    'messenger_heading_events' => '事件',
    'messenger_desc_events' => '什麼事件是在發生的當下，你想從即時通訊模組接收通知。',
    'messenger_label_event_1' => '在當前的資料週期中永久地封鎖一位使用者。',
    'messenger_desc_event_1' => '這個事件通常在當一位使用者連續錯誤驗證太多次時發生。',
    'messenger_label_event_2' => '在系統防火牆中永久地封鎖一位使用者。',
    'messenger_desc_event_2' => '這個事件通常在當一位使用者已經在資料週期中被永久性的封鎖，還連續地不斷嘗試連接，可清楚地辨識出他們是惡意的機器人。',
    'messenger_desc_event_3' => '這個選項只有在系統層防火牆正確地設定才會生效。',
    'messenger_heading_telegram' => 'Telegram',
    'messenger_label_api_key' => 'API 金鑰',
    'messenger_label_channel' => '頻道',
    'messenger_heading_linenotify' => 'Line Notify',
    'messenger_label_access_token' => '連接權杖',
    'messenger_heading_sendgrid' => 'SendGrid',
    'messenger_label_sender' => '發信人',
    'messenger_label_recipients' => '收件人',
    'messenger_label_host' => '主機',
    'messenger_label_port' => '端口',
    'messenger_label_user' => '使用者',
    'messenger_label_pass' => '密碼',
    'messenger_label_type' => '類型',
    'messenger_heading_mailgun' => 'MailGun',
    'messenger_heading_smtp' => 'SMTP',
    'messenger_heading_php_mail' => '原生 PHP 寄信函式',
    'messenger_label_webhook_url' => 'Webhook URL',
    'messenger_label_bot_token' => 'Bot Token',
    'messenger_heading_slack' => 'Slack',
    'messenger_heading_slack_webhook' => 'Slack Webhook',
    'messenger_heading_rocket_chat' => 'Rocket Chat',
    'messenger_label_server_url' => '伺服器網址',

    'tab_heading_events' => '事件',
    'tab_heading_modules' => '模組',
    'tab_heading_iptables_status' => '狀態',

    'error_ip6tables_directory_not_writable' => 'iptables 監視資料夾需要儲存目錄是可寫入狀態。',

    'iptable_heading' => 'Iptables 管理器',
    'iptable_description_1' => '這是 <strong>iptables</strong> 的網站介面，請小心地使用此功能。',
    'iptable_description_2' => '您只可以管理連線進來的請求。',
    'iptable_description_3' => '在您重開機您的伺服器後，在這裡的規則將會被清除。使用 <strong>iptables-save</strong> 指令保存規則',
    'ip6table_description_1' => '這是 <strong>ip6tables</strong> 的網站介面，請小心地使用此功能。',
    'ip6table_description_2' => '您只可以管理連線進來的請求。',
    'ip6table_description_3' => '在您重開機您的伺服器後，在這裡的規則將會被清除。使用 <strong>ip6tables-save</strong> 指令保存規則',
    'iptables_label_subnet' => '子網路',
    'iptables_label_port' => '端口',
    'iptables_label_port_custom' => '自訂',
    'iptables_label_protocol' => '通訊協議',
    'iptables_label_protocol_all' => '全部',
    'iptables_label_protocol_tcp' => 'TCP',
    'iptables_label_protocol_udp' => 'UDP',
    'iptables_label_action_allow' => '允許',
    'iptables_label_action_deny' => '拒絕',
    
    'iptable_status_description' => '以下文字是指令 <code>iptables -L</code> 產生的結果。',
    'ip6table_status_description' => '以下文字是指令 <code>ip6tables -L</code> 產生的結果。',

    'reset_data_circle' => '資料週期表已經被重新設定。',
    'reset_action_logs' => '訪客動作記錄已經被清除。',

    'operation_note_useragent' => '阻擋沒有使用者代理資訊的請求。',
    'operation_note_rdns' => '阻擋沒有 RDNS 記錄的請求。',
    'operation_note_header' => '阻擋沒有常見的檔頭資訊的請求。',
    'operation_note_trustedbot' => '阻擋被標記為偽造的搜尋引擎的請求。',
    'operation_note_ip' => '阻擋被設定在 IP 管理器的請求。',

    'login_heading_login' => '登入防火牆面板。',
    'login_btn_login' => '登入',
    'login_message_invalid_captcha' => '無效的驗證碼',
    'login_message_invalid_user_or_pass' => '無效的使用者名稱或密碼。',
    
    'test_msg_title' => '測試訊息來自主機: ',
    'test_msg_body' => '通訊器模組 {0} 已被測試且確認成功。',
];
