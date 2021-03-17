<?php

$names = ["Martin", "Halomoan", "Lumbangaol"];

// jika membutuhkan index
foreach($names as  $index => $name) {
    echo "Data ke $index =  $name" . PHP_EOL;
}

foreach($names as $name) {
    echo "Data $name" . PHP_EOL;
}

// menggunakan foreach didalam map
$person = [
    "first_name" => "Martin",
    "middle_name" => "Halomoan",
    "last_name" => "Lumbangaol"
];

foreach($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}