<?php
class person {
    public $name;
    public $age;
    
    public function __construct($name,$age)
    {
      $this->name =$name;
      $this->age=$age; 
    }
    public function Details()
    {
        echo "This is the name of  a person\n".$this->name ."\n";
        echo "This is the age of a  person\n".$this->age ."\n";
    }
    
}
$per = new person("Athira","90");
$per->Details();

class student extends person{
    public $mark;


    public function printing()
    {
    echo "just a inherited class\n";
    }
}
$std = new student("ammu","89");
$std->printing();




class employee{
    public $name1;
    public $salary;

    public function  __construct($name1,$salary)
    {
        $this->name1=$name1;
        $this->salary=$salary;
    }
    function showDetails()
    {
        echo " name of the employee\n".$this->name1;
        echo  "\nsalary is\n".$this->salary;
    }
    public  function __destruct()
    {
        echo "\ngood by!!!\n";
    }

}
$emp = new employee("Athira","500000");
$emp->showDetails();

class manager extends employee
{
    public $department ;
    public function __construct($name1,$salary,$department)

    {





        
        $this->name1=$name1;
        $this->salary=$salary;
        $this->department=$department;
        parent::__construct($name1,$salary);    #calling parent class

    }  
    public function showDetails()
    {
        parent::showDetails();

        echo "department is". $this->department;

        
    }
    
}
$mgr = new manager("ERF","60000","HR");
$mgr->showDetails();


