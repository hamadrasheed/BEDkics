<!DOCTYPE html>
 
 
<body>





<?php
    
    $units = 161;

    $first = 3.50;
    $second = 4.00;
    $third = 5.20;
    $fourth = 6.50;

 
    if($units <= 50) {
        $bill = $units * $first;
        
        echo "The price of $units units is rupees $bill";
    }
    else if(($units > 50) && ($units <= 100)) {
        $temp = 50 * $first;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $second);
        
        echo "The price of $units units is rupees $bill";
    }
    else if(($units > 100) && ($units <= 200)) {
        $temp = (50 * 3.5) + (100 * $second);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $third);
        echo "The price of $units units is rupees $bill";
    }
    else {
        $temp = (50 * 3.5) + (100 * $second) + (100 * $third);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $fourth);
        echo "The price of $units units is rupees $bill";
    }
    
 

?>



 </body>
</html>