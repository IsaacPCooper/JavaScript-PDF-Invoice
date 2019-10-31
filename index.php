<?php
 require "includes/header.php";
 ?>


<main>
  
  <div align="center">
<form>
Price Paid: <input type="text" size="6" maxlength="6"> <br>
  <button type="submit" name="checkin-submit" class="btn grey darken-2">Generate Invoice</button>
  </form>
<br>
   <?php 
   echo "Current Date: $formatDate<br>"; 
   ?>
  </div>
</main>

 <?php
 require"includes/footer.php";
  ?>
