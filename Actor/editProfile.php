<?php ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xs-12"><br>
                <center><h4>Edit Profile</h4></center>  <hr>
            </div> 
        </div>
        <div class="row">
            <div class="col-lg-4 col-xs-1"></div>
            <div class="col-lg-4 col-xs-10">
            <form action="../ConnData/      " method="post" enctype="multipart/form-data">
                <label>Profile :</label>
                <input type="file" name="imageforcheck[]" > <br><br>

                <label>First Name</label>
                <input class="form-control" type="text" name="firstname" value=" " maxlength="25" required>

                <label>Last Name</label>
                <input class="form-control" type="text" name="lastname" value=" " maxlength="25" required>

                <label>E-mail</label>
                <input class="form-control" type="email" name="email" value=" " required>

                <label>Phone</label>
                <input class="form-control" name='phone' type='text' value="" OnKeyPress="return chkNumber(this)" required="" maxlength="10">

                <label>User Name</label>
                <input class="form-control" type="text" name="username" value=" "  maxlength="10" required>

                <label>Password</label>
                <input class="form-control" type="password" name="password" value="" maxlength="10" required>
                <br>
                <button class="form-control btn-primary"  type="submit" name="save">Save</button>    
            
            </form>
            </div>
            <div class="col-lg-4 col-xs-1"></div>


        </div>
    </div>
</body>
</html>