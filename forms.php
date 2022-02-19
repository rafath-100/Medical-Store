<!DOCTYPE html>
<html lang="en">

<!--head-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Favicon-->
      <link rel="icon" href="lib/Favicon.jfif">
    <title>Visudh Ajivam - Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">
                    Login
                </button>
                <button type="button" class="toggle-btn" onclick="signup()">
                    Signup
                </button>
                <button type="button" class="toggle-btn" onclick="admin()">
                    Admin
                </button>
            </div>
            <!-- LOGIN FORM -->
            <form id="login" class="input-group" action="handler/customerlogin.php" method="POST">
                <input type="text" class="input-field" placeholder="Email" name="email" required>
                <input type="password" class="input-field" placeholder="Password" name="password" required>
                <!--<input type="checkbox" class="check-box"><span>Remember Me</span>-->
                <button type="submit" class="submit-btn" name="signin">Login</button>
            </form>

            <!-- SIGNUP FORM -->
            <form id="signup" class="input-group" action="handler/customersignup.php" method="POST">
                <input type="text" class="input-field" placeholder="Full name" name="fullname" required>
                <input type="text" class="input-field" placeholder="Email" name="email" required>
                <input type="text" class="input-field" placeholder="Phone" name="phone" required>
                <input type="password" class="input-field" placeholder="Create Password" name="password" required>
                <input type="password" class="input-field" placeholder="Re-type Password" name="password2" required>
                <!--<input type="checkbox" class="check-box"><span>I agree to the terms and conditions</span>-->
                <button type="submit" class="submit-btn" name="signup">Signup</button>
            </form>

            <!-- ADMIN -->
            <form id="admin" class="input-group" action="admin/adminlogin.php" method="POST">
                <input type="text" class="input-field" placeholder="Email" name="email" required>
                <input type="password" class="input-field" placeholder="Password" name="password" required>
                <!--<input type="checkbox" class="check-box"><span>Remember Me</span>-->
                <button type="submit" class="submit-btn" name="login">Login</button>
            </form>
        </div>
    </div>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("signup");
        var z = document.getElementById("admin");
        var a = document.getElementById("btn");


        function signup(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="480px";
            a.style.left="110px";
        }
        function login(){
            x.style.left="50px";
            y.style.left="-400px";
            z.style.left="480px";
            a.style.left="0px";
        }
         function admin(){
            x.style.left="480px";
            z.style.left="50px";
            y.style.left="-400px";
            a.style.left="220px";
        }



    </script>
</body>
</html>
