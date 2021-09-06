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
	<link href="<?php echo base_url().'data/css/style.css';?>" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'data/css/about.css';?>">
	
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
						<a class="nav-link"  style="color:black;" href="<?php echo base_url().'index.php/AlandiDarshan/contactUs'?>">contact us</a>
					</li>
					<li class="nav-item" >
						<a class="nav-link active" style="color:black;"href="<?php echo base_url().'index.php/AlandiDarshan/aboutus'?>">about us</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	


</div>


</header>




<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<style>
	.bs-example{
    	margin: 20px;
    }

</style>
<script>
    $(document).ready(function(){ 
        $("#myTab a").click(function(e){
            e.preventDefault();
            $(this).tab('show');
        });
    });
</script>
</head>
<body>
<div class="bs-example">
    <ul id="myTab" class="nav nav-pills" style="align-items: center; text-align: center;">
        <li class="nav-item">
            <a href="#home" class="nav-link active" style="font-size: 25px;" >History</a>
        </li>
        <li class="nav-item">
            <a href="#profile" class="nav-link" style="font-size: 25px">About Us</a>
        </li>
        <li class="nav-item">
            <a href="#messages" class="nav-link" style="font-size: 25px">Origin</a>
        </li>
    </ul><br><br>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="home">
            <div class="bg-Black p-auto history p-3">
  <div class="container py-2 m-auto" >
    <div class="row align-items-center mb-5">
      <div class="col-lg order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h1 class="font-weight-light display-4 mt-2 text-white">History</h1>
        <hr class="text-white mt-4" style="border-top: 5px solid;">
        <p class="font-italic text-white lead mt-5">Alandi has a long history but gained prominence in the 13th century when Dnyaneshwar (1275–1296) decided to entomb, otherwise known as sanjeevan samadhi, himself in a samadhi, a form of shrine, under the then existing Siddheshwar temple complex in 1296. A temple was built over the Samadhi by Ambekar Deshpande in around 1580–1600. Further additions to the temple were made during the Maratha Empire era by Maratha nobles and the Peshwa. In 1778, Alandi was granted to Mahadji Shinde, the powerful Maratha statesman of the Maratha confederacy at that time, by the Peshwa. For two decades after that, the Shinde family were the main sponsors of various renovations of the temple.</p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm mt-5">Learn More</a>
      </div>
      <!-- <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2" style="">
        <img src="alandi_ghat.jpg">
      </div> -->
    </div>
  </div>
</div>
        </div>
        <div class="tab-pane fade" id="profile">
   		<div class="bg-Black p-auto history p-3">
  <div class="container py-2 m-auto" >
    <div class="row align-items-center mb-5">
      <div class="col-lg order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h1 class="font-weight-light display-4 text-white mt-2">About Us</h1>
        <hr class="text-white mt-4" style="border-top: 5px solid;">
        <p class="font-italic text-white lead mt-5">Alandi has a long history but gained prominence in the 13th century when Dnyaneshwar (1275–1296) decided to entomb, otherwise known as sanjeevan samadhi, himself in a samadhi, a form of shrine, under the then existing Siddheshwar temple complex in 1296. A temple was built over the Samadhi by Ambekar Deshpande in around 1580–1600. Further additions to the temple were made during the Maratha Empire era by Maratha nobles and the Peshwa. In 1778, Alandi was granted to Mahadji Shinde, the powerful Maratha statesman of the Maratha confederacy at that time, by the Peshwa. For two decades after that, the Shinde family were the main sponsors of various renovations of the temple.</p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm mt-5">Learn More</a>
      </div>
      <!-- <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2" style="">
        <img src="alandi_ghat.jpg">
      </div> -->
    </div>
  </div>
</div>
        </div>
        <div class="tab-pane fade" id="messages">
            <div class="bg-Black p-auto history p-3">
  <div class="container py-2 m-auto" >
    <div class="row align-items-center mb-5">
      <div class="col-lg order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h1 class="font-weight-light display-4 text-white mt-2">Origin</h1>
        <hr class="text-white mt-4" style="border-top: 5px solid;">
        <p class="font-italic text-white lead mt-5">Alandi has a long history but gained prominence in the 13th century when Dnyaneshwar (1275–1296) decided to entomb, otherwise known as sanjeevan samadhi, himself in a samadhi, a form of shrine, under the then existing Siddheshwar temple complex in 1296. A temple was built over the Samadhi by Ambekar Deshpande in around 1580–1600. Further additions to the temple were made during the Maratha Empire era by Maratha nobles and the Peshwa. In 1778, Alandi was granted to Mahadji Shinde, the powerful Maratha statesman of the Maratha confederacy at that time, by the Peshwa. For two decades after that, the Shinde family were the main sponsors of various renovations of the temple.</p><a href="#" class="btn btn-light px-5 rounded-pill shadow-sm mt-5">Learn More</a>
      </div>
      <!-- <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2" style="">
        <img src="alandi_ghat.jpg">
      </div> -->
    </div>
  </div>
</div>
        </div>
    </div>
</div>


  <footer  class="footerc" style="background: #FFF47D; color: black">
			<div class="container">
				<div class="footer-content">
					<div class="row">

					

						<div class="col-sm-3">
							<div class="single-footer-item">
								<h2>Quick links</h2>
								<div class="single-footer-txt" style="color: black">
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
									<p><a href="#" style="color: black">alandidarshan@gmail.com</a></p>
									<p><a href="#" style="color: black">+91 5689742536</a></p>
									
								</div><!--/.single-footer-txt-->
							</div><!--/.single-footer-item-->

						</div><!--/.col-->

						<div class="col-sm-3">
							<div class="single-footer-item">
								<h2>Address</h2>
								<div class="single-footer-txt">
									<p><a href="#" style="color: black">Techsword Solutions,
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
				</div></footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
	</script> 
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
	</script>

</body>
</html>
