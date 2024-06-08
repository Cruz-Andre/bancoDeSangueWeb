-- drop database bdsangueweb;
create database bdsangueweb;
use bdsangueweb;

create table login (
	idLogin bigint primary key auto_increment,
	usrLogin varchar(100) unique not null,
    senhaLogin varchar(50) not null
);

create table cadDoador (
	idDoador bigint primary key auto_increment,
	nomeDoador varchar(100) not null,
    tipoSanguineoDoador varchar(3) not null,
    dataNascimentoDoador date not null,
    cepDoador varchar(8) not null,
    bairroDoador varchar(50) not null,
	cidadeDoador varchar(80) not null,
    ufdoador varchar(25) not null,
    emailDoador varchar(100) unique not null	
);

-- chave estrangeira idLogin na tabela login. referencia o idDoador da tabela doador.
alter table login add constraint FK_login_cadDoador
foreign key (idLogin) references cadDoador (idDoador);

describe login;
describe cadDoador;

select * from login;
select * from cadDoador;

create table hospitalSangue (
	idHosp bigint primary key auto_increment,
    nomeHospital varchar(100) not null,
    aPos int not null,
    aNeg int not null,
    bPos int not null,
    bNeg int not null,
    abPos int not null,
    abNeg int not null,
    oPos int not null,
    oNeg int not null
);

select * from hospitalSangue;