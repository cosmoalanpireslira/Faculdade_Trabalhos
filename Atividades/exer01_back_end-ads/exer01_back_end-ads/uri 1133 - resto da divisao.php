<?php

// Lê os valores de entrada
$x = intval(fgets(STDIN));
$y = intval(fgets(STDIN));

// Define qual valor é o menor e qual é o maior
if ($x > $y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}

// Percorre todos os valores entre $x e $y (excluindo os extremos)
for ($i = $x + 1; $i < $y; $i++) {
    // Verifica se o resto da divisão por 5 é igual a 2 ou 3
    if ($i % 5 == 2 || $i % 5 == 3) {
        echo $i . "\n"; // Imprime o valor
    }
}

?>
