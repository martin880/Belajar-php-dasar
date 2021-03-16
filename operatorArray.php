<?php

$first = [
    "first_name" => "Martin"
];

$last = [
    "last_name" => "Halomoan"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Martin",
    "last_name" => "Halomoan"
];
$b = [
    "last_name" => "Halomoan",
    "first_name" => "Martin"
];

var_dump($a == $b);
var_dump($a === $b);
