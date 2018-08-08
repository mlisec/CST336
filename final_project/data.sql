-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2018 at 03:26 AM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminId` tinyint(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`adminId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `username`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `catId` int(11) NOT NULL AUTO_INCREMENT,
  `catName` varchar(25) NOT NULL,
  `catDescription` varchar(255) NOT NULL,
  PRIMARY KEY (`catId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catId`, `catName`, `catDescription`) VALUES
(13, 'Comedy', 'Comedy'),
(14, 'Thriller', 'Thriller'),
(15, 'Family', 'Family'),
(16, 'Animation', 'Animation'),
(17, 'Action', 'Action'),
(18, 'Drama', 'Drama'),
(19, 'Mystery', 'Mystery'),
(20, 'Crime', 'Crime'),
(21, 'Romance', 'Romance');

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE IF NOT EXISTS `director` (
  `directorId` int(11) NOT NULL AUTO_INCREMENT,
  `directorName` varchar(50) NOT NULL,
  PRIMARY KEY (`directorId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`directorId`, `directorName`) VALUES
(8, 'Christopher McQuarrie'),
(9, 'Susanna Fogel'),
(10, 'Ol Parker'),
(11, 'Antoine Fuqua'),
(12, 'Genndy Tartakovsky'),
(13, 'Peyton Reed'),
(14, 'Jennifer Yuh Nelson'),
(15, 'Brad Bird'),
(16, 'Aaron Horvath'),
(17, 'Marc Forster'),
(18, 'Robert Zemeckis'),
(19, 'David Fincher'),
(20, 'Steven Soderbergh'),
(21, 'Paul McGuigan'),
(22, 'Bruce A. Evans'),
(23, 'Ryan Coogler'),
(24, 'Stephen Chow'),
(25, 'Christopher Nolan'),
(26, 'Timur Bekmambetov'),
(27, 'Martin Scorsese'),
(29, 'Troy Duffy'),
(30, 'Peter Chelsom'),
(31, 'Richard Curtis'),
(32, 'Adam Brooks');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `movieId` int(11) NOT NULL AUTO_INCREMENT,
  `movieName` varchar(100) NOT NULL,
  `movieYear` int(4) NOT NULL,
  `price` float NOT NULL,
  `movieDescription` varchar(500) NOT NULL,
  `movieImage` varchar(500) NOT NULL,
  `movieBudget` float NOT NULL,
  `movieReview` float NOT NULL,
  `catId` int(11) NOT NULL,
  `directorId` int(11) NOT NULL,
  PRIMARY KEY (`movieId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movieId`, `movieName`, `movieYear`, `price`, `movieDescription`, `movieImage`, `movieBudget`, `movieReview`, `catId`, `directorId`) VALUES
(4, 'Mission: Impossible - Fallout', 2018, 50.99, 'Ethan Hunt and his IMF team, along with some familiar allies, race against time after a mission gone wrong.', 'http://bit.ly/2AJma56', 170, 8.3, 17, 8),
(5, 'Christopher Robin', 2018, 40.99, 'A working-class family man, Christopher Robin, encounters his childhood friend Winnie-the-Pooh, who helps him to rediscover the joys of life.', 'http://bit.ly/2M9jIto', 75000000, 8, 13, 17),
(6, 'The Spy Who Dumped Me', 2018, 30.99, 'Audrey and Morgan are best friends who unwittingly become entangled in an international conspiracy when one of the women discovers the boyfriend who dumped her was actually a spy.', 'http://bit.ly/2OPtsaE', 40000000, 6.4, 13, 9),
(7, 'Mamma Mia! Here We Go Again', 2018, 40.99, 'Five years after the events of Mamma Mia! (2008), Sophie learns about her mother''s past while pregnant herself.', 'http://bit.ly/2ANM0Fn', 75000000, 7.2, 15, 10),
(8, 'The Equalizer 2', 2018, 40.99, 'Robert McCall serves an unflinching justice for the exploited and oppressed, but how far will he go when that is someone he loves?', 'http://bit.ly/2AOWpR6', 62000000, 7.1, 14, 11),
(9, 'Hotel Transylvania 3: Summer Vacation', 2018, 99.99, 'Count Dracula and company participate in a cruise for sea-loving monsters, unaware that their boat is being commandeered by the monster-hating Van Helsing family.', 'http://bit.ly/2AKP4Sq', 80000000, 6.4, 16, 12),
(10, 'Ant-Man and the Wasp', 2018, 44.88, 'As Scott Lang balances being both a Super Hero and a father, Hope van Dyne and Dr. Hank Pym present an urgent new mission that finds the Ant-Man fighting alongside The Wasp to uncover secrets from their past.', 'http://bit.ly/2M09SKX', 162000000, 7.5, 17, 13),
(11, 'The Darkest Minds', 2018, 23.45, 'Imprisoned by an adult world that now fears everyone under 18, a group of teens form a resistance group to fight back and reclaim control of their future.', 'http://bit.ly/2nivcwI', 34000000, 5.5, 14, 14),
(12, 'Incredibles 2', 2018, 24, 'Bob Parr (Mr. Incredible) is left to care for the kids while Helen (Elastigirl) is out saving the world.', 'http://bit.ly/2MsPcaU', 200000000, 8.1, 16, 15),
(13, 'Teen Titans Go! To the Movies', 2018, 55, 'A villain''s maniacal plan for world domination sidetracks five teenage superheroes who dream of Hollywood stardom.', 'http://bit.ly/2MsRJl2', 10000000, 6.9, 16, 16),
(14, 'Forrest Gump', 1994, 7.5, 'The presidencies of Kennedy and Johnson, Vietnam, Watergate, and other history unfold through the perspective of an Alabama man with an IQ of 75.', 'https://bit.ly/2KCoyu6', 55000000, 8.8, 18, 18),
(15, 'Fight Club', 1999, 14.99, 'An insomniac office worker and a devil-may-care soapmaker form an underground fight club that evolves into something much, much more.', 'https://bit.ly/2hGa2Yr', 63000000, 8.8, 18, 19),
(16, 'Ocean''s 11', 2001, 12.97, 'Danny Ocean and his eleven accomplices plan to rob three Las Vegas casinos simultaneously.', 'https://bit.ly/2OPZdjV', 85000000, 7.8, 14, 20),
(17, 'Lucky Number Slevin', 2006, 7.99, 'Slevin is under constant surveillance by relentless Detective Brikowski as well as the infamous assassin Goodkat and finds himself having to hatch his own ingenious plot to get them before they get him.', 'https://bit.ly/2vrAtqb', 30000000, 7.8, 19, 21),
(18, 'Mr. Brooks', 2007, 7.99, 'A well-respected businessman is sometimes controlled by his murder and mayhem-loving alter ego.', 'https://bit.ly/2MuO5rc', 20000000, 7.3, 20, 22),
(19, 'Creed', 2015, 19.99, 'The former World Heavyweight Champion Rocky Balboa serves as a trainer and mentor to Adonis Johnson, the son of his late friend and former rival Apollo Creed.', 'https://bit.ly/2MpMF0R', 40000000, 7.6, 18, 23),
(20, 'Kung Fu Hustle', 2004, 4.99, 'In Shanghai, China in the 1940s, a wannabe gangster aspires to join the notorious "Axe Gang" while residents of a housing complex exhibit extraordinary powers in defending their turf.', 'https://bit.ly/2Moy3ij', 20000000, 7.8, 13, 24),
(21, 'The Dark Knight', 2008, 14.99, 'The Dark Knight must accept one of the greatest psychological and physical tests of his ability to fight injustice.', 'https://bit.ly/2KDr6s6', 180000000, 9, 17, 25),
(22, 'Wanted', 2008, 10.99, 'A frustrated office worker learns that he is the son of a professional assassin and that he shares his father''s superhuman killing abilities.', 'https://bit.ly/2LYMltP', 350000000, 6.7, 17, 26),
(23, 'The Departed', 2006, 11.99, 'An undercover cop and a mole in the police attempt to identify each other while infiltrating an Irish gang in South Boston.', 'https://bit.ly/2vtdwTn', 90000000, 8.5, 20, 27),
(24, 'The Boondock Saints', 1999, 7.99, 'Two Irish Catholic brothers become vigilantes and wipe out Boston''s criminal underworld in the name of God.', 'https://bit.ly/2vykmHt', 7000000, 7.8, 20, 29),
(25, 'Serendipity', 2001, 5.99, 'A couple search for each other years after the night they first met, fell in love, and separated, convinced that one day they''d end up together.', 'https://bit.ly/2OSOXHp', 28000000, 6.9, 21, 30),
(26, 'Love Actually', 2003, 4.99, 'Follows the lives of eight very different couples in dealing with their love lives in various loosely interrelated tales all set during a frantic month before Christmas in London, England.', 'https://bit.ly/2OgN8Dd', 45000000, 7.6, 21, 31),
(27, 'Definitely Maybe', 2008, 4.99, 'A political consultant tries to explain his impending divorce and past relationships to his 11-year-old daughter.', 'https://bit.ly/2OlHjEE', 7000000, 7.2, 21, 32);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
