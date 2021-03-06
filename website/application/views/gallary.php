<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>Gallary</title>
	<link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link href="<?php echo base_url().'data/css/style.css';?>" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
	
</head>

<style type="text/css">

.item{
	transition: .5s ease-in-out;
}
	
.item:hover{
	filter:brightness(50%);
	 box-shadow: 0 0 3px black;
 	 margin-top: -10px;
}

</style>

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
						<a class="nav-link active" style="color:black;" href="<?php echo base_url().'index.php/AlandiDarshan/gallary'?>">gallary</a>
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
	<div class="container-fluid">
		<div class="row mt-4">

			<div class="item col-sm-6 col-md-4 mb-3">
				<a href="https://th.bing.com/th/id/R.bbf28d03f9ae6bc2f952702dae527d8c?rik=iQx3UIvjbRo8kg&riu=http%3a%2f%2fwww.travelplanet.in%2fwp-content%2fuploads%2f2016%2f10%2fAlandi-874x492.jpg&ehk=2%2f7nRC%2fyMIr67otQekUWVLQc8vSYxtIOAx7yBOZz9II%3d&risl=&pid=ImgRaw&r=0" class="fancybox" data-fancybox="gallery1" >
					<img src="https://th.bing.com/th/id/R.bbf28d03f9ae6bc2f952702dae527d8c?rik=iQx3UIvjbRo8kg&riu=http%3a%2f%2fwww.travelplanet.in%2fwp-content%2fuploads%2f2016%2f10%2fAlandi-874x492.jpg&ehk=2%2f7nRC%2fyMIr67otQekUWVLQc8vSYxtIOAx7yBOZz9II%3d&risl=&pid=ImgRaw&r=0" width="100%" height="100%">
				</a>
			</div>

			<div class="item col-sm-6 col-md-4 mb-3">
				<a href="https://th.bing.com/th/id/R.de77bd0de318069c16d11534dfc33560?rik=7%2by0peSTOL9IuQ&riu=http%3a%2f%2f1.bp.blogspot.com%2f-oVXi7QQ9NHU%2fTa3NmgnGjaI%2fAAAAAAAAA7c%2fo4_gR-Klo5Q%2fs1600%2fP1010190.JPG&ehk=y2s61Bn52aqRFoyxe2cfTun6x6NXtcLpniLoSJco%2boc%3d&risl=&pid=ImgRaw&r=0" class="fancybox" data-fancybox="gallery1" >
					<img src="https://th.bing.com/th/id/R.de77bd0de318069c16d11534dfc33560?rik=7%2by0peSTOL9IuQ&riu=http%3a%2f%2f1.bp.blogspot.com%2f-oVXi7QQ9NHU%2fTa3NmgnGjaI%2fAAAAAAAAA7c%2fo4_gR-Klo5Q%2fs1600%2fP1010190.JPG&ehk=y2s61Bn52aqRFoyxe2cfTun6x6NXtcLpniLoSJco%2boc%3d&risl=&pid=ImgRaw&r=0" width="100%" height="100%">
				</a>
			</div>
			<div class="item col-sm-6 col-md-4 mb-3">
				<a href="http://walkofhope.in/wp-content/uploads/2015/07/3.The-serpentine-queue-winding-its-way-to-the-sanctum-sanctorum-Jnaneswar-Samadhi-Alandi-Pune-Maharashtra.jpg" class="fancybox" data-fancybox="gallery1" >
					<img src="http://walkofhope.in/wp-content/uploads/2015/07/3.The-serpentine-queue-winding-its-way-to-the-sanctum-sanctorum-Jnaneswar-Samadhi-Alandi-Pune-Maharashtra.jpg" width="100%" height="100%">
				</a>
			</div>
			<div class="item col-sm-6 col-md-4 mb-3">
				<a href="https://static2.tripoto.com/media/filter/nl/img/1799768/TripDocument/1573967433_1573967431446.jpg" class="fancybox" data-fancybox="gallery1" >
					<img src="https://static2.tripoto.com/media/filter/nl/img/1799768/TripDocument/1573967433_1573967431446.jpg" width="100%" height="100%">
				</a>
			</div>
			<div class="item col-sm-6 col-md-4 mb-3">
				<a href="https://1.bp.blogspot.com/-H4DhueKDCEs/TisIb9t8sgI/AAAAAAAAHP8/ZqlhDJQzQ0o/s1600/Alandi%2Bnadi.jpg" class="fancybox" data-fancybox="gallery1" >
					<img src="https://1.bp.blogspot.com/-H4DhueKDCEs/TisIb9t8sgI/AAAAAAAAHP8/ZqlhDJQzQ0o/s1600/Alandi%2Bnadi.jpg" width="100%" height="100%">
				</a>
			</div>
			<div class="item col-sm-6 col-md-4 mb-3">
				<a href="https://live.staticflickr.com/6052/6272013089_f73c8567d7_b.jpg" class="fancybox" data-fancybox="gallery1" >
					<img src="https://live.staticflickr.com/6052/6272013089_f73c8567d7_b.jpg" width="100%" height="100%">
				</a>
			</div>
		</div>
	</div>





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
