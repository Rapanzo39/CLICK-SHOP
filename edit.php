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
	 $var_category = $_POST['categories'];
	 $var_product_img = $_POST['product_image'];
	 $var_title = $_POST['product_title'];
	 $var_discription = $_POST['product_discription'];
	 $var_search_keyword = $_POST['search_keyword'];
	 $var_price = $_POST['product_price'];
	 $var_mrp = $_POST['product_mrp'];
	 $var_offer= $_POST['product_offer'];
	 $var_link= $_POST['product_link'];
	 $var_brand_logo= $_POST['brand_logo'];

	$db->edit_product_record($var_category,$var_product_img ,$var_title,$var_discription,$var_search_keyword,$var_price,$var_mrp,$var_offer,$var_link,$var_brand_logo,$edit_id);
}


$card_data = array();
$card_data = $db->get_card_data_from_id($edit_id);
	
	if(!empty($card_data))
	{
		                            $res_id=$card_data['id'];
                                $res_categories=$card_data['categories'];
                                $res_product_image= $card_data['product_image'];
                                $res_product_title=$card_data['product_title'];
                                $res_product_discription=$card_data['product_discription'];
                                $res_search_keyword=$card_data['search_keyword'];
                                $res_product_price=$card_data['product_price'];
                                $res_product_mrp=$card_data['product_mrp'];
                                $res_product_offer=$card_data['product_offer'];
                                $res_product_link= $card_data['product_link'];
                                $res_brand_logo=$card_data['brand_logo'];
                                $res_current_date=$card_data['current_date'];
                                $res_current_time=$card_data['current_time'];
	}

?>



<head>
     <title>Edit</title>
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
			background-image: url('images/user2_back.jpg');
			background-size:100%;
			background-repeat: no-repeat;
		}
    

  
.menu1:hover
  {
    color:#ff99ff !important;
    text-decoration:underline ;
    border-radius:15px;
    font-family: -apple-system, "Helvetica Neue", sans-serif, "Mier Book";
    
  }


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

      <center><h1 style="color:#4d004d; font-size:30px; margin-top:40px;" class="page_heading;">Update Product</h1></center>

      <div class="form_container" style="width:40% ;">

<form action="edit.php" method="POST">

<label>Select Category </label>
<select name="categories"  class="input_box" required >
	<option value="select categories" <?php if($res_categories=="select categories"){ ?> selected <?php } ?>>Select Categories </option>
	<option value="women" <?php if($res_categories=="women"){ ?> selected <?php } ?>>Women</option>
	<option value="men" <?php if($res_categories=="men"){ ?> selected <?php } ?>>Men </option>
	<option value="kids" <?php if($res_categories=="kids"){ ?> selected <?php } ?>>Kids </option>
  <option value="jewellery" <?php if($res_categories=="jewellery"){ ?> selected <?php } ?>>Jewellery </option>
	<option value="electronics" <?php if($res_categories=="electronics"){ ?> selected <?php } ?>>Electronics </option>
	<option value="shoes" <?php if($res_categories=="shoes"){ ?> selected <?php } ?>>Shoes </option>
	<option value="beauty" <?php if($res_categories=="beauty"){ ?> selected <?php } ?>>Beauty </option>
	<option value="watches" <?php if($res_categories=="watches"){ ?> selected <?php } ?>>Watches </option>
	<option value="girls_western" <?php if($res_categories=="girls_western"){ ?> selected <?php } ?>>Girls Western </option>
	<option value="bags" <?php if($res_categories=="bags"){ ?> selected <?php } ?>>Bags</option>
</select>

<br />

<label>Product image</label>
<input type="file"  class="input_box" name="product_image" value="<?php echo  $res_product_image;?>"  />


<label> Title </label>
<input type ="text"  class="input_box" name="product_title"  placeholder="Product title"  required   value="<?php echo  $res_product_title; ?>"  />

<br />

<label> Discription</label>
 <textarea class="input_box" name="product_discription" placeholder="Product Discription" required   ><?php echo   $res_product_discription; ?></textarea>

<br />

<label>Search_Keyword </label>
<input type ="text"  class="input_box" name="search_keyword"  placeholder="Search Keyword " required value="<?php echo   $res_search_keyword; ?>" />

<br />

<label>Price</label>
<input type ="number" class="input_box" name="product_price"  placeholder="Product Price" required value="<?php echo  $res_product_price; ?>" />

<br />

<label> MRP</label>
<input type ="number" class="input_box" name="product_mrp"  placeholder="Product MRP" required  value="<?php echo $res_product_mrp; ?>" />

<br />

<label> Offer</label>
<input name="product_offer" class="input_box" type="number" placeholder="Product offer" required  value="<?php echo  $res_product_offer; ?>"/>

<br />

<label>Link  </label>
<input type="text" name="product_link" class="input_box" placeholder="Product link" required value="<?php echo  $res_product_link; ?>" />

<br />

<label>Brand_logo</label>
<select name="brand_logo"  class="input_box"  required >
	<option value="select categories" >Select Brand </option>
	<option value="amazon" <?php if($res_brand_logo=="amazon"){ ?>selected <?php } ?>>Amazon</option>
	<option value="meesho" <?php if($res_brand_logo=="meesho"){ ?>selected <?php } ?>>Meesho </option>
	<option value="flipkart" <?php if($res_brand_logo=="flipkart"){ ?>selected <?php } ?>>FlipKart </option>
    <option value="ajio" <?php if($res_brand_logo=="ajio"){ ?>selected <?php } ?>>Ajio </option>
	<option value="myntra" <?php if($res_brand_logo=="myntra"){ ?>selected <?php } ?>>Myntra </option>

</select>

<br />

<input type="submit" class="btn1"name="submit_btn" value= "Update Product" />
	</form>
	</div>
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
	 $var_category = $_POST['categories'];
	 $var_product_img = $_POST['product_image'];
	 $var_title = $_POST['product_title'];
	 $var_discription = $_POST['product_discription'];
	 $var_search_keyword = $_POST['search_keyword'];
	 $var_price = $_POST['product_price'];
	 $var_mrp = $_POST['product_mrp'];
	 $var_offer= $_POST['product_offer'];
	 $var_link= $_POST['product_link'];
	 $var_brand_logo= $_POST['brand_logo'];

	$db->edit_product_record($var_category,$var_product_img ,$var_title,$var_discription,$var_search_keyword,$var_price,$var_mrp,$var_offer,$var_link,$var_brand_logo,$edit_id);
}


$card_data = array();
$card_data = $db->get_card_data_from_id($edit_id);
	
	if(!empty($card_data))
	{
		                            $res_id=$card_data['id'];
                                $res_categories=$card_data['categories'];
                                $res_product_image= $card_data['product_image'];
                                $res_product_title=$card_data['product_title'];
                                $res_product_discription=$card_data['product_discription'];
                                $res_search_keyword=$card_data['search_keyword'];
                                $res_product_price=$card_data['product_price'];
                                $res_product_mrp=$card_data['product_mrp'];
                                $res_product_offer=$card_data['product_offer'];
                                $res_product_link= $card_data['product_link'];
                                $res_brand_logo=$card_data['brand_logo'];
                                $res_current_date=$card_data['current_date'];
                                $res_current_time=$card_data['current_time'];
	}

?>



<head>
     <title>Edit</title>
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
			background-image: url('images/user2_back.jpg');
			background-size:100%;
			background-repeat: no-repeat;
		}
    

  
.menu1:hover
  {
    color:#ff99ff !important;
    text-decoration:underline ;
    border-radius:15px;
    font-family: -apple-system, "Helvetica Neue", sans-serif, "Mier Book";
    
  }


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

      <center><h1 style="color:#4d004d; font-size:30px; margin-top:40px;" class="page_heading;">Update Product</h1></center>

      <div class="form_container" style="width:40% ;">

<form action="edit.php" method="POST">

<label>Select Category </label>
<select name="categories"  class="input_box" required >
	<option value="select categories" <?php if($res_categories=="select categories"){ ?> selected <?php } ?>>Select Categories </option>
	<option value="women" <?php if($res_categories=="women"){ ?> selected <?php } ?>>Women</option>
	<option value="men" <?php if($res_categories=="men"){ ?> selected <?php } ?>>Men </option>
	<option value="kids" <?php if($res_categories=="kids"){ ?> selected <?php } ?>>Kids </option>
  <option value="jewellery" <?php if($res_categories=="jewellery"){ ?> selected <?php } ?>>Jewellery </option>
	<option value="electronics" <?php if($res_categories=="electronics"){ ?> selected <?php } ?>>Electronics </option>
	<option value="shoes" <?php if($res_categories=="shoes"){ ?> selected <?php } ?>>Shoes </option>
	<option value="beauty" <?php if($res_categories=="beauty"){ ?> selected <?php } ?>>Beauty </option>
	<option value="watches" <?php if($res_categories=="watches"){ ?> selected <?php } ?>>Watches </option>
	<option value="girls_western" <?php if($res_categories=="girls_western"){ ?> selected <?php } ?>>Girls Western </option>
	<option value="bags" <?php if($res_categories=="bags"){ ?> selected <?php } ?>>Bags</option>
</select>

<br />

<label>Product image</label>
<input type="file"  class="input_box" name="product_image" value="<?php echo  $res_product_image;?>"  />


<label> Title </label>
<input type ="text"  class="input_box" name="product_title"  placeholder="Product title"  required   value="<?php echo  $res_product_title; ?>"  />

<br />

<label> Discription</label>
 <textarea class="input_box" name="product_discription" placeholder="Product Discription" required   ><?php echo   $res_product_discription; ?></textarea>

<br />

<label>Search_Keyword </label>
<input type ="text"  class="input_box" name="search_keyword"  placeholder="Search Keyword " required value="<?php echo   $res_search_keyword; ?>" />

<br />

<label>Price</label>
<input type ="number" class="input_box" name="product_price"  placeholder="Product Price" required value="<?php echo  $res_product_price; ?>" />

<br />

<label> MRP</label>
<input type ="number" class="input_box" name="product_mrp"  placeholder="Product MRP" required  value="<?php echo $res_product_mrp; ?>" />

<br />

<label> Offer</label>
<input name="product_offer" class="input_box" type="number" placeholder="Product offer" required  value="<?php echo  $res_product_offer; ?>"/>

<br />

<label>Link  </label>
<input type="text" name="product_link" class="input_box" placeholder="Product link" required value="<?php echo  $res_product_link; ?>" />

<br />

<label>Brand_logo</label>
<select name="brand_logo"  class="input_box"  required >
	<option value="select categories" >Select Brand </option>
	<option value="amazon" <?php if($res_brand_logo=="amazon"){ ?>selected <?php } ?>>Amazon</option>
	<option value="meesho" <?php if($res_brand_logo=="meesho"){ ?>selected <?php } ?>>Meesho </option>
	<option value="flipkart" <?php if($res_brand_logo=="flipkart"){ ?>selected <?php } ?>>FlipKart </option>
    <option value="ajio" <?php if($res_brand_logo=="ajio"){ ?>selected <?php } ?>>Ajio </option>
	<option value="myntra" <?php if($res_brand_logo=="myntra"){ ?>selected <?php } ?>>Myntra </option>

</select>

<br />

<input type="submit" class="btn1"name="submit_btn" value= "Update Product" />
	</form>
	</div>
	</body>
</html>
>>>>>>> 8185f01edb776667a1a1507b3f7a424cb70015eb
