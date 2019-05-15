<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plant Disease</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/leaficon.ico" type="image/x-icon" />
</head>
<body>
<div class="container">
    <form action="ConnData/InsertRegister.php" method="post"><br>
        <div class="row"> <!--row 1-->
    
        </div>
        <div class="row"> <!--row 2-->
            <div class="col-4">                
            </div>
            <div class="col-4">
                <center><h4>User Register. </h4></center><hr>
                <label id="first">First Name :</label><br/>
                <input class="form-control" type="text" name="firstname" required><br/>

                <label id="first">Last Name :</label><br/>
                <input class="form-control" type="text" name="lastname" required><br/>

                <label id="first">E-mail :</label><br/>
                <input class="form-control" type="email" name="email" required><br/>

                <label id="first">Phone :</label><br/>
                <input class="form-control" type="text" name="phone" required><br/>

                <label id="first">User Name :</label><br/>
                <input class="form-control" type="text" name="username" required><br/>

                <label id="first">Passwowrd :</label><br/>
                <input class="form-control" type="password" name="password" required><br/>
                <br>

                <input type="hidden" name="status" value="user">
                
                <button  class="btn-primary form-control col-3" id="insert" type="submit" name="save" style="float: right;"> Save.</button>
                <br><br>
            </div>  
            <div class="col-4">
            </div>
        </div>
        <div class="row"> <!--row 3-->
        
        </div>
    </form>
</div>
</body>
</html>