<?php 
$pagetitle = "index";
include'includes/mysqli_connect.php';
include'includes/functions.php';
// include'includes/sessions.php';
// include 'includes/post_section.php';

// $user_id = 15;  //"url content"

$un = $_GET["name"];
$pass = $_GET["pass"];

// get user id using username and password
if(isset($un, $pass)) {
$q = "SELECT * FROM users WHERE user_email='$un' AND pass='$pass' LIMIT 1";
$r = mysqli_query($dbc, $q);
if(mysqli_num_rows($r) == 1) {
$row = mysqli_fetch_assoc($r);
session_start();
$user_id = $row['user_id'];}

// header("Location:".$baseurl."index.php");
} else {
$loginerror = "Invalid Username/Password Combination OR none entered";
echo $loginerror;
}


// get posts using user_id
$sql = "SELECT * FROM posts
            WHERE `user_id` = '$user_id' AND post_date > CURDATE() - INTERVAL 2 YEAR
            ORDER BY post_date DESC ";
            $result = $dbc->query($sql);


            $rows = array();

                while ($row = mysqli_fetch_array($result))
                {
                    $post = array();
                    $post['date'] = $row['post_date'];
                    $post['content'] = $row['post_content'];

                    $rows["posts"][] = $post;
                }

            echo json_encode($rows);
?>