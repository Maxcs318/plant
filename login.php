<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="shortcut icon" href="img/leaficon.ico" type="image/x-icon" />
</head>
<body>
    <div class="container">
    <form action="ConnData/check_login.php" method="post">
    
        <div class="row box">
            
            <div class="col-12">
                <h1>LOGIN</h1>
                <p>User Name :</p>
                <input class="form-control" type="text" name="username" required>

                <p>Password :</p> 
                <input class="form-control" type="password" name="password" required>

                <button id="insert" type="submit" name="save"> sign in.</button>
                
        </div>
    </form>
    </div>
    
</body>
</html>