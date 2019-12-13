<html>
<head></head>
<body>
<?php include 'header.php';?>
	<form action="#" method="post" name=formContato>
		<table border=0 width=300 height=200;
			style="position: relative; top: 10px; left: 400px;  width:500; ">

			<tr>
				<td colspan="2" class="p-3 mb-2 bg-info text-white" align="center">Contato</td>
			</tr>
			<tr>
				<td>Seu Nome:</td>
				<td><input class="form-control" type="text" name=seuNome></td>
			</tr>
			<tr>
				<td>Seu Email:</td>
				<td><input class="form-control" type="text" name=email></td>
			</tr>
			<tr>
				<td>Assunto:</td>
				<td><input class="form-control" type="text" name=assunto></td>
			</tr>
			<tr>
				<td>Sua Mensagem:</td>
				<td><input style="width:500; height:120;" class="form-control"  type="text" name=mensagem></td>
			</tr>
			<tr>
				<td><input class='btn btn-success' type="submit" value=Enviar></td>
				<td><input class="btn btn-danger" type="reset" value=Limpar></td>
			</tr>
	
	
			
		</table>
	</form>
</body>
</html>