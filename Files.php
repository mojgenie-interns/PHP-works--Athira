<?php
# to open a  file
$file = fopen("C:\Users\athir\Downloads\ProFace.pdf","r");
if($file)
{
    echo "File is opened succesfully";

}else
    echo "File cannot be opened\n";
fclose($file);
echo " \nfile is closed";