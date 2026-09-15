<?php

$primeiro = (int) readline("Digite o primeiro número: ");
$segundo = (int) readline("Digite o segundo número: ");

if ($primeiro > $segundo) {
    echo "O primeiro número é maior.";
} elseif ($primeiro < $segundo) {
    echo "O segundo número é maior.";
} else {
    echo "Os dois números são iguais.";
}

?>