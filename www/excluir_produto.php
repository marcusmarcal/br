<?
include("conexao.php");
$tabela = "dados_br";
$consulta = "select * from $tabela where id = $id";
$resultado = mysql_query($consulta,$conexao) or die("deu merda");

?>
<html>
<body>
<?
while ($linha = mysql_fetch_row($resultado)) {
$id = $linha[0];
$numero_br = $linha[1];
$produto = $linha[2];
$numero_serie = $linha[3];
$mac_addr = $linha[4];
}
?>
<center>
<font color="#003399"><b>Confirmar exclusão do produto abaixo?</b>
<hr>
<br>
<table border="1" width="50%">
    <tr>
      <td width="50%"><font color="#003399"><b>Produto:</td>
      <td width="50%"><font color="#003399"><? echo $produto; ?></td>
    </tr>
    <tr>
      <td width="50%"><font color="#003399"><b>Número de Série:</td>
      <td width="50%"><font color="#003399"><? echo $numero_serie; ?></td>
    </tr>
    <tr>
      <td width="50%"><font color="#003399"><b>MAC Addr:</td>
      <td width="50%"><font color="#003399"><? echo $mac_addr; ?></td>
    </tr>
  </table><br>
<b><center><a href="excluir_produto1.php?id=<? echo $id; ?>"><font color="#003399">Confirmar!</font></center><br>
  </center>
