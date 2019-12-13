<html>
<head></head>
<body>
<?php include 'header.php';?>
<form action="" method="post"> 
		<table style="position: relative; left: 500px;";>
			<tr>
				<td><input class="form-control" type="text" name="pesquisa" placeholder="Pesquisar Cidade"></td>
				<td><input class="btn btn-secondary" type="submit" value=Pesquisar></td>
			</tr>
		</table>
	</form>
	<br>
<?php
require_once '../Controller/DAO/cachorroDAO.php';
$perifil = "Encontrado";
$estatus = "disponivel";
$cachorroDAO = new CachorroDAO();
if (! empty($_POST["pesquisa"])) {
    $cidade = $_POST["pesquisa"];
    $cachorro = $cachorroDAO->cachorroPerfil($perifil,$estatus,$cidade);
}else {
    $cidade = "";
    $cachorro = $cachorroDAO->cachorroPerfil($perifil,$estatus,$cidade);
}
echo "<table border=0 width=1310px; style='position:relative; left:30px';><tr><td>";
foreach ($cachorro as $c) {
    echo "<table border=1  class='table table-sm table-dark' cellspacing=10 style='float:left; width: 320px; height:170px;'>";
    echo "<tr>";
    echo "<td rowspan='5' width='40%'><img src='{$c["imagem"]}' width='115' height='145'></td>";
    echo "<td><b>Nome:</b> {$c["nomeDoCao"]}</td>	</tr>";
    if($c["idade"] == 0){
        echo "<tr>	<td><b>Idade: Nao Informado</b></td>	</tr>";
    }else {
        echo "<tr>	<td><b>Idade: </b>{$c["idade"]}</td>	</tr>";
    }
    echo "<tr>	<td><b>Sexo: </b>{$c["sexo"]}</td>	</tr>";
    echo "<tr>	<td><b>Local:</b> {$c["cidade"]}</td>	</tr>";
    if(!empty($_SESSION["usuario"])){
        echo "<tr><td><a href='notificarCao.php?codC={$c["idCachorro"]}&codU={$_SESSION["idUsuario"]}'><input class='btn btn-success' type='button' value='Visualizar' style='width:168;height:28'></a></td></tr>";
    }else {
    }
    echo "</table>";
}
echo "</td></tr>";
echo "</table>";
?>
</body>
</html>
