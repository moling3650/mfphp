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
        $db = new \app\Model\Guestbook();
        // $db->addOne([
        //     'title' => 'AUTO',
        //     'content' => 'auto',
        //     ]);
        // $data = $db->getAll();
        // dump($data);
        // $data = $db->countAll();
        // dump($data);
        \core\lib\View::display();
    }
}