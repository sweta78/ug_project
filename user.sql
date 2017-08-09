-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 26, 2015 at 09:49 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `user`
--
CREATE DATABASE IF NOT EXISTS `user` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `user`;

-- --------------------------------------------------------

--
-- Table structure for table `cd`
--

CREATE TABLE IF NOT EXISTS `cd` (
  `UET_ROLL_NO` int(10) NOT NULL DEFAULT '0',
  `p_address1` varchar(50) DEFAULT NULL,
  `p_address2` varchar(50) DEFAULT NULL,
  `p_city` varchar(25) DEFAULT NULL,
  `P_STATE` varchar(25) NOT NULL,
  `P_PINCODE` int(10) NOT NULL,
  `P_MOBILENO` int(10) NOT NULL,
  `DISTANCE` int(5) NOT NULL,
  `C_ADDRESS1` varchar(50) NOT NULL,
  `C_ADDRESS2` varchar(50) NOT NULL,
  `C_CITY` varchar(25) NOT NULL,
  `C_STATE` varchar(20) NOT NULL,
  `C_PINCODE` int(10) NOT NULL,
  `C_MOBILENO` int(10) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `LG_ADDRESS1` varchar(50) NOT NULL,
  `LG_ADDRESS2` varchar(50) NOT NULL,
  `LG_MOBILENO` int(10) NOT NULL,
  PRIMARY KEY (`UET_ROLL_NO`,`EMAIL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cd`
--

INSERT INTO `cd` (`UET_ROLL_NO`, `p_address1`, `p_address2`, `p_city`, `P_STATE`, `P_PINCODE`, `P_MOBILENO`, `DISTANCE`, `C_ADDRESS1`, `C_ADDRESS2`, `C_CITY`, `C_STATE`, `C_PINCODE`, `C_MOBILENO`, `EMAIL`, `LG_ADDRESS1`, `LG_ADDRESS2`, `LG_MOBILENO`) VALUES
(13124857, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'up', 221005, 2147483647, 36, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'up', 221005, 2147483647, 'gunjan@gmail.com', '', '', 0),
(13174136, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'ankita@yahoo.com', '', '', 0),
(13174328, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'neha@yahoo.com', '', '', 0),
(13205987, 'village-kaimur post-samgarh', 'rajpat nagar', 'ghaziabaad', 'MP', 45006, 2147483647, 6, 'village-kaimur post-samgarh', 'rajpat nagar', 'ghaziabaad', 'MP', 45006, 2147483647, 'anamikas@gmail.com', 'H.no s 1/20 ', 'ravindrapur varanasi', 2147483647),
(13222548, 'House no-A25/33', '', 'Ballia', 'UP', 635241, 2147483647, 200, 'House no-A25/33', '', 'Ballia', 'UP', 635241, 2147483647, 'neha@gmail.com', '', '', 0),
(13247824, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'up', 221005, 2147483647, 36, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'up', 221005, 2147483647, 'payal04@yahoo.com', '', '', 0),
(13274114, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'anjali@yahoo.com', '', '', 0),
(13274325, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'neha@yahoo.com', '', '', 0),
(18112569, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'neha@yahoo.com', '', '', 0),
(18122524, 'Village-Darauli, Post-Durgawati', '', 'Kaimur', 'Bihar', 821005, 2147483647, 5, 'Village-Darauli, Post-Durgawati', '', 'Kaimur', 'Bihar', 821005, 2147483647, 'sangeetakumari@gmail.com', '', '', 0),
(18122548, 'House no-A25/40', '', 'Ranchi', 'Jharkhand', 512455, 2147483647, 700, 'House no-A25/40', '', 'Ranchi', 'Jharkhand', 512455, 2147483647, 'soumya@gmail.com', '', '', 0),
(18125648, 'village-paanpur post-sambhalgarh', '', 'gaya', 'Bihar', 450897, 2147483647, 350, 'village-paanpur post-sambhalgarh', '', 'gaya', 'Bihar', 450897, 2147483647, 'sandhayam@gmail.com', '', '', 0),
(18145624, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'up', 221005, 2147483647, 16, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'up', 221005, 2147483647, 'keerti@yahoo.com', '', '', 0),
(18163524, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'nidhi@yahoo.com', '', '', 0),
(18166549, 'H-No-2/A Lakshmi Street', '', 'Delhi', 'UP', 400021, 2147483647, 748, 'H-No-2/A Lakshmi Street', '', 'Delhi', 'UP', 400021, 2147483647, 'himani25@gmail.com', '', '', 0),
(18174155, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'anjali@yahoo.com', '', '', 0),
(18263572, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'nidhi@yahoo.com', '', '', 0),
(18274642, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'anjali@yahoo.com', '', '', 0),
(18274679, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'anjali@yahoo.com', '', '', 0),
(18278912, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'up', 221005, 2147483647, 16, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'up', 221005, 2147483647, 'babita@gmail.com', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cd2`
--

CREATE TABLE IF NOT EXISTS `cd2` (
  `UET_ROLL_NO` int(10) NOT NULL DEFAULT '0',
  `p_address1` varchar(50) DEFAULT NULL,
  `p_address2` varchar(50) DEFAULT NULL,
  `p_city` varchar(25) DEFAULT NULL,
  `P_STATE` varchar(25) NOT NULL,
  `P_PINCODE` int(10) NOT NULL,
  `P_MOBILENO` int(10) NOT NULL,
  `DISTANCE` int(5) NOT NULL,
  `C_ADDRESS1` varchar(50) NOT NULL,
  `C_ADDRESS2` varchar(50) NOT NULL,
  `C_CITY` varchar(25) NOT NULL,
  `C_STATE` varchar(20) NOT NULL,
  `C_PINCODE` int(10) NOT NULL,
  `C_MOBILENO` int(10) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `LG_ADDRESS1` varchar(50) NOT NULL,
  `LG_ADDRESS2` varchar(50) NOT NULL,
  `LG_MOBILENO` int(10) NOT NULL,
  PRIMARY KEY (`UET_ROLL_NO`,`EMAIL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cd2`
--

INSERT INTO `cd2` (`UET_ROLL_NO`, `p_address1`, `p_address2`, `p_city`, `P_STATE`, `P_PINCODE`, `P_MOBILENO`, `DISTANCE`, `C_ADDRESS1`, `C_ADDRESS2`, `C_CITY`, `C_STATE`, `C_PINCODE`, `C_MOBILENO`, `EMAIL`, `LG_ADDRESS1`, `LG_ADDRESS2`, `LG_MOBILENO`) VALUES
(13124589, 'ghhbnb', '', 'ghhbnb', 'ghhbnb', 214587, 2147483647, 857, 'ghhbnb', '', 'ghhbnb', 'ghhbnb', 214587, 2147483647, 'parul27@gmail.com', '', '', 0),
(13155245, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'roma15@yahoo.com', '', '', 0),
(13155264, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'roma15@yahoo.com', '', '', 0),
(13185014, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'neha@yahoo.com', '', '', 0),
(13185436, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'neha@yahoo.com', '', '', 0),
(13235478, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'neha@yahoo.com', '', '', 0),
(13255257, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'roma15@yahoo.com', '', '', 0),
(13255261, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'roma15@yahoo.com', '', '', 0),
(13255828, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'sonali05@yahoo.com', '', '', 0),
(13256026, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'neha@yahoo.com', '', '', 0),
(13265478, 'sghvhhg', '', 'sghvhhg', 'sghvhhg', 741524, 2147483647, 74, 'sghvhhg', '', 'sghvhhg', 'sghvhhg', 741524, 741542589, 'lovely12@gmail.com', '', '', 0),
(18135421, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'neha@yahoo.com', '', '', 0),
(18155124, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'roma15@yahoo.com', '', '', 0),
(18169547, 'H.No-78/12', '', 'DELHI', 'UP', 400215, 2147483647, 759, 'H.No-78/12', '', 'Delhi', 'UP', 400215, 2147483647, 'pallavi28@gmail.com', '', '', 0),
(18196872, 'c/o Arun Thakur,Himni lane', '', 'Gorakhpur', 'UP', 221452, 2147483647, 254, 'c/o Arun Thakur,Himni lane', '', 'Gorakhpur', 'UP', 221452, 2147483647, 'rohini24@gmail.com', 'Hiralal Mishra,H.No-2A,DLW', '', 2147483647),
(18235434, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'neha@yahoo.com', '', '', 0),
(18255218, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'roma15@yahoo.com', '', '', 0),
(18255228, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'roma15@yahoo.com', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cd3`
--

CREATE TABLE IF NOT EXISTS `cd3` (
  `UET_ROLL_NO` int(10) NOT NULL DEFAULT '0',
  `p_address1` varchar(50) DEFAULT NULL,
  `p_address2` varchar(50) DEFAULT NULL,
  `p_city` varchar(25) DEFAULT NULL,
  `P_STATE` varchar(25) NOT NULL,
  `P_PINCODE` int(10) NOT NULL,
  `P_MOBILENO` int(10) NOT NULL,
  `DISTANCE` int(5) NOT NULL,
  `C_ADDRESS1` varchar(50) NOT NULL,
  `C_ADDRESS2` varchar(50) NOT NULL,
  `C_CITY` varchar(25) NOT NULL,
  `C_STATE` varchar(20) NOT NULL,
  `C_PINCODE` int(10) NOT NULL,
  `C_MOBILENO` int(10) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `LG_ADDRESS1` varchar(50) NOT NULL,
  `LG_ADDRESS2` varchar(50) NOT NULL,
  `LG_MOBILENO` int(10) NOT NULL,
  PRIMARY KEY (`UET_ROLL_NO`,`EMAIL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cd3`
--

INSERT INTO `cd3` (`UET_ROLL_NO`, `p_address1`, `p_address2`, `p_city`, `P_STATE`, `P_PINCODE`, `P_MOBILENO`, `DISTANCE`, `C_ADDRESS1`, `C_ADDRESS2`, `C_CITY`, `C_STATE`, `C_PINCODE`, `C_MOBILENO`, `EMAIL`, `LG_ADDRESS1`, `LG_ADDRESS2`, `LG_MOBILENO`) VALUES
(1314665, 'lane no. 123', '', 'gorakhpur', 'up', 224522, 74216325, 275, 'lane no. 123', '', 'gorakhpur', 'up', 224522, 566634552, '', '', '', 0),
(1314666, 'lane no. 123', '', 'gorakhpur', 'up', 224522, 74216325, 275, 'lane no. 123', '', 'gorakhpur', 'up', 224522, 566634552, '', '', '', 0),
(1314667, 'lane no. 123', '', 'gorakhpur', 'up', 224522, 74216325, 275, 'lane no. 123', '', 'gorakhpur', 'up', 224522, 566634552, '', '', '', 0),
(1324665, 'lane no. 123', '', 'gorakhpur', 'up', 224522, 74216325, 275, 'lane no. 123', '', 'gorakhpur', 'up', 224522, 566634552, '', '', '', 0),
(1324666, 'lane no. 123', '', 'gorakhpur', 'up', 224522, 74216325, 275, 'lane no. 123', '', 'gorakhpur', 'up', 224522, 566634552, '', '', '', 0),
(1324667, 'lane no. 123', '', 'gorakhpur', 'up', 224522, 74216325, 275, 'lane no. 123', '', 'gorakhpur', 'up', 224522, 566634552, '', '', '', 0),
(1814577, 'lane no-4 houseno-2', '', 'azamgarh', 'up', 220552, 2147483647, 200, 'lane no-4 houseno-2', '', 'azamgarh', 'up', 220552, 2147483647, 'div@gmail.com', '', '', 0),
(1814578, 'H.no s 1/8-a-4', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4', '', 'Varanasi', 'UP', 221005, 2147483647, 'sakshi15@yahoo.com', '', '', 0),
(1814665, 'lane no. 123', '', 'gorakhpur', 'up', 224522, 74216325, 275, 'lane no. 123', '', 'gorakhpur', 'up', 224522, 566634552, '', '', '', 0),
(1814666, 'lane no. 123', '', 'gorakhpur', 'up', 224522, 74216325, 275, 'lane no. 123', '', 'gorakhpur', 'up', 224522, 566634552, '', '', '', 0),
(1824666, 'lane no. 123', '', 'gorakhpur', 'up', 224522, 74216325, 275, 'lane no. 123', '', 'gorakhpur', 'up', 224522, 566634552, '', '', '', 0),
(1824667, 'lane no. 123', '', 'gorakhpur', 'up', 224522, 74216325, 275, 'lane no. 123', '', 'gorakhpur', 'up', 224522, 566634552, '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cdh`
--

CREATE TABLE IF NOT EXISTS `cdh` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `p_address1` varchar(30) NOT NULL,
  `p_address2` varchar(30) NOT NULL,
  `p_city` varchar(25) NOT NULL,
  `P_STATE` varchar(25) NOT NULL,
  `P_PINCODE` int(6) NOT NULL,
  `P_MOBILENO` int(10) NOT NULL,
  `DISTANCE` int(5) NOT NULL,
  `C_ADDRESS1` varchar(35) NOT NULL,
  `C_ADDRESS2` varchar(35) NOT NULL,
  `C_CITY` varchar(25) NOT NULL,
  `C_STATE` varchar(25) NOT NULL,
  `C_PINCODE` int(6) NOT NULL,
  `C_MOBILENO` int(10) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `LG_ADDRESS1` varchar(30) NOT NULL,
  `LG_ADDRESS2` varchar(30) NOT NULL,
  `LG_MOBILENO` int(10) NOT NULL,
  PRIMARY KEY (`UET_ROLL_NO`,`EMAIL`),
  UNIQUE KEY `UET_ROLL_NO` (`UET_ROLL_NO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cdh`
--

INSERT INTO `cdh` (`UET_ROLL_NO`, `p_address1`, `p_address2`, `p_city`, `P_STATE`, `P_PINCODE`, `P_MOBILENO`, `DISTANCE`, `C_ADDRESS1`, `C_ADDRESS2`, `C_CITY`, `C_STATE`, `C_PINCODE`, `C_MOBILENO`, `EMAIL`, `LG_ADDRESS1`, `LG_ADDRESS2`, `LG_MOBILENO`) VALUES
(13124857, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'up', 221005, 2147483647, 36, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'up', 221005, 2147483647, 'gunjan@gmail.com', '', '', 0),
(13174136, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'ankita@yahoo.com', '', '', 0),
(13174328, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'neha@yahoo.com', '', '', 0),
(13222548, 'House no-A25/33', '', 'Ballia', 'UP', 635241, 2147483647, 200, 'House no-A25/33', '', 'Ballia', 'UP', 635241, 2147483647, 'neha@gmail.com', '', '', 0),
(13247824, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'up', 221005, 2147483647, 36, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'up', 221005, 2147483647, 'payal04@yahoo.com', '', '', 0),
(13274114, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'anjali@yahoo.com', '', '', 0),
(13274325, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'neha@yahoo.com', '', '', 0),
(18112569, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'neha@yahoo.com', '', '', 0),
(18122548, 'House no-A25/40', '', 'Ranchi', 'Jharkhand', 512455, 2147483647, 700, 'House no-A25/40', '', 'Ranchi', 'Jharkhand', 512455, 2147483647, 'soumya@gmail.com', '', '', 0),
(18125648, 'village-paanpur post-sambhalga', '', 'gaya', 'Bihar', 450897, 2147483647, 350, 'village-paanpur post-sambhalgarh', '', 'gaya', 'Bihar', 450897, 2147483647, 'sandhayam@gmail.com', '', '', 0),
(18145624, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'up', 221005, 2147483647, 16, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'up', 221005, 2147483647, 'keerti@yahoo.com', '', '', 0),
(18163524, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'nidhi@yahoo.com', '', '', 0),
(18166549, 'H-No-2/A Lakshmi Street', '', 'Delhi', 'UP', 400021, 2147483647, 748, 'H-No-2/A Lakshmi Street', '', 'Delhi', 'UP', 400021, 2147483647, 'himani25@gmail.com', '', '', 0),
(18174155, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'anjali@yahoo.com', '', '', 0),
(18263572, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'nidhi@yahoo.com', '', '', 0),
(18274642, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'anjali@yahoo.com', '', '', 0),
(18274679, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'anjali@yahoo.com', '', '', 0),
(18278912, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'up', 221005, 2147483647, 16, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'up', 221005, 2147483647, 'babita@gmail.com', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cdh2`
--

CREATE TABLE IF NOT EXISTS `cdh2` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `p_address1` varchar(30) NOT NULL,
  `p_address2` varchar(30) NOT NULL,
  `p_city` varchar(25) NOT NULL,
  `P_STATE` varchar(25) NOT NULL,
  `P_PINCODE` int(6) NOT NULL,
  `P_MOBILENO` int(10) NOT NULL,
  `DISTANCE` int(5) NOT NULL,
  `C_ADDRESS1` varchar(35) NOT NULL,
  `C_ADDRESS2` varchar(35) NOT NULL,
  `C_CITY` varchar(25) NOT NULL,
  `C_STATE` varchar(25) NOT NULL,
  `C_PINCODE` int(6) NOT NULL,
  `C_MOBILENO` int(10) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `LG_ADDRESS1` varchar(30) NOT NULL,
  `LG_ADDRESS2` varchar(30) NOT NULL,
  `LG_MOBILENO` int(10) NOT NULL,
  PRIMARY KEY (`UET_ROLL_NO`,`EMAIL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cdh2`
--

INSERT INTO `cdh2` (`UET_ROLL_NO`, `p_address1`, `p_address2`, `p_city`, `P_STATE`, `P_PINCODE`, `P_MOBILENO`, `DISTANCE`, `C_ADDRESS1`, `C_ADDRESS2`, `C_CITY`, `C_STATE`, `C_PINCODE`, `C_MOBILENO`, `EMAIL`, `LG_ADDRESS1`, `LG_ADDRESS2`, `LG_MOBILENO`) VALUES
(13124589, 'ghhbnb', '', 'ghhbnb', 'ghhbnb', 214587, 2147483647, 857, 'ghhbnb', '', 'ghhbnb', 'ghhbnb', 214587, 2147483647, 'parul27@gmail.com', '', '', 0),
(13185014, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'neha@yahoo.com', '', '', 0),
(13265478, 'sghvhhg', '', 'sghvhhg', 'sghvhhg', 741524, 2147483647, 74, 'sghvhhg', '', 'sghvhhg', 'sghvhhg', 741524, 741542589, 'lovely12@gmail.com', '', '', 0),
(18135421, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'neha@yahoo.com', '', '', 0),
(18169547, 'H.No-78/12', '', 'DELHI', 'UP', 400215, 2147483647, 759, 'H.No-78/12', '', 'Delhi', 'UP', 400215, 2147483647, 'pallavi28@gmail.com', '', '', 0),
(18196872, 'c/o Arun Thakur,Himni lane', '', 'Gorakhpur', 'UP', 221452, 2147483647, 254, 'c/o Arun Thakur,Himni lane', '', 'Gorakhpur', 'UP', 221452, 2147483647, 'rohini24@gmail.com', 'Hiralal Mishra,H.No-2A,DLW', '', 2147483647),
(18255218, 'H.no s 1/8-a-4-g-5', '', 'varanasi', 'UP', 221005, 2147483647, 22, 'H.no s 1/8-a-4-g-5', '', 'Varanasi', 'UP', 221005, 2147483647, 'roma15@yahoo.com', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cdh3`
--

CREATE TABLE IF NOT EXISTS `cdh3` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `p_address1` varchar(30) NOT NULL,
  `p_address2` varchar(30) NOT NULL,
  `p_city` varchar(25) NOT NULL,
  `P_STATE` varchar(25) NOT NULL,
  `P_PINCODE` int(6) NOT NULL,
  `P_MOBILENO` int(10) NOT NULL,
  `DISTANCE` int(5) NOT NULL,
  `C_ADDRESS1` varchar(35) NOT NULL,
  `C_ADDRESS2` varchar(35) NOT NULL,
  `C_CITY` varchar(25) NOT NULL,
  `C_STATE` varchar(25) NOT NULL,
  `C_PINCODE` int(6) NOT NULL,
  `C_MOBILENO` int(10) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `LG_ADDRESS1` varchar(30) NOT NULL,
  `LG_ADDRESS2` varchar(30) NOT NULL,
  `LG_MOBILENO` int(10) NOT NULL,
  PRIMARY KEY (`UET_ROLL_NO`,`EMAIL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hseats`
--

CREATE TABLE IF NOT EXISTS `hseats` (
  `HNAME` varchar(25) NOT NULL,
  `TOTAL_SEATS` int(3) NOT NULL,
  `GEN_MATH` int(2) NOT NULL,
  `GEN_BIO` int(2) NOT NULL,
  `GEN_ARTS` int(2) NOT NULL,
  `GEN_SOCIAL` int(2) NOT NULL,
  `SC_MATH` int(2) NOT NULL,
  `SC_BIO` int(2) NOT NULL,
  `SC_ARTS` int(2) NOT NULL,
  `SC_SOCIAL` int(2) NOT NULL,
  `ST_MATH` int(2) NOT NULL,
  `ST_BIO` int(2) NOT NULL,
  `ST_ARTS` int(2) NOT NULL,
  `ST_SOCIAL` int(2) NOT NULL,
  `PH` int(2) NOT NULL,
  PRIMARY KEY (`HNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hseats`
--

INSERT INTO `hseats` (`HNAME`, `TOTAL_SEATS`, `GEN_MATH`, `GEN_BIO`, `GEN_ARTS`, `GEN_SOCIAL`, `SC_MATH`, `SC_BIO`, `SC_ARTS`, `SC_SOCIAL`, `ST_MATH`, `ST_BIO`, `ST_ARTS`, `ST_SOCIAL`, `PH`) VALUES
('DJ', 150, 12, 28, 26, 45, 3, 6, 6, 8, 2, 0, 2, 5, 2),
('JK', 250, 24, 46, 46, 71, 5, 10, 10, 12, 3, 5, 5, 6, 7),
('SK', 192, 16, 33, 35, 50, 1, 5, 5, 6, 0, 4, 4, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `USERNAME` varchar(25) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  `ACCESS` int(2) NOT NULL,
  PRIMARY KEY (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`USERNAME`, `PASSWORD`, `ACCESS`) VALUES
('djadmin', 'syhostel1', 1),
('jkadmin', 'tyhostel1', 1),
('messincharge1', 'mess1', 2),
('messincharge2', 'mess2', 2),
('messincharge3', 'mess3', 2),
('skadmin', 'fyhostel1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mess`
--

CREATE TABLE IF NOT EXISTS `mess` (
  `ROOMNO` int(3) NOT NULL,
  `SEATNO` varchar(2) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `DAYS` int(2) NOT NULL,
  `EXTRA_CHARGE` int(3) NOT NULL,
  `DESCRIPTION` varchar(150) NOT NULL,
  `FEES` int(4) NOT NULL,
  `STATUS` varchar(15) NOT NULL DEFAULT 'UNPAID',
  PRIMARY KEY (`ROOMNO`,`SEATNO`,`NAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mess`
--

INSERT INTO `mess` (`ROOMNO`, `SEATNO`, `NAME`, `DAYS`, `EXTRA_CHARGE`, `DESCRIPTION`, `FEES`, `STATUS`) VALUES
(1, 'A', 'Soumya Roy', 24, 0, 'NO EXTRA CHARGE', 1680, 'PAID'),
(4, 'A', 'Gunjan Pandey', 28, 10, 'Milk for one day', 1970, 'UNPAID');

-- --------------------------------------------------------

--
-- Table structure for table `mess2`
--

CREATE TABLE IF NOT EXISTS `mess2` (
  `ROOMNO` int(3) NOT NULL,
  `SEATNO` varchar(2) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `DAYS` int(2) NOT NULL,
  `EXTRA_CHARGE` int(3) NOT NULL,
  `DESCRIPTION` varchar(150) NOT NULL,
  `FEES` int(4) NOT NULL,
  `STATUS` varchar(15) NOT NULL DEFAULT 'UNPAID',
  PRIMARY KEY (`ROOMNO`,`SEATNO`,`NAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mess3`
--

CREATE TABLE IF NOT EXISTS `mess3` (
  `ROOMNO` int(3) NOT NULL,
  `SEATNO` varchar(2) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `DAYS` int(2) NOT NULL,
  `EXTRA_CHARGE` int(3) NOT NULL,
  `DESCRIPTION` varchar(150) NOT NULL,
  `FEES` int(4) NOT NULL,
  `STATUS` varchar(15) NOT NULL DEFAULT 'UNPAID',
  PRIMARY KEY (`ROOMNO`,`SEATNO`,`NAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pd`
--

CREATE TABLE IF NOT EXISTS `pd` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `F_NAME` varchar(25) NOT NULL,
  `M_NAME` varchar(25) NOT NULL,
  `UET_INDEX` int(3) NOT NULL,
  `DOB` date NOT NULL,
  `PERCENTAGE` decimal(5,2) NOT NULL,
  `CATEGORY` varchar(10) NOT NULL,
  `PH` varchar(5) NOT NULL,
  `COURSE` varchar(15) NOT NULL,
  `YEAR` varchar(10) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(15) NOT NULL,
  `PIC` text NOT NULL,
  `H_OR_DS` varchar(3) NOT NULL,
  PRIMARY KEY (`UET_ROLL_NO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pd`
--

INSERT INTO `pd` (`UET_ROLL_NO`, `NAME`, `F_NAME`, `M_NAME`, `UET_INDEX`, `DOB`, `PERCENTAGE`, `CATEGORY`, `PH`, `COURSE`, `YEAR`, `USERNAME`, `PASSWORD`, `PIC`, `H_OR_DS`) VALUES
(13124857, 'Gunjan Pandey', 'shailendra Pandey', 'suman pandey', 145, '1995-03-03', '65.00', 'GEN', 'NO', 'B.A(Arts)', '1st yr', 'gunjan03', 'gunjan03', 'Gunjan Pandey.jpg', 'H'),
(13174136, 'Ankita Sonkar', 'kamal sonkar', 'himangi sonkar', 144, '1995-07-07', '74.00', 'SC', 'NO', 'B.A(Arts)', '1st yr', 'ankita07', 'ankita07', 'Ankita Tripathi.jpg', 'H'),
(13174328, 'Vartika', 'vartika_f', 'vartika_m', 125, '1995-11-05', '85.00', 'ST', 'NO', 'B.A(Soc.)', '1st yr', 'vartika_1', 'vartika1', 'Sonali Yadav.jpg', 'H'),
(13205987, 'Anamika Sharma', 'Mahendra sharma', 'Manisha sharma', 195, '1993-05-05', '89.20', 'ST', 'YES', 'B.A(Soc.)', '1st yr', 'anamika31', 'anamika31', 'Picture1.jpg', ''),
(13222548, 'Neha Baranwal', 'Om Prakash Baranwal', 'Khushi Baranwal', 254, '1992-12-29', '75.69', 'GEN', 'NO', 'B.A(Soc.)', '1st yr', 'neha29', 'neha29', '6.jpg', 'H'),
(13247824, 'Payal Singh', 'shailendra singh', 'smriti singh', 135, '1995-04-04', '76.00', 'GEN', 'NO', 'B.A(Soc.)', '1st yr', 'payal04', 'payal04', 'Payal Kanaujiya.jpg', 'H'),
(13274114, 'Anjali Sonkar', 'kamal sonkar', 'himangi sonkar', 144, '1995-08-08', '74.00', 'SC', 'NO', 'B.A(Soc.)', '1st yr', 'anjali08', 'anjali08', 'anjali-singh.jpg', 'H'),
(13274325, 'Sumita', 'sumita_f', 'sumita_m', 105, '1995-11-06', '85.00', 'OBC', 'NO', 'B.A(Soc.)', '1st yr', 'sumita_1', 'sumita1', 'sumita Srivastava.jpg', 'H'),
(18112569, 'Neha', 'neha_f', 'nehaa_m', 145, '1995-11-15', '85.00', 'ST', 'NO', 'B.Sc(Maths)', '1st yr', 'neha_1', 'neha_12', 'Neha Yadav.jpg', 'H'),
(18122524, 'Sangeeta', 'Babban Prasad', 'Kusum Prasad', 205, '1996-07-09', '69.25', 'SC', 'NO', 'B.Sc(Maths)', '1st yr', 'sangeeta09', 'sangeeta09', '349757_P.jpg', ''),
(18122548, 'Soumya Roy', 'Rajendra Roy', 'Rajshri Roy', 182, '1993-05-25', '91.00', 'GEN', 'NO', 'B.Sc(Bio)', '1st yr', 'soumya25', 'soumya25', '4875.jpg', 'H'),
(18125648, 'Sandhya Maurya', 'kailash maurya', 'Kashi Maurya', 182, '1994-11-04', '85.00', 'OBC', 'NO', 'B.Sc(Bio)', '1st yr', 'sandhya04', 'sandhya04', '5.jpg', 'H'),
(18145624, 'Keerti Singh', 'Samar Singh', 'Komal singh', 250, '1995-01-01', '85.00', 'GEN', 'NO', 'B.Sc(Maths)', '1st yr', 'keerti01', 'keerti01', 'Keerti.jpg', 'H'),
(18163524, 'Nidhi Sonkar', 'kamal sonkar', 'himangi sonkar', 237, '1995-05-05', '74.00', 'SC', 'NO', 'B.Sc(Maths)', '1st yr', 'nidhi05', 'nidhi05', 'Nidhi Roy.jpg', 'H'),
(18166549, 'Himani Singh', 'Hemant Kumar', 'Kajal Singh', 251, '1993-08-25', '85.00', 'GEN', 'NO', 'B.Sc(Maths)', '1st yr', 'himani25', 'himani25', 'Picture 003.jpg', 'H'),
(18174155, 'Anjali', 'anjali_f', 'anjali_m', 156, '1995-08-31', '74.00', 'SC', 'YES', 'B.Sc(Maths)', '1st yr', 'anjali_1', 'anjali_1', 'Anjali=Bank-Maths.jpg', 'H'),
(18263572, 'Alka Sonkar', 'kamal sonkar', 'himangi sonkar', 237, '1995-06-06', '74.00', 'SC', 'NO', 'B.Sc(Bio)', '1st yr', 'alka06', 'alka06', 'Alka Raghuvanshi.jpg', 'H'),
(18274642, 'Diksha', 'diksha_f', 'diksha_m', 210, '0000-00-00', '85.00', 'GEN', 'YES', 'B.Sc(Bio)', '1st yr', 'diksha_1', 'diksha_1', 'Ankita Mishra.jpg', 'H'),
(18274679, 'Deepa', 'deepa_f', 'deepa_m', 145, '1995-09-15', '85.00', 'ST', 'YES', 'B.Sc(Bio)', '1st yr', 'deepa_1', 'deepa_1', 'Jyoti Singh.jpg', 'H'),
(18278912, 'Babita Kumari', 'Samar kumar', 'Komal devi', 213, '1995-02-02', '78.00', 'GEN', 'NO', 'B.Sc(Bio)', '1st yr', 'babita02', 'babita02', 'Babita Kumari.jpg', 'H');

-- --------------------------------------------------------

--
-- Table structure for table `pd2`
--

CREATE TABLE IF NOT EXISTS `pd2` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `F_NAME` varchar(25) NOT NULL,
  `M_NAME` varchar(25) NOT NULL,
  `UET_INDEX` decimal(5,2) NOT NULL,
  `DOB` date NOT NULL,
  `PERCENTAGE` decimal(5,2) NOT NULL,
  `CATEGORY` varchar(10) NOT NULL,
  `PH` varchar(5) NOT NULL,
  `COURSE` varchar(15) NOT NULL,
  `YEAR` varchar(10) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(15) NOT NULL,
  `PIC` text NOT NULL,
  `H_OR_DS` varchar(3) NOT NULL,
  PRIMARY KEY (`UET_ROLL_NO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pd2`
--

INSERT INTO `pd2` (`UET_ROLL_NO`, `NAME`, `F_NAME`, `M_NAME`, `UET_INDEX`, `DOB`, `PERCENTAGE`, `CATEGORY`, `PH`, `COURSE`, `YEAR`, `USERNAME`, `PASSWORD`, `PIC`, `H_OR_DS`) VALUES
(13124589, 'Parul Singh', 'Prakash Singh', 'Kaushalya Singh', '8.00', '1991-05-27', '211.00', 'GEN', 'NO', 'B.A(Arts)', '2nd yr', 'parul27', 'parul27', '349757_P.jpg', 'H'),
(13155245, 'Priyanka', 'Priyanka_f', 'Priyanka_m', '8.70', '1992-03-25', '225.00', 'SC', 'NO', 'B.A(Arts)', '2nd yr', 'priyanka_2', 'priyanka_2', 'Ankita Tripathi.jpg', ''),
(13155264, 'Deepti Verma', 'Deepti_f', 'Deepti_m', '8.20', '1992-03-10', '210.00', 'ST', 'NO', 'B.A(Arts)', '2nd yr', 'deepti_2', 'deepti_2', 'Jyoti Singh.jpg', ''),
(13185014, 'sumitra', 'sumitra_f', 'sumitra_m', '7.00', '1994-12-25', '85.00', 'GEN', 'YES', 'B.A(Arts)', '2nd yr', 'sumitra_1', 'sumitra123', 'Ruby.jpg', 'H'),
(13185436, 'komal', 'komal_f', 'komal_m', '8.00', '1994-12-12', '85.00', 'GEN', 'NO', 'B.A(Arts)', '2nd yr', 'komal_1', 'komal123', 'komal.jpg', ''),
(13235478, 'pallavi', 'pallavi_f', 'pallavi_m', '9.00', '1994-12-02', '85.00', 'GEN', 'NO', 'B.A(Soc.)', '2nd yr', 'pallavi_1', 'pallavi5', 'Pallavi Tripathi.jpg', ''),
(13255257, 'Payal Raj', 'Payal_f', 'Payal_m', '8.40', '1992-03-21', '245.00', 'SC', 'NO', 'B.A(Soc.)', '2nd yr', 'payal_2', 'payal_2', 'Karuna Chaubey.jpg', ''),
(13255261, 'Deepali Verma', 'Deepali_f', 'Deepali_m', '8.20', '1992-03-15', '215.00', 'ST', 'NO', 'B.A(Soc.)', '2nd yr', 'deepali_2', 'deepali_2', 'Pooja Sonkar.jpg', ''),
(13255828, 'sonali', 'sonali_f', 'sonali_m', '8.50', '1992-02-05', '265.00', 'SC', 'NO', 'B.Sc(Bio)', '2nd yr', 'sonal_2', 'sonali_2', 'anjali-singh.jpg', ''),
(13256026, 'sonal', 'sonal_f', 'sonal_m', '8.00', '1994-12-28', '85.00', 'GEN', 'YES', 'B.A(Soc.)', '2nd yr', 'sonal_1', 'sonal56', 'Priya Dey.jpg', ''),
(13265478, 'Lovely Sharma', 'Kartik Sharma', 'Komal Sharma', '8.00', '1992-04-12', '214.00', 'GEN', 'NO', 'B.A(Soc.)', '2nd yr', 'lovely12', 'lovely12', '4.jpg', 'H'),
(18135421, 'mehak', 'mehak_f', 'mehak_m', '7.00', '1994-01-01', '85.00', 'GEN', 'NO', 'B.Sc(Maths)', '2nd yr', 'mehak_1', 'mehak12', 'Mehak.jpg', 'H'),
(18155124, 'Roma', 'Roma_f', 'Roma_m', '8.60', '1992-03-15', '215.00', 'SC', 'NO', 'B.Sc(Maths)', '2nd yr', 'roma_2', 'roma_2', 'Ankita Mishra.jpg', ''),
(18169547, 'PALLAVI RAJ', 'SHASHANK RAJ', 'SUMAN RAJ', '9.00', '1994-06-28', '269.00', 'GEN', 'NO', 'B.Sc(Maths)', '2nd yr', 'pallavi28', 'pallavi28', '5.jpg', 'H'),
(18196872, 'Rohini Mishra', 'Aakash Mishra', 'Pallavi Mishra', '9.00', '1992-04-24', '241.00', 'GEN', 'NO', 'B.Sc(Maths)', '2nd yr', 'rohini24', 'rohini24', '2.jpg', 'H'),
(18235434, 'pinki', 'pinki_f', 'pinki_m', '9.00', '1994-02-02', '85.00', 'GEN', 'NO', 'B.Sc(Bio)', '2nd yr', 'pinki_1', 'pinki5', 'Pinki.jpg', ''),
(18255218, 'Kanchan', 'Kanchan_f', 'Kanchan_m', '8.12', '1992-03-22', '224.00', 'ST', 'NO', 'B.Sc(Bio)', '2nd yr', 'kanchan_2', 'kanchan_2', 'Khushboo Singh.jpg', 'H'),
(18255228, 'Karishma Gupta', 'Karishma_f', 'Karishma_m', '8.12', '1992-03-02', '220.00', 'ST', 'NO', 'B.Sc(Maths)', '2nd yr', 'karishma_2', 'karishma_2', 'Jyoti Singh.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `pd3`
--

CREATE TABLE IF NOT EXISTS `pd3` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `F_NAME` varchar(25) NOT NULL,
  `M_NAME` varchar(25) NOT NULL,
  `UET_INDEX` decimal(5,2) NOT NULL,
  `DOB` date NOT NULL,
  `PERCENTAGE` decimal(5,2) NOT NULL,
  `CATEGORY` varchar(10) NOT NULL,
  `PH` varchar(5) NOT NULL,
  `COURSE` varchar(15) NOT NULL,
  `YEAR` varchar(10) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(15) NOT NULL,
  `PIC` text NOT NULL,
  `H_OR_DS` varchar(3) NOT NULL,
  PRIMARY KEY (`UET_ROLL_NO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pd3`
--

INSERT INTO `pd3` (`UET_ROLL_NO`, `NAME`, `F_NAME`, `M_NAME`, `UET_INDEX`, `DOB`, `PERCENTAGE`, `CATEGORY`, `PH`, `COURSE`, `YEAR`, `USERNAME`, `PASSWORD`, `PIC`, `H_OR_DS`) VALUES
(1314665, 'Pooja', 'Pooja_f', 'Pooja_m', '8.90', '1993-10-18', '165.00', 'ST', 'NO', 'B.A(Arts)', '3rd yr', 'pooja_3', 'pooja_3', 'Amrita.jpg', ''),
(1314666, 'Sonali', 'Sonali_f', 'Sonali_m', '8.60', '1992-12-15', '216.00', 'GEN', 'NO', 'B.A(Arts)', '3rd yr', 'sonali_3', 'sonali_3', 'Manju Tripathi.jpg', ''),
(1314667, 'Arnika', 'Arnika_f', 'Arnika_m', '7.50', '1993-11-15', '190.00', 'SC', 'NO', 'B.A(Arts)', '3rd yr', 'arnika_3', 'arnika_3', 'Reena Kumari Meena.jpg', ''),
(1324665, 'Shruti', 'Shruti_f', 'Shruti_m', '7.90', '1993-11-07', '165.00', 'ST', 'NO', 'B.A(Soc.)', '3rd yr', 'shruti_3', 'shruti_3', 'Saumya Verma.jpg', ''),
(1324666, 'Maya', 'Maya_f', 'Maya_m', '8.60', '1992-09-15', '189.00', 'GEN', 'NO', 'B.A(Soc.)', '3rd yr', 'maya_3', 'maya_3', 'Mayanka Goyal.jpg', ''),
(1324667, 'Solanki', 'Solanki_f', 'Solanki_m', '7.50', '1993-11-15', '165.00', 'SC', 'NO', 'B.A(Soc.)', '3rd yr', 'solanki_3', 'Solanki', 'Saumya Verma.jpg', ''),
(1814577, 'Divya', 'Divya_f', 'Divya_m', '9.50', '1992-03-15', '205.00', 'GEN', 'NO', 'B.Sc(Maths)', '3rd yr', 'divya_3', 'divya_3', 'Indu Singh.jpg', ''),
(1814578, 'Sakshi Sharma', 'Sakshi_f', 'Sakshi_m', '9.20', '1992-03-15', '85.00', 'GEN', 'NO', 'B.Sc(Maths)', '3rd yr', 'sakshi_3', 'sakshi_3', 'Indu Singh.jpg', ''),
(1814665, 'Pakhi', 'Pakhi_f', 'Pakhi_m', '8.50', '1993-10-18', '165.00', 'ST', 'NO', 'B.Sc(Maths)', '3rd yr', 'pakhi_3', 'pakhi_3', 'Anjali Singh.jpg', ''),
(1814666, 'Priya', 'Priya_f', 'Priya_m', '7.60', '1992-09-15', '185.00', 'SC', 'NO', 'B.Sc(Maths)', '3rd yr', 'priya_3', 'priya_3', 'Pratistha Singh.jpg', ''),
(1824666, 'Shumona', 'Shumona_f', 'Shumona_m', '9.10', '1992-12-14', '206.00', 'GEN', 'NO', 'B.Sc(Bio)', '3rd yr', 'shumona_3', 'shumona_3', 'Mamata Kumari.jpg', ''),
(1824667, 'Anamika', 'Anamika_f', 'Anamika_m', '8.20', '1993-11-15', '194.00', 'SC', 'NO', 'B.Sc(Bio)', '3rd yr', 'anamika_3', 'anamika_3', 'Priyanka Yadav.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `pdh`
--

CREATE TABLE IF NOT EXISTS `pdh` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `F_NAME` varchar(25) NOT NULL,
  `M_NAME` varchar(25) NOT NULL,
  `UET_INDEX` int(3) NOT NULL,
  `DOB` date NOT NULL,
  `PERCENTAGE` decimal(5,2) NOT NULL,
  `CATEGORY` varchar(15) NOT NULL,
  `PH` varchar(5) NOT NULL,
  `COURSE` varchar(15) NOT NULL,
  `YEAR` varchar(10) NOT NULL,
  `USERNAME` varchar(15) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  `PIC` text NOT NULL,
  PRIMARY KEY (`UET_ROLL_NO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdh`
--

INSERT INTO `pdh` (`UET_ROLL_NO`, `NAME`, `F_NAME`, `M_NAME`, `UET_INDEX`, `DOB`, `PERCENTAGE`, `CATEGORY`, `PH`, `COURSE`, `YEAR`, `USERNAME`, `PASSWORD`, `PIC`) VALUES
(13124857, 'Gunjan Pandey', 'shailendra Pandey', 'suman pandey', 145, '1995-03-03', '65.00', 'GEN', 'NO', 'B.A(Arts)', '1st yr', 'gunjan03', 'gunjan03', 'Gunjan Pandey.jpg'),
(13174136, 'Ankita Sonkar', 'kamal sonkar', 'himangi sonkar', 144, '1995-07-07', '74.00', 'SC', 'NO', 'B.A(Arts)', '1st yr', 'ankita07', 'ankita07', 'Ankita Tripathi.jpg'),
(13174328, 'Vartika', 'vartika_f', 'vartika_m', 125, '1995-11-05', '85.00', 'ST', 'NO', 'B.A(Soc.)', '1st yr', 'vartika_1', 'vartika1', 'Sonali Yadav.jpg'),
(13222548, 'Neha Baranwal', 'Om Prakash Baranwal', 'Khushi Baranwal', 254, '1992-12-29', '75.69', 'GEN', 'NO', 'B.A(Soc.)', '1st yr', 'neha29', 'neha29', '6.jpg'),
(13247824, 'Payal Singh', 'shailendra singh', 'smriti singh', 135, '1995-04-04', '76.00', 'GEN', 'NO', 'B.A(Soc.)', '1st yr', 'payal04', 'payal04', 'Payal Kanaujiya.jpg'),
(13274114, 'Anjali Sonkar', 'kamal sonkar', 'himangi sonkar', 144, '1995-08-08', '74.00', 'SC', 'NO', 'B.A(Soc.)', '1st yr', 'anjali08', 'anjali08', 'anjali-singh.jpg'),
(13274325, 'Sumita', 'sumita_f', 'sumita_m', 105, '1995-11-06', '85.00', 'OBC', 'NO', 'B.A(Soc.)', '1st yr', 'sumita_1', 'sumita1', 'sumita Srivastava.jpg'),
(18112569, 'Neha', 'neha_f', 'nehaa_m', 145, '1995-11-15', '85.00', 'ST', 'NO', 'B.Sc(Maths)', '1st yr', 'neha_1', 'neha_12', 'Neha Yadav.jpg'),
(18122548, 'Soumya Roy', 'Rajendra Roy', 'Rajshri Roy', 182, '1993-05-25', '91.00', 'GEN', 'NO', 'B.Sc(Bio)', '1st yr', 'soumya25', 'soumya25', '4875.jpg'),
(18125648, 'Sandhya Maurya', 'kailash maurya', 'Kashi Maurya', 182, '1994-11-04', '85.00', 'OBC', 'NO', 'B.Sc(Bio)', '1st yr', 'sandhya04', 'sandhya04', '5.jpg'),
(18145624, 'Keerti Singh', 'Samar Singh', 'Komal singh', 250, '1995-01-01', '85.00', 'GEN', 'NO', 'B.Sc(Maths)', '1st yr', 'keerti01', 'keerti01', 'Keerti.jpg'),
(18163524, 'Nidhi Sonkar', 'kamal sonkar', 'himangi sonkar', 237, '1995-05-05', '74.00', 'SC', 'NO', 'B.Sc(Maths)', '1st yr', 'nidhi05', 'nidhi05', 'Nidhi Roy.jpg'),
(18166549, 'Himani Singh', 'Hemant Kumar', 'Kajal Singh', 251, '1993-08-25', '85.00', 'GEN', 'NO', 'B.Sc(Maths)', '1st yr', 'himani25', 'himani25', 'Picture 003.jpg'),
(18174155, 'Anjali', 'anjali_f', 'anjali_m', 156, '1995-08-31', '74.00', 'SC', 'YES', 'B.Sc(Maths)', '1st yr', 'anjali_1', 'anjali_1', 'Anjali=Bank-Maths.jpg'),
(18263572, 'Alka Sonkar', 'kamal sonkar', 'himangi sonkar', 237, '1995-06-06', '74.00', 'SC', 'NO', 'B.Sc(Bio)', '1st yr', 'alka06', 'alka06', 'Alka Raghuvanshi.jpg'),
(18274642, 'Diksha', 'diksha_f', 'diksha_m', 210, '0000-00-00', '85.00', 'GEN', 'YES', 'B.Sc(Bio)', '1st yr', 'diksha_1', 'diksha_1', 'Ankita Mishra.jpg'),
(18274679, 'Deepa', 'deepa_f', 'deepa_m', 145, '1995-09-15', '85.00', 'ST', 'YES', 'B.Sc(Bio)', '1st yr', 'deepa_1', 'deepa_1', 'Jyoti Singh.jpg'),
(18278912, 'Babita Kumari', 'Samar kumar', 'Komal devi', 213, '1995-02-02', '78.00', 'GEN', 'NO', 'B.Sc(Bio)', '1st yr', 'babita02', 'babita02', 'Babita Kumari.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pdh2`
--

CREATE TABLE IF NOT EXISTS `pdh2` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `F_NAME` varchar(25) NOT NULL,
  `M_NAME` varchar(25) NOT NULL,
  `UET_INDEX` int(3) NOT NULL,
  `DOB` date NOT NULL,
  `PERCENTAGE` decimal(5,2) NOT NULL,
  `CATEGORY` varchar(15) NOT NULL,
  `PH` varchar(5) NOT NULL,
  `COURSE` varchar(15) NOT NULL,
  `YEAR` varchar(10) NOT NULL,
  `USERNAME` varchar(15) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  `PIC` text NOT NULL,
  PRIMARY KEY (`UET_ROLL_NO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdh2`
--

INSERT INTO `pdh2` (`UET_ROLL_NO`, `NAME`, `F_NAME`, `M_NAME`, `UET_INDEX`, `DOB`, `PERCENTAGE`, `CATEGORY`, `PH`, `COURSE`, `YEAR`, `USERNAME`, `PASSWORD`, `PIC`) VALUES
(13124589, 'Parul Singh', 'Prakash Singh', 'Kaushalya Singh', 8, '1991-05-27', '211.00', 'GEN', 'NO', 'B.A(Arts)', '2nd yr', 'parul27', 'parul27', '349757_P.jpg'),
(13185014, 'sumitra', 'sumitra_f', 'sumitra_m', 7, '1994-12-25', '85.00', 'GEN', 'YES', 'B.A(Arts)', '2nd yr', 'sumitra_1', 'sumitra123', 'Ruby.jpg'),
(13265478, 'Lovely Sharma', 'Kartik Sharma', 'Komal Sharma', 8, '1992-04-12', '214.00', 'GEN', 'NO', 'B.A(Soc.)', '2nd yr', 'lovely12', 'lovely12', '4.jpg'),
(18135421, 'mehak', 'mehak_f', 'mehak_m', 7, '1994-01-01', '85.00', 'GEN', 'NO', 'B.Sc(Maths)', '2nd yr', 'mehak_1', 'mehak12', 'Mehak.jpg'),
(18169547, 'PALLAVI RAJ', 'SHASHANK RAJ', 'SUMAN RAJ', 9, '1994-06-28', '269.00', 'GEN', 'NO', 'B.Sc(Maths)', '2nd yr', 'pallavi28', 'pallavi28', '5.jpg'),
(18196872, 'Rohini Mishra', 'Aakash Mishra', 'Pallavi Mishra', 9, '1992-04-24', '241.00', 'GEN', 'NO', 'B.Sc(Maths)', '2nd yr', 'rohini24', 'rohini24', '2.jpg'),
(18255218, 'Kanchan', 'Kanchan_f', 'Kanchan_m', 8, '1992-03-22', '224.00', 'ST', 'NO', 'B.Sc(Bio)', '2nd yr', 'kanchan_2', 'kanchan_2', 'Khushboo Singh.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pdh3`
--

CREATE TABLE IF NOT EXISTS `pdh3` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `F_NAME` varchar(25) NOT NULL,
  `M_NAME` varchar(25) NOT NULL,
  `UET_INDEX` int(3) NOT NULL,
  `DOB` date NOT NULL,
  `PERCENTAGE` decimal(5,2) NOT NULL,
  `CATEGORY` varchar(15) NOT NULL,
  `PH` varchar(5) NOT NULL,
  `COURSE` varchar(15) NOT NULL,
  `YEAR` varchar(10) NOT NULL,
  `USERNAME` varchar(15) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  `PIC` text NOT NULL,
  PRIMARY KEY (`UET_ROLL_NO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pryh1`
--

CREATE TABLE IF NOT EXISTS `pryh1` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `DEFAULTER` varchar(5) NOT NULL,
  PRIMARY KEY (`UET_ROLL_NO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pryh1`
--

INSERT INTO `pryh1` (`UET_ROLL_NO`, `DEFAULTER`) VALUES
(13124589, 'NO'),
(13155245, 'NO'),
(13155264, 'NO'),
(13185014, 'NO'),
(13185436, 'NO'),
(13235478, 'NO'),
(13255257, 'NO'),
(13255261, 'NO'),
(13255828, 'NO'),
(13256026, 'NO'),
(13265478, 'NO'),
(18135421, 'NO'),
(18155214, 'NO'),
(18169547, 'NO'),
(18196872, 'YES'),
(18235434, 'NO'),
(18255218, 'NO'),
(18255228, 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `pryh2`
--

CREATE TABLE IF NOT EXISTS `pryh2` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `DEFAULTER` varchar(5) NOT NULL,
  PRIMARY KEY (`UET_ROLL_NO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pryh2`
--

INSERT INTO `pryh2` (`UET_ROLL_NO`, `DEFAULTER`) VALUES
(1314665, 'NO'),
(1314666, 'NO'),
(1314667, 'NO'),
(1324665, 'NO'),
(1324666, 'NO'),
(1324667, 'NO'),
(1814577, 'NO'),
(1814578, 'NO'),
(1814665, 'NO'),
(1814666, 'NO'),
(1824666, 'NO'),
(1824667, 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `rstatus`
--

CREATE TABLE IF NOT EXISTS `rstatus` (
  `ROOMNO` int(2) NOT NULL,
  `SEATNO` varchar(2) NOT NULL,
  `STATUS` varchar(10) NOT NULL DEFAULT 'VACANT',
  `NAME` varchar(25) NOT NULL,
  `UET_ROLL_NO` int(10) DEFAULT NULL,
  `LOBBY` varchar(15) NOT NULL,
  `DEFAULTER` varchar(5) NOT NULL DEFAULT 'NO',
  `NDUES` varchar(20) NOT NULL DEFAULT 'NOT CLEARED',
  PRIMARY KEY (`ROOMNO`,`SEATNO`),
  UNIQUE KEY `UET_ROLL_NO` (`UET_ROLL_NO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rstatus`
--

INSERT INTO `rstatus` (`ROOMNO`, `SEATNO`, `STATUS`, `NAME`, `UET_ROLL_NO`, `LOBBY`, `DEFAULTER`, `NDUES`) VALUES
(1, 'A', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(1, 'B', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(1, 'C', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(1, 'D', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(2, 'A', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(2, 'B', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(2, 'C', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(2, 'D', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(3, 'A', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(3, 'B', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(3, 'C', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(3, 'D', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(4, 'A', 'ALOTTED', 'Gunjan Pandey', 13124857, 'SECOND FLOOR', 'YES', 'NOT CLEARED'),
(4, 'B', 'ALOTTED', 'Sumita', 13274325, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(4, 'C', 'ALOTTED', 'Vartika', 13174328, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(4, 'D', 'ALOTTED', 'Payal Singh', 13247824, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(5, 'A', 'ALOTTED', 'Anjali Sonkar', 13274114, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(5, 'B', 'ALOTTED', 'Neha Baranwal', 13222548, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(5, 'C', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(5, 'D', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(6, 'A', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(6, 'B', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(6, 'C', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(6, 'D', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED');

-- --------------------------------------------------------

--
-- Table structure for table `rstatus2`
--

CREATE TABLE IF NOT EXISTS `rstatus2` (
  `ROOMNO` int(2) NOT NULL,
  `SEATNO` varchar(2) NOT NULL,
  `STATUS` varchar(10) NOT NULL DEFAULT 'VACANT',
  `NAME` varchar(25) NOT NULL,
  `UET_ROLL_NO` int(10) DEFAULT NULL,
  `LOBBY` varchar(15) NOT NULL,
  `DEFAULTER` varchar(5) NOT NULL DEFAULT 'NO',
  `NDUES` varchar(25) NOT NULL DEFAULT 'NOT CLEARED',
  PRIMARY KEY (`ROOMNO`,`SEATNO`),
  UNIQUE KEY `UET_ROLL_NO` (`UET_ROLL_NO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rstatus2`
--

INSERT INTO `rstatus2` (`ROOMNO`, `SEATNO`, `STATUS`, `NAME`, `UET_ROLL_NO`, `LOBBY`, `DEFAULTER`, `NDUES`) VALUES
(1, 'A', 'ALOTTED', 'sumitra', 13185014, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(1, 'B', 'ALOTTED', 'Kanchan', 18255218, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(2, 'A', 'ALOTTED', 'mehak', 18135421, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(2, 'B', 'ALOTTED', 'Parul Singh', 13124589, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(3, 'A', 'ALOTTED', 'Lovely Sharma', 13265478, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(3, 'B', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(4, 'A', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(4, 'B', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(5, 'A', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(5, 'B', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(6, 'A', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(6, 'B', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(7, 'A', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(7, 'B', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(8, 'A', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(8, 'B', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(9, 'A', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(9, 'B', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(10, 'A', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(10, 'B', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED');

-- --------------------------------------------------------

--
-- Table structure for table `rstatus3`
--

CREATE TABLE IF NOT EXISTS `rstatus3` (
  `ROOMNO` int(2) NOT NULL,
  `SEATNO` varchar(2) NOT NULL,
  `STATUS` varchar(10) NOT NULL DEFAULT 'VACANT',
  `NAME` varchar(25) NOT NULL,
  `UET_ROLL_NO` int(10) DEFAULT NULL,
  `LOBBY` varchar(15) NOT NULL,
  `DEFAULTER` varchar(5) NOT NULL DEFAULT 'NO',
  `NDUES` varchar(25) NOT NULL DEFAULT 'NOT CLEARED',
  PRIMARY KEY (`ROOMNO`,`SEATNO`),
  UNIQUE KEY `UET_ROLL_NO` (`UET_ROLL_NO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rstatus3`
--

INSERT INTO `rstatus3` (`ROOMNO`, `SEATNO`, `STATUS`, `NAME`, `UET_ROLL_NO`, `LOBBY`, `DEFAULTER`, `NDUES`) VALUES
(1, 'A', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(1, 'B', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(2, 'A', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(2, 'B', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(3, 'A', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(3, 'B', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(4, 'A', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(4, 'B', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(5, 'A', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(5, 'B', 'VACANT', '', NULL, 'FIRST FLOOR', 'NO', 'NOT CLEARED'),
(6, 'A', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(6, 'B', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(7, 'A', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(7, 'B', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(8, 'A', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(8, 'B', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(9, 'A', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(9, 'B', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(10, 'A', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED'),
(10, 'B', 'VACANT', '', NULL, 'SECOND FLOOR', 'NO', 'NOT CLEARED');

-- --------------------------------------------------------

--
-- Table structure for table `stu_arts`
--

CREATE TABLE IF NOT EXISTS `stu_arts` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `UET_INDEX` int(3) NOT NULL,
  `PERCENTAGE` decimal(5,2) NOT NULL,
  `CATEGORY` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_arts`
--

INSERT INTO `stu_arts` (`UET_ROLL_NO`, `NAME`, `UET_INDEX`, `PERCENTAGE`, `CATEGORY`) VALUES
(13174136, 'Ankita Sonkar', 144, '74.00', 'SC'),
(13124857, 'Gunjan Pandey', 145, '65.00', 'GEN');

-- --------------------------------------------------------

--
-- Table structure for table `stu_arts2`
--

CREATE TABLE IF NOT EXISTS `stu_arts2` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `UET_INDEX` int(3) NOT NULL,
  `PERCENTAGE` decimal(5,2) NOT NULL,
  `CATEGORY` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_arts2`
--

INSERT INTO `stu_arts2` (`UET_ROLL_NO`, `NAME`, `UET_INDEX`, `PERCENTAGE`, `CATEGORY`) VALUES
(13124589, 'Parul Singh', 8, '211.00', 'GEN'),
(13185436, 'komal', 8, '85.00', 'GEN'),
(13155264, 'Deepti Verma', 8, '210.00', 'ST'),
(13155245, 'Priyanka', 9, '225.00', 'SC');

-- --------------------------------------------------------

--
-- Table structure for table `stu_arts3`
--

CREATE TABLE IF NOT EXISTS `stu_arts3` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `UET_INDEX` int(3) NOT NULL,
  `PERCENTAGE` decimal(5,2) NOT NULL,
  `CATEGORY` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stu_bio`
--

CREATE TABLE IF NOT EXISTS `stu_bio` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `UET_INDEX` int(3) NOT NULL,
  `PERCENTAGE` decimal(5,2) NOT NULL,
  `CATEGORY` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_bio`
--

INSERT INTO `stu_bio` (`UET_ROLL_NO`, `NAME`, `UET_INDEX`, `PERCENTAGE`, `CATEGORY`) VALUES
(18122548, 'Soumya Roy', 182, '91.00', 'GEN'),
(18125648, 'Sandhya Maurya', 182, '85.00', 'OBC'),
(18278912, 'Babita Kumari', 213, '78.00', 'GEN'),
(18263572, 'Alka Sonkar', 237, '74.00', 'SC');

-- --------------------------------------------------------

--
-- Table structure for table `stu_bio2`
--

CREATE TABLE IF NOT EXISTS `stu_bio2` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `UET_INDEX` int(3) NOT NULL,
  `PERCENTAGE` decimal(5,2) NOT NULL,
  `CATEGORY` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_bio2`
--

INSERT INTO `stu_bio2` (`UET_ROLL_NO`, `NAME`, `UET_INDEX`, `PERCENTAGE`, `CATEGORY`) VALUES
(18255218, 'Kanchan', 8, '224.00', 'ST'),
(13255828, 'sonali', 9, '265.00', 'SC'),
(18235434, 'pinki', 9, '85.00', 'GEN');

-- --------------------------------------------------------

--
-- Table structure for table `stu_bio3`
--

CREATE TABLE IF NOT EXISTS `stu_bio3` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `UET_INDEX` int(3) NOT NULL,
  `PERCENTAGE` decimal(5,2) NOT NULL,
  `CATEGORY` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stu_math`
--

CREATE TABLE IF NOT EXISTS `stu_math` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `UET_INDEX` int(3) NOT NULL,
  `PERCENTAGE` decimal(5,2) NOT NULL,
  `CATEGORY` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_math`
--

INSERT INTO `stu_math` (`UET_ROLL_NO`, `NAME`, `UET_INDEX`, `PERCENTAGE`, `CATEGORY`) VALUES
(18112569, 'Neha', 145, '85.00', 'ST'),
(18163524, 'Nidhi Sonkar', 237, '74.00', 'SC'),
(18145624, 'Keerti Singh', 250, '85.00', 'GEN'),
(18166549, 'Himani Singh', 251, '85.00', 'GEN');

-- --------------------------------------------------------

--
-- Table structure for table `stu_math2`
--

CREATE TABLE IF NOT EXISTS `stu_math2` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `UET_INDEX` int(3) NOT NULL,
  `PERCENTAGE` decimal(5,2) NOT NULL,
  `CATEGORY` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_math2`
--

INSERT INTO `stu_math2` (`UET_ROLL_NO`, `NAME`, `UET_INDEX`, `PERCENTAGE`, `CATEGORY`) VALUES
(18135421, 'mehak', 7, '85.00', 'GEN'),
(18255228, 'Karishma Gupta', 8, '220.00', 'ST'),
(18155124, 'Roma', 9, '215.00', 'SC'),
(18169547, 'PALLAVI RAJ', 9, '269.00', 'GEN'),
(18196872, 'Rohini Mishra', 9, '241.00', 'GEN');

-- --------------------------------------------------------

--
-- Table structure for table `stu_math3`
--

CREATE TABLE IF NOT EXISTS `stu_math3` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `UET_INDEX` int(3) NOT NULL,
  `PERCENTAGE` decimal(5,2) NOT NULL,
  `CATEGORY` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stu_ph`
--

CREATE TABLE IF NOT EXISTS `stu_ph` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `UET_INDEX` int(3) NOT NULL,
  `PERCENTAGE` decimal(5,2) NOT NULL,
  `CATEGORY` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_ph`
--

INSERT INTO `stu_ph` (`UET_ROLL_NO`, `NAME`, `UET_INDEX`, `PERCENTAGE`, `CATEGORY`) VALUES
(18274679, 'Deepa', 145, '85.00', 'ST'),
(18174155, 'Anjali', 156, '74.00', 'SC'),
(18274642, 'Diksha', 210, '85.00', 'GEN');

-- --------------------------------------------------------

--
-- Table structure for table `stu_ph2`
--

CREATE TABLE IF NOT EXISTS `stu_ph2` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `UET_INDEX` int(3) NOT NULL,
  `PERCENTAGE` decimal(5,2) NOT NULL,
  `CATEGORY` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_ph2`
--

INSERT INTO `stu_ph2` (`UET_ROLL_NO`, `NAME`, `UET_INDEX`, `PERCENTAGE`, `CATEGORY`) VALUES
(13185014, 'sumitra', 7, '85.00', 'GEN'),
(13256026, 'sonal', 8, '85.00', 'GEN');

-- --------------------------------------------------------

--
-- Table structure for table `stu_ph3`
--

CREATE TABLE IF NOT EXISTS `stu_ph3` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `UET_INDEX` int(3) NOT NULL,
  `PERCENTAGE` decimal(5,2) NOT NULL,
  `CATEGORY` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stu_social`
--

CREATE TABLE IF NOT EXISTS `stu_social` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `UET_INDEX` int(3) NOT NULL,
  `PERCENTAGE` decimal(5,2) NOT NULL,
  `CATEGORY` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_social`
--

INSERT INTO `stu_social` (`UET_ROLL_NO`, `NAME`, `UET_INDEX`, `PERCENTAGE`, `CATEGORY`) VALUES
(13274325, 'Sumita', 105, '85.00', 'OBC'),
(13174328, 'Vartika', 125, '85.00', 'ST'),
(13247824, 'Payal Singh', 135, '76.00', 'GEN'),
(13274114, 'Anjali Sonkar', 144, '74.00', 'SC'),
(13222548, 'Neha Baranwal', 254, '75.69', 'GEN');

-- --------------------------------------------------------

--
-- Table structure for table `stu_social2`
--

CREATE TABLE IF NOT EXISTS `stu_social2` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `UET_INDEX` int(3) NOT NULL,
  `PERCENTAGE` decimal(5,2) NOT NULL,
  `CATEGORY` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu_social2`
--

INSERT INTO `stu_social2` (`UET_ROLL_NO`, `NAME`, `UET_INDEX`, `PERCENTAGE`, `CATEGORY`) VALUES
(13265478, 'Lovely Sharma', 8, '214.00', 'GEN'),
(13255261, 'Deepali Verma', 8, '215.00', 'ST'),
(13255257, 'Payal Raj', 8, '245.00', 'SC'),
(13235478, 'pallavi', 9, '85.00', 'GEN');

-- --------------------------------------------------------

--
-- Table structure for table `stu_social3`
--

CREATE TABLE IF NOT EXISTS `stu_social3` (
  `UET_ROLL_NO` int(10) NOT NULL,
  `NAME` varchar(25) NOT NULL,
  `UET_INDEX` int(3) NOT NULL,
  `PERCENTAGE` decimal(5,2) NOT NULL,
  `CATEGORY` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cd`
--
ALTER TABLE `cd`
  ADD CONSTRAINT `cd_ibfk_1` FOREIGN KEY (`UET_ROLL_NO`) REFERENCES `pd` (`UET_ROLL_NO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cd2`
--
ALTER TABLE `cd2`
  ADD CONSTRAINT `cd2_ibfk_1` FOREIGN KEY (`UET_ROLL_NO`) REFERENCES `pd2` (`UET_ROLL_NO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cd3`
--
ALTER TABLE `cd3`
  ADD CONSTRAINT `cd3_ibfk_1` FOREIGN KEY (`UET_ROLL_NO`) REFERENCES `pd3` (`UET_ROLL_NO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cdh`
--
ALTER TABLE `cdh`
  ADD CONSTRAINT `cdh_ibfk_1` FOREIGN KEY (`UET_ROLL_NO`) REFERENCES `pdh` (`UET_ROLL_NO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cdh2`
--
ALTER TABLE `cdh2`
  ADD CONSTRAINT `cdh2_ibfk_1` FOREIGN KEY (`UET_ROLL_NO`) REFERENCES `pdh2` (`UET_ROLL_NO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cdh3`
--
ALTER TABLE `cdh3`
  ADD CONSTRAINT `cdh3_ibfk_1` FOREIGN KEY (`UET_ROLL_NO`) REFERENCES `pdh3` (`UET_ROLL_NO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rstatus`
--
ALTER TABLE `rstatus`
  ADD CONSTRAINT `rstatus_ibfk_1` FOREIGN KEY (`UET_ROLL_NO`) REFERENCES `pdh` (`UET_ROLL_NO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rstatus2`
--
ALTER TABLE `rstatus2`
  ADD CONSTRAINT `rstatus2_ibfk_1` FOREIGN KEY (`UET_ROLL_NO`) REFERENCES `pdh2` (`UET_ROLL_NO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rstatus3`
--
ALTER TABLE `rstatus3`
  ADD CONSTRAINT `rstatus3_ibfk_1` FOREIGN KEY (`UET_ROLL_NO`) REFERENCES `pdh3` (`UET_ROLL_NO`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
