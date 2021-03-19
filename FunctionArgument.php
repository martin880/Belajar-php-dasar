<?php

// Default argument
function sayHello($name = "Anonymous")
{
    echo "Hello $name" . PHP_EOL;
}

sayHello("Martin");
sayHello();

// Default argument value
function sayHello2($firstName, $lastName = "")
{
    echo "Hello $firstName $lastName" . PHP_EOL;
}

sayHello2("Martin");
sayHello2("Halomoan");


// Type Declaration
function sum(int $first, int $last){
    $total = $first + $last;
    echo "Total $first + $last = $total" .PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);

// Variable-lenght Argument List "implode" berfungsi untuk menggabungkan array menjadi string
function sumAll(...$values){
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}

sumAll(1, 2, 3, 4, 5);