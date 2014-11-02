-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2014 at 04:28 AM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `toddgoates`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`date_added` datetime NOT NULL,
`title` varchar(50) CHARACTER SET utf8 NOT NULL,
`img_path` varchar(50) CHARACTER SET utf8 NOT NULL,
`file_name` varchar(50) CHARACTER SET utf8 NOT NULL,
`link` varchar(200) NOT NULL,
`deleted` int(11) NOT NULL DEFAULT '0',
`delete_date` datetime DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `date_added`, `title`, `img_path`, `file_name`, `link`, `deleted`, `delete_date`) VALUES
(1, '2014-10-06 17:00:00', 'A Child''s Hope Foundation', '/img/projects/', 'achf.png', 'https://www.achildshopefoundation.org', 0, '0000-00-00 00:00:00');
