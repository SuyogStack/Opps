<?php

//with rev function
$string = "ship";
$reversedString = strrev($string);
echo $reversedString; // Outputs: !dlroW olleH

echo "------------------";
//withought rev function 
$reverse='';

for($i=strlen($string)-1;$i>=0;$i--)
{
    $reverse .=$string[$i];
}
echo $reverse;

?>