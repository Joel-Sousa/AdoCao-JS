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
    $usuario = $usuarioDAO->getById($iduUsuario);
    ?>
	<form action="../Controller/cadastrarCaoController.php" method="post" name=formCao enctype="multipart/form-data">
		<table  border=0 width=300 height=400;
			style="position: relative; top: 10px; left: 400px;">
			<tr >
				<td colspan="2" align="center">Cadastrar Cao<br><br></td>
			</tr>
			<tr>
				<td>Nome:</td>
				<td><input style="width:500;"class="form-control" type="text" name=nome value="<?php echo $usuario["nome"]?>" readonly="readonly"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input  class="form-control" type="email" name=email value="<?php echo $usuario["email"]?>" readonly="readonly"></td>
			</tr>
			<tr>
				<td>Endereco:</td>
				<td><input class="form-control" type="text" name=endereco value="<?php echo $usuario["endereco"]?>" readonly="readonly"></td>
			</tr>
			<tr>
				<td>Cidade:</td>
				<td><input  class="form-control" type="text" name=cidade  value="<?php echo $usuario["cidade"]?>" readonly="readonly"></td>
			</tr>
			<tr>
				<td>Celular:</td>
				<td><input class="form-control" type="text" name=celular value="<?php echo $usuario["celular"]?>" maxlength="10" readonly="readonly"></td>
			</tr>
			<tr>
				<td>Nome do Cao:</td>
				<td><input class="form-control" type="text" name=nomeDoCao required="required"></td>
			</tr>
			<tr>
				<td>Idade do Cao:</td>
				<td><input class="form-control" type="number" name=idade value=0 required="required"></td>
			</tr>
			<tr>
				<td>Sexo:</td>
				<td>
				<div class="form-group col-md-4">
				<select class="form-control" name=sexo  required="required">
				<option value=''>.:Escolha:.</option>
				<option value='m'>Macho</option>
				<option value='f'>Femea</option>
				</select>
				</div>
				</td>
			</tr>
			<tr>
				<td>Imagem:</td>
				<td><input type="file" class="form-control" name="arquivo" multiple="multiple"  required="required"></td>
			</tr>
			<tr>
				<td>Informacao Adicional:</td>
				<td><input type="text" class="form-control"  name=informacao required="required"></td>
			</tr>
			<tr>
				<td>Perfil:</td>
				<td><select class="form-control"  name=perfil required="required">
						<option value="">.:Escolha:.</option>
						<option value="Adotar">Adotar</option>
						<option value="Encontrado">Encontrado</option>
						<option value="Perdido">Perdido</option>
				</select></td>
			</tr>
			<tr>
			<td><input type="hidden" name=estatus value=disponivel></td>
			<td><input type="hidden" name=idUsuario value="<?php echo $usuario["idUsuario"]?>"></td>
			</tr>
			<tr>
				<td><input class='btn btn-success' type="submit" value=Cadastrar></td>
				<td><input class="btn btn-danger" type="reset" value=Limpar></td>
			</tr>
		</table>
	</form>
</body>
</html>