<?php

$contasCorrentes = [
   99999999999 => [
    'titular' => 'Vinicius',
    'saldo' => 1000
   ],
   88888888888 => [
    'titular' => 'Maria',
    'saldo' => 10000
   ],
   77777777777 => [
    'titular' => 'Alberto',
    'saldo' => 300
   ],
];

foreach ($contasCorrentes as $cpf => $conta){
    echo $conta['titular'] . PHP_EOL;
    echo $cpf . PHP_EOL;
}