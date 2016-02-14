-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 30 2016 г., 17:49
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.4.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `kklkdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `advs`
--

CREATE TABLE IF NOT EXISTS `advs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_text` varchar(50) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `ad_photo` varchar(50) NOT NULL,
  `creater_id` int(11) NOT NULL,
  `rank` int(11) NOT NULL,
  `tags` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `creater_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `art_picture` varchar(50) NOT NULL,
  `rank` int(11) NOT NULL,
  `tags` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) NOT NULL DEFAULT 'petsowner',
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', 1, NULL),
('petsowner', 2, NULL),
('petsowner', 5, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 5, 'Admin может создавать/удалять/редактировать User, Advs, Articles, Events.', NULL, NULL, NULL, NULL),
('create-advs', 2, 'Разрешено создавать объявления.', NULL, NULL, NULL, NULL),
('create-articles', 3, 'Разрешено создавать статьи.', NULL, NULL, NULL, NULL),
('create-events', 4, 'Разрешено создавать события.', NULL, NULL, NULL, NULL),
('create-user', 1, 'Разрешено создавать юзера.', NULL, NULL, NULL, NULL),
('delete-advs', 2, 'Разрешено удалять объявления.', NULL, NULL, NULL, NULL),
('delete-articles', 3, 'Разрешено удалять статьи.', NULL, NULL, NULL, NULL),
('delete-events', 4, 'Разрешено удалять события.', NULL, NULL, NULL, NULL),
('delete-user', 1, 'Разрешено удалять юзера.', NULL, NULL, NULL, NULL),
('petsowner', 6, 'Petsowner может создавать advs, articles, events.', NULL, NULL, NULL, NULL),
('update-advs', 2, 'Разрешено редактировать объявления.', NULL, NULL, NULL, NULL),
('update-articles', 3, 'Разрешено редактировать статьи.', NULL, NULL, NULL, NULL),
('update-events', 4, 'Разрешено редактировать события.', NULL, NULL, NULL, NULL),
('update-user', 1, 'Разрешено редактировать юзера.', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', 'create-advs'),
('petsowner', 'create-advs'),
('admin', 'create-articles'),
('petsowner', 'create-articles'),
('admin', 'create-events'),
('petsowner', 'create-events'),
('admin', 'create-user'),
('admin', 'delete-advs'),
('admin', 'delete-articles'),
('admin', 'delete-events'),
('admin', 'delete-user'),
('admin', 'update-advs'),
('admin', 'update-articles'),
('admin', 'update-events'),
('admin', 'update-user');

-- --------------------------------------------------------

--
-- Структура таблицы `auth_rule`
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
-- Структура таблицы `cats`
--

CREATE TABLE IF NOT EXISTS `cats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `text` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `rank` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `date` int(11) NOT NULL,
  `description` text NOT NULL,
  `ev_picture` varchar(50) NOT NULL,
  `creater_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `logList`
--

CREATE TABLE IF NOT EXISTS `logList` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `action_description` text NOT NULL,
  `action_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `logList`
--

INSERT INTO `logList` (`id`, `user`, `action_description`, `action_date`) VALUES
(7, 'Tester', 'User log in', 1447259416),
(8, 'Tester', 'User log in', 1448269041),
(9, 'Tester', 'User log in', 1451404568),
(10, 'Tester', 'User log in', 1454152390),
(11, 'Tester', 'User log in', 1454156869),
(12, 'Tester', 'User log in', 1454163602);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `role` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Tester', 'KyyYJ6ZmuVaBf3GebxIGVsuT2QP2JAsV', '$2y$13$sd5yOKq/5.rejXdxfWndIeEDThvpht8fmrZkw7EuGXJ1tcB43Lcdm', NULL, 'tester@rambler.ru', 10, 1445347009, 1445347009, 'admin'),
(2, 'testuser', 'vm50-mZE5QdNzOPWWTnSNwzCVdHM8VPB', '$2y$13$mpwOgDrtHTBZHVb9Cbtyo.6SDSJwbgCkGHZiNsC7nysoDfyTYuoHu', NULL, 'dfgfg@rgeth.ru', 10, 1446032526, 1446032526, 'user'),
(5, 'Mamm', 't-tcuwtCLrkymOzuA9NbhRTV2ph4H5wn', '$2y$13$Wo/443b00RM8a1S25edhKuXvZE371Ud7szEcVqkei/Mr8XYHCXRdG', NULL, 'mamm@gmail.com', 10, 1454150294, 1454150294, '');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
