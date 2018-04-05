-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 02, 2018 at 02:34 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soledad`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `users` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `checkout_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `users`, `quantity`, `price`, `checkout_id`) VALUES
(4, '3', 'Hoka one one Arahi', '1', '399.99', 3),
(5, '9', 'Adidas Sports', '1', '199.99', 3),
(6, '10', 'Under Armour', '1', '599.99', 4),
(7, '10', 'Under Armour', '1', '599.99', 4),
(8, '2', 'Hoka one one Cavu', '1', '799.99', 4),
(9, '10', 'Under Armour', '1', '599.99', 5),
(10, '9', 'Adidas Sports', '3', '199.99', 6),
(11, '9', 'Adidas Sports', '1', '199.99', 6),
(12, '9', 'Adidas Sports', '1', '199.99', 6),
(13, '9', 'Adidas Sports', '1', '199.99', 8),
(14, '10', 'Under Armour', '1', '599.99', 8),
(15, '10', 'Under Armour', '1', '599.99', 8),
(16, '10', 'Under Armour', '1', '599.99', 10),
(17, '10', 'Under Armour', '1', '599.99', 11),
(18, '10', 'Under Armour', '1', '599.99', 12),
(19, '10', 'Under Armour', '1', '599.99', 130),
(20, '10', 'Under Armour', '1', '599.99', 132),
(21, '8', 'Nike Ply', '3', '89.99', 133);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `orders` int(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`) VALUES
(1, 'Hoka one one Mach', '1.jpg', 499.99),
(2, 'Hoka one one Cavu', '2.jpg', 799.99),
(3, 'Hoka one one Arahi', '3.jpg', 399.99),
(4, 'Hoka one one Pack', '4.jpg', 566.99),
(6, 'Adidas Sole', '6.jpg', 299.99),
(7, 'Nike Run', '7.jpg', 99.99),
(8, 'Nike Ply', '8.jpg', 89.99),
(9, 'Adidas Sports', '9.jpg', 199.99),
(10, 'Under Armour', '10.jpg', 599.99);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `role`) VALUES
(10, 'admin', '$2y$10$Pk.dSDNvXZnXYwcUNZ87YOKX4VqeM.LGLIMT9FIxLBkgujDHPUYKC', '2018-03-27 04:46:15', ''),
(11, 'cruz', '$2y$10$x9.i9Sa9HFaI49hgWyXjWO1fdNoax6SMlaCAQDkZYgcHnJauo/ZpW', '2018-03-27 08:10:52', ''),
(12, 'pat', '$2y$10$yYvP/gy1ePMPF26mLvjFTOMjTVTqulNi/AJLKHgFkOEug/Awg/Qqu', '2018-03-27 09:06:46', ''),
(13, 'clarissa', '$2y$10$LkexHsyKqgh0O0lgsqpjROfn9/RbauQZk872j1WyA9xptLUnBSEsS', '2018-03-27 21:04:15', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
