-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2017 at 10:08 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emusic`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `album_id` int(11) NOT NULL,
  `album_name` varchar(20) NOT NULL,
  `release_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`album_id`, `album_name`, `release_date`) VALUES
(1, 'Hybrid Theory', '2005-11-03'),
(2, 'One More Light', '2004-11-06'),
(3, 'Amplifier', '2010-10-06'),
(4, 'A Head Full Of Dream', '2013-04-12'),
(5, 'Paradise', '2007-06-03'),
(6, 'Prism', '2013-05-15'),
(7, 'Konvicted', '2006-11-25'),
(8, 'Chor Bazzari', '2014-11-27'),
(9, 'Love Aaj Kal', '2014-09-03'),
(10, 'Ae Dil Hai Mushkil', '2016-10-24'),
(11, 'Purani Yaadein', '1979-11-08');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `artist_id` int(11) NOT NULL,
  `artist_name` varchar(20) NOT NULL,
  `release_count` int(11) NOT NULL,
  `birth_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`artist_id`, `artist_name`, `release_count`, `birth_date`) VALUES
(1, 'Coldplay', 152, '1985-06-02'),
(2, 'Katy Perry', 71, '1991-03-11'),
(3, 'Taylor Swift', 69, '1989-01-08'),
(4, 'Gajendra Verma', 28, '1983-10-29'),
(5, 'Linkin Park', 187, '1979-08-13'),
(6, 'Arijit Singh', 137, '1987-05-30'),
(7, 'Akon', 211, '1973-12-07'),
(8, 'Kishore Kumar', 139, '1937-02-07'),
(9, 'Mohd. Rafi', 155, '1931-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

CREATE TABLE `award` (
  `award_name` varchar(40) NOT NULL,
  `artist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `award`
--

INSERT INTO `award` (`award_name`, `artist_id`) VALUES
('Grammy- Best Singer', 2),
('Filmfare- Best Playback', 6),
('Oscar- Best Band', 1),
('IIFA- Best Male Singer', 4);

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `playlist_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `playlist_name` varchar(20) NOT NULL,
  `song_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`playlist_id`, `username`, `playlist_name`, `song_id`) VALUES
(0, 'tanay', 'party', 102),
(1, 'tanay', 'party', 106),
(1, 'tanay', 'party', 107),
(1, 'tanay', 'party', 108),
(0, 'tanay', 'dsa', 0),
(0, 'tanay', 'bj', 0),
(0, 'tanay', 'hvh', 0),
(0, '', 'kl', 0),
(0, '', 'ndska', 0);

-- --------------------------------------------------------

--
-- Table structure for table `search_history`
--

CREATE TABLE `search_history` (
  `username` varchar(20) NOT NULL,
  `song_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search_history`
--

INSERT INTO `search_history` (`username`, `song_name`) VALUES
('tanay', 'Channa Mereya'),
('tanay', 'roar'),
('tanay', 'Firework'),
('tanay', 'Crawling'),
('tanay', 'Papercut'),
('tanay', 'Paradise'),
('tanay', 'Blank Space'),
('tanay', 'Mann Mera'),
('tanay', 'Channa Mereya'),
('tanay', 'Channa Mereya');

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE `song` (
  `song_id` int(11) NOT NULL,
  `song_name` varchar(20) NOT NULL,
  `song_length` double NOT NULL,
  `version` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  `Genre` varchar(20) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `song`
--

INSERT INTO `song` (`song_id`, `song_name`, `song_length`, `version`, `company`, `year`, `Genre`, `artist_id`, `album_id`) VALUES
(100, 'Channa Mereya', 4.49, '1.0', 'Sony Music', 2016, 'Sad', 6, 10),
(101, 'Ae Dil Hai Mushqil', 5.12, '2.0', 'Sony Music', 2016, 'Sufi', 6, 10),
(102, 'Roar', 3.29, '1.15', 'Red Tube', 2012, 'Classical', 2, 6),
(103, 'Firework', 3.52, '1.0', 'Blue pictures', 2018, 'Classical', 2, 6),
(104, 'In The End', 3.04, '1.0', 'Warner Bros', 2005, 'Non Rap', 5, 1),
(105, 'Crawling', 3.47, '1.2', 'Warner Bros', 2005, 'Non Rap', 5, 1),
(106, 'Papercut', 4.17, '2.03', 'Brownson & Co.', 2005, 'Soft Rock', 5, 1),
(107, 'Up & Up', 6.07, '1.25', 'Henson', 2013, 'Pop', 1, 4),
(108, 'Amazing Day', 5.17, '1.30', 'Brownson & Co.', 2013, 'Pop', 1, 4),
(109, 'Head Full of Dreams', 5.37, '1.0', 'Brownson & Co.', 2013, 'Pop', 1, 4),
(110, 'Paradise', 4.19, '2.05', 'Mitchi', 2011, 'Pop', 1, 5),
(111, 'Hurts Like Heaven', 3.19, '1.0', 'Mitchi', 2011, 'Pop', 1, 5),
(112, 'Up With the Birds', 3.45, '2.0', 'Mitchi', 2011, 'Pop', 1, 5),
(113, 'Blank Space', 3.51, '1.8', 'Big Machine', 2014, 'Rock', 3, 9),
(114, 'Bad Blood', 3.31, '1.0', 'Big Machine', 2014, 'Rock', 3, 9),
(115, 'I Wish You Would', 5.23, '3.05', 'Big Machine', 2014, 'Pop', 3, 9),
(116, 'Mann Mera', 4.25, '1.0', 'T-Series', 2014, 'Sad', 4, 8),
(117, 'Tughse Door Jo', 4.19, '1.0', 'Pritam House', 2015, 'Sad', 4, 8),
(118, 'Tere Jaisa Yaar', 4.28, '1.0', 'Pritam House', 1978, 'Classical', 8, 11),
(119, 'Likhe Jo Khat', 5.2, '1.0', 'T-Series', 1972, 'Classical', 9, 11),
(120, 'Pal Pal Dil Ke Paas', 5.28, '1.28', 'T-Series', 1965, 'Classical', 8, 11),
(121, 'Good Goodbye', 4.14, '1.0', 'White Hill Music', 2017, 'Pop', 5, 2),
(122, 'Nobody Can Save Me', 5.39, '1.0', 'White Hill Music', 2017, 'Pop', 5, 2),
(123, 'Smack That', 4.55, '1.0', 'Big Machine', 2006, 'Rock', 7, 7),
(124, 'Dil Aisa Kisi Ne', 6.29, '1.27', 'Yash Raj Music', 1974, 'Sad', 9, 11),
(125, 'I Wanna Love You', 3.28, '1.35', 'Big Guns', 2006, 'Rock', 7, 7),
(126, 'Badnaam', 4.28, '1.07', 'T-Series', 2017, 'Rock', 4, 3),
(127, 'Pal Do Pal Ka Shayar', 7.08, '1.0', 'T-Series', 1985, 'Classical', 8, 11),
(128, 'Gulabi Aankhein', 4.27, '1.37', 'T-Series', 1974, 'Classical', 9, 11),
(129, 'Fix You', 4.29, '2.4', 'White Hill Music', 2014, 'Rock', 1, 4),
(130, 'Numb', 4.16, '1.24', 'Big Guns', 2003, 'Rock', 5, 1),
(131, 'LOVE STORY', 4.6, '1.0', 'SONY MUSIC', 2011, 'sad', 1, 8),
(132, 'sd', 4.2, '1.0', 'jjb', 2017, 'jhj', 1, 1);

--
-- Triggers `song`
--
DELIMITER $$
CREATE TRIGGER `increment` AFTER INSERT ON `song` FOR EACH ROW BEGIN
UPDATE artist SET release_count=release_count+1 where artist.artist_id=NEW.artist_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(40) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `isSubscribed` int(11) NOT NULL DEFAULT '0',
  `Fine` int(11) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `name`, `dob`, `email`, `Gender`, `Address`, `isSubscribed`, `Fine`, `password`) VALUES
('tanay', 'tanay mishra', '1998-01-04', 'tanaymishr@gmail.com', 'm', 'sikar', 0, 0, '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`artist_id`);

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`song_id`),
  ADD UNIQUE KEY `song_id` (`song_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`,`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `artist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `song_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
