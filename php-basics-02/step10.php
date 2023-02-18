<?php
function check_palindrome($string) {
  if ($string == strrev($string)) {
    echo "Palindrome detected\n";
  } else {
    echo "Palindrome not detected\n";
  }
} 
$input = readline("Enter a string: ");
check_palindrome($input);