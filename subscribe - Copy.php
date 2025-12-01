<<<<<<< HEAD
 <?php

require_once('lib/functions.php');
$db = new class_functions();



if(isset($_POST['submit_btn']))
{
 $var_email_id = $_POST['email_id'];
 $var_username = $_POST['username'];
 $var_mobile_number = $_POST['mobile_number'];


$db->subscribe_insert($var_email_id,$var_username ,$var_mobile_number);

         if($var_email_id=="" && $var_username=="" && $var_mobile_number=="" )
				 {
					echo " Enter Valid Details ";
				 }
				 else
				 {
						
							$_SESSION ['subscribe_user']=$var_username;
							header("location:home.php");
						

				 }
}

?>









<!DOCTYPE html>
<html lang="en">
<head>
    <title>Subscribe</title>

    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.css">

    <script type="text/JavaScript" src="js/bootstrap.bundle.js"></script>
    <script type="text/JavaScript" src="js/bootstrap.js"></script>
    <script type="text/JavaScript" src="js/bootstrap.esm.js"></script>

    <style>
body
{
background-image: url('images/back_login13.jpg');
background-size: 80%;
}
.form_login
{
    margin-right:950px;
}
.sub_class
{
    font-size: 35px;
    text-decoration: underline ;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

}

@media only screen and (max-width:800px){
  body{
    background-size: 300%;
    width:100%;
    height:100%;
    background-repeat: no-repeat;
  }
  .form_login
{
    margin-right:15px;
}
.container-fluid
  {
    height:90px;
  }
  .label
  {
    font-size:10px;
     margin-left:50px; 
     font-family:Brush script;

  }
}
        </style>
</head>
<body >


<!--<div>
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding:0px;">
        <div class="container-fluid" style="background-color:#000066;"; background-size:100%;>
          <a class="navbar-brand" href="#" ></a>

          <img src="images/logo.png" alt="Logo" width="90" height="90" class="d-inline-block align-text-top" style="border-radius:20px; padding:2px ; margin-right:1500px; !important;"/>
        

          <lable style="margin-right:500px;" >click shop </lable>


</div>
</nav>
</div>

  
       <img src="images/logo.png" alt="Logo" width="90" height="90" class="d-inline-block align-text-top" style="border-radius:20px; padding:0px"/>-->

<div style="background-image: url('images/back_login13.jpg');">

    <center><form class="form_login" action="Subscribe.php" method="POST">



      
        <div class="mb-3" style="width:50%; margin-top:100px;">
          <lable class="sub_class">Subscribe</lable>
          <div id="emailHelp" class="form-text" style="float:left;">Get updates from a website when you subscribe to it.</div> <br />
          <br />
          <label for="exampleInputEmail1" class="form-label" style="float:left;">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email-ID" name="email_id" >
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

          <label for="exampleInputEmail1" class="form-label" style="float:left;">Full Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-desscribedby="emailHelp" placeholder="Enter Full Name" name="username">
        </div>
        <div class="mb-3" style="width:50%;">
          <label for="exampleInputPassword1" class="form-label" style="float:left;">Mobile No.</label>
          <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Mobile Number" name="mobile_number">
        </div>
        <input type="submit" class="btn btn-primary" value="subscribe" name="submit_btn" />

      </form>
    </center>
</div>

    </body>
=======
 <?php

require_once('lib/functions.php');
$db = new class_functions();



if(isset($_POST['submit_btn']))
{
 $var_email_id = $_POST['email_id'];
 $var_username = $_POST['username'];
 $var_mobile_number = $_POST['mobile_number'];


$db->subscribe_insert($var_email_id,$var_username ,$var_mobile_number);

         if($var_email_id=="" && $var_username=="" && $var_mobile_number=="" )
				 {
					echo " Enter Valid Details ";
				 }
				 else
				 {
						
							$_SESSION ['subscribe_user']=$var_username;
							header("location:home.php");
						

				 }
}

?>









<!DOCTYPE html>
<html lang="en">
<head>
    <title>Subscribe</title>

    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.css">

    <script type="text/JavaScript" src="js/bootstrap.bundle.js"></script>
    <script type="text/JavaScript" src="js/bootstrap.js"></script>
    <script type="text/JavaScript" src="js/bootstrap.esm.js"></script>

    <style>
body
{
background-image: url('images/back_login13.jpg');
background-size: 80%;
}
.form_login
{
    margin-right:950px;
}
.sub_class
{
    font-size: 35px;
    text-decoration: underline ;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

}

@media only screen and (max-width:800px){
  body{
    background-size: 300%;
    width:100%;
    height:100%;
    background-repeat: no-repeat;
  }
  .form_login
{
    margin-right:15px;
}
.container-fluid
  {
    height:90px;
  }
  .label
  {
    font-size:10px;
     margin-left:50px; 
     font-family:Brush script;

  }
}
        </style>
</head>
<body >


<!--<div>
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding:0px;">
        <div class="container-fluid" style="background-color:#000066;"; background-size:100%;>
          <a class="navbar-brand" href="#" ></a>

          <img src="images/logo.png" alt="Logo" width="90" height="90" class="d-inline-block align-text-top" style="border-radius:20px; padding:2px ; margin-right:1500px; !important;"/>
        

          <lable style="margin-right:500px;" >click shop </lable>


</div>
</nav>
</div>

  
       <img src="images/logo.png" alt="Logo" width="90" height="90" class="d-inline-block align-text-top" style="border-radius:20px; padding:0px"/>-->

<div style="background-image: url('images/back_login13.jpg');">

    <center><form class="form_login" action="Subscribe.php" method="POST">



      
        <div class="mb-3" style="width:50%; margin-top:100px;">
          <lable class="sub_class">Subscribe</lable>
          <div id="emailHelp" class="form-text" style="float:left;">Get updates from a website when you subscribe to it.</div> <br />
          <br />
          <label for="exampleInputEmail1" class="form-label" style="float:left;">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email-ID" name="email_id" >
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

          <label for="exampleInputEmail1" class="form-label" style="float:left;">Full Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-desscribedby="emailHelp" placeholder="Enter Full Name" name="username">
        </div>
        <div class="mb-3" style="width:50%;">
          <label for="exampleInputPassword1" class="form-label" style="float:left;">Mobile No.</label>
          <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Mobile Number" name="mobile_number">
        </div>
        <input type="submit" class="btn btn-primary" value="subscribe" name="submit_btn" />

      </form>
    </center>
</div>

    </body>
>>>>>>> 8185f01edb776667a1a1507b3f7a424cb70015eb
    </html>