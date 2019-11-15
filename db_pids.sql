-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 15, 2019 at 02:40 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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
('K0321', '0000-00-00 00:00:00', 'Kerete 2', '10003 2', '', '2019-08-13 05:47:46', '', '2019-08-14 03:40:37'),
('K3222', '0000-00-00 00:00:00', '', '', 'automatic', '2019-08-21 07:54:53', '', '0000-00-00 00:00:00'),
('K6666', '0000-00-00 00:00:00', '', '', 'automatic', '2019-08-21 07:56:23', '', '0000-00-00 00:00:00');

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
(3, 'Argo Parahyangan', 'Bandung', 'Jakarta', 'OKE', 'K0123', 'K0123', '', '2019-08-21 06:01:58', '', '0000-00-00 00:00:00', 'K0321');

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
(14, 'Argo Parahyangan', 'Bandung', 'Jakarta', 'OKE', 'K0123', 'K0123', '', '2019-08-21 06:01:58', 'K0321');

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

-- --------------------------------------------------------

--
-- Table structure for table `locotrackhealty`
--

CREATE TABLE `locotrackhealty` (
  `id` bigint(20) NOT NULL,
  `Locoid` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Firm` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Rtc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ymd` date DEFAULT NULL,
  `Hms` datetime DEFAULT NULL,
  `Lat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Long` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Gps` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Satellite` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Conn` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'NULL',
  `Cpin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Csq` int(20) DEFAULT NULL,
  `Creg` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Network` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Sd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `temp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `intervalrun` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `locotrackhealty`
--

INSERT INTO `locotrackhealty` (`id`, `Locoid`, `Firm`, `Rtc`, `Ymd`, `Hms`, `Lat`, `Long`, `Gps`, `Satellite`, `Conn`, `Cpin`, `Csq`, `Creg`, `Network`, `Sd`, `temp`, `apn`, `intervalrun`) VALUES
(4, '', '', '', '0000-00-00', '2019-11-15 02:38:33', '', '1', '1', '1', '1', '1', 1, '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `locotracklocomotives`
--

CREATE TABLE `locotracklocomotives` (
  `id` bigint(20) NOT NULL,
  `L_DATATYPE` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `L_VTDID` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `L_LON` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `L_LAT` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `L_DATETIME` datetime DEFAULT NULL,
  `L_SPEED` float DEFAULT NULL,
  `L_HEADING` int(20) DEFAULT NULL,
  `L_ENGINE` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locotrack_sms`
--

CREATE TABLE `locotrack_sms` (
  `id` int(11) NOT NULL,
  `subtopik` varchar(300) NOT NULL,
  `status` varchar(300) NOT NULL,
  `idloc` varchar(300) NOT NULL,
  `datetime` datetime NOT NULL,
  `A` varchar(300) NOT NULL,
  `C` varchar(300) NOT NULL,
  `D` varchar(300) NOT NULL,
  `E` varchar(300) NOT NULL,
  `F` varchar(300) NOT NULL,
  `G` varchar(300) NOT NULL,
  `H` varchar(300) NOT NULL,
  `J` varchar(300) NOT NULL,
  `N` varchar(300) NOT NULL,
  `GP` varchar(300) NOT NULL,
  `EN` varchar(300) NOT NULL,
  `SQ` varchar(300) NOT NULL,
  `apn` varchar(300) NOT NULL,
  `nogsm` varchar(300) NOT NULL,
  `interval` int(22) DEFAULT NULL,
  `ip` varchar(300) NOT NULL,
  `port` varchar(300) NOT NULL,
  `user` varchar(300) NOT NULL,
  `pass` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locotrack_sms`
--

INSERT INTO `locotrack_sms` (`id`, `subtopik`, `status`, `idloc`, `datetime`, `A`, `C`, `D`, `E`, `F`, `G`, `H`, `J`, `N`, `GP`, `EN`, `SQ`, `apn`, `nogsm`, `interval`, `ip`, `port`, `user`, `pass`) VALUES
(1, 'publishList', 'success', 'K001', '2019-11-16 00:00:00', 'UNKNOWN', 'ptkai', 'null', 'null', '001 SEND', '001 LOG', 'Y', '3', '103.54.225.241', 'A9 NE0', '1', '14 NOT ACT 72H', '', '', 0, '', '', '', ''),
(2, 'listIdloc', 'success', 'K001', '2019-11-16 00:00:00', 'UNKNOWN', 'ptkai', 'null', 'null', '001 SEND', '001 LOG', 'Y', '3', '103.54.225.241', 'A9 NE0', '1', '14 NOT ACT 72H', '', '', 0, '', '', '', ''),
(3, 'publishApn', 'success', 'K001', '2019-07-02 15:00:00', '', '', '', '', '', '', '', '', '', '', '', '', 'ptkai', '', 0, '', '', '', ''),
(4, 'apnIdloc', 'success', 'K001', '2019-07-02 15:00:00', '', '', '', '', '', '', '', '', '', '', '', '', 'ptkai', '', 0, '', '', '', ''),
(5, 'publishGateway', 'success', 'K001', '2019-07-02 15:00:00', '', '', '', '', '', '', '', '', '', '', '', '', 'ptkai', '08123456', 0, '', '', '', ''),
(6, 'intervalRunningIdloc', 'success', 'K001', '2019-07-02 15:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '08123', 5, '', '', '', ''),
(7, 'publishIntervalRunning', 'success', 'K001', '2019-07-02 15:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 5, '', '', '', ''),
(8, 'publishIp', 'success', 'K001', '2019-11-11 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '103.54.225.241', '1883', 'iotkai2019', 'iot123456'),
(9, 'ipIdloc', 'success', 'K001', '2019-11-11 00:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '103.54.225.241', '1883', 'iotkai2019', 'iot123456'),
(10, 'restartIdloc', 'success', 'K001', '2019-07-02 15:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', ''),
(11, 'intervalIdleIdloc', 'success', 'K001', '2019-07-02 15:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 60, '', '', '', ''),
(12, 'publishIntervalIdle', 'success', 'K001', '2019-07-02 15:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 60, '', '', '', ''),
(13, 'gatewayIdloc', 'success', 'K001', '2019-07-02 15:00:00', '', '', '', '', '', '', '', '', '', '', '', '', '', '08123456', NULL, '', '', '', '');

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
-- Indexes for table `locotrackhealty`
--
ALTER TABLE `locotrackhealty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locotracklocomotives`
--
ALTER TABLE `locotracklocomotives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locotrack_sms`
--
ALTER TABLE `locotrack_sms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id_content` bigint(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `content_history`
--
ALTER TABLE `content_history`
  MODIFY `id_content_history` bigint(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gps_history`
--
ALTER TABLE `gps_history`
  MODIFY `id_gps_history` bigint(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locotrackhealty`
--
ALTER TABLE `locotrackhealty`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `locotracklocomotives`
--
ALTER TABLE `locotracklocomotives`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `locotrack_sms`
--
ALTER TABLE `locotrack_sms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
