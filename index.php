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
            <input id="email_inline" type="email" class="validate">
            <label for="#">Email</label>
            <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
          </div>
        </div>
      </div>
      <br>
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
