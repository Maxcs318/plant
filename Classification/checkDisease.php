<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Check Disease.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <form action="ConnData/check_login.php" method="post">
        <div class="row">
            <div class="col-12"><br>
            <center><h4>Classification.</h4></center><hr>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <img src="../image_for_checkdisease/<?php echo $_SESSION["nameimage"];?>"  width="100%" >
            </div>
            <div class="col-6" id="demo">
                    s15<br>
                    <img src="../image_classification/S15.jpg"  width="75%" >
                    <div class="row"><div class="col-12"><br>
                            <input  type="radio" name="S15" value="1" onchange="funS9()"> Yes   
                            <input  type="radio" name="S15" value="0" onchange="funS16()"> No<br>
                    </div></div>
            </div>
        </div>
        <div class="row">
        
        </div>
    </form>
    </div>
    
    <script>
        function funS9() {
        document.getElementById("demo").innerHTML = 's9<br>     <img src="../image_classification/S9.jpg" width="75%" >'
        +'<div class="row"><div class="col-12"><br>'
        +'<input type="radio" name="S9" value="1" onchange="funS12()"> Yes  '
        +'<input type="radio" name="S9" value="0" onchange="funS8()"> No<br>'
        +'</div></div>';
        }
            function funS8() {
            document.getElementById("demo").innerHTML = 's8<br>     <img src="../image_classification/S8.jpg" width="75%" >'
            +'<div class="row"><div class="col-12"><br>'
            +'<input type="radio" name="S8" value="1" onchange="funS12_2()"> Yes    '
            +'<input type="radio" name="S8" value="0" onchange="funAn()"> No<br>'
            +'</div></div>';
            }
                function funS12_2() {
                document.getElementById("demo").innerHTML = 's12<br>    <img src="../image_classification/S12.jpg" width="75%" >'
                +'<div class="row"><div class="col-12"><br>'
                +'<input type="radio" name="S12" value="1" onchange="funAs()"> Yes  '
                +'<input type="radio" name="S12" value="0" onchange="funAn()"> No<br>'
                +'</div></div>';
                }
                
            function funS12() {
            document.getElementById("demo").innerHTML = 's12<br>    <img src="../image_classification/S12.jpg" width="75%" >'
            +'<div class="row"><div class="col-12"><br>'
            +'<input type="radio" name="S12" value="1" onchange="funAs()"> Yes  '
            +'<input type="radio" name="S12" value="0" onchange="funS5()"> No<br>'
            +'</div></div>';
            }
                function funS5() {
                document.getElementById("demo").innerHTML = 's5<br>     <img src="../image_classification/S5.jpg" width="75%" >'
                +'<div class="row"><div class="col-12"><br>'
                +'<input type="radio" name="S5" value="1" onchange="funAs()"> Yes   '
                +'<input type="radio" name="S5" value="0" onchange="funAn()"> No<br>'
                +'</div></div>';
                }

        function funS16() {
        document.getElementById("demo").innerHTML = 's16<br>    <img src="../image_classification/S16.jpg" width="75%" >'
        +'<div class="row"><div class="col-12"><br>'
        +'<input type="radio" name="S16" value="1" onchange="funS9_2()"> Yes    '
        +'<input type="radio" name="S16" value="0" onchange="funS4()"> No<br>'
        +'</div></div>';
        }
            function funS9_2() {
            document.getElementById("demo").innerHTML = 's9<br>    <img src="../image_classification/S9.jpg" width="75%" >'
            +'<div class="row"><div class="col-12"><br>'
            +'<input type="radio" name="S16" value="1" onchange="funAs()"> Yes    '
            +'<input type="radio" name="S16" value="0" onchange="funS8_2()"> No<br>'
            +'</div></div>';
            }
                function funS8_2() {
                document.getElementById("demo").innerHTML = 's8<br>    <img src="../image_classification/S8.jpg" width="75%" >'
                +'<div class="row"><div class="col-12"><br>'
                +'<input type="radio" name="S16" value="1" onchange="funAn()"> Yes    '
                +'<input type="radio" name="S16" value="0" onchange="funAs()"> No<br>'
                +'</div></div>';
                }
            function funS4() {
            document.getElementById("demo").innerHTML = 's4<br>    <img src="../image_classification/S4.jpg" width="75%" >'
            +'<div class="row"><div class="col-12"><br>'
            +'<input type="radio" name="S16" value="1" onchange="funS12_3()"> Yes    '
            +'<input type="radio" name="S16" value="0" onchange="funS9_3()"> No<br>'
            +'</div></div>';
            }
                function funS12_3() {
                document.getElementById("demo").innerHTML = 's12<br>    <img src="../image_classification/S12.jpg" width="75%" >'
                +'<div class="row"><div class="col-12"><br>'
                +'<input type="radio" name="S16" value="1" onchange="funAs()"> Yes    '
                +'<input type="radio" name="S16" value="0" onchange="funS14()"> No<br>'
                +'</div></div>';
                }
                    function funS14() {
                    document.getElementById("demo").innerHTML = 's14<br>    <img src="../image_classification/S14.jpg" width="75%" >'
                    +'<div class="row"><div class="col-12"><br>'
                    +'<input type="radio" name="S16" value="1" onchange="funAs()"> Yes    '
                    +'<input type="radio" name="S16" value="0" onchange="funS3()"> No<br>'
                    +'</div></div>';
                    }
                        function funS3() {
                        document.getElementById("demo").innerHTML = 's3<br>    <img src="../image_classification/S3.jpg" width="75%" >'
                        +'<div class="row"><div class="col-12"><br>'
                        +'<input type="radio" name="S16" value="1" onchange="funNor()"> Yes    '
                        +'<input type="radio" name="S16" value="0" onchange="funAs()"> No<br>'
                        +'</div></div>';
                        }
                function funS9_3() {
                document.getElementById("demo").innerHTML = 's9<br>    <img src="../image_classification/S9.jpg" width="75%" >'
                +'<div class="row"><div class="col-12"><br>'
                +'<input type="radio" name="S16" value="1" onchange="funS6()"> Yes    '
                +'<input type="radio" name="S16" value="0" onchange="funNor()"> No<br>'
                +'</div></div>';
                }
                    function funS6() {
                    document.getElementById("demo").innerHTML = 's6<br>    <img src="../image_classification/S6.jpg" width="75%" >'
                    +'<div class="row"><div class="col-12"><br>'
                    +'<input type="radio" name="S16" value="1" onchange="funS14_2()"> Yes    '
                    +'<input type="radio" name="S16" value="0" onchange="funNor()"> No<br>'
                    +'</div></div>';
                    }
                    function funS14_2() {
                        document.getElementById("demo").innerHTML = 's14<br>    <img src="../image_classification/S14.jpg" width="75%" >'
                        +'<div class="row"><div class="col-12"><br>'
                        +'<input type="radio" name="S16" value="1" onchange="funAs()"> Yes    '
                        +'<input type="radio" name="S16" value="0" onchange="funS13()"> No<br>'
                        +'</div></div>';
                        }
                            function funS13() {
                            document.getElementById("demo").innerHTML = 's13<br>    <img src="../image_classification/S13.jpg" width="75%" >'
                            +'<div class="row"><div class="col-12"><br>'
                            +'<input type="radio" name="S16" value="1" onchange="funS12_4()"> Yes    '
                            +'<input type="radio" name="S16" value="0" onchange="funAs()"> No<br>'
                            +'</div></div>';
                            }
                                function funS12_4() {
                                document.getElementById("demo").innerHTML = 's12<br>    <img src="../image_classification/S12.jpg" width="75%" >'
                                +'<div class="row"><div class="col-12"><br>'
                                +'<input type="radio" name="S16" value="1" onchange="funS2()"> Yes    '
                                +'<input type="radio" name="S16" value="0" onchange="funNor()"> No<br>'
                                +'</div></div>';
                                }
                                    function funS2() {
                                    document.getElementById("demo").innerHTML = 's2<br>    <img src="../image_classification/S2.jpg" width="75%" >'
                                    +'<div class="row"><div class="col-12"><br>'
                                    +'<input type="radio" name="S16" value="1" onchange="funNor()"> Yes    '
                                    +'<input type="radio" name="S16" value="0" onchange="funAs()"> No<br>'
                                    +'</div></div>';
                                    }

        // last function ---------------
        function funAn() {
        document.getElementById("demo").innerHTML = ' <br><h4><center> Anthracnose . </center></h4> '
        +'<button type="submit" class="form-control btn-primary" name="save">Save.</button> <br><br>'
        +'<button type="" class="form-control  btn-danger" name="cancel">Check Again.</button>';
        }
        function funAs() {
        document.getElementById("demo").innerHTML = ' <br><h4><center> Algol Spot . </center></h4><br><br> '
        +'<button type="submit" class="form-control btn-primary" name="save">Save.</button> <br><br>'
        +'<button type="" class="form-control  btn-danger" name="cancel">Check Again.</button>';
        }
        function funNor() {
        document.getElementById("demo").innerHTML = ' <br><h4><center> Normal . </center></h4> '
        +'<button type="submit" class="form-control  btn-primary" name="save">Save.</button> <br><br>'
        +'<button type="" class="form-control  btn-danger" name="cancel">Check Again.</button>';
        }
    </script>
</body>
</html>