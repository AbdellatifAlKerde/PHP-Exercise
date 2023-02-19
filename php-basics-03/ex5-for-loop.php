<?php

function reverse($s) {
  $words = explode(" ", $s);
  $reverse = "";

  for ($i = count($words) - 1; $i >= 0; $i--) {
    $reverse .= $words[$i]." ";
  }
  echo $reverse."\n";
}

$s = readline("Enter a sentence: ");
reverse($s);