<?php
# to open a  file
$file = fopen("C:\Users\athir\Downloads\ProFace.pdf","r");
if($file)
{
    echo "File is opened succesfully";

}else
    echo "File cannot be opwned\n";
fclose($file);
echo " file is closed";