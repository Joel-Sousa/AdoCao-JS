<?php
require_once 'DAO/cachorroDAO.php';
$idCachorro1 = $_GET["codC"];
$idCachorro2 = $_GET["codC"];

$cachorroDAO = new CachorroDAO();
$status = $cachorroDAO->excluirCao($idCachorro1,$idCachorro2);
if(!empty($status)){
    echo "<script>";
    echo "alert('Excluido!')";
    echo "</script>";
    
    echo "<script>";
    echo "window.location='../View/verCao.php'";
    echo "</script>";
}