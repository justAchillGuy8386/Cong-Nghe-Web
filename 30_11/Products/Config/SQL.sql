create database webproducts

use webproducts

create table products (
	id INT AUTO_INCREMENT primary key, 
	name VARCHAR(50),
	price float
);
insert into products (id, name, price) values (1, 'Lari', 1537.84);