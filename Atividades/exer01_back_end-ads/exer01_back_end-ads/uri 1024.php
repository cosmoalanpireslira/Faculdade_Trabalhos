<?php

// Lê a quantidade de casos de teste
$quantidadeCasosTeste = intval(fgets(STDIN));

// Loop pelos casos de teste
for ($i = 0; $i < $quantidadeCasosTeste; $i++) {
    // Lê a string
    $string = trim(fgets(STDIN));
    
    // Passo 1: Aplica a primeira transformação
    $novaString = "";
    for ($j = 0; $j < strlen($string); $j++) {
        $caractere = $string[$j];
        if (ctype_alpha($caractere)) { // Se for letra, adiciona 3 posições no alfabeto
            $novaString .= chr(ord($caractere) + 3);
        } else { // Senão, mantém o caractere original
            $novaString .= $caractere;
        }
    }
    
    // Passo 2: Inverte a string
    $novaString = strrev($novaString);
    
    // Passo 3: Aplica a segunda transformação
    $metade = intval(strlen($novaString) / 2);
    for ($j = $metade; $j < strlen($novaString); $j++) {
        $caractere = $novaString[$j];
        $novaString[$j] = chr(ord($caractere) - 1);
    }
    
    // Imprime a string final
    echo $novaString . "\n";
}
