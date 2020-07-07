<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error - Lion Incorporated</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/assets/css/error.css">
</head>
<body>
  <?php 
  include('../app/views/templates/header.php');
  ?>

  <div class="container-fluid error">
  <div class="error__message text-light">
  <h1>Ups! Esta página no existe</h1>
  </div>
  </div>

 <?php 
  include('../app/views/templates/footer.php');
  ?>
</body>
</html>