<?php

function sum_of_digits ($s) {
  $sum = 0;
  $i = 0;
  for ($i; $i < strlen($s); $i++) {
    $sum += $s[$i];
  }
  echo "$sum\n";
}

$s = readline("Enter your number: ");
sum_of_digits($s);
