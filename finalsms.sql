-- phpMyAdmin SQL Dump
-- version 3.4.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2013 at 08:24 AM
-- Server version: 5.1.60
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `btdet`
--

CREATE TABLE IF NOT EXISTS `btdet` (
  `table_name` varchar(1000) NOT NULL,
  `cid` varchar(100) NOT NULL,
  `btno` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `sub` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `btdet`
--

INSERT INTO `btdet` (`table_name`, `cid`, `btno`, `year`, `sem`, `branch`, `sub`) VALUES
('N092010E11CSE', 'N09', '2010', 'E1', '1', 'CSE', 'ds,pds,doa');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
  `cid` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cpass` varchar(100) NOT NULL,
  `cemail` varchar(100) NOT NULL,
  `cph` varchar(11) NOT NULL,
  `cadd` varchar(100) NOT NULL,
  `cwebsite` varchar(100) NOT NULL,
  `ginf` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`cid`, `cname`, `cpass`, `cemail`, `cph`, `cadd`, `cwebsite`, `ginf`) VALUES
('N09', 'RGUKT', 'iiitn', 'jyo@gmail.com', '8297894942', 'nuzvid', 'www.rgukt.in', '');

-- --------------------------------------------------------

--
-- Table structure for table `college_updates`
--

CREATE TABLE IF NOT EXISTS `college_updates` (
  `sno` int(10) NOT NULL AUTO_INCREMENT,
  `cid` varchar(1000) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `subject` varchar(10000) NOT NULL,
  `info` varchar(10000) NOT NULL,
  `date` varchar(10000) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `college_updates`
--

INSERT INTO `college_updates` (`sno`, `cid`, `cname`, `subject`, `info`, `date`) VALUES
(1, 'N09', 'RGUKT', 'Subject', 'This college is joined in our site\r\n', '17-03-2013'),
(2, 'N09', 'RGUKT', 'Updates', 'college updated\n', '18-03-2013');

-- --------------------------------------------------------

--
-- Table structure for table `N092010E11CSE`
--

CREATE TABLE IF NOT EXISTS `N092010E11CSE` (
  `cid` varchar(100) DEFAULT NULL,
  `sid` varchar(100) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `dtype` varchar(20) DEFAULT NULL,
  `ds` varchar(100) DEFAULT NULL,
  `pds` varchar(100) DEFAULT NULL,
  `doa` varchar(100) DEFAULT NULL,
  `total` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `cid` varchar(100) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `spass` varchar(100) NOT NULL,
  `sfname` varchar(100) NOT NULL,
  `sgender` varchar(100) NOT NULL,
  `semail` varchar(100) NOT NULL,
  `sph` varchar(100) NOT NULL,
  `sadd` varchar(100) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`cid`, `sid`, `sname`, `spass`, `sfname`, `sgender`, `semail`, `sph`, `sadd`, `batch`, `year`, `sem`, `branch`) VALUES
('N09', 'N090990', 'Jyothiram', 'i', 'Upendra Rao', 'Male', 'jyo@gmail.com', '8297894942', 'nuzvid', '2010', 'E1', '1', 'CSE'),
('N09', 'N091388', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `stu_acadamic`
--

CREATE TABLE IF NOT EXISTS `stu_acadamic` (
  `cid` varchar(50) NOT NULL,
  `sid` varchar(20) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `sbatch` varchar(30) NOT NULL,
  `sbranch` varchar(30) NOT NULL,
  `cuniversity` varchar(40) NOT NULL,
  `curr_sem` varchar(20) NOT NULL,
  `srank` varchar(20) NOT NULL,
  `eaa` varchar(50) NOT NULL,
  `year` varchar(100) NOT NULL,
  PRIMARY KEY (`cid`,`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_acadamic`
--

INSERT INTO `stu_acadamic` (`cid`, `sid`, `sname`, `sbatch`, `sbranch`, `cuniversity`, `curr_sem`, `srank`, `eaa`, `year`) VALUES
('N09', 'N090990', 'Jyothiram', '2010', 'CSE', '', '1', '', '', 'E1');

-- --------------------------------------------------------

--
-- Table structure for table `stu_prof`
--

CREATE TABLE IF NOT EXISTS `stu_prof` (
  `sid` varchar(20) NOT NULL,
  `interests` varchar(100) NOT NULL,
  `achievements` varchar(100) NOT NULL,
  `rollmodel` varchar(100) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `stu_rank` varchar(10) NOT NULL,
  `sdob` varchar(10) NOT NULL,
  `eaa` varchar(1000) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_prof`
--

INSERT INTO `stu_prof` (`sid`, `interests`, `achievements`, `rollmodel`, `comments`, `stu_rank`, `sdob`, `eaa`) VALUES
('N090990', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `stu_requests`
--

CREATE TABLE IF NOT EXISTS `stu_requests` (
  `cid` varchar(20) NOT NULL,
  `sid` varchar(20) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `reqs` mediumtext NOT NULL,
  `response` mediumtext NOT NULL,
  `status` varchar(1000) NOT NULL,
  PRIMARY KEY (`cid`,`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
