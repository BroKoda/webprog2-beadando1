-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 02, 2022 at 01:41 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webprog_czako_kavai_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `elismeres`
--

CREATE TABLE `elismeres` (
  `id` int(11) NOT NULL,
  `megnevezes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elismeres`
--

INSERT INTO `elismeres` (`id`, `megnevezes`) VALUES
(1, 'A Magyar Érdemrend középkeresztje'),
(2, 'A Magyar Érdemrend középkeresztje a csillaggal'),
(3, 'A Magyar Köztársasági Érdemrend középkeresztje'),
(4, 'A Magyar Köztársasági Érdemrend középkeresztje a csillaggal'),
(5, 'A Magyar Köztársasági Érdemrend nagykeresztje'),
(6, 'A Magyar Köztársasági Érdemrend tisztikeresztje'),
(7, 'Jászai Mari-díj'),
(8, 'Kiváló művész'),
(9, 'Örökös tag a Halhatatlanok Társulatában'),
(10, 'Érdemes művész'),
(11, 'Farkas–Ratkó-díj'),
(12, 'Kossuth-díj');

-- --------------------------------------------------------

--
-- Table structure for table `kapott`
--

CREATE TABLE `kapott` (
  `ev` year(4) NOT NULL,
  `szineszid` int(11) NOT NULL,
  `elismeresid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kapott`
--

INSERT INTO `kapott` (`ev`, `szineszid`, `elismeresid`) VALUES
(1978, 27, 12),
(1963, 23, 12),
(1959, 14, 7),
(1996, 6, 9),
(2007, 5, 12),
(2006, 12, 6),
(1995, 21, 3),
(1956, 6, 7),
(1966, 6, 10),
(2013, 19, 1),
(1969, 11, 7),
(1955, 17, 12),
(1995, 18, 6),
(2004, 8, 3),
(1994, 1, 12),
(1959, 6, 11),
(1998, 26, 9),
(2000, 19, 12),
(1958, 6, 7),
(1978, 15, 10),
(1967, 15, 11),
(2005, 8, 12),
(1966, 22, 12),
(1977, 12, 7),
(1967, 27, 7),
(1989, 4, 8),
(1980, 24, 11),
(1985, 10, 10),
(1954, 17, 10),
(1973, 8, 10),
(1965, 22, 11),
(1970, 22, 10),
(1980, 1, 7),
(1999, 21, 9),
(1959, 26, 7),
(1997, 7, 9),
(1963, 19, 7),
(1998, 15, 12),
(1962, 22, 7),
(1980, 7, 10),
(1956, 9, 11),
(1978, 28, 7),
(1998, 3, 9),
(1983, 8, 8),
(1971, 16, 10),
(2006, 7, 4),
(1966, 4, 7),
(1997, 17, 9),
(1997, 3, 3),
(1962, 26, 7),
(1985, 7, 12),
(2004, 8, 9),
(1968, 18, 7),
(1988, 25, 8),
(1976, 3, 10),
(2002, 26, 4),
(1960, 13, 10),
(1966, 15, 7),
(1980, 11, 8),
(1958, 23, 10),
(1955, 22, 7),
(1995, 16, 3),
(2008, 25, 3),
(1967, 2, 7),
(1962, 14, 7),
(2000, 14, 12),
(1965, 21, 7),
(1995, 8, 6),
(2007, 11, 4),
(1995, 26, 3),
(1963, 9, 7),
(1954, 18, 7),
(1976, 5, 10),
(1974, 23, 8),
(1994, 5, 3),
(1992, 22, 3),
(1960, 16, 11),
(1989, 18, 8),
(1990, 20, 12),
(1955, 27, 7),
(1973, 16, 12),
(1985, 26, 12),
(1985, 28, 10),
(1978, 4, 10),
(1972, 7, 7),
(1956, 3, 7),
(1980, 25, 10),
(1980, 26, 8),
(1957, 4, 11),
(2014, 28, 12),
(2012, 10, 2),
(1962, 8, 7),
(1974, 15, 7),
(1957, 23, 7),
(2001, 28, 8),
(1957, 13, 7),
(1992, 23, 3),
(1957, 9, 7),
(1998, 22, 4),
(1996, 5, 9),
(2007, 9, 9),
(2003, 11, 9),
(1978, 21, 10),
(1972, 14, 10),
(1973, 6, 12),
(2002, 21, 4),
(1998, 25, 6),
(2007, 1, 6),
(2004, 10, 8),
(1959, 5, 7),
(1991, 25, 12),
(1981, 12, 10),
(1993, 10, 3),
(1986, 2, 10),
(1951, 17, 11),
(1970, 7, 7),
(1970, 17, 8),
(1969, 27, 10),
(1998, 18, 9),
(1992, 4, 12),
(2005, 25, 9),
(1959, 19, 7),
(1963, 21, 7),
(2007, 14, 3),
(1997, 15, 6),
(1977, 25, 7),
(1975, 11, 12),
(1997, 16, 9),
(1997, 18, 12),
(1995, 27, 4),
(1971, 3, 7),
(2001, 24, 10),
(1998, 13, 9),
(1962, 5, 7),
(1983, 21, 8),
(1999, 16, 12),
(1995, 6, 3),
(1999, 12, 9),
(1988, 9, 8),
(2003, 2, 12),
(1974, 22, 8),
(1969, 16, 7),
(1981, 3, 8),
(1982, 5, 8),
(1946, 23, 11),
(2005, 27, 5),
(1990, 12, 8),
(1978, 24, 7),
(1954, 3, 11),
(1997, 23, 9),
(1985, 3, 12),
(1968, 26, 10),
(1970, 6, 8),
(1964, 16, 7),
(1997, 22, 9),
(1996, 27, 9),
(1963, 11, 7),
(1998, 27, 12),
(2013, 24, 8),
(1986, 20, 10),
(2013, 10, 12),
(1984, 19, 10),
(1995, 12, 12),
(1966, 5, 12),
(1970, 9, 10),
(1953, 17, 12),
(1977, 16, 8),
(2002, 6, 4),
(1994, 17, 3),
(1988, 21, 12),
(1967, 8, 7),
(1975, 18, 10),
(1970, 25, 7),
(1981, 14, 8),
(1975, 27, 8);

-- --------------------------------------------------------

--
-- Table structure for table `szinesz`
--

CREATE TABLE `szinesz` (
  `id` int(11) NOT NULL,
  `nev` text NOT NULL,
  `szuletesinev` text DEFAULT NULL,
  `valasztas` date NOT NULL,
  `szuletett` date NOT NULL,
  `szuletesihely` text NOT NULL,
  `elhunyt` date DEFAULT NULL,
  `halalozasihely` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `szinesz`
--

INSERT INTO `szinesz` (`id`, `nev`, `szuletesinev`, `valasztas`, `szuletett`, `szuletesihely`, `elhunyt`, `halalozasihely`) VALUES
(1, 'Andorai Péter', 'Klócza Péter', '2015-03-03', '1948-04-25', 'Budapest', NULL, NULL),
(2, 'Király Levente', 'Kőnig Levente', '2006-09-20', '1937-03-06', 'Budapest', NULL, NULL),
(3, 'Máthé Erzsi', 'Mertz Erzsébet', '2000-08-22', '1927-05-16', 'Budafok', NULL, NULL),
(4, 'Raksányi Gellért', NULL, '2000-08-22', '1925-07-19', 'Szigetvár', '2008-05-20', 'Budapest'),
(5, 'Psota Irén', NULL, '2000-08-22', '1929-03-28', 'Budapest', NULL, NULL),
(6, 'Kállai Ferenc', 'Krampner Ferenc', '2000-08-22', '1925-10-04', 'Gyoma', '2010-07-11', 'Budapest'),
(7, 'Haumann Péter', NULL, '2010-09-21', '1941-05-17', 'Budapest', NULL, NULL),
(8, 'Bodrogi Gyula', NULL, '2007-06-28', '1934-04-15', 'Budapest', NULL, NULL),
(9, 'Berek Kati', 'Berek Katalin', '2000-08-22', '1930-10-07', 'Makó', NULL, NULL),
(10, 'Gera Zoltán', NULL, '2014-04-22', '1923-08-19', 'Szeged', '2014-11-07', 'Budapest'),
(11, 'Avar István', 'Ginsberger István', '2001-02-15', '1931-03-20', 'Egercsehi', '2014-09-13', 'Budapest'),
(12, 'Molnár Piroska', NULL, '2011-04-27', '1945-10-01', 'Ózd', NULL, NULL),
(13, 'Komlós Juci', 'Komlós Júlia', '2002-03-04', '1919-02-20', 'Szabadka', '2011-04-05', 'Budapest'),
(14, 'Szabó Gyula', NULL, '2006-02-07', '1930-07-15', 'Kunszentmárton', '2014-04-04', 'Budapest'),
(15, 'Sztankay István', NULL, '2012-01-24', '1936-02-14', 'Budapest', '2014-09-12', 'Budapest'),
(16, 'Törőcsik Mari', 'Törőcsik Marián', '2000-08-22', '1935-11-23', 'Pély', NULL, NULL),
(17, 'Bessenyei Ferenc', NULL, '2000-08-22', '1919-02-10', 'Hódmezővásárhely', '2004-12-27', 'Lajosmizse'),
(18, 'Zenthe Ferenc', 'Rameshofer Ferenc', '2005-01-18', '1920-04-24', 'Salgóbánya', '2006-07-30', 'Budapest'),
(19, 'Bitskey Tibor', NULL, '2014-09-29', '1929-09-20', 'Rákoskeresztúr', '2015-02-02', 'Budapest'),
(20, 'Cserhalmi György', NULL, '2014-09-29', '1948-02-17', 'Budapest', NULL, NULL),
(21, 'Garas Dezső', 'Grósz Dezső', '2000-08-22', '1934-12-09', 'Budapest', '2011-12-30', 'Budapest'),
(22, 'Sinkovits Imre', NULL, '2000-08-22', '1928-09-21', 'Kispest', '2001-01-18', 'Budapest'),
(23, 'Lukács Margit', NULL, '2000-08-22', '1914-12-21', 'Budapest', '2002-02-03', 'Budapest'),
(24, 'Szacsvay László', 'Szacsvay-Fehér László', '2015-05-12', '1947-10-27', 'Budapest', NULL, NULL),
(25, 'Tordy Géza', NULL, '2008-06-18', '1938-05-01', 'Budapest', NULL, NULL),
(26, 'Agárdy Gábor', 'Arklián Gábor', '2000-08-22', '1922-08-02', 'Szeged', '2006-01-19', 'Budapest'),
(27, 'Darvas Iván', 'Darvas Szilárd', '2000-08-22', '1925-06-14', 'Beje', '2007-06-03', 'Budapest'),
(28, 'Kóti Árpád', NULL, '2014-12-01', '1934-11-15', 'Bucsa', '2015-04-26', 'Debrecen');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(128) NOT NULL,
  `userEmail` varchar(128) NOT NULL,
  `userUid` varchar(128) NOT NULL,
  `userPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userUid`, `userPwd`) VALUES
(1, 'Konrad Kavai', 'kottix96@gmail.com', 'konradkavai', '$2y$10$D0g1CaOYS5M7e7/Xs74zLuBx9LVCjjQ1wHwNGoPvKhzhIkpPKco2u'),
(2, 'Czakó Ákos', 'czakoakos@gmail.com', 'czakoakos', '$2y$10$rb9L.Fsr3275ePd8XYaB3Oln3N4MCtiul8YU5L3.gYR0mpml1U9.a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elismeres`
--
ALTER TABLE `elismeres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `szinesz`
--
ALTER TABLE `szinesz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
