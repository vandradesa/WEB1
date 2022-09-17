USE projeto;

CREATE TABLE Cliente (
	id int NOT NULL AUTO_INCREMENT,
    matricula bigint NOT NULL,
    nome varchar(100) NOT NULL,
    email varchar(100) NOT NULL,
    cpf varchar(11) NOT NULL,
    rg varchar(11)  NOT NULL, 
	data_nasc date NOT NULL,
    senha varchar(100) NOT NULL,
    curso varchar(100) NOT NULL,
    tipo int(3) NOT NULL,
    telefone varchar(11) NOT NULL,
    
    PRIMARY KEY (cpf),
    UNIQUE (id)
);

CREATE TABLE Projeto (
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(100) NOT NULL,
    resumo varchar(255) NOT NULL,
    atividades varchar(255) NOT NULL,
    certificado varbinary(250) NOT NULL,
    hrs_concluidas int NOT NULL,
    
    PRIMARY KEY (id)
);

CREATE TABLE Relatorio (
    id int NOT NULL AUTO_INCREMENT,
    envio date NOT NULL,
    horas_realizadas int,
    descricao_atividades varchar(255) NOT NULL, 
    validado boolean NOT NULL,
    id_projeto int NOT NULL,
    id_usuario varchar(11) NOT NULL,
    
    PRIMARY KEY (id, id_usuario),
	FOREIGN KEY (id_usuario) REFERENCES Cliente (cpf),
    FOREIGN KEY (id_projeto) REFERENCES Projeto(id)
);

CREATE TABLE Participa (
    cpf_cliente varchar(11) NOT NULL,
    id_projeto int NOT NULL,
    
    PRIMARY KEY (cpf_cliente, id_projeto),
    FOREIGN KEY (cpf_cliente) REFERENCES Cliente (cpf),
    FOREIGN KEY (id_projeto) REFERENCES Projeto(id)
);