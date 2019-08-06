<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./assets/css/style.css">
  <script type="module" src="./assets/js/main.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <title>Товар</title>
</head>
<body>
  <div class="wrapper">
    <div class="hide"></div>
    <section class="header">
      <?php require_once ('header.php'); ?>
    </section>
    <section class="content">
      <?php require_once ('order.html'); ?>
      <?php require_once ('popup.html'); ?>
      <div class="breadcrumbs">
        <a href="./index.php" class="link">Главная</a>
        <span class="link">&nbsp;/&nbsp;Шубы&nbsp;</span>
        <span class="link">&nbsp;/&nbsp;Пальто&nbsp;</span>
      </div>
      <?php require_once ('productPage.html'); ?>
      <?php require_once ('info.html'); ?>
       <div class="title_discount_page left">
        <h2>Вы смотрели</h2>
      </div>
      <?php require ('new_collection.html'); ?>
      <div class="title_discount_page left">
        <h2>Рекомендуемые товары</h2>
      </div>
      <?php require ('new_collection.html'); ?>
    </section>
    <section class="footer">
      <?php require_once ('footer.html'); ?>
    </section>
  </div>
</body>
</html>