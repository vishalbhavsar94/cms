-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2019 at 09:23 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rofelcms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `email` varchar(150) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `ins_id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `login_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `email` varchar(150) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `ins_id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `login_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

CREATE TABLE `institute` (
  `id` int(11) NOT NULL,
  `insname` varchar(150) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(150) NOT NULL,
  `landline` int(11) NOT NULL,
  `fax` int(11) DEFAULT NULL,
  `mobileno` int(11) NOT NULL,
  `sub_id` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institute`
--

INSERT INTO `institute` (`id`, `insname`, `address`, `email`, `landline`, `fax`, `mobileno`, `sub_id`, `status`) VALUES
(1, ' ROFEL G.M. Bilakhia College of Applied Sciences', 'ROFEL Shri G.M.Bilakhia College of Applied Sciences. Namdha Campus, Opp- Janseva Hospital, Vapi[W]-396191', 'bca@rgmbs.org', 2147483647, 0, 2147483647, 3, 1),
(2, ' ROFEL G.M. Bilakhia College of Applied Comerce', 'gunjan gidc vapi rofel greems 396191', 'test@test.com', 123456, 123456, 1234567890, 5, 1),
(3, 'test', 'test address', 'test@test.com', 123456789, 123, 2147483647, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE `librarian` (
  `id` int(11) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `email` varchar(150) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `ins_id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `login_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `user_id` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='login table for users	';

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `user_id`, `type`, `status`) VALUES
(9, 'Masteradmin001', 'MasterAdmin', 1),
(12, 'vishalsub001', 'SubAdmin', 1),
(14, 'sub002', 'SubAdmin', 1),
(16, 'prof001', 'Professor', 1),
(17, 'zdEr71Eo9F', 'SubAdmin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_admin`
--

CREATE TABLE `master_admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `email` varchar(150) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_admin`
--

INSERT INTO `master_admin` (`id`, `user_name`, `email`, `user_id`, `password`, `mobile_no`, `type`, `status`) VALUES
(1, 'masteradmin', 'master@g.com', 'Masteradmin001', 'masteradmin001', 1234567890, 'MasterAdmin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `email` varchar(150) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `ins_id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `login_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`id`, `user_name`, `email`, `user_id`, `password`, `mobile_no`, `ins_id`, `type`, `status`, `login_id`) VALUES
(1, 'vishal', 'vishal@g.com', 'prof001', 'prof001', 1234567890, 2, 'Professor', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `email` varchar(150) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `ins_id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `login_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_admin`
--

CREATE TABLE `sub_admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `email` varchar(200) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `ins_id` tinyint(2) NOT NULL,
  `type` varchar(45) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `login_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_admin`
--

INSERT INTO `sub_admin` (`id`, `user_name`, `email`, `user_id`, `password`, `mobile_no`, `ins_id`, `type`, `status`, `login_id`) VALUES
(3, 'Vishal Subadmin', 'v@g.com', 'vishalsub001', 'vishalsub001', 2147483647, 1, 'SubAdmin', 1, NULL),
(5, 'vishal sub002', 'sub002@g.com', 'sub002', 'sub002', 2147483647, 2, 'SubAdmin', 1, NULL),
(6, 'new sub', 'newsub@gmail.com', 'zdEr71Eo9F', 'M0bvrGOcpO', 2147483647, 3, 'SubAdmin', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `warden`
--

CREATE TABLE `warden` (
  `id` int(11) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `email` varchar(150) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `ins_id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `login_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institute`
--
ALTER TABLE `institute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `librarian`
--
ALTER TABLE `librarian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `master_admin`
--
ALTER TABLE `master_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_admin`
--
ALTER TABLE `sub_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warden`
--
ALTER TABLE `warden`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `institute`
--
ALTER TABLE `institute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `librarian`
--
ALTER TABLE `librarian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `master_admin`
--
ALTER TABLE `master_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_admin`
--
ALTER TABLE `sub_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `warden`
--
ALTER TABLE `warden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
