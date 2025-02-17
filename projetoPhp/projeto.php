<?php

$usuarios = [
    [
        "login" => "admin",
        "senha" => "1234"
    ]
];

$historicoVendas = []; 
$usuarioLogado = false;
$vendasUsuario = []; 

function menuInicio() //aqui é a 1a tela do sistem (LOGIN)
{
    global $usuarioLogado, $usuarios, $historicoVendas, $vendasUsuario;

    echo "-----------------------------------------------\n";
    echo "Seja bem-vindo à casa de grãos do JOÃO, aqui so vendemos arroz e FEIJÃO!\nFaça login e acesse nosso sistema.\n";
    echo "[1] Login\n[2] Novo User\n";
    echo "-----------------------------------------------\n";
    $log = readline();

    $nome = readline("User:\n");
    $password = readline("Password:\n");

    switch ($log) {
        case 1:
            login($nome, $password); 
            break;
        case 2:
            novoUser($nome, $password); 
            break;
        default:
            echo "Essa opção não existe, tente novamente.\n";
            menuInicio();
    }
}

function login($nome, $password) //aqui é o meu LOGIN para validar se a pessoa ta cadastrada ou nao.
{
    global $usuarios, $usuarioLogado;

    foreach ($usuarios as $item) {
        if ($item["login"] == $nome && $item["senha"] == $password) {
            echo "Acesso permitido\n";
            $usuarioLogado = $nome; 
            menuSistema(); 
            return;
        }
    }

    echo "Acesso negado\n";
    menuInicio(); 
}

function novoUser($nome, $password) // aqui é para um novo usuario poder criar um login e ir la pra minha array q
{
    global $usuarios;

    $usuarios[] = [
        "login" => $nome,
        "senha" => $password
    ];
    echo "Novo usuário registrado com sucesso!\n";
    menuInicio();
}

function menuSistema()
{
    global $usuarioLogado, $usuarios, $historicoVendas, $vendasUsuario;

    if ($usuarioLogado) {
        echo "Usuário logado: $usuarioLogado\n";
        echo "-----------------------------------------------\n"; // menu apos o usurio passar o login
        echo "[1] Realizar venda\n";
        echo "[2] Ver histórico de vendas\n";
        echo "[3] Deslogar\n";
        echo "[4] Sair do sistema\n";
        echo "-----------------------------------------------\n";
        $opcao = readline("Escolha uma opção: ");

        switch ($opcao) {
            case 1:
                fazerVenda(); 
                break;
            case 2:
                verificarHistoricoVendas(); 
                break;
            case 3:
                deslogar(); 
                break;
            case 4:
                sair(); 
                break;
            default:
                echo "Opção inválida. Tente novamente.\n";
                menuSistema();
        }
    }
}

function fazerVenda()
{
    global $usuarioLogado, $historicoVendas, $vendasUsuario; //aqui e venda, produto e valor

    echo "Digite o produto que deseja vender: ";
    $produto = readline();

    echo "Digite o valor da venda: ";
    $valor = readline();

    $dataHoraVenda = date('Y-m-d H:i:s');  // aqui e a hora q dia que eu vendi alguma coisa


    $historicoVendas[] = [ 
        "usuario" => $usuarioLogado,
        "produto" => $produto,
        "valor" => $valor,
        "data_hora" => $dataHoraVenda
    ];
                                                    // "armazenamento" de cada usuario e venda do mesmo
    
    $vendasUsuario[] = [
        "produto" => $produto,
        "valor" => $valor,
        "data_hora" => $dataHoraVenda
    ];

    echo "Venda realizada com sucesso!\n";

    menuSistema();
}

function verificarHistoricoVendas()
{
    global $historicoVendas;

    echo "-----------------------------------------------\n";
    echo "Histórico de Vendas:\n";

    foreach ($historicoVendas as $venda) { //historico da venda
        echo "Usuário: {$venda['usuario']}, Produto: {$venda['produto']}, Valor: {$venda['valor']}, Data e Hora: {$venda['data_hora']}\n";
    }

    echo "-----------------------------------------------\n";
    menuSistema();
}

function deslogar()
{
    global $usuarioLogado;

    $usuarioLogado = false; 
    echo "Deslogado com sucesso!\n"; // funçao simples pra deslogar
    system ("clear");
    menuInicio();
}

function sair()
{
    echo "Obrigado por acessar a loja de grãos do JOÃO!\n";
    system ("clear");
    exit();
}

menuInicio();

?>