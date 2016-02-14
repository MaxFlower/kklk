-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 07 2015 г., 13:49
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.4.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `customerdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `soname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `customers`
--

INSERT INTO `customers` (`id`, `name`, `soname`, `email`, `age`, `date`) VALUES
(1, 'Max', 'Lee', 'lee@gmail.com', 22, '1993-11-11'),
(2, 'Luck', 'Thompson', 'LukeThomson@mail.ru', 34, '1981-11-21'),
(3, 'Mareck', 'Lechowski', 'Lechowski@gmail.com', 40, '1975-06-18'),
(4, 'Peter', 'van Durk', 'admin@yandex.ru', 23, '1992-03-23'),
(5, 'Pock', 'Dzhi Sun', 'admin@yandex.ru', 44, '1976-07-03'),
(6, 'Klim', 'Yuhnovech', 'admin@yandex.ru', 10, '1997-08-11'),
(7, 'Djohn', 'Cooper', 'admin@yandex.ru', 53, '1946-06-06'),
(8, 'Mathias', 'Verk', 'admin@yandex.ru', 99, '1916-03-16'),
(9, 'sder', 'tyu', 'sdfd@rty.yu', 45, '1983-03-16'),
(10, 'tyuyyiu', 'dtituru', 'tuy@try.oi', 65, '1234-04-07'),
(11, 'fghytdjtyj', 'tjsyrjyiutk', 'sdfd3534543@rty.yu', 23, '1983-03-21'),
(13, 'weej', 'qzder', 'sdhfghgjfdj@rty.yu', 45, '1983-03-21'),
(14, 'iop', 'yuio', 'tuywr3@try.oi', 44, '1983-03-21');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
