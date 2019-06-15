<?php

 $servername = "localhost";
$username = "root";
$password = "";
$db = "sell_phone";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 ?>

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


<?php include'nav.php'; 


$full_name = $_POST['name'];
$pin = $_POST['pin'];
$mob = $_POST['number'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$username = $_SESSION["username"];
$transid = mt_rand(100000,999999);
$model = $_SESSION["model"];
$companey = $_SESSION["compney"]; 
$price = $_SESSION["price"];
$sql3 = "SELECT * FROM address WHERE (username ='$username')";
$res1 = mysqli_query($conn,$sql3);
$row = mysqli_fetch_assoc($res1);
$sql1 = "INSERT INTO phones(username,transID,companey,model,price) VALUES('$username','$transid','$companey','$model','$price')";
$sql2 = "INSERT INTO address(full_name,mob,pin,house_number,vpo,city,state,username,transID) VALUES('$full_name','$mob','$pin','$address1','$address2','$city','$state','$username','$transid')";
$res = mysqli_query($conn,$sql1);
$result = mysqli_query($conn,$sql2);
if (isset($res) && isset($result)) {
	header('Location:index.php');
}

?>

</body>
</html>