<?php 
$pagetitle = "month";
include 'includes/header.php';
 ?>

<div id="post_section">
	<form action="#">
		<!-- <label>Post:</label> -->
		<textarea class="input_expandable" name="name" placeholder="Just for you..." type="text"></textarea>

		<button id="post_button">Post</button>

	</form>

</div>

<div id="main_content">

<select ONCHANGE="location = this.options[this.selectedIndex].value;">
    <option value="#">Month</option>
    <option value="index.php#main_content">Year</option>
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