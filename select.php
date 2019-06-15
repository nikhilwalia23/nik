<?php session_start(); 
if($_SESSION["login"] == "true") {
	
if($_GET['companey']=="apple")
{
    $_SESSION["companey"]="apple";
    header('Location:apple.php');

}
elseif($_GET['companey']=="htc") {
	$_SESSION["companey"]="htc";
	header('Location:htc.php');

}
elseif($_GET['companey']=="honor") {
	$_SESSION["companey"]="honor";
	header('Location:honor.php');
}
elseif($_GET['companey']=="nokia") {
	$_SESSION["companey"]="nokia";
	header('Location:nokia.php');
}
elseif($_GET['companey']=="micromax") {
	$_SESSION["companey"]="micromax";
	header('Location:micromax.php');
}
elseif($_GET['companey']=="oppo") {
	$_SESSION["companey"]="oppo";
	header('Location:oppo.php');
}
elseif($_GET['companey']=="oneplus") {
	$_SESSION["companey"]="oneplus";
	header('Location:oneplus.php');
}
elseif($_GET['companey']=="vivo") {
	$_SESSION["companey"]="vivo";
	header('Location:vivo.php');
}
elseif($_GET['companey']=="xiaomi") {
	$_SESSION["companey"]="xiaomi";
	header('Location:mi.php');
}
elseif ($_GET['companey']=="samsung") {
	$_SESSION["companey"]="samsung";
	header('Location:samsung.php');
}
else
{
	
	header('Location:index.php');

}          }
else
{
	$_SESSION["error1"] = "Login Required Before Selling";
	header('Location:log.php');
}
   
?>

