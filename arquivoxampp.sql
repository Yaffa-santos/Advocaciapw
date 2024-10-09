//Texto para criação de tabela no xampp
CREATE TABLE `contas` (
  `numero_oab` int(11) NOT NULL,
  `nome_completo` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cpf` varchar(11) NOT NULL,
  `conta` varchar(255) DEFAULT NULL
);

CREATE TABLE `orcamentos` (
  `cpf` varchar(11) NOT NULL,
  `Nome_completo` varchar(60) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Telefone` varchar(30) DEFAULT NULL,
  `Turno_contato` varchar(15) DEFAULT NULL,
  `Vara_processual` varchar(70) DEFAULT NULL,
  `descricao_processo` varchar(100) DEFAULT NULL
);