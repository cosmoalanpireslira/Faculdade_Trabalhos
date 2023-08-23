<?php

while (true) { // laço infinito
    $input = trim(fgets(STDIN)); // lê a entrada e remove espaços em branco no início e no final
    
    if ($input == '0 0 0 0') { // verifica se a entrada é '0 0 0 0'
        break; // se sim, interrompe o laço
    }
    
    $values = explode(' ', $input); // divide a entrada em um array de 4 valores
    
    $hour1 = intval($values[0]); // converte o primeiro valor em inteiro
    $minute1 = intval($values[1]); // converte o segundo valor em inteiro
    $hour2 = intval($values[2]); // converte o terceiro valor em inteiro
    $minute2 = intval($values[3]); // converte o quarto valor em inteiro
    
    // converte a hora para minutos e soma com os minutos
    $time1 = $hour1 * 60 + $minute1;
    $time2 = $hour2 * 60 + $minute2;
    
    if ($time1 >= $time2) { // verifica se o primeiro horário é maior ou igual ao segundo
        $time2 += 24 * 60; // se sim, adiciona 24 horas (1440 minutos) ao segundo horário
    }
    
    $diff = $time2 - $time1; // calcula a diferença entre os horários em minutos
    echo $diff . "\n"; // exibe a diferença seguida de uma quebra de linha
}

?>
