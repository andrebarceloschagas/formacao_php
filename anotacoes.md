# Formação PHP

## Introdução

### O que é PHP?

PHP é uma linguagem de programação de uso geral, de código aberto, especialmente adequada para o desenvolvimento web e que pode ser embutida no HTML.

### O que significa PHP?

PHP é um acrônimo recursivo que significa PHP: Hypertext Preprocessor.

### Onde o PHP é executado?

O PHP é executado no servidor. Quando você acessa uma página PHP, o código é processado no servidor e o resultado é retornado para o navegador. O código PHP é executado no servidor, e o HTML resultante é enviado para o navegador.

### O que é um servidor web?

Um servidor web é um computador que executa um software especializado que aceita solicitações de clientes e envia respostas. O servidor web é responsável por hospedar sites e servir conteúdo para os usuários.

## Tipos de Dados

### Tipo de Dados Primitivos

Os tipos de dados primitivos são os tipos de dados básicos que são suportados pela linguagem de programação. PHP suporta os seguintes tipos de dados primitivos:

- Inteiro (int) - um número inteiro sem um ponto decimal.
- Ponto flutuante (float) - um número com um ponto decimal.
- String - uma sequência de caracteres.
- Booleano (bool) - um valor verdadeiro ou falso.

## Variáveis

### O que é uma variável?

Uma variável é um contêiner (um espaço de memória) para armazenar dados. Cada variável tem um nome e um valor. O valor de uma variável pode ser alterado durante a execução do programa.

### Como declarar uma variável em PHP?

Para declarar uma variável em PHP, você precisa usar o operador de atribuição `=`. O operador de atribuição é usado para atribuir um valor a uma variável, inicia-se com um **$** e sempre com um **;** no final da linha.

```php
$nome = "João";
$idade = 25;
$altura = 1.75;
$casado = false;

echo $nome; // João
echo $idade; // 25
echo $altura; // 1.75
echo $casado; // false
```

### Regras para nomes de variáveis

- O nome de uma variável deve começar com um caractere alfabético ou um underline.
- O nome de uma variável não pode começar com um número.
- O nome de uma variável pode conter apenas letras, números e underline.
- O nome de uma variável é sensível a maiúsculas e minúsculas.
- O nome de uma variável não pode conter espaços.
- O nome de uma variável não pode conter caracteres especiais, exceto o underline.
- O nome de uma variável não pode ser uma palavra reservada.
- O nome de uma variável deve ser descritivo e significativo.

### Operadores matemáticos

Os operadores matemáticos são usados para realizar operações matemáticas em variáveis e valores. PHP suporta os seguintes operadores matemáticos:

- Adição (+) - Adiciona dois valores.
- Subtração (-) - Subtrai um valor de outro.
- Multiplicação (*) - Multiplica dois valores.
- Divisão (/) - Divide um valor por outro.
- Módulo (%) - Retorna o resto da divisão de um valor por outro.

```php
$x = 10;
$y = 5;

echo $x + $y; // 15
echo $x - $y; // 5
echo $x * $y; // 50
echo $x / $y; // 2
echo $x % $y; // 0
```

### Operadores de atribuição

Os operadores de atribuição são usados para atribuir um valor a uma variável. PHP suporta os seguintes operadores de atribuição:

- Atribuição simples (=) - Atribui um valor a uma variável.
- Atribuição de adição (+=) - Adiciona um valor a uma variável.
- Atribuição de subtração (-=) - Subtrai um valor de uma variável.
- Atribuição de multiplicação (*=) - Multiplica uma variável por um valor.
- Atribuição de divisão (/=) - Divide uma variável por um valor.
- Atribuição de módulo (%=) - Retorna o resto da divisão de uma variável por um valor.

```php
$x = 10;

$x += 5; // $x = $x + 5;
$x -= 5; // $x = $x - 5;
$x *= 5; // $x = $x * 5;
$x /= 5; // $x = $x / 5;
$x %= 5; // $x = $x % 5;
```

### Operadores de incremento e decremento

Os operadores de incremento e decremento são usados para aumentar ou diminuir o valor de uma variável em uma unidade. PHP suporta os seguintes operadores de incremento e decremento:

- Incremento (++) - Aumenta o valor de uma variável em uma unidade.
- Decremento (--) - Diminui o valor de uma variável em uma unidade.

```php
$x = 10;

$x++; // $x = $x + 1;
$x--; // $x = $x - 1;
```

### Operadores de comparação

Os operadores de comparação são usados para comparar dois valores. PHP suporta os seguintes operadores de comparação:

- Igual (==) - Retorna verdadeiro se os valores forem iguais.
- Idêntico (===) - Retorna verdadeiro se os valores e os tipos de dados forem iguais.
- Diferente (!=) - Retorna verdadeiro se os valores forem diferentes.
- Não idêntico (!==) - Retorna verdadeiro se os valores ou os tipos de dados forem diferentes.
- Maior que (>) - Retorna verdadeiro se o valor da esquerda for maior que o valor da direita.
- Menor que (<) - Retorna verdadeiro se o valor da esquerda for menor que o valor da direita.
- Maior ou igual (>=) - Retorna verdadeiro se o valor da esquerda for maior ou igual ao valor da direita.
- Menor ou igual (<=) - Retorna verdadeiro se o valor da esquerda for menor ou igual ao valor da direita.

```php

$x = 10;
$y = 5;

echo $x == $y; // false
echo $x === $y; // false

