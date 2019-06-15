<?php
session_start();
  ?>
<div class="bkcolor">
  <div class="fluid-container">
    <div class="row" style="margin: 0px;">
      <div class="col-md-9">
        <div class="navbar">
          <img src="images/logo2.png" style="height: 30px;">
          <a class="active" href="index.php" style="color: white;"><i class="fa fa-fw fa-home"></i> Home</a> 
          <a href="#" style="color: white;"><i class="fa fa-fw fa-search"></i> Search</a> 
          <a href="#bottom" style="color: white;"><i class="fa fa-fw fa-envelope"></i> Contact</a> 
          <?php if (isset($_SESSION["login"])) { ?>
           <?php if ($_SESSION["login"] == "true") {?>
       <a href="logout.php" > <i class="fa fa-fw fa-user" style="color: white;"></i>LOGOUT </a>
       <?php } else{ ?>
        <a href="log.php" > <i class="fa fa-fw fa-user" style="color: white;"></i>LOGIN </a><?php }?> 
     <?php  }

else{?>
    <a href="log.php" > <i class="fa fa-fw fa-user" style="color: white;"></i>LOGIN </a><?php }?> 

      
        </div>
      </div>
      
    </div>
  </div>
</div>




