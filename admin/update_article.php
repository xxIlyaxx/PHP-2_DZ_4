<?php

use App\View;
use App\Models\Article;

require __DIR__ . '/../autoload.php';

if (isset($_GET['id'])) {
    $view = new View();

    $view->id = (int)$_GET['id'];

    $article = Article::findById($view->id);
    $view->title = $article->title;
    $view->lead = $article->lead;
    $view->authorName = (null !== $article->author) ? 'Автор: ' . $article->author->name : 'Неизвестный автор';

    $view->action = '/admin/update_article.php';
    $view->pageTitle = 'Редактирование статьи';

    $view->display(__DIR__ . '/../templates/admin/edit_article.php');
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

