<?php

class Animal {
    // Properties
    public $name;
    public $age;

    // inside our Animal class right after the properties
function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
}


       
       
 
    // Methods
    function set_name($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }

    function set_age($age) {
        $this->age = $age;
    }
    function get_age() {
        return $this->age;
    }

 // inside of class Animal {
    function echoNameAndAge() {
        echo "$this->name is $this->age years old </br>";
    }


  // inside our Animal class below the __construct method
  function __destruct() {
    echo "$this->name is no longer being used, so it's getting destroyed </br>";
}



}
 

// outside our Animal class, create a new Animal object using the __construct method


 /*
$fido = new Animal();
$fido->set_name("Fido");
$fido->set_age(7);*/
// becomes

/*echo $fido->get_name() . "</br>";
echo $fido->get_age() ."</br>";"</br>";*/



/*$farley->set_name("farley");
$farley->set_age("10");
echo $farley->get_name() . "</br>";
echo $farley->get_age() . "</br>";*/


