<?php
require_once 'DAO/cachorroDAO.php';
require_once 'DTO/cachorroDTO.php';
$idCachorro = $_POST["idCachorro"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$endereco = $_POST["endereco"];
$cidade = $_POST["cidade"];
$celular = $_POST["celular"];
$nomeDoCao = $_POST["nomeDoCao"];
$sexo = $_POST["sexo"];
$imagem = $_POST["imagem"];
$informacao = $_POST["informacao"];

$cachorroDTO = new CachorroDTO();
$cachorroDTO->setIdCachorro($idCachorro);
$cachorroDTO->setNome($nome);
$cachorroDTO->setEmail($email);
$cachorroDTO->setEndereco($endereco);
$cachorroDTO->setCidade($cidade);
$cachorroDTO->setCelular($celular);
$cachorroDTO->setNomeDoCao($nomeDoCao);
$cachorroDTO->setSexo($sexo);
$cachorroDTO->setImagem($imagem);
$cachorroDTO->setInformacao($informacao);
$estatus = "pedente";

$cachorroDAO = new CachorroDAO();
$status = $cachorroDAO->adotar($cachorroDTO);
$cachorroDAO->estatus($idCachorro,$estatus);

if(!empty($status)){
    echo "<script>";
    echo "alert('Adotado!')";
    echo "</script>";
    
    echo "<script>";
    echo "window.location='../View/index.php'";
    echo "</script>";
}
