<?php
/**
 * @authors moling (365024424@qq.com)
 * @date    2016-08-26 10:54:35
 */
namespace app\Controller;

use app\Model\Guestbook;
use core\lib\View;

class Api
{
    public function add()
    {
        if ($_POST) {
            $data = [
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'create_at' => time()
            ];
            $gb = new Guestbook();
            $gb->addOne($data);
        }
        View::redirect('/');
    }

    public function del()
    {
        $id = intval($_GET['id']);
        $gb = new Guestbook();
        $gb->delOne($id);
        View::redirect('/');
    }
}