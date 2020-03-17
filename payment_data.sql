-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 11:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payment_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment_data`
--

CREATE TABLE `payment_data` (
  `id` int(11) NOT NULL,
  `tid` varchar(50) NOT NULL,
  `hash` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `productinfo` varchar(20) NOT NULL,
  `mailid` varchar(20) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `added` timestamp NOT NULL DEFAULT current_timestamp(),
  `flag` int(11) NOT NULL DEFAULT 0,
  `booking_status` varchar(10) NOT NULL DEFAULT 'Pending',
  `mihpayid` varchar(50) DEFAULT NULL,
  `mode` varchar(5) NOT NULL,
  `cardCategory` varchar(15) NOT NULL,
  `cardType` varchar(20) NOT NULL,
  `unmappedstatus` varchar(20) NOT NULL,
  `discount` int(11) NOT NULL,
  `netamountdebit` int(11) NOT NULL,
  `addedon` varchar(25) NOT NULL,
  `firstname` varchar(11) NOT NULL,
  `lastname` varchar(11) NOT NULL,
  `state` varchar(25) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `field1` int(11) NOT NULL,
  `field2` int(11) NOT NULL,
  `field3` int(11) NOT NULL,
  `field4` int(11) NOT NULL,
  `field5` int(11) NOT NULL,
  `field6` int(11) NOT NULL,
  `field7` varchar(20) NOT NULL,
  `field8` varchar(40) NOT NULL,
  `field9` varchar(20) NOT NULL,
  `paymentsource` varchar(20) NOT NULL,
  `pgtype` varchar(20) NOT NULL,
  `bankrefnum` int(20) NOT NULL,
  `bankcode` varchar(20) NOT NULL,
  `error` varchar(20) NOT NULL,
  `errorMessage` varchar(20) NOT NULL,
  `nameoncard` varchar(20) NOT NULL,
  `cardnum` varchar(40) NOT NULL,
  `issuingbank` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_data`
--

INSERT INTO `payment_data` (`id`, `tid`, `hash`, `amount`, `name`, `productinfo`, `mailid`, `phoneno`, `address`, `added`, `flag`, `booking_status`, `mihpayid`, `mode`, `cardCategory`, `cardType`, `unmappedstatus`, `discount`, `netamountdebit`, `addedon`, `firstname`, `lastname`, `state`, `zipcode`, `field1`, `field2`, `field3`, `field4`, `field5`, `field6`, `field7`, `field8`, `field9`, `paymentsource`, `pgtype`, `bankrefnum`, `bankcode`, `error`, `errorMessage`, `nameoncard`, `cardnum`, `issuingbank`) VALUES
(14, '1383e25a3588ba0d1bcb', '4b7a9075d22ff654565cf7dd1e6dcfc777f3eec54e559ba688', 100, 'pop', 'sdf', 'info@dextercrew.com', '2343423423', 'sxfsdf', '2020-03-13 10:55:26', 0, 'success', '403993715520712849', 'CC', 'domestic', 'VISA', 'captured', 0, 100, '2020-03-13 16:25:27', 'pop', '', '', 0, 671365, 647697, 20200313, 0, 2147483647, 0, 'AUCNEGATIVE', 'Approved or completed successfully', 'No Error', 'payu', 'AXISPG', 671365, 'CC', 'E000', 'No Error', 'fdgdfg', '424242XXXXXX4242', 'UNKNOWN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment_data`
--
ALTER TABLE `payment_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment_data`
--
ALTER TABLE `payment_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
