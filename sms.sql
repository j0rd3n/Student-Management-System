-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 12, 2014 at 01:53 PM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `subject` varchar(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`subject`, `id`, `answer`) VALUES
('hiiii', 'N090990', 'hi ra ksdlfjsd');

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
('RGUKT2009E41CSE', 'RGUKT', '2009', 'E4', '1', 'CSE', 'DM,CN,WT,TEL');

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
('RGUKT', 'RGUKT NUZVID', 'rgukt', 'jyolegend@gmail.com', '8297894942', 'nuzvid', 'www.rgukt.in', '');

-- --------------------------------------------------------

--
-- Table structure for table `college_updates`
--

CREATE TABLE IF NOT EXISTS `college_updates` (
  `sno` int(10) NOT NULL AUTO_INCREMENT,
  `cid` varchar(1000) NOT NULL,
  `subject` varchar(10000) NOT NULL,
  `info` varchar(10000) NOT NULL,
  `date` varchar(10000) NOT NULL,
  `cname` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `college_updates`
--

INSERT INTO `college_updates` (`sno`, `cid`, `subject`, `info`, `date`, `cname`) VALUES
(1, 'RGUKT', 'HI', 'HI THIS IS TESTING', '12-09-2014', '');

-- --------------------------------------------------------

--
-- Table structure for table `discussions`
--

CREATE TABLE IF NOT EXISTS `discussions` (
  `cid` varchar(10) NOT NULL,
  `sid` varchar(10) NOT NULL,
  `subject` varchar(10) NOT NULL,
  `message` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussions`
--

INSERT INTO `discussions` (`cid`, `sid`, `subject`, `message`) VALUES
('RGUKT', 'N090990', 'hiiii', 'lksjdflsdf');

-- --------------------------------------------------------

--
-- Table structure for table `RGUKT2009E41CSE`
--

CREATE TABLE IF NOT EXISTS `RGUKT2009E41CSE` (
  `cid` varchar(100) DEFAULT NULL,
  `sid` varchar(100) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `dtype` varchar(20) DEFAULT NULL,
  `DM` varchar(100) DEFAULT NULL,
  `CN` varchar(100) DEFAULT NULL,
  `WT` varchar(100) DEFAULT NULL,
  `TEL` varchar(100) DEFAULT NULL,
  `total` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('RGUKT', 'N090990', 'Jyothiram Pekala', 'rgukt', 'upendra rao', 'Male', 'jyothirampekala@gmail.com', '8297894942', 'nuzvid', '2009', 'E4', '1', 'CSE');

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
('RGUKT', 'N090990', 'Jyothiram Pekala', '2009', 'CSE', '', '1', '', '', 'E4');

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
