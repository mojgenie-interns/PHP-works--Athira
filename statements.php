<?php 

#if statement


$age = readline("Enter your age: ");
if ($age >= 20) {
    echo "You're a major\n";
}

#comparison operators
$a = 23;
if ($a == 23)
{
    echo "True\n";
}

$t = 24;
if  ($a <> $t)
{
    echo "$a and $t are not equal\n";
}

#else  statements
$age = readline("Enter your age: ");
if ($age >= 20) {
    echo "You're a major\n";
} else 
  echo "You're a minor\n";
   