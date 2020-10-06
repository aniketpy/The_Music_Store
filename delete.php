
        <html>
<head>
    <title>Music store</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
mine{
color:white;}
	.mySlides {display:none;}
		h1 { font-size: 60px;}
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

<body style="background-color:black"background="images/bck2.jpg" width="100%">
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
<form method="POST" action="">
<table border="10" bgcolor="white">
 <h2 style="color:white"><b>CUSTOMER DATABASE</b></h2><br>
<a style="color:white" href="order.php">HOME</a>&nbsp&nbsp&nbsp&nbsp
<a style="color:white" href="insert.php">INSERT</a>&nbsp&nbsp&nbsp&nbsp
<a style="color:white" href="update.php">UPDATE</a>&nbsp&nbsp&nbsp&nbsp
<a style="color:white" href="#">DELETE</a>&nbsp&nbsp&nbsp&nbsp
<a style="color:white" href="search.php">SEARCH</a>&nbsp&nbsp&nbsp&nbsp
<a style="color:white" href="view.php">VIEW ALL</a><br><br></center>
</center>

<tr>
		<td>ENTER CUSTOMER_ID:</td>
		<td><input type="text" name="cid" /></td>
	</tr>

		
		<td><input type="submit" name="submit" value="DELETE" /></td>
	</tr>
 </table>
</form>
</body>
</html>
<?php
require 'db_conn.php';

$cid=$_POST['cid'];
if(isset($_POST['submit']))
 {
 $del=mysql_query("DELETE FROM customer where CUSTOMER_ID='$cid'");


if($del)
{
 echo"Record Successfully Deleted";
}
else
{

echo"Not Delete Your Record" ;
}
 }
?>
