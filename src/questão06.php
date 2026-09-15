<?php

$entrada = readline("Digite a nota: ");

if (!is_numeric($entrada) || (float)$entrada < 0 || (float)$entrada > 10) {
    echo "Nota inválida. Digite um número entre 0 e 10.";
} else {
    $nota = (float)$entrada;
    echo "Nota registrada: " . $nota;
}

?>