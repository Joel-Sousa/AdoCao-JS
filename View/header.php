<html>
<head>
<?php session_start()?>
<link rel="stylesheet" type="text/css" href="../CSS/estilo.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body style="background-color:#BDBDBD">

<table id="divTesteiraAction"   border=2 style="position: relative; top: -5px; left: -5px;" width=100%;
	height=125px; cellspacing=0>
	<tr><td></td></tr>
	</table>
	<?php 
	if(!empty($_SESSION["usuario"])){
	    echo "
		 
 		<div class=menu  style='position: absolute; top: 10px; left: 10px;'>
		<li class='btn btn-warning' ><a href='../View/home.php'><b>Inicio</b></a></li>
		<li  class='btn btn-warning' ><b>Meu Perfil</b>
		<ul>
		<li class='btn btn-warning'><a href='alterarUsuario.php'><b>Alterar Dados</b></a></li>
		<li class='btn btn-warning'><a href='cadastrarCao.php'><b>Cadatrar Cao</b></a></li>
		<li class='btn btn-warning'><a href='verCao.php'><b>Ver Caes</b></a></li>
		<li class='btn btn-warning'><a href='adocao.php'><b>Adocao</b></a></li>
		</ul>
		</li>
		<li class='btn btn-warning' ><a href='adotar.php'><b>Adotar</b></a></li>
		<li class='btn btn-warning'   ><a href='perdidos.php'><b>Perdidos</b></a></li>
		<li class='btn btn-warning'  ><a href='encontrados.php'><b>Encontrados</b></a></li>
		<li class='btn btn-warning'  ><a href='contato.php'><b>Contato</a></b></li> 
		<td class='tdData'>
		</td>
		</div>		
		";
	    echo "<p style='position: absolute; left: 10px; top: 45px;font-size: 30px; color:#fff'>",ucfirst($_SESSION["usuario"]),"</p>";
	    echo "<a href='sair.php'><p style='position: absolute; left: 10px; top: 85px;font-size: 30px;color:#000'>Sair</p></a>";
	   
	}else {
	    echo "
<div class=menu  style='position: absolute; top: 10px; left: 10px;'>
		<li class='btn btn-warning'><a href='../View/home.php'>Inicio</a></li>
		<li class='btn btn-warning'><a href='adotar.php'>Adotar</a></li>
		<li class='btn btn-warning'><a href='perdidos.php'>Perdidos</a></li>
		<li class='btn btn-warning'><a href='encontrados.php'>Encontrados</a></li>
		<li class='btn btn-warning'><a href='contato.php'>Contato</a></li>
	</div>
	<form action='../Controller/loginController.php' method='post' name=formHeader>
	<table border=0 id='tabela' align='right' width=250
		style='position: absolute; font-size: 20px; top: 15px; left: 1060px;'  cellspacing=0>
		<tr>
			<td width=20%>Login:</td>
			<td><input type=text name=user required='true'></td>
		</tr>
		<tr>
			<td>Senha:</td>
			<td><input type=password name=pass required='true' minlength='8' maxlength='10'></td>
		</tr>
		<tr>
			<td><input id='bt1'type='submit' value=Logar ></td>
			<td>&nbsp;&nbsp;<a href='cadastrarUsuario.php'><input id='bt2' type='button' value='Nao Possuo Cadastro'
				style='font-size: 17px'></a></td>
		</tr>
		
		</form>
	</table>";
	}
	include 'footer.php';
	?> 
</body>
</html>