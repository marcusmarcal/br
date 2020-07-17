<?
include("conexao.php");
if ($search != ""){
 $search = $search;}
else $search = "Digite aqui";
$consulta = "select * from $tabela  where 
numero_br = '$search' or 
nome_fornecedor = '$search' or
ordem_compra = '$search' or
numero_nota = '$search'
order by numero_br";
$resultado = mysql_query($consulta,$conexao) or die("<font color=\"#003399\">Não foi possivel conectar ao banco da dados");
?>
<center>
<h2>Resultado da pesquisa</h2>
<hr>
<form action="" method="post">
<input type="text" name="search" value="<? echo $search; ?>"> <input type="submit" value="Localizar">
</form>
<hr>
<hr>
<table border="0" width="100%" align="center" style="font-size: 8pt">
<tr border="1">
<td >&nbsp;<b>Número do BR</b>&nbsp;</td>
<td >&nbsp;<b>Nome do Fornecedor</b>&nbsp;</td>
<td >&nbsp;<b>Numero da Nota Fiscal</b>&nbsp;</td>
<td >&nbsp;<b>Data da Nota Fiscal</b>&nbsp;</td>
<td >&nbsp;<b>Data do Recebimento</b>&nbsp;</td>
<td >&nbsp;<b>Ordem de Compra</b>&nbsp;</td>
<td >&nbsp;<b>Total de produtos</b>&nbsp;</td>

</tr>
<?
while ($linha = mysql_fetch_array($resultado)) {
$numero_br = $linha["numero_br"];
$nome_fornecedor = $linha["nome_fornecedor"];
$numero_nota = $linha["numero_nota"];
$data_nota = $linha["data_nota"];
$data_recebimento = $linha["data_recebimento"];
$ordem_compra = $linha["ordem_compra"];
$data_nota = converte_data("$data_nota");
$data_recebimento = converte_data("$data_recebimento");
$consulta_dados = "select * from dados_br where numero_br=$numero_br order by produto";
$resultado_dados = mysql_query($consulta_dados,$conexao);
$registros = mysql_num_rows($resultado_dados);
?>
<tr>
<td>&nbsp;<a href="visual.php?numero_br=<? echo $numero_br; ?>"><? echo $numero_br; ?></td>
<td>&nbsp;<? echo $nome_fornecedor; ?></td>
<td>&nbsp;<? echo $numero_nota; ?></td>
<td>&nbsp;<? echo $data_nota; ?></td>
<td>&nbsp;<? echo $data_recebimento; ?></td>
<td>&nbsp;<? echo $ordem_compra; ?></td>
<td>&nbsp;<font color="red"><? echo $registros; ?></td>

</tr>
<? } ?>
</table>
