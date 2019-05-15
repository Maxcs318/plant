<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- <script src="bootstrap/js/bootstrap.min.js" ></script> -->
</head>
<body>
    <div class="container"><br>
    <center><h4> Login . <a href="index.php">Index</a></h4></center> <hr>
        <form method="post" action="ConnData/check_login.php">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <label id="first"> First name :</label><br/>
                    <input class="form-control" type="text" name="firstname" required><br/>
                    <label id="first">Password :</label><br/>
                    <input class="form-control" type="password" name="password" required><br/>

                    <div class="row">
                        <div class="col-9"></div>
                        <input class="col-3 form-control btn-primary" type="submit" name="Submit" value="Login">
                    </div>
                </div>
                <div class="col-4"></div>
            </div>
        
        </form>
    </div>

</body>
</html>