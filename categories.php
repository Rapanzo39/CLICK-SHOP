<<<<<<< HEAD

<?php
    require_once('lib/functions.php');
    $db= new class_functions();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Categories</title>
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.css">

    <script type="text/JavaScript" src="js/bootstrap.bundle.js"></script>
    <script type="text/JavaScript" src="js/bootstrap.js"></script>
    <script type="text/JavaScript" src="js/bootstrap.esm.js"></script>

<style>
.card-img-top
{
    height:260px;
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
.share_btn
{
  position:absolute;
  margin-left:230px;
  z-index:15000000;
}
</style>  
<!--@media only screen and (max-width:800px){
.card
{
width:50%;
border:2px solid black ;
}
}
.card-img-top
{
   height:10%;
    width:5%;
    padding:0px;
    padding-right:10px;
    margin-right:10px ;
}-->

</head>
<body>

<?php  
 require_once('header1.php');
 ?>
      

<div class="card-group">
<center>
<?php
  $card_data=array();
      $card_data=$db->get_product_data();

      if(!empty($card_data))
                        {

                            $counter=0;
                            foreach($card_data as $record)
                            {
                                $res_id=$card_data[$counter]['id'];
                                $res_categories=$card_data[$counter]['categories'];
                               $res_product_image= $card_data[$counter]['product_image'];
                                $res_product_title=$card_data[$counter]['product_title'];
                                $res_product_discription=$card_data[$counter]['product_discription'];
                                $res_product_price=$card_data[$counter]['product_price'];
                                $res_product_mrp=$card_data[$counter]['product_mrp'];
                                $res_product_offer=$card_data[$counter]['product_offer'];
                               $res_product_link= $card_data[$counter]['product_link'];
                                $res_brand_logo=$card_data[$counter]['brand_logo'];
                                $res_current_date=$card_data[$counter]['current_date'];
                                $res_current_time=$card_data[$counter]['current_time'];
 ?>
              


    <div class="" style="border-left: 2px solid grey;border-radius: 7px;  width:290px; text-align:left; height:580px; background-color:#FFFFFF; border:2px solid #999; display:inline-table; padding:15px; margin:5px;">

<a href="whatsapp://send?text= <?php echo $res_product_title." "; echo $res_product_link; ?>">
    <img src="images/share2_btn.png" alt="share button"  style="width:30px; height:30px; border-radius:10px; float:right;" class="share_btn"></a>

      <img src="images/<?php echo $res_product_image; ?>" class="card-img-top" alt="..." style="width:100%; height:270px;">
      <div class="card-body">
        <h5 class="card-title"><?php echo $res_product_title; ?></h5>
        <p class="card-text"><?php echo $res_product_discription; ?></p>
        <strong>Rs. <?php echo $res_product_price; ?></strong>
       <br />M.R.P. : <s><?php echo $res_product_mrp; ?><br />
      <strong> </s> <?php echo $res_product_offer; ?>% OFF</p></strong>
        <a href="<?php echo $res_product_link; ?>" class="btn btn-primary">Click here to buy</a>

        <?php
        if($res_brand_logo=="meesho")
        {
          ?>
          <img src="images/meesho_logo.jpg" style="width:70px; height:30px;">

        <?php
        }
        ?>

        <?php
        if($res_brand_logo=="myntra")
        {
          ?>
          <img src="images/myntra1_logo.png" style="width:75px; height:25px;">

        <?php
        }
        ?>

        <?php
        if($res_brand_logo=="flipkart")
        {
          ?>
          <img src="images/flipkart1_logo.png" style="width:75px; height:30px;">

        <?php
        }
        ?>
      <?php
        if($res_brand_logo=="amazon")
        {
          ?>
          <img src="images/amazon_logo.png" style="width:80px; height:35px;">

        <?php
        }
        ?>

        <?php
        if($res_brand_logo=="ajio")
        {
          ?>
          <img src="images/ajio_logo.jpg" style="width:75px; height:35px;">

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
</html>





<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fparse.com" target="_blank" rel="noopener">
    <img class="YOUR_FB_CSS_STYLING_CLASS" src="img/YOUR_FB_ICON_IMAGE.png" width="22px" height="22px" alt="Share on Facebook">
=======

<?php
    require_once('lib/functions.php');
    $db= new class_functions();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Categories</title>
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.css">

    <script type="text/JavaScript" src="js/bootstrap.bundle.js"></script>
    <script type="text/JavaScript" src="js/bootstrap.js"></script>
    <script type="text/JavaScript" src="js/bootstrap.esm.js"></script>

<style>
.card-img-top
{
    height:260px;
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
.share_btn
{
  position:absolute;
  margin-left:230px;
  z-index:15000000;
}
</style>  
<!--@media only screen and (max-width:800px){
.card
{
width:50%;
border:2px solid black ;
}
}
.card-img-top
{
   height:10%;
    width:5%;
    padding:0px;
    padding-right:10px;
    margin-right:10px ;
}-->

</head>
<body>

<?php  
 require_once('header1.php');
 ?>
      

<div class="card-group">
<center>
<?php
  $card_data=array();
      $card_data=$db->get_product_data();

      if(!empty($card_data))
                        {

                            $counter=0;
                            foreach($card_data as $record)
                            {
                                $res_id=$card_data[$counter]['id'];
                                $res_categories=$card_data[$counter]['categories'];
                               $res_product_image= $card_data[$counter]['product_image'];
                                $res_product_title=$card_data[$counter]['product_title'];
                                $res_product_discription=$card_data[$counter]['product_discription'];
                                $res_product_price=$card_data[$counter]['product_price'];
                                $res_product_mrp=$card_data[$counter]['product_mrp'];
                                $res_product_offer=$card_data[$counter]['product_offer'];
                               $res_product_link= $card_data[$counter]['product_link'];
                                $res_brand_logo=$card_data[$counter]['brand_logo'];
                                $res_current_date=$card_data[$counter]['current_date'];
                                $res_current_time=$card_data[$counter]['current_time'];
 ?>
              


    <div class="" style="border-left: 2px solid grey;border-radius: 7px;  width:290px; text-align:left; height:580px; background-color:#FFFFFF; border:2px solid #999; display:inline-table; padding:15px; margin:5px;">

<a href="whatsapp://send?text= <?php echo $res_product_title." "; echo $res_product_link; ?>">
    <img src="images/share2_btn.png" alt="share button"  style="width:30px; height:30px; border-radius:10px; float:right;" class="share_btn"></a>

      <img src="images/<?php echo $res_product_image; ?>" class="card-img-top" alt="..." style="width:100%; height:270px;">
      <div class="card-body">
        <h5 class="card-title"><?php echo $res_product_title; ?></h5>
        <p class="card-text"><?php echo $res_product_discription; ?></p>
        <strong>Rs. <?php echo $res_product_price; ?></strong>
       <br />M.R.P. : <s><?php echo $res_product_mrp; ?><br />
      <strong> </s> <?php echo $res_product_offer; ?>% OFF</p></strong>
        <a href="<?php echo $res_product_link; ?>" class="btn btn-primary">Click here to buy</a>

        <?php
        if($res_brand_logo=="meesho")
        {
          ?>
          <img src="images/meesho_logo.jpg" style="width:70px; height:30px;">

        <?php
        }
        ?>

        <?php
        if($res_brand_logo=="myntra")
        {
          ?>
          <img src="images/myntra1_logo.png" style="width:75px; height:25px;">

        <?php
        }
        ?>

        <?php
        if($res_brand_logo=="flipkart")
        {
          ?>
          <img src="images/flipkart1_logo.png" style="width:75px; height:30px;">

        <?php
        }
        ?>
      <?php
        if($res_brand_logo=="amazon")
        {
          ?>
          <img src="images/amazon_logo.png" style="width:80px; height:35px;">

        <?php
        }
        ?>

        <?php
        if($res_brand_logo=="ajio")
        {
          ?>
          <img src="images/ajio_logo.jpg" style="width:75px; height:35px;">

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
</html>





<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fparse.com" target="_blank" rel="noopener">
    <img class="YOUR_FB_CSS_STYLING_CLASS" src="img/YOUR_FB_ICON_IMAGE.png" width="22px" height="22px" alt="Share on Facebook">
>>>>>>> 8185f01edb776667a1a1507b3f7a424cb70015eb
</a>