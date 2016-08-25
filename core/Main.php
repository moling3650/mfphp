<?php
/**
 * @authors moling (365024424@qq.com)
 * @date    2016-08-25 01:01:28
 */
namespace core;

class Main
{
    public static function run()
    {
        $route = new \core\lib\Route();
        $Controller = '\app\Controller\\'.$route->controller;
        $action = $route->action;
        $controller = new $Controller();
        $controller->$action();

    }
}