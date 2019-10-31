<?php
 require "includes/header.php";
 ?>


<main>
  
  <div align="center"class="topContent">
  
   <?php 
   echo "Current Date: $formatDate<br>"; 
   echo "Current Time: $formatTime<br>";
   ?>
  
  </div>
<form method="post" action="includes/post.inc.php">
  <!--Check in Input w/ Label.-->
  <div class="container">
<div align="center" class="input-group">
<label>Check In Message</label>
<input type="text" name="CheckInMessage" title="">
  <button type="submit" name="checkin-submit" class="btn grey darken-2">Check In!</button>
</div>
</div>
</form>
</main>

 <?php
 require"includes/footer.php";
  ?>
