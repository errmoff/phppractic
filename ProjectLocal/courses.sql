-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2019 at 12:10 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courses`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CategoryId` int(8) NOT NULL,
  `CategoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryId`, `CategoryName`) VALUES
(1, 'Marketing'),
(2, 'Catering'),
(3, 'Sewing and home science'),
(4, 'The construction and Metalworking'),
(5, 'IT and Multimedia'),
(6, 'Transport and logistics'),
(7, 'Automatic'),
(8, 'Languages'),
(9, 'Tourism'),
(10, 'Materials processing');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `UserId` int(8) NOT NULL,
  `CourseId` int(8) NOT NULL,
  `Comment` varchar(200) NOT NULL,
  `CommentDate` varchar(50) NOT NULL,
  `CommentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`UserId`, `CourseId`, `Comment`, `CommentDate`, `CommentId`) VALUES
(12, 6, 'Спасибо, очень познавательно. Учитывая то, что курсы бесплатные - это просто подарок.', '2019-11-04 12:27:55', 18),
(11, 6, 'Интересный курс. Было интересно узнать что-то новое даже с учётом стажа программиста на JAVA 6 лет. Спасибо!', '2019-11-04 12:58:59', 21);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CourseId` int(8) NOT NULL,
  `CategoryId` int(8) NOT NULL,
  `CourseName` varchar(30) NOT NULL,
  `CourseDesc` text NOT NULL,
  `CourseTime` varchar(20) NOT NULL,
  `CourseDate` varchar(30) NOT NULL,
  `CourseLanguage` varchar(30) NOT NULL,
  `CoursePlace` varchar(30) NOT NULL,
  `CoursePrice` varchar(30) NOT NULL,
  `StatusId` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CourseId`, `CategoryId`, `CourseName`, `CourseDesc`, `CourseTime`, `CourseDate`, `CourseLanguage`, `CoursePlace`, `CoursePrice`, `StatusId`) VALUES
(1, 1, 'Основы маркетинга', 'Целевая группа:\r\nПредприниматели, работники торговли и маркетинга не имеющие специального образования.\r\nTребования: среднее образование.', '40 часов', '12.09.2019 - 10.10.2019', 'RUS', 'Jõhvi', 'Бесплтано', 2),
(2, 2, 'Технология изготовления просты', 'Участник курса, прошедший обучение:\r\n- использует сырье и инструменты, необходимые для изготовления карамели;\r\n- варит различные карамельные смеси\r\n- изготавливает карамельные украшения и формы, используя правильные и безопасные\r\nметоды работы.', '40 часов', 'Начало в Сентябре', 'RUS', 'Kutse 13, Jõhvi', 'Бесплтано', 1),
(3, 1, 'Основы интернет-маркетинга', 'Курс для небольшого погружения в сферу маркетинга. Вы научитесь создавать группу в социальной сети, наполнять её контентом и привлекать первых потенциальных клиентов. Изучите стратегии успешных интернет-компаний, у которых можно перенять опыт и определите вектор развития собственного дела', '30 часов', '13.01.2020 - 17.02.2020', 'RUS', 'Narva', '30 Euro', 1),
(4, 1, 'Основы маркетинга', 'Целевая группа:\r\nПредприниматели, работники торговли и маркетинга не имеющие специального образования.\r\nTребования: среднее образование.', '40 часов', '12.09.2019 - 10.10.2019', 'RUS', 'Jõhvi', '', 2),
(5, 1, 'Основы интернет-маркетинга', 'Курс для небольшого погружения в сферу маркетинга. Вы научитесь создавать группу в социальной сети, наполнять её контентом и привлекать первых потенциальных клиентов. Изучите стратегии успешных интернет-компаний, у которых можно перенять опыт и определите вектор развития собственного дела', '30 часов', '13.01.2020 - 17.02.2020', 'RUS', 'Narva', '30 Euro', 1),
(6, 5, 'JAVA EE', 'desc', '3 years', '11/04/2019', 'GER', 'Hamburg, Hollar Strasse 17', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `privileges`
--

CREATE TABLE `privileges` (
  `PrivilegesId` int(8) NOT NULL,
  `PrivilegesName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `privileges`
--

INSERT INTO `privileges` (`PrivilegesId`, `PrivilegesName`) VALUES
(1, 'User'),
(2, 'Admin'),
(3, 'Owner');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `StatusId` int(11) NOT NULL,
  `StatusName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`StatusId`, `StatusName`) VALUES
(1, 'Еще не начался'),
(2, 'В процессе'),
(3, 'Завершен'),
(4, 'Ушел с курса');

-- --------------------------------------------------------

--
-- Table structure for table `usercourses`
--

CREATE TABLE `usercourses` (
  `UserId` int(8) NOT NULL,
  `CourseId` int(8) NOT NULL,
  `CourseRegisterDate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usercourses`
--

INSERT INTO `usercourses` (`UserId`, `CourseId`, `CourseRegisterDate`) VALUES
(3, 1, '2019-10-28 23:07:59'),
(12, 2, '2019-11-04 12:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(8) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `UserEmail` varchar(50) NOT NULL,
  `UserPass` varchar(30) NOT NULL,
  `PrivilegesId` int(8) NOT NULL DEFAULT '1',
  `FirstName` varchar(50) NOT NULL,
  `SecondName` varchar(50) NOT NULL,
  `UserNumber` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `UserName`, `UserEmail`, `UserPass`, `PrivilegesId`, `FirstName`, `SecondName`, `UserNumber`) VALUES
(1, 'Moderator', 'fec@nnet.eu', 'moderator', 2, 'Alexander', 'Shultz', '43636734'),
(3, 'Admin', 'pritulin.vladimir@ivkhk.ee', 'admin', 3, 'Vladimir', 'Pritulin', '55560443'),
(11, 'aivanov', 'aivanov@mail.ru', 'aivanov', 1, 'Andrei', 'Ivanov', '8080032'),
(12, 'mfedorova', 'mfedorova@gmail.com', 'mfedorova', 1, 'Maria', 'Fedorova', '56764576');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CommentId`),
  ADD KEY `CourseId` (`CourseId`),
  ADD KEY `UserId_2` (`UserId`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`CourseId`),
  ADD KEY `CategoryId` (`CategoryId`);

--
-- Indexes for table `privileges`
--
ALTER TABLE `privileges`
  ADD PRIMARY KEY (`PrivilegesId`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`StatusId`);

--
-- Indexes for table `usercourses`
--
ALTER TABLE `usercourses`
  ADD PRIMARY KEY (`UserId`,`CourseId`),
  ADD KEY `CourseId` (`CourseId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD UNIQUE KEY `UserEmail` (`UserEmail`),
  ADD KEY `PrivilegesId` (`PrivilegesId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoryId` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `CommentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `CourseId` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `privileges`
--
ALTER TABLE `privileges`
  MODIFY `PrivilegesId` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `StatusId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`CourseId`) REFERENCES `course` (`CourseId`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`UserId`) REFERENCES `users` (`UserId`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`CategoryId`) REFERENCES `categories` (`CategoryId`);

--
-- Constraints for table `usercourses`
--
ALTER TABLE `usercourses`
  ADD CONSTRAINT `usercourses_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `users` (`UserId`),
  ADD CONSTRAINT `usercourses_ibfk_2` FOREIGN KEY (`CourseId`) REFERENCES `course` (`CourseId`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`PrivilegesId`) REFERENCES `privileges` (`PrivilegesId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
