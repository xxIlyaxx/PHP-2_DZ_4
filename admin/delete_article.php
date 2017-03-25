<?php

use App\Models\Article;

require __DIR__ . '/../autoload.php';

$id = (isset($_GET['id'])) ? (int)$_GET['id'] : null;

$article = Article::findById($id);
if (true === $article->delete()) {
    header('Location: /admin/');
}

