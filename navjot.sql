-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2019 at 07:33 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `navjot`
--

-- --------------------------------------------------------

--
-- Table structure for table `family_head_info`
--

CREATE TABLE `family_head_info` (
  `family_head_id` int(11) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `father_name` varchar(80) NOT NULL,
  `serial_number` varchar(40) NOT NULL,
  `vote_number` varchar(50) NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `aadhar_number` varchar(20) NOT NULL,
  `image_name` text NOT NULL,
  `create_by` int(11) NOT NULL,
  `update_by` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_head_info`
--

INSERT INTO `family_head_info` (`family_head_id`, `first_name`, `last_name`, `gender`, `father_name`, `serial_number`, `vote_number`, `id_number`, `mobile_number`, `aadhar_number`, `image_name`, `create_by`, `update_by`, `create_date`, `update_date`, `status`) VALUES
(19, 'Demo', 'Name', 'Male', 'VGH', '4353', '9234890', '347892398', '430948290', '324209303829', '324209303829.jpg', 1, 1, '2019-09-28 13:43:53', '2019-09-29 10:04:48', 'Active'),
(20, 'Demo', 'Name', 'Male', 'VGH', '4353', '9234890', '347892398', '430948290', '324209303829', '324209303829.jpg', 1, 1, '2019-09-29 09:53:22', '2019-09-29 10:04:48', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `family_member_info`
--

CREATE TABLE `family_member_info` (
  `family_member_id` int(11) NOT NULL,
  `family_head_id` int(11) NOT NULL,
  `family_member_name` varchar(100) NOT NULL,
  `family_member_gender` varchar(30) NOT NULL,
  `family_member_vote_number` varchar(50) NOT NULL,
  `family_member_id_card_number` varchar(50) NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(30) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_member_info`
--

INSERT INTO `family_member_info` (`family_member_id`, `family_head_id`, `family_member_name`, `family_member_gender`, `family_member_vote_number`, `family_member_id_card_number`, `added_by`, `updated_by`, `create_date`, `update_date`, `status`) VALUES
(1, 19, 'test', 'Male', '3443', '43', 1, 1, '2019-09-28 13:43:53', '2019-09-28 13:43:53', 'Active'),
(2, 19, 'TEST', 'Female', '434433', '45454', 1, 1, '2019-09-28 13:43:53', '2019-09-28 13:43:53', 'Active'),
(3, 20, 'm1', 'Male', '394043', '38974329', 1, 1, '2019-09-29 09:53:22', '2019-09-29 09:53:22', 'Active'),
(4, 20, 'm2', 'Female', '7489327', '832734', 1, 1, '2019-09-29 09:53:23', '2019-09-29 09:53:23', 'Active'),
(5, 20, 'm3', 'Male', '4823932', '8497328', 1, 1, '2019-09-29 09:53:23', '2019-09-29 09:53:23', 'Active'),
(6, 20, 'm4', 'Male', '3847389', '48534546', 1, 1, '2019-09-29 09:53:23', '2019-09-29 09:53:23', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `userName` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `userName`, `password`, `status`, `create_date`, `update_date`, `firstName`, `lastName`) VALUES
(1, '007', 'test', 'Active', '2019-09-25 16:39:01', '2019-09-25 16:39:01', 'Navjot', 'Sidhu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `family_head_info`
--
ALTER TABLE `family_head_info`
  ADD PRIMARY KEY (`family_head_id`);

--
-- Indexes for table `family_member_info`
--
ALTER TABLE `family_member_info`
  ADD PRIMARY KEY (`family_member_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `family_head_info`
--
ALTER TABLE `family_head_info`
  MODIFY `family_head_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `family_member_info`
--
ALTER TABLE `family_member_info`
  MODIFY `family_member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
