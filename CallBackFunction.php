<?php

function sayHello(string $name, callable $filter){
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Martin", "strtoupper");
sayHello("Martin", "strtolower");
sayHello("Martin", function(string $name): string {
    return strtoupper($name);
});
sayHello("Martin", fn($name) => strtoupper($name));