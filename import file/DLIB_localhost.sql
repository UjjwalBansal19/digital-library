-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 21, 2012 at 02:22 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--
CREATE DATABASE `library` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `library`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
(`admin`,`admin`);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `book_id` varchar(11) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_image` varchar(50) NOT NULL,
  `book_price` varchar(10) NOT NULL,
  `book_discription` text NOT NULL,
  `short_disc` varchar(150) NOT NULL,
  `book_bigimage` varchar(50) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `subcat_name` varchar(30) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `category_name`, `book_name`, `book_image`, `book_price`, `book_discription`, `short_disc`, `book_bigimage`, `publisher`, `subcat_name`) VALUES
('a11', 'Science', 'ac paper1', '10510470.jpg', '125', 'Bharat', 'Bharat', '10510470.jpg', 'Bharat', 'Computer'),
('Psy1', 'Home', 'HOme Sci1', 'cover.action.jpg', '200', 'Upword', 'Upwrod', 'cover.action.jpg', 'Upword', 'Economic');

-- --------------------------------------------------------

--
-- Table structure for table `category_master`
--

CREATE TABLE IF NOT EXISTS `category_master` (
  `category_id` varchar(8) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `category_type` varchar(9) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_master`
--

INSERT INTO `category_master` (`category_id`, `category_name`, `category_type`) VALUES
('art1', 'Arts', 'Arts'),
('mana1', 'Management', 'Managemen');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `enquiry` text NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--


-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `order_id` varchar(10) NOT NULL,
  `book_id` varchar(10) NOT NULL,
  `qty` varchar(5) NOT NULL,
  `rate` varchar(5) NOT NULL,
  `total` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `book_id`, `qty`, `rate`, `total`) VALUES
(57, '11', 'a11', '1', '125', '125'),
(58, '12', 'a11', '1', '125', '125'),
(59, '12', 'Psy1', '1', '200', '200');

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE IF NOT EXISTS `order_master` (
  `orderid` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `pay_method` varchar(10) NOT NULL,
  `shipping_nm` varchar(30) NOT NULL,
  `shipping_ad` varchar(50) NOT NULL,
  `billing_nm` varchar(30) NOT NULL,
  `billing_ad` varchar(50) NOT NULL,
  `credit_name` varchar(30) NOT NULL,
  `credit_no` varchar(30) NOT NULL,
  `credit_date` varchar(30) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`orderid`, `user_id`, `date`, `pay_method`, `shipping_nm`, `shipping_ad`, `billing_nm`, `billing_ad`, `credit_name`, `credit_no`, `credit_date`) VALUES
(11, 'r','', 'credit', 'amreli','amreli','amreli', 'amreli', 'raviBhai', '1123456', '14/05/2018'),
(12, 'r','', 'credit', '', '', '', '', '', '', 'dd/mm/yyyy');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `user_id` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--


-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `id` varchar(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `name`) VALUES
('12', 'Psycology'),
('16', 'Economic'),
('17', 'Business Math');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `f_name` varchar(30) DEFAULT NULL,
  `l_name` varchar(30) DEFAULT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `e_mail` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `comp_nm` varchar(30) DEFAULT NULL,
  `street_add` varchar(50) DEFAULT NULL,
  `post_code` varchar(8) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `tele_no` varchar(15) DEFAULT NULL,
  `fax_no` varchar(15) DEFAULT NULL,
  `news` char(1) DEFAULT NULL,
  `userid` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(20) DEFAULT NULL,
  `sque` varchar(30) NOT NULL DEFAULT '',
  `sans` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`f_name`, `l_name`, `dob`, `e_mail`, `gender`, `comp_nm`, `street_add`, `post_code`, `city`, `state`, `country`, `tele_no`, `fax_no`, `news`, `userid`, `password`, `sque`, `sans`) VALUES
('p', 'p', '18/01/1987', 'HHH', 'male', 'HHH', 'HHH', '8888', 'JJJJ', 'LLL', 'Algeria', '9090', '9090', '1', 'p', 'p', 'P', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `viewcart`
--

CREATE TABLE IF NOT EXISTS `viewcart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `book_id` varchar(50) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `rate` varchar(50) NOT NULL,
  `book_discription` varchar(200) NOT NULL,
  `session_id` varchar(100) NOT NULL,
  `book_image` varchar(50) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `viewcart`
--

INSERT INTO `viewcart` (`cart_id`, `user_id`, `book_id`, `qty`, `rate`, `book_discription`, `session_id`, `book_image`, `date`) VALUES
(58, 'p', 'a11', '1', '125', 'Bharat', '9p6c8b0q0u4c66adegstp3fpf1', '10510470.jpg', '211012'),
(59, 'p', 'Psy1', '1', '200', 'Upwrod', '9p6c8b0q0u4c66adegstp3fpf1', 'cover.action.jpg', '211012'),
(64, 'p', 'sci11', '1', '500', 'Dynamiv', 'ht66cjrbqajpgg27mimq3m0oo7', 's.jpg', '211012'),
(63, 'p', 'a11', '1', '125', 'Bharat', 'ht66cjrbqajpgg27mimq3m0oo7', '10510470.jpg', '211012');
