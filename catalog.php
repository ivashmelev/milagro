<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./assets/css/style.css">
  <script type="module" src="./assets/js/main.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <title>Каталог</title>
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
      <?php require_once ("./slider.html"); ?>
      <div class="breadcrumbs">
        <a href="./index.php" class="link">Главная</a>
        <span class="link">&nbsp;/&nbsp;Каталог&nbsp;</span>
      </div>
      <div class="catalog_block">
        <div class="side_block">
          <?php require_once ("./catalogMenu.html") ?>
        </div>
        <div class="side_block">
          <?php require_once ("./filter.html") ?>
          <?php require ('new_collection.html'); ?>
          <?php require ('new_collection.html'); ?>
          <?php require ('new_collection.html'); ?>
        </div>
      </div>
      
      <?php require_once ("./pagination.html") ?>        
    </section>
    <section class="info">
      <?php require_once ('info.html'); ?>
    </section>
    <section class="footer">
      <?php require_once ('footer.html'); ?>
    </section>
  </div>
</body>
</html>