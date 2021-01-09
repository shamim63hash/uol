<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>About Us Page</title>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  
</head>
<body>
    <div class="container">


        <img src="logo.jpg" width="100" height="100" />
        <div style=" float:right; text-align:right; width:300px ; padding-top:5px">

            <a href="https://www.facebook.com" target="_blank"> <img src="facebook.jpg" width="24" height="24" /> </a>
            <a href="https://www.instagram.com" target="_blank"> <img src="insta.jpg" width="24" height="24" /> </a>
            <a href="https://www.snapchat.com" target="_blank"> <img src="snapchat.jpg" width="24" height="24" /> </a>
            <a href="https://www.twitter.com" target="_blank"> <img src="twitter.jpg" width="24" height="24" /> </a>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
             <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="about.php">About Us <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php">Contact Us</a>
                    </li>
					<?php
                        if(isset($_SESSION['loginuser'])) {
                        ?>
                        <li class="nav-item"><a class="nav-link" href="signout.php">Sign Out</a></li>
                     

                      <?php  } else {?>                         
                                <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                          <li class="nav-item"> <a class="nav-link" href="signup.php">Sign Up</a> </li>
						  
                      <?php  } ?>
                </ul>
            </div>
        </nav>


        <h1> About Our Business </h1>
        <p>We are developing .NET solutions from +5 years and We provided successful solutions for business of Vendor Machines (South Africa), Digital Voucher Validation through Kiosk (Austria/UK), Hardware payment gateway integrations for JackRoe USA and various business management solutions in several countries working as great team. Our only focus is on developing quality solutions in .NET technology using C# and MVC which is our only one and main skill so we are more than expert in this. </p>
    </div>

    <br>
    <br>
    <br>
    <br>
    <footer style="background-color:cornflowerblue;padding:15px;color:white;">
        <div style=" float:right; text-align:center; width:100% ; padding-top:5px">

            <a href="https://www.facebook.com" target="_blank"> <img src="facebook.jpg" width="24" height="24" /> </a>
            <a href="https://www.instagram.com" target="_blank"> <img src="insta.jpg" width="24" height="24" /> </a>
            <a href="https://www.snapchat.com" target="_blank"> <img src="snapchat.jpg" width="24" height="24" /> </a>
            <a href="https://www.twitter.com" target="_blank"> <img src="twitter.jpg" width="24" height="24" /> </a>
        </div>
        <div style="text-align: center">
            <p>
                ©Agile PK Solutions 2020 <br>
                Powered by Agile PK Solutions
            </p>
        </div>
    </footer>
</body>

</html>
