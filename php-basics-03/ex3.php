<?php

function countWords($s, $w) {
  // $sArray = explode(" ", $s);

  echo substr_count($s, "$w")."\n";
}

$input = readline("Write a phrase: ");
$word = readline("Enter the word you want to count: ");
countWords($input, $word);