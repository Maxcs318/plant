<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/main.css">
    <link rel="shortcut icon" href="../img/leaficon.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">
</head>

<body>

    <div style="text-align:right" class="usertop">
        Username :
        <?php echo $_SESSION["m_username"]; ?>
        | Status :
        <?php echo $_SESSION["m_status"]; ?>
    </div>
    <p class="text-line">
        <img src="../img/mangoicon.png" style="width: 50px; margin-right: 20px;">
        EXPERT SYSTEM FOR PLANT DISEASE CLASSIFICATION
    </p>
    <form action="../ConnData/InsertClasscification.php" method="post" enctype="multipart/form-data">
        <div class="container box-post" style="margin-top: 30px;">

            <div class="row">
                <div class="col-12">
                <h1 class="header">Choose plant image for check disease.</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-0 col-md-4"></div>

                <div class="col-xs-12 col-md-4">
                    <div class="check-img ">

                    </div>
                    <label id="first" style="margin-top: 20px;">Upload Photo :</label>

                    <div id="img">
                        <img src="" alt="">
                    </div>

                    <input type="file" name="imageforcheck[]" id="image" required>
                    <input type="hidden" name="linkmember" value="<?php echo $_SESSION["m_id"]; ?>">

                    <button class="btn-primary form-control" type="submit" name="save" style="width: 30%; margin:20px 30% 20px;">Next</button>
                    <button class="btn-danger form-control" type="submit" name="save"  onclick="history.back(-1)" style="width: 30%; margin:20px 30% 20px;">Cancel</button>
                    
                </div>

                <div class="col-xs-0 col-md-4"></div>
            </div>
            <div class="row">
                <div class="col-12">

                </div>
            </div>
        </div>
    </form>
</body>

</html>