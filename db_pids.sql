-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2019 at 04:15 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pids`
--

-- --------------------------------------------------------

--
-- Table structure for table `chassis`
--

CREATE TABLE `chassis` (
  `assets_id_chassis` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  `code_train` varchar(200) NOT NULL,
  `code_carriage` varchar(200) NOT NULL,
  `create_by` varchar(200) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_by` varchar(200) NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chassis`
--

INSERT INTO `chassis` (`assets_id_chassis`, `date`, `code_train`, `code_carriage`, `create_by`, `create_date`, `update_by`, `update_date`) VALUES
('K1234', '0000-00-00 00:00:00', 'Kerete 2', '10003 2', '', '2019-08-13 05:47:46', '', '2019-08-14 03:40:37');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id_content` bigint(22) NOT NULL,
  `train_name` varchar(200) NOT NULL,
  `origin` varchar(300) NOT NULL,
  `destinantion` varchar(300) NOT NULL,
  `announcement` text NOT NULL,
  `tag_rear` text NOT NULL,
  `tag_front` text NOT NULL,
  `create_by` varchar(200) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_by` varchar(200) NOT NULL,
  `update_date` datetime NOT NULL,
  `assets_id_chassis` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id_content`, `train_name`, `origin`, `destinantion`, `announcement`, `tag_rear`, `tag_front`, `create_by`, `create_date`, `update_by`, `update_date`, `assets_id_chassis`) VALUES
(1, 'Argo Parahyangan', 'Bandung', 'cirebon', 'Argo ', 'NO Tag', 'K123', '', '2019-08-13 06:32:47', '', '2019-08-14 04:37:17', 'K1234');

-- --------------------------------------------------------

--
-- Table structure for table `content_history`
--

CREATE TABLE `content_history` (
  `id_content_history` bigint(22) NOT NULL,
  `train_name` varchar(300) NOT NULL,
  `origin` varchar(300) NOT NULL,
  `destinantion` varchar(300) NOT NULL,
  `announcement` text NOT NULL,
  `tag_rear` text NOT NULL,
  `tag_front` text NOT NULL,
  `create_by` varchar(200) NOT NULL,
  `create_date` datetime NOT NULL,
  `assets_id_chassis` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content_history`
--

INSERT INTO `content_history` (`id_content_history`, `train_name`, `origin`, `destinantion`, `announcement`, `tag_rear`, `tag_front`, `create_by`, `create_date`, `assets_id_chassis`) VALUES
(13, 'Argo Parahyangan', 'Bandung', 'cirebon', 'Argo ', 'NO Tag', 'K123', '', '2019-08-14 04:37:17', 'K1234');

-- --------------------------------------------------------

--
-- Table structure for table `gps`
--

CREATE TABLE `gps` (
  `id_gps` varchar(200) NOT NULL,
  `longitude` varchar(200) NOT NULL,
  `latitude` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  `assets_id_chassis` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gps_history`
--

CREATE TABLE `gps_history` (
  `id_gps_history` bigint(22) NOT NULL,
  `longitude` varchar(200) NOT NULL,
  `latitude` varchar(200) NOT NULL,
  `date_last_update` datetime NOT NULL,
  `assets_id_chassis` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chassis`
--
ALTER TABLE `chassis`
  ADD PRIMARY KEY (`assets_id_chassis`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id_content`),
  ADD KEY `assets_id_chassis` (`assets_id_chassis`);

--
-- Indexes for table `content_history`
--
ALTER TABLE `content_history`
  ADD PRIMARY KEY (`id_content_history`),
  ADD KEY `assets_id_chassis` (`assets_id_chassis`);

--
-- Indexes for table `gps`
--
ALTER TABLE `gps`
  ADD PRIMARY KEY (`id_gps`),
  ADD KEY `assets_id_chassis` (`assets_id_chassis`);

--
-- Indexes for table `gps_history`
--
ALTER TABLE `gps_history`
  ADD PRIMARY KEY (`id_gps_history`),
  ADD KEY `assets_id_chassis` (`assets_id_chassis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id_content` bigint(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `content_history`
--
ALTER TABLE `content_history`
  MODIFY `id_content_history` bigint(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gps_history`
--
ALTER TABLE `gps_history`
  MODIFY `id_gps_history` bigint(22) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `content_ibfk_1` FOREIGN KEY (`assets_id_chassis`) REFERENCES `chassis` (`assets_id_chassis`);

--
-- Constraints for table `content_history`
--
ALTER TABLE `content_history`
  ADD CONSTRAINT `content_history_ibfk_1` FOREIGN KEY (`assets_id_chassis`) REFERENCES `chassis` (`assets_id_chassis`);

--
-- Constraints for table `gps`
--
ALTER TABLE `gps`
  ADD CONSTRAINT `gps_ibfk_1` FOREIGN KEY (`assets_id_chassis`) REFERENCES `chassis` (`assets_id_chassis`);

--
-- Constraints for table `gps_history`
--
ALTER TABLE `gps_history`
  ADD CONSTRAINT `gps_history_ibfk_1` FOREIGN KEY (`assets_id_chassis`) REFERENCES `chassis` (`assets_id_chassis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
