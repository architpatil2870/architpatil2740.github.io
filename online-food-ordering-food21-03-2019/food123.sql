-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 31, 2009 at 07:03 PM
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
  `mobno` int(10) NOT NULL,
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
(2, '07:12:15', '07:12:15', 500, 'ram borse', 'borse nagar', 2147483647, 'rambhau.com', 'cash', 25, 25, 550, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
  `del_no` int(5) NOT NULL,
  `del_time` time NOT NULL,
  `order_no` int(5) NOT NULL,
  `cust_name` text NOT NULL,
  `net_amount` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--


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
(2, '2009-12-31', 4, 5, 'veg', 100, 500, 25, 25, 550),
(2, '2009-12-31', 5, 3, 'non', 0, 0, 0, 0, 0),
(1, '2009-12-31', 5, 1, 'non', 0, 0, 0, 0, 0),
(1, '2009-12-31', 4, 3, 'veg', 100, 300, 15, 15, 330);

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

