-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2015 at 05:35 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
--
-- Database: `apc-cpo-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', 1, NULL),
('create-partner', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 2, 'can view and manage back end site', NULL, NULL, NULL, NULL),
('create-partner', 1, 'can create partner table', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `file_uploads`
--

CREATE TABLE IF NOT EXISTS `file_uploads` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `industry_partners`
--

CREATE TABLE IF NOT EXISTS `industry_partners` (
`id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `company_contactnum` varchar(25) NOT NULL,
  `company_description` text NOT NULL,
  `company_logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `industry_partners`
--

INSERT INTO `industry_partners` (`id`, `company_name`, `company_address`, `company_contactnum`, `company_description`, `company_logo`) VALUES
(0, 'Asia Pacific College', '3 Humabon Place, Magallanes, Makati City', '852-9235', 'Real Projects, Real Learning.', ''),
(1, 'Garena', 'Taguig, Philippines', '092312334123', 'Connecting the dots.', ''),
(2, 'Emerson Network Company', 'Ortigas Ave, Pasig City', '8765541', 'Consider it solve. ', 'image/company_images/2.jpg'),
(3, 'Emerson Network Company', 'Pasig', '876896', 'Consider it solve', 'image/company_images/3.png');

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE IF NOT EXISTS `internship` (
`id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `iprofessor_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `iprofessor`
--

INSERT INTO `iprofessor` (`id`, `username`, `firstname`, `lastname`, `email`, `contact_num`, `company_id`, `user_id`) VALUES
(9, 'acacle', 'Alyssa Mae', 'Acle', 'acacle@student.apc.edu.ph', '', 0, 8),
(14, 'okayna', 'Okay', 'Na', 'amcacle@gmail.com', '', 0, 86);

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
-- Table structure for table `partner_hr`
--

CREATE TABLE IF NOT EXISTS `partner_hr` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_num` varchar(15) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partner_hr`
--

INSERT INTO `partner_hr` (`id`, `user_id`, `username`, `firstname`, `lastname`, `email`, `contact_num`, `company_id`) VALUES
(10, 77, 'partnerhr1', 'HR', 'PartnerOne', 'parterhr1@sample.com', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(11) NOT NULL,
  `posts_title` varchar(255) NOT NULL,
  `posts_body` text NOT NULL,
  `author` int(11) NOT NULL,
  `author_role` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `post_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `student_pic` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `student_id` varchar(15) NOT NULL,
  `contact_num` varchar(15) NOT NULL,
  `course` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `user_id`, `student_pic`, `username`, `firstname`, `lastname`, `student_id`, `contact_num`, `course`, `email`, `address`) VALUES
(1, 7, 'images/profile_images/kosibayan.jpg', 'kosibayan', 'Kenneth', 'Sibayan', '2011-100121', '09054005890', '123123', 'kosibayan@student.apc.edu.ph', '90 Z1 Don Sergio Ext. Brgy Holy Spirit, Diliman, Quezon City 1127'),
(2, 9, '', 'joshrramos', 'Josh', 'Ramos', '', '', '0', 'jrramos@student.apc.edu.ph', ''),
(8, 83, 'images/profile_images/dummyaccnt.jpg', 'dummyaccnt', 'dummy', 'adasdasdasd', '124521212', '231232323', 'asasdasasd', 'dummy@account.test', '123232332'),
(9, 84, 'images/profile_images/demo.jpg', 'demo', 'demo', 'demo', '2135234123', '2332', 'sewtgsddsdfd', 'demo@demonstration.com', 'fghjyhfdf'),
(10, 85, '', 'alyftw', 'Alyssa', 'Acle', '', '', '', 'amcacle101@gmail.com', ''),
(11, 87, 'images/profile_images/SanaGumanaNanana.png', 'SanaGumanaNanana', 'alyssa', 'jdkbd', '2011-100504', '6578922', 'IT', 'acacle@gmail.com', '5678 Barangay Madilim, Di Makita si Troi, Makati'),
(12, 88, 'images/profile_images/dummyacount2.png', 'dummyacount2', 'dummy', 'account', '2011-100504', '8789056', 'IT', 'dummyaccount2@test.com', '6025 Kalayaan Ave., Brgy. Olympia, Makati');

-- --------------------------------------------------------

--
-- Table structure for table `student_journal`
--

CREATE TABLE IF NOT EXISTS `student_journal` (
`id` int(11) NOT NULL,
  `intership_id` int(11) NOT NULL,
  `weekly_learning` text NOT NULL,
  `weekly_exprating` int(11) NOT NULL,
  `tasks` text NOT NULL,
  `issues` text NOT NULL,
  `steps_did` text NOT NULL,
  `task_relevance` text NOT NULL,
  `collegue_difficulty` text NOT NULL,
  `differ_opinions` text NOT NULL,
  `moral_ethical_questions` text NOT NULL,
  `company_contentment` int(11) NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `firstname`, `lastname`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `roles`, `status`, `created_at`, `updated_at`) VALUES
(1, 'apccpowebadmin', 'CPO', 'Admin', 'RNwH815ZzRffOVn8I6SmJQCTc5eHNK-5', '$2y$13$Hkw5VzXsJVxP2nJA7RFp9.mG5cnZIh6uYF6vdRWkOCB5bfdXZUAIS', NULL, 'cpo@apc.edu.ph', 20, 10, 1424616849, 1424616849),
(7, 'kosibayan', 'Kenneth', 'Sibayan', 'ub32EOfN5mwImO_KhgkIKJrG2yl1iKyQ', '$2y$13$HFfEB/CDV5UvYappUC7lEOYLrI0Hifsk.w9i6E8MNeZstQTGy.cYK', NULL, 'kosibayan@student.apc.edu.ph', 10, 10, 1424617778, 1424617778),
(8, 'acacle', 'Alyssa Mae', 'Acle', 'gqL-AVQT30QEWz83aeo3PJeW03vh3G7P', '$2y$13$ENcnW8KBe/OAawudFbDi2Og5Bj2K7yDkt0ZuRXYqDW.Lrhj12UK7G', NULL, 'acacle@student.apc.edu.ph', 15, 10, 1424660697, 1424660697),
(9, 'joshrramos', 'Josh', 'Ramos', '954kHhtkPlKz45KxIlSWodr1DWY-bIRu', '$2y$13$jtimqQghNQk/ge3oslXPz.KhBnn9LLdp1UJhCpdCBAl1AcfBur46y', NULL, 'jrramos@student.apc.edu.ph', 10, 10, 1425884101, 1425884101),
(77, 'partnerhr1', 'HR', 'PartnerOne', 'E_yg68arEyl4_wBUjIBmbTQlIJCP5TKr', '$2y$13$YJXTpUxRqKzVMdbGTms/tO1kTAQBYsvEkIx8gvq1r1VTP84OCPwl2', NULL, 'parterhr1@sample.com', 25, 10, 1427439184, 1427439184),
(83, 'dummyaccnt', 'dummy', 'adasdasdasd', 'Li1a_BB-m2SibJFAeso7VSqDtMZCpC1o', '$2y$13$mA7iJ0Wa/nZ.4Jb5ZbyQYuoP7AUpcoW8K5M6oHrVYelAtMR/mWwHO', NULL, 'dummy@account.test', 10, 10, 1427620561, 1427620561),
(84, 'demo', 'demo', 'demo', 'FVSG0BDXHBHpIC_fWG_UASaNpsZf5atA', '$2y$13$tJEVxT9qbZsUi9IPz8kqxeAtQnKtKUgoQs1HsihzHSAAiLtAHlCga', NULL, 'demo@demonstration.com', 10, 10, 1427628224, 1427628224),
(85, 'alyftw', 'Alyssa', 'Acle', 'D_bKhxfVY0xOgy26jQ7tI_bic-ed3q2m', '$2y$13$LT9duVOy71d.MoG8b07UJODQpvjpAAumvuLsrKvTmNIAVfP./F.yO', NULL, 'amcacle101@gmail.com', 10, 10, 1427665137, 1427665137),
(86, 'okayna', 'Okay', 'Na', '_ZeL09quzMx8fnyFZX45b4NIGPbG7dYo', '$2y$13$bHlXjTe5kquBbxrkmcwtXOXjwChErGYo9cCmK/sY1rhojHIrcSM5u', NULL, 'amcacle@gmail.com', 15, 10, 1427668974, 1427668974),
(87, 'SanaGumanaNanana', 'alyssa', 'jdkbd', '_on-QC-2OIwwwpHsSzzWYOfYjf9pkdgt', '$2y$13$kTJTAv7dB6Jj8rkTkiKUSukX0tjcSxxSl38aCtTkQBFcFPcYfi3DG', NULL, 'acacle@gmail.com', 10, 10, 1427683296, 1427683296),
(88, 'dummyacount2', 'dummy', 'account', 'XEsU1F7zP8tGmXD6nWkzVHMYbfwakLwI', '$2y$13$Wgjx2mYCdbLfs9i3eO48MuCvEX0Adhambz/DgAl94TgD6Nh2cXiry', NULL, 'dummyaccount2@test.com', 10, 10, 1427780553, 1427780553);

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
        
INSERT INTO partner_hr (user_id, username, firstname, lastname, email)
    SELECT user.id, user.username, user.firstname, user.lastname, user.email
		from user where user.id not in (select partner_hr.user_id from partner_hr) && roles = 25;
        
delete from student where user_id in (select user.id from user where user.roles != 10);

delete from iprofessor where user_id in (select user.id from user where user.roles != 15);

delete from partner_hr where user_id in (select user.id from user where user.roles != 25);


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

INSERT INTO partner_hr (user_id, username, firstname, lastname, email)
    SELECT user.id, user.username, user.firstname, user.lastname, user.email
		from user where user.id not in (select partner_hr.user_id from partner_hr) && roles = 25;
        
INSERT INTO student (user_id, username, firstname, lastname, email)
	SELECT user.id, user.username, user.firstname, user.lastname, user.email
    	from user where user.id not in (select student.user_id from student) && roles = 10;
        
delete from cpofficer where user_id in (select user.id from user where user.roles != 20);

delete from student where user_id in (select user.id from user where user.roles != 10);

delete from iprofessor where user_id in (select user.id from user where user.roles != 15);

delete from partner_hr where user_id in (select user.id from user where user.roles != 25);


end
//
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
 ADD PRIMARY KEY (`item_name`,`user_id`), ADD KEY `auth_assignment_ibfk_2` (`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
 ADD PRIMARY KEY (`name`), ADD KEY `rule_name` (`rule_name`), ADD KEY `type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
 ADD PRIMARY KEY (`parent`,`child`), ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
 ADD PRIMARY KEY (`name`);

--
-- Indexes for table `cpofficer`
--
ALTER TABLE `cpofficer`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `file_uploads`
--
ALTER TABLE `file_uploads`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `industry_partners`
--
ALTER TABLE `industry_partners`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
 ADD PRIMARY KEY (`id`), ADD KEY `student_id` (`student_id`,`iprofessor_id`), ADD KEY `iprofessor_id` (`iprofessor_id`), ADD KEY `company_id` (`company_id`);

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
-- Indexes for table `partner_hr`
--
ALTER TABLE `partner_hr`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`,`company_id`), ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`id`), ADD KEY `author` (`author`,`author_role`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`), ADD KEY `course` (`course`), ADD KEY `course_2` (`course`);

--
-- Indexes for table `student_journal`
--
ALTER TABLE `student_journal`
 ADD PRIMARY KEY (`id`), ADD KEY `intership_id` (`intership_id`);

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
-- AUTO_INCREMENT for table `file_uploads`
--
ALTER TABLE `file_uploads`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `industry_partners`
--
ALTER TABLE `industry_partners`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `internship`
--
ALTER TABLE `internship`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `iprofessor`
--
ALTER TABLE `iprofessor`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `partner_hr`
--
ALTER TABLE `partner_hr`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `student_journal`
--
ALTER TABLE `student_journal`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=89;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `auth_assignment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cpofficer`
--
ALTER TABLE `cpofficer`
ADD CONSTRAINT `cpofficer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `file_uploads`
--
ALTER TABLE `file_uploads`
ADD CONSTRAINT `file_uploads_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `internship`
--
ALTER TABLE `internship`
ADD CONSTRAINT `internship_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `internship_ibfk_2` FOREIGN KEY (`iprofessor_id`) REFERENCES `iprofessor` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `internship_ibfk_3` FOREIGN KEY (`company_id`) REFERENCES `industry_partners` (`id`);

--
-- Constraints for table `iprofessor`
--
ALTER TABLE `iprofessor`
ADD CONSTRAINT `iprofessor_ibfk_2` FOREIGN KEY (`company_id`) REFERENCES `industry_partners` (`id`),
ADD CONSTRAINT `iprofessor_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `partner_hr`
--
ALTER TABLE `partner_hr`
ADD CONSTRAINT `Partner_HR_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `Partner_HR_ibfk_2` FOREIGN KEY (`company_id`) REFERENCES `industry_partners` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`author`) REFERENCES `user` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_journal`
--
ALTER TABLE `student_journal`
ADD CONSTRAINT `student_journal_ibfk_1` FOREIGN KEY (`intership_id`) REFERENCES `internship` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
--
-- Database: `apc-softdev-it112-09`
--

-- --------------------------------------------------------

--
-- Table structure for table `cpo_officers`
--

CREATE TABLE IF NOT EXISTS `cpo_officers` (
`userid` int(6) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password_hash` varchar(70) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpo_officers`
--

INSERT INTO `cpo_officers` (`userid`, `firstname`, `lastname`, `email`, `password_hash`) VALUES
(1, 'Dummy', 'Dummies', 'dummy@dummy.com', 'asdfghjkl');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`post_id` int(11) NOT NULL,
  `post_title` varchar(140) NOT NULL,
  `post_description` text NOT NULL,
  `post_date` date NOT NULL,
  `userid` int(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_description`, `post_date`, `userid`) VALUES
(1, 'Welcome Interns!', 'This is the new APC-CPO Microsite', '2015-02-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_num` varchar(12) NOT NULL DEFAULT '',
  `lastname` varchar(30) DEFAULT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `initial` varchar(5) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password_hash` varchar(70) DEFAULT NULL,
  `enrolled` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_num`, `lastname`, `firstname`, `initial`, `email`, `password_hash`, `enrolled`) VALUES
('2011-100121', 'Sibayan', 'Kenneth', 'O', 'kosibayan@student.apc.edu.ph', 'asfdgd', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cpo_officers`
--
ALTER TABLE `cpo_officers`
 ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`post_id`), ADD KEY `userid` (`userid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`student_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cpo_officers`
--
ALTER TABLE `cpo_officers`
MODIFY `userid` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `cpo_officers` (`userid`);
--
-- Database: `cdcol`
--

-- --------------------------------------------------------

--
-- Table structure for table `cds`
--

CREATE TABLE IF NOT EXISTS `cds` (
  `titel` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `interpret` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `jahr` int(11) DEFAULT NULL,
`id` bigint(20) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `cds`
--

INSERT INTO `cds` (`titel`, `interpret`, `jahr`, `id`) VALUES
('Beauty', 'Ryuichi Sakamoto', 1990, 1),
('Goodbye Country (Hello Nightclub)', 'Groove Armada', 2001, 4),
('Glee', 'Bran Van 3000', 1997, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cds`
--
ALTER TABLE `cds`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cds`
--
ALTER TABLE `cds`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;--
-- Database: `kensbyn`
--

-- --------------------------------------------------------

--
-- Table structure for table `cpo_officers`
--

CREATE TABLE IF NOT EXISTS `cpo_officers` (
`userid` int(6) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password_hash` varchar(70) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpo_officers`
--

INSERT INTO `cpo_officers` (`userid`, `firstname`, `lastname`, `email`, `password_hash`) VALUES
(1, 'Dummy', 'Dummies', 'dummy@dummy.com', 'asdfghjkl');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`post_id` int(11) NOT NULL,
  `post_title` varchar(140) NOT NULL,
  `post_description` text NOT NULL,
  `post_date` date NOT NULL,
  `userid` int(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_description`, `post_date`, `userid`) VALUES
(1, 'Welcome Interns!', 'This is the new APC-CPO Microsite', '2015-02-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_num` varchar(12) NOT NULL DEFAULT '',
  `lastname` varchar(30) DEFAULT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `initial` varchar(5) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password_hash` varchar(70) DEFAULT NULL,
  `enrolled` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_num`, `lastname`, `firstname`, `initial`, `email`, `password_hash`, `enrolled`) VALUES
('2011-100121', 'Sibayan', 'Kenneth', 'O', 'kosibayan@student.apc.edu.ph', 'asfdgd', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cpo_officers`
--
ALTER TABLE `cpo_officers`
 ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`post_id`), ADD KEY `userid` (`userid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`student_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cpo_officers`
--
ALTER TABLE `cpo_officers`
MODIFY `userid` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `cpo_officers` (`userid`);
--
-- Database: `kensbyn-advanced`
--

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
  `company` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `firstname`, `lastname`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `roles`, `company`, `status`, `created_at`, `updated_at`) VALUES
(1, 'apccpowebadmin', 'CPO', 'Admin', 'RNwH815ZzRffOVn8I6SmJQCTc5eHNK-5', '$2y$13$Hkw5VzXsJVxP2nJA7RFp9.mG5cnZIh6uYF6vdRWkOCB5bfdXZUAIS', NULL, 'cpo@apc.edu.ph', 20, '', 10, 1424616849, 1424616849),
(7, 'kosibayan', 'Kenneth', 'Sibayan', 'ub32EOfN5mwImO_KhgkIKJrG2yl1iKyQ', '$2y$13$HFfEB/CDV5UvYappUC7lEOYLrI0Hifsk.w9i6E8MNeZstQTGy.cYK', NULL, 'kosibayan@student.apc.edu.ph', 10, '', 10, 1424617778, 1424617778);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
 ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;--
-- Database: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `pma_bookmark`
--

CREATE TABLE IF NOT EXISTS `pma_bookmark` (
`id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma_column_info`
--

CREATE TABLE IF NOT EXISTS `pma_column_info` (
`id` int(5) unsigned NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

--
-- Dumping data for table `pma_column_info`
--

INSERT INTO `pma_column_info` (`id`, `db_name`, `table_name`, `column_name`, `comment`, `mimetype`, `transformation`, `transformation_options`) VALUES
(4, 'kensbyn', 'posts', 'post_title', '', '', '_', ''),
(3, 'kensbyn', 'posts', 'post_id', '', '', '_', ''),
(5, 'kensbyn', 'posts', 'post_description', '', '', '_', ''),
(6, 'kensbyn', 'posts', 'post_date', '', '', '_', ''),
(8, 'kensbyn', 'posts', 'userid', '', '', '_', ''),
(9, 'kensbyn', 'cpo_officers', 'userid', '', '', '_', ''),
(10, 'kensbyn-advanced', 'user', 'firstname', '', '', '_', ''),
(11, 'kensbyn-advanced', 'user', 'lastname', '', '', '_', ''),
(12, 'kensbyn-advanced', 'user', 'roles', '', '', '_', ''),
(13, 'kensbyn-advanced', 'user', 'company', '', '', '_', '');

-- --------------------------------------------------------

--
-- Table structure for table `pma_designer_coords`
--

CREATE TABLE IF NOT EXISTS `pma_designer_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `v` tinyint(4) DEFAULT NULL,
  `h` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma_history`
--

CREATE TABLE IF NOT EXISTS `pma_history` (
`id` bigint(20) unsigned NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma_navigationhiding`
--

CREATE TABLE IF NOT EXISTS `pma_navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma_pdf_pages`
--

CREATE TABLE IF NOT EXISTS `pma_pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
`page_nr` int(10) unsigned NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma_recent`
--

CREATE TABLE IF NOT EXISTS `pma_recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma_recent`
--

INSERT INTO `pma_recent` (`username`, `tables`) VALUES
('root', '{"1":{"db":"apc-cpo-commsweb_database","table":"industry_partners"},"2":{"db":"apc-cpo-commsweb_database","table":"iprofessor"},"3":{"db":"apc-cpo-commsweb_database","table":"user"},"4":{"db":"apc-cpo-commsweb_database","table":"student"},"5":{"db":"softdev_sibayan_kenneth_ourspace","table":"myaddress"}}');

-- --------------------------------------------------------

--
-- Table structure for table `pma_relation`
--

CREATE TABLE IF NOT EXISTS `pma_relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma_savedsearches`
--

CREATE TABLE IF NOT EXISTS `pma_savedsearches` (
`id` int(5) unsigned NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma_table_coords`
--

CREATE TABLE IF NOT EXISTS `pma_table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float unsigned NOT NULL DEFAULT '0',
  `y` float unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma_table_info`
--

CREATE TABLE IF NOT EXISTS `pma_table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma_table_uiprefs`
--

CREATE TABLE IF NOT EXISTS `pma_table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma_tracking`
--

CREATE TABLE IF NOT EXISTS `pma_tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) unsigned NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma_userconfig`
--

CREATE TABLE IF NOT EXISTS `pma_userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma_userconfig`
--

INSERT INTO `pma_userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2015-02-10 05:32:27', '{"collation_connection":"utf8mb4_general_ci"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma_usergroups`
--

CREATE TABLE IF NOT EXISTS `pma_usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma_users`
--

CREATE TABLE IF NOT EXISTS `pma_users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma_bookmark`
--
ALTER TABLE `pma_bookmark`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma_column_info`
--
ALTER TABLE `pma_column_info`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma_designer_coords`
--
ALTER TABLE `pma_designer_coords`
 ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma_history`
--
ALTER TABLE `pma_history`
 ADD PRIMARY KEY (`id`), ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma_navigationhiding`
--
ALTER TABLE `pma_navigationhiding`
 ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma_pdf_pages`
--
ALTER TABLE `pma_pdf_pages`
 ADD PRIMARY KEY (`page_nr`), ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma_recent`
--
ALTER TABLE `pma_recent`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma_relation`
--
ALTER TABLE `pma_relation`
 ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`), ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma_savedsearches`
--
ALTER TABLE `pma_savedsearches`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma_table_coords`
--
ALTER TABLE `pma_table_coords`
 ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma_table_info`
--
ALTER TABLE `pma_table_info`
 ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma_table_uiprefs`
--
ALTER TABLE `pma_table_uiprefs`
 ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma_tracking`
--
ALTER TABLE `pma_tracking`
 ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma_userconfig`
--
ALTER TABLE `pma_userconfig`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma_usergroups`
--
ALTER TABLE `pma_usergroups`
 ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma_users`
--
ALTER TABLE `pma_users`
 ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma_bookmark`
--
ALTER TABLE `pma_bookmark`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma_column_info`
--
ALTER TABLE `pma_column_info`
MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `pma_history`
--
ALTER TABLE `pma_history`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma_pdf_pages`
--
ALTER TABLE `pma_pdf_pages`
MODIFY `page_nr` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma_savedsearches`
--
ALTER TABLE `pma_savedsearches`
MODIFY `id` int(5) unsigned NOT NULL AUTO_INCREMENT;--
-- Database: `project_kojicver1.0`
--

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
('m000000_000000_base', 1423934107),
('m130524_201442_init', 1423934112);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
 ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;--
-- Database: `softdev_sibayan_kenneth_ourspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `myaddress`
--

CREATE TABLE IF NOT EXISTS `myaddress` (
`id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `home_address` varchar(50) DEFAULT NULL,
  `landline` varchar(20) DEFAULT NULL,
  `cellphone` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `myaddress`
--

INSERT INTO `myaddress` (`id`, `firstname`, `middlename`, `lastname`, `gender`, `home_address`, `landline`, `cellphone`, `created_at`) VALUES
(1, 'Kenneth', 'Ocier', 'Sibayan', 'M', 'Diliman, Quezon City', '7097958', '0905405890', '2015-02-28 01:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `mycomment`
--

CREATE TABLE IF NOT EXISTS `mycomment` (
`id` int(11) NOT NULL,
  `myaddress_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `body` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mycomment`
--

INSERT INTO `mycomment` (`id`, `myaddress_id`, `author`, `body`, `created_at`) VALUES
(1, 1, 'Kenneth Sibayan', 'This is a body of a comment', '2015-02-28 01:07:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myaddress`
--
ALTER TABLE `myaddress`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mycomment`
--
ALTER TABLE `mycomment`
 ADD PRIMARY KEY (`id`), ADD KEY `myaddress_id` (`myaddress_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myaddress`
--
ALTER TABLE `myaddress`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mycomment`
--
ALTER TABLE `mycomment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `mycomment`
--
ALTER TABLE `mycomment`
ADD CONSTRAINT `mycomment_ibfk_1` FOREIGN KEY (`myaddress_id`) REFERENCES `myaddress` (`id`);
--
-- Database: `test`
--
--
-- Database: `webauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_pwd`
--

CREATE TABLE IF NOT EXISTS `user_pwd` (
  `name` char(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `pass` char(32) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user_pwd`
--

INSERT INTO `user_pwd` (`name`, `pass`) VALUES
('xampp', 'wampp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_pwd`
--
ALTER TABLE `user_pwd`
 ADD PRIMARY KEY (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
