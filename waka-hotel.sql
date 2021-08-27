-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2021 at 06:59 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waka-hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'U'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `username`, `password`, `status`) VALUES
(1, 'sakura', '123', 'U'),
(2, 'admin', 'admin', 'A'),
(3, 'user', 'user', 'U'),
(4, '123', '123', 'U'),
(5, 'tomomi', 'tomomi', 'U');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `pic_id` int(11) NOT NULL,
  `pic_name` varchar(11) NOT NULL,
  `pic_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`pic_id`, `pic_name`, `pic_image`) VALUES
(1, 'home_reserv', 'home_reservation.jpg-1.png'),
(3, 'home_reserv', 'washi-1.jpg'),
(4, 'sakura', 'blank-man.jpg'),
(5, 'home_food-1', 'home_food-1s.jpg'),
(6, 'home_goods.', 'home_goods.jpg'),
(7, 'ooo', 'room1.png'),
(8, 'home_hotspo', 'home_hotspot_1.jpg'),
(9, '', 'home_spa2.png'),
(10, 'home_reserv', 'kyoto_downtown.webp'),
(11, 'home_reserv', 'kyoto_downtown.webp');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `total_price` float(50,2) NOT NULL,
  `number_people` int(11) NOT NULL,
  `nights` int(11) NOT NULL,
  `number_rooms` int(11) NOT NULL,
  `reservation_status` varchar(50) NOT NULL DEFAULT 'upcoming'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `user_id`, `room_id`, `check_in`, `check_out`, `total_price`, `number_people`, `nights`, `number_rooms`, `reservation_status`) VALUES
(12, 3, 1, '2021-08-23', '2021-08-24', 200.00, 2, 1, 2, 'completed'),
(16, 3, 2, '2021-08-25', '2021-08-26', 300.00, 5, 1, 2, 'cancel'),
(17, 3, 1, '2021-08-26', '2021-08-28', 400.00, 3, 2, 2, 'cancel'),
(18, 2, 1, '2021-08-24', '2021-08-28', 100.00, 2, 1, 1, 'active'),
(19, 2, 2, '2021-08-24', '2021-08-28', 400.00, 3, 2, 2, 'active'),
(20, 2, 1, '2021-08-24', '2021-08-26', 400.00, 3, 2, 2, 'active'),
(23, 3, 1, '2021-09-01', '2021-09-02', 200.00, 5, 1, 2, 'cancel');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `room_price` float(50,2) NOT NULL,
  `room_capacity` int(11) NOT NULL,
  `discription` text NOT NULL,
  `total_rooms` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_name`, `room_price`, `room_capacity`, `discription`, `total_rooms`) VALUES
(1, 'room1', 100.00, 3, 'This room is ocean view.You can see very beautiful Pacific Ocean.', 10),
(2, 'room2', 150.00, 4, 'You can see Mt.Fugi in this room.', 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `address`, `contact_number`, `email`, `account_id`) VALUES
(1, 'sakura', 'wakabayashi', 'Japan', '123123', 'w.w.sakura@icloud.com', 1),
(2, 'admin', 'admin', 'admin', '123', 'admin@mail.com', 2),
(3, 'users', 'users', 'user', '123', 'user@user.com', 3),
(4, '123', '123', '123', '123', '123@123.com', 4),
(5, 'tomomi', 'wakabayashi', 'Japan', '123456', 'admin@mail.com', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`pic_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `pic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
