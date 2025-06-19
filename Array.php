<?php 
$cars= array("toyoto","bmw");
var_dump($cars);

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
