<html>
<head>
<?php //include 'validarLogin.php';?>
</head>
<body>
<?php
include 'header.php';
if ($_SESSION["usuario"] == FALSE)
    header("location: index.php");
?>
    <form action="" method="post"> 
		<table border=0 style="position: relative; left: 500px;"; width=300px>
			<tr>
				<td>
				<select  class="form-control"style="width:130px;" name=perfil>
						<option value="">Escolha</option>
						<option value="Adotar">Adotar</option>
						<option value="Encontrado">Encontrado</option>
						<option value="Perdido">Perdido</option>
				</select><input  class="btn btn-success"  type="submit" value=Pesquisar>
				</td>
			</tr>
		</table>
	</form>
	<br>
    <?php
    require_once '../Controller/DAO/cachorroDAO.php';
    $idUsuario = $_SESSION["idUsuario"];
    $estatus = "disponivel";
    $cachorroDAO = new CachorroDAO();
    if (! empty($_POST["perfil"])) {
        $perfil = $_POST["perfil"];
        $usuario = $cachorroDAO->pesquisaPerfil($idUsuario, $perfil,$estatus);
    } else {
        $perfil = "adotar";
        $usuario = $cachorroDAO->pesquisaPerfil($idUsuario, $perfil,$estatus);
    }
    echo "<table border=0 width=1310px; style='position:relative; left:30px';><tr><td>";
    foreach ($usuario as $u) {
        echo "<table	class='table table-sm table-dark'border=1 cellspacing=10 style='float:left; width: 320px; height:140px;'>";
        echo "<tr>";
        echo "<td rowspan='5' width='40%'><img src='{$u["imagem"]}' width='115' height='140'></td>";
        echo "<td><b>Nome:</b> {$u["nomeDoCao"]}</td>	</tr>";
        echo "<tr>	<td><b>Idade:</b> {$u["idade"]}</td>	</tr>";
        if($u["sexo"]=="m"){
            echo "<tr>	<td><b>Sexo:</b> Macho</td>	</tr>";
        }else{
            echo "<tr>	<td><b>Sexo:</b> Femea</td>	</tr>";
        }
        echo "<tr>	<td><b>Local:</b> {$u["cidade"]}</td>	</tr>";
        echo "<tr>";
        echo "<td>";
            //echo "<a href='adotarCao.php?codC={$u["idCachorro"]},codU={$u["idUsuario"]}'><input type='submit' value='Ver' style='width:83;height:20'></a>";
//         if($perfil == "Perdido"){
        //    echo "<a href='visualizarCao.php?codC={$u["idCachorro"]}&codU={$u["idUsuario"]}'><input type='button' value='Visualizar' style='width:83;height:20'></a>";
//         }
//         else  if($perfil == "Encontrado"){
          //  echo "<a href='notificarCao.php?codC={$u["idCachorro"]}&codU={$u["idUsuario"]}'><input type='button' value='Notificar' style='width:83;height:20'></a>";
//         }else {
            //echo "<a href='adotarCao.php?codC={$u["idCachorro"]}&codU={$u["idUsuario"]}'><input type='button' value='Adotar' style='width:83;height:20'></a>";
//         }
        echo "<a href='../Controller/excluirCaoController.php?codC={$u["idCachorro"]}&codU={$u["idUsuario"]}'><input class='btn btn-danger'type='button' value='Excluir' style='width:168;height:28'></a>";
        //echo "<input type='submit' value='Excluir' style='width:83;height:20'>";
        echo "</td>";
        echo "</tr>";
        echo "</table>";
    }
    echo "</td></tr>";
    echo "</table>";
    ?>
</body>
</html>