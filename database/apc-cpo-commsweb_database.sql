-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2015 at 02:56 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apc-cpo-db`
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `industry_partners`
--

INSERT INTO `industry_partners` (`id`, `company_name`, `company_address`, `company_contactnum`, `company_description`, `company_logo`) VALUES
(0, 'Asia Pacific College', '3 Humabon Place, Magallanes, Makati City', '852-9235', 'Real Projects, Real Learning.', ''),
(1, 'Garena', 'Taguig, Philippines', '092312334123', 'Connecting the dots.', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `iprofessor`
--

INSERT INTO `iprofessor` (`id`, `username`, `firstname`, `lastname`, `email`, `contact_num`, `company_id`, `user_id`) VALUES
(9, 'acacle', 'Alyssa Mae', 'Acle', 'acacle@student.apc.edu.ph', '', 0, 8);

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `user_id`, `student_pic`, `username`, `firstname`, `lastname`, `student_id`, `contact_num`, `course`, `email`, `address`) VALUES
(1, 7, 'images/profile_images/kosibayan.jpg', 'kosibayan', 'Kenneth', 'Sibayan', '2011-100121', '09054005890', '123123', 'kosibayan@student.apc.edu.ph', '90 Z1 Don Sergio Ext. Brgy Holy Spirit, Diliman, Quezon City 1127'),
(2, 9, '', 'joshrramos', 'Josh', 'Ramos', '', '', '0', 'jrramos@student.apc.edu.ph', ''),
(8, 83, 'images/profile_images/dummyaccnt.jpg', 'dummyaccnt', 'dummy', 'adasdasdasd', '124521212', '231232323', 'asasdasasd', 'dummy@account.test', '123232332'),
(9, 84, 'images/profile_images/demo.jpg', 'demo', 'demo', 'demo', '2135234123', '2332', 'sewtgsddsdfd', 'demo@demonstration.com', 'fghjyhfdf');

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
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(84, 'demo', 'demo', 'demo', 'FVSG0BDXHBHpIC_fWG_UASaNpsZf5atA', '$2y$13$tJEVxT9qbZsUi9IPz8kqxeAtQnKtKUgoQs1HsihzHSAAiLtAHlCga', NULL, 'demo@demonstration.com', 10, 10, 1427628224, 1427628224);

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `internship`
--
ALTER TABLE `internship`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `iprofessor`
--
ALTER TABLE `iprofessor`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `student_journal`
--
ALTER TABLE `student_journal`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
--
-- Constraints for dumped tables
--

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
