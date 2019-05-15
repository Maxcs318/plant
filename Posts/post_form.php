<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Post Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php require("../ConnData/sessionNULL.php"); ?>
    <div class="container"> <br>
        <center><h4>Create Post</h4></center><hr>

        <form action="../ConnData/InsertPost.php" method="post"> 
        <div class="row">
            <div class="col-3">                
            </div>
            <div class="col-6">
                <label id="first">Header :</label><br/>
                <input class="form-control" type="text" name="header" required><br/>
                <label id="first">Detale :</label><br/>
                <input class="form-control" type="text" name="detail" required><br/>
                <label id="first">Upload Photo :</label><br/>
                <input type="file" name="image" id="image" >
                <input type="hidden" name="own" value="<?php echo $_SESSION["m_firstname"]; ?>">
                <input type="hidden" name="date" value="<?php echo date("d-m-Y H:i:s",time()+ (60*60)*5 ); ?>">
                <br>
                
                <button  class="btn-primary form-control col-3" id="insert" type="submit" name="save" style="float: right;">Post.</button>
            </div>  
            <div class="col-3">
            </div>
            
        </div>
        <!-- Row 3 -->
        <div class="row">
        
        </div>
        <!-- Row 4 -->
        
        </form>
    
    </div>
  
</body>
</html>