
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `romance`
--

DROP DATABASE IF EXISTS romance;
CREATE DATABASE IF NOT EXISTS romance;
GRANT ALL PRIVILEGES ON romance.* to 'wowteam'@'localhost' identified by 'wow';
USE romance;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`userName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE IF NOT EXISTS `characters` (
  `charName` varchar(20) NOT NULL,
  `charRealm` varchar(20) NOT NULL,
  `lvl` int(3) NOT NULL,
  `race` int(2) NOT NULL,
  `sex` int(2) Not Null,
  `charClass` int(2) Not Null,
  `Faction` int(1) Not Null,
  `HK` int(15) Not Null,
  PRIMARY KEY (`charName`, `charRealm`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

-- --------------------------------------------------------

CREATE TABLE IF NOT EXISTS `userCharacters` (
	`userId` varchar(50) Not Null,
	`userChar` varchar(20) Not Null,
	`userRealm` varchar(20) Not Null,
	PRIMARY KEY (`userId`, `userChar`, `userRealm`)
)	ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

