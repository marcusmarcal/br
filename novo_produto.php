<?
include("conexao.php");
$tabela = "produtos_br";
$consulta = "select * from $tabela order by produto";
$resultado = mysql_query($consulta,$conexao) or die("<font color=\"#003399\">Não foi possivel conectar ao banco da dados");
?>

<h2><font color="#003399">Adicionar produtos no BR número <? echo $numero_br; ?>!</font></h2>
<form method="POST" action="add_produtos.php">
<input type="hidden" name="numero_br" value="<? echo $numero_br; ?>">
  <table border="0" width="100%" style="font-family: Arial; color: #697BFC">

    <tr>
      <td width="40%">Nome do produto:</td>
      <td width="81%">
<? include("produtos.inc"); ?>
      </td>
    </tr>
    <tr>
      <td width="19%">Número de série:</td>
      <td width="81%"><input type="text" name="numero_serie" size="35" style="font-family: Arial; color: #000000; background-color:
#ffffff"></td>
    </tr>
    <tr>
      <td width="19%">MAC Address:</td>
      <td width="81%"><input type="text" name="mac_addr" size="35" style="font-family: Arial; color: #000000; background-color:
#ffffff"></td>
    </tr>
  </table>
  <p><input type="submit" value="Cadastrar"><input type="reset" value="Limpar"></p>
</form>
<a href="index.php"><font color="#003399">Voltar</font></a>

