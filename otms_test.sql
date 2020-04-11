-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2020 at 04:36 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otms_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_name` text NOT NULL,
  `admin_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_name`, `admin_password`) VALUES
('admin', '123'),
('imtiaz', '456');

-- --------------------------------------------------------

--
-- Table structure for table `approved_offer`
--

CREATE TABLE `approved_offer` (
  `t_id` int(11) NOT NULL,
  `o_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `tutor_id` int(11) NOT NULL,
  `offer_no` int(11) NOT NULL,
  `enroll_no` int(11) NOT NULL,
  `tutor_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enroll`
--

INSERT INTO `enroll` (`tutor_id`, `offer_no`, `enroll_no`, `tutor_name`) VALUES
(1, 4, 25, 'bushra'),
(1, 5, 26, 'bushra'),
(1, 6, 27, 'bushra'),
(6, 5, 28, 'puja'),
(6, 16, 29, 'puja'),
(6, 19, 30, 'puja'),
(6, 23, 31, 'puja'),
(7, 11, 32, 'ayon'),
(7, 17, 33, 'ayon'),
(7, 19, 34, 'ayon'),
(9, 25, 35, 'tithi'),
(9, 30, 36, 'tithi'),
(9, 56, 37, 'tithi'),
(9, 84, 38, 'tithi'),
(9, 5, 39, 'tithi'),
(9, 4, 40, 'tithi'),
(9, 3, 41, 'tithi'),
(10, 5, 42, 'junaid malek');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `offer_no` int(11) NOT NULL,
  `subject` text NOT NULL,
  `area` text NOT NULL,
  `salary` int(11) NOT NULL,
  `catagory` text NOT NULL,
  `tutor_gender` text NOT NULL,
  `class` int(11) NOT NULL,
  `week_days` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `contact_number` text NOT NULL,
  `university_name` text NOT NULL,
  `department` text NOT NULL,
  `semester` text NOT NULL,
  `university_id` text NOT NULL,
  `location` text NOT NULL,
  `experience` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`name`, `email`, `password`, `contact_number`, `university_name`, `department`, `semester`, `university_id`, `location`, `experience`, `tutor_id`) VALUES
('bushra', 'bushra@example.com', '123456', '01478523', 'bracu', 'cse', '12', '16301153', 'magbazar', 4, 1),
('junaid', 'j@g.com', '123', '01988148871', 'AIUM', 'EEE', '12th', '16101065', 'mirpur', 5, 3),
('sadia', 's@g.com', '123', '01988148871', 'DU', 'chemistry', '5', '50001', 'dhanmondi', 2, 4),
('siam', 'si@g.com', '123', '01718098691', 'mist', 'EEE', '2', '56562', 'mirpur', 7, 5),
('puja', 'p@g.com', '123', '01727550321', 'bracu', 'cse', '10', '16101010', 'mohakhali', 5, 6),
('ayon', 'a@g.com', '123', '123', 'buet', 'ipe', '6', '159852', 'magbazar', 7, 7),
('ayon', 'a@g.com', '123', '123', 'buet', 'ipe', '6', '159852', 'magbazar', 7, 8),
('tithi', 't@g.com', '123', '1213654789', 'bup', 'eco', '11', '569874', 'mohammadpur', 5, 9),
('junaid malek', 'junaid@g.com', '123', '01718098691', 'dhaka university ', 'Arabic', '10', '165289', 'uttara', 0, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` text NOT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL,
  `user_contact_number` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `user_email`, `user_password`, `user_contact_number`, `user_id`) VALUES
('imtiaz', 'imtiaz@example.com', '12345', '01988148871', 1),
('refah nanjiba', 'refah@example.com', '123456', '01988148871', 2),
('himel', 'h@g.com', '123', '01988148871', 5),
('tonu', 't@g.com', '123', '01988148871', 6),
('zisan', 'z@g.com', '123', '01259841', 7),
('raj', 'r@g.com', '123', '123', 8),
('mim', 'm@g.com', '123', '123654789', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enroll`
--
ALTER TABLE `enroll`
  ADD PRIMARY KEY (`enroll_no`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`offer_no`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`tutor_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enroll`
--
ALTER TABLE `enroll`
  MODIFY `enroll_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `offer_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `tutor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `offer`
--
ALTER TABLE `offer`
  ADD CONSTRAINT `offer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
