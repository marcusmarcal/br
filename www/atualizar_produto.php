<?
include("conexao.php");
$mac_addr = strtoupper($mac_addr);
$numero_serie = strtoupper($numero_serie);
$tabela = "dados_br";
$atualizar = "UPDATE $tabela SET produto='$produto', mac_addr='$mac_addr', numero_serie='$numero_serie' WHERE id=$id";
mysql_query($atualizar,$conexao) or die("<br>Não foi possivel atualizar dados do banco!!");
?>
<font color="#003399">Dados atualizados com sucesso!</font><br><br>
<a href="visual.php?numero_br=<? echo $numero_br; ?>"><font color="#003399">Voltar</font></a>
