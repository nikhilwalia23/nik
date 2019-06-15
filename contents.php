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
<body>
	<?php 
		include "nav.php";
		if (isset($_POST['i1'])) {
			$_SESSION["price"] = $_SESSION["price"] + $_POST['i1'];
		}
		if (isset($_POST['i2'])) {
			$_SESSION["price"] = $_SESSION["price"] + $_POST['i2'];
		}
		if (isset($_POST['i3'])) {
			$_SESSION["price"] = $_SESSION["price"] + $_POST['i3'];
		}
		if (isset($_POST['i4'])) {
			$_SESSION["price"] = $_SESSION["price"] + $_POST['i4'];
		}
		if (isset($_POST['i5'])) {
			$_SESSION["price"] = $_SESSION["price"] + $_POST['i5'];
		}
		if (isset($_POST['i6'])) {
			$_SESSION["price"] = $_SESSION["price"] + $_POST['i6'];
		}
		if (isset($_POST['i7'])) {
			$_SESSION["price"] = $_SESSION["price"] + $_POST['i7'];
		}
		if (isset($_POST['i8'])) {
			$_SESSION["price"] = $_SESSION["price"] + $_POST['i8'];
		}
		if (isset($_POST['i9'])) {
			$_SESSION["price"] = $_SESSION["price"] + $_POST['i9'];
		}

		if ($_SESSION["compney"] =="apple") {
			$charger = 3000;
			$earphone = 2000;
			$box = 100;
			$bill = 5000;
		}
		elseif ($_SESSION["compney"] == "htc") {
			$charger = 1000;
			$earphone = 900;
			$box =50;
			$bill =1000;	
		}
		elseif ($_SESSION["compney"] == "honor") {
			$charger = 1000;
			$earphone = 900;
			$box =50;
			$bill =1000;
		}
		elseif ($_SESSION["compney"] == "nokia") {
			$charger = 1500;
			$earphone = 1000;
			$box = 50;
			$bill = 1500;
		}
		elseif ($_SESSION["compney"] == "micromax") {
			$charger = 500;
			$earphone = 300;
			$box =50;
			$bill =1000;
		}
		elseif ($_SESSION["compney"] == "oppo") {
			$charger = 1000;
			$earphone = 500;
			$box =50;
			$bill =1000;
		}
		elseif ($_SESSION["compney"] == "oneplus"){
			$charger = 1000;
			$earphone = 900;
			$box =50;
			$bill =3000;
		}
		elseif ($_SESSION["compney"] == "vivo") {
			$charger = 1000;
			$earphone = 900;
			$box =50;
			$bill =3000;
		}
		elseif ($_SESSION["compney"] == "samsung") {
				$charger = 1000;
			$earphone = 900;
			$box =50;
			$bill =1000;	
		}
		else{

		}

?>

 <div class="infoback1">
<div class="container"  style="background-color: white;padding: 40px; border-radius: 5px;" >
	
	<form id="phoneinfo" method="POST" action="condition.php">
<h2>Do you have the following</h2>
<p>Please select accessories which are available</p>
<div class="abd20">
	<ul class="list-group">
		<li class="list-group-item" style="border-top-color:white;">
			<span>Original Charger</span>
			<label class="switch">
  <input type="checkbox" value="<?php echo $charger; ?>" name="a1">
  <span class="slider"></span>
</label>
		</li>

<li class="list-group-item">
			<span>Earphone</span>
			<label class="switch">
  <input type="checkbox" value="<?php echo $earphone; ?>" name="a2">
  <span class="slider"></span>
</label>
		</li>

		<li class="list-group-item">
			<span>Box</span>
			<label class="switch">
  <input type="checkbox" value="<?php echo $box; ?>" name="a3">
  <span class="slider"></span>
</label>
		</li>

		<li class="list-group-item">
			<span>Under Warrentey Bill</span>
			<label class="switch">
  <input type="checkbox" value="<?php echo $bill; ?>" name="a4">
  <span class="slider"></span>S
</label>
		</li>
</ul>
<div style="margin-top: 30px;">
 <a href="information.php" class="btn-custom next">PREVIOUS</a>
	<input type="submit" value="NEXT" class="btn-custom next rt">
</div>
</div>	 
</form>	

	 </div>

</div>
</body>
</html>
