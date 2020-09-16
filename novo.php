<?php
include("conexao.php");
$data = date("d/m/Y");
?>
<html>
<body>
<hr>
<form method="POST" action="add.php">
    <input type="hidden" name="id" value="<? echo $id; ?>">
    <table border="0" width="60%" style="font-family: Arial; color: #000066">
        <tr>
            <td width="19%">Nome do fornecedor:</td>
            <td><? include("fornecedores.inc"); ?>
        </tr>
        <tr>
            <td width="40%">Natureza:</td>
            <td width="81%" colspan="2"><? include("natureza.inc"); ?></td>
        </tr>
        <tr>
            <td width="40%">N�mero da Nota Fiscal:</td>
            <td width="81%" colspan="2"><input type="text" name="numero_nota" size="35" style="font-family: Arial; color: #000066; background-color: white"></td>
        </tr>
        <tr>
            <td width="19%">Data Emiss�o da NF:</td>
            <td width="81%" colspan="2"><input type="text" name="data_nota" value="<? echo $data; ?>" size="35" style="font-family: Arial; color: #000066; background-color: white"></td>
        </tr>
        <tr>
            <td width="19%">Transportadora:</td>
            <td width="81%" colspan="2"><? include("transportadoras.inc"); ?></td>
        </tr>
        <tr>
            <td width="19%">Ordem de Compra:</td>
            <td width="81%" colspan="2"><input type="text" name="ordem_compra" size="35" style="font-family: Arial; color: #000066; background-color: white"></td>
        </tr>
        <tr>
            <td width="19%">Data do Recebimento:</td>
            <td width="81%" colspan="2"><input type="text" name="data_recebimento" value="<? echo $data; ?>" size="35" style="font-family: Arial; color: #000066; background-color: white"></td>
        </tr>
        <tr>
            <td width="19%">Autoriza��o:</td>
            <td width="81%" colspan="2"><? include("autorizacao.inc"); ?>
        </tr>
        <tr>
            <td width="19%">Respons�vel:</td>
            <td width="81%" colspan="2"><? include("funcionarios.inc"); ?></tr>
        <tr>
            <td width="19%">Observa��es:</td>
            <td width="81%" colspan="2"><textarea rows="5" cols="40" nome="obs"
                                                  style="background-color: white"></textarea></tr>
    </table>
    <p><input type="submit" value="Cadastrar"></p>
</form>
<hr>
<br>
</body>

</html>

