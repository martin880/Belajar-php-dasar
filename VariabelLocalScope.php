<?php

function createName(){
    $name = "Martin"; //localscope
}

createName();
echo $name .PHP_EOL;

// tidak bisa mengakses lokal scope dari luar function