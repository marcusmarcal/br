<?
include("conexao.php");
?>
<html>
<body>
<h3><font color="#003399">Cadastrar nova transportadora</font></h3>
<form method="POST" action="">
  <table border="0" width="100%" style="font-family: Arial; color: #697BFC">
    <tr>
      <td width="19%">Nome da transportadora:</td>
      <td width="81%"><input type="text" name="add_transportadora" size="35" style="font-family: Arial; color: #FFFFFF; background-color: #C0C0C0"></td>
    </tr>
  </table>
  <p><input type="submit" value="Cadastrar"><input type="reset" value="Limpar"></p>
</form>
<hr>
<h3><font color="#003399">Tabela de transportadoras j� cadastrados</font></h3>
<h4><font color="#003399">clique no nome da transportadora para exclu�-la</font></h4>
<a href="index.php"><font color="#003399">Voltar</font></a>
<table border="0" align="center">
<?
$tabela = "transportadoras_br";
$add = "insert into $tabela (nome) values (\"$add_transportadora\")";
mysql_query($add,$conexao) or die("<font color=\"red\">Erro: transportadoras <font color=\"green\"><b>$add_transportadoras</b></font> j� cadastrado no banco!</font><br><br><a href=\"cadastrar_transportadoras.php\"><font color=\"#003399\">Voltar</font></a>");

$consulta_transportadoras = "select * from $tabela order by nome";
$resultado_transportadoras = mysql_query($consulta_transportadoras,$conexao) or die("<font color=\"#003399\">N�o foi possivel conectar ao banco da dados");
while ($linha = mysql_fetch_array($resultado_transportadoras)) {
$id = $linha["id"];
$transportadoras = $linha["nome"];
printf("<tr><td><a href=\"excluir_prod.php?id=$id\"><font color=\"#003399\">$transportadoras</td></tr>"); }?>
</body>

</html>

