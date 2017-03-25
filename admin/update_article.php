<?php

use App\Models\Article;

require __DIR__ . '/../autoload.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $article = Article::findById($id);
    $title = $article->title;
    $lead = $article->lead;

    $action = '/admin/update_article.php';
    $pageTitle = 'Редактирование статьи';

    include __DIR__ . '/../templates/admin/edit_article.php';
    exit();
}

$id = (isset($_POST['id'])) ? (int)$_POST['id'] : null;
$title = (isset($_POST['title'])) ? $_POST['title'] : null;
$lead = (isset($_POST['lead'])) ? $_POST['lead'] : null;

$article = Article::findById($id);
$article->title = $title;
$article->lead = $lead;

if (true === $article->save()) {
    header('Location: /admin/');
}

