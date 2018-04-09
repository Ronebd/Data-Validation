-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2017 at 06:47 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_name`, `user_password`) VALUES
('admin', 'admin'),
('admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `u_reg`
--

CREATE TABLE `u_reg` (
  `id` int(100) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_roll` int(100) NOT NULL,
  `u_father` varchar(255) NOT NULL,
  `u_dob` date NOT NULL,
  `u_address` varchar(255) NOT NULL,
  `u_mail` varchar(255) NOT NULL,
  `u_phone` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_reg`
--

INSERT INTO `u_reg` (`id`, `u_name`, `u_roll`, `u_father`, `u_dob`, `u_address`, `u_mail`, `u_phone`) VALUES
(10, 'Maruf Jr.', 5, 'Maruf Sr.', '1995-01-10', 'Rajshahi', 'Maruf@yahoo.com', 123456),
(11, 'Zilani Jr.', 3, 'Zilani Sr.', '1995-02-10', 'Dhaka', 'Zilani@hotmail.com', 12345),
(12, 'Rabbi Jr.', 6, 'Rabbi Sr.', '1995-01-01', 'Rajshahi', 'Rabbi@yahoo.com', 1234567),
(13, 'Shaon Jr.', 10, 'Shaon Sr.', '1995-01-15', 'Rangpur', 'Shaon@yahoo.com', 12345678),
(14, 'Arafat Jr.', 7, 'Arafat Sr.', '1995-03-01', 'Rangpur', 'Arafat@yahoo.com', 123456789),
(15, 'Rafi Jr. ', 8, 'Rafi  Sr.', '1995-01-25', 'Khulna', 'Rafi@yahoo.com', 1234567890),
(16, 'Rasel Jr.', 9, 'Rasel Sr.', '1995-05-01', 'Mymensing', 'Rasel@yahoo.com', 1234),
(17, 'Mostofa Jr.', 12, 'Mostofa sr.', '1995-05-05', 'Rajshahi', 'Mostofa@yahoo.com', 123),
(18, 'Hello Jr.', 15, 'Hello Sr.', '1996-01-01', 'Chittagong', 'Hello@gmail.com', 1230);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `u_reg`
--
ALTER TABLE `u_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `u_reg`
--
ALTER TABLE `u_reg`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
