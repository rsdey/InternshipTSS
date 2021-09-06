<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css';?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/register.css';?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/login.css';?>">
</head>
  <body class="text-center">
    
<main class="form-signin">
  <form class="form-signin" action="<?php echo base_url().'index.php/Auth/login'?>" method="post" name="loginform" id="loginform">

   <div class="row">
      <div class="col-md-12">
        <?php 

          $msg = $this->session->userdata('msg');

          if($msg !=""){
            ?>

            <div class="alert alert-danger"><?php echo $msg; ?></div>

            <?php
          }

          ?>
      </div>
    </div>
   
    <h1 class="h3 mb-3 fw-normal text-center">Please Log in</h1>
    <label for="email" class="sr-only">Email address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email-address" autofocus required>
       <label for="password" class="sr-only">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
     
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button><br><br>
    <a href="<?php echo base_url().'index.php/Auth/register'?>" class="btn btn-secondary btn btn-block">Register</a>
 
  </form>
</main>


    
  </body>
</html>