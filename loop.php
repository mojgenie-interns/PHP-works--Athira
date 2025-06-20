<?php
 $i = 10;
 for($i=0;$i<=10;$i++)   #condition
  echo "i is $i"."\n";

#while loop


$count = 2;
while ($count <= 5) {
    echo "Count is $count\n";
    $count++;
}


#do while
$count1 = 5;
do
{
    echo "do while loop\n";
}while($count1<= 4);

#for each
$choclates = array("perk","5-star","dairy milk","munch");
foreach($choclates as $choclate){
    echo "eating  $choclate"."\n";
}

$students = [
    "A101" => "Rahul",
    "A102" => "Priya",
    "A103" => "Neha"
];

foreach ($students as $roll => $name) {
    echo "Roll No: $roll, Name: $name\n";
}
