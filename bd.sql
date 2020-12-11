

CREATE TABLE `compradores` (
    `Nome` varchar(100) not null,
    `id` int(11) not null auto_increment,
    `email` varchar(100) not null,
    `senha` varchar(100) not null,
    PRIMARY KEY (`id`)
);

CREATE TABLE `livros` (
    `id` int(11) not null auto_increment,
    `autor` varchar(100) not null,
    `titulo` varchar(100) not null,
    `editora` varchar(100) not null,
    `preco` double not null,
    PRIMARY KEY (`id`)
);

CREATE TABLE `pedidos` (
    `idcliente` int(11) not null,
    `idlivro` int(11) not null,
    `preco` double not null,
    `nome` varchar(100) not null,
    PRIMARY KEY(`idcliente`,`idlivro`),
    CONSTRAINT FK_cli FOREIGN KEY(`idcliente`) references compradores(`id`),
    CONSTRAINT FK_li FOREIGN KEY(`idlivro`) references livros(`id`)
);