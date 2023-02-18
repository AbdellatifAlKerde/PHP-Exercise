<?php
function printStars() {
  $x = 0;
  while ($x < 8) {
    $star = 0;
    while ($star <= $x) {
      echo "*";
      $star++;
    }
    echo "\n";
    $x++;
  }
}

printStars();