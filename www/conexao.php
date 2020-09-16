<?php
require "topo.php";
require "funcoes.php";

$bdServidor = '127.0.0.1';
$bdUsuario = 'root';
$bdSenha = 'Uws012aQ=!';
$bdBanco = 'br';
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
if (mysqli_connect_errno($conexao)) {
    echo "Problemas para conectar no banco. Verifique os dados!" . PHP_EOL;
    die();
}

$tabela = "index_br";

//echo "Conexão: " . gettype($conexao) . PHP_EOL;
//echo "Select: " . gettype($select) . PHP_EOL;


