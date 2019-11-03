<?php
 require "includes/header.php";
 ?>


<main>
  
<div align="center">
<form>
<div class="row">
        <div class="col s12">
          Price Paid:
          <div class="input-field inline">
          <span class="currency">£</span>
            <input placeholder="£0.00" id="amount" 
            type="text" class="validate" maxlength="8"
            pattern="^\\$?(([1-9](\\d*|\\d{0,2}(,\\d{3})*))|0)(\\.\\d{1,2})?$">
            </div>
          </div>
  <button class="btn grey darken-2">Generate Invoice</button>
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
