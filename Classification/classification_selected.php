<?php session_start(); ?>
<?php $_SESSION['nameimage']=$_GET["getCl_image"];?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>This Classification </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container"> 
        <div class="row">
            <div class="col-12"><br>
            <center><h4>  Classification Data . <a href="../index.php">Index</a></h4></center><hr><br>
            </div>
        </div>            
            <?php require("../ConnData/connectDB.php");?>
            <?php
                $sql = " SELECT * FROM classification LEFT JOIN member 
                ON member.m_id=cl_linkmember WHERE cl_image='".$_SESSION["nameimage"]."' ";
                
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    ?> <div class="row"> <?php
                    while($row = $result->fetch_assoc()) {
                            ?>
                                <div class="col-lg-6 col-xs-6">
                                    <img src="../image_for_checkdisease/<?php echo $row["cl_image"];?>" height="" width="100%" >
                                    <br><br>
                                    <button type="submit" class="form-control btn-danger" 
                                    onclick="window.location.href='checkDisease.php'"> Check Again </button><br><br>
                                </div>
                                <div class="col-lg-6 col-xs-6">
                                    <h4>Disease  : <?php echo $row["cl_disease"];?></h4><br>
                                    <h4>Symptoms </h4>
                                    S1 : <?php if( $row["cl_S1"]==1){ echo 'Found'; }else{echo 'Not found';}?>    <br>  
                                    S2 : <?php if( $row["cl_S2"]==1){ echo 'Found'; }else{echo 'Not found';}?>    <br>  
                                    S3 : <?php if( $row["cl_S3"]==1){ echo 'Found'; }else{echo 'Not found';}?>    <br>  
                                    S4 : <?php if( $row["cl_S4"]==1){ echo 'Found'; }else{echo 'Not found';}?>    <br>  
                                    S5 : <?php if( $row["cl_S5"]==1){ echo 'Found'; }else{echo 'Not found';}?>    <br>  
                                    S6 : <?php if( $row["cl_S6"]==1){ echo 'Found'; }else{echo 'Not found';}?>    <br>  
                                    S7 : <?php if( $row["cl_S7"]==1){ echo 'Found'; }else{echo 'Not found';}?>    <br>                                
                                    S8 : <?php if( $row["cl_S8"]==1){ echo 'Found'; }else{echo 'Not found';}?>    <br>  
                                    S9 : <?php if( $row["cl_S9"]==1){ echo 'Found'; }else{echo 'Not found';}?>    <br>  
                                    S10 : <?php if( $row["cl_S10"]==1){ echo 'Found'; }else{echo 'Not found';}?>    <br>  
                                    S11 : <?php if( $row["cl_S11"]==1){ echo 'Found'; }else{echo 'Not found';}?>    <br>  
                                    S12 : <?php if( $row["cl_S12"]==1){ echo 'Found'; }else{echo 'Not found';}?>    <br>  
                                    S13 : <?php if( $row["cl_S13"]==1){ echo 'Found'; }else{echo 'Not found';}?>    <br>  
                                    S14 : <?php if( $row["cl_S14"]==1){ echo 'Found'; }else{echo 'Not found';}?>    <br>  
                                    S15 : <?php if( $row["cl_S15"]==1){ echo 'Found'; }else{echo 'Not found';}?>    <br>  
                                    S16 : <?php if( $row["cl_S16"]==1){ echo 'Found'; }else{echo 'Not found';}?>    <br>  



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