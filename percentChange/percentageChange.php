<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percent Change</title>
    <style>
       #header{text-shadow: 2px 2px blue;font-weight:bold;font-size:3vw; text-align:center}
       #container{background-color:rgba(0,0,0,0.7); padding:20px 10px};
       #submitWrap{display:flex; justify-content:center}
 #submit
 {
     background-color:rgba(0,0,230,0.8); 
 border:2px black solid;
 padding: 10px 15px; 
 border-radius:10px
 }
 #submit:hover{background-color: rgba(0,0,230,1)}
    </style>
</head>
<body onload="submission()">
    <div id="container">
    <div id="header">
        <h1>Percentage Change!</h1>
    </div>
    <p style="font-size:2.4vw; text-align:center; color:white; text-shadow:2px 2px black">
    <?php 
    // calling the function
    percentChange($pPrice, $cPrice);
    ?>
    </p>
    <h1 style="color:white;text-align:center">
    Do you want to invest again?<br>
    Click the button below!

</h1>
   <div style="display:flex;justify-content:center"><span style="color:white;font-size:4em;">&#129147;</span></div>
    <div style="display:flex;justify-content:center">
    <!-- Allows user to resubmit the form in a new tab -->
    <form action="index.php" target="_blank">
        <input type="submit" value="Try again!" id="submit">
    </form>
    </div>
</div>

<script>
function submission(){
    alert("Your results have been submitted!")
}
</script>
</body>
</html>