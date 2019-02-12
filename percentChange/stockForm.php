
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stock Form</title>

 <style>
 fieldset{background-color:rgba(0,0,0,0.7); padding:70px 10px}
 .dollarSign{font-size:2.5vw;text-shadow:2px 2px green;font-weight:bold}
 #header{text-shadow: 2px 2px blue;font-weight:bold;font-size:3vw}
 input{font-size:1.6vw}
 #submitWrap{display:flex; justify-content:center}
 #submit
 {
     background-color:rgba(0,0,230,0.8); 
 border:2px black solid;
 padding: 10px 15px; 
 border-radius:10px
 }
 #submit:hover{background-color: rgba(0,0,230,1)}
 .class
 {
     border-radius:13px;
     padding:10px;
     border:2px black solid
}

::placeholder{color:rgba(51,51,51,0.8); font-weight:bold}
.successStar, .successStar2{color:green; font-size:2.8vw;font-weight:bold;opacity:0;position:absolute;right:36.3%;}
.errorStar, .errorStar2{color:red; font-size:1.9vw; visibility:hidden}
 
 </style>

    <?php if (!$validateP || !$validateP == " ") { // if not a number change the previous input box to red
        ?>
        <style>
        .class:nth-child(3){ /*this selector is confusing, apparently the first input is the 3rd child*/
            background-color:rgba(255,0,0,0.8);
            }
        .errorStar{visibility:visible} /* shows the red star */
            </style>
        <?php 
    }else if($validateP && !empty($_GET['pPrice'])){
        ?> <style>
        .successStar{opacity:1} /* shows the green check mark */
        </style>
        <?php
    }
    if (!$validateC || !$validateC == " ") { // if not a number change the current price input box to red
         ?>
        <style>
        .class:nth-child(8){ /*confusing selector*/
            background-color:rgba(255,0,0,0.8) 
            }
        .errorStar2{
            visibility:visible /* shows the red star */
        }
            </style>
        <?php
    } else if ($validateC && !empty($_GET['cPrice'])) {
        ?> <style>
        .successStar2{opacity:1}
        </style>
        <?php

    }
    if(!$validateP && !$validateC){ // if both don't fit the criteria

        ?>

<style>
        .class:nth-child(4){
            background-color:rgba(255,0,0,0.8)
            }
        .errorStar2{
            visibility:visible
        }

        .class:nth-child(2){
            background-color:rgba(255,0,0,0.8);
            }
        .errorStar{visibility:visible}
            </style>
        <?php
    }
    
    
?>
     

    
</head>

<body>
<fieldset>
    <!-- Centers the form -->
<div style="display:flex;justify-content:center;"> 
    <!-- ________________________________________ -->
    <form action="index.php" method="get">
        
        <h2 id="header" style="text-align:center">Stock Change</h2>
        

      <span class="dollarSign">	&#128176;</span>  <input type="text" name="pPrice" placeholder="Enter the previous price" 
        
        <?php 
        // retains values after submission if they're valid
        if ($validateP && !$pPrice == 0){ //if valid
            echo "value=$pPrice"; // add value to the input
        }
        else{
            echo "autofocus"; // if previous price isn't valid, put the user in the previous price box
        }
        
         
          ?> class="class"><span class="errorStar">*</span><span class="successStar">&#10003;</span><br> <!-- Hidden error star and checkmark -->


        
        

    <span class="dollarSign">&#128176;</span>    <input type="text" name="cPrice" placeholder="Enter the current price" 
        <?php 
        // Same exact format at the previous price, if set correct keep value if not, autofocus
        if ($validateC && !$cPrice == 0) { 
            echo "value=$cPrice";
        }
        else{
            echo "autofocus";
        }
        
        ?>
        
        class="class"><span class="errorStar2">*</span><span class="successStar2">&#10003;</span><br>
        <!-- wrapper to center submit button -->
        <div id="submitWrap">
        <input type="submit" value="Invest" id="submit">
        </div>
        
    
    </form>
    </div>
    </div>
    <?php 
   
    ?>


</body>
        
</html>