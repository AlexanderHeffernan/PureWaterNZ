-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 11:07 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem_purewaternz`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'DarthAlex18', 'darthalexander18@gmail.com', '$2y$10$Q4bAOdwCDGRYJ5HziMpZcuslWsx.mW0zscwTzJ77IvVx0Y6AlHFDa'),
(2, 'Tommy123', 'tommy123@gmail.com', '$2y$10$Stl756gFu7jBaQO7sYuYke5aoLK1sW.X9S6yMNF/QRXgbOS0yVDBW'),
(3, 'KiwiCoyBoys', 'kwicoyboys@gmail.com', '$2y$10$5su1gUeq86QKauOfei3gguEOu20FV6Q.JT.pWcfQrMvEu0WtBG1ji'),
(4, 'Darth_Alex-18', 'alex.heffernan@icloud.com', '$2y$10$ECUj.uZuNAS8mzLn86XS6e1fHpYqj/oYLei6YF55yfKEXXk03hDda'),
(5, 'Random_User', 'randomuser@gmail.com', '$2y$10$EPVzVTF52Y075IJGbQYnEei288ow3IQweXzVWGRoxrpw8B8tV0rjq'),
(6, 'Benj 1', 'benjbaniqued@stream.school.nz', '$2y$10$36DtMiFoSiAsz3O6cpxFhOZKF8.fdXrX5HpsBECJMcDn1wRC5irKS'),
(7, '100% First', 'benjbaniqued@stream.school.nz', '$2y$10$fXIQxJWauiZ5ukN/FXzd0e9tYu8A1xDXLDMdZzixiEKaaGja5aBtC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
