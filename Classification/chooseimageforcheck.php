<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Choose Image.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <form action="../ConnData/InsertClasscification.php" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col-12"><br>
                <center><h4>Choose File For Check Disease.</h4></center><hr>
                <label id="first" style="margin-top: 20px;">Upload Photo :</label><br/>
                <input type="file" name="imageforcheck[]" id="image" required ><br> 
                <input type="hidden" name="linkmember" value="<?php echo $_SESSION["m_id"]; ?>">
            </div>    
        </div> <br>
        <div class="row">
            <div class="col-12">
                <button class="btn-primary form-control col-3" type="submit" name="save" >Save</button>        
            </div>
        </div>
    </div>
    </form>
</body>
</html>