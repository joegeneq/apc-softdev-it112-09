-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2015 at 02:42 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `amcacle`
--

-- --------------------------------------------------------

--
-- Table structure for table `career_placement_officer`
--

CREATE TABLE IF NOT EXISTS `career_placement_officer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `e-mail_address` varchar(50) NOT NULL,
  `role` int(5) NOT NULL DEFAULT '1',
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `industry_partner`
--

CREATE TABLE IF NOT EXISTS `industry_partner` (
  `id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_desc` text NOT NULL,
  `company_address` varchar(100) NOT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `e-mail_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `industry_professor`
--

CREATE TABLE IF NOT EXISTS `industry_professor` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `e-mail_address` varchar(50) NOT NULL,
  `role` int(5) NOT NULL DEFAULT '2',
  `company_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `company_id` (`company_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(100) NOT NULL,
  `post_desc` text NOT NULL,
  `post_created` datetime NOT NULL,
  `cpo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cpo_id` (`cpo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `student_id` varchar(15) NOT NULL,
  `course` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `e-mail_address` varchar(50) NOT NULL,
  `role` int(5) NOT NULL DEFAULT '3',
  `cpo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cpo_id` (`cpo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student_ip`
--

CREATE TABLE IF NOT EXISTS `student_ip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `student_id` int(11) NOT NULL,
  `industry_professor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`),
  KEY `industry_professor_id` (`industry_professor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_file`
--

CREATE TABLE IF NOT EXISTS `uploaded_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(100) NOT NULL,
  `filetype` varchar(15) NOT NULL,
  `data` varbinary(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `e-mail` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `career_placement_officer`
--
ALTER TABLE `career_placement_officer`
  ADD CONSTRAINT `career_placement_officer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `industry_professor`
--
ALTER TABLE `industry_professor`
  ADD CONSTRAINT `industry_professor_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `industry_partner` (`id`),
  ADD CONSTRAINT `industry_professor_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`cpo_id`) REFERENCES `career_placement_officer` (`id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`cpo_id`) REFERENCES `career_placement_officer` (`id`);

--
-- Constraints for table `student_ip`
--
ALTER TABLE `student_ip`
  ADD CONSTRAINT `student_ip_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `student_ip_ibfk_2` FOREIGN KEY (`industry_professor_id`) REFERENCES `industry_professor` (`id`);

--
-- Constraints for table `uploaded_file`
--
ALTER TABLE `uploaded_file`
  ADD CONSTRAINT `uploaded_file_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
