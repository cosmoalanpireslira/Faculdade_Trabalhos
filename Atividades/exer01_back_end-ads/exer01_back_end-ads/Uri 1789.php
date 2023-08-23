<?php

while ($line = fgets(STDIN)) { // lê cada linha de entrada
    $n = intval($line); // converte a string lida em um inteiro
    $speeds = explode(' ', fgets(STDIN)); // lê a linha seguinte e divide os valores em um array de strings
    
    $max_speed = 0; // inicializa a velocidade máxima como 0
    
    foreach ($speeds as $speed) { // itera sobre os valores de velocidade lidos
        $max_speed = max($max_speed, intval($speed)); // verifica qual é a velocidade máxima entre a atual e a anterior
    }
    
    if ($max_speed < 10) { // verifica a velocidade máxima e atribui o nível de habilidade
        echo "1\n";
    } elseif ($max_speed >= 10 && $max_speed < 20) {
        echo "2\n";
    } else {
        echo "3\n";
    }
}

?>
