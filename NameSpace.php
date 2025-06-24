<?php
namespace MyApp;
class Car
{
    public function drive()
    {
        echo "car for driving\n";
    }
}
namespace MyApp1;
class Jeep
{
    public function drive()
    {
        echo " jeep is  also for driving\n";
    }

}

$dri = new \MyApp\Car;
$dri->drive();
$driv = new \MyApp1\Jeep;
$driv->drive();

