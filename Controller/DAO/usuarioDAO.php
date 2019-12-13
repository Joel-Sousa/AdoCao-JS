<?php
require_once 'conexao.php';

class UsuarioDAO
{

    private $pdo = null;

    public function __construct()
    {
        $this->pdo = Conexao::getInstance();
    }

    public function login($user, $pass){
        try {
            $sql = "SELECT idUsuario,usuario,senha FROM usuario " . "WHERE usuario = ? AND senha = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $user);
            $stmt->bindValue(2, $pass);
            $stmt->execute();
            $login = $stmt->fetch(PDO::FETCH_ASSOC);
            return $login;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function salvar(UsuarioDTO $usuarioDTO)
    {
        try {
            $sql = "INSERT INTO usuario(nome,endereco,cidade,celular,email,usuario,senha) " . "VALUES (?,?,?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuarioDTO->getNome());
            $stmt->bindValue(2, $usuarioDTO->getEndereco());
            $stmt->bindValue(3, $usuarioDTO->getCidade());
            $stmt->bindValue(4, $usuarioDTO->getCelular());
            $stmt->bindValue(5, $usuarioDTO->getEmail());
            $stmt->bindValue(6, $usuarioDTO->getUsuario());
            $stmt->bindValue(7, $usuarioDTO->getSenha());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getById($idUsuario)
    {
        try {
            $sql = " SELECT idUsuario,nome,email,endereco,cidade,celular FROM usuario 
                     WHERE idUsuario = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idUsuario);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    public function getIdUsuario($idUsuario)
    {
        try {
            $sql = " SELECT idUsuario,nome,endereco,cidade,celular,email,usuario,senha FROM usuario
                     WHERE idUsuario = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idUsuario);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
    public function getFromId($idUsuario) {
        try {
            $sql = "SELECT idUsuario,nome,email,endereco,cidade,celular
                    FROM usuario WHERE idUsuario = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idUsuario);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
    public function alterarUsuario(UsuarioDTO $usuarioDTO) {
        try {
            $sql = "UPDATE usuario SET 
            nome = ?, endereco = ?, cidade = ?,celular = ?, email = ?, usuario = ?, senha = ?
            WHERE idUsuario = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $usuarioDTO->getNome());
            $stmt->bindValue(2, $usuarioDTO->getEndereco());
            $stmt->bindValue(3, $usuarioDTO->getCidade());
            $stmt->bindValue(4, $usuarioDTO->getCelular());
            $stmt->bindValue(5, $usuarioDTO->getEmail());
            $stmt->bindValue(6, $usuarioDTO->getUsuario());
            $stmt->bindValue(7, $usuarioDTO->getSenha());
            $stmt->bindValue(8, $usuarioDTO->getIdUsuario());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
    
}
?>
