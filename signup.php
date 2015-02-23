<?php
$pagetitle = "login";
$loggedin = 1;
include 'includes/header.php';
 ?>

<div id="signuppage">
<?php $sql = "SELECT * FROM users";
            $result = $dbc->query($sql);
            if ($result->num_rows > 0) {
            $i=1;
            echo "<table width='600'>
                <tr>
                    <th>ID</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Email</th>
                </tr>";
                // output data of each row
                while($row = $result->fetch_assoc()) {
                echo "<tr>";
                    echo "<td>".$row["user_id"]."</td>";
                    echo "<td>".$row["user_firstname"]."</td>";
                    echo "<td>".$row["user_lastname"]."</td>";
                    echo "<td>".$row["user_email"]."</td>";
                echo "</tr>";
                }//end while
            echo "</table>";
            $i++;
            } else {
            echo "0 results found in user database!";
            }// end if else
             ?>
	<form action="includes/signup_submit.php" method="post">
		<!-- <label>Post:</label> -->
		<textarea class="input_expandable" name="email" placeholder="Email" type="text"></textarea>
		<textarea class="input_expandable" name="firstname" placeholder="First Name" type="text"></textarea>
		<textarea class="input_expandable" name="lastname" placeholder="Last Name" type="text"></textarea>
		<textarea class="input_expandable" name="password" placeholder="Password" type="password"></textarea>

		<input type="submit" value="submit" name="submit_signup" />

	</form>

	<?php 
	// sign_up();
	 ?>

</div>

<div id="about">
<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae officiis quos veniam magnam, totam quibusdam quasi minus, non atque maiores beatae natus blanditiis necessitatibus recusandae similique odio molestias error. Impedit.</h1>

	
</div> <!-- end main content -->

<?php 
include 'includes/footer.php';
 ?>