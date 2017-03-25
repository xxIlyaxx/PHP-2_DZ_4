<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1><?php echo $pageTitle; ?></h1>
    <form action="<?php echo $action; ?>" method="POST">
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="text" name="title" id="title" value="<?php echo $title; ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="lead">Статья</label>
            <textarea name="lead" id="lead" cols="60" rows="30" class="form-control"><?php echo $lead; ?></textarea>
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <a href="/admin/" class="btn btn-danger">Отмена</a>
        <input type="submit" value="Сохранить" class="btn btn-success">
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>