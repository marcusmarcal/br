CREATE USER 'userbr'@'localhost' IDENTIFIED BY 'Uws012aQ=!';
GRANT ALL PRIVILEGES ON br.* TO 'userbr'@'localhost';
CREATE DATABASE br;
USE br;
CREATE TABLE `dados_br` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `numero_br` varchar(255) NOT NULL DEFAULT '0',
  `produto` varchar(255) DEFAULT '0',
  `numero_serie` varchar(255) DEFAULT '0',
  `mac_addr` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_1` (`numero_br`)
) ENGINE=MyISAM AUTO_INCREMENT=96723 DEFAULT CHARSET=latin1;

CREATE TABLE `fornecedores_br` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `fornecedor` (`nome`)
) ENGINE=MyISAM AUTO_INCREMENT=175 DEFAULT CHARSET=latin1;

CREATE TABLE `funcionarios_br` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

CREATE TABLE `index_br` (
  `numero_br` bigint(7) NOT NULL AUTO_INCREMENT,
  `nome_fornecedor` varchar(255) DEFAULT '0',
  `natureza` varchar(255) DEFAULT NULL,
  `numero_nota` varchar(255) DEFAULT '0',
  `data_nota` date DEFAULT '0000-00-00',
  `transportadora` varchar(255) DEFAULT NULL,
  `ordem_compra` varchar(255) DEFAULT NULL,
  `data_recebimento` date DEFAULT '0000-00-00',
  `autorizacao` varchar(255) DEFAULT NULL,
  `responsavel` varchar(255) DEFAULT '0',
  `obs` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`numero_br`)
) ENGINE=MyISAM AUTO_INCREMENT=3257 DEFAULT CHARSET=latin1;

CREATE TABLE `natureza_br` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

CREATE TABLE `produtos` (
  `id` int(255) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `valor_padrao` int(255) DEFAULT NULL,
  `obs` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

CREATE TABLE `produtos_br` (
  `id` bigint(3) unsigned NOT NULL AUTO_INCREMENT,
  `produto` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `produto` (`produto`)
) ENGINE=MyISAM AUTO_INCREMENT=554 DEFAULT CHARSET=latin1;

CREATE TABLE `transportadoras_br` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;