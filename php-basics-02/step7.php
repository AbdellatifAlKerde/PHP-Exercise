<?php

$input = readline("Enter a String: ");
if (strpos($input, "PHP")) {
  echo str_ireplace("PHP", "Python", $input);
} else {
  echo str_ireplace("Python", "PHP", $input);
}