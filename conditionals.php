<?php

//Simple If else statement
$num = 25;

/*
if($num == 5){
    echo 'Number is 5';
} else {
    echo 'Number is not 5';
}
*/

//Exclusive OR

/*if($num = 23 XOR $num = 24){
    echo 'Both are not true';
} else {
    echo 'Exclusive OR needs to have one false and one true';
}*/

//With Comparison

/*if($num > 5 && $num < 15){
    echo "Number is $num and within range";
} else if ($num > 43 || $num < 15) {
    echo 'Not sure if it\'s still in range';
} else {
    echo 'Out of Range';
}*/

//Switch

switch($num){
    case 4:
        echo 'case 1 is good';
        break;
    case 45:
        echo 'case 2 is good';
        break;
    case 25:
        echo 'case 3 is good';
        break;
    default:
        echo 'All case is bad';
}

?>