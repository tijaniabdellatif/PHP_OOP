-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 01, 2021 at 11:36 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_grafikat`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `id_category` int(11) DEFAULT NULL,
  `author` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk1` (`id_category`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `date`, `slug`, `id_category`, `author`) VALUES
(1, 'Why You Should Learn PHP?', 'PHP is one of the many server-side languages you can learn to build web sites. It joins other languages such as Java, ASP.NET, Ruby, and R. Eighty percent of the top 10 websites are powered by PHP, including Facebook and Wikipedia. PHP has consistently demonstrated its ability to scale the largest web sites while at the same time having an easier learning curve than other languages. This article explains why you should learn PHP and what it can do for your career.', '2021-06-01 03:29:14', 'PHP,Web developement', 1, 'Tijani abdellatif'),
(23, 'Mean Stack', 'The MEAN stack is a software stack—that is, a set of the technology layers that make up a modern application—that’s built entirely in JavaScript. MEAN represents the arrival of JavaScript as a “full-stack development” language, running everything in an application from front end to back end. Each of the initials in MEAN stands for a component in the stack:\r\n\r\nMongoDB: A database server that is queried using JSON (JavaScript Object Notation) and that stores data structures in a binary JSON format\r\nExpress: A server-side JavaScript framework\r\nAngular: A client-side JavaScript framework\r\nNode.js: A JavaScript runtime', '2021-06-29 12:16:19', 'Nodejs, Web developement', 1, 'Tijani Abdellatif'),
(22, 'Coronavirus', 'Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.\r\n\r\nMost people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.\r\n\r\nThe best way to prevent and slow down transmission is to be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. \r\n\r\nThe COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).', '2021-06-29 09:26:31', 'Health Care, Corona Virus', 2, 'Marcus'),
(24, 'A malaria vaccine with live parasites shows promise in a small trial', 'In a one-two punch, a malaria vaccine in development pairs a shot of the live parasite that causes the disease with a whammy of infection-fighting drugs to immediately quell it.\r\n\r\nThe candidate is the latest vaccine to show promise against a formidable foe, bolstering hopes that an effective shot might be on the horizon. Malaria, a disease caused by the parasite Plasmodium falciparum, affects more than 200 million people around the world every year. In 2019, an estimated 409,000 people died from the mosquito-borne disease, 67 percent of whom were children younger than 5.\r\n\r\nThe live parasite vaccine and drug combo showed 87.5 percent efficacy in a small group of healthy adult participants, researchers reported June 30 in Nature. The live parasite shot — which is followed by a dose of one of two anti-malarial drugs to eliminate the infection — not only protected people from the same strain included in the vaccine, but most people could also fend off a different parasite strain that circulates in Brazil.  \r\n\r\nIf the results hold up in a larger study, “it would be fantastic,” says Wilfred Ndifon, a mathematical biologist at the African Institute for Mathematical Sciences in Kigali, Rwanda, who was not involved in the study. Even as newly emerging diseases like COVID-19 have killed millions and martialed global attention and resources, “we are still falling short of controlling the ones that already exist,” Ndifon says.', '2021-06-30 00:00:00', 'Malaria, Health care, medecine', 3, 'Super Mario'),
(25, 'A Visual Guide to NodeJS Streams', 'magine you have a pile of bricks somewhere. And you want to build a wall with those bricks here. Let’s say you have a friend to help move the bricks. To start building, you now have two options. You can either wait until your friend brings the whole pile of bricks to you, or you can start building as soon as you have a few bricks to start with, while your friend keeps bringing more bricks.\r\nWhich would be efficient? Clearly, it will be efficient to start building as soon as you have a few bricks to start with. This is a classic example of how a ‘stream’ (in this case a stream of bricks) can improve the efficiency of a process. Another common example you might be very familiar with would be streaming a movie instead downloading the whole movie first and and watch it.\r\nWikipedia says,\r\nIn computer science, a stream is a sequence of data elements made available over time. A stream can be thought of as items on a conveyor belt being processed one at a time rather than in large batches.\r\nIn NodeJS, stream module provides the capability to work with streams. Even if you haven’t used stream module explicitly there are a lots of underlying functionality in NodeJS applications which use streams. “Streams” is an easy concept, but it may sound very complex if you are unfamiliar with it. Therefore, I thought of describing a few key concepts in NodeJS streams in visuals so that it can be easily understood.', '2021-06-30 03:00:00', 'web developement ', 1, 'kratos');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'Web developement'),
(2, 'Health'),
(3, 'Science');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
