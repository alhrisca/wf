<?php
$password;
$salt;


$mid = floor(strlen($password)/2);
$firstPart = substr($password, 0, $mid);
$lastPart = substr($password, $mid, strlen($password)-1);

$saltedPassword = $firstPart . $salt . $lastPart;
?>
