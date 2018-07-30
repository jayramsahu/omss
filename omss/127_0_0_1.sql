-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2017 at 04:16 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_project`
--
CREATE DATABASE IF NOT EXISTS `php_project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `php_project`;

-- --------------------------------------------------------

--
-- Table structure for table `creators`
--

CREATE TABLE `creators` (
  `id` int(11) NOT NULL,
  `mailid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creators`
--

INSERT INTO `creators` (`id`, `mailid`, `password`, `fname`, `lname`, `company`, `gst`, `size`, `address`, `phone`, `pin`, `state`) VALUES
(1, 'test@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', 'Admin', 'AdminC', '1234354611234343', '10-100 Employee', 'BONGAIGAON', '09435121983', '603203', 'Tamil Nadu'),
(2, 'souravganguly@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 'Sourav', 'Ganguly', 'InfoTech', '12397867632432213', '10-100 Employee', 'NewBongaigaon', '9435121239', '783380', 'Assam'),
(3, 'admin@admin.test', 'e10adc3949ba59abbe56e057f20f883e', 'Swapan', 'Ganguly', 'NAAAAA', '121343567897865435', '10-100 Employee', 'guwahatiaAD', '9435121983', '603203', 'Tamil Nadu');

-- --------------------------------------------------------

--
-- Table structure for table `recruitment`
--

CREATE TABLE `recruitment` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `j_type` varchar(255) NOT NULL,
  `vacancy` int(11) NOT NULL,
  `ldate` date NOT NULL,
  `salary` bigint(20) NOT NULL,
  `filled` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recruitment`
--

INSERT INTO `recruitment` (`id`, `c_id`, `j_type`, `vacancy`, `ldate`, `salary`, `filled`) VALUES
(1, 1, 'labour', 500, '2017-10-25', 10000, 0),
(8, 2, 'TRY', 100, '2018-01-01', 1000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `mother` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pin` int(11) NOT NULL,
  `state` varchar(25) NOT NULL,
  `quali` varchar(255) NOT NULL,
  `exp` int(20) NOT NULL,
  `skills` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `emailid`, `password`, `fname`, `lname`, `father`, `mother`, `address`, `phone`, `pin`, `state`, `quali`, `exp`, `skills`) VALUES
(6, 's@g.com', '8d70d8ab2768f232ebe874175065ead3', 'Sourav', 'Ganguly', 'SSHHHH', 'DDDDDDA', 'BONGAIGAON', '09435121983', 783380, 'Assam', 'B.tech', 12, 'na'),
(5, 'testadmin@a.com', 'e10adc3949ba59abbe56e057f20f883e', 'Sourav', 'Ganguly', 'SSSDDa', 'asfdsfg', 'BONGAIGAON', '9435121983', 783380, 'Assam', 'B.tech', 12, 'asd'),
(4, 'so@g.com', 'e10adc3949ba59abbe56e057f20f883e', 'Sourav', 'tttadaasd', 'oiuytrsdfxgcvbn', 'kljfdsab', 'BONGAIGAON', '9435121983', 783380, 'Assam', '10th Pass', 12, 'asdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `creators`
--
ALTER TABLE `creators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recruitment`
--
ALTER TABLE `recruitment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `creators`
--
ALTER TABLE `creators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `recruitment`
--
ALTER TABLE `recruitment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
