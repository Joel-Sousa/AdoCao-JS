<?php

class UsuarioDTO{
    
    private $idUsuario;
    private $nome;
    private $endereco;
    private $cidade;
    private $celular;
    private $email;
    private $usuario;
    private $senha;
    
    //gets
    public function getIdUsuario() {
        return $this->idUsuario;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getEndereco() {
        return $this->endereco;
    }
    public function getCidade() {
        return $this->cidade;
    }
    public function getCelular() {
        return $this->celular;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getUsuario() {
        return $this->usuario;
    }
    public function getSenha() {
        return $this->senha;
    }
    
    //sets
    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }
    public function setCelular($celular) {
        $this->celular = $celular;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }
    public function setSenha($senha) {
        $this->senha = $senha;
    }
    
}