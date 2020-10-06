

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
* {
    box-sizing: border-box;
}

body {
    background-color: #f1f1f1;
    padding: 20px;
    font-family: Arial;
}

/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
}



.row {
    margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 8px;
}

/* Create four equal columns that floats next to each other */


/* Clear floats after rows */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: white;
    padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media (max-width: 900px) {
    .column {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column {
        width: 100%;
    }
}
</style>
</head>
<body style="background-color:black;"background="bck2.jpg">
	<div class="container">


		<ul>
		  <li><a href="http://localhost/home.php">Home</a></li>
		  <li><a href="#">Artists</a></li>
		  <li><a href="http://localhost/product.php">Products</a></li>
		  <li><a href="http://localhost/order.php">Order now</a></li>
      <li><a href="http://localhost/index.php">Sign Out</a></li>




		</ul>
		</div>
<center><h1 style="color:white;">FAMOUS ARTISTS</h2></center>


<center>
<div class="main">
<div class="content">
  <img src="images/2.jpg" alt="main" style="width:100%">
</div><br>

<div class="content">
  <img src="images/arjit.jpg" alt="arjit" align="middle" style="width:100%">
  <h3> <a href="https://en.wikipedia.org/wiki/Arijit_Singh" target="k">Arijit Singh</a></h3>
  </div><br>

<div class="content">
  <img src="images/selena.jpg" alt="selena" style="width:100%">
  <h3> <a href="https://en.wikipedia.org/wiki/Arijit_Singh" target="k">Selena Gomez</a></h3>
  </div><br>

<div class="content">
  <img src="images/shaun.jpg" alt="shaun" style="width:100%">
  <h3> <a href="https://en.wikipedia.org/wiki/Shawn_Mendes" target="k">Shawn Mendes</a></h3>
  </div><br>

<div class="content">
  <img src="images/ed.jpg" alt="ed" align="middle" style="width:100%">
  <h3> <a href="https://en.wikipedia.org/wiki/Ed_Sheeran" target="k">Ed Sheeran</a></h3>
  </div><br>

<div class="content">
  <img src="images/ariana.jpg" alt="ariana" align="middle" style="width:100%">
  <h3> <a href="https://en.wikipedia.org/wiki/Ariana_Grande" target="k">Ariana Grande</a></h3>
  </div><br>

</div></center>

</body>
</html>
