<?php 
// sessions.php
session_start();

// sessions initialized in login_submit.php

// $_SESSION["loggedin"] 
// $_SESSION["user_id"]
// $_SESSION["first_name"] 
// $_SESSION["roll"]
// $_SESSION["email"]
// $loggedin = 1;
// $user_id = $_SESSION['user_id'];

// end login_submit.php sessions

// $loggedin = $_SESSION["loggedin"];
$user_id = $_SESSION["user_id"];
$first_name = $_SESSION["first_name"];
$roll_id = $_SESSION["roll"];
$email = $_SESSION["email"];
$user_id = $_SESSION['user_id'];

?>