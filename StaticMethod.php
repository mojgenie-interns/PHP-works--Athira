<?php
class Myclass
{   
    public static $count = 0;
    public static function staticName()  #Static method
    {
        echo "Using static method\n";
        echo " print the value of count =".self::$count;#accesing static property 
    }
    public  function showDetails(){   #normal method or regular method.
        echo " print something";
    }
}
$my=new Myclass();
$my-> showDetails();
Myclass::staticName();#calling static method 
