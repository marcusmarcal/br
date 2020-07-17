<select size="1" name="nome_fornecedor" style="font-family: Arial; color: #000066; background-color: #FFFFFF; font-weight: bold">
<?
$tabela = "fornecedores_br";
$consulta_fornecedor = "select * from $tabela order by nome";
$resultado_fornecedor = mysql_query($consulta_fornecedor,$conexao) or die("<font color=\"#003399\">Não foi possivel conectar ao banco da dados de fornecedores");
while ($linha = mysql_fetch_row($resultado_fornecedor)) {
$fornecedor = $linha[1];
if ($fornecedor == $nome_fornecedor) {
   $selected = " selected"; }
   else $selected = "";
printf("<option$selected>$fornecedor</option>"); }
?>
</select>
