<?php
abstract class Animal
{
    public $name;
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function showName()
    {
        echo " name ".$this->name;
    }
    abstract public function makeSound();
}

interface CanRun
{
   
}
class Dog extends Animal implements CanRun
{
    public  function makeSound()
    {
        echo " sound wowwww\n";
    }
     public function run()
    {
    echo "Run Bbaby Run\n";
    }
}


$do = new Dog("tommy");
$do->run();
$do->makeSound();
$do->showName();
