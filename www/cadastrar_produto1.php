<?
include("conexao.php");
?>
<html>
<body>
<h3><font color="#003399">Cadastrar novo produto</font></h3>
<form method="POST" action="">
  <table border="0" width="100%" style="font-family: Arial; color: #697BFC">
    <tr>
      <td width="19%">Nome do produto:</td>
      <td width="81%"><input type="text" name="add_produto" size="35" style="font-family: Arial; color: #FFFFFF; background-color: #C0C0C0"></td>
    </tr>
  </table>
  <p><input type="submit" value="Cadastrar"><input type="reset" value="Limpar"></p>
</form>
<hr>
<h3><font color="#003399">Tabela de produtos já cadastrados</font></h3>
<h4><font color="#003399">clique no nome do produto para excluí-lo</font></h4>
<a href="novo_produto.php?numero_br=<? echo $numero_br; ?>"><font color="#003399">Voltar</font></a>
<table border="0" align="center">
<?
$tabela = "produtos_br";
$add_produto = trim($add_produto);
$add = "insert into $tabela (produto) values (\"$add_produto\")";
mysql_query($add,$conexao) or die("<font color=\"red\">Erro: Produto <font color=\"green\"><b>$add_produto</b></font> já cadastrado no banco!</font><br><br><a href=\"cadastrar_produto.php\"><font color=\"#003399\">Voltar</font></a>");

$consulta_produto = "select * from $tabela order by produto";
$resultado_produto = mysql_query($consulta_produto,$conexao) or die("<font color=\"#003399\">Não foi possivel conectar ao banco da dados");
while ($linha = mysql_fetch_row($resultado_produto)) {
$id = $linha[0];
$produto = $linha[1];
printf("<tr><td><a href=\"excluir_prod.php?id=$id\"><font color=\"#003399\">$produto</td></tr>"); }?>
</body>

</html>

