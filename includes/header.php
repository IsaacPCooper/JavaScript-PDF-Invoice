<?php
session_start();
/*
 * The timezone is set based upon the most common UK timezone,
 * This allows the default timezone to be changed,
 * Even if the server location is different to the User's Location.
 * The date is identified within the header so that it loads first on every page in this case.
 */
date_default_timezone_set('Europe/London');
/* Date and time are set as there own class
 * This allows them to be used as standard variables,
 * The formatted varients are only used to display to the user.
 */
 
$date = date();
$time = time();
$formatDate = date("D m-y");
$formatTime = date("H:i:s");

?>
<!DOCTYPE html>
 <html>
   <head>
     <title>JS Invoice</title>
     <link
      rel="icon"
      type="image/jpg"
      href="https://icon-library.net/images/php-icon-png/php-icon-png-12.jpg"
    />
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- Import Google Font(s)-->
     <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200 ,700" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     <!--Import MyStyleSheet-->
     <link type="text/css" rel="stylesheet" href="css/myStyleSheet.css">
     <!--Icon-->
     <link rel="icon" href="favicon.ico" type="image/x-icon"/>
     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <script type="text/javascript" src="js/myjs.js"></script>
     <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <script type="text/javascript" src="js/materialize.min.js"></script>
     <script type="text/javascript" src="js/materialize.js"></script>
     <script type="text/javascript" language="javascript">
          $( document ).ready(function(){
              $(".button-collapse").sideNav();//mobile screen menu init
              $('.carousel').carousel(); //carousel init
              $('.carousel-slider').slider({full_width: true});//slider init
          });
      </script>
   </head>
  
     <!--Navbar-->
     <body class = "ibg gfont1">
       <header>
       <!--Dropdown content begin-->
       <ul id="dropdown3" class="dropdown-content">
       </ul>
       <ul id="dropdown6" class="dropdown-content gfont1">
       </ul>
       <!-- Dropdown content end-->
       <!--Navbar Begin-->
       <nav>
         <div class="nav-wrapper grey darken-2">
           <a href="index.php" class="align center brand-logo gfont1">JavaScript Invoice</a>
         </div>
       </nav>
       </body>
     </header>