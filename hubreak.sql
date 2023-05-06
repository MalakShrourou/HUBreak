-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 06, 2023 at 03:56 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hubreak`
--

-- --------------------------------------------------------

--
-- Table structure for table `eastern`
--

CREATE TABLE `eastern` (
  `ID` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `eastern`
--

INSERT INTO `eastern` (`ID`, `name`, `price`) VALUES
(1, 'زنجر', 2),
(2, 'كوردن بلو', 2.25),
(3, 'برغر', 2),
(4, 'فاهيتا', 2),
(5, 'تندوري', 2),
(6, 'بيتزا إيطالي', 2.25),
(7, 'هوت دوج', 2),
(8, 'حلوم', 2),
(9, 'ساندويش شاورما', 1.25),
(10, 'وجبة شاورما عادي', 2),
(11, 'وجبة شاورما فرنسي', 2),
(12, 'وجبة شاورما سوبر', 2.5),
(13, 'وجبة شاورما دبل', 3),
(14, 'وجبة شاورما تربل', 4),
(15, 'وجبة شاورما حلبي', 3.5),
(16, 'وجبة شاورما إيطالي', 4),
(17, 'علبة بطاطا ٢٠٠ غم', 0.75),
(18, 'علبة بطاطا ٢٠٠ غم + جبنة', 1),
(19, 'علبة بطاطا كبيرة', 1.25),
(20, 'علبة بطاطا كبيرة + جبنة', 1.5);

-- --------------------------------------------------------

--
-- Table structure for table `espresso`
--

CREATE TABLE `espresso` (
  `ID` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `espresso`
--

INSERT INTO `espresso` (`ID`, `name`, `price`) VALUES
(1, 'زنجر', 2),
(2, 'كوردن بلو', 2.25),
(3, 'برغر', 2),
(4, 'فاهيتا', 2),
(5, 'تندوري', 2),
(6, 'بيتزا إيطالي', 2.25),
(7, 'هوت دوج', 2),
(8, 'حلوم', 2),
(9, 'ساندويش شاورما', 1.25),
(10, 'وجبة شاورما عادي', 2),
(11, 'وجبة شاورما فرنسي', 2),
(12, 'وجبة شاورما سوبر', 2.5),
(13, 'وجبة شاورما دبل', 3),
(14, 'وجبة شاورما تربل', 4),
(15, 'وجبة شاورما حلبي', 3.5),
(16, 'وجبة شاورما إيطالي', 4),
(17, 'علبة بطاطا ٢٠٠ غم', 0.75),
(18, 'علبة بطاطا ٢٠٠ غم + جبنة', 1),
(19, 'علبة بطاطا كبيرة', 1.25),
(20, 'علبة بطاطا كبيرة + جبنة', 1.5);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `ID` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`ID`, `name`, `price`) VALUES
(1, 'زنجر', 2),
(2, 'كوردن بلو', 2.25),
(3, 'برغر', 2),
(4, 'فاهيتا', 2),
(5, 'تندوري', 2),
(6, 'بيتزا إيطالي', 2.25),
(7, 'هوت دوج', 2),
(8, 'حلوم', 2),
(9, 'ساندويش شاورما', 1.25),
(10, 'وجبة شاورما عادي', 2),
(11, 'وجبة شاورما فرنسي', 2),
(12, 'وجبة شاورما سوبر', 2.5),
(13, 'وجبة شاورما دبل', 3),
(14, 'وجبة شاورما تربل', 4),
(15, 'وجبة شاورما حلبي', 3.5),
(16, 'وجبة شاورما إيطالي', 4),
(17, 'علبة بطاطا ٢٠٠ غم', 0.75),
(18, 'علبة بطاطا ٢٠٠ غم + جبنة', 1),
(19, 'علبة بطاطا كبيرة', 1.25),
(20, 'علبة بطاطا كبيرة + جبنة', 1.5);

-- --------------------------------------------------------

--
-- Table structure for table `village`
--

CREATE TABLE `village` (
  `ID` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `village`
--

INSERT INTO `village` (`ID`, `name`, `price`) VALUES
(1, 'زنجر', 2),
(2, 'كوردن بلو', 2.25),
(3, 'برغر', 2),
(4, 'فاهيتا', 2),
(5, 'تندوري', 2),
(6, 'بيتزا إيطالي', 2.25),
(7, 'هوت دوج', 2),
(8, 'حلوم', 2),
(9, 'ساندويش شاورما', 1.25),
(10, 'وجبة شاورما عادي', 2),
(11, 'وجبة شاورما فرنسي', 2),
(12, 'وجبة شاورما سوبر', 2.5),
(13, 'وجبة شاورما دبل', 3),
(14, 'وجبة شاورما تربل', 4),
(15, 'وجبة شاورما حلبي', 3.5),
(16, 'وجبة شاورما إيطالي', 4),
(17, 'علبة بطاطا ٢٠٠ غم', 0.75),
(18, 'علبة بطاطا ٢٠٠ غم + جبنة', 1),
(19, 'علبة بطاطا كبيرة', 1.25),
(20, 'علبة بطاطا كبيرة + جبنة', 1.5);

-- --------------------------------------------------------

--
-- Table structure for table `western`
--

CREATE TABLE `western` (
  `ID` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `western`
--

INSERT INTO `western` (`ID`, `name`, `price`) VALUES
(1, 'زنجر', 2),
(2, 'كوردن بلو', 2.25),
(3, 'برغر', 2),
(4, 'فاهيتا', 2),
(5, 'تندوري', 2),
(6, 'بيتزا إيطالي', 2.25),
(7, 'هوت دوج', 2),
(8, 'حلوم', 2),
(9, 'ساندويش شاورما', 1.25),
(10, 'وجبة شاورما عادي', 2),
(11, 'وجبة شاورما فرنسي', 2),
(12, 'وجبة شاورما سوبر', 2.5),
(13, 'وجبة شاورما دبل', 3),
(14, 'وجبة شاورما تربل', 4),
(15, 'وجبة شاورما حلبي', 3.5),
(16, 'وجبة شاورما إيطالي', 4),
(17, 'علبة بطاطا ٢٠٠ غم', 0.75),
(18, 'علبة بطاطا ٢٠٠ غم + جبنة', 1),
(19, 'علبة بطاطا كبيرة', 1.25),
(20, 'علبة بطاطا كبيرة + جبنة', 1.5);

-- --------------------------------------------------------

--
-- Table structure for table `zaza`
--

CREATE TABLE `zaza` (
  `ID` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `zaza`
--

INSERT INTO `zaza` (`ID`, `name`, `price`) VALUES
(1, 'زنجر', 2),
(2, 'كوردن بلو', 2.25),
(3, 'برغر', 2),
(4, 'فاهيتا', 2),
(5, 'تندوري', 2),
(6, 'بيتزا إيطالي', 2.25),
(7, 'هوت دوج', 2),
(8, 'حلوم', 2),
(9, 'ساندويش شاورما', 1.25),
(10, 'وجبة شاورما عادي', 2),
(11, 'وجبة شاورما فرنسي', 2),
(12, 'وجبة شاورما سوبر', 2.5),
(13, 'وجبة شاورما دبل', 3),
(14, 'وجبة شاورما تربل', 4),
(15, 'وجبة شاورما حلبي', 3.5),
(16, 'وجبة شاورما إيطالي', 4),
(17, 'علبة بطاطا ٢٠٠ غم', 0.75),
(18, 'علبة بطاطا ٢٠٠ غم + جبنة', 1),
(19, 'علبة بطاطا كبيرة', 1.25),
(20, 'علبة بطاطا كبيرة + جبنة', 1.5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eastern`
--
ALTER TABLE `eastern`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `espresso`
--
ALTER TABLE `espresso`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `village`
--
ALTER TABLE `village`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `western`
--
ALTER TABLE `western`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `zaza`
--
ALTER TABLE `zaza`
  ADD PRIMARY KEY (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;