<!DOCTYPE html>
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
<body style="background-color:black" background="images/bck2.jpg">
	<div class="container">


		<ul>
		  <li><a class="active" href="">Home</a></li>
		  <li><a href="#">Artists</a></li>
		  <li><a href="#">Products</a></li>
		  <li><a href="#">Order now</a></li>
		<li><a href="#">Sign Out</a></li>
		</ul>
        </div><br><br>
<center>
<form action="" method="POST" >
<h2 style="color:white"><font><b>Login Here</b></font></h2><br>
<p style="color:white;font-size:20px;">Username: <input type="text" name="user"><br/></p>
<p style="color:white;font-size:20px;">Password: <input type="password" name="pass"><br/></p>
<input type="submit" value="Login" name="submit" />
</form></center>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
    $user=$_POST['user'];
    $pass=$_POST['pass'];

    $con=mysql_connect('localhost','root','computer') or die(mysql_error());
    mysql_select_db('music') or die("cannot select DB");

    $query=mysql_query("SELECT * FROM login WHERE name='".$user."' AND password='".$pass."'");
    $numrows= mysql_num_rows($query);
    if($numrows!=0)
    {
    while($row=mysql_fetch_assoc($query))
    {
    $dbusername=$row['name'];
    $dbpassword=$row['password'];
    }

    if($user == $dbusername && $pass == $dbpassword)
    {
    session_start();
    $_SESSION['sess_user']=$user;

    /* Redirect browser */
    header("Location: members.php");
    }
    } else { 
         echo '<span style="color:white;text-align:center;"><h2><br><br>Invalid username or password!</h2></span>';
    }

} else {
    echo '<span style="color:white;text-align:center;"><h2><br><br>All feild are required</h2></span>';
}
}
?>
</body>
</html>
