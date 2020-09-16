<?
include("conexao.php");
if ($numero_nota != ""){
        $numero_nota = $numero_nota; }
else $numero_nota = "Sem Nota";
$data_nota = converte_data("$data_nota"); 
$data_recebimento = converte_data("$data_recebimento");
$atualizar = "UPDATE $tabela SET obs='$obs', natureza='$natureza', transportadora='$transportadora', 
ordem_compra='$ordem_compra', autorizacao='$autorizacao', nome_fornecedor='$nome_fornecedor', 
numero_nota='$numero_nota', data_nota='$data_nota', data_recebimento='$data_recebimento', 
responsavel='$responsavel' WHERE numero_br=$numero_br";
mysql_query($atualizar,$conexao) or die("<br>Não foi possivel atualizar dados do banco!!");
?>
<font color="#003399">Dados atualizados com sucesso!</font><br><br>
<a href="index.php"><font color="#003399">Voltar</font></a>
