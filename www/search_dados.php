<?
include("conexao.php");
if ($mac_addr != "") { 
	$mac_addr = $mac_addr; }
	else $mac_addr = "false";
if ($numero_serie != "") { 
	$numero_serie = $numero_serie; }
	else $numero_serie = "false";
$search_mac = strtoupper($search_mac);
$search_serie = strtoupper($search_serie);
$consulta_dados = "select * from dados_br where numero_serie like '%$numero_serie%' or mac_addr like '%$mac_addr%' or produto = '$produto' order by produto";
$resultado_dados = mysql_query($consulta_dados,$conexao) or die(mysql_error());
?>
<hr>
<center>
<? 
echo $produto;
?>

<h2>Localizar por Número de Série ou MAC Address<h2>
<form action="" method="get">
<table border="0" width="50%">
<tr>
<td width="30%">Produto:</td><td><select name="produto">
<?
$tabela = "produtos_br";
$consulta_produto = "select * from $tabela order by produto";
$resultado_produto = mysql_query($consulta_produto,$conexao) or die("<font color=\"#003399\">Não foi possivel conectar ao ban co da dados");
while ($linha = mysql_fetch_row($resultado_produto)) {
$id = $linha[0];
$produto = $linha[1];
?>
<option><? echo $produto; ?></option>
<? } ?></td><td><input type="submit" value="Localizar"></td></tr>
</table>
</form>
<form action="" method="get">
<table border="0" width="50%">
<tr>
<td width="40%"><font color="#003399">Número de série:</td>
<td><input type="text" name="numero_serie"></td>
<td><input type="submit" value="Localizar"></td>
</tr>
</table>
</form>
<form action="" method="get">
<table border="0" width="50%">
<tr>
<td><font color="#003399">MAC Address:</td>
<td><input type="text" name="mac_addr"></td>
<td><input type="submit" value="Localizar"></td>
</tr>
</table>
</form>
<hr>
<table border="0" width="100%" align="center" style="font-size: 8pt">
<tr border="1" style="background-color: #C0C0C0; color: #FFFFFF; font-family: Arial; border: 3 ridge #697BFC" bordercolor="#0000FF">
<td >&nbsp;<b>Número do BR</b>&nbsp;</td>
<td >&nbsp;<b>Nome do Produto</b>&nbsp;</td>
<td >&nbsp;<b>Número de Série</b>&nbsp;</td>
<td >&nbsp;<b>MAC Address</b>&nbsp;</td>

</tr>
<?
while ($linha = mysql_fetch_row($resultado_dados)) {
$id = $linha[0];
$numero_br = $linha[1];
$produto = $linha[2];
$numero_serie = $linha[3];
$mac_addr = $linha[4];

?>
<tr>
<td>&nbsp;<a href="visual.php?numero_br=<? echo $numero_br; ?>"><font color="#003399">-&nbsp;<? echo $numero_br; ?></td>
<td>&nbsp;<font color="#003399"><? echo $produto; ?></td>
<td>&nbsp;<font color="#003399"><? echo $numero_serie; ?></td>
<td>&nbsp;<font color="#003399"><? echo $mac_addr; ?></td>
</tr>
<? } ?>
</table>

