<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Classification All </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container"> 
        <div class="row">
            <div class="col-12"><br>
            <center><h4> Classification All . <a href="../index.php">Index</a></h4></center><hr><br>
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
                            <div class="row">
                                <div class="col-lg-6 col-xs-12">
                                        <img src="../image_for_checkdisease/<?php echo $row["cl_image"];?>" width="100%" >
                                </div>
                                <div class="col-lg-6 col-xs-12">
                                    <h5>Disease Classification : <?php echo $row["cl_disease"];?></h5>
                                    <h5>Expert Disease Confirm  : <?php echo $row["cl_confirm"];?></h5>
                                    <h5>Symptoms Found :
                                    <?php
                                    if($row["cl_S1"]=='0' && $row["cl_S2"]=='0' && $row["cl_S3"]=='0' && $row["cl_S4"]=='0'
                                    && $row["cl_S5"]=='0' && $row["cl_S6"]=='0' && $row["cl_S7"]=='0' && $row["cl_S8"]=='0'
                                    && $row["cl_S9"]=='0' && $row["cl_S10"]=='0' && $row["cl_S11"]=='0' && $row["cl_S12"]=='0'
                                    && $row["cl_S13"]=='0' && $row["cl_S14"]=='0' && $row["cl_S15"]=='0' && $row["cl_S16"]=='0'
                                    ){
                                    ?>
                                        Not Found.
                                    <?php
                                    }else{
                                    ?>
                                    
                                    <?php if( $row["cl_S1"]==1){ echo 'S1 ,'; }else{ }?>      
                                    <?php if( $row["cl_S2"]==1){ echo 'S2 ,'; }else{ }?>      
                                    <?php if( $row["cl_S3"]==1){ echo 'S3 ,'; }else{ }?>      
                                    <?php if( $row["cl_S4"]==1){ echo 'S4 ,'; }else{ }?>      
                                    <?php if( $row["cl_S5"]==1){ echo 'S5 ,'; }else{ }?>      
                                    <?php if( $row["cl_S6"]==1){ echo 'S6 ,'; }else{ }?>      
                                    <?php if( $row["cl_S7"]==1){ echo 'S7 ,'; }else{ }?>                                    
                                    <?php if( $row["cl_S8"]==1){ echo 'S8 ,'; }else{ }?>      
                                    <?php if( $row["cl_S9"]==1){ echo 'S9 ,'; }else{ }?>     
                                    <?php if( $row["cl_S10"]==1){ echo 'S10 ,'; }else{ }?>      
                                    <?php if( $row["cl_S11"]==1){ echo 'S11 ,'; }else{ }?>      
                                    <?php if( $row["cl_S12"]==1){ echo 'S12 ,'; }else{ }?>      
                                    <?php if( $row["cl_S13"]==1){ echo 'S13 ,'; }else{ }?>      
                                    <?php if( $row["cl_S14"]==1){ echo 'S14 ,'; }else{}?>      
                                    <?php if( $row["cl_S15"]==1){ echo 'S15 ,'; }else{ }?>      
                                    <?php if( $row["cl_S16"]==1){ echo 'S16 ,'; }else{ }?>    
                                    
                                    
                                    <?php } ?>
                                    </h5>
                                    <br><br>                                    
                                    <h5>Confirm Disease </h5>
                                    <br>
                                    <form action="../ConnData/EditClassificationDisease.php" method="post"> 
                                    <input type="hidden" name="own" value="<?php echo $row["cl_id"]; ?>" >
                                        <select class="form-control col-lg-6" type="text" name="newDisease">
                                            <option value="Anthracnose">Anthracnose</option>
                                            <option value="Algol Spot">Algol Spot</option>
                                            <option value="Normol">Normal</option>
                                            <option value="" selected>Choose</option>
                                        </select><br>
                                    <button class="form-control col-lg-6 btn-primary"> Save </button>
                                    </form>
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