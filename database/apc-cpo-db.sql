-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Apr 06, 2015 at 10:00 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6
=======
-- Generation Time: Apr 06, 2015 at 01:51 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83

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
-- Table structure for table `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL,
<<<<<<< HEAD
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `auth_assignment_ibfk_2` (`user_id`)
=======
  `created_at` int(11) DEFAULT NULL
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83
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
<<<<<<< HEAD
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `type` (`type`)
=======
  `updated_at` int(11) DEFAULT NULL
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83
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
<<<<<<< HEAD
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
=======
  `child` varchar(64) NOT NULL
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
<<<<<<< HEAD
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
=======
  `updated_at` int(11) DEFAULT NULL
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
<<<<<<< HEAD
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(100) NOT NULL,
  `course_desc` text NOT NULL,
  `school` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `school` (`school`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
=======
`id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_desc` text NOT NULL,
  `school` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83

-- --------------------------------------------------------

--
-- Table structure for table `cpofficer`
--

CREATE TABLE IF NOT EXISTS `cpofficer` (
<<<<<<< HEAD
  `id` int(11) NOT NULL AUTO_INCREMENT,
=======
`id` int(11) NOT NULL,
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83
  `user_id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
<<<<<<< HEAD
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;
=======
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83

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
<<<<<<< HEAD
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
=======
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83

-- --------------------------------------------------------

--
-- Table structure for table `industry_partners`
--

CREATE TABLE IF NOT EXISTS `industry_partners` (
<<<<<<< HEAD
  `id` int(11) NOT NULL AUTO_INCREMENT,
=======
`id` int(11) NOT NULL,
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83
  `company_name` varchar(50) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `company_contactnum` varchar(25) NOT NULL,
  `company_description` text NOT NULL,
<<<<<<< HEAD
  `company_logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;
=======
  `company_logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83

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
<<<<<<< HEAD
  `id` int(11) NOT NULL AUTO_INCREMENT,
=======
`id` int(11) NOT NULL,
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83
  `student_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `iprofessor_id` int(11) NOT NULL,
<<<<<<< HEAD
  `company_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`,`iprofessor_id`),
  KEY `iprofessor_id` (`iprofessor_id`),
  KEY `company_id` (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
=======
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83

-- --------------------------------------------------------

--
-- Table structure for table `iprofessor`
--

CREATE TABLE IF NOT EXISTS `iprofessor` (
<<<<<<< HEAD
  `id` int(11) NOT NULL AUTO_INCREMENT,
=======
`id` int(11) NOT NULL,
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83
  `username` varchar(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_num` varchar(15) NOT NULL,
  `company_id` int(11) NOT NULL,
<<<<<<< HEAD
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`company_id`),
  KEY `company_id` (`company_id`),
  KEY `user_id_2` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;
=======
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83

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
<<<<<<< HEAD
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
=======
  `apply_time` int(11) DEFAULT NULL
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83
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
<<<<<<< HEAD
  `id` int(11) NOT NULL AUTO_INCREMENT,
=======
`id` int(11) NOT NULL,
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_num` varchar(15) NOT NULL,
<<<<<<< HEAD
  `company_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`company_id`),
  KEY `company_id` (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;
=======
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83

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
<<<<<<< HEAD
  `author` int(11) NOT NULL,
  `author_role` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `post_type` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `author` (`author`,`author_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------
=======
  `post_attachment` varchar(255) DEFAULT NULL,
  `author` int(11) NOT NULL,
  `author_role` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `post_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83

--
-- Indexes for dumped tables
--

--
<<<<<<< HEAD
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `student_pic` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `student_id` varchar(15) NOT NULL,
  `contact_num` varchar(15) NOT NULL,
  `course` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `course` (`course`),
  KEY `course_2` (`course`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `remarks` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `intership_id` (`intership_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

=======
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
-- Indexes for table `courses`
--
ALTER TABLE `courses`
 ADD PRIMARY KEY (`id`), ADD KEY `school` (`school`);

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
-- Indexes for table `school`
--
ALTER TABLE `school`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`), ADD KEY `course` (`course`);

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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83
--
ALTER TABLE `posts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
<<<<<<< HEAD
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_assignment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
=======
ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `auth_assignment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
<<<<<<< HEAD
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;
=======
ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
<<<<<<< HEAD
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
=======
ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
<<<<<<< HEAD
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`school`) REFERENCES `school` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
=======
ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`school`) REFERENCES `school` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83

--
-- Constraints for table `cpofficer`
--
ALTER TABLE `cpofficer`
<<<<<<< HEAD
  ADD CONSTRAINT `cpofficer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
=======
ADD CONSTRAINT `cpofficer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83

--
-- Constraints for table `file_uploads`
--
ALTER TABLE `file_uploads`
<<<<<<< HEAD
  ADD CONSTRAINT `file_uploads_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
=======
ADD CONSTRAINT `file_uploads_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83

--
-- Constraints for table `internship`
--
ALTER TABLE `internship`
<<<<<<< HEAD
  ADD CONSTRAINT `internship_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `internship_ibfk_2` FOREIGN KEY (`iprofessor_id`) REFERENCES `iprofessor` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `internship_ibfk_3` FOREIGN KEY (`company_id`) REFERENCES `industry_partners` (`id`);
=======
ADD CONSTRAINT `internship_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `internship_ibfk_2` FOREIGN KEY (`iprofessor_id`) REFERENCES `iprofessor` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `internship_ibfk_3` FOREIGN KEY (`company_id`) REFERENCES `industry_partners` (`id`);
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83

--
-- Constraints for table `iprofessor`
--
ALTER TABLE `iprofessor`
<<<<<<< HEAD
  ADD CONSTRAINT `iprofessor_ibfk_2` FOREIGN KEY (`company_id`) REFERENCES `industry_partners` (`id`),
  ADD CONSTRAINT `iprofessor_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
=======
ADD CONSTRAINT `iprofessor_ibfk_2` FOREIGN KEY (`company_id`) REFERENCES `industry_partners` (`id`),
ADD CONSTRAINT `iprofessor_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83

--
-- Constraints for table `partner_hr`
--
ALTER TABLE `partner_hr`
<<<<<<< HEAD
  ADD CONSTRAINT `Partner_HR_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `Partner_HR_ibfk_2` FOREIGN KEY (`company_id`) REFERENCES `industry_partners` (`id`) ON DELETE CASCADE;
=======
ADD CONSTRAINT `Partner_HR_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `Partner_HR_ibfk_2` FOREIGN KEY (`company_id`) REFERENCES `industry_partners` (`id`) ON DELETE CASCADE;
>>>>>>> f939e47a1656c3383196269e87c492ef4e65da83

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`author`) REFERENCES `user` (`id`) ON DELETE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
