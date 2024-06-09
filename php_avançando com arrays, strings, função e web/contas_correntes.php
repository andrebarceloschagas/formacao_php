<?php

# Array associativos
$contas_1 = [
    'titular' => 'Lucas',
    'saldo' => 1000
];

$contas_2 = [
    'titular' => 'Maria',
    'saldo' => 10000
];

$contas_3 = [
    'titular' => 'Alberto',
    'saldo' => 300
];

$contas_correntes = [$contas_1, $contas_2, $contas_3];


for ($i = 0; $i < count($contas_correntes); $i++) {
    echo $contas_correntes[$i]['titular'] . PHP_EOL;
}

foreach ($contas_correntes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}