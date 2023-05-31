create database cadastro; 
/*ENTER*/

use cadastro;
/*ENTER*/

create table solicitacao(
id int(255) primary key auto_increment,
nome varchar(50) not null,
secao varchar(15) not null,
assunto varchar(200) not null,
data varchar(255) not null
);
/*ENTER*/

create table concluido(
id int(255) primary key auto_increment,
nome varchar(50) not null,
secao varchar(15) not null,
assunto varchar(200) not null,
nota varchar(200) not null,
data_conc varchar(255) not null,
tec varchar(255) not null
);
/*ENTER*/

create table pendente(
id int(255) primary key,
nome varchar(50) not null,
secao varchar(15) not null,
assunto varchar(200) not null,
nota varchar(200) not null,
data varchar(255) not null,
tec varchar(255) not null
);
/*ENTER*/

create table externo(
id int(255) primary key,
nome varchar(50) not null,
secao varchar(15) not null,
assunto varchar(200) not null,
data varchar(255) not null,
nota varchar(200) not null,
tec varchar(255) not null
);
/*ENTER*/

