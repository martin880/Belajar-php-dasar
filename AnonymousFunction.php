<?php

$sayHello = function (string $name){
    echo "Hello $name" .PHP_EOL;
};

$sayHello("Martin");
$sayHello("Iska");

function sayGoodBye(string $name, $filter){
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodBye("Martin", function (string $name): string {
    return strtoupper($name);
});


// mengakses variable dari luar
$firstName = "Martin";
$lastName = "Halomoan";

$sayHelloMartin = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloMartin();

$firstName = "Iska";
$lastName = "Heriyati";
$sayHelloMartin();