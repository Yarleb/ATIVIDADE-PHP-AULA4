<?php

$nome = readline("Nome do aluno: ");
$nota1 = (float) readline("Primeira nota: ");
$nota2 = (float) readline("Segunda nota: ");
$nota3 = (float) readline("Terceira nota: ");

$media = ($nota1 + $nota2 + $nota3) / 3;

$aprovado = $media >= 7;
$recuperacao = $media >= 5 && $media < 7;

echo "Aluno: " . $nome . PHP_EOL;
echo "Média: " . number_format($media, 2) . PHP_EOL;

if ($aprovado) {
    echo "Situação: Aprovado";
} elseif ($recuperacao) {
    echo "Situação: Recuperação";
} else {
    echo "Situação: Reprovado";
}

?>