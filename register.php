<!DOCTYPE html>
<html lang="en">

<head>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="jquery.alphanumeric.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Plant Disease</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="shortcut icon" href="img/leaficon.ico" type="image/x-icon" />

</head>

<body>

    <div class="container">
        <!-- register tab -->
        <div class="tab" style="margin-top: 40px;">
            <button class="tablinks active" onclick="openCity(event, 'user')">User Register</button>
            <button class="tablinks" onclick="openCity(event, 'expert')">Expert Register</button>
        </div>
        <!-- end register tab -->
        <form action="ConnData/InsertRegister.php" method="post">

            <div class="row">
                <!-- user register -->
                <div id="user" class="col-xs-12 col-lg-12 box">
                    <h1>User Register</h4>
                        <p>First Name</p>
                        <input class="form-control" type="text" name="firstname" placeholder="first name" maxlength="25" required>

                        <p>Last Name</p>
                        <input class="form-control" type="text" name="lastname" placeholder="last name" maxlength="25" required>

                        <p>E-mail</p>
                        <input class="form-control" type="email" name="email" placeholder="example@plant.com" required>

                        <p>Phone</p>
                        <input class="form-control" name='s_money' id='s_money' type='text' maxlength="10" placeholder="number 0-9" required onKeyUp="if(this.value*1!=this.value) this.value='' ;">

                        <p>User Name</p>
                        <input class="form-control" type="text" name="username" placeholder="username" maxlength="10" required>

                        <p>Password</p>
                        <input class="form-control" type="password" name="password" placeholder="password" maxlength="10" required>

                        <input type="hidden" name="status" value="user">
                        <button id="insert" type="submit" name="save">Save</button>
                </div>
            </div>
        </form>
        <form action="ConnData/InsertRegister.php" method="post">
            <!-- expert register -->
            <div class="row">
                <div id="expert" class="col-xs-12 col-lg-12 box" style="display: none">
                    <h1>Expert Register</h4>
                        <p>First Name</p>
                        <input class="form-control" type="text" name="firstname" placeholder="first name" required>

                        <p>Last Name</p>
                        <input class="form-control" type="text" name="lastname" placeholder="last name" required>

                        <p>E-mail</p>
                        <input class="form-control" type="email" name="email" placeholder="example@plant.com" required>

                        <p>Phone</p>
                        <input class="form-control" name='s_money' id='s_money' type='text' size='10' placeholder="number 0-9" required onKeyUp="if(this.value*1!=this.value) this.value='' ;">

                        <p>User Name</p>
                        <input class="form-control" type="text" name="username" placeholder="username" required>

                        <p>Password</p>
                        <input class="form-control" type="password" name="password" placeholder="password" required>

                        <input type="hidden" name="status" value="expert">
                        <button id="insert" type="submit" name="save">Save</button>
                </div>
        </form>
    </div><!-- end container -->

    <!-- Togglable Script -->
    <script>
        function openCity(evt, cityName) {
            var i, box, tablinks;
            box = document.getElementsByClassName("box");
            for (i = 0; i < box.length; i++) {
                box[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
    <!-- End Togglable Script -->

</body>

</html>