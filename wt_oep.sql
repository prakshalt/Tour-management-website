-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2019 at 07:27 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wt_oep`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinginfo`
--

CREATE TABLE `bookinginfo` (
  `bid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookinginfo`
--

INSERT INTO `bookinginfo` (`bid`, `name`, `gender`, `bdate`) VALUES
(3, 'pt', 'male', '1998-12-13'),
(3, 'pq', 'male', '1998-01-01'),
(4, 'pt', 'male', '1998-12-13'),
(4, 'pq', 'male', '1998-01-01'),
(5, 'pt', 'male', '1998-12-13'),
(5, 'pq', 'male', '1998-01-01'),
(6, 'pt', 'male', '1998-12-13'),
(6, 'pq', 'male', '1998-01-01'),
(6, 'pt', 'male', '1998-12-13'),
(6, 'pq', 'male', '1998-01-01'),
(6, 'pt', 'male', '1998-12-13'),
(6, 'pq', 'male', '1998-01-01'),
(9, 'Prakshal', 'male', '1998-12-13'),
(10, 'Prakshal', 'male', '1998-12-13'),
(11, 'Prakshal', 'male', '1998-12-13'),
(12, 'Prakshal', 'male', '1998-12-13'),
(13, 'Prakshal', 'male', '1998-12-13'),
(14, 'Prakshal', 'male', '1998-12-13'),
(15, 'Prakshal', 'male', '1998-12-13'),
(16, 'Prakshal', 'male', '1998-12-13'),
(17, 'Prakshal', 'male', '1998-12-13'),
(18, 'viraj', 'male', '1998-01-01'),
(19, 'viraj', 'male', '1998-01-01'),
(20, 'ex', 'male', '0001-01-01'),
(23, 'Prakshal Trivedi', 'male', '1998-12-13'),
(24, 'Viraj', 'male', '1998-01-01'),
(25, 'Lak Hinsu', 'male', '1998-09-10'),
(25, 'Prakshal Trivedi', 'male', '1998-12-13'),
(26, 'femi unadkat', 'female', '1998-06-12'),
(27, 'Deven Gol', 'male', '1991-05-21'),
(28, 'p', 'male', '1111-11-11'),
(29, 'm', 'male', '1111-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `packageid` varchar(30) NOT NULL,
  `mnumber` bigint(10) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bid`, `userid`, `packageid`, `mnumber`, `address`) VALUES
(1, 187, 'int1', 9, 'anand'),
(2, 187, 'int1', 9, 'anand'),
(3, 187, 'int1', 9, 'anand'),
(4, 187, 'int1', 9, 'anand'),
(5, 187, 'int1', 9, 'anand'),
(6, 187, 'int1', 9, 'anand'),
(9, 187, 'int2', 94, 'bh'),
(10, 187, 'int2', 94, 'bh'),
(11, 187, 'int2', 94, 'bh'),
(12, 187, 'int2', 94, 'bh'),
(13, 187, 'int2', 94, 'bh'),
(14, 187, 'int2', 94, 'bh'),
(15, 187, 'int2', 94, 'bh'),
(16, 187, 'int2', 94, 'bh'),
(17, 187, 'int2', 94, 'bh'),
(18, 187, 'int2', 7, 'anand'),
(19, 187, 'int2', 7, 'anand'),
(20, 187, 'int2', 9, 'a'),
(21, 188, 'int3', 2147483647, 'Bharuch'),
(22, 188, 'in2', 2147483647, 'anand'),
(23, 188, 'in3', 9428740958, 'bharuch'),
(24, 188, 'int3', 7046168740, 'Jamnagar'),
(25, 188, 'int4', 9428740958, 'Anand'),
(26, 190, 'int3', 9427968323, 'kkhfghkdgcvjxhgkjhkjgsfdhjgh'),
(27, 188, 'int1', 9428740958, 'anand'),
(28, 188, 'int3', 9, 'a'),
(29, 188, 'int3', 9428740958, 'anand'),
(30, 188, 'int3', 9428740958, 'anand'),
(31, 188, 'int3', 9428740958, 'anand'),
(32, 188, 'int3', 9428740958, 'anand'),
(33, 188, 'int3', 9428740958, 'anand'),
(34, 188, 'int3', 9428740958, 'anand');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `packageid` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `smalldesc` varchar(200) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(50) NOT NULL,
  `pdf` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`packageid`, `title`, `smalldesc`, `price`, `image`, `pdf`, `type`) VALUES
('in1', 'Kashmir Tour', '6 days Kashmir Tour', 16499, 'images/kashmir2.jpg', 'pdf', 'in'),
('in2', 'Goa Tour', '6 days Goa Tour', 15999, 'images/goa1.jpg', 'pdf', 'in'),
('in3', 'Kerala Tour', '7 days Kerala Tour', 18000, 'images/kerala1.jpg', 'pdf', 'in'),
('int1', 'Dubai Tour', '5 days Dubai tour ', 45990, 'images/dubai1.jpg', 'pdf path', 'int'),
('int2', 'Europe Tour', '8 days Europe tour', 125000, 'images/europe1.jpg', 'pdf', 'int'),
('int3', 'Maldives tour', '5 days Maldives tour ', 55000, 'images/maldives1.jpg', 'pdf', 'int'),
('int4', 'Australia tour', '12 days Australia tour', 208990, 'images/australia1.jpg', 'pdf', 'int');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `email`, `password`) VALUES
(183, 'prakshaltrivedi1312@gmail.com', 'p'),
(184, 'tejoyv@gmail.com', 'r'),
(185, 'bhargavpshah98@gmail.com', 'bhargav'),
(186, 'p2@example.com', 'p'),
(187, 'p@e.com', 'p'),
(188, 'p2@e.com', 'p'),
(189, 'ght@example.com', 'm'),
(190, 'femi9812@gmail.com', 'femi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinginfo`
--
ALTER TABLE `bookinginfo`
  ADD KEY `bid` (`bid`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `packageid` (`packageid`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`packageid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookinginfo`
--
ALTER TABLE `bookinginfo`
  ADD CONSTRAINT `bookinginfo_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `bookings` (`bid`);

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`packageid`) REFERENCES `packages` (`packageid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
