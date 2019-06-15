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
$error = "";
  ?>
  

<center>
<div id="id01" class="modal1" >
	
  <form class="modal-content" action="signaction.php" method="POST">
    <div class="sign container">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">X</span>
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr style="color:black;">
       <p> <span><?php echo $_SESSION["error"]; ?></span></p>
        <input type="text" placeholder="Enter Full Name" name="name" style="width:100%;margin:5px;height:40px;" required>
<br/>
      <input type="text" placeholder="Enter Unique Username" name="username" style="width:100%;margin:5px;height:40px;" required>
<br/>
      <input type="tel" placeholder="Enter Your Mobile" name="phone" style="width:100%;margin:5px;height:40px;font-size: 16px;" required>
<br/>

      
      <input type="email" placeholder="Enter Email" name="email" style="width:100%;margin:5px;height:40px;" >
<br/>
      
      <input type="password" placeholder="Enter Password" name="psw" style="width:100%;margin:5px;height:40px;"  required>
<br/>
      
     
      <input type="password" placeholder="Repeat Password" name="psw-repeat" style="width:100%;margin:5px;height:40px;"  required>
      <br>
 <P><a href="log.php">Allread Have An Account</a></P>
     

      <div class="clearfix">
        
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
   
  </form>
</div>
</center>

</body>
</html>