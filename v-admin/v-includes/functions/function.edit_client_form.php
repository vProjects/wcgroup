<?php
	include ("../class/class.manageusers.php");
	$manageusers = new manageusers();
	
	
	
		if($_SERVER["REQUEST_METHOD"] == 'POST'){
			
			if(isset($_POST["user_id"])){
			$user_id = $_POST["user_id"];
			}
			
					/*storing 2nd form data*/
			if(isset($_POST['2nd_part']) &&  ($_POST['2nd_part']) == 2){
			
			$nominee_name = $_POST["nominee_name"];
			$nominee_dob = $_POST["nominee_name"];
			$nominee_relation = $_POST["nominee_rltn"];
			
			$appointee_name = $_POST["appointee_name"];
			$appointee_relation = $_POST["appointee_rltn"]; 
			
			}
			}
		/* inserting values of 2nd form*/
		if(isset($_POST["2nd_form"])){
			$table_name = "nominee";
			
			$result = $manageusers->insertvalue2($table_name,$user_id,$nominee_name,$nominee_dob,$nominee_relation,$appointee_name,$appointee_relation);
			echo $result;
			
		}
		//header("Location: ../../admin.php?value=edit");
		
		
		
		if($_SERVER["REQUEST_METHOD"] == 'POST'){
			
			if(isset($_POST["user_id"])){
			$user_id = $_POST["user_id"];
			}
		
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
			}
		/* inserting values of 3rd form*/
		if(isset($_POST["3rd_form"])){
			$table_name = "insurance_details";
			
			$result = $manageusers->insertvalue3($table_name,$user_id,$plan,$payment_method,$initial_premium,$policy_duration,$amount_details,$check_no,$bank_name,$date,$branch_name,$exist_policy,$previous_policyno,$MICR_no);
			
			echo $result;
		}
		
		//header("Location: ../../admin.php?value=edit");

		

?>