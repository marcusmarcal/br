<?
include("conexao.php");
/*if ($mac_addr != "") {
	$add_mac = "$mac_addr"; }
else	$add_mac = NULL;*/

/*if ($numero_serie != "") {
        $numero_serie = $numero_serie; }
else $numero_serie = NULL;*/

$mac_addr = strtoupper($mac_addr);
$numero_serie = strtoupper($numero_serie);
$tabela = "dados_br";
$add = "insert into $tabela (numero_br,produto,numero_serie,mac_addr)  values
(\"$numero_br\",\"$produto\",\"$numero_serie\",\"$mac_addr\")";
mysql_query($add,$conexao) or die("<font color=\"red\">Erro: Número de série <a href=\"search_dados.php?numero_serie=$numero_serie\"><font color=\"green\"><b>$numero_serie</b></font></a> ou MAC Address <a href=\"search_dados.php?search_mac=$mac_addr\"><font color=\"green\"><b>$mac_addr</b></font></a> já cadastrados no banco!</font><br><br><a href=\"novo_produto.php?numero_br=$numero_br\"><font color=\"#003399\">Voltar</font></a>");
?>
<h3><font color="#003399">Adicionar outro produto no BR número 	</font></h3>
<form method="POST" action="">
<input type="hidden" name="numero_br" value="<? echo $numero_br; ?>">
  <table border="0" width="100%" style="font-family: Arial; color: #697BFC">
   <tr>
      <td width="40%">Nome do produto:</td>
      <td width="81%"><? include("produtos.inc"); ?></td></tr>
    <tr>
      <td width="19%">Número de série:</td>
      <td width="81%"><input type="text" value="<? echo $numero_serie; ?>" name="numero_serie" size="35" style="font-family: Arial; color:
#000000; background-color: #ffffff"></td>
    </tr>
    <tr>
      <td width="19%">MAC Address:</td>
      <td width="81%"><input type="text" value="<? echo $mac_addr; ?>" name="mac_addr" size="35" style="font-family: Arial; color:
#000000; background-color: #ffffff"></td>
    </tr>
  </table>
  <p><input type="submit" value="Cadastrar"><input type="reset" value="Limpar"></p>
</form>
<?
$consulta_dados = "select * from dados_br where numero_br=$numero_br order by produto";
$resultado_dados = mysql_query($consulta_dados,$conexao) or die("<font color=\"#003399\">Não foi possivel conectar ao banco da dados");
$registros = mysql_num_rows($resultado_dados);
?>
<center><font color="green">Total de produtos do BR: <b><? echo $registros; ?></b></font>
<table border="1" width="50%" align="center" style="font-size: 8pt">
<tr border="1" style="background-color: #c0c0c0; color: #000066; font-family: Arial; border: 3 ridge #697BFC"
bordercolor="#ffffff">
<td width="1%"></td>
<td >&nbsp;<b>Nome do Produto</b>&nbsp;</td>
<td >&nbsp;<b>Número de Série</b>&nbsp;</td>
<td >&nbsp;<b>MAC Address</b>&nbsp;</td>

</tr>
<?
$cont = "1";
while ($linha = mysql_fetch_row($resultado_dados)) {
$id = $linha[0];
$numero_br = $linha[1];
$produto = $linha[2];
$numero_serie = $linha[3];
$mac_addr = $linha[4];
?>
<tr border="1" style="background-color: #ffffff; color: #000066;
font-family: Arial; border: 3 ridge #697BFC"
bordercolor="#c0c0c0">
<td>&nbsp;<font color="#003399"><? echo $cont++; ?></td>
<td>&nbsp;<a href="editar_produto.php?id=<? echo $id; ?>"><font color="#003399"><? echo $produto; ?></td>
<td>&nbsp;<font color="#003399"><? echo $numero_serie; ?></td>
<td>&nbsp;<font color="#003399"><? echo $mac_addr; ?></td>
</tr>
<?  } ?>
</table>
<br>
<a href="index.php"><font color="#003399">Voltar</font></a>

