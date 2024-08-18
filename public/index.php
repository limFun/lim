<?
declare (strict_types = 1);

// require_once __DIR__ . '/../lim';

!defined('ROOT_PATH') && define('ROOT_PATH', dirname(__DIR__) . '/');

require_once ROOT_PATH . 'vendor/autoload.php';

// json($_SERVER);
lim\Nginx::run();