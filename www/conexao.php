<?php
require "topo.php";
require "funcoes.php";

$tabela = "index_br";


// MySQL Tradicional...

$bdServidor = 'db';
$bdUsuario = 'root';
$bdSenha = 'Uws012aQ=!';
$bdBanco = 'br';
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
if (mysqli_connect_errno($conexao)) {
    echo "Problemas para conectar no banco. Verifique os dados!" . PHP_EOL;
    die();
}


/*
// MySQL PDO

$host = "db";
$username = "root";
$password = 'Uws012aQ=!';
$db = "br";
try {
$conexao = new PDO("mysql:host=$host;dbname=$db", $username, $password);
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "<h2>Conectado com sucesso.<h2>";
} catch(PDOException $e) {
echo 'ERROR: ' . $e->getMessage();
}

*/

