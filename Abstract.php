<?php
abstract class Festivel{
    public $name;

    public  function __construct($name)

    {
    $this->name = $name;    
    }
    abstract public function celebrate ();
}



#child class
class Diwali extends Festivel
{
    public function celebrate()
    {
        echo "sweet festivel\n".$this->name;
        
    }
}
$fest1 = new Diwali("Diwali");
$fest1->celebrate();
class Xmas extends Festivel
{
   public function celebrate()
    {
        echo " festivel".$this->name;
    } 
}
$fest = new Xmas("Xmas");
$fest->celebrate();






abstract class Brand {
    public $brand;

    public function __construct($brand)
    {
        $this->brand =$brand;
    }
    abstract public function functionality ();
     public function showbrand()
     {
        echo " This is for ". $this->brand;
     }
}
