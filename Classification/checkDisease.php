<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Check Disease.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12"><br>
            <center><h4>Classification.</h4></center><hr>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <img src="../image_for_checkdisease/<?php echo $_SESSION["nameimage"];?>"  width="100%" >
            </div>
            <div class="col-6">
                <img src="../image_classification/S15.jpg"  width="75%" >
                <input  type="radio" name="S15" value="1"> Yes
                <input  type="radio" name="S15" value="0"> No<br>
            </div>
        </div>
        <div class="row">
        
        </div>
    </div>
</body>
</html>