<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./assets/css/style.css">
  <script type="module" src="./assets/js/main.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <title>Milagro Furs</title>
</head>
<body>
  <div class="wrapper">
    <div class="hide"></div>
    <section class="header">
      <?php require_once ("header.php"); ?>
    </section>
    <section class="content">

      <?php require_once ('order.html'); ?>
      <?php require_once ('popup.html'); ?>
      <?php require_once ('slider.html'); ?>
      <?php require_once ('collection.html'); ?>
      <div class="title new_collection">
        <h2>Новые коллекции</h2>
      </div>
      <?php require_once ('new_collection.html'); ?>
      <?php require_once ('banner.html'); ?>
      <?php require_once ('info.html'); ?>
    </section>
    <section class="footer">
      <?php require_once ('footer.html') ?>
    </section>
  </div>
</body>
</html>