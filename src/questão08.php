<?php

$entrada = readline("Digite um valor: ");

$resultadoSolto = ($entrada == 10);
$resultadoEstrito = ($entrada === 10);

echo "Tipo da entrada: " . gettype($entrada) . PHP_EOL;
echo '$entrada == 10 → ' . ($resultadoSolto ? "true" : "false") . PHP_EOL;
echo '$entrada === 10 → ' . ($resultadoEstrito ? "true" : "false") . PHP_EOL;

// readline() retorna uma string.
// O == permite comparar tipos diferentes, enquanto o === exige
// que o valor e o tipo sejam exatamente iguais.

?>