<?php
/**
 * @authors moling (365024424@qq.com)
 * @date    2016-08-25 18:58:09
 */
namespace core\lib;

class View
{
    public static function display()
    {
        \Twig_Autoloader::register();
        $loader = new \Twig_Loader_Filesystem(BASE_DIR.'/app/View');
        $twig = new \Twig_Environment($loader, array(
            // 'cache' => '/path/to/compilation_cache',
        ));
        echo $twig->render('index.html', ['name' => 'Fabien']);
    }
}