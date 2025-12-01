<<<<<<< HEAD
<?php
    require_once('lib/functions.php');
    $db= new class_functions();

$search = "";
  if(isset($_POST['search_keyword']))	
	{
	  $search=$_POST['search_keyword'];
		$_SESSION['search_keyword'] = $search;
	}




  if(isset($_GET['search_keyword']))	
	{
	  $search=$_GET['search_keyword'];
		$_SESSION['search_keyword'] = $search;
	}


  $search=$_SESSION['search_keyword'];
  
 $search_data=array();
 $search_data=$db->search_bar($search);
 
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" href="css/bootstrap-reboot.css">
<link rel="stylesheet" href="css/bootstrap-grid.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-utilities.css">

<script type="text/javaScript" src="js/bootstrap.bundle.js"></script>
<script type="text/javaScript" src="js/bootstrap.js"></script>
<script type="text/javaScript" src="js/bootstrap.esm.js"></script>


<style>
  <style>
.card-img-top
{
    height: 260px;
    width:370px;
    padding-right: 20px;
    margin-left:10px;
}
.card
{
    height:500px ;
    width:300px;
    margin:10px;
    border:2px solid grey;
  }
  .search_bar
  {
    margin-left:50px;
  
  }

  
.menu1:hover
  {
    color:#ff99ff !important;
    text-decoration:underline ;
    border-radius:15px;
    font-family: -apple-system, "Helvetica Neue", sans-serif, "Mier Book";
    
  }

  .btn:hover
  {
    background-color: #000066 !important;
   
  }
  body {
    background: #e8cbc0;
    background: -webkit-linear-gradient(to right, #e8cbc0, #636fa4);
    background: linear-gradient(to right, #e8cbc0, #636fa4);
    min-height: 100vh;
}
.cardC:hover
{
box-shadow:0px 0px 15px 3px black;
}  

</style> 
  </style>



</head>
<body >


<?php  
 require_once('header1.php');
 ?>

<center>
<?php
  $search_data=array();
      $search_data=$db->search_bar($search);

      if(!empty($search_data))
                        {

                            $counter=0;
                            foreach($search_data as $record)
                            {
                              $res_id=$search_data[$counter]['id'];
                              $res_categories=$search_data[$counter]['categories'];
                              $res_product_image= $search_data[$counter]['product_image'];
                              $res_product_title=$search_data[$counter]['product_title'];
                              $res_product_discription=$search_data[$counter]['product_discription'];
                              $res_search_keyword=$search_data[$counter]['search_keyword'];
                              $res_product_price=$search_data[$counter]['product_price'];
                              $res_product_mrp=$search_data[$counter]['product_mrp'];
                              $res_product_offer=$search_data[$counter]['product_offer'];
                              $res_product_link= $search_data[$counter]['product_link'];
                              $res_brand_logo=$search_data[$counter]['brand_logo'];
                              $res_current_date=$search_data[$counter]['current_date'];
                              $res_current_time=$search_data[$counter]['current_time'];
 ?>
              
 
    
    <div class="cardC" style="border-left: 2px solid grey;border-radius: 7px; width:290px; height:580px; text-align:left; background-color:#FFFFFF; border:2px solid #999; display:inline-table; padding:15px; margin:5px;">
    
      <img src="images/<?php echo $res_product_image; ?>" class="card-img-top" alt="..." style="width:100%; height:270px;">
      <div class="card-body">
        <h5 class="card-title"><?php echo $res_product_title; ?></h5>
        <p class="card-text"><?php echo $res_product_discription; ?></p>
        <strong>Rs.<?php echo $res_product_price; ?></strong>
        <br />M.R.P.: <s><?php echo $res_product_mrp; ?><br />
       <strong> </s> <?php echo $res_product_offer; ?>% OFF</p></strong>
        <a href="<?php echo $res_product_link; ?>" class="btn btn-primary" target="_blank">Click here to buy</a>
        <?php 
        if($res_brand_logo=="meesho")
        {
          ?>
          <img src="images/meesho_logo.jpg" style="width:60px; margin-left:5px;" />

         <?php
        }
        else if($res_brand_logo=="amazon")
        {
          ?>
          <img src="images/amazon_logo.png" style="width:80px; margin-left:5px;"/>

         <?php
        }
        else if($res_brand_logo=="flipkart")
        {
          ?>
          <img src="images/flipkart1_logo.png" style="width:80px; margin-left:5px;"/>

         <?php
        }
        else if($res_brand_logo=="ajio")
        {
          ?>
          <img src="images/ajio_logo.jpg" style="width:80px; margin-left:5px;"/>

         <?php
        }
        else if($res_brand_logo=="myntra")
        {
          ?>
          <img src="images/myntra1_logo.png" style="width:80px; margin-left:5px;"/>

         <?php
        }
        ?>
        
          </div>
    </div>
  

    <?php
                              
    $counter++;
                      }
                        }

                        else
                        {
                         echo"Record not found";
                        }
    ?>
</center>

</body>
=======
<?php
    require_once('lib/functions.php');
    $db= new class_functions();

$search = "";
  if(isset($_POST['search_keyword']))	
	{
	  $search=$_POST['search_keyword'];
		$_SESSION['search_keyword'] = $search;
	}




  if(isset($_GET['search_keyword']))	
	{
	  $search=$_GET['search_keyword'];
		$_SESSION['search_keyword'] = $search;
	}


  $search=$_SESSION['search_keyword'];
  
 $search_data=array();
 $search_data=$db->search_bar($search);
 
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" href="css/bootstrap-reboot.css">
<link rel="stylesheet" href="css/bootstrap-grid.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-utilities.css">

<script type="text/javaScript" src="js/bootstrap.bundle.js"></script>
<script type="text/javaScript" src="js/bootstrap.js"></script>
<script type="text/javaScript" src="js/bootstrap.esm.js"></script>


<style>
  <style>
.card-img-top
{
    height: 260px;
    width:370px;
    padding-right: 20px;
    margin-left:10px;
}
.card
{
    height:500px ;
    width:300px;
    margin:10px;
    border:2px solid grey;
  }
  .search_bar
  {
    margin-left:50px;
  
  }

  
.menu1:hover
  {
    color:#ff99ff !important;
    text-decoration:underline ;
    border-radius:15px;
    font-family: -apple-system, "Helvetica Neue", sans-serif, "Mier Book";
    
  }

  .btn:hover
  {
    background-color: #000066 !important;
   
  }
  body {
    background: #e8cbc0;
    background: -webkit-linear-gradient(to right, #e8cbc0, #636fa4);
    background: linear-gradient(to right, #e8cbc0, #636fa4);
    min-height: 100vh;
}
.cardC:hover
{
box-shadow:0px 0px 15px 3px black;
}  

</style> 
  </style>



</head>
<body >


<?php  
 require_once('header1.php');
 ?>

<center>
<?php
  $search_data=array();
      $search_data=$db->search_bar($search);

      if(!empty($search_data))
                        {

                            $counter=0;
                            foreach($search_data as $record)
                            {
                              $res_id=$search_data[$counter]['id'];
                              $res_categories=$search_data[$counter]['categories'];
                              $res_product_image= $search_data[$counter]['product_image'];
                              $res_product_title=$search_data[$counter]['product_title'];
                              $res_product_discription=$search_data[$counter]['product_discription'];
                              $res_search_keyword=$search_data[$counter]['search_keyword'];
                              $res_product_price=$search_data[$counter]['product_price'];
                              $res_product_mrp=$search_data[$counter]['product_mrp'];
                              $res_product_offer=$search_data[$counter]['product_offer'];
                              $res_product_link= $search_data[$counter]['product_link'];
                              $res_brand_logo=$search_data[$counter]['brand_logo'];
                              $res_current_date=$search_data[$counter]['current_date'];
                              $res_current_time=$search_data[$counter]['current_time'];
 ?>
              
 
    
    <div class="cardC" style="border-left: 2px solid grey;border-radius: 7px; width:290px; height:580px; text-align:left; background-color:#FFFFFF; border:2px solid #999; display:inline-table; padding:15px; margin:5px;">
    
      <img src="images/<?php echo $res_product_image; ?>" class="card-img-top" alt="..." style="width:100%; height:270px;">
      <div class="card-body">
        <h5 class="card-title"><?php echo $res_product_title; ?></h5>
        <p class="card-text"><?php echo $res_product_discription; ?></p>
        <strong>Rs.<?php echo $res_product_price; ?></strong>
        <br />M.R.P.: <s><?php echo $res_product_mrp; ?><br />
       <strong> </s> <?php echo $res_product_offer; ?>% OFF</p></strong>
        <a href="<?php echo $res_product_link; ?>" class="btn btn-primary" target="_blank">Click here to buy</a>
        <?php 
        if($res_brand_logo=="meesho")
        {
          ?>
          <img src="images/meesho_logo.jpg" style="width:60px; margin-left:5px;" />

         <?php
        }
        else if($res_brand_logo=="amazon")
        {
          ?>
          <img src="images/amazon_logo.png" style="width:80px; margin-left:5px;"/>

         <?php
        }
        else if($res_brand_logo=="flipkart")
        {
          ?>
          <img src="images/flipkart1_logo.png" style="width:80px; margin-left:5px;"/>

         <?php
        }
        else if($res_brand_logo=="ajio")
        {
          ?>
          <img src="images/ajio_logo.jpg" style="width:80px; margin-left:5px;"/>

         <?php
        }
        else if($res_brand_logo=="myntra")
        {
          ?>
          <img src="images/myntra1_logo.png" style="width:80px; margin-left:5px;"/>

         <?php
        }
        ?>
        
          </div>
    </div>
  

    <?php
                              
    $counter++;
                      }
                        }

                        else
                        {
                         echo"Record not found";
                        }
    ?>
</center>

</body>
>>>>>>> 8185f01edb776667a1a1507b3f7a424cb70015eb
</html>