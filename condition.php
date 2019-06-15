<!DOCTYPE html>
<html>
<head>
	<title>SELL PHONE</title>
	<script src="nn.js"></script>
<link rel="stylesheet" type="text/css" href="nn.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
</head>
<body>
<?php 
include "nav.php";
if (isset($_POST['a1'])) {
	$_SESSION["price"] = $_SESSION["price"] + $_POST['a1'];
}
if (isset($_POST['a2'])) {
	$_SESSION["price"] = $_SESSION["price"] + $_POST['a2'];
}
if (isset($_POST['a3'])) {
	$_SESSION["price"] = $_SESSION["price"] + $_POST['a3'];
}
if (isset($_POST['a4'])) {
	$_SESSION["price"] = $_SESSION["price"] + $_POST['a4'];
}
 ?>
 	 <div class="infoback1">
<div class="container"  style="background-color: white;padding: 40px; border-radius: 5px;" >
	
	<form id="phoneinfo" method="POST" action="address.php">
<h2>Your Phone Condition</h2>
<p>Please choose appropriate condition to get accurate quote</p>
<div class="abd20">
	<ul class="list-group">
		<li class="list-group-item" style="border-top-color:white;">
			<span>Good</span>
			<label class="switch">
  <input type="radio" value="200" id="eg" name="condition" required>
  <span class="slider"></span>
</label>
		</li>

<li class="list-group-item">
			<span>Average</span>
			<label class="switch">
  <input type="radio" value="50" id="eg" name="condition" required>
  <span class="slider"></span>
</label>
		</li>

		<li class="list-group-item">
			<span>Below Average</span>
			<label class="switch">
  <input type="radio" value="100" id="eg" name="condition" required>
  <span class="slider"></span>
</label>
		</li>

		
</ul>
<div style="margin-top: 30px;">
 <a href="information.php" class="btn-custom next">PREVIOUS</a>
	<input type="submit" value="NEXT" class="btn-custom next rt" id="dis">
</div>
</div>	 
</form>	

	 </div>

</div>
</body>
</html>