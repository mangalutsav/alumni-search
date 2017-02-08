-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2017 at 09:39 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `mytable`
--

CREATE TABLE `mytable` (
  `name` varchar(17) NOT NULL,
  `branch` varchar(20) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(27) DEFAULT NULL,
  `place` varchar(44) DEFAULT NULL,
  `job` varchar(28) DEFAULT NULL,
  `groups` varchar(62) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mytable`
--

INSERT INTO `mytable` (`name`, `branch`, `year`, `phone`, `email`, `place`, `job`, `groups`) VALUES
('Aman Jakar', 'Meta', 2016, 2147483647, 'avanshujakar@gmail.com', NULL, NULL, 'NSS, SPIC MACAY'),
('Amit Kumar', 'Civil', 2016, 2147483647, 'amitkumar.iitr16@gmail.com', 'IIM Lucknow', 'MBA, management', NULL),
('Aniket Roy', 'meta', 2015, 2147483647, 'aniketter93@gmail.com', NULL, 'PM', NULL),
('Arpit Jain', 'Chemical', 2016, 2147483647, 'arpitj73@gmail.com', 'Futures First', NULL, NULL),
('Chirag Chaudhay', 'CS', 2016, 2147483647, 'chirag5624@gmail.com', 'Aviation/Aerospace Safety Systems', NULL, 'Spic macay, Swimming(Inter IIT)'),
('dhwani mehta', 'DOMS', 2015, 2147483647, 'dhwanim11@gmail.com', NULL, 'PM', NULL),
('Durgesh Suthar', 'CS', 2015, 2147483647, 'durgeshsuthar1992@gmail.com', 'Flipkart', 'software development', 'spic macay, sdslsbs'),
('Mahim Agarwal', 'Electrical', 2016, 2147483647, 'agrawalmahim.iitr@gmail.com', 'Mastercard', NULL, NULL),
('Maitresh Agarwal', 'Civil', 2015, 2147483647, 'maitresh.iitr@gmail.com', 'Uber', NULL, 'convener of cognizance, ASME, CEC'),
('Manas Agarwal', 'Chemical', 2016, 2147483647, 'manasagarwal2809@gmail.com', NULL, NULL, 'SIIRD'),
('Mohit Attri', 'Electical', 2016, 2147483647, 'mohitattri007@gmail.com', 'Cognizant Data Analytics', 'data analyst,Data Scientist', 'thomso'),
('Novel Jindal', NULL, 2016, 2147483647, 'jindal.novel@gmail.com', 'ABCO Advisory Services India Private Limited', 'IT, Software', NULL),
('Om Prakash Singh', 'Process (Saharanpur)', 2015, 2147483647, 'opsingh846@gmail.com', 'Goibibo Data Analytics', NULL, 'inter iit volleyball'),
('Prithu Raj', 'Civil', 2016, 2147483647, 'prithu.raj94@gmail.com', 'HPCL', NULL, NULL),
('Priyanshu Taparia', 'Meta', 2015, 2147483647, NULL, 'Uber', 'uber', 'IMG, EDC'),
('Rohan Mittal', 'Chemical', 2016, 2147483647, 'rohanmittal050793@gmail.com', 'I3 Consulting', 'consultancy,business analyst', NULL),
('Shakendra Jain', 'Chemical', 2015, 2147483647, 'shakendra2011@gmail.com', 'Royal Bank of Scotland', 'Analyst', 'ShARE'),
('Shivanshu Madan', 'Chemical', 2016, 2147483647, 'madan.shivanshu94@gmail.com', 'Axtria', NULL, 'joint secy of fine arts section, sponsorship manager @ sangram'),
('Sonesh Jain', 'Archi', NULL, 2147483647, 'sonesh@audegn.com', 'Co-founder transport.co', 'Enterprenuer, Start-up', NULL),
('Vibhor Agarwal', 'Chemical', 2016, 2147483647, NULL, NULL, NULL, 'thomso, NSS'),
('Vishesh Madaan', 'earth science', 2015, 2147483647, 'vishesh.madaan@gmail.com', 'KnoWerX Education (India) Private Limited', NULL, 'edc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mytable`
--
ALTER TABLE `mytable`
  ADD PRIMARY KEY (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
