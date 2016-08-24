<?php
/**
 * @authors moling (365024424@qq.com)
 * @date    2016-08-24 21:53:59
 * @version $Id$
 */
define('BASE_DIR', __DIR__);

include BASE_DIR.'/core/Loader.php';
spl_autoload_register('\core\Loader::autoload');

app\Controller\Index::sayHello();