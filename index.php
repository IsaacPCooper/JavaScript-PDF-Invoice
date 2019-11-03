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
            <input id="txtChar"  onkeypress="return isNumberKey(event)" placeholder="0.00"  
            type="text" class="validate" name="txtChar" maxlength="8"
            pattern="^\\$?(([1-9](\\d*|\\d{0,2}(,\\d{3})*))|0)(\\.\\d{1,2})?$">
            </div>
          </div>
  <button class="btn grey darken-2">Generate Invoice</button>
  </form>
  <script 
  src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js" 
  integrity="sha256-gJWdmuCRBovJMD9D/TVdo4TIK8u5Sti11764sZT1DhI=" 
  crossorigin="anonymous">
  </script>
  <br>
   <?php 
   echo "Current Date: $formatDate<br>"; 
   ?>
  <script>
   const pdf = new jsPDF();

  // select the button
   let button = document.querySelector('button');

   // select the input
   let input = document.querySelector('input');

  // Listen for the users click
   button.addEventListener('click', printPDF)

   //perform print PDF fucntion w/ formatting
   function printPDF() {
     pdf.text(10,10, `You have paid £ ${input.value}`);

     pdf.save();
   }
   </script>
  </div>
</main>

 <?php
 require"includes/footer.php";
  ?>
