<?php

$nome = readline("Nome do cliente: ");
$idade = (int) readline("Idade: ");
$renda = (float) readline("Renda mensal: ");
$tempoEmprego = (int) readline("Tempo de emprego (meses): ");
$negativado = readline("Está negativado? (s/n): ");

$idadePermitida = ($idade >= 18 && $idade <= 65);
$rendaOuEstabilidade = ($renda >= 2000 || $tempoEmprego >= 24);
$estaNegativado = ($negativado === "s");

$creditoAprovado = ($idadePermitida && $rendaOuEstabilidade && !$estaNegativado);

echo "Idade permitida: " . ($idadePermitida ? "atendida" : "não atendida") . PHP_EOL;
echo "Renda ou estabilidade: " . ($rendaOuEstabilidade ? "atendida" : "não atendida") . PHP_EOL;
echo "Nome limpo: " . (!$estaNegativado ? "atendida" : "não atendida") . PHP_EOL;

if ($creditoAprovado) {
    echo "Resultado: Crédito aprovado para " . $nome;
} else {
    echo "Resultado: Crédito não aprovado para " . $nome;
}

?>