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
   	preco decimal(6,2) NOT NULL
);
 
 CREATE TABLE IF NOT EXISTS bebidas(
 	id int(2) AUTO_INCREMENT PRIMARY KEY,
 	nome varchar(50) NOT NULL,
 	preco decimal(5,2) NOT NULL
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

INSERT INTO sanduiches(nome, ingredientes, preco) VALUES
('Hamburguer','Hamburguer, maionese, batata palha, catchup, mostarda', 6.00),
('Bauru', 'Queijo, presunto, maionese, tomate, catchup, mostarda', 7.00),
('Hot Dog', 'Salsicha, queijo, maionese, tomate, alface, batata palha, catchup, mostarda', 8.00),
('X-Burguer','Hamburguer, queijo, maionese, batata palha, catchup, mostarda', 7.00),
('X-Salada','Hamburguer, queijo, presunto, maionese, batata palha, catchup, mostarda', 8.00),
('X-Egg','Hamburguer, queijo, presunto, ovo, maionese, tomate, alface, batata palha, catchup, mostarda', 9.00),
('X-Calabresa', 'Hamburguer, queijo, presunto, calabresa, maionese, tomate, alface, batata palha, catchup, mostarda', 10.00),
('X-Frango','Frango, queijo, presunto, maionese, tomate, alface, batata palha, catchup, mostarda', 10.00),
('X-Bacon', 'Hamburguer, queijo, presunto, bacon, maionese, tomate, alface, batata palha, catchup, mostarda', 10.00),
('X-Churrasco','Contra-filé, queijo, presunto, maionese, tomate, alface, batata palha, catchup, mostarda', 14.00),
('X-Bacon Egg','Hamburguer, queijo, presunto, bacon, ovo, maionese, batata palha, catchup, mostarda', 12.00),
('X-Amigasso','2 Hamburguers, queijo, presunto, ovo, bacon, calabresa, maionese, batata palha, catchup, mostarda', 14.00),
('X-Tudo','Hamburguer, queijo, presunto, bacon, ovo, frango, calabresa, 2 salsichas, maionese, batata palha, catchup, mostarda', 22.00),
('X-Picanha','Picanha, queijo, maionese, tomate, alface, batata palha, catchup, mostarda', 20.00),
('X-Jitsu', '2 Hamburguers, queijo, presunto, calabresa, 3 ovos, maionese, tomate, catchup, mostarda', 35.00),
('X-Mão de Vaca','3 Hamburguers, frango, queijo, presunto, bacon, 3 ovos, maionese, tomate, alface, batata palha, catchup, mostarda', 45.00),
('X-Leg Lock','4 Hamburguers, frango, queijo, presunto, calabresa, salsicha, bacon, 3 ovos, maionese, chedar, batata palha, catchup, mostarda', 50.00),
('X-Triângulo Voador', '5 Hamburguers, frango, queijo, presunto, calabresa, salsicha, bacon, 4 ovos, maionese, tomate, alface, batata palha, catchup, mostarda', 75.00),
('X-Mata Leão','10 Hamburguers, contra-filé, lombinho, frango, queijo, presunto, calabresa, salsicha, bacon, 6 ovos, maionese, chedar, tomate, alface, batata palha, catchup, mostarda', 110.00),
('X-Nocaute','15 Hamburguers, contra-filé, lombinho, frango, picanha, queijo, presunto, calabresa, salsicha, bacon, 8 ovos, chedar, catupiry, maionese, tomate, alface, batata palha, catchup, mostarda', 150.00),
('X Nocaute a Revanche','20 Hamburguers, contra-filé, lombinho, frango, queijo, presunto, calabresa, salsicha, bacon, 10 ovos, chedar, catupiry, maionese, tomate, alface, batata palha, catchup, mostarda', 400.00),
('X-UFC sem Limites','74 Hamburguers, contra-filé, lombinho, frango, queijo, presunto, calabresa, salsicha, bacon, 24 ovos, chedar, catupiry, maionese, tomate, alface, batata palha, catchup, mostarda', 800.00),
('X-Tatame','130 Hamburguers, 1kg contra-filé, 1kg frango, 1kg bacon, 1kg calabresa, 1kg salsicha, 1kg queijo, 1kg presunto, chedar, catupiry, maionese, tomate, alface, batata palha, catchup, mostarda',1800.00);

INSERT INTO bebidas(nome, preco) VALUES
('Muzzy Açaí',2.00),
('Muzzy Guaraná Natural', 2.00),
('Muzzy Guaraná com Ginseng e Açaí',2.00),
('Muzzy Laranja com Acerola',2.00),
('Muzzy Maracujá',2.00),
('Coca-Cola Lata-350ML',4.00),
('Coca-Cola Zero Lata-350ML',4.00),
('Guaraná Antarctica Lata-350ML',4.00),
('Guaraná Antarctica Zero Lata-350ML',4.00),
('Sprite Lata-350ML',4.00),
('Fanta Uva Lata-350ML',4.00),
('Fanta Laranja Lata-350ML',4.00),
('Fanta Guaraná Lata-350ML',4.00),
('Aguá Tonica Lata-350ML',4.00),
('Guaraná Mantiqueira 2L',7.00),
('Coca-Cola 2L',10.00),
('Fanta Uva 2L',10.00),
('Fanta Laranja 2L',10.00),
('Guaraná Antarctica 2L',10.00)
