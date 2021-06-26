create database icomida;

create table motoboys (
    id INTEGER (32),
    nome VARCHAR (255),
    placa VARCHAR (7)
);
INSERIDOS NA LISTA DE MOTOBOYS:
insert into motoboys (id, nome, placa) values (11, 'Dalton', 'GGG5580');
insert into motoboys (id, nome, placa) values (12, 'Bruno', 'KHO7580');
insert into motoboys (id, nome, placa) values (13, 'Carlos', 'BRU5896');

create table pedidos (
    id INTEGER (32),
    motoboy_id INTEGER(32),
    cliente_id INTEGER (32),
    data_criacao DATETIME,
    descricao VARCHAR (255),
    valor DECIMAL (8,2)
);

create table clientes (
    id INTEGER (32),
    cpf VARCHAR (11),
    nome VARCHAR (255),
    endereco VARCHAR (255)
    );

    