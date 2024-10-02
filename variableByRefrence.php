<?php
$a = 10;      // Original variable
echo $b = &$a;     // $b is assigned by reference
echo "\n";      // Output: 20

echo $b = 20;      // Changing $b

echo "\n";      // Output: 20
echo $a;  // 
echo "\n";      // Output: 20
echo $b;      // Output: 20