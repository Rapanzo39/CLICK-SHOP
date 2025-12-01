<<<<<<< HEAD
<?php

    require_once('lib/functions.php');
	$db = new class_functions();



if(isset($_POST['submit_btn']))
{
	 $var_category = $_POST['categories'];
	 $var_title = $_POST['product_title'];
	 $var_discription = $_POST['product_discription'];
	 $var_search_keyword = $_POST['search_keyword'];
	 $var_price = $_POST['product_price'];
	 $var_mrp = $_POST['product_mrp'];
	 $var_offer= $_POST['product_offer'];
	 $var_link= $_POST['product_link'];
	 $var_brand_logo= $_POST['brand_logo'];

	 $valid_formats = array("jpg","png","gif","bmp","jpeg","JPEG","JPG","BMP","PNG","GIF");

	 if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
	 {	
		 
		 $name 				= 	$_FILES['product_img']['name'];
		 $size 				= 	$_FILES['product_img']['size'];

		 $product_img = $name;
	
		 
		 if(strlen($name))
			 {				
				 list($txt, $ext) = explode(".", $name);
				 
				 if(in_array($ext,$valid_formats))
				 {
					 $tmp = $_FILES['product_img']['tmp_name'];
					 
					 $img_Dir = "profile_photos/";
					 
					 if(!file_exists($img_Dir))
					 {
						 mkdir($img_Dir);
					 }
					 
					 if(move_uploaded_file($tmp,$img_Dir.$name))
					 {
						 
					 }
					 else
					 {
						 $image_error	=	"failed" ;
						 $flag				=	1;
					 }	
				 }
				 else
				 {
					 $image_error	= "Invalid file format";
					 $flag				=	1;	
				 }	
			 }	
	 }
	 


	$db->add_product($var_category,$product_img ,$var_title,$var_discription,$var_search_keyword,$var_price,$var_mrp,$var_offer,$var_link,$var_brand_logo);
}


?>



<head>
     <title>Product Home</title>
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




<center><h1 style="color:#4d004d; font-size:30px; margin-top:40px;" class="page_heading;">Add Product</h1></center>
<div class="form_container" style="width:40% ;">

<form action="product.php" method="POST" enctype="multipart/form-data">

<label>Select Category </label>
<select name="categories"  class="input_box" required >
	<option value="select categories">Select Categories </option>
	<option value="women">Women</option>
	<option value="men">Men </option>
	<option value="kids">Kids </option>
    <option value="jewellery">Jewellery </option>
	<option value="electronics">Electronics </option>
	<option value="shoes">Shoes </option>
	<option value="beauty">Beauty </option>
	<option value="watches">Watches </option>
	<option value="girls_western">Girls Western </option>
	<option value="bags">Bags</option>
</select>

<br />

<label>Product image</label>
<input type="file" class="input_box" name="product_img"   />


<label> Title </label>
<input type ="text"  class="input_box" name="product_title"  placeholder="Product title" required />

<br />

<label> Discription</label>
 <textarea class="input_box" name="product_discription" placeholder="Product Discription" required ></textarea>

<br />

<label>Search_Keyword </label>
<input type ="text"  class="input_box" name="search_keyword"  placeholder="Search Keyword " required />

<br />

<label>Price</label>
<input type ="number" class="input_box" name="product_price"  placeholder="Product Price" required />

<br />

<label> MRP</label>
<input type ="number" class="input_box" name="product_mrp"  placeholder="Product MRP" required />

<br />

<label> Offer</label>
<input name="product_offer" class="input_box" type="number" placeholder="Product offer" required />

<br />

<label>Link  </label>
<input type="text" name="product_link" class="input_box" placeholder="Product link" required />

<br />

<label>Brand_logo</label>
<select name="brand_logo"  class="input_box"  required >
	<option value="select categories">Select Brand </option>
	<option value="amazon">Amazon</option>
	<option value="meesho">Meesho </option>
	<option value="flipkart">FlipKart </option>
    <option value="ajio">Ajio </option>
	<option value="myntra">Myntra </option>

</select>

<br />

<input type="submit" class="btn1"name="submit_btn" value= "Add Product" />
	</form>
	</div>
	</body>
=======
<?php

    require_once('lib/functions.php');
	$db = new class_functions();



if(isset($_POST['submit_btn']))
{
	 $var_category = $_POST['categories'];
	 $var_title = $_POST['product_title'];
	 $var_discription = $_POST['product_discription'];
	 $var_search_keyword = $_POST['search_keyword'];
	 $var_price = $_POST['product_price'];
	 $var_mrp = $_POST['product_mrp'];
	 $var_offer= $_POST['product_offer'];
	 $var_link= $_POST['product_link'];
	 $var_brand_logo= $_POST['brand_logo'];

	 $valid_formats = array("jpg","png","gif","bmp","jpeg","JPEG","JPG","BMP","PNG","GIF");

	 if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
	 {	
		 
		 $name 				= 	$_FILES['product_img']['name'];
		 $size 				= 	$_FILES['product_img']['size'];

		 $product_img = $name;
	
		 
		 if(strlen($name))
			 {				
				 list($txt, $ext) = explode(".", $name);
				 
				 if(in_array($ext,$valid_formats))
				 {
					 $tmp = $_FILES['product_img']['tmp_name'];
					 
					 $img_Dir = "profile_photos/";
					 
					 if(!file_exists($img_Dir))
					 {
						 mkdir($img_Dir);
					 }
					 
					 if(move_uploaded_file($tmp,$img_Dir.$name))
					 {
						 
					 }
					 else
					 {
						 $image_error	=	"failed" ;
						 $flag				=	1;
					 }	
				 }
				 else
				 {
					 $image_error	= "Invalid file format";
					 $flag				=	1;	
				 }	
			 }	
	 }
	 


	$db->add_product($var_category,$product_img ,$var_title,$var_discription,$var_search_keyword,$var_price,$var_mrp,$var_offer,$var_link,$var_brand_logo);
}


?>



<head>
     <title>Product Home</title>
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




<center><h1 style="color:#4d004d; font-size:30px; margin-top:40px;" class="page_heading;">Add Product</h1></center>
<div class="form_container" style="width:40% ;">

<form action="product.php" method="POST" enctype="multipart/form-data">

<label>Select Category </label>
<select name="categories"  class="input_box" required >
	<option value="select categories">Select Categories </option>
	<option value="women">Women</option>
	<option value="men">Men </option>
	<option value="kids">Kids </option>
    <option value="jewellery">Jewellery </option>
	<option value="electronics">Electronics </option>
	<option value="shoes">Shoes </option>
	<option value="beauty">Beauty </option>
	<option value="watches">Watches </option>
	<option value="girls_western">Girls Western </option>
	<option value="bags">Bags</option>
</select>

<br />

<label>Product image</label>
<input type="file" class="input_box" name="product_img"   />


<label> Title </label>
<input type ="text"  class="input_box" name="product_title"  placeholder="Product title" required />

<br />

<label> Discription</label>
 <textarea class="input_box" name="product_discription" placeholder="Product Discription" required ></textarea>

<br />

<label>Search_Keyword </label>
<input type ="text"  class="input_box" name="search_keyword"  placeholder="Search Keyword " required />

<br />

<label>Price</label>
<input type ="number" class="input_box" name="product_price"  placeholder="Product Price" required />

<br />

<label> MRP</label>
<input type ="number" class="input_box" name="product_mrp"  placeholder="Product MRP" required />

<br />

<label> Offer</label>
<input name="product_offer" class="input_box" type="number" placeholder="Product offer" required />

<br />

<label>Link  </label>
<input type="text" name="product_link" class="input_box" placeholder="Product link" required />

<br />

<label>Brand_logo</label>
<select name="brand_logo"  class="input_box"  required >
	<option value="select categories">Select Brand </option>
	<option value="amazon">Amazon</option>
	<option value="meesho">Meesho </option>
	<option value="flipkart">FlipKart </option>
    <option value="ajio">Ajio </option>
	<option value="myntra">Myntra </option>

</select>

<br />

<input type="submit" class="btn1"name="submit_btn" value= "Add Product" />
	</form>
	</div>
	</body>
>>>>>>> 8185f01edb776667a1a1507b3f7a424cb70015eb
	</html>