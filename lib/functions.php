<?php
 
 session_start();

date_default_timezone_set('Asia/Kolkata');

class class_functions
{
  private $con;

  function __construct()
  {
		//Database connectivity
		$this->con = new mysqli("localhost","root","","click_shop");
	}

	//card_insert_query
  function add_product($categories,$product_img ,$product_title,$product_discription,$search_keyword, $product_price, $product_mrp,$product_offer,$product_link,$brand_logo)
	{
		
		$current_date = date("Y-m-d");
		$current_time = date("H:i:s A");
		
		if($stmt = $this->con->prepare("INSERT INTO `add_product`(`categories`,`product_image`, `product_title`, `product_discription`,`search_keyword`, `product_price`, `product_mrp`, `product_offer`, `product_link`, `brand_logo`, `date`, `time`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)"))
		{
			
			$stmt->bind_param("ssssssssssss",$categories,$product_img,$product_title,$product_discription,$search_keyword,$product_price, $product_mrp, $product_offer,$product_link,$brand_logo,$current_date,$current_time);
			
			if($stmt->execute())
			{
				return true;
			}
			else
			{
				echo $stmt->error;
				return false;
			}
		}
	}

	//subscribe_insert_query

	function subscribe_insert($email_id,$username,$mobile_number)
	{
		$current_date = date("Y-m-d");
		$current_time = date("H:i:s A");
		
		if($stmt = $this->con->prepare("INSERT INTO `subscribe`( `email_id`, `username`, `mobile_number`, `date`, `time`) VALUES (?,?,?,?,?);"))
		{
			$stmt->bind_param("sssss",$email_id,$username,$mobile_number,$current_date,$current_time);
			
			if($stmt->execute())
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}




//card_report_select_query

	function get_product_data()
	{
		if($stmt=$this->con->prepare("SELECT `id`, `categories`, `product_image`, `product_title`, `product_discription`,`search_keyword`, `product_price`, `product_mrp`, `product_offer`, `product_link`, `brand_logo`, `date`, `time` FROM `add_product`"))
		{
			$stmt->bind_result($res_id,$res_categories,$res_product_image,$res_product_title,$res_product_discription,$res_search_keyword,$res_product_price,$res_product_mrp,$res_product_offer,$res_product_link,$res_brand_logo,$res_current_date,$res_current_time);
			
			if($stmt->execute())
			{
				$data=array();
				$counter=0;

				while($stmt->fetch())
				{
					$data[$counter]['id']=$res_id;
					$data[$counter]['categories']=$res_categories;
					$data[$counter]['product_image']=$res_product_image;
					$data[$counter]['product_title']=$res_product_title;
					$data[$counter]['product_discription']=$res_product_discription;
					$data[$counter]['search_keyword']=$res_search_keyword;
					$data[$counter]['product_price']=$res_product_price;
					$data[$counter]['product_mrp']=$res_product_mrp;
					$data[$counter]['product_offer']=$res_product_offer;
					$data[$counter]['product_link']=$res_product_link;
					$data[$counter]['brand_logo']=$res_brand_logo;
					$data[$counter]['current_date']=$res_current_date;
					$data[$counter]['current_time']=$res_current_time;

					$counter++;
				}
				if(!empty($data))
				{
					return $data;
				}
				else
				{
					 return false;
				}
			}
		}
	}


	//subscribe_report_select_query

	function get_subscriber_data()
	{
		if($stmt=$this->con->prepare("SELECT `id`, `email_id`, `username`, `mobile_number`, `date`, `time` FROM `subscribe`"))
		{
			$stmt->bind_result($res_id,$res_email_id,$res_username,$res_mobile_number,$res_current_date,$res_current_time);
			
			if($stmt->execute())
			{
				$data1=array();
				$counter=0;

				while($stmt->fetch())
				{
					$data1[$counter]['id']=$res_id;
					$data1[$counter]['email_id']=$res_email_id;
					$data1[$counter]['username']=$res_username;
					$data1[$counter]['mobile_number']=$res_mobile_number;
					$data1[$counter]['current_date']=$res_current_date;
					$data1[$counter]['current_time']=$res_current_time;

					$counter++;
				}
				if(!empty($data1))
				{
					return $data1;
				}
				else
				{
					 return false;
				}
			}
		}
	}


//product_report delect_query

function delete_product_record($del_id)
	{
		

		if($stmt = $this->con->prepare("DELETE FROM `add_product` WHERE `id`=? "))
		{
			$stmt->bind_param("i",$del_id);
			
			if($stmt->execute())
			{
				return true;
			}
			else{
				return false;
			}
		}
	}

	//subscribe_report delect_query

	function delete_subscribe_record($del1_id)
	{
		

		if($stmt = $this->con->prepare(" DELETE FROM `subscribe` WHERE `id`=?"))
		{
			$stmt->bind_param("i",$del1_id);
			
			if($stmt->execute())
			{
				return true;
			}
			else{
				return false;
			}
		}
	}
	
//search_bar

function search_bar($search)
{
	$search;
	if($stmt = $this->con->prepare("SELECT `id`, `categories`, `product_image`, `product_title`, `product_discription`,`search_keyword`, `product_price`, `product_mrp`, `product_offer`, `product_link`, `brand_logo`,`date`,`time` FROM `add_product` WHERE `product_discription` like '%$search%' OR `product_title` like '%$search%' OR `search_keyword` like '%$search%' OR `categories` like '%$search%'"))
	{
		//$stmt->bind_param("s",$search);

		$stmt->bind_result($res_id,$res_categories,$res_product_image,$res_product_title,$res_product_discription,$res_search_keyword,$res_product_price,$res_product_mrp,$res_product_offer,$res_product_link,$res_brand_logo,$res_current_date,$res_current_time);

		
		if($stmt->execute())
			{
				$data2=array();
				$counter=0;

				while($stmt->fetch())
				{
					$data2[$counter]['id']=$res_id;
					$data2[$counter]['categories']=$res_categories;
					$data2[$counter]['product_image']=$res_product_image;
					$data2[$counter]['product_title']=$res_product_title;
					$data2[$counter]['product_discription']=$res_product_discription;
					$data2[$counter]['search_keyword']=$res_search_keyword;
					$data2[$counter]['product_price']=$res_product_price;
					$data2[$counter]['product_mrp']=$res_product_mrp;
					$data2[$counter]['product_offer']=$res_product_offer;
					$data2[$counter]['product_link']=$res_product_link;
					$data2[$counter]['brand_logo']=$res_brand_logo;
					$data2[$counter]['current_date']=$res_current_date;
					$data2[$counter]['current_time']=$res_current_time;

					$counter++;
				}
				if(!empty($data2))
				{
					return $data2;
				}
				else
				{
					return false; 
				}
			}
	}


}

//edit_record

function edit_product_record($var_categories,$var_product_img ,$var_product_title,$var_product_discription,$var_search_keyword, $var_product_price, $var_product_mrp,$var_product_offer,$var_product_link,$var_brand_logo,$edit_id)
	{
		$current_date = date("Y-m-d");
		$current_time = date("H:i:s A");

		if($stmt = $this->con->prepare("UPDATE `add_product` SET `categories`=?,`product_image`=?,`product_title`=?,`product_discription`=?,`search_keyword`=?,`product_price`=?,`product_mrp`=?,`product_offer`=?,`product_link`=?,`brand_logo`=?,`date`=?,`time`=? WHERE `id`=?"))
		{
			$stmt->bind_param("ssssssssssssi",$var_categories,$var_product_img ,$var_product_title,$var_product_discription,$var_search_keyword, $var_product_price, $var_product_mrp,$var_product_offer,$var_product_link,$var_brand_logo,$current_date,$current_time,$edit_id);
			
			if($stmt->execute())
			{
				return true;
			}
			else{
				return false;
			}
		}
	}


	function get_card_data_from_id($edit_id)
	{
		if($stmt = $this->con->prepare("SELECT `id`, `categories`, `product_image`, `product_title`, `product_discription`,`search_keyword`, `product_price`, `product_mrp`, `product_offer`, `product_link`, `brand_logo`,`date`,`time` FROM `add_product` WHERE `id`=?"))
		{
			$stmt->bind_param("i",$edit_id);
			
			$stmt->bind_result($res_id,$res_categories,$res_product_image,$res_product_title,$res_product_discription,$res_search_keyword,$res_product_price,$res_product_mrp,$res_product_offer,$res_product_link,$res_brand_logo,$res_date,$res_time);
			
			if($stmt->execute())
			{
				$data2 = array();
								
				if($stmt->fetch())
				{
					$data2['id']=$res_id;
					$data2['categories']=$res_categories;
					$data2['product_image']=$res_product_image;
					$data2['product_title']=$res_product_title;
					$data2['product_discription']=$res_product_discription;
					$data2['search_keyword']=$res_search_keyword;
					$data2['product_price']=$res_product_price;
					$data2['product_mrp']=$res_product_mrp;
					$data2['product_offer']=$res_product_offer;
					$data2['product_link']=$res_product_link;
					$data2['brand_logo']=$res_brand_logo;
					$data2['current_date']=$res_date;
					$data2['current_time']=$res_time;
				}
				
				if(!empty($data2))
				{
					return $data2;
				}
				else{
					return false;
				}
				
			}
			
		}
	}

	// edit_subscribe_record
	function edit_subscribe_record($var_email_id, $var_username,$var_mobile_number,$edit_id)
	{
		$current_date = date("Y-m-d");
		$current_time = date("H:i:s A");

		if($stmt = $this->con->prepare("UPDATE `subscribe` SET `email_id`=?,`username`=?,`mobile_number`=?,`date`=?,`time`=? WHERE `id`=?"))
		{
			$stmt->bind_param("sssssi",$var_email_id, $var_username,$var_mobile_number,$current_date,$current_time,$edit_id);
			
			if($stmt->execute())
			{
				return true;
			}
			else{
				return false;
			}
		}

	}

	function get_subscribe_data_from_id($edit_id)
	{
		if($stmt = $this->con->prepare(" SELECT `id`, `email_id`, `username`, `mobile_number`,`date`,`time` FROM `subscribe` WHERE `id`=?"))
		{
			$stmt->bind_param("i",$edit_id);
			
			$stmt->bind_result($res_id,$res_email_id,$res_username,$res_mobile_number,$res_current_date,$res_current_time);
			
			if($stmt->execute())
			{
				$data1 = array();
								
				if($stmt->fetch())
				{
					$data1['id']=$res_id;
					$data1['email_id']=$res_email_id;
					$data1['username']=$res_username;
					$data1['mobile_number']=$res_mobile_number;
					$data1['current_date']=$res_current_date;
					$data1['current_time']=$res_current_time;
				
				}
				
				if(!empty($data1))
				{
					return $data1;
				}
				else{
					return false;
				}
				
			}
			
		}
	}


//admin_login

 function get_admin_password($var_username)
 {
	if($stmt = $this->con->prepare(" SELECT  `password` FROM `admin_login` WHERE `username`=?"))
	{
		$stmt->bind_param("s",$var_username);
		
		$stmt->bind_result($res_password);
		
		if($stmt->execute())
		{
							
			if($stmt->fetch())
			{
				return $res_password;
			
			}
			else
			{
                return false; 
			}
			
			
			
		}
		
	}
 }

	
}
	
?>
