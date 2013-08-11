<?php
	include ("../class/class.manageusers.php");
	$manageusers = new manageusers();
	
	
	$table_name1 = "basic_information";
	$table_name2 = "nominee";
	$table_name3 = "insurance_details";
	
	/******* update basic_information form*****/
	
	if(isset($_POST['1st_form'])){
			
			$user_id = $_POST["user_id"];
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
		
	if(isset($title) && $title != ""){
		$result = $manageusers->updatevalue($table_name1,"title",$title,"user_id", $user_id);
	}
	
	if(isset($f_name) && $f_name != ""){
		$result = $manageusers->updatevalue($table_name1,"f_name",$f_name,"user_id", $user_id);
	}
	
	if(isset($m_name) && $m_name != ""){
		$result = $manageusers->updatevalue($table_name1,"m_name",$m_name,"user_id", $user_id);
	}
	
	if(isset($l_name) && $l_name != ""){
		$result = $manageusers->updatevalue($table_name1,"s_name",$l_name,"user_id", $user_id);
	}
	
	if(isset($dob) && $dob != ""){
		$result = $manageusers->updatevalue($table_name1,"dob",$dob,"user_id", $user_id);
	}
	
	if(isset($father_name) && $father_namee != ""){
		$result = $manageusers->updatevalue($table_name1,"father_name",$father_name,"user_id", $user_id);
	}
	
	if(isset($gender) && $gender != ""){
		$result = $manageusers->updatevalue($table_name1,"gender",$gender,"user_id", $user_id);
	}
	
	if(isset($mar_status) && $mar_status != ""){
		$result = $manageusers->updatevalue($table_name1,"mar_status",$mar_status,"user_id", $user_id);
	}
	
	if(isset($occupation) && $occupation != ""){
		$result = $manageusers->updatevalue($table_name1,"occupation",$occupation,"user_id", $user_id);
	}
	
	if(isset($emp_name) && $emp_name != ""){
		$result = $manageusers->updatevalue($table_name1,"emp_name",$emp_name,"user_id", $user_id);
	}
	
	if(isset($bsns_name) && $bsns_name != ""){
		$result = $manageusers->updatevalue($table_name1,"business_name",$bsns_name,"user_id", $user_id);
	}
	
	if(isset($designation) && $designation != ""){
		$result = $manageusers->updatevalue($table_name1,"designation",$designation,"user_id", $user_id);
	}
	
	if(isset($duties) && $duties != ""){
		$result = $manageusers->updatevalue($table_name1,"duties",$duties,"user_id", $user_id);
	}
	
	if(isset($pan_no) && $pan_no != ""){
		$result = $manageusers->updatevalue($table_name1,"pan_no",$pan_no,"user_id", $user_id);
	}
	
	if(isset($house_no) && $house_no != ""){
		$result = $manageusers->updatevalue($table_name1,"house_no",$house_no,"user_id", $user_id);
	}
	
	if(isset($building_name) && $building_name != ""){
		$result = $manageusers->updatevalue($table_name1,"building_name",$building_name,"user_id", $user_id);
	}
	
	if(isset($road) && $road != ""){
		$result = $manageusers->updatevalue($table_name1,"road_name",$road,"user_id", $user_id);
	}
	
	if(isset($area) && $area != ""){
		$result = $manageusers->updatevalue($table_name1,"area",$area,"user_id", $user_id);
	}
	
	if(isset($landmark) && $landmark != ""){
		$result = $manageusers->updatevalue($table_name1,"landmark",$landmark,"user_id", $user_id);
	}
	
	if(isset($city) && $city != ""){
		$result = $manageusers->updatevalue($table_name1,"city",$city,"user_id", $user_id);
	}
	
	if(isset($state) && $state != ""){
		$result = $manageusers->updatevalue($table_name1,"state",$state,"user_id", $user_id);
	}
	
	if(isset($pincode) && $pincode != ""){
		$result = $manageusers->updatevalue($table_name1,"pincode",$pincode,"user_id", $user_id);
	}
	
	if(isset($tel_no) && $tel_no != ""){
		$result = $manageusers->updatevalue($table_name1,"tel_no",$tel_no,"user_id", $user_id);
	}
	
	if(isset($mobile) && $mobile != ""){
		$result = $manageusers->updatevalue($table_name1,"mobile",$mobile,"user_id", $user_id);
	}
	
	if(isset($email_id) && $email_id != ""){
		$result = $manageusers->updatevalue($table_name1,"email_id",$email_id,"user_id", $user_id);
	}
	}
	
	
	
	/********* update nominee information******/
	
	
	
	if(isset($_POST['2nd_form'])){
		
		
			$user_id = $_POST["user_id"];
			
			
					/*storing 2nd form data*/
			if(isset($_POST['2nd_part']) &&  ($_POST['2nd_part']) == 2){
			
			$nominee_name = $_POST["nominee_name"];
			$nominee_dob = $_POST["nominee_name"];
			$nominee_relation = $_POST["nominee_rltn"];
			
			$appointee_name = $_POST["appointee_name"];
			$appointee_relation = $_POST["appointee_rltn"]; 
			
			}
		
	if(isset($nominee_name) && $nominee_name != ""){
		$result = $manageusers->updatevalue($table_name2,"nominee_name",$nominee_name,"user_id", $user_id);
	}
	
	if(isset($nominee_dob) && $nominee_dob != ""){
		$result = $manageusers->updatevalue($table_name2,"nominee_dob",$nominee_dob,"user_id", $user_id);
	}
	
	if(isset($nominee_relation) && $nominee_relation != ""){
		$result = $manageusers->updatevalue($table_name2,"nominee_relatn",$nominee_relation,"user_id", $user_id);
	}
	
	if(isset($appointee_name) && $appointee_name != ""){
		$result = $manageusers->updatevalue($table_name2,"appointee_name",$appointee_name,"user_id", $user_id);
	}
	
	if(isset($appointee_relation) && $appointee_relation != ""){
		$result = $manageusers->updatevalue($table_name2,"appointee_relatn",$appointee_relation,"user_id", $user_id);
	}
	
	}
	
	
	/********* update insurance details *********/
	
	
	
	
	if(isset($_POST['3rd_form'])){
		
		
		
			$user_id = $_POST["user_id"];
			
		
				/*storing 3rd form data*/
			if(isset($_POST['3rd_part']) && ($_POST['3rd_part']) == 3){
			
			$plan = $_POST["plan"];
			$payment_method = $_POST["payment_method"];
			$initial_premium = $_POST["initial_premium"];
			$policy_duration = $_POST["policy_time"];
			$amount_details = $_POST["amount_details"];
			
			$check_no = $_POST["check_no"];
			
			
			$bank_name = $_POST["bank_name"];
			$date = $_POST["date"];
			$branch_name = $_POST["branch_name"];
			
			
			$exist_policy = $_POST["exist_policy"];
			
			$previous_policyno = $_POST["previous_policyno"];
			
			$MICR_no = $_POST["micr_no"];
			}
	
	if(isset($plan) && $plan != ""){
		$result = $manageusers->updatevalue($table_name3,"plan_name",$plan,"user_id", $user_id);
	}
	
	if(isset($payment_method) && $payment_method != ""){
		$result = $manageusers->updatevalue($table_name3,"payment_method",$payment_method,"user_id", $user_id);
	}
	
	if(isset($initial_premium) && $initial_premium != ""){
		$result = $manageusers->updatevalue($table_name3,"initial_prem",$initial_premium,"user_id", $user_id);
	}
	
	if(isset($policy_duration) && $policy_duration != ""){
		$result = $manageusers->updatevalue($table_name3,"policy_duration",$policy_duration,"user_id", $user_id);
	}
	
	if(isset($amount_details) && $amount_details != ""){
		$result = $manageusers->updatevalue($table_name3,"amount_details",$amount_details,"user_id", $user_id);
	}
	
	if(isset($check_no) && $check_no != ""){
		$result = $manageusers->updatevalue($table_name3,"check_no",$check_no,"user_id", $user_id);
	}
	
	if(isset($exist_policy) && $exist_policy != ""){
		$result = $manageusers->updatevalue($table_name3,"$exsist_policy",$exist_policy,"user_id", $user_id);
	}
	
	if(isset($previous_policyno) && $previous_policyno != ""){
		$result = $manageusers->updatevalue($table_name3,"exist_policy_no",$previous_policyno,"user_id", $user_id);
	}
	
	if(isset($bank_name) && $bank_name != ""){
		$result = $manageusers->updatevalue($table_name3,"issue_bank",$bank_name,"user_id", $user_id);
	}
	
	if(isset($date) && $date != ""){
		$result = $manageusers->updatevalue($table_name3,"date",$date,"user_id", $user_id);
	}
	
	if(isset($branch_name) && $branch_name != ""){
		$result = $manageusers->updatevalue($table_name3,"branch_name",$branch_name,"user_id", $user_id);
	}
	
	if(isset($MICR_no) && $MICR_no != ""){
		$result = $manageusers->updatevalue($table_name3,"micr_no",$MICR_no,"user_id", $user_id);
	}
	
	}
	
	
	
?>