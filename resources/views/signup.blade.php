
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/sign.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <style>
        .form
        {
            height: 500px;
        }
        .icon_head
        {
            margin-left: 140px;
        }
        .links
        {
            width:40%;
        }
    </style>
</head>
<body>
    <!--start header-->
    <div class="navbar">
        <div class="container">
            <div class="icon_head">
                <div class="icon1">
                    <i class="fa fa-hospital-o fa-3x"></i>
                </div>
                <div class="par">
                    <p>Tele-Health </p>
                </div>
            </div>
            <ul class="links">
                <li><a href="index"> HOME </a></li>
                <li><a href="index2">DEPARTMENTS</a></li>
                <li><a href="contact"> CONTACT</a></li>
            </ul>
        </div>
    </div>
    <br>
    <br><br><br>
    <!--end header-->
    <div class="form">
        <form>
            <!-- <h2>Appointment Form</h2>
             -->
            <h2>Sign Up</h2>

            <br>
            <input type="text" placeholder="First Name" required>
            <br>
            <input type="text" placeholder="Second Name" required>
            <br>
            <input type="text" placeholder="Email" required>
            <br>
            <input type="text" placeholder="Phone" required>
            <br>
            <input type="password" placeholder="Password" required>



            <br>
            <button class="btn">Sign-up</button>
            <br>
            <a href="index" class="sign-in">Sign In</a>
        </form>
    </div>
</body>
</html>
