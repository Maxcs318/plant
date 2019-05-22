<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test Up Image</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap/css/main.css">
    <link rel="shortcut icon" href="../../img/leaficon.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

</head>

<body>
    <?php require("../../ConnData/sessionNULL.php");
    require("../../ConnData/sessionForUser.php");
    ?>
    <!-- user id top -->
    <div style="text-align:right;" class="usertop">
        Username :
        <?php echo $_SESSION["m_username"]; ?>
        | Status :
        <?php echo $_SESSION["m_status"]; ?>
    </div>
    <!--end user id top -->


    <p class="text-line">
        <img src="../../img/mangoicon.png" style="width: 50px; margin-right: 20px;">
        EXPERT SYSTEM FOR PLANT DISEASE CLASSIFICATION
    </p>


    <!-- <div class="topnav" style="float-right margin-left: 300px;">
        <a href="#home" style="margin-left: 300px">Home</a>
        <a class="active" href="#about">Post</a>
        <a href="#contact">My Post</a>
        <a href="">Classify Plant</a>

        <div class="search-container">
            <form action="/action_page.php">
                <input type="text" placeholder="Search..." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div> 

    <div class="container">
        <center>
            <h3> USER PAGE </h3>
            <hr>
        </center>

        <div class="row main">
            <table width="100%">
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

          <div class="sidenav">
                <p style="font-size: 35px; text-align:center;">PLANT DISEASE</p>
                <img src="../../img/icon.png" style="width: 50%;" alt="">
                <div class="container" style="border: 2px solid black; width: 80%; margin: auto; background: white;">
                <p>Username :  <?php echo $_SESSION["m_username"]; ?></p>
                    <p>ID :         <?php echo $_SESSION["m_id"]; ?></p>
                    <p>Status :     <?php echo $_SESSION["m_status"]; ?></p>
                </div>
            </div> 
        </div>  -->
    <div class="container">
        <div class="row" style="margin-top: 50px;">
            <div class="col-xs-12 col-md-6">
                <a href="../../Posts/post_list_person.php">
                    <button type="submit" class="imgcenter" style="border:0; background: transparent; ">
                        <img src="../../img/pageicon/aboutme.png" class="imgcenter">
                        <p class="textimg">About me</p>
                    </button></a>
            </div>

            <div class="col-xs-12 col-md-6">
                <a href="#">
                    <button type="submit" class="imgcenter" style="border: 0; background: transparent">
                        <img src="../../img/pageicon/aboutplant.png" class="imgcenter">
                        <p class="textimg">About Plant's <br> Disease in Mango</p>
                    </button></a>
            </div>
        </div>

        <div class="row" style="margin: 50px;">
            <div class="col-xs-12 col-md-4">
                <a href="../../Posts/post_form.php">
                    <button type="submit" style="border: 0; background: transparent">
                        <img src="../../img/pageicon/post.png" class="imgcenter">
                        <p class="textimg">Post</p>
                    </button></a>
            </div>

            <div class="col-xs-12 col-md-4">
                <a href="#">
                    <button type="submit" class="imgcenter" style="border: 0; background: transparent">
                        <img src="../../img/pageicon/classification.png" class="imgcenter">
                        <p class="textimg">Disease <br> Classification</p>
                    </button></a>
            </div>

            <div class="col-xs-12 col-md-4">
                <a href="../../login.php">
                    <button type="submit" class="imgcenter" style="border: 0; background: transparent">
                        <img src="../../img/pageicon/logout.png" class="imgcenter">
                        <p class="textimg">Log out</p>
                    </button></a>
            </div>
        </div>
    </div>

    </div>
</body>

</html>