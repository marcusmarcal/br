<?php
require "topo.php";
require "funcoes.php";

/*$bdServidor = '127.0.0.1';
$bdUsuario = 'root';
$bdSenha = 'Uws012aQ=!';
$bdBanco = 'br';
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
if (mysqli_connect_errno($conexao)) {
    echo "Problemas para conectar no banco. Verifique os dados!" . PHP_EOL;
    die();
}
*/

$tabela = "index_br";

$host = “db”;
$username = “root”;
$password = 'Uws012aQ=!';
$db = “br”;
try {
$conexao = new PDO("mysql:host=$host;dbname=$db", $username, $password);
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo “<h2>Conectado com sucesso.<h2>”;
} catch(PDOException $e) {
echo ‘ERROR: ‘ . $e->getMessage();
}

//echo "Conexão: " . gettype($conexao) . PHP_EOL;
//echo "Select: " . gettype($select) . PHP_EOL;


