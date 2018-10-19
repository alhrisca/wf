<?php
$password;
$salt;


$mid = floor(strlen($password)/2);
$firstPart = substr($password, 0, $mid);
$lastPart = substr($password, $mid, strlen($password)-1);

$saltedPassword = $firstPart . $salt . $lastPart;
// another solution

/* 
$password;
$salt;

$firstPart = substr($password, 0, ceil(strlen($password)/2));
$lastPart = substr($password, floor(strlen($password)/2));

$saltedPassword = $firstPart . $salt . $lastPart;
*/
?>
