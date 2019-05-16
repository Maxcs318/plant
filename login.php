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
    <div class="container box" >
        <div class="row">

            <div class="col-xs-12 col-lg-12">
                <form action="ConnData/check_login.php" method="post">
                    <h1>LOGIN</h1>
                    <p>User Name</p>
                    <input class="form-control" type="text" name="username" placeholder="username" required>

                    <p>Password</p>
                    <input class="form-control" type="password" name="password" placeholder="password" required>

                    <button id="insert" type="submit" name="save">sign in</button>
                </form>
            </div>

        </div><!--end row --> 
    </div>
</body>

</html>