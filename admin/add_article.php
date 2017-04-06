<?php

use App\View;
use App\Models\Article;

require __DIR__ . '/../autoload.php';

$title = $_POST['title'] ?? null;
$lead = $_POST['lead'] ?? null;

if (null === $title || null === $lead) {
    $view = new View();

    $view->action = '/admin/add_article.php';
    $view->pageTitle = 'Новая статья';
    $view->authorName = null;

    $view->display(__DIR__ . '/../templates/admin/edit_article.php');
    exit();
}

$article = new Article();
$article->title = $title;
$article->lead = $lead;
if (true === $article->save()) {
    header('Location: /admin/');
}
