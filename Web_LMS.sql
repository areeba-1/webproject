-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2015 at 12:40 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web_lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
`b_id` int(11) NOT NULL,
  `ISBN` varchar(20) NOT NULL DEFAULT '',
  `title` varchar(250) NOT NULL,
  `edition` varchar(10) DEFAULT NULL,
  `author` varchar(40) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `total_copies` int(11) NOT NULL,
  `available_copies` int(11) NOT NULL,
  `b_img` varchar(100) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`b_id`, `ISBN`, `title`, `edition`, `author`, `p_id`, `c_id`, `price`, `total_copies`, `available_copies`, `b_img`) VALUES
(1, 'Sr-123', 'Discrete Mathematics', '2nd', 'Sussana S.Epp', 4, 3, '$100', 10, 10, ''),
(2, 'Sr-147', 'Web Development', '2nd', 'James Martin', 3, 5, '$150', 8, 3, ''),
(3, 'S132', 'Operating System', '3rd', 'Rameez Elmarsi', 2, 5, '$80', 10, 6, ''),
(6, 'Sr-234', 'Tennis Magzine', '3rd', 'James Law', 3, 6, '$250', 50, 25, ''),
(7, 'Sr-134', 'Programming in C++', '3rd', 'DS Malik', 1, 5, '$50', 14, 8, ''),
(8, 'Sr-100', 'Data Structres', '4th', 'Jimmy Cornor', 3, 5, '$70', 12, 6, '');

-- --------------------------------------------------------

--
-- Table structure for table `borrowed_by`
--

CREATE TABLE IF NOT EXISTS `borrowed_by` (
  `l_id` int(11) NOT NULL DEFAULT '0',
  `m_id` int(11) NOT NULL DEFAULT '0',
  `ISBN` varchar(20) NOT NULL DEFAULT '',
  `issue_date` date NOT NULL DEFAULT '0000-00-00',
  `return_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`c_id` int(11) NOT NULL,
  `c_name` varchar(40) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `c_name`) VALUES
(1, 'English Literature'),
(2, 'Urdu Literature'),
(3, 'Mathematics'),
(4, 'Fantasy and Fiction'),
(5, 'Computer Science'),
(6, 'Magazines'),
(7, 'History'),
(8, 'Religious');

-- --------------------------------------------------------

--
-- Table structure for table `librarians`
--

CREATE TABLE IF NOT EXISTS `librarians` (
`l_id` int(11) NOT NULL,
  `l_name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `librarians`
--

INSERT INTO `librarians` (`l_id`, `l_name`, `email`, `password`, `address`, `contact`) VALUES
(1, 'James Martin', 'james@yahoo.com', 'james123', 'Australia', '092362514'),
(2, 'Rafael Nadal', 'rafa@yahoo.com', 'rafa159', 'Spain', '0142536253'),
(3, 'Andre Aggasi', 'andre@gmail.com', '10203040', 'America', '032145124'),
(4, 'Stan Wawrinka', 'stan@yahoo.com', 'stan789', 'Switzerland', '092145638');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
`m_id` int(11) NOT NULL,
  `m_name` varchar(40) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `borrow_attempts` int(11) NOT NULL DEFAULT '3',
  `fine` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`m_id`, `m_name`, `gender`, `email`, `password`, `contact`, `DOB`, `address`, `borrow_attempts`, `fine`) VALUES
(1, 'Awais Sibghat', 'male', 'awais@gmail.com', '12345', '0321321321', '2015-06-19', 'lahore', 1, 0),
(2, 'Roger Federer', 'male', 'roger@gmail.com', '12345000', '092654123', '2015-08-08', 'Switzerland', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE IF NOT EXISTS `publishers` (
`p_id` int(11) NOT NULL,
  `p_name` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`p_id`, `p_name`, `address`, `contact`) VALUES
(1, 'Ali', 'Lahore', '123'),
(2, 'Sara', 'Karachi', '456'),
(3, 'James', 'Islamabad', '789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
 ADD PRIMARY KEY (`b_id`,`ISBN`);

--
-- Indexes for table `borrowed_by`
--
ALTER TABLE `borrowed_by`
 ADD PRIMARY KEY (`l_id`,`m_id`,`ISBN`,`issue_date`), ADD KEY `ISBN` (`ISBN`), ADD KEY `m_id` (`m_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `librarians`
--
ALTER TABLE `librarians`
 ADD PRIMARY KEY (`l_id`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `contact` (`contact`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`m_id`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
 ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `librarians`
--
ALTER TABLE `librarians`
MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
