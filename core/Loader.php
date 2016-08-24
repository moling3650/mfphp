<?php
/**
 *
 * @authors moling (365024424@qq.com)
 * @date    2016-08-24 23:04:26
 * @version $Id$
 */
namespace core;

class Loader
{
    // 自动加载类
    public static function autoload($class)
    {
        include BASE_DIR.'/'.str_replace('\\', '/', $class).'.php';
    }
}