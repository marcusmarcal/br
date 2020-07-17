<select size="1" name="produto" style="background-color: #ffffff; color: #000000">
<?
$tabela = "produtos_br";
$consulta_produto = "select * from $tabela order by produto";
$resultado_produto = mysql_query($consulta_produto,$conexao) or die("<font color=\"#003399\">Não foi possivel conectar ao banco da dados");
while ($linha = mysql_fetch_array($resultado_produto)) {
$nome = $linha["produto"];
$nome = trim($nome);
if ($nome == $produto) {
   $selected = "selected"; }
   else $selected = "";
printf("<option $selected>$nome</option>"); }
?>
</select>
