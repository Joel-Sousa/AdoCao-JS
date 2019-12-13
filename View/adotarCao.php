<html>
<head>
</head>
<body>
<?php
include 'header.php';
if ($_SESSION["usuario"] == FALSE)
    header("location: index.php");?>
    <?php 
    require_once '../Controller/DAO/cachorroDAO.php';
    require_once '../Controller/DAO/usuarioDAO.php';
    $idCachorro = $_GET["codC"];
    $idUsuario = $_GET["codU"];
    $cachorroDAO = new CachorroDAO();
    $usuarioDAO = new UsuarioDAO();
    $cachorro = $cachorroDAO->getFromId($idCachorro);
    $usuario = $usuarioDAO->getFromId($idUsuario);
    ?>
    <form action="../Controller/adotarCaoController.php" method="post" name=adotarCao enctype="multipart/form-data">
		<table border=0 width=300 height=400;
			style="position: relative; top: 10px; left: 510px;">
			<tr>
				<td colspan="2" align="center">Cadastrar Cao</td>
			</tr>
			<tr>
				<td><input type="hidden" name=idCachorro value="<?php echo $cachorro["idCachorro"]?>"></td>
				<td><input type="hidden" name=idUsuario value="<?php echo $usuario["idUsuario"]?>"></td>
			</tr>
			<tr>
				<td>Nome: </td>
				<td><input type="text"  class="form-control"name=nome value="<?php echo $usuario["nome"]?>"  readonly="readonly"></td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><input type="text" class="form-control" name=email value="<?php echo $usuario["email"]?>" readonly="readonly"></td>
			</tr>
			<tr>
				<td>Endereco: </td>
				<td><input type="text" class="form-control" name=endereco value="<?php echo $usuario["endereco"]?>" readonly="readonly"></td>
			</tr>
			<tr>
				<td>Cidade: </td>
				<td><input type="text" class="form-control" name=cidade value="<?php echo $usuario["cidade"]?>" readonly="readonly"></td>
			</tr>
			<tr>
				<td>Celular: </td>
				<td><input type="text" class="form-control"  name=celular value="<?php echo $usuario["celular"]?>" readonly="readonly"></td>
			</tr>
			<tr>
				<td>Nome Do Cao: </td>
				<td><input type="text" class="form-control"name=nomeDoCao value="<?php echo $cachorro["nomeDoCao"]?>" readonly="readonly"></td>
			</tr>
			<tr>
				<td>Sexo Do Cao: </td>
				<td>
				<select class="form-control"  name=sexo readonly="readonly">
				<?php
                            if ($cachorro["sexo"] == "m") {
                                echo "<option selected value='m'>Macho</option>";
                            } else {
                                echo "<option selected value='f'>Femea</option>";
                            }
                            ?>
                 </select>
				</td>
			</tr>
			<tr>
				<td><input type="hidden" name=imagem value="<?php echo $cachorro["imagem"]?>"></td>
				<td><input type="hidden" name=estatus value="<?php echo $cachorro["estatus"]?>" readonly="readonly"></td>
			</tr>
			<tr>
				<td>Informacao: </td>
				<td><input class="form-control" type="text" name=informacao value="<?php echo $cachorro["informacao"]?>" readonly="readonly"></td>
			</tr>
			<tr>
			<td></td>
				<td align="left"><input type="checkbox" required="true">Aceito termos e condicoes.</td>
			</tr>
			<tr>
				<td colspan=2><input class='btn btn-success' type="submit" value=Adotar></td>
			</tr>
		</table>
	</form>    
</body>
</html>