<?php




// Answer to the question no- 01
function evenOdd($n){
    if($n%2==0){
        return true;
    }
    return false;
    
}

$x = 13;

if ( evenOdd($x)){
    echo "{$x} is an Even number";
}else{
    echo "{$x} is an Odd number";
}


echo PHP_EOL;

// Answer to the question no- 02




    
    $firstNumber = 1;
    $lastNumber = 100;
    
    $sum = 0;
    for ($i = $firstNumber; $i <= $lastNumber; $i++) {
        $sum += $i;
    }
    
    echo "Sum from {$firstNumber} to {$lastNumber} = {$sum}";
