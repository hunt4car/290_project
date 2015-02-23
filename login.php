<?php

$pagetitle = "login";
// $loggedin = 1;

include 'includes/header.php';
 ?>

<div id="loginpage">
	<form action="includes/login_submit.php" method="post">
		<!-- <label>Post:</label> -->
		<textarea class="input_expandable" name="username" placeholder="Email or Username" type="text"></textarea>
		<textarea class="input_expandable" name="password" placeholder="Password" type="text"></textarea>
		
		
		<!-- <a href="google.com"><button id="post_button">Sign Up</button></a> -->
		<!-- <button id="post_button">Log In</button> -->
		<input type="submit" value="submit" name="submit_login" />

	</form>

	<a href="<?php echo $baseurl."signup.php"; ?>"><button>Sign Up</button></a>

</div>

<div id="about">
<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae officiis quos veniam magnam, totam quibusdam quasi minus, non atque maiores beatae natus blanditiis necessitatibus recusandae similique odio molestias error. Impedit.</h1>

	
</div> <!-- end main content -->

<?php 
include 'includes/footer.php';
 ?>