-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 31, 2004 at 07:13 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `confirmation`
--

CREATE TABLE IF NOT EXISTS `confirmation` (
  `orderid` int(4) NOT NULL,
  `ordertime` time NOT NULL,
  `expdeltime` time NOT NULL,
  `totalamount` int(5) NOT NULL,
  `cust_name` text NOT NULL,
  `cust_address` text NOT NULL,
  `mobno` text NOT NULL,
  `email_id` text NOT NULL,
  `paymenttype` text NOT NULL,
  `cgst` float NOT NULL,
  `sgst` float NOT NULL,
  `netamt` float NOT NULL,
  `status` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmation`
--

INSERT INTO `confirmation` (`orderid`, `ordertime`, `expdeltime`, `totalamount`, `cust_name`, `cust_address`, `mobno`, `email_id`, `paymenttype`, `cgst`, `sgst`, `netamt`, `status`) VALUES
(2, '07:12:15', '07:12:15', 500, 'ram borse', 'borse nagar', '2147483647', 'rambhau.com', 'cash', 25, 25, 550, 'Y'),
(3, '07:12:22', '07:12:22', 1150, 'ram', 'd', '9', '9', '9', 57.5, 57.5, 1265, 'N'),
(4, '07:12:27', '07:12:27', 600, 'ramu', '9', '9', '9', '9', 69, 69, 738, 'N'),
(5, '07:12:29', '07:12:29', 700, 'r', '9', '9', '9', '9', 74, 74, 848, 'N'),
(1, '00:00:00', '00:00:00', 0, '', '', '', '', '', 0, 0, 0, 'N'),
(2, '06:12:26', '06:12:26', 200, 'a', 'a', 'a', 'a', 'a', 36, 36, 272, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
  `del_no` int(5) NOT NULL,
  `del_time` text NOT NULL,
  `order_no` int(5) NOT NULL,
  `cust_name` text NOT NULL,
  `net_amount` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`del_no`, `del_time`, `order_no`, `cust_name`, `net_amount`) VALUES
(1, '07:12:27', 2, 'ram', 550);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `menuid` int(4) NOT NULL,
  `type1` text NOT NULL,
  `subtype` text NOT NULL,
  `type2` text NOT NULL,
  `description` text NOT NULL,
  `rate` int(5) NOT NULL,
  `foodtype` text NOT NULL,
  `gstrate` float NOT NULL,
  `menuimg` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menuid`, `type1`, `subtype`, `type2`, `description`, `rate`, `foodtype`, `gstrate`, `menuimg`) VALUES
(2, 'veg', 'indian', 'food', 'dhsguh', 100, 'special', 18, 'India_on_a_platter.jpg'),
(3, 'non veg', 'indian', 'food', 'dfkjhgskjh', 200, 'regular', 18, 'fish curry.jpeg'),
(4, 'veg', 'south indian', 'food', 'sgtggdr', 100, 'regular', 5, 'Idli.jpg'),
(5, 'non veg', 'indian', 'food', 'jxfgjghjfh', 200, 'special', 5, 'chicken-biryani.jpg'),
(6, 'veg', 'indian', 'food', 'fdxhhgfh', 150, 'regular', 5, 'bedmi-puri-aloo-sabzi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE IF NOT EXISTS `order1` (
  `orderid` int(5) NOT NULL,
  `orderdate` date NOT NULL,
  `menuid` int(5) NOT NULL,
  `quantity` int(10) NOT NULL,
  `foodtype` text NOT NULL,
  `rate` int(5) NOT NULL,
  `amount` int(5) NOT NULL,
  `cgst` float NOT NULL,
  `sgst` float NOT NULL,
  `netamt` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`orderid`, `orderdate`, `menuid`, `quantity`, `foodtype`, `rate`, `amount`, `cgst`, `sgst`, `netamt`) VALUES
(1, '2004-12-31', 5, 2, 'non', 0, 0, 0, 0, 0),
(2, '2004-12-31', 2, 2, 'veg', 100, 200, 36, 36, 272);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` text NOT NULL,
  `address` text NOT NULL,
  `mobno` text NOT NULL,
  `emailid` text NOT NULL,
  `userid` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

