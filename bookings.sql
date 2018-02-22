/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `mydatabase` DEFAULT CHARACTER SET greek COLLATE greek_general_ci;
USE `mydatabase`;

DROP TABLE IF EXISTS `booking1`;
CREATE TABLE IF NOT EXISTS `booking1` (
  `bookings` int(3) NOT NULL auto_increment,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `Ar` varchar(50) DEFAULT NULL,
  `Re` varchar(50) DEFAULT NULL,
  `adults` int(2) DEFAULT NULL,
  `kids` int(2) DEFAULT NULL,
    `Singleroom` int(2) DEFAULT NULL,
	  `Doubleroom` int(2) DEFAULT NULL,
	    `Tripleroom` int(2) DEFAULT NULL,
		`Quadraroom` int(2) DEFAULT NULL,

   PRIMARY KEY (bookings)
) ENGINE=InnoDB DEFAULT CHARSET=greek;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;