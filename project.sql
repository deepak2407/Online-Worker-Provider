-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 07:13 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `mail` varchar(55) NOT NULL,
  `pwd` varchar(40) NOT NULL,
  `scode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`fname`, `lname`, `phno`, `mail`, `pwd`, `scode`) VALUES
('nannapaneni', 'deepak', 9989660013, 'ndeepak290@gmail.com', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `chatt`
--

CREATE TABLE `chatt` (
  `msgfrom` varchar(30) NOT NULL,
  `msgto` varchar(30) NOT NULL,
  `message` varchar(500) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatt`
--

INSERT INTO `chatt` (`msgfrom`, `msgto`, `message`, `id`) VALUES
('ret@gm', 'ndeepak290@gmail.com', 'hello 1', 10),
('ndeepak290@gmail.com', 'ret@gm', 'hello2', 11),
('ret@gm', 'pro@work', 'address is 4 th lane\r\n', 12),
('pro@work', 'ret@gm', 'will be there', 13);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `mail` varchar(55) NOT NULL,
  `pwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `phno`, `mail`, `pwd`) VALUES
('qq', 'q', 675, 'fed@123', '123'),
('ewe', 'ye', 998912, 'ret@gm', '123');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `age` int(10) NOT NULL,
  `radio` varchar(20) NOT NULL,
  `worktype` varchar(45) NOT NULL,
  `phno` bigint(10) NOT NULL,
  `mail` varchar(55) NOT NULL,
  `pwd` varchar(40) NOT NULL,
  `wage` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`fname`, `lname`, `age`, `radio`, `worktype`, `phno`, `mail`, `pwd`, `wage`) VALUES
('n', 'n', 23, 'male', 'electrician', 345, 'deepak@qwe', '123', 500),
('deepak', 'd', 24, 'male', 'plumber', 234, 'ndeepak290@gmail.com', '123', 800),
('pro', 'work', 23, 'male', 'plumber', 1234567, 'pro@work', '123', 300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`mail`);

--
-- Indexes for table `chatt`
--
ALTER TABLE `chatt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`mail`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatt`
--
ALTER TABLE `chatt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
