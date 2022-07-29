﻿<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style4.css" >
<script src="sweetalert2@11.js"></script>
</head>
<body>
<?php
require('config.php');

if (isset($_POST['submit'])){
	$product_id = stripslashes($_POST['product_id']);
	$product_id = mysqli_real_escape_string($conn, $product_id); 

	$product_desc = stripslashes($_POST['product_desc']);
	$product_desc = mysqli_real_escape_string($conn, $product_desc);

	$cat_id = stripslashes($_POST['cat_id']);
	$cat_id = mysqli_real_escape_string($conn, $cat_id);

	$product_img = stripslashes($_POST['product_img']);
	$product_img = mysqli_real_escape_string($conn, $product_img);

	$product_price = stripslashes($_POST['product_price']);
	$product_price = mysqli_real_escape_string($conn, $product_price);

	$product_title = stripslashes($_POST['product_title']);
	$product_title = mysqli_real_escape_string($conn, $product_title);

	

	$manifacturer = stripslashes($_POST['manifacturer']);
	$manifacturer = mysqli_real_escape_string($conn, $manifacturer);



    $query = "INSERT into products (product_id,product_desc,cat_id,product_img,product_price,product_title,manufacturer_id)
	VALUES ('$product_id', '$product_desc', '$cat_id', '$product_img','$product_price','$product_title','$manifacturer')";
	echo $query ;
    $res = mysqli_query($conn,$query);

    if($res){
		echo "<script>"; 
		echo "Swal.fire('produit ajouté  avec succés', '', 'success')"; 
		echo "</script>";		 
		}
		else {
		echo "<script>"; 
		echo "Swal.fire('Echec!', '', 'failure')"; 
		echo "</script>";
		}
}

?>
<form class="box" action="" method="post">
    <h1 class="box-title">Add product</h1>
	<input type="number" class="box-input" name="product_id" placeholder="product_id" required >
	<br>
    <input type="textarea" class="box-input" name="product_desc" placeholder="product_desc"  >
	<br>
	<input type="number" class="box-input" name="cat_id" placeholder="cat_id"  >
	<br>
	<input type="file" class="box-input" name="product_img" placeholder="product_img"  >
	<br>
	<input type="text" class="box-input" name="product_price" placeholder="product_price"  >
	<br>
	<input type="text" class="box-input" name="product_title" placeholder="product_title"  >
	<br>
	<input type="number" class="box-input" name="manifacturer" placeholder="cat_id"  >
	<br>
    <input type="submit" name="submit" value="+ Add" class="box-button" />
</form>
</body>
</html>