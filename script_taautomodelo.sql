create database taautomodelo;

use taautomodelo;

create table login(
	id smallint auto_increment primary key,
    usuario varchar(50),
    senha varchar(6)
);

insert into login values
(null, "admin", "123456"),
(null, "amanda", "123456"),
(null, "arthur", "123456"),
(null, "livia", "123456"),
(null, "thiago", "123456");

select * from login;