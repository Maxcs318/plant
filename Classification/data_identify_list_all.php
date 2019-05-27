<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Identify All </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container"> 
        <div class="row">
            <div class="col-12"><br>
            <center><h4>Data Identify All . <a href="../index.php">Index</a></h4></center><hr><br>
            </div>
        </div>            
            <?php require("../ConnData/connectDB.php");?>
            <?php
                $sql = " SELECT * FROM classification LEFT JOIN member 
                ON member.m_id=cl_linkmember ORDER BY cl_id DESC ";
                
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                            ?>
                            <div class="row" onclick="window.location.href='data_identify_selected.php?getCl_id=<?php echo $row["cl_id"];?>'" >
                                <div class="col-lg-3 col-xs-12">
                                        <img src="../image_for_checkdisease/<?php echo $row["cl_image"];?>" width="100%" >
                                </div>
                                <div class="col-lg-3 col-xs-12">
                                    <h4>Date</h4>
                                    <h5><?php echo $row["cl_date"];?></h5>    
                                </div>
                                <div class="col-lg-3 col-xs-12">
                                    <h4>User ID</h4>
                                    <h5><?php echo $row["m_username"];?></h5>    
                                </div>
                                <div class="col-lg-3 col-xs-12">
                                    <h4>Status</h4>
                                    <h5>
                                    <?php if($row["cl_confirm"]==''){
                                        echo 'Non';
                                    }else{
                                        echo 'Confirm  '.$row["cl_confirm"];
                                    }
                                    ?>
                                    </h5>    
                                </div>

                            </div> <hr>
                            <?php
                    }
                } else {
                    echo "0 results";
                }
            ?>
    </div>
    <?php $conn->close(); ?>    
</body>
</html>