<<<<<<< HEAD
<?php

    require_once('lib/functions.php');
	$db = new class_functions();

    $edit_id= "";

    if(isset($_GET['edit_id']))
    {
        $edit_id=$_GET['edit_id'];
        $_SESSION['edit_id']=$edit_id;
    }

   $edit_id = $_SESSION['edit_id'];

if(isset($_POST['submit_btn']))
{
	 
  $var_email_id=$_POST['email_id'];
  $var_username=$_POST['username'];
   $var_mobile_number=$_POST['mobile_number'];

	$db->edit_subscribe_record($var_email_id,$var_username,$var_mobile_number,$edit_id);
}


$user_data = array();
$user_data = $db->get_subscribe_data_from_id($edit_id);
	
	if(!empty($user_data))
	{
		                            
                                    $res_id=$user_data['id'];
                                    $res_email_id=$user_data['email_id'];
                                    $res_username= $user_data['username'];
                                    $res_mobile_number=$user_data['mobile_number'];
                                    




                                    
                               
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Subscribe_Edit</title>

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

  <div style="display-inline">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid" style="background-color:#ff9999;">

        <img src="images/logo.png" alt="Logo" width="90" height="90" class="d-inline-block align-text-top" style="border-radius:20px; padding:2px"/>

<i><strong><label class="label" style="font-size:50px; margin-left:500px; font-family:Brush script;">CLICK & SHOP</label></strong></i>

      <!--<img src="images/header5.jpg" alt="Logo" width="100%" height="90" class="d-inline-block align-text-top" style="margin-right:100px ;" /> -->

        <a class="navbar-brand" href="#"></a>
  
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
</ul>
          
      
        </div>
      </div>
    </nav>
    <center><form class="form_login" action="subscribe_edit.php" method="POST">



      
        <div class="mb-3" style="width:50%; margin-top:100px;">
          <lable class="sub_class">Subscribe</lable>
          <div id="emailHelp" class="form-text" style="float:left;">Get updates from a website when you subscribe to it.</div> <br />
          <br />


          <label for="exampleInputEmail1" class="form-label" style="float:left;">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email_id" value="<?php echo  $res_email_id; ?>" />
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>


          <label for="exampleInputEmail1" class="form-label" style="float:left;">User Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-desscribedby="emailHelp"  name="username" value="<?php echo  $res_username; ?>" />
        </div>


        <div class="mb-3" style="width:50%;">
          <label for="exampleInputPassword1" class="form-label" style="float:left;">Mobile No.</label>
          <input type="number" class="form-control" id="exampleInputPassword1"  name="mobile_number" value="<?php echo  $res_mobile_number; ?>" />
        </div>


        <input type="submit" class="btn btn-primary" value="subscribe" name="submit_btn"/>

      </form>
    </center>

    </body>
    </html>



=======
<?php

    require_once('lib/functions.php');
	$db = new class_functions();

    $edit_id= "";

    if(isset($_GET['edit_id']))
    {
        $edit_id=$_GET['edit_id'];
        $_SESSION['edit_id']=$edit_id;
    }

   $edit_id = $_SESSION['edit_id'];

if(isset($_POST['submit_btn']))
{
	 
  $var_email_id=$_POST['email_id'];
  $var_username=$_POST['username'];
   $var_mobile_number=$_POST['mobile_number'];

	$db->edit_subscribe_record($var_email_id,$var_username,$var_mobile_number,$edit_id);
}


$user_data = array();
$user_data = $db->get_subscribe_data_from_id($edit_id);
	
	if(!empty($user_data))
	{
		                            
                                    $res_id=$user_data['id'];
                                    $res_email_id=$user_data['email_id'];
                                    $res_username= $user_data['username'];
                                    $res_mobile_number=$user_data['mobile_number'];
                                    




                                    
                               
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Subscribe_Edit</title>

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

  <div style="display-inline">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid" style="background-color:#ff9999;">

        <img src="images/logo.png" alt="Logo" width="90" height="90" class="d-inline-block align-text-top" style="border-radius:20px; padding:2px"/>

<i><strong><label class="label" style="font-size:50px; margin-left:500px; font-family:Brush script;">CLICK & SHOP</label></strong></i>

      <!--<img src="images/header5.jpg" alt="Logo" width="100%" height="90" class="d-inline-block align-text-top" style="margin-right:100px ;" /> -->

        <a class="navbar-brand" href="#"></a>
  
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
</ul>
          
      
        </div>
      </div>
    </nav>
    <center><form class="form_login" action="subscribe_edit.php" method="POST">



      
        <div class="mb-3" style="width:50%; margin-top:100px;">
          <lable class="sub_class">Subscribe</lable>
          <div id="emailHelp" class="form-text" style="float:left;">Get updates from a website when you subscribe to it.</div> <br />
          <br />


          <label for="exampleInputEmail1" class="form-label" style="float:left;">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email_id" value="<?php echo  $res_email_id; ?>" />
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>


          <label for="exampleInputEmail1" class="form-label" style="float:left;">User Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-desscribedby="emailHelp"  name="username" value="<?php echo  $res_username; ?>" />
        </div>


        <div class="mb-3" style="width:50%;">
          <label for="exampleInputPassword1" class="form-label" style="float:left;">Mobile No.</label>
          <input type="number" class="form-control" id="exampleInputPassword1"  name="mobile_number" value="<?php echo  $res_mobile_number; ?>" />
        </div>


        <input type="submit" class="btn btn-primary" value="subscribe" name="submit_btn"/>

      </form>
    </center>

    </body>
    </html>



>>>>>>> 8185f01edb776667a1a1507b3f7a424cb70015eb
      