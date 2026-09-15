<?php

$idade = (int) readline("Digite sua idade: ");
$ingresso = readline("Possui ingresso? (s/n): ");

$acessoLiberado = ($idade >= 18 && $ingresso == "s");

if ($acessoLiberado) {
    echo "Entrada liberada";
} else {
    echo "Acesso negado";
}

?>