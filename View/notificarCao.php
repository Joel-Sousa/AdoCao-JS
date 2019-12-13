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
		<table  border=0 width=300 height=400;
			style="position: relative; top: 10px; left: 400px; width:500;">
			<tr>
				<td colspan="2" align="center">Notificar Cao</td>
			</tr>
			<tr>
				<td></td>
				<td><input class="form-control" type="hidden" name=idCachorro value="<?php echo $cachorro["idCachorro"]?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input class="form-control"type="hidden" name=idUsuario value="<?php echo $usuario["idUsuario"]?>"></td>
			</tr>
			<tr>
				<td>Nome: </td>
				<td><input class="form-control"  type="text" name=nome value="<?php echo $usuario["nome"]?>"></td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><input class="form-control" type="text" name=email value="<?php echo $usuario["email"]?>"></td>
			</tr>
			<tr>
				<td>Endereco: </td>
				<td><input class="form-control" type="text" name=endereco value="<?php echo $usuario["endereco"]?>"></td>
			</tr>
			<tr>
				<td>Cidade: </td>
				<td><input class="form-control" type="text" name=cidade value="<?php echo $usuario["cidade"]?>"></td>
			</tr>
			<tr>
				<td>Celular: </td>
				<td><input class="form-control"type="text" name=celular value="<?php echo $usuario["celular"]?>"></td>
			</tr>
			<tr>
				<td>Nome Do Cao: </td>
				<td><input class="form-control" type="text" name=nomeDoCao value="<?php echo $cachorro["nomeDoCao"]?>"></td>
			</tr>
			<tr>
				<td>Sexo Do Cao: </td>
				<td>
				<select class="form-control"name=sexo>
				<?php
                            if ($cachorro["sexo"] == "m") {
                                echo "<option selected value='m'>Macho</option>";
                                echo "<option  value='f'>Femea</option>";
                            } else {
                                echo "<option value='m'>Macho</option>";
                                echo "<option selected value='f'>Femea</option>";
                            }
                            ?>
                 </select>
				</td>
			</tr>
			<tr>
				<td>Informacao: </td>
				<td><input class="form-control" type="text" name=informacao value="<?php echo $cachorro["informacao"]?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input class="form-control"type="hidden" name=imagem value="<?php echo $cachorro["imagem"]?>"></td>
			</tr>
			<tr>
				<td colspan=2>
				</td>
			</tr>
		</table>
	</form>    
</body>
</html>