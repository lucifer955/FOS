-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 07:54 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fosdbnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `adminEmail` varchar(100) NOT NULL,
  `adminContactNo` int(10) NOT NULL,
  `adminName` varchar(100) NOT NULL,
  `adminRegDate` datetime NOT NULL,
  `userName` varchar(100) NOT NULL,
  `adminPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `adminEmail`, `adminContactNo`, `adminName`, `adminRegDate`, `userName`, `adminPassword`) VALUES
(1, 'a@gmail.com', 711234567, 'andi', '0000-00-00 00:00:00', 'andi', '827ccb0eea8a706c4c34'),
(2, 'v@gmail.com', 711234567, 'PM', '0000-00-00 00:00:00', 'Vidura', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `itemName` varchar(300) NOT NULL,
  `foodImage` varchar(300) NOT NULL,
  `itemPrice` decimal(10,0) DEFAULT NULL,
  `cartID` int(11) NOT NULL,
  `foodMenuId` int(11) NOT NULL,
  `foodQuantity` int(3) NOT NULL,
  `customerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cartorder`
--

CREATE TABLE `cartorder` (
  `cartHistoryId` int(11) NOT NULL,
  `cartID` int(11) NOT NULL,
  `orderId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cartorder`
--

INSERT INTO `cartorder` (`cartHistoryId`, `cartID`, `orderId`) VALUES
(559, 1, 44),
(560, 2, 44),
(561, 1, 45),
(562, 2, 45),
(563, 1, 46),
(564, 3, 47),
(565, 4, 47),
(566, 1, 48),
(567, 2, 48);

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `cashierId` int(11) NOT NULL,
  `cashierContactNo` int(10) NOT NULL,
  `cashierEmail` varchar(100) NOT NULL,
  `cashierPassword` varchar(255) NOT NULL,
  `cashierRegDate` datetime NOT NULL,
  `cashierName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`cashierId`, `cashierContactNo`, `cashierEmail`, `cashierPassword`, `cashierRegDate`, `cashierName`) VALUES
(4, 711234567, 'ra@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2020-03-11 12:49:36', 'Randil'),
(5, 885623658, 'taraka@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2020-03-11 15:23:30', 'Tharaka');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(100) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `categoryName`, `creationDate`) VALUES
(5, 'VegPizza', '0000-00-00 00:00:00'),
(6, 'Classic', '0000-00-00 00:00:00'),
(7, 'Supreme', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `checkoutD` int(11) NOT NULL,
  `itemName` varchar(255) DEFAULT NULL,
  `itemPrice` decimal(10,0) DEFAULT NULL,
  `foodQuantity` int(11) NOT NULL,
  `foodMenuId` int(11) NOT NULL,
  `cartID` int(11) NOT NULL,
  `orderId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`checkoutD`, `itemName`, `itemPrice`, `foodQuantity`, `foodMenuId`, `cartID`, `orderId`) VALUES
(30, 'Corn n Cheese', '350', 1, 7, 1, 0),
(31, 'Super Supreme', '550', 2, 12, 2, 0),
(32, 'Corn n Olive', '370', 1, 8, 1, 46),
(33, 'Corn n Cheese', '350', 2, 7, 3, 47),
(34, 'Corn n Olive', '370', 2, 8, 4, 47),
(35, 'Devilled Chicken', '450', 2, 10, 1, 48),
(36, 'Super Supreme', '550', 2, 12, 2, 48);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerId` int(11) NOT NULL,
  `customerContactNo` int(10) NOT NULL,
  `customerFirstName` varchar(50) NOT NULL,
  `customerLastName` varchar(50) NOT NULL,
  `customerRegDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `customerEmail` varchar(50) NOT NULL,
  `customerPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerId`, `customerContactNo`, `customerFirstName`, `customerLastName`, `customerRegDate`, `customerEmail`, `customerPassword`) VALUES
(12, 771668717, 'Yasara', 'Fernando', '2020-03-11 13:46:56', 'yasfer853@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(14, 779179292, 'Dilshan', 'Udawatta', '2020-04-27 00:19:00', 'dilshanudawatta15@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(15, 779179292, 'Hasith', 'Niroshan', '2020-03-12 14:30:24', 'dilshanudawaththa1996@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `foodmenu`
--

CREATE TABLE `foodmenu` (
  `foodMenuId` int(11) NOT NULL,
  `itemPrice` decimal(10,0) NOT NULL,
  `foodImage` varchar(120) DEFAULT NULL,
  `itemName` varchar(100) NOT NULL,
  `itemDescription` varchar(200) NOT NULL,
  `itemQuantity` int(11) NOT NULL,
  `categoryName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foodmenu`
--

INSERT INTO `foodmenu` (`foodMenuId`, `itemPrice`, `foodImage`, `itemName`, `itemDescription`, `itemQuantity`, `categoryName`) VALUES
(7, '350', 'corn and scheese.jpg', 'Corn n Cheese', 'With a delectable cheese pull, this recipe for Corn Pizza is going to make you fall in love. When you’re in the mood for a cheesy and corny delight', 1, 'VegPizza'),
(8, '370', 'corn n olive.jpg', 'Corn n Olive', 'The ever-popular pizza doused in mozzarella cheese, this corn and olive pizza is the ultimate go-to grub, to satisfy your hunger', 1, 'VegPizza'),
(10, '450', 'devilled-chicken-pizza-.jpg', 'Devilled Chicken', 'Devilled chicken in spicy sauce with a double layer of mozzarella cheese, onions, peppers,green chillies and tomatoes', 1, 'Classic'),
(11, '400', 'tandooori.jpg', 'Tandoori Chicken ', 'Tandoori chicken & onions with a double layer of mozzarella cheese\r\nand loaded with intense flavor in every bite!\r\n', 1, 'Classic'),
(12, '550', 'Super-Supreme-Pizza.jpg', 'Super Supreme', 'Chicken bacon, chicken sausage, pineapple, peppers, mushrooms and olives with a double layer of mozzarella cheese', 1, 'Supreme');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderId` int(11) NOT NULL,
  `orderType` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `flatBuildingNo` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `landMark` varchar(50) NOT NULL,
  `streetName` varchar(50) NOT NULL,
  `customerId` int(11) NOT NULL,
  `orderDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total` float NOT NULL,
  `orderStatus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`orderId`, `orderType`, `city`, `flatBuildingNo`, `area`, `landMark`, `streetName`, `customerId`, `orderDate`, `total`, `orderStatus`) VALUES
(46, 'Delivery', 'City1', '01', 'Area1', 'Near 1', 'Street1', 14, '2020-06-14 04:37:25', 370, 0),
(47, 'Delivery', 'City2', '02', 'Area2', 'LandMark2', 'Street2', 14, '2020-06-14 05:37:52', 1440, 2),
(48, 'Take Away', 'City3', '3', 'Area3', 'Landmark3', 'Street3', 14, '2020-06-14 05:36:14', 2000, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `foodMenuId` (`foodMenuId`),
  ADD KEY `customerId` (`customerId`);

--
-- Indexes for table `cartorder`
--
ALTER TABLE `cartorder`
  ADD PRIMARY KEY (`cartHistoryId`);

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`cashierId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`checkoutD`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerId`);

--
-- Indexes for table `foodmenu`
--
ALTER TABLE `foodmenu`
  ADD PRIMARY KEY (`foodMenuId`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `customerId` (`customerId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cartorder`
--
ALTER TABLE `cartorder`
  MODIFY `cartHistoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=568;

--
-- AUTO_INCREMENT for table `cashier`
--
ALTER TABLE `cashier`
  MODIFY `cashierId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `checkoutD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `foodmenu`
--
ALTER TABLE `foodmenu`
  MODIFY `foodMenuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`foodMenuId`) REFERENCES `foodmenu` (`foodMenuId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`customerId`) REFERENCES `customer` (`customerId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
