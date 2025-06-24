<?php
interface  Vehicles{
    public  function move();
    public  function getType();
}
class Car implements Vehicles{
    public function move(){
        echo "car moves with engine\n";


    }
    public function getType(){
        echo "car\n";
    }

}
class Bicycle implements Vehicles{
    public function move(){
        echo " Bicycle didnt have engine ";
          
    }
    public function getType()
    {
           echo "\nBiCyle\n";
    }

}
$ob =new Car();
$ob->move();
$ob->getType();

$ob1 =new Bicycle();
$ob1->move();
$ob1->getType();

?>