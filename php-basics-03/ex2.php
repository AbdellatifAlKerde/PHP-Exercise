<?php
function factorial($num){
$factorial = 1;
$i = 1;

while ($i <= $num) {
    $factorial *= $i;
    $i++;
}
echo "The factorial of $num is: $factorial\n";
}
$num = readline("Enter a number: ");
factorial($num);

?>