<?php

// Lê a quantidade de números a serem lidos
$num_numeros = intval(fgets(STDIN));

// Inicializa dois arrays, um para números pares e outro para números ímpares
$pares = array();
$impares = array();

// Loop pelos números a serem lidos
for ($i = 0; $i < $num_numeros; $i++) {

  // Lê o número atual
  $numero = intval(fgets(STDIN));

  // Se o número for par, adiciona ao array de números pares
  if ($numero % 2 == 0) {
    $pares[] = $numero;
  }
  // Caso contrário, adiciona ao array de números ímpares
  else {
    $impares[] = $numero;
  }

}

// Ordena o array de números pares em ordem crescente
sort($pares);

// Ordena o array de números ímpares em ordem decrescente
rsort($impares);

// Imprime os números pares em ordem crescente
foreach ($pares as $numero) {
  echo "$numero\n";
}

// Imprime os números ímpares em ordem decrescente
foreach ($impares as $numero) {
  echo "$numero\n";
}
