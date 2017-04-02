<?php

namespace App;

/**
 * Class Config
 * Класс для хранения конфигурации приложения
 *
 * @package App
 */
class Config
{
    use Singleton;

    public $data = [];

    protected function __construct()
    {
        $this->data = require __DIR__ . '/../config.php';
    }
}