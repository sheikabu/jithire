-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2018 at 06:18 PM
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
  `url` varchar(250) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jh_company_details`
--

INSERT INTO `jh_company_details` (`id`, `company_name`, `url`, `city`, `state`, `country`, `role`, `status`, `email`, `password`, `date_time`) VALUES
(7, 'test', 'test.com', 'tvm', 'kl', 'india', 'company', 'active', 'sasa@asd.com', '202cb962ac59075b964b07152d234b70', '2018-01-05 17:01:36'),
(13, 'yanbytesINC', 'yanbytes.com', 'Trivandrum', 'Kerala', 'IN', 'company', 'active', 'yanbytes@gmail.com', '202cb962ac59075b964b07152d234b70', '2018-01-05 20:32:41');

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
  `company_id` int(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jh_job_posting`
--

INSERT INTO `jh_job_posting` (`job_id`, `role`, `min_exp`, `skills`, `job_description`, `preferred_location`, `no_positions`, `duration`, `salary_lakhs`, `salary_thousands`, `company_id`, `status`, `date_time`) VALUES
(4, 'asd', 'asd', '{\"PHP\":\"Beginners\",\"Juery\":\"Experts\"}', 'asd', '[\"1\"]', '1', '1 day', '1', '5', 13, '', '2018-01-07 12:38:08'),
(5, 'asd', 'asd', '{\"Client Communication\":\"Expert\",\"Manual Testing\":\"Expert\",\"22\":\"Expert\"}', 'sadasd', '[\"1\"]', '2', '1', '3', '5', 13, '', '2018-01-07 12:38:08'),
(6, 'asd', 'asd', '{\"Client Communication\":\"Expert\"}', 'sadasd', '[\"1\"]', '2', '1', '3', '5', 13, '', '2018-01-07 12:38:08'),
(7, 'asda', 'asd', '{\"PHP\":\"Well\"}', 'asd', '[\"1\"]', '1', '1', '1', '0', 13, '', '2018-01-07 12:38:08'),
(8, 'asda', 'asd', '{\"PHP\":\"Well\"}', 'asd', '[\"1\"]', '1', '1', '1', '0', 13, '', '2018-01-07 12:38:08'),
(9, 'asda', 'asd', '{\"PHP\":\"Well\"}', 'asd', '[\"1\"]', '1', '1', '1', '0', 13, '', '2018-01-07 12:38:08'),
(10, 'asda', 'asd', '{\"PHP\":\"Well\"}', 'asd', '[\"1\"]', '1', '1', '1', '0', 13, '', '2018-01-07 12:38:08'),
(11, 'ZX', 'ZX', '{\"PPS\":\"asD\"}', 'ASD', '[\"1\"]', 'sa', 'asd', '1', '15', 0, '', '2018-01-07 08:12:30'),
(12, 'asda', 'asd', '{\"PHP\":\"Intermediate\"}', 'asdasd', '[\"1\"]', '22', '1 day', '2', '10', 13, 'active', '2018-01-07 10:03:14'),
(13, 'asda', 'asd', '{\"PHP\":\"Intermediate\"}', 'asdasd', '[\"1\"]', '22', '1 day', '2', '10', 13, 'active', '2018-01-07 10:07:24'),
(14, 'asda', 'asd', '{\"PHP\":\"Intermediate\"}', 'asdasd', '[\"1\"]', '22', '1 day', '2', '10', 13, 'active', '2018-01-07 10:07:46');

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
  `status` varchar(25) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jh_registration`
--

INSERT INTO `jh_registration` (`id`, `first_name`, `last_name`, `email`, `password`, `role`, `status`, `date_time`) VALUES
(118, 'admin', 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'active', '2018-01-04 14:59:40'),
(121, 'aaaa', 'aaaaaaa', 'anup.kumar@inapp.com', '74b87337454200d4d33f80c4663dc5e5', 'candidate', 'active', '2018-01-05 15:45:03'),
(120, 'asdas', 'asdasd', 'asd@asd.com', '202cb962ac59075b964b07152d234b70', 'candidate', 'active', '2018-01-05 15:16:49'),
(116, 'candidate', 'Candidate', 'candidate@gmail.com', '65afdfb40872c44eb6118b669b0d751e', 'candidate', 'blocked', '2018-01-04 14:59:40'),
(123, 'asdas', 'asd', 'sdasd@asd.com', '698d51a19d8a121ce581499d7b701668', 'candidate', 'active', '2018-01-05 15:50:29'),
(122, 'df', 'sfd', 'sdf@asd.com', '698d51a19d8a121ce581499d7b701668', 'candidate', 'active', '2018-01-05 15:47:56');

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
(2, 'candidate', 'candidate@gmail.com', 'f', '10 years of experience in IT industry.Experienced Scrum Master with a proven track record of delivering\r\nhigh-quality software, on-time and within budget.', 12345, 2147483647, '1986-03-26', '5', '1', '2', '2', '[\"2\"]', '1', '5', '[\"Compvue\",\"Compvue1\",\"Software Engg\",\"Software Engg\",\"May-2010\",\"May-2010\",\"June-2015\",\"June-2015\"]', '', 116);

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
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `jh_job_posting`
--
ALTER TABLE `jh_job_posting`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `jh_registration`
--
ALTER TABLE `jh_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT for table `jh_user_profile`
--
ALTER TABLE `jh_user_profile`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
