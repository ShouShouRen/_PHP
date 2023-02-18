<?php
$file = "example.txt";

if($handle = fopen($file,'w')){
    fwrite($handle,'I love PHP .');
    fclose($handle);
}else{
    echo "The files could not be written";
}
