-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 14, 2014 at 02:11 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `supercar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminID` varchar(15) NOT NULL,
  `adminName` varchar(15) DEFAULT NULL,
  `impName` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminName`, `impName`) VALUES
('cse06354', 'Kamrul', 'DRIVETRAIN BD'),
('cse06364', 'Tasif', 'DRIVETRAIN BD');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `carmodelName` varchar(15) NOT NULL,
  `mName` varchar(15) DEFAULT NULL,
  `carType` varchar(15) DEFAULT NULL,
  `carPrice` varchar(15) DEFAULT NULL,
  `impName` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`carmodelName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`carmodelName`, `mName`, `carType`, `carPrice`, `impName`) VALUES
(' 430 scuderia', 'Ferrari', 'Supercar', '$169,900', 'DRIVETRAIN BD'),
(' Zonda tricolor', 'Pagani', 'Supercar', '$1,960,000', 'DRIVETRAIN BD'),
('458 Italia', 'Ferrari', 'Sportscar', '$237,259', 'DRIVETRAIN BD'),
('Aston martin DB', 'Aston martin', 'Supercar', '$275,861', 'DRIVETRAIN BD'),
('Aston vanquish', 'Aston martin', 'Supercar', '$279,995', 'DRIVETRAIN BD'),
('Aston virage', 'Aston Martin', 'Supercar', ' $222,895', 'DRIVETRAIN BD'),
('Audi R8 GT(2013', 'Audi ', 'Supercar', '$1,300,000', 'DRIVETRAIN BD'),
('Audi R8 V12 LMS', 'Audi', 'Supercar', '$1,960,000', 'DRIVETRAIN BD'),
('Aventador', 'Lamborghini', 'Supercar', '$400,495', 'DRIVETRAIN BD'),
('Ferrari f12', 'Ferrari', 'Supercar', '$318,888', 'DRIVETRAIN BD'),
('Gallardo LP', 'Lamborghini', 'Supercar', '$202,000', 'DRIVETRAIN BD'),
('Mclaren MP4-12C', 'McLaren', 'Supercar', '$237,259', 'DRIVETRAIN BD'),
('MP4-12C SPIDER', 'McLaren', 'Supercar', '$400,495', 'DRIVETRAIN BD'),
('Murcielago LP 6', 'Lamborghini', 'Supercar', ' $400,000', 'DRIVETRAIN BD'),
('P1', 'Maclaren', 'Supercar', '$1,150,000', 'DRIVETRAIN BD'),
('Pagani Huarya', 'Pagani', 'Supercar', '$1,300,000', 'DRIVETRAIN BD'),
('Pagani zonda', 'Pagani', 'Supercar', '$4,500,000 ', 'DRIVETRAIN BD');

-- --------------------------------------------------------

--
-- Table structure for table `car_configuration`
--

CREATE TABLE IF NOT EXISTS `car_configuration` (
  `carmodelName` varchar(15) DEFAULT NULL,
  `carEtype` varchar(15) NOT NULL,
  `cylinderNo` varchar(15) DEFAULT NULL,
  `topSpeed` varchar(15) DEFAULT NULL,
  `HP` varchar(15) DEFAULT NULL,
  `transmissionSystem` varchar(15) DEFAULT NULL,
  `fuelEco` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`carEtype`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_configuration`
--

INSERT INTO `car_configuration` (`carmodelName`, `carEtype`, `cylinderNo`, `topSpeed`, `HP`, `transmissionSystem`, `fuelEco`) VALUES
('R8 GT Spyder', '5.2 L FSI', 'V10', '282 kmph', '470hp', '7-speed S-Troni', '15kmpg'),
('Audi R8 GT2013', '5.2L FS', 'V12', '288kmph', '560hp', ' 6-speed R-Tron', '13kmpl'),
('Vintage', '5.9 48-valve', 'V12', '280kmph', '562hp', '6-Speed Manual', '11.8kmpg'),
('Audi R8 V12 LMS', '6.0LTwin-Turbo', 'V12', '345kmph', '700hp', '6-speed manual', 'N/A'),
('Pagani zonda', '6.2L AMG', 'V12', '355kmph', '600hp', '6speed sequenti', '23kmpl'),
('Aventador', '6.2L L539', 'V12', '350 km/h ', '700 HP ', '7speed ISR Semi', '16kmpg'),
('Zonda tricolore', '7.0 LAMG', ' V12', '245kmph', '540hp', '6speed sequenti', '12.3kmpl'),
('Pagani Huarya', 'AMG bi-turbo', 'V12', '325kmph', '562hp', '7speed sequenti', 'N/A'),
('430 scuderia', 'Petrol 4.3L', 'V8', '315 kmph', '483 hp', '6-speed manual', 'N/A'),
('Aston vanquish', 'Petrol 5.2L', 'V12', '324kmph', '664hp', 'electro-hydraul', '24kmpl'),
('Gallardo LP 560', 'Petrol 5.6L', 'V10 ', '325 kmph', '560 HP ', '6-speed E-gear', '23.8kmpg'),
('Ferrari f12', 'Petrol 6.3L', 'V12', '362 kmph ', '730 hp', '7-speed dual-cl', '15.7 kmpl'),
('P1', 'Petrol3.8L', 'V12', '349kmph', '890hp', 'electro-hydraul', '8.3kmpg'),
('458 Italia', 'Petrol4.5L', 'V8', '325kmph', '562hp', '7-speed dual-cl', '11.8kmpg'),
('Aston virage', 'Petrol6.0L', 'V8', '282 kmph', '490hp', '6 speed Manual', 'N/A'),
('Murcielago LP 6', 'Petrol6.5L', 'V12', '282 kmph', '490hp', '6-speed e-Gear', '11.8kmpg'),
('MP4-12C SPIDER', 'Turbo 3.5L', 'V8', '360kmph', '840hp', 'Automatic7 spee', 'N/A'),
('Mclaren MP4-12C', 'twin-turbo 3.3 ', 'V8', '320kmph', '780hp', '7speed dualclut', '11.5kmpl');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `Name` varchar(20) DEFAULT NULL,
  `Address` varchar(40) DEFAULT NULL,
  `C_Number` varchar(15) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `n_ID` varchar(30) NOT NULL,
  PRIMARY KEY (`n_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Name`, `Address`, `C_Number`, `Email`, `n_ID`) VALUES
('', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `importer`
--

CREATE TABLE IF NOT EXISTS `importer` (
  `impName` varchar(15) NOT NULL,
  `impAddress` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`impName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `importer`
--

INSERT INTO `importer` (`impName`, `impAddress`) VALUES
('DRIVETRAIN BD', 'House no-114/A,Gulshan,Dhaka-1288');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE IF NOT EXISTS `manufacturer` (
  `mName` varchar(15) NOT NULL,
  `mCountry` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`mName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`mName`, `mCountry`) VALUES
('Aston Martin', 'UK'),
('Audi', 'Germany'),
('Ferrari', 'Italy'),
('Lamborghini', 'Italy'),
('McLaren', 'UK'),
('Pagani', 'Italy');

-- --------------------------------------------------------

--
-- Table structure for table `payment_system`
--

CREATE TABLE IF NOT EXISTS `payment_system` (
  `customerID` varchar(15) DEFAULT NULL,
  `cardName` varchar(15) DEFAULT NULL,
  `cardNo` varchar(15) NOT NULL,
  PRIMARY KEY (`cardNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_system`
--

INSERT INTO `payment_system` (`customerID`, `cardName`, `cardNo`) VALUES
(NULL, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
