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

    // 新增一条数据
    public function addOne($data)
    {
        return $this->insert($this->table, $data);
    }

    // 修改一条数据
    public function setOne($id, $data)
    {
        return $this->update($this->table, $data, ['id' => $id]);
    }

    // 删除一条数据
    public function delOne($id)
    {
        return $this->delete($this->table, ['id' => $id]);
    }

    // 查询一条数据
    public function getOne($id, $columns='*')
    {
        return $this->get($this->table, $columns, ['id' => $id]);
    }

    // 查询所有数据
    public function getAll($columns='*', $where=[])
    {
        return $this->select($this->table, $columns, $where);
    }

    // 查询所有数据的数量
    public function countAll($where=[])
    {
        return $this->count($this->table, $where);
    }

}