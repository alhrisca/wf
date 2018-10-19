<?php

$input;
$winner;
//Algorithm
/*
1. declare brother A and B
2. for each row in the input
explode the row as brother A card and brother B card

3. If the brother A card is upper than the brother B card add a
point to the brother A, else if the brother B card is upper, give a point to brother B
4. Set the winner as greater brother value
*/

// declare variables for the brothers
$A = 0;
$B = 0;
//giving points to one that has higher value
foreach ($input as $time){
    list($a, $b) = $time; // $time = [1,2];
    if ($a > $b){
        $A++;
    } else {
        $B++;
    }
    //declare the winner
    if($A > $B){
       $winner = 'A';
    } else{
       $winner = 'B';
    }
};


?> 