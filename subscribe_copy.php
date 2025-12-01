<<<<<<< HEAD
<?php

require_once('lib/functions.php');
$db = new class_functions();


if(isset($_POST['submit_btn']))
{
 $var_email_id = $_POST['email_id'];
 $var_username = $_POST['username'];
 $var_mobile_number = $_POST['mobile_number'];
 $var_system_captcha = $_POST['system_captcha'];

 $var_user_captcha = $_POST['user_captcha'];

 if($var_system_captcha==$var_user_captcha)
{

$db->subscribe_insert($var_email_id,$var_username,$var_mobile_number);

         if($var_email_id=="" && $var_username=="" && $var_mobile_number=="" )
				 {
					echo " Enter Valid Details ";
				 }
				 else
				 {
							$_SESSION ['subscribe_user']=$var_username;
							header("location:home1.php");
				 }
        
        }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Subscribe</title>

    <meta name="keywords" content="click and shop, shopping website, amazon, flipkart, ajio, myntra, meesho"/>
    <meta name="description" content="To save people's money and time click and shop website belive in offers and discounts. You will find everything you need conveniently in one place. We have combined offers of Amazon, Flipkart, Ajio, Myntra, Meesho. "/>
    <meta name="robots" content="index"><meta name="viewport" content="width=device-width, initial-scale=1"/>

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
  background-image:url('images/back_sub7.png'); 
  background-size:100%;
  background-repeat:no-repeat;
}
.form_login
{
    margin-right:950px;
}
.sub_class
{
  margin-top:0px;
    font-size: 30px;
    text-decoration: underline ;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

}
.skip
{
margin-left:5px;
}
.skip:hover
{
  text-decoration:underline;
  color:blue;
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

<div style="background-image:url('images/back_login15.jpg'); height:650px; background-size:100%; background-repeat:no-repeat; margin-left:150px; margin-right:150px; padding:20px; margin-top:30px; box-shadow:1px 7px 20px 5px #4d001f; background-color:pink;">
   <strong><label style="float:right; margin-top:500px; font-size:25px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:#39004d; ">It's Time To Shopping....
    </label></strong>

    <center><form class="form_login" action="subscribe_copy.php" method="POST">

     <div style="border:0px solid black ; margin-top:-10px; margin-left:10px; margin-bottom:500px; background-color:#b3ccff; border-radius:10px; width:350px; box-shadow:0px 0px 10px 4px #ccccff;">

         <div class="mb-3" style="width:80%; margin-top:10px;">
          <lable class="sub_class">Subscribe</lable>
          <div id="emailHelp" class="form-text" style="float:left;">Get updates from a website when you subscribe to it.</div> <br />
          <br />
          <br />  

          <label for="exampleInputEmail1" class="form-label" style="float:left;">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com" name="email_id" >
          
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          <label for="exampleInputEmail1" class="form-label" style="float:left;">Full Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-desscribedby="emailHelp" placeholder="Enter Full Name" name="username">
          </div>

        <div class="mb-3" style="width:80%;">
          <label for="exampleInputPassword1" class="form-label" style="float:left;">Mobile No.</label>
          <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Mobile Number" name="mobile_number">
        </div>

        <?php
		  	$random_value = rand(30000,99000)
	      ?>
          <div class="mb-3" style="width:80%;">
          <label for="exampleInputPassword1" class="form-label" style="float:left;">Enter Captcha Code....</label>	      
          <input type="text" class="form-control" name="system_captcha" value="<?php echo $random_value; ?>" readonly />
          <br>
	        <input type="text" class="form-control" name="user_captcha" placeholder="Enter Captcha Code" />
          </div>
          <input type="submit" class="btn btn-primary" value="subscribe" name="submit_btn"/>
        <br />
        <br />

        <div class="skip" style="width:70%;">
        <a href="home1.php"><label>Skip<label></a>
        </div>
        <br />       
        </div>
      </form>
    </center>
    
    
</div>


</body>
</html>




    <!--//Send Whatsapp Message
			$whatsapp_message = "
				💥💥💥💥💥💥💥💥 \n

				*DREAM TECHNOLOGY*

				Dear $var_full_name,
				Thank You For Joining With Us \n

				\n Note:Automatic Software Message".
				"\n💥💥💥💥💥💥💥💥";

				$url =	"http://web.cloudwhatsapp.com/wapp/api/send?apikey=7a7bc6e92e1447d4ac545dac48eebee4&mobile=$var_mobile_number&msg=".urlencode($whatsapp_message);
					echo $response = file_get_contents($url);
					
						//Send Message
			$forwardURL = 'http://sms.bulksmsind.in/sendSMS?'.http_build_query(array(
				'username' => "abc",
				'sendername' => "DRMTCH",
				'smstype' => "TRANS",
				'numbers' => $contact_no,
				'message' => $user_message,
				'apikey' => "1b4a8d6a-5760-40c7-b7eb-e31119e19cad",
			));-->
	





      

   




          



=======
<?php

require_once('lib/functions.php');
$db = new class_functions();


if(isset($_POST['submit_btn']))
{
 $var_email_id = $_POST['email_id'];
 $var_username = $_POST['username'];
 $var_mobile_number = $_POST['mobile_number'];
 $var_system_captcha = $_POST['system_captcha'];

 $var_user_captcha = $_POST['user_captcha'];

 if($var_system_captcha==$var_user_captcha)
{

$db->subscribe_insert($var_email_id,$var_username,$var_mobile_number);

         if($var_email_id=="" && $var_username=="" && $var_mobile_number=="" )
				 {
					echo " Enter Valid Details ";
				 }
				 else
				 {
							$_SESSION ['subscribe_user']=$var_username;
							header("location:home1.php");
				 }
        
        }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Subscribe</title>

    <meta name="keywords" content="click and shop, shopping website, amazon, flipkart, ajio, myntra, meesho"/>
    <meta name="description" content="To save people's money and time click and shop website belive in offers and discounts. You will find everything you need conveniently in one place. We have combined offers of Amazon, Flipkart, Ajio, Myntra, Meesho. "/>
    <meta name="robots" content="index"><meta name="viewport" content="width=device-width, initial-scale=1"/>

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
  background-image:url('images/back_sub7.png'); 
  background-size:100%;
  background-repeat:no-repeat;
}
.form_login
{
    margin-right:950px;
}
.sub_class
{
  margin-top:0px;
    font-size: 30px;
    text-decoration: underline ;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

}
.skip
{
margin-left:5px;
}
.skip:hover
{
  text-decoration:underline;
  color:blue;
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

<div style="background-image:url('images/back_login15.jpg'); height:650px; background-size:100%; background-repeat:no-repeat; margin-left:150px; margin-right:150px; padding:20px; margin-top:30px; box-shadow:1px 7px 20px 5px #4d001f; background-color:pink;">
   <strong><label style="float:right; margin-top:500px; font-size:25px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; color:#39004d; ">It's Time To Shopping....
    </label></strong>

    <center><form class="form_login" action="subscribe_copy.php" method="POST">

     <div style="border:0px solid black ; margin-top:-10px; margin-left:10px; margin-bottom:500px; background-color:#b3ccff; border-radius:10px; width:350px; box-shadow:0px 0px 10px 4px #ccccff;">

         <div class="mb-3" style="width:80%; margin-top:10px;">
          <lable class="sub_class">Subscribe</lable>
          <div id="emailHelp" class="form-text" style="float:left;">Get updates from a website when you subscribe to it.</div> <br />
          <br />
          <br />  

          <label for="exampleInputEmail1" class="form-label" style="float:left;">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="name@example.com" name="email_id" >
          
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          <label for="exampleInputEmail1" class="form-label" style="float:left;">Full Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-desscribedby="emailHelp" placeholder="Enter Full Name" name="username">
          </div>

        <div class="mb-3" style="width:80%;">
          <label for="exampleInputPassword1" class="form-label" style="float:left;">Mobile No.</label>
          <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Mobile Number" name="mobile_number">
        </div>

        <?php
		  	$random_value = rand(30000,99000)
	      ?>
          <div class="mb-3" style="width:80%;">
          <label for="exampleInputPassword1" class="form-label" style="float:left;">Enter Captcha Code....</label>	      
          <input type="text" class="form-control" name="system_captcha" value="<?php echo $random_value; ?>" readonly />
          <br>
	        <input type="text" class="form-control" name="user_captcha" placeholder="Enter Captcha Code" />
          </div>
          <input type="submit" class="btn btn-primary" value="subscribe" name="submit_btn"/>
        <br />
        <br />

        <div class="skip" style="width:70%;">
        <a href="home1.php"><label>Skip<label></a>
        </div>
        <br />       
        </div>
      </form>
    </center>
    
    
</div>


</body>
</html>




    <!--//Send Whatsapp Message
			$whatsapp_message = "
				💥💥💥💥💥💥💥💥 \n

				*DREAM TECHNOLOGY*

				Dear $var_full_name,
				Thank You For Joining With Us \n

				\n Note:Automatic Software Message".
				"\n💥💥💥💥💥💥💥💥";

				$url =	"http://web.cloudwhatsapp.com/wapp/api/send?apikey=7a7bc6e92e1447d4ac545dac48eebee4&mobile=$var_mobile_number&msg=".urlencode($whatsapp_message);
					echo $response = file_get_contents($url);
					
						//Send Message
			$forwardURL = 'http://sms.bulksmsind.in/sendSMS?'.http_build_query(array(
				'username' => "abc",
				'sendername' => "DRMTCH",
				'smstype' => "TRANS",
				'numbers' => $contact_no,
				'message' => $user_message,
				'apikey' => "1b4a8d6a-5760-40c7-b7eb-e31119e19cad",
			));-->
	





      

   




          



>>>>>>> 8185f01edb776667a1a1507b3f7a424cb70015eb
