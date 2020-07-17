<?
include("conexao.php");
?>
<html>
<body>
<h3><font color="#003399">Cadastrar novo funcionario</font></h3>
<form method="POST" action="">
  <table border="0" width="100%" style="font-family: Arial; color: #697BFC">
    <tr>
      <td width="19%">Nome do funcionario:</td>
      <td width="81%"><input type="text" name="add_funcionario" size="35" style="font-family: Arial; color: #FFFFFF; background-color: #C0C0C0"></td>
    </tr>
  </table>
  <p><input type="submit" value="Cadastrar"><input type="reset" value="Limpar"></p>
</form>
<hr>
<h3><font color="#003399">Tabela de funcionarios já cadastrados</font></h3>
<h4><font color="#003399">clique no nome do funcionario para excluí-lo</font></h4>
<a href="index.php"><font color="#003399">Voltar</font></a>
<table border="0" align="center">
<?
$tabela = "funcionarios_br";
$add = "insert into $tabela (nome) values (\"$add_funcionario\")";
mysql_query($add,$conexao) or die("<font color=\"red\">Erro: funcionario <font color=\"green\"><b>$add_funcionario</b></font> já cadastrado no banco!</font><br><br><a href=\"cadastrar_funcionario.php\"><font color=\"#003399\">Voltar</font></a>");

$consulta_funcionario = "select * from $tabela order by nome";
$resultado_funcionario = mysql_query($consulta_funcionario,$conexao) or die("<font color=\"#003399\">Não foi possivel conectar ao banco da dados");
while ($linha = mysql_fetch_row($resultado_funcionario)) {
$id = $linha[0];
$funcionario = $linha[1];
printf("<tr><td><a href=\"excluir_prod.php?id=$id\"><font color=\"#003399\">$funcionario</td></tr>"); }?>
</body>

</html>

