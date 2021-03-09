<?php

$name = "Martin";
$name = null;

$age = null;

echo "Name: ";
echo $name;
echo "\n";

echo "Age: ";
echo $age;
echo "\n";

echo "Is Name Null?: ";
var_dump(is_null($name));
echo "\n";

$contoh = "Iska";
unset($contoh);

$contoh = "Heriyati";
$contoh = null;

var_dump(isset($contoh));

// Note: Null merubah data variabel menjadi null tapi variabelnya tetap ada
// Unset: menghapus variabel
// Isset digunakan untuk mengecek variabel ada dan nilainya tidak null