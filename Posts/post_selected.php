<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12"><br>
            <center><h4>This Post</h4></center>
        </div>
    </div><hr>
<?php require("../ConnData/connectDB.php");?>
            <?php
                $sql = " SELECT * FROM posts LEFT JOIN image_of_post 
                ON posts.p_linkimage=image_of_post.iop_linkpost
                WHERE p_id='".$_GET["getPostID"]."' ";
                
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    echo '<div class="row">
                            <div class="col-12">';    
                    while($row = $result->fetch_assoc()) {                
                        if($row["iop_name"]!=''){
                            ?>
                            <img src="../image_file_post/<?php echo $row["iop_name"];?>" height="100" width="100" >
                            <?php
                        }                                       
                    }
                    echo '  </div>
                        </div>';
                } else {
                    echo "0 results";
                }
            ?>
<?php $conn->close(); ?>    

<?php require("../ConnData/connectDB.php");?>
            <?php
                $sql = " SELECT * FROM posts 
                WHERE p_id='".$_GET["getPostID"]."' ";
                
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    echo '<div class="row">';
                    while($row = $result->fetch_assoc()) {                        
                        echo $row["p_header"]."<br>";
                        echo $row["p_detail"]."<br>";
                        echo $row["p_date"]."<br>";                                
                    }
                    echo '</div>';
                } else {
                    echo "0 results";
                }
            ?>
<?php $conn->close(); ?>    
<hr>
<?php require("../ConnData/connectDB.php");?>
<?php
                $sql = " SELECT * FROM comment LEFT JOIN member
                ON member.m_id=comment.c_own
                WHERE c_linkpost='".$_GET["getPostID"]."' ";
                
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    
                    while($row = $result->fetch_assoc()) {  
                        echo '<div class="row">
                                <div class="col-12">';
                        echo $row["m_username"]."<br>";                      
                        echo $row["c_detail"]."<br>";
                        if($row["c_confirm"]!=''){
                        echo "Your plant is a ".$row["c_confirm"]." disese <br>";
                        }
                        echo $row["c_date"]."<br>"; 
                        echo '  </div>
                             </div> <hr>';                                  
                    }
                } else {
                    echo "0 Comment .";
                }
            ?>
<?php $conn->close(); ?>

    <?php 
    if($_SESSION["m_status"]=='expert'){
        ?>
        <form action="../ConnData/InsertComment.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12">
                    <select class="form-control col-3" name="commentconfirm" style="float: right;">
                        <option value="A">Disease A</option>
                        <option value="B">Disease B</option>
                        <option value="No" >Not a Disease</option>
                        <option value="" selected>Choose</option>
                    </select>
                </div>
            </div><br>
            <div class="row">
                <div class="col-12">
                <input type="hidden" name="id_linkpost" value="<?php echo $_GET["getPostID"]; ?>">
                <input type="hidden" name="commentown" value="<?php echo $_SESSION["m_id"]; ?>">
                <input type="hidden" name="commentdate" value="<?php echo date("Y-m-d H:i:s", time() + (60 * 60) * 5); ?>">
                <textarea rows="4" class="form-control" name="commentdetail" > </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-12"> <br>
                    <button class="btn-primary form-control col-3" type="submit" style="float: right;">Comment.</button>
                </div>
            </div>
        </form><br>
        <?php
    }
    
    ?>

</div>
</body>
</html>
