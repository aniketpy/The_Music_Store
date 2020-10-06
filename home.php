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
div{
	align:center;
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
<body style="background-color:black"background="images/bck2.jpg">
	<div class="container">
	

		<ul>
		  <li><a class="active" href="#">Home</a></li>
		  <li><a href="http://localhost/artist.php">Artists</a></li>
		  <li><a href="http://localhost/product.php">Products</a></li>
		  <li><a href="http://localhost/order.php">Order now</a></li>
      <li><a href="http://localhost/index.php">Sign Out</a></li>

		</ul>
        </div><br><br>

<center>
         <div>
            <div class="mySlides">
                 <img src="images/1.jpg" style="width:50%;height:20%">
            </div>
             <div class="mySlides">
                 <img src="images/2.jpg" style="width:50%;height:20%">
            </div>
            <div class="mySlides">
                    <img src="images/3.jpg" style="width:50%;height:20%">
            </div>
	 <div class="mySlides">
                <img src="images/4.jpg" style="width:50%;height:20%">
            </div>
        </div><br><br>
		<div><center>
		<h1 style="color:white;">THE MUSIC STORE</h1>
		<p style="color:white;">PROJECT BY:</p>
		<p style="color:white;">ANIKET SINGH</p>
		<p style="color:white;">HITESH SINGH</p>
		</center>
</center>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>
