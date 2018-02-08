<?php //Arrays

/*3 types of Arrays
    -Indexed
    -Associative
    -Multi-dimensional*/

//Indexed Arrays

$people = array('Noctis', 'Prompto', 'Ignis', 'Gladio');
$IDs = array(22, 23, 55, 8, 45, 12);
$car = ['BMW', 'Audi', 'Toyota', 'Honda'];
$car[4] = 'Ford';
$car[] = 'Suzuki';

//echo $people[2];
//echo $car[5];
//echo $IDs[5];

//echo count($IDs);
//print_r($car);
//var_dump($people);

//Associative Arrays

$ff15 = array('Noctis' => 'Prince', 'Prompto' => 'Crowns Guard', 'Gladio' => 'Crowns Guard', 'Ignis' => 'Crowns Guard');
$ff8 = [25 => 'Squall', 28 => 'Quistis', 23 => 'Rinoa', 45 => 'Edea'];
$ff8[24] ='Zell';

//print_r($ff8);
//echo $ff15['Prompto'];
//echo $ff8[24];

//Multi-Dimensional Arrays

$Prompto = array(
    array('STR'=> 40, 'VIT'=> 40, 'MAG'=> 60),
    array('Great Sword'=> 100, 'Dagger'=> 40, 'Spear'=> 60),
    array('Fire'=> 50, 'Fira'=> 75, 'Firaga'=> 100)
);

$Noctis = [
    $Stats = ['STR'=> 60, 'VIT'=> 40, 'MAG'=> 50],
    $Weapon = ['Great Sword'=> 100, 'Dagger'=> 40, 'Spear'=> 60],
    $Magic = ['Fire'=> 40, 'Fira'=> 65, 'Firaga'=> 90]
];

//echo $Noctis[0]['STR'];
echo $Prompto[0]['STR'];












?>
