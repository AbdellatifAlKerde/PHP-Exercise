<?php

$course_name = "Rust, the language of no bugs";
$enrolled_students = 20;
$price = 30;
$on_discount = true;

echo "Course title: $course_name\n";
echo "Enrolled Students: $enrolled_students\n";
echo "Course price: $price $ USD\n";
echo "Course on discount: ".($on_discount ? "yes" : "no")."\n";
echo "\n";

$course_name2 = "Rust, the language of no bugs";
$enrolled_students2 = 20;
$price2 = 30;
$on_discount2 = true;

echo "Course title: $course_name2\n";
echo "Enrolled Students: $enrolled_students2\n";
echo "Course price: $price2 $ USD\n";
if ($on_discount2) {
  echo "Course on discount: Yes\n";
} else {
  echo "Course on discount: No\n";
}
?>

