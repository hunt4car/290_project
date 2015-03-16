<?php 
include 'includes/secure_includes.php'; //for user protected pages!
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<title><?php echo $pagetitle."-".$sitename; ?></title>

	<!-- links -->
	<link rel="stylesheet" href="includes/css/style.css">
	<link rel="stylesheet"  href="includes/css/lightSlider.css"/>
	<!-- end links -->

	<!-- scripts -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="includes/js/jquery.lightSlider.js"></script> 
	<!-- end scripts -->

</head>

<body>
	<header>
		<?php echo "<a href='".$baseurl."index.php'><h1 id='title'>Un-social Media - ".$pagetitle."</h1></a>"; ?>
		<a href="logout.php"><h1 id="logout">Log out</h1></a> 
	</header>