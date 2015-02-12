<?php 
$pagetitle = "index";
include 'includes/header.php';
?>

<div id="post_section">
	<form action="includes/year_submit.php" method="post">
		<!-- <label>Post:</label> -->
		<textarea class="input_expandable" name="post" placeholder="<?php echo 'Just for you '.$first_name.'...'; ?>" type="text"></textarea>

		<!-- <button id="post_button">Post</button> -->
		<input type="submit" value="Post" name="submit_login" />

	</form>

</div>
<?php 
// echo $_SESSION["first_name"]; ?>
<div id="main_content">

<select ONCHANGE="location = this.options[this.selectedIndex].value;">
    <option value="index.php#main_content">Year</option>
    <option value="month.php#main_content">Month</option>
    <option value="week.php#main_content">Week</option>
    <option value="today.php#main_content">Today</option>
    </select>
<a href="stats.php"><button id="post_button">Stats</button></a>
<a href="more.php"><button id="post_button">More</button></a>

<?php 
include 'includes/slider.php';
 ?>

	
</div> <!-- end main content -->

<?php 
include 'includes/footer.php';
 ?>