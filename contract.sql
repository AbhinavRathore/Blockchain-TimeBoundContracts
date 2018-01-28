-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2018 at 10:30 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contract`
--

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `domain` int(11) NOT NULL,
  `con_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `pro_num` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`domain`, `con_id`, `cus_id`, `pro_num`, `status`, `amount`, `time`) VALUES
(1, 3, 1, 3, 0, 100, 5),
(1, 3, 2, 5, 0, 10, 10),
(1, 5, 1, 3, 0, 100, 2);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `key_index` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `domain` varchar(100) NOT NULL,
  `type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`key_index`, `user_name`, `password`, `email_id`, `contact_number`, `user_id`, `domain`, `type`) VALUES
(1, 'Abhinav', 'abhinav', 'abhinav@gmail.com', '9119824114', 'abhinav', '0', 0),
(2, 'Ayush', 'ayush', 'ayush@gmail.com', '9876543212', 'ayush', '0', 0),
(3, 'Apurva', 'apurva', 'apurva@gmail.com', '87566475478', 'apurva', 'Personal', 1),
(4, 'Vaishali', 'vaishali', 'vaishali@gmail.com', '89696976979', 'vaishali', 'Personal', 1),
(5, 'Rathore', 'rathore', 'rathore@gmail.com', '8767858568', 'rathore', 'Personal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_comm`
--

CREATE TABLE `user_comm` (
  `type` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `storey` varchar(100) NOT NULL,
  `des` varchar(100) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_show`
--

CREATE TABLE `user_show` (
  `pro_num` int(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `storey` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_show`
--

INSERT INTO `user_show` (`pro_num`, `size`, `storey`, `description`, `user_id`, `status`) VALUES
(3, '100', '50', 'Ek aur ghar bana do!', '1', 0),
(4, '100', '6', 'second ghar', '1', 0),
(5, '100', '1', 'Small House', '2', 0),
(6, '10000', '5', 'AAAAAAAA', '1', 0),
(7, '1000', '2', 'AAAAAAAA', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_soft`
--

CREATE TABLE `user_soft` (
  `type` varchar(100) NOT NULL,
  `desp` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_time`
--

CREATE TABLE `user_time` (
  `type` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `desp` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`key_index`);

--
-- Indexes for table `user_show`
--
ALTER TABLE `user_show`
  ADD PRIMARY KEY (`pro_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `key_index` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_show`
--
ALTER TABLE `user_show`
  MODIFY `pro_num` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
