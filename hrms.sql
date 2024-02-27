-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2024 at 03:40 PM
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
-- Database: `id21850323_admin`
--

-- DELIMITER $$
-- --
-- -- Procedures
-- --
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `detailsbyempid` (IN `uempid` VARCHAR(10))   BEGIN
-- SELECT * FROM empdetails
-- WHERE empid = uempid;
-- END$$

-- DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

CREATE TABLE `award` (
  `a_id` varchar(10) NOT NULL,
  `a_name` varchar(20) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `empid` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `award`
--

INSERT INTO `award` (`a_id`, `a_name`, `dates`, `empid`) VALUES
('A101', 'Best Technician', '2024-02-15', 'emp1'),
('A102', 'Best Account Handler', '2024-02-17', 'emp2'),
('A103', 'Best Developer', '2024-02-20', 'emp3'),
('A104', 'Best Marketer', '2024-02-22', 'emp4'),
('A105', 'Best Appointer', '2024-02-26', 'emp5');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `d_id` varchar(10) NOT NULL,
  `d_name` varchar(20) NOT NULL,
  `d_emp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`d_id`, `d_name`, `d_emp`) VALUES
('D1', 'Testing ', 20),
('D2', 'Finance', 10),
('D3', 'IT', 30),
('D4', 'E-Commerce', 20),
('D5', 'Recruitment', 5);

-- --------------------------------------------------------

--
-- Table structure for table `empdetails`
--

CREATE TABLE `empdetails` (
  `id` int(10) NOT NULL,
  `empid` varchar(10) NOT NULL,
  `passwords` varchar(20) DEFAULT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `addr` varchar(30) DEFAULT NULL,
  `dept` varchar(10) DEFAULT NULL,
  `bank` varchar(20) DEFAULT NULL,
  `ac` int(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `edu` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `mob` bigint(10) DEFAULT NULL,
  `desig` varchar(20) DEFAULT NULL,
  `salary` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `empdetails`
--

INSERT INTO `empdetails` (`id`, `empid`, `passwords`, `uname`, `addr`, `dept`, `bank`, `ac`, `gender`, `edu`, `email`, `age`, `dob`, `mob`, `desig`, `salary`) VALUES
(1, 'emp1', 'abcd', 'Ketan', 'Sirsi', 'D1', 'SBI', 6354631, 'Male', 'M.Tech ', 'ketan@gmail.com', 20, '13/04/2003', 9876543210, 'Condition Checking', 29000),
(2, 'emp2', 'abcd', 'Chandan', 'Bengaluru', 'D2', 'Canara', 63546319, 'Male', 'B.Tech ', 'chandan@gmail.com', 20, '22/08/2003', 9876543209, 'Account Handling', 29000),
(3, 'emp3', 'abcd', 'Arjun', 'Bengaluru', 'D3', 'BOB', 67465123, 'Male', 'M.Tech ', 'arjun@gmail.com', 20, '13/04/2003', 8765432190, 'Full Stack Developer', 29000),
(4, 'emp4', 'abcd', 'Bharath', 'Mysore', 'D4', 'Central', 6463494, 'Male', 'B.Tech ', 'bharath@gmail.com', 20, '24/06/2003', 9807651423, 'Marketing', 29000),
(5, 'emp5', 'abcd', 'Himamshu', 'Bengaluru', 'D5', 'HDFC', 64287601, 'Male', 'M.Tech ', 'himamshu@gmail.com', 20, '24/06/2003', 9128374650, 'Appointing Employees', 29000);

--
-- Triggers `empdetails`
--
DELIMITER $$
CREATE TRIGGER `salary_trigger` BEFORE INSERT ON `empdetails` FOR EACH ROW BEGIN
	IF new.salary < 29000 OR new.salary > 29000 THEN
    	SET new.salary = 29000;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `p_id` varchar(10) NOT NULL,
  `p_name` varchar(20) DEFAULT NULL,
  `dur` varchar(10) DEFAULT NULL,
  `d_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`p_id`, `p_name`, `dur`, `d_id`) VALUES
('P1001', 'Website Testing', '1 Week', 'D1'),
('P1002', 'Verify all accounts', '1 Week', 'D2'),
('P1004', 'AI Development', '1 Year', 'D3'),
('P1005', 'Product Selling', '3 Months', 'D4'),
('P1006', 'Appointing Employees', '1 Month', 'D5');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(10) NOT NULL,
  `empid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `empid`) VALUES
(2, 'abhishek', '67890', 'Abhishek', 'hr2'),
(1, 'admin', '12345', 'Admin', 'hr1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `award`
--
ALTER TABLE `award`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `empid` (`empid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `empdetails`
--
ALTER TABLE `empdetails`
  ADD PRIMARY KEY (`empid`),
  ADD KEY `dept` (`dept`),
  ADD KEY `sl` (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_name`),
  ADD KEY `sl` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empdetails`
--
ALTER TABLE `empdetails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `award`
--
ALTER TABLE `award`
  ADD CONSTRAINT `award_ibfk_1` FOREIGN KEY (`empid`) REFERENCES `empdetails` (`empid`) ON DELETE CASCADE;

--
-- Constraints for table `empdetails`
--
ALTER TABLE `empdetails`
  ADD CONSTRAINT `empdetails_ibfk_1` FOREIGN KEY (`dept`) REFERENCES `department` (`d_id`) ON DELETE CASCADE;

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `department` (`d_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
