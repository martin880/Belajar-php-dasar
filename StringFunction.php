<?php
// menggabungkan array
var_dump(join(",", [10,11,12,13,14,15]));
// memecah string menjadi array
var_dump(explode(" ", "Martin Halomoan Lumbangaol"));
// membuat huruf menjadi kapital
var_dump(strtolower("MARTIN"));
// membuat huruf menjadi kecil
var_dump(strtoupper("martin"));
// menghapus whitespace didepan dan dibelakang string
var_dump(trim("         Martin        "));
// mengambil sebagian string
var_dump(substr("Martin Halomoan Lumbangaol", 0, 3));