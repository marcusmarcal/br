<?
include("conexao.php");
$consulta = "select * from $tabela where numero_br=$numero_br";
$resultado = mysql_query($consulta,$conexao);

?>
<html>
<body>
<?
while ($linha = mysql_fetch_array($resultado)) {
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
$data_nota = converte_data("$data_nota"); 
$data_recebimento = converte_data("$data_recebimento");
}
?>
<center><h3><font color="#000066"><b>Dados do BR número: <? echo $numero_br; ?></h3></center>
<form method="POST" action="atualizar.php">
<input type="hidden" name="numero_br" value="<? echo $numero_br; ?>">
  <table border="0" width="100%" style="font-family: Arial; color: #697BFC">
    <tr>
      <td width="40%">Nome do fornecedor:</td>
      <td width="81%"><? include("fornecedores.inc"); ?></td>
    </tr>
    <tr>
      <td width="40%">Natureza:</td>
      <td width="81%"><? include("natureza.inc"); ?></td>
    </tr>
    <tr>
      <td width="19%">Numero da Nota Fiscal:</td>
      <td width="81%"><input type="text" value="<? echo $numero_nota; ?>" name="numero_nota" size="35" style="font-family: Arial; color: #FFFFFF; background-color: #C0C0C0"></td>
    </tr>
    <tr> 
      <td width="40%">Transportadora:</td>
      <td width="81%"><? include("transportadoras.inc"); ?></td>
    </tr>
    <tr>
      <td width="19%">Data da Nota Fiscal:</td>
      <td width="81%"><input type="text" value="<? echo $data_nota; ?>" name="data_nota" size="35" style="font-family: Arial; color: #FFFFFF; background-color: #C0C0C0"></td>
    </tr>
    <tr>
      <td width="19%">Data do Recebimento:</td>
      <td width="81%"><input type="text" value="<? echo $data_recebimento; ?>" name="data_recebimento" size="35" style="font-family: Arial; color: #FFFFFF; background-color: #C0C0C0"></td>
    </tr>
    <tr>
      <td width="19%">Ordem de Compra:</td>
      <td width="81%"><input type="text" value="<? echo $ordem_compra; ?>" name="ordem_compra" size="35" style="font-family: Arial; color: #FFFFFF; background-color: #C0C0C0"></td>
    </tr>
    <tr>
      <td width="19%">Autorização:</td>
      <td width="81%"><? include("autorizacao.inc"); ?></td>
    </tr>
    <tr>
      <td width="19%">Responsável:</td>
      <td width="81%"><? include("funcionarios.inc"); ?></td>
    </tr>
    <tr>
      <td width="19%">Orbservações:</td>
      <td width="81%"><textarea rows="5" cols="40" name="obs"><? echo $obs; ?></textarea></td>
    </tr>
  </table>
  <p><input type="submit" value="Alterar"></p>
</form>

<br>
<? 
/*
 <form action="excluir.php" method="post"><input type="hidden" name="numero_br" value="<? echo $numero_br; ?>"><input type="submit" value="Excluir BR"></form>
*/
?>
<form action="cadastrar_fornecedor.php" method="post"><input type="submit" value="Cadastrar Fornecedor"></form>
<form action="cadastrar_funcionario.php" method="post"><input type="submit" value="Cadastrar Funcionário"></form>
</body>

</html>
