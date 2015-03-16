<?php 
$pagetitle = "index";
include 'includes/secure_header.php';
include 'includes/post_section.php';
?>
<div id="main_content">

    <select ONCHANGE="location = this.options[this.selectedIndex].value;">
        <option value="index.php#main_content">Year</option>
        <option value="month.php#main_content">Month</option>
        <option value="week.php#main_content">Week</option>
    </select>
<!-- <a href="stats.php"><button id="post_button">Stats</button></a>
    <a href="more.php"><button id="post_button">More</button></a> -->

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
                        // if ($row['post_date'] = date("Y-m-d")) {
                        //     echo "<p>Today</p>";
                        //     // echo $row['post_date'];
                        //     // echo date("Y-m-d");
                        // } else {
                        //     echo "<p>".$row['post_date']."</p>";
                        // }
                
                echo "<p>".$row['post_date']."</p>";
                echo "<h3>".$row["post_content"]."</h3>";
                echo "</li>";
                    }//end while
                    echo "</ul>";
                    $i++;
                } else {
                    echo "<h1>0 results found!</h1>";
            }// end if else

            ?>
        </div>	<!-- end light slider -->

        
    </div> <!-- end main content -->

    <?php 
    include 'includes/secure_footer.php';
    ?>