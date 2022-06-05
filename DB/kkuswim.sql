-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 05:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kkuswim`
--

-- --------------------------------------------------------

--
-- Table structure for table `babydetail`
--

CREATE TABLE `babydetail` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `nickname` varchar(20) DEFAULT NULL,
  `sexbaby` varchar(10) DEFAULT NULL,
  `birthday` date NOT NULL,
  `agebaby` int(10) NOT NULL,
  `image` varchar(250) NOT NULL,
  `parent_id` int(10) NOT NULL,
  `status` int(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `babydetail`
--

INSERT INTO `babydetail` (`id`, `name`, `lastname`, `nickname`, `sexbaby`, `birthday`, `agebaby`, `image`, `parent_id`, `status`) VALUES
(1, 'สมทวย', 'รวยเพื่อน', 'โอม', 'ชาย', '2000-08-24', 21, 'Avatar/1.jpg', 1, 1),
(2, 'ณัฐดนัย', 'วินทะไชย', 'เตเต้', 'ชาย', '2000-10-25', 19, 'Avatar/001.jpg', 2, 1),
(3, 'พุฒิพงศ์', 'สักแสน', 'หวาย', 'ชาย', '2000-08-24', 21, 'Avatar/.jpg', 3, 1),
(4, 'qreaf', 'rerdfa', 'qerer', 'ชาย', '2022-05-22', 12, 'Avatar/4.jpg', 5, 1),
(5, 'asddfaf', 'afafafaf', 'asfafa', 'หญิง', '2022-05-20', 33, 'Avatar/5.jpg', 5, 1),
(6, 'ushagkjalf', 'asfhailj;', 'qrqer', 'หญิง', '2022-05-12', 21, 'Avatar/6.jpg', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `quiry_id` int(11) NOT NULL,
  `study` varchar(20) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `anytime` varchar(100) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `pool` varchar(50) DEFAULT NULL,
  `disease` varchar(20) DEFAULT NULL,
  `details` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `listprogram`
--

CREATE TABLE `listprogram` (
  `id` int(11) NOT NULL,
  `list` varchar(90) NOT NULL,
  `age` varchar(10) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `dateprogram` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `listprogram`
--

INSERT INTO `listprogram` (`id`, `list`, `age`, `sex`, `dateprogram`) VALUES
(1, 'แข่งว่ายน้ำประจำปีบ้านหนอวคิโมจี๊ 2022', 'ไม่เกิน 18', 'ชาย', '2022-05-19'),
(3, 'แข่งว่ายน้ำกระชับมิตรแดนคนหล่อ ประจำปี2022', 'รุ่นประชาช', 'ชาย', '2022-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `parentdetail`
--

CREATE TABLE `parentdetail` (
  `id` int(10) NOT NULL,
  `namefather` varchar(50) DEFAULT NULL,
  `rsfather` varchar(30) DEFAULT NULL,
  `phonefather` varchar(10) DEFAULT NULL,
  `emailfather` varchar(50) DEFAULT NULL,
  `namemother` varchar(50) DEFAULT NULL,
  `rsmother` varchar(30) DEFAULT NULL,
  `phonemother` varchar(10) DEFAULT NULL,
  `emailmother` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parentdetail`
--

INSERT INTO `parentdetail` (`id`, `namefather`, `rsfather`, `phonefather`, `emailfather`, `namemother`, `rsmother`, `phonemother`, `emailmother`, `address`) VALUES
(1, 'ธนูทวย  รวยเพื่อน', 'ยังอยู่ด้วยกัน', '0982241542', 'qwer@gmail.com', 'อมรวิมาร รวยเพื่อน', 'ยังอยู่ด้วยกัน', '0621345678', 'zxc@gmail.com', '15/4 บ้านหนองกุง อ.เมือง จ.ขอนแก่น'),
(2, 'สหขจรเดช  วินทะไชย', 'ยังอยู่ด้วยกัน', '884725510', 'ghk_1@gmail.com', 'พรชิตา  วินทะไชย', 'ยังอยู่ด้วยกัน', '624715510', 'nmlit@hotmail.com', '200/14 บ้านหนองรถสิบล้อ อ.สมมุติ จ.หนองคาย 40000'),
(3, 'สมแล้วครับ สักแสน', 'ยังอยู่ด้วยกัน', '0643469907', 'senju@gmail.com', 'ง่วงเกิน  สักแสน ', 'ยังอยู่ด้วยกัน', '0874623310', 'moo14589@gmail.com', '17/4 บ้านหนองปลาดุกฟู จ.กาฬสินธุ์'),
(4, 'wefasdf', 'ยังอยู่ด้วยกัน', '9999999999', 'adfadf@gsgg.com', 'afsdafa', 'ยังอยู่ด้วยกัน', '8888888888', 'adfadf@gsgg.com', 'adffqefqfadf'),
(5, 'affdfd', 'ยังอยู่ด้วยกัน', '7777777777', 'adcavva@sgg.com', 'eqerqfadf', 'ยังอยู่ด้วยกัน', '6666666666', 'adcavva@sgg.com', 'afdaggdg'),
(6, 'asasfqef', 'ยังอยู่ด้วยกัน', '9999999999', 'adfadfhjlk@aldmfk.com', 'qyiop[', 'ยังอยู่ด้วยกัน', '4444444444', 'adfadfhjlk@aldmfk.com', 'dfaskfuhijo');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `id` int(11) NOT NULL,
  `list` varchar(50) NOT NULL,
  `age` varchar(40) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `statistics` varchar(20) NOT NULL,
  `number` varchar(10) NOT NULL,
  `style` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`id`, `list`, `age`, `sex`, `statistics`, `number`, `style`) VALUES
(1, 'แข่งว่ายน้ำประจำปีบ้านหนองกกกอก 2022', 'ไม่เกิน 15 ปี', 'ชาย', '13:10', '3', 'IM'),
(4, 'แข่งว่ายน้ำบ้านหนองคิโมจี๊ ครั้งที่1', 'ไม่เกิน 18 ปี', 'ชาย', '01:05', '2', 'Freestyle'),
(5, 'แข่งว่ายน้ำ บ้านหนองอีโต้ง', 'รุ่นประชาชน', 'ชาย', '03:12', '3', 'Butterfly'),
(8, 'แข่งว่ายน้ำการกุศลครั้งที่2 ประจำปี 2565', 'รุ่นประชาชน', 'หญิง', '02:22', '1', 'Butterfly');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listprogram`
--
ALTER TABLE `listprogram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parentdetail`
--
ALTER TABLE `parentdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listprogram`
--
ALTER TABLE `listprogram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `parentdetail`
--
ALTER TABLE `parentdetail`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
