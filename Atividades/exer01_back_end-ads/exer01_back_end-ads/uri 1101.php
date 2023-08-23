<?php

while (true) {
    // Lê o par de valores M e N
    fscanf(STDIN, "%d %d", $m, $n);

    // Verifica se algum dos valores é menor ou igual a zero
    if ($m <= 0 || $n <= 0) {
        break; // Sai do loop
    }

    // Define qual valor é o menor e qual é o maior
    if ($m < $n) {
        $min = $m; // Define $m como o menor valor
        $max = $n; // Define $n como o maior valor
    } else {
        $min = $n; // Define $n como o menor valor
        $max = $m; // Define $m como o maior valor
    }

    // Calcula a soma dos inteiros consecutivos entre os valores M e N
    $sum = 0; // Inicializa a variável $sum como zero
    for ($i = $min; $i <= $max; $i++) { // Loop para somar os inteiros consecutivos
        $sum += $i; // Soma o valor de $i na variável $sum
    }

    // Imprime a sequência e a soma dos inteiros consecutivos
    for ($i = $min; $i <= $max; $i++) { // Loop para imprimir a sequência
        echo $i . " "; // Imprime o valor de $i seguido de um espaço
    }
    echo "Sum=" . $sum . "\n"; // Imprime a mensagem "Sum=" seguida da variável $sum e um caractere de quebra de linha
}

?>
