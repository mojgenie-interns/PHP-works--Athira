<?php

class Books{
    public $name;

    public function __construct($name){
    $this->name=$name;
}
   
  
   function showDetails() 
   {
    echo "the book is ".$this->name;
   }
   public function __destruct(){
   echo "Destroyed\n". $this->name;  
   
}
}
$obj = new Books("yekshi");

$obj->showDetails();
?>



