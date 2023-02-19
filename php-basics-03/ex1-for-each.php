<?php

$transactions = array(
    array(
        "id" => 1,
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "id" => 2,
        "debit"=>15,
        "credit"=>10
    )
);


echo "ID: ".$transactions[0]['id']." => amount: ".$transactions[0]['debit'] - $transactions[0]['credit']."\n";
echo "ID: ".$transactions[1]['id']." => amount: ".$transactions[1]['debit'] - $transactions[1]['credit']."\n";
?>

<?php

$transactions = array(
    array(
        "id" => 1,
        "name"=> "Gaby",
        "email"=> "gaby@codi.tech"
    ),
    array(
       "id" => 3,
       "name"=> "Omar",
       "email"=> "omar@codi.tech"
    )
);

foreach ($transactions[0] as $key => $value) {
  echo $key.": ".$value.", ";
}

echo "\n";

foreach ($transactions[1] as $key => $value) {
  echo $key.": ".$value.", ";
}

echo "\n";

