<?php
	include ('class.dbconnection.php');



	/*
	* utility class which holds the utility functions which can be used for specific purpose
	*/
	
	class utility{

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
	* function to get the url of the page 
	*/
	function curPageURL() {
		 $pageURL = 'http';
		 //if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
		 $pageURL .= "://";
		 if ($_SERVER["SERVER_PORT"] != "80") {
		  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
		 } else {
		  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
		 }
		 return $pageURL;
		}
		
		

		/*
		*	Funtion to fetch meta tags returns
		* 	@meta description tags
		*	@meta keyword tags
		*/
		function getMetatags($page){
			$query =  $this->link->prepare("select * from meta_tags where page = '$page'");
			$query->execute();
			$metaTags = $query->fetchALL(PDO::FETCH_ASSOC);
			return $metaTags;

	
	/*
	*	Funtion to fetch the poll
	* 	@Polls question
	*	@ and corresponding answers 
	*/
		function showPolls(){
			$query = $this->link->prepare("select * from polls where active = '1'");
			$query->execute();
			$poll =$query->fetchALL(PDO::FETCH_ASSOC);
			return $poll;
			
			
		}

		/*
		*	Funtion to set the polls returns
		* 	@polls upldation
		*/
		function setPollValue($poll,$id){
			$query = $this->link->prepare("UPDATE `votes` SET `$poll` = `$poll` + 1  WHERE `id` = $id");
			$query->execute();
		}
		
		/*
		*	Funtion to retun total polls returns
		* 	@total no of votes
		*	@single value of votes
		*/
		
		function countTotalVotes($id){
			$query = $this->link->prepare("select first_answer,second_answer,third_answer,fourth_answer from votes where id = '$id'");
			$query->execute();
			$voteCount = $query->fetchALL(PDO::FETCH_ASSOC);
			return $voteCount;
			
		}
	
	
		}
		/*
		* Function use to fetch addnewsletters
		* @returns newslettes
		*/
		
		function shownewsletter(){
			$query = $this->link->prepare("select * from newsletter where activated ='1'");
			$query->execute();
			return $query->fetchALL(PDO::FETCH_ASSOC);
		}

		/*
		* Function use to show home page content
		* @returns homepage content
		*/
		
		
		function homePageContent(){
			$query = $this->link->prepare("select * from homepage");
			$query->execute();
			return $query->fetchALL(PDO::FETCH_ASSOC);
		}
		
		
		/*
		* Function use to show other page content
		* @returns content of the other pages
		*/
		function content($page){
			$query = $this->link->prepare("select content from otherpages where id=$page");
			$query->execute();
			return $query->fetchALL(PDO::FETCH_ASSOC);
			
		}
	}
?>