<?php

use App\View;
use App\Models\Article;

require __DIR__ . '/autoload.php';

$id = (isset($_GET['id'])) ? (int)$_GET['id'] : null;

$view = new View();
$view->article = Article::findById($id);
$view->display(__DIR__ . '/templates/article.php');