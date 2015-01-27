<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>290_project</title>

	<!-- links -->
	<link rel="stylesheet" href="includes/css/style.css">
	<link rel="stylesheet"  href="includes/css/lightSlider.css"/>
	<!-- end links -->

	<!-- scripts -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="includes/js/jquery.lightSlider.js"></script> 

	<script>
    	 $(document).ready(function() {
			$("#lightslider").lightSlider({
                loop:true,
                keyPress:true
            });
		});
    </script>

	<!-- end scripts -->
</head>
<body>

<header>
	<h1 id="title">Un-social Media</h1>
	<a href="#"><h1 id="login">Log out</h1></a>

</header>

<?php 
// phpinfo();
// error_reporting(E_ALL); 
// ini_set('display_errors', 'on');
// echo "ervwerf"
// echo "ervwerf";
?>

<div id="post_section">
	<form action="#">
		<!-- <label>Post:</label> -->
		<textarea class="input_expandable" name="name" placeholder="Just for you..." type="text"></textarea>

		<button id="post_button">Post</button>

	</form>

</div>

<div id="main_content">
<!-- <button id="post_button">Year</button>
<button id="post_button">Month</button>
<button id="post_button">Week</button> -->
<!-- <select> -->
<select ONCHANGE="location = this.options[this.selectedIndex].value;">
	<option value="year.php">Year</option>
	<option value="month.php">Month</option>
	<option value="week.php">Week</option>
	<option value="today.php">Today</option>
	</select>
<a href="stats.php"><button id="post_button">Stats</button></a>
<a href="more.php"><button id="post_button">More</button></a>

<!-- light slider -->
<div class="lightslider">
        <ul id="lightslider" class="content-slider">
            <li>
            	<a href="#"><p>1/22/2013</p></a>
                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere quaerat ex perferendis modi ullam numquam libero laudantium saepe voluptas, suscipit reprehenderit ratione excepturi earum cumque provident deleniti magni magnam velit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit provident voluptate, distinctio ea asperiores at qui, laborum id est atque, nulla impedit molestias laboriosam eos ipsum quam, officia quisquam. Consectetur!</h3>
            </li>
            <li>
                <h3>2</h3>
            </li>
            <li>
                <h3>3</h3>
            </li>
            <li>
                <h3>4</h3>
            </li>
            <li>
                <h3>5</h3>
            </li>
            <li>
                <h3>6</h3>
            </li>
        </ul>
    </div>	

 <!-- end light slider -->

	
</div> <!-- end main content -->

<footer>
	
</footer>


	
</body>
</html>