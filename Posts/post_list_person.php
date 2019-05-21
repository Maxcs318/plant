<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Post All </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container"> 
        <div class="row">
            <div class="col-12"><br>
            <center><h4> My Post All . <a href="../index.php">Index</a></h4></center>
            </div>
        </div>
        <!-- Row 2 -->
        <!-- <div class="row"> -->
         
            <?php require("../ConnData/connectDB.php");?>
            <?php
                $sql = " SELECT * FROM posts  LEFT JOIN image_of_post 
                ON posts.p_linkimage=image_of_post.iop_linkpost
                WHERE posts.p_own=".$_SESSION["m_id"]."
                ORDER BY p_id ";
                
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    $check_post = 0;
                    while($row = $result->fetch_assoc()) {
                        
                        if($check_post!=$row["p_linkimage"]){
                        ?>
                        <div class="row" onclick="window.location.href='post_selected.php?getPostID=<?php echo $row["p_id"];?>'">
                        <div class="col-2">
                        <?php
                            if($row["iop_name"]!=''){
                            ?>  
                            <img src="../image_file_post/<?php echo $row["iop_name"];?>" width="100%" ><br>
                            <?php
                        }
                        ?>
                        </div>
                        <div class="col-10">
                        <?php
                        echo $row["p_id"]."<br>"; 
                        echo $row["p_header"]."<br>";
                        echo $row["p_detail"]."<br>";
                        echo $row["p_date"]."<br>";
                        echo $row["p_own"]."<br>";
                        echo $row["p_linkimage"]."<br>";
                        echo $row["iop_id"]."<br>";
                        echo $row["iop_name"]."<br>";
                            
                        ?>
                            </div>
                        </div><hr>
                        <?php
                        
                        $check_post=$row["p_linkimage"];

                        }
                                            
                    }
                } else {
                    echo "0 results";
                }
            ?>
        <!-- </div> -->
    
    </div>
    <?php $conn->close(); ?>    
</body>
</html>