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
     
     background-size:90%;
     background-color:#d1e0e0;
}
.cardH
{
  box-shadow:5px 5px 15px 5px black;
}
.cardC:hover
{
box-shadow:0px 0px 15px 3px black;
}  


</style>
</head>
<body>
 <?php  
 require_once('header1.php');
 ?>
    <center>
    <div style="display: inline-table; width:100px; color:black; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
    <a href="search.php?search_keyword=women">
      <img src="images/images/women1.jpg" class="img-thumbnail cardC" alt="..."
      style="border:0.5px solid rgb(184, 182, 182) ;
      border-radius:70px;
      height:70px;
      width:70px;
      margin-top:0px;"></a>
      Women 
   </div> 


   <div style="display: inline-table; width:100px; color:black; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
   <a href="search.php?search_keyword=kau">
     <img src="images/images/men1.jpg" class="img-thumbnail cardC" alt="..." 
     style="border:0px solid rgb(21, 20, 20) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px; padding:0px;"></a>
     Men
   </div>


    <a href="search.php?search_keyword=kids">
    <div style="display: inline-table; width:100px; color:black; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
      <img src="images/kids4.webp" class="img-thumbnail cardC" alt="..." 
      style="border:0px solid rgb(21, 20, 20) ;
      border-radius:70px;
      height:70px;
      width:70px;
      margin-top:0px;
      padding:0px;"></a>
     Kids
     </div>



  <a href="search.php?search_keyword=jewellery">
<div style="display: inline-table; width:100px;  color:black; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
    <img src="images/jew2.webp" class="img-thumbnail cardC" alt="..." 
    style="border:0px solid rgb(21, 20, 20) ;
    border-radius:70px;
    height:70px;
    width:70px;
    margin-top:0px;
    padding:0px;"></a>

    Jewellery
</div>


<a href="search.php?search_keyword=electronics">
<div style="display: inline-table; width:100px; color:black; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
     <img src="images/images/Electronics1.jpg" class="img-thumbnail cardC" alt="..." 
     style="border:0.5px solid rgb(184, 182, 182) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

     Electronics 
</div>


<a href="search.php?search_keyword=shoes">
<div style="display: inline-table; width:100px;color:black; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
     <img src="images/shoes4.png" class="img-thumbnail cardC" alt="..." 
     style="border:0px solid rgb(21, 20, 20) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

     Shoes
</div>


<a href="search.php?search_keyword=beauty">
<div style="display: inline-table; width:100px; color:black; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
      <img src="images/beauty2.jpg" class="img-thumbnail cardC" alt="..." 
      style="border:0.5px solid rgb(184, 182, 182) ;
      border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

     Beauty
</div>


<a href="search.php?search_keyword=watches">
<div style="display: inline-table; width:100px; color:black; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
      <img src="images/watch.jpg" class="img-thumbnail cardC" alt="..." 
     style="border:0px solid rgb(21, 20, 20) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

     Watches
</div>


<a href="search.php?search_keyword= girls western">
<div style="display: inline-table; width:100px; color:black; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
     <img src="images/western2.jpg" class="img-thumbnail cardC" alt="..." 
     style="border:0px solid rgb(21, 20, 20) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

     Girls Western
</div>


<a href="search.php?search_keyword=mobiles">
<div style="display: inline-table; width:100px; color:black; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
     <img src="images/mob2.png" class="img-thumbnail cardC" alt="..." 
     style="border:0.5px solid rgb(184, 182, 182) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

     Mobiles
</div>


<a href="search.php?search_keyword=bags">
<div style="display: inline-table; width:100px; color:black; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
     <img src="images/bags2.jpg" class="img-thumbnail cardC"  alt="..." 
     style="border:0.5px solid rgb(184, 182, 182) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

    Bags
</div>



</center>
    
      <div id="carouselExampleAutoplaying" class="carousel slide cardC" data-bs-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active">
          <a href="https://www.amazon.in/stores/page/32D390A6-8B75-4BB2-8C0B-8CC71E606E7B?ingress=0&visitId=96ca7624-c439-4b50-8591-9536e0f49236&pf_rd_r=188C5MXKB6NS8W7YGSYJ&pf_rd_p=2796d33d-6426-41a3-a961-b534eeba26b2&pd_rd_r=d2d1306a-b317-40a9-aca9-8ec4be51ebfc&pd_rd_w=9DtKR&pd_rd_wg=QGXJh&ref_=pd_gw_unk">
            <img src="images/home_scroll5.png" class="d-block w-100" alt="...">
             </a>
          </div>
          <div class="carousel-item">
          <a href=" https://www.amazon.in/s?hidden-keywords=B0BF57RN3K+%7C+B0B3RRWSF6+%7C+B0BP18W8TM+%7C+B0B854R7NS+%7C+B09YV4MW2T+%7C+B0B5LVS732+%7C+B0BRKXXPZ7+%7C+B0B3N7LR6K+%7C+B09YV4RG4D+%7C+B0B3MWYCHQ+%7C+B09NVPSCQT+%7C+B0BZVGHPCJ+%7C+B0BVW2ZVT5+%7C+B0BP1GCCK2+%7C+B0BWTRJ5MQ+%7C+B0BRN5HLXW+%7C+B0B5LW5DFQ+%7C+B09ZQK9X8G+%7C+B0BF54LXW6+%7C+B09YV3K34W+%7C+B0BF4YBLPX+%7C+B0BRPWMVC7+%7C+B0BRQFF4HN+%7C+B0BP18QB9L+%7C+B0BVVWXMB3+%7C+B0972BQ2RS+%7C+B0B3MZHZS2+%7C+B0BF563HB4+%7C+B0BJ72WZQ7+%7C+B0BRQ1NLLS+%7C+B0B6BMWKDP+%7C+B0B5LSDT8W+%7C+B0BF5C343N+%7C+B0BRPWY4GM+%7C+B0BRPX1MRG+%7C+B09P18XVW6+%7C+B0B852Z6GY+%7C+B0BRPWSXQZ+%7C+B09PLFJ7ZW+%7C+B0B3RSDSZ3+%7C+B0BVVYXZ1G+%7C+B0BVVZCTTQ+%7C+B0BR2MCMSY+%7C+B0BP1HKG33+%7C+B0BDYNRCRC+%7C+B0BF54972T+%7C+B098T329K3+%7C+B0B85414K1+%7C+B0BNXDPZD5+%7C+B0BRN7HRFW+%7C+B0BP1FSCB7+%7C+B0BMQL7BVS+%7C+B0B3MYPX74+%7C+B0BMQMWDZJ+%7C+B09YV4DC29+%7C+B0BRN59BNQ+%7C+B0BP1PH6T4+%7C+B0BRMY7DQ9+%7C+B09ZL5NR68+%7C+B0BRN56N8H+%7C+B09YV575RK+%7C+B0B2Q1W9WP+%7C+B09YV5HHDB+%7C+B09RKJRCFM+%7C+B09RKD1JD1+%7C+B09P1765VX+%7C+B0B855X6W2+%7C+B09WB54TH4+%7C+B0BF4WVPFD+%7C+B0BY2C9SD7+%7C+B0BRN6P1TV+%7C+B0B3N932ZM+%7C+B0B3MXZL6Z+%7C+B0BRN6BFZF+%7C+B0BRPZBZ66+%7C+B0BRPWMW4D+%7C+B0B853MRMY+%7C+B0BP1PN7DX+%7C+B093HCLPJ5+%7C+B0BRQ1LC8B+%7C+B0BRMXW21H+%7C+B0B3RS9DNF+%7C+B0BRQFWJ35+%7C+B094QXS8NJ+%7C+B0B3MYTGZD+%7C+B0BP18VPT7+%7C+B0B3NB9Y3S+%7C+B0B2X35B1K+%7C+B0BRVRDXG4+%7C+B09PRH4H93+%7C+B09PNKXSKF+%7C+B0BRMYRG6M+%7C+B0BRQ12TF1+%7C+B0BRPZPKJG+%7C+B0BRPZ57WV+%7C+B09HZK7ZLH+%7C+B0B3NDPCS9+%7C+B0BDGMPPH9+%7C+B09HHB691Z+%7C+B09Q3T87VH+%7C+B0BNXFDTZ2+%7C+B0BRQFNHQS+%7C+B09YV2957W+%7C+B0BJ6QYRK8+%7C+B0BRKZG4W7+%7C+B0BF58NVGM+%7C+B0BRQF411D+%7C+B0B5LWP12T+%7C+B0BRQ21JHZ+%7C+B09727J4SQ+%7C+B09Q3SHYJ6+%7C+B0B53QFZPY+%7C+B0BJ6P3K4Y+%7C+B09K7SKYY3+%7C+B0B59XYKJT+%7C+B0BN1ZCCVN+%7C+B0BDGLF9HX+%7C+B0BP1RN9XR+%7C+B0BY2DGB71+%7C+B09Q46LYPM+%7C+B09YV414XP+%7C+B094R1M7VM+%7C+B0B3N6V4X4+%7C+B0BRVRG946+%7C+B0BP1MLLYS+%7C+B09YV463SW+%7C+B09ZKY62H1+%7C+B0BMQN52CW+%7C+B0B3N6FXRN+%7C+B0BRMWKZZN+%7C+B0BDYNXP8L+%7C+B0BF5Q75LJ+%7C+B097R25DP7+%7C+B09YV1WVBW+%7C+B0BJ73KHKJ+%7C+B0BRPYY1FP+%7C+B09728JN7L+%7C+B09NVPDLNV+%7C+B0BMQMQTPW+%7C+B09LCRMJW1+%7C+B09NC2TY11+%7C+B09728Q829+%7C+B0BXSP5BYN+%7C+B09NM8LBP2+%7C+B0BVW1VW1V+%7C+B09NBZJ8NJ+%7C+B09Q4K5C7P+%7C+B0B7JPTMNX+%7C+B09RKCM1J3+%7C+B09728QFXY+%7C+B09GFPSZGV+%7C+B09YV3F8RS+%7C+B097F6QT8Z+%7C+B0BY2BXYW9+%7C+B0BY2C9N11+%7C+B0BMQMMDW1+%7C+B0BF4WNC4R+%7C+B09TTJZG1F+%7C+B09TTKHGM7+%7C+B0BDGHKP3T+%7C+B0B6BLTGTT+%7C+B0BF4WLLFQ+%7C+B09GFRF1BX+%7C+B09BNXQ6BR+%7C+B0BXSVKKDR+%7C+B0BXSQWF7X+%7C+B0BJ6ZWPX5+%7C+B0BDZFXDKJ+%7C+B0BDGKV5L8+%7C+B0BDHCPGN5+%7C+B0BJ73NWMC+%7C+B0B5LT655H+%7C+B0BRVQZ9QK+%7C+B0BRPZLPCH+%7C+B09Y1LBYKY+%7C+B097R2JBDF+%7C+B0B46DZ376+%7C+B09ZQLGRW3+%7C+B0BF5C6SY9+%7C+B0BR2MH438+%7C+B0BDGMJM6B+%7C+B0BF5CX7XF+%7C+B0BDZGBTQX+%7C+B0BP18NCLQ+%7C+B0BVW734MK+%7C+B0BF4V72TX+%7C+B0B2JSPSQM+%7C+B09PRGXJJF+%7C+B0BVW4MP8Q+%7C+B09ZKY327P+%7C+B09ZKV1KKW+%7C+B0B2PZ448K+%7C+B0BDGNC36P+%7C+B0B46D1C65+%7C+B09NC1FX43+%7C+B0BDGQNYPR+%7C+B0BDYR2LP5+%7C+B0B5N66FGB+%7C+B09Y1LJX1G+%7C+B0B3N4KCPZ+%7C+B0BVW4LGW8+%7C+B09NVPJ3P4+%7C+B0B42R4B3L+%7C+B0BQ6MSKXT+%7C+B0BP1N77VY+%7C+B09NVP6HXY+%7C+B0BQ6P1BJZ+%7C+B09Q3QM3Y8+%7C+B09Q3RB4RB+%7C+B0BTMMN81R+%7C+B0B2JQKBC8+%7C+B09Q4MRW85+%7C+B0B46FKMQ3+%7C+B0BTMLFWW7+%7C+B0BR2N6F36+%7C+B09RMPKBDC+%7C+B0BTMM4HJK+%7C+B0BVW4KWKJ+%7C+B0BKLK2RL2+%7C+B0B8ZLR1Z3+%7C+B0BMQLY63N+%7C+B09WB6TXBS+%7C+B0BTMLCN7P+%7C+B097R3CN3Y+%7C+B0B56WM84H+%7C+B09NM8S1V4+%7C+B0BR2MNG31+%7C+B0B56YNX15+%7C+B0B2JT5RJ1+%7C+B0BTMM7CGQ+%7C+B0BNXDTNCK+%7C+B0BTMK6KMP+%7C+B0BQ3MHN6V+%7C+B0BQ3QNF1Z+%7C+B0BQ3PTBXS+%7C+B0BDGMY85X+%7C+B097F657N2+%7C+B0BTMKWLCF+%7C+B09ZKYCDXL+%7C+B0BQ6KVKF7+%7C+B0BRL1BWLZ+%7C+B0B3RF8DQP+%7C+B099DSJNVW+%7C+B0BJ74PQK6+%7C+B09SFZC4R7+%7C+B09Q3P6YL4+%7C+B0B3RD3PFZ+%7C+B09SFYT1Z2+%7C+B0BPHVB531+%7C+B0BMVT1R78+%7C+B0BDYTJM1M+%7C+B0BQ6QXPH4&pd_rd_r=d2d1306a-b317-40a9-aca9-8ec4be51ebfc&pd_rd_w=lnYJA&pd_rd_wg=QGXJh&pf_rd_p=6ae48849-b297-448e-af02-28a3675ddabc&pf_rd_r=188C5MXKB6NS8W7YGSYJ&ref=pd_gw_unk">
            <img src="images/home_scroll6.png" class="d-block w-100" alt="...">
            </a>
          </div>
          <div class="carousel-item">
            <a href=" https://www.amazon.in/s?i=jewelry&rh=n%3A5210079031%2Cp_36%3A-19900&s=jewellery&fs=true&pd_rd_r=d2d1306a-b317-40a9-aca9-8ec4be51ebfc&pd_rd_w=FT9A2&pd_rd_wg=QGXJh&pf_rd_p=3749f44e-fe98-488c-8fe8-6bcd68f686da&pf_rd_r=188C5MXKB6NS8W7YGSYJ&qid=1676384701&rnid=3439822031&ref=pd_gw_unk">
            <img src="images/home_scroll7.png" class="d-block w-100" alt="...">
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
<br />
  
 
 
 
 
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
              

            
   <div class="cardC" style="border-left:2px solid grey;border-radius: 7px; width:290px; height:580px; text-align:left; background-color:#FFFFFF; border:0px solid #999; display:inline-table; padding:15px; margin:5px;">
    
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
          <img src="images/flipkart1_logo.png" style="width:75px; height:30px;" >

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

                            $counter=261;
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
              


   <div class="cardC" style="border-left: 2px solid grey;border-radius: 7px; width:290px; height:580px; text-align:left; background-color:#FFFFFF; border:0px solid #999; display:inline-table; padding:15px; margin:5px;">
    
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
          if($counter=="266")
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





<!-- scrollbar -->

<div id="carouselExampleDark" class="carousel carousel-dark slide cardC" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <a href="https://www.ajio.com/s/up-to-70-percent-off-5105-68473">
      <img src="images/homeoffer.jpg" class="d-block w-100" alt="..."></a>
      <div class="carousel-caption d-none d-md-block">
      </div>
      
    </div>
    <div class="carousel-item" data-bs-interval="2000">
    <a href="https://www.ajio.com/s/up-to-70-percent-off-5105-68471">
      <img src="images/homeoffer2.jpg" class="d-block w-100" alt="..."></a>
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
    <a href="https://www.ajio.com/s/up-to-70-percent-off-5105-68471">
      <img src="images/homeoffer4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </button>
</div>
                    
<div class="card-group">
    <center>
  <?php
  $card_data=array();
      $card_data=$db->get_product_data();

      if(!empty($card_data))
                        {

                            $counter=307;
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
              


   <div class="cardC" style="border-left: 2px solid grey;border-radius: 7px; width:290px; height:580px; text-align:left; background-color:#FFFFFF; border:0px solid #999; display:inline-table; padding:15px; margin:5px;">
    
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
          if($counter=="312")
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
<br />

<div class="cardC">
<h1 style="font-family:monospace ; margin-left:40%; text-decoration:none; color:bright yellow;"> Only for AJIO </h1>
<a href="https://www.ajio.com/shop/gas">
<img src="images/home_banner2.jpg" class="img-fluid" alt="..." style="width:100%; height:500px;"></a>
</div>
<br />

<div class="card-group">
    <center>
  <?php
  $card_data=array();
      $card_data=$db->get_product_data();

      if(!empty($card_data))
                        {

                            $counter=157;
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
              


   <div class="cardC" style="border-left: 2px solid grey;border-radius: 7px; width:290px; height:580px; text-align:left; background-color:#FFFFFF; border:0px solid #999; display:inline-table; padding:15px; margin:5px;">
    
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
          if($counter=="162")
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

                            $counter=229;
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
              


   <div class="cardC" style="border-left: 2px solid grey;border-radius: 7px; width:290px; height:580px; text-align:left; background-color:#FFFFFF; border:0px solid #999; display:inline-table; padding:15px; margin:5px;">
    
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
          if($counter=="234")
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
<br />


<div class="cardC">
<strong><h1 style="font-family:Trattatello, fantasy ; margin-left:40%; text-decoration:none; color:#5c0099 ;"> Only for Myntra</h1></strong>
<a href="https://www.myntra.com/shop/men">
<img src="images/myntra_banner1.png" class="img-fluid" alt="..." style="width:100%; height:500px;"></a>
</div>

<br />
<br />

<div class="card-group">
    <center>
  <?php
  $card_data=array();
      $card_data=$db->get_product_data();

      if(!empty($card_data))
                        {

                            $counter=281;
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
              


   <div class="cardC" style="border-left: 2px solid grey;border-radius: 7px; width:290px; height:580px; text-align:left; background-color:#FFFFFF; border:0px solid #999; display:inline-table; padding:15px; margin:5px;">
    
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
          if($counter=="286")
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

  


<div style="background-color:black; width:100%; color:white;">
    <div style="display: inline-table;">
        <img src="images/download1.jpg" style="margin-left:70px; display: inline-table;height: 200px; width: 200px; border-radius:100px; float: left; margin-right:20px; margin-top:30px; " />
        <br />
        <br />
		<br />
        <strong> <h3 style="margin-top:190px; margin-left:90px;"> Andy jassy</h3></strong>
<h4 style=" margin-left:90px;color: #0099cc;;"> CEO of Amazon</h4></strong>
</div>


    <div style="display: inline-table;">
        <img src="images/download2.jpg" style="margin-left:70px; display: inline-table;height: 200px; width: 200px; border-radius:100px; float: left; margin-right:20px; margin-top:30px; " />
        <br />
        <br />
		<br />
        <strong> <h3 style="margin-top:190px; margin-left:90px;">Kalyan <br />Kirishnamurthy</h3>
		</strong>
<h4 style=" margin-left:90px;color:#0099cc;"> CEO of Flipkart</h4></strong>
    </div>

	    <div style="display: inline-table;">
        <img src="images/ceo_myntra.jpg" style="margin-left:70px; display: inline-table;height: 200px; width: 200px; border-radius:100px; float: left; margin-right:20px; margin-top:30px; " />
        <br />
        <br />
		<br />
        <strong> <h3 style="margin-top:190px; margin-left:90px;"> Nandita Sinha</h3></strong>
<h4 style=" margin-left:90px;color: #0099cc;"> CEO of Myntra</h4></strong>
    </div>

         <div style="display: inline-table;">
         <img src="images/download4.jpg" style="margin-left:70px; display: inline-table;height: 200px; width: 200px; border-radius:100px; float: left; margin-right:20px; margin-top:30px; " />
        <br />
        <br />
		<br />
        <strong> <h3 style="margin-top:190px; margin-left:90px;"> Vidit Aatrey</h3></strong>
<h4 style=" margin-left:90px;color: #0099cc;;"> CEO of Meesho</h4></strong>
 </div>
 
 	    <div style="display: inline-table;">
		<img src="images/ajio_ceo.jpg" style="margin-left:70px; display: inline-table;height: 200px; width: 200px; border-radius:100px; float: left; margin-right:20px; margin-top:30px; " />
        <br />
        <br /> 
		<br />
        <strong> <h3 style="margin-top:190px; margin-left:90px;"> Vineeth Nair </h3></strong>
<h4 style=" margin-left:90px;color:#0099cc;;"> CEO of Ajio</h4></strong>
</div>

 
<hr />
<div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
              
              <strong><li class="nav-item">
                <a class="nav-link active  menu1" aria-current="page" href="home.php" style="   color:#FFFFFF ;font-family:  Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 22px; margin-left:100px;margin-top:10px;">Get know us</a>
              </li></strong>

              <li class="nav-item">
                <a class="nav-link menu1" href="about.php"  style="  color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px;  margin-left:100px; ">about-us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu1" href="contact.php"  style=" color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px; margin-left:100px;">Contact-us</a>
              </li>
               <li class="nav-item">
                <a class="nav-link menu1" href="contact.php"  style=" color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px; margin-left:100px;">How to Use</a>
              </li>
             </ul>	
			 
             <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-bottom:-100px;" >

             <strong><li class="nav-item">
                <a class="nav-link active  menu1" aria-current="page" href="" style="   color:#FFFFFF ;font-family:  Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 22px; margin-left:500px;margin-top:-185px;">PRODUCTS</a>
              </li></strong>
			  
				<li class="nav-item">
                <a class="nav-link menu1" href="search.php?search_keyword=women" style="  color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size: 20px; margin-left:500px;margin-top:-150px;">Women</a>
              </li>
			  
              <li class="nav-item">
                <a class="nav-link menu1" href="search.php?search_keyword=kau"  style="  color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size: 20px; margin-left:500px;margin-top:-120px;">Men</a>
              </li> 
			  
              <li class="nav-item">
                <a class="nav-link menu1" href="search.php?search_keyword" style=" color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px; margin-left:500px;margin-top:-90px;">kids</a>
              </li>	
			  
              <li class="nav-item">
                <a class="nav-link menu1" href="search.php?search_keyword=jewellery" style=" color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px;  margin-left:800px;margin-top:-150px;">jewellery</a>
              </li>
			  
			  <li class="nav-item">
                <a class="nav-link menu1" href="search.php?search_keyword=electronics"  style=" color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px;  margin-left:800px; margin-top:-120px;">electronics</a>
              </li>
			  
			  <li class="nav-item">
                <a class="nav-link menu1" href="search.php?search_keyword=shoes"  style=" color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px;  margin-left:800px;margin-top:-90px;">Shoes</a>
              </li>
			  
			  <li class="nav-item">
                <a class="nav-link menu1" href="search.php?search_keyword=beauty"  style=" color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px;  margin-left:1100px;margin-top:-150px;">beauty</a>
              </li>
			  
			  <li class="nav-item">
                <a class="nav-link menu1" href="search.php?search_keyword=watches"  style=" color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px;  margin-left:1100px;margin-top:-120px;">Watch</a>
              </li>
			  
			  <li class="nav-item">
                <a class="nav-link menu1" href="search.php?search_keyword= girls western"  style=" color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px;  margin-left:1100px;margin-top:-90px;">girls western</a>
              </li>
              </ul>	
</div>			  
<hr />
<div style="background-color:black;">
				<img src="images/amazon_logo.png "style="margin-left:400px; width:120px;margin-bottom:80px;">
       			<img src="images/flipkart1_logo.png "style="margin-left:20px; width:120px;margin-bottom:80px;">
				<img src="images/meesho1.jpg "style="margin-left:20px; width:120px;margin-bottom:80px;">
       			<img src="images/myntra1_logo.png "style="margin-left:20px; width:120px;margin-bottom:80px;">
       			<img src="images/ajio_logo.jpg "style="margin-left:20px; width:120px;margin-bottom:80px;">

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
     
     background-size:90%;
     background-color:#d1e0e0;
}
.cardH
{
  box-shadow:5px 5px 15px 5px black;
}
.cardC:hover
{
box-shadow:0px 0px 15px 3px black;
}  


</style>
</head>
<body>
 <?php  
 require_once('header1.php');
 ?>
    <center>
    <div style="display: inline-table; width:100px; color:black; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
    <a href="search.php?search_keyword=women">
      <img src="images/images/women1.jpg" class="img-thumbnail cardC" alt="..."
      style="border:0.5px solid rgb(184, 182, 182) ;
      border-radius:70px;
      height:70px;
      width:70px;
      margin-top:0px;"></a>
      Women 
   </div> 


   <div style="display: inline-table; width:100px; color:black; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
   <a href="search.php?search_keyword=kau">
     <img src="images/images/men1.jpg" class="img-thumbnail cardC" alt="..." 
     style="border:0px solid rgb(21, 20, 20) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px; padding:0px;"></a>
     Men
   </div>


    <a href="search.php?search_keyword=kids">
    <div style="display: inline-table; width:100px; color:black; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
      <img src="images/kids4.webp" class="img-thumbnail cardC" alt="..." 
      style="border:0px solid rgb(21, 20, 20) ;
      border-radius:70px;
      height:70px;
      width:70px;
      margin-top:0px;
      padding:0px;"></a>
     Kids
     </div>



  <a href="search.php?search_keyword=jewellery">
<div style="display: inline-table; width:100px;  color:black; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
    <img src="images/jew2.webp" class="img-thumbnail cardC" alt="..." 
    style="border:0px solid rgb(21, 20, 20) ;
    border-radius:70px;
    height:70px;
    width:70px;
    margin-top:0px;
    padding:0px;"></a>

    Jewellery
</div>


<a href="search.php?search_keyword=electronics">
<div style="display: inline-table; width:100px; color:black; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
     <img src="images/images/Electronics1.jpg" class="img-thumbnail cardC" alt="..." 
     style="border:0.5px solid rgb(184, 182, 182) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

     Electronics 
</div>


<a href="search.php?search_keyword=shoes">
<div style="display: inline-table; width:100px;color:black; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
     <img src="images/shoes4.png" class="img-thumbnail cardC" alt="..." 
     style="border:0px solid rgb(21, 20, 20) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

     Shoes
</div>


<a href="search.php?search_keyword=beauty">
<div style="display: inline-table; width:100px; color:black; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
      <img src="images/beauty2.jpg" class="img-thumbnail cardC" alt="..." 
      style="border:0.5px solid rgb(184, 182, 182) ;
      border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

     Beauty
</div>


<a href="search.php?search_keyword=watches">
<div style="display: inline-table; width:100px; color:black; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
      <img src="images/watch.jpg" class="img-thumbnail cardC" alt="..." 
     style="border:0px solid rgb(21, 20, 20) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

     Watches
</div>


<a href="search.php?search_keyword= girls western">
<div style="display: inline-table; width:100px; color:black; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
     <img src="images/western2.jpg" class="img-thumbnail cardC" alt="..." 
     style="border:0px solid rgb(21, 20, 20) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

     Girls Western
</div>


<a href="search.php?search_keyword=mobiles">
<div style="display: inline-table; width:100px; color:black; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
     <img src="images/mob2.png" class="img-thumbnail cardC" alt="..." 
     style="border:0.5px solid rgb(184, 182, 182) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

     Mobiles
</div>


<a href="search.php?search_keyword=bags">
<div style="display: inline-table; width:100px; color:black; text-align: center; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; border: 0px solid white; margin:10px">
     <img src="images/bags2.jpg" class="img-thumbnail cardC"  alt="..." 
     style="border:0.5px solid rgb(184, 182, 182) ;
     border-radius:70px;
     height:70px;
     width:70px;
     margin-top:0px;
     padding:0px;"></a>

    Bags
</div>



</center>
    
      <div id="carouselExampleAutoplaying" class="carousel slide cardC" data-bs-ride="carousel">
        <div class="carousel-inner">

          <div class="carousel-item active">
          <a href="https://www.amazon.in/stores/page/32D390A6-8B75-4BB2-8C0B-8CC71E606E7B?ingress=0&visitId=96ca7624-c439-4b50-8591-9536e0f49236&pf_rd_r=188C5MXKB6NS8W7YGSYJ&pf_rd_p=2796d33d-6426-41a3-a961-b534eeba26b2&pd_rd_r=d2d1306a-b317-40a9-aca9-8ec4be51ebfc&pd_rd_w=9DtKR&pd_rd_wg=QGXJh&ref_=pd_gw_unk">
            <img src="images/home_scroll5.png" class="d-block w-100" alt="...">
             </a>
          </div>
          <div class="carousel-item">
          <a href=" https://www.amazon.in/s?hidden-keywords=B0BF57RN3K+%7C+B0B3RRWSF6+%7C+B0BP18W8TM+%7C+B0B854R7NS+%7C+B09YV4MW2T+%7C+B0B5LVS732+%7C+B0BRKXXPZ7+%7C+B0B3N7LR6K+%7C+B09YV4RG4D+%7C+B0B3MWYCHQ+%7C+B09NVPSCQT+%7C+B0BZVGHPCJ+%7C+B0BVW2ZVT5+%7C+B0BP1GCCK2+%7C+B0BWTRJ5MQ+%7C+B0BRN5HLXW+%7C+B0B5LW5DFQ+%7C+B09ZQK9X8G+%7C+B0BF54LXW6+%7C+B09YV3K34W+%7C+B0BF4YBLPX+%7C+B0BRPWMVC7+%7C+B0BRQFF4HN+%7C+B0BP18QB9L+%7C+B0BVVWXMB3+%7C+B0972BQ2RS+%7C+B0B3MZHZS2+%7C+B0BF563HB4+%7C+B0BJ72WZQ7+%7C+B0BRQ1NLLS+%7C+B0B6BMWKDP+%7C+B0B5LSDT8W+%7C+B0BF5C343N+%7C+B0BRPWY4GM+%7C+B0BRPX1MRG+%7C+B09P18XVW6+%7C+B0B852Z6GY+%7C+B0BRPWSXQZ+%7C+B09PLFJ7ZW+%7C+B0B3RSDSZ3+%7C+B0BVVYXZ1G+%7C+B0BVVZCTTQ+%7C+B0BR2MCMSY+%7C+B0BP1HKG33+%7C+B0BDYNRCRC+%7C+B0BF54972T+%7C+B098T329K3+%7C+B0B85414K1+%7C+B0BNXDPZD5+%7C+B0BRN7HRFW+%7C+B0BP1FSCB7+%7C+B0BMQL7BVS+%7C+B0B3MYPX74+%7C+B0BMQMWDZJ+%7C+B09YV4DC29+%7C+B0BRN59BNQ+%7C+B0BP1PH6T4+%7C+B0BRMY7DQ9+%7C+B09ZL5NR68+%7C+B0BRN56N8H+%7C+B09YV575RK+%7C+B0B2Q1W9WP+%7C+B09YV5HHDB+%7C+B09RKJRCFM+%7C+B09RKD1JD1+%7C+B09P1765VX+%7C+B0B855X6W2+%7C+B09WB54TH4+%7C+B0BF4WVPFD+%7C+B0BY2C9SD7+%7C+B0BRN6P1TV+%7C+B0B3N932ZM+%7C+B0B3MXZL6Z+%7C+B0BRN6BFZF+%7C+B0BRPZBZ66+%7C+B0BRPWMW4D+%7C+B0B853MRMY+%7C+B0BP1PN7DX+%7C+B093HCLPJ5+%7C+B0BRQ1LC8B+%7C+B0BRMXW21H+%7C+B0B3RS9DNF+%7C+B0BRQFWJ35+%7C+B094QXS8NJ+%7C+B0B3MYTGZD+%7C+B0BP18VPT7+%7C+B0B3NB9Y3S+%7C+B0B2X35B1K+%7C+B0BRVRDXG4+%7C+B09PRH4H93+%7C+B09PNKXSKF+%7C+B0BRMYRG6M+%7C+B0BRQ12TF1+%7C+B0BRPZPKJG+%7C+B0BRPZ57WV+%7C+B09HZK7ZLH+%7C+B0B3NDPCS9+%7C+B0BDGMPPH9+%7C+B09HHB691Z+%7C+B09Q3T87VH+%7C+B0BNXFDTZ2+%7C+B0BRQFNHQS+%7C+B09YV2957W+%7C+B0BJ6QYRK8+%7C+B0BRKZG4W7+%7C+B0BF58NVGM+%7C+B0BRQF411D+%7C+B0B5LWP12T+%7C+B0BRQ21JHZ+%7C+B09727J4SQ+%7C+B09Q3SHYJ6+%7C+B0B53QFZPY+%7C+B0BJ6P3K4Y+%7C+B09K7SKYY3+%7C+B0B59XYKJT+%7C+B0BN1ZCCVN+%7C+B0BDGLF9HX+%7C+B0BP1RN9XR+%7C+B0BY2DGB71+%7C+B09Q46LYPM+%7C+B09YV414XP+%7C+B094R1M7VM+%7C+B0B3N6V4X4+%7C+B0BRVRG946+%7C+B0BP1MLLYS+%7C+B09YV463SW+%7C+B09ZKY62H1+%7C+B0BMQN52CW+%7C+B0B3N6FXRN+%7C+B0BRMWKZZN+%7C+B0BDYNXP8L+%7C+B0BF5Q75LJ+%7C+B097R25DP7+%7C+B09YV1WVBW+%7C+B0BJ73KHKJ+%7C+B0BRPYY1FP+%7C+B09728JN7L+%7C+B09NVPDLNV+%7C+B0BMQMQTPW+%7C+B09LCRMJW1+%7C+B09NC2TY11+%7C+B09728Q829+%7C+B0BXSP5BYN+%7C+B09NM8LBP2+%7C+B0BVW1VW1V+%7C+B09NBZJ8NJ+%7C+B09Q4K5C7P+%7C+B0B7JPTMNX+%7C+B09RKCM1J3+%7C+B09728QFXY+%7C+B09GFPSZGV+%7C+B09YV3F8RS+%7C+B097F6QT8Z+%7C+B0BY2BXYW9+%7C+B0BY2C9N11+%7C+B0BMQMMDW1+%7C+B0BF4WNC4R+%7C+B09TTJZG1F+%7C+B09TTKHGM7+%7C+B0BDGHKP3T+%7C+B0B6BLTGTT+%7C+B0BF4WLLFQ+%7C+B09GFRF1BX+%7C+B09BNXQ6BR+%7C+B0BXSVKKDR+%7C+B0BXSQWF7X+%7C+B0BJ6ZWPX5+%7C+B0BDZFXDKJ+%7C+B0BDGKV5L8+%7C+B0BDHCPGN5+%7C+B0BJ73NWMC+%7C+B0B5LT655H+%7C+B0BRVQZ9QK+%7C+B0BRPZLPCH+%7C+B09Y1LBYKY+%7C+B097R2JBDF+%7C+B0B46DZ376+%7C+B09ZQLGRW3+%7C+B0BF5C6SY9+%7C+B0BR2MH438+%7C+B0BDGMJM6B+%7C+B0BF5CX7XF+%7C+B0BDZGBTQX+%7C+B0BP18NCLQ+%7C+B0BVW734MK+%7C+B0BF4V72TX+%7C+B0B2JSPSQM+%7C+B09PRGXJJF+%7C+B0BVW4MP8Q+%7C+B09ZKY327P+%7C+B09ZKV1KKW+%7C+B0B2PZ448K+%7C+B0BDGNC36P+%7C+B0B46D1C65+%7C+B09NC1FX43+%7C+B0BDGQNYPR+%7C+B0BDYR2LP5+%7C+B0B5N66FGB+%7C+B09Y1LJX1G+%7C+B0B3N4KCPZ+%7C+B0BVW4LGW8+%7C+B09NVPJ3P4+%7C+B0B42R4B3L+%7C+B0BQ6MSKXT+%7C+B0BP1N77VY+%7C+B09NVP6HXY+%7C+B0BQ6P1BJZ+%7C+B09Q3QM3Y8+%7C+B09Q3RB4RB+%7C+B0BTMMN81R+%7C+B0B2JQKBC8+%7C+B09Q4MRW85+%7C+B0B46FKMQ3+%7C+B0BTMLFWW7+%7C+B0BR2N6F36+%7C+B09RMPKBDC+%7C+B0BTMM4HJK+%7C+B0BVW4KWKJ+%7C+B0BKLK2RL2+%7C+B0B8ZLR1Z3+%7C+B0BMQLY63N+%7C+B09WB6TXBS+%7C+B0BTMLCN7P+%7C+B097R3CN3Y+%7C+B0B56WM84H+%7C+B09NM8S1V4+%7C+B0BR2MNG31+%7C+B0B56YNX15+%7C+B0B2JT5RJ1+%7C+B0BTMM7CGQ+%7C+B0BNXDTNCK+%7C+B0BTMK6KMP+%7C+B0BQ3MHN6V+%7C+B0BQ3QNF1Z+%7C+B0BQ3PTBXS+%7C+B0BDGMY85X+%7C+B097F657N2+%7C+B0BTMKWLCF+%7C+B09ZKYCDXL+%7C+B0BQ6KVKF7+%7C+B0BRL1BWLZ+%7C+B0B3RF8DQP+%7C+B099DSJNVW+%7C+B0BJ74PQK6+%7C+B09SFZC4R7+%7C+B09Q3P6YL4+%7C+B0B3RD3PFZ+%7C+B09SFYT1Z2+%7C+B0BPHVB531+%7C+B0BMVT1R78+%7C+B0BDYTJM1M+%7C+B0BQ6QXPH4&pd_rd_r=d2d1306a-b317-40a9-aca9-8ec4be51ebfc&pd_rd_w=lnYJA&pd_rd_wg=QGXJh&pf_rd_p=6ae48849-b297-448e-af02-28a3675ddabc&pf_rd_r=188C5MXKB6NS8W7YGSYJ&ref=pd_gw_unk">
            <img src="images/home_scroll6.png" class="d-block w-100" alt="...">
            </a>
          </div>
          <div class="carousel-item">
            <a href=" https://www.amazon.in/s?i=jewelry&rh=n%3A5210079031%2Cp_36%3A-19900&s=jewellery&fs=true&pd_rd_r=d2d1306a-b317-40a9-aca9-8ec4be51ebfc&pd_rd_w=FT9A2&pd_rd_wg=QGXJh&pf_rd_p=3749f44e-fe98-488c-8fe8-6bcd68f686da&pf_rd_r=188C5MXKB6NS8W7YGSYJ&qid=1676384701&rnid=3439822031&ref=pd_gw_unk">
            <img src="images/home_scroll7.png" class="d-block w-100" alt="...">
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
<br />
  
 
 
 
 
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
              

            
   <div class="cardC" style="border-left:2px solid grey;border-radius: 7px; width:290px; height:580px; text-align:left; background-color:#FFFFFF; border:0px solid #999; display:inline-table; padding:15px; margin:5px;">
    
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
          <img src="images/flipkart1_logo.png" style="width:75px; height:30px;" >

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

                            $counter=261;
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
              


   <div class="cardC" style="border-left: 2px solid grey;border-radius: 7px; width:290px; height:580px; text-align:left; background-color:#FFFFFF; border:0px solid #999; display:inline-table; padding:15px; margin:5px;">
    
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
          if($counter=="266")
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





<!-- scrollbar -->

<div id="carouselExampleDark" class="carousel carousel-dark slide cardC" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <a href="https://www.ajio.com/s/up-to-70-percent-off-5105-68473">
      <img src="images/homeoffer.jpg" class="d-block w-100" alt="..."></a>
      <div class="carousel-caption d-none d-md-block">
      </div>
      
    </div>
    <div class="carousel-item" data-bs-interval="2000">
    <a href="https://www.ajio.com/s/up-to-70-percent-off-5105-68471">
      <img src="images/homeoffer2.jpg" class="d-block w-100" alt="..."></a>
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item">
    <a href="https://www.ajio.com/s/up-to-70-percent-off-5105-68471">
      <img src="images/homeoffer4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden"></span>
  </button>
</div>
                    
<div class="card-group">
    <center>
  <?php
  $card_data=array();
      $card_data=$db->get_product_data();

      if(!empty($card_data))
                        {

                            $counter=307;
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
              


   <div class="cardC" style="border-left: 2px solid grey;border-radius: 7px; width:290px; height:580px; text-align:left; background-color:#FFFFFF; border:0px solid #999; display:inline-table; padding:15px; margin:5px;">
    
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
          if($counter=="312")
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
<br />

<div class="cardC">
<h1 style="font-family:monospace ; margin-left:40%; text-decoration:none; color:bright yellow;"> Only for AJIO </h1>
<a href="https://www.ajio.com/shop/gas">
<img src="images/home_banner2.jpg" class="img-fluid" alt="..." style="width:100%; height:500px;"></a>
</div>
<br />

<div class="card-group">
    <center>
  <?php
  $card_data=array();
      $card_data=$db->get_product_data();

      if(!empty($card_data))
                        {

                            $counter=157;
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
              


   <div class="cardC" style="border-left: 2px solid grey;border-radius: 7px; width:290px; height:580px; text-align:left; background-color:#FFFFFF; border:0px solid #999; display:inline-table; padding:15px; margin:5px;">
    
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
          if($counter=="162")
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

                            $counter=229;
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
              


   <div class="cardC" style="border-left: 2px solid grey;border-radius: 7px; width:290px; height:580px; text-align:left; background-color:#FFFFFF; border:0px solid #999; display:inline-table; padding:15px; margin:5px;">
    
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
          if($counter=="234")
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
<br />


<div class="cardC">
<strong><h1 style="font-family:Trattatello, fantasy ; margin-left:40%; text-decoration:none; color:#5c0099 ;"> Only for Myntra</h1></strong>
<a href="https://www.myntra.com/shop/men">
<img src="images/myntra_banner1.png" class="img-fluid" alt="..." style="width:100%; height:500px;"></a>
</div>

<br />
<br />

<div class="card-group">
    <center>
  <?php
  $card_data=array();
      $card_data=$db->get_product_data();

      if(!empty($card_data))
                        {

                            $counter=281;
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
              


   <div class="cardC" style="border-left: 2px solid grey;border-radius: 7px; width:290px; height:580px; text-align:left; background-color:#FFFFFF; border:0px solid #999; display:inline-table; padding:15px; margin:5px;">
    
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
          if($counter=="286")
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

  


<div style="background-color:black; width:100%; color:white;">
    <div style="display: inline-table;">
        <img src="images/download1.jpg" style="margin-left:70px; display: inline-table;height: 200px; width: 200px; border-radius:100px; float: left; margin-right:20px; margin-top:30px; " />
        <br />
        <br />
		<br />
        <strong> <h3 style="margin-top:190px; margin-left:90px;"> Andy jassy</h3></strong>
<h4 style=" margin-left:90px;color: #0099cc;;"> CEO of Amazon</h4></strong>
</div>


    <div style="display: inline-table;">
        <img src="images/download2.jpg" style="margin-left:70px; display: inline-table;height: 200px; width: 200px; border-radius:100px; float: left; margin-right:20px; margin-top:30px; " />
        <br />
        <br />
		<br />
        <strong> <h3 style="margin-top:190px; margin-left:90px;">Kalyan <br />Kirishnamurthy</h3>
		</strong>
<h4 style=" margin-left:90px;color:#0099cc;"> CEO of Flipkart</h4></strong>
    </div>

	    <div style="display: inline-table;">
        <img src="images/ceo_myntra.jpg" style="margin-left:70px; display: inline-table;height: 200px; width: 200px; border-radius:100px; float: left; margin-right:20px; margin-top:30px; " />
        <br />
        <br />
		<br />
        <strong> <h3 style="margin-top:190px; margin-left:90px;"> Nandita Sinha</h3></strong>
<h4 style=" margin-left:90px;color: #0099cc;"> CEO of Myntra</h4></strong>
    </div>

         <div style="display: inline-table;">
         <img src="images/download4.jpg" style="margin-left:70px; display: inline-table;height: 200px; width: 200px; border-radius:100px; float: left; margin-right:20px; margin-top:30px; " />
        <br />
        <br />
		<br />
        <strong> <h3 style="margin-top:190px; margin-left:90px;"> Vidit Aatrey</h3></strong>
<h4 style=" margin-left:90px;color: #0099cc;;"> CEO of Meesho</h4></strong>
 </div>
 
 	    <div style="display: inline-table;">
		<img src="images/ajio_ceo.jpg" style="margin-left:70px; display: inline-table;height: 200px; width: 200px; border-radius:100px; float: left; margin-right:20px; margin-top:30px; " />
        <br />
        <br /> 
		<br />
        <strong> <h3 style="margin-top:190px; margin-left:90px;"> Vineeth Nair </h3></strong>
<h4 style=" margin-left:90px;color:#0099cc;;"> CEO of Ajio</h4></strong>
</div>

 
<hr />
<div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
              
              <strong><li class="nav-item">
                <a class="nav-link active  menu1" aria-current="page" href="home.php" style="   color:#FFFFFF ;font-family:  Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 22px; margin-left:100px;margin-top:10px;">Get know us</a>
              </li></strong>

              <li class="nav-item">
                <a class="nav-link menu1" href="about.php"  style="  color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px;  margin-left:100px; ">about-us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link menu1" href="contact.php"  style=" color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px; margin-left:100px;">Contact-us</a>
              </li>
               <li class="nav-item">
                <a class="nav-link menu1" href="contact.php"  style=" color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px; margin-left:100px;">How to Use</a>
              </li>
             </ul>	
			 
             <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-bottom:-100px;" >

             <strong><li class="nav-item">
                <a class="nav-link active  menu1" aria-current="page" href="" style="   color:#FFFFFF ;font-family:  Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 22px; margin-left:500px;margin-top:-185px;">PRODUCTS</a>
              </li></strong>
			  
				<li class="nav-item">
                <a class="nav-link menu1" href="search.php?search_keyword=women" style="  color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size: 20px; margin-left:500px;margin-top:-150px;">Women</a>
              </li>
			  
              <li class="nav-item">
                <a class="nav-link menu1" href="search.php?search_keyword=kau"  style="  color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;font-size: 20px; margin-left:500px;margin-top:-120px;">Men</a>
              </li> 
			  
              <li class="nav-item">
                <a class="nav-link menu1" href="search.php?search_keyword" style=" color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px; margin-left:500px;margin-top:-90px;">kids</a>
              </li>	
			  
              <li class="nav-item">
                <a class="nav-link menu1" href="search.php?search_keyword=jewellery" style=" color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px;  margin-left:800px;margin-top:-150px;">jewellery</a>
              </li>
			  
			  <li class="nav-item">
                <a class="nav-link menu1" href="search.php?search_keyword=electronics"  style=" color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px;  margin-left:800px; margin-top:-120px;">electronics</a>
              </li>
			  
			  <li class="nav-item">
                <a class="nav-link menu1" href="search.php?search_keyword=shoes"  style=" color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px;  margin-left:800px;margin-top:-90px;">Shoes</a>
              </li>
			  
			  <li class="nav-item">
                <a class="nav-link menu1" href="search.php?search_keyword=beauty"  style=" color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px;  margin-left:1100px;margin-top:-150px;">beauty</a>
              </li>
			  
			  <li class="nav-item">
                <a class="nav-link menu1" href="search.php?search_keyword=watches"  style=" color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px;  margin-left:1100px;margin-top:-120px;">Watch</a>
              </li>
			  
			  <li class="nav-item">
                <a class="nav-link menu1" href="search.php?search_keyword= girls western"  style=" color:#FFFFFF ;font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 20px;  margin-left:1100px;margin-top:-90px;">girls western</a>
              </li>
              </ul>	
</div>			  
<hr />
<div style="background-color:black;">
				<img src="images/amazon_logo.png "style="margin-left:400px; width:120px;margin-bottom:80px;">
       			<img src="images/flipkart1_logo.png "style="margin-left:20px; width:120px;margin-bottom:80px;">
				<img src="images/meesho1.jpg "style="margin-left:20px; width:120px;margin-bottom:80px;">
       			<img src="images/myntra1_logo.png "style="margin-left:20px; width:120px;margin-bottom:80px;">
       			<img src="images/ajio_logo.jpg "style="margin-left:20px; width:120px;margin-bottom:80px;">

</div>
</div>   
</body>
>>>>>>> 8185f01edb776667a1a1507b3f7a424cb70015eb
</html>