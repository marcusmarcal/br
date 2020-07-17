<?
include("conexao.php");
?>
<html>
<body>
<h3><font color="#003399">Cadastrar novo transportadoras</font></h3>
<form method="POST" action="cadastrar_transportadoras1.php">
  <input type="hidden" name="numero_br" value="<? echo $numero_br; ?>">
  <table border="0" width="100%" style="font-family: Arial; color: #697BFC">
    <tr>
      <td width="19%">Nome da transportadoraa:</td>
      <td width="81%"><input type="text" name="add_transportadora" size="35" style="font-family: Arial; color: #FFFFFF; background-color: #C0C0C0"></td>
    </tr>
  </table>
  <p><input type="submit" value="Cadastrar"><input type="reset" value="Limpar"></p>
</form>
<hr>
<h3><font color="#003399">Tabela de transportadoras já cadastrados</font></h3>
<h4><font color="#003399">clique no nome da transportadoras para excluí-la</font></h4>
<table border="0" align="center">
<?
$tabela = "transportadoras_br";
$consulta_transportadoras = "select * from $tabela order by nome";
$resultado_transportadoras = mysql_query($consulta_transportadoras,$conexao) or die("<font color=\"#003399\">Não foi possivel conectar ao banco da dados");
while ($linha = mysql_fetch_array($resultado_transportadoras)) {
$id = $linha["id"];
$transportadoras = $linha["nome"];
printf("<tr><td><a href=\"excluir_transportadoras.php?id=$id\"><font color=\"#003399\">$transportadoras</td></tr>"); }?>
</table>
</body>

</html>

