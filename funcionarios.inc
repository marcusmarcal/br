<select size="1" name="responsavel" style="font-family: Arial; color: #000066; background-color: #FFFFFF; font-weight: bold">
<?
$tabela = "funcionarios_br";
$consulta_nome = "select * from $tabela order by id";
$resultado_nome = mysql_query($consulta_nome,$conexao) or die("<font color=\"#003399\">N�o foi possivel conectar ao banco da dados de nomees");
while ($linha = mysql_fetch_row($resultado_nome)) {
$nome = $linha[1];
if ($nome == $responsavel) {
   $selected = " selected"; }
   else $selected = "";
printf("<option$selected>$nome</option>"); }
?>
</select>
