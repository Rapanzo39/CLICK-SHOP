<<<<<<< HEAD
<?php
    require_once('lib/functions.php');
    $db= new class_functions();  
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title> Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" href="css/bootstrap-reboot.css">
<link rel="stylesheet" href="css/bootstrap-grid.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-utilities.css">

<script type="text/javaScript" src="js/bootstrap.bundle.js"></script>
<script type="text/javaScript" src="js/bootstrap.js"></script>
<script type="text/javaScript" src="js/bootstrap.esm.js"></script>

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
    background: #e8cbc0;
    background: -webkit-linear-gradient(to right, #e8cbc0, #636fa4);
    background: linear-gradient(to right, #e8cbc0, #636fa4);
    min-height: 100vh;   
  
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
  body 
  {
     background-image:url('images/back_sub2.jpg');
     background-size:90%;
}
   .card_group
   {
     background-color:grey;
   }
  
</style>
</head>
<body>
 <?php  
 require_once('header.php');
 ?>
    <center>
    <div style="display: inline-table; width:100px; color:white; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
    <a href="search.php?search_keyword=women">
      <img src="images/images/women1.jpg" class="img-thumbnail" alt="..."
      style="border:0.5px solid rgb(184, 182, 182) ;
      border-radius:70px;
      height:70px;
      width:70px;
      margin-top:0px;" ></a>
      Women 
   </div> 


   <div style="display: inline-table; width:100px; color:white; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
   <a href="search.php?search_keyword=kau">
     <img src="images/images/men1.jpg" class="img-thumbnail" alt="..." 
     style="border:0px solid rgb(21, 20, 20) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px; padding:0px;"></a>
     Men
   </div>


    <a href="search.php?search_keyword=kids">
    <div style="display: inline-table; width:100px; color:white; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
      <img src="images/kids4.webp" class="img-thumbnail" alt="..." 
      style="border:0px solid rgb(21, 20, 20) ;
      border-radius:70px;
      height:70px;
      width:70px;
      margin-top:0px;
      padding:0px;"></a>
     Kids
     </div>



  <a href="search.php?search_keyword=jewellery">
<div style="display: inline-table; width:100px;  color:white; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
    <img src="images/jew2.webp" class="img-thumbnail" alt="..." 
    style="border:0px solid rgb(21, 20, 20) ;
    border-radius:70px;
    height:70px;
    width:70px;
    margin-top:0px;
    padding:0px;"></a>

    Jewellery
</div>


<a href="search.php?search_keyword=electronics">
<div style="display: inline-table; width:100px; color:white; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
     <img src="images/images/Electronics1.jpg" class="img-thumbnail" alt="..." 
     style="border:0.5px solid rgb(184, 182, 182) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

     Electronics 
</div>


<a href="search.php?search_keyword=shoes">
<div style="display: inline-table; width:100px;color:white; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
     <img src="images/shoes4.png" class="img-thumbnail" alt="..." 
     style="border:0px solid rgb(21, 20, 20) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

     Shoes
</div>


<a href="search.php?search_keyword=beauty">
<div style="display: inline-table; width:100px; color:white; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
      <img src="images/beauty2.jpg" class="img-thumbnail" alt="..." 
      style="border:0.5px solid rgb(184, 182, 182) ;
      border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

     Beauty
</div>


<a href="search.php?search_keyword=watches">
<div style="display: inline-table; width:100px; color:white; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
      <img src="images/watch.jpg" class="img-thumbnail" alt="..." 
     style="border:0px solid rgb(21, 20, 20) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

     Watches
</div>


<a href="search.php?search_keyword= girls western">
<div style="display: inline-table; width:100px; color:white; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
     <img src="images/western2.jpg" class="img-thumbnail" alt="..." 
     style="border:0px solid rgb(21, 20, 20) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

     Girls Western
</div>


<a href="search.php?search_keyword=mobiles">
<div style="display: inline-table; width:100px; color:white; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
     <img src="images/mob2.png" class="img-thumbnail" alt="..." 
     style="border:0.5px solid rgb(184, 182, 182) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

     Mobiles
</div>


<a href="search.php?search_keyword=bags">
<div style="display: inline-table; width:100px; color:white; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
     <img src="images/bags2.jpg" class="img-thumbnail"  alt="..." 
     style="border:0.5px solid rgb(184, 182, 182) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

    Bags
</div>



</center>
    
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active">
          <a href="https://www.amazon.in/b?node=1388977031&pf_rd_r=66BZJMHXZ59WA5JG60GK&pf_rd_p=6d7749c2-403b-424d-be3e-70b6fb8d1269&pd_rd_r=cc5913d0-ae18-4af6-8090-1ba292ddb74f&pd_rd_w=JcteL&pd_rd_wg=7y7Ya&ref_=pd_gw_unk">
            <img src="images/home_scroll1.png" class="d-block w-100" alt="...">
             </a>
          </div>
          <div class="carousel-item">
          <a href="https://www.amazon.in/dp/B0BYN34PGJ?ie=UTF8&ref_=hero1_Redmi12C&pf_rd_r=WVFZQVMFADHBMA3P7Y1A&pf_rd_p=dca1db8b-5f37-46cd-8f08-7e4113192912&pd_rd_r=2719e38b-4fa1-400a-a947-3774d11eb3b8&pd_rd_w=hpJsG&pd_rd_wg=JHj0x">
            <img src="images/home_scroll4.png" class="d-block w-100" alt="...">
            </a>
          </div>
          <div class="carousel-item">
            <a href="https://www.amazon.in/dp/B0BYN34PGJ?ie=UTF8&ref_=hero1_Redmi12C&pf_rd_r=WVFZQVMFADHBMA3P7Y1A&pf_rd_p=dca1db8b-5f37-46cd-8f08-7e4113192912&pd_rd_r=2719e38b-4fa1-400a-a947-3774d11eb3b8&pd_rd_w=hpJsG&pd_rd_wg=JHj0x">

            
            <img src="images/home_scroll3.png" class="d-block w-100" alt="...">
            </a>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

  
 
 
 
 
    <div class="card_group">
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
              


   <div class="" style="border-left: 2px solid grey;border-radius: 7px; width:290px; height:580px; text-align:left; background-color:#FFFFFF; border:2px solid #999; display:inline-table; padding:15px; margin:5px;">
    
    <img src="images/<?php echo $res_product_image; ?>" class="card-img-top" alt="..." style="width:100%; height:270px; ">
      <div class="card-body">
        <h5 class="card-title"><?php echo $res_product_title; ?></h5>
        <p class="card-text"><?php echo $res_product_discription; ?></p>
        <strong>Rs.<?php echo $res_product_price; ?></strong>
       <br />M.R.P.: <s><?php echo $res_product_mrp; ?><br />
      <strong></s> <?php echo $res_product_offer; ?>% OFF</p></strong>
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
          if($counter=="5")
           {
              break;
           }
                    }
                        }

                        else
                        {
                         echo"Record not found";
                        }
    ?>
</center>

<div class="card-group">
    <center>
  <?php
  $card_data=array();
      $card_data=$db->get_product_data();

      if(!empty($card_data))
                        {

                            $counter=11;
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
              


   <div class="" style="border-left: 2px solid grey;border-radius: 7px; width:290px; height:580px; text-align:left; background-color:#FFFFFF; border:2px solid #999; display:inline-table; padding:15px; margin:5px;">
    
    <img src="images/<?php echo $res_product_image; ?>" class="card-img-top" alt="..." style="width:100%; height:270px;">
      <div class="card-body">
        <h5 class="card-title"><?php echo $res_product_title; ?></h5>
        <p class="card-text"><?php echo $res_product_discription; ?></p>
        <strong>Rs.<?php echo $res_product_price; ?></strong>
       <br />M.R.P.: <s><?php echo $res_product_mrp; ?><br />
      <strong></s> <?php echo $res_product_offer; ?>% OFF</p></strong>
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
          if($counter=="16")
           {
              break;
           }
                    }
                        }

                        else
                        {
                         echo"Record not found";
                        }
    ?>
</center>
<br />
<img src="images/ss15.png" class="img-fluid" alt="..." style="width:100%; height:500px;">
<br />


<!--      background-image:url('images/color4.jpg');
<br />
    <div class="card-group">
      <div class="card">
        <img src="images/img_hm.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Wedani</h5>
          <p class="card-text">Women's Casual Puff Sleeves Ruffled Collor Foral Top <br /><strong> Deal of the Day</strong>
            <br /> <strong> ₹224</strong>
             <br />M.R.P.:<s> ₹1,299</s> (83% OFF)</p>
             <a href="" class="btn btn-primary">Click here to buy</a>
          <p class="card-text"><small class="text-muted">Only available for 5 days</small></p>
        </div>
      </div>

      <div class="card">
        <img src="images/head_hm2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">HeadPhone</h5>
          <p class="card-text">Wireless Headphones with Mic,40-Hr Playtime,Quick Charging,Bluetooth 5.0<br /><strong> Deal of the Day</strong>
          <br /><strong>₹2,899</strong>
          <br />M.R.P.: <s>₹3,999</s> (28% OFF) </p>
          <a href="" class="btn btn-primary">Click here to buy</a>
           <p class="card-text"><small class="text-muted">only available for 5 days </small></p>
        </div>
      </div>

      <div class="card">
        <img src="images/jeans_hm.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">KB TEAM SPIRIT</h5>
          <p class="card-text">Panelled Mid-Wash Joggers<br /><strong>Deal of the Day</strong> 
           <br /><strong>₹407</strong> 
            <br />MRP:<s>₹799</s> (49% OFF)</p>
            <a href="" class="btn btn-primary">Click here to buy</a>
          <p class="card-text"><small class="text-muted">only available for 5 days </small></p>
        </div>
      </div>
      
      <div class="card">
        <img src="images/perfume_hm.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Park Avenue Euphoria Premium </h5>
          <p class="card-text">Eau De Perfume For Men EDP 50ml<br /><strong>Deal of the Day</strong> 
            <br /><strong>₹273 </strong>
            <br />MRP:<s>₹449</s>(39% OFF) </p>
            <a href="" class="btn btn-primary">Click here to buy</a>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>

      <div class="card">
        <img src="images/earring_hm.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Vita Bella </h5>
          <p class="card-text">Gorgeous Jumkhi Alloy Jhumki Earring<br /><strong>Deal of the Day</strong> 
          <br /><strong>₹199</strong>
          <br />MRP:<S>₹999</S>  (80% off) </p>
          <a href="" class="btn btn-primary">Click here to buy</a>
          <p class="card-text"><small class="text-muted">Only available for 5 days </small></p>
        </div>
      </div>
    </div>

    <br />
    <img src="images/ss6.png" class="img-fluid" alt="..." style="width:100%; height:500px;">
    <br />

    <br />

    <div class="card-group">
      <div class="card">
        <img src="images/travelb_hm.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Lavie Sport Galactic</h5>
          <p class="card-text">Large Size 53 cms Wheel Duffle Bag for Travel,Travel Bag with Trolley <br />
            <br /><strong>₹1,249</strong> 
             <br />M.R.P.:<s>₹3,495 </s></p>
             <a href="" class="btn btn-primary">Click here to buy</a>
          <p class="card-text"><small class="text-muted">Only available for 5 days</small></p>
        </div>
      </div>

      <div class="card">
        <img src="images/men1_hm.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Full sleeve Short Kurta for mens</h5>
          <p class="card-text">Fabric-Cotton,Sleeve Length-Long Sleeves
          <br /> ₹454
          <br />M.R.P.: <s>₹500</s></p>
          <a href="" class="btn btn-primary">Click here to buy</a>
           <p class="card-text"><small class="text-muted">only available for 5 days </small></p>
        </div>
      </div>

      <div class="card">
        <img src="images/watch_hm.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">FK Exclusive Analog Watch</h5>
          <p class="card-text">For Men 3276NL02<br /><strong>Deal of the Day</strong> 
           <br /><strong>₹1,582</strong> 
            <br />MRP:<s>₹3,995</s> (60% OFF)</p>
            <a href="" class="btn btn-primary">Click here to buy</a>
          <p class="card-text"><small class="text-muted">only available for 5 days </small></p>
        </div>
      </div>
      
      <div class="card">
        <img src="images/shoes_hm.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Women's Stylish Casual Sports shoes</h5>
          <p class="card-text">Material-Syntethic Leather<br /><strong>Deals of the Day</strong>
            <br /><strong>₹415</strong>
            <br />MRP:<s>₹516</s>(20% OFF)</p>
            <a href="" class="btn btn-primary">Click here to buy</a>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>

      <div class="card">
        <img src="images/mob_hm.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">OnePlus Nord CE 3 Lite 5G</h5>
          <p class="card-text">Chromatic Gray,8GB RAM,128GB Storage</p>
          <br /><strong>₹19,999</strong>
          <br /><a href="" class="btn btn-primary">Click here to buy</a>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>

    <br />

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/ss8.png" class="d-block w-100" alt="..." style="width:25%; height:400px;">
        </div>
        <div class="carousel-item">
          <img src="images/ss9.png" class="d-block w-100" alt="..." style="width:25%; height:400px;">
        </div>
        <div class="carousel-item">
          <img src="images/ss13.png" class="d-block w-100" alt="..." style="width:25%; height:400px;">
        </div>
        <div class="carousel-item">
          <img src="images/ss10.png" class="d-block w-100" alt="..." style="width:25%; height:400px;">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <br />
    <img src="images/ss15.png" class="img-fluid" alt="..." style="width:100%; height:500px;">
    <br />
    <br />
  


    <div class="card-group">
      <div class="card">
        <img src="images/kids_hm.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">KG FRENDZ</h5>
          <p class="card-text">Tropical Print Crew-Neck T-shirt</p>    
          <br /><strong>₹144</strong>
          <br />MRP:<s>₹299</s> (52% OFF)</p>
          <br /><a href="" class="btn btn-primary">Click here to buy</a>
          <p class="card-text"><small class="text-muted">Only available for 5 days</small></p>
        </div>
      </div>
      <div class="card">
        <img src="images/bangles_hm.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Oxidized Bracelet Bangles</h5>
          <p class="card-text">YouBella Jewellery Traditional Silver Plated Set for Girls and Women</p><strong>Deal of the Day</strong>
          <br /><strong>₹299</strong>
          <br />MRP:<s>₹1,999</s> (85% OFF)</p>
          <br /><a href="" class="btn btn-primary">Click here to buy</a>
          <p class="card-text"><small class="text-muted">Only available for 5 days</small></p>
        </div>
      </div>
      <div class="card">
        <img src="images/nails_hm.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">SUPER HD COLORS ails > Nail Paint</h5>
          <p class="card-text">Brand-Revson,Color-Combo Of Different Color</p>
          <br /><strong>₹220</strong>
          <br /><a href="" class="btn btn-primary">Click here to buy</a>
          <p class="card-text"><small class="text-muted">Only available for 5 days</small></p>
        </div>
      </div>
  
    <div class="card">
      <img src="images/top_hm.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">ZNX CLOTHING</h5>
        <p class="card-text">Floral Print Wrap Top</p><strong>Deal of the Day</strong>
        <br /><strong>₹660</strong>
        <br />MRP:<s>₹1,499</s> (56% OFF)</p>
        <a href="" class="btn btn-primary">Click here to buy</a>
        <p class="card-text"><small class="text-muted">Only available for 5 Days</small></p>
      </div>
    </div>
    <div class="card">
      <img src="images/laptop.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">HP Pavilion</h5>
        <p class="card-text">Ryzen 5 Hexa Core 5625U,16 GB/512 GB SSD/Windows 11 Home</p><strong>Deal of the Day</strong>
        <br /><strong>₹57,990</strong>
        <br />MRP:<s>₹68,083</s> (40% OFF)</p>
        <a href="" class="btn btn-primary">Click here to buy</a>
        <p class="card-text"><small class="text-muted">Only available for 5 days</small></p>
      </div>
    </div>
  </div>

    <br />

  <div class="card-group">
    <div class="card">
      <img src="images/shirt_hm.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">FUBAR</h5>
        <p class="card-text">Slim Fit Spread Collar Casual Shirt</p><strong>Deal of the Day</strong>
        <br /><strong>₹459</strong>
        <br />MRP:<s>₹1999</s> (77% OFF)</p>
        <a href="" class="btn btn-primary">Click here to buy</a>
        <p class="card-text"><small class="text-muted">Only available for 5 days</small></p>
      </div>
    </div>
    <div class="card">
      <img src="images/jew_hm.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Fancy Gold Plated Elegant Combo Mangalsutra For Women</h5>
        <p class="card-text">Base Metal-Alloy,Plating-Gold Plated,Stone Type-Cubic Zirconia/American Diamond</p>
        <strong>₹199</strong>
        <br /><a href="" class="btn btn-primary">Click here to buy</a>
        <p class="card-text"><small class="text-muted">Only available for 5 days</small></p>
      </div>
    </div>
    <div class="card">
      <img src="images/heels_hm.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">US GROUP women and girls casual heel sandal</h5>
        <p class="card-text"></p><strong>Deal of the Day</strong>
        <br /><strong>₹446</strong>
        <br />MRP:<s>₹1299</s> (66% OFF)</p>
        <a href="https://www.amazon.in/US-GROUP-women-casual-sandal/dp/B097LQTRWX/ref=sr_1_11?crid=1KG19TYUT301M&keywords=heels+for+girls&qid=1687507596&sprefix=heels+for+girls%2Caps%2C356&sr=8-11" class="btn btn-primary">Click here to buy</a>
        <p class="card-text"><small class="text-muted">Only available for 5 days</small></p>
      </div>
    </div>
    <div class="card">
      <img src="images/bags_hm.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">khatushyam collection </h5>
        <p class="card-text">Women Pink Hand-held Bag</p><strong>Deal of the Day</strong>
        <br /><strong>₹295</strong>
        <br />MRP:<s>₹999</s> (70% OFF)</p>
        <a href="https://www.flipkart.com/khatushyam-collection-women-pink-hand-held-bag/p/itm09b832acbf205?pid=HMBGFCYXU8YHU82Y&lid=LSTHMBGFCYXU8YHU82Y6Z08ID&marketplace=FLIPKART&q=women+bags&store=reh%2Fihu&spotlightTagId=BestsellerId_reh%2Fihu&srno=s_1_33&otracker=search&otracker1=search&fm=Search&iid=853b7d6b-5f55-4b21-89c8-a48168111d43.HMBGFCYXU8YHU82Y.SEARCH&ppt=sp&ppn=sp&qH=4a9c81bf48a5a882" class="btn btn-primary">Click here to buy</a>
        <p class="card-text"><small class="text-muted">Only available for 5 days</small></p>
      </div>
    </div>
    <div class="card">
      <img src="images/shirt1_hm.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">JUMP CUTS</h5>
        <p class="card-text">Pack of 3 Typographic Print Crew- Neck T-shirts </p><strong>Deal of the Day</strong>
        <br /><strong>₹600</strong>
        MRP:<s>₹2,999</s> (80% OFF)</p>
        <a href="https://www.ajio.com/jump-cuts-pack-of-3-typographic-print-crew-neck-t-shirts/p/466210107_multis" class="btn btn-primary">Click here to buy</a>
        <p class="card-text"><small class="text-muted">Only available for 5 days</small></p>
      </div>
    </div>
  </div>-->


  <div>





  </div>
</div>   
</body>
=======
<?php
    require_once('lib/functions.php');
    $db= new class_functions();  
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title> Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

<link rel="stylesheet" href="css/bootstrap-reboot.css">
<link rel="stylesheet" href="css/bootstrap-grid.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-utilities.css">

<script type="text/javaScript" src="js/bootstrap.bundle.js"></script>
<script type="text/javaScript" src="js/bootstrap.js"></script>
<script type="text/javaScript" src="js/bootstrap.esm.js"></script>

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
    background: #e8cbc0;
    background: -webkit-linear-gradient(to right, #e8cbc0, #636fa4);
    background: linear-gradient(to right, #e8cbc0, #636fa4);
    min-height: 100vh;   
  
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
  body 
  {
     background-image:url('images/back_sub2.jpg');
     background-size:90%;
}
   .card_group
   {
     background-color:grey;
   }
  
</style>
</head>
<body>
 <?php  
 require_once('header.php');
 ?>
    <center>
    <div style="display: inline-table; width:100px; color:white; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
    <a href="search.php?search_keyword=women">
      <img src="images/images/women1.jpg" class="img-thumbnail" alt="..."
      style="border:0.5px solid rgb(184, 182, 182) ;
      border-radius:70px;
      height:70px;
      width:70px;
      margin-top:0px;" ></a>
      Women 
   </div> 


   <div style="display: inline-table; width:100px; color:white; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
   <a href="search.php?search_keyword=kau">
     <img src="images/images/men1.jpg" class="img-thumbnail" alt="..." 
     style="border:0px solid rgb(21, 20, 20) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px; padding:0px;"></a>
     Men
   </div>


    <a href="search.php?search_keyword=kids">
    <div style="display: inline-table; width:100px; color:white; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
      <img src="images/kids4.webp" class="img-thumbnail" alt="..." 
      style="border:0px solid rgb(21, 20, 20) ;
      border-radius:70px;
      height:70px;
      width:70px;
      margin-top:0px;
      padding:0px;"></a>
     Kids
     </div>



  <a href="search.php?search_keyword=jewellery">
<div style="display: inline-table; width:100px;  color:white; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
    <img src="images/jew2.webp" class="img-thumbnail" alt="..." 
    style="border:0px solid rgb(21, 20, 20) ;
    border-radius:70px;
    height:70px;
    width:70px;
    margin-top:0px;
    padding:0px;"></a>

    Jewellery
</div>


<a href="search.php?search_keyword=electronics">
<div style="display: inline-table; width:100px; color:white; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
     <img src="images/images/Electronics1.jpg" class="img-thumbnail" alt="..." 
     style="border:0.5px solid rgb(184, 182, 182) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

     Electronics 
</div>


<a href="search.php?search_keyword=shoes">
<div style="display: inline-table; width:100px;color:white; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
     <img src="images/shoes4.png" class="img-thumbnail" alt="..." 
     style="border:0px solid rgb(21, 20, 20) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

     Shoes
</div>


<a href="search.php?search_keyword=beauty">
<div style="display: inline-table; width:100px; color:white; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
      <img src="images/beauty2.jpg" class="img-thumbnail" alt="..." 
      style="border:0.5px solid rgb(184, 182, 182) ;
      border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

     Beauty
</div>


<a href="search.php?search_keyword=watches">
<div style="display: inline-table; width:100px; color:white; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
      <img src="images/watch.jpg" class="img-thumbnail" alt="..." 
     style="border:0px solid rgb(21, 20, 20) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

     Watches
</div>


<a href="search.php?search_keyword= girls western">
<div style="display: inline-table; width:100px; color:white; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
     <img src="images/western2.jpg" class="img-thumbnail" alt="..." 
     style="border:0px solid rgb(21, 20, 20) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

     Girls Western
</div>


<a href="search.php?search_keyword=mobiles">
<div style="display: inline-table; width:100px; color:white; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
     <img src="images/mob2.png" class="img-thumbnail" alt="..." 
     style="border:0.5px solid rgb(184, 182, 182) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

     Mobiles
</div>


<a href="search.php?search_keyword=bags">
<div style="display: inline-table; width:100px; color:white; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
     <img src="images/bags2.jpg" class="img-thumbnail"  alt="..." 
     style="border:0.5px solid rgb(184, 182, 182) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

    Bags
</div>



</center>
    
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active">
          <a href="https://www.amazon.in/b?node=1388977031&pf_rd_r=66BZJMHXZ59WA5JG60GK&pf_rd_p=6d7749c2-403b-424d-be3e-70b6fb8d1269&pd_rd_r=cc5913d0-ae18-4af6-8090-1ba292ddb74f&pd_rd_w=JcteL&pd_rd_wg=7y7Ya&ref_=pd_gw_unk">
            <img src="images/home_scroll1.png" class="d-block w-100" alt="...">
             </a>
          </div>
          <div class="carousel-item">
          <a href="https://www.amazon.in/dp/B0BYN34PGJ?ie=UTF8&ref_=hero1_Redmi12C&pf_rd_r=WVFZQVMFADHBMA3P7Y1A&pf_rd_p=dca1db8b-5f37-46cd-8f08-7e4113192912&pd_rd_r=2719e38b-4fa1-400a-a947-3774d11eb3b8&pd_rd_w=hpJsG&pd_rd_wg=JHj0x">
            <img src="images/home_scroll4.png" class="d-block w-100" alt="...">
            </a>
          </div>
          <div class="carousel-item">
            <a href="https://www.amazon.in/dp/B0BYN34PGJ?ie=UTF8&ref_=hero1_Redmi12C&pf_rd_r=WVFZQVMFADHBMA3P7Y1A&pf_rd_p=dca1db8b-5f37-46cd-8f08-7e4113192912&pd_rd_r=2719e38b-4fa1-400a-a947-3774d11eb3b8&pd_rd_w=hpJsG&pd_rd_wg=JHj0x">

            
            <img src="images/home_scroll3.png" class="d-block w-100" alt="...">
            </a>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

  
 
 
 
 
    <div class="card_group">
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
              


   <div class="" style="border-left: 2px solid grey;border-radius: 7px; width:290px; height:580px; text-align:left; background-color:#FFFFFF; border:2px solid #999; display:inline-table; padding:15px; margin:5px;">
    
    <img src="images/<?php echo $res_product_image; ?>" class="card-img-top" alt="..." style="width:100%; height:270px; ">
      <div class="card-body">
        <h5 class="card-title"><?php echo $res_product_title; ?></h5>
        <p class="card-text"><?php echo $res_product_discription; ?></p>
        <strong>Rs.<?php echo $res_product_price; ?></strong>
       <br />M.R.P.: <s><?php echo $res_product_mrp; ?><br />
      <strong></s> <?php echo $res_product_offer; ?>% OFF</p></strong>
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
          if($counter=="5")
           {
              break;
           }
                    }
                        }

                        else
                        {
                         echo"Record not found";
                        }
    ?>
</center>

<div class="card-group">
    <center>
  <?php
  $card_data=array();
      $card_data=$db->get_product_data();

      if(!empty($card_data))
                        {

                            $counter=11;
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
              


   <div class="" style="border-left: 2px solid grey;border-radius: 7px; width:290px; height:580px; text-align:left; background-color:#FFFFFF; border:2px solid #999; display:inline-table; padding:15px; margin:5px;">
    
    <img src="images/<?php echo $res_product_image; ?>" class="card-img-top" alt="..." style="width:100%; height:270px;">
      <div class="card-body">
        <h5 class="card-title"><?php echo $res_product_title; ?></h5>
        <p class="card-text"><?php echo $res_product_discription; ?></p>
        <strong>Rs.<?php echo $res_product_price; ?></strong>
       <br />M.R.P.: <s><?php echo $res_product_mrp; ?><br />
      <strong></s> <?php echo $res_product_offer; ?>% OFF</p></strong>
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
          if($counter=="16")
           {
              break;
           }
                    }
                        }

                        else
                        {
                         echo"Record not found";
                        }
    ?>
</center>
<br />
<img src="images/ss15.png" class="img-fluid" alt="..." style="width:100%; height:500px;">
<br />


<!--      background-image:url('images/color4.jpg');
<br />
    <div class="card-group">
      <div class="card">
        <img src="images/img_hm.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Wedani</h5>
          <p class="card-text">Women's Casual Puff Sleeves Ruffled Collor Foral Top <br /><strong> Deal of the Day</strong>
            <br /> <strong> ₹224</strong>
             <br />M.R.P.:<s> ₹1,299</s> (83% OFF)</p>
             <a href="" class="btn btn-primary">Click here to buy</a>
          <p class="card-text"><small class="text-muted">Only available for 5 days</small></p>
        </div>
      </div>

      <div class="card">
        <img src="images/head_hm2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">HeadPhone</h5>
          <p class="card-text">Wireless Headphones with Mic,40-Hr Playtime,Quick Charging,Bluetooth 5.0<br /><strong> Deal of the Day</strong>
          <br /><strong>₹2,899</strong>
          <br />M.R.P.: <s>₹3,999</s> (28% OFF) </p>
          <a href="" class="btn btn-primary">Click here to buy</a>
           <p class="card-text"><small class="text-muted">only available for 5 days </small></p>
        </div>
      </div>

      <div class="card">
        <img src="images/jeans_hm.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">KB TEAM SPIRIT</h5>
          <p class="card-text">Panelled Mid-Wash Joggers<br /><strong>Deal of the Day</strong> 
           <br /><strong>₹407</strong> 
            <br />MRP:<s>₹799</s> (49% OFF)</p>
            <a href="" class="btn btn-primary">Click here to buy</a>
          <p class="card-text"><small class="text-muted">only available for 5 days </small></p>
        </div>
      </div>
      
      <div class="card">
        <img src="images/perfume_hm.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Park Avenue Euphoria Premium </h5>
          <p class="card-text">Eau De Perfume For Men EDP 50ml<br /><strong>Deal of the Day</strong> 
            <br /><strong>₹273 </strong>
            <br />MRP:<s>₹449</s>(39% OFF) </p>
            <a href="" class="btn btn-primary">Click here to buy</a>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>

      <div class="card">
        <img src="images/earring_hm.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Vita Bella </h5>
          <p class="card-text">Gorgeous Jumkhi Alloy Jhumki Earring<br /><strong>Deal of the Day</strong> 
          <br /><strong>₹199</strong>
          <br />MRP:<S>₹999</S>  (80% off) </p>
          <a href="" class="btn btn-primary">Click here to buy</a>
          <p class="card-text"><small class="text-muted">Only available for 5 days </small></p>
        </div>
      </div>
    </div>

    <br />
    <img src="images/ss6.png" class="img-fluid" alt="..." style="width:100%; height:500px;">
    <br />

    <br />

    <div class="card-group">
      <div class="card">
        <img src="images/travelb_hm.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Lavie Sport Galactic</h5>
          <p class="card-text">Large Size 53 cms Wheel Duffle Bag for Travel,Travel Bag with Trolley <br />
            <br /><strong>₹1,249</strong> 
             <br />M.R.P.:<s>₹3,495 </s></p>
             <a href="" class="btn btn-primary">Click here to buy</a>
          <p class="card-text"><small class="text-muted">Only available for 5 days</small></p>
        </div>
      </div>

      <div class="card">
        <img src="images/men1_hm.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Full sleeve Short Kurta for mens</h5>
          <p class="card-text">Fabric-Cotton,Sleeve Length-Long Sleeves
          <br /> ₹454
          <br />M.R.P.: <s>₹500</s></p>
          <a href="" class="btn btn-primary">Click here to buy</a>
           <p class="card-text"><small class="text-muted">only available for 5 days </small></p>
        </div>
      </div>

      <div class="card">
        <img src="images/watch_hm.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">FK Exclusive Analog Watch</h5>
          <p class="card-text">For Men 3276NL02<br /><strong>Deal of the Day</strong> 
           <br /><strong>₹1,582</strong> 
            <br />MRP:<s>₹3,995</s> (60% OFF)</p>
            <a href="" class="btn btn-primary">Click here to buy</a>
          <p class="card-text"><small class="text-muted">only available for 5 days </small></p>
        </div>
      </div>
      
      <div class="card">
        <img src="images/shoes_hm.webp" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Women's Stylish Casual Sports shoes</h5>
          <p class="card-text">Material-Syntethic Leather<br /><strong>Deals of the Day</strong>
            <br /><strong>₹415</strong>
            <br />MRP:<s>₹516</s>(20% OFF)</p>
            <a href="" class="btn btn-primary">Click here to buy</a>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>

      <div class="card">
        <img src="images/mob_hm.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">OnePlus Nord CE 3 Lite 5G</h5>
          <p class="card-text">Chromatic Gray,8GB RAM,128GB Storage</p>
          <br /><strong>₹19,999</strong>
          <br /><a href="" class="btn btn-primary">Click here to buy</a>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>

    <br />

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/ss8.png" class="d-block w-100" alt="..." style="width:25%; height:400px;">
        </div>
        <div class="carousel-item">
          <img src="images/ss9.png" class="d-block w-100" alt="..." style="width:25%; height:400px;">
        </div>
        <div class="carousel-item">
          <img src="images/ss13.png" class="d-block w-100" alt="..." style="width:25%; height:400px;">
        </div>
        <div class="carousel-item">
          <img src="images/ss10.png" class="d-block w-100" alt="..." style="width:25%; height:400px;">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <br />
    <img src="images/ss15.png" class="img-fluid" alt="..." style="width:100%; height:500px;">
    <br />
    <br />
  


    <div class="card-group">
      <div class="card">
        <img src="images/kids_hm.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">KG FRENDZ</h5>
          <p class="card-text">Tropical Print Crew-Neck T-shirt</p>    
          <br /><strong>₹144</strong>
          <br />MRP:<s>₹299</s> (52% OFF)</p>
          <br /><a href="" class="btn btn-primary">Click here to buy</a>
          <p class="card-text"><small class="text-muted">Only available for 5 days</small></p>
        </div>
      </div>
      <div class="card">
        <img src="images/bangles_hm.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Oxidized Bracelet Bangles</h5>
          <p class="card-text">YouBella Jewellery Traditional Silver Plated Set for Girls and Women</p><strong>Deal of the Day</strong>
          <br /><strong>₹299</strong>
          <br />MRP:<s>₹1,999</s> (85% OFF)</p>
          <br /><a href="" class="btn btn-primary">Click here to buy</a>
          <p class="card-text"><small class="text-muted">Only available for 5 days</small></p>
        </div>
      </div>
      <div class="card">
        <img src="images/nails_hm.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">SUPER HD COLORS ails > Nail Paint</h5>
          <p class="card-text">Brand-Revson,Color-Combo Of Different Color</p>
          <br /><strong>₹220</strong>
          <br /><a href="" class="btn btn-primary">Click here to buy</a>
          <p class="card-text"><small class="text-muted">Only available for 5 days</small></p>
        </div>
      </div>
  
    <div class="card">
      <img src="images/top_hm.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">ZNX CLOTHING</h5>
        <p class="card-text">Floral Print Wrap Top</p><strong>Deal of the Day</strong>
        <br /><strong>₹660</strong>
        <br />MRP:<s>₹1,499</s> (56% OFF)</p>
        <a href="" class="btn btn-primary">Click here to buy</a>
        <p class="card-text"><small class="text-muted">Only available for 5 Days</small></p>
      </div>
    </div>
    <div class="card">
      <img src="images/laptop.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">HP Pavilion</h5>
        <p class="card-text">Ryzen 5 Hexa Core 5625U,16 GB/512 GB SSD/Windows 11 Home</p><strong>Deal of the Day</strong>
        <br /><strong>₹57,990</strong>
        <br />MRP:<s>₹68,083</s> (40% OFF)</p>
        <a href="" class="btn btn-primary">Click here to buy</a>
        <p class="card-text"><small class="text-muted">Only available for 5 days</small></p>
      </div>
    </div>
  </div>

    <br />

  <div class="card-group">
    <div class="card">
      <img src="images/shirt_hm.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">FUBAR</h5>
        <p class="card-text">Slim Fit Spread Collar Casual Shirt</p><strong>Deal of the Day</strong>
        <br /><strong>₹459</strong>
        <br />MRP:<s>₹1999</s> (77% OFF)</p>
        <a href="" class="btn btn-primary">Click here to buy</a>
        <p class="card-text"><small class="text-muted">Only available for 5 days</small></p>
      </div>
    </div>
    <div class="card">
      <img src="images/jew_hm.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Fancy Gold Plated Elegant Combo Mangalsutra For Women</h5>
        <p class="card-text">Base Metal-Alloy,Plating-Gold Plated,Stone Type-Cubic Zirconia/American Diamond</p>
        <strong>₹199</strong>
        <br /><a href="" class="btn btn-primary">Click here to buy</a>
        <p class="card-text"><small class="text-muted">Only available for 5 days</small></p>
      </div>
    </div>
    <div class="card">
      <img src="images/heels_hm.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">US GROUP women and girls casual heel sandal</h5>
        <p class="card-text"></p><strong>Deal of the Day</strong>
        <br /><strong>₹446</strong>
        <br />MRP:<s>₹1299</s> (66% OFF)</p>
        <a href="https://www.amazon.in/US-GROUP-women-casual-sandal/dp/B097LQTRWX/ref=sr_1_11?crid=1KG19TYUT301M&keywords=heels+for+girls&qid=1687507596&sprefix=heels+for+girls%2Caps%2C356&sr=8-11" class="btn btn-primary">Click here to buy</a>
        <p class="card-text"><small class="text-muted">Only available for 5 days</small></p>
      </div>
    </div>
    <div class="card">
      <img src="images/bags_hm.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">khatushyam collection </h5>
        <p class="card-text">Women Pink Hand-held Bag</p><strong>Deal of the Day</strong>
        <br /><strong>₹295</strong>
        <br />MRP:<s>₹999</s> (70% OFF)</p>
        <a href="https://www.flipkart.com/khatushyam-collection-women-pink-hand-held-bag/p/itm09b832acbf205?pid=HMBGFCYXU8YHU82Y&lid=LSTHMBGFCYXU8YHU82Y6Z08ID&marketplace=FLIPKART&q=women+bags&store=reh%2Fihu&spotlightTagId=BestsellerId_reh%2Fihu&srno=s_1_33&otracker=search&otracker1=search&fm=Search&iid=853b7d6b-5f55-4b21-89c8-a48168111d43.HMBGFCYXU8YHU82Y.SEARCH&ppt=sp&ppn=sp&qH=4a9c81bf48a5a882" class="btn btn-primary">Click here to buy</a>
        <p class="card-text"><small class="text-muted">Only available for 5 days</small></p>
      </div>
    </div>
    <div class="card">
      <img src="images/shirt1_hm.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">JUMP CUTS</h5>
        <p class="card-text">Pack of 3 Typographic Print Crew- Neck T-shirts </p><strong>Deal of the Day</strong>
        <br /><strong>₹600</strong>
        MRP:<s>₹2,999</s> (80% OFF)</p>
        <a href="https://www.ajio.com/jump-cuts-pack-of-3-typographic-print-crew-neck-t-shirts/p/466210107_multis" class="btn btn-primary">Click here to buy</a>
        <p class="card-text"><small class="text-muted">Only available for 5 days</small></p>
      </div>
    </div>
  </div>-->


  <div>





  </div>
</div>   
</body>
>>>>>>> 8185f01edb776667a1a1507b3f7a424cb70015eb
</html>