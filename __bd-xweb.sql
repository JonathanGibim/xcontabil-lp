/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.5.5-10.4.22-MariaDB : Database - jw
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `admin_modulo` */

CREATE TABLE `admin_modulo` (
  `cod_modulo` int(9) NOT NULL AUTO_INCREMENT,
  `dsc_code` varchar(200) DEFAULT NULL,
  `dsc_nome` varchar(200) DEFAULT NULL,
  `dsc_descricao` text DEFAULT NULL,
  `dsc_icone` varchar(200) DEFAULT NULL,
  `int_ordem` int(9) DEFAULT NULL,
  `dat_inc` datetime DEFAULT NULL,
  `cod_log_inc` int(9) DEFAULT NULL,
  `dat_alt` datetime DEFAULT NULL,
  `cod_log_alt` int(9) DEFAULT NULL,
  `dat_exc` datetime DEFAULT NULL,
  `cod_log_exc` int(9) DEFAULT NULL,
  PRIMARY KEY (`cod_modulo`),
  UNIQUE KEY `dsc_code` (`dsc_code`),
  UNIQUE KEY `dsc_nome` (`dsc_nome`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `admin_modulo` */

insert  into `admin_modulo`(`cod_modulo`,`dsc_code`,`dsc_nome`,`dsc_descricao`,`dsc_icone`,`int_ordem`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (1,'modulo','Módulo','Gerenciamento de Módulos do admin','fas fa-cubes',1,'2023-12-20 21:00:27',1,NULL,NULL,NULL,NULL);
insert  into `admin_modulo`(`cod_modulo`,`dsc_code`,`dsc_nome`,`dsc_descricao`,`dsc_icone`,`int_ordem`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (2,'perfil','Perfil','Gerenciamento de Perfis do admin','fas fa-lock',2,'2023-12-20 21:00:27',1,NULL,NULL,NULL,NULL);
insert  into `admin_modulo`(`cod_modulo`,`dsc_code`,`dsc_nome`,`dsc_descricao`,`dsc_icone`,`int_ordem`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (3,'usuario','Usuário','Gerenciamento de Usuários do admin','fas fa-user-secret',3,'2023-12-20 21:00:27',1,NULL,NULL,NULL,NULL);
insert  into `admin_modulo`(`cod_modulo`,`dsc_code`,`dsc_nome`,`dsc_descricao`,`dsc_icone`,`int_ordem`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (4,'contato','Contato','Gerenciar contatos do site','fas fa-comment-dots',4,'2023-12-23 21:48:01',1,NULL,NULL,NULL,NULL);

/*Table structure for table `admin_pagina` */

CREATE TABLE `admin_pagina` (
  `cod_pagina` int(9) NOT NULL AUTO_INCREMENT,
  `cod_modulo` int(9) DEFAULT NULL,
  `dsc_code` varchar(200) DEFAULT NULL,
  `dsc_nome` varchar(200) DEFAULT NULL,
  `dsc_descricao` text DEFAULT NULL,
  `int_ordem` int(9) DEFAULT NULL,
  `int_oculto` int(9) DEFAULT NULL,
  `dat_inc` datetime DEFAULT NULL,
  `cod_log_inc` int(9) DEFAULT NULL,
  `dat_alt` datetime DEFAULT NULL,
  `cod_log_alt` int(9) DEFAULT NULL,
  `dat_exc` datetime DEFAULT NULL,
  `cod_log_exc` int(9) DEFAULT NULL,
  PRIMARY KEY (`cod_pagina`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

/*Data for the table `admin_pagina` */

insert  into `admin_pagina`(`cod_pagina`,`cod_modulo`,`dsc_code`,`dsc_nome`,`dsc_descricao`,`int_ordem`,`int_oculto`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (1,1,'gerenciar','Gerenciar','Gerenciar Módulos do admin',1,0,'2023-12-20 21:00:27',1,NULL,NULL,NULL,NULL);
insert  into `admin_pagina`(`cod_pagina`,`cod_modulo`,`dsc_code`,`dsc_nome`,`dsc_descricao`,`int_ordem`,`int_oculto`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (2,1,'cadastrar','Cadastrar','Cadastrar Módulo do admin',2,0,'2023-12-20 21:00:27',1,NULL,NULL,NULL,NULL);
insert  into `admin_pagina`(`cod_pagina`,`cod_modulo`,`dsc_code`,`dsc_nome`,`dsc_descricao`,`int_ordem`,`int_oculto`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (3,1,'editar','Editar','Editar Módulo',3,1,'2023-12-20 21:00:27',1,NULL,NULL,NULL,NULL);
insert  into `admin_pagina`(`cod_pagina`,`cod_modulo`,`dsc_code`,`dsc_nome`,`dsc_descricao`,`int_ordem`,`int_oculto`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (4,1,'excluir','Excluir','Excluir Módulo',4,1,'2023-12-20 21:00:27',1,NULL,NULL,NULL,NULL);
insert  into `admin_pagina`(`cod_pagina`,`cod_modulo`,`dsc_code`,`dsc_nome`,`dsc_descricao`,`int_ordem`,`int_oculto`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (5,1,'paginas','Páginas','Gerenciar Páginas do Módulo',5,1,'2023-12-20 21:00:27',1,NULL,NULL,NULL,NULL);
insert  into `admin_pagina`(`cod_pagina`,`cod_modulo`,`dsc_code`,`dsc_nome`,`dsc_descricao`,`int_ordem`,`int_oculto`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (6,1,'excluir-pagina','Excluir Páginas','Excluir Páginas do Módulo',6,1,'2023-12-20 21:00:27',1,NULL,NULL,NULL,NULL);
insert  into `admin_pagina`(`cod_pagina`,`cod_modulo`,`dsc_code`,`dsc_nome`,`dsc_descricao`,`int_ordem`,`int_oculto`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (7,2,'gerenciar','Gerenciar','Gerenciar Perfis do admin',7,0,'2023-12-20 21:00:27',1,NULL,NULL,NULL,NULL);
insert  into `admin_pagina`(`cod_pagina`,`cod_modulo`,`dsc_code`,`dsc_nome`,`dsc_descricao`,`int_ordem`,`int_oculto`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (8,2,'cadastrar','Cadastrar','Cadastrar Perfil do admin',8,0,'2023-12-20 21:00:27',1,NULL,NULL,NULL,NULL);
insert  into `admin_pagina`(`cod_pagina`,`cod_modulo`,`dsc_code`,`dsc_nome`,`dsc_descricao`,`int_ordem`,`int_oculto`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (9,2,'editar','Editar','Editar Perfil',9,1,'2023-12-20 21:00:27',1,NULL,NULL,NULL,NULL);
insert  into `admin_pagina`(`cod_pagina`,`cod_modulo`,`dsc_code`,`dsc_nome`,`dsc_descricao`,`int_ordem`,`int_oculto`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (10,2,'excluir','Excluir','Excluir Perfil',10,1,'2023-12-20 21:00:27',1,NULL,NULL,NULL,NULL);
insert  into `admin_pagina`(`cod_pagina`,`cod_modulo`,`dsc_code`,`dsc_nome`,`dsc_descricao`,`int_ordem`,`int_oculto`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (11,2,'permissoes','Permissões','Gerenciar Permissões do Perfil',11,1,'2023-12-20 21:00:27',1,NULL,NULL,NULL,NULL);
insert  into `admin_pagina`(`cod_pagina`,`cod_modulo`,`dsc_code`,`dsc_nome`,`dsc_descricao`,`int_ordem`,`int_oculto`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (12,3,'gerenciar','Gerenciar','Gerenciar Usuários do admin',12,0,'2023-12-20 21:00:27',1,NULL,NULL,NULL,NULL);
insert  into `admin_pagina`(`cod_pagina`,`cod_modulo`,`dsc_code`,`dsc_nome`,`dsc_descricao`,`int_ordem`,`int_oculto`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (13,3,'cadastrar','Cadastrar','Cadastrar Usuário do admin',13,0,'2023-12-20 21:00:27',1,NULL,NULL,NULL,NULL);
insert  into `admin_pagina`(`cod_pagina`,`cod_modulo`,`dsc_code`,`dsc_nome`,`dsc_descricao`,`int_ordem`,`int_oculto`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (14,3,'editar','Editar','Editar Usuário',14,1,'2023-12-20 21:00:27',1,NULL,NULL,NULL,NULL);
insert  into `admin_pagina`(`cod_pagina`,`cod_modulo`,`dsc_code`,`dsc_nome`,`dsc_descricao`,`int_ordem`,`int_oculto`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (15,3,'excluir','Excluir','Excluir Usuário',15,1,'2023-12-20 21:00:27',1,NULL,NULL,NULL,NULL);
insert  into `admin_pagina`(`cod_pagina`,`cod_modulo`,`dsc_code`,`dsc_nome`,`dsc_descricao`,`int_ordem`,`int_oculto`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (16,4,'gerenciar','Gerenciar','Gerenciar contatos',16,0,'2023-12-23 21:48:01',NULL,NULL,NULL,NULL,NULL);
insert  into `admin_pagina`(`cod_pagina`,`cod_modulo`,`dsc_code`,`dsc_nome`,`dsc_descricao`,`int_ordem`,`int_oculto`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (17,4,'cadastrar','Cadastrar','Cadastrar contato',17,0,'2023-12-23 21:48:01',NULL,NULL,NULL,NULL,NULL);
insert  into `admin_pagina`(`cod_pagina`,`cod_modulo`,`dsc_code`,`dsc_nome`,`dsc_descricao`,`int_ordem`,`int_oculto`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (18,4,'excluir','Excluir','Excluir contato',18,1,'2023-12-23 21:48:01',NULL,NULL,NULL,NULL,NULL);
insert  into `admin_pagina`(`cod_pagina`,`cod_modulo`,`dsc_code`,`dsc_nome`,`dsc_descricao`,`int_ordem`,`int_oculto`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (19,4,'detalhes','Detalhes','Detalhes do contato',19,1,'2023-12-23 21:48:01',NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `admin_perfil` */

CREATE TABLE `admin_perfil` (
  `cod_perfil` int(9) NOT NULL AUTO_INCREMENT,
  `dsc_nome` varchar(200) DEFAULT NULL,
  `dsc_descricao` text DEFAULT NULL,
  `dat_inc` datetime DEFAULT NULL,
  `cod_log_inc` int(9) DEFAULT NULL,
  `dat_alt` datetime DEFAULT NULL,
  `cod_log_alt` int(9) DEFAULT NULL,
  `dat_exc` datetime DEFAULT NULL,
  `cod_log_exc` int(9) DEFAULT NULL,
  PRIMARY KEY (`cod_perfil`),
  UNIQUE KEY `dsc_nome` (`dsc_nome`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `admin_perfil` */

insert  into `admin_perfil`(`cod_perfil`,`dsc_nome`,`dsc_descricao`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (1,'ROOT','ADMIN ROOT','2023-12-20 21:00:28',1,NULL,NULL,NULL,NULL);
insert  into `admin_perfil`(`cod_perfil`,`dsc_nome`,`dsc_descricao`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (2,'Admin','Perfil para administrador','2023-12-20 21:00:28',1,NULL,NULL,NULL,NULL);

/*Table structure for table `admin_perfil_permissao` */

CREATE TABLE `admin_perfil_permissao` (
  `cod_perfil_permissao` int(9) NOT NULL AUTO_INCREMENT,
  `cod_perfil` int(9) NOT NULL,
  `cod_modulo` int(9) NOT NULL,
  `cod_pagina` int(9) NOT NULL,
  PRIMARY KEY (`cod_perfil_permissao`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

/*Data for the table `admin_perfil_permissao` */

insert  into `admin_perfil_permissao`(`cod_perfil_permissao`,`cod_perfil`,`cod_modulo`,`cod_pagina`) values (18,2,4,19);
insert  into `admin_perfil_permissao`(`cod_perfil_permissao`,`cod_perfil`,`cod_modulo`,`cod_pagina`) values (17,2,4,18);
insert  into `admin_perfil_permissao`(`cod_perfil_permissao`,`cod_perfil`,`cod_modulo`,`cod_pagina`) values (16,2,4,17);
insert  into `admin_perfil_permissao`(`cod_perfil_permissao`,`cod_perfil`,`cod_modulo`,`cod_pagina`) values (15,2,4,16);
insert  into `admin_perfil_permissao`(`cod_perfil_permissao`,`cod_perfil`,`cod_modulo`,`cod_pagina`) values (14,2,3,15);
insert  into `admin_perfil_permissao`(`cod_perfil_permissao`,`cod_perfil`,`cod_modulo`,`cod_pagina`) values (13,2,3,14);
insert  into `admin_perfil_permissao`(`cod_perfil_permissao`,`cod_perfil`,`cod_modulo`,`cod_pagina`) values (12,2,3,13);
insert  into `admin_perfil_permissao`(`cod_perfil_permissao`,`cod_perfil`,`cod_modulo`,`cod_pagina`) values (11,2,3,12);

/*Table structure for table `admin_usuario` */

CREATE TABLE `admin_usuario` (
  `cod_admin_usuario` int(9) NOT NULL AUTO_INCREMENT,
  `cod_perfil` int(9) NOT NULL,
  `dsc_nome` varchar(100) DEFAULT NULL,
  `dsc_email` varchar(100) DEFAULT NULL,
  `dsc_senha` varchar(32) DEFAULT NULL,
  `int_ativo` tinyint(1) DEFAULT NULL,
  `dat_nova_senha` datetime DEFAULT NULL,
  `dsc_token_senha` varchar(60) DEFAULT NULL,
  `dat_inc` datetime DEFAULT NULL,
  `cod_log_inc` int(9) DEFAULT NULL,
  `dat_alt` datetime DEFAULT NULL,
  `cod_log_alt` int(9) DEFAULT NULL,
  `dat_exc` datetime DEFAULT NULL,
  `cod_log_exc` int(9) DEFAULT NULL,
  PRIMARY KEY (`cod_admin_usuario`),
  UNIQUE KEY `dsc_email` (`dsc_email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `admin_usuario` */

insert  into `admin_usuario`(`cod_admin_usuario`,`cod_perfil`,`dsc_nome`,`dsc_email`,`dsc_senha`,`int_ativo`,`dat_nova_senha`,`dsc_token_senha`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (1,1,'Root Jhoweb','root@jhoweb.com.br','e10adc3949ba59abbe56e057f20f883e',1,NULL,NULL,'2023-12-20 21:00:28',1,NULL,NULL,NULL,NULL);
insert  into `admin_usuario`(`cod_admin_usuario`,`cod_perfil`,`dsc_nome`,`dsc_email`,`dsc_senha`,`int_ativo`,`dat_nova_senha`,`dsc_token_senha`,`dat_inc`,`cod_log_inc`,`dat_alt`,`cod_log_alt`,`dat_exc`,`cod_log_exc`) values (2,2,'Cliente','cliente@jhoweb.com.br','e10adc3949ba59abbe56e057f20f883e',1,NULL,NULL,'2023-12-20 21:00:28',1,NULL,NULL,NULL,NULL);

/*Table structure for table `contato` */

CREATE TABLE `contato` (
  `cod_contato` int(9) NOT NULL AUTO_INCREMENT,
  `dsc_nome` varchar(250) DEFAULT NULL,
  `dsc_email` varchar(250) DEFAULT NULL,
  `dsc_telefone` varchar(250) DEFAULT NULL,
  `dsc_assunto` varchar(250) DEFAULT NULL,
  `dsc_mensagem` text DEFAULT NULL,
  `int_visualizado` int(1) DEFAULT NULL,
  `dat_inc` datetime DEFAULT NULL,
  `cod_log_inc` int(11) DEFAULT NULL,
  `dat_exc` datetime DEFAULT NULL,
  `cod_log_exc` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod_contato`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
