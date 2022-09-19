<?php
/*--- File handling ---*/


/*
File handling is the ability to read and write files
on the server
php has build in functions for reading and writing files.
*/ 

$file = 'extras/another.txt';
if (file_exists($file)) {
    //echo readfile($file);
    $handle = fopen($file, 'r');
    $content = fread($handle, filesize($file));
    fclose($handle);
    echo $content;
} else {
    $handle = fopen('another.txt', 'w');
    $content = 'hassen' . PHP_EOL . 'sara' ;
    fwrite($handle,$content);
    fclose($handle);
}

?>