<?php

namespace App;

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

    private function __wakeup()
    {}

    private function __clone()
    {}
}
