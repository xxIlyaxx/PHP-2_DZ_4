<?php

use App\Models\Article;

require __DIR__ . '/autoload.php';

$articles = Article::findLast();
$article = $articles[0];
$article->insert();

include __DIR__ . '/templates/index.php';
