<?php
	include ('class.dbconnection.php');
	$error ='';
	
class manageusers{
	
	/*
	* link used to store the database connectivity throuhout manage user class
	*/
	
	public $link;
	
	/*
	* basic constructor which enables the database connectivity 
	*/
	
	function __construct(){
		$dbconnection = new dbconnnection();
		$this->link = $dbconnection->ConnectToDb('secure');
		
	}
	/*
	* @Function use to register a user and enrolls value in database.
	*/
	function register_user($firstname,$lastname,$email,$username,$password,$profile_pic,$phoneno,$streetaddress,$city,$state,$country,$ip,$date,$activated){
			$query = $this->link->prepare("INSERT INTO user_profile 			
											(firstname,lastname,email,username,password,image,phoneno,streetaddress,city,
												state,country,ip,date,activated) 
													VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$values = array($firstname,$lastname,$email,$username,$password,$profile_pic,$phoneno,$streetaddress,$city,$state,$country,$ip,$date,$activated);
			$query->execute($values);
			$counts = $query->rowCount();
			return $counts; 
	}
	
	/*
	* Function use to lgoin users into the website
	*/
	
	function login_users($email,$password){
		$query = $this->link->prepare("SELECT * FROM user_profile 
										WHERE email = '$email' and password ='$password'");
		$query->execute();
		$rowcount = $query->rowcount();
		return $rowcount;
		}
	
	/*
	* Function use to store the new project spectification into the database
	*/
		
	function project_post($title,$place_preferred,$project_details,$skills_required,$category,$duration,$amount,$email,$username){
					$query = $this->link->prepare("INSERT INTO project_list 												
								(project_title,place_preferred,project_details,skills_required,type_of_project,duration,amount,employer_email,employer_username) 
													VALUES(?,?,?,?,?,?,?,?,?)");
			$values = array($title,$place_preferred,$project_details,$skills_required,$category,$duration,$amount,$email,$username);
			$query->execute($values);
			$counts = $query->rowCount();
			return $counts; 

	}

	/*
	* Function resposible to list the jobs in the user profile
	*/
	function listpost($category){
		if($category == 'all'){
			$query = $this->link->prepare("select * from project_list");
		}
		else{
			$query = $this->link->prepare("select * from project_list where type_of_project ='$category'");
		}
			$query->execute();
			$info =$query->fetchALL(PDO::FETCH_ASSOC);
			return $info;
			
	}
	
	/*
	* Function responsible to show single job post on the bidding page. this takes an ID and searches for that Job
	*/
	function single_post($id){
		$query = $this->link->prepare("select * from project_list where id= '$id'");
		$query->execute();
		$info = $query->fetchALL(PDO::FETCH_ASSOC);
		return $info;
	}
	/*
	* Function responsible to place a bid on a proposal
	*/
	function placebid($jobid,$proposal,$proposal_amount,$proposal_duration,$email,$username,$image){
			$query = $this->link->prepare("INSERT INTO bid_table(project_id,proposal,contractor_email,amount,duration,contractor_username,contractor_image) VALUES(?,?,?,?,?,?,?)");
			$values = array($jobid,$proposal,$email,$proposal_amount,$proposal_duration,$username,$image);
			$query->execute($values);
			$counts = $query->rowCount();
			return $counts; 
	}
	
	/*
	* Function to show the total bids on the bidding page
	*/
	function totalbids($id){
		$query = $this->link->prepare("select * from bid_table where project_id = '$id'");
		$query->execute();
		$totalbids = $query->fetchALL(PDO::FETCH_ASSOC);
		return $totalbids;
	}
	
	/*
	* Function which adds basic profile detail to the users profile
	*/
	function editprofile($about_me, $work_style, $skills,$email){
		$query = $this->link->prepare("update user_profile set about_me='$about_me', work_style_desc='$work_style', skills='$skills' where email='$email'");
		$query->execute();
		$counts = $query->rowCount();
		return $counts; 

	}
	/*
	* Function which fetches the information of a user
	*/
	function showprofile($useremail){
		$query = $this->link->prepare("select activated,image,about_me,work_style_desc,skills from user_profile where email = '$useremail'");
		$query->execute();
		$userinfo = $query->fetchALL(PDO::FETCH_ASSOC);
		return $userinfo;
		
	}
	
	/*
	* Function to save the link of portfolio items in database
	*/
	function addDatatoDb($filename,$location,$email,$uploadDataType){
			echo '<br> entered into the add database function';
			$query = $this->link->prepare("INSERT INTO portfolio(email,filename,file_type,location) VALUES(?,?,?,?)");
										   //INSERT INTO bid_table(project_id,proposal,amount,duration) VALUES(?,?,?,?)
			$values = array($email,$filename,$uploadDataType,$location);
			$query->execute($values);
			$counts = $query->rowCount();
			return $counts; 

	}
	/*
	* Function to get the portfolio Item for a particular user
	*/
	function getPortfolio($email){
		$query = $this->link->prepare("select * from portfolio where email='$email'");
		$query->execute();
		$portfolio = $query->fetchALL(PDO::FETCH_ASSOC);
		$counts = $query->rowCount();
		
		if($counts<1)
			return NULL;
		else
			return $portfolio;
	}
	
	/*
	* Function responsible for fetching the status of a bid or any project that any user has posted
	*/
	
	function showBids($email, $type){
		if($type == 'myjobs'){
			$query = $this->link->prepare("select id, project_title from project_list where employer_email = '$email'");
		}
		else if($type == 'myproposals'){
			$query = $this->link->prepare("select * from bid_table where contractor_email = '$email'");
		}
		
		$query->execute();
		$myjobs = $query->fetchALL(PDO::FETCH_ASSOC);
		$counts = $query->rowCount();
		
		return $myjobs;
		

	}
	
	/*
	* Function responsible for Activating a users account
	*/

	
	function activateAccount($email){
		$query = $this->link->prepare("update user_profile set activated = '1' where email = '$email'");
		$query->execute();
		return $query->rowCount();
	}
	
	
	/*
	* Function responsible for adding profile Image to the user profile
	*/

	
	function addProfileImage($profile_image_name,$email,$path){
		$fullpath = $path.$email.$profile_image_name;
		$query = $this->link->prepare("update user_profile set image='$fullpath' where email = '$email'");
		$query->execute();
		return $query->rowCount();
	}
	
	/*
	*  Function which reurns the usename and profile image location of a bidder one who is pleacing the bid
	*/
	function getUsernameAndImage($contactorEmail){
		$query = $this->link->prepare("select username,image from user_profile where email = '$contactorEmail'");
		$query->execute();
		$info = $query->fetchALL(PDO::FETCH_ASSOC);
		return $info;
	}

	/*
	*  Function which reurns the profile Info of a user for his public view of profile
	*/
	
	function getUserEmail($username){
		$query = $this->link->prepare("select email from user_profile where username = '$username'");
		$query->execute();
		$info = $query->fetchALL(PDO::FETCH_ASSOC);
		return $info;

	}

}


?>