<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css';?>">
  
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
            <a class="nav-link active" href="<?php echo base_url().'index.php/Manage/scrollingNews'?>">ScrollingNews</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link =" href="<?php echo base_url().'index.php/sansthas/index'?>">Sansthas</a>
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
      <div class="col-12" style="padding-left: 50px"><h3>View Scrolling News </h3></div>
      <div style="padding-left: 50px">
      <a href="<?php echo base_url().'index.php/Snews/createSnews'; ?>" class="btn btn-primary" >Create</a>
    <a href="<?php echo base_url().'index.php/AlandiDarshan/home'?>" target="blank" class="btn btn-success">Test</a></div>
  

    </div></div>
<hr>

<div class="row" >
      <div class="col-md-12">
        <table class="table table-striped">
          <tr>
            <th>id</th>
            <th  class="text-center">data</th>
            <th width="100"></th>
            <th width="100"></th>
           

          </tr>
          <?php if(!empty($snews)) { foreach($snews as $item) {?>
          <tr>
            <td><?php echo $item['id'] ?></td>
            <td><?php echo $item['snews'] ?></td>
      
            <td>
              <a href="<?php echo base_url().'index.php/Snews/editSnews/'.$item['id'] ?>" class="btn btn-warning">Edit</a>
            </td>
            <td>
              <a href="<?php echo base_url().'index.php/Snews/delete/'.$item['id'] ?>" class="btn btn-danger">Delete</a>
            </td>
            
          </tr>
        <?php } } else { ?>
        <tr>
            <td colspan="6" class="text-center">No records Found !</td>
          </tr>
        <?php } ?>
        </table>
      </div>
    

  </div>
</div>

</body>
</html>