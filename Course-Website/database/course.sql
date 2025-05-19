-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 12, 2022 at 06:19 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `lessonid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enrolmen`
--

CREATE TABLE `enrolmen` (
  `enrolmenid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `lessonid` int(11) NOT NULL,
  `class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lessonid` int(11) NOT NULL,
  `lessonname` varchar(255) NOT NULL,
  `lessondesc` varchar(255) NOT NULL,
  `lessonimg` varchar(255) NOT NULL,
  `startmonday` time NOT NULL,
  `endmonday` time NOT NULL,
  `starttuesday` time NOT NULL,
  `endtuesday` time NOT NULL,
  `startwednesday` time NOT NULL,
  `endwednesday` time NOT NULL,
  `startthursday` time NOT NULL,
  `endthursday` time NOT NULL,
  `startfriday` time NOT NULL,
  `endfriday` time NOT NULL,
  `lessonprice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siteidentity`
--

CREATE TABLE `siteidentity` (
  `siteidentityid` int(11) NOT NULL,
  `websitename` varchar(255) NOT NULL,
  `websitedesc` varchar(255) NOT NULL,
  `websitelogo` varchar(255) NOT NULL,
  `websitefavicon` varchar(255) NOT NULL,
  `websitebackground` varchar(255) NOT NULL,
  `websitefooter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siteidentity`
--

INSERT INTO `siteidentity` (`siteidentityid`, `websitename`, `websitedesc`, `websitelogo`, `websitefavicon`, `websitebackground`, `websitefooter`) VALUES
(1, 'Default Name', 'A Website To Visit', 'default.png', 'default.png', 'default.png', 'Replenish him third creature and meat blessed void a fruit gathered you\'re, they\'re two waters own morning gathered greater.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT 'SMKDOB',
  `fullname` varchar(255) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` int(11) NOT NULL DEFAULT '0' COMMENT '0 = User, 1 = Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `password`, `fullname`, `username`, `email`, `usertype`) VALUES
(799531, 'admin', 'Admin', 'Admin', 'admin@admin.admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `enrolmen`
--
ALTER TABLE `enrolmen`
  ADD PRIMARY KEY (`enrolmenid`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`lessonid`);

--
-- Indexes for table `siteidentity`
--
ALTER TABLE `siteidentity`
  ADD PRIMARY KEY (`siteidentityid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enrolmen`
--
ALTER TABLE `enrolmen`
  MODIFY `enrolmenid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `lessonid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `siteidentity`
--
ALTER TABLE `siteidentity`
  MODIFY `siteidentityid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=799532;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
