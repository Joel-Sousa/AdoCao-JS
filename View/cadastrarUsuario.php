<html>
<head></head>
<body>
<?php include 'header.php';?>
<form action="../Controller/cadastrarUsuarioController.php" method="post" name=cadastrarUsuario>
<table border=0 width=300 height=400; style="position: relative; top:10px;left: 510px;">
		<tr>
			<td colspan="2" align="center">Cadastrar Usuario</td>
		</tr>
		<tr>
			<td>Nome: </td>
			<td><input class="form-control" type="text" name=nome required="required" minlength="8"></td>
		</tr>
		<tr>
			<td>Endereco: </td>
			<td><input class="form-control" type="text" name=endereco required="required"></td>
		</tr>
		<tr>
			<td>Cidade: </td>
			<td><input class="form-control" type="text" name=cidade required="required"></td>
		</tr>
		<tr>
			<td>Celular: </td>
			<td><input class="form-control" type="number" name=celular maxlength="9" required="required"></td>
		</tr>
		<tr>
			<td>Email: </td>
			<td><input class="form-control" type="email" name=email required="required"></td>
		</tr>
		<tr>
			<td>Usuario: </td>
			<td><input class="form-control" type="text" name=usuario required="required"></td>
		</tr>
		<tr>
			<td>Senha: </td>
			<td><input class="form-control" type="text" name=senha required="required" minlength=8></td>
		</tr>
		<tr>
			<td><input  class='btn btn-success' type="submit" value=Cadastrar></td>
			<td><input  class='btn btn-success' type="reset" value=Limpar></td>
		</tr>
	</table>
	</form>
</body>
</html>