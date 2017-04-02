<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $this->article->title; ?></title>
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
</head>
<body>
<div class="container">
    <p><a href="/">Главная страница</a></p>
    <div class="page-header">
        <h1><?php echo $this->article->title; ?></h1>
        <p><?php echo (null !== $this->article->author) ? 'Автор: ' . $this->article->author->name : 'Неизвестный автор'; ?></p>
    </div>
    <p><?php echo $this->article->lead; ?></p>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>