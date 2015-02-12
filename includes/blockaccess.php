<?php
	//if the user is logged in...
	if(!isset($loggedin) || $loggedin ==0) {
		session_destroy();		
		header("Location:".$baseurl."login.php");	
	} 

?>