<<<<<<< HEAD
<?php
    require_once('lib/functions.php');
    $db= new class_functions();

    if(isset($_GET['Logout']))
    {
       unset($_SESSION ['login_username']);

    }

    if(isset($_POST['submit_btn']))
    {
     $var_password = $_POST['password'];
     $var_username = $_POST['username'];
    
    $db_password=$db->get_admin_password($var_username);

    if($db_password=="")
				 {
					echo "This admin is not registerd. Check username.";
				 }
				 else
				 {
						if($var_password==$db_password)
						{
							$_SESSION ['login_username']=$var_username;
							header("location:product.php");
						}
						else
						{
                            echo "Incorrect password";
						}

				 }


    }
    
    
?>



<html>
<head>
     <title>Admin Login</title>
	 <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" href="css/bootstrap-reboot.css">
        <link rel="stylesheet" href="css/bootstrap-grid.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-utilities.css">

        <script type="text/javaScript" src="js/bootstrap.bundle.js"></script>
        <script type="text/javaScript" src="js/bootstrap.js"></script>
        <script type="text/javaScript" src="js/bootstrap.esm.js"></script>
     <style>
		body
    {
      background-color:black;
    }
		
		</style>
</head>
<body>


<div class="admin">
<center><h1 style="color:#FFFFFF; font-size:30px; margin-top:20px;  " class="page_heading ">Admin Login</h1></center>
<div class="form_container" style="margin-top:40px; ">
<form action="admin_login.php" method="POST">

<label>Username</label>
<input type="text" class="input_box" name="username" placeholder="Enter username" />
<br />

<label>Password </label>
<input type ="number"  class="input_box" name="password" placeholder="Enter Password" />
<br />
<input type="submit" class="btn1"name="submit_btn" value= "Login" />
  </div>
	</form>
	</div>
</body>
</html>
=======
<?php
    require_once('lib/functions.php');
    $db= new class_functions();

    if(isset($_GET['Logout']))
    {
       unset($_SESSION ['login_username']);

    }

    if(isset($_POST['submit_btn']))
    {
     $var_password = $_POST['password'];
     $var_username = $_POST['username'];
    
    $db_password=$db->get_admin_password($var_username);

    if($db_password=="")
				 {
					echo "This admin is not registerd. Check username.";
				 }
				 else
				 {
						if($var_password==$db_password)
						{
							$_SESSION ['login_username']=$var_username;
							header("location:product.php");
						}
						else
						{
                            echo "Incorrect password";
						}

				 }


    }
    
    
?>



<html>
<head>
     <title>Admin Login</title>
	 <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" href="css/bootstrap-reboot.css">
        <link rel="stylesheet" href="css/bootstrap-grid.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-utilities.css">

        <script type="text/javaScript" src="js/bootstrap.bundle.js"></script>
        <script type="text/javaScript" src="js/bootstrap.js"></script>
        <script type="text/javaScript" src="js/bootstrap.esm.js"></script>
     <style>
		body
    {
      background-color:black;
    }
		
		</style>
</head>
<body>


<div class="admin">
<center><h1 style="color:#FFFFFF; font-size:30px; margin-top:20px;  " class="page_heading ">Admin Login</h1></center>
<div class="form_container" style="margin-top:40px; ">
<form action="admin_login.php" method="POST">

<label>Username</label>
<input type="text" class="input_box" name="username" placeholder="Enter username" />
<br />

<label>Password </label>
<input type ="number"  class="input_box" name="password" placeholder="Enter Password" />
<br />
<input type="submit" class="btn1"name="submit_btn" value= "Login" />
  </div>
	</form>
	</div>
</body>
</html>
>>>>>>> 8185f01edb776667a1a1507b3f7a424cb70015eb
	  