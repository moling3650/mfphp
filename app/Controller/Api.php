<?php
/**
 * @authors moling (365024424@qq.com)
 * @date    2016-08-26 10:54:35
 */
namespace app\Controller;

use core\lib\View;

class Api
{
    public function add()
    {
        // View::jsonify($_POST);
        View::redirect('/');
    }
}