<?php
function isPowOfTwo($number) {
  if ($number <= 0) {
    echo "Please enter a positive number\n";
  }

  while ($number != 1) {
    if ($number % 2 != 0) {
      return false;
    }
    $number /= 2;
  }
  return true;
}
$number = readline("Enter a number: ");
if (isPowOfTwo($number)) {
  echo "$number is a power of two\n";
} else {
  echo "$number is not a power of two\n";
}
?>