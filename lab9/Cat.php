<?php

include_once("Animal.php");




class Cat extends Animal {
    public function amoutOfTimeSpentSleeping(){
        $amoutOfTimeSpentSleeping = $this->age * 365*15;
        echo "The cat $this->name is $this->age years old, and has spent $amoutOfTimeSpentSleeping hours sleeping </br>";
    }
}

$milo = new Cat('Milo', 4);
$milo->amoutOfTimeSpentSleeping();


