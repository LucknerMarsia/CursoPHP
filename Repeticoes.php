<?php

for($i = 1; $i < 100; $i ++) {
    if($i % 2 != 0) {
        echo$i . PHP_EOL;
    }
}

$multiplicador = 9;
for($i = 1; $i <= 10; $i++){
    $resultado = $multiplicador * $i;
    echo "$multiplicador x $i = $resultado" . PHP_EOL;
}