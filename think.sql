-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-02-29 16:37:11
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `think`
--

-- --------------------------------------------------------

--
-- 表的结构 `think_auth_group`
--

CREATE TABLE IF NOT EXISTS `think_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `think_auth_group`
--

INSERT INTO `think_auth_group` (`id`, `title`, `status`, `rules`) VALUES
(1, '管理员', 1, '1,2,3,4,5,6');

-- --------------------------------------------------------

--
-- 表的结构 `think_auth_group_access`
--

CREATE TABLE IF NOT EXISTS `think_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `think_auth_group_access`
--

INSERT INTO `think_auth_group_access` (`uid`, `group_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `think_auth_rule`
--

CREATE TABLE IF NOT EXISTS `think_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `think_auth_rule`
--

INSERT INTO `think_auth_rule` (`id`, `name`, `title`, `status`, `condition`) VALUES
(1, 'Home/Index/index', '后台首页', 1, '');

-- --------------------------------------------------------

--
-- 表的结构 `think_members`
--

CREATE TABLE IF NOT EXISTS `think_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `password` char(32) NOT NULL,
  `nickname` varchar(64) NOT NULL,
  `status` int(1) NOT NULL,
  `remark` varchar(300) NOT NULL,
  `create_time` timestamp NOT NULL,
  `update_time` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `think_members`
--

INSERT INTO `think_members` (`id`, `name`, `password`, `nickname`, `status`, `remark`, `create_time`, `update_time`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '管理员', 1, '', '2016-02-29 14:14:29', '2016-02-29 14:14:29');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
