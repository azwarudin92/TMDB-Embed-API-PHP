<?php
/**
 * TMDB Embed API - PHP/MySQL Edition
 * Entry Point
 */

define('BASEPATH', dirname(__DIR__) . '/');
define('APPPATH', BASEPATH . 'app/');
define('CONFIG_PATH', BASEPATH . 'config/');
define('STORAGE_PATH', BASEPATH . 'storage/');

// Load environment
if (file_exists(BASEPATH . '.env')) {
    $env = parse_ini_file(BASEPATH . '.env', false, INI_SCANNER_RAW);
    foreach ($env as $key => $value) {
        if (!isset($_ENV[$key])) {
            putenv("$key=$value");
        }
    }
}

// Load autoloader
if (file_exists(BASEPATH . 'vendor/autoload.php')) {
    require BASEPATH . 'vendor/autoload.php';
}

// Load framework
require APPPATH . 'Core/Kernel.php';

// Initialize application
$kernel = new \App\Core\Kernel();
$response = $kernel->handle();
$response->send();
