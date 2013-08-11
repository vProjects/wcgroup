<?php 
		include ('class.dbconnection.php');
	$error ='';
	
class manageusers{
	
	
//	* link used to store the database connectivity throuhout manage user class
//	
	
	public $link;
	
	
//	* basic constructor which enables the database connectivity 
//	
	
	function __construct(){
		$dbconnection = new dbconnection();
		$this->link = $dbconnection->ConnectToDb('secure');
		
	}
	
	
//	* Function use to lgoin users into the website
//	
	
	function login_admin($email,$password){
		$query = $this->link->prepare("SELECT * FROM admin_profile 
										WHERE email = '$email' and password ='$password'");
		$query->execute();
		$rowcount = $query->rowcount();
		return $rowcount;
		}

	
//	* Function use to save the meta tags returns
//	* no of rows from sql query
//	

	function saveMetatags($type,$value,$page){
		if($type == 'keywords'){
			$query = $this->link->prepare("update meta_tags set keyword = '$value' where page = '$page'");
		}
		else
			$query = $this->link->prepare("update meta_tags set description = '$value' where page = '$page'");
		$query->execute();
		$rowCount = $query->rowCount();
		return $rowCount;
	}
	
	
//	* Function use to save the meta tags
//	* @returns whether password is changed or not
//	
	function changeAdminPassword($newPassword){
		$query = $this->link->prepare("update admin_profile set password = '$newPassword'");
		$query->execute();
		$rowCount =  $query->rowCount();
		return $rowCount;
	}

	
//	* Function use to save the Polls
//	* @returns whether poll is added or not
//	
	function addPolls($question,$firststAnswer,$secondAnswer,$thirdAnswer,$fourthAnswer){
		$query = $this->link->prepare("insert into polls (question,first_answer,second_answer,third_answer,fourth_answer) values(?,?,?,?,?)");
		$values = array($question,$firststAnswer,$secondAnswer,$thirdAnswer,$fourthAnswer);
		$query->execute($values);
		$returnCount = $query->rowCount();
		return $returnCount;
		
	}

	
//	* Function use to save the votes
//	* @returns whether poll is added or not
//	
	function addvotes($question){
		$query = $this->link->prepare("insert into votes (question,first_answer,second_answer,third_answer,fourth_answer) values(?,?,?,?,?)");
		$values = array($question,'0','0','0','0');
		$query->execute($values);
		$returnCount = $query->rowCount();
		return $returnCount;
		
	}
	
	
//	* Function use to return total no of Polls
//	
	function showpolls(){
		$query = $this->link->prepare("select * from polls");
		$query->execute();
		$totalPolls = $query->fetchALL(PDO::FETCH_ASSOC);
		return $totalPolls;
	}
	
	
//	* Function use to activate a poll
//	
	
	function activatePoll($id){
		$query = $this->link->prepare("update polls set active=1 where id='$id'");
		$query->execute();
		$query1 = $this->link->prepare("update polls set active = 0 where id <> '$id'");
		$query1->execute();
	}
	
	
//	* Function use to delete a single Poll
//	

	function deletePoll($id){
		$query = $this->link->prepare("delete from polls where id='$id'");
		$query1 = $this->link->prepare("delete from votes where id='$id'");
		$query->execute();
		$query1->execute();
		return $query->rowCount();
	}
	
	
//	* Function use to add a addnewsletter
//	* @returns rowcount
//	

	function addNewsletter($newsletter){
		$query = $this->link->prepare("insert into newsletter (newsletter) values(?)");
		$values = array($newsletter);
		$query->execute($values);
		return $query->rowCount();

	}
	
	
//	* Function use to update a addnewsletter
//	* @returns rowcount
//	

	function updateNewsletter($newsletter,$id){
		$query = $this->link->prepare("update newsletter set newsletter = '$newsletter' where id = '$id'");
		$values = array($newsletter);
		$query->execute($values);
		return $query->rowCount();

	}

	
	
//	* Function use to fetch addnewsletters
//	* @returns newslettes
//	
	
	function shownewsletter(){
		$query = $this->link->prepare("select * from newsletter");
		$query->execute();
		return $query->fetchALL(PDO::FETCH_ASSOC);
	}
	
	
//	* Function use to fetch addnewsletters
//	* @returns newslettes
//	
	
	function showSinglenewsletter($id){
		$query = $this->link->prepare("select * from newsletter where id = '$id'");
		$query->execute();
		return $query->fetchALL(PDO::FETCH_ASSOC);
	}

	
	
//	* Function use to activate addnewsletters
//	* @returns whether updated or not
//	
	
	function activateNewsletters($id){
		$query = $this->link->prepare("update newsletter set activated = '1' where id='$id'");
		$query->execute();
		return $query->rowCount();
	}

	
//	* Function use to activate addnewsletters
//	* @returns whether updated or not
//	
	
	function deActivateNewsletter($id){
		$query = $this->link->prepare("update newsletter set activated = '0' where id='$id'");
		$query->execute();
		return $query->rowCount();
	}
	
	
//	* Function use to delete addnewsletters
//	* @returns whether deleted or not
//	

	
	function deleteNewsletter($id){
		$query = $this->link->prepare("delete from newsletter where id='$id'");
		$query->execute();
		return $query->rowCount();

	}
	
	
	function manageHomePageContent($value,$headline,$content,$option1,$option2,$option3,$option4,$option5){
		if($value == 'firstbox'){
			$query = $this->link->prepare("UPDATE `homepage` SET `headline`='$headline',`content`='$content',`option1`='$option1',`option2`='$option2',`option3`='$option3',`option4`='$option4',`option5`='$option5' WHERE id=2");
		}
		
		else if($value == 'secondbox'){
			$query = $this->link->prepare("UPDATE `homepage` SET `headline`='$headline',`content`='$content',`option1`='$option1',`option2`='$option2',`option3`='$option3',`option4`='$option4',`option5`='$option5' WHERE id=3");
			
		}
		
		else if($value == 'thirdbox'){
			$query =  $this->link->prepare("update `homepage` set 	`content`= '$headline' where id=1");
			
		}
		
		$query->execute();
	}



	/*
		inserting values to database in three tables
	*/
	
	function insertvalue1($table_name,$user_id,$title,$f_name,$m_name,$l_name,$dob,$father_name,$gender,$mar_status,$occupation,$emp_name,$bsns_name,$designation,$duties,$pan_no ,$house_no,$building_name,$road,$area,$landmark,$city,$state,$pincode,$tel_no,$mobile,$email_id/*$userfile*/){
		
		$query = $this->link->prepare("insert into `$table_name`(`user_id`, `title`, `f_name`, `m_name`, `s_name`, `dob`, `father_name`, `gender`, `mar_status`, `occupation`, `emp_name`, `business_name`, `designation`, `duties`, `pan_no`, `house_no`, `building_name`, `road_name`, `area`, `landmark`, `city`, `state`, `pincode`, `tel_no`, `mobile`, `email_id`) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		
		$values = array($user_id,$title,$f_name,$m_name,$l_name,$dob,$father_name,$gender,$mar_status,$occupation,$emp_name,$bsns_name,$designation,$duties,$pan_no ,$house_no,$building_name,$road,$area,$landmark,$city,$state,$pincode,$tel_no,$mobile,$email_id);
		$query->execute($values);
		$returnCount = $query->rowCount();
		return $returnCount;
	}
		
	function insertvalue2($table_name,$user_id,$nominee_name,$nominee_dob,$nominee_relation,$appointee_name,$appointee_relation){
		
		$query = $this->link->prepare("insert into `$table_name`(`user_id`, `nominee_name`, `nominee_dob`, `nominee_relatn`, `appointee_name`, `appointee_relatn`) values (?,?,?,?,?,?)");
		
		$values = array($user_id,$nominee_name,$nominee_dob,$nominee_relation,$appointee_name,$appointee_relation);
		$query->execute($values);
		$returnCount = $query->rowCount();
		return $returnCount;
	}
	
	function insertvalue3($table_name,$user_id,$plan,$payment_method,$initial_premium,$policy_duration,$amount_details,$check_no,$bank_name,$date,$branch_name,$exist_policy,$previous_policyno,$MICR_no){
		
		$query = $this->link->prepare("insert into `$table_name`( `user_id`, `plane_name`, `payment_method`, `initial_prem`, `policy_duration`, `amount_details`, `check_no`, `exsist_policy`, `exist_policy_no`, `issue_bank`, `date`, `branch_name`, `micr_no`) values (?,?,?,?,?,?,?,?,?,?,?,?,?)");
		
		$values = array($user_id,$plan,$payment_method,$initial_premium,$policy_duration,$amount_details,$check_no,$bank_name,$date,$branch_name,$exist_policy,$previous_policyno,$MICR_no);
		
		$query->execute($values);
		$returnCount = $query->rowCount();
		return $returnCount;
	}
	
	
	/*
		selecting user_id value from table
	*/
	
	function selectuserid(){
		$query = $this->link->prepare("SELECT `user_id` FROM `basic_information` WHERE 1");
		$query->execute();
		$result = $query->fetchALL(PDO::FETCH_ASSOC);
		return $result;
	}
	
	/*
		updating the values of each table
	*/
	
	function update_table1($user_id,$title,$f_name,$m_name,$l_name,$dob,$father_name,$gender,$mar_status,$occupation,$emp_name,$bsns_name,$designation,$duties,$pan_no ,$house_no,$building_name,$road,$area,$landmark,$city,$state,$pincode,$tel_no,$mobile,$email_id,$userfile){
		
				$query = $this->link->prepare("UPDATE `basic_information` `title`= '$title',`f_name`= '$f_name',`m_name`='$m_name',`s_name`=',$l_name',`dob`='$dob',`father_name`='$father_name',`gender`='$gender',`mar_status`='$mar_status',`occupation`='$occupation',`emp_name`='$emp_name',`business_name`='$bsns_name',`designation`='$designation',`duties`='$duties',`pan_no`='$pan_no',`house_no`='$house_no',`building_name`='$building_name',`road_name`='$road',`area`='$area',`landmark`='$landmark',`city`='$city',`state`='$state',`pincode`='$pincode',`tel_no`= '$tel_no',`mobile`='$mobile',`email_id`='$email_id',`userfile`='$userfile' WHERE 'userid' = '$user_id'");
				
			$query->execute();
			return $query->rowCount();	
	}
	
	
	function update_table2($user_id,$nominee_name,$nominee_dob,$nominee_relation,$appointee_name,$appointee_relation){
			
			$query = $this->link->prepare("UPDATE `nominee` SET `nominee_name`='$nominee_name',`nominee_dob`='$nominee_dob',`nominee_relatn`='$nominee_relation',`appointee_name`='$appointee_name',`appointee_relatn`='$appointee_relation' WHERE 'userid' = '$user_id'");
			$query->execute();
			return $query->rowCount();	
			
	}
	
	
	function update_table3($user_id,$plan,$payment_method,$initial_premium,$policy_duration,$amount_details,$check_no,$bank_name,$date,$branch_name,$exist_policy,$previous_policyno,$MICR_no){
		
			$query = $this->link->prepare("UPDATE `insurance_details` SET`plane_name`='$plan',`payment_method`='$payment_method',`initial_prem`='$initial_premium',`policy_duration`='$policy_duration',`amount_details`='$amount_details',`check_no`='$check_no',`exsist_policy`= '$exist_policy',`exist_policy_no`= '$previous_policyno',`issue_bank`='$bank_name',`date`='$date',`branch_name`='$branch_name',`micr_no`='$MICR_no' WHERE 'userid' = '$user_id'");
		
			$query->execute();
			return $query->rowCount();	 
	}
	
	
	function selectvalues($table_name, $column_name, $column_value){
		
			$query = $this->link->prepare("SELECT * FROM `$table_name` WHERE $column_name = '$column_value'");
			$query->execute();
			$result = $query->fetchALL(PDO::FETCH_ASSOC);
			return $result;
	}
	function updatevalue($table_name, $column_name,$column_value,$where_column,$where_value){
			
			$query = $this->link->prepare("UPDATE `$table_name` SET `$column_name`= `$column_value` WHERE `$where_column` = `$where_value`");
			
			$query->execute();
			return $query->rowCount();
	}
	
	
}

?>