-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2017 at 04:33 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `employees`
--
CREATE DATABASE IF NOT EXISTS `employees` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `employees`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` varchar(20) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `UName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `FirstName`, `LastName`, `UName`, `Password`) VALUES
('mit000804', 'Aregawi', 'Gidey', 'Aregawi', 'yeswecan');

-- --------------------------------------------------------

--
-- Table structure for table `adminmessages`
--

CREATE TABLE IF NOT EXISTS `adminmessages` (
  `SSN` varchar(20) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminmessages`
--

INSERT INTO `adminmessages` (`SSN`, `Message`) VALUES
('F006', '10q my boss, I will now also be a hard worker in a different way.'),
('S005', 'Thank you boss, I have seen it and no errors are exist in my salary.10q!!!');

-- --------------------------------------------------------

--
-- Table structure for table `allumessages`
--

CREATE TABLE IF NOT EXISTS `allumessages` (
  `MID` int(11) NOT NULL AUTO_INCREMENT,
  `Message` varchar(500) NOT NULL,
  PRIMARY KEY (`MID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `allumessages`
--

INSERT INTO `allumessages` (`MID`, `Message`) VALUES
(1, 'Every Employee must check his salary,since it will be sent to your bank account by tomrrow.');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_staff`
--

CREATE TABLE IF NOT EXISTS `faculty_staff` (
  `SSN` varchar(20) NOT NULL,
  `BankAccount` varchar(30) NOT NULL,
  `FName` varchar(20) NOT NULL,
  `LName` varchar(20) NOT NULL,
  `DeptCode` varchar(50) NOT NULL,
  `BSalary` double(15,3) NOT NULL,
  `WorkDay` int(11) NOT NULL,
  `AnnAllow` double(15,3) NOT NULL,
  `Position` double(15,3) NOT NULL,
  `Housing` double(15,3) NOT NULL,
  `TaxAllow` double(15,3) NOT NULL,
  `Scholar` varchar(10) NOT NULL,
  `ScholarPay` double(15,3) NOT NULL,
  `GrSalary` double(15,3) NOT NULL,
  `GovPen` double(15,3) NOT NULL,
  `PerPen` double(15,3) NOT NULL,
  `IncomeTax` double(15,3) NOT NULL,
  `TotDeduction` double(15,3) NOT NULL,
  `NetPay` double(15,3) NOT NULL,
  PRIMARY KEY (`SSN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_staff`
--

INSERT INTO `faculty_staff` (`SSN`, `BankAccount`, `FName`, `LName`, `DeptCode`, `BSalary`, `WorkDay`, `AnnAllow`, `Position`, `Housing`, `TaxAllow`, `Scholar`, `ScholarPay`, `GrSalary`, `GovPen`, `PerPen`, `IncomeTax`, `TotDeduction`, `NetPay`) VALUES
('F001', '0145680905', 'Mesfin', 'Gidey', 'Dean', 5500.000, 30, 550.000, 1500.000, 1000.000, 3050.000, 'No', 0.000, 8550.000, 495.000, 598.500, 1262.500, 1861.000, 6689.000),
('F002', '0145680905', 'Misgina', 'Girmay', 'Head Department', 4600.000, 30, 460.000, 1000.000, 800.000, 2260.000, 'No', 0.000, 6860.000, 414.000, 480.200, 967.500, 1447.700, 5412.300),
('F003', '0001758034', 'Senait', 'Derebe', 'Lecturer', 4600.000, 30, 0.000, 0.000, 800.000, 800.000, 'No', 0.000, 5400.000, 414.000, 378.000, 967.500, 1345.500, 4054.500),
('F004', '0001758034', 'Birhane', 'G/slassie', 'Lecturer', 4600.000, 30, 0.000, 0.000, 0.000, 0.000, 'Yes', 2300.000, 2300.000, 414.000, 161.000, 967.500, 1128.500, 1171.500),
('F005', '0984784354', 'Halefom', 'Leake', 'Lecturer', 3800.000, 30, 0.000, 0.000, 800.000, 800.000, 'No', 0.000, 4600.000, 342.000, 322.000, 967.500, 1289.500, 3310.500),
('F006', '674675676', 'Mezgebo', 'Hailu', 'Lecturer', 5500.000, 30, 0.000, 0.000, 800.000, 800.000, 'No', 0.000, 6300.000, 495.000, 441.000, 1542.500, 1983.500, 4316.500),
('F008', '9875676234', 'Aklilu', 'Lema', 'Head Department', 4600.000, 30, 460.000, 1000.000, 800.000, 2260.000, 'No', 0.000, 6860.000, 414.000, 480.200, 1738.500, 2218.700, 4641.300),
('F0100', '1000099887766', 'Aregawi', 'Gidey', 'Lecturer', 8310.000, 30, 0.000, 0.000, 800.000, 800.000, 'No', 0.000, 9110.000, 747.900, 637.700, 2526.000, 3163.700, 5946.300),
('F0101', '1000099887766', 'Aregawi', 'Gidey', 'Lecturer', 8310.000, 30, 0.000, 0.000, 800.000, 800.000, 'No', 0.000, 9110.000, 747.900, 637.700, 1778.000, 2415.700, 6694.300),
('F0102', '1000099887766', 'Aregawi', 'Gidey', 'Lecturer', 8310.000, 30, 0.000, 0.000, 0.000, 0.000, 'Yes', 4155.000, 4155.000, 747.900, 290.850, 528.500, 819.350, 3335.650),
('F0103', '1000099887766', 'Aregawi', 'Gidey', 'Lecturer', 8310.000, 30, 0.000, 0.000, 800.000, 800.000, 'No', 0.000, 9110.000, 914.100, 819.900, 1778.000, 2597.900, 6512.100),
('F0104', '1000099887766', 'Aregawi', 'Gidey', 'Lecturer', 8310.000, 30, 0.000, 0.000, 800.000, 800.000, 'No', 0.000, 9110.000, 914.100, 637.700, 1778.000, 2415.700, 6694.300),
('F0105', '1000099887766', 'Aregawi', 'Gidey', 'Lecturer', 8310.000, 30, 0.000, 0.000, 800.000, 800.000, 'No', 0.000, 9110.000, 914.100, 581.700, 1778.000, 2359.700, 6750.300),
('F0106', '1000099887766', 'Aregawi', 'Gidey', 'Lecturer', 8310.000, 30, 0.000, 0.000, 0.000, 0.000, 'Yes', 4155.000, 4155.000, 914.100, 581.700, 528.500, 1110.200, 3044.800),
('F0109', '1000099887766', 'Aregawi', 'Gidey', 'Assistant Lecturer', 8310.000, 30, 0.000, 0.000, 800.000, 800.000, 'No', 0.000, 9110.000, 914.100, 581.700, 1778.000, 2359.700, 6750.300);

-- --------------------------------------------------------

--
-- Table structure for table `singleumessages`
--

CREATE TABLE IF NOT EXISTS `singleumessages` (
  `SSN` varchar(20) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `singleumessages`
--

INSERT INTO `singleumessages` (`SSN`, `Message`) VALUES
('F006', 'Hi, Aba you have gotten 500 extra monthly salary due to your excellence working.10q.');

-- --------------------------------------------------------

--
-- Table structure for table `suppfac`
--

CREATE TABLE IF NOT EXISTS `suppfac` (
  `SSN` varchar(20) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `UName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Status` int(11) NOT NULL,
  PRIMARY KEY (`SSN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppfac`
--

INSERT INTO `suppfac` (`SSN`, `FirstName`, `LastName`, `UName`, `Password`, `Status`) VALUES
('F001', 'Mesfin', 'Gidey', 'F001', 'F001', 0),
('F002', 'Misgina', 'Girmay', 'F002', 'F002', 0),
('F003', 'Senait', 'Derebe', 'F003', 'F003', 0),
('F004', 'Birhane', 'G/slassie', 'F004', 'F004', 0),
('F005', 'Halefom', 'Leake', 'F005', 'F005', 0),
('F006', 'Mezgebo', 'Hailu', 'abamezgebo', 'aba123', 0),
('F008', 'Aklilu', 'Lema', 'F008', 'F008', 0),
('F0100', 'Aregawi', 'Gidey', 'F0100', 'F0100', 0),
('F0101', 'Aregawi', 'Gidey', 'F0101', 'F0101', 0),
('F0102', 'Aregawi', 'Gidey', 'F0102', 'F0102', 0),
('F0103', 'Aregawi', 'Gidey', 'F0103', 'F0103', 0),
('F0104', 'Aregawi', 'Gidey', 'F0104', 'F0104', 0),
('F0105', 'Aregawi', 'Gidey', 'F0105', 'F0105', 0),
('F0106', 'Aregawi', 'Gidey', 'F0106', 'F0106', 0),
('F0109', 'Aregawi', 'Gidey', 'F0109', 'F0109', 0),
('S001', 'Abela', 'Hagos', 'S001', 'S001', 0),
('S002', 'Demeke', 'Nigussie', 'S002', 'S002', 0),
('S003', 'Weynishet', 'Hadgu', 'S003', 'S003', 0),
('S004', 'Belete', 'Tesema', 'S004', 'S004', 0),
('S005', 'wwewe', 'retew', 'seliewa', 'mypassword', 0),
('S007', 'dghfdggd', 'dgfffffff', 'S007', 'S007', 0),
('S008', 'Haile', 'Leul', 'S008', 'S008', 0),
('S010', 'Letay', 'Tesfay', 'S010', 'S010', 0),
('S011', 'Abadi', 'Yihdego', 'S011', 'S011', 0);

-- --------------------------------------------------------

--
-- Table structure for table `support_staff`
--

CREATE TABLE IF NOT EXISTS `support_staff` (
  `SSN` varchar(20) NOT NULL,
  `BankAccount` varchar(30) NOT NULL,
  `FName` varchar(20) NOT NULL,
  `LName` varchar(20) NOT NULL,
  `Position` varchar(10) NOT NULL,
  `BSalary` double(15,3) NOT NULL,
  `WorkDay` int(11) NOT NULL,
  `GrEarning` double(15,3) NOT NULL,
  `GovPFund` double(15,3) NOT NULL,
  `PerPFund` double(15,3) NOT NULL,
  `InTax` double(15,3) NOT NULL,
  `TotDeduction` double(15,3) NOT NULL,
  `NetPay` double(15,3) NOT NULL,
  PRIMARY KEY (`SSN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `support_staff`
--

INSERT INTO `support_staff` (`SSN`, `BankAccount`, `FName`, `LName`, `Position`, `BSalary`, `WorkDay`, `GrEarning`, `GovPFund`, `PerPFund`, `InTax`, `TotDeduction`, `NetPay`) VALUES
('S001', '0001758034', 'Abela', 'Hagos', 'Janitor', 3000.000, 30, 3000.000, 270.000, 210.000, 515.000, 725.000, 2275.000),
('S002', '0001758034', 'Demeke', 'Nigussie', 'Watchman', 3500.000, 30, 3500.000, 315.000, 245.000, 640.000, 885.000, 2615.000),
('S003', '0145680905', 'Weynishet', 'Hadgu', 'Auditor', 4000.000, 30, 4000.000, 360.000, 280.000, 787.500, 1067.500, 2932.500),
('S004', '0145680905', 'Belete', 'Tesema', 'Watchman', 3500.000, 30, 3500.000, 315.000, 245.000, 640.000, 885.000, 2615.000),
('S005', '0145680905', 'wwewe', 'retew', 'ereww', 354665.000, 30, 354665.000, 31919.850, 24826.550, 123470.250, 148296.800, 206368.200),
('S007', '0001758034', 'dghfdggd', 'dgfffffff', 'dgfhfhdg', 43523535.000, 30, 43523535.000, 3917118.150, 3046647.450, 15232574.750, 18279222.200, 25244312.800),
('S008', '098397232', 'Haile', 'Leul', 'Watchman', 3800.000, 30, 3800.000, 342.000, 266.000, 727.500, 993.500, 2806.500),
('S010', '67657654', 'Letay', 'Tesfay', 'Janitor', 3500.000, 30, 3500.000, 315.000, 245.000, 640.000, 885.000, 2615.000),
('S011', '6546454', 'Abadi', 'Yihdego', 'Watchman', 4000.000, 30, 4000.000, 360.000, 280.000, 787.500, 1067.500, 2932.500);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
