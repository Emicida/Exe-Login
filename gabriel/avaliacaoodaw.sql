CREATE DATABASE avaliacaoodaw;
USE avaliacaoodaw;
CREATE TABLE mecanico(codm serial NOT NULL, cpf char(11), nome varchar(50),especialidade varchar(50), sexo varchar(20), data_nascimento date NOT NULL, email varchar(50), PRIMARY KEY (codm));
CREATE TABLE cliente(codc integer NOT NULL, cpf char(11), nome varchar(50),veiculo varchar(50), sexo varchar(20), data_nascimento date NOT NULL, email varchar(50), PRIMARY KEY (codc));
CREATE TABLE usuario(cod_user serial NOT NULL, senha varchar(50),login varchar(50),PRIMARY KEY(cod_user));
INSERT INTO usuario(senha,login) VALUES ('12345','fulano');