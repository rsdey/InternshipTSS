<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
            <a class="nav-link " href="<?php echo base_url().'index.php/Manage/admins'?>">Admins</a>
          </li>
        
         <div class="col-md-6 text-white" style="padding-top: 7px; margin-left: 280px">Welcome, <?php echo $user['name'];?><a href="<?php echo base_url().'index.php/Auth/logout'?>"class="nav-item ">   Logout</a>
         </ul></div>
        
      </div>

    </div>
    
   
  </nav>
</header>


<div class="container" style="padding-top: 90px">
<div class="row" >
      <div class="col-12"><h3>View Users </h3></div>
    

    </div>
<hr>

<div class="container" style="padding-top: 10px">
    <h3>Update User</h3>
    <hr>
    <form method="post" name="createUser" action="<?php echo base_url().'index.php/Snews/editSnews/'.$item['id'];?>">
    <div class="row">
      
      <div class="col-md-6">
        <div class="form-group">
          <label>Snews</label>
          <textarea rows = "5" cols = "100" name = "snews" class="form-control" >
            <?php echo set_value('snews',$item['snews']); ?>
          </textarea>
          <?php echo form_error('snews'); ?>
        </div>
        
        <div class="form-group">
          <button class="btn btn-primary">Update</button>
      <a href="<?php echo base_url().'index.php/Manage/scrollingNews'; ?>" class="btn btn-secondary btn">Cancel</a>
        </div>

      </div>
      
    
    </div>
    </form>

  </div>

</body>
</html>