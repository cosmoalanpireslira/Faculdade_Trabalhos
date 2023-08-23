<?php

// Lê o número de casos de teste
$num_testes = intval(fgets(STDIN));

// Loop pelos casos de teste
for ($i = 0; $i < $num_testes; $i++) {
  
  // Lê a string a ser cifrada
  $string = trim(fgets(STDIN));
  
  // Lê a quantidade de posições a serem deslocadas
  $posicoes = intval(fgets(STDIN));
  
  // Inicializa a string cifrada
  $cifrada = '';

  // Loop pelos caracteres da string original
  for ($j = 0; $j < strlen($string); $j++) {

    // Obtém o código ASCII do caractere atual
    $ascii = ord($string[$j]);

    // Calcula o novo código ASCII com base no número de posições a serem deslocadas
    $novo_ascii = $ascii - $posicoes;

    // Se o novo código ASCII for menor do que o código ASCII da letra 'A', 
    // significa que precisamos fazer um loop para trás no alfabeto
    if ($novo_ascii < 65) {
      $novo_ascii += 26;
    }

    // Adiciona o caractere cifrado à string cifrada
    $cifrada .= chr($novo_ascii);

  }

  // Imprime a string cifrada
  echo $cifrada . "\n";
  
}
