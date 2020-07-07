<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Lion Incorporated</title>
    <link rel="stylesheet" href="<?php echo constant('URL')?>vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo constant('URL')?>public/assets/css/login.css">
</head>
<body>
    <section class="container-fluid w-100 h-100 d-grid justify-content-center">
    <div class="row">
    
    <div class="p-0 col-sm-12 col-md-6 login__column--img">
      
    <img class="w-100 login__image" src="<?php echo constant('URL')?>public/assets/img/login/link.jpg" alt="Legend of Zelda - Landscape"></div>
    <div class="col-sm-12 col-md-6 login__column--form d-flex justify-content-center align-items-center">
    <a class="home-button btn text-dark ml-1" href="<?php echo constant('URL')?>home"> Home</a>
    <form class="mt-5">
    <h1 class="text-align-center mb-5">Login</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check mb-2">
    <input type="checkbox" class="form-check-input" id="password">
    <label class="form-check-label" for="exampleCheck1">Save your password</label>
  </div>
  <button type="submit" class="btn btn-danger w-100">Log In</button>
  <small " class="form-text text-muted">Don't Have an Account? <a href="<?php echo constant('URL')?>register" class="text-danger">Register</a></small>
</form>

    </div>
    
    </div>
    

    </section>


<script src="<?php echo constant('URL')?>vendor/jquery/js/jquery.min.js"></script>
<script src="<?php echo constant('URL')?>public/assets/js/login.js"></script>
<script src="<?php echo constant('URL')?>vendor/popper/js/popper.min.js"></script>
<script src="<?php echo constant('URL')?>vendor/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>