<html>
<head>
<link rel="stylesheet" type="text/css" href="../CSS/estilo.css" />
</head>
<body>
<table id=borda border=1 style="position: relative; background-color: #87cefa; top: -5px; left: -5px;" width=100%;
	height=115px; cellspacing=0>
		<tr><td></td></tr>
	</table>
	<div class=menu  style="position: absolute; top: 10px; left: 10px;">
		<li><a href="../View/home.php">Inicio</a></li>
		<li><a href="adotar.php">Adotar</a></li>
		<li><a href="perdidos.php">Perdidos</a></li>
		<li><a href="encontrados.php">Encontrados</a></li>
		<li><a href="contato.php">Contato</a></li>
	</div>
	<form action="../Controller/loginController.php" method="post" name=formHeader>
	<table border=0 id="tabela" align="right" width=250
		style="position: absolute; font-size: 20px; top: 15px; left: 1100px;"  cellspacing=0>
		<tr>
			<td width=20%>Login:</td>
			<td><input type=text name=user></td>
		</tr>
		<tr>
			<td>Senha:</td>
			<td><input type=text name=pass></td>
		</tr>
		<tr>
			<td><input type="submit" value=Logar style="font-size: 17px"></td>
			<td><input type="reset" value=Limpar style="font-size: 17px"></td>
		</tr>
		<tr>
			<td colspan="2"><a href="cadastrarUsuario.php"><input type="button" value="Nao Possuo Cadastro"
				style="font-size: 17px"></a></td>
		</tr>
		</form>
	</table>
</body>
</html>