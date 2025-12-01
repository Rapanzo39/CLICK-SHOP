<<<<<<< HEAD
<?php
    require_once('lib/functions.php');
    $db= new class_functions();
?>


<html>
    <head>
        <title>product report</title>
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
            </style>
    </head>
    <body>
        <center> <h1 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Product Report</h1></center>
        <table border="1" width="100%" cellspacing="1" cellpadding="10">
            <thead class="thead" style="font-size: 20px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
            <th>Sr No.</th>
            <th>Category</th>
              <th>Product image</th>
              <th>Product title</th>
              <th>Product discription</th>
              <th>Product price</th>
              <th>Product mrp</th>
              <th>Product Offer</th>
              <th>Product link</th>
              <th>Product logo</th>
              <th>Date</th>
              <th>Time</th>

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
                                $res_product_price=$card_data[$counter]['product_price'];
                                $res_product_mrp=$card_data[$counter]['product_mrp'];
                                $res_product_offer=$card_data[$counter]['product_offer'];
                               $res_product_link= $card_data[$counter]['product_link'];
                                $res_brand_logo=$card_data[$counter]['brand_logo'];
                                $res_current_date=$card_data[$counter]['current_date'];
                                $res_current_time=$card_data[$counter]['current_time'];
                                ?>
                            <div class="card" style="border-left: 2px solid black;border-radius: 7px;">
                               <tr>
                                     <td><?php echo $res_product_image; ?></td>

                                     <div class="card-body">
                                     <td><?php echo $counter+1; ?></td>
                                     <td><?php echo $res_categories; ?></td>
                                     <td><?php echo $res_product_title; ?></td>
                                     <td><?php echo $res_product_discription; ?></td>
                                     <td><?php echo $res_product_price; ?></td>
                                     <td><?php echo $res_product_mrp; ?></td>
                                     <td><?php echo $res_product_offer;?></td>
                                     <td><?php echo $res_product_link; ?></td>
                                     <td><?php echo $res_brand_logo; ?></td>
                                     <td><?php echo $res_current_date ;?></td>
                                      <td><?php echo $res_current_time; ?></td>
                              </tr>
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


            </tbody>

        </table>
    </body>
=======
<?php
    require_once('lib/functions.php');
    $db= new class_functions();
?>


<html>
    <head>
        <title>product report</title>
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
            </style>
    </head>
    <body>
        <center> <h1 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">Product Report</h1></center>
        <table border="1" width="100%" cellspacing="1" cellpadding="10">
            <thead class="thead" style="font-size: 20px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
            <th>Sr No.</th>
            <th>Category</th>
              <th>Product image</th>
              <th>Product title</th>
              <th>Product discription</th>
              <th>Product price</th>
              <th>Product mrp</th>
              <th>Product Offer</th>
              <th>Product link</th>
              <th>Product logo</th>
              <th>Date</th>
              <th>Time</th>

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
                                $res_product_price=$card_data[$counter]['product_price'];
                                $res_product_mrp=$card_data[$counter]['product_mrp'];
                                $res_product_offer=$card_data[$counter]['product_offer'];
                               $res_product_link= $card_data[$counter]['product_link'];
                                $res_brand_logo=$card_data[$counter]['brand_logo'];
                                $res_current_date=$card_data[$counter]['current_date'];
                                $res_current_time=$card_data[$counter]['current_time'];
                                ?>
                            <div class="card" style="border-left: 2px solid black;border-radius: 7px;">
                               <tr>
                                     <td><?php echo $res_product_image; ?></td>

                                     <div class="card-body">
                                     <td><?php echo $counter+1; ?></td>
                                     <td><?php echo $res_categories; ?></td>
                                     <td><?php echo $res_product_title; ?></td>
                                     <td><?php echo $res_product_discription; ?></td>
                                     <td><?php echo $res_product_price; ?></td>
                                     <td><?php echo $res_product_mrp; ?></td>
                                     <td><?php echo $res_product_offer;?></td>
                                     <td><?php echo $res_product_link; ?></td>
                                     <td><?php echo $res_brand_logo; ?></td>
                                     <td><?php echo $res_current_date ;?></td>
                                      <td><?php echo $res_current_time; ?></td>
                              </tr>
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


            </tbody>

        </table>
    </body>
>>>>>>> 8185f01edb776667a1a1507b3f7a424cb70015eb
</html>