<?php

// Obtém o número de casos de teste
$casos_teste = intval(fgets(STDIN));

// Loop através dos casos de teste
for ($i = 0; $i < $casos_teste; $i++) {
  // Obtém o número de LEDs necessários para exibir o número
  $numero = trim(fgets(STDIN));
  $leds = 0;
  
  // Loop através dos dígitos do número
  for ($j = 0; $j < strlen($numero); $j++) {
    // Obtém o número de LEDs necessários para exibir o dígito atual
    switch ($numero[$j]) {
      case "0":
        $leds += 6;
        break;
      case "1":
        $leds += 2;
        break;
      case "2":
        $leds += 5;
        break;
      case "3":
        $leds += 5;
        break;
      case "4":
        $leds += 4;
        break;
      case "5":
        $leds += 5;
        break;
      case "6":
        $leds += 6;
        break;
      case "7":
        $leds += 3;
        break;
      case "8":
        $leds += 7;
        break;
      case "9":
        $leds += 6;
        break;
    }
  }
  
  // Imprime o número de LEDs necessários para exibir o número
  echo "$leds leds\n";
}
