-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 05:52 PM
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
-- Database: `dreamschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `AdminID` int(11) NOT NULL,
  `AdminName` varchar(10) NOT NULL,
  `Pa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`AdminID`, `AdminName`, `Pa`) VALUES
(1, 'Kushani', '123@#'),
(2, 'Kaushalya', '#456@');

-- --------------------------------------------------------

--
-- Table structure for table `bankpaymenttable`
--

CREATE TABLE `bankpaymenttable` (
  `bankPaymentId` int(11) NOT NULL,
  `AccountNumber` varchar(20) NOT NULL,
  `AccountHolderName` varchar(20) NOT NULL,
  `BankName` varchar(20) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `donateId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cardpaymenttable`
--

CREATE TABLE `cardpaymenttable` (
  `cardPaymentId` int(11) NOT NULL,
  `cardNumber` varchar(20) NOT NULL,
  `cardCVC` varchar(20) NOT NULL,
  `cardHolderName` varchar(20) NOT NULL,
  `cardExpireDate` varchar(20) NOT NULL,
  `donateId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cardpaymenttable`
--

INSERT INTO `cardpaymenttable` (`cardPaymentId`, `cardNumber`, `cardCVC`, `cardHolderName`, `cardExpireDate`, `donateId`) VALUES
(1, '..', '..', '..', '..', 1),
(2, '..', '..', '..', '..', 1),
(3, '123354', '123', 'Kushani', '12/29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donatertable`
--

CREATE TABLE `donatertable` (
  `donaterID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donatertable`
--

INSERT INTO `donatertable` (`donaterID`, `name`, `Email`, `phoneNumber`, `Address`, `userId`) VALUES
(1, 'A.D.K.Kaushalya', 'kushani@gmail.com', '0762965232', 'bellanwila', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donater_donatetable`
--

CREATE TABLE `donater_donatetable` (
  `donaterID` int(11) NOT NULL,
  `donateId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donatetable`
--

CREATE TABLE `donatetable` (
  `donateId` int(11) NOT NULL,
  `Amount` varchar(20) NOT NULL,
  `projectId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donatetable`
--

INSERT INTO `donatetable` (`donateId`, `Amount`, `projectId`) VALUES
(1, '10000', 1),
(2, '', 1),
(3, '', 1),
(4, '2000', 1),
(5, '2000', 1),
(6, '2000', 1),
(7, '10000', 1),
(8, '10000', 1),
(9, '1000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donationtypetable`
--

CREATE TABLE `donationtypetable` (
  `donationTypeId` int(11) NOT NULL,
  `bankPayment` varchar(20) NOT NULL,
  `cardPayment` varchar(20) NOT NULL,
  `paypalPayment` varchar(20) NOT NULL,
  `donateId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacktable`
--

CREATE TABLE `feedbacktable` (
  `feedbackId` int(11) NOT NULL,
  `Description` varchar(40) NOT NULL,
  `adminID` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `labprojecttable`
--

CREATE TABLE `labprojecttable` (
  `labProjectId` int(11) NOT NULL,
  `description` varchar(40) NOT NULL,
  `school` varchar(20) NOT NULL,
  `projectId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `libraryprojecttable`
--

CREATE TABLE `libraryprojecttable` (
  `libraryProjectId` int(11) NOT NULL,
  `description` varchar(40) NOT NULL,
  `school` varchar(20) NOT NULL,
  `projectId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paypaltable`
--

CREATE TABLE `paypaltable` (
  `PaypalId` int(11) NOT NULL,
  `donateId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `probelmtable`
--

CREATE TABLE `probelmtable` (
  `problemId` int(11) NOT NULL,
  `schoolName` varchar(20) NOT NULL,
  `schoolDistrict` varchar(20) NOT NULL,
  `description` varchar(40) NOT NULL,
  `problemTitle` varchar(20) NOT NULL,
  `userId` int(11) NOT NULL,
  `projectId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `probelmtable`
--

INSERT INTO `probelmtable` (`problemId`, `schoolName`, `schoolDistrict`, `description`, `problemTitle`, `userId`, `projectId`) VALUES
(1, 'Medagama Central', 'Badulla', 'Computer lab need for this school', 'Computer Lab need', 1, 1),
(2, 'NuvaraEliya Central', 'Nuwara Eliya', 'Library Project', 'Library Project', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `projecttable`
--

CREATE TABLE `projecttable` (
  `projectId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projecttable`
--

INSERT INTO `projecttable` (`projectId`) VALUES
(1),
(2);

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `UserId` int(11) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `adminID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`UserId`, `userName`, `Email`, `Password`, `adminID`) VALUES
(1, 'ruban', 'ruban@gmail.com', 'abcd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `watertable`
--

CREATE TABLE `watertable` (
  `waterProjectId` int(11) NOT NULL,
  `description` varchar(40) NOT NULL,
  `school` varchar(20) NOT NULL,
  `projectId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `bankpaymenttable`
--
ALTER TABLE `bankpaymenttable`
  ADD PRIMARY KEY (`bankPaymentId`),
  ADD KEY `bankpaymenttable_ibfk_1` (`donateId`);

--
-- Indexes for table `cardpaymenttable`
--
ALTER TABLE `cardpaymenttable`
  ADD PRIMARY KEY (`cardPaymentId`),
  ADD KEY `donateId` (`donateId`);

--
-- Indexes for table `donatertable`
--
ALTER TABLE `donatertable`
  ADD PRIMARY KEY (`donaterID`),
  ADD KEY `donatertable_ibfk_1` (`userId`);

--
-- Indexes for table `donatetable`
--
ALTER TABLE `donatetable`
  ADD PRIMARY KEY (`donateId`),
  ADD KEY `projectId` (`projectId`);

--
-- Indexes for table `donationtypetable`
--
ALTER TABLE `donationtypetable`
  ADD PRIMARY KEY (`donationTypeId`),
  ADD KEY `donateId` (`donateId`);

--
-- Indexes for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  ADD PRIMARY KEY (`feedbackId`),
  ADD KEY `adminID` (`adminID`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `labprojecttable`
--
ALTER TABLE `labprojecttable`
  ADD PRIMARY KEY (`labProjectId`),
  ADD KEY `projectId` (`projectId`);

--
-- Indexes for table `libraryprojecttable`
--
ALTER TABLE `libraryprojecttable`
  ADD PRIMARY KEY (`libraryProjectId`),
  ADD KEY `projectId` (`projectId`);

--
-- Indexes for table `paypaltable`
--
ALTER TABLE `paypaltable`
  ADD PRIMARY KEY (`PaypalId`),
  ADD KEY `donateId` (`donateId`);

--
-- Indexes for table `probelmtable`
--
ALTER TABLE `probelmtable`
  ADD PRIMARY KEY (`problemId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `projectId` (`projectId`);

--
-- Indexes for table `projecttable`
--
ALTER TABLE `projecttable`
  ADD PRIMARY KEY (`projectId`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`UserId`),
  ADD KEY `adminID` (`adminID`);

--
-- Indexes for table `watertable`
--
ALTER TABLE `watertable`
  ADD PRIMARY KEY (`waterProjectId`),
  ADD KEY `projectId` (`projectId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `AdminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bankpaymenttable`
--
ALTER TABLE `bankpaymenttable`
  MODIFY `bankPaymentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cardpaymenttable`
--
ALTER TABLE `cardpaymenttable`
  MODIFY `cardPaymentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donatertable`
--
ALTER TABLE `donatertable`
  MODIFY `donaterID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donatetable`
--
ALTER TABLE `donatetable`
  MODIFY `donateId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `donationtypetable`
--
ALTER TABLE `donationtypetable`
  MODIFY `donationTypeId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  MODIFY `feedbackId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `labprojecttable`
--
ALTER TABLE `labprojecttable`
  MODIFY `labProjectId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `libraryprojecttable`
--
ALTER TABLE `libraryprojecttable`
  MODIFY `libraryProjectId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paypaltable`
--
ALTER TABLE `paypaltable`
  MODIFY `PaypalId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `probelmtable`
--
ALTER TABLE `probelmtable`
  MODIFY `problemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projecttable`
--
ALTER TABLE `projecttable`
  MODIFY `projectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `watertable`
--
ALTER TABLE `watertable`
  MODIFY `waterProjectId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bankpaymenttable`
--
ALTER TABLE `bankpaymenttable`
  ADD CONSTRAINT `bankpaymenttable_ibfk_1` FOREIGN KEY (`donateId`) REFERENCES `donatetable` (`donateId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cardpaymenttable`
--
ALTER TABLE `cardpaymenttable`
  ADD CONSTRAINT `cardpaymenttable_ibfk_1` FOREIGN KEY (`donateId`) REFERENCES `donatetable` (`donateId`);

--
-- Constraints for table `donatertable`
--
ALTER TABLE `donatertable`
  ADD CONSTRAINT `donatertable_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `usertable` (`UserId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donatetable`
--
ALTER TABLE `donatetable`
  ADD CONSTRAINT `donatetable_ibfk_1` FOREIGN KEY (`projectId`) REFERENCES `projecttable` (`projectId`);

--
-- Constraints for table `donationtypetable`
--
ALTER TABLE `donationtypetable`
  ADD CONSTRAINT `donationtypetable_ibfk_1` FOREIGN KEY (`donateId`) REFERENCES `donatetable` (`donateId`);

--
-- Constraints for table `feedbacktable`
--
ALTER TABLE `feedbacktable`
  ADD CONSTRAINT `feedbacktable_ibfk_1` FOREIGN KEY (`adminID`) REFERENCES `admintable` (`AdminID`),
  ADD CONSTRAINT `feedbacktable_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `usertable` (`UserId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `labprojecttable`
--
ALTER TABLE `labprojecttable`
  ADD CONSTRAINT `labprojecttable_ibfk_1` FOREIGN KEY (`projectId`) REFERENCES `projecttable` (`projectId`);

--
-- Constraints for table `libraryprojecttable`
--
ALTER TABLE `libraryprojecttable`
  ADD CONSTRAINT `libraryprojecttable_ibfk_1` FOREIGN KEY (`projectId`) REFERENCES `projecttable` (`projectId`);

--
-- Constraints for table `paypaltable`
--
ALTER TABLE `paypaltable`
  ADD CONSTRAINT `paypaltable_ibfk_1` FOREIGN KEY (`donateId`) REFERENCES `donatetable` (`donateId`);

--
-- Constraints for table `probelmtable`
--
ALTER TABLE `probelmtable`
  ADD CONSTRAINT `probelmtable_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `usertable` (`UserId`),
  ADD CONSTRAINT `probelmtable_ibfk_2` FOREIGN KEY (`projectId`) REFERENCES `projecttable` (`projectId`);

--
-- Constraints for table `usertable`
--
ALTER TABLE `usertable`
  ADD CONSTRAINT `usertable_ibfk_1` FOREIGN KEY (`adminID`) REFERENCES `admintable` (`AdminID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `watertable`
--
ALTER TABLE `watertable`
  ADD CONSTRAINT `watertable_ibfk_1` FOREIGN KEY (`projectId`) REFERENCES `projecttable` (`projectId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
