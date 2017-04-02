<?php

use App\View;
use App\Models\Article;

require __DIR__ . '/autoload.php';

$view = new View();
$view->articles = Article::findLast();
$view->display(__DIR__ . '/templates/index.php');
