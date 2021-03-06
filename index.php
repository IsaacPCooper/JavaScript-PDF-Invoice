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
            <input onkeypress="return isNumberKey(event)" placeholder="0.00"  
            type="text" class="validate" maxlength="8">
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
    pdf.setFont("roboto");
    pdf.setFontType("bold");
    pdf.setFontSize(9);


  // setup button param for later ref
   let button = document.querySelector('button');

   // setup input param for later ref
   let input = document.querySelector('input');

   //Date Formatting (DD-MMM-YYYY)
   const months = ["JAN", "FEB", "MAR","APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"];
   let current_datetime = new Date()
   let formatted_date = current_datetime.getDate() + "-" + months[current_datetime.getMonth()] + "-" + current_datetime.getFullYear()
  
   // Listen for the users click
   button.addEventListener('click', printPDF)

   //perform print PDF fucntion w/ formatting
   function printPDF() {
     pdf.text(10,10, `Invoice Date: ${formatted_date}`);
     pdf.text(10,20, `Price paid: £ ${input.value}`);
     pdf.text(10,30, `10% Donation:  £ ${input.value*0.1}`);


     pdf.setProperties({
    title: "Generated Invoice"
      });

    //MOBILE PHONE CHECK V DESKTOP
      if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
      {
     var blob = pdf.output();
     window.open(URL.createObjectURL(blob));
      }
    else
    {
      pdf.output('dataurlnewwindow');
    }
     
   }
   </script>
  </div>
</main>

 <?php
 require"includes/footer.php";
  ?>
