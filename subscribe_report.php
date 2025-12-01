<<<<<<< HEAD
<?php
    require_once('lib/functions.php');
    $db= new class_functions();

    if(isset($_GET['delete_id']))	
    {
      $del1_id	=	$_GET['delete_id'];
      
      $db->delete_subscribe_record($del1_id);
      
    }
  
?>


<html>
    <head>
        <title>Subscribe_Report</title>
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
    <a href="subscribe_report.php?excel_export" style="border:3px solid black; font-size:20px;  border-radius:10px; color:white; margin-top:30px; float:right; margin-right:20px; padding:5px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; background-color:#000099;">Excel Export </a>



 <center> <h1 style="text-decoration:none; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; margin-top:20px;">Subscribe Report</h1></center>
        <table border="1" width="100%" cellspacing="1" cellpadding="10">
            <thead class="thead" style="font-size: 20px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><br />
            <th >Sr No.</th>
              <th >Email id</th>
              <th >username</th>
              <th >Mobile number</th>
              <th >Date</th>
              <th >Time</th>
              <th>Edit</th>
			        <th>Delete</th>

            </thead>
            <tbody>
                <?php
                        $user_data=array();
                        $user_data=$db->get_subscriber_data();
                       
                        if(!empty($user_data))
                        {

                            $counter=0;
                            foreach($user_data as $record)
                            {
                                $res_id=$user_data[$counter]['id'];
                                $res_email_id=$user_data[$counter]['email_id'];
                                $res_username= $user_data[$counter]['username'];
                                $res_mobile_number=$user_data[$counter]['mobile_number'];
                                $res_current_date=$user_data[$counter]['current_date'];
                                $res_current_time=$user_data[$counter]['current_time'];
                                ?>

                               <tr>
                                     <td><?php echo $counter+1; ?></td>
                                     <td><?php echo $res_email_id; ?></td>
                                     <td><?php echo $res_username;?></td>
                                     <td><?php echo $res_mobile_number; ?></td>
                                     <td><?php echo $res_current_date ;?></td>
                                      <td><?php echo $res_current_time; ?></td>
                                      <td>
					                            <a href="subscribe_edit.php?edit_id=<?php echo $res_id; ?>">Edit</a>
                                      </td>
                                      <td>
                                        <a href="subscribe_report.php?delete_id=<?php echo $res_id; ?>">Delete</a>
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
                        $filename="subscribe_report".date('Ymd') . ".xls";
                        header("Content-Type: application/vnd.ms-excel");		
                        header("Content-Disposition: attachment; filename=\"$filename\"");			
                        $show_coloumn = false;		
                         if(!empty($user_data))
                        {		  
                         foreach($user_data as $record)
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

=======
<?php
    require_once('lib/functions.php');
    $db= new class_functions();

    if(isset($_GET['delete_id']))	
    {
      $del1_id	=	$_GET['delete_id'];
      
      $db->delete_subscribe_record($del1_id);
      
    }
  
?>


<html>
    <head>
        <title>Subscribe_Report</title>
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
    <a href="subscribe_report.php?excel_export" style="border:3px solid black; font-size:20px;  border-radius:10px; color:white; margin-top:30px; float:right; margin-right:20px; padding:5px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; background-color:#000099;">Excel Export </a>



 <center> <h1 style="text-decoration:none; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; margin-top:20px;">Subscribe Report</h1></center>
        <table border="1" width="100%" cellspacing="1" cellpadding="10">
            <thead class="thead" style="font-size: 20px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><br />
            <th >Sr No.</th>
              <th >Email id</th>
              <th >username</th>
              <th >Mobile number</th>
              <th >Date</th>
              <th >Time</th>
              <th>Edit</th>
			        <th>Delete</th>

            </thead>
            <tbody>
                <?php
                        $user_data=array();
                        $user_data=$db->get_subscriber_data();
                       
                        if(!empty($user_data))
                        {

                            $counter=0;
                            foreach($user_data as $record)
                            {
                                $res_id=$user_data[$counter]['id'];
                                $res_email_id=$user_data[$counter]['email_id'];
                                $res_username= $user_data[$counter]['username'];
                                $res_mobile_number=$user_data[$counter]['mobile_number'];
                                $res_current_date=$user_data[$counter]['current_date'];
                                $res_current_time=$user_data[$counter]['current_time'];
                                ?>

                               <tr>
                                     <td><?php echo $counter+1; ?></td>
                                     <td><?php echo $res_email_id; ?></td>
                                     <td><?php echo $res_username;?></td>
                                     <td><?php echo $res_mobile_number; ?></td>
                                     <td><?php echo $res_current_date ;?></td>
                                      <td><?php echo $res_current_time; ?></td>
                                      <td>
					                            <a href="subscribe_edit.php?edit_id=<?php echo $res_id; ?>">Edit</a>
                                      </td>
                                      <td>
                                        <a href="subscribe_report.php?delete_id=<?php echo $res_id; ?>">Delete</a>
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
                        $filename="subscribe_report".date('Ymd') . ".xls";
                        header("Content-Type: application/vnd.ms-excel");		
                        header("Content-Disposition: attachment; filename=\"$filename\"");			
                        $show_coloumn = false;		
                         if(!empty($user_data))
                        {		  
                         foreach($user_data as $record)
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

>>>>>>> 8185f01edb776667a1a1507b3f7a424cb70015eb
</html>