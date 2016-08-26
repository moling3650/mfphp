<?php
/**
 * @authors moling (365024424@qq.com)
 * @date    2016-08-24 23:53:28
 */
namespace app\Controller;

class Index
{
    public static function index()
    {
        $gb = new \app\Model\Guestbook();
        $data = $gb->getAll();
        \core\lib\View::display('index.html', ['posts' => $data]);
    }

    public function create()
    {
        \core\lib\View::display('create.html');
    }
}