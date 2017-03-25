<?php

namespace App\Models;

use App\Db;

abstract class Model
{
    protected const TABLE = null;
    public $id = null;

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

    public function insert()
    {
        $db = Db::getInstance();
        $vars = get_object_vars($this);

        $columns = [];
        $params  = [];
        $data    = [];

        foreach ($vars as $key => $value) {
            if ($key == 'id') {
                continue;
            }
            $columns[] = $key;
            $params[]  = ':' . $key;
            $data[':' . $key] = $value;
        }

        $sql = 'INSERT INTO ' . static::TABLE . ' (' . implode(', ', $columns) . ') ' .
            'VALUES (' . implode(', ', $params) . ')';

        $res = $db->execute($sql, $data);
        if (true === $res) {
            $this->id = $db->lastInsertId();
        }
        return $res;
    }

    public function update()
    {
        $db = Db::getInstance();
        $vars = get_object_vars($this);

        $params = [];
        $sqlParams = [];

        foreach ($vars as $key => $value) {
            $params[':' . $key] = $value;
            if ($key == 'id') {
                continue;
            }
            $sqlParams[] = $key . ' = :' . $key;
        }

        $sql = 'UPDATE ' . static::TABLE . ' SET ' .
            implode(', ', $sqlParams) . ' WHERE id = :id';
        return $db->execute($sql, $params);
    }

    public function delete()
    {
        $db = Db::getInstance();
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id = :id';

        $res = $db->execute($sql, [':id' => $this->id]);
        if (true === $res) {
            $props = array_keys(get_object_vars($this));
            foreach ($props as $item) {
                $this->$item = null;
            }
        }
        return $res;
    }

    public function save()
    {
        if (null === $this->id) {
            return $this->insert();
        } else {
            return $this->update();
        }
    }
}
