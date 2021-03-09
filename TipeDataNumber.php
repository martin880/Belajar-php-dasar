<?php

echo "Decimal: ";
var_dump(1234);

echo "Octal: ";
var_dump(01234);

echo "Hexadecimal: ";
var_dump(0x1A);

echo "Binary: ";
var_dump(0b111111);

// penambahan underscore untuk mempermudah membaca angka, dan underscore tidak ada terbaca/di ignore
echo "Underscore in Number: ";
var_dump(1_241_241_241);

// floating point menggunakan titik sebagai pengganti koma
echo "Floating point: ";
var_dump(1.234);

//  
echo "Floating point dengan E-Notation plus : (1.7 x 1000) : ";
var_dump(1.7e3);

echo "Floating point dengan E-Notation minus : (1.7 x 0.001) : ";
var_dump(1.7e-3);

echo "Uderscore di Floating point : ";
var_dump(1_123.123);


