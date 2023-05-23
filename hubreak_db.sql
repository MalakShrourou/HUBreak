-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 23, 2023 at 04:02 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hubreak_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(255) NOT NULL,
  `n` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID`, `n`, `price`, `quantity`) VALUES
(2, 'كوردون بلو', '2.25', '1'),
(3, 'برغر', '2.00', '2'),
(1, 'وجبة زنجر', '2.00', '2');

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
(1, 'وجبة زنجر', 2),
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
-- Table structure for table `east_rate`
--

CREATE TABLE `east_rate` (
  `east_r` varchar(2222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(1, 'وجبة زنجر', 2),
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
-- Table structure for table `espresso_rate`
--

CREATE TABLE `espresso_rate` (
  `espress_r` varchar(2222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `espresso_rate`
--

INSERT INTO `espresso_rate` (`espress_r`) VALUES
('3');

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
(1, 'وجبة زنجر', 2),
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
-- Table structure for table `medicine_rate`
--

CREATE TABLE `medicine_rate` (
  `medic_r` varchar(2222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `medicine_rate`
--

INSERT INTO `medicine_rate` (`medic_r`) VALUES
('4'),
('5'),
('3'),
('5'),
('3');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `ID` int(255) NOT NULL,
  `ET` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`ID`, `ET`) VALUES
(1, '20'),
(2, '20'),
(3, '20'),
(4, '20'),
(5, '20'),
(6, '20'),
(7, '20'),
(8, '20'),
(9, '25'),
(10, '25'),
(11, '25'),
(12, '25'),
(13, '25'),
(14, '25'),
(15, '25'),
(16, '25'),
(17, '5'),
(18, '5'),
(19, '5'),
(20, '5');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `pass`) VALUES
('Malak', 'Malakfikri36@gmail.com', 'Malak12_');

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
(1, 'وجبة زنجر', 2),
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
-- Table structure for table `village_rate`
--

CREATE TABLE `village_rate` (
  `village_r` varchar(2222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `village_rate`
--

INSERT INTO `village_rate` (`village_r`) VALUES
('5');

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
(1, 'وجبة زنجر', 2),
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
-- Table structure for table `west_rate`
--

CREATE TABLE `west_rate` (
  `west_r` varchar(2222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(1, 'وجبة زنجر', 2),
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
-- Table structure for table `zaza_rate`
--

CREATE TABLE `zaza_rate` (
  `zaza_r` varchar(2222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `zaza_rate`
--

INSERT INTO `zaza_rate` (`zaza_r`) VALUES
('5'),
('2');

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
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
