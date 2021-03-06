<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>Contact Us</title>
	<link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link href="<?php echo base_url().'data/css/style.css';?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'data/css/about.css';?>">
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<link rel="icon" href="<?php echo base_url().'data/images/logo.png';?>">
	
</head>
<body>
	<header class=" fixed-top" style="height: 45px; width: 100% ; background-color: #FFBF86;">
		<div class="container" style="height: 35px">
			<div class="row top-bar">
		
			<div class="col text-left" style="margin-top: 8px">
				<span class="text-Black" style="font-size: 1em">
					<i class="fas fa-phone"></i> +91 9865231475
				</span>
				<span class="text-Black" style="font-size: 1em">
					<i class="fas fa-envelope"></i> alandidarshan@gmail.com
				</span>
			</div>
				<div class="col text-right " id="social">
				<span class="text-Black" style="font-size: 1.5em">
					<i class="fab fa-facebook"></i>
				</span>
				<span class="text-Black" style="font-size: 1.5em">
					<i class="fab fa-instagram"></i>
				</span>
				<span class="text-Black phone" style="font-size: 1.5em">
					<i class="fab fa-youtube "></i>
				</span>
			</div>
	</div>
</header>



	<nav class="navbar navbar-expand-lg navbar-light bg-lignt" style="margin-top: 2rem; background: #FFF3A3">
		<div class="container">
			<div class="logo"><a class="navbar-brand" href="<?php echo base_url().'index.php/AlandiDarshan/home'?>">
			<img src="<?php echo base_url().'data/images/logo.png';?>" class="animated slideInUp" style="animation-delay: 0.1s"></a>
		</div><button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon" style="color: black"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto animated slideInUp" style="animation-delay: 0.1s;">
					<li class="nav-item active" >
						<a class="nav-link" style="color:black;" href="<?php echo base_url().'index.php/AlandiDarshan/home'?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" style="color:black;" href="<?php echo base_url().'index.php/AlandiDarshan/places'?>">Places</a>
					</li>
					<li class="nav-item dropdown">
       
					<li class="nav-item">
						<a class="nav-link" style="color:black;" href="<?php echo base_url().'index.php/AlandiDarshan/gallary'?>">gallary</a>
					</li>
				
					<li class="nav-item" >
						<a class="nav-link" style="color:black;"  href="<?php echo base_url().'index.php/AlandiDarshan/howtoreach'?>">How to Reach</a>
					</li>
					
					<li class="nav-item" >
						<a class="nav-link active"  style="color:black;" href="<?php echo base_url().'index.php/AlandiDarshan/contactUs'?>">contact us</a>
					</li>
					<li class="nav-item" >
						<a class="nav-link" style="color:black;"href="<?php echo base_url().'index.php/AlandiDarshan/aboutus'?>">about us</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

</header>

<section class="Form my-4 mx-5">
   
        <div class="container justify-content-center">
            <div class="row g-0">
                <div class="col-lg-6 px-5 pt-3 mb-3 justify-content-center text-center">
                    <h1 class="font-weight-bold px-1 mb-3">Find Us At</h1>
                    <div class="wrapper img-indent-bot">
                            <figure class="map-border">
                                
                                <iframe class="embed-item " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3779.722994383265!2d73.90072141405902!3d18.676422369265474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c89cb0fbf3a3%3A0x64e59fcaeae8ea4!2sTechSword+Solutions!5e0!3m2!1sen!2sin!4v1459349099421" width="550" height="280" frameborder="0" style="border: 0" allowfullscreen=""></iframe>
                            </figure>
                    </div>
                    <b class="h4">Techsword Solutions</b>,<br>
                    <p class="py-2">Markal Street,
                                Near Nakoda Temple entrance<br>
                                Alandi Devachi,Pune.<br></p>
                           
                            
                </div>
                <div class="col-lg-6 px-5 pt-3 justify-content-center text-center">
                    <h1 class="font-weight-bold py-1">Contact Form</h1>
                    <!-- <h4 class="font-weight-bold py-1"></h4> -->

                    <div class="row">
      				<div class="col-md-12">
        			 <?php
                if($this->session->flashdata('message'))
                {
                ?>
                    <div class="alert alert-danger">
                        <?php
                        echo $this->session->flashdata('message');
                        ?>
                    </div>
                <?php
                }

                if($this->session->flashdata('success_message'))
                {
                ?>
                    <div class="alert alert-success">
                        <?php
                        echo $this->session->flashdata('success_message');
                        ?>
                    </div>
                <?php
                }
                ?>
      			
                    <form method="post" action="<?php echo base_url().'index.php/Query/validate';?>">
                        <div class="form-row">
                            <div class="col-lg-10">
                                <input type="text" name="name" class="form-control my-3 p-2" placeholder="Name" value="<?php echo set_value('name'); ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-10">
                                <input type="email" name="email" class="form-control my-3 p-2" placeholder="Email Address" value="<?php echo set_value('email'); ?>" required>
                            </div>
                        </div>
                            <div class="form-row">
                            <div class="col-lg-10">
                                <input type="number" name="phone" class="form-control my-3 p-2" placeholder="Phone number" value="<?php echo set_value('phone'); ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-10">
                                <textarea rows="4" cols="50" placeholder="Leave us a message" class="form-control my-3 p-2" name="query"><?php echo set_value('query'); ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LdP2iIcAAAAANutiiZalanMvOpJ896YODdCl14b"></div>
                    </div>
                        <div class="form-row">
                            <div class="col-lg-10 form-group">
                                <button type="submit" class="btn1 mt-2 mb-3">Send</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>

  <footer  class="footerc" style="background-image: url('images/footerb.jpg'); opacity: 0.9; color: Black;padding-top: 15px;background: #FFF47D;">
			<div class="container">
				<div class="footer-content">
					<div class="row">

					

						<div class="col-sm-3">
							<div class="single-footer-item">
								<h2>Quick links</h2>
								<div class="single-footer-txt" style="color: Black">
									<p><a href="#" style="color: Black">home</a></p>
									<p><a href="#" style="color: Black">destination</a></p>
									<p><a href="#" style="color: Black">special offers</a></p>
									<p><a href="#" style="color: Black" style="color: Black">special offers</a></p>
									<p><a href="#" style="color: Black">blog</a></p>
									<p><a href="#" style="color: Black">contacts</a></p>
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->

						</div><!--/.col-->


						<div class="col-sm-3">
							<div class="single-footer-item">
								<h2>Contact Us</h2>
								<div class="single-footer-txt">
									<p><a href="#" style="color: Black">alandidarshan@gmail.com</a></p>
									<p><a href="#" style="color: Black">+91 5689742536</a></p>
									
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->

						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item">
								<h2>Address</h2>
								<div class="single-footer-txt">
									<p><a href="#" style="color: Black">Techsword Solutions,
									</a></p>
									<p><a href="#" style="color: Black">Markal Street,</a></p>
									<p><a href="#" style="color: Black">Near Nakoda Temple entrance</a></p>
									<p><a href="#" style="color: Black">Alandi Devachi,Pune,</a></p>
									<p><a href="#" style="color: Black">India.</a></p>
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item text-center">
								<h2 class="text-left">Social Media</h2>
								<div class="single-footer-txt text-left">
									

				
				<span class="text-Black" style="font-size: 1.5em">
					<i class="fab fa-facebook"></i>
				</span>
				<span class="text-Black" style="font-size: 1.5em">
					<i class="fab fa-instagram"></i>
				</span>
				<span class="text-Black phone" style="font-size: 1.5em">
					<i class="fab fa-youtube "></i>
				</span>
					
		        	

		        </div>
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->
						</div><!--/.col-->

					</div><!--/.row-->

				</div><!--/.footer-content-->
				</div></footer></div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
	</script> 
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
	</script>
</body>
</html>
