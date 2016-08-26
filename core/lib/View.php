<?php
/**
 * @authors moling (365024424@qq.com)
 * @date    2016-08-25 18:58:09
 */
namespace core\lib;

use core\lib\Conf;

class View
{
    public static function render_template($template, $data=[])
    {
        \Twig_Autoloader::register();
        $loader = new \Twig_Loader_Filesystem(Conf::get('twig', 'VIEW_DIR'));
        $twig = new \Twig_Environment($loader, Conf::get('twig', 'ENVIRONMENT'));
        echo $twig->display($template, $data);
    }

    public function jsonify($data, $options=JSON_UNESCAPED_UNICODE, $depth=512)
    {
        echo json_encode($data, $options, $depth);
    }

    public function redirect($url)
    {
        header('Location:'.$url);
    }
}