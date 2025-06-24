<?php
trait Greeting
{   
    
    
    public function sayHello()
    {
        echo "Hello\n";
    }
}
trait Invite
{
    public function sayHey()
    {
        echo "Hey \n";

    }
}
class person
{
    use Greeting;
}
class robert
{
    use Greeting ,Invite;  #multiple traits
}
$gr = new robert();
$gr->sayHello();
$gr->sayHey();