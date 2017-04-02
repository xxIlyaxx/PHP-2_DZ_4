<?php

use App\View;
use App\Models\Article;

require __DIR__ . '/../autoload.php';

$view = new View();
$view->articles = Article::findAll();
$view->display(__DIR__ . '/../templates/admin/index.php');
