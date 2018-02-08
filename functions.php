<?php

#Function is a block of code that can repeatedly called

/*Programmers different format for variables, classes, function
    -Camel Case = myFunction()  -Widely used format
    -Lower Case = my_fucntion() -More on codeigniter framework
    -Pascal Case = MyFunction() -used for object/classes */

//Run simple function
function simpleFunction() {
    echo 'Hi im\'a function!<br>';
}

simpleFunction();

//function with params

function sayHello($name = 'World!') {
    echo "Hello $name<br>";
}

sayHello('Noctis!');
sayHello('Ardyn!');
sayHello();

//return value

function addNumber($num1, $num2){
    return $num1 + $num2;
}

echo addNumber(99,1);

//by reference

$five = 5;

function plusFive($num){
    $num += 5;
}

function plusTen(&$num){
    $num += 10;
}

plusFive($five);

echo "<br>Value: $five<br>";

plusTen($five);

echo "Value: $five<br>";

?>
