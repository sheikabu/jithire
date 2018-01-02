-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2018 at 03:02 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jithire`
--

-- --------------------------------------------------------

--
-- Table structure for table `jh_company_details`
--

CREATE TABLE `jh_company_details` (
  `id` int(15) NOT NULL,
  `company_name` varchar(300) NOT NULL,
  `address` text NOT NULL,
  `url` varchar(250) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jh_company_details`
--

INSERT INTO `jh_company_details` (`id`, `company_name`, `address`, `url`, `city`, `state`, `country`, `role`, `status`) VALUES
(3, 'volks electronics', 'vanchiyur', 'volks.com', 'trivandrum', 'kerala', 'india', 'company', '0'),
(5, 'volks electronics', 'vanchiyur', 'volks.in', 'trivandrum', 'kerala', 'india', 'company', '0'),
(6, 'yanbytes', 'mamatha nagar', 'yanbytes.com', 'Trivandrum', 'Kerala', 'India', 'company', '0');

-- --------------------------------------------------------

--
-- Table structure for table `jh_job_posting`
--

CREATE TABLE `jh_job_posting` (
  `job_id` int(11) NOT NULL,
  `role` varchar(30) NOT NULL,
  `min_exp` varchar(10) NOT NULL,
  `skills` text NOT NULL,
  `job_description` text NOT NULL,
  `preferred_location` text NOT NULL,
  `no_positions` varchar(10) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `salary_lakhs` varchar(12) NOT NULL,
  `salary_thousands` varchar(30) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jh_job_posting`
--

INSERT INTO `jh_job_posting` (`job_id`, `role`, `min_exp`, `skills`, `job_description`, `preferred_location`, `no_positions`, `duration`, `salary_lakhs`, `salary_thousands`, `company_id`) VALUES
(1, 'Software Engg', '12', '[\"PHP\",\"Expert\"]', 'Good in PHP', '[\"1\"]', '1', '1 day', '1', '10', 117),
(2, 'Project Manager', '15', '[\"Planning\",\"Client Communication\",\"Good\",\"Well\"]', 'Full time project Manger', '[\"1\",\"2\"]', '1', '2 days', '4', '20', 117),
(3, 'Tester', '3', '[\"Manual Testing\",\"Expert\"]', 'Manual Testing', '[\"1\"]', '3', '1', '0', '10', 117);

-- --------------------------------------------------------

--
-- Table structure for table `jh_registration`
--

CREATE TABLE `jh_registration` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jh_registration`
--

INSERT INTO `jh_registration` (`id`, `first_name`, `last_name`, `email`, `password`, `role`, `status`) VALUES
(119, 'admin', 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'active'),
(116, 'candidate', 'Candidate', 'candidate@gmail.com', '65afdfb40872c44eb6118b669b0d751e', 'candidate', 'active'),
(117, 'company', 'Company', 'company@gmail.com', '93c731f1c3a84ef05cd54d044c379eaa', 'company', 'active'),
(118, 'Nizam', 'Deen', 'nizamudeen003@gmail.com', '3b771e07cf4b6c1fbaff1bcdc628e1c1', 'candidate', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `jh_user_profile`
--

CREATE TABLE `jh_user_profile` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `resume_headline` text NOT NULL,
  `pancard` int(10) NOT NULL,
  `mobile_number` int(10) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `total_experience` varchar(100) NOT NULL,
  `industry` varchar(200) NOT NULL,
  `functional_area` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL,
  `preferred_location` text NOT NULL,
  `salary_lakhs` varchar(100) NOT NULL,
  `salary_thousands` varchar(10) NOT NULL,
  `previous_experience` text NOT NULL,
  `company` varchar(200) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jh_user_profile`
--

INSERT INTO `jh_user_profile` (`id`, `name`, `email`, `gender`, `resume_headline`, `pancard`, `mobile_number`, `dob`, `total_experience`, `industry`, `functional_area`, `role`, `preferred_location`, `salary_lakhs`, `salary_thousands`, `previous_experience`, `company`, `user_id`) VALUES
(2, 'candidate', 'candidate@gmail.com', 'f', '10 years of experience in IT industry.Experienced Scrum Master with a proven track record of delivering\r\nhigh-quality software, on-time and within budget.', 12345, 2147483647, '1986-03-26', '5', '1', '2', '2', '[\"1\",\"2\",\"3\"]', '1', '5', '[\"Compvue\",\"Compvue\",\"Software Engg\",\"Software Engg\",\"May-2010\",\"May-2015\",\"June-2015\",\"June-2016\"]', '', 116);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jh_company_details`
--
ALTER TABLE `jh_company_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `jh_job_posting`
--
ALTER TABLE `jh_job_posting`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `jh_registration`
--
ALTER TABLE `jh_registration`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `jh_user_profile`
--
ALTER TABLE `jh_user_profile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id_2` (`user_id`),
  ADD UNIQUE KEY `mobile_number` (`mobile_number`),
  ADD UNIQUE KEY `pancard` (`pancard`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jh_company_details`
--
ALTER TABLE `jh_company_details`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jh_job_posting`
--
ALTER TABLE `jh_job_posting`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jh_registration`
--
ALTER TABLE `jh_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT for table `jh_user_profile`
--
ALTER TABLE `jh_user_profile`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
