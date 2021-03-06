<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Check Disease.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/main.css">
    <link rel="shortcut icon" href="../img/leaficon.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".S9").hide();
            $(".S8").hide();
            $(".S12_2").hide();
            $(".S12").hide();
            $(".S5").hide();
            $(".S16").hide();
            $(".S9_2").hide();
            $(".S8_2").hide();
            $(".S4").hide();
            $(".S12_3").hide();
            $(".S14").hide();
            $(".S3").hide();
            $(".S9_3").hide();
            $(".S6").hide();
            $(".S14_2").hide();
            $(".S13").hide();
            $(".S12_4").hide();
            $(".S2").hide();

            $(".As").hide();
            $(".An").hide();
            $(".Nor").hide();
            //15
            $(".S15y").click(function() {
                $(".S15").hide();
                $(".S9").show();
            });
            $(".S15n").click(function() {
                $(".S15").hide();
                $(".S16").show();
            });
            //9
            $(".S9y").click(function() {
                $(".S9").hide();
                $(".S12").show();
            });
            $(".S9n").click(function() {
                $(".S9").hide();
                $(".S8").show();
            });
            //8
            $(".S8y").click(function() {
                $(".S8").hide();
                $(".S12_2").show();
            });
            $(".S8n").click(function() {
                $(".S8").hide();
                $(".An").show();
            });
            //12_2
            $(".S12_2y").click(function() {
                $(".S12_2").hide();
                $(".As").show();
            });
            $(".S12_2n").click(function() {
                $(".S12_2").hide();
                $(".An").show();
            });
            //12
            $(".S12y").click(function() {
                $(".S12").hide();
                $(".As").show();
            });
            $(".S12n").click(function() {
                $(".S12").hide();
                $(".S5").show();
            });
            //5
            $(".S5y").click(function() {
                $(".S5").hide();
                $(".As").show();
            });
            $(".S5n").click(function() {
                $(".S5").hide();
                $(".An").show();
            });
            //16 
            $(".S16y").click(function() {
                $(".S16").hide();
                $(".S9_2").show();
            });
            $(".S16n").click(function() {
                $(".S16").hide();
                $(".S4").show();
            });
            //9_2
            $(".S9_2y").click(function() {
                $(".S9_2").hide();
                $(".As").show();
            });
            $(".S9_2n").click(function() {
                $(".S9_2").hide();
                $(".S8_2").show();
            });
            //8_2
            $(".S8_2y").click(function() {
                $(".S8_2").hide();
                $(".An").show();
            });
            $(".S8_2n").click(function() {
                $(".S8_2").hide();
                $(".As").show();
            });
            //4
            $(".S4y").click(function() {
                $(".S4").hide();
                $(".S12_3").show();
            });
            $(".S4n").click(function() {
                $(".S4").hide();
                $(".S9_3").show();
            });
            //12_3
            $(".S12_3y").click(function() {
                $(".S12_3").hide();
                $(".As").show();
            });
            $(".S12_3n").click(function() {
                $(".S12_3").hide();
                $(".S14").show();
            });
            //14
            $(".S14y").click(function() {
                $(".S14").hide();
                $(".As").show();
            });
            $(".S14n").click(function() {
                $(".S14").hide();
                $(".S3").show();
            });
            //3
            $(".S3y").click(function() {
                $(".S3").hide();
                $(".Nor").show();
            });
            $(".S3n").click(function() {
                $(".S3").hide();
                $(".As").show();
            });
            //9_3
            $(".S9_3y").click(function() {
                $(".S9_3").hide();
                $(".S6").show();
            });
            $(".S9_3n").click(function() {
                $(".S9_3").hide();
                $(".Nor").show();
            });
            //6
            $(".S6y").click(function() {
                $(".S6").hide();
                $(".S14_2").show();
            });
            $(".S6n").click(function() {
                $(".S6").hide();
                $(".Nor").show();
            });
            //14_2
            $(".S14_2y").click(function() {
                $(".S14_2").hide();
                $(".As").show();
            });
            $(".S14_2n").click(function() {
                $(".S14_2").hide();
                $(".S13").show();
            });
            //13
            $(".S13y").click(function() {
                $(".S13").hide();
                $(".S12_4").show();
            });
            $(".S13n").click(function() {
                $(".S13").hide();
                $(".As").show();
            });
            //12_4
            $(".S12_4y").click(function() {
                $(".S12_4").hide();
                $(".S2").show();
            });
            $(".S12_4n").click(function() {
                $(".S12_4").hide();
                $(".Nor").show();
            });
            //2
            $(".S2y").click(function() {
                $(".S2").hide();
                $(".Nor").show();
            });
            $(".S2n").click(function() {
                $(".S2").hide();
                $(".As").show();
            });

        });
    </script>
</head>

<body>

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

    <div class="container">
        <form class="container box-post" style="margin-top: 30px;" action="../ConnData/checkDiseaseUpdate.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="date" value="<?php echo date("Y-m-d H:i:s", time() + (60 * 60) * 5); ?>">
            <div class="row">
                <div class="col-xs-12 col-md-12"><br>
                    <center>
                        <h1 style="margin-bottom: 30px;">Classification.</h1>
                    </center>
                </div>
                <input type="hidden" name="S1" value="0">
                <input type="hidden" name="S2" value="0">
                <input type="hidden" name="S3" value="0">
                <input type="hidden" name="S4" value="0">
                <input type="hidden" name="S5" value="0">
                <input type="hidden" name="S6" value="0">
                <input type="hidden" name="S7" value="0">
                <input type="hidden" name="S8" value="0">
                <input type="hidden" name="S9" value="0">
                <input type="hidden" name="S10" value="0">
                <input type="hidden" name="S11" value="0">
                <input type="hidden" name="S12" value="0">
                <input type="hidden" name="S13" value="0">
                <input type="hidden" name="S14" value="0">
                <input type="hidden" name="S15" value="0">
                <input type="hidden" name="S16" value="0">
            </div>
            <div class="row container">
                <div class="col-lg-6 col-xs-12 col-md-6">
                    <x>
                        <center>Your Image.<br></center>
                        <img src="../Image/image_for_checkdisease/<?php echo $_SESSION["nameimage"]; ?>">
                    </x>
                </div>
                <div class="col-lg-6 col-xs-12 col-md-">
                    <x class="S15">
                        <center>s15<br></center>
                        <img src="../Image/image_classification/S15.jpg">
                        <div class="row S15">
                            <div class="col-12"><br>
                                <input class="S15y" type="radio" name="S15" value="1"> Yes
                                <input class="S15n" type="radio" name="S15" value="0"> No<br>
                            </div>
                        </div>
                    </x>
                    <x class="S9">
                        s9<br>
                        <img src="../Image/image_classification/S9.jpg">
                        <div class="row S9">
                            <div class="col-12"><br>
                                <input class="S9y" type="radio" name="S9" value="1"> Yes
                                <input class="S9n" type="radio" name="S9" value="0"> No<br>
                            </div>
                        </div>
                    </x>
                    <x class="S8">
                        s8<br><img src="../Image/image_classification/S8.jpg">
                        <div class="row">
                            <div class="col-12"><br>
                                <input class="S8y" type="radio" name="S8" value="1"> Yes
                                <input class="S8n" type="radio" name="S8" value="0"> No<br>
                            </div>
                        </div>
                    </x>
                    <x class="S12_2">
                        s12<br><img src="../Image/image_classification/S12.jpg">
                        <div class="row">
                            <div class="col-12"><br>
                                <input class="S12_2y" type="radio" name="S12" value="1"> Yes
                                <input class="S12_2n" type="radio" name="S12" value="0"> No<br>
                            </div>
                        </div>

                    </x>
                    <x class="S12">
                        s12<br><img src="../Image/image_classification/S12.jpg">
                        <div class="row">
                            <div class="col-12"><br>
                                <input class="S12y" type="radio" name="S12" value="1"> Yes
                                <input class="S12n" type="radio" name="S12" value="0"> No<br>
                            </div>
                        </div>
                    </x>
                    <x class="S5">
                        s5<br><img src="../Image/image_classification/S5.jpg">
                        <div class="row">
                            <div class="col-12"><br>
                                <input class="S5y" type="radio" name="S5" value="1"> Yes
                                <input class="S5n" type="radio" name="S5" value="0"> No<br>
                            </div>
                        </div>
                    </x>
                    <x class="S16">
                        s16<br><img src="../Image/image_classification/S16.jpg">
                        <div class="row">
                            <div class="col-12"><br>
                                <input class="S16y" type="radio" name="S16" value="1"> Yes
                                <input class="S16n" type="radio" name="S16" value="0"> No<br>
                            </div>
                        </div>
                    </x>
                    <x class="S9_2">
                        s9<br><img src="../Image/image_classification/S9.jpg">
                        <div class="row">
                            <div class="col-12"><br>
                                <input class="S9_2y" type="radio" name="S9" value="1"> Yes
                                <input class="S9_2n" type="radio" name="S9" value="0"> No<br>
                            </div>
                        </div>
                    </x>
                    <x class="S8_2">
                        s8<br><img src="../Image/image_classification/S8.jpg">
                        <div class="row">
                            <div class="col-12"><br>
                                <input class="S8_2y" type="radio" name="S8" value="1"> Yes
                                <input class="S8_2n" type="radio" name="S8" value="0"> No<br>
                            </div>
                        </div>
                    </x>
                    <x class="S4">
                        s4<br><img src="../Image/image_classification/S4.jpg">
                        <div class="row">
                            <div class="col-12"><br>
                                <input class="S4y" type="radio" name="S4" value="1"> Yes
                                <input class="S4n" type="radio" name="S4" value="0"> No<br>
                            </div>
                        </div>
                    </x>
                    <x class="S12_3">
                        s12<br><img src="../Image/image_classification/S12.jpg">
                        <div class="row">
                            <div class="col-12"><br>
                                <input class="S12_3y" type="radio" name="S12" value="1"> Yes
                                <input class="S12_3n" type="radio" name="S12" value="0"> No<br>
                            </div>
                        </div>
                    </x>
                    <x class="S14">
                        s14<br><img src="../Image/image_classification/S14.jpg">
                        <div class="row">
                            <div class="col-12"><br>
                                <input class="S14y" type="radio" name="S14" value="1"> Yes
                                <input class="S14n" type="radio" name="S14" value="0"> No<br>
                            </div>
                        </div>
                    </x>
                    <x class="S3">
                        s3<br><img src="../Image/image_classification/S3.jpg">
                        <div class="row">
                            <div class="col-12"><br>
                                <input class="S3y" type="radio" name="S3" value="1"> Yes
                                <input class="S3n" type="radio" name="S3" value="0"> No<br>
                            </div>
                        </div>
                    </x>
                    <x class="S9_3">
                        s9<br><img src="../Image/image_classification/S9.jpg">
                        <div class="row">
                            <div class="col-12"><br>
                                <input class="S9_3y" type="radio" name="S9" value="1"> Yes
                                <input class="S9_3n" type="radio" name="S9" value="0"> No<br>
                            </div>
                        </div>
                    </x>
                    <x class="S6">
                        s6<br><img src="../Image/image_classification/S6.jpg">
                        <div class="row">
                            <div class="col-12"><br>
                                <input class="S6y" type="radio" name="S6" value="1"> Yes
                                <input class="S6n" type="radio" name="S6" value="0"> No<br>
                            </div>
                        </div>
                    </x>
                    <x class="S14_2">
                        s14<br><img src="../Image/image_classification/S14.jpg">
                        <div class="row">
                            <div class="col-12"><br>
                                <input class="S14_2y" type="radio" name="S14" value="1"> Yes
                                <input class="S14_2n" type="radio" name="S14" value="0"> No<br>
                            </div>
                        </div>
                    </x>
                    <x class="S13">
                        s13<br><img src="../Image/image_classification/S13.jpg">
                        <div class="row">
                            <div class="col-12"><br>
                                <input class="S13y" type="radio" name="S13" value="1"> Yes
                                <input class="S13n" type="radio" name="S13" value="0"> No<br>
                            </div>
                        </div>
                    </x>
                    <x class="S12_4">
                        s12<br><img src="../Image/image_classification/S12.jpg">
                        <div class="row">
                            <div class="col-12"><br>
                                <input class="S12_4y" type="radio" name="S12" value="1"> Yes
                                <input class="S12_4n" type="radio" name="S12" value="0"> No<br>
                            </div>
                        </div>
                    </x>
                    <x class="S2">
                        s2<br><img src="../Image/image_classification/S2.jpg">
                        <div class="row">
                            <div class="col-12"><br>
                                <input class="S2y" type="radio" name="S2" value="1"> Yes
                                <input class="S2n" type="radio" name="S2" value="0"> No<br>
                            </div>
                        </div>
                    </x>
                    <!-- last -->
                    <x class="An">
                        <div class="row">
                            <div class="col-12">
                                <br>
                                <h1>
                                    <center> Anthracnose . </center>
                                </h1><br><br>
                                <button type="submit" class="form-control btn-primary" name="disease" value="Anthracnose">Save.</button> <br><br>
                                <button type="reset" class="form-control  btn-danger" onClick="window.location.reload();">
                                    Check Again.</button>
                            </div>
                        </div>
                    </x>

                    <x class=" As">
                        <div class="row">
                            <div class="col-12">
                                <br>
                                <h1>
                                    <center> Algol Spot . </center>
                                </h1><br><br>
                                <button type="submit" class="form-control btn-primary" name="disease" value="Algol Spot">Save.</button> <br><br>
                                <button type="reset" class="form-control  btn-danger" onClick="window.location.reload();">
                                    Check Again.</button>
                            </div>
                        </div>
                    </x>

                    <x class="Nor">
                        <div class="row">
                            <div class="col-12">
                                <br>
                                <h1>
                                    <center> Normal . </center>
                                </h1><br><br>
                                <button type="submit" class="form-control  btn-primary" name="disease" value="Normal">Save.</button> <br><br>
                                <button type="reset" class="form-control  btn-danger" onClick="window.location.reload();">
                                    Check Again.</button>
                            </div>
                        </div>
                    </x>

                </div>
            </div>
            <div style="margin-bottom: 30px;"></div>
            
        </form>

    </div>

    <style>
        x {
            text-align: center;
            font-size: 20px;
            /* margin: auto; */
        }

        img {
            width: 100%;
            /* height="80%"; */
        }
    </style>
</body>

</html>