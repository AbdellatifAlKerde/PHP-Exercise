<?php
function greaterFn($num) {
  if ($num > 10 && $num < 20) {
    echo "$num is greater than 10\n";
  } else if ($num > 20 && $num < 30) {
    echo "$num is greater than 20\n";
  } else if ($num > 30) {
    echo "$num is greater than 30\n";
  } else if ($num < 10) {
    echo "$num is less than 10\n";
  }
}
greaterFn(11);
greaterFn(21);
greaterFn(31);
greaterFn(8);

