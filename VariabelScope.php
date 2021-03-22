<?php

$name = "Martin"; // Global scope tidak bisa diakses dari dalam function kecuali pakai kata kunci global

function sayName(){
    global $name; // global keyword
    echo $name . PHP_EOL;

    echo $GLOBALS["name"] . PHP_EOL; // default bawaan PHP
}
sayName();
