CREATE SCHEMA loja_fellype; 
USE loja_fellype; 

CREATE TABLE cliente ( 
    id_cliente INT NOT NULL AUTO_INCREMENT, 
    nome VARCHAR (100) NOT NULL, 
    email VARCHAR (100) NOT NULL, 
    cidade VARCHAR (50), 
    PRIMARY KEY (id_cliente)
); 

CREATE TABLE produto ( 
    id_produto INT NOT NULL AUTO_INCREMENT, 
    nome VARCHAR (100) NOT NULL, 
    preco DECIMAL (10,2) NOT NULL, 
    estoque INT NOT NULL,                   
    PRIMARY KEY (id_produto) 
);

CREATE TABLE venda (
    id_venda INT NOT NULL AUTO_INCREMENT,
    id_cliente INT NOT NULL,
    id_produto INT NOT NULL,
    quantidade INT NOT NULL,
    data_venda DATE NOT NULL,
    PRIMARY KEY (id_venda),
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente),
    FOREIGN KEY (id_produto) REFERENCES produto(id_produto)
);

INSERT INTO cliente (nome, email, cidade) VALUES 
('Fellype Silva', 'fellype@email.com', 'Lisboa'),
('Maria Santos', 'maria@email.com', 'Porto'),
('Ana Souza', 'ana@email.com', 'Braga'),
('Carlos Lima', 'carlos@email.com', 'Faro'),
('Beatriz Costa', 'beatriz@email.com', 'Coimbra');

INSERT INTO produto (nome, preco, estoque) VALUES 
('Computador Portátil', 850.00, 10),
('Mouse', 50.00, 15),
('Teclado Mecânico', 80.00, 20),
('Monitor 24 Polegadas', 150.00, 15),
('Auscultadores Bluetooth', 45.90, 25);

INSERT INTO venda (id_cliente, id_produto, quantidade, data_venda) VALUES 
(1, 1, 1, '2026-10-01'), 
(2, 2, 2, '2026-10-02'), 
(4, 3, 1, '2026-10-04'), 
(5, 4, 3, '2026-10-05'); 




