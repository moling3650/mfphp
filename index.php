<?php
/**
 * @authors moling (365024424@qq.com)
 * @date    2016-08-24 21:53:59
 * @version $Id$
 */
define('BASE_DIR', __DIR__);
define('DEBUG', true);

include 'vendor/autoload.php';
include BASE_DIR.'/core/Loader.php';
spl_autoload_register('\core\Loader::autoload');

if (DEBUG) {
    ini_set('display_error', 'On');
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
} else {
    ini_set('display_error', 'Off');
}

core\Main::run();
