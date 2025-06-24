<?php
abstract class SmartDevice
{
    public $property;
    public function __construct($property)
    {
        $this->property=$property;
    }
    abstract public function Status();

}
trait Switchable
{
    public function turnOn()
    {
        echo"Device is ON\n";
    }
     public function turnOff()
    {
        echo"Device is Off\n";
    }
}
class SmartLight extends SmartDevice
{
    use Switchable;
    public function Status()
    {
        echo " Light  is operational\n";
    }
}
class smartFan extends SmartDevice
{
    use Switchable;
    public function Status()
    {
        echo " fan is operational\n";
    }
}
$Li = new SmartLight("speed");
$Li->Status();
$Li->turnOff();
$Li->turnOn();

$fa = new smartFan("speed");
$fa->Status();


