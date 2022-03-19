-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 03:05 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bms`
--

-- --------------------------------------------------------

--
-- Table structure for table `analytics`
--

CREATE TABLE `analytics` (
  `AccNo` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Address` varchar(200) CHARACTER SET latin1 NOT NULL,
  `Phone` int(11) NOT NULL,
  `Position` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Gender` varchar(50) CHARACTER SET latin1 NOT NULL,
  `DOB` date NOT NULL,
  `Pass` text CHARACTER SET latin1 NOT NULL,
  `Repass` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `analytics`
--

INSERT INTO `analytics` (`AccNo`, `Name`, `Email`, `Address`, `Phone`, `Position`, `Gender`, `DOB`, `Pass`, `Repass`) VALUES
(2, 'xyz', 'x@gmail.com', 'abcd', 225588, 'Business Analytics', 'Female', '2021-04-07', '456789@', '456789@');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `name` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`name`, `contact`, `text`) VALUES
('Hitman', 'HR', 'test1'),
('Hitman', 'Manager', 'test2');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `name` varchar(50) NOT NULL,
  `AccNo` int(11) NOT NULL,
  `cardtype` varchar(50) NOT NULL,
  `reqtype` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`name`, `AccNo`, `cardtype`, `reqtype`, `status`) VALUES
('Faiaz Ben Reza', 3, 'Visa', 'Activate', 'Inactive'),
('Faiaz Ben Reza', 3, 'Maestro', 'Activate', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `add` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `email`, `phone`, `add`) VALUES
(8, 'Md.Anik Islam', 'islamanik6366@gmail.com', '01303159123', 'Palbari (vashkorjo Mor),Jashore Sador,Jashore'),
(9, 'Check', 'check@gmail.com', '099888766', 'dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `AccNo` int(11) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `AccNo`, `contact`, `text`) VALUES
('Faiaz Ben Reza', 3, 'Card Manager', 'I need to activate my card, What is the procedure?'),
('Faiaz Ben Reza', 3, 'Card Manager', 'Need update of my card.');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(3) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Designation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `username`, `password`, `Name`, `Designation`) VALUES
(1, 'tza12', '12345', 'Tanzima Zahir Aurthy', 'accounts'),
(2, 'wal10', '54321', 'Walid hossain', 'payment');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empno` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Salary` int(11) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empno`, `Name`, `Email`, `Address`, `Phone`, `Salary`, `Position`, `Gender`, `DOB`, `Pass`) VALUES
(7, 'test', 't@gmail.com', 'tuv', 114477, 1000, 'guard', 'Male', '2021-04-21', '445566@');

-- --------------------------------------------------------

--
-- Table structure for table `hrlogin`
--

CREATE TABLE `hrlogin` (
  `uname` varchar(50) NOT NULL,
  `upass` varchar(50) NOT NULL,
  `ucat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hrlogin`
--

INSERT INTO `hrlogin` (`uname`, `upass`, `ucat`) VALUES
('anik', '12345', 'hr');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `name` varchar(50) NOT NULL,
  `AccNo` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `purpose` text NOT NULL,
  `ammount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`name`, `AccNo`, `type`, `purpose`, `ammount`) VALUES
('Faiaz Ben Reza', 3, 'Home', 'I need to buy a house ', 5000000);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uname` varchar(50) NOT NULL,
  `upass` varchar(50) NOT NULL,
  `ucat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `upass`, `ucat`) VALUES
('anik', '1234', 'admin'),
('anikhr', '12345', 'hr');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `noticeid` int(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`noticeid`, `subject`, `details`) VALUES
(2, 'misson', 'jsgarghgsar'),
(3, 'techview Quotation (Ref S00002)', 'test'),
(4, 'T', 'test1');

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `name` varchar(50) NOT NULL,
  `rate` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`name`, `rate`, `date`) VALUES
('Laptop', 3, '2021-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `AccNo` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Deposit` float NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Pass` text NOT NULL,
  `Repass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`AccNo`, `Name`, `Email`, `Address`, `Phone`, `Deposit`, `Gender`, `DOB`, `Pass`, `Repass`) VALUES
(3, 'Faiaz Ben Reza', 'faiazbenreza@gmail.com', 'Dhaka', 1531962475, 35000, 'Male', '2021-04-01', '@1234', '@1234'),
(5, 'test', 'test@gmail.com', 'Dhaka', 1234567890, 9500, 'Male', '2021-04-02', '@1111', '@1111'),
(7, 'Reza', '18-36655-1@student.aiub.edu', 'Dhaka', 1531962475, 5500, 'Male', '2021-04-01', '@5555', '@5555'),
(8, 'Jimmy', 'Jimmy@wow.com', 'Dhaka', 2147483647, 5500, 'Male', '2021-04-01', '@1234', '@1234'),
(9, 'Anik', 'anik@email.com', 'Dhaka', 2147483647, 5000, 'Male', '2021-04-01', '@1234', '@1234');

-- --------------------------------------------------------

--
-- Table structure for table `stuff`
--

CREATE TABLE `stuff` (
  `empno` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Salary` int(11) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stuff`
--

INSERT INTO `stuff` (`empno`, `Name`, `Email`, `Address`, `Phone`, `Salary`, `Position`, `Gender`, `DOB`, `Pass`) VALUES
(1, 'Durjoy', 'durjoy@gmail.com', 'Dhaka', 1303030303, 30000, 'Accounts Manager', 'Male', '2005-02-14', '1234@'),
(3, 'Hitman', 'Hit@gmail.com', 'Dhaka', 2147483647, 15000, 'Card Manager', 'Male', '2021-04-01', '@1234'),
(4, 'durjoy', '123@gmail.com', 'Dhaka', 2147483647, 15000, 'Business Analyist', 'Male', '2021-04-01', '@1234'),
(5, 'jolil', 'jolil@gmail.com', 'Dhaka', 2147483647, 10000, 'Stuff Manager', 'Male', '2021-04-03', '@1234'),
(6, 'aurthy', 'aurthy@email.com', 'Dhaka', 2147483647, 15000, 'accounts', 'Female', '2021-04-22', '@5555'),
(7, 'kader', 'kader@gmail.com', 'Dhaka', 2147483647, 5000, 'payment', 'Male', '2021-04-05', '@5555'),
(8, 'test', 'test@email.com', 'Dhaka', 2147483647, 15000, 'Stuff Manager', 'Male', '2021-04-01', '@1234');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `AccNo` int(11) NOT NULL,
  `transactionId` int(11) NOT NULL,
  `senderid` int(11) NOT NULL,
  `receiverid` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `credit` float NOT NULL,
  `debit` float NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`AccNo`, `transactionId`, `senderid`, `receiverid`, `type`, `credit`, `debit`, `balance`) VALUES
(5, 26, 5, 3, 'Transfer', 0, 1000, 4500),
(3, 27, 5, 3, 'Transfer', 1000, 0, 2600),
(3, 28, 0, 0, 'Withdraw', 0, 100, 2500),
(3, 29, 0, 0, 'Withdraw', 0, 200, 2300),
(3, 30, 0, 0, 'Withdraw', 0, 200, 2100),
(3, 31, 0, 0, 'Withdraw', 0, 200, 1900),
(3, 32, 0, 0, 'Withdraw', 0, 200, 1700),
(3, 33, 0, 0, 'Withdraw', 0, 200, 1500),
(3, 34, 0, 0, 'Withdraw', 0, 200, 49800),
(3, 35, 0, 0, 'Withdraw', 0, 200, 49600),
(3, 36, 0, 0, 'Withdraw', 0, 200, 49400),
(3, 37, 0, 0, 'Withdraw', 0, 200, 49200),
(3, 38, 0, 0, 'Withdraw', 0, 200, 49000),
(3, 39, 0, 0, 'Withdraw', 0, 200, 48800),
(3, 40, 0, 0, 'Withdraw', 0, 200, 48600),
(3, 41, 3, 5, 'Transfer', 0, 500, 48100),
(5, 42, 3, 5, 'Transfer', 500, 0, 0),
(3, 43, 3, 5, 'Transfer', 0, 500, 47600),
(5, 44, 3, 5, 'Transfer', 500, 0, 0),
(3, 45, 3, 5, 'Transfer', 0, 500, 47100),
(5, 46, 3, 5, 'Transfer', 500, 0, 5000),
(3, 47, 3, 5, 'Transfer', 0, 500, 46600),
(5, 48, 3, 5, 'Transfer', 500, 0, 5500),
(3, 49, 0, 0, 'Withdraw', 0, 200, 46400),
(3, 50, 3, 522, 'Transfer', 0, 500, 45900),
(522, 51, 3, 522, 'Transfer', 500, 0, 0),
(3, 52, 3, 5, 'Transfer', 0, 500, 45400),
(5, 53, 3, 5, 'Transfer', 500, 0, 0),
(3, 54, 3, 5, 'Transfer', 0, 500, 44900),
(5, 55, 3, 5, 'Transfer', 500, 0, 0),
(3, 56, 3, 522, 'Transfer', 0, 500, 44400),
(522, 57, 3, 522, 'Transfer', 500, 0, 0),
(3, 58, 3, 5, 'Transfer', 0, 500, 43900),
(5, 59, 3, 5, 'Transfer', 500, 0, 6000),
(3, 60, 3, 2, 'Transfer', 0, 500, 43400),
(2, 61, 3, 2, 'Transfer', 500, 0, 0),
(3, 62, 3, 5, 'Transfer', 0, 500, 42900),
(5, 63, 3, 5, 'Transfer', 500, 0, 0),
(3, 64, 3, 2, 'Transfer', 0, 500, 42400),
(2, 65, 3, 2, 'Transfer', 500, 0, 0),
(3, 66, 3, 5, 'Transfer', 0, 500, 41900),
(5, 67, 3, 5, 'Transfer', 500, 0, 0),
(3, 68, 3, 120, 'Transfer', 0, 500, 41400),
(120, 69, 3, 120, 'Transfer', 500, 0, 0),
(3, 70, 3, 2, 'Transfer', 0, 500, 40900),
(2, 71, 3, 2, 'Transfer', 500, 0, 0),
(3, 72, 3, 2, 'Transfer', 0, 500, 40400),
(2, 73, 3, 2, 'Transfer', 500, 0, 0),
(3, 74, 3, 522, 'Transfer', 0, 500, 39900),
(522, 75, 3, 522, 'Transfer', 500, 0, 0),
(3, 76, 3, 5, 'Transfer', 0, 500, 39400),
(5, 77, 3, 5, 'Transfer', 500, 0, 6500),
(3, 78, 3, 5, 'Transfer', 0, 500, 38900),
(5, 79, 3, 5, 'Transfer', 500, 0, 7000),
(3, 80, 0, 0, 'Withdraw', 0, 200, 38700),
(3, 81, 3, 5, 'Transfer', 0, 500, 38200),
(5, 82, 3, 5, 'Transfer', 500, 0, 7500),
(3, 83, 3, 5, 'Transfer', 0, 500, 37700),
(5, 84, 3, 5, 'Transfer', 500, 0, 8000),
(3, 85, 3, 5, 'Transfer', 0, 500, 37200),
(5, 86, 3, 5, 'Transfer', 500, 0, 8500),
(3, 87, 0, 0, 'Withdraw', 0, 200, 37000),
(3, 88, 3, 7, 'Transfer', 0, 500, 36500),
(7, 89, 3, 7, 'Transfer', 500, 0, 5500),
(3, 90, 0, 0, 'Withdraw', 0, 500, 36000),
(3, 91, 3, 5, 'Transfer', 0, 1000, 35000),
(5, 92, 3, 5, 'Transfer', 1000, 0, 9500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analytics`
--
ALTER TABLE `analytics`
  ADD PRIMARY KEY (`AccNo`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empno`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`noticeid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`AccNo`);

--
-- Indexes for table `stuff`
--
ALTER TABLE `stuff`
  ADD PRIMARY KEY (`empno`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transactionId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analytics`
--
ALTER TABLE `analytics`
  MODIFY `AccNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `noticeid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `AccNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stuff`
--
ALTER TABLE `stuff`
  MODIFY `empno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transactionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
