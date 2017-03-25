<?php

namespace App;

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

    public function query(string $sql, string $class, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        if (!$res) {
            return false;
        }
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    public function execute($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }

    public function lastInsertId(string $name = null)
    {
        return $this->dbh->lastInsertId($name);
    }
}
