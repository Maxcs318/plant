<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User home</title>
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
                <a href="../../Posts/post_form.php">
                    <button type="submit"  class="imgcenter"style="border: 0; background: transparent">
                        <img src="../../img/pageicon/post.png" class="imgcenter">
                        <p class="textimg">Create Post</p>
                    </button></a>
            </div>
        </div>

        <div class="row" style="margin-top: 50px;">
            <div class="col-xs-12 col-md-4">
                <a href="../../Aboutplant/AboutPlant.php">
                    <button type="submit" class="imgcenter" style="border: 0; background: transparent">
                        <img src="../../img/pageicon/aboutplant.png" class="imgcenter">
                        <p class="textimg">About Plant's <br> Disease in Mango</p>
                    </button></a>


            </div>

            <div class="col-xs-12 col-md-4">
                <a href="../../Classification/chooseimageforcheck.php">
                    <button type="submit" class="imgcenter" style="border: 0; background: transparent">
                        <img src="../../img/pageicon/classification.png" class="imgcenter">
                        <p class="textimg">Disease <br> Classification</p>
                    </button></a>
            </div>

            <div class="col-xs-12 col-md-4">
                <a href="../../ConnData/logout.php">
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