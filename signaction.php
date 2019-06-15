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
 $full_name = $_POST['name'];
 $username = $_POST['username'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $pass = $_POST['psw'];
  if ($_POST['psw-repeat'] == $pass) {
    if (strlen($pass) >= 8) {
      
    
 $sql = "SELECT * FROM userdata WHERE (username = '$username' or mail = '$email' or phone = '$phone')";
 $res = mysqli_query($conn,$sql);
 $row = mysqli_fetch_assoc($res);
        if ($username == $row['username'])
           {
          $_SESSION["error"] = "Username Alllready exits";
           header('Location:sign.php');
           }
        elseif($email == $row['mail'])
          {
           $_SESSION["error"] = "Email Address Alllready exits";
            header('Location:sign.php');
          }
          elseif ($phone == $row['phone']) {
            $_SESSION["error"] = "Phone Number Alllready exits";
              header('Location:sign.php');
          }
        else{
       $query = "INSERT INTO userdata(username,phone,mail,password,full_name) VALUES('$username','$phone','$email','$pass','$full_name')";
       $result = mysqli_query($conn,$query);
       if (isset($result))  {
     header('Location:index.php');
                            }    
           }



}
else{
  $_SESSION['error'] = "Password Should have Minimum lenght 8";
  header('Location:sign.php');
}
      
}
 else {
        $_SESSION['error'] = "Password not matching";
        header('Location:sign.php');
       }