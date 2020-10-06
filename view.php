<html>
<head>
    <title>Music store</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
	.mySlides {display:none;}
		h1 { font-size: 60px;}
table
		header
		{
			background-color:#DB7093;
			font-size:"50px";
		}

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
<form method="POST" action="" name="reg" onSubmit="return validate()">
<center><table border="5" bgcolor="Lavender">
 <h2 style="color:white"><b>SEARCH</b></h2><br>
<a style="color:white" href="order.php">HOME</a>&nbsp&nbsp&nbsp&nbsp
<a style="color:white" href="insert.php">INSERT</a>&nbsp&nbsp&nbsp&nbsp
<a style="color:white" href="update.php">UPDATE</a>&nbsp&nbsp&nbsp&nbsp
<a style="color:white" href="delete.php">DELETE</a>&nbsp&nbsp&nbsp&nbsp
<a style="color:white" href="search.php">SEARCH</a>&nbsp&nbsp&nbsp&nbsp
<a style="color:white" href="#.php">VIEW ALL</a><br><br></center>



<?php

$hostname = "localhost";
$username = "root";
$password = "1234";
$db = "music";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error) {
  die("Database connection failed: " . $dbconnect->connect_error);
}

?>

<table border="1" align="center" style="color:black" bgcolor='Lavender'>
<tr>
  <td>customer_id</td>
  <td>Firstname</td>
  <td>Lastname</td>
  <td>Email</td>
  <td>Phone</td>
  <td>Address</td>
  <td>Street</td>
  <td>City</td>
  <td>Pincode</td>
</tr>

<?php

$query = mysqli_query($dbconnect, "SELECT * FROM customer")
   or die (mysqli_error($dbconnect));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tr>
    <td>{$row['CUSTOMER_ID']}</td>
    <td>{$row['FIRSTNAME']}</td>
    <td>{$row['LASTNAME']}</td>
    <td>{$row['EMAIL']}</td>
    <td>{$row['PHONE']}</td>
    <td>{$row['ADDRESS']}</td>
    <td>{$row['STREET']}</td>
    <td>{$row['CITY']}</td>
    <td>{$row['PINCODE']}</td>
   </tr>\n";

}

?>
</table>
</body>
 </html>
