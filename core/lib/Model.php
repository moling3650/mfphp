<?php
/**
 * @authors moling (365024424@qq.com)
 * @date    2016-08-25 07:34:26
 */
namespace core\lib;

use core\lib\Conf;

abstract class Model extends \medoo
{
    public $table;

    public function __construct()
    {
        $option = Conf::get('database');
        parent::__construct($option);
    }

    public function addOne($data)
    {
        return $this->insert($this->table, $data);
    }

    public function setOne($id, $data)
    {
        return $this->update($this->table, $data, ['id' => $id]);
    }

    public function delOne($id)
    {
        return $this->delete($this->table, ['id' => $id]);
    }

    public function getOne($id, $columns='*')
    {
        return $this->get($this->table, $columns, ['id' => $id]);
    }

    public function getAll($columns='*', $where=[])
    {
        return $this->select($this->table, $columns, $where);
    }

    public function countAll($where=[])
    {
        return $this->count($this->table, $where);
    }

}