<?php
$array = [
  "eggs" => ["balade", "mezere3"],
  "milk" => ["Fresh", "Taanayel"],
  "water-pack" => ["Tanoureen", "Reem"]
];
$groceries = array("Eggs", "Milk", "Cheese", "Water", "Pack", "Tissues", "Watermelon");

echo "Hey Sir, Please I need 1 pack of {$array['eggs'][0]} eggs and 3 {$array['water-pack'][1]} Water Pack.\n";
echo "Hello Sir, do you have ".$groceries[0].", " .$groceries[1].", and ".$groceries[2]."? Also if you sell fruits can I find a ".$groceries[6]."?\n";

