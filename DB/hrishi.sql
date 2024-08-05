-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 22, 2024 at 01:43 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrishi`
--

DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `check_case` (`vowel` CHAR(30)) RETURNS CHAR(30) CHARSET utf8mb4  BEGIN
 DECLARE alphabet char(30);
 CASE vowel
 WHEN 'a' THEN SET alphabet='it is vowel';
 WHEN 'e' THEN SET alphabet='it is vowel';
 WHEN 'i' THEN SET alphabet='it is vowel';
 WHEN 'o' THEN SET alphabet='it is vowel';
 WHEN 'u' THEN SET alphabet='it is vowel';
 ELSE
 SET alphabet = 'consonant';
 END CASE;
 RETURN alphabet;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `p_id` int(30) NOT NULL,
  `dish_name` varchar(30) DEFAULT NULL,
  `dish_details` text NOT NULL,
  `price` int(30) NOT NULL,
  `dish_type` text NOT NULL,
  `image` varchar(500) NOT NULL,
  `userid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`p_id`, `dish_name`, `dish_details`, `price`, `dish_type`, `image`, `userid`) VALUES
(3, 'French fries.', 'Pure Veg and Tasty.', 49, 'Veg', 'frenchfries.jpg', ''),
(4, 'Spring Rolles', 'Delicious Spring Rolls by Dragon Hut, Delhi. Order now!!!', 75, 'Veg', 'Spring_Rolls.jpg', ''),
(5, 'Pizza', 'Pure Vegetable and Tasty.', 200, 'Veg', 'Pizza.jpg', ''),
(6, 'Coffee ', 'concentrated coffee made by forcing pressurized water through finely ground coffee beans.', 50, 'Veg', 'coffee.jpg', ''),
(7, 'Pakora ', 'Testy', 101, 'Veg', 'Pakora.jpg', ''),
(8, 'Meurig Fish ', 'Try Meurig - A whole Pomfret fish grilled with tangy marination & served with grilled onions and tomatoes.', 150, 'Non-veg', 'Meurig.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Name` text NOT NULL,
  `surname` text NOT NULL,
  `phone_no` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_type` text NOT NULL,
  `userid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Name`, `surname`, `phone_no`, `email`, `address`, `username`, `password`, `user_type`, `userid`) VALUES
('Aditya', ' Pawase', '2147483647', 'Aditya@gmail.com', 'sangamner\r\n', 'aditya1234', '1234', 'User', 'aditya1234'),
('Hrishi', 'Tajane', '9561183395', 'admin@gmail.com', 'sangamner', 'admin', 'admin', 'Admin', 'admin'),
('Aviraj', ' Satpute', '2147483647', 'avi@gmail.com', 'sukewadi,sangamner', 'avi1234', '1234', 'User', 'avi1234'),
('Hrishikesh', ' Tajane', '2147483647', 'hrishi2002@gmail.com', 'Akole', 'hrishi123', '1234', 'User', 'hrishi123'),
('jaya', ' shinde', '987654321', 'jaya@gmail.com', 'sangamner', 'jaya1234', '1234', 'User', 'jaya1234'),
('karan', ' thorat', '1234567890', 'karan@gmail.com', 'sangamner', 'karan1234', '1234', 'User', 'karan1234'),
('Krushna', ' Tambe', '2147483647', 'krushna@gmail.com', 'sangamner', 'krushna1234', '1234', 'User', 'krushna1234'),
('Mohan', ' Wakchaure', '2147483647', 'mohan@gmail.com', 'pimpalgav nipani,Akole', 'mohan1234', '1234', 'User', 'mohan1234'),
('shahibaj', ' momin', '1234567890', 'momin@gmail.com', 'sarole pathar,sangamner\r\n', 'momin1234', '1234', 'User', 'momin1234'),
('nikhil', ' wale', '2147483647', 'nikhil@gmail.com', 'manglapur,sangamner', 'nikhil1234', '1234', 'User', 'nikhil1234'),
('pratik ', ' ghule', '2147483647', 'pratik@gmail.com', 'sangamner', 'pratik1234', '1234', 'User', 'pratik1234'),
('Rushikesh', ' Mande', '1234567890', 'rushi@gmail.com', 'sangamner', 'rushi1234', '1234', 'User', 'rushi1234'),
('Rutik ', ' Chaskar', '1234567890', 'rutik@gmail.com', 'menduri,Akole', 'rutik1234', '1234', 'User', 'rutik1234'),
('Rutuja ', ' Tajane', '2147483647', 'rutuja@gmail.com', 'Shekaiwadi,Akole', 'rutuja1234', '1234', 'User', 'rutuja1234'),
('saloni ', ' katore', '2147483647', 'saloni@gmail.com', 'kalas,Akole', 'saloni1234', '1234', 'User', 'saloni1234'),
('Sanchita', ' Waman', '2147483647', 'sanchita@gmail.com', 'kolhewadi,sangamner', 'sanchita1234', '1234', 'User', 'sanchita1234'),
('Shubhangi', ' Shinde', '2147483647', 'shubhangi@gmail.com', 'nimaj,sangamner', 'shubhangi1234', '1234', 'User', 'shubhangi1234'),
('sunita ', ' Tajane', '2147483647', 'sunita1234@gmail.com', 'Shekaiwadi, Akole ,422601.', 'sunita123', '1234', 'User', 'sunita123'),
('suraj', ' more', '2147483647', 'suraj@gmail.com', 'sangamner', 'suraj123', '1234', 'User', 'suraj123'),
('thakare', ' sir', '1234567890', 'thakare@gmail.com', 'sangamner', 'thakaresir1234', '1234', 'User', 'thakaresir1234'),
('shubham', ' thorat', '546093278', 'thorat@gamil.com', 'sangamner', 'thorat1234', '1234', 'User', 'thorat1234');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `p_id` int(30) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_type` text NOT NULL,
  `Quantity` int(30) NOT NULL,
  `p_price` int(30) NOT NULL,
  `Total` int(50) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobileno` int(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pin` int(30) NOT NULL,
  `pay_method` text NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `Quantity` int(30) NOT NULL,
  `p_price` int(30) NOT NULL,
  `Total` int(30) NOT NULL,
  `userid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `sno` int(5) NOT NULL,
  `name` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`sno`, `name`) VALUES
(0, 'Tajane'),
(1, 'hrishi'),
(4, 'v');

-- --------------------------------------------------------

--
-- Table structure for table `userorders`
--

CREATE TABLE `userorders` (
  `id` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno` int(30) NOT NULL,
  `address` varchar(300) NOT NULL,
  `pin` int(30) NOT NULL,
  `pay_method` varchar(20) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `p-price` int(20) NOT NULL,
  `Total` int(50) NOT NULL,
  `userid` varchar(300) NOT NULL,
  `status` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userorders`
--

INSERT INTO `userorders` (`id`, `Name`, `email`, `mobileno`, `address`, `pin`, `pay_method`, `p_name`, `Quantity`, `p-price`, `Total`, `userid`, `status`, `date`, `image`) VALUES
(57, 'Hrishikesh Tajane', 'hrishi2002@gmail.com', 2147483647, 'Akole', 0, 'cash on Delivery', 'Spring Rolles', 1, 75, 75, 'hrishi123', 'completed', '04-20-2024 05:13 PM', 'Spring_Rolls.jpg'),
(58, 'Hrishikesh Tajane', 'hrishi2002@gmail.com', 2147483647, 'Akole', 0, 'cash on Delivery', 'Pakora ', 1, 101, 101, 'hrishi123', 'rejected', '04-20-2024 09:27 PM', 'Pakora.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'Hrishikesh', 'hrishi@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'IMG_20200817_160634.jpg'),
(2, 'rutuja', 's@d', '81dc9bdb52d04dc20036dbd8313ed055', 'IMG_20220112_191712.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `dish_name` (`dish_name`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `userorders`
--
ALTER TABLE `userorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `p_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `p_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=321;

--
-- AUTO_INCREMENT for table `userorders`
--
ALTER TABLE `userorders`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
