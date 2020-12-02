-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2019 at 08:08 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chatbot`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE IF NOT EXISTS `chats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` longtext NOT NULL,
  `chatbot` longtext NOT NULL,
  `date` datetime NOT NULL,
  `username` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `user`, `chatbot`, `date`, `username`) VALUES
(1, 'hi', 'I am Sorry but I am not exactly clear how to help you', '2019-07-16 18:59:39', ''),
(2, 'hi', 'Hello!!', '2019-07-16 19:04:30', '14012'),
(3, 'hi', 'Hello!!', '2019-07-16 19:04:48', ''),
(4, 'hi', 'Hello!!', '2019-07-16 19:36:13', ''),
(5, 'hi', 'Hello!!', '2019-07-16 19:48:10', '14047'),
(6, 'hi', 'Hello!!', '2019-07-16 19:55:24', ''),
(7, 'hi', 'Hello!!', '2019-07-16 19:56:08', ''),
(8, 'hi', 'Hello!!', '2019-07-16 19:57:17', ''),
(9, 'hi', 'Hello!!', '2019-07-16 19:57:55', ''),
(10, 'hi', 'Hello!!', '2019-07-16 19:59:58', '14013'),
(11, 'how are u', 'I am fine and you?', '2019-07-16 20:03:03', '14013'),
(12, 'how are u', 'I am fine and you?', '2019-07-16 20:03:45', '14047'),
(13, 'hi', 'Hello!!', '2019-07-16 20:07:16', '14047');

-- --------------------------------------------------------

--
-- Table structure for table `ict`
--

CREATE TABLE IF NOT EXISTS `ict` (
  `auto_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` varchar(100) NOT NULL DEFAULT '',
  `uname` varchar(255) NOT NULL,
  `upassword` varchar(100) DEFAULT NULL,
  `ustudentid` varchar(20) NOT NULL,
  `udesignation` varchar(255) NOT NULL,
  `uorganization` varchar(400) NOT NULL,
  `ucity` varchar(1000) DEFAULT NULL,
  `ucountry` varchar(100) DEFAULT NULL,
  `uimgurl` varchar(100) DEFAULT NULL,
  `ondate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usession` varchar(255) NOT NULL,
  `uexam` varchar(255) NOT NULL,
  `ubatch` varchar(20) NOT NULL,
  `ufather` varchar(255) NOT NULL,
  `umother` varchar(255) NOT NULL,
  `ublood` varchar(255) NOT NULL,
  `uphone` varchar(20) NOT NULL,
  `uemail` varchar(222) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `auto_id` (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=143 ;

--
-- Dumping data for table `ict`
--

INSERT INTO `ict` (`auto_id`, `uid`, `uname`, `upassword`, `ustudentid`, `udesignation`, `uorganization`, `ucity`, `ucountry`, `uimgurl`, `ondate`, `usession`, `uexam`, `ubatch`, `ufather`, `umother`, `ublood`, `uphone`, `uemail`) VALUES
(1, '14012', 'Tanzir Mehedi Shawon', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'IT-14012', 'B.Sc Engineering', 'ICT, MBSTU', 'Dhaka', 'Bangladesh', '14012.jpg', '2017-10-06 08:14:21', '2013-2014', 'Undergraduate', '11th Batch', 'SK. Shohidul Islam', 'MST. Tanzira Begum', 'AB+', '+8801521447020', 'tanzirmehedi.ict@gmail.com'),
(142, '14013', 'Alamin Hossain', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', '', '', NULL, NULL, '14013.jpg', '2019-07-16 17:51:26', '', '', '', '', '', '', '', 'alamin@gmail.com'),
(141, '14047', 'Riazul Islam', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', '', '', NULL, NULL, NULL, '2019-07-16 17:47:47', '', '', '', '', '', '', '', 'abcd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `question` longtext NOT NULL,
  `answer` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `answer`) VALUES
(1, 'hi', 'Hello!!'),
(2, 'how are u', 'I am fine and you?');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
