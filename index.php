﻿<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Home Page</title>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
.carousel-item{
	height:500px;
}
</style>

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
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
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
















        <div style="width:100%; height:500px;">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="image1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="image2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="image3.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <h1> Our Business </h1>
        <p style="">We are developing .NET solutions from +5 years and We provided successful solutions for business of Vendor Machines (South Africa), Digital Voucher Validation through Kiosk (Austria/UK), Hardware payment gateway integrations for JackRoe USA and various business management solutions in several countries working as great team. Our only focus is on developing quality solutions in .NET technology using C# and MVC which is our only one and main skill so we are more than expert in this. </p>
        <h1>Latest Products</h1>

	 

        <div class="row">
		<?php
			//including the database connection file
			include_once("database.php");


			$result = mysqli_query($mysqli, " select * from tblproducts where productInStock=true");
			while ($fetrow = mysqli_fetch_array($result)) {
				
				?>

				<div class="col-md-4">
				<a href="viewproduct.php?id=<?php echo $fetrow['productId'];  ?>">
					<img height="150" width="100%" src="files/<?php echo $fetrow['photo'];  ?>" />
					<h4 style="text-align:center"><?php echo $fetrow['productName']?></h4>
					</a>
				</div>
				
			<?php } ?>
            
        </div>

















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
