<?php
    session_start();
    require "header.php";
    //nothing
?>
<!DOCTYPE html> 
<html> 
    <head> 
        <link rel="stylesheet" 
              href= 
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
              integrity= 
"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
              crossorigin="anonymous" /> 
  
        <style> 
            .my-menu { 
/*Sets all the content of dropdown div to center*/ 
                text-align: center;  
            } 
        </style> 
    </head> 
  
    <body> 
<!-- my-menu class is added to dropdown div for styling-->
        <div class="dropdown my-menu"> 
            <button class="btn btn-secondary  
                           dropdown-toggle"  
                    type="button"
                    id="dropdownMenuButton" 
                    data-toggle="dropdown" 
                    aria-haspopup="true" 
                    aria-expanded="false"> 
                SELECT A BUNDLE
            </button> 
            <div class="dropdown-menu" 
                 aria-labelledby="dropdownMenuButton"> 
                <a class="dropdown-item" 
                   href="#">MINI BUNDLE</a> 
                <a class="dropdown-item" 
                   href="#">MEGA BUNDLE</a> 
                <a class="dropdown-item" 
                   href="#">ULTRA BUNDLE</a> 
            </div>

        </div> 
  
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
                integrity= 
"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
                crossorigin="anonymous"> 
      </script> 
        <script src= 
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
                integrity= 
"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
                crossorigin="anonymous"> 
      </script> 
        <script src= 
"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
                integrity= 
"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
                crossorigin="anonymous"> 
      </script> 
    </body> 
</html> 
<?require "footer.php"?>