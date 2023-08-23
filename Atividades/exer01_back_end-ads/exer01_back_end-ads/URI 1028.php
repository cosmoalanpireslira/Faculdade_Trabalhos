<?php

// leitura do número de inteiros
$n = intval(fgets(STDIN));

// inicialização dos arrays pares e ímpares
$pares = array();
$impares = array();

// loop de leitura dos inteiros e separação em pares e ímpares
for ($i = 0; $i < $n; $i++) {
    $numero = intval(fgets(STDIN));
    if ($numero % 2 == 0) {
        $pares[] = $numero;
    } else {
        $impares[] = $numero;
    }
}

// ordenação dos arrays pares e ímpares
sort($pares);
rsort($impares);

// impressão dos números pares
foreach ($pares as $numero) {
    echo $numero . PHP_EOL;
}

// impressão dos números ímpares
foreach ($impares as $numero) {
    echo $numero . PHP_EOL;
}

?>
