<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/style.css">
  <script type="module" src="./js/main.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <div class="wrapper">
    <section class="header">
      <?php require_once ("header.html"); ?>
    </section>
    <section class="content">
      <?php require_once ('slider.html'); ?>
      <?php require_once ('collection.html'); ?>
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