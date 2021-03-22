<?php

$name = "Martin";

$otherName = &$name; // tanda & sebagai reference

$otherName = "Halomoan";

echo $name . PHP_EOL;

// Pass By Reference - mengirimkan parameter atau argumen berupa reference ke variabel aslinya
function increment(int &$value){
    $value++;
}

$counter = 1;
increment($counter);

echo $counter . PHP_EOL;

// Returning reference - mengembalikan reference pada function
function &getValue(){
    static $value = 100;
    return $value;
}

$a = $getValue();
$a = 200;

$b = $getValue();
echo $b . PHP_EOL;