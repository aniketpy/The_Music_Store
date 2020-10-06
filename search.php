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
<form method="POST" action="" name="reg" onSubmit="return validate()">
<center><table border="5" bgcolor="Lavender">
 <h2 style="color:white"><b>SEARCH</b></h2><br>
<a style="color:white" href="order.php">HOME</a>&nbsp&nbsp&nbsp&nbsp
<a style="color:white" href="insert.php">INSERT</a>&nbsp&nbsp&nbsp&nbsp
<a style="color:white" href="update.php">UPDATE</a>&nbsp&nbsp&nbsp&nbsp
<a style="color:white" href="delete.php">DELETE</a>&nbsp&nbsp&nbsp&nbsp
<a style="color:white" href="#.php">SEARCH</a>&nbsp&nbsp&nbsp&nbsp
<a style="color:white" href="view.php">VIEW ALL</a><br><br></center>
</body>
 </html>
<?php

echo"<center>";
 echo"<form method='POST' action='' name='reg' onSubmit='return validate()'>";
echo"<table border='5' bgcolor='Lavender'>


</center>";

echo"<tr><td>
<center><table bgcolor='Lavender'>
<tr><td width='250'><b>Select Any One:<select name='sel'><option>Select Categary</option>";

  echo"<option value='cid'>CUSTOMER ID</option>";
  echo"<option value='fn'>FIRSTNAME</option>";
  echo"<option value='city'>CITY</option>";
  echo"<option value='pin'>PINCODE</option>

<td><input type='text' name='ty'><input type='submit' name='se' value='search'>/<input type='submit' name='se1' value='AllSearch'>";
echo"</tr></td></table>";
echo"</td></tr></table></center></form>
</body></html>";

 require'db_conn.php';

 $sel=filter_input(INPUT_POST,'sel');
   $ty=filter_input(INPUT_POST,'ty');

if(isset($_POST['se']))
 {

  if($sel=="cid")
  {
$q1=mysql_query("select* from customer where CUSTOMER_ID='$ty'");
echo"<center><table border='1'>";
  echo"<tr bgcolor='violet'><td><center>CUSTOMER_ID</center><td><center>FIRSTNAME</center><td><center>LASTNAME</center><td><center>EMAIL</center><td><center>PHONE</center><td><center>ADDRESS</center><td><center>STREET</center><td><center>CITY</center><td><center>PINCODE</center></td></tr>";

  while($rows=mysql_fetch_array($q1,MYSQL_ASSOC))
{
    $cid=$rows['CUSTOMER_ID'];
 $fn=$rows['FIRSTNAME'];
 $ln=$rows['LASTNAME'];
  $email=$rows['EMAIL'];
 $phone=$rows['PHONE'];
 $address=$rows['ADDRESS'];
 $street=$rows['STREET'];
  $city=$rows['CITY'];
   $pin=$rows['PINCODE'];
   $dob=$rows['DATE'];

 echo"<tr bgcolor='Lavender'><td><center>$cid</center><td><center>$fn</center><td><center>$ln</center><td><center>$email</center><td><center>$phone</center><td><center>$address</center><td><center>$street</center><td><center>$city</center><td><center>$pin</center></td></tr>";

}
 echo"</center>";
}
 if($sel=="fn")
  {
$q2=mysql_query("select* from customer where FIRSTNAME='$ty'");
echo"<center><table border='1'>";
  echo"<tr bgcolor='violet'><td><center>CUSTOMER_ID</center><td><center>FIRSTNAME</center><td><center>LASTNAME</center><td><center>EMAIL</center><td><center>PHONE</center><td><center>ADDRESS</center><td><center>STREET</center><td><center>CITY</center><td><center>PINCODE</center></td></tr>";

  while($rows=mysql_fetch_array($q2,MYSQL_ASSOC))
{
    $cid=$rows['CUSTOMER_ID'];
 $fn=$rows['FIRSTNAME'];
 $ln=$rows['LASTNAME'];
  $email=$rows['EMAIL'];
 $phone=$rows['PHONE'];
 $address=$rows['ADDRESS'];
 $street=$rows['STREET'];
  $city=$rows['CITY'];
   $pin=$rows['PINCODE'];


 echo"<tr bgcolor='Lavender'><td><center>$cid</center><td><center>$fn</center><td><center>$ln</center><td><center>$email</center><td><center>$phone</center><td><center>$address</center><td><center>$street</center><td><center>$city</center><td><center>$pin</center></td></tr>";

}
 echo"</center>";
}
if($sel=="city")
  {
$q3=mysql_query("select* from customer where CITY='$ty'");
echo"<center><table border='1'>";
 echo"<tr bgcolor='violet'><td><center>CUSTOMER_ID</center><td><center>FIRSTNAME</center><td><center>LASTNAME</center><td><center>EMAIL</center><td><center>PHONE</center><td><center>ADDRESS</center><td><center>STREET</center><td><center>CITY</center><td><center>PINCODE</center></td></tr>";

  while($rows=mysql_fetch_array($q3,MYSQL_ASSOC))
{
    $cid=$rows['CUSTOMER_ID'];
 $fn=$rows['FIRSTNAME'];
 $ln=$rows['LASTNAME'];
  $email=$rows['EMAIL'];
 $phone=$rows['PHONE'];
 $address=$rows['ADDRESS'];
 $street=$rows['STREET'];
  $city=$rows['CITY'];
   $pin=$rows['PINCODE'];


 echo"<tr bgcolor='Lavender'><td><center>$cid</center><td><center>$fn</center><td><center>$ln</center><td><center>$email</center><td><center>$phone</center><td><center>$address</center><td><center>$street</center><td><center>$city</center><td><center>$pin</center><td></td></tr>";

}
 echo"</center>";
}
if($sel=="pin")
  {
$q4=mysql_query("select* from customer where PINCODE='$ty'");
echo"<center><table border='1'>";
 echo"<tr bgcolor='violet'><td><center>CUSTOMER_ID</center><td><center>FIRSTNAME</center><td><center>LASTNAME</center><td><center>EMAIL</center><td><center>PHONE</center><td><center>ADDRESS</center><td><center>STREET</center><td><center>CITY</center><td><center>PINCODE</center><td></td></tr>";

  while($rows=mysql_fetch_array($q4,MYSQL_ASSOC))
{
    $cid=$rows['CUSTOMER_ID'];
 $fn=$rows['FIRSTNAME'];
 $ln=$rows['LASTNAME'];
  $email=$rows['EMAIL'];
 $phone=$rows['PHONE'];
 $address=$rows['ADDRESS'];
 $street=$rows['STREET'];
  $city=$rows['CITY'];
   $pin=$rows['PINCODE'];
   $dob=$rows['DATE'];

 echo"<tr bgcolor='Lavender'><td><center>$cid</center><td><center>$fn</center><td><center>$ln</center><td><center>$email</center><td><center>$phone</center><td><center>$address</center><td><center>$street</center><td><center>$city</center><td><center>$pin</center></td></tr>";

}
 echo"</center>";
}

}
if(isset($_POST['se1']))
 {
$q8=mysql_query("select* from customer");
echo"<center><table border='1'>";
  echo"<tr bgcolor='violet'><td><center>CUSTOMER_ID</center><td><center>FIRSTNAME</center><td><center>LASTNAME</center><td><center>EMAIL</center><td><center>PHONE</center><td><center>ADDRESS</center><td><center>STREET</center><td><center>CITY</center><td><center>PINCODE</center></td></tr>";

  while($rows=mysql_fetch_array($q8,MYSQL_ASSOC))
{
    $cid=$rows['CUSTOMER_ID'];
 $fn=$rows['FIRSTNAME'];
 $ln=$rows['LASTNAME'];
  $email=$rows['EMAIL'];
 $phone=$rows['PHONE'];
 $address=$rows['ADDRESS'];
 $street=$rows['STREET'];
  $city=$rows['CITY'];
   $pin=$rows['PINCODE'];


 echo"<tr bgcolor='Lavender'><td><center>$cid</center><td><center>$fn</center><td><center>$ln</center><td><center>$email</center><td><center>$phone</center><td><center>$address</center><td><center>$street</center><td><center>$city</center><td><center>$pin</center></td></tr>";

}
 echo"</center>";
}


?>
