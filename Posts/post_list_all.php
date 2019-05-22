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
    <div class="container"> 
        <div class="row">
            <div class="col-12"><br>
            <center><h4> Post All . <a href="../index.php">Index</a></h4></center>
            </div>
        </div>            
            <?php require("../ConnData/connectDB.php");?>
            <?php
                $sql = " SELECT * FROM posts LEFT JOIN image_of_post 
                ON posts.p_linkimage=image_of_post.iop_linkpost ORDER BY p_date DESC ";
                
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    $check_post = 'a';
                    while($row = $result->fetch_assoc()) {
                        if($check_post!=$row["p_linkimage"]){
                        $check_post=$row["p_linkimage"];
                            ?>
                            <div class="row" onclick="window.location.href='post_selected.php?getPostID=<?php echo $row["p_id"];?>'">
                            <div class="col-2">
                            <?php
                            if($row["iop_name"]!=''){
                                // echo $row["iop_id"]."<br>";
                                // echo $row["iop_name"]."<br>";
                                ?>
                                <img src="../image_file_post/<?php echo $row["iop_name"];?>"  width="100%" >
                                <?php
                            }
                            ?>
                            </div>
                            <div class="col-10">
                            <?php
                                // echo $row["p_id"]."<br>"; 
                                echo $row["p_header"]."<br>";
                                echo $row["p_detail"]."<br>";
                                echo $row["p_date"]."<br>";
                                // echo $row["p_own"]."<br>";
                                // echo $row["p_linkimage"]."<br>"; 
                            ?>
                            </div>
                            </div><hr>
                            <?php
                        }             
                    }
                } else {
                    echo "0 results";
                }
            ?>
    </div>
    <?php $conn->close(); ?>    
</body>
</html>