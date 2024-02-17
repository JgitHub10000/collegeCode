<?php
//echo "que pasa world";

//Create 5 variables relating to a hobby you have, make sure at least 1 is a string, 2 are numbers, and 1 is a boolean


//Disc Golf App 
/*echo $DiscPlayerName= "John";//string players name
echo $currentHole= 7  ;//integer
echo $distanceToPin= 150; //integer in yards
echo $currentScore= -6;//integer above or below par
echo $isWinning= 1;//boolean (1==yes 0==no)*/


/*You can have decisions based on true or false statements
    if ($age >= 21) {
        echo "This person can drink";
    } else {
        echo "This person can't drink";
    }
*/


$number = 9;


if ($number % 3 == 0 && $number %5 == 0) {
    echo "BY3 AND 5";
} elseif ($number % 3 == 0)  {
echo "BY3";
} elseif ($number % 5 == 0) {
echo "BY5";
}

