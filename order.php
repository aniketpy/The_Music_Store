<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Music store</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script language="javascript">
function validate()
{
    var cid=document.reg.cid.value;
  var fname=document.reg.fn.value;
  var lname=document.reg.ln.value;
    var email=document.reg.email.value;
   var phone=document.reg.phone.value;
var address=document.reg.address.value;
var street=document.reg.street.value;
  var city=document.reg.city.value;
  var pin=document.reg.pin.value;





if(cid=='')
  {
    window.alert("Please Enter fname!");
    document.reg.cid.focus();
    return false;

 }
if(fname=='')
  {
    window.alert("Please Enter fname!");
    document.reg.fn.focus();
    return false;

 }

 if(lname=='')
  {
    window.alert("Please Enter lname!");
    document.reg.ln.focus();
    return false;

 }


 }
 if(address=='')
  {
    window.alert("Please Select Address!");
    document.reg.address.focus();
    return false;

 }
 if(street=='')
  {
    window.alert("Please Select Street!");
    document.reg.street.focus();
    return false;

 }
 if(city=='')
  {
    window.alert("Please Select Address!");
    document.reg.city.focus();
    return false;

 }
 if(pin=='')
  {
    window.alert("Please Select Address!");
    document.reg.pin.focus();
    return false;

 }
 if(phone=='')
 {
    window.alert("Please Select Address!");
    document.reg.phone.focus();
    return false;

 }
 if(email=='')
 {
    window.alert("Please Select Address!");
    document.reg.email.focus();
    return false;

 }


}
</script>
<style>

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

<title>Music store</title>
</head>

<body style="background-color:black"background="images/bck2.jpg">
	<div class="container">
	

		<ul>
		  <li><a href="http://localhost/home.php">Home</a></li>
		  <li><a href="http://localhost/artist.php">Artists</a></li>
		  <li><a href="http://localhost/product.php">Products</a></li>
		  <li><a href="http://localhost/order.php">Order now</a></li>
      <li><a href="http://localhost/index.php">Sign Out</a></li>

		</ul>
        </div><br><br>
<form method="POST" action="" name="reg" onSubmit="return validate()">
<center><table border="5" bgcolor="Lavender">
 <h2 style="color:white"><font><b>CUSTOMER DETAILS FOR THE ORDERS</b></font></h2><br>
<a style="color:white" href="order.php">HOME</a>&nbsp&nbsp&nbsp&nbsp
<a style="color:white" href="insert.php">INSERT</a>&nbsp&nbsp&nbsp&nbsp
<a style="color:white" href="update.php">UPDATE</a>&nbsp&nbsp&nbsp&nbsp
<a style="color:white" href="delete.php">DELETE</a>&nbsp&nbsp&nbsp&nbsp
<a style="color:white" href="search.php">SEARCH</a>&nbsp&nbsp&nbsp&nbsp
<a style="color:white" href="view.php">VIEW ALL</a><br><br></center>
        <tr>
		<td>CUSTOMER ID:</td>
		<td><input type="text" name="cid" /></td>
	</tr>
	<tr>
		<td>FIRST NAME:</td>
		<td><input type="text" name="fn" /></td>
	</tr>
	<tr>
		<td>LAST NAME:</td>
		<td><input type="text" name="ln" /></td>
	</tr>
        <tr>
		<td>PHONE:</td>
		<td><input type="text" name="phone" /></td>
	</tr>
        <tr>
		<td>EMAIL:</td>
		<td><input type="text" name="email" /></td>
	</tr>







        <tr>
		<td>ADDRESS(DOOR NO.):</td>
		<td><input type="text" name="address" /></td>
	</tr>

        <tr>
		<td>STREET:</td>
		<td><input type="" name="street" /></td>
	</tr>

                    <tr>
<td>CITY:</td>
<td><select name="city">
<option> select city </option>
                <option value="BANGALORE">BANGALORE</option>
                <option value="NEWDELHI">NEW DELHI</option>
                <option value="GULBARGA">GULBARGA</option>
                <option value="MUMBAI">MUMBAI</option>
                <option value="KOLKATA">KOLKATA</option>
                <option value="CHENNAI">CHENNAI</option>
                <option value="MANGALORE">MANGALORE</option>
                <option value="MYSORE">MYSORE</option>
                <option value="LUCKNOW">LUCKNOW</option>
                <option value="INDORE">INDORE</option>

</select>

</td>
</tr>

        <tr>
		<td>PINCODE:</td>
		<td><input type="text" name="pin" /></td>
	</tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="submit" value="ADD" /></td>
	</tr>
 </table>
</form>
</body>
</html>
<?php
require'db_conn.php';
$cid=filter_input(INPUT_POST,'cid');
$fn=filter_input(INPUT_POST,'fn');
$ln=filter_input(INPUT_POST,'ln');
$phone=filter_input(INPUT_POST,'phone');
$email=filter_input(INPUT_POST,'email');

$address=filter_input(INPUT_POST,'address');
$street=filter_input(INPUT_POST,'street');
$city=filter_input(INPUT_POST,'city');
$pin=filter_input(INPUT_POST,'pin');
$cap1=strtoupper($fn);
$cap2=strtoupper($ln);

if(isset($_POST['submit']))
 {

 $q1=mysql_query("insert into customer(CUSTOMER_ID,FIRSTNAME,LASTNAME,EMAIL,PHONE,ADDRESS,STREET,CITY,PINCODE) values('$cid','$cap1','$cap2','$email','$phone','$address','$street','$city')");
if($q1)
{
 echo"Record Successfully Add";
}
else
{

echo"Record not added" ;
}
 }
?>
