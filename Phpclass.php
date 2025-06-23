<?php

class Car {  // Define a class
    public $name;  // Property of the class

    function setName($name) {
        $this->name = $name;
    }

    function showName() {
        echo "Car name: " . $this->name;
    }
}

$myCar = new Car();           // Object creation
$myCar->setName("BMW");       // Set name
$myCar->showName();           // Show name
?>




    