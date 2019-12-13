CREATE DATABASE adocao;

USE adocao;

CREATE TABLE usuario(
idUsuario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(20) NOT NULL,
endereco VARCHAR(30),
cidade VARCHAR(20) NOT NULL,
celular VARCHAR(10) NOT NULL,
email VARCHAR(20) NOT NULL,
usuario VARCHAR(10) NOT NULL,
senha VARCHAR(10) NOT NULL
);

CREATE TABLE cachorro(
idCachorro INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
idUsuario INT NOT NULL,
nome VARCHAR(20) NOT NULL,
email VARCHAR(20) NOT NULL,
endereco VARCHAR(30),
cidade VARCHAR(20) NOT NULL,
celular VARCHAR(10) NOT NULL,
nomeDoCao VARCHAR(20) NOT NULL,
idade INT,
sexo CHAR(1) NOT NULL,
imagem VARCHAR(100) NOT NULL,
informacao VARCHAR(255),
perfil VARCHAR(10) NOT NULL,
estatus VARCHAR(10) NOT NULL,
FOREIGN KEY(idUsuario) REFERENCES usuario(idUsuario)
);

CREATE TABLE adotar(
idAdotar INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
idCachorro INT NOT NULL,
nome VARCHAR(20) NOT NULL,
email VARCHAR(20) NOT NULL,
endereco VARCHAR(30) NOT NULL,
cidade VARCHAR(20) NOT NULL,
celular VARCHAR(10) NOT NULL,
nomeDoCao VARCHAR(20) NOT NULL,
sexo CHAR(1) NOT NULL,
imagem VARCHAR(100) NOT NULL,
informacao VARCHAR(255) NOT NULL,
FOREIGN KEY(idCachorro) REFERENCES cachorro(idCachorro)
);

insert into usuario values(null,"clodomir","qnn","ceilandia","3321-8181","clodo@clodo.com","clodomir","12345678");
insert into usuario values(null,"clodomir","qjk","taguatinga","40002-8922","alis@aliss.com","alisson","12345678");

/*update cachorro set estatus = "disponivel" where idCachorro = 2;*/

select * from cachorro;
select * from adotar;
select * from usuario;

