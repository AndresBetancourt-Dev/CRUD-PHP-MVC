<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
<link rel="stylesheet" href="<?php echo constant('URL')?>vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo constant('URL')?>public/assets/css/header.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
  <a class="navbar-brand" href="<?php echo constant('URL')?>home"><img src="<?php echo constant('URL')?>public/assets/img/lion.jpg" width="30" height="30" alt="" loading="lazy"> Lion Incorporated</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo constant('URL')?>home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-light" href="#">Games</a>
          <a class="dropdown-item text-light" href="#">Consoles</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item text-light" href="#">Computer Parts</a>
        </div>
      </li>
    </ul>

      <a href="<?php echo constant('URL')?>login" class="btn btn-dark  my-2 my-sm-0 mx-2">Log In</a>
      <a href="<?php echo constant('URL')?>register" class="btn btn-danger my-2 my-sm-0">Register</a>
   
  </div>
</nav>
  
</body>
</html>