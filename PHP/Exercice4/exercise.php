<?php
/*
 * $date = new DateTime('first day of current month at midnight');
$date = new DateTime('last day of current month');

$date->add(new DateInterval('+1day'));

//Y => year as 4 digits
//m => month as 2 digits
//d => day as 2 digits

//H => hours as 2 digits
//i => minutes as 2 digits
//s => seconds as 2 digits
$dateAsString = $date->format('Y-m-d H:i:s');

$firstEpochDay = DateTime::createFromFormat('Y-m-d', '1970-01-01');
 * */

//in my function, assuming two inputs parameters, year and month
function getAllMondaysOfMonth($year, $month){
    //	1. create a a date from year and month
    $date = DateTime::createFromFormat('Yn', $year.$month);
    //	2. go to first day of the month
    $date = new DateTime('first day of' .$date->format('F Y'));
    $arrayMondays=[];
    //3. if current day is not a monday, go to next monday
    $interval = DateInterval::createFromDateString('next monday');
    if ($date->format('N') != 1){
        $date->add($interval);
    }
    //4. while the date month is the needed month
    while ($date->format('n')==$month){
    //4.1 Add the date into an array
        array_push($arrayMondays, $date->format('l j, M Y'));
    //4.2 Go to next monday
        $date->add($interval);
    }
    //	5. return the array
    return $arrayMondays;
}