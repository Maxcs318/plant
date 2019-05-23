<?php session_start();

$_SESSION["nameimage"]

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Result Disease.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
        <?php $sql = "SELECT * FROM member WHERE m_username = '".$strUsername."' and m_password = '".$strPassword."'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        ?>

            <div class="col-12">

            <center><h3></h3></center>




            </div>    
        </div> 
        
    </div>
    </form>
</body>
</html>