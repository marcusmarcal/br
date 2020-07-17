<?
include("conexao.php");
$consulta_dados = "select * from index_br where (nome_fornecedor = '$nome_fornecedor')";
$resultado_dados = mysql_query($consulta_dados) or die("<font color=\"#003399\">Não foi possivel conectar ao banco da dados" . mysql_error());
?>
<hr>
<center>
<h2>Localizar BR por Fornecedor<h2>
<form action="" method="post">
<table border="0" width="50%">
<tr>
<td width="40%"><font color="#003399">Fornecedor:</td>
<td><? include "fornecedores.inc"; ?></td>
<td><input type="submit" value="pesquisar"></td>
</tr>
</table>
</form>
<hr>
<table border="0" width="100%" align="center" style="font-size: 8pt">
<tr border="1" style="background-color: #C0C0C0; color: #FFFFFF; font-family: Arial; border: 3 ridge #697BFC" bordercolor="#0000FF">
<td >&nbsp;<b>Número do BR</b>&nbsp;</td>
<td >&nbsp;<b>Nome do Fornecedor</b>&nbsp;</td>

</tr>
<?
while ($linha = mysql_fetch_array($resultado_dados)) {
$numero_br = $linha['numero_br'];
$nome_fornecedor = $linha['nome_fornecedor'];

?>
<tr>
<td>&nbsp;<a href="visual.php?numero_br=<? echo $numero_br; ?>"><font color="#003399"><? echo $numero_br; ?></td>
<td>&nbsp;<font color="#003399"><? echo $nome_fornecedor; ?></td>
</tr>
<? } ?>
</table>

