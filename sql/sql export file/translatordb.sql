-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 02:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `translatordb`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE `client` (
  `client_id` int(6) NOT NULL,
  `client_user` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_pwd` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_fname` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_lname` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_phone` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_user`, `client_pwd`, `client_fname`, `client_lname`, `client_phone`, `client_email`) VALUES
(1, 'nortolan', 'ortolan1', 'Nathan', 'Ortolan', '7071234567', 'nathan.ortolen@humboldt.edu'),
(2, 'mjordan', 'jordan2', 'Michael', 'Jordan', '3231234567', 'mj23@chicagobulls.edu'),
(3, 'jlopez', 'lopez3', 'Jennifer', 'Lopez', '3233425733', 'jlo@selenas.edu'),
(4, 'jvorgees', 'vorgees4', 'Jason', 'Vorgees', '2121212122', 'jasonv@killyou.edu'),
(5, 'Dkennedy', 'kennedy5', 'Dom', 'Kennedy', '3234321234', 'domk@party.edu'),
(6, 'jconn', 'conn5', 'Jared', 'Conn', '2094548981', 'jconn33@yahoo.com'),
(7, 'rzeze', 'Rulupio52', 'Zeze', 'Rulupio', '2095121234', 'zezezeze@gmail.com'),
(8, 'CSantana', 'Santana53', 'Carlos', 'Santana', '2094742345', 'carlosles@tractor12.com'),
(9, 'tdy1', 'okay4', 'Dee', 'Lee', '7078889999', 'okay@gmail.com'),
(10, 'goldm', 'Mike', 'Gold', 'goldm', '5304561236', 'mrgold@gmail.com'),
(11, 'coalmanb', 'Boba', 'Coalman', 'coalmanb', '589652314', 'CoalmanB@gmail.com'),
(12, 'iamironman', 'Ironman jr', 'Ironman', 'iamironman', '564789321', 'iamironman@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE `languages` (
  `lang_id` int(3) NOT NULL,
  `lang` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`lang_id`, `lang`) VALUES
(1, 'English'),
(2, 'Spanish'),
(3, 'Tagalog'),
(4, 'Vietnamese'),
(5, 'Arabic'),
(6, 'French'),
(7, 'Korean'),
(8, 'Russian'),
(9, 'Haitian'),
(10, 'Hindi'),
(11, 'Portuguese'),
(12, 'Itallian'),
(13, 'Polish'),
(14, 'Urdu'),
(15, 'German'),
(16, 'Polish'),
(17, 'Japanese'),
(18, 'Telugu'),
(19, 'Persian'),
(20, 'Gujarati'),
(21, 'Bengali'),
(22, 'Taikadai'),
(23, 'Greek'),
(24, 'Punjabi'),
(25, 'Tamil'),
(26, 'Armenian'),
(27, 'Serbocroatian'),
(28, 'Hebrew'),
(29, 'Hmong'),
(30, 'Bantu'),
(31, 'Khmer'),
(32, 'Navajo');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE `location` (
  `loca_id` int(4) NOT NULL,
  `zipcode` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loc_state` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`loca_id`, `zipcode`, `loc_state`, `city`) VALUES
(1, '95503', 'California', 'Eureka'),
(2, '36104', 'Alabama', 'Montgomery'),
(3, '99801', 'Alaska', 'Juneau'),
(4, '85001', 'Arizona', 'Little Rock'),
(5, '72201', 'California', 'Sacramento'),
(6, '95814', 'Colorado', 'Denver'),
(7, '80202', 'Connecticut', 'Hartford'),
(8, '06103', 'Delaware', 'Dover'),
(9, '19901', 'Florida', 'Tallahassee'),
(10, '30303', 'Georgia', 'Atlanta'),
(11, '96813', 'Hawaii', 'Honolulu'),
(12, '83702', 'Idaho', 'Boise'),
(14, '62701', 'Illinois', 'Springfied'),
(15, '46225', 'Indiana', 'Indianapolis'),
(16, '50309', 'Iowa', 'Des Moines'),
(17, '40601', 'Kentucky', 'Frankfort'),
(18, '70802', 'Louisiana', 'Baton Rouge'),
(19, '04330', 'Maine', 'Augusta'),
(20, '21401', 'Maryland', 'Annapolis'),
(21, '02201', 'Massachusetts', 'Boston'),
(22, '66603', 'Kansas', 'Topeka'),
(23, '48933', 'Michigan', 'Lansing'),
(24, '55102', 'Minnesota', 'Saint Paul'),
(25, '39205', 'Mississippi', 'Jackson'),
(26, '65101', 'Missouri', 'Jefferson City'),
(27, '59623', 'Montana', 'Helena'),
(28, '68502', 'Nebraska', 'Lincoln'),
(29, '89701', 'Nevada', 'Carson City'),
(30, '03301', 'New Hampshire', 'Concord'),
(31, '08608', 'New Jersey', 'Trenton'),
(32, '87501', 'New Mexico', 'Santa Fe'),
(33, '12207', 'New York', 'Albany'),
(34, '27601', 'North Carolina', 'Raleigh'),
(35, '58501', 'North Dakata', 'Bismarck'),
(36, '43215', 'Ohio', 'Columbus'),
(37, '73102', 'Oklahoma', 'Oklahoma City'),
(38, '97301', 'Oregon', 'Salem'),
(39, '17101', 'Pennsyvania', 'Harrisburg'),
(40, '02903', 'Rhode Island', 'Providence'),
(41, '29217', 'South Carolina', 'Columbia'),
(42, '57501', 'South Dakota', 'Pierre'),
(43, '37219', 'Tennessee', 'Nashville'),
(44, '78701', 'Texas', 'Austin'),
(45, '84111', 'Utah', 'Salt Lake City'),
(46, '05602', 'Vermont', 'Montpelier'),
(47, '23219', 'Virgina', 'Richmond'),
(48, '98507', 'Washington', 'Olympia'),
(49, '25301', 'West Virginia', 'Charleston'),
(50, '53703', 'Wisconsin', 'Madison');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE `review` (
  `trans_id` int(5) NOT NULL,
  `client_id` int(6) NOT NULL,
  `note` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`trans_id`, `client_id`, `note`) VALUES
(1, 1, 'Great service next time bring cookies'),
(1, 2, 'Do not work with this person'),
(1, 3, 'Bad service'),
(1, 5, 'Great service'),
(1, 6, 'Awesome, will work with again'),
(2, 1, 'Not bad at all'),
(2, 2, 'This person is really good'),
(2, 3, 'Super duper bad service'),
(2, 4, 'Great service'),
(2, 5, 'Awesome would like to work with again'),
(3, 1, 'Not bad at all'),
(3, 2, 'This person is really good'),
(3, 3, 'Impressive'),
(3, 4, 'This person is terrible!'),
(3, 5, 'Thank you so much!');

-- --------------------------------------------------------

--
-- Table structure for table `translator`
--

DROP TABLE IF EXISTS `translator`;
CREATE TABLE `translator` (
  `trans_id` int(5) NOT NULL,
  `loca_id` int(4) DEFAULT NULL,
  `trans_user` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trans_pwd` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trans_fname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trans_lname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trans_rate` decimal(6,2) DEFAULT NULL,
  `trans_phone` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trans_email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `translator`
--

INSERT INTO `translator` (`trans_id`, `loca_id`, `trans_user`, `trans_pwd`, `trans_fname`, `trans_lname`, `trans_rate`, `trans_phone`, `trans_email`) VALUES
(1, 1, 'jsmith', 'smith1', 'John', 'Smith', '78.00', '7074997000', 'JSmith@hotmail.com'),
(2, 1, 'mboo', 'boo2', 'Mai', 'Boo', '78.00', '7084859384', 'maiboo@yahoo.com'),
(3, 1, 'dyang', 'yang3', 'dao', 'Pentechs', '145.00', '6758474749', 'tdy18@hotmail.com'),
(4, 1, 'pangel', 'pentechs4', 'Angel', 'Pentechs', '45.25', '5994746447', 'Angel4567@gmail.com'),
(5, 1, 'dryan', 'dawson5', 'Ryan', 'Dawson', '15.25', '5991263447', 'Ryan12@gmail.com'),
(6, 1, 'serick', 'stone6', 'Erick', 'Stone', '42.15', '5994744447', 'erick131@gmail.com'),
(7, 1, 'rnick', 'ryder7', 'Nick', 'Ryder', '10.35', '5994741132', 'ryder121@gmail.com'),
(8, 1, 'jos14', 'sjosh8', 'Josh', 'Pentechs', '80.00', '7078574638', 'Pentechs543@gmail.com'),
(9, 1, 'pjared', 'jconn9', 'Jared', 'Pentechs', '60.00', '9585747564', 'Jared45@hotmail.com'),
(10, 1, 'nkevin', 'kevin10', 'Kevin', 'Navarro', '23.00', '4343334211', 'kn5343@humboldt.edu'),
(11, 2, 'sjefferson', 'jsmith11', 'Jefferson', 'Smith', '90.10', '5304998887', 'Jsmith4453@yahoo.com'),
(12, 2, 'tcash', 'cash12', 'Tom', 'Cash', '19.00', '7078565557', 'TomC222@humboldt.edu'),
(13, 2, 'akelly', 'armstrong13', 'Kelly', 'Armstrong', '50.00', '5999685746', 'Armstrong2017@yahoo.com'),
(14, 2, 'lmai', 'mlee14', 'Mai', 'Lee', '16.10', '9164449668', 'MLee345@gmail.com'),
(15, 2, 'tlinda', 'linda15', 'Linda', 'TruLove', '100.00', '5308574638', 'Truelove@gmal.com'),
(16, 2, 'bamy', 'beth16', 'Amy', 'Beth', '139.00', '7045867548', 'Bamy@yahoo.com'),
(17, 2, 'amohammed', 'ali17', 'Mohammed', 'Ali', '45.32', '2095552525', 'butterflystingman@gmail.com'),
(18, 2, 'wadam', 'west18', 'Adam', 'West', '60.20', '2097785858', 'thebatman1966@comcast.net'),
(19, 2, 'bjoe', 'biden19', 'Joe', 'Biden', '24.80', '2098879949', 'bidenbro2009@aol.com'),
(20, 2, 'jesse20', 'baxter20', 'Jesse', 'Baxter', '20.80', '2048879949', 'jbaxter@aol.com'),
(21, 3, 'sarthur', 'sanchez21', 'Arthur', 'Sanchez', '22.80', '2096679949', 'arthursanchez@aol.com'),
(22, 3, 'apatricia', 'patricia22', 'Patricia', 'Alejandre', '19.80', '2098179949', 'pattyale@aol.com'),
(23, 3, 'troger', 'tank23', 'Roger', 'Tank', '20.00', '2098379949', 'rogertank@dice.com'),
(24, 3, 'vbarry', 'volcom24', 'Barry', 'Volcom', '14.80', '2096279949', 'barryvol@dice.com'),
(25, 3, 'kharry', 'knotts25', 'Harry', 'Knotts', '24.80', '2098979949', 'bidenbro2009@aol.com'),
(26, 3, 'bmicah', 'bire26', 'Micah', 'Bire', '13.80', '2053179949', 'micahbire@aol.com'),
(27, 3, 'rlidia', 'reed27', 'Lidia', 'Reed', '29.00', '2014279949', 'lidiareed@gmail.com'),
(28, 3, 'dbrian', 'dena28', 'Brain', 'Dena', '24.10', '2098079949', 'briandena@gmail.com'),
(29, 3, 'fvictor', 'flores29', 'Victor', 'Flores', '12.80', '2090079949', 'victorflores@gmail.com'),
(30, 3, 'ajhene', 'aiko30', 'Jhene', 'Aiko', '24.80', '2000079949', 'jheneaiko@gmail.com'),
(31, 4, 'sbig', 'sean31', 'Big', 'Sean', '24.80', '2098609949', 'bigsean@idfwu.com'),
(32, 4, 'bchris', 'brown32', 'Chris', 'Brown', '124.80', '2098129949', 'brownch@aol.com'),
(33, 4, 'cluda', 'cris33', 'Luda', 'Cris', '51.10', '2098119949', 'ludacris2@gmail.com'),
(34, 4, 'gruben', 'galindo34', 'Ruben', 'Galindo', '22.22', '2098889949', 'rgali22@github.com'),
(35, 4, 'bcassandra', 'baltazar35', 'Cassandra', 'Baltazar', '18.00', '2094569949', 'cassba@gmail.com'),
(36, 4, 'ibilly', 'idol36', 'Billy', 'Idol', '11.80', '2099879949', 'billyidol@aol.com'),
(37, 4, 'cjazmine', 'chilly37', 'Jazmine', 'Chilly', '11.00', '2099879949', 'jazchill.com'),
(38, 4, 'tbryson', 'tiller38', 'Bryson', 'Tiller', '61.80', '2099879949', 'brysontiller@aol.com'),
(39, 4, 'wroy', 'woods39', 'Roy', 'Woods', '41.10', '2099879949', 'roywoods22@aol.com'),
(40, 4, 'msanti', 'malanti40', 'Santi', 'Malanti', '15.80', '2099879949', 'sant34@gmail.com'),
(41, 5, 'dmichelle', 'dena41', 'Michelle', 'Dena', '31.80', '2099879949', 'billyidol@aol.com'),
(42, 1, 'Pete134', 'pete', 'Pete', 'Salaman', '0.00', '514562365', 'pete@google.com'),
(43, 1, 'syaj97', 'kaijayko', 'sandie', 'yaj', '35.00', '4569874521', 'vangshfkjs@gmail.com'),
(44, 1, 'syaj97', 'kaijayko', 'sandi', 'yaj', '25.00', '21564563', 'asfjhahsa@gmail.com'),
(45, 1, 'sharkfin', 'sharkfin', 'babyshark', 'rainbow', '456.00', '456321456', 'greatwhiteshark@gmail.com'),
(46, 1, 'kfa', 'okay', 'kobe', 'Fa', '98.00', '456321456', 'okay@hotmail.com'),
(49, 21, 'dave123', 'dave123', 'Dave', 'Armstrong', '100.00', '7074456352', 'dave123@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `tran_lang`
--

DROP TABLE IF EXISTS `tran_lang`;
CREATE TABLE `tran_lang` (
  `trans_id` int(5) NOT NULL,
  `lang_id` int(3) NOT NULL,
  `can_write` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tran_lang`
--

INSERT INTO `tran_lang` (`trans_id`, `lang_id`, `can_write`) VALUES
(1, 1, 'no'),
(1, 30, 'yes'),
(1, 31, 'yes'),
(2, 1, 'no'),
(2, 2, 'yes'),
(2, 8, 'no'),
(2, 23, 'yes'),
(3, 1, 'no'),
(3, 13, 'yes'),
(3, 20, 'yes'),
(3, 29, 'yes'),
(4, 1, 'no'),
(4, 12, 'yes'),
(4, 16, 'yes'),
(5, 1, 'no'),
(5, 18, 'yes'),
(6, 1, 'yes'),
(6, 4, 'yes'),
(6, 28, 'yes'),
(7, 1, 'no'),
(7, 4, 'yes'),
(7, 29, 'yes'),
(8, 1, 'no'),
(8, 5, 'yes'),
(8, 6, 'yes'),
(8, 19, 'yes'),
(10, 1, 'no'),
(10, 9, 'yes'),
(10, 24, 'yes'),
(10, 25, 'yes'),
(11, 1, 'no'),
(11, 2, 'yes'),
(11, 3, 'yes'),
(11, 7, 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`lang_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`loca_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`trans_id`,`client_id`),
  ADD KEY `FK_reviewclient` (`client_id`);

--
-- Indexes for table `translator`
--
ALTER TABLE `translator`
  ADD PRIMARY KEY (`trans_id`),
  ADD KEY `FK_translatorlocation` (`loca_id`);

--
-- Indexes for table `tran_lang`
--
ALTER TABLE `tran_lang`
  ADD PRIMARY KEY (`trans_id`,`lang_id`),
  ADD KEY `FK_trans_langlanguages` (`lang_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `lang_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `loca_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `translator`
--
ALTER TABLE `translator`
  MODIFY `trans_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `FK_reviewclient` FOREIGN KEY (`client_id`) REFERENCES `client` (`client_id`),
  ADD CONSTRAINT `FK_reviewtranslator` FOREIGN KEY (`trans_id`) REFERENCES `translator` (`trans_id`);

--
-- Constraints for table `translator`
--
ALTER TABLE `translator`
  ADD CONSTRAINT `FK_translatorlocation` FOREIGN KEY (`loca_id`) REFERENCES `location` (`loca_id`);

--
-- Constraints for table `tran_lang`
--
ALTER TABLE `tran_lang`
  ADD CONSTRAINT `FK_trans_langlanguages` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`lang_id`),
  ADD CONSTRAINT `FK_trans_langtranslator` FOREIGN KEY (`trans_id`) REFERENCES `translator` (`trans_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;