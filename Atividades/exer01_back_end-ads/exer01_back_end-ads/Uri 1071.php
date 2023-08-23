<?php

// Lê os valores de entrada interval retorna o valor inteiro
$x = intval(fgets(STDIN));
$y = intval(fgets(STDIN));

// Caso X seja maior que Y, troca os valores
if ($x > $y) {
    $temp = $x;
    $x = $y;
    $y = $temp;
}

// Inicializa a variável que armazenará a soma dos números impares
$sum = 0;

// Faz um loop de X até Y-1 para verificar quais números são impares e somá-los
for ($i = $x+1; $i < $y; $i++) {
    if ($i % 2 != 0) {
        $sum += $i;
    }
}

// Imprime o resultado
echo $sum . "\n";

?>
