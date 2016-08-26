<?php
/**
 * @authors moling (365024424@qq.com)
 * @date    2016-08-25 18:58:09
 */
namespace core\lib;

use core\lib\Conf;

class View
{
    public static function display($template, $data=[])
    {
        \Twig_Autoloader::register();
        $loader = new \Twig_Loader_Filesystem(Conf::get('twig', 'VIEW_DIR'));
        $twig = new \Twig_Environment($loader, Conf::get('twig', 'ENVIRONMENT'));
        echo $twig->display($template, $data);
    }
}