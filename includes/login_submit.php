<?php 
include'secure_includes.php';
if (isset($_POST['submit_login'])) {
		//set up session if the form was posted
		if($_SERVER['REQUEST_METHOD']=="POST") {
		$un = $_POST['username'];
		$pass = $_POST['password'];
		if(isset($un, $pass)) {
		$q = "SELECT * FROM users WHERE user_email='$un' AND pass='$pass' LIMIT 1";
		$r = mysqli_query($dbc, $q);
		if(mysqli_num_rows($r) == 1) {
		$row = mysqli_fetch_assoc($r);
		session_start();
		$_SESSION["loggedin"] = 1;
		$_SESSION["user_id"] = $row['user_id'];
		$_SESSION["first_name"] = $row['user_firstname'];
		$_SESSION["roll"] = $row['roll_id'];
		$_SESSION["email"]= $row['user_email'];
		$loggedin = 1;
		// $user_id = $_SESSION['user_id'];
		header("Location:".$baseurl."index.php");
		// echo $_SESSION["user_id"];
		} else {
		$loginerror = "Invalid Username/Password Combination";
		echo $loginerror;
		}
		} else {
		session_destroy();
		$loginerror = "Username/Password field was empty";
		}//END if else else
		}// end if
		} //end if submit_login
?>