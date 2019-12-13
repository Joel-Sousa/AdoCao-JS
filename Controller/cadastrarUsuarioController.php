<?php
require_once 'DAO/usuarioDAO.php';
require_once 'DTO/usuarioDTO.php';

$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$cidade = $_POST["cidade"];
$celular = $_POST["celular"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$usuarioDTO = new UsuarioDTO();
$usuarioDTO->setNome($nome);
$usuarioDTO->setEndereco($endereco);
$usuarioDTO->setCidade($cidade);
$usuarioDTO->setCelular($celular);
$usuarioDTO->setEmail($email);
$usuarioDTO->setUsuario($usuario);
$usuarioDTO->setSenha($senha);

$usuarioDAO = new UsuarioDAO();
$status = $usuarioDAO->salvar($usuarioDTO);
if(!empty($status)){
    echo "<script>";
    echo "alert('Cadastrado!')";
    echo "</script>";
    
    echo "<script>";
    echo "window.location='../View/index.php'";
    echo "</script>";
}
