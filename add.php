<?
include("conexao.php");
if ($numero_nota != ""){
	$numero_nota = $numero_nota; }
else $numero_nota = "Sem Nota";
$data_recebimento = converte_data("$data_recebimento");
$data_nota = converte_data("$data_nota");
$add = "insert into $tabela
(nome_fornecedor,natureza,numero_nota,data_nota,transportadora,ordem_compra,data_recebimento,autorizacao,responsavel,obs) values
(\"$nome_fornecedor\",\"$natureza\",\"$numero_nota\",\"$data_nota\",\"$transportadora\",\"$ordem_compra\",\"$data_recebimento\",\"$autorizacao\",\"$responsavel\",\"$obs\")";
mysql_query($add,$conexao) or die("<font color=\"red\">Erro: Não foi possível gravar dados no banco!</font><br><br><a href=\"novo.php\"><font color=\"#003399\">Voltar</font></a>");

$consulta = "select * from $tabela";
$resultado = mysql_query($consulta,$conexao) or die("<font color=\"#003399\">Não foi possivel conectar ao banco da dados");

while ($linha = mysql_fetch_row($resultado)) {
$numero_br = $linha[0];
}
?>
<h2><font color="#003399">Adicionar produtos no BR número <? echo $numero_br; ?>!</font></h2>
<form method="POST" action="add_produtos.php">
<input type="hidden" name="numero_br" value="<? echo $numero_br; ?>">
  <table border="0" width="100%" style="font-family: Arial; color: #697BFC">
   <tr>
      <td width="40%">Nome do produto:</td>
      <td width="81%">
<?
include("produtos.inc");
?>
</td></tr>
    <tr>
      <td width="19%">Número de série:</td>
      <td width="81%"><input type="text" name="numero_serie" size="35" style="font-family: Arial; color: #FFFFFF; background-color: #C0C0C0"></td>
    </tr>
    <tr>
      <td width="19%">MAC Address:</td>
      <td width="81%"><input type="text" name="mac_addr" size="35" style="font-family: Arial; color: #FFFFFF; background-color: #C0C0C0"></td>
    </tr>
  </table>
  <p><input type="submit" value="Cadastrar"><input type="reset" value="Limpar"></p>
</form>
<hr>
<form action="cadastrar_produto.php" method="post"><input type="submit" value="Cadastrar Produto"></form>
<form action="index.php" method="post"><input type="hidden" value="<? echo("$numero_br"); ?>"><input type="submit" value="Voltar"></form>

