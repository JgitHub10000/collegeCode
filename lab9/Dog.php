<?php

include_once("Animal.php");



class Dog extends Animal {
    public function convertAge() {
        $convertedAge = $this->age * 7;
        echo "The dog $this->name is $this->age years old, which is $convertedAge dog years!</br>";
    }
}
 
$pochi = new Dog('Pochi', 7);
$pochi->convertAge();



$spot = new Animal('Spot', 3);
$spot->echoNameAndAge(); 

$fido = new Animal("Fido", 7);
$fido->echoNameAndAge();

$farley = new Animal("farley", 10);
$farley->echoNameAndAge();

