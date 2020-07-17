<?
include("conexao.php");
$consulta = "select * from $tabela where numero_br=$numero_br";
$resultado = mysql_query($consulta,$conexao) or die("<font color=\"#003399\">Não foi possivel conectar ao banco da dados");
$linha = mysql_fetch_array($resultado);
$numero_br = $linha["numero_br"];
$nome_fornecedor = $linha["nome_fornecedor"];
$numero_nota = $linha["numero_nota"];
$data_nota = $linha["data_nota"];
$data_recebimento = $linha["data_recebimento"];
$responsavel = $linha["responsavel"];
$natureza = $linha["natureza"];
$transportadora = $linha["transportadora"];
$ordem_compra = $linha["ordem_compra"];
$autorizacao = $linha["autorizacao"];
$obs = $linha["obs"];

// Convertendo as datas para formato brasileiro.
$data_nota = converte_data("$data_nota"); 
$data_recebimento = converte_data("$data_recebimento");
?>
<h1><center>Boletim de Recebimento N&ordm; <? echo $numero_br; ?></h1></center>
<table border="1" width="60%" style="font-size: 10pt">
<tr>
<td>&nbsp;<font color="#000066"><b>Nome do Fornecedor</b>&nbsp;</td>
<td>&nbsp;<font color="#003399"><? echo $nome_fornecedor; ?></td>
</tr>
<tr>
<td>&nbsp;<font color="#000066"><b>Natureza</b>&nbsp;</td>
<td>&nbsp;<font color="#003399"><? echo $natureza; ?></td>
</tr>
<tr><td >&nbsp;<font color="#000066"><b>Número da Nota Fiscal</b>&nbsp;</td>
<td>&nbsp;<font color="#003399"><? echo $numero_nota; ?></td>
</tr>
<tr><td >&nbsp;<font color="#000066"><b>Data da Nota Fiscal</b>&nbsp;</td>
<td>&nbsp;<font color="#003399"><? echo $data_nota; ?></td>
</tr>
<tr>
<td>&nbsp;<font color="#000066"><b>Transportadora</b>&nbsp;</td>
<td>&nbsp;<font color="#003399"><? echo $transportadora; ?></td>
</tr>
<tr>
<td>&nbsp;<font color="#000066"><b>Ordem de Compra</b>&nbsp;</td>
<td>&nbsp;<font color="#003399"><? echo $ordem_compra; ?></td>
</tr>

<tr><td >&nbsp;<font color="#000066"><b>Data do Recebimento</b>&nbsp;</td>
<td>&nbsp;<font color="#003399"><? echo $data_recebimento; ?></td>
</tr>
<tr>
<td>&nbsp;<font color="#000066"><b>Autorização</b>&nbsp;</td>
<td>&nbsp;<font color="#003399"><? echo $autorizacao; ?></td>
</tr>

<tr><td >&nbsp;<font color="#000066"><b>Responsável</b>&nbsp;</td>
<td>&nbsp;<font color="#003399"><? echo $responsavel; ?></td>
</tr>

<tr><td >&nbsp;<font color="#000066"><b>Observações</b>&nbsp;</td>
<td>&nbsp;<font color="#003399"><? echo $obs; ?></td>
</tr>

</table>
<br>
<table border="0">
<tr><td>
<form action="editar.php" method="post" align="left" width="50%">
<input type="hidden" name="numero_br" value="<? echo $numero_br; ?>">
<input type="submit" value="Editar dados do BR">
</form>
</td>
<td>
<form action="novo_produto.php" method="post">
<input type="hidden" name="numero_br" value="<? echo $numero_br; ?>">
<input type="submit" value="Adicionar produtos ao BR">
</form>
</td></tr>
</table>

<center>

<?
//$consulta_dados = "select * from dados_br where numero_br=$numero_br order by produto,numero_serie,mac_addr";
$consulta_dados = "select * from dados_br where numero_br=$numero_br order by id";
$resultado_dados = mysql_query($consulta_dados,$conexao) or die("<font color=\"#003399\">Não foi possivel conectar ao banco da dados");
$registros = mysql_num_rows($resultado_dados);

?>
<center><font color="#003399">Total de Produtos: <b><font color="red"><? echo $registros; ?></b></font></a><br><br>
<table border="1" width="50%" align="center" style="font-size: 8pt">
<tr border="1" style="background-color: #C0C0C0; color: #000066; font-family: Arial; border: 3 ridge #697BFC"
bordercolor="#ffffff">
<td width="2%"></td>
<td >&nbsp;<b>Nome do Produto</b>&nbsp;</td>
<td >&nbsp;<b>Número de Série</b>&nbsp;</td>
<td >&nbsp;<b>MAC Address</b>&nbsp;</td>
<td >&nbsp;<b>ID</b>&nbsp;</td>

</tr>
<?
$cont = "1";
while ($linha = mysql_fetch_array($resultado_dados)) {
$id = $linha["id"];
$numero_br = $linha["numero_br"];
$produto = $linha["produto"];
$numero_serie = $linha["numero_serie"];
$mac_addr = $linha["mac_addr"];

?>
<tr style="background-color: #ffffff; color: #000066; font-family: Arial;
border: 3 ridge #697BFC"
bordercolor="#c0c0c0">
<td>&nbsp;<a href="editar_produto.php?id=<? echo $id; ?>"><font color="#003399"><? echo $cont++;
?></a></td>
<td>&nbsp;<font color="#003399"><? echo $produto; ?></td>
<td>&nbsp;<font color="#003399"><? echo $numero_serie; ?></td>
<td>&nbsp;<font color="#003399"><? echo $mac_addr; ?></td>
<td>&nbsp;<font color="#003399">#<? echo $id; ?>#</td>
</tr>
<? } ?>
</table>

