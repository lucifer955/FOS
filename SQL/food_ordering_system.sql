-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2020 at 08:06 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_ordering_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminId` varchar(10) NOT NULL,
  `AdminEmail` varchar(50) NOT NULL,
  `AdminPassword` varchar(20) NOT NULL,
  `AdminName` varchar(30) NOT NULL,
  `AdminRegDate` datetime(6) NOT NULL,
  `UserName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_contactno`
--

CREATE TABLE `admin_contactno` (
  `AdminId` varchar(10) NOT NULL,
  `AdminContactNo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `CashierId` varchar(10) NOT NULL,
  `CashierEmail` varchar(30) NOT NULL,
  `CashierPassword` varchar(30) NOT NULL,
  `CashierRegDate` datetime(6) NOT NULL,
  `AdminId` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cashier_contactno`
--

CREATE TABLE `cashier_contactno` (
  `CashierId` varchar(10) NOT NULL,
  `CashierContactNo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cashier_customer`
--

CREATE TABLE `cashier_customer` (
  `CashierId` varchar(10) NOT NULL,
  `CustomerId` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cashier_order`
--

CREATE TABLE `cashier_order` (
  `CashierId` varchar(10) NOT NULL,
  `OrderId` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryId` varchar(10) NOT NULL,
  `CategoryName` varchar(50) NOT NULL,
  `CategoryDate` datetime(6) NOT NULL,
  `AdminId` varchar(10) NOT NULL,
  `OrderId` varchar(10) NOT NULL,
  `FoodMenuId` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerId` varchar(10) NOT NULL,
  `CustomerFirstName` varchar(30) NOT NULL,
  `CustomerLastName` varchar(30) NOT NULL,
  `CustomerEmail` varchar(50) NOT NULL,
  `CustomerPassword` varchar(20) NOT NULL,
  `CustomerRegDate` datetime(6) NOT NULL,
  `AdminId` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_contactno`
--

CREATE TABLE `customer_contactno` (
  `CustomerId` varchar(10) NOT NULL,
  `CustomerContactno` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foodmenu`
--

CREATE TABLE `foodmenu` (
  `FoodMenuId` varchar(10) NOT NULL,
  `ItemPrice` decimal(6,0) NOT NULL,
  `ItemName` varchar(30) NOT NULL,
  `ItemQuantity` int(3) NOT NULL,
  `ItemDescription` varchar(50) NOT NULL,
  `AdminId` varchar(10) NOT NULL,
  `OrderId` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `OrderId` varchar(10) NOT NULL,
  `OrderType` varchar(10) NOT NULL,
  `IsOrderPlaced` varchar(10) NOT NULL,
  `AdminId` varchar(10) NOT NULL,
  `CustomerId` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `OrderId` varchar(10) NOT NULL,
  `OrderNo` int(5) NOT NULL,
  `NetPrice` decimal(6,0) NOT NULL,
  `OrderFinalDetails` varchar(30) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `City` varchar(30) NOT NULL,
  `FlatBuildingNo` varchar(50) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `LandMark` varchar(50) NOT NULL,
  `StreetName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `admin_contactno`
--
ALTER TABLE `admin_contactno`
  ADD PRIMARY KEY (`AdminId`,`AdminContactNo`);

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`CashierId`),
  ADD KEY `AdminId` (`AdminId`);

--
-- Indexes for table `cashier_contactno`
--
ALTER TABLE `cashier_contactno`
  ADD PRIMARY KEY (`CashierId`,`CashierContactNo`);

--
-- Indexes for table `cashier_customer`
--
ALTER TABLE `cashier_customer`
  ADD PRIMARY KEY (`CashierId`,`CustomerId`);

--
-- Indexes for table `cashier_order`
--
ALTER TABLE `cashier_order`
  ADD PRIMARY KEY (`CashierId`,`OrderId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryId`),
  ADD KEY `AdminId` (`AdminId`),
  ADD KEY `OrderId` (`OrderId`),
  ADD KEY `FoodMenuId` (`FoodMenuId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerId`),
  ADD KEY `AdminId` (`AdminId`);

--
-- Indexes for table `customer_contactno`
--
ALTER TABLE `customer_contactno`
  ADD PRIMARY KEY (`CustomerId`,`CustomerContactno`);

--
-- Indexes for table `foodmenu`
--
ALTER TABLE `foodmenu`
  ADD PRIMARY KEY (`FoodMenuId`),
  ADD KEY `AdminId` (`AdminId`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`OrderId`),
  ADD KEY `AdminId` (`AdminId`),
  ADD KEY `CustomerId` (`CustomerId`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`OrderId`,`OrderNo`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_contactno`
--
ALTER TABLE `admin_contactno`
  ADD CONSTRAINT `admin_contactno_ibfk_1` FOREIGN KEY (`AdminId`) REFERENCES `admin` (`AdminId`);

--
-- Constraints for table `cashier`
--
ALTER TABLE `cashier`
  ADD CONSTRAINT `cashier_ibfk_1` FOREIGN KEY (`AdminId`) REFERENCES `admin` (`AdminId`);

--
-- Constraints for table `cashier_contactno`
--
ALTER TABLE `cashier_contactno`
  ADD CONSTRAINT `cashier_contactno_ibfk_1` FOREIGN KEY (`CashierId`) REFERENCES `cashier` (`CashierId`);

--
-- Constraints for table `cashier_customer`
--
ALTER TABLE `cashier_customer`
  ADD CONSTRAINT `cashier_customer_ibfk_1` FOREIGN KEY (`CashierId`) REFERENCES `cashier` (`CashierId`);

--
-- Constraints for table `cashier_order`
--
ALTER TABLE `cashier_order`
  ADD CONSTRAINT `cashier_order_ibfk_1` FOREIGN KEY (`CashierId`) REFERENCES `cashier` (`CashierId`);

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`AdminId`) REFERENCES `admin` (`AdminId`),
  ADD CONSTRAINT `category_ibfk_2` FOREIGN KEY (`OrderId`) REFERENCES `order` (`OrderId`),
  ADD CONSTRAINT `category_ibfk_3` FOREIGN KEY (`FoodMenuId`) REFERENCES `foodmenu` (`FoodMenuId`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`AdminId`) REFERENCES `admin` (`AdminId`);

--
-- Constraints for table `customer_contactno`
--
ALTER TABLE `customer_contactno`
  ADD CONSTRAINT `customer_contactno_ibfk_1` FOREIGN KEY (`CustomerId`) REFERENCES `customer` (`CustomerId`);

--
-- Constraints for table `foodmenu`
--
ALTER TABLE `foodmenu`
  ADD CONSTRAINT `foodmenu_ibfk_1` FOREIGN KEY (`AdminId`) REFERENCES `admin` (`AdminId`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`AdminId`) REFERENCES `admin` (`AdminId`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`CustomerId`) REFERENCES `customer` (`CustomerId`);

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`OrderId`) REFERENCES `order` (`OrderId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
