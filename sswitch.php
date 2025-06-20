
<?php
#switch statement

$fruit = "Mango";
switch($fruit) 
{
    case "Mango";
    echo "fruit is Mango"."\n";
    break;
    case "Bannana";
    echo "Fruit is Bannana"."\n";
    break;
    case "Apple";
    echo "Fruit is Apple"."\n";
    break;
    default:
    echo "you didnt like any fruit "."\n";

}
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
  case "blue":
    echo "Your favorite color is blue!";
    
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}