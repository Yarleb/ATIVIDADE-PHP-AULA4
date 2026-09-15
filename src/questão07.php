<?php

$matricula1 = readline("Digite a primeira matrícula: ");
$matricula2 = readline("Digite a segunda matrícula: ");


$resultadoTexto = strcmp($matricula1, $matricula2);

if ($resultadoTexto < 0) {
    echo "Comparando como texto (strcmp): " . $matricula1 . " vem primeiro" . PHP_EOL;
} elseif ($resultadoTexto > 0) {
    echo "Comparando como texto (strcmp): " . $matricula2 . " vem primeiro" . PHP_EOL;
} else {
    echo "Comparando como texto (strcmp): as matrículas são iguais" . PHP_EOL;
}

if ($matricula1 < $matricula2) {
    echo "Comparando com o operador <: " . $matricula1 . " vem primeiro";
} elseif ($matricula1 > $matricula2) {
    echo "Comparando com o operador <: " . $matricula2 . " vem primeiro";
} else {
    echo "Comparando com o operador <: as matrículas são iguais";
}

?>