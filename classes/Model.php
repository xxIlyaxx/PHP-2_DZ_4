<?php

abstract class Model
{
    protected const TABLE = null;
    public $id;

    public static function findAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, static::class);
    }

    public static function findById($id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id = :id LIMIT 1';
        $res = $db->query($sql, static::class, [':id' => $id]);
        return ($res) ? $res[0] : false;
    }

//    public static function findLast($count = 3)
//    {
//        $db = new Db();
//        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . $count;
//        return $db->query($sql, static::class);
//    }

    public static function findLast($count = 3)
    {
        $articles = static::findAll();
        return array_slice(array_reverse($articles), 0, $count);
    }
}
