-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2016 at 10:22 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_attendance_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_db`
--

CREATE TABLE IF NOT EXISTS `admin_db` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_db`
--

INSERT INTO `admin_db` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_db`
--

CREATE TABLE IF NOT EXISTS `attendance_db` (
  `at_id` int(50) NOT NULL AUTO_INCREMENT,
  `emp_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `ent_time` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`at_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `attendance_db`
--

INSERT INTO `attendance_db` (`at_id`, `emp_id`, `date`, `ent_time`, `status`) VALUES
(15, 2, '2016-02-10', '6:00PM', 1),
(17, 2, '2016-02-10', '6:00PM', 1),
(18, 2, '2016-02-10', '6:00PM', 1),
(19, 4, '2016-02-10', '8:00', 1),
(20, 4, '2016-02-10', '8:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_db`
--

CREATE TABLE IF NOT EXISTS `employee_db` (
  `emp_id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `employee_db`
--

INSERT INTO `employee_db` (`emp_id`, `firstname`, `lastname`, `username`, `password`, `gender`, `phoneno`, `email`, `department`, `position`) VALUES
(1, 'ram', 'gautam', 'rahultm', 'rahul', 'male', '12345', 'rahul@gmail.com', 'design', 'designer'),
(2, 'Shyam', 'gautam', 'rahul', 'rahul', 'male', '12345', 'rahul@gmail.com', 'design', 'designer'),
(4, 'Manu', 'Pakhrin', 'manu', 'manu', 'Female', '123', 'manu@gmail.com', 'Research', 'Worker'),
(5, 'Rabindra', 'tharu', 'rabindra', 'rabindra', 'male', '9879080', 'raju@gmail.com', 'IT', 'Developer');

-- --------------------------------------------------------

--
-- Table structure for table `leave_db`
--

CREATE TABLE IF NOT EXISTS `leave_db` (
  `leave_id` int(10) NOT NULL AUTO_INCREMENT,
  `emp_id` int(10) NOT NULL,
  `leavestart_date` date NOT NULL,
  `leaveend_date` date NOT NULL,
  `leave_title` varchar(100) NOT NULL,
  `leave_desc` varchar(500) NOT NULL,
  PRIMARY KEY (`leave_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `leave_db`
--

INSERT INTO `leave_db` (`leave_id`, `emp_id`, `leavestart_date`, `leaveend_date`, `leave_title`, `leave_desc`) VALUES
(13, 4, '2017-01-01', '2017-01-01', 'Sick leave', 'Sick Leave'),
(15, 4, '2017-01-01', '2017-01-01', 'sick leave', 'sick leave');

-- --------------------------------------------------------

--
-- Table structure for table `notice_db`
--

CREATE TABLE IF NOT EXISTS `notice_db` (
  `not_id` int(10) NOT NULL AUTO_INCREMENT,
  `not_title` varchar(100) NOT NULL,
  `not_description` varchar(1000) NOT NULL,
  `not_date` date NOT NULL,
  PRIMARY KEY (`not_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `notice_db`
--

INSERT INTO `notice_db` (`not_id`, `not_title`, `not_description`, `not_date`) VALUES
(1, 'Exam', 'Exam is on August', '2016-07-10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
