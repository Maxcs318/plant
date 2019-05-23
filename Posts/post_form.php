<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test Up Image</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <link rel="stylesheet" href="../bootstrap/css/main.css">
    <link rel="shortcut icon" href="../img/leaficon.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Prompt|Sriracha&display=swap" rel="stylesheet">

</head>

<body>
    <?php session_start(); ?>
    <div style="text-align:right" class="usertop">
        Username :
        <?php echo $_SESSION["m_username"]; ?>
        | Status : 
        <?php echo $_SESSION["m_status"]; ?>

    </div>

    <!-- start nav-bar -->
    <div class="topnav" style="float-right">
    <a href="#"  class="float-right">Classify Plant</a>
    <a href="#" class="float-right">My Post</a>
    <a href="#about" class="float-right active">Post</a>
    <a href="#" class="float-right">Home</a>

        <div class="search-container">
            <!-- <form action="/action_page.php">
                <input type="text" placeholder="Search..." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form> -->
        </div>
    </div>
    <!-- end nav-bar -->

    <div class="container">
        <form action="../ConnData/InsertPost.php" method="post" enctype="multipart/form-data">

            <div class="row">
                <div class="col-xs-0 col-sm-2 col-md-2"></div>
                <div class="col-xs-12 col-sm-8 col-md-8">

                        <h1>Post</h1>
                    <label id="first">Header :</label><br/>
                    <input class="form-control" type="text" name="header" maxlength="30" style="width:40%;" required><br/>
                    <label id="first">Detail :</label><br/>
                    <textarea class="form-control" rows="5" type="text" name="detail" required></textarea>

                    <label id="first" style="margin-top: 20px;">Upload Photo :</label><br/>
                    <input type="file" name="image[]" id="image"><br> 
                    <p></p>
                    <input type="button" value="Add Image" id="add_image1">

                    <input type="hidden" name="own" value="<?php echo $_SESSION["m_id"]; ?>">
                    <input type="hidden" name="date" value="<?php echo date("Y-m-d H:i:s", time() + (60 * 60) * 5); ?>">
                    <br>

                    <?php
                    function generateRandomString($length = 30)
                    {
                        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        $charactersLength = strlen($characters);
                        $randomString = '';
                        for ($i = 0; $i < $length; $i++) {
                            $randomString .= $characters[rand(0, $charactersLength - 1)];
                        }
                        return $randomString;
                    }
                    // echo generateRandomString();
                    ?>
                    <input type="hidden" name="key_post_image" value="<?php echo generateRandomString(); ?>">
                    <div style="margin-top: 80px;">
                        <button class="btn-primary form-control col-2" id="insert" type="submit" name="save" style="float: right;">Post</button>
                    <a class="btn btn-danger form-control col-2" href="#" role="button" style="float: right; margin-right:10px;">Cancel</a>
                    </div>
                    
                </div>
                <div class="col-xs-0 col-sm-2 col-md-2"></div>
            </div>
        </form>
    </div>

    <!-- script + function -->
    <script src="../bootstrap/js/jquery-3.3.1.min.js"></script>

    <script>
        $('#add_image1').click(function() {
                        $('p').append('<input type="file" name="image[]" id="image"><br><br>');
        });
    </script>

</body>

</html>