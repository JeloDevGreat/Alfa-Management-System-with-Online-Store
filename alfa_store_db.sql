-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2024 at 08:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alfa_store_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `about_id` int(10) NOT NULL,
  `about_heading` text NOT NULL,
  `about_short_desc` text NOT NULL,
  `about_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_id`, `about_heading`, `about_short_desc`, `about_desc`) VALUES
(1, 'About Us - Our Story', '\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,\r\n', 'Rhone was the collective vision of a small group of weekday warriors. For years, we were frustrated by the lack of activewear designed for men and wanted something better. With that in mind, we set out to design premium apparel that is made for motion and engineered to endure.\r\n\r\nAdvanced materials and state of the art technology are combined with heritage craftsmanship to create a new standard in activewear. Every product tells a story of premium performance, reminding its wearer to push themselves physically without having to sacrifice comfort and style.\r\n\r\nBeyond our product offering, Rhone is founded on principles of progress and integrity. Just as we aim to become better as a company, we invite men everywhere to raise the bar and join us as we move Forever Forward.');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `street` text NOT NULL,
  `city` text NOT NULL,
  `province` text NOT NULL,
  `postal` text NOT NULL,
  `country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_country` text NOT NULL,
  `admin_job` varchar(255) NOT NULL,
  `admin_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`, `admin_country`, `admin_job`, `admin_about`) VALUES
(2, 'Angelo Joseph Jeremias', 'angelojosephjeremias8501@gmail.com', '1234', 'user-profile-min.png', '09083679529', 'Philippines', 'Full Stack Web Developer', ' Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical ');

-- --------------------------------------------------------

--
-- Table structure for table `bundle_product_relation`
--

CREATE TABLE `bundle_product_relation` (
  `rel_id` int(10) NOT NULL,
  `rel_title` varchar(255) NOT NULL,
  `product_id` int(10) NOT NULL,
  `bundle_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bundle_product_relation`
--

INSERT INTO `bundle_product_relation` (`rel_id`, `rel_title`, `product_id`, `bundle_id`) VALUES
(1, 'SPORTS', 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `customer_id`, `ip_add`, `qty`, `p_price`, `size`) VALUES
(4, 2, '::1', 0, '500', 'Select a Size'),
(5, 2, '::1', 0, '1000', 'Select a Size');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `category_name` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `cat_image` text NOT NULL,
  `is_top` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `category_name`, `product_id`, `cat_image`, `is_top`) VALUES
(1, 'Souvenirs', 0, '', 0),
(2, 'Men', 0, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(10) NOT NULL,
  `contact_email` text NOT NULL,
  `contact_heading` text NOT NULL,
  `contact_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `contact_email`, `contact_heading`, `contact_desc`) VALUES
(1, 'alfasportscity@gmail.com', 'Contacts', 'Please contact us if you have any queries'),
(2, 'alfasportscity@gmail.com', 'Contacts', 'Please contact us if you have any queries');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `coupon_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `coupon_title` varchar(255) NOT NULL,
  `coupon_price` varchar(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `coupon_limit` int(100) NOT NULL,
  `coupon_used` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`coupon_id`, `product_id`, `coupon_title`, `coupon_price`, `coupon_code`, `coupon_limit`, `coupon_used`) VALUES
(5, 8, 'Sale', '10', 'CASTRO', 2, 1),
(6, 14, 'Sale', '65', 'CODEASTRO', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_confirm_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`, `customer_confirm_code`) VALUES
(1, 'test user', 'testuser@gmail.com', '1234', '', '', '', '', '', '::1', '683291550'),
(2, 'Angelo Joseph Tolentino Jeremias', 'angelojosephjeremias8501@gmail.com', '1234', '', '', '', '', '', '192.168.100.11', '727313639'),
(3, 'test2', 'test2@gmail.com', '1234', '', '', '', '', '', '::1', '928273861'),
(4, 'Test3', 'test3@gmail.com', '1234', '', '', '', '', '', '::1', '1063412957');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(5, 2, 2500, 283100347, 5, 'XXS', '2024-12-11 04:29:35', 'Complete'),
(6, 2, 6000, 1718773902, 12, 'XXS', '2024-12-09 11:27:25', 'pending'),
(7, 2, 5000, 1188208608, 10, 'LARGE', '2024-12-11 04:27:34', 'pending'),
(8, 2, 0, 1491217606, 0, '', '2024-12-11 04:28:48', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `deliver`
--

CREATE TABLE `deliver` (
  `deliver_id` int(11) NOT NULL,
  `order_ID` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `Delivery_ID` int(11) NOT NULL,
  `Order_ID` int(11) DEFAULT NULL,
  `Customer_ID` int(11) DEFAULT NULL,
  `Delivery_Date` date DEFAULT NULL,
  `Delivery_Address` text DEFAULT NULL,
  `Delivery_Status` varchar(50) DEFAULT NULL,
  `Delivery_Method` varchar(50) DEFAULT NULL,
  `Assigned_Driver_ID` int(11) DEFAULT NULL,
  `Shipping_Cost` decimal(10,2) DEFAULT NULL,
  `Tracking_Number` varchar(100) DEFAULT NULL,
  `Estimated_Delivery_Time` time DEFAULT NULL,
  `Actual_Delivery_Time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_attempts`
--

CREATE TABLE `delivery_attempts` (
  `Attempt_ID` int(11) NOT NULL,
  `Delivery_ID` int(11) DEFAULT NULL,
  `Attempt_Date` date DEFAULT NULL,
  `Attempt_Status` varchar(50) DEFAULT NULL,
  `Reason_For_Failure` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_drivers`
--

CREATE TABLE `delivery_drivers` (
  `Driver_ID` int(11) NOT NULL,
  `Driver_Name` varchar(100) DEFAULT NULL,
  `Phone_Number` varchar(20) DEFAULT NULL,
  `Vehicle_Type` varchar(50) DEFAULT NULL,
  `License_Number` varchar(50) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `Location` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_tracking`
--

CREATE TABLE `delivery_tracking` (
  `Tracking_ID` int(11) NOT NULL,
  `Delivery_ID` int(11) DEFAULT NULL,
  `Event_Timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Event_Type` varchar(50) DEFAULT NULL,
  `Event_Description` text DEFAULT NULL,
  `Location` varchar(100) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `design`
--

CREATE TABLE `design` (
  `designID` int(11) NOT NULL,
  `designName` varchar(255) NOT NULL,
  `designBy` varchar(50) NOT NULL,
  `designDate` date NOT NULL,
  `approvedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_types`
--

CREATE TABLE `enquiry_types` (
  `enquiry_id` int(10) NOT NULL,
  `enquiry_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `enquiry_types`
--

INSERT INTO `enquiry_types` (`enquiry_id`, `enquiry_title`) VALUES
(1, 'Order and Delivery Support'),
(2, 'Technical Support'),
(3, 'Price Concern');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `manufacturer_id` int(10) NOT NULL,
  `manufacturer_title` text NOT NULL,
  `manufacturer_top` text NOT NULL,
  `manufacturer_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_ID` int(11) NOT NULL,
  `Customer_ID` int(11) DEFAULT NULL,
  `Order_Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Shipping_Address` text DEFAULT NULL,
  `Billing_Address` text DEFAULT NULL,
  `Total_Amount` decimal(10,2) DEFAULT NULL,
  `Order_Status` varchar(50) DEFAULT NULL,
  `Payment_Status` varchar(50) DEFAULT NULL,
  `Payment_Method` varchar(50) DEFAULT NULL,
  `Shipping_Method` varchar(50) DEFAULT NULL,
  `Shipping_Cost` decimal(10,2) DEFAULT NULL,
  `Estimated_Arrival` date DEFAULT NULL,
  `Actual_Arrival` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `Order_Item_ID` int(11) NOT NULL,
  `Order_ID` int(11) DEFAULT NULL,
  `Product_ID` int(10) NOT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Price_Per_Item` decimal(10,2) DEFAULT NULL,
  `Total_Price` decimal(10,2) DEFAULT NULL,
  `Customer_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`Order_Item_ID`, `Order_ID`, `Product_ID`, `Quantity`, `Price_Per_Item`, `Total_Price`, `Customer_ID`) VALUES
(1, 1, 1, 2, 500.00, 1000.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `print`
--

CREATE TABLE `print` (
  `printID` int(11) NOT NULL,
  `designID` int(11) NOT NULL,
  `printBy` varchar(50) NOT NULL,
  `printDate` date NOT NULL,
  `printDescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `manufacturer_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_url` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_psp_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_features` text NOT NULL,
  `product_video` text NOT NULL,
  `product_keywords` text NOT NULL,
  `product_label` set('NEW','SALE','','') NOT NULL,
  `status` varchar(255) NOT NULL,
  `is_deleted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `manufacturer_id`, `date`, `product_title`, `product_url`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_psp_price`, `product_desc`, `product_features`, `product_video`, `product_keywords`, `product_label`, `status`, `is_deleted`) VALUES
(4, 0, 1, 0, '2024-12-12 22:04:46', 'Lakers', 'lakers', 'lakers.jpg', 'lakers.jpg', 'lakers.jpg', 500, 450, '\r\n\r\n', '\r\n\r\n', '\r\n\r\n', 'lakers', 'NEW', 'product', 0),
(5, 1, 0, 0, '2024-12-12 22:11:15', 'La Paz PE Uniform', 'lapaz', 'blazers.jpg', 'boston.jpg', 'napoballers.jpg', 1000, 900, '\r\n\r\n', '\r\n\r\n', '\r\n\r\n', 'jersey', 'NEW', 'bundle', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `is_top` tinyint(1) NOT NULL DEFAULT 0,
  `p_cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `is_top`, `p_cat_image`) VALUES
(1, 'Jersey', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `projectID` int(11) NOT NULL,
  `projectName` varchar(100) NOT NULL,
  `projectStart` date NOT NULL DEFAULT current_timestamp(),
  `projectEnd` date NOT NULL,
  `designBy` varchar(255) NOT NULL,
  `printBy` varchar(255) NOT NULL,
  `pressedBy` varchar(255) NOT NULL,
  `tailoredBy` varchar(255) NOT NULL,
  `checkedBy` varchar(255) NOT NULL,
  `releasedOn` date NOT NULL,
  `projectQuantity` int(11) NOT NULL,
  `projectDescription` varchar(255) NOT NULL,
  `customerId` int(11) NOT NULL,
  `adminId` int(11) NOT NULL,
  `printedIn` int(11) NOT NULL,
  `projectStatus` set('NOT STARTED','IN PROGRESS','ON HOLD','COMPLETED','DELAYED','AT RISK','PENDING REVIEW','UNDER REVIEW','CLOSED') NOT NULL,
  `is_deleted` tinyint(1) DEFAULT 0,
  `projectPic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projectID`, `projectName`, `projectStart`, `projectEnd`, `designBy`, `printBy`, `pressedBy`, `tailoredBy`, `checkedBy`, `releasedOn`, `projectQuantity`, `projectDescription`, `customerId`, `adminId`, `printedIn`, `projectStatus`, `is_deleted`, `projectPic`) VALUES
(1, 'Macalong', '2024-12-08', '0000-00-00', '', '', '', '', '', '0000-00-00', 10, '', 0, 0, 0, 'NOT STARTED', 0, ''),
(2, 'Sta Ines', '2024-12-08', '0000-00-00', '', '', '', '', '', '0000-00-00', 21, '', 0, 0, 0, 'NOT STARTED', 0, ''),
(3, 'Macalong', '2024-12-08', '0000-00-00', '', '', '', '', '', '0000-00-00', 10, '', 0, 0, 0, 'IN PROGRESS', 0, ''),
(4, 'Sta Ines', '2024-12-08', '0000-00-00', '', '', '', '', '', '0000-00-00', 21, '', 0, 0, 0, 'IN PROGRESS', 0, ''),
(5, 'Camsur', '2024-12-08', '0000-00-00', '', '', '', '', '', '0000-00-00', 0, '', 0, 0, 0, 'NOT STARTED', 0, ''),
(6, 'Camsur', '2024-12-08', '0000-00-00', '', '', '', '', '', '0000-00-00', 0, '', 0, 0, 0, 'NOT STARTED', 0, ''),
(7, 'Bugallon Project', '2024-12-08', '0000-00-00', '', '', '', '', '', '0000-00-00', 100, '', 0, 0, 0, 'ON HOLD', 0, ''),
(8, 'Bugallon Project', '2024-12-08', '0000-00-00', '', '', '', '', '', '0000-00-00', 100, '', 0, 0, 0, 'ON HOLD', 0, ''),
(9, 'Red Horse', '2024-12-08', '0000-00-00', '', '', '', '', '', '0000-00-00', 30, '', 0, 0, 0, 'IN PROGRESS', 0, ''),
(10, 'MTR', '2024-12-08', '0000-00-00', '', '', '', '', '', '0000-00-00', 49, '', 0, 0, 0, 'UNDER REVIEW', 0, ''),
(11, 'MTR', '2024-12-08', '0000-00-00', '', '', '', '', '', '0000-00-00', 49, '', 0, 0, 0, 'UNDER REVIEW', 0, ''),
(12, 'MANAOIS', '2024-12-08', '0000-00-00', '', '', '', '', '', '0000-00-00', 90, '', 0, 0, 0, 'COMPLETED', 0, ''),
(13, 'MANAOIS', '2024-12-08', '0000-00-00', '', '', '', '', '', '0000-00-00', 90, '', 0, 0, 0, 'COMPLETED', 0, ''),
(14, '578', '2024-12-08', '0000-00-00', '', '', '', '', '', '0000-00-00', 76, '', 0, 0, 0, 'DELAYED', 0, ''),
(15, '578', '2024-12-08', '0000-00-00', '', '', '', '', '', '0000-00-00', 76, '', 0, 0, 0, 'DELAYED', 0, ''),
(16, 'MEMA', '2024-12-08', '0000-00-00', '', '', '', '', '', '0000-00-00', 9, '', 0, 0, 0, 'NOT STARTED', 0, ''),
(1, 'ICF', '2024-12-08', '2024-12-31', '', '', '', '', '', '0000-00-00', 12, '', 0, 0, 0, '', 0, ''),
(17, 'LOVE', '2024-12-08', '0000-00-00', '', '', '', '', '', '0000-00-00', 8, '', 0, 0, 0, 'PENDING REVIEW', 0, ''),
(18, 'LOVE', '2024-12-08', '0000-00-00', '', '', '', '', '', '0000-00-00', 8, '', 0, 0, 0, 'PENDING REVIEW', 0, ''),
(19, 'SAN JULIAN PROJECT', '2024-12-08', '0000-00-00', '', '', '', '', '', '0000-00-00', 600, '', 0, 0, 0, 'NOT STARTED', 0, ''),
(20, 'SAN JULIAN PROJECT', '2024-12-08', '0000-00-00', '', '', '', '', '', '0000-00-00', 600, '', 0, 0, 0, 'NOT STARTED', 0, ''),
(21, 'SAN JOSE PROJECT', '2024-12-08', '0000-00-00', '', '', '', '', '', '0000-00-00', 67, '', 0, 0, 0, 'ON HOLD', 0, ''),
(22, '678 Anniversary Project', '2024-12-08', '0000-00-00', '', '', '', '', '', '0000-00-00', 21, '', 0, 0, 0, 'NOT STARTED', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(10) NOT NULL,
  `service_title` varchar(20) NOT NULL,
  `service_image` text NOT NULL,
  `service_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `Stock_ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Product_Name` varchar(255) NOT NULL,
  `Category_ID` int(11) NOT NULL,
  `Quantity_Available` int(11) DEFAULT 0,
  `Unit_Price` decimal(10,2) NOT NULL,
  `Reorder_Level` int(11) DEFAULT 0,
  `Supplier_ID` int(11) NOT NULL,
  `Date_Added` date NOT NULL,
  `Stock_Status` varchar(50) DEFAULT 'Available',
  `Location` varchar(255) DEFAULT NULL,
  `Discount_Price` decimal(10,2) DEFAULT NULL,
  `Last_Updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Minimum_Stock_Level` int(11) DEFAULT 0,
  `Maximum_Stock_Level` int(11) DEFAULT 100,
  `Expiry_Date` date DEFAULT NULL,
  `Batch_Number` varchar(100) DEFAULT NULL,
  `Stock_Value` decimal(15,2) GENERATED ALWAYS AS (`Quantity_Available` * `Unit_Price`) STORED
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `store_id` int(10) NOT NULL,
  `store_title` varchar(255) NOT NULL,
  `store_image` varchar(255) NOT NULL,
  `store_desc` text NOT NULL,
  `store_button` varchar(255) NOT NULL,
  `store_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `term_id` int(10) NOT NULL,
  `term_title` varchar(100) NOT NULL,
  `term_link` varchar(100) NOT NULL,
  `term_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`term_id`, `term_title`, `term_link`, `term_desc`) VALUES
(1, 'Rules And Regulations', 'rules', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.&nbsp;</p>'),
(2, 'Refund Policy', 'link2', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on'),
(3, 'Pricing and Promotions Policy', 'link3', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `customer_id`, `product_id`) VALUES
(6, 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `address_id` (`address_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bundle_product_relation`
--
ALTER TABLE `bundle_product_relation`
  ADD PRIMARY KEY (`rel_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `cus_ID` (`customer_id`),
  ADD KEY `cus_ID_2` (`customer_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`),
  ADD KEY `product_index` (`product_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `cus_id` (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `deliver`
--
ALTER TABLE `deliver`
  ADD PRIMARY KEY (`deliver_id`),
  ADD KEY `deliver_id` (`deliver_id`);

--
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`Delivery_ID`);

--
-- Indexes for table `delivery_attempts`
--
ALTER TABLE `delivery_attempts`
  ADD PRIMARY KEY (`Attempt_ID`);

--
-- Indexes for table `delivery_drivers`
--
ALTER TABLE `delivery_drivers`
  ADD PRIMARY KEY (`Driver_ID`);

--
-- Indexes for table `delivery_tracking`
--
ALTER TABLE `delivery_tracking`
  ADD PRIMARY KEY (`Tracking_ID`);

--
-- Indexes for table `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`designID`);

--
-- Indexes for table `enquiry_types`
--
ALTER TABLE `enquiry_types`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_ID`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`Order_Item_ID`),
  ADD KEY `Order_Item_ID` (`Order_Item_ID`),
  ADD KEY `customer_id` (`Customer_ID`),
  ADD KEY `Order_ID` (`Order_ID`,`Product_ID`),
  ADD KEY `Product_ID` (`Product_ID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `print`
--
ALTER TABLE `print`
  ADD PRIMARY KEY (`printID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD KEY `projectID` (`projectID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`Stock_ID`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`term_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `about_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bundle_product_relation`
--
ALTER TABLE `bundle_product_relation`
  MODIFY `rel_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `coupon_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `deliver`
--
ALTER TABLE `deliver`
  MODIFY `deliver_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiry_types`
--
ALTER TABLE `enquiry_types`
  MODIFY `enquiry_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `manufacturer_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `projectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2024000001;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `Stock_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `store_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `term_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
