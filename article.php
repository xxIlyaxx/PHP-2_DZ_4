<?php

require __DIR__ . '/autoload.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    $id = null;
}

$article = Article::findById($id);

include __DIR__ . '/templates/article.php';
