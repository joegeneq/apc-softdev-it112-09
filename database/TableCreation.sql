-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2015 at 02:37 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
