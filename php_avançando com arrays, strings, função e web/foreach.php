<?php
 
$contas_correntes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],

    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],

    '123.256.789-12' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],

    '123.258.852-12' => [
        'titular' => 'Claudia',
        'saldo' => 2000
    ]
];

foreach ($contas_correntes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}
