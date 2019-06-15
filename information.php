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
if($_SESSION["compney"] == "apple"){
	$screen = -7000;
	$volume = -4000;
	$speaker = -6000;
	$gps = -1000;
	$fcamera= -2000;
	$rcamera = -2000;
	$battery = -3000;
	$touch = -5000;
	$power = -3000;
}
elseif ($_SESSION["compney"] == "htc") {
	$screen = -3000;
	$volume = -500;
	$speaker = -1000;
	$gps =-1000;
	$fcamera=-500;
	$rcamera =500;
	$battery =-3000;
	$touch = -2000;
	$power = -2000;
}
elseif ($_SESSION["compney"] == "honor") {
	$screen = -2000;
	$volume = -500;
	$speaker = -2000;
	$gps =-500;
	$fcamera=-500;
	$rcamera =-500;
	$battery =-2000;
	$touch = -2000;
	$power = -1000;
}
elseif ($_SESSION["compney"] == "nokia") {
	$screen = -2000;
	$volume = -500;
	$speaker = -2000;
	$gps = -500;
	$fcamera= -500;
	$rcamera = -500;
	$battery = -2000;
	$touch = -2000;
	$power = -1000;
}
elseif ($_SESSION["compney"] == "micromax") {
	$screen =-2000;
	$volume = -200;
	$speaker = -2000;
	$gps =-100;
	$fcamera=-300;
	$rcamera =-300;
	$battery =-1000;
	$touch = -1000;
	$power = -1000;
}
elseif ($_SESSION["compney"] == "oppo") {
	$screen =-2000;
	$volume = -500;
	$speaker = -2000;
	$gps =-500;
	$fcamera=-500;
	$rcamera =-500;
	$battery =-2000;
	$touch = -2000;
	$power = -1000;
}
elseif ($_SESSION["compney"] == "oneplus") {
	$screen =-5000;
	$volume = -3000;
	$speaker = -5000;
	$gps =-1000;
	$fcamera=-2000;
	$rcamera =-2000;
	$battery =-3000;
	$touch = -5000;
	$power = -3000;
}
elseif ($_SESSION["compney"] == "samsung") {
	$screen =-2000;
	$volume = -500;
	$speaker = -2000;
	$gps =-500;
	$fcamera=-500;
	$rcamera =-500;
	$battery =-2000;
	$touch = -2000;
	$power = -1000;
}
elseif ($_SESSION["compney"] == "vivo") {
	$screen =-2000;
	$volume = -500;
	$speaker = -2000;
	$gps =-500;
	$fcamera=-500;
	$rcamera =-500;
	$battery =-2000;
	$touch = -2000;
	$power = -1000;
}
else {
		$screen =-2000;
	$volume = -500;
	$speaker = -2000;
	$gps =-500;
	$fcamera=-500;
	$rcamera =-500;
	$battery =-2000;
	$touch = -2000;
	$power = -1000;
}
 ?>
 <div class="infoback1">
<div class="container" style="background-color: white;padding: 40px; border-radius: 5px;">
	<form id="phoneinfo" method="POST" action="contents.php">
<h2>Functional or Physical Problems</h2>
<p>Please choose appropriate option(s) to get accurate quote</p>
<div class="abd20">
	<ul class="list-group">
		<li class="list-group-item" style="border-top-color:white;">
			<span>Display or Touch Issue</span>
			<label class="switch">
  <input type="checkbox" value="<?php echo $touch; ?>" name="i1">
  <span class="slider"></span>
</label>
		</li>

<li class="list-group-item">
			<span>Screen Broken</span>
			<label class="switch">
  <input type="checkbox" value="<?php echo $screen;  ?>" name="i2">
  <span class="slider"></span>
</label>
		</li>

		<li class="list-group-item">
			<span>Power Button Issue</span>
			<label class="switch">
  <input type="checkbox" value="<?php echo $power; ?>" name="i3">
  <span class="slider"></span>
</label>
		</li>

		<li class="list-group-item">
			<span>Volume Button Issue</span>
			<label class="switch">
  <input type="checkbox" value="<?php echo $volume; ?>" name="i4">
  <span class="slider"></span>
</label>
		</li>

<li class="list-group-item">
			<span>Battery Issue</span>
			<label class="switch">
  <input type="checkbox" value="<?php echo $battery; ?>" name="i5">
  <span class="slider"></span>
</label>
		</li>

   <li class="list-group-item">
			<span>Front Camera Issue</span>
			<label class="switch">
  <input type="checkbox" value="<?php echo $fcamera; ?>" name="i6">
  <span class="slider"></span>
</label>
		</li>

<li class="list-group-item">
			<span>Back Camera Issue</span>
			<label class="switch">
  <input type="checkbox" value="<?php echo $rcamera;   ?>" name="i7">
  <span class="slider"></span>
</label>
		</li>

	<li class="list-group-item">
			<span>Speaker Issue</span>
			<label class="switch">
  <input type="checkbox" value="<?php echo $speaker;  ?>" name="i8">
  <span class="slider"></span>
</label>
		</li>	

		<li class="list-group-item" style="border-bottom-color: white;">
			<span>Wifi/GPS Issue</span>
			<label class="switch">
  <input type="checkbox" value="<?php echo $gps;  ?>" name="i9">
  <span class="slider"></span>
</label>
		</li>

	</ul>
	<input type="submit" value="NEXT" class="btn-custom next ">
</div>
</form>
</div>
</div>
</body>
</html>