<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Classification All </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container"> 
        <div class="row">
            <div class="col-12"><br>
            <center><h4> My Classification All . <a href="../index.php">Index</a></h4></center><hr><br>
            </div>
        </div>            
            <?php require("../ConnData/connectDB.php");?>
            <?php
                $sql = " SELECT * FROM classification LEFT JOIN member 
                ON member.m_id=cl_linkmember WHERE m_id='".$_SESSION["m_id"]."' ORDER BY cl_id DESC ";
                
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    ?> <div class="row"> <?php
                    while($row = $result->fetch_assoc()) {
                            ?>
                                <div class="col-lg-4 col-xs-6">
                                    <img src="../Image/image_for_checkdisease/<?php echo $row["cl_image"];?>" height="350px" width="100%" >
                                    <br><br>
                                    Disease  : <?php echo $row["cl_disease"];?><br><br>
                                    <button type="submit" class="form-control btn-primary" 
                                    onclick="window.location.href='classification_selected.php?getCl_image=<?php echo $row["cl_image"]; ?>'"> View</button><br><br>
                                </div>
                            <?php
                    }
                    ?></div> <?php
                } else {
                    echo "0 results";
                }
            ?>
    </div>
    <?php $conn->close(); ?>    
</body>
</html>