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
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`join_date` datetime NOT NULL,
`email` varchar(50) CHARACTER SET utf8 NOT NULL,
`deleted` int(11) NOT NULL DEFAULT '0',
`delete_date` datetime DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `join_date`, `email`, `deleted`, `delete_date`) VALUES
(1, '2014-10-04 22:27:27', 'toddgoates@gmail.com', 0, NULL);
