-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2024 at 04:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

CREATE TABLE `award` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `award`
--

INSERT INTO `award` (`id`, `name`, `date`) VALUES
(1, 'Best pvt limited of ', '10/1/2001'),
(2, 'Best Management System', '12/1/2003'),
(3, 'Best Perform of the year 2007', '22/1/2008');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(10) NOT NULL,
  `d_name` varchar(20) NOT NULL,
  `d_id` varchar(10) NOT NULL,
  `d_emp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `d_name`, `d_id`, `d_emp`) VALUES
(1, 'Finance', 'D1', 2),
(2, 'Web dev', 'D2', 10),
(3, 'Recruitment', 'D3', 5),
(4, 'IT', 'D4', 30);

-- --------------------------------------------------------

--
-- Table structure for table `empdetails`
--

CREATE TABLE `empdetails` (
  `id` int(10) NOT NULL,
  `empid` int(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `addr` varchar(30) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `ac` int(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `edu` varchar(20) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `age` int(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `desig` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `empdetails`
--

INSERT INTO `empdetails` (`id`, `empid`, `password`, `name`, `addr`, `dept`, `bank`, `ac`, `gender`, `edu`, `user_name`, `email`, `age`, `dob`, `mob`, `desig`) VALUES
(1, 1001, 'abcd', 'Arjun', 'Bengaluru', 'IT', 'SBI', 15646352, 'Male', 'M.Tech ', 'emp1', 'arjun@gmail.com', 26, '20/12/1998', 9876543210, 'Fullstack Developer'),
(2, 1002, 'abcd', 'Aadi', 'Bengaluru', 'IT', 'BOB', 465465, 'Male', 'B.Tech ', 'emp2', 'aadi@gmail.com', 22, '04/06/2002', 8796541230, 'Front-end Developer'),
(3, 1003, 'abcd', 'Akash', 'Chennai', 'IT', 'Central', 548443, 'Male', 'B.Tech ', 'emp3', 'akash@gmail.com', 22, '14/02/2002', 7865413153, 'Back-end Developer'),
(4, 1004, 'abcd', 'Bharath', 'Bengaluru', 'E-commerce', 'IDBI', 463482, 'Male', 'B.Tech ', 'emp4', 'bharath@gmail.com', 20, '26/03/2003', 9148670253, 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(10) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `p_id` varchar(10) NOT NULL,
  `dur` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `p_name`, `p_id`, `dur`) VALUES
(1, 'Dev website', 'P101', '2 months'),
(2, 'App dev', 'P1005', '2 weeks'),
(3, 'Website Development', 'P1006', '6 weeks');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'admin', '12345', 'Admin'),
(2, 'abhishek', '67890', 'Abhishek');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `award`
--
ALTER TABLE `award`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empdetails`
--
ALTER TABLE `empdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `award`
--
ALTER TABLE `award`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `empdetails`
--
ALTER TABLE `empdetails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
