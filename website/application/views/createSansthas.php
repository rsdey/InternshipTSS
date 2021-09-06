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
            <a class="nav-link =" href="<?php echo base_url().'index.php/Manage/scrollingNews'?>">ScrollingNews</a>
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
            <a class="nav-link " href="<?php echo base_url().'index.php/Manage/admins'?>">Admins</a>
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
      <div class="col-12" style="padding-left: 50px"><h3>Add Sansthas Data </h3></div>
      </div></div>
<hr>

<div class="row">
        <div class="col-md-6">
        <form action="<?=base_url()?>index.php/sansthas/insertdata" method="post" enctype="multipart/form-data">
          <label>Name</label>
          <input type="text" name="name" class="form-control" value="">
          <label>Description</label>
          <textarea name="description" rows="8" class="form-control" cols="80"></textarea>
          <label>Image</label><br>
          <input type="file" name="fotopost" class="form-control"><br><br>

         
          <input type="submit" name="submit" value="Create" class="btn btn-success">
          <a href="<?php echo base_url().'index.php/sansthas'; ?>" class="btn btn-secondary ">Cancel</a>
        </form>
        </div>
      </div>
    </div>
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>



</body>
</html>