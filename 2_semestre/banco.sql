drop database veic;
create database if not exists veic;
use veic;

create table auto (
id int auto_increment not null,
primary key(id),
ano int(4) not null,
cor varchar(30) not null,
modelo varchar(30) not null,
placa varchar (7) not null,
unique (placa),
valor decimal (10, 2)
);

alter table auto
add VA decimal (10,2),
add DA datetime default current_timestamp on update current_timestamp;


-- teste (o update era manual) --

INSERT INTO auto (ano, cor, modelo, placa, valor) values
(2004, 'azul', 'fusca', 'BRA7S13', 1545.00 );

update auto
set VA = 2000.00
where id = 1;

select * from auto;
