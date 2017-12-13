-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2017 at 10:00 PM
-- Server version: 5.5.54
-- PHP Version: 5.3.10-1ubuntu3.26

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `study`
--

-- --------------------------------------------------------

--
-- Table structure for table `jh_company_details`
--

CREATE TABLE IF NOT EXISTS `jh_company_details` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(300) NOT NULL,
  `address` text NOT NULL,
  `url` varchar(250) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `jh_company_details`
--

INSERT INTO `jh_company_details` (`id`, `company_name`, `address`, `url`, `city`, `state`, `country`, `role`, `status`) VALUES
(3, 'volks electronics', 'vanchiyur', 'volks.com', 'trivandrum', 'kerala', 'india', 'company', '0'),
(5, 'volks electronics', 'vanchiyur', 'volks.in', 'trivandrum', 'kerala', 'india', 'company', '0'),
(6, 'yanbytes', 'mamatha nagar', 'yanbytes.com', 'Trivandrum', 'Kerala', 'India', 'company', '0');

-- --------------------------------------------------------

--
-- Table structure for table `jh_registration`
--

CREATE TABLE IF NOT EXISTS `jh_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`email`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=116 ;

--
-- Dumping data for table `jh_registration`
--

INSERT INTO `jh_registration` (`id`, `first_name`, `last_name`, `email`, `password`, `role`, `status`) VALUES
(6, 'mani', 'kandan', 'mani@gmail.com', '07cd55c7b42715ec44c133a6a165e8d2', 'employee', 'active'),
(113, 'mani', 'kandan', 'manik@gmail.com', '07cd55c7b42715ec44c133a6a165e8d2', 'employee', 'active'),
(7, '', '', 'ni@g', '', '', ''),
(4, 'nizamudeen', 'm', 'nizamude03@gmail.com', '3b771e07cf4b6c1fbaff1bcdc628e1c1', 'employee', 'active'),
(3, 'nizamudeen', 'm', 'nizamudeen003@gmail.com', 'nizambai', 'employee', 'active'),
(11, '', '', 'nizu_003@yahoo.com', '', '', ''),
(114, 'sheik', 'abdullah', 'uka.sheikabdullah@gmail.com', '4646eceafce5c8be86c98faff8de39c2', 'candidate', 'active');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
