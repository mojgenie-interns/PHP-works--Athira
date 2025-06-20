<?php 
$x = 5;
function Print_1() {
    echo "the value of x is $x","\n ";
} 
Print_1();
echo " the value of $x\n "; # global scope


function my_Test(){
   $y = 10; 
   echo " the value of y is $y";
}
my_Test();
echo "the value of y is $y";#local scope

