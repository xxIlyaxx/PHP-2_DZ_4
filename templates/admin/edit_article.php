<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $this->pageTitle; ?></title>
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1><?php echo $this->pageTitle; ?></h1>
    <?php if (null !== $this->authorName): ?>
        <p><?php echo $this->authorName; ?></p>
    <?php endif; ?>
    <form action="<?php echo $this->action; ?>" method="POST">
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="text" name="title" id="title" value="<?php echo $this->title; ?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="lead">Статья</label>
            <textarea name="lead" id="lead" cols="60" rows="30"
                      class="form-control"><?php echo $this->lead; ?></textarea>
        </div>
        <input type="hidden" name="id" value="<?php echo $this->id; ?>">
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