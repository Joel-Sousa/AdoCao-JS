<?php
session_start();
require_once 'DAO/usuarioDAO.php';

$user = $_POST["user"];
$pass = $_POST["pass"];
$usuarioDAO = new UsuarioDAO();
$login = $usuarioDAO->login($user, $pass);


if(!empty($login)){
    $_SESSION["idUsuario"] = $login["idUsuario"];
    $_SESSION["usuario"] = $login["usuario"];
    $_SESSION["senha"] = $login["senha"];
      
    echo "<script>";
    echo "alert('Bem Vindo!')";
    echo "</script>";
    
    echo "<script>";
    echo "window.location='../View/home.php'";
    echo "</script>";
    
} else {
        echo "<script>";
        echo "alert('Usuario ou Senha Invalidos!')";
        echo "</script>";
        
        echo "<script>";
        echo "window.location='../View/index.php'";
        echo "</script>";
}

?>
