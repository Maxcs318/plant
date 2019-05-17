<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Post All </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container"> <br>    
        <center><h4> Post All . <a href="index.php">Index</a></h4></center> <hr>
        <!-- Row 1 -->
        <div class="row">
            <?php require("../ConnData/connectDB.php");?>
            <?php
                $sql = " SELECT * FROM posts 
                LEFT JOIN image_of_post
                ON posts.p_linkimage=image_of_post.iop_linkpost
                ORDER BY p_id ";
                
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    $check_post = 0;
                    $check_post2 = 0;
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='col-12'>"; // div start
                        if($check_post != $row["p_linkimage"]){
                            $check_post = $row["p_linkimage"];


                            // if($check_post2 != $row["p_linkimage"]){
                            //     $check_post2 = $row["p_linkimage"];
                            
                                echo $row["p_id"]."<br>"; 
                                echo $row["p_header"]."<br>";
                                echo $row["p_detail"]."<br>";
                                echo $row["p_date"]."<br>";
                                echo $row["p_own"]."<br>";
                                echo $row["p_linkimage"]."<br>";
                                echo $row["iop_id"]."<br>";
                                echo $row["iop_name"]."<br>";
                                
                            // }
                        ?>
                            <img src="../image_file_post/<?php echo $row["iop_name"];?>" height="42" width="42" >
                        <?php
                            
                        }else{
                            echo $row["iop_id"]."<br>";
                            echo $row["iop_name"]."<br>";
                        ?>
                            <img src="../image_file_post/<?php echo $row["iop_name"];?>" height="42" width="42" >
                        <?php 
                        }
                        echo "</div>"; // div end

                    }
                } else {
                    echo "0 results";
                }
            ?>
        </div>
    
    </div>
    <?php $conn->close(); ?>
</body>
</html>