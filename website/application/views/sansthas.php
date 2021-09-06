<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
  
</head>
<body>
	<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Alandi Darshan Admin Dashboard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="<?php echo base_url().'index.php/Auth/dashboard'?>">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link " href="<?php echo base_url().'index.php/Manage/scrollingNews'?>">ScrollingNews</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link active" href="<?php echo base_url().'index.php/sansthas/index'?>">Sansthas</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link =" href="<?php echo base_url().'index.php/Marriagehalls/index'?>">MarriageHalls</a>
          </li>
          <li class="nav-item">
            <a class="nav-link =" href="<?php echo base_url().'index.php/Manage/queries'?>">Queries</a>
          </li>
      
          <li class="nav-item">
            <a class="nav-link =" href="<?php echo base_url().'index.php/Manage/admins'?>">Admins</a>
          </li>
        
         <div class="col-md-6 text-white" style="padding-top: 7px; margin-left: 280px">Welcome, <?php echo $user['name'];?><a href="<?php echo base_url().'index.php/Auth/logout'?>"class="nav-item ">   Logout</a>
         </ul></div>
        
      </div>

    </div>
    
   
  </nav>
</header>

</ul>
<div class="container" style="padding-top: 90px">

  <div class="row">
      <div class="col-md-12">
        <?php 

          $success = $this->session->userdata('success');

          if($success !=""){
            ?>

            <div class="alert alert-success"><?php echo $success; ?></div>

            <?php
          }

          ?>
      </div>
<div class="row" >
      <div class="col-12" style="padding-left: 50px"><h3>View Sansthas Data </h3></div>
      </div></div>
<hr>

<div class="container" >
      <a style="text-align: right;" href="<?=base_url()?>index.php/sansthas/create" class="btn btn-info">Add item</a>
      <a href="<?php echo base_url().'index.php/AlandiDarshan/sansthasPage'?>" target="blank" class="btn btn-success">Test</a></div>
      <hr>
      
    </div>

    <div class="container" style="text-align: center;">
 
     
  <br>
      <div class="row">

        <?php foreach ($data as $data): ?>
          <div class="col-sm-6 col-md-3">
            <a href="#" class="thumbnail">
              <img src="<?=base_url()?>assets/images/Sansthasimages/<?=$data->image?>" style="max-width:100%; max-height:100%; height:180px" alt="foto">
            </a>
            <div class="caption">
              <h4 style="height: 70px"><?php echo $data->name?></h4>
              <p style="height: 80px"> <?php echo $data->description ?></p>
              <p>
                <a href="<?=base_url()?>index.php/sansthas/edit/<?=$data->id?>" class="btn btn-warning" role="button">Edit</a>
                <a href="<?=base_url()?>index.php/sansthas/deletedata/<?=$data->id?>/<?=$data->image?>" class="btn btn-danger" role="button">Delete</a>
              </p>
            </div>
          </div>
        <?php endforeach; ?>


      </div>
    </div>
    <div class="container">
      <?php echo $pagination ?>
    </div>

    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>



</body>
</html>