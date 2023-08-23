<?php

// Lê os valores de entrada
$valores = explode(" ", fgets(STDIN));
$a = intval($valores[0]);
$b = intval($valores[1]);
$c = intval($valores[2]);

// Calcula o maior valor entre os três usando a função max()
$maiorAB = max($a, $b);
$maiorABC = max($maiorAB, $c);

// Imprime o resultado
echo $maiorABC . " eh o maior\n";
