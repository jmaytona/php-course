<?php

#$newDate = date('d'); //day
#$newDate = date('D'); //Day Letters
#$newDate = date('m'); //month
#$newDate = date('M'); //Month Letters
#$newDate = date('Y'); //Year
#$newDate = date('l'); //Day of the week

/*$newDate = date('d/m/Y-l');
echo $newDate;*/

#$newTime = date('h'); //hour
#$newTime = date('i'); //minutes
#$newTime = date('s'); //seconds
#$newTime = date('a'); //AM or PM

/*$newTime = date('h:i:s-a');
echo $newTime;*/

//Time Stamp

/*$timeStamp = mktime(10, 14, 9, 10, 8, 2007);
echo date('m/d/Y-h:i:s:a', $timeStamp);*/

//Time to String

$timeStamp1 = strtotime('7:00am March 27 2016');
$timeStamp2 = strtotime('tomorrow');
$timeStamp3 = strtotime('Next Year');
$timeStamp4 = strtotime('+2 days');
$timeStamp5 = strtotime('+2 months');
$timeStamp6 = strtotime('Next Sunday');

echo date('d/m/Y h:i:sa', $timeStamp6);

?>