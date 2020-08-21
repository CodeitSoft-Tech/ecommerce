-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2020 at 08:42 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `admin_username`, `admin_email`, `admin_pass`, `admin_status`) VALUES
(1, 'codeitsoft', 'technology', 'administrator', 'admin@admin.com', 'admin', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `color` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`, `size`, `color`) VALUES
(9, '::1', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_status` varchar(50) NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_status`, `cat_desc`) VALUES
(1, 'Men', 'Active', '                                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.        \r\n                      \r\n              '),
(2, 'Women', 'Active', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 'Kids', 'Active', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(4, 'Boys', 'Active', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(5, 'Girls', 'Active', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(6, 'Babies', 'Active', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `color_id` int(11) NOT NULL,
  `color_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`color_id`, `color_name`) VALUES
(1, 'orange'),
(2, 'black'),
(3, 'purple'),
(4, 'pink');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_username` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_username`, `customer_email`, `customer_contact`, `customer_password`, `customer_ip`) VALUES
(9, 'Francis', 'codeitsoft', 'tawiahfrancis13@gmail.com', '0540224589', 'west2020', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `color` text NOT NULL,
  `order_date` date NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `qty`, `size`, `color`, `order_date`, `order_status`) VALUES
(1, 8, 10, 1, 's', 'purple', '2020-08-02', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `pending_approvals`
--

CREATE TABLE `pending_approvals` (
  `pending_id` int(11) NOT NULL,
  `p_cat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(100) NOT NULL,
  `discount_price` int(100) NOT NULL,
  `promo_price` int(100) NOT NULL,
  `product_qty` int(255) NOT NULL,
  `product_keywords` text NOT NULL,
  `product_status` varchar(50) NOT NULL,
  `product_specs` text NOT NULL,
  `product_desc` text NOT NULL,
  `approval_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pending_approvals`
--

INSERT INTO `pending_approvals` (`pending_id`, `p_cat_id`, `cat_id`, `seller_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `discount_price`, `promo_price`, `product_qty`, `product_keywords`, `product_status`, `product_specs`, `product_desc`, `approval_status`) VALUES
(1, 4, 0, 4, '2020-08-05 18:43:39', 'Electric Oven', 'product20.jpg', 'product20.jpg', 'product20.jpg', 250, 200, 150, 200, 'Oven', 'Regular', '                          	\r\n		          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '                          	\r\n		          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Approved'),
(3, 4, 0, 0, '2020-08-05 18:53:37', 'Headset', 'product17.jpg', 'product17.jpg', 'product17.jpg', 55, 50, 40, 100, 'earpiece, earphones, headset', 'Regular', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>', '                          	\r\n		          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim \r\nveniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea \r\ncommodo consequat. Duis aute irure dolor in reprehenderit in voluptate \r\nvelit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint \r\noccaecat cupidatat non proident, sunt in culpa qui officia deserunt \r\nmollit anim id est laborum.<br>', 'Pending'),
(4, 6, 1, 0, '2020-08-05 20:43:43', 'Shirt', 'product9.jpg', 'product9.jpg', 'product9.jpg', 10, 9, 8, 100, 'shirt', 'Regular', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.          ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.          \r\n		          ', 'Pending'),
(5, 5, 1, 0, '2020-08-05 22:02:31', 'Mobile Watch', 'product15.jpg', 'product15.jpg', 'product15.jpg', 1200, 1000, 800, 2000, 'Watch, mobile, phones', 'Regular', '                          	\r\n		          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '                          	\r\n		          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; proident, sunt in culpa qui officia deserunt mollit anim id est laborum.         	\r\n		          ', 'Pending'),
(6, 5, 1, 9, '2020-08-05 19:03:40', 'Test product', 'analytics.jpeg', 'carl-heyerdahl-KE0nC8-58MQ-unsplash.jpg', 'pp.jpg', 10, 8, 7, 10, 'test', 'Discount', 'Some cool product', 'Some cool description', 'Pending'),
(7, 2, 1, 9, '2020-08-05 22:26:47', 'Pro1', 'godi-logo-old.png', 'WhatsApp Image 2020-07-25 at 10.51.12.jpeg', 'WhatsApp Image 2020-07-13 at 08.14.45.jpeg', 10, 8, 7, 20, 'pro1', 'Regular', 'Something nice', 'Something nice', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `color` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `product_id`, `qty`, `size`, `color`, `order_status`) VALUES
(1, 8, '4', 1, 's', 'purple', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(100) NOT NULL,
  `discount_price` int(100) NOT NULL,
  `promo_price` int(100) NOT NULL,
  `product_qty` int(255) NOT NULL,
  `product_keywords` text NOT NULL,
  `product_status` varchar(255) NOT NULL,
  `product_specs` text NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `discount_price`, `promo_price`, `product_qty`, `product_keywords`, `product_status`, `product_specs`, `product_desc`) VALUES
(4, 6, 3, '2020-08-01 19:29:07', 'shirt', 'product9.jpg', 'product9.jpg', 'product9.jpg', 10, 7, 5, 50, 'top', 'Discount', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(5, 5, 0, '2020-08-04 19:46:22', 'System Unit', 'product1.jpg', 'product1.jpg', 'product1.jpg', 200, 180, 100, 500, 'Computing device', 'Regular', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(6, 1, 0, '2020-08-01 17:14:53', 'Mobile Phone', 'product2.jpg', 'product2a.jpg', 'product2b.jpg', 680, 600, 500, 1000, 'Phones', 'Regular', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(7, 1, 0, '2020-08-01 17:15:55', 'Tablet', 'product6.jpg', 'product6a.jpg', 'product6b.jpg', 1200, 1000, 900, 50, 'Tablets', 'Regular', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(8, 6, 3, '2020-08-01 17:16:31', 'Coat', 'product10.jpg', 'product10.jpg', 'product10.jpg', 60, 55, 50, 200, 'wear', 'Regular', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(9, 6, 1, '2020-08-01 17:44:32', 'Short Jeans', 'product11.jpg', 'product11.jpg', 'product11.jpg', 8, 7, 5, 700, 'Shorts', 'Regular', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(10, 5, 0, '2020-08-01 17:18:49', 'HP Laptop', 'product8.jpg', 'product8.jpg', 'product8.jpg', 2500, 2300, 2000, 2000, 'Laptop', 'Regular', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(11, 6, 4, '2020-08-01 17:19:49', 'School Bag', 'product12.jpg', 'product12.jpg', 'product12.jpg', 15, 13, 10, 200, 'Bags', 'Regular', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(12, 5, 1, '2020-08-01 17:43:02', 'Laptop Bag', 'product13.jpg', 'product13.jpg', 'product13.jpg', 90, 80, 75, 800, 'Bags', 'Regular', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '<p>Lorem</Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.p>'),
(13, 3, 0, '2020-08-01 17:43:34', 'Sofa', 'product14.jpg', 'product14.jpg', 'product14.jpg', 150, 100, 90, 150, 'Chairs', 'Regular', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(14, 6, 1, '2020-07-06 22:30:08', 'Short Jeans', 'product11.jpg', 'product11.jpg', 'product11.jpg', 8, 7, 5, 10, 'Shorts', 'Regular', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(15, 5, 1, '2020-08-04 19:55:23', 'Mobile Watch', 'product16.jpg', 'product16.jpg', 'product16.jpg', 500, 450, 400, 1000, 'Phones', 'Regular', '                          	\r\n		          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '                          	\r\n		          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_status` varchar(50) NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_status`, `p_cat_desc`) VALUES
(1, 'Phones & Tablet', 'Active', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 'Health & Beauty', 'Active', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 'Home & Office', 'Active', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(4, 'Computing', 'Active', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(5, 'Electronics', 'Active', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(6, 'Fashion', 'Active', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(7, 'Sporting Goods', 'Active', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(8, 'Baby Products', 'Active', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(9, 'Gaming', 'Active', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(10, 'Automobile', 'Active', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(11, 'Other Categories', 'Active', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

-- --------------------------------------------------------

--
-- Table structure for table `qty`
--

CREATE TABLE `qty` (
  `qty_id` int(11) NOT NULL,
  `qty_num` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qty`
--

INSERT INTO `qty` (`qty_id`, `qty_num`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `userName` text NOT NULL,
  `userReview` text NOT NULL,
  `userMessage` text NOT NULL,
  `dateReviewed` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id`, `userName`, `userReview`, `userMessage`, `dateReviewed`) VALUES
(1, 'Francis', '3', 'Is the any warranty', 'Wednesday, August, 5, 2020'),
(2, 'Isaac ', '3', 'Product satisfied my needs', 'Wednesday, August, 5, 2020');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `seller_id` int(11) NOT NULL,
  `seller_firstname` varchar(255) NOT NULL,
  `seller_lastname` varchar(255) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `seller_email` varchar(255) NOT NULL,
  `seller_contact` varchar(255) NOT NULL,
  `seller_product` varchar(255) NOT NULL,
  `seller_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`seller_id`, `seller_firstname`, `seller_lastname`, `business_name`, `seller_email`, `seller_contact`, `seller_product`, `seller_category`) VALUES
(1, 'Francis', 'Tawiah', 'Codeitsoft Technology', 'tawiahfrancis13@gmail.com', '0546107823', 'Tech Products', 'Computing'),
(2, 'Francis', 'West', 'West Accessories', 'west@gmail.com', '0540224589', 'Computer Accessories', 'Computing'),
(4, 'Michael', 'Lampard', 'Michael Electronics', 'miclamp@gmail.com', '0546283235', 'Electrical Gadget', 'Electronics'),
(6, 'Codeitsoft', 'Technology', 'Codeitsoft Technology', 'cis@gmail.com', '0570123344', 'Tech Products', 'Computing and Electronics'),
(7, 'Call', 'Me', 'CallMe Enterprise', 'callme@gmail.com', '0540023212', 'Apparels', 'Fashion'),
(8, 'Francis', 'Tawiah', 'Codeitsoft Technology', 'collins@gmail.com', '0502308123', 'Tech Products', 'Electronics'),
(9, 'Francis', 'Tawiah', 'Codeitsoft Technology', 'cis@gmail.com', '0502308123', 'Tech Products', 'Electronics'),
(10, 'Joshua', 'Odoi', 'El-Parah', 'odoijoshua55@gmail.com', '0577760734', 'Electronics', 'Electronics'),
(11, 'Joshua', 'Odoi', 'El-Parah', 'odoijoshua55@gmail.com', '0577760734', 'Electronics', 'Electronics');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `size_id` int(11) NOT NULL,
  `size_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`size_id`, `size_name`) VALUES
(1, 's'),
(2, 'm'),
(3, 'l'),
(4, 'xl');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL,
  `slide_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`, `slide_status`) VALUES
(1, 'slide-1', 'banner1.jpg', 'Active'),
(2, 'slide-2', 'banner2.jpg', 'Active'),
(3, 'slide-3', 'banner4.jpg', 'Active'),
(4, 'slide-4', 'banner5.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `pending_approvals`
--
ALTER TABLE `pending_approvals`
  ADD PRIMARY KEY (`pending_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `qty`
--
ALTER TABLE `qty`
  ADD PRIMARY KEY (`qty_id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`size_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pending_approvals`
--
ALTER TABLE `pending_approvals`
  MODIFY `pending_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `qty`
--
ALTER TABLE `qty`
  MODIFY `qty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
