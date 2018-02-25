CREATE DATABASE IF NOT EXISTS amigasso;

USE amigasso;

CREATE TABLE IF NOT EXISTS usuarios(
	id int(2) AUTO_INCREMENT PRIMARY KEY,
	usuario varchar(20) NOT NULL,
	senha varchar(30) NOT NULL
);

CREATE TABLE IF NOT EXISTS clientes(
	id int(5) AUTO_INCREMENT PRIMARY KEY,
	nome varchar(80) NOT NULL,
	endereco varchar(255) NOT NULL,
	email varchar(80) NOT NULL,
	telefone varchar(15) NOT NULL,
	cpf varchar(15) NOT NULL,
	senha varchar(30) NOT NULL
);


CREATE TABLE IF NOT EXISTS sanduiches(
   	id int(2) AUTO_INCREMENT PRIMARY KEY,
   	nome varchar(60) NOT NULL,
   	ingredientes text NOT NULL,
   	preco decimal(5,2) NOT NULL
);
 
 CREATE TABLE IF NOT EXISTS bebidas(
 	id int(2) AUTO_INCREMENT PRIMARY KEY,
 	nome varchar(50) NOT NULL,
 	preco decimal(2,2) NOT NULL
 );

 CREATE TABLE IF NOT EXISTS opcionais(
 	id int(2) AUTO_INCREMENT PRIMARY KEY,
 	nome varchar(30) NOT NULL,
 	preco decimal(2,2) NOT NULL
 );

 CREATE TABLE IF NOT EXISTS pedidos(
 	id int(7) AUTO_INCREMENT PRIMARY KEY,
 	id_cliente int(5) NOT NULL,
 	status varchar(30) NOT NULL,
 	valor decimal(5,2) NOT NULL
 );

 CREATE TABLE IF  NOT EXISTS itens_pedido(
 	id int(7) AUTO_INCREMENT PRIMARY KEY,
 	id_pedido int(7) NOT NULL,
 	opcao varchar(40) NOT NULL,
 	valor int(2) NOT NULL
 );
