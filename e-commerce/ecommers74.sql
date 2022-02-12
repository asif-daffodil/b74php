-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 04:07 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommers74`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `oder_id` int(11) NOT NULL,
  `total_product_price` int(11) NOT NULL,
  `delivery_charge` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pending` int(11) NOT NULL,
  `confirmed` int(11) NOT NULL,
  `shipped` int(11) NOT NULL,
  `delivered` int(11) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `stock` int(100) NOT NULL,
  `short_descriptoin` mediumtext NOT NULL,
  `regular_price` int(100) NOT NULL,
  `offer_price` int(100) NOT NULL,
  `description` longtext NOT NULL,
  `featured_image` varchar(255) NOT NULL,
  `images` longtext NOT NULL,
  `brand` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `sub_sub_category_id` int(11) NOT NULL,
  `new` tinyint(1) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `hot` tinyint(1) NOT NULL,
  `sale` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `stock`, `short_descriptoin`, `regular_price`, `offer_price`, `description`, `featured_image`, `images`, `brand`, `category_id`, `sub_category_id`, `sub_sub_category_id`, `new`, `featured`, `hot`, `sale`, `created_at`) VALUES
(1, 'Hanes Men\'s Beefy', 0, '100% Cotton\r\nImported\r\nButton closure\r\nMachine Wash\r\nHenley sports a contrast color three-button placket\r\nFamously durable beefy fabric\r\nTag less long sleeve for the ultimate in comfort', 1200, 200, 'Looking for men’s clothing that refuse to compromise on fit, comfort and style? Then look no further than Hanes. Our polos are the perfect shirt for casual Fridays at work or weekend get togethers. Available in a variety of colors and fabrics with innovative features like moisture wicking and odor control, you’ll find our polos work overtime to keep you comfortable and looking your best.', 'men1.jpg', 'men1.jpg,men2.jpg', 'Titanic', 2, 1, 7, 1, 0, 0, 0, '2022-02-12 14:15:45'),
(2, 'Hanes Men\'s Beefy', 0, '100% Cotton\r\nImported\r\nButton closure\r\nMachine Wash\r\nHenley sports a contrast color three-button placket\r\nFamously durable beefy fabric\r\nTag less long sleeve for the ultimate in comfort', 1200, 200, 'Looking for men’s clothing that refuse to compromise on fit, comfort and style? Then look no further than Hanes. Our polos are the perfect shirt for casual Fridays at work or weekend get togethers. Available in a variety of colors and fabrics with innovative features like moisture wicking and odor control, you’ll find our polos work overtime to keep you comfortable and looking your best.', 'men1.jpg', 'men1.jpg,men2.jpg', 'Titanic', 2, 1, 7, 0, 1, 0, 0, '2022-02-12 14:16:19'),
(3, 'Hanes Men\'s Beefy', 0, '100% Cotton\r\nImported\r\nButton closure\r\nMachine Wash\r\nHenley sports a contrast color three-button placket\r\nFamously durable beefy fabric\r\nTag less long sleeve for the ultimate in comfort', 1200, 200, 'Looking for men’s clothing that refuse to compromise on fit, comfort and style? Then look no further than Hanes. Our polos are the perfect shirt for casual Fridays at work or weekend get togethers. Available in a variety of colors and fabrics with innovative features like moisture wicking and odor control, you’ll find our polos work overtime to keep you comfortable and looking your best.', 'men1.jpg', 'men1.jpg,men2.jpg', 'Titanic', 2, 1, 7, 0, 0, 1, 0, '2022-02-12 14:15:45'),
(4, 'Hanes Men\'s Beefy', 0, '100% Cotton\r\nImported\r\nButton closure\r\nMachine Wash\r\nHenley sports a contrast color three-button placket\r\nFamously durable beefy fabric\r\nTag less long sleeve for the ultimate in comfort', 1200, 200, 'Looking for men’s clothing that refuse to compromise on fit, comfort and style? Then look no further than Hanes. Our polos are the perfect shirt for casual Fridays at work or weekend get togethers. Available in a variety of colors and fabrics with innovative features like moisture wicking and odor control, you’ll find our polos work overtime to keep you comfortable and looking your best.', 'men1.jpg', 'men1.jpg,men2.jpg', 'Titanic', 2, 1, 7, 0, 0, 0, 1, '2022-02-12 14:16:19'),
(5, 'Hanes Men\'s Beefy', 0, '100% Cotton\r\nImported\r\nButton closure\r\nMachine Wash\r\nHenley sports a contrast color three-button placket\r\nFamously durable beefy fabric\r\nTag less long sleeve for the ultimate in comfort', 1200, 200, 'Looking for men’s clothing that refuse to compromise on fit, comfort and style? Then look no further than Hanes. Our polos are the perfect shirt for casual Fridays at work or weekend get togethers. Available in a variety of colors and fabrics with innovative features like moisture wicking and odor control, you’ll find our polos work overtime to keep you comfortable and looking your best.', 'men1.jpg', 'men1.jpg,men2.jpg', 'Titanic', 2, 1, 7, 0, 1, 0, 0, '2022-02-12 14:15:45'),
(6, 'Hanes Men\'s Beefy', 0, '100% Cotton\r\nImported\r\nButton closure\r\nMachine Wash\r\nHenley sports a contrast color three-button placket\r\nFamously durable beefy fabric\r\nTag less long sleeve for the ultimate in comfort', 1200, 200, 'Looking for men’s clothing that refuse to compromise on fit, comfort and style? Then look no further than Hanes. Our polos are the perfect shirt for casual Fridays at work or weekend get togethers. Available in a variety of colors and fabrics with innovative features like moisture wicking and odor control, you’ll find our polos work overtime to keep you comfortable and looking your best.', 'men1.jpg', 'men1.jpg,men2.jpg', 'Titanic', 2, 1, 7, 1, 0, 0, 0, '2022-02-12 14:16:19'),
(7, 'Hanes Men\'s Beefy', 0, '100% Cotton\r\nImported\r\nButton closure\r\nMachine Wash\r\nHenley sports a contrast color three-button placket\r\nFamously durable beefy fabric\r\nTag less long sleeve for the ultimate in comfort', 1200, 200, 'Looking for men’s clothing that refuse to compromise on fit, comfort and style? Then look no further than Hanes. Our polos are the perfect shirt for casual Fridays at work or weekend get togethers. Available in a variety of colors and fabrics with innovative features like moisture wicking and odor control, you’ll find our polos work overtime to keep you comfortable and looking your best.', 'men1.jpg', 'men1.jpg,men2.jpg', 'Titanic', 2, 1, 7, 0, 1, 0, 0, '2022-02-12 14:15:45'),
(8, 'Hanes Men\'s Beefy', 0, '100% Cotton\r\nImported\r\nButton closure\r\nMachine Wash\r\nHenley sports a contrast color three-button placket\r\nFamously durable beefy fabric\r\nTag less long sleeve for the ultimate in comfort', 1200, 200, 'Looking for men’s clothing that refuse to compromise on fit, comfort and style? Then look no further than Hanes. Our polos are the perfect shirt for casual Fridays at work or weekend get togethers. Available in a variety of colors and fabrics with innovative features like moisture wicking and odor control, you’ll find our polos work overtime to keep you comfortable and looking your best.', 'men1.jpg', 'men1.jpg,men2.jpg', 'Titanic', 2, 1, 7, 0, 0, 1, 0, '2022-02-12 14:16:19'),
(9, 'Platform Laptop Computer', 0, '100% Cotton\r\nImported\r\nButton closure\r\nMachine Wash\r\nHenley sports a contrast color three-button placket\r\nFamously durable beefy fabric\r\nTag less long sleeve for the ultimate in comfort', 1200, 200, 'Looking for men’s clothing that refuse to compromise on fit, comfort and style? Then look no further than Hanes. Our polos are the perfect shirt for casual Fridays at work or weekend get togethers. Available in a variety of colors and fabrics with innovative features like moisture wicking and odor control, you’ll find our polos work overtime to keep you comfortable and looking your best.', 'laptop1.jpg', 'laptop1.jpg,laptop2.jpg', 'Titanic', 3, 5, 29, 0, 0, 0, 1, '2022-02-12 14:16:19'),
(10, 'Platform Laptop Computer', 0, '100% Cotton\r\nImported\r\nButton closure\r\nMachine Wash\r\nHenley sports a contrast color three-button placket\r\nFamously durable beefy fabric\r\nTag less long sleeve for the ultimate in comfort', 1200, 200, 'Looking for men’s clothing that refuse to compromise on fit, comfort and style? Then look no further than Hanes. Our polos are the perfect shirt for casual Fridays at work or weekend get togethers. Available in a variety of colors and fabrics with innovative features like moisture wicking and odor control, you’ll find our polos work overtime to keep you comfortable and looking your best.', 'laptop1.jpg', 'laptop1.jpg,laptop2.jpg', 'Titanic', 3, 5, 29, 0, 0, 1, 0, '2022-02-12 14:16:19'),
(11, 'Platform Laptop Computer', 0, '100% Cotton\r\nImported\r\nButton closure\r\nMachine Wash\r\nHenley sports a contrast color three-button placket\r\nFamously durable beefy fabric\r\nTag less long sleeve for the ultimate in comfort', 1200, 200, 'Looking for men’s clothing that refuse to compromise on fit, comfort and style? Then look no further than Hanes. Our polos are the perfect shirt for casual Fridays at work or weekend get togethers. Available in a variety of colors and fabrics with innovative features like moisture wicking and odor control, you’ll find our polos work overtime to keep you comfortable and looking your best.', 'laptop1.jpg', 'laptop1.jpg,laptop2.jpg', 'Titanic', 3, 5, 29, 1, 0, 0, 0, '2022-02-12 14:16:19'),
(12, 'Platform Laptop Computer', 0, '100% Cotton\r\nImported\r\nButton closure\r\nMachine Wash\r\nHenley sports a contrast color three-button placket\r\nFamously durable beefy fabric\r\nTag less long sleeve for the ultimate in comfort', 1200, 200, 'Looking for men’s clothing that refuse to compromise on fit, comfort and style? Then look no further than Hanes. Our polos are the perfect shirt for casual Fridays at work or weekend get togethers. Available in a variety of colors and fabrics with innovative features like moisture wicking and odor control, you’ll find our polos work overtime to keep you comfortable and looking your best.', 'laptop1.jpg', 'laptop1.jpg,laptop2.jpg', 'Titanic', 3, 5, 29, 0, 1, 0, 0, '2022-02-12 14:16:19'),
(13, 'Platform Laptop Computer', 0, '100% Cotton\r\nImported\r\nButton closure\r\nMachine Wash\r\nHenley sports a contrast color three-button placket\r\nFamously durable beefy fabric\r\nTag less long sleeve for the ultimate in comfort', 1200, 200, 'Looking for men’s clothing that refuse to compromise on fit, comfort and style? Then look no further than Hanes. Our polos are the perfect shirt for casual Fridays at work or weekend get togethers. Available in a variety of colors and fabrics with innovative features like moisture wicking and odor control, you’ll find our polos work overtime to keep you comfortable and looking your best.', 'laptop1.jpg', 'laptop1.jpg,laptop2.jpg', 'Titanic', 3, 5, 29, 0, 0, 1, 0, '2022-02-12 14:16:19'),
(14, 'Platform Laptop Computer', 0, '100% Cotton\r\nImported\r\nButton closure\r\nMachine Wash\r\nHenley sports a contrast color three-button placket\r\nFamously durable beefy fabric\r\nTag less long sleeve for the ultimate in comfort', 1200, 200, 'Looking for men’s clothing that refuse to compromise on fit, comfort and style? Then look no further than Hanes. Our polos are the perfect shirt for casual Fridays at work or weekend get togethers. Available in a variety of colors and fabrics with innovative features like moisture wicking and odor control, you’ll find our polos work overtime to keep you comfortable and looking your best.', 'laptop1.jpg', 'laptop1.jpg,laptop2.jpg', 'Titanic', 3, 5, 29, 0, 0, 0, 1, '2022-02-12 14:16:19'),
(15, 'Platform Laptop Computer', 0, '100% Cotton\r\nImported\r\nButton closure\r\nMachine Wash\r\nHenley sports a contrast color three-button placket\r\nFamously durable beefy fabric\r\nTag less long sleeve for the ultimate in comfort', 1200, 200, 'Looking for men’s clothing that refuse to compromise on fit, comfort and style? Then look no further than Hanes. Our polos are the perfect shirt for casual Fridays at work or weekend get togethers. Available in a variety of colors and fabrics with innovative features like moisture wicking and odor control, you’ll find our polos work overtime to keep you comfortable and looking your best.', 'laptop1.jpg', 'laptop1.jpg,laptop2.jpg', 'Titanic', 3, 5, 29, 0, 0, 1, 0, '2022-02-12 14:16:19'),
(16, 'Platform Laptop Computer', 0, '100% Cotton\r\nImported\r\nButton closure\r\nMachine Wash\r\nHenley sports a contrast color three-button placket\r\nFamously durable beefy fabric\r\nTag less long sleeve for the ultimate in comfort', 1200, 200, 'Looking for men’s clothing that refuse to compromise on fit, comfort and style? Then look no further than Hanes. Our polos are the perfect shirt for casual Fridays at work or weekend get togethers. Available in a variety of colors and fabrics with innovative features like moisture wicking and odor control, you’ll find our polos work overtime to keep you comfortable and looking your best.', 'laptop1.jpg', 'laptop1.jpg,laptop2.jpg', 'Titanic', 3, 5, 29, 0, 0, 0, 1, '2022-02-12 14:16:19');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `icon`) VALUES
(2, 'clothing', 'icon fa fa-shopping-bag'),
(3, 'electronics', 'icon fa fa-laptop'),
(4, 'health & beauty', 'icon fa fa-paw'),
(5, 'watches', 'icon fa fa-clock-o'),
(6, 'jewellery', 'icon fa fa-diamond'),
(7, 'shoes', 'icon fa fa-heartbeat'),
(8, 'kids & girls', 'icon fa fa-paper-plane');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `subheading` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `btntext` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `heading`, `subheading`, `description`, `link`, `btntext`, `img`) VALUES
(1, 'Top Brands', 'New Collections', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'home', 'Shop Now', 'slide1.jpeg'),
(2, 'My Business', 'Latest Collections', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'home', 'Read More', 'slide2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `slider-bottom`
--

CREATE TABLE `slider-bottom` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider-bottom`
--

INSERT INTO `slider-bottom` (`id`, `title`, `subtitle`) VALUES
(1, 'MONEY BACK', '30 Days Money Back Guarantee'),
(2, 'FREE SHIPPING', 'Shipping on orders over $99'),
(3, 'SPECIAL SALE', 'Extra $5 off on all items');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `name`, `category_id`) VALUES
(1, 'Men', 2),
(2, 'Women', 2),
(3, 'Boys', 2),
(4, 'Girls', 2),
(5, 'Laptops', 3),
(6, 'Desktops', 3),
(7, 'Cameras', 3),
(8, 'Mobile Phones', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_category`
--

CREATE TABLE `sub_sub_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sub_cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_sub_category`
--

INSERT INTO `sub_sub_category` (`id`, `name`, `sub_cat_id`) VALUES
(1, 'Dresses', 1),
(2, 'Shoes', 1),
(3, 'Jackets', 1),
(4, 'Sunglasses', 1),
(5, 'Sport Wear', 1),
(6, 'Blazers', 1),
(7, 'Shirts', 1),
(8, 'Handbags', 2),
(9, 'Jwellery', 2),
(10, 'Swimwear', 2),
(11, 'Tops', 2),
(12, 'Flats', 2),
(13, 'Shoes', 2),
(14, 'Winter Wear', 2),
(15, 'Toys & Games', 3),
(16, 'Jeans', 3),
(17, 'Shirts', 3),
(18, 'Shoes', 3),
(19, 'School Bags', 3),
(20, 'Lunch Box', 3),
(21, 'Footwear', 3),
(22, 'Sandals', 4),
(23, 'Shorts', 4),
(24, 'Dresses', 4),
(25, 'Jwellery', 4),
(26, 'Bags', 4),
(27, 'Night Dress', 4),
(28, 'Swim Wear', 4),
(29, 'Gaming', 5),
(30, 'Laptop Skins', 5),
(31, 'Apple', 5),
(32, 'Dell', 5),
(33, 'Lenovo', 5),
(34, 'Microsoft', 5),
(35, 'Asus', 5),
(36, 'Adapters', 5),
(37, 'Batteries', 5),
(38, 'Cooling Pads', 5),
(39, 'Routers & Modems', 6),
(40, 'CPUs, Processors', 6),
(41, 'PC Gaming Store', 6),
(42, 'Graphics Cards', 6),
(43, 'Components', 6),
(44, 'Webcam', 6),
(45, 'Memory (RAM)', 6),
(46, 'Motherboards', 6),
(47, 'Keyboards', 6),
(48, 'Headphones', 6),
(49, 'Accessories', 7),
(50, 'Binoculars', 7),
(51, 'Telescopes', 7),
(52, 'Camcorders', 7),
(53, 'Digital', 7),
(54, 'Film Cameras', 7),
(55, 'Flashes', 7),
(56, 'Lenses', 7),
(57, 'Surveillance', 7),
(58, 'Tripods', 7),
(59, 'Apple', 8),
(60, 'Samsung', 8),
(61, 'Lenovo', 8),
(62, 'Motorola', 8),
(63, 'LeEco', 8),
(64, 'Asus', 8),
(65, 'Acer', 8),
(66, 'Accessories', 8),
(67, 'Headphones', 8),
(68, 'Memory Cards', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `sub_category_id` (`sub_category_id`),
  ADD KEY `sub_sub_category_id` (`sub_sub_category_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider-bottom`
--
ALTER TABLE `slider-bottom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `sub_sub_category`
--
ALTER TABLE `sub_sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_cat_id` (`sub_cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider-bottom`
--
ALTER TABLE `slider-bottom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sub_sub_category`
--
ALTER TABLE `sub_sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_category` (`id`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`sub_sub_category_id`) REFERENCES `sub_sub_category` (`id`);

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`id`);

--
-- Constraints for table `sub_sub_category`
--
ALTER TABLE `sub_sub_category`
  ADD CONSTRAINT `sub_sub_category_ibfk_1` FOREIGN KEY (`sub_cat_id`) REFERENCES `sub_category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
