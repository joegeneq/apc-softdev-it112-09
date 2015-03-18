-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2015 at 01:25 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apc-cpo-commsweb_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `cpofficer`
--

CREATE TABLE IF NOT EXISTS `cpofficer` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cpofficer`
--

INSERT INTO `cpofficer` (`id`, `user_id`, `username`, `firstname`, `lastname`, `email`) VALUES
(1, 1, 'apccpowebadmin', 'CPO', 'Admin', 'cpo@apc.edu.ph');

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
(0, 'Asia Pacific College', '3 Humabon Place, Magallanes, Makati City', '852-9235', 'Real Projects, Real Learning.'),
(1, 'Garena', 'Taguig, Philippines', '092312334123', 'Connecting the dots.');

-- --------------------------------------------------------

--
-- Table structure for table `iprofessor`
--

CREATE TABLE IF NOT EXISTS `iprofessor` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_num` varchar(15) NOT NULL,
  `company_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `iprofessor`
--

INSERT INTO `iprofessor` (`id`, `username`, `firstname`, `lastname`, `email`, `contact_num`, `company_id`, `user_id`) VALUES
(9, 'acacle', 'Alyssa Mae', 'Acle', 'acacle@student.apc.edu.ph', '', 0, 8),
(13, 'liforrest', 'Forrest', 'Li', 'forrestli@garena.com', '0932324242423', 1, 69);

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
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `student_id` varchar(15) NOT NULL,
  `contact_num` varchar(15) NOT NULL,
  `course` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `user_id`, `username`, `firstname`, `lastname`, `student_id`, `contact_num`, `course`, `email`, `address`) VALUES
(1, 7, 'kosibayan', 'Kenneth', 'Sibayan', '2011-100121', '09054005890', 'BSIT', 'kosibayan@student.apc.edu.ph', '90 Z1 Don Sergio Ext. Brgy Holy Spirit, Diliman, Quezon City 1127'),
(2, 9, 'joshrramos', 'Josh', 'Ramos', '', '', '', 'jrramos@student.apc.edu.ph', '');

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
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `firstname`, `lastname`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `roles`, `status`, `created_at`, `updated_at`) VALUES
(1, 'apccpowebadmin', 'CPO', 'Admin', 'RNwH815ZzRffOVn8I6SmJQCTc5eHNK-5', '$2y$13$Hkw5VzXsJVxP2nJA7RFp9.mG5cnZIh6uYF6vdRWkOCB5bfdXZUAIS', NULL, 'cpo@apc.edu.ph', 20, 10, 1424616849, 1424616849),
(7, 'kosibayan', 'Kenneth', 'Sibayan', 'ub32EOfN5mwImO_KhgkIKJrG2yl1iKyQ', '$2y$13$HFfEB/CDV5UvYappUC7lEOYLrI0Hifsk.w9i6E8MNeZstQTGy.cYK', NULL, 'kosibayan@student.apc.edu.ph', 10, 10, 1424617778, 1424617778),
(8, 'acacle', 'Alyssa Mae', 'Acle', 'gqL-AVQT30QEWz83aeo3PJeW03vh3G7P', '$2y$13$ENcnW8KBe/OAawudFbDi2Og5Bj2K7yDkt0ZuRXYqDW.Lrhj12UK7G', NULL, 'acacle@student.apc.edu.ph', 15, 10, 1424660697, 1424660697),
(9, 'joshrramos', 'Josh', 'Ramos', '954kHhtkPlKz45KxIlSWodr1DWY-bIRu', '$2y$13$jtimqQghNQk/ge3oslXPz.KhBnn9LLdp1UJhCpdCBAl1AcfBur46y', NULL, 'jrramos@student.apc.edu.ph', 10, 10, 1425884101, 1425884101),
(69, 'liforrest', 'Forrest', 'Li', '55LVicboonig52tsggtZDAa2Le0GxowI', '$2y$13$yndfLKx/csavBAOLYqFvVu1qq4lk9ElxVBdi2Sosycq4m.Hm6dOr.', NULL, 'forrestli@garena.com', 15, 10, 1426420906, 1426420906);

--
-- Triggers `user`
--
DELIMITER //
CREATE TRIGGER `insert_student_or_iprofessor` AFTER INSERT ON `user`
 FOR EACH ROW begin

       
INSERT INTO iprofessor (user_id, username, firstname, lastname, email)
    SELECT user.id, user.username, user.firstname, user.lastname, user.email
		from user where user.id not in (select iprofessor.user_id from iprofessor) && roles = 15;

INSERT INTO student (user_id, username, firstname, lastname, email)
	SELECT user.id, user.username, user.firstname, user.lastname, user.email
    	from user where user.id not in (select student.user_id from student) && roles = 10;
        
delete from student where user_id in (select user.id from user where user.roles != 10);

delete from iprofessor where user_id in (select user.id from user where user.roles != 15);

end
//
DELIMITER ;
DELIMITER //
CREATE TRIGGER `update_childtables` AFTER UPDATE ON `user`
 FOR EACH ROW begin
INSERT INTO cpofficer (user_id, username, firstname, lastname, email)
    SELECT user.id, user.username, user.firstname, user.lastname, user.email
		from user where user.id not in (select cpofficer.user_id from cpofficer) && roles = 20;
        
INSERT INTO iprofessor (user_id, username, firstname, lastname, email)
    SELECT user.id, user.username, user.firstname, user.lastname, user.email
		from user where user.id not in (select iprofessor.user_id from iprofessor) && roles = 15;

INSERT INTO student (user_id, username, firstname, lastname, email)
	SELECT user.id, user.username, user.firstname, user.lastname, user.email
    	from user where user.id not in (select student.user_id from student) && roles = 10;
        
delete from cpofficer where user_id in (select user.id from user where user.roles != 20);

delete from student where user_id in (select user.id from user where user.roles != 10);

delete from iprofessor where user_id in (select user.id from user where user.roles != 15);

end
//
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cpofficer`
--
ALTER TABLE `cpofficer`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `industry_partners`
--
ALTER TABLE `industry_partners`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iprofessor`
--
ALTER TABLE `iprofessor`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`company_id`), ADD KEY `company_id` (`company_id`), ADD KEY `user_id_2` (`user_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
 ADD PRIMARY KEY (`version`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cpofficer`
--
ALTER TABLE `cpofficer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `industry_partners`
--
ALTER TABLE `industry_partners`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `iprofessor`
--
ALTER TABLE `iprofessor`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cpofficer`
--
ALTER TABLE `cpofficer`
ADD CONSTRAINT `cpofficer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `iprofessor`
--
ALTER TABLE `iprofessor`
ADD CONSTRAINT `iprofessor_ibfk_2` FOREIGN KEY (`company_id`) REFERENCES `industry_partners` (`id`),
ADD CONSTRAINT `iprofessor_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
