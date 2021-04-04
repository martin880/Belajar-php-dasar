<?php

// for ($counter = 1; $counter <= 100; $counter++){
//     if ($counter % 2 == 0) {
//         continue;
//     }
//     echo "Hello Continue " . $counter . PHP_EOL;
// }

// write the code that produce the following output : 1, 3, 5, 7, 9, 11, 13, 15
for ($i = 1; $i <= 15; $i++){
    if ($i % 2 == 0) {
        continue;
    }
    echo $i . PHP_EOL;
}

// // write the code that produce the following output : 1, 2, 4, 7, 11, 16, 22, 29, 37, 46, 56
// for($i = 0; $i <= 13; $i++){
//     if ($i % 7 == 0) {
//         continue;
//     }
//     echo $i . PHP_EOL;
// }