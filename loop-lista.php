<?php
$idadeList = [23, 21, 19, 20, 18, 30, 34];

list($idadeVinicio, $idadeJoao, $idadeMaria) = $idadeList;

echo count($idadeList). PHP_EOL;

for ($i = 0; $i < count($idadeList); $i++){
    echo $idadeList[$i] . PHP_EOL;
}