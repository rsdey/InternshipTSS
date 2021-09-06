<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>Alandi Darshan</title>
	<link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	
	<link href="<?php echo base_url().'data/css/style.css';?>" rel="stylesheet">
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
						<a class="nav-link active" style="color:black;" href="<?php echo base_url().'index.php/AlandiDarshan/home'?>">Home</a>
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
						<a class="nav-link" style="color:black;"href="<?php echo base_url().'index.php/AlandiDarshan/aboutus'?>">about us</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
		<ol class="carousel-indicators">
			<li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
			<li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
			<li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img alt="First slide" class="d-block w-100" src="<?php echo base_url().'data/images/banner.png';?>">
				<div class="carousel-caption d-none d-md-block">
					<h5 class="animated slideInUp" style="animation-delay: 1s" >Explore the Divine</h5>
					<p class="animated fadeInLeft" style="animation-delay: 2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
					<p class="animated zoomIn" style="animation-delay: 3s"><a href="#">More Info</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="Second slide" class="d-block w-100" src="https://i.postimg.cc/SQXZtrTZ/2.jpg">
				<div class="carousel-caption d-none d-md-block">
					<h5 class="animated slideInUp" style="animation-delay: 1s">Travel</h5>
					<p class="animated fadeInUp" style="animation-delay: 2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
					<p class="animated zoomIn" style="animation-delay: 3s"><a href="#">More Info</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="Third slide" class="d-block w-100" src="https://i.postimg.cc/Jh4x3cH5/3.jpg">
				<div class="carousel-caption d-none d-md-block">
					<h5 class="animated zoomIn" style="animation-delay: 1s">Get Better</h5>
					<p class="animated fadeInLeft" style="animation-delay: 2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
					<p class="animated zoomIn" style="animation-delay: 3s"><a href="#">More Info</a></p>
				</div>
			</div>
		</div><a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
	</div>
    <?php if(!empty($snews)) { foreach($snews as $item) {?>
	<div style="background-color: #e2534c; color: white; font-size: 20px; padding-top: 5px; padding-bottom: 5px">

        
        <marquee behavior="scroll" direction="left" scrollamount="10">
      
      <?php echo $item['snews'] ?>
    </marquee>
    <?php } } ?>
</div>


</div>
<a class="weatherwidget-io" href="https://forecast7.com/en/18d6773d89/alandi/" data-label_1="ALANDI" data-label_2="Pune, India" data-theme="original" >ALANDI Pune, India</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>

</header>

<div  style="background-image: url('<?php echo base_url().'data/images/footerb.jpg';?>');margin-top: -2px; background-color: #DDDDDD;">
 <div class="tab-news" style="padding-top: 50px">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 animated fadeInUp" style="animation-delay: 2s">
                    	<h2 style="color: white !important">Highlights</h2>
                    	<iframe width="100%" height="310" src="https://www.youtube.com/embed/qvq89JEhKus" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border-radius: 10px"></iframe>
                        <br><br><br><br>
                        <iframe width="100%" height="310" src="https://www.youtube.com/embed/_gxMC8XhqqI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border-radius: 10px"></iframe>
                        </div>

                    
                    <div class="col-md-6 animated fadeInUp" style="animation-delay: 2s">
                    	<h2 style="color: white !important">News</h2>
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#m-viewed">Local</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#m-read">Most Read</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#m-recent">Most Recent</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="m-viewed" class="container tab-pane active">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="<?php echo base_url().'data/images/Img1.jpg';?>" height="150px"/>
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="<?php echo base_url().'data/images/Img2.jpg';?>" height="150px"/>
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="<?php echo base_url().'data/images/Img3.jpg';?>" height="150px"/>
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="<?php echo base_url().'data/images/Img4.jpg';?>" height="150px"/>
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                            </div>
                            <div id="m-read" class="container tab-pane fade">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="<?php echo base_url().'data/images/Img5.jpg';?>" height="150px"/>
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="<?php echo base_url().'data/images/Img6.jpg';?>" height="150px"/>
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="<?php echo base_url().'data/images/Img7.jpg';?>" height="150px"/>
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="<?php echo base_url().'data/images/Img8.jpg';?>" height="150px"/>
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                            </div>
                            <div id="m-recent" class="container tab-pane fade">
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="<?php echo base_url().'data/images/Img1.jpg';?>" height="150px"/>
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="<?php echo base_url().'data/images/Img2.jpg';?>" height="150px"/>
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="<?php echo base_url().'data/images/Img3.jpg';?>" height="150px"/>
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="<?php echo base_url().'data/images/Img4.jpg';?>" height="150px"/>
                                    </div>
                                    <div class="tn-title">
                                        <a href="">Lorem ipsum dolor sit amet</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container" style="display: flex; color: Black">
  <div style="flex: 1;margin:10px 20px; "><div class="card">
  <div class="card-body">
    <img src="<?php echo base_url().'data/images/pencil.png';?>" height="70px"; width="70px">
    <h5 class="card-title" style="margin-bottom: 10px;" >Sansthas</h5>
	
    <a href="<?php echo base_url().'index.php/AlandiDarshan/sansthasPage'?>" class="btn btn-warning btn">View</a>
  </div>
</div></div>
<div style="flex: 1; margin:10px 20px;"><div class="card">
  <div class="card-body">
    <img src="<?php echo base_url().'data/images/house.png';?>" height="70px"; width="70px">
    <h5 class="card-title">Accomodation</h5>
   
    <a href="<?php echo base_url().'index.php/AlandiDarshan/accomodationPage'?>" class="btn btn-warning btn">View</a>
  </div>
</div></div>  
  <div style="flex: 1; margin:10px 20px;"><div class="card">
  <div class="card-body">
    <img src="<?php echo base_url().'data/images/book.png';?>" height="70px"; width="70px">
    <h5 class="card-title">Books </h5>
    
    <a href="<?php echo base_url().'index.php/AlandiDarshan/booksPage'?>" class="btn btn-warning btn">View</a>
  </div>
</div></div>
<div style="flex: 1;margin:10px 20px; "><div class="card">
	<div class="card-body">
        <img src="<?php echo base_url().'data/images/ring.png';?>" height="70px"; width="70px">
	  <h5 class="card-title">Marriage Halls  </h5>
	  
	  <a href="<?php echo base_url().'index.php/AlandiDarshan/marriagehallsPage'?>" class="btn btn-warning btn">View</a>
	</div>
  </div></div>
</div>
<div class="container">
	<h2 style="color: white !important">Blogs</h2>
<div class="card-deck">

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo base_url().'data/images/about.jpg';?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo base_url().'data/images/about.jpg';?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo base_url().'data/images/about.jpg';?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
</div>

<div class="container" id="test">
<div class="container" id="testimonial">
	<br>
	<h2 style="color: white; text-align: center;">Testimonials</h2>
	<div class="row">
		<div class="col-md-12"><br><br>
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
				<li data-slide-to="1" data-target="#carouselExampleIndicators" class="active"></li>
				<li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row">
						<div class="col-md-4">
							<div class="single-box">
								<div class="img-area"><img src="<?php echo base_url().'data/images/t1.png';?>"></div>
								<div class="img-text">
									<h2>Persson 1</h2>
									<p>
										dfdgfdgfdgdfdfg
									</p>
								</div>
							</div>

							
						</div>
						<div class="col-md-4">
							<div class="single-box">
								<div class="img-area"><img src="<?php echo base_url().'data/images/t1.png';?>"></div>
								<div class="img-text">
									<h2>Person 2</h2>
									<p>
										dfdgfdgfdgdfdfg
									</p>
								</div>
							</div>

							
						</div>
						<div class="col-md-4">
							<div class="single-box">
								<div class="img-area"><img src="<?php echo base_url().'data/images/t1.png';?>"></div>
								<div class="img-text">
									<h2>Person 3</h2>
									<p>
										dfdgfdgfdgdfdfg
									</p>
								</div>
							</div>

							
						</div>


					</div>

					</div>
					<div class="carousel-item">
						<div class="row">
						<div class="col-md-4">
							<div class="single-box">
								<div class="img-area"><img src="<?php echo base_url().'data/images/t1.png';?>"></div>
								<div class="img-text">
									<h2>Person 4</h2>
									<p>
										dfdgfdgfdgdfdfg
									</p>
								</div>
							</div>

							
						</div>
						<div class="col-md-4">
							<div class="single-box">
								<div class="img-area"><img src="<?php echo base_url().'data/images/t1.png';?>"></div>
								<div class="img-text">
									<h2>Person 5</h2>
									<p>
										dfdgfdgfdgdfdfg
									</p>
								</div>
							</div>

							
						</div>
						<div class="col-md-4">
							<div class="single-box">
								<div class="img-area"><img src="<?php echo base_url().'data/images/t1.png';?>"></div>
								<div class="img-text">
									<h2>Person 6</h2>
									<p>
										dfdgfdgfdgdfdfg
									</p>
								</div>
							</div>

							
						</div>


					</div>

					</div>
				</div>

			</div>
			
		</div>

		
	</div>
	</div>
</div>
</div>

<div style="background-image: url('<?php echo base_url().'data/images/footer.jpg';?>'); opacity: 0.8;">
  <div class="container py-5 " style="animation-delay: 4s">
    <div class="row h-100 align-items-center py-5">
      <div class="col-lg-6">
        <h1 class="display-4" style="color: white">About Us</h1>
        <p class="lead mb-0" style="color: white">Get a brief about us....! This is Demo Text</p>
        <p class="lead  mb-0" style="color: white">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p><br>
        <p class="lead text-muted">
            <a href="#" class="btn btn-primary">Know More</a>
        </p>
      </div>
      <div class="col-lg-6 d-none d-lg-block"><img src="images/about.jpg" alt="" class="img-fluid"></div>
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
									<p><a href="<?=base_url()?>index.php/Auth/login" style="color: Black" target="_blank">Admin-login</a></p>
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


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
	</script> 
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
	</script>
</body>
</html>
