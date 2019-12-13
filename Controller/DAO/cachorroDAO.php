<?php

require_once 'conexao.php';

class CachorroDAO {
    
    private $pdo = null;
    
    public function __construct() {
        $this->pdo = Conexao::getInstance();
    }
    
    public function salvar(CachorroDTO $cachorroDTO) {
        try {
            $sql = "INSERT INTO cachorro
(nome,email,endereco,cidade,celular,nomeDoCao,idade,sexo,imagem,informacao,perfil,estatus,idUsuario) 
                VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";
                $stmt = $this->pdo->prepare($sql);
                $stmt->bindValue(1, $cachorroDTO->getNome());
                $stmt->bindValue(2, $cachorroDTO->getEmail());
                $stmt->bindValue(3, $cachorroDTO->getEndereco());
                $stmt->bindValue(4, $cachorroDTO->getCidade());
                $stmt->bindValue(5, $cachorroDTO->getCelular());
                $stmt->bindValue(6, $cachorroDTO->getNomeDoCao());
                $stmt->bindValue(7, $cachorroDTO->getIdade());
                $stmt->bindValue(8, $cachorroDTO->getSexo());
                $stmt->bindValue(9, $cachorroDTO->getImagem());
                $stmt->bindValue(10, $cachorroDTO->getInformacao());
                $stmt->bindValue(11, $cachorroDTO->getPerfil());
                $stmt->bindValue(12, $cachorroDTO->getEstatus());
                $stmt->bindValue(13, $cachorroDTO->getIdUsuario());
                return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
    public function getCao($idUsuario) {
        try {
            $sql = "SELECT 
                    idCachorro,idUsuario,endereco,cidade,nomeDoCao,idade,sexo,imagem,perfil
                    FROM cachorro 
                    WHERE idUsuario = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idUsuario);
            $stmt->execute();
            $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
    public function pesquisaPerfil($idUsuario,$perfil,$estatus) {
        try {
            $sql = "SELECT
                    idCachorro,idUsuario,endereco,cidade,nomeDoCao,idade,sexo,imagem,perfil,estatus
                    FROM cachorro
                    WHERE idUsuario = ? AND perfil = ? AND estatus = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idUsuario);
            $stmt->bindValue(2, $perfil);
            $stmt->bindValue(3, $estatus);
            $stmt->execute();
            $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
    public function getFromId($idCachorro) {
        try {
            $sql = "SELECT idCachorro,nomeDoCao,sexo,imagem,informacao,estatus
                    FROM cachorro WHERE idCachorro = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idCachorro);
            $stmt->execute();
            $cachorro = $stmt->fetch(PDO::FETCH_ASSOC);
            return $cachorro;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function adotar(CachorroDTO $cachorroDTO) {
        try {
            $sql = "INSERT INTO adotar
(idCachorro,nome,email,endereco,cidade,celular,nomeDoCao,sexo,imagem,informacao)
                VALUES (?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);
            //$stmt->bindValue(1, $cachorroDTO->getIdUsuario());
            $stmt->bindValue(1, $cachorroDTO->getIdCachorro());
            $stmt->bindValue(2, $cachorroDTO->getNome());
            $stmt->bindValue(3, $cachorroDTO->getEmail());
            $stmt->bindValue(4, $cachorroDTO->getEndereco());
            $stmt->bindValue(5, $cachorroDTO->getCidade());
            $stmt->bindValue(6, $cachorroDTO->getCelular());
            $stmt->bindValue(7, $cachorroDTO->getNomeDoCao());
            $stmt->bindValue(8, $cachorroDTO->getSexo());
            $stmt->bindValue(9, $cachorroDTO->getImagem());
            $stmt->bindValue(10, $cachorroDTO->getInformacao());
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
    public function cachorroPerfil($perfil,$estatus,$cidade) {
        try {
            $sql = "SELECT
                    idCachorro,endereco,cidade,nomeDoCao,idade,sexo,imagem,perfil
                    FROM cachorro
                    WHERE perfil = ? AND estatus = ? AND cidade LIKE '%{$cidade}%'";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $perfil);
            $stmt->bindValue(2, $estatus);
            $stmt->execute();
            $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function estatus($idCachorro,$estatus) {
        try {
            $sql = "UPDATE cachorro SET estatus = ?
                   WHERE idCachorro = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $estatus);
            $stmt->bindValue(2, $idCachorro);
            
            return $stmt->execute();
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
    public function excluirCao($idCachorro1,$idCachorro2) {
        try {
            $sql = "DELETE FROM adotar WHERE idCachorro = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idCachorro1);
            $stmt->execute();
            
            $sql = "DELETE FROM cachorro WHERE idCachorro = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $idCachorro2);
            return $stmt->execute();
            
            
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
    public function listaAdotados($cidade) {
        try {
            $sql = "SELECT
                    idAdotar,idCachorro,nome,email,endereco,cidade,celular,nomeDoCao,sexo,imagem,informacao
                    FROM adotar WHERE cidade LIKE '%{$cidade}%'";
            $stmt = $this->pdo->prepare($sql);
            
            $stmt->execute();
            $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    public function verCachorroPerfil($perfil,$estatus) {
        try {
            $sql = "SELECT
                    cidade,nomeDoCao,idade,sexo,imagem
                    FROM cachorro
                    WHERE perfil = ? AND estatus = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1, $perfil);
            $stmt->bindValue(2, $estatus);
            $stmt->execute();
            $usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usuario;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
    
    
}