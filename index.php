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
            <input placeholder="£X.XX" id="price_inline" 
            type="text" class="validate"maxlength="8"
            pattern="^\\$?(([1-9](\\d*|\\d{0,2}(,\\d{3})*))|0)(\\.\\d{1,2})?$">
            </div>
          </div>
  <button class="btn grey darken-2">Generate Invoice</button>
  </form>
  <br>
   <?php 
   echo "Current Date: $formatDate<br>"; 
   ?>
   <script>
   src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"
   integrity="sha256-vIL0pZJsOKSz76KKVCyLxzkOT00vXs+Qz4fYRVMoDhw="
   crossorigin="anonymous"
   </script>
   
   <script>
   const pdf = new jsPDF();


   let button = document.querySelector('button');

   button.addEventListener('click', printPDF)

   function printPDF() {
     console.log('test')
   }
   </script>
  </div>
</main>

 <?php
 require"includes/footer.php";
  ?>
