<?php  
// include'functions.php';

// functions/use

$sitename = "Un-social media";
$baseurl = "http://localhost:8888/290_project/main/290_project/";


// end function list

// user access

function sign_up(){
		if (isset($_POST['submit_signup'])) {
		if ($_SERVER['REQUEST_METHOD']=='POST') {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lasttname'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		echo $firstname;
		// add roll-id!
		$sql= "INSERT INTO users(user_firstname,user_lastname,user_email,pass,roll_id) VALUES('$firstname','$lastname','$email','$password',1)";
		if (mysqli_query($dbc, $sql)) {
		// header("Location:".$baseurl."/login.php");
		} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($dbc);
		}//END if else
		mysqli_close($dbc);
		} //end if post
		} //end if submit_signup
}

function log_out(){
	session_destroy();
	header($baseurl."/login.php");
	exit;
	
}

function block_access(){
	//if the user is logged in...
	if(!isset($loggedin) || $loggedin ==0) {		
		$l = $baseURL . "/login.php";
		header("Location: $l");		
	} else {
		if(!isset($access_level)) {$access_level = 4;}
		if($role < $access_level) {
			$l = $baseURL . "/index.php";
			header("Location: $l");
		}
	}
	
}
// end user access


 ?>