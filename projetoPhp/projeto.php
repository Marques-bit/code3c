<?php

$usuarios = [
    [
        "login" => "admin",
        "senha" => "1234"
  ]
];
$usuarioLogado = false;

//$NOVOUSER = [
 //   "LOGIN" => "ASDASD",
  //  "SENHA" => "ASDASa"
//];

//$usuarios.push($NOVOUSER);

function menu(){
        global $usuarioLogado;

        while(true) {
            if ($usuarioLogado) {
                echo "Usuario logado: $usuarioLogado\n";
                break; //se o usuario estver logado o loop para.
            } else {
                echo "-----------------------------------------------\n";
                echo "Login\n";
                echo "-----------------------------------------------\n";
                $nome = readline("User:\n");
                $password = readline("Password:\n");
                login($nome, $password);
        } 
    }
}
function login($nome, $password)
{

    global $usuarios;

    foreach ($usuarios as $item) {
        if ($item["login"] == $nome && $item["senha"] == $password) {
            echo "acesso permitido\n";
        } else {
            echo "erro no login\n";
        }
    }
}

menu();
