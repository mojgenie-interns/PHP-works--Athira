<?php

class Laptop{
    public $ram;
    public $brand;
    public $price;

    public function __construct($ram,$brand,$price)
    {
       $this->ram=$ram;
       $this->brand=$brand;
       $this->price=$price; 
    }
    public function showDetails()
    {
        echo " ram =".$this->ram;
        echo " brand =\n".$this->brand;
        echo " price =".$this->price;


    }

}
$lap= new laptop("6GB","HP","78945");
$lap->showDetails();




interface Appliance
{
    public function shape(); // interface requires this method
}

class Circle implements Appliance
{
    
    public function shape()
    {
        echo "\nThis is a circular shape\n.";
    }

    // Additional method
    public function area()
    {
        echo "Circle area calculation\n.";
    }
}

$obj = new Circle();
$obj->shape(); // Output: This is a circular shape.
$obj->area();  // Output: Circle area calculation.


#abstract class
abstract class Device
{
    public $brand1;
    public function __construct($brand1)
    {
     $this->brand1=$brand1;
       
    }
    abstract public function specs(); 
   

     public function showBrand()
    {
        echo "Brand name is: " . $this->brand1 . "\n";
    }

}

class Phone extends Device
{
    public function specs()
    {
        echo "This laptop has 8GB RAM and i5 processor.\n";
    }
}

$obj1 = new Phone(" hp");
$obj1->showBrand(); 