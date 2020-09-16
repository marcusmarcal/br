<?
include("conexao.php");
include("senha.php");
$tabela = "dados_br";
$excluir = "delete from $tabela WHERE id=$id";
mysql_query($excluir,$conexao) or die("<br>Não foi possivel Remover dados do banco!!");
?>
<font color="#003399">Dados removidos com sucesso!</font><br><br>
<a href="index.php"><font color="#003399">Voltar</font></a>
