<?php 
$pagetitle = "index";
include'includes/mysqli_connect.php';
include'includes/functions.php';
include'includes/sessions.php';
// include 'includes/post_section.php';

$user_id = 15;  //"url content"

$sql = "SELECT * FROM posts
            WHERE `user_id` = '$user_id' AND post_date > CURDATE() - INTERVAL 2 YEAR
            ORDER BY post_date DESC ";
            $result = $dbc->query($sql);


            $rows = array();

                while ($row = mysqli_fetch_array($result))
                {
                    $post = array();
                    $post['date'] = $row['post_date'];
                    $post['content'] = $row['post_content'];

                    $rows["posts"][] = $post;
                }

            echo json_encode($rows);


// --------------------            
//     $encode = array();

// $encode = array();
// $i = 1;
// while($row = mysqli_fetch_assoc($result)) {
//     // $encode["post"][$row['post_content']] = $row['post_date'];
//     $encode["post"]['post_content'][$row['post_content']] = ['post_date'][$row['post_date']];
// $i++;
// }

// echo json_encode($encode);

// -----------------
    //Create an array
    // $json_response = array();
    
    // while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
    //     $row_array{"post"}['post_date'] = $row['post_date'];
    //     $row_array['post_content'] = $row['post_content'];
        
    //     //push the values in the array
    //     array_push($json_response,$row_array);
    // }
    // echo json_encode($json_response);


             ?>