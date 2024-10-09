-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2024 at 10:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL COMMENT 'Unique identifier for each category.',
  `category_name` varchar(15) NOT NULL COMMENT 'name of the product category',
  `parent_id` int(11) NOT NULL COMMENT 'identifier for the parent category(if any)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL COMMENT 'unique identifier for each order item',
  `order_id` int(11) NOT NULL COMMENT 'ID of the related order',
  `product_id` varchar(15) NOT NULL COMMENT 'Id of the product included in the order.',
  `quantity` int(11) NOT NULL COMMENT 'the quantity of the product ordered',
  `price` decimal(10,2) NOT NULL COMMENT 'the total price for this product (quantity x price)',
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'unique identifier for each cart'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL COMMENT 'unique identifier for each payment',
  `order_id` int(11) NOT NULL COMMENT 'Id of the related order',
  `amount` decimal(10,2) NOT NULL COMMENT 'the amount paid',
  `payment_method` enum('credit card','paypal','bank transfer') NOT NULL COMMENT 'the method used to make the payment',
  `payment_status` enum('pending','completed','failed') NOT NULL COMMENT 'the current status of the payment',
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'date and time the payment was made'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL COMMENT 'unique identifier for each review',
  `product_id` varchar(15) NOT NULL COMMENT 'the product was reviewed',
  `user_id` int(11) NOT NULL COMMENT 'the user who submitted the review',
  `rating` int(6) NOT NULL COMMENT 'user''s rating (between 1 and 5)',
  `comment` text NOT NULL COMMENT 'the written review by the user',
  `review_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'date and time the review was submitted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
