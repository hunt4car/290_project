<?php  
$sitename = "Un-social media";
$baseurl = "http://localhost:8888/290_project/main/290_project/";
// include'functions.php';
// functions/use

// log_in()/login 
// sign_up()
//log_out()
// block_access()


// end function list

// user access
function log_in(){
	// if (isset($_POST['submit_login'])) {
	// 	//set up session if the form was posted
	// 	if($_SERVER['REQUEST_METHOD']=="POST") {
	// 	$un = $_POST['username'];
	// 	$pass = $_POST['password'];
	// 	if(isset($un, $pass)) {
	// 	$q = "SELECT * FROM user WHERE user_name='$un' AND pass='$pass' LIMIT 1";
	// 	$r = mysqli_query($dbc, $q);
	// 	if(mysqli_num_rows($r) == 1) {
	// 	$row = mysqli_fetch_assoc($r);
	// 	$_SESSION["loggedin"] = 1;
	// 	$_SESSION["user_id"] = $row['user_id'];
	// 	$_SESSION["username"] = $row['user_name'];
	// 	$_SESSION["first_name"] = $row['first_name'];
	// 	$_SESSION["roll"] = $row['roll_id'];
	// 	$_SESSION["logged"]=$_POST["username"];
	// 	$_SESSION["client_email"]= $row['email'];
	// 	$loggedin = 1;
	// 	$user_id = $_SESSION['user_id'];
	// 	$username = $_SESSION['username'];
	// 	echo "Valid entery!";
	// 	} else {
	// 	$loginerror = "Invalid Username/Password Combination";
	// 	echo $loginerror;
	// 	}
	// 	} else {
	// 	session_destroy();
	// 	$loginerror = "Username/Password field was empty";
	// 	}//END if else else
	// 	}// end if
	// 	} //end if submit_login
	
}

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