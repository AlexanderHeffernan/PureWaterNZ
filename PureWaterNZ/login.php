<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login - Pure Water NZ</title>
        <link rel="icon" type="image/png" href="images/logoicon.png">        
        <link rel="stylesheet" href="css/loginPage.css">
     </head>
    
    <body>
        <div class="hero">
            <div class="form-box">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                    <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>

                <div class="icon-box">
                    <img id="icon" src="images/logoicon.png">                    
                </div>

                <form  id="login" class="input-group" action="includes/login.inc.php" method="post">
                    <?php
                        if(isset($_GET['error']) && !isset($_GET['side'])){
                            if($_GET['error'] == "emptyfields"){
                                echo '<p class="loginPageError">Fill in all fields!</p>';
                            }
                            if($_GET['error'] == "nouser"){
                                echo '<p class="loginPageError">Invalid Username/Email!</p>';
                            }
                            if($_GET['error'] == "sqlerror"){
                                echo '<p class="loginPageError">Failed to connect to server!</p>';
                            }
                            if($_GET['error'] == "wrongpwd"){
                                echo '<p class="loginPageError">Incorrect Password!</p>';
                            }
                            if($_GET['error'] == "invalidmailuid"){
                                echo '<p class="loginPageError">Invalid Email Address!</p>';
                            }
                            if($_GET['error'] == "invaliduid"){
                                echo '<p class="loginPageError">Invalid Username!</p>';
                            }
                            if($_GET['error'] == "passwordcheck"){
                                echo '<p class="loginPageError">Password incorrectly repeated!</p>';
                            }
                            if($_GET['error'] == "usertaken"){
                                echo '<p class="loginPageError">This username has already been taken!</p>';
                            }
                        }
                    ?>
                    <input type="text" name="mailuid" class="input-field" placeholder="Username/Email" required>
                    <input type="password" name="pwd" class="input-field" placeholder="Password" required>
                    <button type="submit" name="login-submit" class="submit-btn">Log In</button>
                </form>


                <form id="register" class="input-group form-signup" action="includes/signup.inc.php" method="post">
                    <?php
                        if(isset($_GET['error']) && isset($_GET['side'])){
                            if($_GET['side'] == "up"){
                                if($_GET['error'] == "emptyfields"){
                                    echo '<p class="loginPageError">Fill in all fields!</p>';
                                }
                                if($_GET['error'] == "nouser"){
                                    echo '<p class="loginPageError">Invalid Username/Email!</p>';
                                }
                                if($_GET['error'] == "sqlerror"){
                                    echo '<p class="loginPageError">Failed to connect to server!</p>';
                                }
                                if($_GET['error'] == "wrongpwd"){
                                    echo '<p class="loginPageError">Incorrect Password!</p>';
                                }
                                if($_GET['error'] == "invalidmailuid"){
                                    echo '<p class="loginPageError">Invalid Email Address!</p>';
                                }
                                if($_GET['error'] == "invaliduid"){
                                    echo '<p class="loginPageError">Invalid Username!</p>';
                                }
                                if($_GET['error'] == "passwordcheck"){
                                    echo '<p class="loginPageError">Password incorrectly repeated!</p>';
                                }
                                if($_GET['error'] == "usertaken"){
                                    echo '<p class="loginPageError">This username has already been taken!</p>';
                                }
                            }
                        }
                    ?>
                    <input type="text" name="uid" class="input-field" placeholder="User ID" required>
                    <input type="text"  name="mail" class="input-field" placeholder="Email Address" required>
                    <input type="password" name="pwd" class="input-field" placeholder="Password" required>
                    <input type="password" name="pwd-repeat" class="input-field" placeholder="Repeat Password" required>
                    <input type="checkbox" name="remember" class="check-box" placeholder="User ID" required><span>I agree to the terms & conditions</span>
                    <button type="submit" name="signup-submit" class="submit-btn">Register</button>
                </form>
            </div>            
        </div>

        <?php
            if(isset($_GET['side'])){
                if($_GET['side'] == "up"){
                    echo    '<script>
                                var x = document.getElementById("login");
                                var y = document.getElementById("register");
                                var z = document.getElementById("btn");

                                x.style.left = "-400px";
                                y.style.left = "50px";
                                z.style.left = "111px";
                    
                            </script>';
                }
            }
        ?>

        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("register");
            var z = document.getElementById("btn");

            function register(){
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "111px";
            }

            function login(){
                x.style.left = "50px";
                y.style.left = "-400px";
                z.style.left = "0px";
            }

        </script>



    </body>
</html>