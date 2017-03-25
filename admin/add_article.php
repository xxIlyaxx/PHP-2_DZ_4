<?php

use App\Models\Article;

require __DIR__ . '/../autoload.php';

$title = (isset($_POST['title'])) ? $_POST['title'] : null;
$lead = (isset($_POST['lead'])) ? $_POST['lead'] : null;

if (null === $title || null === $lead) {
    $action = '/admin/add_article.php';
    $pageTitle = 'Новая статья';
    include __DIR__ . '/../templates/admin/edit_article.php';
    exit();
}

$article = new Article();
$article->title = $title;
$article->lead = $lead;
if (true === $article->save()) {
    header('Location: /admin/');
}
