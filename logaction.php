<?php
session_start();
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
$username = $_POST['username'];
$pass = $_POST['pass'];
$sql = "SELECT * FROM userdata WHERE (username = '$username' and password ='$pass')";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
 if (is_null($row)) {
 $_SESSION['error1'] = "Username And Password Not Matching";
 header('Location:log.php');
 }
 else{
 $_SESSION["login"] = "true";
 $_SESSION["username"] = $row['username'];
 $_SESSION["phone_number"] = $row['phone'];
 $_SESSION["full_name"] = $row['full_name'];
header('Location:index.php');
 }
?>