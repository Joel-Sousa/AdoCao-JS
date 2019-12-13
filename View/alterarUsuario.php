<html>
<head>
</head>
<body>
<?php include 'header.php';
if($_SESSION["usuario"] == FALSE)
    header("location: index.php");?>
    <?php 
    require_once '../Controller/DAO/usuarioDAO.php';
    $iduUsuario = $_SESSION["idUsuario"];
    $usuarioDAO = new usuarioDAO();
    $usuario = $usuarioDAO->getIdUsuario($iduUsuario);
    ?>
<form action="../Controller/alterarUsuarioController.php" method="post" name=alterarUser>
<table border=0 width=300 height=400; style="position: relative; top: 10px; left: 400px;  width:500;">
		<tr>
			<td colspan="2" align="center">Alterar Dados</td>
		</tr>
		<tr>
			<td></td>
			<td><input class="form-control"  type="hidden" name=idUsuario  value="<?php echo $usuario["idUsuario"]?>"></td>
		</tr>
		<tr>
			<td>Nome:</td>
			<td><input class="form-control"  type="text" name=nome  value="<?php echo $usuario["nome"]?>" required="true"></td>
		</tr>
		<tr>
			<td>Endereco:</td>
			<td><input class="form-control"  type="text" name=endereco value="<?php echo $usuario["endereco"]?>" required="true"></td>
		</tr>
		<tr>
			<td>Cidade:</td>
			<td><input class="form-control"   type="text" name=cidade value="<?php echo $usuario["cidade"]?>" required="true"></td>
		</tr>
		<tr>
			<td>Celular:</td>
			<td><input type="text" class="form-control"  name=celular value="<?php echo $usuario["celular"]?>" required="true"></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="text" class="form-control"  name=email value="<?php echo $usuario["email"]?>" required="true"></td>
		</tr>
		<tr>
			<td>Usuario:</td>
			<td><input type="text"class="form-control"   name=usuario value="<?php echo $usuario["usuario"]?>" required="true"></td>
		</tr>
		<tr>
			<td>Senha:</td>
			<td><input type="text" class="form-control"  name=senha value="<?php echo $usuario["senha"]?>" required="true"></td>
		</tr>
		<tr>
			<td colspan=2><input class="btn btn-secondary" type="submit" value=Alterar></td>
		</tr>
	</table>
</form>
</body>
</html>