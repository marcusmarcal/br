<?
include("conexao.php");
$consulta_dados = "select * from dados_br where id=$id";
$resultado_dados = mysql_query($consulta_dados,$conexao) or die("<font color=\"#003399\">Não foi possivel conectar ao banco da dados");
?>

<?
while ($linha = mysql_fetch_row($resultado_dados)) {
$id = $linha[0];
$numero_br = $linha[1];
$produto = $linha[2];
$numero_serie = $linha[3];
$mac_addr = $linha[4];

?>
<form method="POST" action="atualizar_produto.php">
<input type="hidden" name="id" value="<? echo $id; ?>">
<input type="hidden" name="numero_br" value="<? echo $numero_br; ?>">
  <table border="0" width="100%" style="font-family: Arial; color: #697BFC">
   <tr>
      <td width="40%">Nome do produto:</td>
      <td width="81%"><? include("produtos.inc"); ?></td></tr>
<tr>
      <td width="19%">Número de série:</td>
      <td width="81%"><input type="text" value="<? echo $numero_serie; ?>" name="numero_serie" size="35" style="font-family: Arial; color: #000000; background-color: #C0C0C0"></td>
    </tr>
    <tr>
      <td width="19%">MAC Address:</td>
      <td width="81%"><input type="text" value="<? echo $mac_addr; ?>" name="mac_addr" size="35" style="font-family: Arial; color:
#000000; background-color: #C0C0C0"></td>
    </tr>
  </table>
  <p><input type="submit" value="Alterar"><input type="reset" value="Limpar"></p>
</form>

<? } ?>
<center><a href="excluir_produto.php?id=<? echo $id; ?>"><font color="#003399">Excluir registro</font></center><br>
</body>

</html>
</table>
<br>
<a href="index.php"><font color="#003399">Voltar</font></a>

