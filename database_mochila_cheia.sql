drop schema if exists Mochila_Cheia;
create schema Mochila_Cheia;
use Mochila_Cheia;

create table tb_tipocontato(
cd_tipocontato int not null,
nm_tipocontato varchar (100),
	constraint pk_tipocontato
		primary key (cd_tipocontato));
        
create table tb_tipoescola(
cd_tipoescola int not null,
nm_tipoescola varchar (100),
	constraint pk_tipoescola
		primary key (cd_tipoescola));
        
create table tb_uf(
sg_estado char (2),
nm_estado varchar (100),
	constraint pk_uf 
		primary key (sg_estado));

create table tb_itens(
cd_itens int not null,
nm_itens varchar (100),
qt_maxitens int,
	constraint pk_itens 
		primary key (cd_itens));
        
create table tb_donatario(
cd_donatario int not null,
nm_donatario varchar (100),
cd_cpf char (14),
cd_telefone varchar (14),
nm_email varchar (100),
cd_escola int,
	constraint pk_donatario
		primary key (cd_donatario));
        
create table tb_cidade(
cd_cidade int not null,
nm_cidade varchar (100),
sg_estado char (2),
	constraint pk_cidade
		primary key (cd_cidade),
	constraint fk_cidade_estado
			foreign key (sg_estado)
				references tb_uf (sg_estado));
                
create table tb_contato(
cd_contato int not null,
nm_contato varchar (100),
cd_tipocontato int,
cd_donatario int,
	constraint pk_contato 
		primary key (cd_contato),
	constraint fk_contato_tipocontato 
		foreign key (cd_tipocontato) 
			references tb_tipocontato (cd_tipocontato),
	constraint fk_contato_donatario
		foreign key (cd_donatario) 
			references tb_donatario (cd_donatario));
            
create table tb_escola(
cd_escola int not null,
nm_escola varchar (100),
cd_tipoescola int,
cd_cidade int,
	constraint pk_escola
		primary key (cd_escola),
	constraint fk_escola_tipoescola 
		foreign key (cd_tipoescola) 
			references tb_tipoescola (cd_tipoescola),
	constraint fk_escola_cidade
		foreign key (cd_cidade) 
			references tb_cidade (cd_cidade));
            
create table tb_crianca(
cd_crianca int not null,
nm_crianca varchar (100),
cd_ra char (9),
cd_registro char (8),
cd_cidade int,
cd_donatario int,
	constraint pk_crianca
		primary key (cd_crianca),
	constraint fk_crianca_cidade
		foreign key (cd_cidade) 
			references tb_cidade (cd_cidade),
	constraint fk_crianca_donatario
		foreign key (cd_donatario) 
			references tb_donatario (cd_donatario));
            
create table tb_crianca_itens(
cd_crianca_itens int not null,
nm_crianca_itens varchar (100) not null,
qt_crianca_itens int not null,
cd_crianca int,
cd_itens int,
	constraint pk_crianca_itens
		primary key (cd_crianca_itens),
	constraint fk_crianca_itens_crianca
		foreign key (cd_crianca) 
			references tb_crianca (cd_crianca),
	constraint fk_crianca_itens_itens
		foreign key (cd_itens) 
			references tb_itens (cd_itens));
            
insert into tb_tipocontato values (01, 'E-mail'), (02, 'Telefone');

insert into tb_tipoescola values (01, 'Escola municipal'), (02, 'Escola estadual');

insert into tb_uf values ('SP', 'São Paulo');

insert into tb_itens values (01, 'Caneta Azul', 03), (02, 'Caneta Preta', 03), (03, 'Caneta Vermelha', 03), (04, 'Borracha', 02), (05, 'Lápis de escrita', 03);

insert into tb_cidade values (01, 'Santos', 'SP'), (02, 'São Vicente', 'SP'), (03, 'Praia Grande', 'SP'), (04, 'Peruíbe', 'SP'), (05, 'Cubatão', 'SP'), 
(06, 'Bertioga', 'SP'), (07, 'Itanhaém', 'SP'), (08, 'Guarujá', 'SP'), (09, 'Mongaguá', 'SP');

insert into tb_escola values (01, 'Pastor Joaquim Rodrigues da Silva', 01, 02), (02, 'Yolanda Conte', 02, 02), (03, 'Primo Ferreira', 01, 01);

insert into tb_donatario values (01, 'David Adiala Junior', '154.031.370-09', '(13)91234-5678', 'david@gmail.com', 01), 
(02, 'Gustavo Costa Arakaki', '705.489.570-37', '(13)91123-4567', 'gustavo@gmail.com', 02), 
(03, 'Lucas do Carmo Santos', '618.346.610-72', '(13)91122-4466', 'lucas@gmail.com', 03), (04, 'Mikael Vital', '068.359.900-31', '(13)91022-2400', 'mikael@gmail.com', 04);

insert into tb_contato values (01, 'E-mail', 01, 01), (02, 'E-mail', 01, 02), (03, 'Telefone', 02, 03), (04, 'Telefone', 02, 04);

insert into tb_crianca values (01, 'Pedro Henrique', '9999999-9', '4569-ff2', 01, 01), (02, 'Maria Gabriela', '8899988-8', '3528-fc0', 03, 02), 
(03, 'Diego Fernandes', '5634909-5', '8794-re1', 01, 03), (04, 'Isabela da Costa', '5720109-5', '2713-dy0', 01, 04);

insert into tb_crianca_itens values (01, 'Pedro Henrique', 03, 01, 01), (02, 'Maria Gabriela', 03, 02, 02), (03, 'Diego Fernandes', 03, 03, 03), 
(04, 'Isabela da Costa', 02, 04, 04);

