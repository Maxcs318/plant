<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/leaficon.ico" type="image/x-icon" />
</head>
<body>
    <?php require("../../ConnData/sessionNULL.php");
        require("../../ConnData/sessionForAdmin.php");
    ?>
    <div class="container">
        <center>
            <h3> ADMIN PAGE. </h3>
        <div class="row">
            <table width="100%" >
                <tr>
                    <th width="40%">Firstname</th>
                    <th width="40%">Lastname</th>
                    <th width="20%">Status</th>
                </tr>
                <tr>
                </tr>
                    <td><?php echo $_SESSION["m_firstname"]; ?></td>
                    <td><?php echo $_SESSION["m_lastname"]; ?></td>
                    <td><?php echo $_SESSION["m_status"]; ?></td>
            </table>
            
        </div>        </center>
        <div class="row">
            <div class="col-4">
            </div>
            <div class="col-4">
            </div>
            <div class="col-4"> <br>
            <a href="../../ConnData/logout.php"><button class="btn-danger form-control">Log Out.</button></a>
                
            </div>
        </div>
    </div>
</body>
</html>