<?php

$file = "example.txt";
if($handle = fopen($file,'r')){
    $content = fread($handle,10);
    fclose($handle);    
}else{
    echo "The application was not able to write on the file";
}