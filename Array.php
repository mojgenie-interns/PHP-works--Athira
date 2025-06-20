<?php 
$cars= array("toyoto","bmw");
var_dump($cars);
$cars[] = "benz";
echo "$cars[2]";
$a = "day";
echo (" good $a\n");
echo ('good $a');

$S = "collection";
echo strtoupper($S);

$s = "collection\n";
echo strtolower($s);
$q = " hello world\n";

echo str_replace("world","athira",$q);
$a_i = "palindrome";


echo strrev($a_i);  #reverse
echo trim($q);


$d = " slicing a  string ";
echo substr($d,6,5);

#casting

$z = 100 ;
$z =(string)$z;
var_dump($z);
$x = "athira";
$x = (int)$x;
var_dump($x);

#Array Function


function MyArrayFunction()
{
    return "yeah!!, I’m a function stored as a string\n";
}

$ArrYFunc = array("car", "123", "MyArrayFunction");

echo $ArrYFunc[2](); 

#Associatve  Array
$Ass_Array = array("age"=>"19","name"=>"thira","class"=>"10");
echo $Ass_Array["age"];
$Ass_Array["age"] = 24;
var_dump($Ass_Array);




