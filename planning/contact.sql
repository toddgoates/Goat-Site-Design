-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2014 at 04:27 AM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `toddgoates`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`ts_created` datetime NOT NULL,
`fullname` varchar(50) CHARACTER SET utf8 NOT NULL,
`company` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
`email` varchar(50) CHARACTER SET utf8 NOT NULL,
`phone` varchar(15) CHARACTER SET utf8 NOT NULL,
`website` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
`deadline` varchar(15) CHARACTER SET utf8 NOT NULL,
`budget` varchar(20) CHARACTER SET utf8 NOT NULL,
`nature` text CHARACTER SET utf8 NOT NULL,
`content` varchar(5) CHARACTER SET utf8 NOT NULL,
`more_info` text CHARACTER SET utf8,
PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `ts_created`, `fullname`, `company`, `email`, `phone`, `website`, `deadline`, `budget`, `nature`, `content`, `more_info`) VALUES
(1, '2014-10-07 21:28:51', 'Todd Goates', 'Goat Site Design', 'toddgoates@gmail.com', '8013199420', 'http://www.toddgoates.com', '3 Months', '$500 or less', 'Want to redesign my portfolio website.', 'Yes', 'Not really, no.');
