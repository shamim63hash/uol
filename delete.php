<?php session_start(); ?>

<?php

include("database.php");

$id = $_GET['id'];

$result=mysqli_query($mysqli, "delete from tblproducts WHERE productId={$id}");

header("Location:products.php");
?>

