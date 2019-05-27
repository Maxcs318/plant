<?php session_start(); ?>
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
            <center><h4>  Identify the disease . <a href="../index.php">Index</a></h4></center><hr><br>
            </div>
        </div>            
            <?php require("../ConnData/connectDB.php");?>
            <?php
                $sql = " SELECT * FROM classification LEFT JOIN member 
                ON member.m_id=cl_linkmember WHERE cl_id='".$_GET["getCl_id"]."' ";
                
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                            ?>
                            <div class="row">
                                <div class="col-lg-4 col-xs-6">
                                    <img src="../image_for_checkdisease/<?php echo $row["cl_image"];?>" height="" width="100%" >
                                </div>
                                <div class="col-lg-8 col-xs-6">
                                <form action="../ConnData/EditClassificationDisease.php" method="post"> 
                                    <input type="hidden" name="Cl_id" value="<?php echo $_GET["getCl_id"]; ?>">
                                    
                                    <b>S1 :</b>  <!-- detail S1 Bla Bla Bla -->
                                    <input type="radio" name="S1" value="1"> Yes 
                                    <input type="radio" name="S1" value="0"> No
                                    <br>
                                    <b>S2 :</b>  <!-- detail S1 Bla Bla Bla -->
                                    <input type="radio" name="S2" value="1"> Yes 
                                    <input type="radio" name="S2" value="0"> No
                                    <br>
                                    <b>S3 :</b>  <!-- detail S1 Bla Bla Bla -->
                                    <input type="radio" name="S3" value="1"> Yes 
                                    <input type="radio" name="S3" value="0"> No
                                    <br>
                                    <b>S4 :</b>  <!-- detail S1 Bla Bla Bla -->
                                    <input type="radio" name="S4" value="1"> Yes 
                                    <input type="radio" name="S4" value="0"> No
                                    <br>
                                    <b>S5 :</b>  <!-- detail S1 Bla Bla Bla -->
                                    <input type="radio" name="S5" value="1"> Yes 
                                    <input type="radio" name="S5" value="0"> No
                                    <br>
                                    <b>S6 :</b>  <!-- detail S1 Bla Bla Bla -->
                                    <input type="radio" name="S6" value="1"> Yes 
                                    <input type="radio" name="S6" value="0"> No
                                    <br>
                                    <b>S7 :</b>  <!-- detail S1 Bla Bla Bla -->
                                    <input type="radio" name="S7" value="1"> Yes 
                                    <input type="radio" name="S7" value="0"> No
                                    <br>
                                    <b>S8 :</b>  <!-- detail S1 Bla Bla Bla -->
                                    <input type="radio" name="S8" value="1"> Yes 
                                    <input type="radio" name="S8" value="0"> No
                                    <br>
                                    <b>S9 :</b>  <!-- detail S1 Bla Bla Bla -->                                    
                                    <input type="radio" name="S9" value="1"> Yes 
                                    <input type="radio" name="S9" value="0"> No
                                    <br>
                                    <b>S10 :</b>  <!-- detail S1 Bla Bla Bla -->
                                    <input type="radio" name="S10" value="1"> Yes 
                                    <input type="radio" name="S10" value="0"> No
                                    <br>
                                    <b>S11 :</b>  <!-- detail S1 Bla Bla Bla --> 
                                    <input type="radio" name="S11" value="1"> Yes 
                                    <input type="radio" name="S11" value="0"> No
                                    <br>
                                    <b>S12 :</b>  <!-- detail S1 Bla Bla Bla -->
                                    <input type="radio" name="S12" value="1"> Yes 
                                    <input type="radio" name="S12" value="0"> No
                                    <br>
                                    <b>S13 :</b>  <!-- detail S1 Bla Bla Bla -->
                                    <input type="radio" name="S13" value="1"> Yes 
                                    <input type="radio" name="S13" value="0"> No
                                    <br>
                                    <b>S14 :</b>  <!-- detail S1 Bla Bla Bla -->
                                    <input type="radio" name="S14" value="1"> Yes 
                                    <input type="radio" name="S14" value="0"> No
                                    <br>
                                    <b>S15 :</b>  <!-- detail S1 Bla Bla Bla -->
                                    <input type="radio" name="S15" value="1"> Yes 
                                    <input type="radio" name="S15" value="0"> No
                                    <br>
                                    <b>S16 :</b>  <!-- detail S1 Bla Bla Bla -->
                                    <input type="radio" name="S16" value="1"> Yes 
                                    <input type="radio" name="S16" value="0"> No
                                    <br>
                                    <br> <h5>Identify The Disease</h5>
                                    <select class="form-control col-lg-6" type="text" name="newDisease">
                                            <option value="Anthracnose">Anthracnose</option>
                                            <option value="Algol Spot">Algol Spot</option>
                                            <option value="Normol">Normal</option>
                                            <option value="" selected>Choose</option>
                                    </select><br>
                                    <button class="form-control col-lg-6 btn-primary"> Save </button>
                                </form>
                                </div>
                            </div>  
                            <?php
                    }
                    ?> <?php
                } else {
                    echo "0 results";
                }
            ?>
    </div>
    <?php $conn->close(); ?>    
</body>
</html>