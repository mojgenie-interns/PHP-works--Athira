<?php
class Person{
    public $age;
    public $name;
    public function __construct($age,$name)
    {
        $this->age=$age;
        $this->name = $name;

    }
    public function method()
    {
        echo " Age:  ".$this->age ."\n";
        echo "Name :".$this->name."\n";
    }


}
class Student extends Person{
    public $rollno;
    public function __construct($age,$name,$rollno)
    
    {
           $this->age=$age;
            $this->name = $name;
             
            $this->rollno=$rollno;
            parent::__construct($age,$name);

    }
    public function method()
    {
        parent::method();
        echo "RollNno ".$this->rollno;
    }


}

    
$pe= new Person("55","Ro","123");
$pe->method();  

$st= new Student("12","Adhi","134");
$st->method();  