-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2017 at 12:02 PM
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
-- Table structure for table `jh_user_profile`
--

CREATE TABLE IF NOT EXISTS `jh_user_profile` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(200) NOT NULL,
  `middle_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pancard` int(10) NOT NULL,
  `mobile_number` int(10) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `total_experience` varchar(100) NOT NULL,
  `industry` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL,
  `skill` varchar(200) NOT NULL,
  `preferred_location` varchar(200) NOT NULL,
  `minimum_salary` varchar(100) NOT NULL,
  `previous_experience` varchar(100) NOT NULL,
  `company` varchar(200) NOT NULL,
  `user_id` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id_2` (`user_id`),
  UNIQUE KEY `mobile_number` (`mobile_number`),
  UNIQUE KEY `pancard` (`pancard`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `jh_user_profile`
--

INSERT INTO `jh_user_profile` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `pancard`, `mobile_number`, `dob`, `total_experience`, `industry`, `role`, `skill`, `preferred_location`, `minimum_salary`, `previous_experience`, `company`, `user_id`) VALUES
(1, 'nizam', 'k', 'm', 'nizamude03@gmail.cdom', 987654432, 2147483647, '2011-08-09', '1', '1', '2', '2', 'trivandrum', '200000', '2', 's', 116);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jh_user_profile`
--
ALTER TABLE `jh_user_profile`
  ADD CONSTRAINT `jh_user_profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `jh_registration` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
