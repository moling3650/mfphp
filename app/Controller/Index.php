<?php
/**
 * @authors moling (365024424@qq.com)
 * @date    2016-08-24 23:53:28
 */
namespace app\Controller;

use app\Model\Guestbook;
use core\lib\View;

class Index
{
    public static function index()
    {
        $gb = new Guestbook();
        $data = $gb->getAll();
        View::render_template('index.html', ['posts' => $data]);
    }

    public function create()
    {
        View::render_template('create.html');
    }

    public function edit()
    {
        $id = intval($_GET['id']);
        $gb = new Guestbook();
        $data = $gb->getOne($id);
        View::render_template('create.html', ['post' => $data]);
    }
}