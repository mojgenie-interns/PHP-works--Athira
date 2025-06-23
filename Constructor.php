<?php
 class car{
    public $name;
    public $color;
    public $model;
    public $newname;

    public function __construct($name,$color,$model,$newname){
        $this->name=$name;
        $this->color =$color;
        $this->model =$model;
        $this->newname =$newname;


   }
    function setName($newname){
       $this->newname =$newname;

    }
    function getName()
    {
      echo " name of the car\n".$this->name;
      echo " color of the car\n".$this->color;
      echo " model of the car\n".$this->model;
    }
    function showDetails($newname)
    {
        echo " my new name\n".$this->newname."\n";
    }
 }
 $myCar =new car("bmw\n","white\n","9098-TT\n","toyoto");

 $myCar->setName("fgh");
 $myCar->showDetails("athira");
 $myCar->getName();
 ?>
 