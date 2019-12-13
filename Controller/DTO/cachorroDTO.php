<?php

class CachorroDTO{
    private $idCachorro;
    private $nome;
    private $email;
    private $endereco;
    private $cidade;
    private $celular;
    private $nomeDoCao;
    private $idade;
    private $sexo;
    private $imagem;
    private $informacao;
    private $perfil;
    private $estatus;
    private $idUsuario;
    
    //gets
    public function getIdCachorro() {
        return $this->idCachorro;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getEmail() {
        return $this->email;
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
    public function getNomeDoCao() {
        return $this->nomeDoCao;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getSexo() {
        return $this->sexo;
    }
    public function getImagem() {
        return $this->imagem;
    }
    public function getInformacao() {
        return $this->informacao;
    }
    public function getPerfil() {
        return $this->perfil;
    }
    public function getEstatus() {
        return $this->estatus;
    }
    public function getIdUsuario() {
        return $this->idUsuario;
    }
    
    //sets
    public function setIdCachorro($idCachorro) {
        $this->idCachorro = $idCachorro;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setEmail($email) {
        $this->email = $email;
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
    public function setNomeDoCao($nomeDoCao) {
        $this->nomeDoCao = $nomeDoCao;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }
    public function setImagem($imagem) {
        $this->imagem = $imagem;
    }
    public function setInformacao($informacao) {
        $this->informacao = $informacao;
    }
    public function setPerfil($perfil) {
        $this->perfil = $perfil;
    }
    public function setEstatus($estatus) {
        $this->estatus = $estatus;
    }
    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }
}