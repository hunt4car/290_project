<!-- light slider --> 
<div class="lightslider">
            <?php 
            $sql = "SELECT * FROM posts
            WHERE `user_id` = '$user_id' AND post_date > CURDATE() - INTERVAL 2 YEAR
            ORDER BY post_date DESC ";
            $result = $dbc->query($sql);

            
            if ($result->num_rows > 0) {
                echo "<ul id='lightslider' class='content-slider'>";
                $i=1;
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<li>";
                        echo "<p>".$row['post_date']."</p>";
                        // $clientid.$i =
                        echo "<h3>".$row["post_content"]."</h3>";
                        echo "</li>";
                    }//end while
                echo "</ul>";
                $i++;
            } else {
            echo "0 results found in user database!";
            }// end if else

             ?>
</div>	<!-- end light slider