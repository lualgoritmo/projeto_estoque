CREATE DATABASE estoque;
USE estoque;

INSERT INTO users(user_number)
VALUES(123);

UPDATE users SET user_pass = MD5("1234")WHERE id = 1;

CREATE TABLE users(
	id INT AUTO_INCREMENT,	
	user_number INT,	
	user_pass VARCHAR(100),	
	user_token VARCHAR(100),	
	PRIMARY KEY(id)	
)ENGINE INNODB;

CREATE TABLE products
(
	id INT AUTO_INCREMENT,
	id_sale INT,
	cod INT,
	nameP VARCHAR(100),
	price FLOAT,
	quantity FLOAT,
	min_quantity FLOAT,
	purchase_date DATE,
	investment_month FLOAT,
	FOREIGN KEY(id_sale)
	REFERENCES sale(id_sale),
	PRIMARY KEY(id)
)ENGINE INNODB;

CREATE TABLE sale
(
	id_sale INT AUTO_INCREMENT,
	cod INT,
	date_sale DATE,
	price_sale FLOAT,
	total_sales_month FLOAT,
	sale_discount FLOAT,
	PRIMARY KEY(id_sale)
)ENGINE INNODB;





