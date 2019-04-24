-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2018 at 01:00 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citybazaar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `id` int(11) NOT NULL,
  `Aname` varchar(20) NOT NULL,
  `Apassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `business_listing_tb`
--

CREATE TABLE `business_listing_tb` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Phone` bigint(15) NOT NULL,
  `Mobile` bigint(15) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Website` varchar(25) NOT NULL,
  `Address` blob NOT NULL,
  `City` varchar(25) NOT NULL,
  `State` varchar(25) NOT NULL,
  `Pincode` int(8) NOT NULL,
  `Longitude` varchar(10) NOT NULL,
  `latitude` varchar(10) NOT NULL,
  `Propic` blob NOT NULL,
  `Covpic` blob NOT NULL,
  `Description` blob NOT NULL,
  `Facility` varchar(25) NOT NULL,
  `Openhours` varchar(25) NOT NULL,
  `Facebookid` varchar(25) NOT NULL,
  `Twitterid` varchar(25) NOT NULL,
  `Googlepid` varchar(25) NOT NULL,
  `Instagramid` varchar(25) NOT NULL,
  `Visibility` tinyint(1) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Catid` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories_tb`
--

CREATE TABLE `categories_tb` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Visibility` tinyint(1) NOT NULL,
  `Icon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inquiry_tb`
--

CREATE TABLE `inquiry_tb` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` bigint(20) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Message` blob NOT NULL,
  `Read` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_listing_tb`
--
ALTER TABLE `business_listing_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories_tb`
--
ALTER TABLE `categories_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry_tb`
--
ALTER TABLE `inquiry_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `business_listing_tb`
--
ALTER TABLE `business_listing_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories_tb`
--
ALTER TABLE `categories_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inquiry_tb`
--
ALTER TABLE `inquiry_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
