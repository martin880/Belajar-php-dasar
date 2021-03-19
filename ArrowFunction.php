<?php

$firstName = "Martin";
$lastName = "Lumbangaol";

$arrowFunction = fn() => "Hello $firstName $lastName" .PHP_EOL;

echo $arrowFunction();