<?php include_once 'views/session.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <!-- JS & JQuery -->
  <script src="js/app.js"></script>
  <script src="js/jquery-3.5.1.js"></script>
  <!-- Icons -->
  <script src="https://kit.fontawesome.com/e1f7535694.js" crossorigin="anonymous"></script>
  <title>PHP Exercises</title>
</head>

<body>
  <?php if (isset($_GET['page'])) : ?>
    <?php if ($_GET['page'] == 'blocks') : ?>
      <?php include 'views/blocks.php'; ?>
    <?php endif ?>
  <?php else : ?>
    <div class="container">
      <div class="w-33"><?php include 'views/first_task.php' ?></div>
      <div class="w-33"><?php include 'views/second_task.php' ?></div>
      <div class="w-33"><?php include 'views/third_task.php' ?></div>
      <div class="w-33"><?php include 'views/fourth_task.php' ?></div>
      <div class="w-33"><?php include 'views/sixth_task.php' ?></div>
    </div>
  <?php endif ?>
</body>

</html>