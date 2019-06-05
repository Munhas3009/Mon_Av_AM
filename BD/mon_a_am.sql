/*
Navicat MySQL Data Transfer

Source Server         : phpmyadmin
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : mo_a_am

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-05-29 12:12:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for campanhas
-- ----------------------------
DROP TABLE IF EXISTS `campanhas`;
CREATE TABLE `campanhas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unidade_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `desc_campanha` varchar(255) NOT NULL,
  `dose` int(10) NOT NULL,
  `unidade_sanitaria` int(10) NOT NULL,
  `brigada_movel` int(10) NOT NULL,
  `agente_comun_saude` int(10) NOT NULL,
  `interv_idade` varchar(10) NOT NULL,
  `mulheres_p_parto` int(10) NOT NULL,
  `comentario` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of campanhas
-- ----------------------------

-- ----------------------------
-- Table structure for classificacaos
-- ----------------------------
DROP TABLE IF EXISTS `classificacaos`;
CREATE TABLE `classificacaos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `comentarios` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of classificacaos
-- ----------------------------
INSERT INTO `classificacaos` VALUES ('1', 'Hospital Central', 'Geralmente podem ser centros de ensino e especialização', null, '2019-05-11 18:25:40');
INSERT INTO `classificacaos` VALUES ('2', 'Hospital Geral', 'Para o ensino e especializado', '2019-05-11 18:29:17', '2019-05-11 18:29:17');
INSERT INTO `classificacaos` VALUES ('3', 'Centro de Saúde', 'Pode ser de local de residência e trabalho', '2019-05-11 18:33:11', '2019-05-11 18:33:11');
INSERT INTO `classificacaos` VALUES ('4', 'Posto de Saúde', 'Pode ser de local de residência e de trabalho', '2019-05-11 18:36:33', '2019-05-11 18:36:33');
INSERT INTO `classificacaos` VALUES ('5', 'Clínica médica', 'Local de prestação de cuidados de saúde ', '2019-05-11 18:43:10', '2019-05-11 18:43:10');
INSERT INTO `classificacaos` VALUES ('6', 'Consultório médico', '', '2019-05-11 18:44:13', '2019-05-11 18:44:13');
INSERT INTO `classificacaos` VALUES ('7', 'Centro de reabilitação física e psíquica', 'Local de reabilitação de doentes toxico dependentes', '2019-05-11 18:50:42', '2019-05-11 18:50:42');
INSERT INTO `classificacaos` VALUES ('8', 'Posto de enfermagem', '', '2019-05-11 18:52:21', '2019-05-27 09:39:57');
INSERT INTO `classificacaos` VALUES ('9', 'Centro de diagnóstico', '', '2019-05-11 18:53:48', '2019-05-11 18:53:48');
INSERT INTO `classificacaos` VALUES ('10', 'Centro de formação de saúde', '', '2019-05-11 18:54:57', '2019-05-11 18:54:57');
INSERT INTO `classificacaos` VALUES ('11', 'Centro de transporte de doente', '', '2019-05-11 18:55:55', '2019-05-11 18:55:55');
INSERT INTO `classificacaos` VALUES ('12', 'Assistência médica ao domicílio ', '', '2019-05-11 18:59:01', '2019-05-11 18:59:01');
INSERT INTO `classificacaos` VALUES ('13', 'Centro de enfermagem', '', '2019-05-11 19:03:47', '2019-05-11 19:03:47');

-- ----------------------------
-- Table structure for diagnosticos
-- ----------------------------
DROP TABLE IF EXISTS `diagnosticos`;
CREATE TABLE `diagnosticos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `sintoma` varchar(255) DEFAULT NULL,
  `metodo` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of diagnosticos
-- ----------------------------
INSERT INTO `diagnosticos` VALUES ('1', 'Malaria', 'Dores nas articulações, calafrios  ', 'Laboratório', '2019-05-03 23:02:24', '2019-05-03 23:02:24');
INSERT INTO `diagnosticos` VALUES ('2', 'Bronquite', 'Ma respiração, dores no diafragma e infecção no pulmão', 'Laboratório', '2019-05-03 23:04:28', '2019-05-03 23:04:28');

-- ----------------------------
-- Table structure for distritos
-- ----------------------------
DROP TABLE IF EXISTS `distritos`;
CREATE TABLE `distritos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `comentarios` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of distritos
-- ----------------------------
INSERT INTO `distritos` VALUES ('1', 'Distrito Municipal KaMpfumo', 'Distrito Municipal 1 - Distrito Municipal KaMpfumo.', null, null);
INSERT INTO `distritos` VALUES ('2', 'Distrito Municipal KaNhlamankulu', 'Distrito Municipal 2 - Distrito Municipal de Nhlamankulu.', null, null);
INSERT INTO `distritos` VALUES ('3', 'Distrito Municipal KaMaxakeni', 'Distrito Municipal 3 - Distrito Municipal KaMaxakeni', null, null);
INSERT INTO `distritos` VALUES ('4', 'Distrito Municipal KaMavota', 'Distrito Municipal 4. - Distrito Municipal KaMavota.', null, null);
INSERT INTO `distritos` VALUES ('5', 'Distrito Municipal KaMabukwana', 'Distrito Municipal 5 - Distrito Municipal KaMabukwana.', null, null);
INSERT INTO `distritos` VALUES ('6', 'Distrito Municipal KaTembe', 'Distrito Municpal da Catembe - Distrito Municipal Ka Tembe.', null, null);
INSERT INTO `distritos` VALUES ('7', 'Distrito Municipal KaNyaka', 'Distrito Municipal de Inhaca - Distrito Municipal KaNyaka.', null, null);

-- ----------------------------
-- Table structure for especialidades
-- ----------------------------
DROP TABLE IF EXISTS `especialidades`;
CREATE TABLE `especialidades` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `descricao` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of especialidades
-- ----------------------------
INSERT INTO `especialidades` VALUES ('1', 'Medicina', '');
INSERT INTO `especialidades` VALUES ('2', 'Dermatologia', '');
INSERT INTO `especialidades` VALUES ('3', 'Ortopedia', '');

-- ----------------------------
-- Table structure for pacientes
-- ----------------------------
DROP TABLE IF EXISTS `pacientes`;
CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `area_trabalho` varchar(255) DEFAULT NULL,
  `residencia` varchar(255) DEFAULT NULL,
  `genero` varchar(25) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `contacto` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `contacto` (`contacto`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of pacientes
-- ----------------------------
INSERT INTO `pacientes` VALUES ('1', 'Antonio de Amaral Magalhães', 'Eng. Construção Civil', 'Matola Godinho', 'Masculino', '42', '856958695', '2019-05-22 12:54:50', '2019-05-25 08:58:15');
INSERT INTO `pacientes` VALUES ('2', 'Jorge da Costa Baute', 'Técnico de Informatica', 'Bairro 25 de Junho \"A\" Rua 8', 'Masculino', '30', '878564231', '2019-05-22 12:56:58', '2019-05-25 08:58:42');
INSERT INTO `pacientes` VALUES ('3', 'Andre Magaia', 'Militar', 'Bairro da Maxaquene', 'Masculino', '35', '859635874', '2019-05-22 16:07:29', '2019-05-25 08:59:09');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'Super', 'Possui autorização de super admin', '2019-05-08 20:16:30', '2019-05-08 20:16:30');
INSERT INTO `roles` VALUES ('2', 'Admin', 'Gestão da aplicação', '2019-05-08 20:19:29', '2019-05-08 20:19:29');
INSERT INTO `roles` VALUES ('3', 'Medico', 'Tem autorização para acessar a área médica', '2019-05-08 20:28:55', '2019-05-22 09:36:38');
INSERT INTO `roles` VALUES ('4', 'Tecnico de Saúde', 'Tem autorização para acessar a área médica', '2019-05-08 20:30:02', '2019-05-22 09:37:11');
INSERT INTO `roles` VALUES ('5', 'Tecnico Admin', 'Gestão de relatórios e áreas administrativas', '2019-05-08 20:31:56', '2019-05-08 20:31:56');

-- ----------------------------
-- Table structure for tratamentos
-- ----------------------------
DROP TABLE IF EXISTS `tratamentos`;
CREATE TABLE `tratamentos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `unidade_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `especialidade_id` int(11) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  `contador` int(11) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `diagnostico_id` int(11) DEFAULT NULL,
  `tratamento` varchar(255) DEFAULT NULL,
  `svacinacao` varchar(255) DEFAULT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tratamentos
-- ----------------------------
INSERT INTO `tratamentos` VALUES ('1', '1', '1', '1', '1', '1', 'Altamente febrio', '1', 'medicacao de Malaria', 'adulto', 'Sinais de desidratação', '2019-05-28 21:29:19', '2019-05-28 21:29:19');

-- ----------------------------
-- Table structure for unidades
-- ----------------------------
DROP TABLE IF EXISTS `unidades`;
CREATE TABLE `unidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slogan` varchar(255) DEFAULT NULL,
  `nuit` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `data_fundacao` date NOT NULL,
  `classificacao_id` int(11) NOT NULL,
  `distrito_id` int(11) NOT NULL,
  `numero_camas` int(3) NOT NULL,
  `endereco` text NOT NULL,
  `comentarios` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `unidade_esta_num_distrito` (`distrito_id`) USING BTREE,
  KEY `unidade_possui_uma_classificacao` (`classificacao_id`) USING BTREE,
  CONSTRAINT `unidade_esta_num_distrito` FOREIGN KEY (`distrito_id`) REFERENCES `distritos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `unidade_possui_uma_classificacao` FOREIGN KEY (`classificacao_id`) REFERENCES `classificacaos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of unidades
-- ----------------------------
INSERT INTO `unidades` VALUES ('1', 'Clínica Sommechild', 'O nosso maior valor é a vida.', '12345678', 'info@sommechild.co.mz', '1999-12-06', '5', '1', '20', 'Av. Karl Max, Nº 1234', 'Está clinica trata todo tipo de doenças com máquina.', null, '2019-05-27 11:22:20');
INSERT INTO `unidades` VALUES ('2', 'ClineCare', 'O nosso maior valor e a vida', '145687598', 'clincare@unidade.mz', '2014-07-05', '5', '1', '50', 'Bairro da Sommerchild, Av. Armando Tivane ', 'Clinica especializada em tratamento de diversas doenças', '2019-05-03 22:36:23', '2019-05-11 20:06:25');
INSERT INTO `unidades` VALUES ('3', '222', 'O nosso maior valor e a vida', '12345678', '222@clinica.mz', '2002-06-25', '5', '1', '30', 'Bairro da Coop Q 20 n 124', 'Especializada no tratamento de varias doenças ', '2019-05-26 20:37:52', '2019-05-26 20:37:52');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `apelido` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `passkey` varchar(13) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `photo_dir` varchar(255) DEFAULT NULL,
  `timeout` timestamp NULL DEFAULT NULL,
  `role_id` int(11) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_esta_num_role` (`role_id`) USING BTREE,
  CONSTRAINT `user_possui_um_role` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
