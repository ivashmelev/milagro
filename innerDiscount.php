<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./assets/css/style.css">
  <script type="module" src="./assets/js/main.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <title>Внутренняя акция</title>
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
        <span class="link">&nbsp;/&nbsp;Товар&nbsp;</span>
        <span class="link">&nbsp;/&nbsp;Акция товара&nbsp;</span>
      </div>
      <div class="title_discount_page left">
        <div class="title">
          <h2>Скидка 20% на покупку шубы летом</h2>
        </div>
        <p class="text">Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы
          на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях. При создании генератора мы
          использовали небезизвестный универсальный код речей. Текст генерируется абзацами случайным образом от двух до десяти предложений
          в абзаце, что позволяет сделать текст более привлекательным и живым для визуально-слухового восприятия.
          По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках
          прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст
          неповторимый колорит советских времен.</p>
      </div>
      <div class="title_discount_page left">
        <h2>Аукционные товары</h2>
      </div>
      <?php require ('new_collection.html'); ?>
      <?php require ('new_collection.html'); ?>
    </section>
    <section class="footer">
      <?php require_once ('footer.html'); ?>
    </section>
  </div>
</body>
</html>