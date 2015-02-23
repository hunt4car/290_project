<!-- light slider -->
<div class="lightslider">
        <ul id="lightslider" class="content-slider">
            <?php 
            $sql = "SELECT * FROM posts WHERE `user_id` = '$user_id'";
            $result = $dbc->query($sql);
            if ($result->num_rows > 0) {
                $i=1;
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<li>";
                        echo "<p>".$row['date']."</p>";
                        // $clientid.$i =
                        echo "<h3>".$row["post_content"]."</h3>";
                        echo "</li>";
                    }//end while
                $i++;
            } else {
            echo "0 results found in user database!";
            }// end if else


             ?>
</div>	<!-- end light slider -->