<?php

namespace App;

/**
 * Trait Singleton
 * Содержит в себе реализацию паттерна Singleton
 *
 * @package App
 */
trait Singleton
{
    protected static $instance = null;

    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    protected function __wakeup()
    {
    }

    protected function __clone()
    {
    }
}
