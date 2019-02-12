<?php include "functions.php"; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
    .error{color:red;font-weight:bold}
    body{background-image:url(image/bg.jpg); background-size:cover}
    </style>
</head>
<body>
    <div style="text-align:center;text-shadow:2px 2px blue">
    <?php

   todaysDate();
    
    ?>
    </div>

   
 <?php
 //Default variables so that stockForm.php can call them when needed
$error = " ";
$pPrice = 0;
$cPrice = 0;
$validateC = " ";
$validateP = " ";

             
     if(!isset($_GET['pPrice']) || (!isset($_GET['cPrice']))){ //if not set show stockForm.php
         include "stockForm.php";
         
     }
     if(isset($_GET['pPrice']) && isset($_GET['cPrice'])){ //checks to see if they're set
         // gets the form data
        $pPrice = $_GET['pPrice'];
         $cPrice = $_GET['cPrice'];
         //variables for invalid inputs
         $validateP = filter_input(INPUT_GET, 'pPrice', FILTER_VALIDATE_FLOAT);
         $validateC = filter_input(INPUT_GET, 'cPrice', FILTER_VALIDATE_FLOAT);
         // variables for empty inputs
         $emptyP = empty($_GET['pPrice']);
         $emptyC = empty($_GET['cPrice']);
         if($emptyP  && $emptyC){ //if form is empty, could've just used required attribute
             include "stockForm.php"; //each include refreshes if there's an error
             echo "<h2 class='error'>Please make sure you fill out all the fields!</h2>";
             
          
             
         }
         else if(empty($_GET['pPrice'])){ // previous is empty
             include "stockForm.php";
              $error = "<h2 class='error'>Previous price can't be empty!</h2>";
        
         }
         else if(empty($_GET['cPrice'])){ // current is empty
             include "stockForm.php";
             $error = "<h2 class='error'>Current price can't be empty!</h2>";
          
             
         }
         else if(!$validateP && !$validateC){ //aren't numbers
             include "stockForm.php";
              $error = "<h2 class='error'>Please enter numbers only!</h2>";
        
         }
         else if(!$validateP){ // previous isn't a number
            
             include "stockForm.php";
            $error = "<h2 class='error'>Previous Price must be a valid number!</h2>";
       
         }
         else if(!$validateC){ // current isn't a number
            
             include "stockForm.php";
            $error = "<h2 class='error'>Current Price must be a valid number!</h2>";
          
         }
         else {
             include "percentageChange.php"; // if not errors then display percentageChange.php
             

             
         }
         
     }
     echo $error; //Prints errors if neccesary
             
     
?>




</body>
</html>
