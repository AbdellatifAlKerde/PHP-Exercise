<?php
function isPrime($n) {
  if ($n % 2 != 0) {
    echo "This is a Prime number\n";
  } else {
    echo "This is not a Prime number\n";
  }
}
$input = readline("Enter a number: ");
isPrime($input);