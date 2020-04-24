<?php
function isFirstLetterUpperCase($str)
{
    $regexp = '/^[A-Z]/';
    if (preg_match($regexp,$str)){
        echo "String's first character is uppercase ";
    }else{
        echo "String first character is not uppercase";
    }
}

isFirstLetterUpperCase('Codegym');
echo "<br>";
isFirstLetterUpperCase('cdegym');
echo "<br>";

$string1 = 'Nguyen van Nam';
$string2 = 'NGUYEN VAN NAM';
$string3 = 'nguyen van Nam';

isFirstLetterUpperCase($string1);
echo "<br>";
isFirstLetterUpperCase($string2);
echo "<br>";
isFirstLetterUpperCase($string3);