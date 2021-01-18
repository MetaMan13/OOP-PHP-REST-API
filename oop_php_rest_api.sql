-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2021 at 05:34 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oop_php_rest_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `main_categories`
--

CREATE TABLE `main_categories` (
  `category_id` int(255) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_categories`
--

INSERT INTO `main_categories` (`category_id`, `category_name`) VALUES
(1, 'Electronics'),
(2, 'Fashion'),
(3, 'Beauty'),
(4, 'DIY'),
(5, 'Sport'),
(6, 'Health'),
(7, 'Programming'),
(8, 'Hobbies');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(255) NOT NULL,
  `post_category` int(50) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_body` text NOT NULL,
  `post_create_date` date NOT NULL DEFAULT curdate(),
  `post_creator` int(255) NOT NULL,
  `post_modified_date` date NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category`, `post_title`, `post_body`, `post_create_date`, `post_creator`, `post_modified_date`) VALUES
(1, 3, 'Best chess openings for beginners', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc porttitor ipsum dignissim maximus posuere. Sed erat est, convallis sit amet lacinia a, maximus et lectus. Vivamus efficitur dui id placerat dictum. Sed condimentum egestas tristique. Aenean dapibus eleifend bibendum. Quisque sem est, lacinia eu lacus et, dignissim suscipit mi. Integer.', '2021-01-15', 1, '2021-01-15'),
(2, 7, 'Best coding practices for beginners', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc porttitor ipsum dignissim maximus posuere. Sed erat est, convallis sit amet lacinia a, maximus et lectus. Vivamus efficitur dui id placerat dictum. Sed condimentum egestas tristique. Aenean dapibus eleifend bibendum. Quisque sem est, lacinia eu lacus et, dignissim suscipit mi. Integer.', '2021-01-15', 1, '2021-01-15'),
(6, 4, 'Best chess openings for beginners', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc porttitor ipsum dignissim maximus posuere. Sed erat est, convallis sit amet lacinia a, maximus et lectus. Vivamus efficitur dui id placerat dictum. Sed condimentum egestas tristique. Aenean dapibus eleifend bibendum. Quisque sem est, lacinia eu lacus et, dignissim suscipit mi. Integer.', '2021-01-15', 1, '2021-01-15'),
(7, 3, 'Best chess openings for beginners', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc porttitor ipsum dignissim maximus posuere. Sed erat est, convallis sit amet lacinia a, maximus et lectus. Vivamus efficitur dui id placerat dictum. Sed condimentum egestas tristique. Aenean dapibus eleifend bibendum. Quisque sem est, lacinia eu lacus et, dignissim suscipit mi. Integer.', '2021-01-15', 1, '2021-01-15'),
(8, 2, 'Best chess openings for beginners', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc porttitor ipsum dignissim maximus posuere. Sed erat est, convallis sit amet lacinia a, maximus et lectus. Vivamus efficitur dui id placerat dictum. Sed condimentum egestas tristique. Aenean dapibus eleifend bibendum. Quisque sem est, lacinia eu lacus et, dignissim suscipit mi. Integer.', '2021-01-15', 1, '2021-01-15'),
(9, 1, 'Best electronics devices', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc porttitor ipsum dignissim maximus posuere. Sed erat est, convallis sit amet lacinia a, maximus et lectus. Vivamus efficitur dui id placerat dictum. Sed condimentum egestas tristique. Aenean dapibus eleifend bibendum. Quisque sem est, lacinia eu lacus et, dignissim suscipit mi. Integer.', '2021-01-15', 1, '2021-01-15'),
(10, 2, 'Updated with strict types', 'Changed with strict types', '2021-01-16', 2, '2021-01-16'),
(11, 2, 'Inserted with PDO', 'Create me', '2021-01-16', 2, '2021-01-16'),
(12, 2, 'Inserted with PDO', 'Create me', '2021-01-16', 2, '2021-01-16'),
(13, 2, 'Inserted with PDO', 'Create me', '2021-01-16', 2, '2021-01-16'),
(14, 2, 'Inserted with PDO', 'Create me', '2021-01-16', 3, '2021-01-16'),
(15, 2, 'Inserted with PDO', 'Create me', '2021-01-16', 3, '2021-01-16'),
(16, 2, 'Inserted with PDO', 'Create me', '2021-01-16', 3, '2021-01-16'),
(17, 2, 'Inserted with PDO', 'Create me', '2021-01-16', 3, '2021-01-16'),
(18, 3, 'Inserted with PDO', 'Create me', '2021-01-16', 3, '2021-01-16'),
(19, 3, 'Ajax', 'Lorem whatever', '2021-01-17', 5, '2021-01-17'),
(20, 3, 'Ajax', 'Lorem whatever', '2021-01-17', 5, '2021-01-17'),
(21, 3, 'Ajax', 'Lorem whatever', '2021-01-17', 5, '2021-01-17'),
(22, 3, 'Ajax', 'Lorem whatever', '2021-01-18', 5, '2021-01-18'),
(23, 3, 'Ajax', 'Lorem whatever', '2021-01-18', 5, '2021-01-18'),
(24, 3, 'Ajax', 'Lorem whatever', '2021-01-18', 5, '2021-01-18'),
(25, 3, 'Ajax', 'Lorem whatever', '2021-01-18', 5, '2021-01-18'),
(26, 3, 'Ajax', 'Lorem whatever', '2021-01-18', 5, '2021-01-18'),
(27, 5, 'Ajax made me', 'Created by api', '2021-01-18', 6, '2021-01-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main_categories`
--
ALTER TABLE `main_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main_categories`
--
ALTER TABLE `main_categories`
  MODIFY `category_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
