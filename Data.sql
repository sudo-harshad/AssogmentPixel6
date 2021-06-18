-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 18, 2021 at 06:34 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `Data`
--

CREATE TABLE `Data` (
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mobno` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `profilephoto` text NOT NULL,
  `graduation type` varchar(20) NOT NULL,
  `passout` int(4) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `specialisation` varchar(50) NOT NULL,
  `college` varchar(40) NOT NULL,
  `primaryskills` varchar(50) NOT NULL,
  `secondaryskills` varchar(50) NOT NULL,
  `certification` varchar(100) NOT NULL,
  `pitch` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Data`
--

INSERT INTO `Data` (`fname`, `lname`, `gender`, `mail`, `mobno`, `city`, `state`, `profilephoto`, `graduation type`, `passout`, `grade`, `specialisation`, `college`, `primaryskills`, `secondaryskills`, `certification`, `pitch`) VALUES
('Harshad', 'Meshram', 'male', 'hmeshram4@gmail.com', '0', 'Manchar', 'Maharshtra', 'image', 'undergraduate', 2021, '79.69%', 'Specialization', 'college', 'Primary Skills', 'Secondary Skills', 'certifications', 'dsfsdfsdfdsfdsf'),
('Harshad', 'Meshram', 'male', 'hmeshram4@gmail.com', '0', 'Manchar', 'Maharshtra', 'image', 'undergraduate', 2021, '79.69%', 'Specialization', 'college', 'Primary Skills', 'Secondary Skills', 'certifications', 'dsfsdfsdfdsfdsf'),
('Harshad', 'Meshram', 'male', 'hmeshram4@gmail.com', '0', 'Pune', 'fiat', 'image', 'undergraduate', 2021, '79.69%', 'asdasd', 'asdassada', 'sdasdas', 'dassdadsaas', 'dsasdasdsd', 'asdasdsdasdadsa'),
('Harshad', 'Meshram', 'male', 'hmeshram4@gmail.com', '0', 'Pune', 'Maharshtra', 'image', 'undergraduate', 2020, '79.69', 'asdasdsa', 'sdasdsada', 'sdasdasdasdas', 'dasdasdas', 'dasddsadasd', 'sadsadsadsasasasadasdssadasdads'),
('Harshad', 'Meshram', 'male', 'hmeshram4@gmail.com', '0', 'Pune', 'Maharshtra', 'image', 'undergraduate', 2019, '79.69', '20.32', '45', '4545', '455454', '4545455', '78787878878788888778787'),
('Harshad', 'Meshram', 'male', 'hmeshram4@gmail.com', '0', 'Pune', 'Maharshtra', 'image', 'undergraduate', 2019, '79.69', '20.32', '45', '4545', '455454', '4545455', '78787878878788888778787'),
('Harshad', 'Meshram', 'male', 'hmeshram4@gmail.com', '0', 'Pune', 'Maharshtra', 'image', 'undergraduate', 2019, '79.69', '20.32', '45', '4545', '455454', '4545455', '78787878878788888778787'),
('Harshad', 'Meshram', 'male', 'hmeshram4@gmail.com', '0', 'Pune', 'Maharshtra', 'image', 'undergraduate', 2019, '79.69', '20.32', '45', '4545', '455454', '4545455', '78787878878788888778787'),
('Harshad', 'Meshram', 'male', 'hmeshram4@gmail.com', '0', 'Pune', 'Maharshtra', 'image', 'undergraduate', 2019, '79.69', '20.32', '45', '4545', '455454', '4545455', '78787878878788888778787'),
('Harshad', 'Meshram', 'male', 'hmeshram4@gmail.com', '0', 'Pune', 'Maharshtra', 'image', 'undergraduate', 2019, '79.69', '20.32', '45', '4545', '455454', '4545455', '78787878878788888778787'),
('Harshad', 'Meshram', 'male', 'hmeshram4@gmail.com', '0', 'Manchar', 'Maharshtra', 'image', 'undergraduate', 2021, '79.69', 'Java', 'GCOEARA', 'JAVA', 'WEB', 'WEB DEVELOPMENT', 'ChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarh'),
('Harshad', 'Meshram', 'male', 'hmeshram4@gmail.com', '0', 'Manchar', 'Maharshtra', 'image', 'undergraduate', 2021, '79.69', 'Java', 'GCOEARA', 'JAVA', 'WEB', 'WEB DEVELOPMENT', 'ChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarhChandigarh'),
('Harshad', 'Meshram', 'male', 'hmeshram4@gmail.com', '0', 'Manchar', 'Maharshtra', 'image', 'undergraduate', 2021, '79.69', 'Java', 'GCOEARA', 'JAVA', 'WEB', 'Web Development', 'Harshad MeshramHarshad MeshramHarshad MeshramHarshad MeshramHarshad MeshramHarshad MeshramHarshad MeshramHarshad MeshramHarshad MeshramHarshad MeshramHarshad MeshramHarshad Meshram'),
('Harshad', 'Meshram', 'male', 'hmeshram4@gmail.com', '0', 'Pune', 'Maharshtra', 'image', 'undergraduate', 2021, '79.69', 'Computer', 'GCOEARA', 'Java', 'Web', 'Web Development', 'harshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshadharshad'),
('Swara', 'Meshram', 'male', 'hmeshram4@gmail.com', '83900151612', 'adjafhdshfdsfsd', 'Maharshtra', 'image', 'undergraduate', 2021, '79.69', 'java', 'gpm', 'java', 'java', 'java', 'harshad meshramharshad meshramharshad meshramharshad meshramharshad meshramharshad meshramharshad meshramharshad meshramharshad meshramharshad meshramharshad meshram'),
('Harshad', 'Meshram', 'male', 'hmeshram4@gmail.com', '08390015612', 'Pune', 'Maharshtra', 'image', 'Graduate', 2020, '79.69', '45', '32', '123', '234', '345', '4564566'),
('Harshad', 'Meshram', 'male', 'hmeshram4@gmail.com', '08390015612', 'Pune', 'Maharshtra', 'image', 'Under graduate', 2021, 'wwe', 'weweewwe', 'weweewwe', 'wweweewew', 'ewweewwe', 'ewewwe', 'ewewewewwewewweew'),
('Harshad', 'Meshram', 'male', 'hmeshram4@gmail.com', '08390015612', 'Pune', 'Maharshtra', 'image', 'Under graduate', 2021, 'wwe', 'weweewwe', 'weweewwe', 'wweweewew', 'ewweewwe', 'ewewwe', 'ewewewewwewewweew'),
('Harshad', 'Meshram', 'male', 'hmeshram4@gmail.com', '08390015612', 'Pune', 'Maharshtra', 'image', 'Under graduate', 2021, 'wwe', 'weweewwe', 'weweewwe', 'wweweewew', 'ewweewwe', 'ewewwe', 'ewewewewwewewweew'),
('Harshad', 'Meshram', 'male', 'hmeshram4@gmail.com', '08390015612', 'Pune', 'Maharshtra', 'image', 'Under graduate', 2021, 'wwe', 'weweewwe', 'weweewwe', 'wweweewew', 'ewweewwe', 'ewewwe', 'ewewewewwewewweew'),
('Harshad', 'Meshram', 'male', 'hmeshram4@gmail.com', '08390015612', 'Pune', 'Maharshtra', 'image', 'Under graduate', 2021, 'wwe', 'weweewwe', 'weweewwe', 'wweweewew', 'ewweewwe', 'ewewwe', 'ewewewewwewewweew'),
('Kundan', 'Meshram', 'male', 'hmeshram4@gmail.com', '08390015612', 'Pune', 'Maharshtra', 'image', 'Under graduate', 2021, 'asdsadsada', 'sdsadadssa', 'asdsdasdaa', 'sddsasadasdas', 'ddasdssadasdasd', 'dsasadsadasd', 'sdadasadssaddsasadsdadsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaasdasdasdasdassaddsasdsda');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
