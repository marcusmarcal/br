<?
include("conexao.php");
$excluir = "delete from $tabela WHERE numero_br=$numero_br";
mysql_query($excluir,$conexao) or die("<br>Não foi possivel Remover dados do banco!!");
$tabela = "dados_br";
$excluir_dados = "delete from $tabela WHERE numero_br=$numero_br";
mysql_query($excluir_dados,$conexao) or die("<br>Não foi possivel Remover dados do banco!!");

?>
<font color="#003399">Dados removidos com sucesso!</font><br><br>
<a href="index.php"><font color="#003399">Voltar</font></a>
