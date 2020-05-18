-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.16 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para tbls_mb
CREATE DATABASE IF NOT EXISTS `tbls_mb` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `tbls_mb`;

-- Copiando estrutura para tabela tbls_mb.aposento
CREATE TABLE IF NOT EXISTS `aposento` (
  `id_aposento` int(11) NOT NULL AUTO_INCREMENT,
  `vlr` double NOT NULL,
  `tipo_aposento` varchar(45) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `numero` varchar(45) NOT NULL,
  PRIMARY KEY (`id_aposento`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela tbls_mb.aposento: ~18 rows (aproximadamente)
DELETE FROM `aposento`;
/*!40000 ALTER TABLE `aposento` DISABLE KEYS */;
INSERT INTO `aposento` (`id_aposento`, `vlr`, `tipo_aposento`, `descricao`, `numero`) VALUES
	(1, 500, '', '1 cama, tv, wi-fi', '1'),
	(2, 500, '', '1 cama, tv, wi-fi', '2'),
	(3, 1500, '', '2 camas, 2 suites, tv', '3'),
	(4, 2500, '', '3 camas, 3 suites, tv, wi-fi', '4'),
	(5, 600, '', '2 camas, tv', '5'),
	(6, 400, '', '1 cama, tv, wi-fi', '6'),
	(7, 250, '', '1 cama, tv, wi-fi', '7'),
	(8, 550, '', '2 camas, tv, wi-fi', '8'),
	(9, 650, '', '2 camas', '9'),
	(10, 1100, '', '2 camas, 2 suites, tv', '10'),
	(11, 1000, '', '2 camas, 2 suites, wi-fi', '11'),
	(12, 2300, '', '3 cama, 3 suites, tv, wi-fi', '12'),
	(13, 500, '', '1 cama, tv, wi-fi', '13'),
	(14, 800, '', '2 camas, 1 suite, wi-fi, tv', '14'),
	(15, 600, '', '2 camas', '15'),
	(16, 150, 'Casal', 'Cama queen, frigobar, tv e sauna', '15B'),
	(17, 200, 'Casal Master', 'Cama queen, frigobar, tv e sauna', '12'),
	(18, 85, 'Solteiro', 'Cama solteiro, ar-condicionado', '78');
/*!40000 ALTER TABLE `aposento` ENABLE KEYS */;

-- Copiando estrutura para tabela tbls_mb.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `sexo` tinyint(1) NOT NULL,
  `dt_nasc` date NOT NULL,
  `contato1` varchar(11) NOT NULL,
  `contato2` varchar(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela tbls_mb.cliente: ~18 rows (aproximadamente)
DELETE FROM `cliente`;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`id_cliente`, `nome`, `cpf`, `sexo`, `dt_nasc`, `contato1`, `contato2`, `email`, `senha`) VALUES
	(1, 'Yuri Martins da silva', '02442098747', 1, '2000-03-13', '', '', 'yuri@gmail.com', '123456'),
	(2, 'Isabele Teixeira Murta', '02447898202', 0, '2000-03-14', '', '', 'isa@gmail.com', '123456'),
	(3, 'João costinha silva', '85642098202', 1, '1971-03-14', '', '', 'joão@gmail.com', '123456'),
	(4, 'Mateus Murto Britu', '02342098202', 1, '1940-12-13', '', '', 'Mateusbd@gmail.com', '123456'),
	(5, 'Lucas Ribeiro silva', '98142098202', 1, '1939-06-09', '', '', 'lucas@gmail.com', '123456'),
	(12, 'Renato Augusto Moreira', '04817154698', 1, '1999-10-15', '', '', 'renato_moreira@gmail.com', '123456'),
	(13, 'Jessica Silva da Silva', '04817154100', 0, '1979-10-13', '', '', 'jessica@gmail.com', '123456'),
	(14, 'Paulo Santos Moreira', '04810052298', 1, '1999-10-15', '', '', 'psantos@gmail.com', '123456'),
	(15, 'João Augusto Rodrigues', '04999954698', 1, '1999-06-15', '', '', 'jrodrigues@gmail.com', '123456'),
	(16, 'Renata da Silva Maues', '05217154698', 0, '1999-05-12', '', '', 'rteixeira@gmail.com', '123456'),
	(17, 'Isabele Teixera Santos', '04817150000', 0, '1998-08-11', '', '', 'isantos@gmail.com', '123456'),
	(18, 'Ana Cassia Ferreira', '04817154369', 0, '1989-03-10', '', '', 'cassiaFer@gmail.com', '123456'),
	(19, 'Claraliz Silva Teixera', '04817112345', 0, '1988-01-19', '', '', 'clara123@gmail.com', '123456'),
	(20, 'Madalena Moreira de Souza', '04817100112', 0, '1979-12-20', '00000', '111111', 'madsouza@gmail.com', '123456'),
	(21, 'Pedro Paulo Santos Maxuel', '04817199885', 1, '1987-11-25', '', '', 'ppsantos@gmail.com', '123456'),
	(22, 'Alessandro Villa Boas Silva Cláudio', '78888555111', 1, '2002-12-31', '98999147412', '41977124478', 'ale22@gmail.com.br', '123456'),
	(23, 'Fernanda Luiza Bemergui Monção Souza', '12354689744', 0, '1987-03-15', '9140028922', '989220822', 'RICARDOMONCAO1974@GMAIL.COM', '123456'),
	(24, 'Joelma Edicleusa da Costa Dias', '11122233344', 0, '2000-12-31', '91999852428', '91999852429', 'novinha14@gmail.com', '1234567895');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Copiando estrutura para tabela tbls_mb.consumo
CREATE TABLE IF NOT EXISTS `consumo` (
  `id_consumo` int(11) NOT NULL AUTO_INCREMENT,
  `id_hospedagem` int(11) NOT NULL,
  `desc_prod` varchar(45) NOT NULL,
  `qtde_consumo` int(11) NOT NULL,
  `vlr_unitario` double NOT NULL,
  `dt_hr_consumo` timestamp NOT NULL,
  PRIMARY KEY (`id_consumo`),
  KEY `fk_consumo_hospedagem1_idx` (`id_hospedagem`),
  CONSTRAINT `fk_consumo_hospedagem1` FOREIGN KEY (`id_hospedagem`) REFERENCES `hospedagem` (`id_hospedagem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela tbls_mb.consumo: ~0 rows (aproximadamente)
DELETE FROM `consumo`;
/*!40000 ALTER TABLE `consumo` DISABLE KEYS */;
/*!40000 ALTER TABLE `consumo` ENABLE KEYS */;

-- Copiando estrutura para tabela tbls_mb.funcionario
CREATE TABLE IF NOT EXISTS `funcionario` (
  `id_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `celular_1` varchar(11) NOT NULL,
  `celular_2` varchar(11) NOT NULL,
  `cargo` varchar(45) NOT NULL,
  `salario` double NOT NULL,
  `sexo` tinyint(1) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`id_funcionario`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela tbls_mb.funcionario: ~17 rows (aproximadamente)
DELETE FROM `funcionario`;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
INSERT INTO `funcionario` (`id_funcionario`, `nome`, `cpf`, `email`, `celular_1`, `celular_2`, `cargo`, `salario`, `sexo`, `senha`) VALUES
	(1, 'Renan Batalha', '99084594061', 'r.batalha39@gmail.com', '948544238', '958251447', 'Serviços Gerais', 1080.02, 1, 'NpN0x!QkmDe5'),
	(2, 'Jessica Keeflen', '19107289006', 'Jessica@gmail.com', '959683568', '983749374', 'Auxiliar de RH', 2101.02, 0, 'yQ3Q%T2H3o5M'),
	(3, 'João Paulo Botelho', '57535866000', 'J.paulo@gmail.com', '956352848', '976655443', 'Atendente', 1211.78, 1, 'OIMwxP%mJ$Tj'),
	(4, 'Matias Lemos', '25513248077', 'Gibbs@gmail.com', '985963625', '945332211', 'Gerente', 2859.69, 1, 'potaseinono'),
	(5, 'Yuri Martins', '03179954051', 'Yuri34@gmail.com', '989693625', '987986745', 'Segurança', 1507.17, 1, 'RidMetallica'),
	(6, 'Bruno Costa', '91227710003', 'BrunoPM@gmail.com', '958969636', '900986754', 'Serviços Gerais', 1080.02, 1, 'BrBrBrPM'),
	(7, 'Lucas Nunes', '25090555001', 'Lukinhas@gmail.com', '985658248', '914022543', 'Auxiliar de RH', 2101.02, 1, '2234Nunesnunes'),
	(8, 'Gilbervaldo de Souza', '23394358034', 'Gilber@gmail.com', '925352565', '987970767', 'Segurança', 1507.17, 1, 'tiptip123'),
	(9, 'Nillson Eduard', '07456535027', 'QuerMorrer@gmail.com', '958693658', '956457656', 'Atendente', 1211.78, 1, '747747'),
	(10, 'Isabele Sabida', '20805980075', 'Isabelisab@gmail.com', '969362558', '989795949', 'Auxiliar de RH', 2101.02, 0, '586924674'),
	(11, 'Jubernaldo Poeira', '80166794040', 'Naldo@gmail.com', '958251447', '987768896', 'Serviços Gerais', 1080.02, 1, 'Naldoaldo0'),
	(12, 'Sodrovaldo Pinto', '37801720032', 'Valdo@gmail.com', '975648525', '942846321', 'Atendente', 1211.78, 1, 'Sodasoda9121'),
	(13, 'Isaias da costa', '759134100-6', 'Coista@gmail.com', '985251474', '909871232', 'Segurança', 1507.17, 1, 'misterbr4'),
	(14, 'Julian Arrenios', '27971303084', 'Arrenius81@gmail.com', '958526858', '914120198', 'Auxiliar de RH', 2101.02, 0, 'Hellsangels989'),
	(15, 'Adolfo Neto', '35380287026', 'Adolf@gmail.com', '956892312', '986764555', 'Serviços Gerais', 1080, 1, '88narcisism'),
	(16, 'Raul Lucca Alves', '56156516561', 'LuccaAlves@gmail.com', '654684988', '849646546', 'Aux RH', 2101.02, 1, '123456789'),
	(17, 'Raul Lucca Alves', '56156516561', 'LuccaAlves@gmail.com', '65468498848', '84964654646', 'Aux RH', 2101.02, 1, '123456789');
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;

-- Copiando estrutura para tabela tbls_mb.hospedagem
CREATE TABLE IF NOT EXISTS `hospedagem` (
  `id_hospedagem` int(11) NOT NULL AUTO_INCREMENT,
  `id_aposento` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  `dt_entrada` timestamp NOT NULL,
  `dt_saida` timestamp NULL DEFAULT NULL,
  `vlr_total` double NOT NULL,
  `vlr_pago` double NOT NULL,
  `dt_pagamento` timestamp NOT NULL,
  PRIMARY KEY (`id_hospedagem`),
  KEY `fk_hospedagem_cliente_idx` (`id_cliente`),
  KEY `fk_hospedagem_aposento1_idx` (`id_aposento`),
  KEY `fk_hospedagem_funcionario_idx` (`id_funcionario`),
  CONSTRAINT `fk_hospedagem_aposento1` FOREIGN KEY (`id_aposento`) REFERENCES `aposento` (`id_aposento`),
  CONSTRAINT `fk_hospedagem_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`),
  CONSTRAINT `fk_hospedagem_funcionario` FOREIGN KEY (`id_funcionario`) REFERENCES `funcionario` (`id_funcionario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela tbls_mb.hospedagem: ~2 rows (aproximadamente)
DELETE FROM `hospedagem`;
/*!40000 ALTER TABLE `hospedagem` DISABLE KEYS */;
INSERT INTO `hospedagem` (`id_hospedagem`, `id_aposento`, `id_cliente`, `id_funcionario`, `dt_entrada`, `dt_saida`, `vlr_total`, `vlr_pago`, `dt_pagamento`) VALUES
	(1, 17, 23, 6, '2020-02-28 00:00:00', NULL, 0, 0, '0000-00-00 00:00:00'),
	(2, 18, 12, 7, '2020-02-27 21:25:21', NULL, 0, 0, '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `hospedagem` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
