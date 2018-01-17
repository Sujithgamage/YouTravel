-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2018 at 01:00 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('vila_admin', 'asdf1234');

-- --------------------------------------------------------

--
-- Table structure for table `b142012`
--

CREATE TABLE `b142012` (
  `sender` varchar(100) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b142012`
--

INSERT INTO `b142012` (`sender`, `message`) VALUES
('bvila_110', 'Ok... Ill waiting for u...'),
('bvila_110', 'okkkk..'),
('bvila_110', 'dsdf'),
('bvila_110', 'dsdf');

-- --------------------------------------------------------

--
-- Table structure for table `b142055`
--

CREATE TABLE `b142055` (
  `sender` varchar(100) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b142055`
--

INSERT INTO `b142055` (`sender`, `message`) VALUES
('', 'Hi... host'),
('', 'Hi..hids');

-- --------------------------------------------------------

--
-- Table structure for table `b142078`
--

CREATE TABLE `b142078` (
  `sender` varchar(100) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `b142132`
--

CREATE TABLE `b142132` (
  `sender` varchar(100) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `b142146`
--

CREATE TABLE `b142146` (
  `sender` varchar(100) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b142146`
--

INSERT INTO `b142146` (`sender`, `message`) VALUES
('b142012', 'Common,thilan..'),
('', 'Common,thilan..'),
('', 'Common,thilan..');

-- --------------------------------------------------------

--
-- Table structure for table `bvila_110`
--

CREATE TABLE `bvila_110` (
  `sender` varchar(100) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bvila_110`
--

INSERT INTO `bvila_110` (`sender`, `message`) VALUES
('b142012', 'tbvmdsehfkjsdfbsdfsfsdfsdfnvuhd\\\r\n'),
('b142012', 'erdufkmHImmmm......hi');

-- --------------------------------------------------------

--
-- Table structure for table `bvila_111`
--

CREATE TABLE `bvila_111` (
  `sender` varchar(100) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bvila_111`
--

INSERT INTO `bvila_111` (`sender`, `message`) VALUES
('', 'Gahhebh');

-- --------------------------------------------------------

--
-- Table structure for table `bvila_112`
--

CREATE TABLE `bvila_112` (
  `sender` varchar(100) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bvila_112`
--

INSERT INTO `bvila_112` (`sender`, `message`) VALUES
('b142078', 'Hi,I''m looking for u..');

-- --------------------------------------------------------

--
-- Table structure for table `bvila_113`
--

CREATE TABLE `bvila_113` (
  `sender` varchar(100) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` varchar(50) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `vehical_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `phone`, `email`, `vehical_id`) VALUES
('vila_110', '0112223344', 'asd1234.@gmail.com', NULL),
('vila_111', '0112223344', 'asd.@gmail.com', NULL),
('Vila_112', '0112223344', 'asd.@gmail.com', NULL),
('vila_113', '0112223344', 'asdf@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customerlogin`
--

CREATE TABLE `customerlogin` (
  `cust_id` varchar(50) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerlogin`
--

INSERT INTO `customerlogin` (`cust_id`, `password`) VALUES
('vila_110', 'asdfvila_110'),
('vila_111', 'asdfvila_111'),
('vila_112', 'asdfvila_112'),
('vila_113', 'asdfvila_113');

-- --------------------------------------------------------

--
-- Table structure for table `customervehical`
--

CREATE TABLE `customervehical` (
  `cust_id` varchar(50) NOT NULL,
  `vehical_id` varchar(50) NOT NULL,
  `vehicaltype` varchar(50) DEFAULT NULL,
  `numofseat` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customervehical`
--

INSERT INTO `customervehical` (`cust_id`, `vehical_id`, `vehicaltype`, `numofseat`) VALUES
('vila_110', 'AB142012', 'Car', 3),
('vila_110', 'AB142055', 'Tuk', 1),
('vila_110', 'AB142146', 'Car', 3),
('vila_111', 'AB142055', 'Tuk', 2),
('Vila_112', 'AB142012', 'Car', 3),
('Vila_112', 'AB142146', 'Car', 3),
('vila_113', 'AB142066', 'Tuk', 2);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `dri_id` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `vehical_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`dri_id`, `name`, `email`, `phone`, `vehical_id`) VALUES
('142012', 'Sujith Gamage', 'sujithgamage51@gmail.com', 766841730, 'AB142012'),
('142055', 'Nuwan Gajanayake', 'nu1gajanayke@gmail.com', 713536217, 'AB142055'),
('142066', 'Kapila Prasanna', 'kapilaprasanna@gmail.com', 711122334, 'up7452'),
('142078', 'Methun Perera', 'smethunperera@gmail.com', 712652469, 'AB142078'),
('142102', 'Chandima Bandara', 'chandima@gmail.com', 711232342, 'AB142012'),
('142132', 'Nuwan Chathuranga', 'asd.@gmail.com', 766841735, 'AB142132'),
('142146', 'Thilan Randika', 'thilanrandika@gmail.com', 719878199, 'AB142146');

-- --------------------------------------------------------

--
-- Table structure for table `driverlogin`
--

CREATE TABLE `driverlogin` (
  `dri_id` varchar(50) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driverlogin`
--

INSERT INTO `driverlogin` (`dri_id`, `password`) VALUES
('142012', 'asdf142012'),
('142055', 'asdf142055'),
('142066', 'asdf142066'),
('142078', 'asdf142078'),
('142102', 'asdf142102'),
('142132', 'AB142132'),
('142146', 'asdf142146');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image` varchar(200) DEFAULT NULL,
  `dri_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image`, `dri_id`) VALUES
('image_142078.jpg', '142078'),
('image_142055.png', '142055'),
('man.png', '142012'),
('Img142146.jpg', '142146'),
('perera3.jpg', '142132'),
('', '142012'),
('28.jpg', '142012'),
('28.jpg', '142012');

-- --------------------------------------------------------

--
-- Table structure for table `selecttour`
--

CREATE TABLE `selecttour` (
  `cust_id` varchar(50) NOT NULL,
  `tour_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selecttour`
--

INSERT INTO `selecttour` (`cust_id`, `tour_id`) VALUES
('vila_110', 1),
('vila_110', 2),
('vila_110', 7),
('vila_111', 3),
('Vila_112', 4),
('Vila_112', 5),
('vila_113', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `tour_id` int(10) NOT NULL,
  `start` varchar(50) DEFAULT NULL,
  `destination` varchar(50) DEFAULT NULL,
  `dateof` date DEFAULT NULL,
  `bigintime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`tour_id`, `start`, `destination`, `dateof`, `bigintime`) VALUES
(1, 'Airport', 'Colombo', '2017-07-20', '06:03:00'),
(2, 'Airport', 'Colombo', '2017-07-20', '06:03:00'),
(3, 'Airport', 'Negombo', '2017-07-24', '09:54:00'),
(4, 'Airport', 'vila Green Inn', '2017-07-25', '03:45:00'),
(5, 'Airport', 'vila Green Inn', '2017-07-25', '03:45:00'),
(6, 'Airport', 'vila Green Inn', '2017-07-25', '11:39:00'),
(7, 'D.S Gama', 'Weherayaya', '2017-08-06', '14:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `vehical`
--

CREATE TABLE `vehical` (
  `vehical_id` varchar(50) NOT NULL,
  `numofRseat` int(5) DEFAULT NULL,
  `vehicaltype` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehical`
--

INSERT INTO `vehical` (`vehical_id`, `numofRseat`, `vehicaltype`) VALUES
('AB142012', 0, 'Car'),
('AB142055', -1, 'Tuk'),
('AB142066', 0, 'Tuk'),
('AB142078', 8, 'Van'),
('AB142132', 8, 'Van'),
('AB142146', 0, 'Car'),
('up7452', 3, 'Van');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD KEY `vehical_id` (`vehical_id`);

--
-- Indexes for table `customerlogin`
--
ALTER TABLE `customerlogin`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `customervehical`
--
ALTER TABLE `customervehical`
  ADD PRIMARY KEY (`cust_id`,`vehical_id`),
  ADD KEY `vehical_id` (`vehical_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`dri_id`),
  ADD KEY `vehical_id` (`vehical_id`);

--
-- Indexes for table `driverlogin`
--
ALTER TABLE `driverlogin`
  ADD PRIMARY KEY (`dri_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD KEY `dri_id` (`dri_id`);

--
-- Indexes for table `selecttour`
--
ALTER TABLE `selecttour`
  ADD PRIMARY KEY (`cust_id`,`tour_id`),
  ADD KEY `tour_id` (`tour_id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`tour_id`);

--
-- Indexes for table `vehical`
--
ALTER TABLE `vehical`
  ADD PRIMARY KEY (`vehical_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`vehical_id`) REFERENCES `vehical` (`vehical_id`),
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`cust_id`) REFERENCES `customerlogin` (`cust_id`);

--
-- Constraints for table `customervehical`
--
ALTER TABLE `customervehical`
  ADD CONSTRAINT `customervehical_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`),
  ADD CONSTRAINT `customervehical_ibfk_2` FOREIGN KEY (`vehical_id`) REFERENCES `vehical` (`vehical_id`);

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `driver_ibfk_1` FOREIGN KEY (`vehical_id`) REFERENCES `vehical` (`vehical_id`),
  ADD CONSTRAINT `driver_ibfk_2` FOREIGN KEY (`dri_id`) REFERENCES `driverlogin` (`dri_id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`dri_id`) REFERENCES `driver` (`dri_id`);

--
-- Constraints for table `selecttour`
--
ALTER TABLE `selecttour`
  ADD CONSTRAINT `selecttour_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`),
  ADD CONSTRAINT `selecttour_ibfk_2` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`tour_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
