
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
  $_SESSION['error'] = "";
  
  ?>

 

	<center>
<div id="id01" class=" modal1" >
  <form class="modal-content" action="logaction.php" method="POST">
    <div class="sign container">
     <a href="index.php"> <span class="close" title="Close Modal">X</span></a>
      <h1>LOG IN</h1>
      <p>Enter Username And Password Below</p>
      <hr style="color:black;">
       <p> <span><?php if (isset($_SESSION["error1"])) {
          echo $_SESSION["error1"]; 
       }?></span></p>
      <input type="text" placeholder="Enter Username" name="username" style="width:100%;margin:5px;height:40px;" required>
<br/>
  <input type="password" placeholder="Password" name="pass" style="width:100%;margin:5px;height:40px;"  required>
      <br>
 <P><a href="sign.php">Did'n Have An Account</a></P>
     

      <div class="clearfix">
        
        <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
        <button type="submit" name="submit" class="signupbtn">LOG IN</button>
      </div>
    </div>
  </form>
</div>
</center>

</body>
</html>