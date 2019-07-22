<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./assets/css/style.css">
  <script type="module" src="./assets/js/main.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <title>Акции</title>
</head>
<body>
  <div class="wrapper">
    <section class="header">
      <?php require_once ('header.html'); ?>
    </section>
    <section class="content">
      <div class="breadcrumbs">
        <a href="./index.php" class="link">Главная</a>
        <span class="link">&nbsp;/&nbsp;Акции&nbsp;</span>
      </div>
      <?php require_once ('discount.html'); ?>
      <div class="title left">
        <h2>Товары со скидкой</h2>
      </div>
      <?php require_once ('new_collection.html'); ?>
      <?php require_once ('feedback.html'); ?>
    </section>
    <section class="footer">
      <?php require_once ('footer.html'); ?>
    </section>
  </div>
</body>
</html>