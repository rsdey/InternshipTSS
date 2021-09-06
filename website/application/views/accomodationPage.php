<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>About Us</title>
	<link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
<link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- Add Icons -->
	<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
	<link href="<?php echo base_url().'data/css/style.css';?>" rel="stylesheet">
	

	<style>
    	#top{
    		text-decoration: none;
    		color: white;
    	}
    	#top:hover{
    		color: black;
    	}
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
	
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
						<a class="nav-link " style="color:black;" href="<?php echo base_url().'index.php/AlandiDarshan/home'?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" style="color:black;" href="?php echo base_url().'index.php/AlandiDarshan/places'?>">Places</a>
					</li>
					<li class="nav-item dropdown">
       
					<li class="nav-item">
						<a class="nav-link" style="color:black;" href="<?php echo base_url().'index.php/AlandiDarshan/gallary'?>">gallary</a>
					</li>
				
					<li class="nav-item" >
						<a class="nav-link" style="color:black;"  href="<?php echo base_url().'index.php/AlandiDarshan/howtoreach'?>">How to Reach</a>
					</li>
					
					<li class="nav-item" >
						<a class="nav-link"  style="color:black;" href="<?php echo base_url().'index.php/AlandiDarshan/contactUs'?>">contact us</a>
					</li>
					<li class="nav-item" >
						<a class="nav-link" style="color:black;"href="<?php echo base_url().'index.php/AlandiDarshan/aboutus'?>">about us</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

</header>

<br>

<main>
	<div class="container" style="padding-left: 50px"><h1>Accomodations</h1><hr class="text-Black">

		 <div class="row">
      <div class="col-md-12">
      <form action="" method="get">
        <input type="text" name="cari" class="form-control" placeholder="Name"><br>
    
        <a href="" class="btn btn-primary ">Search</a>
        <a href="" class="btn btn-secondary ">Cancel</a>

      </form>
    </div>
  </div>
  <br>

	</div>
	

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://imgcld.yatra.com/ytimages/image/upload/t_hotel_yatra_details_desktop/v1441798931/Domestic%20Hotels/ALANDI/OVER_VIEW.jpg">

            <div class="card-body">
              <p class="card-text text-danger"><b>Rajesh Multipurpose Hall Alandi</b></p><p class="card-text">Above Shraddha Jewellers, chowk, Alandi-Markal Rd, near MSEB office, Pune, Maharashtra 412105<br><br>Contact - 9822332140</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://image3.mouthshut.com/images/imagesp/925824504s.jpg">

            <div class="card-body">
                <p class="card-text text-danger"><b>Jagtap Mangal Karyalaya</b></p><p class="card-text">Kale Colony Lane 2, Kale Colony, Maharashtra 412105<br><br>Contact - Not Available</p>
              
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://media.weddingz.in/images/bcd23fc3b000b9db9b31c70570ea898f/hotel-sitai-alandi-pune.jpg">

            <div class="card-body">
                <p class="card-text text-danger"><b>Dnyanraj Mangal Karyalay & resistor office Alandi Devachi</b></p><p class="card-text">Mahadwar Rd, near Bank ok, Alandi Devachi, Alandi, Maharashtra 412105<br><br>Contact -  8308070707 </p>
                
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img src="https://static.toiimg.com/thumb/imgsize-1368470,msid-68620919,width-400,resizemode-4/68620919.jpg">

            <div class="card-body">
                <p class="card-text text-danger"><b>Sai Mangal Karyalay</b></p><p class="card-text">Post office, Near Pradhakshana Road, Alandi dewachui, Pune, Maharashtra 412105<br><br>Contact - Not Available</p>
                
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://i.pinimg.com/736x/4f/65/7d/4f657dee9938fd0b3431666d839ff5f1--ellora-sai-baba.jpg">

            <div class="card-body">
                <p class="card-text text-danger"><b>Morya Garden Mangal Karyalaya</b></p><p class="card-text">Bidkar wada, Chakan Chowk, Near New Bridge, near Morya Restaurant, Alandi, Maharashtra 412105<br><br>Contact -  9850589601</p>
                
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img src="https://media.weddingz.in/images/535830045deccb8bcf23902b9ad3a5ac/hotel-harshada-garden-restaurant-alandi-pune.jpg">

            <div class="card-body">
                <p class="card-text text-danger"><b>Shri Krishna Mangal Karyalay</b></p><p class="card-text">Mahadwar Chowk, Bharav Rasta, Alandi Devachi,Taluka Khed, near Dyaneshwar Maharaj Temple, Aladi, Maharashtra 412105<br><br>Contact -  9822440912</p>
                
            </div>
          </div>
        </div>

        
      </div>
    </div>
  </div>

</main>


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

    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
