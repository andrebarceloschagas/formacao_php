<?php

$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}

// O PHP não aceita chaves de tipos diferentes, ele sempre vai converter para o tipo inteiro
// O PHP vai converter a chave para o tipo inteiro, então ele vai sobrescrever a chave 1
