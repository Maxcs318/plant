<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Post All </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- <script src="bootstrap/js/bootstrap.min.js" ></script> -->
</head>
<body>

    <div class="container"> <br>    
        <center><h4> Post All . <a href="index.php">Index</a></h4></center> <hr>
        <!-- Row 1 -->
        <div class="row">
            <?php require("../ConnData/connectDB.php");?>
            <?php
                $sql = "SELECT * FROM image_of_post INNER JOIN posts ON posts.p_linkimage = image_of_post.iop_linkpost;";
                
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo $row["p_id"]."<br>"; 
                        echo $row["p_header"]."<br>";
                        echo $row["p_detail"]."<br>";
                        echo $row["p_date"]."<br>";
                        echo $row["p_own"]."<br>";
                        echo $row["p_linkimage"]."<br>";
                        echo $row["iop_id"]."<br>";
                        echo $row["iop_name"]."<br>";
                        ?>
                        <img src="../image_file_post/<?php echo $row["iop_name"];?>" >
                        <?php
                        echo "<br>";


                    }
                } else {
                    echo "0 results";
                }
                
            ?>
        </div>
        <!-- Row 2 -->
        <div class="row">
        
        </div>
        <!-- Row 3 -->
        <div class="row">
        
        </div>
        <!-- Row 4 -->
        <div class="row">
        
        </div>
    </div>
    
    <?php $conn->close(); 
        // session_start(); // test session
        // echo $_SESSION["m_firstname"];    
    ?>

</body>
</html>