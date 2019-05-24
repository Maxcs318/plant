<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Post All </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/main.css">
    <link rel="shortcut icon" href="../img/leaficon.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
</head>

<body class="mobile">

    <!-- user id top -->
    <div style="text-align:right;" class="usertop">
        Username :
        <?php echo $_SESSION["m_username"]; ?>
        | Status :
        <?php echo $_SESSION["m_status"]; ?>
    </div>
    <!--end user id top -->
    <p class="text-line">
        <img src="../img/mangoicon.png" style="width: 50px; margin-right: 20px;">
        EXPERT SYSTEM FOR PLANT DISEASE CLASSIFICATION
    </p>

    <div class="container box-list" style="margin: auto; margin-top: 30px;">
        <div class="row">
            <div class="col-xs-12 col-md-12"><br>
                <h4 class=" list-header"> My Post All . <a href="../index.php">Index</a></h4>
            </div>
        </div>
        <?php require("../ConnData/connectDB.php"); ?>
        <?php
        $sql = " SELECT * FROM posts  LEFT JOIN image_of_post 
                ON posts.p_linkimage=image_of_post.iop_linkpost
                WHERE posts.p_own = " . $_SESSION['m_id'] . " 
                ORDER BY p_id DESC ";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            $check_post = 'a';
            while ($row = $result->fetch_assoc()) {

                if ($check_post != $row["p_linkimage"]) {
                    $check_post = $row["p_linkimage"];
                    ?>

                    <div class="row border-line">
                        <div class="col-xs-4 col-md-2" style="margin-top:20px;">
                            <?php
                            if ($row["iop_name"] != '') {
                            ?>
                                <img src="../image_file_post/<?php echo $row["iop_name"]; ?>" width="100%">
                            <?php
                        }
                        ?>
                        </div>
                        <div class="col-xs-8 col-md-10">
                            <div style="margin-top:20px;">
                                <div class="float-right">

                                </div>
                                Post ID: <?php echo $row["p_id"] . "<br>"; ?>
                                Header : <?php echo $row["p_header"] . "<br>"; ?>
                                Detail : <?php echo substr($row["p_detail"], 0, 100) . "<br>"; ?>
                                Date : <?php echo substr($row["p_date"], 0, 10)  . "<br>"; ?>
                                Time : <?php echo substr($row["p_date"], 11)  . "<br>"; ?>
                                <!-- <div style="text-indent: 30px;">
                                                <?php 
                                                ?>
                                            </div> -->
                                <a class="float:bottom" href='post_selected.php?getPostID= <?php echo $row["p_id"]; ?>'">View Post</a>
                                        </div>
                                    </div>
                                </div>

                        <?php
                    }
                }
            } else {
                echo "0 results";
            }
            ?>
            <a class="btn btn-danger form-control float-right" href="#" role="button" onclick="history.back(-1)" style="width: 80px;  margin-bottom: 20px;">Back</a>
    </div>

    <footer style=" margin-bottom: 30px;">
                        <div>

                        </div>
                        </footer>

                        <?php $conn->close(); ?>
</body>

</html>