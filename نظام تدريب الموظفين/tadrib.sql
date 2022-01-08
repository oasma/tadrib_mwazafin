-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 02:16 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tadrib`
--

-- --------------------------------------------------------

--
-- Table structure for table `creataccount`
--

CREATE TABLE `creataccount` (
  `id` int(11) NOT NULL,
  `Confirm_Password` varchar(128) DEFAULT NULL,
  `Email` varchar(128) DEFAULT NULL,
  `First_Name` varchar(128) DEFAULT NULL,
  `Last_Name` varchar(128) DEFAULT NULL,
  `My_Password` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `creataccount`
--

INSERT INTO `creataccount` (`id`, `Confirm_Password`, `Email`, `First_Name`, `Last_Name`, `My_Password`) VALUES
(1, 'user', 'user@gmail.com', 'user', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `creataccount`
--
ALTER TABLE `creataccount`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Confirm_Password` (`Confirm_Password`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `My_Password` (`My_Password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `creataccount`
--
ALTER TABLE `creataccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
