<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test Up Image</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
<?php session_start(); ?>
    <div class="container">
        <form action="../ConnData/InsertPost.php" method="post" enctype="multipart/form-data"> 
        <div class="row">
            <div class="col-3">                
            </div>
            <div class="col-6">
                <br>
                <center><h4>Post.</h4></center>
                <label id="first">Header :</label><br/>
                <input class="form-control" type="text" name="header" required><br/>
                <label id="first">Detale :</label><br/>
                <input class="form-control" type="text" name="detail" required><br/>

                <label id="first">Upload Photo :</label><br/>
                <input type="file" name="image[]" id="image" > <br><br>
                <label id="first">Upload Photo 2 :</label><br/>
                <input type="file" name="image[]" id="image" >
                <input type="hidden" name="own" value="<?php echo $_SESSION["m_id"]; ?>">
                <input type="hidden" name="date" value="<?php echo date("Y-m-d H:i:s",time()+ (60*60)*5 ); ?>">
                <br>
                <?php 
                    function generateRandomString($length = 30) {
                        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $charactersLength = strlen($characters);
                        $randomString = '';
                        for ($i = 0; $i < $length; $i++) {
                            $randomString .= $characters[rand(0, $charactersLength - 1)];
                        }
                        return $randomString;
                    }
                    // echo generateRandomString();
                ?>
                <input type="hidden" name="key_post_image" value="<?php echo generateRandomString(); ?>">

                <button  class="btn-primary form-control col-3" id="insert" type="submit" name="save" style="float: right;">Post.</button>
            </div>  
            <div class="col-3">
            </div>
            
        </div>
        </form>
    </div>
</body>
</html>