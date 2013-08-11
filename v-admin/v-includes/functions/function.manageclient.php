<?php
	include('../class/class.manageusers.php');
	$manageUsers = new manageusers();
	//$manageUsers->addUserInfo($GLOBALS['_POST'],'basic_information');
	
	
	
		if($_SERVER["REQUEST_METHOD"] == 'POST'){
		if(isset($_POST['1st_part']) &&  ($_POST['1st_part']) == 1){
			
			$title = $_POST["title"];
			
			$f_name = $_POST["f_name"];
			$m_name = $_POST["m_name"];
			$l_name = $_POST["l_name"];
			$dob = $_POST["dob"];
			$father_name = $_POST["father_name"];
			
			$gender = $_POST["gender"];
			
			
			$mar_status = $_POST["mar_status"];
			
			
			$occupation = $_POST["occupation"];
			
			$emp_name = $_POST["employer_name"];
			$bsns_name = $_POST["business_name"];
			$designation = $_POST["designation"];
			$duties = $_POST["duties"];
			$pan_no = $_POST["pan_no"];
			$house_no = $_POST["house_no"];
			$building_name = $_POST["bldng_name"];
			$road = $_POST["road_name"];
			$area = $_POST["area"];
			$landmark = $_POST["landmark"];
			$city = $_POST["city"];
			$state = $_POST["state"];
			$pincode = $_POST["pincode"];
			$tel_no = $_POST["tel_no"];
			$mobile = $_POST["mobile"];
			$email_id = $_POST["email_id"];
		}
		/* inserting values of 1st form*/
		if(isset($_POST["1st_form"])){
			$table_name = "basic_information";
			
		/* selecting user_id value*/
	$user_column = $manageUsers->selectuserid();
		if(isset($user_column) && $user_column != ""){
			$max_user_id = max($user_column);          /*maximum value of user_id column*/
			//print_r ($max_user_id);
			$id_numeric = $max_user_id["user_id"];      /* storing user_id value in a variable*/   
			$user_no = substr($id_numeric,3);         /* seperating numeric value */
			$user_id_no = $user_no + 1;                  /* increment the value */
			$user_id = "CUS".$user_id_no;
			//echo $user_id;
	}
		else{
			$user_id = "CUS11111";
	}
			
			$result = $manageUsers->addUserInfo($table_name,$user_id,$title,$f_name,$m_name,$l_name,$dob,$father_name,$gender,$mar_status,$occupation,$emp_name,$bsns_name,$designation,$duties,$pan_no ,$house_no,$building_name,$road,$area,$landmark,$city,$state,$pincode,$tel_no,$mobile,$email_id/*,$userfile*/);
			//echo $result;
		
		}
		
	}
	
	header("Location: ../../admin.php?value=edit");



?>