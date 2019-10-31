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
            <input placeholder="£X.XX" id="price_inline" type="price" class="validate">
            </div>
          </div>
          <div class="col s12">
          Website Used:
          <div class="input-field inline">
            <input placeholder="eBay/Amazon" id="price_inline" type="price" class="validate">
            </div>
          </div>
        </div>
      </div>
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
