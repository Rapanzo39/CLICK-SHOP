<<<<<<< HEAD
<?php
    require_once('lib/functions.php');
    $db= new class_functions();


    if(isset($_GET['delete_id']))	
	{
		$del_id	=	$_GET['delete_id'];
		
		$db->delete_product_record($del_id);
		
	}

?>


<html>
    <head>
        <title>Product Report</title>
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
                background-color: #ccf5ff;
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

    <?php  
 require_once('admin_header.php');
 ?> 


<a href="product_report.php?excel_export" style="border:3px solid black; font-size:20px;  border-radius:10px; color:white; margin-top:30px; float:right; margin-right:20px; padding:5px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; background-color:#000099;">Excel Export </a>


<center> <h1 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;margin-top:20px; text-decoration:none;">Product Report</h1></center><br />
        <table border="5" width="10%" cellspacing="5" cellpadding="7">
            <thead class="thead" style="font-size: 20px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
            <th>Sr No.</th>
            <th>Category</th>
              <th>Product image</th>
              <th>Product title</th>
              <th>Product discription</th>
              <th>search_keyword</th>
              <th>Product price</th>
              <th>Product mrp</th>
              <th>Product Offer</th>
              <th>Product link</th>
              <th>Product logo</th>
              <th>Date</th>
              <th>Time</th>
              <th>Edit</th>
			        <th>Delete</th>
            </thead>
            <tbody>
            
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
                                $res_search_keyword=$card_data[$counter]['search_keyword'];
                                $res_product_price=$card_data[$counter]['product_price'];
                                $res_product_mrp=$card_data[$counter]['product_mrp'];
                                $res_product_offer=$card_data[$counter]['product_offer'];
                                $res_product_link= $card_data[$counter]['product_link'];
                                $res_brand_logo=$card_data[$counter]['brand_logo'];
                                $res_current_date=$card_data[$counter]['current_date'];
                                $res_current_time=$card_data[$counter]['current_time'];
                                ?>

                               <tr>
                                     <td><?php echo $counter+1; ?></td>
                                     <td><?php echo $res_categories; ?></td>
                                     <td><?php echo $res_product_image; ?></td>
                                     <td><?php echo $res_product_title; ?></td>
                                     <td><?php echo $res_product_discription; ?></td>
                                     <td><?php echo $res_search_keyword; ?></td>
                                     <td><?php echo $res_product_price; ?></td>
                                     <td><?php echo $res_product_mrp; ?></td>
                                     <td><?php echo $res_product_offer;?></td>
                                     <td><?php echo $res_product_link; ?></td>
                                     <td><?php echo $res_brand_logo; ?></td>
                                     <td><?php echo $res_current_date ;?></td>
                                      <td><?php echo $res_current_time; ?></td>
                                      <td>
					                            <a href="edit.php?edit_id=<?php echo $res_id; ?>">Edit</a>
                                      </td>
                                      <td>
                                        <a href="product_report.php?delete_id=<?php echo $res_id; ?>">Delete</a>
                                      </td>
                              </tr>

                            <?php
                               $counter++;
                            }
                        }

                        else
                        {
                         echo"Record not found";
                        }
                        if(isset($_GET['excel_export']))	
                        {		
                        $filename="product_report".date('Ymd') . ".xls";
                        header("Content-Type: application/vnd.ms-excel");		
                        header("Content-Disposition: attachment; filename=\"$filename\"");			
                        $show_coloumn = false;		
                         if(!empty($product_data))
                        {		  
                         foreach($product_data as $record)
                         {			
                          if(!$show_coloumn) 
                          {			  
                            // display field/column names in first row			  
                            echo implode("\t", array_keys($record)) . "\n";			  
                            $show_coloumn = true;			
                          }			
                            echo implode("\t", array_values($record)) . "\n";		 
                         }		
                        }		
                        exit;  	
                    }
                ?>


            </tbody>

        </table>
    </body>

</html>

=======
<?php
    require_once('lib/functions.php');
    $db= new class_functions();


    if(isset($_GET['delete_id']))	
	{
		$del_id	=	$_GET['delete_id'];
		
		$db->delete_product_record($del_id);
		
	}

?>


<html>
    <head>
        <title>Product Report</title>
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
                background-color: #ccf5ff;
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

    <?php  
 require_once('admin_header.php');
 ?> 


<a href="product_report.php?excel_export" style="border:3px solid black; font-size:20px;  border-radius:10px; color:white; margin-top:30px; float:right; margin-right:20px; padding:5px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; background-color:#000099;">Excel Export </a>


<center> <h1 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;margin-top:20px; text-decoration:none;">Product Report</h1></center><br />
        <table border="5" width="10%" cellspacing="5" cellpadding="7">
            <thead class="thead" style="font-size: 20px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
            <th>Sr No.</th>
            <th>Category</th>
              <th>Product image</th>
              <th>Product title</th>
              <th>Product discription</th>
              <th>search_keyword</th>
              <th>Product price</th>
              <th>Product mrp</th>
              <th>Product Offer</th>
              <th>Product link</th>
              <th>Product logo</th>
              <th>Date</th>
              <th>Time</th>
              <th>Edit</th>
			        <th>Delete</th>
            </thead>
            <tbody>
            
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
                                $res_search_keyword=$card_data[$counter]['search_keyword'];
                                $res_product_price=$card_data[$counter]['product_price'];
                                $res_product_mrp=$card_data[$counter]['product_mrp'];
                                $res_product_offer=$card_data[$counter]['product_offer'];
                                $res_product_link= $card_data[$counter]['product_link'];
                                $res_brand_logo=$card_data[$counter]['brand_logo'];
                                $res_current_date=$card_data[$counter]['current_date'];
                                $res_current_time=$card_data[$counter]['current_time'];
                                ?>

                               <tr>
                                     <td><?php echo $counter+1; ?></td>
                                     <td><?php echo $res_categories; ?></td>
                                     <td><?php echo $res_product_image; ?></td>
                                     <td><?php echo $res_product_title; ?></td>
                                     <td><?php echo $res_product_discription; ?></td>
                                     <td><?php echo $res_search_keyword; ?></td>
                                     <td><?php echo $res_product_price; ?></td>
                                     <td><?php echo $res_product_mrp; ?></td>
                                     <td><?php echo $res_product_offer;?></td>
                                     <td><?php echo $res_product_link; ?></td>
                                     <td><?php echo $res_brand_logo; ?></td>
                                     <td><?php echo $res_current_date ;?></td>
                                      <td><?php echo $res_current_time; ?></td>
                                      <td>
					                            <a href="edit.php?edit_id=<?php echo $res_id; ?>">Edit</a>
                                      </td>
                                      <td>
                                        <a href="product_report.php?delete_id=<?php echo $res_id; ?>">Delete</a>
                                      </td>
                              </tr>

                            <?php
                               $counter++;
                            }
                        }

                        else
                        {
                         echo"Record not found";
                        }
                        if(isset($_GET['excel_export']))	
                        {		
                        $filename="product_report".date('Ymd') . ".xls";
                        header("Content-Type: application/vnd.ms-excel");		
                        header("Content-Disposition: attachment; filename=\"$filename\"");			
                        $show_coloumn = false;		
                         if(!empty($product_data))
                        {		  
                         foreach($product_data as $record)
                         {			
                          if(!$show_coloumn) 
                          {			  
                            // display field/column names in first row			  
                            echo implode("\t", array_keys($record)) . "\n";			  
                            $show_coloumn = true;			
                          }			
                            echo implode("\t", array_values($record)) . "\n";		 
                         }		
                        }		
                        exit;  	
                    }
                ?>


            </tbody>

        </table>
    </body>

</html>

>>>>>>> 8185f01edb776667a1a1507b3f7a424cb70015eb
<!--#ccf5ff;-->