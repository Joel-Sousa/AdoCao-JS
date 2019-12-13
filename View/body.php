<html>
<head></head>
<body>
	<?php 
	require_once '../Controller/DAO/cachorroDAO.php';
	$cachorroDAO = new CachorroDAO();
	$perfil = "adotar";
	$estatus = "disponivel";
	$cachorro = $cachorroDAO->verCachorroPerfil($perfil, $estatus);
	echo "<table border=0 width=970px; style='position:relative; left:200px;'><tr><td><div class='p-3 mb-2 bg-info text-white'  style='font-size:24; '>Adocao</div></td></tr><tr><td>";
	$i=0;
	foreach ($cachorro as $c){
	    echo "<table class='table table-sm table-dark'  border=1 cellspacing=5 style='float:left; width: 320px; height:120px;'>";
	    echo "<tr>";
	    echo "<td   rowspan='4' width='40%'><img src='{$c["imagem"]}' width='119' height='120'></td>";
	    echo "<td><b>Cao:</b> {$c["nomeDoCao"]}</td></tr>";
	    if($c["idade"]==0){
	        echo "<tr>	<td><b>Idade: </b>Nao Informado</td>	</tr>";
	    }else {
	        echo "<tr>	<td><b>Idade: </b>{$c["idade"]}</td>	</tr>";
	    }
        if($c["sexo"]=="m") {
            echo "<tr>	<td><b>Sexo: </b>Macho</td>	</tr>";
        }else{
            echo "<tr>	<td><b>Sexo:</b> Femea</td>	</tr>";
        }
	    echo "<tr>	<td><b>Cidade:</b> {$c["cidade"]}</td>	</tr>";
	    echo "</table>";
	    if($i==2)break;
	    $i++;
	}
	echo "</td></tr>";
	echo "</table>";
	$perfil = "perdido";
	$estatus = "disponivel";
	$cachorro = $cachorroDAO->verCachorroPerfil($perfil, $estatus);
	echo "<table  border=0 width=970px; style='position:relative; left:200px;'><tr><td><div  class='p-3 mb-2 bg-danger text-white' style='font-size:24;'>Perdidos</div></td></tr><tr><td>";
	$i=0;
	foreach ($cachorro as $c){
	    echo "<table class='table table-sm table-dark' border=1 cellspacing=5 style='float:left; width: 320px; height:120px;'>";
	    echo "<tr>";
	    echo "<td rowspan='4' width='40%'><img src='{$c["imagem"]}' width='119' height='120'></td>";
	    echo "<td><b>Cao: </b>{$c["nomeDoCao"]}</td></tr>";
	    if($c["idade"]==0){
	        echo "<tr>	<td><b>Idade:</b> Nao Informado</td>	</tr>";
	    }else {
	        echo "<tr>	<td><b>Idade: </b>{$c["idade"]}</td>	</tr>";
	    }
	    if($c["sexo"]=="m") {
	        echo "<tr>	<td><b>Sexo:</b> Macho</td>	</tr>";
	    }else{
	        echo "<tr>	<td><b>Sexo:</b> Femea</td>	</tr>";
	    }
	    echo "<tr>	<td><b>Cidade:</b> {$c["cidade"]}</td>	</tr>";
	    echo "</table>";
	    if($i==2)break;
	    $i++;
	}
	echo "</td></tr>";
	echo "</table>";
	$perfil = "encontrado";
	$estatus = "disponivel";
	$cachorro = $cachorroDAO->verCachorroPerfil($perfil, $estatus);
	echo "<table  border=0 width=970px; style='position:relative; left:200px;'><tr><td><div class='p-3 mb-2 bg-success text-white' style='font-size:24;'>Encontrados</div></td></tr><tr><td>";
	$i=0;
	foreach ($cachorro as $c){
	    echo "<table border=1 class='table table-sm table-dark' cellspacing=5 style='float:left; width: 320px; height:120px;'>";
	    echo "<tr>";
	    echo "<td rowspan='4'   width='40%'><img src='{$c["imagem"]}' width='119' height='120'></td>";
	    echo "<td><b>Cao:</b> {$c["nomeDoCao"]}</td></tr>";
	    if($c["idade"]==0){
	        echo "<tr>	<td><b>Idade:</b> Nao Informado</td>	</tr>";
	    }else {
	        echo "<tr>	<td><b>Idade: </b>{$c["idade"]}</td>	</tr>";
	    }
	    if($c["sexo"]=="m") {
	        echo "<tr>	<td><b>Sexo:</b> Macho</td>	</tr>";
	    }else{
	        echo "<tr>	<td><b>Sexo:</b> Femea</td>	</tr>";
	    }
	    echo "<tr>	<td><b>Cidade: </b>{$c["cidade"]}</td>	</tr>";
	    echo "</table>";
	    if($i==2)break;
	    $i++;
	}
	echo "</td></tr>";
	echo "</table>";
	?>
</body>
</html>