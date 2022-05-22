<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link rel="stylesheet" href="css/sign.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .form
        {
            margin-top: 30px;
            height: 640px;
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
            <h2>Make An Appointment</h2>

            <br>

            <input type="text" placeholder="Email" required>
            <br>

            <input type="text" placeholder="Phone" required>

            <br>
            <input type="password" placeholder="Password" required>


            <br>
            <select name="servic" class="select-dep">
                <option value="">Choose department</option>
                <option value="Neurology">Neurology</option>
                <option value="Cardiology">Cardiology</option>
                <option value="Dental">Dental</option>
                <option value="Ophthalmolog">Ophthalmolog</option>
                <option value=" Other Services "> Other Services</option>
            </select>
            <br>
            <select name="doctor" class="select-doc">
                <option value="">Choose doctor</option>

            </select>
            <br>

            <input type="date" class="time" placeholder="Date">

            <br>
            <input type="time" placeholder="Time">

            <br>
            <textarea name="message" class="textarea" cols="30" rows="3" placeholder="Message"></textarea>

            <br>
            <button class="btn">Register</button>
            <br>
            <a href="index" class="sign-in">Cancel</a>
        </form>
    </div>
</body>
</html>
