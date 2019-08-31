-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2016 at 02:23 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `b_id` smallint(6) NOT NULL,
  `b_pay` double NOT NULL,
  `b_date` date NOT NULL,
  `b_details` text NOT NULL,
  `s_id` smallint(6) NOT NULL,
  `m_id` smallint(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`b_id`, `b_pay`, `b_date`, `b_details`, `s_id`, `m_id`) VALUES
(1, 50, '2011-11-11', 'Ù„Ø§ ÙŠÙˆØ¬Ø¯ ', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE IF NOT EXISTS `degree` (
  `d_id` smallint(6) NOT NULL,
  `d_degree` tinyint(4) NOT NULL,
  `e_id` smallint(6) NOT NULL,
  `s_id` smallint(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`d_id`, `d_degree`, `e_id`, `s_id`) VALUES
(1, 80, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `e_id` smallint(6) NOT NULL,
  `e_date` date NOT NULL,
  `e_details` text NOT NULL,
  `e_degree` tinyint(4) NOT NULL,
  `m_id` smallint(6) NOT NULL,
  `e_time` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`e_id`, `e_date`, `e_details`, `e_degree`, `m_id`, `e_time`) VALUES
(2, '2011-11-11', 'Ù„Ø§ÙŠÙˆØ¬Ø¯', 100, 1, '13:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `m_id` smallint(6) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `m_money` double NOT NULL,
  `m_teacher` varchar(50) NOT NULL,
  `m_details` text NOT NULL,
  `m_primary` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`m_id`, `m_name`, `m_money`, `m_teacher`, `m_details`, `m_primary`) VALUES
(1, 'Ø¹Ø±Ø¨ÙŠ', 100, 'ÙŠØ§Ø³Ø± Ø§Ù„Ø¨Ø±Ù†Ø³ ', 'Ù„Ø§ ÙŠÙˆØ¬Ø¯', 'Ø§Ù„Ø«Ø§Ù†ÙŠ Ø§Ù„Ø§Ø¨ØªØ¯Ø§Ø¦ÙŠ');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `s_id` smallint(6) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_phone` char(11) NOT NULL,
  `s_address` text NOT NULL,
  `s_details` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_name`, `s_phone`, `s_address`, `s_details`) VALUES
(1, 'Ù…Ø­Ù…Ø¯ Ø¹Ø¨Ø¯ Ø§Ù„Ø³Ù„Ø§Ù… Ø®ÙŠØ±ÙŠ', '01021952160', 'Ø¯Ù…Ù†Ù‡ÙˆØ±', 'Ù„Ø§ Ù…ÙÙŠØ´ ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `b_id` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `degree`
--
ALTER TABLE `degree`
  MODIFY `d_id` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `e_id` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `m_id` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
