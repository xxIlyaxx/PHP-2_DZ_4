<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>Последние новости</h1>
    </div>
    <?php foreach ($articles as $article): ?>
        <div class="row">
            <h2><?php echo $article->title ?></h2>
            <p><?php echo $article->lead ?></p>
            <a href="/article.php?id=<?php echo $article->id ?>">Подробнее</a>
        </div>
    <?php endforeach; ?>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>