<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/leaficon.ico" type="image/x-icon" />
</head>
<body>
    <div class="container">
    <form action="ConnData/check_login.php" method="post"><br>
        <div class="row">
            <div class="col-4">
            </div>
            <div class="col-4">
                <center><h4>Login .</h4></center><hr>
                <label id="first">User Name :</label><br/>
                <input class="form-control" type="text" name="username" required><br/>

                <label id="first">Password :</label><br/>
                <input class="form-control" type="password" name="password" required><br/><br>

                <button  class="btn-primary form-control col-4" id="insert" type="submit" name="save" style="float: right;"> sign in.</button>
                <br><br>

            </div>
            <div class="col-4">
            </div>
        </div>
    </form>
    </div>
    
</body>
</html>