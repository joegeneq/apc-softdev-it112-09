-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 23, 2015 at 10:07 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kensbyn-advanced`
--

-- --------------------------------------------------------

--
-- Table structure for table `industry_partners`
--

CREATE TABLE IF NOT EXISTS `industry_partners` (
`id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `company_contactnum` varchar(25) NOT NULL,
  `company_description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `industry_partners`
--

INSERT INTO `industry_partners` (`id`, `company_name`, `company_address`, `company_contactnum`, `company_description`) VALUES
(1, 'Asia Pacific College', '3 Humabon Place, Magallanes, Makati City', '852-9235', 'Real Projects, Real Learning.');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1424330563),
('m130524_201442_init', 1424330580);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` int(11) NOT NULL DEFAULT '10',
  `company_id` int(11) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `firstname`, `lastname`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `roles`, `company_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'apccpowebadmin', 'CPO', 'Admin', 'RNwH815ZzRffOVn8I6SmJQCTc5eHNK-5', '$2y$13$Hkw5VzXsJVxP2nJA7RFp9.mG5cnZIh6uYF6vdRWkOCB5bfdXZUAIS', NULL, 'cpo@apc.edu.ph', 20, 0, 10, 1424616849, 1424616849),
(7, 'kosibayan', 'Kenneth', 'Sibayan', 'ub32EOfN5mwImO_KhgkIKJrG2yl1iKyQ', '$2y$13$HFfEB/CDV5UvYappUC7lEOYLrI0Hifsk.w9i6E8MNeZstQTGy.cYK', NULL, 'kosibayan@student.apc.edu.ph', 10, 0, 10, 1424617778, 1424617778),
(8, 'acacle', 'Alyssa Mae', 'Acle', 'gqL-AVQT30QEWz83aeo3PJeW03vh3G7P', '$2y$13$ENcnW8KBe/OAawudFbDi2Og5Bj2K7yDkt0ZuRXYqDW.Lrhj12UK7G', NULL, 'acacle@student.apc.edu.ph', 10, 0, 10, 1424660697, 1424660697);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `industry_partners`
--
ALTER TABLE `industry_partners`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
 ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD KEY `company_id` (`company_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `industry_partners`
--
ALTER TABLE `industry_partners`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
