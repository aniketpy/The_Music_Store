
<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
} else {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Music store</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
	.mySlides {display:none;}
		h1 { font-size: 60px;}
		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #333;
		}

		li {
			float: left;
		}

		li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		li a:hover {
			background-color: #111;
		}


             </style>
</head>
<body bgcolor="black"background="images/bck2.jpg">
	<div class="container">

		<ul>
		  <li><a href="http://localhost/home.php">Home</a></li>
		  <li><a href="http://localhost/artist.php">Artists</a></li>
		  <li><a href="http://localhost/product.php">Products</a></li>
		  <li><a href="http://localhost/order.php">Order now</a></li>
                  <li><a href="http://localhost/index.php">Sign Out</a></li>

		</ul>
        </div><br><br>
<center>
<h2 style="color:white">Welcome, <?=$_SESSION['sess_user'];?>! </h2><br><br>
<a href="http://localhost/home.php"><img border="0" alt="home" src="home.png" width="70" height="70">	
<a href="http://localhost/artist.php"><img border="0" alt="artist" src="artist.png" width="70" height="70">
<a href="http://localhost/product.php"><img border="0" alt="product" src="product.png" width="70" height="70">
<a href="http://localhost/order.php"><img border="0" alt="order" src="order.png" width="70" height="70">
<a href="http://localhost/index.php"><img border="0" alt="sign" src="sign.png" width="70" height="70">
</center>
</body>
</html>
<?php
}
?>
