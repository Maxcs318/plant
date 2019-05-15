<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Index </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- <script src="bootstrap/js/bootstrap.min.js" ></script> -->
</head>
<body>
    
    <div class="container"> <br>
    
        <!-- Row 1 -->
        <div class="row">
            <div class="col-12">
                <center><h4>Register . <a href="login.php">Login</a> <a href="allMember.php">Member</a> </h4></center><hr>
            </div>
        </div>
        <!-- Row 2 -->
        <form action="ConnData/InsertRegister.php" method="post"> 
        <div class="row">
            <div class="col-3">
                <label id="first"> First name :</label><br/>
                <input class="form-control" type="text" name="firstname" required><br/>
            </div>
            <div class="col-3">
            <label id="first">Last Name :</label><br/>
            <input class="form-control" type="text" name="lastname" required><br/>
            </div>  
            <div class="col-4">
            <label id="first">Password :</label><br/>
            <input class="form-control" type="password" name="password" required><br/>
            </div>
            <div class="col-2">
                <label id="gender"> Status :</label><br/>
                <select required class="form-control" type="text" name="status" >
                    <option value=""  > Choose </option>
                    <option value="user">User</option>
                    <option value="master">Master</option>                
                </select>
            </div>
        </div>
        <!-- Row 3 -->
        <div class="row">
        
        </div>
        <!-- Row 4 -->
        <div class="row">
            <div class="col-9"></div>
            <div class="col-3">
                <button class="btn-primary form-control" type="submit" name="save">Save</button>
            </div>
        </div>
        </form>

    </div>
    
</body>
</html>