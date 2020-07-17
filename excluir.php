<?
include("conexao.php");
$consulta = "select * from $tabela where numero_br=$numero_br";
$resultado = mysql_query($consulta,$conexao);

?>
<html>
<body>
<?
include ("senha.php");
?>

<center>
<font color="#003399"><b>Confirmar exclusão do BR abaixo?</b>
<hr>
<br>
<table border="1" width="50%">
    <tr>
      <td width="50%"><font color="#003399"><b>Número do BR:</td>
      <td width="50%"><font color="#003399"><? echo $numero_br; ?></td>
    </tr>
  </table><br>
<b><center><a href="excluir1.php?numero_br=<? echo $numero_br; ?>"><font color="#003399">Confirmar!</font></center><br>
  </center>
