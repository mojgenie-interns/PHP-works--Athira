<?php 
interface shape 
{
    
    public function calculateArea();
}
class circle implements shape
{
    public function calculateArea()
    {
        
    } 
    
}
class rectangle implements shape
{
    public function calculateArea()
    {
        
    }
}


interface animal
{
    public function makeSound();
}
class Dog implements animal
{   
    
    public function makeSound()
    {
      echo " dog says bow\n"  ;
    }
}
class Cat implements animal
{
    public function makeSound()
    {
        echo "cat says meow";
    }
}
$obj1=new Dog();
$obj1->makeSound();
$obj2=new Cat();
$obj2->makeSound();
