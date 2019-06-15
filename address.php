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
	<?php include 'nav.php' ; 

 ?>
	<div class="container">
		<div class="modal3">
			
			<h2>Totel Price Of Your<?php echo "  ".$_SESSION["compney"]."  ".$_SESSION["model"]; ?> is <?php echo $_SESSION["price"];  ?></h2>
			<h2>Select Your Address</h2>
			<hr style="margin-top: 30px;">
<div class="address row">
<div class="col-md-5">
<form method="POST" action="submission.php">
	<div class="proper">
	<label>Full Name:</label></br>
	<input type="text" name="name" value="<?php echo $_SESSION["full_name"];  ?>" required></br>
     </div>

	<div class="Proper">
	<label>Phone Number:</label></br>
	<input type="text" name="number" value="<?php echo $_SESSION["phone_number"] ?>"></br>
     </div>
    
	<div class="Proper">
	<label>Pincode:</label></pinbr>
	<input type="text" name="pin" required></br>
     </div>

    <div class="proper">
	<label>Flat, House no., Building, Company, Apartment:  </label></br>
	<input type="text" name="address1" required></br>
     </div>

     <div class="proper">
	<label>Area, Colony, Street, Sector, Village: </label></br>
	<input type="text" name="address2" required></br>
     </div>

       <div class="proper">
	<label>Town/City </label></br>
	<input type="text" name="city" required></br>
     </div>
   
     <div class="proper">
	<label>State</label></br>
	<input type="text" name="state" required></br>
     </div>
 <button type="submit" name="submit" class="signupbtn">Countinue</button>


</form>
</div>
<div class="col-md-7 abd25">
	<h4>Our Phone Collector Boy Come At your Given Address And Test Functionality And Give You Appropiate Money </h4>
<div class="row">
	<div class="col-md-6">
		<div class="abd24">
		<img src="images/step0.png" class="img-fluid">
</div>
	</div>
	<div class="col-md-6">
		<div class="abd24">
		<img src="images/step1.jpg" class="img-fluid" style="height: 175px">

</div>
	</div>

</div>
<div class="row">
	<div class="col-md-6">
		<div class="abd24">
		<img src="images/step2.jpg" class="img-fluid" style="height: 150px">

</div>

	</div>
	<div class="col-md-6">
		<div class="abd24">
		<img src="images/step3.jpg" class="img-fluid" style="height: 150px">

</div>

	</div>

</div>
</div>



</div>
</div>
</div>
</body>
</html>