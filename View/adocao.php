<html>
<head>
</head>
<body>
<?php
include 'header.php';
if ($_SESSION["usuario"] == FALSE)
    header("location: index.php");?>
    <form action="" method="post"> 
		<table style="position: relative; left: 500px;";>
			<tr>
				<td><input class="form-control"  type="text" name="pesquisa" placeholder="Pesquisar Cidade"></td>
				<td><input  class="btn btn-success"  type="submit" value=Pesquisar></td>
			</tr>
		</table>
	</form>
	<br>
    <?php
    require_once '../Controller/DAO/cachorroDAO.php';
     $idUsuario = $_SESSION["idUsuario"];
     $cachorroDAO = new CachorroDAO();
    if (! empty($_POST["pesquisa"])) {
        $cidade = $_POST["pesquisa"];
        $usuario = $cachorroDAO->listaAdotados($cidade);
        //var_dump($usuario) ;
    }else {
        $cidade = "";
        $usuario = $cachorroDAO->listaAdotados($cidade);
    }

    echo "<table  border=0 width=1310px; style='position:relative; left:30px';><tr><td>";
    foreach ($usuario as $u) {
        echo "<table class='table table-sm table-dark'border=1 border=1 cellspacing=10 style='float:left; width: 320px; height:140px;'>";
        echo "<tr >  ";
        echo "<td rowspan='5' width='40%'><img src='{$u["imagem"]}' width='115' height='140'></td>";
        echo "<td>Nome: {$u["nome"]}</td>	</tr>";
        echo "<tr>	<td>Nome do Cao: {$u["nomeDoCao"]}</td>	</tr>";
        echo "<tr>	<td>Email: {$u["email"]}</td>	</tr>";
        echo "<tr>	<td>Cidade: {$u["cidade"]}</td>	</tr>";
        echo "</table>";
    }
    echo "</td></tr>";
    echo "</table>";
    ?>
</body>
</html>