<?php
/**
 $values = array(10, 9, 8, 7.5);
 var_dump($values);
 
 $names = ["Martin", "Halomoan", "Lumbangaol"];
 var_dump($names);
 
 var_dump($names[0]);
 
 $names[0] = "Budi";
 var_dump($names);
 
 unset($names[1]);
 var_dump($names);
 
 $names[] = "Joko";
 var_dump($names);
 
 var_dump(count($names));
 
 */

// ====================================================================== //

// array of map
$martin = array(
    "id" => "mrt",
    "name" => "Martin Lumbangaol",
    "age" => 29,
    "address" => array (
        "city" => "Batam",
        "country" => "Indonesia"
    )
);
var_dump($martin);

var_dump($martin["name"]);
var_dump($martin["address"]["country"]);

$iska = [
    "id" => "isk",
    "name" => "Iska Heriyati",
    "age" => 26,
    "address" => [
        "city" => "Batam",
        "country" => "Indonesia"
    ]
];
var_dump($iska);

