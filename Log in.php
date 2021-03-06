<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/Grid.css">                
        <link rel="stylesheet" type="text/css" href="resources/style.css">
        <link rel="shortcut icon" type="image/jpg" href="resources/img/icon.jpg">
        <title>Log in</title>
    </head>

    <script>
        function passwordCheck() {
            var pwd1 = document.getElementById("password1").value;
            var pwd2 = document.getElementById("password2").value; 
            if (pwd1 != pwd2) {
                alert("Password didn't match");
            } else {
                alert("You have successfuly signed up to leckerpizza. Login to your account.");
            }
        }

        function userMsg() {
            var user = promt("Please enter your registered email", "Email");
            if (user != null) {
                alert("Email has been sent to your registeres email id.");
            }
        }
    </script>
  
    <body>
        <section class="logIn">
            <div class="logIn__box">
                <div class="row">
                    <div class="col span-1-of-2">
                        <div class="logIn--sub">
                            <form action="userlogin.php" class="form" method="post">
                                <h3>Leckerpizza</h3>
                                <div class="form__group">
                                    <input type="email" class="form__input" placeholder="Email" id="Email" name="email" required>
                                    <label for="Email" class="form__label">Email</label>
                                </div>
                                <div class="form__group">
                                    <input type="password" class="form__input" placeholder="Password" name="Password" id="password" required>
                                    <label for="password" class="form__label">Password</label>
                                </div>
                                <div class="form__group">
                                    <button class="submit">LOG IN</button>
                                    <a href="#" class="signUp">Sign up</a>
                                    <a href="#" class="forgetPass" onclick="userMsg()">Forget password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col span-1-of-2">
                        <div class="row"><p class="WithTitle">Login With</p></div>
                        <div class="FaceCont">
                            <div class="loginWith">
                                <a href="https://www.facebook.com/">
                                    <img src="resources/img/facebook.png" class="imgFace--sub">
                                </a>
                            </div>
                            <div class="loginWith">
                                <a href="https://accounts.google.com">
                                    <img src="resources/img/google.png" class="imgFace--sub">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="signUP">
            <div class="signUp-block">
                <div class="signUp-block--sub">
                    <button class="close cloosee back"><p>X</p></button>
                    <div class="signUp-block--sub-1">
                        <div class="innerbox ROW">
                            <div class="innerleft COL COL-2-5 COLimg">
                                <span class="HEAD">
                                    <span>Looks like you're new here</span>
                                </span>
                                <p class="HEAD-SUB">
                                    <span>Sign up to get the premium services</span>
                                </p>
                            </div>
                            <div class="innerright COL COL-3-5">
                                <form action="usersignup.php" class="form" method="post">
                                    <div class="form__group">
                                        <input type="emali" name="email" class="form__input form__input-2" placeholder="Email" id="email" required>
                                        <label for="email" class="form__label M">Email</label>
                                    </div>
                                    <div class="form__group">
                                        <input type="password" name="password" class="form__input form__input-2" placeholder="Password" id="password1" required>
                                        <label for="password1" class="form__label M">Password</label>
                                    </div>
                                    <div class="form__group">
                                        <input type="password" name="re_password" class="form__input form__input-2" placeholder="Confirm password" id="password2" required>
                                        <label for="password2" class="form__label M">Confirm password</label>
                                    </div>
                                    <div class="form__group M">
                                        <button class="submit" onclick="passwordCheck()">SIGN UP</button>
                                    </div>
                                </form>
                                <div class="terms">
                                    By signing up you accept our | 
                                    <a href="Terms and conditions.html" target="_blank" class="termsC">Terms & Conditions</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
        <script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
        <script src="JS/jquery.waypoints.min.js"></script>
        <script src="JS/script.js"></script>

    </body>
</html>