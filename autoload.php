<?php

function __autoload($className)
{
    require __DIR__ . '/classes/' . $className . '.php';
}
