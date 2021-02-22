-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2021 at 04:35 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `purchase_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `added_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `category`, `price`, `stock`, `added_at`, `product_desc`) VALUES
(1, 'Legend of Zelda: Breath of the Wild', 'Games', 20000, 12, '2021-02-22 10:29:45', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor voluptatibus ipsum minus nobis. Animi hic, suscipit eius quo odit fugiat possimus eos nostrum maxime labore delectus facilis reiciendis quod laborum!'),
(2, 'Legion i5 Pro', 'Electronics', 202300, 5, '2021-02-22 10:30:08', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor voluptatibus ipsum minus nobis. Animi hic, suscipit eius quo odit fugiat possimus eos nostrum maxime labore delectus facilis reiciendis quod laborum!'),
(3, 'Serta Queen Size Mattress', 'Furniture', 45000, 40, '2021-02-22 10:44:40', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In assumenda maxime sed veniam. Nobis impedit modi, deserunt eos aliquam dicta unde! A voluptate, atque labore libero eveniet consequuntur laudantium maiores.'),
(4, 'Samsung Galaxy S20', 'Electronics', 229000, 15, '2021-02-22 10:45:21', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In assumenda maxime sed veniam. Nobis impedit modi, deserunt eos aliquam dicta unde! A voluptate, atque labore libero eveniet consequuntur laudantium maiores.'),
(5, 'Legend of Zelda: Hyrule Warriors', 'Games', 17000, 25, '2021-02-22 10:45:54', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In assumenda maxime sed veniam. Nobis impedit modi, deserunt eos aliquam dicta unde! A voluptate, atque labore libero eveniet consequuntur laudantium maiores.'),
(6, 'Serta King Size Mattress', 'Furniture', 60000, 30, '2021-02-22 10:46:33', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In assumenda maxime sed veniam. Nobis impedit modi, deserunt eos aliquam dicta unde! A voluptate, atque labore libero eveniet consequuntur laudantium maiores.'),
(7, 'Arteza 40 Roller Ball Point Pen', 'Stationary', 12000, 15, '2021-02-22 10:47:11', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In assumenda maxime sed veniam. Nobis impedit modi, deserunt eos aliquam dicta unde! A voluptate, atque labore libero eveniet consequuntur laudantium maiores.'),
(8, 'Arteza Drawing Pad 200 Pages', 'Stationary', 1000, 30, '2021-02-22 10:48:04', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In assumenda maxime sed veniam. Nobis impedit modi, deserunt eos aliquam dicta unde! A voluptate, atque labore libero eveniet consequuntur laudantium maiores.'),
(9, 'Wahl Toolkit Set of 20 bits', 'Tools', 13000, 30, '2021-02-22 10:48:45', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In assumenda maxime sed veniam. Nobis impedit modi, deserunt eos aliquam dicta unde! A voluptate, atque labore libero eveniet consequuntur laudantium maiores.'),
(10, 'CAT Contruction Set', 'Tools', 30000, 12, '2021-02-22 10:49:43', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In assumenda maxime sed veniam. Nobis impedit modi, deserunt eos aliquam dicta unde! A voluptate, atque labore libero eveniet consequuntur laudantium maiores.'),
(11, 'Louis Vuitton Sweater', 'Clothing', 70000, 5, '2021-02-22 10:52:03', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In assumenda maxime sed veniam. Nobis impedit modi, deserunt eos aliquam dicta unde! A voluptate, atque labore libero eveniet consequuntur laudantium maiores.'),
(12, 'Under Armor xTreme Fit Sneakers', 'Clothing', 22000, 18, '2021-02-22 10:53:49', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In assumenda maxime sed veniam. Nobis impedit modi, deserunt eos aliquam dicta unde! A voluptate, atque labore libero eveniet consequuntur laudantium maiores.'),
(13, 'Samsung Galaxy S10', 'Electronics', 130000, 13, '2021-02-22 13:26:04', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae sapiente maiores dicta a. Enim, esse assumenda. Quae distinctio beatae minus, quod, veniam labore adipisci repellat, tempore consequuntur obcaecati sapiente nobis!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pkey` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_admin` varchar(255) NOT NULL DEFAULT 'false'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `pkey`, `created_at`, `is_admin`) VALUES
(0, 'admin', 'admin', 'admin@email.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '2021-02-21 12:52:14', 'true'),
(1, 'Richard', 'Rampersaud', 'rich59@email.com', '972a13cbbe5e845ecb59dace8e3ece01450d33f4', '2021-02-14 18:12:44', 'false'),
(2, 'Zack', 'Bell', 'zack59@email.com', 'd7cdf09fc0f0426e98c9978ee42da5d61fa54986', '2021-02-14 20:09:12', 'false'),
(3, 'John', 'Doe', 'john59@email.com', '8a9cbf8d30c2d25d8fb7929aaccd4029cac151ee', '2021-02-19 16:35:23', 'false');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
