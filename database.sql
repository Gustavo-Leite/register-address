CREATE DATABASE db-address;
CREATE TABLE `address-table` (
  `id` int NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `logradouro` varchar(80) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `bairro` varchar(80) NOT NULL,
  `cidade` varchar(80) NOT NULL,
  `uf` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
)