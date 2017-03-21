<?php

require __DIR__ . '/autoload.php';

$articles = Article::findLast();

include __DIR__ . '/templates/index.php';
