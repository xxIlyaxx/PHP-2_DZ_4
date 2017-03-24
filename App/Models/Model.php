<?php

namespace App\Models;

use App\Db;

abstract class Model
{
    protected const TABLE = null;
    public $id;

    public static function findAll()
    {
        $db = Db::getInstance();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, static::class);
    }

    public static function findById($id)
    {
        $db = Db::getInstance();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id = :id';
        $res = $db->query($sql, static::class, [':id' => $id]);
        return ($res) ? $res[0] : false;
    }

//    public static function findLast($count = 3)
//    {
//        $db = new Db();
//        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . (int)$count;
//        return $db->query($sql, static::class);
//    }

    public static function findLast($count = 3)
    {
        $articles = static::findAll();
        return array_slice(array_reverse($articles), 0, $count);
    }
}
