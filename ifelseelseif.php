<?php
#if elseif else statement
$mark = 100;
if ($mark >= 90){
    echo "You have A grade\n";
}elseif ($mark >=70){
    echo "you got B grade\n";
}else 
echo "you Failed!!\n";




$num1 = 10;
$num2 = 25;
$num3 = 15;

if ($num1 >= $num2 && $num1 >= $num3) {
    echo "The largest number is: $num1";
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    echo "The largest number is: $num2";
} else {
    echo "The largest number is: $num3";
}

$ag = readline("enteer your age");
if ( $ag>= 18){
    echo ("you can vote\n");
   
}
?>
