<?php

// function countWords($s, $w) {

//   echo substr_count($s, "$w")."\n";
// }

// $input = readline("Write a phrase: ");
// $word = readline("Enter the word you want to count: ");
// countWords($input, $word);

// function countWords ($s, $w) {
//   $sArray = explode(" ", $s);
//   $sCount = array_count_values($sArray);
//   echo $sCount[$w]."\n";
    
// }

// $s = readline("Write a phrase: ");
// $w = readline("Write a word you want to count: ");
// countWords($s, $w);

function countWords ($s, $w) {
  $array = explode(" ", $s);
  $words = count($array);
  $i = 0;
  while ($i < $words) {
    if ($array[$i] == "$w") {
      $i += 1;
    }
  }
  echo "$i\n";
}

$s = readline("Write a sentence: ");
$w = readline("Write a word: ");

countWords($s, $w);