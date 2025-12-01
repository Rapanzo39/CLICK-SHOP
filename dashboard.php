<<<<<<< HEAD
<?php
    require_once('lib/functions.php');
    $db= new class_functions();

    
    
    
?>



<html>
<head>
     <title>Dashboard</title>
	 <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" href="css/bootstrap-reboot.css">
        <link rel="stylesheet" href="css/bootstrap-grid.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-utilities.css">

        <script type="text/javaScript" src="js/bootstrap.bundle.js"></script>
        <script type="text/javaScript" src="js/bootstrap.js"></script>
        <script type="text/javaScript" src="js/bootstrap.esm.js"></script>
     <style>
		
		
		</style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding:0px;">
        <div class="container-fluid" style="background-color:#000066; background-size: 100%;">
          <a class="navbar-brand" href="#" ></a>
          <img src="images/logo.png" alt="Logo" width="90" height="90" class="d-inline-block align-text-top" style="border-radius:20px; padding:2px"/>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          

            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
               
              <li class="nav-item">
                <a class="nav-link active  menu1" aria-current="page" href="admin.php" style="color:#FFFFFF ;font-family:  Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px; margin-left:350px;"> Admin Login </a>
              </li>
              
              
             <li class="nav-item">
                <a class="nav-link menu1" href="subscribe_report.php"  style="color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size: 20px;  margin-left:20px; ">Subscribe Report</a>
              </li>

              <li class="nav-item">
                <a class="nav-link menu1" href="product.php"  style="color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size: 20px;  margin-left:20px; ">Add Product</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link menu1" href="product_report.php"  style="color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px; margin-left:20px;">product Report</a>
              </li>

              </ul>
           </div>
          </div>
        
      </nav>


<center><h1 style="color:#4d004d; font-size:30px; margin-top:20px; " class="page_heading ">Dashboard</h1></center>
<div class="form_container" style="margin-top:40px; ">
<?php 
    echo $_SESSION ['login_username'];
?>
<a href="admin_login.php?logout">Logout</a>

	</div>
</body>
=======
<?php
    require_once('lib/functions.php');
    $db= new class_functions();

    
    
    
?>



<html>
<head>
     <title>Dashboard</title>
	 <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" href="css/bootstrap-reboot.css">
        <link rel="stylesheet" href="css/bootstrap-grid.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-utilities.css">

        <script type="text/javaScript" src="js/bootstrap.bundle.js"></script>
        <script type="text/javaScript" src="js/bootstrap.js"></script>
        <script type="text/javaScript" src="js/bootstrap.esm.js"></script>
     <style>
		
		
		</style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding:0px;">
        <div class="container-fluid" style="background-color:#000066; background-size: 100%;">
          <a class="navbar-brand" href="#" ></a>
          <img src="images/logo.png" alt="Logo" width="90" height="90" class="d-inline-block align-text-top" style="border-radius:20px; padding:2px"/>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          

            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
               
              <li class="nav-item">
                <a class="nav-link active  menu1" aria-current="page" href="admin.php" style="color:#FFFFFF ;font-family:  Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px; margin-left:350px;"> Admin Login </a>
              </li>
              
              
             <li class="nav-item">
                <a class="nav-link menu1" href="subscribe_report.php"  style="color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size: 20px;  margin-left:20px; ">Subscribe Report</a>
              </li>

              <li class="nav-item">
                <a class="nav-link menu1" href="product.php"  style="color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size: 20px;  margin-left:20px; ">Add Product</a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link menu1" href="product_report.php"  style="color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px; margin-left:20px;">product Report</a>
              </li>

              </ul>
           </div>
          </div>
        
      </nav>


<center><h1 style="color:#4d004d; font-size:30px; margin-top:20px; " class="page_heading ">Dashboard</h1></center>
<div class="form_container" style="margin-top:40px; ">
<?php 
    echo $_SESSION ['login_username'];
?>
<a href="admin_login.php?logout">Logout</a>

	</div>
</body>
>>>>>>> 8185f01edb776667a1a1507b3f7a424cb70015eb
</html>