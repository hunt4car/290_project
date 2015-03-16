<?php
$pagetitle = "Sign up";
$loggedin = 1;
include 'includes/header.php';
?>

<div id="signuppage">
<?php  //below sptis out user info
// $sql = "SELECT * FROM users";
//             $result = $dbc->query($sql);
//             if ($result->num_rows > 0) {
//             $i=1;
//             echo "<table width='600'>
//                 <tr>
//                     <th>ID</th>
//                     <th>FirstName</th>
//                     <th>LastName</th>
//                     <th>Email</th>
//                 </tr>";
//                 // output data of each row
//                 while($row = $result->fetch_assoc()) {
//                 echo "<tr>";
//                     echo "<td>".$row["user_id"]."</td>";
//                     echo "<td>".$row["user_firstname"]."</td>";
//                     echo "<td>".$row["user_lastname"]."</td>";
//                     echo "<td>".$row["user_email"]."</td>";
//                 echo "</tr>";
//                 }//end while
//             echo "</table>";
//             $i++;
//             } else {
//             echo "0 results found in user database!";
//             }// end if else

?>

<form action="includes/signup_submit.php" method="post">
	<textarea class="input_expandable" name="email" placeholder="Email" type="email" required></textarea>
	<textarea class="input_expandable" name="firstname" placeholder="First Name" type="text" required></textarea>
	<textarea class="input_expandable" name="lastname" placeholder="Last Name" type="text" required></textarea>
	<textarea class="input_expandable" name="password" placeholder="Password" type="password" required></textarea>

	<input type="submit" value="Submit" name="submit_signup" />

</form>

<?php 
	// sign_up();
?>

</div>

<div id="about">
	<h1>Unsocial media, a social media website for your eyes only. Enjoy the power of posting anything you feel like posting, and enjoy looking back to through your posts.
	</h1>

	
</div> <!-- end main content -->

<?php 
include 'includes/footer.php';
?>