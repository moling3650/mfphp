<?php
/**
 * @authors moling (365024424@qq.com)
 * @date    2016-08-25 00:51:45
 */
namespace core\lib;

class Route
{
    public $controller;
    public $action;
    public function __construct()
    {
        if (!isset($_SERVER['REQUEST_URI'])) {
            die('Request URI is missing.');
        }

        $patharr = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
        $this->controller = !empty($patharr[0]) ? $patharr[0] : 'Index';
        $this->action = !empty($patharr[1]) ? $patharr[1] : 'index';
    }
}