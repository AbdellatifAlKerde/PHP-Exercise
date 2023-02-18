<?php
$number = readline("Enter your numbers: ");
$sum = 0;

$toStr = (string) $number; 
$length = strlen($toStr); 

for ($i = 0; $i < $length; $i++) {
  $digit = (int) $toStr[$i]; 
  $sum += $digit;
}

echo "The sum is: $sum\n";
