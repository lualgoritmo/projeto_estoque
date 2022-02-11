
CREATE TABLE users(
	id INT AUTO_INCREMENT,	
	user_number INT,	
	user_pass VARCHAR(100),	
	user_token VARCHAR(100),	
	PRIMARY KEY(id)	
)ENGINE INNODB;

CREATE TABLE products
id int,
id_sale int,
cod INT,
nameP varchar(100),
price float,
quantity float,
min_quantity float,
purchase_date date,
investment_month FLOAT,
foreign key(id_sale)
references sale(id_sale),
primary key(id)
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





