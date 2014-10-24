-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Окт 06 2014 г., 12:32
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `site1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `mod_feedback`
--

CREATE TABLE IF NOT EXISTS `mod_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fio` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `descr` text NOT NULL,
  `dt` datetime NOT NULL,
  `ip` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `mod_feedback`
--

INSERT INTO `mod_feedback` (`id`, `fio`, `email`, `phone`, `descr`, `dt`, `ip`) VALUES
(1, 'btrebrere', 'rebgrbgrebg@rewvbgrewgv', '', '', '0000-00-00 00:00:00', ''),
(2, 'ewgfewgfew', 'ewgfewg@egfwege', '', '', '0000-00-00 00:00:00', ''),
(3, 'куипкуп', 'vafsgdsfg@rfgbvrgbr', '+380(23) 333-33-33', 'vbgrebgrebrb', '2014-10-06 12:16:07', ''),
(4, 'ewgvweg', 'transcend46@rambler.ru', '', '', '2014-10-06 12:26:22', ''),
(5, 'ewgvweg', 'kindras121@rambler.ru', '', '', '2014-10-06 12:28:07', '127.0.0.1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
