-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2023 at 05:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `florit_page`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT 'Your Name',
  `email` varchar(255) NOT NULL DEFAULT 'Your Email',
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `upload_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `comments` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `email`, `create_at`, `upload_at`, `comments`) VALUES
(1, 'Min Min', 'christopher@gmail.com', '2023-02-16 22:51:34', '2023-02-16 16:21:34', 'hi i am aung aung oo'),
(2, 'Hla Hla', 'hla@gmail.com', '2023-02-17 10:35:06', '2023-02-17 04:05:06', 'This cutting garden classic is easy to grow, pollinator-friendly, and a great choice for beginners. Plants will flower over a long period of time if regularly harvested. Add the bright, colorful petals to salads or egg dishes as a delightful garnish.');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comments` mediumtext NOT NULL DEFAULT 'Enter Your Comment',
  `JOD` time DEFAULT current_timestamp(),
  `upload_time` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `message`) VALUES
(1, 'mya@gmail.com', 'hello how are you\r\n'),
(2, 'yenaing@gmail.com', 'find thank you and you\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `ordernote` mediumtext DEFAULT NULL,
  `paymethod` char(100) NOT NULL DEFAULT 'cheque',
  `p_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `categories` char(200) DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `product_img1` blob NOT NULL,
  `product_img2` blob NOT NULL,
  `description` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `categories` char(200) DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `product_img1` blob NOT NULL,
  `product_img2` blob NOT NULL,
  `description` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `categories`, `rating`, `product_img1`, `product_img2`, `description`) VALUES
(1, 'product-1', 14, 'bouquet', 2, 0x70726f647563742d312e6a70672e77656270, 0x70726f647563742d312e6a70672e77656270, 'Most people are unaware of the less common flower'),
(2, 'product-2', 20, 'flowerbox', 3, 0x70726f647563742d322e6a70672e77656270, 0x70726f647563742d322e6a70672e77656270, 'Most people are unaware of the less common flower'),
(3, 'product-3', 15, 'flowershelf', 4, 0x70726f647563742d332e6a70672e77656270, 0x70726f647563742d332e6a70672e77656270, 'Most people are unaware of the less common flower'),
(4, 'product-4', 28, 'basketflower', 2, 0x70726f647563742d342e6a70672e77656270, 0x70726f647563742d342e6a70672e77656270, 'Most people are unaware of the less common flower'),
(5, 'product-5', 29, 'gift', 1, 0x70726f647563742d352e6a70672e77656270, 0x70726f647563742d352e6a70672e77656270, 'Most people are unaware of the less common flower'),
(6, 'product-6', 32, 'bouquet', 3, 0x70726f647563742d362e6a70672e77656270, 0x70726f647563742d362e6a70672e77656270, 'Most people are unaware of the less common flower'),
(7, 'product-7', 17, 'flowerbox', 2, 0x70726f647563742d372e6a70672e77656270, 0x70726f647563742d372e6a70672e77656270, 'Most people are unaware of the less common flower'),
(8, 'product-8', 13, 'flowershelf', 4, 0x70726f647563742d382e6a70672e77656270, 0x70726f647563742d382e6a70672e77656270, 'Most people are unaware of the less common flower'),
(9, 'product-9', 14, 'basketflower', 1, 0x70726f647563742d392e6a70672e77656270, 0x70726f647563742d392e6a70672e77656270, 'Most people are unaware of the less common flower'),
(10, 'product-10', 9, 'gift', 3, 0x70726f647563742d31302e6a70672e77656270, 0x70726f647563742d31302e6a70672e77656270, 'Most people are unaware of the less common flower'),
(11, 'product-11', 25, 'bouquet', 5, 0x7468756d622d312e6a70672e77656270, 0x7468756d622d312e6a70672e77656270, 'Most people are unaware of the less common flower'),
(12, 'product-12', 40, 'flowerbox', 2, 0x7468756d622d322e6a70672e77656270, 0x7468756d622d322e6a70672e77656270, 'Most people are unaware of the less common flower'),
(13, 'product-13', 37, 'flowerbox', 1, 0x7468756d622d332e6a70672e77656270, 0x7468756d622d332e6a70672e77656270, 'Most people are unaware of the less common flower'),
(14, 'product-14', 29, 'flowershelf', 4, 0x7468756d622d342e6a70672e77656270, 0x7468756d622d342e6a70672e77656270, 'Most people are unaware of the less common flower'),
(15, 'product-15', 16, 'basketflower', 3, 0x7468756d622d352e6a70672e77656270, 0x7468756d622d352e6a70672e77656270, 'Most people are unaware of the less common flower');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reviews` mediumtext NOT NULL DEFAULT 'Enter Your Review',
  `JOD` timestamp NOT NULL DEFAULT current_timestamp(),
  `upload_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `JoinDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `upload_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(255) NOT NULL DEFAULT 'Enter Your Email',
  `password` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL DEFAULT 'Enter Your Phone Number',
  `user_img` mediumblob NOT NULL DEFAULT 'team-1.jpg.webp',
  `city` varchar(200) NOT NULL DEFAULT 'Enter Your City',
  `country` varchar(255) DEFAULT NULL,
  `address1` varchar(255) NOT NULL DEFAULT 'Enter Your address 1',
  `address2` varchar(255) NOT NULL DEFAULT 'Enter Your address 2',
  `postcode` char(200) NOT NULL DEFAULT 'Enter Your postcode'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `role`, `JoinDate`, `upload_time`, `email`, `password`, `phonenumber`, `user_img`, `city`, `country`, `address1`, `address2`, `postcode`) VALUES
(1, 'James', 'Leo', 0, '2023-02-14 16:06:21', '2023-02-14 16:06:21', 'james@gmail.com', '11111', '09957092779', 0x7465616d2d312e6a70672e77656270, 'Bago', 'Myanmar', 'oka', 'okager', '8803'),
(2, 'Myint ', 'Maung', 1, '2023-02-17 04:19:08', '2023-02-17 04:19:08', 'myint@gmail.com', '22222', '0993827638', 0x41414f5f70686f746f2e6a7067, 'Yangon', 'Myanmar', 'Hlaing Tar Yar', 'Bago Road', '8008');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
