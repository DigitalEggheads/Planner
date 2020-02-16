-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2020 at 04:56 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `planner`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `User_id` int(100) NOT NULL,
  `User_email` varchar(100) NOT NULL,
  `User_Name` varchar(100) NOT NULL,
  `User_Password` varchar(100) NOT NULL,
  `User_Role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`User_id`, `User_email`, `User_Name`, `User_Password`, `User_Role`) VALUES
(1, 'Admin@gmail.com', 'Admin@Planner', 'f29a42c183a789811e26b1032c8383d5', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `Contact_Number` bigint(100) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Email_Id` varchar(100) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `Hotel_Id` int(50) NOT NULL,
  `Hotel_Title` varchar(100) NOT NULL,
  `Hotel_Description` varchar(1000) NOT NULL,
  `Hotel_Destination` varchar(100) NOT NULL,
  `Hotel_City` varchar(100) NOT NULL,
  `Hotel_Type` varchar(100) NOT NULL,
  `Hotel_Distance` varchar(100) NOT NULL,
  `Hotel_Location` varchar(100) NOT NULL,
  `Hotel_Map_Iframe` varchar(1000) NOT NULL,
  `Hotel_Featured_Image` varchar(1000) NOT NULL,
  `Hotel_Price` int(100) NOT NULL,
  `Hotel_isTrashed` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`Hotel_Id`, `Hotel_Title`, `Hotel_Description`, `Hotel_Destination`, `Hotel_City`, `Hotel_Type`, `Hotel_Distance`, `Hotel_Location`, `Hotel_Map_Iframe`, `Hotel_Featured_Image`, `Hotel_Price`, `Hotel_isTrashed`) VALUES
(7, 'Hotel', '                                          sd', 'Iran', 'Najaf', 'Deluxe Supreme', '0m to 100m From Haram', 'Location', 'Maptest', 'HotelImages/avatar2.jpg', 1, 0),
(8, 'Hotel', '                                          sd', 'Iran', 'Najaf', 'Deluxe Supreme', '0m to 100m From Haram', 'Location', 'Maptest', 'HotelImages/avatar2.jpg', 1, 0),
(10, 'Bag', '<p>&nbsp;&nbsp;&nbsp; shhhs                                          </p>', 'Kingdom Of Saudi Arabia', 'Karbala', 'Deluxe Supreme', '0m to 100m From Haram', 'Bag', 'Maptest', 'HotelImages/bag.png', 35, 0),
(11, 'Hotel2', '                                          tettst', 'Syria', 'Karbala', 'Deluxe Supreme', '0m to 100m From Haram', 'Location', 'sda', 'HotelImages/apple-touch-icon-144x144-precomposed.png', 1, 0),
(12, 'Hotel2', '                                          tettst', 'Syria', 'Karbala', 'Deluxe Supreme', '0m to 100m From Haram', 'Location', 'sda', 'HotelImages/apple-touch-icon-144x144-precomposed.png', 1, 0),
(13, 'Hotel2', '                                          tettst', 'Syria', 'Karbala', 'Deluxe Supreme', '0m to 100m From Haram', 'Location', 'sda', 'HotelImages/apple-touch-icon-144x144-precomposed.png', 1, 0),
(14, 'Hotel2', '                                          tettst', 'Syria', 'Karbala', 'Deluxe Supreme', '0m to 100m From Haram', 'Location', 'sda', 'HotelImages/apple-touch-icon-144x144-precomposed.png', 1, 0),
(15, 'Hotel2', '                                          tettst', 'Syria', 'Karbala', 'Deluxe Supreme', '0m to 100m From Haram', 'Location', 'sda', 'HotelImages/apple-touch-icon-144x144-precomposed.png', 1, 0),
(16, 'Hotel2', '                                          tettst', 'Syria', 'Karbala', 'Deluxe Supreme', '0m to 100m From Haram', 'Location', 'sda', 'HotelImages/apple-touch-icon-144x144-precomposed.png', 1, 0),
(17, 'Hotel2', '                                          tettst', 'Syria', 'Karbala', 'Deluxe Supreme', '0m to 100m From Haram', 'Location', 'sda', 'HotelImages/apple-touch-icon-144x144-precomposed.png', 1, 0),
(18, 'Hotel2', '                                          tettst', 'Syria', 'Karbala', 'Deluxe Supreme', '0m to 100m From Haram', 'Location', 'sda', 'HotelImages/apple-touch-icon-144x144-precomposed.png', 1, 0),
(19, 'Hotel2', '                                          tettst', 'Syria', 'Karbala', 'Deluxe Supreme', '0m to 100m From Haram', 'Location', 'sda', 'HotelImages/apple-touch-icon-144x144-precomposed.png', 1, 0),
(20, '', '                                          ', 'Iraq', 'Karbala', 'Deluxe Supreme', '0m to 100m From Haram', '', '', 'HotelImages/cta-destination-iran.jpg', 0, 0),
(21, '', '                                          ', 'Iraq', 'Karbala', 'Deluxe Supreme', '0m to 100m From Haram', '', '', 'HotelImages/cta-destination-iran.jpg', 0, 0),
(22, '', '                                          ', 'Iraq', 'Karbala', 'Deluxe Supreme', '0m to 100m From Haram', '', '', 'HotelImages/cta-destination-iran.jpg', 0, 0),
(23, '', '                                          ', 'Iraq', 'Karbala', 'Deluxe Supreme', '0m to 100m From Haram', '', '', 'HotelImages/cta-destination-iran.jpg', 0, 0),
(24, '', '                                          ', 'Iraq', 'Karbala', 'Deluxe Supreme', '0m to 100m From Haram', '', '', 'HotelImages/cta-destination-iran.jpg', 0, 0),
(25, '', '                                          ', 'Iraq', 'Karbala', 'Deluxe Supreme', '0m to 100m From Haram', '', '', 'HotelImages/cta-destination-iran.jpg', 0, 0),
(26, '', '                                          ', 'Iraq', 'Karbala', 'Deluxe Supreme', '0m to 100m From Haram', '', '', 'HotelImages/cta-destination-iran.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hotels_gallery`
--

CREATE TABLE `hotels_gallery` (
  `Gallery_Id` int(100) NOT NULL,
  `Hotel_Galley_Image` varchar(100) NOT NULL,
  `Hotel_Id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotels_gallery`
--

INSERT INTO `hotels_gallery` (`Gallery_Id`, `Hotel_Galley_Image`, `Hotel_Id`) VALUES
(1, 'HotelImages/Gallery/5e495f7031077.jpg', 25),
(2, 'HotelImages/Gallery/5e495f7043f43.jpg', 25),
(3, 'HotelImages/Gallery/5e495f706146b.jpg', 25),
(4, 'HotelImages/Gallery/cta-destination-iran.jpg', 26),
(5, 'HotelImages/Gallery/cta-destination-iraq.jpg', 26),
(6, 'HotelImages/Gallery/cta-destination-ksa.jpg', 26);

-- --------------------------------------------------------

--
-- Table structure for table `hotels_queries`
--

CREATE TABLE `hotels_queries` (
  `Hotel_Query_Id` int(11) NOT NULL,
  `Hotel_Url` varchar(100) NOT NULL,
  `Hotel_Title` varchar(100) NOT NULL,
  `Hotel_Query_Name` varchar(100) NOT NULL,
  `Hotel_Query_Contact_Number` bigint(100) NOT NULL,
  `Hotel_Query_Email` varchar(100) NOT NULL,
  `Hotel_Query_Check_In` date NOT NULL,
  `Hotel_Query_Check_Out` date NOT NULL,
  `Hotel_Query_Adult` int(100) NOT NULL,
  `Hotel_Query_Children` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotels_queries`
--

INSERT INTO `hotels_queries` (`Hotel_Query_Id`, `Hotel_Url`, `Hotel_Title`, `Hotel_Query_Name`, `Hotel_Query_Contact_Number`, `Hotel_Query_Email`, `Hotel_Query_Check_In`, `Hotel_Query_Check_Out`, `Hotel_Query_Adult`, `Hotel_Query_Children`) VALUES
(1, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Abrar', 323, 'abrar1409a@gmail.com', '2020-01-21', '0000-00-00', 2, 1),
(2, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Abrar', 323, 'abrar1409a@gmail.com', '2020-02-10', '0000-00-00', 2, 1),
(3, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Abrar', 3232296612, 'abrar1409a@gmail.com', '0000-00-00', '0000-00-00', 2, 3),
(4, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Abrar', 3232296612, 'abrar1409a@gmail.com', '0000-00-00', '0000-00-00', 2, 3),
(5, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Abrar', 3232296612, 'abrar1409a@gmail.com', '0000-00-00', '0000-00-00', 2, 3),
(6, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Abrar', 3232296612, 'abrar1409a@gmail.com', '0000-00-00', '0000-00-00', 2, 3),
(7, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', '', 0, '', '0000-00-00', '0000-00-00', 0, 0),
(8, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', '', 0, '', '0000-00-00', '0000-00-00', 0, 0),
(9, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Abrar', 3232296612, 'abrar1409a@gmail.com', '0000-00-00', '0000-00-00', 2, 2),
(10, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Abrar', 3232296612, 'abrar1409a@gmail.com', '0000-00-00', '0000-00-00', 1, 0),
(11, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Lorem', 3232296612, 'abrar1409a@gmail.com', '0000-00-00', '0000-00-00', 0, 0),
(12, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Lorem', 3232296612, 'abrar1409a@gmail.com', '0000-00-00', '0000-00-00', 0, 0),
(13, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Abrar', 3232296612, 'abrar1409a@gmail.com', '0000-00-00', '0000-00-00', 1, 1),
(14, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'ABC', 3232296612, 'abrar1409a@gmail.com', '0000-00-00', '0000-00-00', 1, 1),
(15, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Abrar', 3232296612, 'abrar1409a@gmail.com', '0000-00-00', '0000-00-00', 1, 1),
(16, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Abrar', 3232296612, 'abrar1409a@gmail.com', '0000-00-00', '0000-00-00', 1, 1),
(17, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Abrar', 3232296612, 'abrar1409a@gmail.com', '0000-00-00', '0000-00-00', 1, 1),
(18, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Abrar', 3232296612, 'abrar1409a@gmail.com', '0000-00-00', '0000-00-00', 1, 1),
(19, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Abrar', 3232296612, 'abrar1409a@gmail.com', '0000-00-00', '0000-00-00', 1, 1),
(20, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Abrar', 3232296612, 'abrar1409a@gmail.com', '0000-00-00', '0000-00-00', 1, 1),
(21, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Lorem', 3232296612, 'abrar1409a@gmail.com', '0000-00-00', '0000-00-00', 1, 2),
(22, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Lorem', 3232296612, 'abrar1409a@gmail.com', '0000-00-00', '0000-00-00', 1, 2),
(23, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Lorem', 3232296612, 'abrar1409a@gmail.com', '2020-02-11', '0000-00-00', 1, 2),
(24, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Lorem', 3232296612, 'abrar1409a@gmail.com', '2020-02-11', '2020-02-13', 1, 2),
(25, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Lorem', 3232296612, 'abrar1409a@gmail.com', '2020-02-11', '2020-02-13', 1, 2),
(26, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Lorem', 3232296612, 'abrar1409a@gmail.com', '2020-02-11', '2020-02-13', 1, 2),
(27, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Lorem', 3232296612, 'abrar1409a@gmail.com', '2020-02-11', '2020-02-13', 1, 2),
(28, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Lorem', 3232296612, 'abrar1409a@gmail.com', '2020-02-11', '2020-02-13', 1, 2),
(29, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Lorem', 3232296612, 'abrar1409a@gmail.com', '2020-02-11', '2020-02-13', 1, 2),
(30, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Lorem', 3232296612, 'abrar1409a@gmail.com', '2020-02-11', '2020-02-13', 1, 2),
(31, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Lorem', 3232296612, 'abrar1409a@gmail.com', '2020-02-11', '2020-02-13', 1, 2),
(32, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Abrar', 3232296612, 'abrar1409a@gmail.com', '2020-02-12', '2020-02-12', 1, 1),
(33, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Abrar', 3232296612, 'abrar1409a@gmail.com', '2020-02-12', '2020-02-12', 1, 1),
(34, 'http://localhost/Planner/hotel.php?Hotel_Id=1', 'HOTEL BADAR', 'Abrar', 3232296612, 'abrar1409a@gmail.com', '2020-02-12', '2020-02-12', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hotels_reviews`
--

CREATE TABLE `hotels_reviews` (
  `Hotel_Review_Id` int(100) NOT NULL,
  `Hotel_Id` int(100) NOT NULL,
  `Hotel_Review_Name` varchar(100) NOT NULL,
  `Hotel_Review_Email` varchar(100) NOT NULL,
  `Hotel_Review_Reviews` varchar(100) NOT NULL,
  `Hotel_Review_Details` varchar(1000) NOT NULL,
  `Hotel_Review_Date` varchar(100) NOT NULL,
  `Hotel_Review_isApproved` int(100) NOT NULL,
  `Hotel_Review_isTrashed` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotels_reviews`
--

INSERT INTO `hotels_reviews` (`Hotel_Review_Id`, `Hotel_Id`, `Hotel_Review_Name`, `Hotel_Review_Email`, `Hotel_Review_Reviews`, `Hotel_Review_Details`, `Hotel_Review_Date`, `Hotel_Review_isApproved`, `Hotel_Review_isTrashed`) VALUES
(1, 3, 'abrar', 'mabrar@digitaleggheads.com', '1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem. Duis quis tempor nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus.', '0000-00-00', 1, 1),
(2, 2, 'hassan', 'Hassan@digitaleggheads.com', '3', 'Amazing ', '0000-00-00', 1, 1),
(3, 3, 'Safeer', 'safeer@digitaleggheads.com', '2', 'Amazing Services', '0000-00-00', 1, 1),
(4, 3, 'Abrar', 'abrar@dgitaleggehads.com', '3', 'Lorem', '0000-00-00', 1, 1),
(5, 3, 'aqeel', 'abrar@dgitaleggehads.com', '4', 'Lorem', '0000-00-00', 1, 1),
(6, 2, 'Abrar', 'abrar@dgitaleggehads.com', 'Excellent', 'Lorem', '0000-00-00', 0, 1),
(7, 2, 'Abrar', 'abrar@dgitaleggehads.com', 'Excellent', 'Lorem', '0000-00-00', 0, 1),
(8, 1, 'Safeer', 'abrar@dgitaleggehads.com', '5', 'Testing', '0000-00-00', 0, 1),
(9, 1, 'Shafiqa', 'shafiqa.rattani@gmail.com', '4', 'Testing', '0000-00-00', 0, 1),
(10, 1, 'Shafiqa', 'shafiqa.rattani@gmail.com', '4', 'Testing', '0000-00-00', 0, 1),
(11, 1, 'Shafiqa', 'shafiqa.rattani@gmail.com', '4', 'Testing', '0000-00-00', 0, 1),
(12, 1, 'Shafiqa', 'shafiqa.rattani@gmail.com', '4', 'Testing', '0000-00-00', 0, 1),
(13, 1, 'Shafiqa', 'shafiqa.rattani@gmail.com', '4', 'Testing', '0000-00-00', 0, 1),
(14, 1, 'Shafiqa', 'shafiqa.rattani@gmail.com', '4', 'Testing', '0000-00-00', 0, 1),
(15, 1, 'Shafiqa', 'shafiqa.rattani@gmail.com', '4', 'Testing', '0000-00-00', 0, 1),
(17, 1, 'Shafiqa', 'shafiqa.rattani@gmail.com', '4', 'Testing', '0000-00-00', 0, 1),
(21, 3, 'Shahwar', 'Shahwar@digitaleggheads.com', '5', 'Testing\r\n', '2020-02-12', 1, 1),
(22, 3, 'Shahwar', 'Shahwar@digitaleggheads.com', '4', 'Testing\r\n', '2020-02-12', 0, 1),
(23, 3, 'Ayesha', 'ayesha@digitaleggheads.com', '4', 'Testing', '2020-02-13', 1, 1),
(24, 2, 'Mujtaba', 'mujtaba@digitaleggheads.com', '5', 'Testing', '2020-02-13', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`Hotel_Id`);

--
-- Indexes for table `hotels_gallery`
--
ALTER TABLE `hotels_gallery`
  ADD PRIMARY KEY (`Gallery_Id`);

--
-- Indexes for table `hotels_queries`
--
ALTER TABLE `hotels_queries`
  ADD PRIMARY KEY (`Hotel_Query_Id`);

--
-- Indexes for table `hotels_reviews`
--
ALTER TABLE `hotels_reviews`
  ADD PRIMARY KEY (`Hotel_Review_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `User_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `Hotel_Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `hotels_gallery`
--
ALTER TABLE `hotels_gallery`
  MODIFY `Gallery_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hotels_queries`
--
ALTER TABLE `hotels_queries`
  MODIFY `Hotel_Query_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `hotels_reviews`
--
ALTER TABLE `hotels_reviews`
  MODIFY `Hotel_Review_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
