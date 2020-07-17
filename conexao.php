<html>
	<head>
		<title>BR - Boletins de Recebimentos</title>
		<link rel="stylesheet" type="text/css" href="temas/estilo.css">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	</head>
	<body>
		<table border="0" align="center" style="margin-top: 0; margin-bottom: 0">
			<tr>
				<td align="center">
				<form method="post" action="index.php">
					<input type="submit" value="Home">
				</form></td>
				<td align="center">
				<form action="novo.php" method="post">
					<input type="submit" value="Cadastrar novo BR">
				</form></td>
				<td align="center">
				<form action="search_dados.php" method="post">
					<input type="submit" value="Localizar Produtos">
				</form></td>
				<td align="center">
				<form action="search_fornecedor.php" method="post">
					<input type="submit" value="Localizar BR por Fornecedor">
				</form></td>
				<td align="center">
				<form action="cadastrar_fornecedor.php" method="post">
					<input type="submit"
					value="Fornecedores">
				</form></td>
				<td align="center">
				<form action="cadastrar_funcionario.php" method="post">
					<input type="submit"
					value="Funcion&aacute;rios">
				</form> </form> </td>
				<td align="center">
				<form action="cadastrar_produto.php" method="post">
					<input type="submit"
					value="Produtos">
				</form> </form> </td>
				<td align="center">
				<form action="cadastrar_transportadoras.php" method="post">
					<input type="submit"
					value="Transportadoras">
				</form> </form> </td>
			</tr>
		</table>
		<hr>
		<?
		$mysql_server = "url_do_servidor";
		$mysql_user = "usuário";
		$mysql_pass = "senha";
		$mysql_db = "nome_do_banco";
		$conexao = mysql_connect($mysql_server, $mysql_user, $mysql_pass) or die("N&atilde;o foi possivel conectar ao banco!!" . $mysql_error);
		$sql = mysql_select_db($mysql_db, $conexao);
		$tabela = "index_br";

		/*
		 Fun��o converte_data
		 Autor : Adir Amaral - Taober.com.br
		 Data  : 18/11/2002
		 Vers�o: 1.0

		 Esta fun��o n�o necessita de par�metros
		 ela converte a data automaticamente no
		 padr�o americano para brasileiro e vice-versa
		 basta usar assim:

		 echo converte_data("data_a_converter");

		 */

		function converte_data($data) {
			if (strstr($data, "/")) {
				$A = explode("/", $data);
				$V_data = $A[2] . "-" . $A[1] . "-" . $A[0];
			} elseif (strstr($data, "-")) {
				$A = explode("-", $data);
				$V_data = $A[2] . "/" . $A[1] . "/" . $A[0];
			}
			return $V_data;
		}
		?>
