<?php

namespace App;

class Config
{
    use Singleton;

    protected function __construct()
    {}

    public $data = [
        'db' => [
            'host' => '127.0.0.1',
            'dbname' => 'php2',
            'user' => 'root',
            'pass' => '',
        ],
    ];
}