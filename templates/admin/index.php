<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Админ-панель</title>
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>Админ-панель</h1>
<a href="/admin/add_article.php">Добавить новость</a>
<hr>
<?php foreach ($articles as $article): ?>
    <div>
        <h2><?php echo $article->title; ?></h2>
        <p><?php echo $article->lead; ?></p>
        <a href="/admin/delete_article.php?id=<?php echo $article->id; ?>">Удалить</a>
        <a href="/admin/update_article.php?id=<?php echo $article->id; ?>">Редактировать</a>
        <hr>
    </div>
<?php endforeach; ?>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>