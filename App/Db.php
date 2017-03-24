<?php

namespace App;

class Db
{

    use Singleton;

    protected $dbh;

    protected function __construct()
    {
        $host = 'localhost';
        $dbname = 'php2';
        $user = 'root';
        $pass = '';

        $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
        $this->dbh = new \PDO($dsn, $user, $pass);
    }

    public function query($sql, string $class, $params = [])
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
}
