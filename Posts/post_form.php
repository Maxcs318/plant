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

    <p class="text-line">
        <img src="../img/mangoicon.png" style="width: 50px; margin-right: 20px;">
        EXPERT SYSTEM FOR PLANT DISEASE CLASSIFICATION
    </p>

    <div class="container box-post" style="margin-top: 30px;">

        <form action="../ConnData/InsertPost.php" method="post" enctype="multipart/form-data">

            <div class="row" style="margin: 0px;">
                <div class="col-xs-0 col-sm-0 col-md-2"></div>
                <div class="col-xs-12 col-sm-12 col-md-8">

                    <h1 class="header">Create Post</h1>
                    <label id="first">Header :</label><br />
                    <input class="form-control" type="text" name="header" maxlength="30" style="width:40%;" required><br />
                    <label id="first">Detail :</label><br />
                    <textarea class="form-control" rows="5" type="text" name="detail" required></textarea>

                    <label id="first" style="margin-top: 20px;">Upload Photo :</label><br />
                    <input type="file" name="image[]" id="image"><br>
                    <h5></h5>
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
                    <div style="margin-top:30px; margin-bottom: 50px;">
                        <button class="btn-success form-control float-right" id="insert" type="submit" name="save" style="width: 80px; margin-left:10px;">Post</button>
                        <a class="btn btn-danger float-right" href="../index.php" style="width: 80px; margin:0px 0px 10px ">Back</a>
                    </div>

                </div>
                <div class="col-xs-0 col-sm-0 col-md-2"></div>


            </div>
        </form>
    </div>

    <!-- script + function -->
    <script src="../bootstrap/js/jquery-3.3.1.min.js"></script>

    <script>
        $('#add_image1').click(function() {
            $('h5').append('<input type="file" name="image[]" id="image"><br><br>');
        });
    </script>

</body>

</html>