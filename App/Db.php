<?php

namespace App;

/**
 * Class Db
 * Класс базы данных
 *
 * @package App
 */
class Db
{
    use Singleton;

    protected $dbh;

    protected function __construct()
    {
        $config = Config::getInstance();

        $dsn = 'mysql:host=' . $config->data['db']['host'] .
            ';dbname=' . $config->data['db']['dbname'];
        $this->dbh = new \PDO(
            $dsn,
            $config->data['db']['user'],
            $config->data['db']['pass']
        );
    }

    /**
     * Выполняет запрос и возвращает результат в виде массива
     *
     * @param string $sql
     * @param string $class
     * @param array $params
     * @return array|bool
     */
    public function query(string $sql, string $class, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        if (!$res) {
            return false;
        }
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    /**
     * Выполняет запрос и возвращает результат в виде bool
     *
     * @param string $sql
     * @param array $params
     * @return bool
     */
    public function execute($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }

    /**
     * Возвращает последний, вставленный ID
     *
     * @param string|null $name
     * @return string
     */
    public function lastInsertId(string $name = null)
    {
        return $this->dbh->lastInsertId($name);
    }
}
