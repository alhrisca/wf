<?php

function easterReverse(){
    $res=fopen('file.txt','r+');
    $fileContent = fread($res, filesize('file.txt'));
    $reverseContent=substr($fileContent,floor(strlen($fileContent) / 2));
    $correctContent = strrev($reverseContent);
    
    fseek($res,floor(strlen($fileContent) / 2),SEEK_SET);
    fwrite($res,$correctContent);
    
    fclose($res);
    echo $res;
    
    
  /*
   * //In a function named easterReverse
   * function easterReverse($filePath){
   * // I assume a file path as first parameter
   * //Get the full file content
   * $content = file_get_contents($filePath);
   * //divide the file content by 2 using floor(strlen($fileContent)/2;
   * $secondPart = substr($content, floor(strlen($content) / 2));
   * $firstPart = substr($content, 0, strlen($secondPart)-1);
   * // Open the file in writing mode
   * $file = fopen($filePath, '+r');
   * //move the cursor to the first content part length
   * fseek($file, strlen($firstPart), SEEK_SET);
   * //write the reversed second part into the file (strrev)
   * fwrite($file, strrev($secondPart), strlen($secondPart));
   * fclose($file);
   * }
   */
}

easterReverse();