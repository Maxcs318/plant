<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- <script src="bootstrap/js/bootstrap.min.js" ></script> -->
</head>
<body>

    <div class="container"> <br>    
        <center><h4> All Member . <a href="index.php">Index</a></h4></center> <hr>
        <!-- Row 1 -->
        <div class="row">
            <?php require("ConnData/connectDB.php");?>
            <?php
                $sql = "SELECT * FROM all_member ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    ?>  <table style='width:100%'>
                            <tr>
                                <th style='width:5%'>ID</th>
                                <th style='width:10%'>Status</th>
                                <th style='width:20%'>Firstname</th>
                                <th style='width:20%'>Lastname</th>
                                <th style='width:20%'>Password</th>
                                <th style='width:10%'></th>
                                <th style='width:5%'></th>
                                <th style='width:10%'></th>
                            </tr>
                    <?php
                    while($row = $result->fetch_assoc()) {
                    ?>      <tr>
                                <td><?php echo $row["m_id"];?></td>
                                <td><?php echo $row["m_status"];?></td>
                                <td><?php echo $row["m_firstname"];?></td>
                                <td><?php echo $row["m_lastname"];?></td>
                                <td><?php echo $row["m_password"];?></td>
                                <td><button class="btn-primary form-control" type="" name="edit" onclick="window.location.href='pUpdate.php?getID=<?php echo $row["s_id"];?>'">Edit</button></td>
                                <td></td>
                                <td><button class="btn-danger form-control" type="" name="delete" onclick="deleteData(<?php echo $row['s_id'];?>)" >Delete</button></td>
                            </tr>                        
                    <?php
                    }
                    ?>  </table> <?php
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