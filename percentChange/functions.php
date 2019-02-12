<?php
function todaysDate(){
    echo "<b><h1>Todays date is " . date('m/d/y'). "</h1></b>";
}

function percentChange($pPrice, $cPrice){
    $pc = round((1 - $pPrice / $cPrice) * 100, 1);
    if($pc < 0){
    echo "You've invested incorrectly! " . "<span style='color:red; font-weight:bold;'>" . abs($pc) . "%</span> loss in cash!";
    }
    else if($pc == 0){
        echo "You're running in place, <span style='color:blue;font-weight:bold; font-style:italic'>" . $pc . "%</span> change!";
    }
    else{
        echo "Good job investing, you've gained <span style='color:green;font-weight:bold;'>" . $pc . "%</span> in cash!";
    }
}

