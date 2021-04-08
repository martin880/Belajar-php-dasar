<?php

function sapaHello(string $first, string $middle, string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

sapaHello("Martin", "Halomoan", "Lumbangaol");

// named Argument => fitur dari PHP versi 8
sapaHello(last: "Lumbangaol", first: "Martin", middle: "Halomoan");
