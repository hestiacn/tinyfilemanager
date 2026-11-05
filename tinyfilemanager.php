<?php
//Default Configuration
$CONFIG = '{"error_reporting":false,"show_hidden":false,"hide_Cols":true,"enable_paging":false,"show_beian":false,"site_title":"","icp":"","police":"","logo_path":"","favicon_path":"","footer_start_year":"2017"}';

/**
 * H3K ~ Tiny File Manager V2.6
 * @author CCP Programmers
 * @email ccpprogrammers@gmail.com
 * @github https://github.com/prasathmani/tinyfilemanager
 * @link https://tinyfilemanager.github.io
 */

//TFM version
define('VERSION', '2.6');

//Application Title
define('APP_TITLE', 'Tiny File Manager');

// --- EDIT BELOW CONFIGURATION CAREFULLY ---

// Auth with login/password
// set true/false to enable/disable it
// Is independent from IP white- and blacklisting
$use_auth = true;

// Login user name and password
// Users: array('Username' => 'Password', 'Username2' => 'Password2', ...)
// Generate secure password hash - https://tinyfilemanager.github.io/docs/pwd.html
$auth_users = array(
    'admin' => '$2y$10$/K.hjNr84lLNDt8fTXjoI.DBp6PpeyoJ.mGwrrLuCZfAwfSAGqhOW', //admin@123
    'user' => '$2y$12$Bd.aZ8MiHjPeEx9AgsTJX.uwTYjKgiU3FxH6ZITwjdkN66z/MxRuu', //user@123
    'guest' => '$2y$12$nAIxiEo8Nfz.42ZdEThDPetIAZaEZBUKzZZDB7rvyFaJn6Vge.yX2' //guest
);

// Readonly users
// e.g. array('users', 'guest', ...)
$readonly_users = array(
    'user',
    'guest'
);

// Global readonly, including when auth is not being used
$global_readonly = false;

// user specific directories
// array('Username' => 'Directory path', 'Username2' => 'Directory path', ...)
$directories_users = array(
'user' => 'root/user',	
'guest' => 'root/guest'
);

// Enable highlight.js (https://highlightjs.org/) on view's page
$use_highlightjs = true;

// highlight.js style
// for dark theme use 'ir-black'
$highlightjs_style = 'github-dark';

// Enable ace.js (https://ace.c9.io/) on view's page
$edit_files = true;

// Default timezone for date() and time()
// Doc - http://php.net/manual/en/timezones.php
$default_tz = ini_get('date.timezone') ?: 'Etc/UTC';
define('FM_TIMEZONE', !empty($cfg->data['timezone']) ? $cfg->data['timezone'] : $default_tz);
date_default_timezone_set(FM_TIMEZONE);

// Root path for file manager
// use absolute path of directory i.e: '/var/www/folder' or $_SERVER['DOCUMENT_ROOT'].'/folder'
//make sure update $root_url in next section
$root_path = $_SERVER['DOCUMENT_ROOT'];

// Root url for links in file manager.Relative to $http_host. Variants: '', 'path/to/subfolder'
// Will not working if $root_path will be outside of server document root
$root_url = '';

// Server hostname. Can set manually if wrong
// $_SERVER['HTTP_HOST'].'/folder'
$http_host = $_SERVER['HTTP_HOST'];

// input encoding for iconv
$iconv_input_encoding = 'UTF-8';

// date() format for file modification date
// Doc - https://www.php.net/manual/en/function.date.php
// NOTE: now taken from translation key 'DateTimeFormat' (see FM_DATETIME_FORMAT below).
// The line below is kept as a reference for the old default.
//$datetime_format = 'm/d/Y g:i A';

// Path display mode when viewing file information
// 'full' => show full path
// 'relative' => show path relative to root_path
// 'host' => show path on the host
$path_display_mode = 'relative';

// Allowed file extensions for create and rename files
// e.g. 'txt,html,css,js'
$allowed_file_extensions = '';

// Allowed file extensions for upload files
// e.g. 'gif,png,jpg,html,txt'
$allowed_upload_extensions = 'gif,ico,png,jpg,jpeg,webp,txt,pdf,zip,rar,tar,tgz,gz,md,mp3,mp4,swf,doc,docx,xls,xlsx,ppt,pptx';

// Favicon path. This can be either a full url to an .PNG image, or a path based on the document root.
// full path, e.g http://example.com/favicon.png
// local path, e.g images/icons/favicon.png
$favicon_path = 'https://cdn.jsdelivr.net/gh/hestiacn/tinyfilemanager@master/assets/icons/favicon.png';

// Files and folders to excluded from listing
// e.g. array('myfile.html', 'personal-folder', '*.php', '/path/to/folder', ...)
$exclude_items = array(
'.trash',
'assets',
'images',
'index.php',
'.audit.log',
'translation.json',
);

// Online office Docs Viewer
// Available rules are 'google', 'microsoft' or false
// Google => View documents using Google Docs Viewer
// Microsoft => View documents using Microsoft Web Apps Viewer
// false => disable online doc viewer
$online_viewer = 'google';

// Sticky Nav bar
// true => enable sticky header
// false => disable sticky header
$sticky_navbar = true;

// Maximum file upload size
// Increase the following values in php.ini to work properly
// memory_limit, upload_max_filesize, post_max_size
$max_upload_size_bytes = 5000000000; // size 5,000,000,000 bytes (~5GB)

// chunk size used for upload
// eg. decrease to 1MB if nginx reports problem 413 entity too large
$upload_chunk_size_bytes = 2000000; // chunk size 2,000,000 bytes (~2MB)

// Possible rules are 'OFF', 'AND' or 'OR'
// OFF => Don't check connection IP, defaults to OFF
// AND => Connection must be on the whitelist, and not on the blacklist
// OR => Connection must be on the whitelist, or not on the blacklist
$ip_ruleset = 'OFF';

// Should users be notified of their block?
$ip_silent = true;

// IP-addresses, both ipv4 and ipv6
$ip_whitelist = array(
    '127.0.0.1',    // local ipv4
    '::1'           // local ipv6
);

// IP-addresses, both ipv4 and ipv6
$ip_blacklist = array(
    '0.0.0.0',      // non-routable meta ipv4
    '::'            // non-routable meta ipv6
);

// extension => language for advanced editor
$ext_language = array(
    'js' => 'javascript',
    'ts' => 'typescript',
    'py' => 'python',
    'c' => 'c_cpp',
    'h' => 'c_cpp',
    'cpp' => 'c_cpp',
    'hpp' => 'c_cpp',
    'rs' => 'rust',
    'yml' => 'yaml',
    'bat' => 'batchfile',
    'go' => 'golang',
    'md' => 'markdown',
    'hbs' => 'handlebars',
    'cs' => 'csharp',
    'ps1' => 'powershell',
    'htm' => 'html',
    'htaccess' => 'apache_conf',
);

// if User has the external config file, try to use it to override the default config above [config.php]
// sample config - https://tinyfilemanager.github.io/config-sample.txt
$config_file = __DIR__.'/config.php';
if (is_readable($config_file)) {
    @include($config_file);
}

define('ACE_FONTSIZE', isset($ace_fontsize) ? $ace_fontsize : 12);
define('ACE_THEME', isset($ace_theme) ? $ace_theme : 'textmate');

// External CDN resources that can be used in the HTML (replace for GDPR compliance)
$lang = $lang ?? 'en';
$is_rtl = in_array(strtolower($lang), ['ar', 'he', 'fa', 'ur']);

$external = array(
    'css-bootstrap' => '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/' . ($is_rtl ? 'bootstrap.rtl.min.css' : 'bootstrap.min.css') . '" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">',
    'css-dropzone' => '<link href="https://cdn.jsdelivr.net/npm/dropzone@6.3.5/dist/dropzone.min.css" rel="stylesheet">',
    'css-font-awesome' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" crossorigin="anonymous">',
    'css-highlightjs' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.12.0/styles/' . $highlightjs_style . '.min.css">',
    'js-ace' => '<script src="https://cdn.jsdelivr.net/npm/ace-builds@1.45.2/src-min-noconflict/ace.js"></script>',
    'js-bootstrap' => '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>',
    'js-dropzone' => '<script src="https://cdn.jsdelivr.net/npm/dropzone@6.3.5/dist/dropzone-min.js"></script>',
    'js-jquery' => '<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>',
    'js-jquery-datatables' => '<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" crossorigin="anonymous" defer></script>',
    'js-marked' => '<script src="https://cdn.jsdelivr.net/npm/marked/lib/marked.umd.min.js"></script>',
    'js-highlightjs' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.12.0/highlight.min.js"></script>',
    'pre-jsdelivr' => '<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin/><link rel="dns-prefetch" href="https://cdn.jsdelivr.net"/>',
    'pre-cloudflare' => '<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin/><link rel="dns-prefetch" href="https://cdnjs.cloudflare.com"/>'
);

// --- EDIT BELOW CAREFULLY OR DO NOT EDIT AT ALL ---

// max upload file size
define('MAX_UPLOAD_SIZE', $max_upload_size_bytes);

// upload chunk size
define('UPLOAD_CHUNK_SIZE', $upload_chunk_size_bytes);

// private key and session name to store to the session
if (!defined('FM_SESSION_ID')) {
    define('FM_SESSION_ID', 'filemanager');
}

// Configuration
$cfg = new FM_Config();

// Browser language alias mapping
$lang_aliases = [
    'sr-rs'   => 'sr',
    'sr-latn' => 'sr',
    'hr-hr'   => 'hr',
    'bs'      => 'hr', 
    'gr'      => 'el',
    'en-us'   => 'en',
    'en-gb'   => 'en',
    'en-au'   => 'en',
    'en-ca'   => 'en-CA', 
    'en-nz'   => 'en',
    'en-ie'   => 'en',
    'en-in'   => 'en',
    'en-za'   => 'en',
    'cz'      => 'cs',
    'fr-fr'   => 'fr',
    'fr-ca'   => 'fr',
    'pt'      => 'pt-BR',
    'pt-pt'   => 'pt-PT',
    'pt_br'   => 'pt-BR',
    'pt_pt'   => 'pt-PT',
    'tl'      => 'fil',
    'tl-ph'   => 'fil',
    'fil-ph'  => 'fil',
    'mn'      => 'mn-MN',
    'mn_mn'   => 'mn-MN',
    'zh'      => 'zh-CN',
    'zh-cn'   => 'zh-CN',
    'zh-hans' => 'zh-CN',
    'zh-sg'   => 'zh-CN',
    'zh-tw'   => 'zh-TW',
    'zh-hant' => 'zh-TW',
    'zh-hk'   => 'zh-TW',
    'zh-mo'   => 'zh-TW',
    'en_us'   => 'en',
    'en_gb'   => 'en',
    'en_ca'   => 'en-CA',
    'zh_cn'   => 'zh-CN',
    'zh_tw'   => 'zh-TW',
    'zh_hk'   => 'zh-TW',
    'pt_br'   => 'pt-BR',
    'pt_pt'   => 'pt-PT',
];

// Default language
fm_get_translations([]);
$supported_langs = array_keys($lang_list);
if (!in_array('en', $supported_langs, true)) {
    $supported_langs[] = 'en';
}
$preferred = isset($_COOKIE['fm-lang']) ? $_COOKIE['fm-lang'] : '';
if ($preferred !== '' && in_array($preferred, $supported_langs, true)) {
    $lang = $preferred;
} else {
    $lang = fm_get_browser_language($supported_langs, 'en');
}
// Show or hide files and folders that starts with a dot
$show_hidden_files = isset($cfg->data['show_hidden']) ? $cfg->data['show_hidden'] : true;

// PHP error reporting - false = Turns off Errors, true = Turns on Errors
$report_errors = isset($cfg->data['error_reporting']) ? $cfg->data['error_reporting'] : true;

// Hide Permissions and Owner cols in file-listing
$hide_Cols = isset($cfg->data['hide_Cols']) ? $cfg->data['hide_Cols'] : true;

// Theme
$theme = isset($cfg->data['theme']) ? $cfg->data['theme'] : 'light';

define('FM_THEME', $theme);

//available languages
$lang_list = array(
    'en' => 'English'
);

if ($report_errors == true) {
    @ini_set('error_reporting', E_ALL);
    @ini_set('display_errors', 1);
} else {
    @ini_set('error_reporting', E_ALL);
    @ini_set('display_errors', 0);
}

// if fm included
if (defined('FM_EMBED')) {
    $use_auth = false;
    $sticky_navbar = false;
} else {
    @set_time_limit(600);
    $user_tz = isset($_COOKIE['fm-timezone']) ? $_COOKIE['fm-timezone'] : '';
    if ($user_tz !== '' && in_array($user_tz, timezone_identifiers_list())) {
        $default_timezone = $user_tz;
    } else {
        $default_timezone = ini_get('date.timezone') ?: 'Etc/UTC';
    }
    date_default_timezone_set($default_timezone);

    ini_set('default_charset', 'UTF-8');
    if (version_compare(PHP_VERSION, '5.6.0', '<') && function_exists('mb_internal_encoding')) {
        mb_internal_encoding('UTF-8');
    }
    if (function_exists('mb_regex_encoding')) {
        mb_regex_encoding('UTF-8');
    }

    session_cache_limiter('nocache'); // Prevent logout issue after page was cached
    session_name(FM_SESSION_ID);
    function session_error_handling_function($code, $msg, $file, $line)
    {
        // Permission denied for default session, try to create a new one
        if ($code == 2) {
            session_abort();
            session_id(session_create_id());
            @session_start();
        }
    }
    set_error_handler('session_error_handling_function');
    session_start();
    restore_error_handler();
}

//Generating CSRF Token
if (empty($_SESSION['token'])) {
    if (function_exists('random_bytes')) {
        $_SESSION['token'] = bin2hex(random_bytes(32));
    } else {
        $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(32));
    }
}

if (empty($auth_users)) {
    $use_auth = false;
}

$is_https = isset($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) == 'on' || $_SERVER['HTTPS'] == 1)
    || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https';

// update $root_url based on user specific directories
if (isset($_SESSION[FM_SESSION_ID]['logged']) && !empty($directories_users[$_SESSION[FM_SESSION_ID]['logged']])) {
    $wd = fm_clean_path(dirname($_SERVER['PHP_SELF']));
    $root_url =  $root_url . $wd . DIRECTORY_SEPARATOR . $directories_users[$_SESSION[FM_SESSION_ID]['logged']];
}
// clean $root_url
$root_url = fm_clean_path($root_url);

// abs path for site
defined('FM_ROOT_URL') || define('FM_ROOT_URL', ($is_https ? 'https' : 'http') . '://' . $http_host . (!empty($root_url) ? '/' . $root_url : ''));
defined('FM_SELF_URL') || define('FM_SELF_URL', ($is_https ? 'https' : 'http') . '://' . $http_host . $_SERVER['PHP_SELF']);

// logout
if (isset($_GET['logout'])) {
    unset($_SESSION[FM_SESSION_ID]['logged']);
    unset($_SESSION['token']);
    unset($_SESSION['redirect_after_login']);
    fm_redirect(FM_SELF_URL);
}

// Validate connection IP
if ($ip_ruleset != 'OFF') {
    function getClientIP()
    {
        if (array_key_exists('HTTP_CF_CONNECTING_IP', $_SERVER)) {
            return  $_SERVER["HTTP_CF_CONNECTING_IP"];
        } else if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
            return  $_SERVER["HTTP_X_FORWARDED_FOR"];
        } else if (array_key_exists('REMOTE_ADDR', $_SERVER)) {
            return $_SERVER['REMOTE_ADDR'];
        } else if (array_key_exists('HTTP_CLIENT_IP', $_SERVER)) {
            return $_SERVER['HTTP_CLIENT_IP'];
        }
        return '';
    }

    $clientIp = getClientIP();
    $proceed = false;
    $whitelisted = in_array($clientIp, $ip_whitelist);
    $blacklisted = in_array($clientIp, $ip_blacklist);

    if ($ip_ruleset == 'AND') {
        if ($whitelisted == true && $blacklisted == false) {
            $proceed = true;
        }
    } else
    if ($ip_ruleset == 'OR') {
        if ($whitelisted == true || $blacklisted == false) {
            $proceed = true;
        }
    }

    if ($proceed == false) {
        trigger_error('User connection denied from: ' . $clientIp, E_USER_WARNING);

        if ($ip_silent == false) {
            fm_set_msg(lng('Access denied. IP restriction applicable'), 'error');
            fm_show_header_login();
            fm_show_message();
        }
        exit();
    }
}
                                      
// Checking if the user is logged in or not. If not, it will show the login form.
if ($use_auth) {
    if (isset($_SESSION[FM_SESSION_ID]['logged'], $auth_users[$_SESSION[FM_SESSION_ID]['logged']])) {
        // Logged
    } elseif (isset($_POST['fm_usr'], $_POST['fm_pwd'], $_POST['token'])) {
        // Logging In
        sleep(1);
        if (function_exists('password_verify')) {
            if (isset($auth_users[$_POST['fm_usr']]) && isset($_POST['fm_pwd']) && password_verify($_POST['fm_pwd'], $auth_users[$_POST['fm_usr']]) && verifyToken($_POST['token'])) {
                $_SESSION[FM_SESSION_ID]['logged'] = $_POST['fm_usr'];
                fm_set_msg(lng('You are logged in'));
                if (!empty($_SESSION['redirect_after_login'])) {
                    $redirect_url = $_SESSION['redirect_after_login'];
                    unset($_SESSION['redirect_after_login']);
                    fm_redirect($redirect_url);
                } else {
                    fm_redirect(FM_SELF_URL);
                }
            } else {
                unset($_SESSION[FM_SESSION_ID]['logged']);
                fm_set_msg(lng('Login failed. Invalid username or password'), 'error');
                fm_redirect(FM_SELF_URL);
            }
        } else {
            fm_set_msg(lng('password_hash not supported, Upgrade PHP version'), 'error');;
        }
    } else {
        // Form
        unset($_SESSION[FM_SESSION_ID]['logged']);
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_SERVER['QUERY_STRING'])) {
            $_SESSION['redirect_after_login'] = FM_SELF_URL . '?' . $_SERVER['QUERY_STRING'];
        }

        $logo_path = !empty($cfg->data['logo_path']) ? $cfg->data['logo_path'] : 'https://cdn.jsdelivr.net/gh/hestiacn/tinyfilemanager@master/assets/icons/logo.svg';
        fm_show_header_login();
?>
        <section class="h-100">
            <div class="container h-100">
                <div class="row justify-content-md-center align-content-center h-100vh">
                    <div class="card-wrapper">
                        <div class="card fat position-relative" data-bs-theme="<?php echo FM_THEME; ?>">
                            <div class="position-absolute top-0 end-0 m-3 d-flex flex-column gap-2" style="z-index:10;">
                                <button type="button" class="btn btn-sm btn-outline-secondary" id="theme-toggle" title="<?php echo lng('ThemeToggle'); ?>">
                                    <span id="theme-icon">🌙</span>
                                </button>
                                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#langModal" title="<?php echo lng('PreferredLanguage'); ?>">
                                    <?php echo lng('Language'); ?>
                                </button>
                            </div>
                            <div class="card-body">
                                <form class="form-signin" action="" method="post" autocomplete="off">
                                    <div class="mb-3">
                                        <div class="brand">
                                            <img src="<?php echo fm_enc($logo_path); ?>" alt="Logo Image">
                                        </div>
                                        <div class="text-center">
                                            <h1 class="card-title"><?php echo lng('AppTitle'); ?></h1>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="mb-3">
                                        <label for="fm_usr" class="pb-2"><?php echo lng('Username'); ?></label>
                                        <input type="text" class="form-control" id="fm_usr" name="fm_usr" required autofocus>
                                    </div>

                                    <div class="mb-3">
                                        <label for="fm_pwd" class="pb-2"><?php echo lng('Password'); ?></label>
                                        <input type="password" class="form-control" id="fm_pwd" name="fm_pwd" required>
                                    </div>

                                    <div class="mb-3">
                                        <?php fm_show_message(); ?>
                                    </div>
                                    <input type="hidden" name="token" value="<?php echo htmlentities($_SESSION['token']); ?>" />
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-success btn-block w-100 mt-4" role="button">
                                            <?php echo lng('Login'); ?>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="footer text-center" data-bs-theme="<?php echo FM_THEME; ?>">
                            <br>
                            <br>
                            <!-- Test account: <strong>guest</strong> / Password: <strong>guest</strong>. Welcome! -->
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                    <?php fm_render_beian(); ?>
                    <div style="text-align:center;">
                        <p dir="auto" class="text-center"><?= renderFooter() ?></p>
                    </div>
                </div>
            </div>
        </section>
    <?php
        fm_show_footer_login();
        exit;
    }
}

// update root path
if ($use_auth && isset($_SESSION[FM_SESSION_ID]['logged'])) {
    $root_path = isset($directories_users[$_SESSION[FM_SESSION_ID]['logged']]) ? $directories_users[$_SESSION[FM_SESSION_ID]['logged']] : $root_path;
}

// clean and check $root_path
$root_path = rtrim($root_path, '\\/');
$root_path = str_replace('\\', '/', $root_path);
if (!@is_dir($root_path)) {
    echo "<h1>" . lng('Root path') . " \"{$root_path}\" " . lng('not found!') . " </h1>";
    exit;
}

defined('FM_SHOW_HIDDEN') || define('FM_SHOW_HIDDEN', $show_hidden_files);
defined('FM_ROOT_PATH') || define('FM_ROOT_PATH', $root_path);
defined('FM_LANG') || define('FM_LANG', $lang);
defined('FM_FILE_EXTENSION') || define('FM_FILE_EXTENSION', $allowed_file_extensions);
defined('FM_UPLOAD_EXTENSION') || define('FM_UPLOAD_EXTENSION', $allowed_upload_extensions);
defined('FM_EXCLUDE_ITEMS') || define('FM_EXCLUDE_ITEMS', (version_compare(PHP_VERSION, '7.0.0', '<') ? serialize($exclude_items) : $exclude_items));
defined('FM_DOC_VIEWER') || define('FM_DOC_VIEWER', $online_viewer);
define('FM_READONLY', $global_readonly || ($use_auth && !empty($readonly_users) && isset($_SESSION[FM_SESSION_ID]['logged']) && in_array($_SESSION[FM_SESSION_ID]['logged'], $readonly_users)));
define('FM_IS_WIN', DIRECTORY_SEPARATOR == '\\');

// always use ?p=
if (!isset($_GET['p']) && empty($_FILES)) {
    fm_redirect(FM_SELF_URL . '?p=');
}

// get path
$p = isset($_GET['p']) ? $_GET['p'] : (isset($_POST['p']) ? $_POST['p'] : '');

// clean path
$p = fm_clean_path($p);

// for ajax request - save
$input = file_get_contents('php://input');
$_POST = (strpos($input, 'ajax') != FALSE && strpos($input, 'save') != FALSE) ? json_decode($input, true) : $_POST;

// instead globals vars
define('FM_PATH', $p);
define('FM_USE_AUTH', $use_auth);
define('FM_EDIT_FILE', $edit_files);
defined('FM_ICONV_INPUT_ENC') || define('FM_ICONV_INPUT_ENC', $iconv_input_encoding);
defined('FM_USE_HIGHLIGHTJS') || define('FM_USE_HIGHLIGHTJS', $use_highlightjs);
defined('FM_HIGHLIGHTJS_STYLE') || define('FM_HIGHLIGHTJS_STYLE', $highlightjs_style);
$i18n_datetime_format = function_exists('lng') ? lng('DateTimeFormat') : '';
if (empty($i18n_datetime_format) || $i18n_datetime_format === 'DateTimeFormat') {
    $i18n_datetime_format = 'm/d/Y g:i A';
}
defined('FM_DATETIME_FORMAT') || define('FM_DATETIME_FORMAT', $i18n_datetime_format);
unset($p, $use_auth, $iconv_input_encoding, $use_highlightjs, $highlightjs_style);

/*************************** ACTIONS ***************************/

// Handle all AJAX Request
if ((isset($_SESSION[FM_SESSION_ID]['logged'], $auth_users[$_SESSION[FM_SESSION_ID]['logged']]) || !FM_USE_AUTH) && isset($_POST['ajax'], $_POST['token'])) {
    if (!verifyToken($_POST['token'])) {
        header('HTTP/1.0 401 Unauthorized');
        die("Invalid Token.");
    }

    //search : get list of files from the current folder
    if (isset($_POST['type']) && $_POST['type'] == "search") {
        $dir = $_POST['path'] == "." ? '' : $_POST['path'];
        $response = scan(fm_clean_path($dir), $_POST['content']);
        echo json_encode($response);
        exit();
    }

    if(FM_READONLY){
        exit();
    }

    // save editor file
    if (isset($_POST['type']) && $_POST['type'] == "save") {
        // get current path
        $path = FM_ROOT_PATH;
        if (FM_PATH != '') {
            $path .= '/' . FM_PATH;
        }
        // check path
        if (!is_dir($path)) {
            fm_redirect(FM_SELF_URL . '?p=');
        }
        $file = $_GET['edit'];
        $file = fm_clean_path($file);
        $file = str_replace('/', '', $file);
        if ($file == '' || !is_file($path . '/' . $file)) {
            fm_set_msg(lng('File not found'), 'error');
            $FM_PATH = FM_PATH;
            fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
        }
        header('X-XSS-Protection:0');
        $file_path = $path . '/' . $file;

        $writedata = $_POST['content'];
        $fd = fopen($file_path, "w");
        $write_results = @fwrite($fd, $writedata);
        fclose($fd);
        if ($write_results === false) {
            header("HTTP/1.1 500 Internal Server Error");
            die("Could Not Write File! - Check Permissions / Ownership");
        }
        die(true);
    }

    // backup files
    if (isset($_POST['type']) && $_POST['type'] == "backup" && !empty($_POST['file'])) {
        $fileName = fm_clean_path($_POST['file']);
        $fullPath = FM_ROOT_PATH . '/';
        if (!empty($_POST['path'])) {
            $relativeDirPath = fm_clean_path($_POST['path']);
            $fullPath .= "{$relativeDirPath}/";
        }
        $timestamp = time();
        $date = date("dMy-His", $timestamp);
        $newFileName = "{$fileName}-{$date}.bak";
        $fullyQualifiedFileName = $fullPath . $fileName;
        $display_date = date(lng('DateTimeFormat'), $timestamp);
        try {
            if (!file_exists($fullyQualifiedFileName)) {
                throw new Exception(sprintf(lng('File not found name'), '<b>' . fm_enc($fileName) . '</b>'));
            }
            if (copy($fullyQualifiedFileName, $fullPath . $newFileName)) {
                echo sprintf(lng('Backup created'), '<b>' . fm_enc($newFileName) . '</b>', $display_date);
            } else {
                throw new Exception(sprintf(lng('Could not copy file'), '<b>' . fm_enc($fileName) . '</b>'));
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    // Save Config
    if (isset($_POST['type']) && $_POST['type'] == "settings") {
        global $cfg, $lang, $report_errors, $show_hidden_files, $lang_list, $hide_Cols;

        $erp = (isset($_POST['js-error-report']) && $_POST['js-error-report'] == "true");
        if (!isset($cfg->data['error_reporting']) || $cfg->data['error_reporting'] !== $erp) {
            $cfg->data['error_reporting'] = $erp;
            $report_errors = $erp;
        }

        $shf = (isset($_POST['js-show-hidden']) && $_POST['js-show-hidden'] == "true");
        if (!isset($cfg->data['show_hidden']) || $cfg->data['show_hidden'] !== $shf) {
            $cfg->data['show_hidden'] = $shf;
            $show_hidden_files = $shf;
        }

        $hco = (isset($_POST['js-hide-cols']) && $_POST['js-hide-cols'] == "true");
        if (!isset($cfg->data['hide_Cols']) || $cfg->data['hide_Cols'] !== $hco) {
            $cfg->data['hide_Cols'] = $hco;
            $hide_Cols = $hco;
        }

        $showBeian = (isset($_POST['js-show-beian']) && $_POST['js-show-beian'] == "true");
        if (!isset($cfg->data['show_beian']) || $cfg->data['show_beian'] !== $showBeian) {
            $cfg->data['show_beian'] = $showBeian;
        }

        $enablePaging = (isset($_POST['js-enable-paging']) && $_POST['js-enable-paging'] == "true");
        if (!isset($cfg->data['enable_paging']) || $cfg->data['enable_paging'] !== $enablePaging) {
            $cfg->data['enable_paging'] = $enablePaging;
        }

        if (isset($_POST['js-site-title'])) {
            $siteTitle = trim($_POST['js-site-title']);
            if (!isset($cfg->data['site_title']) || $cfg->data['site_title'] !== $siteTitle) {
                $cfg->data['site_title'] = $siteTitle;
            }
        }
        if (isset($_POST['js-logo-path'])) {
            $logoPath = trim($_POST['js-logo-path']);
            if (!isset($cfg->data['logo_path']) || $cfg->data['logo_path'] !== $logoPath) {
                $cfg->data['logo_path'] = $logoPath;
            }
        }
        if (isset($_POST['js-favicon-path'])) {
            $faviconPath = trim($_POST['js-favicon-path']);
            if (!isset($cfg->data['favicon_path']) || $cfg->data['favicon_path'] !== $faviconPath) {
                $cfg->data['favicon_path'] = $faviconPath;
            }
        }
        if (isset($_POST['js-icp'])) {
            $icp = trim($_POST['js-icp']);
            if (!isset($cfg->data['icp']) || $cfg->data['icp'] !== $icp) {
                $cfg->data['icp'] = $icp;
            }
        }
        if (isset($_POST['js-police'])) {
            $police = trim($_POST['js-police']);
            if (!isset($cfg->data['police']) || $cfg->data['police'] !== $police) {
                $cfg->data['police'] = $police;
            }
        }
        if (isset($_POST['js-footer-start-year'])) {
            $footerStartYear = trim($_POST['js-footer-start-year']);
            if ($footerStartYear === 'none' || ctype_digit($footerStartYear) || $footerStartYear === '') {
                if (!isset($cfg->data['footer_start_year']) || $cfg->data['footer_start_year'] !== $footerStartYear) {
                    $cfg->data['footer_start_year'] = $footerStartYear;
                }
            }
        }
        if (isset($_POST['js-timezone']) && $_POST['js-timezone'] !== '') {
            $tz = $_POST['js-timezone'];
            if (in_array($tz, timezone_identifiers_list())) {
                if (!isset($cfg->data['timezone']) || $cfg->data['timezone'] !== $tz) {
                    $cfg->data['timezone'] = $tz;
                }
            }
        }
        $cfg->save();
        echo true;
    }

    // new password hash
    if (isset($_POST['type']) && $_POST['type'] == "pwdhash") {
        $res = isset($_POST['inputPassword2']) && !empty($_POST['inputPassword2']) ? password_hash($_POST['inputPassword2'], PASSWORD_DEFAULT) : '';
        echo $res;
    }

    //upload using url
    if (isset($_POST['type']) && $_POST['type'] == "upload" && !empty($_REQUEST["uploadurl"])) {
        $path = FM_ROOT_PATH;
        if (FM_PATH != '') {
            $path .= '/' . FM_PATH;
        }

        function event_callback($message)
        {
            global $callback;
            echo json_encode($message);
        }

        $url = !empty($_REQUEST["uploadurl"]) && preg_match("|^http(s)?://.+$|", stripslashes($_REQUEST["uploadurl"])) ? stripslashes($_REQUEST["uploadurl"]) : null;

        //prevent 127.* domain and known ports
        $domain = parse_url($url, PHP_URL_HOST);
        $port = parse_url($url, PHP_URL_PORT);
        $knownPorts = [22, 23, 25, 3306];

        if (preg_match("/^localhost$|^127(?:\.[0-9]+){0,2}\.[0-9]+$|^(?:0*\:)*?:?0*1$/i", $domain) || in_array($port, $knownPorts)) {
            $err = array("message" => lng('URL is not allowed'));
            event_callback(array("fail" => $err));
            exit();
        }

        $use_curl = false;
        $temp_file = tempnam(sys_get_temp_dir(), "upload-");
        $fileinfo = new stdClass();
        $clean_url = strtok($url, '?#');
        $fileinfo->name = trim(urldecode(basename($clean_url)), ".\x00..\x20");

        $allowed = (FM_UPLOAD_EXTENSION) ? explode(',', FM_UPLOAD_EXTENSION) : false;
        if (empty($allowed)) {
            $err = array("message" => lng('Upload extension config missing'));
            event_callback(array("fail" => $err));
            exit();
        }

        $ext = strtolower(pathinfo($fileinfo->name, PATHINFO_EXTENSION));
        $isFileAllowed = in_array($ext, $allowed);

        $err = false;

        if (!$isFileAllowed) {
            $allowed_exts = implode(', ', $allowed);
            $err_msg = sprintf(lng('File extension is not allowed'), $allowed_exts);
            $err = array("message" => $err_msg);
            event_callback(array("fail" => $err));
            exit();
        }

        if (!$url) {
            $success = false;
        } else if ($use_curl) {
            $fp = fopen($temp_file, "w");
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_NOPROGRESS, false);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_FILE, $fp);
            $success = curl_exec($ch);
            $curl_info = curl_getinfo($ch);
            if (!$success) {
                $err = array("message" => curl_error($ch));
            }
            curl_close($ch);
            fclose($fp);
            $fileinfo->size = $curl_info["size_download"];
            $fileinfo->type = $curl_info["content_type"];
        } else {
            $ctx = stream_context_create([
                'http' => [
                    'timeout' => 120,
                    'follow_location' => 1,
                    'user_agent' => 'Mozilla/5.0'
                ]
            ]);
            $success = copy($url, $temp_file, $ctx);
            if (!$success) {
                $err = error_get_last();
            }
        }

        if ($success) {
            $target_file = $path . '/' . $fileinfo->name;
            $success = rename($temp_file, $target_file);
            
            if ($success) {
                chmod($target_file, 0644);
            }
        }

        if ($success) {
            event_callback(array("done" => $fileinfo));
        } else {
            unlink($temp_file);
            if (!$err) {
                $err = array("message" => lng('Invalid url parameter'));
            }
            event_callback(array("fail" => $err));
        }
    }
    exit();
}

// Delete file / folder
if (isset($_GET['del'], $_POST['token']) && !FM_READONLY) {
    $del = str_replace('/', '', fm_clean_path($_GET['del']));
    if ($del != '' && $del != '..' && $del != '.' && verifyToken($_POST['token'])) {
        $path = FM_ROOT_PATH;
        if (FM_PATH != '') {
            $path .= '/' . FM_PATH;
        }
        $is_dir = is_dir($path . '/' . $del);
        $trash_path = FM_ROOT_PATH . '/.trash';
        if (!is_dir($trash_path)) {
            @mkdir($trash_path, 0755, true);
        }
        $trash_target = $trash_path . '/' . date('YmdHis') . '_' . $del;
        if (fm_rename($path . '/' . $del, $trash_target)) {
            $msg = $is_dir ? lng('Folder') . ' <b>%s</b> ' . lng('Deleted') : lng('File') . ' <b>%s</b> ' . lng('Deleted');
            fm_set_msg(sprintf($msg, fm_enc($del)));
            fm_write_log('Delete', "Moved to Trash " . ($is_dir ? 'Folder' : 'File') . " '{$del}' in path '" . FM_PATH . "'");
        } else {
            $msg = $is_dir ? lng('Folder') . ' <b>%s</b> ' . lng('not deleted') : lng('File') . ' <b>%s</b> ' . lng('not deleted');
            fm_set_msg(sprintf($msg, fm_enc($del)), 'error');
            fm_write_log('Delete Error', "Failed to move '{$del}' to trash in path '" . FM_PATH . "'");
        }
    } else {
        fm_set_msg(lng('Invalid file or folder name'), 'error');
    }
    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
}

// Create a new file/folder
if (isset($_POST['newfilename'], $_POST['newfile'], $_POST['token']) && !FM_READONLY) {
    $type = urldecode($_POST['newfile']);
    $new = str_replace('/', '', fm_clean_path(strip_tags($_POST['newfilename'])));
    if (fm_isvalid_filename($new) && $new != '' && $new != '..' && $new != '.' && verifyToken($_POST['token'])) {
        $path = FM_ROOT_PATH;
        if (FM_PATH != '') {
            $path .= '/' . FM_PATH;
        }
        if ($type == "file") {
            if (!file_exists($path . '/' . $new)) {
                if (fm_is_valid_ext($new)) {
                    @fopen($path . '/' . $new, 'w') or die('Cannot open file:  ' . $new);
                    fm_set_msg(sprintf(lng('File') . ' <b>%s</b> ' . lng('Created'), fm_enc($new)));
                    fm_write_log('Create', "Created File '{$new}' in path '" . FM_PATH . "'");
                } else {
                    fm_set_msg(lng('File extension is not allowed'), 'error');
                }
            } else {
                fm_set_msg(sprintf(lng('File') . ' <b>%s</b> ' . lng('already exists'), fm_enc($new)), 'alert');
            }
        } else {
            if (fm_mkdir($path . '/' . $new, false) === true) {
                fm_set_msg(sprintf(lng('Folder') . ' <b>%s</b> ' . lng('Created'), $new));
                fm_write_log('Create', "Created Folder '{$new}' in path '" . FM_PATH . "'");
            } elseif (fm_mkdir($path . '/' . $new, false) === $path . '/' . $new) {
                fm_set_msg(sprintf(lng('Folder') . ' <b>%s</b> ' . lng('already exists'), fm_enc($new)), 'alert');
            } else {
                fm_set_msg(sprintf(lng('Folder') . ' <b>%s</b> ' . lng('not created'), fm_enc($new)), 'error');
            }
        }
    } else {
        fm_set_msg(lng('Invalid characters in file or folder name'), 'error');
    }
    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
}

// Copy folder / file
if (isset($_GET['copy'], $_GET['finish']) && !FM_READONLY) {
    // from
    $copy = urldecode($_GET['copy']);
    $copy = fm_clean_path($copy);
    // empty path
    if ($copy == '') {
        fm_set_msg(lng('Source path not defined'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
    }
    // abs path from
    $from = FM_ROOT_PATH . '/' . $copy;
    // abs path to
    $dest = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $dest .= '/' . FM_PATH;
    }
    $dest .= '/' . basename($from);
    // move?
    $move = isset($_GET['move']);
    $move = fm_clean_path(urldecode($move));
    // copy/move/duplicate
    if ($from != $dest) {
        $msg_from = trim(FM_PATH . '/' . basename($from), '/');
        if ($move) { // Move and to != from so just perform move
            $rename = fm_rename($from, $dest);
            if ($rename) {
                fm_set_msg(sprintf(lng('Moved from') . ' <b>%s</b> ' . lng('to') . ' <b>%s</b>', fm_enc($copy), fm_enc($msg_from)));
                fm_write_log('Move', "Moved '{$copy}' to '{$msg_from}'");
            } elseif ($rename === null) {
                fm_set_msg(lng('File or folder with this path already exists'), 'alert');
            } else {
                fm_set_msg(sprintf(lng('Error while moving from') . ' <b>%s</b> ' . lng('to') . ' <b>%s</b>', fm_enc($copy), fm_enc($msg_from)), 'error');
            }
        } else { // Not move and to != from so copy with original name
            if (fm_rcopy($from, $dest)) {
                fm_set_msg(sprintf(lng('Copied from') . ' <b>%s</b> ' . lng('to') . ' <b>%s</b>', fm_enc($copy), fm_enc($msg_from)));
                fm_write_log('Copy', "Copied '{$copy}' to '{$msg_from}'");
            } else {
                fm_set_msg(sprintf(lng('Error while copying from') . ' <b>%s</b> ' . lng('to') . ' <b>%s</b>', fm_enc($copy), fm_enc($msg_from)), 'error');
            }
        }
    } else {
        if (!$move) { //Not move and to = from so duplicate
            $msg_from = trim(FM_PATH . '/' . basename($from), '/');
            $fn_parts = pathinfo($from);
            $extension_suffix = '';
            if (!is_dir($from)) {
                $extension_suffix = '.' . $fn_parts['extension'];
            }
            //Create new name for duplicate
            $fn_duplicate = $fn_parts['dirname'] . '/' . $fn_parts['filename'] . '-' . date('YmdHis') . $extension_suffix;
            $loop_count = 0;
            $max_loop = 1000;
            // Check if a file with the duplicate name already exists, if so, make new name (edge case...)
            while (file_exists($fn_duplicate) & $loop_count < $max_loop) {
                $fn_parts = pathinfo($fn_duplicate);
                $fn_duplicate = $fn_parts['dirname'] . '/' . $fn_parts['filename'] . '-copy' . $extension_suffix;
                $loop_count++;
            }
            if (fm_rcopy($from, $fn_duplicate, False)) {
                fm_set_msg(sprintf('Copied from <b>%s</b> to <b>%s</b>', fm_enc($copy), fm_enc($fn_duplicate)));
            } else {
                fm_set_msg(sprintf('Error while copying from <b>%s</b> to <b>%s</b>', fm_enc($copy), fm_enc($fn_duplicate)), 'error');
            }
        } else {
            fm_set_msg(lng('Paths must be not equal'), 'alert');
        }
    }
    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
}

// Mass copy files/ folders
if (isset($_POST['file'], $_POST['copy_to'], $_POST['finish'], $_POST['token']) && !FM_READONLY) {

    if (!verifyToken($_POST['token'])) {
        fm_set_msg(lng('Invalid Token.'), 'error');
        die("Invalid Token.");
    }

    // from
    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }
    // to
    $copy_to_path = FM_ROOT_PATH;
    $copy_to = fm_clean_path($_POST['copy_to']);
    if ($copy_to != '') {
        $copy_to_path .= '/' . $copy_to;
    }
    if ($path == $copy_to_path) {
        fm_set_msg(lng('Paths must be not equal'), 'alert');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
    }
    if (!is_dir($copy_to_path)) {
        if (!fm_mkdir($copy_to_path, true)) {
            fm_set_msg(lng('Unable to create destination folder'), 'error');
            $FM_PATH = FM_PATH;
            fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
        }
    }
    // move?
    $move = isset($_POST['move']);
    // copy/move
    $errors = 0;
    $files = $_POST['file'];
    if (is_array($files) && count($files)) {
        foreach ($files as $f) {
            if ($f != '') {
                $f = fm_clean_path($f);
                // abs path from
                $from = $path . '/' . $f;
                // abs path to
                $dest = $copy_to_path . '/' . $f;
                // do
                if ($move) {
                    $rename = fm_rename($from, $dest);
                    if ($rename === false) {
                        $errors++;
                    }
                } else {
                    if (!fm_rcopy($from, $dest)) {
                        $errors++;
                    }
                }
            }
        }
        if ($errors == 0) {
            $msg = $move ? lng('Selected files and folders moved') : lng('Selected files and folders copied');
            fm_set_msg($msg);
            fm_write_log($move ? 'Mass Move' : 'Mass Copy', ($move ? 'Moved' : 'Copied') . " items to path '{$copy_to}'. Items: " . implode(', ', $files));
        } else {
            $msg = $move ? lng('Error while moving items') : lng('Error while copying items');
            fm_set_msg($msg, 'error');
        }
    } else {
        fm_set_msg(lng('Nothing selected'), 'alert');
    }
    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
}

// Rename
if (isset($_POST['rename_from'], $_POST['rename_to'], $_POST['token']) && !FM_READONLY) {
    if (!verifyToken($_POST['token'])) {
        fm_set_msg(lng("Invalid Token."), 'error');
        die("Invalid Token.");
    }
    // old name
    $old = urldecode($_POST['rename_from']);
    $old = fm_clean_path($old);
    $old = str_replace('/', '', $old);
    // new name
    $new = urldecode($_POST['rename_to']);
    $new = fm_clean_path(strip_tags($new));
    $new = str_replace('/', '', $new);
    // path
    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }
    // rename
    if (fm_isvalid_filename($new) && $old != '' && $new != '') {
        if (fm_rename($path . '/' . $old, $path . '/' . $new)) {
            fm_set_msg(sprintf(lng('Renamed from') . ' <b>%s</b> ' . lng('to') . ' <b>%s</b>', fm_enc($old), fm_enc($new)));
            fm_write_log('Rename', "Renamed '{$old}' to '{$new}' in path '" . FM_PATH . "'");
        } else {
            fm_set_msg(sprintf(lng('Error while renaming from') . ' <b>%s</b> ' . lng('to') . ' <b>%s</b>', fm_enc($old), fm_enc($new)), 'error');
        }
    } else {
        fm_set_msg(lng('Invalid characters in file name'), 'error');
    }
    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
}

// Download
if (isset($_GET['dl'], $_POST['token'])) {
    // Verify the token to ensure it's valid
    if (!verifyToken($_POST['token'])) {
        fm_set_msg(lng("Invalid Token."), 'error');
        exit;
    }

    // Clean the download file path
    $dl = urldecode($_GET['dl']);
    $dl = fm_clean_path($dl);
    $dl = str_replace('/', '', $dl); // Prevent directory traversal attacks

    // Define the file path
    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }

    // Check if the file exists and is valid
    if ($dl != '' && is_file($path . '/' . $dl)) {
        // Close the session to prevent session locking
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_write_close();
        }

        // Call the download function
        fm_download_file($path . '/' . $dl, $dl, 1024); // Download with a buffer size of 1024 bytes
        fm_write_log('Download', "Downloaded '{$dl}' from path '" . FM_PATH . "'");
        exit;
    } else {
        // Handle the case where the file is not found
        fm_set_msg(lng('File not found'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
    }
}

// Upload
if (!empty($_FILES) && !FM_READONLY) {
    if (isset($_POST['token'])) {
        if (!verifyToken($_POST['token'])) {
            $response = array('status' => 'error', 'info' => lng("Invalid Token."));
            echo json_encode($response);
            exit();
        }
    } else {
        $response = array('status' => 'error', 'info' => "Token Missing.");
        echo json_encode($response);
        exit();
    }

    $chunkIndex = $_POST['dzchunkindex'];
    $chunkTotal = $_POST['dztotalchunkcount'];
    $fullPathInput = fm_clean_path($_REQUEST['fullpath']);
    $fullPathInput = str_replace('+', '-', $fullPathInput);

    $f = $_FILES;
    $path = FM_ROOT_PATH;
    $ds = DIRECTORY_SEPARATOR;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }

    $errors = 0;
    $uploads = 0;
    $allowed = (FM_UPLOAD_EXTENSION) ? explode(',', FM_UPLOAD_EXTENSION) : false;
    $response = array(
        'status' => 'error',
        'info'   => 'Oops! Try again'
    );

    $filename = $f['file']['name'];
    $filename = str_replace('+', '-', $filename);
    $tmp_name = $f['file']['tmp_name'];
    $ext = pathinfo($filename, PATHINFO_FILENAME) != '' ? strtolower(pathinfo($filename, PATHINFO_EXTENSION)) : '';
    $isFileAllowed = ($allowed) ? in_array($ext, $allowed) : true;
    $isTarGz = (strtolower(substr($filename, -7)) === '.tar.gz');
    if (!$isFileAllowed && $isTarGz) {
        if (in_array('gz', $allowed) || in_array('tar', $allowed)) {
            $isFileAllowed = true;
        }
    }
    $extForRename = $isTarGz ? '.tar.gz' : ($ext ? '.' . $ext : '');

    if (!fm_isvalid_filename($filename) && !fm_isvalid_filename($fullPathInput)) {
        $response = array(
            'status'    => 'error',
            'info'      => "Invalid File name!",
        );
        echo json_encode($response);
        exit();
    }

    $targetPath = $path . $ds;
    if (is_writable($targetPath)) {
        $fullPath = $path . '/' . $fullPathInput;
        $folder = substr($fullPath, 0, strrpos($fullPath, "/"));

        if (!is_dir($folder)) {
            $old = umask(0);
            mkdir($folder, 0755, true);
            umask($old);
        }

        if (empty($f['file']['error']) && !empty($tmp_name) && $tmp_name != 'none' && $isFileAllowed) {
            if ($chunkTotal) {
                $out = @fopen("{$fullPath}.part", $chunkIndex == 0 ? "wb" : "ab");
                if ($out) {
                    $in = @fopen($tmp_name, "rb");
                    if ($in) {
                        if (PHP_VERSION_ID < 80009) {
                            // workaround https://bugs.php.net/bug.php?id=81145
                            do {
                                for (;;) {
                                    $buff = fread($in, 4096);
                                    if ($buff === false || $buff === '') {
                                        break;
                                    }
                                    fwrite($out, $buff);
                                }
                            } while (!feof($in));
                        } else {
                            stream_copy_to_stream($in, $out);
                        }
                        $response = array(
                            'status'    => 'success',
                            'info' => "file upload successful"
                        );
                    } else {
                        $response = array(
                            'status'    => 'error',
                            'info' => "failed to open output stream",
                            'errorDetails' => error_get_last()
                        );
                    }
                    @fclose($in);
                    @fclose($out);
                    @unlink($tmp_name);

                    $response = array(
                        'status'    => 'success',
                        'info' => "file upload successful"
                    );
                } else {
                    $response = array(
                        'status'    => 'error',
                        'info' => "failed to open output stream"
                    );
                }

                if ($chunkIndex == $chunkTotal - 1) {
                    if (file_exists($fullPath)) {
                        $fullPathTarget = $path . '/' . basename($fullPathInput, $extForRename) . '_' . date('ymdHis') . $extForRename;
                    } else {
                        $fullPathTarget = $fullPath;
                    }
                    if ($ext === 'md' || $ext === 'markdown') {
                        $md_content = file_get_contents("{$fullPath}.part");
                        if (!fm_is_safe_markdown($md_content)) {
                            @unlink("{$fullPath}.part");
                            $response = array(
                                'status' => 'error',
                                'info'   => 'Error: The Markdown file contains dangerous instructions.'
                            );
                            echo json_encode($response);
                            exit();
                        }
                    }
                    rename("{$fullPath}.part", $fullPathTarget);
                    fm_write_log('Upload', "Uploaded chunked file '{$fullPathInput}' to path '" . FM_PATH . "'");
                }
            } else if (move_uploaded_file($tmp_name, $fullPath)) {
                
                if ($ext === 'md' || $ext === 'markdown') {
                    $md_content = file_get_contents($fullPath);
                    if (!fm_is_safe_markdown($md_content)) {
                        @unlink($fullPath);
                        $response = array(
                            'status' => 'error',
                            'info'   => 'Error: The Markdown file contains dangerous instructions.'
                        );
                        echo json_encode($response);
                        exit();
                    }
                }

                // Be sure that the file has been uploaded
                if (file_exists($fullPath)) {
                    $response = array(
                        'status'    => 'success',
                        'info' => "file upload successful"
                    );
                    fm_write_log('Upload', "Uploaded file '{$fullPathInput}' to path '" . FM_PATH . "'");
                } else {
                    $response = array(
                        'status' => 'error',
                        'info'   => 'Couldn\'t upload the requested file.'
                    );
                }
            } else {
                $response = array(
                    'status'    => 'error',
                    'info'      => "Error while uploading files. Uploaded files $uploads",
                );
            }
        }
    } else {
        $response = array(
            'status' => 'error',
            'info'   => 'The specified folder for upload isn\'t writeable.'
        );
    }
    // Return the response
    echo json_encode($response);
    exit();
}

// Mass deleting
if (isset($_POST['group'], $_POST['delete'], $_POST['token']) && !FM_READONLY) {

    if (!verifyToken($_POST['token'])) {
        fm_set_msg(lng("Invalid Token."), 'error');
        die("Invalid Token.");
    }

    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }

    $errors = 0;
    $files = $_POST['file'];
    $trash_path = FM_ROOT_PATH . '/.trash';
    if (!is_dir($trash_path)) {
        @mkdir($trash_path, 0755, true);
    }

    if (is_array($files) && count($files)) {
        foreach ($files as $f) {
            if ($f != '') {
                $new_path = $path . '/' . $f;
                $trash_target = $trash_path . '/' . date('YmdHis') . '_' . $f;
                
                if (!fm_rename($new_path, $trash_target)) {
                    $errors++;
                }
            }
        }
        if ($errors == 0) {
            fm_set_msg(lng('Selected files and folder deleted'));
            fm_write_log('Mass Delete', "Moved to Trash " . count($files) . " items in path '" . FM_PATH . "'. Items: " . implode(', ', $files));
        } else {
            fm_set_msg(lng('Error while deleting items'), 'error');
        }
    } else {
        fm_set_msg(lng('Nothing selected'), 'alert');
    }

    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
}

// Pack files zip, tar.gz
if (isset($_POST['group'], $_POST['token']) && (isset($_POST['zip']) || isset($_POST['tar'])) && !FM_READONLY) {

    if (!verifyToken($_POST['token'])) {
        fm_set_msg(lng("Invalid Token."), 'error');
        die("Invalid Token.");
    }

    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }

    $type = isset($_POST['tar']) ? 'tar' : 'zip';
    $extOut = ($type === 'tar') ? 'tar.gz' : 'zip';

    $files = $_POST['file'] ?? [];
    $files = array_values(array_filter(array_map(function ($f) {
        $f = fm_clean_path($f);
        return $f;
    }, (array)$files)));

    if (!empty($files)) {
        if (count($files) === 1) {
            $base = basename(reset($files));
            $zipname = $base . '_' . date('ymd_His') . '.' . $extOut;
        } else {
            $zipname = 'archive_' . date('ymd_His') . '.' . $extOut;
        }

        try {
            $archiver = new FM_SystemArchiver($type);
            $res = $archiver->create($zipname, $files, $path);

            if ($res['ok']) {
                fm_set_msg(sprintf(lng('Archive') . ' <b>%s</b> ' . lng('Created'), fm_enc($zipname)));
                fm_write_log('Archive', "Created archive '{$zipname}' in path '" . FM_PATH . "' via system {$type}");
            } else {
                fm_set_msg(lng('Archive not created') . ': ' . fm_enc($res['msg']), 'error');
                fm_write_log('Archive Error', "Failed to create '{$zipname}': {$res['msg']}");
            }
        } catch (Throwable $e) {
            fm_set_msg(lng('Archive not created') . ': ' . fm_enc($e->getMessage()), 'error');
        }
    } else {
        fm_set_msg(lng('Nothing selected'), 'alert');
    }

    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
}

// Unpack zip, tar.gz
if (isset($_POST['unzip'], $_POST['token']) && !FM_READONLY) {

    if (!verifyToken($_POST['token'])) {
        fm_set_msg(lng("Invalid Token."), 'error');
        die("Invalid Token.");
    }

    $unzip = urldecode($_POST['unzip']);
    $unzip = fm_clean_path($unzip);
    $unzip = str_replace('/', '', $unzip);

    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }

    $zip_path = $path . '/' . $unzip;
    if ($unzip === '' || !is_file($zip_path)) {
        fm_set_msg(lng('File not found'), 'error');
        fm_redirect(FM_SELF_URL . '?p=' . urlencode(FM_PATH));
    }

    $extRaw = strtolower(pathinfo($zip_path, PATHINFO_EXTENSION));
    $lowerFile = strtolower($zip_path);
    $type = '';
    if ($extRaw === 'zip') {
        $type = 'zip';
    } elseif ($extRaw === 'tar') {
        $type = 'tar';
    } elseif ($extRaw === 'tgz' || ($extRaw === 'gz' && substr($lowerFile, -7) === '.tar.gz')) {
        $type = 'tar';
    } else {
        fm_set_msg(lng('Operations with archives are not available'), 'error');
        fm_redirect(FM_SELF_URL . '?p=' . urlencode(FM_PATH));
    }

    $destDir = $path;
    if (isset($_POST['tofolder'])) {
        $stripPath = $zip_path;
        if ($extRaw === 'gz' && substr($lowerFile, -7) === '.tar.gz') {
            $stripPath = substr($zip_path, 0, -3);
        }
        $tofolder = pathinfo($stripPath, PATHINFO_FILENAME);
        $destDir = $path . '/' . $tofolder;
        if (!fm_mkdir($destDir, true)) {
            fm_set_msg(lng('Unable to create destination folder'), 'error');
            fm_redirect(FM_SELF_URL . '?p=' . urlencode(FM_PATH));
        }
    }

    try {
        $archiver = new FM_SystemArchiver($type);
        $res = $archiver->unzip($zip_path, $destDir);

        if ($res['ok']) {
            fm_set_msg(lng('Archive unpacked'));
            fm_write_log('Unpack', "Unpacked archive '{$unzip}' via system {$type}");
        } else {
            fm_set_msg(lng('Archive not unpacked') . ': ' . fm_enc($res['msg']), 'error');
        }
    } catch (Throwable $e) {
        fm_set_msg(lng('Archive not unpacked') . ': ' . fm_enc($e->getMessage()), 'error');
    }

    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
}

// Change Perms (not for Windows)
if (isset($_POST['chmod'], $_POST['token']) && !FM_READONLY && !FM_IS_WIN) {

    if (!verifyToken($_POST['token'])) {
        fm_set_msg(lng("Invalid Token."), 'error');
        die("Invalid Token.");
    }

    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }

    $file = $_POST['chmod'];
    $file = fm_clean_path($file);
    $file = str_replace('/', '', $file);
    if ($file == '' || (!is_file($path . '/' . $file) && !is_dir($path . '/' . $file))) {
        fm_set_msg(lng('File not found'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
    }

    $mode = 0;
    if (!empty($_POST['ur'])) {
        $mode |= 0400;
    }
    if (!empty($_POST['uw'])) {
        $mode |= 0200;
    }
    if (!empty($_POST['ux'])) {
        $mode |= 0100;
    }
    if (!empty($_POST['gr'])) {
        $mode |= 0040;
    }
    if (!empty($_POST['gw'])) {
        $mode |= 0020;
    }
    if (!empty($_POST['gx'])) {
        $mode |= 0010;
    }
    if (!empty($_POST['or'])) {
        $mode |= 0004;
    }
    if (!empty($_POST['ow'])) {
        $mode |= 0002;
    }
    if (!empty($_POST['ox'])) {
        $mode |= 0001;
    }

    if (@chmod($path . '/' . $file, $mode)) {
        fm_set_msg(lng('Permissions changed'));
        fm_write_log('Chmod', "Changed permissions of '{$file}' to " . decoct($mode) . " in path '" . FM_PATH . "'");
    } else {
        fm_set_msg(lng('Permissions not changed'), 'error');
    }

    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
}

//raw markdown
if (isset($_GET['raw'])) {
    $file = $_GET['raw'];
    $file = fm_clean_path($file, false);
    $file = str_replace('/', '', $file);

    $rawPath = FM_ROOT_PATH . (FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $file;

    if ($file === '' || !is_file($rawPath)) {
        http_response_code(404);
        exit('File not found');
    }

    $ext = strtolower(pathinfo($rawPath, PATHINFO_EXTENSION));
    if ($ext === 'md' || $ext === 'markdown') {
        header('Content-Type: text/markdown; charset=utf-8');
    } elseif ($ext === 'json') {
        header('Content-Type: application/json; charset=utf-8');
    } elseif ($ext === 'js') {
        header('Content-Type: application/javascript; charset=utf-8');
    } elseif ($ext === 'css') {
        header('Content-Type: text/css; charset=utf-8');
    } else {
        header('Content-Type: text/plain; charset=utf-8');
    }
    header('X-Content-Type-Options: nosniff');
    readfile($rawPath);
    exit;
}

/*************************** ACTIONS ***************************/

// get current path
$path = FM_ROOT_PATH;
if (FM_PATH != '') {
    $path .= '/' . FM_PATH;
}

// check path
if (!is_dir($path)) {
    fm_redirect(FM_SELF_URL . '?p=');
}

// get parent folder
$parent = fm_get_parent_path(FM_PATH);

$objects = is_readable($path) ? scandir($path) : array();
$folders = array();
$files = array();
$current_path = array_slice(explode("/", $path), -1)[0];
if (is_array($objects) && fm_is_exclude_items($current_path, $path)) {
    foreach ($objects as $file) {
        if ($file == '.' || $file == '..') {
            continue;
        }
        if (!FM_SHOW_HIDDEN && substr($file, 0, 1) === '.') {
            continue;
        }
        $new_path = $path . '/' . $file;
        if (@is_file($new_path) && fm_is_exclude_items($file, $new_path)) {
            $files[] = $file;
        } elseif (@is_dir($new_path) && $file != '.' && $file != '..' && fm_is_exclude_items($file, $new_path)) {
            $folders[] = $file;
        }
    }
}

if (!empty($files)) {
    natcasesort($files);
}
if (!empty($folders)) {
    natcasesort($folders);
}

// upload form
if (isset($_GET['upload']) && !FM_READONLY) {
    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path
    //get the allowed file extensions
    function getUploadExt()
    {
        $extArr = explode(',', FM_UPLOAD_EXTENSION);
        if (FM_UPLOAD_EXTENSION && $extArr) {
            array_walk($extArr, function (&$x) {
                $x = ".$x";
            });
            return implode(',', $extArr);
        }
        return '';
    }
    ?>
    <?php print_external('css-dropzone'); ?>
    <div class="path">

        <div class="card mb-2 fm-upload-wrapper" data-bs-theme="<?php echo FM_THEME; ?>">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#fileUploader" data-target="#fileUploader"><i class="fa-solid fa-circle-up"></i> <?php echo lng('UploadingFiles') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#urlUploader" class="js-url-upload" data-target="#urlUploader"><?php echo fm_link_icon(); ?> <?php echo lng('Upload from URL') ?></a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <a href="?p=<?php echo FM_PATH ?>" class="float-right"><i class="fa-solid fa-circle-arrow-left go-back"></i> <?php echo lng('Back') ?></a>
                    <strong><?php echo lng('DestinationFolder') ?></strong>: <?php echo fm_enc(fm_convert_win(FM_PATH)) ?>
                </p>

                <form action="<?php echo htmlspecialchars(FM_SELF_URL) . '?p=' . fm_enc(FM_PATH) ?>" class="dropzone card-tabs-container" id="fileUploader" enctype="multipart/form-data">
                    <input type="hidden" name="p" value="<?php echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" name="fullpath" id="fullpath" value="<?php echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                    <div class="fallback">
                        <input name="file" type="file" multiple />
                    </div>
                </form>

                <div class="upload-url-wrapper card-tabs-container hidden" id="urlUploader">
                    <form id="js-form-url-upload" class="row row-cols-lg-auto g-3 align-items-center" onsubmit="return upload_from_url(this);" method="POST" action="">
                        <input type="hidden" name="type" value="upload" aria-label="hidden" aria-hidden="true">
                        <input type="url" placeholder="URL" name="uploadurl" required class="form-control" style="width: 80%">
                        <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                        <button type="submit" class="btn btn-primary ms-3"><?php echo lng('Upload') ?></button>
                        <div class="lds-facebook">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </form>
                    <div id="js-url-upload__list" class="col-9 mt-3"></div>
                </div>
            </div>
        </div>
    </div>
    <?php print_external('js-dropzone'); ?>
    <script>
        new Dropzone("#fileUploader", {
            chunking: true,
            chunkSize: <?php echo UPLOAD_CHUNK_SIZE; ?>,
            forceChunking: true,
            retryChunks: true,
            retryChunksLimit: 3,
            parallelUploads: 1,
            parallelChunkUploads: false,
            timeout: 120000,
            maxFilesize: "<?php echo MAX_UPLOAD_SIZE; ?>",
            acceptedFiles: "<?php echo getUploadExt() ?>",
            dictDefaultMessage: "<?php echo lng('DropzoneDefaultMessage'); ?>",
            dictFallbackMessage: "<?php echo lng('DropzoneFallbackMessage'); ?>",
            dictFallbackText: "<?php echo lng('DropzoneFallbackText'); ?>",
            dictFileTooBig: "<?php echo lng('DropzoneFileTooBig'); ?>",
            dictInvalidFileType: "<?php echo lng('DropzoneInvalidFileType'); ?>",
            dictResponseError: "<?php echo lng('DropzoneResponseError'); ?>",
            dictCancelUpload: "<?php echo lng('DropzoneCancelUpload'); ?>",
            dictUploadCanceled: "<?php echo lng('DropzoneUploadCanceled'); ?>",
            dictCancelUploadConfirmation: "<?php echo lng('DropzoneCancelUploadConfirmation'); ?>",
            dictRemoveFile: "<?php echo lng('DropzoneRemoveFile'); ?>",
            dictRemoveFileConfirmation: null,
            dictMaxFilesExceeded: "<?php echo lng('DropzoneMaxFilesExceeded'); ?>",
            dictThumbnailError: "<?php echo lng('DropzoneThumbnailError'); ?>",
            init: function() {
                this.on("sending", function(file, xhr, formData) {
                    let _path = (file.fullPath) ? file.fullPath : file.name;
                    document.getElementById("fullpath").value = _path;
                    xhr.ontimeout = (function() {
                        toast('Error: Server Timeout');
                    });
                }).on("success", function(res) {
                    try {
                        let _response = JSON.parse(res.xhr.response);

                        if (_response.status == "error") {
                            toast(_response.info);
                        }
                    } catch (e) {
                        toast("Error: Invalid JSON response");
                    }
                }).on("error", function(file, response) {
                    toast(response);
                });
            }
        });
    </script>
<?php
    fm_show_footer();
    exit;
}

// copy form POST
if (isset($_POST['copy']) && !FM_READONLY) {
    $copy_files = isset($_POST['file']) ? $_POST['file'] : null;
    if (!is_array($copy_files) || empty($copy_files)) {
        fm_set_msg(lng('Nothing selected'), 'alert');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
    }

    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path
?>
    <div class="path">
        <div class="card" data-bs-theme="<?php echo FM_THEME; ?>">
            <div class="card-header">
                <h6><?php echo lng('Select operation to execute') ?></h6>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="p" value="<?php echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" name="finish" value="1">
                    <?php
                    foreach ($copy_files as $cf) {
                        echo '<input type="hidden" name="file[]" value="' . fm_enc($cf) . '">' . PHP_EOL;
                    }
                    ?>
                    
                    <div class="break-word mb-3">
                        <strong><?php echo lng('Files') ?></strong>: <b><?php echo implode('</b>, <b>', array_map('fm_enc', $copy_files)) ?></b>
                    </div>
                    
                    <div class="break-word mb-3">
                        <strong><?php echo lng('SourceFolder') ?>:</strong> 
                        <span dir="ltr" style="display: inline-block; unicode-bidi: embed;"><?php echo fm_enc(fm_convert_win(FM_ROOT_PATH . '/' . FM_PATH)) ?></span>
                    </div>
                    
                    <div class="break-word mb-3">
                        <label for="inp_copy_to" class="mb-0"><strong><?php echo lng('DestinationFolder') ?>:</strong></label>
                        <span dir="ltr" style="display: inline-block; unicode-bidi: embed;"><?php echo FM_ROOT_PATH ?>/</span>
                        <input type="text" name="copy_to" id="inp_copy_to" class="form-control d-inline-block" style="width: 600px;" value="<?php echo fm_enc(FM_PATH) ?>" placeholder="<?php echo lng('EnterFolderNameHint') ?>">
                    </div>
                    
                    <div class="mb-3 p-3 bg-body-tertiary rounded border d-inline-block" data-bs-theme="<?php echo FM_THEME; ?>">
                        <div class="form-check">
                            <input type="checkbox" name="move" value="1" id="js-move-files" class="form-check-input">
                            <label for="js-move-files" class="form-check-label fw-bold"><?php echo lng('Move') ?></label>
                            <div class="form-text small text-muted mt-1">
                                <i class="fa-solid fa-circle-info"></i> <?php echo lng('MoveTip'); ?>
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <a href="?p=<?php echo urlencode(FM_PATH) ?>" class="btn btn-outline-danger"><i class="fa-solid fa-circle-xmark"></i> <?php echo lng('Cancel') ?></a>
                        <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                        <button type="submit" class="btn btn-success" id="js-action-btn"><i class="fa-solid fa-circle-check"></i> <span id="js-action-text"><?php echo lng('Copy') ?></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
    fm_show_footer();
    exit;
}

// copy form
if (isset($_GET['copy']) && !isset($_GET['finish']) && !FM_READONLY) {
    $copy = $_GET['copy'];
    $copy = fm_clean_path($copy);
    if ($copy == '' || !file_exists(FM_ROOT_PATH . '/' . $copy)) {
        fm_set_msg(lng('File not found'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
    }

    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path
?>
    <div class="path">
        <h6><b><?php echo lng('Select operation to execute') ?></b></h6>
        <p class="break-word">
            <strong><?php echo lng('Source path'); ?>:</strong> <span dir="ltr" style="display: inline-block;"><?php echo fm_enc(fm_convert_win(FM_ROOT_PATH . '/' . $copy)) ?></span><br>
            <strong><?php echo lng('DestinationFolder'); ?>:</strong> <span dir="ltr" style="display: inline-block;"><?php echo fm_enc(fm_convert_win(FM_ROOT_PATH . '/' . FM_PATH)) ?></span>
        </p>
        <p>
            <b><a href="?p=<?php echo urlencode(FM_PATH) ?>&amp;copy=<?php echo urlencode($copy) ?>&amp;finish=1"><i class="fa-solid fa-circle-check"></i> <?php echo lng('Copy') ?></a></b> &nbsp;
            <b><a href="?p=<?php echo urlencode(FM_PATH) ?>&amp;copy=<?php echo urlencode($copy) ?>&amp;finish=1&amp;move=1"><i class="fa-solid fa-circle-check"></i> <?php echo lng('Move') ?></a></b> &nbsp;
            <b><a href="?p=<?php echo urlencode(FM_PATH) ?>" class="text-danger"><i class="fa-solid fa-circle-xmark"></i> <?php echo lng('Cancel') ?></a></b>
        </p>
        <p><i><?php echo lng('Select folder') ?></i></p>
        <div class="d-flex mb-4">
            <ul class="list-group shadow-sm" style="width: max-content; max-width: 100%;">
                <?php
                if ($parent !== false) {
                ?>
                    <li class="list-group-item list-group-item-action p-0 border-0 mb-1" style="border-radius: 8px; overflow: hidden;">
                        <a href="?p=<?php echo urlencode($parent) ?>&amp;copy=<?php echo urlencode($copy) ?>" class="d-flex align-items-center text-decoration-none p-3 text-body hover-bg">
                            <i class="fa-solid fa-circle-arrow-left fa-lg text-primary me-3"></i>
                            <span class="fw-bold"><?php echo lng('Back') ?></span>
                        </a>
                    </li>
                <?php
                }
                foreach ($folders as $f) {
                ?>
                    <li class="list-group-item list-group-item-action p-0 border-0 mb-1" style="border-radius: 8px; overflow: hidden;">
                        <a href="?p=<?php echo urlencode(trim(FM_PATH . '/' . $f, '/')) ?>&amp;copy=<?php echo urlencode($copy) ?>" class="d-flex align-items-center text-decoration-none p-3 text-body hover-bg">
                            <i class="fa-regular fa-folder text-warning fa-lg me-3"></i>
                            <span class="text-break"><?php echo fm_convert_win($f) ?></span>
                        </a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
<?php
    fm_show_footer();
    exit;
}

if (isset($_GET['settings']) && !FM_READONLY) {
    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path
    global $cfg, $lang, $lang_list;
?>

    <div class="col-md-8 offset-md-2 pt-3">
        <div class="card mb-2" data-bs-theme="<?php echo FM_THEME; ?>">
            <h6 class="card-header d-flex justify-content-between">
                <span><i class="fa-solid fa-gear"></i> <?php echo lng('Settings') ?></span>
            </h6>
            <div class="card-body">
                <form id="js-settings-form" action="" method="post" data-type="ajax" onsubmit="return save_settings(this)">
                    <input type="hidden" name="type" value="settings" aria-label="hidden" aria-hidden="true">

                    <div class="mt-3 mb-3 row">
                        <label for="js-error-report" class="col-sm-3 col-form-label"><?php echo lng('ErrorReporting') ?></label>
                        <div class="col-sm-9">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="js-error-report" name="js-error-report" value="true" <?php echo $report_errors ? 'checked' : ''; ?> />
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="js-show-hidden" class="col-sm-3 col-form-label"><?php echo lng('ShowHiddenFiles') ?></label>
                        <div class="col-sm-9">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="js-show-hidden" name="js-show-hidden" value="true" <?php echo $show_hidden_files ? 'checked' : ''; ?> />
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="js-hide-cols" class="col-sm-3 col-form-label"><?php echo lng('HideColumns') ?></label>
                        <div class="col-sm-9">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="js-hide-cols" name="js-hide-cols" value="true" <?php echo $hide_Cols ? 'checked' : ''; ?> />
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="js-enable-paging" class="col-sm-3 col-form-label"><?php echo lng('EnablePaging') ?></label>
                        <div class="col-sm-9">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="js-enable-paging" name="js-enable-paging" value="true" <?php echo !empty($cfg->data['enable_paging']) ? 'checked' : ''; ?> />
                            </div>
                            <div class="form-text small text-muted mt-1" style="max-width: 500px;">
                                <i class="fa-solid fa-circle-info"></i> <?php echo lng('PagingInfoHelp'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-sm-10 d-flex gap-3">
                            <button type="submit" class="btn btn-success">
                                <i class="fa-solid fa-circle-check"></i> <?php echo lng('Save'); ?>
                            </button>
                            <button type="button" class="btn btn-primary" onclick="window.location.href='?p='">
                                <i class="fa-solid fa-reply-all"></i> <?php echo lng('Back'); ?>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
    fm_show_footer();
    exit;
}

if (isset($_GET['sitesettings']) && !FM_READONLY) {
    fm_show_header();
    fm_show_nav_path(FM_PATH);
    global $cfg, $lang;
    $scheme = $is_https ? 'https' : 'http';
    $host   = $_SERVER['HTTP_HOST'] ?? 'example.com';
?>
    <div class="col-md-8 offset-md-2 pt-3">
        <div class="card mb-2" data-bs-theme="<?php echo FM_THEME; ?>">
            <h6 class="card-header d-flex justify-content-between">
                <span><i class="fa-solid fa-id-card"></i> <?php echo lng('SiteIdentity') ?></span>
            </h6>
            <div class="card-body">
                <div class="alert alert-info small mb-3 d-inline-flex align-items-start" role="alert">
                    <i class="fa-solid fa-circle-info me-2 mt-1 flex-shrink-0"></i>
                    <div><?php echo sprintf(lng('SiteIdentityHelp'), 'svg/png/jpg/gif/webp/ico/avif'); ?></div>
                </div>
                <form id="js-sitesettings-form" action="" method="post" onsubmit="return save_settings(this)">
                    <input type="hidden" name="type" value="settings">
                    <div class="mb-3 row">
                        <label for="js-site-title" class="col-sm-3 col-form-label"><?php echo lng('SiteTitle') ?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="js-site-title" name="js-site-title" style="max-width: 600px;"
                                value="<?php echo fm_enc($cfg->data['site_title'] ?? ''); ?>"
                                placeholder="<?php echo lng('SiteTitlePlaceholder') ?>">
                            <div class="form-text small text-muted mt-1">
                                <?php echo lng('SiteTitleHelp') ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="js-favicon-path" class="col-sm-3 col-form-label"><?php echo lng('FaviconPath') ?></label>
                        <div class="col-sm-9">
                            <?php $exampleFaviconUrl = $scheme . '://' . $host . '/favicon.ico'; ?>
                            <input type="text" class="form-control" id="js-favicon-path" name="js-favicon-path" style="max-width: 600px;"
                                value="<?php echo fm_enc($cfg->data['favicon_path'] ?? ''); ?>"
                                placeholder="<?php echo str_replace('{url}', fm_enc($exampleFaviconUrl), sprintf(lng('FaviconPathPlaceholder'), '/assets/icons/favicon.svg')); ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="js-logo-path" class="col-sm-3 col-form-label"><?php echo lng('LogoPath') ?></label>
                        <div class="col-sm-9">
                            <?php $exampleLogoUrl = $scheme . '://' . $host . '/logo.png'; ?>
                            <input type="text" class="form-control" id="js-logo-path" name="js-logo-path" style="max-width: 600px;"
                                value="<?php echo fm_enc($cfg->data['logo_path'] ?? ''); ?>"
                                placeholder="<?php echo str_replace('{url}', fm_enc($exampleLogoUrl), sprintf(lng('LogoPathPlaceholder'), '/assets/icons/logo.svg')); ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="js-footer-start-year" class="col-sm-3 col-form-label"><?php echo lng('FooterStartYear') ?></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="js-footer-start-year" name="js-footer-start-year" style="max-width: 600px;"
                                value="<?php echo fm_enc($cfg->data['footer_start_year'] ?? '2017'); ?>"
                                placeholder="<?php echo lng('FooterStartYearPlaceholder') ?>">
                            <div class="form-text small text-muted mt-1">
                                <?php echo sprintf(lng('FooterStartYearHelp'), '<code>none</code>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="js-show-beian" class="col-sm-3 col-form-label"><?php echo lng('ShowBeian') ?></label>
                        <div class="col-sm-9">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="js-show-beian" name="js-show-beian" value="true" <?php echo !empty($cfg->data['show_beian']) ? 'checked' : ''; ?> />
                            </div>
                        </div>
                    </div>
                    <div id="js-beian-fields" class="<?php echo empty($cfg->data['show_beian']) ? 'd-none' : ''; ?>">
                        <div class="mb-3 row">
                            <label for="js-icp" class="col-sm-3 col-form-label"><?php echo lng('ICPNumber') ?></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="js-icp" name="js-icp" style="max-width: 600px;"
                                    value="<?php echo fm_enc($cfg->data['icp'] ?? ''); ?>"
                                    placeholder="<?php echo lng('ICPNumberPlaceholder') ?>">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="js-police" class="col-sm-3 col-form-label"><?php echo lng('PoliceNumber') ?></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="js-police" name="js-police" style="max-width: 600px;"
                                    value="<?php echo fm_enc($cfg->data['police'] ?? ''); ?>"
                                    placeholder="<?php echo lng('PoliceNumberPlaceholder') ?>">
                            </div>
                        </div>
                    </div>    

                    <div class="mb-3 row">
                        <div class="col-sm-10 d-flex gap-3">
                            <button type="submit" class="btn btn-success">
                                <i class="fa-solid fa-circle-check"></i> <?php echo lng('Save'); ?>
                            </button>
                            <a href="?p=" class="btn btn-primary">
                                <i class="fa-solid fa-reply-all"></i> <?php echo lng('Back'); ?>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
    fm_show_footer();
    exit;
}

if (isset($_GET['help'])) {
    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path
    global $cfg, $lang;
?>

    <div class="col-md-8 offset-md-2 pt-3">
        <div class="card mb-2" data-bs-theme="<?php echo FM_THEME; ?>">
            <h6 class="card-header d-flex justify-content-between">
                <span><i class="fa-solid fa-circle-exclamation"></i> <?php echo lng('Help') ?></span>
            </h6>
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <p>
                        <h3><a href="https://github.com/prasathmani/tinyfilemanager" target="_blank" class="app-v-title"> <?php echo lng("AppName")." ".VERSION; ?></a></h3>
                        </p>
                        <p><strong><?php echo lng('Author') ?></strong>: PRAŚATH MANİ</p>
                        <p><strong><?php echo lng('Mail Us') ?></strong>: <a href="mailto:ccpprogrammers@gmail.com">📧<?php echo lng('ContactAuthorEmail') ?></a></p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="https://github.com/prasathmani/tinyfilemanager/wiki" target="_blank"><i class="fa-solid fa-circle-question"></i> <?php echo lng('Help Documents') ?> </a> </li>
                                <li class="list-group-item"><a href="https://github.com/prasathmani/tinyfilemanager/issues" target="_blank"><i class="fa-solid fa-bug"></i> <?php echo lng('Report Issue') ?></a></li>
                                <?php if (!FM_READONLY) { ?>
                                    <li class="list-group-item"><a href="javascript:show_new_pwd();"><i class="fa-solid fa-lock"></i> <?php echo lng('Generate new password hash') ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row js-new-pwd hidden mt-2">
                    <div class="col-12">
                        <form class="form-inline" onsubmit="return new_password_hash(this)" method="POST" action="" autocomplete="off">
                            <input type="hidden" name="type" value="pwdhash" aria-hidden="true">
                            <div class="mb-2">
                                <label class="form-label"><?php echo lng('Generate new password hash') ?></label>
                            </div>
                            <div class="d-flex align-items-center gap-2 mb-2" style="max-width: 520px;">
                                <div class="input-group flex-grow-1">
                                    <span class="input-group-text"><?php echo lng('Password') ?></span>
                                    <input type="text" class="form-control form-control-sm" id="js-pwd-input" name="inputPassword2"
                                        placeholder="<?php echo lng('EnterPasswordOrRandom') ?>" required>
                                </div>
                                <button type="button" class="btn btn-outline-primary btn-sm flex-shrink-0" id="js-pwd-random"
                                        title="<?php echo lng('CreateRandomPassword') ?>">
                                    <svg width="18" height="18" style="vertical-align: middle;" viewBox="0 0 561 561" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m280.5 76.5v-76.5l-102 102 102 102v-76.5c84.15 0 153 68.85 153 153 0 25.5-7.65 51-17.85 71.4l38.25 38.25c17.85-33.15 30.6-68.85 30.6-109.65 0-112.2-91.8-204-204-204zm0 357c-84.15 0-153-68.85-153-153 0-25.5 7.65-51 17.85-71.4l-38.25-38.25c-17.85 33.15-30.6 68.85-30.6 109.65 0 112.2 91.8 204 204 204v76.5l102-102-102-102v76.5z" fill="currentColor"/>
                                    </svg>
                                </button>

                                <button type="submit" class="btn btn-success btn-sm flex-shrink-0 text-nowrap">
                                    <?php echo lng('Generate') ?>
                                </button>
                            </div>
                            <div class="mb-2" style="max-width: 520px;">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="progress flex-grow-1" style="height: 8px;">
                                        <div id="js-pwd-strength-bar" class="progress-bar" role="progressbar"
                                            style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small id="js-pwd-strength-label" class="text-muted" style="min-width: 70px;"></small>
                                </div>
                                <ul id="js-pwd-suggestions" class="small text-muted mt-1 mb-0 ps-3"></ul>
                            </div>
                            <div id="js-pwd-progress" class="d-none my-2" style="max-width: 520px;">
                                <small class="text-muted d-block mt-1"><?php echo lng('GeneratingHash') ?></small>
                                <div class="fm-dots">
                                    <span></span><span></span><span></span><span></span><span></span>
                                    <span></span><span></span><span></span><span></span><span></span>
                                </div>
                            </div>
                            <div class="mb-2" style="max-width: 620px;">
                                <textarea class="form-control form-control-sm" rows="2" readonly id="js-pwd-result"></textarea>
                            </div>
                            <div class="d-flex justify-content-end" style="max-width: 520px;">
                                <button type="button" class="btn btn-sm btn-primary" id="js-pwd-copy">
                                    <?php echo lng('Copy') ?>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="mt-3">
                    <a href="?p=<?php echo urlencode(FM_PATH) ?>" class="btn btn-primary">
                        <i class="fa-solid fa-reply-all"></i> <?php echo lng('Back'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php
    fm_show_footer();
    exit;
}

// file viewer
if (isset($_GET['view'])) {
    $file = $_GET['view'];
    $file = fm_clean_path($file, false);
    $file = str_replace('/', '', $file);
    if ($file == '' || !is_file($path . '/' . $file) || !fm_is_exclude_items($file, $path . '/' . $file)) {
        fm_set_msg(lng('File not found'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
    }

    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path

    $file_url = FM_ROOT_URL . fm_convert_win((FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $file);
    $file_path = $path . '/' . $file;

    $ext = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
    $lowerFilePath = strtolower($file_path);
    if ($ext === 'tgz' || ($ext === 'gz' && substr($lowerFilePath, -7) === '.tar.gz')) {
        $ext = 'tar';
    }
    $mime_type = fm_get_mime_type($file_path);
    $filesize_raw = fm_get_size($file_path);
    $filesize = fm_get_filesize($filesize_raw);

    $is_zip = false;
    $is_gzip = false;
    $is_image = false;
    $is_audio = false;
    $is_swf = false;
    $is_video = false;
    $is_text = false;
    $is_onlineViewer = false;

    $view_title = 'File';
    $filenames = false; // for zip
    $content = ''; // for text
    $online_viewer = strtolower(FM_DOC_VIEWER);
    $isRawView = in_array($ext, ['md', 'markdown', 'sh', 'bash', 'txt', 'log', 'json', 'css', 'js', 'py']);
    if (!$isRawView && is_file($file_path)) {
        $fh = @fopen($file_path, 'r');
        if ($fh) {
            $first_line = fgets($fh, 30);
            if (preg_match('/^\s*#!\s*\/bin\/(bash|sh)/i', $first_line)) {
                $isRawView = true;
            }
            fclose($fh);
        }
    }
    $openHref = $isRawView ? '?p=' . urlencode(FM_PATH) . '&raw=' . urlencode($file) : fm_enc($file_url);
    if ($online_viewer && $online_viewer !== 'false' && in_array($ext, fm_get_onlineViewer_exts())) {
        $is_onlineViewer = true;
    } elseif ($ext == 'zip' || $ext == 'tar') {
        $is_zip = true;
        $view_title = 'Archive';
        $filenames = fm_get_zip_info($file_path, $ext);
    } elseif (in_array($ext, fm_get_image_exts()) || $ext === 'svg') {
        $is_image = true;
        $view_title = 'Image';
    } elseif (in_array($ext, fm_get_audio_exts())) {
        $is_audio = true;
        $view_title = 'Audio';
    } elseif (in_array($ext, fm_get_video_exts())) {
        $is_video = true;
        $view_title = 'Video';
    } elseif ($ext == 'swf') {
        $is_swf = true;
        $view_title = 'Flash';
    } elseif (in_array($ext, fm_get_text_exts()) || substr($mime_type, 0, 4) == 'text' || in_array($mime_type, fm_get_text_mimes()) || $ext === 'svg') {
        $is_text = true;
        $content = file_get_contents($file_path);
    }

?>
    <div class="row">
        <div class="col-12">
            <ul class="list-group w-50 my-3" data-bs-theme="<?php echo FM_THEME; ?>">
                <li class="list-group-item active" aria-current="true"><strong><?php echo lng($view_title) ?>:</strong> <span dir="ltr" style="display: inline-block;"><?php echo fm_enc(fm_convert_win($file)) ?></span></li>
                <?php $display_path = fm_get_display_path($file_path); ?>
                <li class="list-group-item"><strong><?php echo $display_path['label']; ?>:</strong> <span dir="ltr" style="display: inline-block;"><?php echo $display_path['path']; ?></span></li>
                <li class="list-group-item"><strong><?php echo lng('Date Modified') ?>:</strong> <span dir="ltr" style="display: inline-block;"><?php echo date(FM_DATETIME_FORMAT, filemtime($file_path)); ?></span></li>
                <li class="list-group-item"><strong><?php echo lng('File size') ?>:</strong> <span dir="ltr" style="display: inline-block;"><?php echo ($filesize_raw <= 1000) ? "$filesize_raw bytes" : $filesize; ?></span></li>
                <li class="list-group-item"><strong><?php echo lng('MIME-type') ?>:</strong> <span dir="ltr" style="display: inline-block;"><?php echo $mime_type ?></span></li>
                <?php
                // ZIP info
                if (($is_zip || $is_gzip) && $filenames !== false) {
                    $total_files = 0;
                    $total_comp = 0;
                    $total_uncomp = 0;
                    foreach ($filenames as $fn) {
                        if (!$fn['folder']) {
                            $total_files++;
                        }
                        $total_comp += $fn['compressed_size'];
                        $total_uncomp += $fn['filesize'];
                    }
                ?>
                    <li class="list-group-item"><?php echo lng('Files in archive') ?>: <?php echo $total_files ?></li>
                    <li class="list-group-item"><?php echo lng('Total size') ?>: <?php echo fm_get_filesize($total_uncomp) ?></li>
                    <li class="list-group-item"> <?php echo lng('Size in archive') ?>: <?php echo fm_get_filesize($total_comp) ?></li>
                    <li class="list-group-item"><?php echo lng('Compression') ?>: <?php echo round(($total_comp / max($total_uncomp, 1)) * 100) ?>%</li>
                <?php
                }
                // Image info
                if ($is_image) {
                    $width = 0; $height = 0;
                    if ($ext === 'svg') {
                        $svg_content = file_get_contents($file_path);
                        if (preg_match('/width="([0-9.]+)(px)?"/', $svg_content, $matches)) $width = $matches[1];
                        if (preg_match('/height="([0-9.]+)(px)?"/', $svg_content, $matches)) $height = $matches[1];
                        if ((!$width || !$height) && preg_match('/viewBox="([0-9.]+)\s+([0-9.]+)\s+([0-9.]+)\s+([0-9.]+)"/', $svg_content, $matches)) {
                            $width = $matches[3];
                            $height = $matches[4];
                        }
                    } else {
                        $image_size = getimagesize($file_path);
                        $width = isset($image_size[0]) ? $image_size[0] : '0';
                        $height = isset($image_size[1]) ? $image_size[1] : '0';
                    }
                    $dimensions = '<span dir="ltr">' . $width . ' x ' . $height . '</span>';
                    echo '<li class="list-group-item"><strong>' . lng('Image size') . ':</strong> ' . $dimensions . '</li>';
                }
                // Text info
                if ($is_text) {
                    $is_utf8 = fm_is_utf8($content);
                    if (function_exists('iconv')) {
                        if (!$is_utf8) {
                            $content = iconv(FM_ICONV_INPUT_ENC, 'UTF-8//IGNORE', $content);
                        }
                    }
                    echo '<li class="list-group-item"><strong>' . lng('Charset') . ':</strong> ' . ($is_utf8 ? 'utf-8' : '8 bit') . '</li>';
                }
                ?>
            </ul>
            <div class="btn-group btn-group-sm flex-wrap" role="group">
                <form method="post" class="d-inline mb-0 btn btn-outline-primary" action="?p=<?php echo urlencode(FM_PATH) ?>&amp;dl=<?php echo urlencode($file) ?>">
                    <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                    <button type="submit" class="btn btn-link btn-sm text-decoration-none fw-bold p-0"><i class="fa-solid fa-cloud-arrow-down"></i> <?php echo lng('Download') ?></button>
                </form>
                <?php if (!FM_READONLY): ?>
                    <a class="fw-bold btn btn-outline-primary" title="<?php echo lng('Delete') ?>" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;del=<?php echo urlencode($file) ?>" onclick="confirmDialog(event, 1209, '<?php echo lng('Delete') . ' ' . lng('File'); ?>','<?php echo urlencode($file); ?>', this.href);"> <i class="fa-solid fa-trash-can"></i> <?php echo lng('Delete') ?></a>
                <?php endif; ?>
                <?php if ($is_swf): ?>
                    <a class="fw-bold btn btn-outline-primary" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;view=<?php echo urlencode($file) ?>" target="_blank">
                        <i class="fa-solid fa-square-up-right"></i> <?php echo lng('Open') ?>
                    </a>
                <?php else: ?>
                    <a class="fw-bold btn btn-outline-primary" href="<?php echo $openHref ?>" target="_blank"><i class="fa-solid fa-square-up-right"></i> <?php echo lng('Open') ?></a>
                <?php endif; ?>
                <?php
                // ZIP actions
                if (!FM_READONLY && ($is_zip || $is_gzip) && $filenames !== false) {
                    $zip_name = pathinfo($file_path, PATHINFO_FILENAME);
                ?>
                    <form method="post" class="d-inline btn btn-outline-primary mb-0">
                        <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                        <input type="hidden" name="unzip" value="<?php echo urlencode($file); ?>">
                        <button type="submit" class="btn btn-link text-decoration-none fw-bold p-0 border-0" style="font-size: 14px;"><i class="fa-solid fa-circle-check"></i> <?php echo lng('UnZip') ?></button>
                    </form>
                    <form method="post" class="d-inline btn btn-outline-primary mb-0">
                        <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                        <input type="hidden" name="unzip" value="<?php echo urlencode($file); ?>">
                        <input type="hidden" name="tofolder" value="1">
                        <button type="submit" class="btn btn-link text-decoration-none fw-bold p-0" style="font-size: 14px;" title="<?php echo lng('UnZipToFolder') ?> <?php echo fm_enc($zip_name) ?>"><i class="fa-solid fa-circle-check"></i> <?php echo lng('UnZipToFolder') ?></button>
                    </form>
                <?php
                }
                if (($is_text || $ext === 'svg') && !FM_READONLY) {
                ?>
                    <a class="fw-bold btn btn-outline-primary edit-file" href="?p=<?php echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php echo urlencode($file) ?>">
                        <i class="fa-solid fa-file-lines"></i> <?php echo lng('Edit') ?>
                    </a>
                    <a class="fw-bold btn btn-outline-primary edit-file" href="?p=<?php echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php echo urlencode($file) ?>&amp;env=ace">
                        <i class="fa-solid fa-file-code"></i> <?php echo lng('AdvancedEditor') ?>
                    </a>
                <?php } ?>
                <a class="fw-bold btn btn-outline-primary" href="?p=<?php echo urlencode(FM_PATH) ?>"><i class="fa-solid fa-circle-arrow-left go-back"></i> <?php echo lng('Back') ?></a>
            </div>
            <div class="row mt-3">
                <?php
                if ($is_onlineViewer) {
                    if ($online_viewer == 'google') {
                        echo '<iframe src="https://docs.google.com/viewer?embedded=true&hl=en&url=' . fm_enc($file_url) . '" frameborder="no" style="width:100%;min-height:460px"></iframe>';
                    } else if ($online_viewer == 'microsoft') {
                        echo '<iframe src="https://view.officeapps.live.com/op/embed.aspx?src=' . fm_enc($file_url) . '" frameborder="no" style="width:100%;min-height:460px"></iframe>';
                    }
                } elseif ($is_zip) {
                    // ZIP content
                    if ($filenames !== false) {
                        echo '<code class="maxheight">';
                        foreach ($filenames as $fn) {
                            if ($fn['folder']) {
                                echo '<b>' . fm_enc($fn['name']) . '</b><br>';
                            } else {
                                echo fm_enc($fn['name']) . ' (' . fm_get_filesize($fn['filesize']) . ')<br>';
                            }
                        }
                        echo '</code>';
                    } else {
                        echo '<p>' . lng('Error while fetching archive info') . '</p>';
                    }
                } elseif ($is_image) {
                    // Image content
                    if (in_array($ext, array('gif', 'jpg', 'jpeg', 'png', 'bmp', 'ico', 'svg', 'webp', 'avif'))) {
                        if ($ext === 'svg') {
                            echo '<div class="text-center" style="cursor: zoom-in;" data-bs-toggle="modal" data-bs-target="#imageModal" data-full-src="' . fm_enc($file_url) . '">';
                            echo '  <object type="image/svg+xml" data="' . fm_enc($file_url) . '" class="preview-img" style="max-width: 100%; max-height: 80vh; border: none; pointer-events: none;"></object>';
                            echo '</div>';
                        } else {
                            echo '<p class="text-center"><img src="' . fm_enc($file_url) . '" alt="image" class="preview-img" data-bs-toggle="modal" data-bs-target="#imageModal" data-full-src="' . fm_enc($file_url) . '" style="cursor: zoom-in;"></p>';
                        }
                    }
                } elseif ($is_audio) {
                    echo '<div class="audio-player text-center mt-3" style="position: relative;">';
                    echo '  <div class="audio-visualizer" id="audioVisualizer">';
                    for ($i = 0; $i < 24; $i++) echo '<span></span>';
                    echo '  </div>';
                    echo '  <audio id="audioPlayer" src="' . fm_enc($file_url) . '" preload="metadata" crossorigin="anonymous"></audio>';
                    echo '  <div id="audioLoadingMask" class="audio-loading-mask">';
                    echo '      <div class="spinner-border text-primary" role="status" style="width: 1.5rem; height: 1.5rem;"></div>';
                    echo '      <span class="ms-2">' . lng('AudioLoading') . '<span class="loading-dots"></span></span>';
                    echo '  </div>';
                    
                    echo '  <div class="audio-controls mt-2">';
                    echo '      <button type="button" class="btn btn-sm btn-primary" id="audioToggle"><i class="fa-solid fa-circle-play"></i></button>';
                    echo '      <span class="audio-time" id="audioTime">00:00 / 00:00</span>';
                    echo '      <input type="range" id="audioSeek" value="0" min="0" max="100" step="0.1" class="audio-seek">';
                    echo '  </div>';
                    echo '</div>';
                } elseif ($is_swf) {
                    echo '<div class="text-center mt-3" style="width:100%; max-width:800px; margin:0 auto 24px; position: relative;">';
                    echo '  <div id="ruffle-container" style="width:100%; height: 60vh; max-height: 600px; background: #000; overflow: hidden; border-radius: 8px; position: relative;"></div>';
                    echo '  <div id="swfLoadingMask" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.8); color: #fff; display: flex; flex-direction: column; align-items: center; justify-content: center; z-index: 10; border-radius: 8px;">';
                    echo '      <i class="fa-solid fa-compact-disc fa-spin fa-2x mb-3"></i>';
                    echo '      <span>' . lng('SwfLoading') . '<span class="loading-dots"></span></span>';
                    echo '  </div>';
                    echo '</div>';
                    echo '<div style="height: 50px;"></div>';
                } elseif ($is_video) {
                    echo '<div class="preview-video"><video src="' . fm_enc($file_url) . '" width="640" height="360" controls preload="metadata"></video></div>';
                } elseif ($is_text) {
                    if ($ext === 'md' || $ext === 'markdown') {
                        $mdSource = str_replace(array("\r\n", "\r"), "\n", $content);
                        $mdContent = preg_replace_callback('/^\|.*\|$/m', function ($m) {
                            return preg_replace('/(?<=[^\s*|])\*(?=[^\s*|])/', '\\*', $m[0]);
                        }, $mdSource);
                        echo '<div id="markdown-content" class="card p-4" style="background-color: #fff; border-radius: 8px;"></div>';
                        echo '<script>window.rawMarkdown = ' . json_encode($mdContent, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) . ';</script>';
                    } else {
                        if (FM_USE_HIGHLIGHTJS) {
                            $hljs_classes = array(
                                'shtml' => 'xml',
                                'htaccess' => 'apache',
                                'phtml' => 'php',
                                'lock' => 'json',
                                'svg' => 'xml',
                            );
                            $hljs_class = isset($hljs_classes[$ext]) ? 'lang-' . $hljs_classes[$ext] : 'lang-' . $ext;
                            if (empty($ext) || in_array(strtolower($file), fm_get_text_names()) || preg_match('#\.min\.(css|js)$#i', $file)) {
                                $hljs_class = 'nohighlight';
                            }
                            $content = '<pre class="with-hljs"><code class="' . $hljs_class . '">' . fm_enc($content) . '</code></pre>';
                        } elseif (in_array($ext, array('php', 'php4', 'php5', 'phtml', 'phps'))) {
                            $content = highlight_string($content, true);
                        } else {
                            $content = '<pre>' . fm_enc($content) . '</pre>';
                        }
                        echo $content;
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width: fit-content; width: auto;">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body p-0 text-center">
                    <div class="position-relative d-inline-block">
                        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-2" data-bs-dismiss="modal" aria-label="Close" style="z-index: 10; background-color: #fff; border-radius: 50%; padding: 8px;"></button>
                        <object id="imageModalObject" type="image/svg+xml" data="" style="max-height: 85vh; max-width: 85vw; width: 100%; height: 85vh; object-fit: contain; display: none; border: none; pointer-events: none;"></object>
                        <img id="imageModalImg" src="" alt="" class="img-fluid" style="max-height: 90vh; max-width: 90vw; display: block;">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    fm_show_footer();
    exit;
}

// file editor
if (isset($_GET['edit']) && !FM_READONLY) {
    $file = $_GET['edit'];
    $file = fm_clean_path($file, false);
    $file = str_replace('/', '', $file);
    if ($file == '' || !is_file($path . '/' . $file) || !fm_is_exclude_items($file, $path . '/' . $file)) {
        fm_set_msg(lng('File not found'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
    }
    $editFile = ' : <i><b>' . $file . '</b></i>';
    header('X-XSS-Protection:0');
    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path

    $file_url = FM_ROOT_URL . fm_convert_win((FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $file);
    $file_path = $path . '/' . $file;

    // normal editer
    $isNormalEditor = true;
    if (isset($_GET['env'])) {
        if ($_GET['env'] == "ace") {
            $isNormalEditor = false;
        }
    }

    // Save File
    if (isset($_POST['savedata'])) {
        $writedata = $_POST['savedata'];
        $fd = fopen($file_path, "w");
        @fwrite($fd, $writedata);
        fclose($fd);
        fm_set_msg(lng('File Saved Successfully'));
        fm_write_log('Edit', "Saved file '{$file}' in path '" . FM_PATH . "'");
    }

    $ext = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
    $mime_type = fm_get_mime_type($file_path);
    $filesize = filesize($file_path);
    $is_text = false;
    $content = ''; // for text

    if (in_array($ext, fm_get_text_exts()) || substr($mime_type, 0, 4) == 'text' || in_array($mime_type, fm_get_text_mimes()) || $ext === 'svg') {
        $is_text = true;
        $content = file_get_contents($file_path);
    }

?>
    <div class="path">
        <div class="row">
            <div class="col-xs-12 col-sm-5 col-lg-6 pt-1">
                <div class="btn-toolbar" role="toolbar">
                    <?php if (!$isNormalEditor) { ?>
                        <div class="btn-group js-ace-toolbar">
                            <button data-cmd="none" data-option="fullscreen" class="btn btn-sm btn-outline-secondary" id="js-ace-fullscreen" title="<?php echo lng('Fullscreen') ?>"><i class="fa-solid fa-up-right-and-down-left-from-center" title="<?php echo lng('Fullscreen') ?>"></i></button>
                            <button data-cmd="find" class="btn btn-sm btn-outline-secondary" id="js-ace-search" title="<?php echo lng('Search') ?>"><i class="fa-solid fa-magnifying-glass" title="<?php echo lng('Search') ?>"></i></button>
                            <button data-cmd="undo" class="btn btn-sm btn-outline-secondary" id="js-ace-undo" title="<?php echo lng('Undo') ?>"><i class="fa-solid fa-rotate-left" title="<?php echo lng('Undo') ?>"></i></button>
                            <button data-cmd="redo" class="btn btn-sm btn-outline-secondary" id="js-ace-redo" title="<?php echo lng('Redo') ?>"><i class="fa-solid fa-rotate-right" title="<?php echo lng('Redo') ?>"></i></button>
                            <button data-cmd="none" data-option="wrap" class="btn btn-sm btn-outline-secondary" id="js-ace-wordWrap" title="<?php echo lng('Word Wrap') ?>"><i class="fa-solid fa-text-width" title="<?php echo lng('Word Wrap') ?>"></i></button>
                            <select id="js-ace-mode" data-type="mode" title="<?php echo lng('Select Document Type') ?>" class="btn-outline-secondary border-start-0 d-none d-md-block">
                                <option>-- <?php echo lng('Select Mode') ?> --</option>
                            </select>
                            <select id="js-ace-theme" data-type="theme" title="<?php echo lng('Select Theme') ?>" class="btn-outline-secondary border-start-0 d-none d-lg-block">
                                <option>-- <?php echo lng('Select Theme') ?> --</option>
                            </select>
                            <select id="js-ace-fontSize" data-type="fontSize" title="<?php echo lng('Select Font Size') ?>" class="btn-outline-secondary border-start-0 d-none d-lg-block">
                                <option>-- <?php echo lng('Select Font Size') ?> --</option>
                            </select>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="edit-file-actions col-xs-12 col-sm-7 col-lg-6 text-end pt-1">
                <div class="btn-group">
                    <a title=" <?php echo lng('Back') ?>" class="btn btn-sm btn-outline-primary" href="?p=<?php echo urlencode(trim(FM_PATH)) ?>&amp;view=<?php echo urlencode($file) ?>"><i class="fa-solid fa-reply-all"></i> <?php echo lng('Back') ?></a>
                    <a title="<?php echo lng('BackUp') ?>" class="btn btn-sm btn-outline-primary" href="javascript:void(0);" onclick="backup('<?php echo urlencode(trim(FM_PATH)) ?>','<?php echo urlencode($file) ?>')"><i class="fa-solid fa-database"></i> <?php echo lng('BackUp') ?></a>
                    <?php if ($is_text) { ?>
                        <?php if ($isNormalEditor) { ?>
                            <a title="Advanced" class="btn btn-sm btn-outline-primary" href="?p=<?php echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php echo urlencode($file) ?>&amp;env=ace"><i class="fa-solid fa-pen-to-square"></i> <?php echo lng('AdvancedEditor') ?></a>
                            <button type="button" class="btn btn-sm btn-success" name="Save" data-url="<?php echo fm_enc($file_url) ?>" onclick="edit_save(this,'nrl')"><i class="fa-solid fa-floppy-disk"></i> <?php echo lng('Save') ?>
                            </button>
                        <?php } else { ?>
                            <a title="Plain Editor" class="btn btn-sm btn-outline-primary" href="?p=<?php echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php echo urlencode($file) ?>"><i class="fa-solid fa-text-height"></i> <?php echo lng('NormalEditor') ?></a>
                            <button type="button" class="btn btn-sm btn-success" name="Save" data-url="<?php echo fm_enc($file_url) ?>" onclick="edit_save(this,'ace')"><i class="fa-solid fa-floppy-disk"></i> <?php echo lng('Save') ?>
                            </button>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php
        if ($is_text && $isNormalEditor) {
            echo '<textarea class="mt-2" id="normal-editor" rows="33" cols="120" style="width: 99.5%; font-family: ui-monospace, SFMono-Regular, Menlo, Consolas, monospace; line-height: 1.6; padding: 12px; border-radius: 6px; border: 1px solid #d0d7de; outline: none;">' . htmlspecialchars($content) . '</textarea>';
            echo '<script>document.addEventListener("keydown", function(e) {if ((window.navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)  && e.keyCode == 83) { e.preventDefault();edit_save(this,"nrl");}}, false);</script>';
        } elseif ($is_text) {
            echo '<div id="editor" contenteditable="true">' . htmlspecialchars($content) . '</div>';
        } else {
            fm_set_msg(lng('FILE EXTENSION IS NOT SUPPORTED'), 'error');
        }
        ?>
    </div>
<?php
    fm_show_footer();
    exit;
}

// chmod (not for Windows)
if (isset($_GET['chmod']) && !FM_READONLY && !FM_IS_WIN) {
    $file = $_GET['chmod'];
    $file = fm_clean_path($file);
    $file = str_replace('/', '', $file);
    if ($file == '' || (!is_file($path . '/' . $file) && !is_dir($path . '/' . $file))) {
        fm_set_msg(lng('File not found'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
    }

    fm_show_header(); // HEADER
    fm_show_nav_path(FM_PATH); // current path

    $file_url = FM_ROOT_URL . (FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $file;
    $file_path = $path . '/' . $file;

    $mode = fileperms($path . '/' . $file);
?>
    <div class="path">
        <div class="card mb-2" data-bs-theme="<?php echo FM_THEME; ?>">
            <h6 class="card-header">
                <?php echo lng('ChangePermissions') ?>
            </h6>
            <div class="card-body">
                <p class="card-text">
                    <?php $display_path = fm_get_display_path($file_path); ?>
                    <?php echo $display_path['label']; ?>: <?php echo $display_path['path']; ?><br>
                </p>
                <form action="" method="post">
                    <input type="hidden" name="p" value="<?php echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" name="chmod" value="<?php echo fm_enc($file) ?>">

                    <table class="table compact-table" data-bs-theme="<?php echo FM_THEME; ?>">
                        <tr>
                            <td></td>
                            <td><b><?php echo lng('Owner') ?></b></td>
                            <td><b><?php echo lng('Group') ?></b></td>
                            <td><b><?php echo lng('Other') ?></b></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php echo lng('Read') ?></b></td>
                            <td><label><input type="checkbox" name="ur" value="1" <?php echo ($mode & 00400) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="gr" value="1" <?php echo ($mode & 00040) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="or" value="1" <?php echo ($mode & 00004) ? ' checked' : '' ?>></label></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php echo lng('Write') ?></b></td>
                            <td><label><input type="checkbox" name="uw" value="1" <?php echo ($mode & 00200) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="gw" value="1" <?php echo ($mode & 00020) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="ow" value="1" <?php echo ($mode & 00002) ? ' checked' : '' ?>></label></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php echo lng('Execute') ?></b></td>
                            <td><label><input type="checkbox" name="ux" value="1" <?php echo ($mode & 00100) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="gx" value="1" <?php echo ($mode & 00010) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="ox" value="1" <?php echo ($mode & 00001) ? ' checked' : '' ?>></label></td>
                        </tr>
                    </table>

                    <p>
                        <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                        <b><a href="?p=<?php echo urlencode(FM_PATH) ?>" class="btn btn-outline-primary"><i class="fa-solid fa-circle-xmark"></i> <?php echo lng('Cancel') ?></a></b>&nbsp;
                        <button type="submit" class="btn btn-success"><i class="fa-solid fa-circle-check"></i> <?php echo lng('Change') ?></button>
                    </p>
                </form>
            </div>
        </div>
    </div>
<?php
    fm_show_footer();
    exit;
}

// --- TINYFILEMANAGER MAIN ---
fm_show_header(); // HEADER
fm_show_nav_path(FM_PATH); // current path

// show alert messages
fm_show_message();

$num_files = count($files);
$num_folders = count($folders);
$all_files_size = 0;
?>
<form action="" method="post" class="pt-3">
    <input type="hidden" name="p" value="<?php echo fm_enc(FM_PATH) ?>">
    <input type="hidden" name="group" value="1">
    <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-sm" id="main-table" data-bs-theme="<?php echo FM_THEME; ?>">
            <thead class="thead-white">
                <tr>
                    <?php if (!FM_READONLY): ?>
                        <th style="width:3%" class="custom-checkbox-header">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="js-select-all-items" name="select_all" onclick="checkbox_toggle()">
                                <label class="custom-control-label" for="js-select-all-items"></label>
                            </div>
                        </th><?php endif; ?>
                    <th><?php echo lng('Name') ?></th>
                    <th><?php echo lng('Size') ?></th>
                    <th><?php echo lng('Modified') ?></th>
                    <?php if (!FM_IS_WIN && !$hide_Cols): ?>
                        <th><?php echo lng('Perms') ?></th>
                        <th><?php echo lng('Owner') ?></th><?php endif; ?>
                    <th><?php echo lng('Actions') ?></th>
                </tr>
            </thead>
            <?php
            // link to parent folder
            if ($parent !== false) {
            ?>
                <tr><?php if (!FM_READONLY): ?>
                    <td class="nosort"></td><?php endif; ?>
                    <td class="border-0" data-sort><a href="?p=<?php echo urlencode($parent) ?>"><i class="fa-solid fa-circle-arrow-left go-back"></i> <?php echo lng('ParentDirectory') ?></a></td>
                    <td class="border-0" data-order></td>
                    <td class="border-0" data-order></td>
                    <td class="border-0"></td>
                    <?php if (!FM_IS_WIN && !$hide_Cols) { ?>
                        <td class="border-0"></td>
                        <td class="border-0"></td>
                    <?php } ?>
                </tr>
            <?php
            }
            $ii = 3399;
            foreach ($folders as $f) {
                $is_link = is_link($path . '/' . $f);
                $img = $is_link ? 'icon-link_folder' : 'fa-regular fa-folder';
                $modif_raw = filemtime($path . '/' . $f);
                $modif = date(FM_DATETIME_FORMAT, $modif_raw);
                $date_sorting = strtotime(date("F d Y H:i:s.", $modif_raw));
                $filesize_raw = "";
                $filesize = lng('Folder');
                $perms = substr(decoct(fileperms($path . '/' . $f)), -4);
                $owner = array('name' => '?'); 
                $group = array('name' => '?');
                if (function_exists('posix_getpwuid') && function_exists('posix_getgrgid')) {
                    try {
                        $owner_id = fileowner($path . '/' . $f);
                        if ($owner_id != 0) {
                            $owner_info = posix_getpwuid($owner_id);
                            if ($owner_info) {
                                $owner =  $owner_info;
                            }
                        }
                        $group_id = filegroup($path . '/' . $f);
                        $group_info = posix_getgrgid($group_id);
                        if ($group_info) {
                            $group =  $group_info;
                        }
                    } catch (Exception $e) {
                        error_log("exception:" . $e->getMessage());
                    }
                }
            ?>
                <tr>
                    <?php if (!FM_READONLY): ?>
                        <td class="custom-checkbox-td">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="<?php echo $ii ?>" name="file[]" value="<?php echo fm_enc($f) ?>">
                                <label class="custom-control-label" for="<?php echo $ii ?>"></label>
                            </div>
                        </td>
                    <?php endif; ?>
                    <td data-sort=<?php echo fm_convert_win(fm_enc($f)) ?>>
                        <div class="filename">
                            <a href="?p=<?php echo urlencode(trim(FM_PATH . '/' . $f, '/')) ?>"><i class="<?php echo $img ?>"></i> <?php echo fm_convert_win(fm_enc($f)) ?></a>
                            <?php echo ($is_link ? ' &rarr; <i>' . readlink($path . '/' . $f) . '</i>' : '') ?>
                        </div>
                    </td>
                    <td data-order="a-<?php echo str_pad($filesize_raw, 18, "0", STR_PAD_LEFT); ?>">
                        <?php echo $filesize; ?>
                    </td>
                    <td data-order="a-<?php echo $date_sorting; ?>"><?php echo $modif ?></td>
                    <?php if (!FM_IS_WIN && !$hide_Cols): ?>
                        <td>
                            <?php if (!FM_READONLY): ?><a title="Change Permissions" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;chmod=<?php echo urlencode($f) ?>"><?php echo $perms ?></a><?php else: ?><?php echo $perms ?><?php endif; ?>
                        </td>
                        <td>
                            <?php echo $owner['name'] . ':' . $group['name'] ?>
                        </td>
                    <?php endif; ?>
                    <td class="inline-actions"><?php if (!FM_READONLY): ?>
                            <a class="action-delete" title="<?php echo lng('Delete') ?>" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;del=<?php echo urlencode($f) ?>" onclick="confirmDialog(event, '1028','<?php echo lng('Delete') . ' ' . lng('Folder'); ?>','<?php echo urlencode($f) ?>', this.href);"> <i class="fa-solid fa-trash-can" aria-hidden="true"></i></a>
                            <a class="action-rename" title="<?php echo lng('Rename') ?>" href="#" onclick="rename('<?php echo fm_enc(addslashes(FM_PATH)) ?>', '<?php echo fm_enc(addslashes($f)) ?>');return false;"><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i></a>
                            <a class="action-copy" title="<?php echo lng('CopyTo') ?>..." href="?p=&amp;copy=<?php echo urlencode(trim(FM_PATH . '/' . $f, '/')) ?>"><i class="fa-regular fa-copy" aria-hidden="true"></i></a>
                        <?php endif; ?>
                        <a class="action-link" title="<?php echo lng('DirectLink') ?>" href="<?php echo fm_enc(FM_ROOT_URL . (FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $f . '/') ?>" target="_blank"><?php echo fm_link_icon(); ?></a>
                    </td>
                </tr>
            <?php
                flush();
                $ii++;
            }
            $ik = 8002;
            foreach ($files as $f) {
                $is_link = is_link($path . '/' . $f);
                $img = $is_link ? 'fa-regular fa-file-lines' : fm_get_file_icon_class($path . '/' . $f);
                $modif_raw = filemtime($path . '/' . $f);
                $modif = date(FM_DATETIME_FORMAT, $modif_raw);
                $date_sorting = strtotime(date("F d Y H:i:s.", $modif_raw));
                $filesize_raw = fm_get_size($path . '/' . $f);
                $filesize = fm_get_filesize($filesize_raw);
                $filelink = '?p=' . urlencode(FM_PATH) . '&amp;view=' . urlencode($f);
                $all_files_size += $filesize_raw;
                $perms = substr(decoct(fileperms($path . '/' . $f)), -4);
                $owner = array('name' => '?'); 
                $group = array('name' => '?');
                if (function_exists('posix_getpwuid') && function_exists('posix_getgrgid')) {
                    try {
                        $owner_id = fileowner($path . '/' . $f);
                        if ($owner_id != 0) {
                            $owner_info = posix_getpwuid($owner_id);
                            if ($owner_info) {
                                $owner =  $owner_info;
                            }
                        }
                        $group_id = filegroup($path . '/' . $f);
                        $group_info = posix_getgrgid($group_id);
                        if ($group_info) {
                            $group =  $group_info;
                        }
                    } catch (Exception $e) {
                        error_log("exception:" . $e->getMessage());
                    }
                }
            ?>
                <tr>
                    <?php if (!FM_READONLY): ?>
                        <td class="custom-checkbox-td">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="<?php echo $ik ?>" name="file[]" value="<?php echo fm_enc($f) ?>">
                                <label class="custom-control-label" for="<?php echo $ik ?>"></label>
                            </div>
                        </td><?php endif; ?>
                    <td data-sort=<?php echo fm_enc($f) ?>>
                        <div class="filename">
                            <?php
                            if (in_array(strtolower(pathinfo($f, PATHINFO_EXTENSION)), array('gif', 'jpg', 'jpeg', 'png', 'bmp', 'ico', 'svg', 'webp', 'avif'))): ?>
                                <?php $imagePreview = fm_enc(FM_ROOT_URL . (FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $f); ?>
                                <a href="<?php echo $filelink ?>" data-preview-image="<?php echo $imagePreview ?>" title="<?php echo fm_enc($f) ?>">
                                <?php else: ?>
                                    <a href="<?php echo $filelink ?>" title="<?php echo $f ?>">
                                    <?php endif; ?>
                                    <i class="<?php echo $img ?>"></i> <?php echo fm_convert_win(fm_enc($f)) ?>
                                    </a>
                                    <?php echo ($is_link ? ' &rarr; <i>' . readlink($path . '/' . $f) . '</i>' : '') ?>
                        </div>
                    </td>
                    <td data-order="b-<?php echo str_pad($filesize_raw, 18, "0", STR_PAD_LEFT); ?>"><span title="<?php printf('%s bytes', $filesize_raw) ?>">
                            <?php echo $filesize; ?>
                        </span></td>
                    <td data-order="b-<?php echo $date_sorting; ?>"><?php echo $modif ?></td>
                    <?php if (!FM_IS_WIN && !$hide_Cols): ?>
                        <td><?php if (!FM_READONLY): ?><a title="<?php echo 'Change Permissions' ?>" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;chmod=<?php echo urlencode($f) ?>"><?php echo $perms ?></a><?php else: ?><?php echo $perms ?><?php endif; ?>
                        </td>
                        <td><?php echo fm_enc($owner['name'] . ':' . $group['name']) ?></td>
                    <?php endif; ?>
                    <td class="inline-actions">
                        <?php if (!FM_READONLY): ?>
                            <a class="action-delete" title="<?php echo lng('Delete') ?>" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;del=<?php echo urlencode($f) ?>" onclick="confirmDialog(event, 1209, '<?php echo lng('Delete') . ' ' . lng('File'); ?>','<?php echo urlencode($f); ?>', this.href);"> <i class="fa-solid fa-trash-can"></i></a>
                            <a class="action-rename" title="<?php echo lng('Rename') ?>" href="#" onclick="rename('<?php echo fm_enc(addslashes(FM_PATH)) ?>', '<?php echo fm_enc(addslashes($f)) ?>');return false;"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a class="action-copy" title="<?php echo lng('CopyTo') ?>..." href="?p=<?php echo urlencode(FM_PATH) ?>&amp;copy=<?php echo urlencode(trim(FM_PATH . '/' . $f, '/')) ?>"><i class="fa-regular fa-copy"></i></a>
                        <?php endif; ?>
                        <?php $isSwfFile = strtolower(pathinfo($f, PATHINFO_EXTENSION)) === 'swf'; ?>
                        <a class="action-link" title="<?php echo lng('DirectLink') ?>" href="<?php echo $isSwfFile ? '?p=' . urlencode(FM_PATH) . '&amp;view=' . urlencode($f) : fm_enc(FM_ROOT_URL . (FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $f) ?>" target="_blank"><?php echo fm_link_icon(); ?></a>
                        <a class="action-download" title="<?php echo lng('Download') ?>" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;dl=<?php echo urlencode($f) ?>" onclick="confirmDialog(event, 1211, '<?php echo lng('Download'); ?>','<?php echo urlencode($f); ?>', this.href);"><i class="fa-solid fa-download"></i></a>
                    </td>
                </tr>
            <?php
                flush();
                $ik++;
            }

            if (empty($folders) && empty($files)) { ?>
                <tfoot>
                    <tr><?php if (!FM_READONLY): ?>
                            <td></td><?php endif; ?>
                        <td colspan="<?php echo (!FM_IS_WIN && !$hide_Cols) ? '6' : '4' ?>"><em><?php echo lng('Folder is empty') ?></em></td>
                    </tr>
                </tfoot>
            <?php
            } else { ?>
                <tfoot>
                    <tr>
                        <td class="gray fs-7" colspan="<?php echo (!FM_IS_WIN && !$hide_Cols) ? (FM_READONLY ? '6' : '7') : (FM_READONLY ? '4' : '5') ?>">
                            <?php echo lng('FullSize') . ': <span class="badge text-bg-light border-radius-0">' . fm_get_filesize($all_files_size) . '</span>' ?>
                            <?php echo lng('File') . ': <span class="badge text-bg-light border-radius-0">' . $num_files . '</span>' ?>
                            <?php echo lng('Folder') . ': <span class="badge text-bg-light border-radius-0">' . $num_folders . '</span>' ?>
                        </td>
                    </tr>
                </tfoot>
            <?php } ?>
        </table>
    </div>

    <div class="row">
        <?php if (!FM_READONLY): ?>
            <div class="col-xs-12 col-sm-9">
                <div class="btn-group flex-wrap" data-toggle="buttons" role="toolbar">
                    <a href="#/select-all" class="btn btn-small btn-outline-primary btn-2" onclick="select_all();return false;"><i class="fa-solid fa-square-check"></i> <?php echo lng('SelectAll') ?> </a>
                    <a href="#/unselect-all" class="btn btn-small btn-outline-primary btn-2" onclick="unselect_all();return false;"><i class="fa-solid fa-square-xmark"></i> <?php echo lng('UnSelectAll') ?> </a>
                    <a href="#/invert-all" class="btn btn-small btn-outline-primary btn-2" onclick="invert_all();return false;"><i class="fa-solid fa-list-check"></i> <?php echo lng('InvertSelection') ?> </a>
                    <input type="submit" class="hidden" name="delete" id="a-delete" value="Delete" onclick="return confirm('<?php echo lng('Delete selected files and folders?'); ?>')">
                    <a href="javascript:document.getElementById('a-delete').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa-solid fa-trash-can"></i> <?php echo lng('Delete') ?> </a>
                    <input type="submit" class="hidden" name="zip" id="a-zip" value="zip" onclick="return confirm('<?php echo lng('Create archive?'); ?>')">
                    <a href="javascript:document.getElementById('a-zip').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa-solid fa-file-zipper"></i> <?php echo lng('Zip') ?> </a>
                    <input type="submit" class="hidden" name="tar" id="a-tar" value="tar" onclick="return confirm('<?php echo lng('Create archive?'); ?>')">
                    <a href="javascript:document.getElementById('a-tar').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa-solid fa-file-zipper"></i> <?php echo lng('Tar') ?> </a>
                    <input type="submit" class="hidden" name="copy" id="a-copy" value="Copy">
                    <a href="javascript:document.getElementById('a-copy').click();" class="btn btn-small btn-outline-primary btn-2"><i class="fa-regular fa-copy"></i> <?php echo lng('Copy') ?> </a>
                </div>
            </div>
            <div class="col-3 d-none d-sm-block"><a href="https://tinyfilemanager.github.io" target="_blank" class="float-right text-muted"><?php echo lng('AppTitle')." ".VERSION; ?></a></div>
        <?php else: ?>
            <div class="col-12"><a href="https://tinyfilemanager.github.io" target="_blank" class="float-right text-muted"><?php echo lng('AppTitle')." ".VERSION; ?></a></div>
        <?php endif; ?>
    </div>
    <div class="footer text-center" data-bs-theme="<?php echo FM_THEME; ?>">
        <br>
        <br>
        <?php fm_render_beian(); ?>
        <p dir="auto" class="text-center"><?= renderFooter() ?></p>
        <br>
        <br>
        <br>
        <br>
        <br> 
    </div>
</form>

<?php
fm_show_footer();

// --- END HTML ---

// Functions

/**
 * It prints the css/js files into html
 * @param key The key of the external file to print.
 */
function print_external($key)
{
    global $external;

    if (!array_key_exists($key, $external)) {
        // throw new Exception('Key missing in external: ' . key);
        echo "<!-- EXTERNAL: MISSING KEY $key -->\n";
        return;
    }

    echo $external[$key] . "\n";
}

/**
 * Verify CSRF TOKEN and remove after certified
 * @param string $token
 * @return bool
 */
function verifyToken($token)
{
    if (hash_equals($_SESSION['token'], $token)) {
        return true;
    }
    return false;
}

/**
 * Delete  file or folder (recursively)
 * @param string $path
 * @return bool
 */
function fm_rdelete($path)
{
    if (is_link($path)) {
        return unlink($path);
    } elseif (is_dir($path)) {
        $objects = scandir($path);
        $ok = true;
        if (is_array($objects)) {
            foreach ($objects as $file) {
                if ($file != '.' && $file != '..') {
                    if (!fm_rdelete($path . '/' . $file)) {
                        $ok = false;
                    }
                }
            }
        }
        return ($ok) ? rmdir($path) : false;
    } elseif (is_file($path)) {
        return unlink($path);
    }
    return false;
}

/**
 * Recursive chmod
 * @param string $path
 * @param int $filemode
 * @param int $dirmode
 * @return bool
 * @todo Will use in mass chmod
 */
function fm_rchmod($path, $filemode, $dirmode)
{
    if (is_dir($path)) {
        if (!chmod($path, $dirmode)) {
            return false;
        }
        $objects = scandir($path);
        if (is_array($objects)) {
            foreach ($objects as $file) {
                if ($file != '.' && $file != '..') {
                    if (!fm_rchmod($path . '/' . $file, $filemode, $dirmode)) {
                        return false;
                    }
                }
            }
        }
        return true;
    } elseif (is_link($path)) {
        return true;
    } elseif (is_file($path)) {
        return chmod($path, $filemode);
    }
    return false;
}

/**
 * Check the file extension which is allowed or not
 * @param string $filename
 * @return bool
 */
function fm_is_valid_ext($filename)
{
    $allowed = (FM_FILE_EXTENSION) ? explode(',', FM_FILE_EXTENSION) : false;

    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $isFileAllowed = ($allowed) ? in_array($ext, $allowed) : true;

    return ($isFileAllowed) ? true : false;
}

/**
 * Safely rename
 * @param string $old
 * @param string $new
 * @return bool|null
 */
function fm_rename($old, $new)
{
    $old = urldecode($old);
    $new = urldecode($new);
    $isFileAllowed = fm_is_valid_ext($new);

    if (!is_dir($old)) {
        if (!$isFileAllowed) return false;
    }

    return (!file_exists($new) && file_exists($old)) ? rename($old, $new) : null;
}

/**
 * Copy file or folder (recursively).
 * @param string $path
 * @param string $dest
 * @param bool $upd Update files
 * @param bool $force Create folder with same names instead file
 * @return bool
 */
function fm_rcopy($path, $dest, $upd = true, $force = true)
{
    $path = urldecode($path);
    $dest = urldecode($dest);
    if (!is_dir($path) && !is_file($path)) {
        return false;
    }

    if (is_dir($path)) {
        if (!fm_mkdir($dest, $force)) {
            return false;
        }

        $objects = array_diff(scandir($path), ['.', '..']);

        foreach ($objects as $file) {
            if (!fm_rcopy("$path/$file", "$dest/$file", $upd, $force)) {
                return false;
            }
        }

        return true;
    }

    // Handle file copying
    return fm_copy($path, $dest, $upd);
}


/**
 * Safely create folder
 * @param string $dir
 * @param bool $force
 * @return bool
 */
function fm_mkdir($dir, $force)
{
    if (file_exists($dir)) {
        if (is_dir($dir)) {
            return $dir;
        } elseif (!$force) {
            return false;
        }
        unlink($dir);
    }
    return mkdir($dir, 0755, true);
}

/**
 * Safely copy file
 * @param string $f1
 * @param string $f2
 * @param bool $upd Indicates if file should be updated with new content
 * @return bool
 */
function fm_copy($f1, $f2, $upd)
{
    $f1 = urldecode($f1);
    $f2 = urldecode($f2);
    $time1 = filemtime($f1);
    if (file_exists($f2)) {
        $time2 = filemtime($f2);
        if ($time2 >= $time1 && $upd) {
            return false;
        }
    }
    $ok = copy($f1, $f2);
    if ($ok) {
        touch($f2, $time1);
    }
    return $ok;
}

/**
 * Get mime type
 * @param string $file_path
 * @return mixed|string
 */
function fm_get_mime_type($file_path)
{
    if (function_exists('finfo_open')) {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $file_path);
        if (\PHP_VERSION_ID < 80000) {
            finfo_close($finfo);
        }
        return $mime;
    } elseif (function_exists('mime_content_type')) {
        return mime_content_type($file_path);
    } elseif (!stristr(ini_get('disable_functions'), 'shell_exec')) {
        $file = escapeshellarg($file_path);
        $mime = shell_exec('file -bi ' . $file);
        return $mime;
    } else {
        return '--';
    }
}

/**
 * HTTP Redirect
 * @param string $url
 * @param int $code
 */
function fm_redirect($url, $code = 302)
{
    header('Location: ' . $url, true, $code);
    exit;
}

/**
 * Path traversal prevention and clean the url
 * It replaces (consecutive) occurrences of / and \\ with whatever is in DIRECTORY_SEPARATOR, and processes /. and /.. fine.
 * @param $path
 * @return string
 */
function get_absolute_path($path)
{
    $path = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $path);
    $parts = array_filter(explode(DIRECTORY_SEPARATOR, $path), 'strlen');
    $absolutes = array();
    foreach ($parts as $part) {
        if ('.' == $part) continue;
        if ('..' == $part) {
            array_pop($absolutes);
        } else {
            $absolutes[] = $part;
        }
    }
    return implode(DIRECTORY_SEPARATOR, $absolutes);
}

/**
 * Clean path
 * @param string $path
 * @return string
 */
function fm_clean_path($path, $trim = true)
{
    $path = $trim ? trim($path) : $path;
    $path = trim($path, '\\/');
    $path = str_replace(array('../', '..\\'), '', $path);
    $path =  get_absolute_path($path);
    if ($path == '..') {
        $path = '';
    }
    return str_replace('\\', '/', $path);
}

/**
 * Get parent path
 * @param string $path
 * @return bool|string
 */
function fm_get_parent_path($path)
{
    $path = fm_clean_path($path);
    if ($path != '') {
        $array = explode('/', $path);
        if (count($array) > 1) {
            $array = array_slice($array, 0, -1);
            return implode('/', $array);
        }
        return '';
    }
    return false;
}

function fm_get_display_path($file_path)
{
    global $path_display_mode, $root_path, $root_url;
    switch ($path_display_mode) {
        case 'relative':
            return array(
                'label' => lng('Path'),
                'path' => fm_enc(fm_convert_win(str_replace($root_path, '', $file_path)))
            );
        case 'host':
            $relative_path = str_replace($root_path, '', $file_path);
            return array(
                'label' => lng('HostPath'),
                'path' => fm_enc(fm_convert_win('/' . $root_url . '/' . ltrim(str_replace('\\', '/', $relative_path), '/')))
            );
        case 'full':
        default:
            return array(
                'label' => lng('FullPath'),
                'path' => fm_enc(fm_convert_win($file_path))
            );
    }
}

/**
 * Check file is in exclude list
 * @param string $name The name of the file/folder
 * @param string $path The full path of the file/folder
 * @return bool
 */
function fm_is_exclude_items($name, $path)
{
   $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
    $exclude_items = defined('FM_EXCLUDE_ITEMS') ? FM_EXCLUDE_ITEMS : array();
    
    if (is_string($exclude_items) && version_compare(PHP_VERSION, '7.0.0', '<')) {
        $exclude_items = unserialize($exclude_items);
    }
    
    if (!is_array($exclude_items)) {
        $exclude_items = array();
    }

    if (!in_array($name, $exclude_items) && !in_array("*.$ext", $exclude_items) && !in_array($path, $exclude_items)) {
        return true;
    }
    return false;
}

/**
 * get language translations from json file
 * @param int $tr
 * @return array
 */
function fm_get_translations($tr)
{
    try {
        static $content = null;
        if ($content === null) {
            $content = @file_get_contents('translation.json');
        }
        if ($content !== FALSE) {
            $lng = json_decode($content, TRUE);
            global $lang_list;
            foreach ($lng["language"] as $key => $value) {
                $code = $value["code"];
                $lang_list[$code] = $value["name"];
                if ($tr)
                    $tr[$code] = $value["translation"];
            }
            return $tr;
        }
    } catch (Exception $e) {
        echo $e;
    }
}


function fm_get_browser_language($supported, $default = 'en')
{
    global $lang_aliases;

    if (empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) return $default;
    $accept = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']);
    $supportedLower = [];
    foreach ($supported as $code) {
        $supportedLower[strtolower($code)] = $code;
    }
    $candidates = [];
    foreach (explode(',', $accept) as $part) {
        $part = trim($part);
        if ($part === '') continue;
        $bits = explode(';', $part);
        $tag  = trim($bits[0]);
        if ($tag === '' || $tag === '*') continue;
        $q = 1.0;
        if (isset($bits[1]) && preg_match('/q=([0-9.]+)/', $bits[1], $m)) {
            $q = (float)$m[1];
        }
        $candidates[] = ['tag' => $tag, 'q' => $q];
    }
    usort($candidates, function ($a, $b) {
        return $b['q'] <=> $a['q'];
    });
    foreach ($candidates as $c) {
        $tag = $c['tag'];
        if (isset($supportedLower[$tag])) {
            return $supportedLower[$tag];
        }
        if (isset($lang_aliases[$tag])) {
            $alias = strtolower($lang_aliases[$tag]);
            if (isset($supportedLower[$alias])) {
                return $supportedLower[$alias];
            }
        }
        $prefix = explode('-', $tag)[0];
        if (isset($supportedLower[$prefix])) {
            return $supportedLower[$prefix];
        }
        if (isset($lang_aliases[$prefix])) {
            $alias = strtolower($lang_aliases[$prefix]);
            if (isset($supportedLower[$alias])) {
                return $supportedLower[$alias];
            }
        }
    }
    return $default;
}

/**
 * @param string $file
 * Recover all file sizes larger than > 2GB.
 * Works on php 32bits and 64bits and supports linux
 * @return int|string
 */
function fm_get_size($file)
{
    static $iswin = null;
    static $isdarwin = null;
    static $exec_works = null;

    // Set static variables once
    if ($iswin === null) {
        $iswin = strtoupper(substr(PHP_OS, 0, 3)) === 'WIN';
        $isdarwin = strtoupper(PHP_OS) === 'DARWIN';
        $exec_works = function_exists('exec') && !ini_get('safe_mode') && @exec('echo EXEC') === 'EXEC';
    }

    // Attempt shell command if exec is available
    if ($exec_works) {
        $arg = escapeshellarg($file);
        $cmd = $iswin ? "for %F in (\"$file\") do @echo %~zF" : ($isdarwin ? "stat -f%z $arg" : "stat -c%s $arg");
        @exec($cmd, $output);

        if (!empty($output) && ctype_digit($size = trim(implode("\n", $output)))) {
            return $size;
        }
    }

    // Attempt Windows COM interface for Windows systems
    if ($iswin && class_exists('COM')) {
        try {
            $fsobj = new COM('Scripting.FileSystemObject');
            $f = $fsobj->GetFile(realpath($file));
            if (ctype_digit($size = $f->Size)) {
                return $size;
            }
        } catch (Exception $e) {
            // COM failed, fallback to filesize
        }
    }

    // Default to PHP's filesize function
    return filesize($file);
}


/**
 * Get nice filesize
 * @param int $size
 * @return string
 */
function fm_get_filesize($size)
{
    $size = (float) $size;
    $units = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
    $power = ($size > 0) ? floor(log($size, 1024)) : 0;
    $power = ($power > (count($units) - 1)) ? (count($units) - 1) : $power;
    return sprintf('%s %s', round($size / pow(1024, $power), 2), $units[$power]);
}

/**
 * Get info about zip archive
 * @param string $path
 * @return array|bool
 */
function fm_get_zip_info($path, $ext)
{
    if ($ext == 'zip' && class_exists('ZipArchive')) {
        $zip = new ZipArchive();
        if ($zip->open($path) === true) {
            $filenames = array();
            for ($i = 0; $i < $zip->numFiles; $i++) {
                $stat = $zip->statIndex($i);
                $zip_folder = substr($stat['name'], -1) == '/';
                $filenames[] = array(
                    'name' => $stat['name'],
                    'filesize' => $stat['size'],
                    'compressed_size' => $stat['comp_size'],
                    'folder' => $zip_folder
                );
            }
            $zip->close();
            return $filenames;
        }
    } elseif ($ext == 'tar' && class_exists('PharData')) {
        $archive = new PharData($path);
        $filenames = array();
        foreach (new RecursiveIteratorIterator($archive) as $file) {
            $parent_info = $file->getPathInfo();
            $zip_name = str_replace("phar://" . $path, '', $file->getPathName());
            $zip_name = substr($zip_name, ($pos = strpos($zip_name, '/')) !== false ? $pos + 1 : 0);
            $zip_folder = $parent_info->getFileName();
            $zip_info = new SplFileInfo($file);
            $filenames[] = array(
                'name' => $zip_name,
                'filesize' => $zip_info->getSize(),
                'compressed_size' => $file->getCompressedSize(),
                'folder' => $zip_folder
            );
        }
        return $filenames;
    }
    return false;
}

/**
 * Encode html entities
 * @param string $text
 * @return string
 */
function fm_enc($text)
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}

/**
 * Prevent XSS attacks
 * @param string $text
 * @return string
 */
function fm_isvalid_filename($text)
{
    return (strpbrk($text, '/?%*:|"<>' . chr(0)) === FALSE) ? true : false;
}

/**
 * Save message in session
 * @param string $msg
 * @param string $status
 */
function fm_set_msg($msg, $status = 'ok')
{
    $_SESSION[FM_SESSION_ID]['message'] = $msg;
    $_SESSION[FM_SESSION_ID]['status'] = $status;
}

/**
 * Check if string is in UTF-8
 * @param string $string
 * @return int
 */
function fm_is_utf8($string)
{
    return preg_match('//u', $string);
}

/**
 * Convert file name to UTF-8 in Windows
 * @param string $filename
 * @return string
 */
function fm_convert_win($filename)
{
    if (FM_IS_WIN && function_exists('iconv')) {
        $filename = iconv(FM_ICONV_INPUT_ENC, 'UTF-8//IGNORE', $filename);
    }
    return $filename;
}

/**
 * @param $obj
 * @return array
 */
function fm_object_to_array($obj)
{
    if (!is_object($obj) && !is_array($obj)) {
        return $obj;
    }
    if (is_object($obj)) {
        $obj = get_object_vars($obj);
    }
    return array_map('fm_object_to_array', $obj);
}

/**
 * Get CSS classname for file
 * @param string $path
 * @return string
 */
function fm_get_file_icon_class($path)
{
    // get extension
    $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));

    switch ($ext) {
        case 'ico':
        case 'gif':
        case 'jpg':
        case 'jpeg':
        case 'jpc':
        case 'jp2':
        case 'jpx':
        case 'xbm':
        case 'wbmp':
        case 'png':
        case 'bmp':
        case 'tif':
        case 'tiff':
        case 'webp':
        case 'avif':
        case 'svg':
            $img = 'fa-regular fa-image';
            break;
        case 'passwd':
        case 'ftpquota':
        case 'sql':
        case 'js':
        case 'ts':
        case 'jsx':
        case 'tsx':
        case 'hbs':
        case 'json':
        case 'sh':
        case 'config':
        case 'twig':
        case 'tpl':
        case 'md':
        case 'gitignore':
        case 'c':
        case 'cpp':
        case 'h':
        case 'hpp':
        case 'cs':
        case 'py':
        case 'rs':
        case 'map':
        case 'lock':
        case 'dtd':
        case 'ps1':
            $img = 'fa-solid fa-file-code';
            break;
        case 'txt':
        case 'ini':
        case 'conf':
        case 'log':
        case 'htaccess':
        case 'yaml':
        case 'yml':
        case 'toml':
        case 'tmp':
        case 'top':
        case 'bot':
        case 'dat':
        case 'bak':
        case 'htpasswd':
        case 'pl':
            $img = 'fa-regular fa-file-lines';
            break;
        case 'css':
        case 'less':
        case 'sass':
        case 'scss':
            $img = 'fa-brands fa-css3-alt';
            break;
        case 'bz2':
        case 'tbz2':
        case 'tbz':
        case 'zip':
        case 'rar':
        case 'gz':
        case 'tgz':
        case 'tar':
        case '7z':
        case 'xz':
        case 'txz':
        case 'zst':
        case 'tzst':
            $img = 'fa-solid fa-file-zipper';
            break;
        case 'php':
        case 'php4':
        case 'php5':
        case 'phps':
        case 'phtml':
            $img = 'fa-solid fa-code';
            break;
        case 'htm':
        case 'html':
        case 'shtml':
        case 'xhtml':
            $img = 'fa-brands fa-html5';
            break;
        case 'xml':
        case 'xsl':
            $img = 'fa-regular fa-file-excel';
            break;
        case 'wav':
        case 'mp3':
        case 'mp2':
        case 'm4a':
        case 'aac':
        case 'ogg':
        case 'oga':
        case 'wma':
        case 'mka':
        case 'flac':
        case 'ac3':
        case 'tds':
            $img = 'fa-solid fa-music';
            break;
        case 'm3u':
        case 'm3u8':
        case 'pls':
        case 'cue':
        case 'xspf':
            $img = 'fa-solid fa-headphones';
            break;
        case 'avi':
        case 'mpg':
        case 'mpeg':
        case 'mp4':
        case 'm4v':
        case 'flv':
        case 'f4v':
        case 'ogm':
        case 'ogv':
        case 'mov':
        case 'mkv':
        case '3gp':
        case 'asf':
        case 'wmv':
        case 'webm':
            $img = 'fa-regular fa-file-video';
            break;
        case 'eml':
        case 'msg':
            $img = 'fa-solid fa-envelope-open-text';
            break;
        case 'xls':
        case 'xlsx':
        case 'ods':
            $img = 'fa-regular fa-file-excel';
            break;
        case 'csv':
            $img = 'fa-solid fa-file-csv';
            break;
        case 'bak':
        case 'swp':
            $img = 'fa-solid fa-paste';
            break;
        case 'doc':
        case 'docx':
        case 'odt':
            $img = 'fa-regular fa-file-word';
            break;
        case 'ppt':
        case 'pptx':
            $img = 'fa-regular fa-file-powerpoint';
            break;
        case 'ttf':
        case 'ttc':
        case 'otf':
        case 'woff':
        case 'woff2':
        case 'eot':
        case 'fon':
            $img = 'fa-solid fa-font';
            break;
        case 'pdf':
            $img = 'fa-regular fa-file-pdf';
            break;
        case 'psd':
        case 'ai':
        case 'eps':
        case 'fla':
        case 'swf':
            $img = 'fa-regular fa-file-video';
            break;
        case 'exe':
        case 'msi':
            $img = 'fa-solid fa-laptop-code';
            break;
        case 'bat':
            $img = 'fa-solid fa-terminal';
            break;
        default:
            $img = 'fa-solid fa-circle-info';
    }

    return $img;
}

/**
 * Get image files extensions
 * @return array
 */
function fm_get_image_exts()
{
    return array('ico', 'gif', 'jpg', 'jpeg', 'jpc', 'jp2', 'jpx', 'xbm', 'wbmp', 'png', 'bmp', 'tif', 'tiff', 'psd', 'svg', 'webp', 'avif');
}

/**
 * Get video files extensions
 * @return array
 */
function fm_get_video_exts()
{
    return array('avi', 'webm', 'wmv', 'mp4', 'm4v', 'ogm', 'ogv', 'mov', 'mkv');
}

/**
 * Get audio files extensions
 * @return array
 */
function fm_get_audio_exts()
{
    return array('wav', 'mp3', 'ogg', 'm4a');
}

/**
 * Get text file extensions
 * @return array
 */
function fm_get_text_exts()
{
    return array(
        'txt',
        'css',
        'ini',
        'conf',
        'log',
        'htaccess',
        'passwd',
        'ftpquota',
        'sql',
        'js',
        'ts',
        'jsx',
        'tsx',
        'mjs',
        'json',
        'sh',
        'config',
        'php',
        'php4',
        'php5',
        'phps',
        'phtml',
        'htm',
        'html',
        'shtml',
        'xhtml',
        'xml',
        'xsl',
        'm3u',
        'm3u8',
        'pls',
        'cue',
        'bash',
        'vue',
        'eml',
        'msg',
        'csv',
        'bat',
        'twig',
        'tpl',
        'md',
        'gitignore',
        'less',
        'sass',
        'scss',
        'c',
        'cpp',
        'h',
        'hpp',
        'cs',
        'py',
        'go',
        'zsh',
        'swift',
        'map',
        'lock',
        'dtd',
        'svg',
        'asp',
        'aspx',
        'asx',
        'asmx',
        'ashx',
        'jsp',
        'jspx',
        'cgi',
        'dockerfile',
        'ruby',
        'yml',
        'yaml',
        'toml',
        'vhost',
        'scpt',
        'applescript',
        'csx',
        'cshtml',
        'c++',
        'coffee',
        'cfm',
        'rb',
        'graphql',
        'mustache',
        'jinja',
        'http',
        'handlebars',
        'java',
        'es',
        'es6',
        'markdown',
        'wiki',
        'tmp',
        'top',
        'bot',
        'dat',
        'bak',
        'htpasswd',
        'pl',
        'ps1'
    );
}

/**
 * Get mime types of text files
 * @return array
 */
function fm_get_text_mimes()
{
    return array(
        'application/xml',
        'application/javascript',
        'application/x-javascript',
        'image/svg+xml',
        'message/rfc822',
        'application/json',
    );
}

/**
 * Get file names of text files w/o extensions
 * @return array
 */
function fm_get_text_names()
{
    return array(
        'license',
        'readme',
        'authors',
        'contributors',
        'changelog',
    );
}

/**
 * Get online docs viewer supported files extensions
 * @return array
 */
function fm_get_onlineViewer_exts()
{
    return array('doc', 'docx', 'xls', 'xlsx', 'pdf', 'ppt', 'pptx', 'ai', 'psd', 'dxf', 'xps', 'rar', 'odt', 'ods');
}

/**
 * It returns the mime type of a file based on its extension.
 * @param extension The file extension of the file you want to get the mime type for.
 * @return string|string[] The mime type of the file.
 */
function fm_get_file_mimes($extension)
{
    $fileTypes['swf'] = 'application/x-shockwave-flash';
    $fileTypes['pdf'] = 'application/pdf';
    $fileTypes['exe'] = 'application/octet-stream';
    $fileTypes['zip'] = 'application/zip';
    $fileTypes['doc'] = 'application/msword';
    $fileTypes['xls'] = 'application/vnd.ms-excel';
    $fileTypes['ppt'] = 'application/vnd.ms-powerpoint';
    $fileTypes['gif'] = 'image/gif';
    $fileTypes['png'] = 'image/png';
    $fileTypes['jpeg'] = 'image/jpg';
    $fileTypes['jpg'] = 'image/jpg';
    $fileTypes['webp'] = 'image/webp';
    $fileTypes['avif'] = 'image/avif';
    $fileTypes['rar'] = 'application/rar';

    $fileTypes['ra'] = 'audio/x-pn-realaudio';
    $fileTypes['ram'] = 'audio/x-pn-realaudio';
    $fileTypes['ogg'] = 'audio/x-pn-realaudio';

    $fileTypes['wav'] = 'video/x-msvideo';
    $fileTypes['wmv'] = 'video/x-msvideo';
    $fileTypes['avi'] = 'video/x-msvideo';
    $fileTypes['asf'] = 'video/x-msvideo';
    $fileTypes['divx'] = 'video/x-msvideo';

    $fileTypes['mp3'] = 'audio/mpeg';
    $fileTypes['mp4'] = 'video/mp4';
    $fileTypes['mpeg'] = 'video/mpeg';
    $fileTypes['mpg'] = 'video/mpeg';
    $fileTypes['mpe'] = 'video/mpeg';
    $fileTypes['mov'] = 'video/quicktime';
    $fileTypes['swf'] = 'video/quicktime';
    $fileTypes['3gp'] = 'video/quicktime';
    $fileTypes['m4a'] = 'video/quicktime';
    $fileTypes['aac'] = 'video/quicktime';
    $fileTypes['m3u'] = 'video/quicktime';

    $fileTypes['php'] = ['application/x-php'];
    $fileTypes['html'] = ['text/html'];
    $fileTypes['txt'] = ['text/plain'];
    //Unknown mime-types should be 'application/octet-stream'
    if (empty($fileTypes[$extension])) {
        $fileTypes[$extension] = ['application/octet-stream'];
    }
    return $fileTypes[$extension];
}

/**
 * This function scans the files and folder recursively, and return matching files
 * @param string $dir
 * @param string $filter
 * @return array|null
 */
function scan($dir = '', $filter = '')
{
    $base = rtrim(str_replace('\\', '/', FM_ROOT_PATH), '/');
    $path = $base . ($dir !== '' ? '/' . ltrim(str_replace('\\', '/', $dir), '/') : '');
    $realBase = realpath($base);
    $realPath = realpath($path);
    if ($realBase === false || $realPath === false) {
        return array();
    }
    $realBase = rtrim(str_replace('\\', '/', $realBase), '/');
    $realPath = str_replace('\\', '/', $realPath);
    if ($realPath !== $realBase && strpos($realPath, $realBase . '/') !== 0) {
        return array();
    }
    if (!is_dir($realPath) || !is_readable($realPath)) {
        return array();
    }

    $files = array();
    try {
        $filterIterator = new RecursiveCallbackFilterIterator(
            new RecursiveDirectoryIterator($realPath, FilesystemIterator::SKIP_DOTS),
            function ($current) {
                return fm_is_exclude_items(
                    $current->getFilename(),
                    str_replace('\\', '/', $current->getPathname())
                );
            }
        );

        $ite = new RecursiveIteratorIterator($filterIterator);
        $pattern = '/' . preg_quote($filter, '/') . '/i';
        $rii = new RegexIterator($ite, $pattern);

        foreach ($rii as $file) {
            if ($file->isDir()) continue;
            $fileName = $file->getFilename();
            $fullPath = str_replace('\\', '/', $file->getPathname());
            if (!fm_is_exclude_items($fileName, $fullPath)) continue;
            $location = str_replace($realBase, '', str_replace('\\', '/', $file->getPath()));
            $files[] = array(
                "name" => $fileName,
                "type" => "file",
                "path" => $location,
            );
        }
    } catch (Exception $e) {
        return array();
    }
    return $files;
}

/**
 * Parameters: downloadFile(File Location, File Name,
 * max speed, is streaming
 * If streaming - videos will show as videos, images as images
 * instead of download prompt
 * https://stackoverflow.com/a/13821992/1164642
 */
function fm_download_file($fileLocation, $fileName, $chunkSize  = 1024)
{
    if (connection_status() != 0)
        return (false);
    $extension = pathinfo($fileName, PATHINFO_EXTENSION);

    $contentType = fm_get_file_mimes($extension);

    if (is_array($contentType)) {
        $contentType = implode(' ', $contentType);
    }

    $size = filesize($fileLocation);

    if ($size == 0) {
        fm_set_msg(lng('Zero byte file! Aborting download'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));

        return (false);
    }

    @ini_set('magic_quotes_runtime', 0);
    $fp = fopen("$fileLocation", "rb");

    if ($fp === false) {
        fm_set_msg(lng('Cannot open file! Aborting download'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?p=' . urlencode($FM_PATH));
        return (false);
    }

    // headers
    header('Content-Description: File Transfer');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header("Content-Transfer-Encoding: binary");
    header("Content-Type: $contentType");

    $contentDisposition = 'attachment';

    if (strstr($_SERVER['HTTP_USER_AGENT'], "MSIE")) {
        $fileName = preg_replace('/\./', '%2e', $fileName, substr_count($fileName, '.') - 1);
        header("Content-Disposition: $contentDisposition;filename=\"$fileName\"");
    } else {
        header("Content-Disposition: $contentDisposition;filename=\"$fileName\"");
    }

    header("Accept-Ranges: bytes");
    $range = 0;

    if (isset($_SERVER['HTTP_RANGE'])) {
        list($a, $range) = explode("=", $_SERVER['HTTP_RANGE']);
        str_replace($range, "-", $range);
        $size2 = $size - 1;
        $new_length = $size - $range;
        header("HTTP/1.1 206 Partial Content");
        header("Content-Length: $new_length");
        header("Content-Range: bytes $range$size2/$size");
    } else {
        $size2 = $size - 1;
        header("Content-Range: bytes 0-$size2/$size");
        header("Content-Length: " . $size);
    }
    $fileLocation = realpath($fileLocation);
    while (ob_get_level()) ob_end_clean();
    readfile($fileLocation);

    fclose($fp);

    return ((connection_status() == 0) and !connection_aborted());
}
function fm_link_icon($class = '') {
    return '<i class="' . $class . '" aria-hidden="true" style="display:inline-flex; vertical-align:middle; align-items:center; justify-content:center; line-height:1;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16575.89 13233.55" style="width:1.5em; height:1.5em; fill:currentColor; stroke:currentColor; stroke-width:709.82; display:inline-block; vertical-align:middle;">
            <path d="M9331.14 8725.36l0 0c-180.06,312.5 -73.07,711.12 238.13,891.19l2824.92 1631.02c312.5,180.06 711.12,73.07 891.19,-238.78l1304.82 -2260.59c180.06,-311.85 73.07,-711.12 -238.78,-890.54l-2824.92 -1631.02c-311.85,-180.06 -711.12,-73.07 -891.19,238.13l0 0 -1129.31 -652.41 326.2 -564.33c360.13,-624.36 1157.37,-838.34 1781.72,-477.56l3954.89 2283.42c624.36,360.78 837.69,1158.02 477.56,1782.37l-1957.23 3389.91c-360.78,624.36 -1158.02,838.34 -1782.37,477.56l-3954.89 -2283.42c-624.36,-360.78 -838.34,-1158.68 -477.56,-1783.03l326.2 -564.33 1130.61 652.41z"/>
            <path d="M11112.86 8247.81c-180.06,312.5 -579.34,419.5 -891.19,238.78l-4519.88 -2609.63c-312.5,-180.06 -419.5,-579.34 -238.78,-891.19 180.72,-311.84 579.34,-419.5 891.19,-238.13l4519.88 2609.63c311.85,179.41 418.19,578.03 238.78,890.54z"/>
            <path d="M4269.11 529.82l3954.89 2283.42c623.7,360.78 837.69,1158.02 476.91,1782.37l-326.2 564.33 -1129.31 -652.41c179.41,-311.85 73.07,-711.12 -238.78,-890.54l-2824.92 -1631.02c-312.5,-180.06 -711.12,-73.07 -891.19,238.13l-1304.82 2260.59c-180.06,312.5 -73.07,711.12 238.78,890.54l2824.92 1631.02c312.5,180.71 711.12,73.72 891.19,-238.13l1129.31 652.41 -326.2 564.33c-360.13,624.36 -1158.02,838.34 -1781.72,477.56l-3954.89 -2283.42c-624.36,-360.78 -837.69,-1158.02 -477.56,-1782.37l1957.23 -3389.26c360.13,-624.36 1158.02,-838.34 1782.37,-477.56l0 0.01z"/>
        </svg>
    </i>';
}
function fa_language($class = '') {
    return '<i class="' . $class . '" aria-hidden="true" style="display:inline-flex; vertical-align:middle; align-items:center; justify-content:center; line-height:1;">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 2091.6 2428.7" style="width:1.2em; height:1.2em; fill:currentColor;">
            <path d="M1554.3 2219c-19.7 10.4-38 21.1-56.8 32a716 716 0 0 1-124.8 57.8c-74.4 26.5-136 45.2-218.5 55.3-80.5 10-171.7 13.8-252.6 2-95.9-14.1-225-55.2-311-98.6-6.5-3.2-8.8-4-15.4-6.9l-75.6-40.3c-22.8-11.5-50.5-18.3-50.5 18.5 0 13.2 8.2 19.7 16.7 25.2 106 68.7 215.6 107.5 340 138.6 185.3 46.3 385.2 28 565-31.5a1063 1063 0 0 0 164.9-74.5c18.3-11 33.9-19.4 50.7-30.7l56.8 88.8c1.5-18 70.4-206.8 71.5-219.6-22.3 0-208.2-14.1-214.6-17.2.8 10.3 7 17 11.9 25 7.8 13 40 65.6 42.4 76.1z"/>
            <path d="M671.4 1017.4c-1.3 15-78 163.2-90.5 188.4-42.4 84.7-159.6 250.6-226.4 336a448 448 0 0 1-31.7 37.5l-81.5 93.7c-6.2 7.4-13.8 10.4-16.5 20.4 40.4 0 50.5-1.5 73.4-22.8 53-49 75.2-83 114.7-124.6l22.7-26.7c7.4-9.5 14.3-17 21.1-25.7l121.9-166.8c5.4-8.1 16.5-22.2 18.7-30.6 13.8 1.2 91.3 66.2 105.7 76.9l75.3 45.7 41 20.6c15.8 7.7 71.3 32 91.4 32 0-28.1-2.2-31.1-8.5-53.2-9.8-35-12.5-27-71.5-51.8l-193.2-83.2c-7.3-3.2-16.2-7.6-22.9-9.2l88-148.8c27.5-51 53-106.5 79-158 5.6-11.1 8.4-14.8 10.8-28.6 10.4-60-3.7-43.4-54.8-25.1-18 6.5-35.7 17.1-53 25.8-65 32.5-43.8 23-112.3 45.7-61.9 20.5-248.7 89.2-308 89.2 0 100.2 140.8 64 151 44.9 2-3.8 4.3-24.8 4.4-30.1l62.7-16.2c22.6-6.4 43.2-11.2 63.5-18 20.6-7 40.2-14 61-20.4 13.7-4.2 50-16.6 64.5-17M439.4 830c-45.1 0-60.4-23.7-45.7 21 12.5 38.1 56.2 67.7 87.7 67.7 54.9 0 139.6-28.7 152.9-81.5 5.4-21.4-2.2-49.2-24.6-49.2-38.6 0-139.6 42-170.3 42"/>
            <path d="m2091.6 656.3-1065-346.8-10 1458 1075 341.6zm-199.9 1020-144.4-45-48.1-184.3-284.8-89.7-63.7 150.2-134.2-42.5 290.7-722.7 135.5 38.5zM1655 1283l-66-226.8c-7-24.4-11.9-40-15.2-79.6h-6.3c-31.2 91.3-61.9 155.4-102.6 247.3z"/>
            <path d="m1876.9 619.4-872-302.3 866.5-290.3z" stroke="currentColor" stroke-width="53.68" fill="none"/>
            <path d="m53.7 649.5 973-340-15.2 1427.5-984.7 375.4z" stroke="currentColor" stroke-width="53.68" fill="none"/>
            <path d="m257.2 578.4 769.5-268.9-779.6-286z"/>
        </svg>
    </i>';
}
/**
 * System-level archiving/unpacking abstraction layer.
 * Uses proc_open to call native system tools, avoiding PHP's memory/CPU overhead.
 */
class FM_SystemArchiver
{
    private $type;

    public function __construct(string $type = 'zip')
    {
        $type = strtolower($type);
        if (!in_array($type, ['zip', 'tar'])) {
            throw new InvalidArgumentException("Unsupported archive type: $type");
        }
        $this->type = $type;
    }

    /**
     * Create archive.
     */
    public function create(string $zipname, array $files, string $workDir): array
    {
        $files = array_values(array_filter(array_map('trim', $files)));
        if (empty($files)) {
            return ['ok' => false, 'msg' => 'No files selected'];
        }

        if ($this->type === 'zip') {
            if (!class_exists('ZipArchive')) {
                return ['ok' => false, 'msg' => 'PHP ZipArchive extension is not installed.'];
            }
            $zip = new ZipArchive();
            $zipPath = $workDir . '/' . $zipname;
            if ($zip->open($zipPath, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
                return ['ok' => false, 'msg' => 'Failed to create ZIP file.'];
            }
            foreach ($files as $file) {
                $filePath = $workDir . '/' . $file;
                if (is_file($filePath)) {
                    $zip->addFile($filePath, $file);
                } elseif (is_dir($filePath)) {
                    $filesIterator = new RecursiveIteratorIterator(
                        new RecursiveDirectoryIterator($filePath, FilesystemIterator::SKIP_DOTS),
                        RecursiveIteratorIterator::LEAVES_ONLY
                    );
                    foreach ($filesIterator as $name => $fileObj) {
                        if (!$fileObj->isDir()) {
                            $filePathLocal = $fileObj->getRealPath();
                            $relativePath = substr($filePathLocal, strlen(realpath($workDir)) + 1);
                            $zip->addFile($filePathLocal, str_replace('\\', '/', $relativePath));
                        }
                    }
                }
            }
            $zip->close();
            return ['ok' => true, 'msg' => ''];
        } else {
            if (!class_exists('PharData')) {
                return ['ok' => false, 'msg' => 'PHP PharData extension is not installed, cannot create tar.'];
            }
            $tarPath = $workDir . '/' . str_replace('.tar.gz', '.tar', $zipname);
            $tar = new PharData($tarPath);
            foreach ($files as $file) {
                $filePath = $workDir . '/' . $file;
                if (is_file($filePath)) {
                    $tar->addFile($filePath, $file);
                } elseif (is_dir($filePath)) {
                    $tar->addFile($filePath, $file);
                }
            }
            $tar->compress(Phar::GZ);
            unlink($tarPath);
            return ['ok' => true, 'msg' => ''];
        }
    }

    /**
     * Extract archive.
     */
    public function unzip(string $archivePath, string $destDir): array
    {
        if (!is_file($archivePath)) {
            return ['ok' => false, 'msg' => 'Archive not found'];
        }
        if (!is_dir($destDir)) {
            @mkdir($destDir, 0755, true);
        }

        if ($this->type === 'zip') {
            if (!class_exists('ZipArchive')) {
                return ['ok' => false, 'msg' => 'PHP ZipArchive extension is not installed.'];
            }
            $zip = new ZipArchive();
            if ($zip->open($archivePath) === true) {
                $zip->extractTo($destDir);
                $zip->close();
                return ['ok' => true, 'msg' => ''];
            }
            return ['ok' => false, 'msg' => 'Failed to open ZIP file.'];
        } else {
            if (!class_exists('PharData')) {
                return ['ok' => false, 'msg' => 'PHP PharData extension is not installed.'];
            }
            try {
                $phar = new PharData($archivePath);
                $phar->extractTo($destDir, null, true);
                return ['ok' => true, 'msg' => ''];
            } catch (Exception $e) {
                return ['ok' => false, 'msg' => $e->getMessage()];
            }
        }
    }
}

/**
 * Save Configuration
 */
class FM_Config
{
    var $data;

    function __construct()
    {
        global $root_path, $root_url, $CONFIG;
        $fm_url = $root_url . $_SERVER["PHP_SELF"];
        $this->data = array(
            'lang' => 'en',
            'error_reporting' => true,
            'show_hidden' => true,
            'icp' => '',
            'police' => '',
            'logo_path' => '',
            'favicon_path' => '',
            'timezone' => 'Etc/UTC',
            'theme' => 'light'
        );
        $data = false;
        if (strlen($CONFIG)) {
            $data = fm_object_to_array(json_decode($CONFIG));
        } else {
            $msg = lng("AppName").'<br>Error: Cannot load configuration';
            if (substr($fm_url, -1) == '/') {
                $fm_url = rtrim($fm_url, '/');
                $msg .= '<br>';
                $msg .= '<br>Seems like you have a trailing slash on the URL.';
                $msg .= '<br>Try this link: <a href="' . $fm_url . '">' . $fm_url . '</a>';
            }
            die($msg);
        }
        if (is_array($data) && count($data)) $this->data = $data;
        else $this->save();
    }

    function save()
    {
        global $config_file;
        $fm_file = is_readable($config_file) ? $config_file : __FILE__;
        $var_name = '$CONFIG';
            $var_value = var_export(json_encode($this->data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES), true);
        $config_string = "<?php" . chr(13) . chr(10) . "//Default Configuration" . chr(13) . chr(10) . "$var_name = $var_value;" . chr(13) . chr(10);
        if (is_writable($fm_file)) {
            $lines = file($fm_file);
            if ($fh = @fopen($fm_file, "w")) {
                @fputs($fh, $config_string, strlen($config_string));
                for ($x = 3; $x < count($lines); $x++) {
                    @fputs($fh, $lines[$x], strlen($lines[$x]));
                }
                @fclose($fh);
            }
        }
    }
}

//--- Templates Functions ---

/**
 * Show nav block
 * @param string $path
 */
function fm_show_nav_path($path)
{
    global $lang, $sticky_navbar, $editFile;
    $isStickyNavBar = $sticky_navbar ? 'fixed-top' : '';
?>
    <nav class="navbar navbar-expand-lg mb-4 main-nav <?php echo $isStickyNavBar ?> bg-body-tertiary" data-bs-theme="<?php echo FM_THEME; ?>">
        <a class="navbar-brand"> <i class="fa-solid fa-folder-open app-logo-icon" aria-hidden="true"></i> <?php echo lng('AppTitle') ?> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <?php
            $path = fm_clean_path($path);
            $root_url = "<a href='?p='><i class='fa-regular fa-house app-logo-icon' aria-hidden='true' title='" . lng('BackToHome') . "'></i></a>";
            $sep = '<i class="bread-crumb"> / </i>';
            if ($path != '') {
                $exploded = explode('/', $path);
                $count = count($exploded);
                $array = array();
                $parent = '';
                for ($i = 0; $i < $count; $i++) {
                    $parent = trim($parent . '/' . $exploded[$i], '/');
                    $parent_enc = urlencode($parent);
                    $array[] = "<a href='?p={$parent_enc}'>" . fm_enc(fm_convert_win($exploded[$i])) . "</a>";
                }
                $root_url .= $sep . implode($sep, $array);
            }
            echo '<div class="col-sm-5 d-flex align-items-center flex-wrap gap-2">' . $root_url . $editFile . '</div>';
            ?>
            <div class="col-sm-7 d-flex align-items-center justify-content-end flex-wrap gap-2">
                <ul class="navbar-nav justify-content-end align-items-center flex-wrap gap-2" data-bs-theme="<?php echo FM_THEME; ?>">
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link" id="theme-toggle" title="<?php echo lng('ThemeToggle'); ?>">
                            <span id="theme-icon">🌙</span>
                        </a>
                    </li>
                    <li class="nav-item me-2">
                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="modal" data-bs-target="#langModal" title="<?php echo lng('PreferredLanguage'); ?>">
                            <?php echo fa_language(); ?>
                        </a>
                    </li>
                    <li class="nav-item mr-2">
                        <div class="input-group input-group-sm mr-1" style="margin-top:4px;">
                            <input type="text" class="form-control" placeholder="<?php echo lng('FilterPlaceholderShort') ?>" title="<?php echo lng('SearchTooltip') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="<?php echo lng('Search') ?>" aria-describedby="search-addon2" id="search-addon" name="search">
                            <div class="input-group-append">
                                <span class="input-group-text brl-0 brr-0" id="search-addon2"><i class="fa-solid fa-magnifying-glass"></i></span>
                            </div>
                            <div class="input-group-append btn-group">
                                <span class="input-group-text dropdown-toggle brl-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></span>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="<?php echo $path2 = $path ? $path : '.'; ?>" id="js-search-modal" data-bs-toggle="modal" data-bs-target="#searchModal"><?php echo lng('Advanced Search') ?></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php if (!FM_READONLY): ?>
                        <li class="nav-item">
                            <a title="<?php echo lng('Upload') ?>" class="nav-link" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;upload"><i class="fa-solid fa-cloud-arrow-up" aria-hidden="true"></i> <?php echo lng('Upload') ?></a>
                        </li>
                        <li class="nav-item">
                            <a title="<?php echo lng('NewItem') ?>" class="nav-link" href="#createNewItem" data-bs-toggle="modal" data-bs-target="#createNewItem"><i class="fa-solid fa-square-plus"></i> <?php echo lng('NewItem') ?></a>
                        </li>
                    <?php endif; ?>
                    <?php if (FM_USE_AUTH): ?>
                        <li class="nav-item avatar dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-5" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-regular fa-circle-user"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end text-small shadow" aria-labelledby="navbarDropdownMenuLink-5" data-bs-theme="<?php echo FM_THEME; ?>">
                                <?php if (!FM_READONLY): ?>
                                    <a title="<?php echo lng('Settings') ?>" class="dropdown-item nav-link" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;settings=1"><i class="fa-solid fa-gear" aria-hidden="true"></i> <?php echo lng('Settings') ?></a>
                                    <a title="<?php echo lng('SiteIdentity') ?>" class="dropdown-item nav-link" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;sitesettings=1"><i class="fa-solid fa-id-card" aria-hidden="true"></i> <?php echo lng('SiteIdentity') ?></a>
                                <?php endif ?>
                                <a title="<?php echo lng('Help') ?>" class="dropdown-item nav-link" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;help=2"><i class="fa-solid fa-circle-exclamation" aria-hidden="true"></i> <?php echo lng('Help') ?></a>
                                <a title="<?php echo lng('Logout') ?>" class="dropdown-item nav-link" href="?logout=1"><i class="fa-solid fa-right-from-bracket" aria-hidden="true"></i> <?php echo lng('Logout') ?></a>
                            </div>
                        </li>
                    <?php else: ?>
                        <?php if (!FM_READONLY): ?>
                            <li class="nav-item">
                                <a title="<?php echo lng('Settings') ?>" class="dropdown-item nav-link" href="?p=<?php echo urlencode(FM_PATH) ?>&amp;settings=1"><i class="fa-solid fa-gear" aria-hidden="true"></i> <?php echo lng('Settings') ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
<?php
}

/**
 * Show alert message from session
 */
function fm_show_message()
{
    if (isset($_SESSION[FM_SESSION_ID]['message'])) {
        $class = isset($_SESSION[FM_SESSION_ID]['status']) ? $_SESSION[FM_SESSION_ID]['status'] : 'ok';
        echo '<p class="message ' . $class . ' auto-dismiss-message">' . $_SESSION[FM_SESSION_ID]['message'] . '</p>';
        echo '<script>
            setTimeout(function() {
                document.querySelectorAll(".auto-dismiss-message").forEach(function(msg) {
                    msg.style.transition = "opacity 0.5s ease";
                    msg.style.opacity = "0";
                    setTimeout(function() { msg.remove(); }, 500);
                });
            }, 3000);
        </script>';
        unset($_SESSION[FM_SESSION_ID]['message']);
        unset($_SESSION[FM_SESSION_ID]['status']);
    }
}

/**
* Write operation log
* @param string $action Type of operation (e.g., Delete, Move, Rename)
* @param string $detail Details
*/
function fm_write_log($action, $detail) {
    $log_dir = __DIR__;
    $log_file = $log_dir . '/.audit.log';

    $user = isset($_SESSION[FM_SESSION_ID]['logged']) ? $_SESSION[FM_SESSION_ID]['logged'] : 'Guest/Unknown';
    $ip = $_SERVER['REMOTE_ADDR'] ?? 'Unknown IP';
    $time = date('Y-m-d H:i:s');
    $log_line = "[{$time}] [User: {$user}] [IP: {$ip}] [{$action}] : {$detail}\n";
    @file_put_contents($log_file, $log_line, FILE_APPEND | LOCK_EX);
}


/**
 * Render Preferred Language Modal
 */
function fm_render_lang_modal()
{
    global $lang_list, $lang;
    $missingLangUrl = 'https://github.com/hestiacn/tinyfilemanager/issues/new?title=' . urlencode('Add language: ') . '&labels=translation';
    ?>
    <div class="modal fade" id="langModal" tabindex="-1" aria-hidden="true" data-bs-theme="<?php echo FM_THEME; ?>">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo lng('PreferredLanguage'); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-info small mb-3" role="alert">
                        <?php echo nl2br(lng('BrowserLangHint')); ?>
                    </div>
                <select class="form-select mb-3" id="js-lang-select" name="lang">
                    <option value=""><?php echo lng('AutoDetect'); ?></option>
                    <?php foreach ($lang_list as $k => $v): ?>
                        <option value="<?php echo htmlspecialchars($k); ?>" <?php echo ($k === $lang ? 'selected' : ''); ?>>
                            <?php echo htmlspecialchars($v); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                    <p class="text-body-secondary small mb-1"><?php echo lng('MissingLanguage'); ?></p>
                    <a href="<?php echo htmlspecialchars($missingLangUrl); ?>" target="_blank" rel="noopener" class="small"><?php echo lng('RequestLanguage'); ?></a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><?php echo lng('Cancel'); ?></button>
                    <button type="button" class="btn btn-success" id="js-lang-save"><?php echo lng('Save'); ?></button>
                </div>
            </div>
        </div>
    </div>
    <?php
}

/**
 * Output public JS (theme, language modal initialization functions)
 */
function fm_render_common_js()
{
    ?>
    <script>
    function fmInitTheme() {
        function setTheme(theme) {
            document.documentElement.setAttribute('data-bs-theme', theme);
            document.querySelectorAll('[data-bs-theme]').forEach(function (el) {
                el.setAttribute('data-bs-theme', theme);
            });
            if (document.body) document.body.classList.toggle('theme-dark', theme === 'dark');
            localStorage.setItem('fm-theme', theme);

            var icon = document.getElementById('theme-icon');
            if (icon) icon.textContent = theme === 'dark' ? '☀️' : '🌙';

            var toggle = document.getElementById('theme-toggle');
            if (toggle) {
                var target = theme === 'dark' ? '<?php echo lng('light'); ?>' : '<?php echo lng('dark'); ?>';
                toggle.title = '<?php echo lng('ThemeToggle'); ?>'.replace('{target}', target);
            }
        }

        var saved = localStorage.getItem('fm-theme');
        var prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
        setTheme(saved || (prefersDark ? 'dark' : 'light'));

        var toggle = document.getElementById('theme-toggle');
        if (toggle && !toggle.dataset.inited) {
            toggle.dataset.inited = '1';
            toggle.addEventListener('click', function (e) {
                e.preventDefault();
                var cur = document.documentElement.getAttribute('data-bs-theme') || 'light';
                setTheme(cur === 'dark' ? 'light' : 'dark');
            });
        }
    }

    function fmInitLangModal() {
        var saveBtn = document.getElementById('js-lang-save');
        if (!saveBtn || saveBtn.dataset.inited) return;
        saveBtn.dataset.inited = '1';
        saveBtn.addEventListener('click', function () {
            var sel = document.getElementById('js-lang-select');
            var v = sel ? sel.value : '';
            if (v === '') {
                document.cookie = 'fm-lang=;path=/;max-age=0;SameSite=Lax';
            } else {
                document.cookie = 'fm-lang=' + encodeURIComponent(v) + ';path=/;max-age=31536000;SameSite=Lax';
            }
            location.reload();
        });
    }
    </script>
    <?php
}

/**
 * Return a <link rel="icon"> tag based on the favicon path/extension
 */
function fm_favicon_link($favicon_path)
{
    global $cfg;
    $path = !empty($cfg->data['favicon_path']) ? $cfg->data['favicon_path'] : $favicon_path;
    if (!$path) return '';
    $path_only = parse_url($path, PHP_URL_PATH);
    $ext = strtolower(pathinfo($path_only, PATHINFO_EXTENSION));
    $mime_map = array(
        'png'  => 'image/png',
        'svg'  => 'image/svg+xml',
        'ico'  => 'image/x-icon',
        'gif'  => 'image/gif',
        'jpg'  => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'jfif' => 'image/jpeg',
        'webp' => 'image/webp',
        'avif' => 'image/avif',
        'tiff' => 'image/tiff',
        'tif'  => 'image/tiff',
        'apng' => 'image/apng',
        'heic' => 'image/heic',
        'heif' => 'image/heif',
        'jxl'  => 'image/jxl',
    );
    $favicon_type = isset($mime_map[$ext]) ? $mime_map[$ext] : '';
    $type_attr = $favicon_type ? ' type="' . $favicon_type . '"' : '';
    return '<link rel="icon" href="' . fm_enc($path) . '"' . $type_attr . '>' . "\n";
}

function fm_render_beian()
{
    global $cfg;
    if (empty($cfg->data['show_beian']) || (empty($cfg->data['icp']) && empty($cfg->data['police']))) return;
    $icpIcon = '/assets/icons/icp.svg';
    $beianIcon = '/assets/icons/beian.svg';
    ?>
    <div class="text-center small mt-2 mb-4">
        <?php if (!empty($cfg->data['icp'])): ?>
            <a href="https://beian.miit.gov.cn/" target="_blank" rel="noopener" class="text-muted me-3">
                <img src="<?php echo fm_enc($icpIcon); ?>" alt="ICP" style="height:16px;vertical-align:-3px;margin-right:4px;">
                <?php echo fm_enc($cfg->data['icp']); ?>
            </a>
        <?php endif; ?>
        <?php if (!empty($cfg->data['police'])): ?>
            <?php
            $policeCode = '';
            if (preg_match('/(\d{9,})/', $cfg->data['police'], $m)) $policeCode = $m[1];
            ?>
            <?php if ($policeCode): ?>
                <a href="https://www.beian.gov.cn/portal/registerSystemInfo?recordcode=<?php echo urlencode($policeCode); ?>"
                target="_blank" rel="noopener" class="text-muted">
                    <img src="<?php echo fm_enc($beianIcon); ?>" alt="<?php echo lng('PoliceNumber'); ?>"
                        style="height:16px;vertical-align:-3px;margin-right:4px;">
                    <?php echo fm_enc($cfg->data['police']); ?>
                </a>
            <?php else: ?>
                <span class="text-muted">
                    <img src="<?php echo fm_enc($beianIcon); ?>" alt="<?php echo lng('PoliceNumber'); ?>"
                        style="height:16px;vertical-align:-3px;margin-right:4px;">
                    <?php echo fm_enc($cfg->data['police']); ?>
                </span>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <?php
}

/**
 * Check Markdown content for dangerous scripts or PHP code (ignores code blocks)
 */
function fm_is_safe_markdown($content) {
    $text = str_replace(array("\r\n", "\r"), "\n", $content);
    $text = preg_replace('/```[\s\S]*?(```|$)/', '', $text);
    $text = preg_replace('/~~~[\s\S]*?(~~~|$)/', '', $text);
    $text = preg_replace('/`[^`\n]*`/', '', $text);
    if (preg_match('/(<\s*script|<\?php)/i', $text, $matches)) {
        return false;
    }
    return true;
}

function renderFooter(): string
{
    global $cfg;
    
    $link = function (string $url, string $text): string {
        return '<a href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"'
             . ' target="_blank" rel="nofollow noopener noreferrer">'
             . htmlspecialchars($text, ENT_QUOTES, 'UTF-8')
             . '</a>';
    };
    
    $tpl = lng('FooterCopyright');
    $currentYear = date('Y');
    $startYear = isset($cfg->data['footer_start_year']) ? trim($cfg->data['footer_start_year']) : '2017';
    if ($startYear === 'none' || $startYear === '') {
        $year_text = '<span dir="ltr" style="unicode-bidi: isolate; display: inline-block;">© ' . $currentYear . '</span>';
    } else {
        if ($startYear == $currentYear) {
            $year_text = '<span dir="ltr" style="unicode-bidi: isolate; display: inline-block;">© ' . $startYear . '</span>';
        } else {
            $year_text = '<span dir="ltr" style="unicode-bidi: isolate; display: inline-block;">© ' . $startYear . '-' . $currentYear . '</span>';
        }
    }

    $vars = [
        'year'        => $year_text,
        'appLink'     => $link('https://github.com/prasathmani/tinyfilemanager', lng('AppTitle')),
        'licenseLink' => $link('https://www.gnu.org/licenses/gpl-3.0.html', 'GNU GPL v3'),
        'authorLink'  => $link('https://github.com/prasathmani', 'Prasath Mani'),
    ];
    foreach ($vars as $k => $v) {
        $tpl = str_replace('{' . $k . '}', (string) $v, $tpl);
    }
    return $tpl;
}

/**
 * Show page header in Login Form
 */
function fm_show_header_login()
{
    header("Content-Type: text/html; charset=utf-8");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
    header("Pragma: no-cache");
    header('Vary: Accept-Language, Cookie');

    global $favicon_path, $lang, $cfg;
    $lang = $lang ?: 'en';
?>
    <!DOCTYPE html>
    <html lang="<?php echo htmlspecialchars($lang); ?>" dir="<?php echo in_array(strtolower($lang), ['ar', 'he', 'fa', 'ur']) ? 'rtl' : 'ltr'; ?>" data-bs-theme="<?php echo FM_THEME; ?>">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?php echo sprintf(lng('MetaDescription'), lng('AppName')); ?>">
        <meta name="author" content="CCP Programmers">
        <meta name="robots" content="noindex, nofollow">
        <meta name="googlebot" content="noindex">
        <?php echo fm_favicon_link($favicon_path); ?>
        <title><?php echo lng('AppTitle'); ?></title>
        <?php print_external('pre-jsdelivr'); ?>
        <?php print_external('css-bootstrap'); ?>
        <style>
        body.fm-login-page {
            background-color: #f7f9fb;
            font-size: 14px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 304 304' width='304' height='304'%3E%3Cpath fill='%23e2e9f1' fill-opacity='0.4' d='M44.1 224a5 5 0 1 1 0 2H0v-2h44.1zm160 48a5 5 0 1 1 0 2H82v-2h122.1zm57.8-46a5 5 0 1 1 0-2H304v2h-42.1zm0 16a5 5 0 1 1 0-2H304v2h-42.1zm6.2-114a5 5 0 1 1 0 2h-86.2a5 5 0 1 1 0-2h86.2zm-256-48a5 5 0 1 1 0 2H0v-2h12.1zm185.8 34a5 5 0 1 1 0-2h86.2a5 5 0 1 1 0 2h-86.2zM258 12.1a5 5 0 1 1-2 0V0h2v12.1zm-64 208a5 5 0 1 1-2 0v-54.2a5 5 0 1 1 2 0v54.2zm48-198.2V80h62v2h-64V21.9a5 5 0 1 1 2 0zm16 16V64h46v2h-48V37.9a5 5 0 1 1 2 0zm-128 96V208h16v12.1a5 5 0 1 1-2 0V210h-16v-76.1a5 5 0 1 1 2 0zm-5.9-21.9a5 5 0 1 1 0 2H114v48H85.9a5 5 0 1 1 0-2H112v-48h12.1zm-6.2 130a5 5 0 1 1 0-2H176v-74.1a5 5 0 1 1 2 0V242h-60.1zm-16-64a5 5 0 1 1 0-2H114v48h10.1a5 5 0 1 1 0 2H112v-48h-10.1zM66 284.1a5 5 0 1 1-2 0V274H50v30h-2v-32h18v12.1zM236.1 176a5 5 0 1 1 0 2H226v94h48v32h-2v-30h-48v-98h12.1zm25.8-30a5 5 0 1 1 0-2H274v44.1a5 5 0 1 1-2 0V146h-10.1zm-64 96a5 5 0 1 1 0-2H208v-80h16v-14h-42.1a5 5 0 1 1 0-2H226v18h-16v80h-12.1zm86.2-210a5 5 0 1 1 0 2H272V0h2v32h10.1zM98 101.9V146H53.9a5 5 0 1 1 0-2H96v-42.1a5 5 0 1 1 2 0zM53.9 34a5 5 0 1 1 0-2H80V0h2v34H53.9zm60.1 3.9V66H82v64H69.9a5 5 0 1 1 0-2H80V64h32V37.9a5 5 0 1 1 2 0zM101.9 82a5 5 0 1 1 0-2H128V37.9a5 5 0 1 1 2 0V82h-28.1zm16-64a5 5 0 1 1 0-2H146v44.1a5 5 0 1 1-2 0V18h-26.1zm102.2 270a5 5 0 1 1 0 2H98v14h-2v-16h124.1zM242 149.9V160h16v34h-16v62h48v48h-2v-46h-48v-66h16v-30h-16v-12.1a5 5 0 1 1 2 0zM53.9 18a5 5 0 1 1 0-2H64V2H48V0h18v18H53.9zm112 32a5 5 0 1 1 0-2H192V0h50v2h-48v48h-28.1zm-48-48a5 5 0 0 1-9.8-2h2.07a3 3 0 1 0 5.66 0H178v34h-18V21.9a5 5 0 1 1 2 0V32h14V2h-58.1zm0 96a5 5 0 1 1 0-2H137l32-32h39V21.9a5 5 0 1 1 2 0V66h-40.17l-32 32H117.9zm28.1 90.1a5 5 0 1 1-2 0v-76.51L175.59 80H224V21.9a5 5 0 1 1 2 0V82h-49.59L146 112.41v75.69zm16 32a5 5 0 1 1-2 0v-99.51L184.59 96H300.1a5 5 0 0 1 3.9-3.9v2.07a3 3 0 0 0 0 5.66v2.07a5 5 0 0 1-3.9-3.9H185.41L162 121.41v98.69zm-144-64a5 5 0 1 1-2 0v-3.51l48-48V48h32V0h2v50H66v55.41l-48 48v2.69zM50 53.9v43.51l-48 48V208h26.1a5 5 0 1 1 0 2H0v-65.41l48-48V53.9a5 5 0 1 1 2 0zm-16 16V89.41l-34 34v-2.82l32-32V69.9a5 5 0 1 1 2 0zM12.1 32a5 5 0 1 1 0 2H9.41L0 43.41V40.6L8.59 32h3.51zm265.8 18a5 5 0 1 1 0-2h18.69l7.41-7.41v2.82L297.41 50H277.9zm-16 160a5 5 0 1 1 0-2H288v-71.41l16-16v2.82l-14 14V210h-28.1zm-208 32a5 5 0 1 1 0-2H64v-22.59L40.59 194H21.9a5 5 0 1 1 0-2H41.41L66 216.59V242H53.9zm150.2 14a5 5 0 1 1 0 2H96v-56.6L56.6 162H37.9a5 5 0 1 1 0-2h19.5L98 200.6V256h106.1zm-150.2 2a5 5 0 1 1 0-2H80v-46.59L48.59 178H21.9a5 5 0 1 1 0-2H49.41L82 208.59V258H53.9zM34 39.8v1.61L9.41 66H0v-2h8.59L32 40.59V0h2v39.8zM2 300.1a5 5 0 0 1 3.9 3.9H3.83A3 3 0 0 0 0 302.17V256h18v48h-2v-46H2v42.1zM34 241v63h-2v-62H0v-2h34v1zM17 18H0v-2h16V0h2v18h-1zm273-2h14v2h-16V0h2v16zm-32 273v15h-2v-14h-14v14h-2v-16h18v1zM0 92.1A5.02 5.02 0 0 1 6 97a5 5 0 0 1-6 4.9v-2.07a3 3 0 1 0 0-5.66V92.1zM80 272h2v32h-2v-32zm37.9 32h-2.07a3 3 0 0 0-5.66 0h-2.07a5 5 0 0 1 9.8 0zM5.9 0A5.02 5.02 0 0 1 0 5.9V3.83A3 3 0 0 0 3.83 0H5.9zm294.2 0h2.07A3 3 0 0 0 304 3.83V5.9a5 5 0 0 1-3.9-5.9zm3.9 300.1v2.07a3 3 0 0 0-1.83 1.83h-2.07a5 5 0 0 1 3.9-3.9zM97 100a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-48 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 96a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-144a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM49 36a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM33 68a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 240a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm80-176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm112 176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 180a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 84a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'%3E%3C/path%3E%3C/svg%3E");
        }

        .fm-login-page .brand {
            width: 121px;
            overflow: hidden;
            margin: 0 auto;
            position: relative;
            z-index: 1
        }
        .fm-login-page .brand img { width: 100% }
        .fm-login-page .card-wrapper { width: 360px; }
        .fm-login-page .card {
            border-color: transparent;
            box-shadow: 0 4px 8px rgba(0, 0, 0, .05)
        }
        .fm-login-page .card-title {
            margin-bottom: 1.5rem;
            font-size: 24px;
            font-weight: 400;
        }
        .fm-login-page .form-control { border-width: 2.3px }
        .fm-login-page .form-group label { width: 100% }
        .fm-login-page .btn.btn-block { padding: 12px 10px }
        .fm-login-page .footer {
            margin: 20px 0;
            color: #888;
            text-align: center
        }

        @media screen and (max-width:425px) {
            .fm-login-page .card-wrapper { width: 90%; margin: 0 auto; margin-top: 10%; }
        }
        @media screen and (max-width:320px) {
            .fm-login-page .card.fat { padding: 0 }
            .fm-login-page .card.fat .card-body { padding: 15px }
        }

        .message {
            padding: 4px 7px;
            border: 1px solid #ddd;
            background-color: #fff
        }
        .message.ok    { border-color: green;  color: green }
        .message.error { border-color: red;    color: red }
        .message.alert { border-color: orange; color: orange }

        .h-100vh { min-height: 100vh; }


        body.fm-login-page.theme-dark {
            background-color: #1c2429;
            color: #CFD8DC;
        }
        a, a:hover, a:visited, a:focus { text-decoration: none !important; }
        .text-muted { color: #66b2ff !important; }
        .theme-dark a { color: #66b2ff; }
        .theme-dark a:hover { color: #fff; }
        .theme-dark .text-muted { color: #66b2ff !important; }
        .theme-dark svg g,
        .theme-dark svg path { fill: #ffffff; }
        .theme-dark .card,
        .theme-dark .card.fat {
            background-color: #1c2429 !important;
            border-color: #343434 !important;
            color: #CFD8DC !important;
            box-shadow: 0 4px 12px rgba(0,0,0,0.5);
        }
        .theme-dark .card-body {
            background-color: #1c2429 !important;
            color: #CFD8DC !important;
        }
        .theme-dark .card-title { color: #CFD8DC !important; }
        .theme-dark .form-control {
            color: #CFD8DC;
            background-color: #101518;
            border-color: #343434;
        }
        .theme-dark .form-control::placeholder { color: #8892a0; }
        .theme-dark label { color: #CFD8DC; }
        .theme-dark .footer { color: #fff; }
        .theme-dark .footer a { color: #66b2ff; }
        .theme-dark .footer a:hover { color: #fff; }
        .theme-dark .message { background-color: #212529; color: #CFD8DC; border-color: #343434; }
        .theme-dark .message.ok    { color: #4ade80; border-color: #4ade80; }
        .theme-dark .message.error { color: #f87171; border-color: #f87171; }
        .theme-dark .message.alert { color: #fbbf24; border-color: #fbbf24; }
        </style>
        <script>
        (function () {
            var saved = localStorage.getItem('fm-theme');
            var prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
            var theme = saved || (prefersDark ? 'dark' : 'light');
            document.documentElement.setAttribute('data-bs-theme', theme);
            document.addEventListener('DOMContentLoaded', function () {
                if (document.body) document.body.classList.toggle('theme-dark', theme === 'dark');
            });
        })();
        </script>
    <?php fm_render_common_js(); ?>
    </head>

    <body class="fm-login-page">
        <div id="wrapper" class="container-fluid">

        <?php
    }

    /**
     * Show page footer in Login Form
     */
    function fm_show_footer_login()
    {
        ?>
        </div>
        <?php print_external('js-jquery'); ?>
        <?php print_external('js-bootstrap'); ?>
        <?php fm_render_lang_modal(); ?>
        <script>
        fmInitTheme();
        fmInitLangModal();
        </script>
        </body>
    </html>
    <?php
    }

    /**
     * Show Header after login
     */
    function fm_show_header()
    {
        $cspNonce = base64_encode(random_bytes(16));
        header("Content-Type: text/html; charset=utf-8");
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
        header("Pragma: no-cache");
        header('Vary: Accept-Language, Cookie');

        global $sticky_navbar, $favicon_path, $lang, $cfg;
        if (!isset($lang) || $lang === '') {
            $lang = 'en';
        }
        $isStickyNavBar = $sticky_navbar ? 'navbar-fixed' : 'navbar-normal';
?>
    <!DOCTYPE html>
    <html lang="<?php echo htmlspecialchars($lang); ?>" dir="<?php echo in_array(strtolower($lang), ['ar', 'he', 'fa', 'ur']) ? 'rtl' : 'ltr'; ?>" data-bs-theme="<?php echo FM_THEME; ?>">

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo sprintf(lng('MetaDescription'), lng('AppName')); ?>">
    <meta name="author" content="CCP Programmers">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">
    <?php echo fm_favicon_link($favicon_path); ?>
    <?php
    $siteTitle = !empty($cfg->data['site_title']) ? $cfg->data['site_title'] : lng('AppTitle');
    $pageTitle = isset($_GET['view']) ? $_GET['view'] : (isset($_GET['edit']) ? $_GET['edit'] : '');
    ?>
    <title><?php echo $pageTitle !== '' ? fm_enc($pageTitle) . ' | ' . fm_enc($siteTitle) : fm_enc($siteTitle); ?></title>
    <?php print_external('pre-jsdelivr'); ?>
    <?php print_external('pre-cloudflare'); ?>
    <?php print_external('css-bootstrap'); ?>
    <?php print_external('css-font-awesome'); ?>
    <?php if (FM_USE_HIGHLIGHTJS && isset($_GET['view'])): ?>
    <?php print_external('css-highlightjs'); ?>
    <?php endif; ?>
    <script type="text/javascript" nonce="<?= htmlspecialchars($cspNonce, ENT_QUOTES, 'UTF-8') ?>">
        window.csrf = <?= json_encode($_SESSION['token'] ?? '', JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?>;
    </script>
    <style>
    /* 1. Global Basic Reset */
    html {
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        text-rendering: optimizeLegibility;
        height: 100%;
        scroll-behavior: smooth;
    }
    *, *::before, *::after { box-sizing: border-box; }
    body { font-size: 15px; color: #222; background: #F7F7F7; }
    body.navbar-fixed { margin-top: 55px; }
    a, a:hover, a:visited, a:focus { text-decoration: none !important; }
    .hidden { display: none; }
    .text-muted { color: #66b2ff !important; }
    .filename, td, th { white-space: nowrap; }
    .float-right { float: right; }
    .fs-7 { font-size: 14px; }
    .border-radius-0 { border-radius: 0; }

    /* 2. Navigation and Breadcrumbs */
    .navbar-brand { font-weight: bold; }
    .nav-item.avatar a { cursor: pointer; text-transform: capitalize; }
    .nav-item.avatar a > i { font-size: 15px; }
    .nav-item.avatar .dropdown-menu a { font-size: 13px; }
    .navbar-nav i, .navbar-nav .nav-link, .navbar-nav .dropdown-toggle, .break-word { color: #000; }
    .bread-crumb { color: #cccccc; font-style: normal; }
    .app-logo-icon { color: #007bff; margin-right: 8px; font-size: 1.1em; }
    .main-nav { padding: 0.2rem 1rem; box-shadow: 0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12), 0 2px 4px -1px rgba(0, 0, 0, .2); background-color: #f8f9fa !important; }

    /* 3. Search Box and Input Group */
    #search-addon { font-size: 12px; border-right-width: 0; }
    .brl-0 { background: transparent; border-left: 0; border-top-left-radius: 0; border-bottom-left-radius: 0; }
    .brr-0 { border-top-right-radius: 0; border-bottom-right-radius: 0; }

    /* 4. Table Layout and Interaction */
    #main-table { transition: transform .25s cubic-bezier(0.4, 0.5, 0, 1), width 0s .25s; }
    #main-table .filename a { color: #222222; }
    .table td, .table th { vertical-align: middle !important; }
    .table .custom-checkbox-td .custom-control.custom-checkbox,
    .table .custom-checkbox-header .custom-control.custom-checkbox { min-width: 18px; display: flex; align-items: center; justify-content: center; }
    .table-sm td, .table-sm th { padding: .4rem; }
    .table-bordered td, .table-bordered th { border: 1px solid #f1f1f1; }
    .table-hover > tbody > tr:hover > td:first-child { border-left: 1px solid #1b77fd; }

    /* DataTables Plugin Customization */
    .dataTables_filter { display: none; }
    table.dataTable thead th { user-select: none; }
    table.dataTable thead tr:first-child th.custom-checkbox-header:first-child { background-image: none; }
    table.dataTable thead .sorting::after { content: ' ⇅'; font-size: 13px; color: #c0c0c0; margin-left: 4px; font-family: sans-serif; }
    table.dataTable thead .sorting_asc::after { content: ' ▲'; font-size: 13px; color: #007bff; margin-left: 4px; font-family: sans-serif; }
    table.dataTable thead .sorting_desc::after { content: ' ▼'; font-size: 13px; color: #007bff; margin-left: 4px; font-family: sans-serif; }
    .dataTables_paginate { display: flex; justify-content: flex-end; align-items: center; margin-top: 10px; margin-bottom: 20px; }
    .dataTables_paginate > span { display: flex; border: none !important; margin: 0 4px; gap: 4px; }
    .dataTables_paginate .paginate_button { display: inline-flex; align-items: center; justify-content: center; padding: 6px 12px; border: 1px solid #dee2e6; background-color: #fff; color: #212529 !important; border-radius: 4px; cursor: pointer; user-select: none; text-decoration: none; font-size: 14px; transition: background-color 0.15s ease-in-out; line-height: 1.5; }
    .dataTables_paginate .paginate_button:hover:not(.disabled):not(.current) { background-color: #e9ecef; border-color: #dee2e6; }
    .dataTables_paginate .paginate_button.current { background-color: #0d6efd; border-color: #0d6efd; color: #fff !important; font-weight: bold; }
    .dataTables_paginate .paginate_button.disabled { color: #adb5bd !important; background-color: #f8f9fa; border-color: #dee2e6; cursor: not-allowed; pointer-events: none; }
    #main-table span.badge { border-bottom: 2px solid #f8f9fa; }
    #main-table span.badge:nth-child(1) { border-color: #df4227; }
    #main-table span.badge:nth-child(2) { border-color: #f8b600; }
    #main-table span.badge:nth-child(3) { border-color: #00bd60; }
    #main-table span.badge:nth-child(4) { border-color: #4581ff; }
    #main-table span.badge:nth-child(5) { border-color: #ac68fc; }
    #main-table span.badge:nth-child(6) { border-color: #45c3d2; }

    /* 5. Code Blocks and Editor Preview */
    pre.with-hljs { padding: 0; overflow: hidden; }
    pre.with-hljs code { margin: 0; border: 0; overflow: scroll; }
    code.maxheight, pre.maxheight { max-height: 512px; }
    #normal-editor { border-radius: 3px; border-width: 2px; padding: 10px; outline: none; }
    #editor { position: absolute; right: 15px; top: 100px; bottom: 15px; left: 15px; }
    @media (max-width:481px) { #editor { top: 150px; } }

    /* 6. Pop-up Tips and Upload/Preview */
    .message { padding: 4px 7px; border: 1px solid #ddd; background-color: #fff; }
    .message.ok { border-color: green; color: green; }
    .message.error { border-color: red; color: red; }
    .message.alert { border-color: orange; color: orange; }
    form.dropzone { min-height: 200px; border: 2px dashed #007bff; line-height: 6rem; }
    .preview-img { max-width: 100%; max-height: 80vh; cursor: zoom-in; background-color: #fff; background-image: linear-gradient(45deg, #eee 25%, transparent 25%), linear-gradient(-45deg, #eee 25%, transparent 25%), linear-gradient(45deg, transparent 75%, #eee 75%), linear-gradient(-45deg, transparent 75%, #eee 75%); background-size: 16px 16px; background-position: 0 0, 0 8px, 8px -8px, -8px 0px; }
    .preview-video { position: relative; max-width: 800px; margin: 0 auto 10px; aspect-ratio: 16 / 9; max-height: 80vh; }
    .preview-video video { position: absolute; width: 100%; height: 100%; left: 0; top: 0; background: #000; object-fit: contain; }
    .c-preview-img { max-width: 300px; }
    #preview-image-plugin-overlay { position: absolute; display: none; padding: 5px; background-color: #fff; border: 1px solid #cccccc; border-radius: 4px; z-index: 9999; box-shadow: 0 4px 12px rgba(0,0,0,0.15); }
    #preview-image-plugin-overlay img.c-preview-img { max-width: 200px; max-height: 200px; display: block; border-radius: 4px; }
    #preview-image-plugin-overlay object.c-preview-img { width: 200px; height: 200px; display: block; border-radius: 4px; pointer-events: none; }

    /* 7. Audio Player */
    .audio-player { max-width: 520px; margin: 0 auto; padding: 16px; border-radius: 12px; background: rgba(0,0,0,.04); }
    .audio-visualizer { display: flex; align-items: flex-end; justify-content: center; gap: 3px; height: 60px; margin-bottom: 12px; }
    .audio-visualizer span { width: 4px; height: 8px; border-radius: 2px; transition: height .08s ease; }
    .audio-visualizer span:nth-child(12n+1) { background: #ff4d4f; } .audio-visualizer span:nth-child(12n+2) { background: #ff7a45; } .audio-visualizer span:nth-child(12n+3) { background: #ffa940; }
    .audio-visualizer span:nth-child(12n+4) { background: #ffc53d; } .audio-visualizer span:nth-child(12n+5) { background: #bae637; } .audio-visualizer span:nth-child(12n+6) { background: #73d13d; }
    .audio-visualizer span:nth-child(12n+7) { background: #36cfc9; } .audio-visualizer span:nth-child(12n+8) { background: #40a9ff; } .audio-visualizer span:nth-child(12n+9) { background: #597ef7; }
    .audio-visualizer span:nth-child(12n+10) { background: #9254de; } .audio-visualizer span:nth-child(12n+11) { background: #f759ab; } .audio-visualizer span:nth-child(12n+0) { background: #ff85c0; }
    .audio-controls { display: flex; align-items: center; gap: 10px; }
    .audio-time { font-size: 12px; color: #6c757d; white-space: nowrap; }
    .audio-seek { flex: 1; accent-color: #0d6efd; }
    .audio-loading-mask { position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(255, 255, 255, 0.85); display: flex; align-items: center; justify-content: center; z-index: 10; border-radius: 12px; font-size: 14px; color: #0d6efd; transition: opacity 0.3s ease; }
    .audio-loading-mask.hidden { opacity: 0; pointer-events: none; }

    /* 8. File Icon Custom Color */
    li.file:before, li.folder:before { font-family: "Font Awesome 7 Free", "Font Awesome 6 Free", sans-serif; font-weight: 900; content: "\f15c"; margin-right: 5px; }
    li.folder:before { content: "\f07b"; }
    i.fa-folder, i.fa-folder-open { color: #0157b3; }
    i.fa-image { color: #26b99a; }
    i.fa-file-zipper { color: #da7d7d; }
    .btn-2 i.fa-file-zipper { color: inherit; }
    i.fa-css3, i.fa-css3-alt { color: #f36fa0; }
    i.fa-file-code { color: #007bff; }
    i.fa-code { color: #cc4b4c; }
    i.fa-file-lines, i.fa-file-text { color: #0096e6; }
    i.fa-html5 { color: #d75e72; }
    i.fa-file-excel { color: #09c55d; }
    i.fa-file-powerpoint { color: #f6712e; }
    i.fa-music, i.fa-headphones, i.fa-compact-disc { color: #d63384; }
    i.fa-file-video, i.fa-video { color: #fd7e14; }
    i.go-back { font-size: 1.2em; color: #007bff; }
    .filename > a > i { margin-right: 3px; }

    /* 9. Colorize toolbar icons (daytime) */
    .inline-actions > a > i { width: 28px !important; height: 28px !important; display: inline-flex !important; align-items: center !important; justify-content: center !important; border-radius: 6px; font-size: 14px; transition: all 0.2s ease-in-out; vertical-align: middle !important; margin: 0 3px; }
    .action-delete > i { color: #dc3545 !important; background-color: rgba(220, 53, 69, 0.12) !important; }
    .action-delete:hover > i { background-color: transparent !important; color: #a71d2a !important; }
    .action-rename > i { color: #f59e0b !important; background-color: rgba(245, 158, 11, 0.12) !important; }
    .action-rename:hover > i { background-color: transparent !important; color: #b45309 !important; }
    .action-copy > i { color: #198754 !important; background-color: rgba(25, 135, 84, 0.12) !important; }
    .action-copy:hover > i { background-color: transparent !important; color: #146c43 !important; }
    .action-link > i { color: #0d6efd !important; background-color: rgba(13, 110, 253, 0.12) !important; }
    .action-link:hover > i { background-color: transparent !important; color: #0a58ca !important; }
    .action-download > i { color: #0aa2c0 !important; background-color: rgba(13, 202, 240, 0.12) !important; }
    .action-download:hover > i { background-color: transparent !important; color: #087990 !important; }
    #search-addon3 i { color: #333 !important; }

    /* 10. Markdown Rendering */
    #markdown-content h1, #markdown-content h2, #markdown-content h3 { margin-top: 1.2em; margin-bottom: .6em; font-weight: 600; }
    #markdown-content h1, #markdown-content h2 { border-bottom: 1px solid #eaecef; padding-bottom: .3em; }
    #markdown-content p { line-height: 1.7; margin-bottom: 1em; }
    #markdown-content img { max-width: 100%; }
    #markdown-content a { color: #0366d6; }
    #markdown-content blockquote { border-left: 4px solid #dfe2e5; color: #6a737d; padding: 0 1em; margin: 1em 0; }
    #markdown-content.card { width: fit-content; min-width: 50%; max-width: 100%; margin: 0 auto 1em auto; }
    #markdown-content pre { position: relative !important; padding-top: 2.5em !important; width: fit-content; max-width: 100%; overflow-x: auto; background: #f6f8fa; padding: 12px; border-radius: 6px; margin-bottom: 1em; box-sizing: border-box; }
    #markdown-content pre code { display: block; overflow-x: visible !important; white-space: pre; background: transparent !important; padding: 0 !important; margin: 0 !important; border: 0 !important; font-family: ui-monospace, SFMono-Regular, Menlo, Consolas, monospace; }
    #markdown-content :not(pre) > code { background: #f6f8fa; padding: 2px 6px; border-radius: 4px; font-family: ui-monospace, SFMono-Regular, Menlo, Consolas, monospace; }
    #markdown-content table { width: fit-content !important; max-width: 100%; display: table !important; border-collapse: collapse; margin: 1em 0; }
    #markdown-content table th, #markdown-content table td { border: 1px solid #dfe2e5; padding: 6px 13px; white-space: normal; word-break: break-word; }
    #markdown-content table th { background: #f6f8fa; }
    #markdown-content th[align="left"], #markdown-content td[align="left"] { text-align: left !important; }
    #markdown-content th[align="center"], #markdown-content td[align="center"] { text-align: center !important; }
    #markdown-content th[align="right"], #markdown-content td[align="right"] { text-align: right !important; }
    .copy-code-btn { position: absolute; top: 8px; right: 8px; padding: 4px 8px; font-size: 12px; color: #57606a; background-color: #ffffff; border: 1px solid #d0d7de; border-radius: 4px; cursor: pointer; opacity: 0; transition: all 0.2s ease-in-out; z-index: 10; }
    #markdown-content pre:hover .copy-code-btn { opacity: 1; }
    .copy-code-btn:hover { background-color: #f3f4f6; color: #0366d6; border-color: #0366d6; }
    .copy-code-btn.copied { color: #198754; border-color: #198754; background-color: #e8f5e9; }

    /* 11. Animation and Effects */
    .fm-dots { display: flex; align-items: center; gap: 6px; height: 20px; animation: fm-dots-cycle 3.2s ease-in-out infinite; }
    .fm-dots span { width: var(--dot-size); height: var(--dot-size); border-radius: 50%; background: #198754; transform: scale(0); opacity: 0; animation: fm-dot-pop 1.6s ease-in-out infinite; }
    .fm-dots span:nth-child(1) { --dot-size: 4px; animation-delay: 0s; } .fm-dots span:nth-child(2) { --dot-size: 5px; animation-delay: 0.12s; } .fm-dots span:nth-child(3) { --dot-size: 6px; animation-delay: 0.24s; }
    .fm-dots span:nth-child(4) { --dot-size: 7px; animation-delay: 0.36s; } .fm-dots span:nth-child(5) { --dot-size: 8px; animation-delay: 0.48s; } .fm-dots span:nth-child(6) { --dot-size: 9px; animation-delay: 0.60s; }
    .fm-dots span:nth-child(7) { --dot-size: 10px; animation-delay: 0.72s; } .fm-dots span:nth-child(8) { --dot-size: 11px; animation-delay: 0.84s; } .fm-dots span:nth-child(9) { --dot-size: 12px; animation-delay: 0.96s; } .fm-dots span:nth-child(10) { --dot-size: 13px; animation-delay: 1.08s; }
    @keyframes fm-dot-pop { 0% { transform: scale(0); opacity: 0; } 15% { transform: scale(1.1); opacity: 1; } 30% { transform: scale(1); opacity: 1; } 70% { transform: scale(1); opacity: 1; } 100% { transform: scale(0); opacity: 0; } }
    @keyframes fm-dots-cycle { 0%, 10% { opacity: 1; } 70%, 100% { opacity: 1; } }
    .loading-dots { display: inline-block; width: 1.5em; text-align: left; }
    .loading-dots::after { content: ""; animation: dots 1.5s steps(4, end) infinite; }
    @keyframes dots { 0%, 20% { content: ""; } 40% { content: "."; } 60% { content: ".."; } 80%, 100% { content: "..."; } }
    .lds-facebook { display: none; position: relative; width: 64px; height: 64px; }
    .lds-facebook div, .lds-facebook.show-me { display: inline-block; }
    .lds-facebook div { position: absolute; left: 6px; width: 13px; background: #007bff; animation: lds-facebook 1.2s cubic-bezier(0, .5, .5, 1) infinite; }
    .lds-facebook div:nth-child(1) { left: 6px; animation-delay: -.24s; } .lds-facebook div:nth-child(2) { left: 26px; animation-delay: -.12s; } .lds-facebook div:nth-child(3) { left: 45px; animation-delay: 0s; }
    @keyframes lds-facebook { 0% { top: 6px; height: 51px; } 100%, 50% { top: 19px; height: 26px; } }
    #snackbar { visibility: hidden; min-width: 250px; margin-left: -125px; background-color: #333; color: #fff; text-align: center; border-radius: 2px; padding: 16px; position: fixed; z-index: 1; left: 50%; bottom: 30px; font-size: 17px; }
    #snackbar.show { visibility: visible; -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s; animation: fadein 0.5s, fadeout 0.5s 2.5s; }
    @keyframes fadein { from { bottom: 0; opacity: 0; } to { bottom: 30px; opacity: 1; } }
    @keyframes fadeout { from { bottom: 30px; opacity: 1; } to { bottom: 0; opacity: 0; } }
    ul#search-wrapper { padding-left: 0; border: 1px solid #ecececcc; }
    ul#search-wrapper li { list-style: none; padding: 5px; border-bottom: 1px solid #ecececcc; }

    /* 12. Direction and Base Components (RTL) */
    :root { --bg-color: #f3daa6; --bs-dark-rgb: 28, 36, 41 !important; }
    [dir="rtl"] .modal-header .btn-close { margin-right: 0 !important; margin-left: 0 !important; }
    [dir="rtl"] .float-right { float: left !important; }
    [dir="rtl"] .text-end { text-align: left !important; }
    [dir="rtl"] .bread-crumb { display: inline-block; transform: scaleX(-1); }
    [dir="rtl"] .bread-crumb a { transform: scaleX(-1); display: inline-block; }
    [dir="rtl"] .dropdown-menu-end { right: auto !important; left: 0 !important; }
    [dir="rtl"] .table td span[title$="bytes"] { direction: ltr; display: inline-block; }
    [dir="rtl"] .navbar-nav { flex-direction: row-reverse; }
    [dir="rtl"] .col-sm-5 { text-align: right; }
    [dir="rtl"] .navbar-brand { margin-left: 1rem; margin-right: 0; }
    [dir="rtl"] .input-group { flex-wrap: nowrap; width: auto; min-width: 180px; }
    .tooltip { --bs-tooltip-bg: #fff; --bs-tooltip-color: #333; --bs-tooltip-opacity: 1; }
    .btn.active.focus, .btn.active:focus, .btn.focus, .btn.focus:active, .btn:active:focus, .btn:focus { outline: 0 !important; outline-offset: 0 !important; background-image: none !important; box-shadow: none !important; }
    .btn-2 { padding: 4px 10px; font-size: small; }

    /* 13. Dark Mode Collection */
    body.theme-dark { background-image: linear-gradient(90deg, #1c2429, #263238); color: #CFD8DC; }
    body.theme-dark .main-nav { background-color: #1c2429 !important; }
    .theme-dark a { color: #66b2ff; }
    .theme-dark a:hover { color: #fff; }
    .theme-dark .text-muted { color: #66b2ff !important; }
    .theme-dark .app-logo-icon { color: var(--bg-color); }
    .theme-dark .hover-bg:hover { background-color: rgba(255, 255, 255, 0.08) !important; color: #66b2ff !important; }
    .theme-dark i.fa-folder, .theme-dark i.go-back { color: var(--bg-color) !important; }
    .theme-dark .table { color: #CFD8DC; }
    .theme-dark .table td, .theme-dark .table th { border-color: #343434; }
    .theme-dark .table-hover>tbody>tr:hover { background-color: rgba(255, 255, 255, 0.05); }
    .theme-dark .table-hover>tbody>tr:hover>td { color: #CFD8DC !important; background-color: rgba(255, 255, 255, 0.08) !important; }
    .theme-dark #main-table .filename a { color: #CFD8DC; }
    .theme-dark #main-table .filename a:hover { color: var(--bg-color); }
    .theme-dark .main-nav .navbar-brand { color: #ffffff !important; }
    .theme-dark .navbar-nav i, .theme-dark .navbar-nav .nav-link, .theme-dark .navbar-nav .dropdown-toggle, .theme-dark .break-word { color: #FFF; }
    .theme-dark .bread-crumb { color: #6c757d; }
    .theme-dark #search-addon3 i { color: #ffffff !important; }
    .theme-dark #search-addon, .theme-dark #search-addon2, .theme-dark .input-group-text.dropdown-toggle { background-color: #101518 !important; color: #CFD8DC !important; border-color: #343434 !important; }
    .theme-dark #search-addon::placeholder { color: #8892a0 !important; }
    .theme-dark .dropdown-menu { background-color: #1c2429 !important; border-color: #343434 !important; box-shadow: 0 4px 12px rgba(0,0,0,0.5); }
    .theme-dark .dropdown-item { color: #CFD8DC !important; }
    .theme-dark .dropdown-item:hover { background-color: #2d3740 !important; color: #fff !important; }
    .theme-dark .card { background-color: #1c2429 !important; border-color: #343434 !important; color: #CFD8DC !important; }
    .theme-dark .card-header { background-color: #263238 !important; border-color: #343434 !important; color: #CFD8DC !important; }
    .theme-dark .card-body { color: #CFD8DC !important; }
    .theme-dark .list-group-item { background-color: #1c2429 !important; color: #CFD8DC !important; border-color: #343434 !important; }
    .theme-dark .list-group-item a { color: #66b2ff !important; }
    .theme-dark .list-group-item a:hover { color: #fff !important; }
    .theme-dark .form-control, .theme-dark .form-select { background-color: #101518 !important; color: #CFD8DC !important; border-color: #343434 !important; }
    .theme-dark .form-control::placeholder { color: #8892a0 !important; }
    .theme-dark .form-select option { background-color: #1c2429 !important; color: #CFD8DC !important; }
    .theme-dark .col-form-label { color: #CFD8DC !important; }
    .theme-dark .text-body-secondary { color: #8892a0 !important; }
    .theme-dark .text-danger { color: #f87171 !important; }
    .theme-dark .modal-content { background-color: #1c2429 !important; color: #CFD8DC !important; border-color: #343434 !important; }
    .theme-dark .modal-header, .theme-dark .modal-footer { border-color: #343434 !important; }
    .theme-dark .modal-title { color: #CFD8DC !important; }
    .theme-dark .btn-close { filter: invert(1) !important; }
    .theme-dark .btn-link { color: #66b2ff !important; }
    .theme-dark .btn-link:hover { color: #fff !important; }
    .theme-dark td.gray, .theme-dark .fs-7 { color: #adb5bd !important; }
    .theme-dark .badge.text-bg-light { background-color: #2d3740 !important; color: #CFD8DC !important; border: 1px solid #495057 !important; }
    table.dataTable thead .sorting::after { color: #6c757d; }
    table.dataTable thead .sorting_asc::after, table.dataTable thead .sorting_desc::after { color: #66b2ff; }
    .theme-dark .message { background-color: #212529; color: #CFD8DC; }
    .theme-dark .message.ok { color: #4ade80; border-color: #4ade80; }
    .theme-dark .message.error { color: #f87171; border-color: #f87171; }
    .theme-dark .message.alert { color: #fbbf24; border-color: #fbbf24; }
    .theme-dark .dropzone { background: transparent; border-color: #79755e; }
    .theme-dark #markdown-content { background: #1c2429 !important; color: #CFD8DC; }
    .theme-dark #markdown-content pre, .theme-dark #markdown-content :not(pre) > code { background: #101518; }
    .theme-dark #markdown-content table th { background: #263238; }
    .theme-dark #markdown-content table th, .theme-dark #markdown-content table td { border-color: #343434; }
    .theme-dark #markdown-content blockquote { border-left-color: #495057; color: #adb5bd; }
    .theme-dark #markdown-content pre code.hljs { background: #101518 !important; }
    .theme-dark .copy-code-btn { background-color: #21262d; color: #c9d1d9; border-color: #30363d; }
    .theme-dark .copy-code-btn:hover { background-color: #30363d; border-color: #8b949e; }
    .theme-dark .copy-code-btn.copied { background-color: #1b4721; color: #3fb950; border-color: #2ea043; }
    [data-bs-theme="dark"] .audio-player, .theme-dark .audio-player { background: rgba(255,255,255,.06); }
    [data-bs-theme="dark"] .audio-loading-mask, .theme-dark .audio-loading-mask { background: rgba(30, 30, 30, 0.85); color: #66b2ff; }
    [data-bs-theme="dark"] .tooltip, .theme-dark .tooltip { --bs-tooltip-bg: #212529; --bs-tooltip-color: #f8f9fa; }

    /* Colorize icons in the dark action bar */
    .theme-dark .action-delete > i { color: #ff6b6b !important; background-color: rgba(220, 53, 69, 0.2) !important; }
    .theme-dark .action-delete:hover > i { background-color: transparent !important; color: #ff4d4d !important; }
    .theme-dark .action-rename > i { color: #fbbf24 !important; background-color: rgba(245, 158, 11, 0.2) !important; }
    .theme-dark .action-rename:hover > i { background-color: transparent !important; color: #fcd34d !important; }
    .theme-dark .action-copy > i { color: #75b798 !important; background-color: rgba(25, 135, 84, 0.2) !important; }
    .theme-dark .action-copy:hover > i { background-color: transparent !important; color: #a3cfbb !important; }
    .theme-dark .action-link > i { color: #6ea8fe !important; background-color: rgba(13, 110, 253, 0.2) !important; }
    .theme-dark .action-link:hover > i { background-color: transparent !important; color: #9ec5fe !important; }
    .theme-dark .action-download > i { color: #6edff6 !important; background-color: rgba(13, 202, 240, 0.2) !important; }
    .theme-dark .action-download:hover > i { background-color: transparent !important; color: #9eeaf9 !important; }
    </style>
        <script>
        (function () {
            var saved = localStorage.getItem('fm-theme');
            var prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
            var theme = saved || (prefersDark ? 'dark' : 'light');
            document.documentElement.setAttribute('data-bs-theme', theme);
            document.addEventListener('DOMContentLoaded', function () {
                if (document.body) document.body.classList.toggle('theme-dark', theme === 'dark');
            });
        })();
        </script>
        <?php fm_render_common_js(); ?>
    </head>

    <body class="<?php echo $isStickyNavBar; ?>">
        <div id="wrapper" class="container-fluid">
            <!-- New Item creation -->
            <div class="modal fade" id="createNewItem" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="newItemModalLabel" aria-hidden="true" data-bs-theme="<?php echo FM_THEME; ?>">
                <div class="modal-dialog" role="document">
                    <form class="modal-content" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="newItemModalLabel"><i class="fa-solid fa-square-plus fa-fw"></i><?php echo lng('CreateNewItem') ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <fieldset>
                                <legend><?php echo lng('ItemType') ?></legend>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="newfile" id="customRadioInline1" value="file">
                                    <label class="form-check-label" for="customRadioInline1"><?php echo lng('File') ?></label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="newfile" id="customRadioInline2" value="folder" checked>
                                    <label class="form-check-label" for="customRadioInline2"><?php echo lng('Folder') ?></label>
                                </div>
                            </fieldset>

                            <p class="mt-3"><label for="newfilename"><?php echo lng('ItemName') ?> </label></p>
                            <input type="text" name="newfilename" id="newfilename" value="" class="form-control" placeholder="<?php echo lng('Enter here...') ?>" required>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> <?php echo lng('Cancel') ?></button>
                            <button type="submit" class="btn btn-success"><i class="fa-solid fa-circle-check"></i> <?php echo lng('CreateNow') ?></button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Advance Search Modal -->
            <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true" data-bs-theme="<?php echo FM_THEME; ?>">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="col-11 d-flex align-items-center gap-2">
                                <div class="input-group flex-grow-1">
                                    <input type="text" class="form-control" placeholder="<?php echo lng('SearchPlaceholder') ?>" aria-label="<?php echo lng('Search') ?>" id="advanced-search" name="search" autofocus required>
                                </div>
                                <button class="btn btn-outline-danger d-none" type="button" id="js-search-clear" title="<?php echo lng('Clear') ?>">
                                    <i class="fa-solid fa-square-xmark"></i>
                                </button>
                                <button class="btn btn-outline-secondary text-white" type="button" id="search-addon3" title="<?php echo lng('Search') ?>">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
                                <div class="lds-facebook">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div id="js-search-summary" class="small text-muted mb-2">
                                    <?php echo lng('Search file in folder and subfolders...') ?>
                                </div>

                                <ul id="search-wrapper" class="d-none list-unstyled"></ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!--Rename Modal -->
            <div class="modal modal-alert" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" id="renameDialog" data-bs-theme="<?php echo FM_THEME; ?>">
                <div class="modal-dialog" role="document">
                    <form class="modal-content rounded-3 shadow" method="post" autocomplete="off">
                        <div class="modal-body p-4 text-center">
                            <h5 class="mb-3"><?php echo lng('Are you sure want to rename?') ?></h5>
                            <p class="mb-1">
                                <input type="text" name="rename_to" id="js-rename-to" class="form-control" placeholder="<?php echo lng('Enter new file name') ?>" required>
                                <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                                <input type="hidden" name="rename_from" id="js-rename-from">
                            </p>
                        </div>
                        <div class="modal-footer flex-nowrap p-0">
                            <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end" data-bs-dismiss="modal"><?php echo lng('Cancel') ?></button>
                            <button type="submit" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0"><strong><?php echo lng('Okay') ?></strong></button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Confirm Modal -->
            <script type="text/html" id="js-tpl-confirm">
                <div class="modal modal-alert confirmDialog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" id="confirmDialog-<%this.id%>" data-bs-theme="<?php echo FM_THEME; ?>">
                    <div class="modal-dialog" role="document">
                        <form class="modal-content rounded-3 shadow" method="post" autocomplete="off" action="<%this.action%>">
                            <div class="modal-body p-4 text-center">
                                <h5 class="mb-2"><?php echo lng('Are you sure want to') ?> <%this.title%> ?</h5>
                                <p class="mb-1"><%this.content%></p>
                            </div>
                            <div class="modal-footer flex-nowrap p-0">
                                <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end" data-bs-dismiss="modal"><?php echo lng('Cancel') ?></button>
                                <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                                <button type="submit" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0" data-bs-dismiss="modal"><strong><?php echo lng('Okay') ?></strong></button>
                            </div>
                        </form>
                    </div>
                </div>
            </script>
        <?php
    }

    /**
     * Show page footer after login
     */
    function fm_show_footer()
    {
        global $ext_language, $cfg;
        $isMarkdownView = isset($_GET['view']) && in_array(strtolower(pathinfo($_GET['view'], PATHINFO_EXTENSION)), ['md', 'markdown']);
        ?>
        </div>
        <?php print_external('js-jquery'); ?>
        <?php print_external('js-bootstrap'); ?>
        <?php print_external('js-jquery-datatables'); ?>
        <?php fm_render_lang_modal(); ?>
        
        <script>
            function initCodeCopy() {
                var textCopy = '<?php echo lng("Copy"); ?>';
                var textCopied = '<?php echo lng("Copied"); ?>';
                var textFailed = '<?php echo lng("Copy failed"); ?>';

                var pres = document.querySelectorAll('#markdown-content pre');
                pres.forEach(function(pre) {
                    if (pre.querySelector('.copy-code-btn')) return;
                    
                    var btn = document.createElement('button');
                    btn.className = 'copy-code-btn';
                    btn.textContent = textCopy;
                    
                    btn.addEventListener('click', function() {
                        var code = pre.querySelector('code');
                        if (!code) return;
                        var textToCopy = code.innerText;
                        
                        function doSuccess() {
                            btn.textContent = textCopied;
                            btn.classList.add('copied');
                            setTimeout(function() { 
                                btn.textContent = textCopy; 
                                btn.classList.remove('copied'); 
                            }, 2000);
                        }
                        
                        function doFail() {
                            btn.textContent = textFailed;
                            setTimeout(function() { 
                                btn.textContent = textCopy; 
                            }, 2000);
                        }

                        navigator.clipboard.writeText(textToCopy).then(function() {
                            doSuccess();
                        }).catch(function(err) {
                            var textArea = document.createElement("textarea");
                            textArea.value = textToCopy;
                            textArea.style.position = "fixed";
                            document.body.appendChild(textArea);
                            textArea.select();
                            try {
                                document.execCommand('copy');
                                doSuccess();
                            } catch (err) {
                                doFail();
                            }
                            document.body.removeChild(textArea);
                        });
                    });
                    pre.appendChild(btn);
                });
            }
        </script>
        
        <?php if (FM_USE_HIGHLIGHTJS && isset($_GET['view'])): ?>
        <?php print_external('js-highlightjs'); ?>
        <script>
            var isHighlightingEnabled = true;
        </script>
        <?php endif; ?>
        <?php if ($isMarkdownView): ?>
        <?php print_external('js-marked'); ?>
        <script>
            (function () {
                function setup() {
                    if (typeof marked === 'undefined') return false;
                    if (marked.setOptions) {
                        marked.setOptions({ breaks: true, gfm: true });
                    }
                    var el = document.getElementById('markdown-content');
                    if (el && typeof window.rawMarkdown !== 'undefined') {
                        el.innerHTML = marked.parse(window.rawMarkdown);
                        setTimeout(function(){
                            if (typeof hljs !== 'undefined') {
                                hljs.highlightAll();
                            }
                            initCodeCopy();
                        }, 50);
                    }
                    return true;
                }
                if (!setup()) {
                    var timer = setInterval(function () {
                        if (setup()) clearInterval(timer);
                    }, 100);
                }
            })();
        </script>
        <?php endif; ?>
        <?php if (FM_USE_HIGHLIGHTJS && isset($_GET['view']) && !$isMarkdownView): ?>
        <script>
            hljs.highlightAll();
        </script>
        <?php endif; ?>
        <?php if (isset($_GET['view']) && strtolower(pathinfo($_GET['view'], PATHINFO_EXTENSION)) === 'swf'): ?>
        <script src="https://unpkg.com/@ruffle-rs/ruffle@latest/ruffle.js"></script>
        <script>
        var i18nSwfError = <?php echo json_encode(lng('SwfError')); ?>;
        window.addEventListener("DOMContentLoaded", function () {
            var ruffle = window.RufflePlayer.newest();
            var player = ruffle.createPlayer();
            var container = document.getElementById('ruffle-container');
            player.style.cssText = "width:100%;height:100%;display:block;background:transparent;";
            container.appendChild(player);
            var swfMask = document.getElementById('swfLoadingMask');

            player.addEventListener('loadedmetadata', function () {
                var w = player.metadata && player.metadata.width;
                var h = player.metadata && player.metadata.height;
                if (w && h) {
                    container.style.aspectRatio = w + ' / ' + h;
                } else {
                    container.style.aspectRatio = '800 / 600';
                }
                container.style.height = 'auto';
                if (swfMask) swfMask.style.display = 'none';
            });
            player.addEventListener('error', function(e) {
                console.error("Ruffle Error:", e);
                if (swfMask) {
                    swfMask.innerHTML = '<i class="fa-solid fa-triangle-exclamation text-danger me-2"></i><span class="text-danger">' + i18nSwfError + '</span>';
                }
            });

            player.load("<?php echo fm_enc(FM_ROOT_URL . fm_convert_win((FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $_GET['view'])); ?>");
        });
        </script>
        <?php endif; ?>
        <script>
        fmInitTheme();
        fmInitLangModal();
        var i18nAudioLoading = <?php echo json_encode(lng('AudioLoading')); ?>;
        var i18nAudioError = <?php echo json_encode(lng('AudioError')); ?>;

        function template(html, options) {
            var re = /<\%([^\%>]+)?\%>/g,
                reExp = /(^( )?(if|for|else|switch|case|break|{|}))(.*)?/g,
                code = 'var r=[];\n',
                cursor = 0,
                match;
            var add = function(line, js) {
                js ? (code += line.match(reExp) ? line + '\n' : 'r.push(' + line + ');\n') : (code += line != '' ? 'r.push("' + line.replace(/"/g, '\\"') + '");\n' : '');
                return add
            }
            while (match = re.exec(html)) {
                add(html.slice(cursor, match.index))(match[1], !0);
                cursor = match.index + match[0].length
            }
            add(html.substr(cursor, html.length - cursor));
            code += 'return r.join("");';
            return new Function(code.replace(/[\r\t\n]/g, '')).apply(options)
        }

        (function () {
            var audio = document.getElementById('audioPlayer');
            if (!audio) return;
            var toggle = document.getElementById('audioToggle');
            var seek = document.getElementById('audioSeek');
            var timeEl = document.getElementById('audioTime');
            var bars = document.querySelectorAll('#audioVisualizer span');
            var loadingMask = document.getElementById('audioLoadingMask');

            var ctx, analyser, dataArray, source, rafId, audioCtxReady = false;

            function fmt(t) {
                if (!isFinite(t)) t = 0;
                var m = Math.floor(t / 60);
                var s = Math.floor(t % 60);
                return (m < 10 ? '0' : '') + m + ':' + (s < 10 ? '0' : '') + s;
            }

            function setupAudioContext() {
                if (audioCtxReady) return;
                var AC = window.AudioContext || window.webkitAudioContext;
                if (!AC) return;
                ctx = new AC();
                analyser = ctx.createAnalyser();
                analyser.fftSize = 64;
                dataArray = new Uint8Array(analyser.frequencyBinCount);
                source = ctx.createMediaElementSource(audio);
                source.connect(analyser);
                analyser.connect(ctx.destination);
                audioCtxReady = true;
            }

            function draw() {
                if (!analyser) return;
                analyser.getByteFrequencyData(dataArray);
                for (var i = 0; i < bars.length; i++) {
                    var v = dataArray[i % dataArray.length] / 255;
                    var h = Math.max(6, v * 60);
                    bars[i].style.height = h + 'px';
                }
                rafId = requestAnimationFrame(draw);
            }

            function stopDraw() {
                if (rafId) cancelAnimationFrame(rafId);
                rafId = null;
                bars.forEach(function (b) { b.style.height = '8px'; });
            }

            audio.addEventListener('play', function() {
                if (audio.readyState < 3) {
                    loadingMask.classList.remove('hidden');
                    loadingMask.innerHTML = '<div class="spinner-border text-primary" role="status" style="width: 1.5rem; height: 1.5rem;"></div><span class="ms-2">' + i18nAudioLoading + '<span class="loading-dots"></span></span>';
                }
            });

            audio.addEventListener('canplay', function() {
                loadingMask.classList.add('hidden');
            });

            audio.addEventListener('error', function() {
                loadingMask.classList.remove('hidden');
                loadingMask.innerHTML = '<i class="fa-solid fa-triangle-exclamation text-danger me-2"></i><span class="text-danger">' + i18nAudioError + '</span>';
            });

            toggle.addEventListener('click', function () {
                if (audio.paused) {
                    setupAudioContext();
                    if (ctx && ctx.state === 'suspended') ctx.resume();
                    if (audio.readyState < 3) {
                        loadingMask.classList.remove('hidden');
                        loadingMask.innerHTML = '<div class="spinner-border text-primary" role="status" style="width: 1.5rem; height: 1.5rem;"></div><span class="ms-2">' + i18nAudioLoading + '<span class="loading-dots"></span></span>';
                    }
                    
                    audio.play().catch(function(e) { console.log(e); });
                    draw();
                    toggle.innerHTML = '<i class="fa-solid fa-pause"></i>';
                } else {
                    audio.pause();
                    stopDraw();
                    toggle.innerHTML = '<i class="fa-solid fa-circle-play"></i>';
                }
            });

            audio.addEventListener('loadedmetadata', function () {
                timeEl.textContent = '00:00 / ' + fmt(audio.duration);
            });

            audio.addEventListener('timeupdate', function () {
                if (audio.duration) {
                    seek.value = (audio.currentTime / audio.duration) * 100;
                }
                timeEl.textContent = fmt(audio.currentTime) + ' / ' + fmt(audio.duration);
            });

            seek.addEventListener('input', function () {
                if (audio.duration) {
                    audio.currentTime = (seek.value / 100) * audio.duration;
                }
            });

            audio.addEventListener('ended', function () {
                toggle.innerHTML = '<i class="fa-solid fa-circle-play"></i>';
                stopDraw();
                seek.value = 0;
            });
        })();

        document.addEventListener('show.bs.modal', function (e) {
            var modal = e.target;
            if (modal && modal.id === 'imageModal') {
                var trigger = e.relatedTarget;
                if (trigger) {
                    var src = trigger.getAttribute('data-full-src') || trigger.getAttribute('src');
                    var img = document.getElementById('imageModalImg');
                    var obj = document.getElementById('imageModalObject');
                    if (src && src.toLowerCase().includes('.svg')) {
                        img.style.display = 'none';
                        obj.style.display = 'block';
                        obj.innerHTML = '';
                        obj.setAttribute('data', src);
                    } else {
                        obj.style.display = 'none';
                        obj.setAttribute('data', '');
                        obj.innerHTML = '';
                        img.style.display = 'block';
                        img.src = src;
                        img.alt = trigger.getAttribute('alt') || '';
                    }
                }
            }
        });

        document.addEventListener('hide.bs.modal', function (e) {
            var modal = e.target;
            if (modal && modal.id === 'imageModal') {
                var img = document.getElementById('imageModalImg');
                var obj = document.getElementById('imageModalObject');
                if (img) { 
                    img.src = ''; 
                    img.style.display = 'none'; 
                }
                if (obj) { 
                    obj.setAttribute('data', ''); 
                    obj.innerHTML = ''; 
                    obj.style.display = 'none'; 
                }
            }
        });

        function rename(e, t) {
            if (t) {
                $("#js-rename-from").val(t);
                $("#js-rename-to").val(t);
                $("#renameDialog").modal('show');
            }
        }

        function change_checkboxes(e, t) {
            for (var n = e.length - 1; n >= 0; n--) e[n].checked = "boolean" == typeof t ? t : !e[n].checked
        }

        function get_checkboxes() {
            for (var e = document.getElementsByName("file[]"), t = [], n = e.length - 1; n >= 0; n--)(e[n].type = "checkbox") && t.push(e[n]);
            return t
        }

        function select_all() {
            change_checkboxes(get_checkboxes(), !0)
        }

        function unselect_all() {
            change_checkboxes(get_checkboxes(), !1)
        }

        function invert_all() {
            change_checkboxes(get_checkboxes())
        }

        function checkbox_toggle() {
            var e = get_checkboxes();
            e.push(this), change_checkboxes(e)
        }

        // Create file backup with .bck
        function backup(e, t) {
            var n = new XMLHttpRequest,
                a = "path=" + e + "&file=" + t + "&token=" + window.csrf + "&type=backup&ajax=true";
            return n.open("POST", "", !0), n.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), n.onreadystatechange = function() {
                4 == n.readyState && 200 == n.status && toast(n.responseText)
            }, n.send(a), !1
        }

        // Toast message
        function toast(txt) {
            var x = document.getElementById("snackbar");
            x.innerHTML = txt;
            x.className = "show";
            setTimeout(function() {
                x.className = x.className.replace("show", "");
            }, 3000);
        }

        // Save file
        function edit_save(e, t) {
            var n = "ace" == t ? editor.getSession().getValue() : document.getElementById("normal-editor").value;
            if (typeof n !== 'undefined' && n !== null) {
                if (true) {
                    var data = {
                        ajax: true,
                        content: n,
                        type: 'save',
                        token: window.csrf
                    };

                    $.ajax({
                        type: "POST",
                        url: window.location,
                        data: JSON.stringify(data),
                        contentType: "application/json; charset=utf-8",
                        success: function(mes) {
                            toast("<?php echo lng("Saved Successfully"); ?>");
                            window.onbeforeunload = function() {
                                return
                            }
                        },
                        failure: function(mes) {
                            toast("<?php echo lng("Error: try again"); ?>");
                        },
                        error: function(mes) {
                            toast(`<p style="background-color:red">${mes.responseText}</p>`);
                        }
                    });
                } else {
                    var a = document.createElement("form");
                    a.setAttribute("method", "POST"), a.setAttribute("action", "");
                    var o = document.createElement("textarea");
                    o.setAttribute("type", "textarea"), o.setAttribute("name", "savedata");
                    let cx = document.createElement("input");
                    cx.setAttribute("type", "hidden");
                    cx.setAttribute("name", "token");
                    cx.setAttribute("value", window.csrf);
                    var c = document.createTextNode(n);
                    o.appendChild(c), a.appendChild(o), a.appendChild(cx), document.body.appendChild(a), a.submit()
                }
            }
        }

        function show_new_pwd() {
            $(".js-new-pwd").toggleClass('hidden');
        }

        (function () {
            var input   = document.getElementById('js-pwd-input');
            var randomB = document.getElementById('js-pwd-random');
            var copyB   = document.getElementById('js-pwd-copy');
            var result  = document.getElementById('js-pwd-result');
            var bar     = document.getElementById('js-pwd-strength-bar');
            var label   = document.getElementById('js-pwd-strength-label');
            var sugg    = document.getElementById('js-pwd-suggestions');
            if (!input) return;

            var T = {
                weak:        '<?php echo lng('PwdStrengthWeak') ?>',
                fair:        '<?php echo lng('PwdStrengthFair') ?>',
                good:        '<?php echo lng('PwdStrengthGood') ?>',
                strong:      '<?php echo lng('PwdStrengthStrong') ?>',
                veryStrong:  '<?php echo lng('PwdStrengthVeryStrong') ?>',
                empty:       '<?php echo lng('PwdStrengthEmpty') ?>',
                tooShort:    '<?php echo lng('PwdSuggestionTooShort') ?>',
                addUpper:    '<?php echo lng('PwdSuggestionAddUpper') ?>',
                addLower:    '<?php echo lng('PwdSuggestionAddLower') ?>',
                addDigit:    '<?php echo lng('PwdSuggestionAddDigit') ?>',
                addSymbol:   '<?php echo lng('PwdSuggestionAddSymbol') ?>',
                common:      '<?php echo lng('PwdSuggestionCommon') ?>',
                repeat:      '<?php echo lng('PwdSuggestionRepeat') ?>',
                sequence:    '<?php echo lng('PwdSuggestionSequence') ?>',
                excellent:   '<?php echo lng('PwdSuggestionExcellent') ?>',
                copied:      '<?php echo lng('Copied') ?>',
                copyFailed:  '<?php echo lng('Copy failed') ?>',
                noHashYet:   '<?php echo lng('No hash yet') ?>'
            };

            var COMMON = ['password','123456','12345678','qwerty','abc123','111111','123123',
                        'admin','letmein','welcome','monkey','dragon','iloveyou','000000',
                        'passw0rd','p@ssw0rd','qwerty123','1q2w3e4r','zxcvbnm'];

            function randomInt(max) {
                if (window.crypto && crypto.getRandomValues) {
                    var buf = new Uint32Array(1);
                    var limit = Math.floor(0xFFFFFFFF / max) * max;
                    var x;
                    do { crypto.getRandomValues(buf); x = buf[0]; } while (x >= limit);
                    return x % max;
                }
                return Math.floor(Math.random() * max);
            }
            function generate(len) {
                if (!len || len < 4) len = 16;
                var lower = 'abcdefghijknopqrstuvwxyz';
                var upper = 'ACDEFGHJKLMNPQRSTUVWXYZ';
                var digits = '12345679';
                var symbols = '!@#$+-*_';
                var all = lower + upper + digits + symbols;
                var out = [];
                out.push(lower[randomInt(lower.length)]);
                out.push(upper[randomInt(upper.length)]);
                out.push(digits[randomInt(digits.length)]);
                out.push(symbols[randomInt(symbols.length)]);
                for (var i = out.length; i < len; i++) out.push(all[randomInt(all.length)]);
                for (var i = out.length - 1; i > 0; i--) {
                    var j = randomInt(i + 1);
                    var t = out[i]; out[i] = out[j]; out[j] = t;
                }
                return out.join('');
            }

            function evaluate(pwd) {
                var suggestions = [];
                if (!pwd) {
                    return { score: 0, level: 'empty', label: T.empty, suggestions: [] };
                }

                var len = pwd.length;
                var hasLower = /[a-z]/.test(pwd);
                var hasUpper = /[A-Z]/.test(pwd);
                var hasDigit = /[0-9]/.test(pwd);
                var hasSymbol = /[^A-Za-z0-9]/.test(pwd);
                var classes = [hasLower, hasUpper, hasDigit, hasSymbol].filter(Boolean).length;

                var score = Math.min(len * 3, 40);
                score += classes * 7.5;

                var uniq = new Set(pwd).size;
                score += Math.min((uniq / len) * 15, 15);

                var lowerPwd = pwd.toLowerCase();

                if (COMMON.indexOf(lowerPwd) !== -1) {
                    score -= 40;
                    suggestions.push(T.common);
                } else {
                    for (var i = 0; i < COMMON.length; i++) {
                        if (COMMON[i].length >= 4 && lowerPwd.indexOf(COMMON[i]) !== -1) {
                            score -= 15;
                            suggestions.push(T.common);
                            break;
                        }
                    }
                }

                if (/(.)\1{2,}/.test(pwd)) {
                    score -= 10;
                    suggestions.push(T.repeat);
                }

                var seqs = ['abcdefghijklmnopqrstuvwxyz','0123456789','qwertyuiop','asdfghjkl','zxcvbnm'];
                for (var s = 0; s < seqs.length; s++) {
                    for (var k = 0; k + 3 <= seqs[s].length; k++) {
                        var frag = seqs[s].substr(k, 3);
                        if (lowerPwd.indexOf(frag) !== -1 || lowerPwd.indexOf(frag.split('').reverse().join('')) !== -1) {
                            score -= 8;
                            suggestions.push(T.sequence);
                            k = seqs[s].length;
                            break;
                        }
                    }
                }

                if (len < 8) suggestions.push(T.tooShort);
                if (!hasUpper) suggestions.push(T.addUpper);
                if (!hasLower) suggestions.push(T.addLower);
                if (!hasDigit) suggestions.push(T.addDigit);
                if (!hasSymbol) suggestions.push(T.addSymbol);

                suggestions = suggestions.filter(function (v, i, a) { return a.indexOf(v) === i; });

                score = Math.max(0, Math.min(100, Math.round(score)));

                var level, levelLabel;
                if (score < 30)      { level = 'weak';       levelLabel = T.weak; }
                else if (score < 55) { level = 'fair';       levelLabel = T.fair; }
                else if (score < 75) { level = 'good';       levelLabel = T.good; }
                else if (score < 90) { level = 'strong';     levelLabel = T.strong; }
                else                 { level = 'veryStrong'; levelLabel = T.veryStrong; }

                if (score >= 90 && suggestions.length === 0) {
                    suggestions.push(T.excellent);
                }

                return { score: score, level: level, label: levelLabel, suggestions: suggestions };
            }

            function renderStrength() {
                var pwd = input.value;
                var res = evaluate(pwd);

                var colorMap = {
                    weak:       '#dc3545',
                    fair:       '#fd7e14',
                    good:       '#ffc107',
                    strong:     '#20c997',
                    veryStrong: '#198754',
                    empty:      '#6c757d'
                };
                var color = colorMap[res.level] || '#6c757d';

                bar.style.width = res.score + '%';
                bar.style.backgroundColor = color;
                bar.setAttribute('aria-valuenow', res.score);

                label.textContent = res.label;
                label.style.color = color;

                sugg.innerHTML = '';
                if (res.suggestions.length) {
                    res.suggestions.forEach(function (s) {
                        var li = document.createElement('li');
                        li.textContent = s;
                        sugg.appendChild(li);
                    });
                }
            }

            if (randomB) {
                randomB.addEventListener('click', function (e) {
                    e.preventDefault();
                    input.value = generate(16);
                    renderStrength();
                });
            }

            input.addEventListener('input', renderStrength);
            input.addEventListener('change', renderStrength);

            renderStrength();

            if (copyB) {
                copyB.addEventListener('click', function (e) {
                    e.preventDefault();
                    var data = result.value;
                    if (!data) {
                        var old0 = copyB.textContent;
                        copyB.textContent = T.noHashYet;
                        copyB.disabled = true;
                        setTimeout(function () { copyB.textContent = old0; copyB.disabled = false; }, 1500);
                        return;
                    }
                    function done() {
                        var old = copyB.textContent;
                        copyB.textContent = T.copied;
                        copyB.disabled = true;
                        setTimeout(function () { copyB.textContent = old; copyB.disabled = false; }, 1500);
                    }
                    function fail() {
                        var old = copyB.textContent;
                        copyB.textContent = T.copyFailed;
                        copyB.disabled = true;
                        setTimeout(function () { copyB.textContent = old; copyB.disabled = false; }, 1500);
                    }
                    if (navigator.clipboard && navigator.clipboard.writeText) {
                        navigator.clipboard.writeText(data).then(done).catch(function () {
                            fallbackCopy(data, done, fail);
                        });
                    } else {
                        fallbackCopy(data, done, fail);
                    }
                });
            }

            function fallbackCopy(text, done, fail) {
                var ta = document.createElement('textarea');
                ta.value = text;
                ta.style.position = 'fixed';
                ta.style.opacity = '0';
                document.body.appendChild(ta);
                ta.select();
                try {
                    var ok = document.execCommand('copy');
                    ok ? done() : fail();
                } catch (err) {
                    fail();
                } finally {
                    document.body.removeChild(ta);
                }
            }

            var origNewPwdHash = window.new_password_hash;
            if (typeof origNewPwdHash === 'function') {
                window.new_password_hash = function ($this) {
                    var pwd = input.value;
                    var res = evaluate(pwd);
                    if (pwd && res.score < 40) {
                        var msg = T.weak + ' — ' + res.label + '\n' +
                                (res.suggestions.length ? '• ' + res.suggestions.join('\n• ') : '');
                        if (!confirm(msg + '\n\n' + '<?php echo lng('PwdConfirmWeakGenerate') ?>')) {
                            return false;
                        }
                    }
                    return origNewPwdHash.call(this, $this);
                };
            }
        })();

        // Save Settings
        function save_settings($this) {
            let form = $($this);
            let tz = '';
            try {
                tz = Intl.DateTimeFormat().resolvedOptions().timeZone || '';
            } catch (e) {
                tz = '';
            }
            $.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: form.serialize() + "&token=" + window.csrf + "&ajax=" + true,
                success: function(data) {
                    if (data) {
                        var url = new URL(window.location.href);
                        url.searchParams.set('t', Date.now());
                        setTimeout(function () {
                            window.location.replace(url.toString());
                        }, 2600);
                    }
                }
            });
            return false;
        }

        //Create new password hash
        function new_password_hash($this) {
            let form = $($this), $pwd = $("#js-pwd-result"), $bar = $("#js-pwd-progress");
            $pwd.val('');
            $bar.removeClass('d-none');
            $.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: form.serialize() + "&token=" + window.csrf + "&ajax=" + true,
                success: function (data) { if (data) $pwd.val(data); },
                error: function () { $pwd.val('<?php echo lng("Error: try again"); ?>'); },
                complete: function () {
                    setTimeout(function () { $bar.addClass('d-none'); }, 400);
                }
            });
            return false;
        }

        // Upload files using URL @param {Object}
        function upload_from_url($this) {
            let form = $($this),
                resultWrapper = $("div#js-url-upload__list");
            $.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: form.serialize() + "&token=" + window.csrf + "&ajax=" + true,
                beforeSend: function() {
                    resultWrapper.empty();
                    form.find("input[name=uploadurl]").attr("disabled", "disabled");
                    form.find("button").hide();
                    form.find(".lds-facebook").addClass('show-me');
                },
                success: function(data) {
                    if (data) {
                        data = JSON.parse(data);
                        if (data.done) {
                            resultWrapper.append('<div class="alert alert-success d-inline-block w-auto mb-2"><?php echo lng("Uploaded Successful"); ?>: ' + data.done.name + '</div>');
                            form.find("input[name=uploadurl]").val('');
                        } else if (data['fail']) {
                            resultWrapper.append('<div class="alert alert-danger d-inline-block w-auto mb-2"><?php echo lng("Error"); ?>: ' + data.fail.message + '</div>');
                        }
                        form.find("input[name=uploadurl]").removeAttr("disabled");
                        form.find("button").show();
                        form.find(".lds-facebook").removeClass('show-me');
                    }
                },
                error: function(xhr) {
                    form.find("input[name=uploadurl]").removeAttr("disabled");
                    form.find("button").show();
                    form.find(".lds-facebook").removeClass('show-me');
                    console.error(xhr);
                }
            });
            return false;
        }

        // Search template
        function search_template(data) {
            var response = "";
            $.each(data, function(key, val) {
                let cleanPath = val.path.replace(/^\//, '');
                let href = cleanPath ? `?p=${encodeURIComponent(cleanPath)}&view=${encodeURIComponent(val.name)}` : `?p=&view=${encodeURIComponent(val.name)}`;
                let displayPath = cleanPath ? `/${cleanPath}/${val.name}` : `/${val.name}`;
                response += `<li><a href="${href}">${displayPath}</a></li>`;
            });
            return response;
        }

        // Advance search
        function fm_search() {
            var searchTxt = $("input#advanced-search").val(),
                searchWrapper = $("ul#search-wrapper"),
                summary = $("#js-search-summary"),
                path = $("#js-search-modal").attr("href"),
                $loader = $("div.lds-facebook");
            if (!!searchTxt && searchTxt.length >= 3 && path) {
                var data = {
                    ajax: true,
                    content: searchTxt,
                    path: path,
                    type: 'search',
                    token: window.csrf
                };
                $.ajax({
                    type: "POST",
                    url: window.location,
                    data: data,
                    beforeSend: function() {
                        searchWrapper.html('').addClass('d-none');
                        summary.text('<?php echo lng('Searching') ?>');  
                        $loader.addClass('show-me');
                    },
                    success: function(data) {
                        $loader.removeClass('show-me');
                        data = JSON.parse(data);
                        if (data && data.length) {
                            searchWrapper.html(search_template(data)).removeClass('d-none');
                            var foundText = '<?php echo lng("SearchFoundFiles") ?>';
                            summary.text(foundText.replace('{n}', data.length));
                        } else {
                            summary.text('<?php echo lng("No result found!") ?>');
                        }
                    },
                    error: function() {
                        $loader.removeClass('show-me');
                        summary.text('<?php echo lng("ERROR: Try again later!"); ?>');
                    }
                });
            } else {
                summary.text('<?php echo lng("OOPS: minimum 3 characters required!"); ?>');
                searchWrapper.html('').addClass('d-none');
            }
        }
        $('#advanced-search').on('input', function() {
            if ($(this).val().length > 0) {
                $('#js-search-clear').removeClass('d-none');
            } else {
                $('#js-search-clear').addClass('d-none');
            }
        });
        $('#js-search-clear').on('click', function() {
            $('#advanced-search').val('').focus();
            $(this).addClass('d-none');
            $("ul#search-wrapper").html('');
            $("#js-search-summary").text('<?php echo lng("Search file in folder and subfolders...") ?>');
        });

        // action confirm dialog modal
        function confirmDialog(e, id = 0, title = "Action", content = "", action = null) {
            e.preventDefault();
            const tplObj = {
                id,
                title,
                content: decodeURIComponent(content.replace(/\+/g, ' ')),
                action
            };
            let tpl = $("#js-tpl-confirm").html();
            $(".modal.confirmDialog").remove();
            $('#wrapper').append(template(tpl, tplObj));
            const $confirmDialog = $("#confirmDialog-" + tplObj.id);
            $confirmDialog.modal('show');
            return false;
        }

        // on mouse hover image preview
        function initPreviewImage() {
            var s = jQuery;
            s(document).off('.previewImage');
            
            s(document).on("mouseover.previewImage", "[data-preview-image]", function(e) {
                s("#preview-image-plugin-overlay").remove();
                
                var imgSrc = s(this).attr('data-preview-image');
                if (!imgSrc) return;
                
                var isSvg = imgSrc.toLowerCase().includes('.svg');
                var previewContent;
                if (isSvg) {
                    previewContent = s('<object class="c-preview-img" type="image/svg+xml">').attr("data", imgSrc);
                } else {
                    previewContent = s('<img class="c-preview-img">').attr("src", imgSrc);
                }

                var o = s("<div>").attr("id", "preview-image-plugin-overlay").append(previewContent);

                s("body").append(o);
                var isRtl = document.documentElement.getAttribute('dir') === 'rtl';
                var offsetX = isRtl ? (e.pageX - 220) : (e.pageX + 20);
                
                o.css("top", e.pageY - 20 + "px").css("left", offsetX + "px").fadeIn("fast");
            }).on("mouseout.previewImage", "[data-preview-image]", function() {
                s("#preview-image-plugin-overlay").remove();
            }).on("mousemove.previewImage", "[data-preview-image]", function(e) {
                var isRtl = document.documentElement.getAttribute('dir') === 'rtl';
                var offsetX = isRtl ? (e.pageX - 220) : (e.pageX + 20);
                
                s("#preview-image-plugin-overlay").css("top", e.pageY - 20 + "px").css("left", offsetX + "px");
            });
        }

        // Dom Ready Events
        $(document).ready(function() {
            try {
                var userTimeZone = Intl.DateTimeFormat().resolvedOptions().timeZone;
                if (userTimeZone && document.cookie.indexOf('fm-timezone=') === -1) {
                    document.cookie = "fm-timezone=" + encodeURIComponent(userTimeZone) + "; path=/; max-age=" + (86400 * 365) + "; SameSite=Lax";
                }
            } catch (e) {
                console.warn("<?php echo lng('TimezoneError') ?>", e);
            }
            // dataTable init
            var $table = $('#main-table'),
                tableLng = $table.find('th').length,
                _targets = (tableLng && tableLng == 7) ? [0, 4, 5, 6] : tableLng == 5 ? [0, 4] : [3];
            var enablePaging = <?php echo !empty($cfg->data['enable_paging']) ? 'true' : 'false'; ?>;    
            mainTable = $('#main-table').DataTable({
                paging: enablePaging,
                pageLength: 50,
                lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "<?php echo lng('All') ?>"]],
                info: enablePaging,
                order: [],
                language: {
                    "emptyTable": "<?php echo lng('Folder is empty') ?>",
                    "info": "<?php echo lng('Showing') ?> _START_ <?php echo lng('to') ?> _END_ / _TOTAL_ <?php echo lng('Records') ?>",
                    "infoEmpty": "<?php echo lng('No records available') ?>",
                    "infoFiltered": "(<?php echo lng('filtered from') ?> _MAX_ <?php echo lng('total records') ?>)",
                    "lengthMenu": "<?php echo lng('Show') ?> _MENU_ <?php echo lng('entries') ?>",
                    "loadingRecords": "<?php echo lng('Loading') ?>...",
                    "processing": "<?php echo lng('Processing') ?>...",
                    "search": "<?php echo lng('Search') ?>:",
                    "zeroRecords": "<?php echo lng('No result found!') ?>",
                    "paginate": {
                        "first": "<?php echo lng('First') ?>",
                        "last": "<?php echo lng('Last') ?>",
                        "next": "<?php echo lng('Next') ?>",
                        "previous": "<?php echo lng('Previous') ?>"
                    },
                    "aria": {
                        "sortAscending": "<?php echo lng('activate to sort column ascending') ?>",
                        "sortDescending": "<?php echo lng('activate to sort column descending') ?>"
                    }
                },
                columnDefs: [{
                    targets: _targets,
                    orderable: false
                }],
                drawCallback: function() {
                    if (typeof initPreviewImage === 'function') {
                        initPreviewImage();
                    }
                    
                    if (!enablePaging) return;
                    var api = this.api();
                    var info = api.page.info();
                    var $actionBar = $('form.pt-3 > .row').first(); 
                    if (info.page === 0) {
                        $actionBar.show();
                    } else {
                        $actionBar.hide();
                    }
                },
                initComplete: function() {
                    if (typeof initPreviewImage === 'function') {
                        initPreviewImage();
                    }
                }
            });
            $('#main-table_filter input').attr('id', 'dt-search-input').attr('name', 'dt-search-input');

            // filter table
            $('#search-addon').on('keyup', function() {
                mainTable.search(this.value).draw();
            });

            $("input#advanced-search").on('keyup', function(e) {
                if (e.keyCode === 13) {
                    fm_search();
                }
            });
            
            $('#search-addon3').on('click', function() {
                fm_search();
            });

            var moveCheckbox = document.getElementById('js-move-files');
            var actionText = document.getElementById('js-action-text');
            var textCopy = "<?php echo lng('Copy'); ?>";
            var textMove = "<?php echo lng('Move'); ?>";
            if (moveCheckbox && actionText) {
                moveCheckbox.addEventListener('change', function() {
                    if (this.checked) {
                        actionText.textContent = textMove;
                    } else {
                        actionText.textContent = textCopy;
                    }
                });
            }

            //upload nav tabs
            $(".fm-upload-wrapper .card-header-tabs").on("click", 'a', function(e) {
                e.preventDefault();
                let target = $(this).data('target');
                $(".fm-upload-wrapper .card-header-tabs a").removeClass('active');
                $(this).addClass('active');
                $(".fm-upload-wrapper .card-tabs-container").addClass('hidden');
                $(target).removeClass('hidden');
            });

            $('#js-show-beian').on('change', function() {
                if ($(this).is(':checked')) {
                    $('#js-beian-fields').removeClass('d-none');
                } else {
                    $('#js-beian-fields').addClass('d-none');
                }
            });
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl, {
                    delay: { show: 300, hide: 100 }
                });
            });
        });
        </script>

        <?php if (isset($_GET['edit']) && isset($_GET['env']) && FM_EDIT_FILE && !FM_READONLY):
            $ext = pathinfo($_GET["edit"], PATHINFO_EXTENSION);
            $ext =  isset($ext_language[$ext]) ? $ext_language[$ext] :  $ext;
        ?>
            <?php print_external('js-ace'); ?>
            <script>
                var editor = ace.edit("editor");
                editor.getSession().setMode({
                    path: "ace/mode/<?php echo $ext; ?>",
                    inline: true
                });
                editor.setTheme("ace/theme/<?php echo ACE_THEME; ?>"); // Dark Theme
                editor.setShowPrintMargin(false); // Hide the vertical ruler
                function ace_commend(cmd) {
                    editor.commands.exec(cmd, editor);
                }
                editor.commands.addCommands([{
                    name: 'save',
                    bindKey: {
                        win: 'Ctrl-S',
                        mac: 'Command-S'
                    },
                    exec: function(editor) {
                        edit_save(this, 'ace');
                    }
                }]);

                function renderThemeMode() {
                    var $modeEl = $("select#js-ace-mode"),
                        $themeEl = $("select#js-ace-theme"),
                        $fontSizeEl = $("select#js-ace-fontSize"),
                        optionNode = function(type, arr) {
                            var $Option = "";
                            $.each(arr, function(i, val) {
                                $Option += "<option value='" + type + i + "'>" + val + "</option>";
                            });
                            return $Option;
                        },
                        _data = {
                            "aceTheme": {
                                "bright": {
                                    "chrome": "Chrome",
                                    "clouds": "Clouds",
                                    "cloud9_day": "Cloud9 Day",
                                    "crimson_editor": "Crimson Editor",
                                    "dawn": "Dawn",
                                    "dreamweaver": "Dreamweaver",
                                    "eclipse": "Eclipse",
                                    "github": "GitHub",
                                    "github_light_default": "GitHub Light Default",
                                    "gruvbox_light_hard": "Gruvbox Light Hard",
                                    "iplastic": "IPlastic",
                                    "katzenmilch": "KatzenMilch",
                                    "kuroir": "Kuroir",
                                    "solarized_light": "Solarized Light",
                                    "sqlserver": "SQL Server",
                                    "textmate": "TextMate",
                                    "tomorrow": "Tomorrow",
                                    "xcode": "XCode"
                                },
                                "dark": {
                                    "ambiance": "Ambiance",
                                    "chaos": "Chaos",
                                    "cloud_editor_dark": "Cloud Editor Dark",
                                    "cloud9_night": "Cloud9 Night",
                                    "cloud9_night_low_color": "Cloud9 Night Low Color",
                                    "clouds_midnight": "Clouds Midnight",
                                    "cobalt": "Cobalt",
                                    "dracula": "Dracula",
                                    "github_dark": "GitHub Dark",
                                    "gob": "Green on Black",
                                    "gruvbox": "Gruvbox",
                                    "gruvbox_dark_hard": "Gruvbox Dark Hard",
                                    "idle_fingers": "idle Fingers",
                                    "kr_theme": "krTheme",
                                    "merbivore": "Merbivore",
                                    "merbivore_soft": "Merbivore Soft",
                                    "mono_industrial": "Mono Industrial",
                                    "monokai": "Monokai",
                                    "nord_dark": "Nord Dark",
                                    "one_dark": "One Dark",
                                    "pastel_on_dark": "Pastel on dark",
                                    "solarized_dark": "Solarized Dark",
                                    "terminal": "Terminal",
                                    "tomorrow_night": "Tomorrow Night",
                                    "tomorrow_night_blue": "Tomorrow Night Blue",
                                    "tomorrow_night_bright": "Tomorrow Night Bright",
                                    "tomorrow_night_eighties": "Tomorrow Night 80s",
                                    "twilight": "Twilight",
                                    "vibrant_ink": "Vibrant Ink"
                                }
                            },
                            "aceMode": {
                                "javascript": "JavaScript",
                                "abap": "ABAP",
                                "abc": "ABC",
                                "actionscript": "ActionScript",
                                "ada": "ADA",
                                "alda": "Alda",
                                "apache_conf": "Apache Conf",
                                "apex": "Apex",
                                "applescript": "AppleScript",
                                "aql": "AQL",
                                "asciidoc": "AsciiDoc",
                                "asl": "ASL",
                                "assembly_arm32": "Assembly ARM32",
                                "assembly_x86": "Assembly x86",
                                "astro": "Astro",
                                "autohotkey": "AutoHotKey",
                                "basic": "Basic",
                                "batchfile": "BatchFile",
                                "bibtex": "BibTeX",
                                "c_cpp": "C and C++",
                                "c9search": "C9Search",
                                "cedar": "Cedar",
                                "cedarschema": "CedarSchema",
                                "cirru": "Cirru",
                                "clojure": "Clojure",
                                "clue": "Clue",
                                "cobol": "Cobol",
                                "coffee": "CoffeeScript",
                                "coldfusion": "ColdFusion",
                                "crystal": "Crystal",
                                "csharp": "C#",
                                "csound_document": "Csound Document",
                                "csound_orchestra": "Csound",
                                "csound_score": "Csound Score",
                                "csp": "CSP",
                                "css": "CSS",
                                "csv": "CSV",
                                "curly": "Curly",
                                "cuttlefish": "Cuttlefish",
                                "d": "D",
                                "dart": "Dart",
                                "diff": "Diff",
                                "django": "Django",
                                "dockerfile": "Dockerfile",
                                "dot": "Dot",
                                "drools": "Drools",
                                "edifact": "Edifact",
                                "eiffel": "Eiffel",
                                "ejs": "EJS",
                                "elixir": "Elixir",
                                "elm": "Elm",
                                "erlang": "Erlang",
                                "flix": "Flix",
                                "forth": "Forth",
                                "fortran": "Fortran",
                                "fsharp": "FSharp",
                                "fsl": "FSL",
                                "ftl": "FreeMarker",
                                "gcode": "Gcode",
                                "gdresource": "GDResource",
                                "gdscript": "GDScript",
                                "gdshader": "GDShader",
                                "gherkin": "Gherkin",
                                "gitignore": "Gitignore",
                                "glsl": "Glsl",
                                "gobstones": "Gobstones",
                                "golang": "Go",
                                "graphqlschema": "GraphQLSchema",
                                "groovy": "Groovy",
                                "groq": "Groq",
                                "haml": "HAML",
                                "handlebars": "Handlebars",
                                "haskell": "Haskell",
                                "haskell_cabal": "Haskell Cabal",
                                "haxe": "haXe",
                                "hjson": "Hjson",
                                "html": "HTML",
                                "html_elixir": "HTML (Elixir)",
                                "html_ruby": "HTML (Ruby)",
                                "ini": "INI",
                                "io": "Io",
                                "ion": "Ion",
                                "jack": "Jack",
                                "jade": "Jade",
                                "java": "Java",
                                "javascript": "JavaScript",
                                "jexl": "JEXL",
                                "json": "JSON",
                                "json5": "JSON5",
                                "jsoniq": "JSONiq",
                                "jsp": "JSP",
                                "jssm": "JSSM",
                                "jsx": "JSX",
                                "julia": "Julia",
                                "kotlin": "Kotlin",
                                "latex": "LaTeX",
                                "latte": "Latte",
                                "less": "LESS",
                                "liquid": "Liquid",
                                "lisp": "Lisp",
                                "livescript": "LiveScript",
                                "logiql": "LogiQL",
                                "logtalk": "Logtalk",
                                "lsl": "LSL",
                                "lua": "Lua",
                                "luapage": "LuaPage",
                                "lucene": "Lucene",
                                "makefile": "Makefile",
                                "mariadb": "MariaDB",
                                "markdown": "Markdown",
                                "mask": "Mask",
                                "matlab": "MATLAB",
                                "maze": "Maze",
                                "mediawiki": "MediaWiki",
                                "mel": "MEL",
                                "mips": "MIPS",
                                "mixal": "MIXAL",
                                "mushcode": "MUSHCode",
                                "mysql": "MySQL",
                                "nasal": "Nasal",
                                "nginx": "Nginx",
                                "nim": "Nim",
                                "nix": "Nix",
                                "nsis": "NSIS",
                                "nunjucks": "Nunjucks",
                                "objectivec": "Objective-C",
                                "ocaml": "OCaml",
                                "odin": "Odin",
                                "partiql": "PartiQL",
                                "pascal": "Pascal",
                                "perl": "Perl",
                                "pgsql": "pgSQL",
                                "php": "PHP",
                                "php_laravel_blade": "PHP (Blade Template)",
                                "pig": "Pig",
                                "plain_text": "Plain Text",
                                "plsql": "PLSQL",
                                "powershell": "Powershell",
                                "praat": "Praat",
                                "prisma": "Prisma",
                                "prolog": "Prolog",
                                "properties": "Properties",
                                "protobuf": "Protobuf",
                                "prql": "PRQL",
                                "puppet": "Puppet",
                                "python": "Python",
                                "qml": "QML",
                                "r": "R",
                                "raku": "Raku",
                                "razor": "Razor",
                                "rdoc": "RDoc",
                                "red": "Red",
                                "redshift": "Redshift",
                                "rhtml": "RHTML",
                                "robot": "Robot",
                                "rst": "RST",
                                "ruby": "Ruby",
                                "rust": "Rust",
                                "sac": "SAC",
                                "sass": "SASS",
                                "scad": "SCAD",
                                "scala": "Scala",
                                "scheme": "Scheme",
                                "scrypt": "Scrypt",
                                "scss": "SCSS",
                                "sh": "SH",
                                "sjs": "SJS",
                                "slim": "Slim",
                                "smarty": "Smarty",
                                "smithy": "Smithy",
                                "snippets": "Snippets",
                                "soy_template": "Soy Template",
                                "space": "Space",
                                "sparql": "SPARQL",
                                "sql": "SQL",
                                "sqlserver": "SQLServer",
                                "stylus": "Stylus",
                                "svg": "SVG",
                                "swift": "Swift",
                                "tcl": "Tcl",
                                "terraform": "Terraform",
                                "tex": "Tex",
                                "text": "Text",
                                "textile": "Textile",
                                "toml": "Toml",
                                "tsv": "TSV",
                                "tsx": "TSX",
                                "turtle": "Turtle",
                                "twig": "Twig",
                                "typescript": "Typescript",
                                "vala": "Vala",
                                "vbscript": "VBScript",
                                "velocity": "Velocity",
                                "verilog": "Verilog",
                                "vhdl": "VHDL",
                                "visualforce": "Visualforce",
                                "vue": "Vue",
                                "wollok": "Wollok",
                                "xml": "XML",
                                "xquery": "XQuery",
                                "yaml": "YAML",
                                "zeek": "Zeek",
                                "zig": "Zig"
                            },
                            "fontSize": {
                                8: 8,
                                10: 10,
                                11: 11,
                                12: 12,
                                13: 13,
                                14: 14,
                                15: 15,
                                16: 16,
                                17: 17,
                                18: 18,
                                20: 20,
                                22: 22,
                                24: 24,
                                26: 26,
                                30: 30
                            }
                        };
                    if (_data && _data.aceMode) {
                        $modeEl.html(optionNode("ace/mode/", _data.aceMode));
                    }
                    if (_data && _data.aceTheme) {
                        var lightTheme = optionNode("ace/theme/", _data.aceTheme.bright),
                            darkTheme = optionNode("ace/theme/", _data.aceTheme.dark);
                        $themeEl.html("<optgroup label=\"Bright\">" + lightTheme + "</optgroup><optgroup label=\"Dark\">" + darkTheme + "</optgroup>");
                    }
                    if (_data && _data.fontSize) {
                        $fontSizeEl.html(optionNode("", _data.fontSize));
                    }
                    $modeEl.val(editor.getSession().$modeId);
                    $themeEl.val(editor.getTheme());
                    $(function() {
                        // Apply font size directly, then sync dropdown
                        editor.setFontSize(<?php echo (int) ACE_FONTSIZE; ?>);
                        $fontSizeEl.val(<?php echo (int) ACE_FONTSIZE; ?>);
                    });
                }

                $(function() {
                    renderThemeMode();
                    $(".js-ace-toolbar").on("click", 'button', function(e) {
                        e.preventDefault();
                        let cmdValue = $(this).attr("data-cmd"),
                            editorOption = $(this).attr("data-option");
                        if (cmdValue && cmdValue != "none") {
                            ace_commend(cmdValue);
                        } else if (editorOption) {
                            if (editorOption == "fullscreen") {
                                (void 0 !== document.fullScreenElement && null === document.fullScreenElement || void 0 !== document.msFullscreenElement && null === document.msFullscreenElement || void 0 !== document.mozFullScreen && !document.mozFullScreen || void 0 !== document.webkitIsFullScreen && !document.webkitIsFullScreen) &&
                                (editor.container.requestFullScreen ? editor.container.requestFullScreen() : editor.container.mozRequestFullScreen ? editor.container.mozRequestFullScreen() : editor.container.webkitRequestFullScreen ? editor.container.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT) : editor.container.msRequestFullscreen && editor.container.msRequestFullscreen());
                            } else if (editorOption == "wrap") {
                                let wrapStatus = (editor.getSession().getUseWrapMode()) ? false : true;
                                editor.getSession().setUseWrapMode(wrapStatus);
                            }
                        }
                    });

                    $("select#js-ace-mode, select#js-ace-theme, select#js-ace-fontSize").on("change", function(e) {
                        e.preventDefault();
                        let selectedValue = $(this).val(),
                            selectionType = $(this).attr("data-type");
                        if (selectedValue && selectionType == "mode") {
                            editor.getSession().setMode(selectedValue);
                        } else if (selectedValue && selectionType == "theme") {
                            editor.setTheme(selectedValue);
                        } else if (selectedValue && selectionType == "fontSize") {
                            editor.setFontSize(parseInt(selectedValue));
                        }
                    });
                });
            </script>
        <?php endif; ?>
        <div id="snackbar"></div>
    </body>

    </html>
<?php
    }

    /**
     * Language Translation System
     * @param string $txt
     * @return string
     */
    function lng($txt)
    {
        global $lang;

        // English Language
        $tr['en']['AppName']        = 'Tiny File Manager';
        $tr['en']['AppTitle']       = 'File Manager';
        $tr['en']['Login']          = 'Sign in';
        $tr['en']['Username']       = 'Username';
        $tr['en']['Password']       = 'Password';
        $tr['en']['Logout']         = 'Sign Out';
        $tr['en']['Move']           = 'Move';
        $tr['en']['Copy']           = 'Copy';
        $tr['en']['Save']           = 'Save';
        $tr['en']['SelectAll']      = 'Select all';
        $tr['en']['UnSelectAll']    = 'Unselect all';
        $tr['en']['File']           = 'File';
        $tr['en']['Back']           = 'Back';
        $tr['en']['Size']           = 'Size';
        $tr['en']['Perms']          = 'Perms';
        $tr['en']['Modified']       = 'Modified';
        $tr['en']['Owner']          = 'Owner';
        $tr['en']['Search']         = 'Search';
        $tr['en']['NewItem']        = 'New Item';
        $tr['en']['Folder']         = 'Folder';
        $tr['en']['Delete']         = 'Delete';
        $tr['en']['Rename']         = 'Rename';
        $tr['en']['CopyTo']         = 'Copy to';
        $tr['en']['DirectLink']     = 'Direct link';
        $tr['en']['UploadingFiles'] = 'Upload Files';
        $tr['en']['ChangePermissions']  = 'Change Permissions';
        $tr['en']['CreateNewItem']  = 'Create New Item';
        $tr['en']['Name']           = 'Name';
        $tr['en']['AdvancedEditor'] = 'Advanced Editor';
        $tr['en']['Actions']        = 'Actions';
        $tr['en']['Folder is empty'] = 'Folder is empty';
        $tr['en']['Upload']         = 'Upload';
        $tr['en']['Cancel']         = 'Cancel';
        $tr['en']['InvertSelection'] = 'Invert Selection';
        $tr['en']['DestinationFolder']  = 'Destination Folder';
        $tr['en']['ItemType']       = 'Item Type';
        $tr['en']['ItemName']       = 'Item Name';
        $tr['en']['CreateNow']      = 'Create Now';
        $tr['en']['Download']       = 'Download';
        $tr['en']['Open']           = 'Open';
        $tr['en']['UnZip']          = 'UnZip';
        $tr['en']['UnZipToFolder']  = 'UnZip to folder';
        $tr['en']['Edit']           = 'Edit';
        $tr['en']['NormalEditor']   = 'Normal Editor';
        $tr['en']['BackUp']         = 'Back Up';
        $tr['en']['SourceFolder']   = 'Source Folder';
        $tr['en']['Files']          = 'Files';
        $tr['en']['Change']         = 'Change';
        $tr['en']['Settings']       = 'Settings';
        $tr['en']['Language']       = 'Language';
        $tr['en']['ErrorReporting'] = 'Error Reporting';
        $tr['en']['ShowHiddenFiles'] = 'Show Hidden Files';
        $tr['en']['Help']           = 'Help';
        $tr['en']['Created']        = 'Created';
        $tr['en']['Help Documents'] = 'Help Documents';
        $tr['en']['Report Issue']   = 'Report Issue';
        $tr['en']['Generate']       = 'Generate';
        $tr['en']['FullSize']       = 'Full Size';
        $tr['en']['HideColumns']    = 'Hide Perms/Owner columns';
        $tr['en']['You are logged in'] = 'You are logged in';
        $tr['en']['Nothing selected']  = 'Nothing selected';
        $tr['en']['Paths must be not equal']    = 'Paths must be not equal';
        $tr['en']['Renamed from']       = 'Renamed from';
        $tr['en']['Archive not unpacked'] = 'Archive not unpacked';
        $tr['en']['Deleted']            = 'Deleted';
        $tr['en']['Archive not created'] = 'Archive not created';
        $tr['en']['Copied from']        = 'Copied from';
        $tr['en']['Permissions changed'] = 'Permissions changed';
        $tr['en']['to']                 = 'to';
        $tr['en']['Saved Successfully'] = 'Saved Successfully';
        $tr['en']['not found!']         = 'not found!';
        $tr['en']['File Saved Successfully']    = 'File Saved Successfully';
        $tr['en']['Archive']            = 'Archive';
        $tr['en']['Permissions not changed']    = 'Permissions not changed';
        $tr['en']['Select folder']      = 'Select folder';
        $tr['en']['Source path not defined']    = 'Source path not defined';
        $tr['en']['Select operation to execute'] = 'Please select the operation to execute';
        $tr['en']['MoveTip'] = 'Check this to move the items directly. If unchecked, a copy will be created.';
        $tr['en']['Source path'] = 'Source path';
        $tr['en']['EnterFolderNameHint'] = 'Please enter the destination folder name';
        $tr['en']['already exists']     = 'already exists';
        $tr['en']['Error while moving from']    = 'Error while moving from';
        $tr['en']['Create archive?']    = 'Create archive?';
        $tr['en']['Invalid file or folder name']    = 'Invalid file or folder name';
        $tr['en']['Archive unpacked']   = 'Archive unpacked';
        $tr['en']['Error'] = 'Error';
        $tr['en']['File extension is not allowed'] = 'File extension is not allowed! Supported formats: %s';
        $tr['en']['Upload extension config missing'] = 'Upload failed: Administrator has not configured allowed file extensions.';
        $tr['en']['URL is not allowed'] = 'URL is not allowed';
        $tr['en']['Invalid url parameter'] = 'Invalid url parameter';
        $tr['en']['Root path']          = 'Root path';
        $tr['en']['Error while renaming from']  = 'Error while renaming from';
        $tr['en']['File not found']     = 'File not found';
        $tr['en']['Error while deleting items'] = 'Error while deleting items';
        $tr['en']['Moved from']         = 'Moved from';
        $tr['en']['Generate new password hash'] = 'Generate new password hash';
        $tr['en']['Login failed. Invalid username or password'] = 'Login failed. Invalid username or password';
        $tr['en']['password_hash not supported, Upgrade PHP version'] = 'password_hash not supported, Upgrade PHP version';
        $tr['en']['Advanced Search']    = 'Advanced Search';
        $tr['en']['Error while copying from']    = 'Error while copying from';
        $tr['en']['Invalid characters in file name']                = 'Invalid characters in file name';
        $tr['en']['FILE EXTENSION IS NOT SUPPORTED']                = 'FILE EXTENSION IS NOT SUPPORTED';
        $tr['en']['Selected files and folder deleted']              = 'Selected files and folder deleted';
        $tr['en']['Error while fetching archive info']              = 'Error while fetching archive info';
        $tr['en']['Delete selected files and folders?']             = 'Delete selected files and folders?';
        $tr['en']['Search file in folder and subfolders...']        = 'Search file in folder and subfolders...';
        $tr['en']['Access denied. IP restriction applicable']       = 'Access denied. IP restriction applicable';
        $tr['en']['Invalid characters in file or folder name']      = 'Invalid characters in file or folder name';
        $tr['en']['Operations with archives are not available']     = 'Operations with archives are not available';
        $tr['en']['File or folder with this path already exists']   = 'File or folder with this path already exists';
        $tr['en']['Are you sure want to rename?']                   = 'Are you sure you want to rename?';
        $tr['en']['Are you sure want to']                           = 'Are you sure want to';
        $tr['en']['Date Modified']                                  = 'Date Modified';
        $tr['en']['File size']                                      = 'File size';
        $tr['en']['MIME-type']                                      = 'MIME-type';
        // Pre-existing inputs that were never inserted into the lng() function
        $tr['en']['Cannot open file! Aborting download'] = 'Cannot open file! Aborting download';
        $tr['en']['Charset']            = 'Charset';
        $tr['en']['Compression']        = 'Compression';
        $tr['en']['dark']               = 'dark';
        $tr['en']['light']              = 'light';
        $tr['en']['ERROR: Try again later!'] = 'ERROR: Try again later!';
        $tr['en']['Enter here...']      = 'Enter here...';
        $tr['en']['Enter new file name'] = 'Enter new file name';
        $tr['en']['Error']              = 'Error';
        $tr['en']['Error while copying items'] = 'Error while copying items';
        $tr['en']['Error while moving items']  = 'Error while moving items';
        $tr['en']['Error: try again']   = 'Error: try again';
        $tr['en']['Execute']            = 'Execute';
        $tr['en']['Files in archive']   = 'Files in archive';
        $tr['en']['Fullscreen']         = 'Fullscreen';
        $tr['en']['Group']              = 'Group';
        $tr['en']['Image size']         = 'Image size';
        $tr['en']['Invalid Token.']     = 'Invalid Token.';
        $tr['en']['No result found!']   = 'No result found!';
        $tr['en']['not created']        = 'not created';
        $tr['en']['not deleted']        = 'not deleted';
        $tr['en']['OOPS: minimum 3 characters required!'] = 'OOPS: minimum 3 characters required!';
        $tr['en']['Okay']               = 'Okay';
        $tr['en']['Other']              = 'Other';
        $tr['en']['Read']               = 'Read';
        $tr['en']['Redo']               = 'Redo';
        $tr['en']['Select Document Type'] = 'Select Document Type';
        $tr['en']['Select Font Size']   = 'Select Font Size';
        $tr['en']['Select Mode']        = 'Select Mode';
        $tr['en']['Select Theme']       = 'Select Theme';
        $tr['en']['Selected files and folders copied'] = 'Selected files and folders copied';
        $tr['en']['Selected files and folders moved']  = 'Selected files and folders moved';
        $tr['en']['Size in archive']    = 'Size in archive';
        $tr['en']['Tar']                = 'Tar';
        $tr['en']['Theme']              = 'Theme';
        $tr['en']['Total size']         = 'Total size';
        $tr['en']['Unable to create destination folder'] = 'Unable to create destination folder';
        $tr['en']['Undo']               = 'Undo';
        $tr['en']['Upload from URL']    = 'Upload from URL';
        $tr['en']['Uploaded Successful'] = 'Uploaded Successful';
        $tr['en']['Word Wrap']          = 'Word Wrap';
        $tr['en']['Write']              = 'Write';
        $tr['en']['Zero byte file! Aborting download'] = 'Zero byte file! Aborting download';
        $tr['en']['Zip']                = 'Zip';
        // Password generator (Help page)
        $tr['en']['EnterPasswordOrRandom']   = 'Enter a password or click the random button';
        $tr['en']['CreateRandomPassword']    = 'Create random password';
        $tr['en']['Copy']                    = 'Copy';
        $tr['en']['Copied']                  = 'Copied';
        $tr['en']['Copy failed']             = 'Copy failed';
        $tr['en']['No hash yet']             = 'No hash yet';
        $tr['en']['PwdStrengthEmpty']        = '';
        $tr['en']['PwdStrengthWeak']         = 'Weak';
        $tr['en']['PwdStrengthFair']         = 'Fair';
        $tr['en']['PwdStrengthGood']         = 'Good';
        $tr['en']['PwdStrengthStrong']       = 'Strong';
        $tr['en']['PwdStrengthVeryStrong']   = 'Very strong';
        $tr['en']['PwdSuggestionTooShort']   = 'Use at least 8 characters';
        $tr['en']['PwdSuggestionAddUpper']   = 'Add uppercase letters';
        $tr['en']['PwdSuggestionAddLower']   = 'Add lowercase letters';
        $tr['en']['PwdSuggestionAddDigit']   = 'Add digits';
        $tr['en']['PwdSuggestionAddSymbol']  = 'Add symbols (e.g. !@#$%^&*)';
        $tr['en']['PwdSuggestionCommon']     = 'Avoid common passwords or phrases';
        $tr['en']['PwdSuggestionRepeat']     = 'Avoid repeated characters (e.g. aaa, 111)';
        $tr['en']['PwdSuggestionSequence']   = 'Avoid sequences (e.g. abc, 123, qwe)';
        $tr['en']['PwdSuggestionExcellent']  = 'Excellent! Your password is very strong.';
        $tr['en']['PwdConfirmWeakGenerate']  = 'This password is weak. Continue generating hash anyway?';
        $tr['en']['GeneratingHash']  = 'Generating hash, please wait…';
        // New entries, which deserve to be translated
        $tr['en']['Author']             = 'Author';
        $tr['en']['Mail Us']            = 'Mail Us';
        $tr['en']['ContactAuthorEmail'] = 'Email the author';
        $tr['en']['DateTimeFormat'] = 'm/d/Y g:i A';
        $tr['en']['Advanced Search']    = 'Advanced Search';
        $tr['en']['SearchPlaceholder']  = 'Type matching characters to search...';
        $tr['en']['Searching']          = 'Searching…';
        $tr['en']['SearchFoundFiles']   = 'Matched {n} file(s)';
        $tr['en']['Clear']              = 'Clear';
        $tr['en']['Showing'] = 'Showing';
        $tr['en']['No records available'] = 'No records available';
        $tr['en']['filtered from'] = 'filtered from';
        $tr['en']['total records'] = 'total records';
        $tr['en']['Show'] = 'Show';
        $tr['en']['entries'] = 'entries';
        $tr['en']['Records'] = 'total records';
        $tr['en']['Loading'] = 'Loading';
        $tr['en']['Processing'] = 'Processing';
        $tr['en']['First'] = 'First';
        $tr['en']['Last'] = 'Last';
        $tr['en']['Next'] = 'Next';
        $tr['en']['Previous'] = 'Previous';
        $tr['en']['ParentDirectory'] = 'Parent Directory';
        $tr['en']['BackToHome'] = 'Back to Home';
        $tr['en']['TimezoneError'] = 'Unable to get timezone';
        $tr['en']['activate to sort column ascending'] = 'activate to sort column ascending';
        $tr['en']['activate to sort column descending'] = 'activate to sort column descending';
        $tr['en']['EnablePaging'] = 'Enable paging';
        $tr['en']['PagingInfoHelp'] = 'When enabled, files will be paginated at 50 per page. Note: Bulk actions (select all, delete, zip) will only apply to files on the current page.';
        $tr['en']['Path'] = 'Path';
        $tr['en']['HostPath'] = 'Host Path';
        $tr['en']['FullPath'] = 'Full Path';
        $tr['en']['ThemeToggle'] = 'Click to switch to {target} mode';
        $tr['en']['PreferredLanguage'] = 'Preferred Language';
        $tr['en']['AutoDetect'] = 'Auto (browser)';
        $tr['en']['BrowserLangHint'] = "The current language is detected from your browser. If your language isn\'t listed, \nfeel free to submit a request via the link below to help improve multilingual support; \nif you find a translation error that needs fixing, you\'re also welcome to submit a request.";
        $tr['en']['MissingLanguage'] = "Can't find your language?";
        $tr['en']['RequestLanguage'] = 'Request a language or fix translation errors';
        $tr['en']['DropzoneDefaultMessage'] = 'Drop files here to upload';
        $tr['en']['DropzoneFallbackMessage'] = "Your browser doesn't support drag and drop file uploads.";
        $tr['en']['DropzoneFallbackText'] = 'Please use the fallback form below to upload your files like in the olden days.';
        $tr['en']['DropzoneFileTooBig'] = 'File is too big ({{filesize}}MiB). Max filesize: {{maxFilesize}}MiB.';
        $tr['en']['DropzoneInvalidFileType'] = "You can't upload files of this type.";
        $tr['en']['DropzoneResponseError'] = 'Server responded with {{statusCode}} code.';
        $tr['en']['DropzoneCancelUpload'] = 'Cancel upload';
        $tr['en']['DropzoneUploadCanceled'] = 'Upload canceled.';
        $tr['en']['DropzoneCancelUploadConfirmation'] = 'Are you sure you want to cancel this upload?';
        $tr['en']['DropzoneRemoveFile'] = 'Remove file';
        $tr['en']['DropzoneThumbnailError'] = 'Failed to load the image. The file may be corrupted.';
        $tr['en']['DropzoneMaxFilesExceeded'] = 'You cannot upload any more files.';
        $tr['en']['MetaDescription'] = 'Web based File Manager in PHP, Manage your files efficiently and easily with %s';
        $tr['en']['SiteIdentity'] = 'Site Identity & Filing';
        $tr['en']['SiteTitle'] = 'Site Title';
        $tr['en']['SiteTitlePlaceholder'] = 'e.g. Enterprise Cloud, Team Workspace, Open Source Library...';
        $tr['en']['SiteTitleHelp'] = 'Leave empty to use the default title. If set, this will be displayed in browser tabs and some page titles.';
        $tr['en']['FilterPlaceholderShort'] = 'Filter files or folders in current path';
        $tr['en']['SearchTooltip'] = 'Note: This search only filters files and folders at the current level. For deep keyword searches, please click the dropdown menu on the right to use [Advanced Search].';
        $tr['en']['AudioLoading'] = 'Audio is loading';
        $tr['en']['AudioError'] = 'Audio failed to load, file might be corrupted';
        $tr['en']['SwfLoading'] = 'SWF file is loading, please wait';
        $tr['en']['SwfError'] = 'Failed to load, file might be corrupted or format error';
        $tr['en']['SiteIdentityHelp'] = 'Browser icon and login logo accept local files or external URLs in %s. Fill in filing info as needed for your site, or leave it empty.';
        $tr['en']['LogoPath'] = 'Login Page Logo';
        $tr['en']['LogoPathPlaceholder'] = 'Local: %s  URL: {url}';
        $tr['en']['FaviconPath'] = 'Browser Icon (Favicon)';
        $tr['en']['FaviconPathPlaceholder']= 'Local: %s  URL: {url}';
        $tr['en']['FooterStartYear'] = 'Footer Start Year';
        $tr['en']['FooterStartYearPlaceholder'] = 'Leave empty or enter "none" to show only current year';
        $tr['en']['FooterStartYearHelp'] = 'Modify the copyright start year. Enter %s or leave empty to show only the current year.';
        $tr['en']['Backup created'] = 'Backup %s created. Time: %s';
        $tr['en']['Could not copy file'] = 'Could not copy file %s, please check permissions';
        $tr['en']['File not found name'] = 'File %s not found';
        $tr['en']['ShowBeian'] = 'Enable Filing Info';
        $tr['en']['ICPNumber'] = 'ICP License Number';
        $tr['en']['ICPNumberPlaceholder'] = 'e.g. ICP License No. 12345678';
        $tr['en']['PoliceNumber'] = 'Public Security License Number';
        $tr['en']['PoliceNumberPlaceholder'] = 'e.g. Public Security No. 11010502030123';
        $tr['en']['PoliceNumberHelp'] = 'Digits are auto-extracted for the beian.gov.cn link';
        $tr['en']['FooterCopyright'] = '{year} Based on {appLink}, licensed under {licenseLink}, copyright by {authorLink}.';

        $i18n = fm_get_translations($tr);
        $tr = $i18n ? $i18n : $tr;

        if (!strlen($lang)) $lang = 'en';
        if (isset($tr[$lang][$txt])) return fm_enc($tr[$lang][$txt]);
        else if (isset($tr['en'][$txt])) return fm_enc($tr['en'][$txt]);
        else return "$txt";
    }

?>
