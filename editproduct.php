<?php session_start(); ?>

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
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="products.php">Products <span class="sr-only">(current)</a>
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
                          <li class="nav-item "> <a class="nav-link" href="signup.php">Sign Up </span></a> </li>
						  
                      <?php  } ?>
                </ul>
            </div>
        </nav>

        
		 <?php
                include_once("database.php");
                $id = $_GET['id'];
                
                $result = mysqli_query($mysqli, "select * from tblproducts WHERE productId=$id");

                while($res = mysqli_fetch_array($result))
                {
                    $productname = $res['productName'];
                    $productprice = $res['productPrice'];
                    $productcode = $res['productCode'];
                    if($res['productInStock']=true)
                    {
                        $productstock='yes';
                    }
                    else{
                        $productstock='no';
                    }
                    $productdiscount = $res['productDiscount'];
                    $productsizes = $res['productSizes'];
                    $productdetails = $res['productDetails'];
                    $productimage=$res['photo'];

                }
                ?>
		
		<h1>Edit Product </h1>
		<div class="row">
            <div class="col-md-6">
                <form method="post" enctype="multipart/form-data">
					<input class="form-control"  type="hidden" id="productid" name="productid" value="<?php echo $_GET['id'];?>">
                    <label> Name: </label>
                    <input class="form-control" type="text" name="productname" id="productname" Required value="<?php echo $productname;?>" > <br>
                    <label> Price: </label>
                    <input class="form-control" type="currency" name="productprice" id="productprice"  Required value="<?php echo $productprice;?>" > <br>
                    <label> Code: </label>
                    <input class="form-control" type="text" name="productcode" id="productcode"  Required value="<?php echo $productcode;?>" > <br>
                    <label> Discount: </label>
                    <input class="form-control" type="currency" name="productdiscount" id="productdiscount"  Required value="<?php echo $productdiscount;?>" > <br>
                    <label> Sizes: </label>
                    <input class="form-control" type="text" name="productsizes" id="productsizes"  Required value="<?php echo $productsizes;?>" > <br>
                    <label> In Stock ?: </label>
                    Yes <input class=" radio-inline" type="radio" name="productstock" value="yes" checked> No <input class="  radio-inline" type="radio" name="productstock" value="no" > <br>
					<label> Details: </label>
                    <textarea class="form-control" name="productdetails" id="productdetails" rows="10"  Required> <?php echo $productdetails;?> </textarea>	<br>				
					<label> Photo: </label>
					<input type="file" name="productphoto" required><br><br>
					<img height="150" width="100%" src="files/<?php echo $productimage;  ?>"/>
					
					
                    <input class="btn btn-success" type="submit" name="productsubmit" value="Save Product"> <br><br>
					
					<a class="btn btn-danger" href="products.php">Back to Products</a>
					
                </form>
            </div>
           
		   
		   
        </div>
		
		
		
		
		
           
		    <?php
				include_once("database.php");
				

				 if(isset($_POST['productsubmit'])){
					 
					 $inStock = true;
					 if($_POST['productstock'] == 'yes')
                    {
                        $inStock = true;
                    }
                    else{
                        $inStock = false;
                    }
					$productid = $_POST['productid'];
					$productimage= $_FILES['productphoto']['name'];
					 
				$query = "update tblproducts set productName='{$_POST['productname']}' ,productPrice='{$_POST['productprice']}' ,productCode='{$_POST['productcode']}' ,productInStock='{$inStock}' ,productDiscount= '{$_POST['productdiscount']}',productSizes='{$_POST['productsizes']}' ,productDetails='{$_POST['productdetails']}' ,photo='{$productimage}' where productId={$productid}";
				
			    mysqli_query($mysqli, $query) or die(mysqli_error("Request failed."));
				
				$target= "files/".basename($productimage);
				 if(move_uploaded_file($_FILES['productphoto']['tmp_name'], $target )){

                            echo "Product updated successfully.<br><br>";

                        }else {

                            echo" Photo didn't uploaded";
                        }


				}

		   ?>
		   
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
