<?
include("conexao.php");
?>
<html>
<body>
<h3><font color="#003399">Cadastrar novo fornecedor</font></h3>
<form method="POST" action="cadastrar_fornecedor1.php">
  <input type="hidden" name="numero_br" value="<? echo $numero_br; ?>">
  <table border="0" width="100%" style="font-family: Arial; color: #697BFC">
    <tr>
      <td width="19%">Nome do fornecedor:</td>
      <td width="81%"><input type="text" name="add_fornecedor" size="35" style="font-family: Arial; color: #FFFFFF; background-color: #C0C0C0"></td>
    </tr>
  </table>
  <p><input type="submit" value="Cadastrar"><input type="reset" value="Limpar"></p>
</form>
<hr>
<h3><font color="#003399">Tabela de fornecedores já cadastrados</font></h3>
<h4><font color="#003399">clique no nome do fornecedor para excluí-lo</font></h4>
<table border="0" align="center">
<?
$tabela = "fornecedores_br";
$consulta_fornecedor = "select * from $tabela order by nome";
$resultado_fornecedor = mysql_query($consulta_fornecedor,$conexao) or die("<font color=\"#003399\">Não foi possivel conectar ao banco da dados");
while ($linha = mysql_fetch_row($resultado_fornecedor)) {
$id = $linha[0];
$fornecedor = $linha[1];
printf("<tr><td><a href=\"excluir_fornecedor.php?id=$id\"><font color=\"#003399\">$fornecedor</td></tr>"); }?>
</body>

</html>

