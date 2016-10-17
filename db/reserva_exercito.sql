-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 16, 2016 at 11:57 PM
-- Server version: 5.5.52-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reserva_exercito`
--

-- --------------------------------------------------------

--
-- Table structure for table `acessorio`
--

CREATE TABLE IF NOT EXISTS `acessorio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `observacao` text NOT NULL,
  `status` int(11) NOT NULL,
  `reserva_id` int(11) NOT NULL,
  `tipo_acessorio_id` int(11) NOT NULL,
  `cautela_acessorio_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_acessorio_reserva1_idx` (`reserva_id`),
  KEY `fk_acessorio_tipo_acessorio1_idx` (`tipo_acessorio_id`),
  KEY `cautela_acessorio_id` (`cautela_acessorio_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `acessorio`
--

INSERT INTO `acessorio` (`id`, `observacao`, `status`, `reserva_id`, `tipo_acessorio_id`, `cautela_acessorio_id`) VALUES
(1, 'Coldre com leve defeito no lado esquerdo mas totalmente funcional.', 0, 1, 1, NULL),
(2, 'Colete para 38', 0, 1, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `armamento`
--

CREATE TABLE IF NOT EXISTS `armamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_serie` varchar(45) NOT NULL,
  `status` int(11) NOT NULL,
  `reserva_id` int(11) NOT NULL,
  `tipo_armamento_id` int(11) NOT NULL,
  `cautela_armamento_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_armamento_reserva1_idx` (`reserva_id`),
  KEY `fk_armamento_tipo_armamento1_idx` (`tipo_armamento_id`),
  KEY `cautela_armamento_id` (`cautela_armamento_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `armamento`
--

INSERT INTO `armamento` (`id`, `num_serie`, `status`, `reserva_id`, `tipo_armamento_id`, `cautela_armamento_id`) VALUES
(1, '23244R', 0, 1, 1, NULL),
(2, 'FMFSO123', 0, 2, 2, NULL),
(3, '4RD3948', 0, 1, 1, NULL),
(4, 'DE43434', 1, 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('caboArmeiro', 2, 1475975900);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `group_code` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  KEY `fk_auth_item_group_code` (`group_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`, `group_code`) VALUES
('/*', 3, NULL, NULL, NULL, 1475267691, 1475267691, NULL),
('//*', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('//controller', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('//crud', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('//extension', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('//form', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('//index', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('//model', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('//module', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/acessorio/*', 3, NULL, NULL, NULL, 1475862186, 1475862186, NULL),
('/acessorio/create', 3, NULL, NULL, NULL, 1475862186, 1475862186, NULL),
('/acessorio/delete', 3, NULL, NULL, NULL, 1475862186, 1475862186, NULL),
('/acessorio/index', 3, NULL, NULL, NULL, 1475862186, 1475862186, NULL),
('/acessorio/update', 3, NULL, NULL, NULL, 1475862186, 1475862186, NULL),
('/acessorio/view', 3, NULL, NULL, NULL, 1475862186, 1475862186, NULL),
('/armamento/*', 3, NULL, NULL, NULL, 1475862186, 1475862186, NULL),
('/armamento/create', 3, NULL, NULL, NULL, 1475862186, 1475862186, NULL),
('/armamento/delete', 3, NULL, NULL, NULL, 1475862186, 1475862186, NULL),
('/armamento/index', 3, NULL, NULL, NULL, 1475862186, 1475862186, NULL),
('/armamento/update', 3, NULL, NULL, NULL, 1475862186, 1475862186, NULL),
('/armamento/view', 3, NULL, NULL, NULL, 1475862186, 1475862186, NULL),
('/asset/*', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/asset/compress', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/asset/template', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/cache/*', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/cache/flush', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/cache/flush-all', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/cache/flush-schema', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/cache/index', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/cautela-acessorio/*', 3, NULL, NULL, NULL, 1476669113, 1476669113, NULL),
('/cautela-acessorio/create', 3, NULL, NULL, NULL, 1476669113, 1476669113, NULL),
('/cautela-acessorio/delete', 3, NULL, NULL, NULL, 1476669113, 1476669113, NULL),
('/cautela-acessorio/index', 3, NULL, NULL, NULL, 1476669113, 1476669113, NULL),
('/cautela-acessorio/update', 3, NULL, NULL, NULL, 1476669113, 1476669113, NULL),
('/cautela-acessorio/view', 3, NULL, NULL, NULL, 1476669113, 1476669113, NULL),
('/cautela-armamento/*', 3, NULL, NULL, NULL, 1475862185, 1475862185, NULL),
('/cautela-armamento/create', 3, NULL, NULL, NULL, 1475862185, 1475862185, NULL),
('/cautela-armamento/delete', 3, NULL, NULL, NULL, 1475862185, 1475862185, NULL),
('/cautela-armamento/index', 3, NULL, NULL, NULL, 1475862185, 1475862185, NULL),
('/cautela-armamento/update', 3, NULL, NULL, NULL, 1475862185, 1475862185, NULL),
('/cautela-armamento/view', 3, NULL, NULL, NULL, 1475862185, 1475862185, NULL),
('/cautela-municao/*', 3, NULL, NULL, NULL, 1475862185, 1475862185, NULL),
('/cautela-municao/create', 3, NULL, NULL, NULL, 1475862185, 1475862185, NULL),
('/cautela-municao/delete', 3, NULL, NULL, NULL, 1475862185, 1475862185, NULL),
('/cautela-municao/index', 3, NULL, NULL, NULL, 1475862185, 1475862185, NULL),
('/cautela-municao/update', 3, NULL, NULL, NULL, 1475862185, 1475862185, NULL),
('/cautela-municao/view', 3, NULL, NULL, NULL, 1475862185, 1475862185, NULL),
('/debug/*', 3, NULL, NULL, NULL, 1475862186, 1475862186, NULL),
('/debug/default/*', 3, NULL, NULL, NULL, 1475862186, 1475862186, NULL),
('/debug/default/db-explain', 3, NULL, NULL, NULL, 1475862187, 1475862187, NULL),
('/debug/default/download-mail', 3, NULL, NULL, NULL, 1475862186, 1475862186, NULL),
('/debug/default/index', 3, NULL, NULL, NULL, 1475862187, 1475862187, NULL),
('/debug/default/toolbar', 3, NULL, NULL, NULL, 1475862186, 1475862186, NULL),
('/debug/default/view', 3, NULL, NULL, NULL, 1475862186, 1475862186, NULL),
('/fixture/*', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/fixture/load', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/fixture/unload', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/gii/*', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/gii/default/*', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/gii/default/action', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/gii/default/diff', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/gii/default/index', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/gii/default/preview', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/gii/default/view', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/hello/*', 3, NULL, NULL, NULL, 1475267691, 1475267691, NULL),
('/hello/index', 3, NULL, NULL, NULL, 1475267691, 1475267691, NULL),
('/help/*', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/help/index', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/main/*', 3, NULL, NULL, NULL, 1475862185, 1475862185, NULL),
('/message/*', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/message/config', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/message/config-template', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/message/extract', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/migrate/*', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/migrate/create', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/migrate/down', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/migrate/history', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/migrate/mark', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/migrate/new', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/migrate/redo', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/migrate/to', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/migrate/up', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/militar/*', 3, NULL, NULL, NULL, 1475862184, 1475862184, NULL),
('/militar/create', 3, NULL, NULL, NULL, 1475862185, 1475862185, NULL),
('/militar/delete', 3, NULL, NULL, NULL, 1475862184, 1475862184, NULL),
('/militar/index', 3, NULL, NULL, NULL, 1475862185, 1475862185, NULL),
('/militar/update', 3, NULL, NULL, NULL, 1475862185, 1475862185, NULL),
('/militar/view', 3, NULL, NULL, NULL, 1475862185, 1475862185, NULL),
('/municao/*', 3, NULL, NULL, NULL, 1475862184, 1475862184, NULL),
('/municao/create', 3, NULL, NULL, NULL, 1475862184, 1475862184, NULL),
('/municao/delete', 3, NULL, NULL, NULL, 1475862184, 1475862184, NULL),
('/municao/index', 3, NULL, NULL, NULL, 1475862184, 1475862184, NULL),
('/municao/update', 3, NULL, NULL, NULL, 1475862184, 1475862184, NULL),
('/municao/view', 3, NULL, NULL, NULL, 1475862184, 1475862184, NULL),
('/reserva/*', 3, NULL, NULL, NULL, 1475862184, 1475862184, NULL),
('/reserva/create', 3, NULL, NULL, NULL, 1475862184, 1475862184, NULL),
('/reserva/delete', 3, NULL, NULL, NULL, 1475862184, 1475862184, NULL),
('/reserva/index', 3, NULL, NULL, NULL, 1475862184, 1475862184, NULL),
('/reserva/update', 3, NULL, NULL, NULL, 1475862184, 1475862184, NULL),
('/reserva/view', 3, NULL, NULL, NULL, 1475862184, 1475862184, NULL),
('/serve/*', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/serve/index', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/site/*', 3, NULL, NULL, NULL, 1475862183, 1475862183, NULL),
('/site/about', 3, NULL, NULL, NULL, 1475862183, 1475862183, NULL),
('/site/captcha', 3, NULL, NULL, NULL, 1475862184, 1475862184, NULL),
('/site/contact', 3, NULL, NULL, NULL, 1475862183, 1475862183, NULL),
('/site/error', 3, NULL, NULL, NULL, 1475862184, 1475862184, NULL),
('/site/index', 3, NULL, NULL, NULL, 1475862183, 1475862183, NULL),
('/site/login', 3, NULL, NULL, NULL, 1475862183, 1475862183, NULL),
('/site/logout', 3, NULL, NULL, NULL, 1475862183, 1475862183, NULL),
('/tipo-acessorio/*', 3, NULL, NULL, NULL, 1475862183, 1475862183, NULL),
('/tipo-acessorio/create', 3, NULL, NULL, NULL, 1475862183, 1475862183, NULL),
('/tipo-acessorio/delete', 3, NULL, NULL, NULL, 1475862183, 1475862183, NULL),
('/tipo-acessorio/index', 3, NULL, NULL, NULL, 1475862183, 1475862183, NULL),
('/tipo-acessorio/update', 3, NULL, NULL, NULL, 1475862183, 1475862183, NULL),
('/tipo-acessorio/view', 3, NULL, NULL, NULL, 1475862183, 1475862183, NULL),
('/tipo-armamento/*', 3, NULL, NULL, NULL, 1475862183, 1475862183, NULL),
('/tipo-armamento/create', 3, NULL, NULL, NULL, 1475862183, 1475862183, NULL),
('/tipo-armamento/delete', 3, NULL, NULL, NULL, 1475862183, 1475862183, NULL),
('/tipo-armamento/index', 3, NULL, NULL, NULL, 1475862183, 1475862183, NULL),
('/tipo-armamento/update', 3, NULL, NULL, NULL, 1475862183, 1475862183, NULL),
('/tipo-armamento/view', 3, NULL, NULL, NULL, 1475862183, 1475862183, NULL),
('/tipo-municao/*', 3, NULL, NULL, NULL, 1475862182, 1475862182, NULL),
('/tipo-municao/create', 3, NULL, NULL, NULL, 1475862182, 1475862182, NULL),
('/tipo-municao/delete', 3, NULL, NULL, NULL, 1475862182, 1475862182, NULL),
('/tipo-municao/index', 3, NULL, NULL, NULL, 1475862182, 1475862182, NULL),
('/tipo-municao/update', 3, NULL, NULL, NULL, 1475862182, 1475862182, NULL),
('/tipo-municao/view', 3, NULL, NULL, NULL, 1475862182, 1475862182, NULL),
('/user-management/*', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/user-management/auth-item-group/*', 3, NULL, NULL, NULL, 1475862189, 1475862189, NULL),
('/user-management/auth-item-group/bulk-activate', 3, NULL, NULL, NULL, 1475862190, 1475862190, NULL),
('/user-management/auth-item-group/bulk-deactivate', 3, NULL, NULL, NULL, 1475862190, 1475862190, NULL),
('/user-management/auth-item-group/bulk-delete', 3, NULL, NULL, NULL, 1475862190, 1475862190, NULL),
('/user-management/auth-item-group/create', 3, NULL, NULL, NULL, 1475862190, 1475862190, NULL),
('/user-management/auth-item-group/delete', 3, NULL, NULL, NULL, 1475862190, 1475862190, NULL),
('/user-management/auth-item-group/grid-page-size', 3, NULL, NULL, NULL, 1475862189, 1475862189, NULL),
('/user-management/auth-item-group/grid-sort', 3, NULL, NULL, NULL, 1475862189, 1475862189, NULL),
('/user-management/auth-item-group/index', 3, NULL, NULL, NULL, 1475862190, 1475862190, NULL),
('/user-management/auth-item-group/toggle-attribute', 3, NULL, NULL, NULL, 1475862190, 1475862190, NULL),
('/user-management/auth-item-group/update', 3, NULL, NULL, NULL, 1475862190, 1475862190, NULL),
('/user-management/auth-item-group/view', 3, NULL, NULL, NULL, 1475862190, 1475862190, NULL),
('/user-management/auth/*', 3, NULL, NULL, NULL, 1475862190, 1475862190, NULL),
('/user-management/auth/captcha', 3, NULL, NULL, NULL, 1475862191, 1475862191, NULL),
('/user-management/auth/change-own-password', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/user-management/auth/confirm-email', 3, NULL, NULL, NULL, 1475862190, 1475862190, NULL),
('/user-management/auth/confirm-email-receive', 3, NULL, NULL, NULL, 1475862190, 1475862190, NULL),
('/user-management/auth/confirm-registration-email', 3, NULL, NULL, NULL, 1475862190, 1475862190, NULL),
('/user-management/auth/login', 3, NULL, NULL, NULL, 1475862191, 1475862191, NULL),
('/user-management/auth/logout', 3, NULL, NULL, NULL, 1475862190, 1475862190, NULL),
('/user-management/auth/password-recovery', 3, NULL, NULL, NULL, 1475862190, 1475862190, NULL),
('/user-management/auth/password-recovery-receive', 3, NULL, NULL, NULL, 1475862190, 1475862190, NULL),
('/user-management/auth/registration', 3, NULL, NULL, NULL, 1475862190, 1475862190, NULL),
('/user-management/permission/*', 3, NULL, NULL, NULL, 1475862188, 1475862188, NULL),
('/user-management/permission/bulk-activate', 3, NULL, NULL, NULL, 1475862189, 1475862189, NULL),
('/user-management/permission/bulk-deactivate', 3, NULL, NULL, NULL, 1475862189, 1475862189, NULL),
('/user-management/permission/bulk-delete', 3, NULL, NULL, NULL, 1475862189, 1475862189, NULL),
('/user-management/permission/create', 3, NULL, NULL, NULL, 1475862189, 1475862189, NULL),
('/user-management/permission/delete', 3, NULL, NULL, NULL, 1475862189, 1475862189, NULL),
('/user-management/permission/grid-page-size', 3, NULL, NULL, NULL, 1475862189, 1475862189, NULL),
('/user-management/permission/grid-sort', 3, NULL, NULL, NULL, 1475862189, 1475862189, NULL),
('/user-management/permission/index', 3, NULL, NULL, NULL, 1475862189, 1475862189, NULL),
('/user-management/permission/refresh-routes', 3, NULL, NULL, NULL, 1475862189, 1475862189, NULL),
('/user-management/permission/set-child-permissions', 3, NULL, NULL, NULL, 1475862189, 1475862189, NULL),
('/user-management/permission/set-child-routes', 3, NULL, NULL, NULL, 1475862189, 1475862189, NULL),
('/user-management/permission/toggle-attribute', 3, NULL, NULL, NULL, 1475862189, 1475862189, NULL),
('/user-management/permission/update', 3, NULL, NULL, NULL, 1475862189, 1475862189, NULL),
('/user-management/permission/view', 3, NULL, NULL, NULL, 1475862189, 1475862189, NULL),
('/user-management/role/*', 3, NULL, NULL, NULL, 1475862188, 1475862188, NULL),
('/user-management/role/bulk-activate', 3, NULL, NULL, NULL, 1475862188, 1475862188, NULL),
('/user-management/role/bulk-deactivate', 3, NULL, NULL, NULL, 1475862188, 1475862188, NULL),
('/user-management/role/bulk-delete', 3, NULL, NULL, NULL, 1475862188, 1475862188, NULL),
('/user-management/role/create', 3, NULL, NULL, NULL, 1475862188, 1475862188, NULL),
('/user-management/role/delete', 3, NULL, NULL, NULL, 1475862188, 1475862188, NULL),
('/user-management/role/grid-page-size', 3, NULL, NULL, NULL, 1475862188, 1475862188, NULL),
('/user-management/role/grid-sort', 3, NULL, NULL, NULL, 1475862188, 1475862188, NULL),
('/user-management/role/index', 3, NULL, NULL, NULL, 1475862188, 1475862188, NULL),
('/user-management/role/set-child-permissions', 3, NULL, NULL, NULL, 1475862188, 1475862188, NULL),
('/user-management/role/set-child-roles', 3, NULL, NULL, NULL, 1475862188, 1475862188, NULL),
('/user-management/role/toggle-attribute', 3, NULL, NULL, NULL, 1475862188, 1475862188, NULL),
('/user-management/role/update', 3, NULL, NULL, NULL, 1475862188, 1475862188, NULL),
('/user-management/role/view', 3, NULL, NULL, NULL, 1475862188, 1475862188, NULL),
('/user-management/user-permission/*', 3, NULL, NULL, NULL, 1475862187, 1475862187, NULL),
('/user-management/user-permission/set', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/user-management/user-permission/set-roles', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/user-management/user-visit-log/*', 3, NULL, NULL, NULL, 1475862187, 1475862187, NULL),
('/user-management/user-visit-log/bulk-activate', 3, NULL, NULL, NULL, 1475862187, 1475862187, NULL),
('/user-management/user-visit-log/bulk-deactivate', 3, NULL, NULL, NULL, 1475862187, 1475862187, NULL),
('/user-management/user-visit-log/bulk-delete', 3, NULL, NULL, NULL, 1475862187, 1475862187, NULL),
('/user-management/user-visit-log/create', 3, NULL, NULL, NULL, 1475862187, 1475862187, NULL),
('/user-management/user-visit-log/delete', 3, NULL, NULL, NULL, 1475862187, 1475862187, NULL),
('/user-management/user-visit-log/grid-page-size', 3, NULL, NULL, NULL, 1475862187, 1475862187, NULL),
('/user-management/user-visit-log/grid-sort', 3, NULL, NULL, NULL, 1475862187, 1475862187, NULL),
('/user-management/user-visit-log/index', 3, NULL, NULL, NULL, 1475862187, 1475862187, NULL),
('/user-management/user-visit-log/toggle-attribute', 3, NULL, NULL, NULL, 1475862187, 1475862187, NULL),
('/user-management/user-visit-log/update', 3, NULL, NULL, NULL, 1475862187, 1475862187, NULL),
('/user-management/user-visit-log/view', 3, NULL, NULL, NULL, 1475862187, 1475862187, NULL),
('/user-management/user/*', 3, NULL, NULL, NULL, 1475862187, 1475862187, NULL),
('/user-management/user/bulk-activate', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/user-management/user/bulk-deactivate', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/user-management/user/bulk-delete', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/user-management/user/change-password', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/user-management/user/create', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/user-management/user/delete', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/user-management/user/grid-page-size', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/user-management/user/grid-sort', 3, NULL, NULL, NULL, 1475862187, 1475862187, NULL),
('/user-management/user/index', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/user-management/user/toggle-attribute', 3, NULL, NULL, NULL, 1475862188, 1475862188, NULL),
('/user-management/user/update', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/user-management/user/view', 3, NULL, NULL, NULL, 1475267692, 1475267692, NULL),
('/usuario-has-reserva/*', 3, NULL, NULL, NULL, 1475862182, 1475862182, NULL),
('/usuario-has-reserva/create', 3, NULL, NULL, NULL, 1475862182, 1475862182, NULL),
('/usuario-has-reserva/delete', 3, NULL, NULL, NULL, 1475862182, 1475862182, NULL),
('/usuario-has-reserva/index', 3, NULL, NULL, NULL, 1475862182, 1475862182, NULL),
('/usuario-has-reserva/update', 3, NULL, NULL, NULL, 1475862182, 1475862182, NULL),
('/usuario-has-reserva/view', 3, NULL, NULL, NULL, 1475862182, 1475862182, NULL),
('a', 2, 'a', NULL, NULL, 1476663217, 1476663217, 'userCommonPermissions'),
('Admin', 1, 'Admin', NULL, NULL, 1475267692, 1475267692, NULL),
('assignRolesToUsers', 2, 'Assign roles to users', NULL, NULL, 1475267692, 1475267692, 'userManagement'),
('bindUserToIp', 2, 'Bind user to IP', NULL, NULL, 1475267692, 1475267692, 'userManagement'),
('caboArmeiro', 1, 'Cabo Armeiro', NULL, NULL, 1475861969, 1475861969, NULL),
('changeOwnPassword', 2, 'Change own password', NULL, NULL, 1475267692, 1475267692, 'userCommonPermissions'),
('changeUserPassword', 2, 'Change user password', NULL, NULL, 1475267692, 1475267692, 'userManagement'),
('commonPermission', 2, 'Common permission', NULL, NULL, 1475267688, 1475267688, NULL),
('createUsers', 2, 'Create users', NULL, NULL, 1475267692, 1475267692, 'userManagement'),
('deleteUsers', 2, 'Delete users', NULL, NULL, 1475267692, 1475267692, 'userManagement'),
('editUserEmail', 2, 'Edit user email', NULL, NULL, 1475267692, 1475267692, 'userManagement'),
('editUsers', 2, 'Edit users', NULL, NULL, 1475267692, 1475267692, 'userManagement'),
('permissoes_cabo_armeiro', 2, 'Permissões Cabo Armeiro', NULL, NULL, 1475862159, 1475862159, 'cabosArmeiros'),
('viewRegistrationIp', 2, 'View registration IP', NULL, NULL, 1475267692, 1475267692, 'userManagement'),
('viewUserEmail', 2, 'View user email', NULL, NULL, 1475267692, 1475267692, 'userManagement'),
('viewUserRoles', 2, 'View user roles', NULL, NULL, 1475267692, 1475267692, 'userManagement'),
('viewUsers', 2, 'View users', NULL, NULL, 1475267692, 1475267692, 'userManagement'),
('viewVisitLog', 2, 'View visit log', NULL, NULL, 1475267692, 1475267692, 'userManagement');

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('permissoes_cabo_armeiro', '/acessorio/*'),
('permissoes_cabo_armeiro', '/armamento/*'),
('permissoes_cabo_armeiro', '/cautela-acessorio/*'),
('permissoes_cabo_armeiro', '/cautela-armamento/*'),
('permissoes_cabo_armeiro', '/cautela-municao/*'),
('permissoes_cabo_armeiro', '/militar/*'),
('permissoes_cabo_armeiro', '/municao/*'),
('permissoes_cabo_armeiro', '/reserva/*'),
('permissoes_cabo_armeiro', '/site/*'),
('permissoes_cabo_armeiro', '/tipo-acessorio/*'),
('permissoes_cabo_armeiro', '/tipo-armamento/*'),
('permissoes_cabo_armeiro', '/tipo-municao/*'),
('changeOwnPassword', '/user-management/auth/change-own-password'),
('assignRolesToUsers', '/user-management/user-permission/set'),
('assignRolesToUsers', '/user-management/user-permission/set-roles'),
('editUsers', '/user-management/user/bulk-activate'),
('editUsers', '/user-management/user/bulk-deactivate'),
('deleteUsers', '/user-management/user/bulk-delete'),
('changeUserPassword', '/user-management/user/change-password'),
('createUsers', '/user-management/user/create'),
('deleteUsers', '/user-management/user/delete'),
('viewUsers', '/user-management/user/grid-page-size'),
('viewUsers', '/user-management/user/index'),
('editUsers', '/user-management/user/update'),
('viewUsers', '/user-management/user/view'),
('Admin', 'a'),
('Admin', 'assignRolesToUsers'),
('Admin', 'changeOwnPassword'),
('Admin', 'changeUserPassword'),
('Admin', 'createUsers'),
('Admin', 'deleteUsers'),
('Admin', 'editUsers'),
('caboArmeiro', 'permissoes_cabo_armeiro'),
('editUserEmail', 'viewUserEmail'),
('assignRolesToUsers', 'viewUserRoles'),
('Admin', 'viewUsers'),
('assignRolesToUsers', 'viewUsers'),
('changeUserPassword', 'viewUsers'),
('createUsers', 'viewUsers'),
('deleteUsers', 'viewUsers'),
('editUsers', 'viewUsers');

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_group`
--

CREATE TABLE IF NOT EXISTS `auth_item_group` (
  `code` varchar(64) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item_group`
--

INSERT INTO `auth_item_group` (`code`, `name`, `created_at`, `updated_at`) VALUES
('cabosArmeiros', 'Cabos Armeiros', 1475862118, 1475862118),
('userCommonPermissions', 'User common permission', 1475267692, 1475267692),
('userManagement', 'User management', 1475267692, 1475267692);

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cautela_acessorio`
--

CREATE TABLE IF NOT EXISTS `cautela_acessorio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantidade` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date NOT NULL,
  `militar_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_cautela_acessorio_militar1_idx` (`militar_id`),
  KEY `fk_cautela_acessorio_usuario1_idx` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Table structure for table `cautela_armamento`
--

CREATE TABLE IF NOT EXISTS `cautela_armamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantidade` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date NOT NULL,
  `militar_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_cautela_armamento_militar1_idx` (`militar_id`),
  KEY `fk_cautela_armamento_usuario1_idx` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cautela_armamento`
--

INSERT INTO `cautela_armamento` (`id`, `quantidade`, `data_inicio`, `data_fim`, `militar_id`, `usuario_id`) VALUES
(3, 1, '2016-10-05', '2016-10-30', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cautela_municao`
--

CREATE TABLE IF NOT EXISTS `cautela_municao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantidade` int(11) NOT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date NOT NULL,
  `militar_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_cautela_municao_militar1_idx` (`militar_id`),
  KEY `fk_cautela_municao_usuario1_idx` (`usuario_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1475267672),
('m140608_173539_create_user_table', 1475267679),
('m140611_133903_init_rbac', 1475267680),
('m140808_073114_create_auth_item_group_table', 1475267685),
('m140809_072112_insert_superadmin_to_user', 1475267687),
('m140809_073114_insert_common_permisison_to_auth_item', 1475267688),
('m141023_141535_create_user_visit_log', 1475267688),
('m141116_115804_add_bind_to_ip_and_registration_ip_to_user', 1475267689),
('m141121_194858_split_browser_and_os_column', 1475267690),
('m141201_220516_add_email_and_email_confirmed_to_user', 1475267691),
('m141207_001649_create_basic_user_permissions', 1475267692);

-- --------------------------------------------------------

--
-- Table structure for table `militar`
--

CREATE TABLE IF NOT EXISTS `militar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `posto` int(11) NOT NULL COMMENT '1 => ''Soldado'', 2 => ''Tafeiro de 1ª Classe'', 3 => ''Tafeiro de 2ª Classe'', 4 => ''Tafeiro Mor'', 5 => ''Cabo'',             6 => ''3º Sargento'', 7 => ''2º Sargento'', 8 => ''1º Sargento'', 9 => ''Subtenente'', 10 => ''Aspirante a Oficial'',             11 => ''2º Tenente'', 12 => ''1º Tenente'', 13 => ''Capitão'', 14 => ''Major'', 15 => ''2º Tenente-Coronel'', 16 => ''Coronel'',             17 => ''General de Brigada'', 18 => ''General de Divisão'', 19 => ''General de Exército'', 20 => ''Marechal''',
  `nome_guerra` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `militar`
--

INSERT INTO `militar` (`id`, `posto`, `nome_guerra`) VALUES
(1, 1, 'Silveira'),
(2, 17, 'Macedo'),
(3, 8, 'Santana');

-- --------------------------------------------------------

--
-- Table structure for table `municao`
--

CREATE TABLE IF NOT EXISTS `municao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `observacao` text,
  `status` int(11) NOT NULL,
  `reserva_id` int(11) NOT NULL,
  `tipo_municao_id` int(11) NOT NULL,
  `cautela_municao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_municao_reserva1_idx` (`reserva_id`),
  KEY `fk_municao_tipo_municao1_idx` (`tipo_municao_id`),
  KEY `cautela_municao_id` (`cautela_municao_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `municao`
--

INSERT INTO `municao` (`id`, `observacao`, `status`, `reserva_id`, `tipo_municao_id`, `cautela_municao_id`) VALUES
(3, 'Municao boa', 0, 1, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `reserva`
--

INSERT INTO `reserva` (`id`, `descricao`) VALUES
(1, 'Reserva 1'),
(2, 'Reserva 2');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_acessorio`
--

CREATE TABLE IF NOT EXISTS `tipo_acessorio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tipo_acessorio`
--

INSERT INTO `tipo_acessorio` (`id`, `descricao`) VALUES
(1, 'Coldre'),
(2, 'Colete'),
(3, 'Colete');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_armamento`
--

CREATE TABLE IF NOT EXISTS `tipo_armamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(70) DEFAULT NULL,
  `fabricante` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tipo_armamento`
--

INSERT INTO `tipo_armamento` (`id`, `modelo`, `fabricante`) VALUES
(1, 'GLOCK .45', 'TAURUS'),
(2, 'AK-45', 'MAGNUM');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_municao`
--

CREATE TABLE IF NOT EXISTS `tipo_municao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `calibre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tipo_municao`
--

INSERT INTO `tipo_municao` (`id`, `calibre`) VALUES
(1, '.50'),
(2, '.40');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `confirmation_token` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `superadmin` smallint(6) DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `registration_ip` varchar(15) DEFAULT NULL,
  `bind_to_ip` varchar(255) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `email_confirmed` smallint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `confirmation_token`, `status`, `superadmin`, `created_at`, `updated_at`, `registration_ip`, `bind_to_ip`, `email`, `email_confirmed`) VALUES
(1, 'superadmin', '4KY8_IwbxpXemA80b2TE2hHDBDYy8LSh', '$2y$13$i6ExBCVtMY3E9yQLfuTYPulNpwQ6Y0Fyz3lZcp46ZUCTL.sDBHqvW', NULL, 1, 1, 1475267687, 1475267687, NULL, NULL, NULL, 0),
(2, 'caboarmeiro', 'AUOQICAz4AunVf9U5ytztmR96Dqny8eQ', '$2y$13$sBhE.oG2AKxnIepes4kqRe1f8w2njFWXa3s1NhekThq5oAov89SkW', NULL, 1, 0, 1475862313, 1475862313, '127.0.0.1', '', 'caboarmeiro@ggg.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_visit_log`
--

CREATE TABLE IF NOT EXISTS `user_visit_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(255) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `language` char(2) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `visit_time` int(11) NOT NULL,
  `browser` varchar(30) DEFAULT NULL,
  `os` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `militar_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `login_UNIQUE` (`login`),
  UNIQUE KEY `senha_UNIQUE` (`senha`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `fk_usuario_militar1_idx` (`militar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `usuario_has_reserva`
--

CREATE TABLE IF NOT EXISTS `usuario_has_reserva` (
  `usuario_id` int(11) NOT NULL,
  `reserva_id` int(11) NOT NULL,
  PRIMARY KEY (`usuario_id`,`reserva_id`),
  KEY `fk_usuario_has_reserva_reserva1_idx` (`reserva_id`),
  KEY `fk_usuario_has_reserva_usuario_idx` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario_has_reserva`
--

INSERT INTO `usuario_has_reserva` (`usuario_id`, `reserva_id`) VALUES
(2, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acessorio`
--
ALTER TABLE `acessorio`
  ADD CONSTRAINT `acessorio_ibfk_1` FOREIGN KEY (`cautela_acessorio_id`) REFERENCES `cautela_acessorio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_acessorio_reserva1` FOREIGN KEY (`reserva_id`) REFERENCES `reserva` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_acessorio_tipo_acessorio1` FOREIGN KEY (`tipo_acessorio_id`) REFERENCES `tipo_acessorio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `armamento`
--
ALTER TABLE `armamento`
  ADD CONSTRAINT `armamento_ibfk_1` FOREIGN KEY (`cautela_armamento_id`) REFERENCES `cautela_armamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_armamento_reserva1` FOREIGN KEY (`reserva_id`) REFERENCES `reserva` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_armamento_tipo_armamento1` FOREIGN KEY (`tipo_armamento_id`) REFERENCES `tipo_armamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_assignment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_auth_item_group_code` FOREIGN KEY (`group_code`) REFERENCES `auth_item_group` (`code`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cautela_acessorio`
--
ALTER TABLE `cautela_acessorio`
  ADD CONSTRAINT `fk_cautela_acessorio_militar1` FOREIGN KEY (`militar_id`) REFERENCES `militar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cautela_acessorio_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cautela_armamento`
--
ALTER TABLE `cautela_armamento`
  ADD CONSTRAINT `fk_cautela_armamento_militar1` FOREIGN KEY (`militar_id`) REFERENCES `militar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cautela_armamento_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cautela_municao`
--
ALTER TABLE `cautela_municao`
  ADD CONSTRAINT `fk_cautela_municao_militar1` FOREIGN KEY (`militar_id`) REFERENCES `militar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cautela_municao_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `municao`
--
ALTER TABLE `municao`
  ADD CONSTRAINT `fk_municao_reserva1` FOREIGN KEY (`reserva_id`) REFERENCES `reserva` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_municao_tipo_municao1` FOREIGN KEY (`tipo_municao_id`) REFERENCES `tipo_municao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `municao_ibfk_1` FOREIGN KEY (`cautela_municao_id`) REFERENCES `cautela_municao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_visit_log`
--
ALTER TABLE `user_visit_log`
  ADD CONSTRAINT `user_visit_log_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_militar1` FOREIGN KEY (`militar_id`) REFERENCES `militar` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `usuario_has_reserva`
--
ALTER TABLE `usuario_has_reserva`
  ADD CONSTRAINT `fk_usuario_has_reserva_reserva1` FOREIGN KEY (`reserva_id`) REFERENCES `reserva` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_has_reserva_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
