<?php

// Array contendo as notas disponíveis para troco
$note_list = array(100, 50, 20, 10, 5, 2, 1);

// Recebe o valor a ser trocado
$money = readline();

// Exibe o valor recebido
echo $money . "\n";

// Laço para percorrer todas as notas disponíveis
for ($i = 0; $i < 7; $i++) {

    // Calcula quantas notas daquele valor serão utilizadas
    $count =  $money / $note_list[$i];
    
    // Exibe a quantidade de notas e seu valor correspondente
    echo (int) $count . " nota(s) de R$ " . $note_list[$i] . ",00\n";
    
    // Atualiza o valor de money para o próximo cálculo
    $money %= $note_list[$i];
}
?> 
