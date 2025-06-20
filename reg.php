
<?php
$str = "athira";
$pattern = "/Athira/";#without case  sensitive
echo preg_match($pattern, $str); 
$str = "athira";
$pattern = "/Athira/i";#witcase  sensitive output is
echo preg_match($pattern, $str); 

#preg_match_all
$str1 = "the plain crash because of the train\n";
$pattern = "/ain/";
echo preg_match_all($pattern, $str1);

#preg_replace
$str1 = "find me \n";
$pattern = "/me/i";
$result = preg_replace($pattern,"!!!", $str1);
echo $result;



?>