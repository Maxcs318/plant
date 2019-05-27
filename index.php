<?php session_start(); ?>
<?php 
if(isset($_SESSION["m_status"])){
    if($_SESSION["m_status"] == "admin"){
        header("location:Actor/Admin/AdminPage.php");
    }else if($_SESSION["m_status"] == "expert"){
        header("location:Actor/Expert/ExpertPage.php");
    }else if($_SESSION["m_status"] == "user") {
        header("location:Actor/User/UserPage.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plant Disease</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="shortcut icon" href="img/leaficon.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Prompt|Sriracha&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">

        <div class="row">
           
            <div class="col-xs-4 col-sm-4 col-md-4 box"> 
                <h1>Plant Disease</h1>
                <button type="submit" onclick="window.location.href='login.php'">Login</button>
                <br>
                <button type="submit" onclick="window.location.href='register.php'">Register</button>
            </div>
        
        </div>
    </div>
</body>

</html>