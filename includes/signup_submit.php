<?php 
include'secure_includes.php';
if (isset($_POST['submit_signup'])) {
	if ($_SERVER['REQUEST_METHOD']=='POST') {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$registration_date = date("Y/m/d");

	// echo $firstname;
	// add roll-id!
	$sql= "INSERT INTO users(user_firstname,user_lastname,user_email,pass,roll_id,registration_date) VALUES('$firstname','$lastname','$email','$password',1,'$registration_date')";
	if (mysqli_query($dbc, $sql)) {
	header("Location:".$baseurl."login.php");
	} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($dbc);
	}//END if else
	mysqli_close($dbc);
	} //end if post
	} //end if submit_signup
?>