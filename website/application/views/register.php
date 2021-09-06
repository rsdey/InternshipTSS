<html>
<head>
	<title>Admin Registration</title>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css';?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/register.css';?>">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	<div class="row">
      <div class="col-md-12">
        <?php 

          $msg = $this->session->userdata('msg');

          if($msg !=""){
            ?>

            <div class="alert alert-success"><?php echo $msg; ?></div>

            <?php
          }

          ?>
      </div>
    </div>

	<div class="container">
		

		<div class="col-md-6">
			<div class="card mt-4">

				<div class="card-header">
					Alandi Darshan Website Admin Registration
				</div>
				<form action="<?php echo base_url().'index.php/Auth/register'?>" method="post" name="registerForm" id="registerForm">
				<div class="card-body register">
					<p class="card-text">Fill details Here</p>

					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" value="" class="form-control" placeholder="Name">
						
					</div>
					<div class="form-group">
						<label for="name">E-mail</label>
						<input type="text" name="email" id="email" value="" class="form-control" placeholder="Email-id">
						
					</div>
					<div class="form-group">
						<label for="name">Password</label>
						<input type="password" name="password" id="password" value="" class="form-control" placeholder="Password">
						
					</div>

					<div class="form-group">
						<button class="btn btn-block btn-primary">Register</button>
						<a href="<?php echo base_url().'index.php/Auth/login'?>" class="btn btn-secondary btn btn-block">Login</a>
						
					</div>


				
				</div>
			</form>
			</div>
			
		</div>
		
	</div>

</body>
</html>