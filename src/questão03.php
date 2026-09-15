<?php

$valorPedido = (float) readline("Digite o valor do pedido: ");
$cartao = readline("Cliente possui cartão? (s/n): ");
$pix = readline("Cliente possui Pix? (s/n): ");

$pagamentoAceito = ($cartao == "s" || $pix == "s");

if ($pagamentoAceito) {
    echo "Valor do pedido: R$ " . $valorPedido . PHP_EOL;
    echo "Pedido aprovado";
} else {
    echo "Pedido recusado: nenhuma forma de pagamento disponível";
}

?>