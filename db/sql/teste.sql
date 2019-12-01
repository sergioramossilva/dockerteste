DROP DATABASE IF EXISTS `teste`;
CREATE DATABASE `teste`;
USE `teste`;

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
`id` int(11) NOT NULL,
`nome` varchar(200) NOT NULL DEFAULT '',
`descricao` text NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `usuarios` (`id`, `nome`, `descricao`)
VALUES
(1,'Usuario 1','Descricao 1'),
(2,'Usuario 2','Descricao 2'),
(3,'Usuario 3','Descricao 3');