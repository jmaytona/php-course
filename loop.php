<?php

/*Types of Loop
    -for Loop
    -while Loop
    -do while Loop
    -foreach Loop*/

//For Loop, Parameter= (initializer, condition, increment)

/*for($i = 0;$i < 10;$i++){
    echo $i;
    echo '<br>';
};*/

//While Loop, Parameter=(Condition)

/*$i = 0;

while($i<15){
    echo $i;
    echo '<br>';
    $i++;
}*/

//Do While Loop

/*
$i = 0;

do {
    echo $i;
    echo '<br>';
    $i++;
}

while($i<20);
*/

//foreach loop - for arrays

/*
$ff15Characters = array('Noctis', 'Prompto', 'Gladio', 'Ignis');

foreach($ff15Characters as $character){
    echo $character;
    echo '<br>';
}
*/

$ff15Characters = array('Noctis' => 'Prince', 'Prompto' => 'Crownsguard', 'Gladio' => 'Crownsguard', 'Ignis' => 'Crownsguard');

foreach($ff15Characters as $character => $role){
    echo $character.': '.$role;
    echo '<br>';
}


















?>