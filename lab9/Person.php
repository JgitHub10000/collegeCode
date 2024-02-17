<?php

class Person {
    public $firstName;
    protected $middleName;
    private $lastName;
    public $fullName;
 
    public function set_firstName($name) {
        $this->firstName = $name;
    }
    protected function set_middleName($name) {
        $this->middleName = $name;
    }
    private function set_lastName($name) {
        $this->lastName = $name;
    }
 
    function get_firstName() {
        return $this->firstName;
    }
    function get_middleName() {
        return $this->middleName;
    }
    function get_lastName() {
        return $this->lastName;
    }
 
    private function set_fullName() {
        $this->fullName = "$this->firstName $this->middleName $this->lastName";
    }
    public function get_fullName() {
        $this->set_fullName();
        return $this->fullName;
    }
 
}
 
$robin = new Person();
$robin->set_firstName("Robinson");
$robin->set_middleName("James");
$robin->set_lastName("Clower");
 
echo $robin->get_fullName();










/*class Person {
    public $firstName;
    protected $middleName;
    private $lastName;
    public $fullName;
 
    public function set_firstName($name) {
        $this->firstName = $name;
    }
    public function set_middleName($name) {
        $this->middleName = $name;
    }
    public function set_lastName($name) {
        $this->lastName = $name;
    }
 
    function get_firstName() {
        return $this->firstName;
    }
    function get_middleName() {
        return $this->middleName;
    }
    function get_lastName() {
        return $this->lastName;
    }
 
    private function set_fullName() {
        $this->fullName = "$this->firstName $this->middleName $this->lastName";
    }
    public function get_fullName() {
        $this->set_fullName();
        return $this->fullName;
    }
 
}

   /*change out what used to be here for this code:
    public function set_fullName($name) {
        $this->fullName = $name;
    }
    public function get_fullName() {
        return $this->fullName;
    }
}*/



 /*
$robin = new Person();
$robin->set_firstName("Robinson");
$robin->set_middleName("James");
$robin->set_lastName("Clower");
//$robin->set_fullName("Franklin Delano Roosevelt");
 
echo $robin->get_fullName();


*/

