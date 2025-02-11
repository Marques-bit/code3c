<?php

$salario = 0; //salario base do usuario
$carrovendido = 0; // numero de carros vendidos pelo mesmo
$comissao = 0; //comissao do resultado de carros vendidos
$comissao2 = 0; // comissao do calculo final da operação
$vendas = 0; //total de vendas feitas pelo usuario
$vendas2 = 0; // vendas do calculo final da operação

echo "Digite seu salario base: ";
$salario = readline ();

echo "Digite o numero de carros vendidos: ";
$carrovendido = readline ();

echo "Digite qual a sua comissao: ";
$comissao = readline ();

echo "Digite quanto voce vendeu: ";
$vendas = readline ();

$comissao2 = $carrovendido * $comissao;
$vendas2 = $vendas * 0.05;

$pagamento = $salario+$comissao2+$vendas2;
echo "Seu pagamento é de: R$" . $pagamento;
echo "\n";







?>