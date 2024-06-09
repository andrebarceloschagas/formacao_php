<?php

# Array ou vetor
$idade_list = [21, 23, 19, 25, 30, 41, 18, 20, 39, 48];

# Modo antigo
$idade_list_1 = array(21, 23, 19, 25, 30, 41, 18);

# Acessando um elemento do array
# echo $idade_list[0] . PHP_EOL;

# Adicionando um elemento ao array
# $idade_list[] = 20;

echo count($idade_list) . PHP_EOL;

for ($i = 0; $i < count($idade_list); $i++) {
    echo $idade_list[$i] . PHP_EOL;
}

# Array associativo
$idade_list = [
    'Lucas' => 21,
    'Vinicius' => 23,
    'Maria' => 19,
    'Pedro' => 25,
    'João' => 30,
    'Paulo' => 41,
    'Ana' => 18
];
