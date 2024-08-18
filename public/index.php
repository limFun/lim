<?
declare (strict_types = 1);

!defined('ROOT_PATH') && define('ROOT_PATH', dirname(__DIR__) . '/');

require_once ROOT_PATH . 'vendor/autoload.php';

lim\Nginx::run();