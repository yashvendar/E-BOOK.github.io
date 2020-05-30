-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2019 at 08:34 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_books`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `b_id` int(10) UNSIGNED NOT NULL,
  `b_nm` varchar(500) NOT NULL DEFAULT '',
  `b_no` int(11) NOT NULL,
  `b_author` varchar(100) NOT NULL DEFAULT '',
  `b_publisher` varchar(100) DEFAULT '',
  `b_desc` varchar(1000) DEFAULT '',
  `b_price` varchar(100) NOT NULL DEFAULT '',
  `b_path` varchar(500) NOT NULL DEFAULT '',
  `category` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Having Info of books';

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`b_id`, `b_nm`, `b_no`, `b_author`, `b_publisher`, `b_desc`, `b_price`, `b_path`, `category`) VALUES
(2, 'The Dragon in the Sea', 500, 'Frank Herbert', 'Doubleday & Company', '0', '1189', 'The_Dragon_in_the_Sea.jpg', 'science fiction'),
(3, 'The Eyes of Heisenberg', 500, 'Frank Herbert', 'Berkley Books', '0', '830', 'The_Eyes_of_Heisenberg.jpg', 'science fiction'),
(4, 'Hellstrom\'s Hive', 500, 'Frank Herbert', 'Doubleday', '0', '1389', 'Hellstrom\'s_Hive.jpg', 'science fiction'),
(5, 'The Urth of the New Sun: The sequel to \'The Book of the New Sun\'', 200, 'Gene Wolfe', 'Gollancz (UK) Tor Books (US)', '0', '2799', 'The_Book_of_the_New_Sun.jpg', 'science fiction'),
(6, 'The Book of the Long Sun', 300, 'Gene Wolfe', 'Tor & Tom Doherty', '0', '1490', 'the_book_of_the_long_sun.jpg', 'science fiction'),
(7, 'The Book of the Short Sun', 450, 'Gene Wolfe', 'Tor Books', '0', '1599', 'The_Book_of_the_Short_Sun.jpg', 'science fiction'),
(8, 'The Fifth Head of Cerberus', 350, 'Gene Wolfe', 'Charles Scribner\'s Sons', '0', '977', 'The_Fifth_Head_of_Cerberus.jpg', 'science fiction'),
(9, 'Putting the Science in Fiction', 110, 'Dan Koboldt', 'F&W Publications Inc', 'This book brings together scientists, physicians, engineers, and other experts to help you:', '1109', 'Putting_the_Science_in_Fiction.jpg', 'science fiction'),
(10, 'THE WIVES OF HENRY VIII ', 201, 'ANTONIA FRASER', ' Vintage', 'The New York Times bestselling history of the legendary six wives of Henry VIII--from the acclaimed author of  Marie Antoinette.  Under Antonia Fraser\'s intent scrutiny, Catherine of Aragon emerges as a scholar-queen who steadfastly refused to grant a divorce to her royal husband; Anne Boleyn is absolved of everything but a sharp tongue and an inability to produce a male heir; and Catherine Parr is revealed as a religious reformer with the good sense to tack with the treacherous winds of the Tudor court.  And we gain fresh understanding of Jane Seymour\'s circumspect wisdom, the touching dignity of Anna of Cleves, and the youthful naivete that led to Katherine Howard\'s fatal indiscretions.  The Wives of Henry VIII interweaves passion and power, personality and politics, into a superb work of history. ', '1277', 'The_Wives_of_Henry_VIII.jpg', 'science fiction'),
(11, 'mrs. robinsonâ€™s disgrace: the private diary of a ', 500, 'kate summerscale', 'Bloomsbury USA', 'Kate Summerscale brilliantly recreates the Victorian world, chronicling in exquisite and compelling detail the life of Isabella Robinson, wherein the longings of a frustrated wife collided with a society clinging to rigid ideas about sanity, the boundaries of privacy, the institution of marriage, and female sexuality', '1638', 'The_Private_Diary_of_a_Victorian_Lady.jpg', 'science fiction'),
(19, 'Totally_Mumbai', 50, ' Pereena Lamba,Miel Sahgal', 'Blue Spectacles; First edition (2017)', 'An insider’s guide to India’s main metropolis, Mumbai. For travellers and locals of all ages, children and young adults can read this fact-filled guidebook on nature, culture, art, history, tourism and more. An educational family favourite, the book brings the city alive for parents and kids looking for things to do in Mumbai, or for teachers in schools. Discover secret Mumbai stories today!', '396', 'Totally_Mumbai.jpg', 'kids,children,childrens'),
(20, 'Diary of a Wimpy Kid - 6(Cabin Fever)', 25, 'Jeff Kinney ', 'Penguin UK; 1 edition (31 January 2013)', 'The book, \'Diary of a Wimpy Kid: Cabin Fever’ is the sixth book in the \'Diary of a Wimpy Kid\' book series. This series revolves around a kid named Greg who is writing his life experiences in a journal. It is authored by Jeff Kinney and is one of the most popular children books of all times.', '236', 'Diary of a Wimpy Kid - 6(Cabin Fever).jpg', 'kids,children,childrens'),
(21, 'Diary of a Wimpy Kid(The Ugly Truth)', 24, 'Jeff Kinney ', 'Penguin UK; 2000 edition (24 May 2012)', 'The most hotly anticipated children\'s book of the year is here - Diary of a Wimpy Kid (The Big Issue)', '210', 'Diary of a Wimpy Kid(The Ugly Truth).jpg', 'kids,children'),
(22, 'Diary of a Wimpy Kid The Last Straw', 31, 'Jeff Kinney', 'Penguin UK; Latest edition (6 October 2009)', 'The book series revolves around the kid Greg Heffley who is naughty, honest and charming in his own way.', '190', 'Diary of a Wimpy Kid The Last Straw.jpg', 'kids,children,childrens'),
(23, 'Diary of a Wimpy Kid Dog Days', 23, 'Jeff Kinney', 'Penguin UK; Latest edition (19 July 2011)', 'The book series revolves around the kid Greg Heffley who is naughty, honest and charming in his own way.', '180', 'Diary of a Wimpy Kid Dog Days.jpg', 'kids,children,childrens'),
(24, 'Diary of a Wimpy Kid Rodrick Rules', 21, 'Jeff Kinney', ' Penguin UK; Reprint edition (5 February 2009)', ' The story rotates around an 8th grader Gregory Heffley who is facing some problems which usually is not faced by a mid-school child.', '217', 'Diary of a Wimpy Kid Rodrick Rules.jpg', 'kids,children,childrens'),
(25, 'Diary of a Wimpy Kid Dog Days', 15, 'Jeff Kinney', ' Penguin UK; Reprint edition (5 February 2009)', ' The story rotates around an 8th grader Gregory Heffley who is facing some problems which usually is not faced by a mid-school child.', '180', 'Diary of a Wimpy Kid Dog Days.jpg', 'kids,children'),
(26, 'The Magic of the Lost Temple', 20, 'Sudha Murty', 'Penguin Books India; Latest edition (11 November 2015)', ' Nooni is a city girl who is very surprised at the unexpected pace of life in her grandparent’s village in the state of Karnataka.', '149', 'The Magic of the Lost Temple.jpg', 'kids,children'),
(27, 'The Ugly Duckling', 12, 'Wonder House Books', 'Wonder House Books; First edition (25 November 2018)', 'Ugly Duckling is rejected by his family. He travels far to find a new family who will accept him. Will he find his true identity?', '69', 'The Ugly Duckling.jpg', 'kids,children'),
(28, 'Moral Tales From Panchtantra Timeless Stories For Children From Ancient India', 15, ' Wonder House Books', ' Wonder House Books; First edition (2 July 2019)', 'Panchatantra has been a part of the Indian folklore for many centuries and continues to enchant young readers even today. The moral Stories from Panchatantra is a wonderful collection of six tales that aim to guide the young readers about the wise conduct of life, understanding human nature and attaining success in life. ', '199', 'Moral Tales From Panchtantra Timeless Stories For Children From Ancient India.jpg', 'kids,children'),
(29, 'The Best of Panchatantra', 25, 'Rungeen Singh', 'Young Learner Publications (25 April 2019)', 'The Best of Panchatantra, compiled by well-known author Mrs Rungeen Singh, has outstanding stories from Panchatantra, an ancient inter-related collection of animal fables in verse and prose.', '70', 'The Best of Panchatantra.jpg', 'kids,children'),
(30, 'The Best of Akbar and Birbal', 12, 'Rungeen Singh', ' Young Learner Publications (25 April 2019)', 'The Best of Panchatantra, compiled by well-known author Mrs Rungeen Singh, has outstanding stories from Panchatantra, an ancient inter-related collection of animal fables in verse and prose.', '70', 'The Best of Akbar and Birbal.jpg', 'kids,children'),
(31, 'The Girl in Room 105', 50, 'Chetan Bhagat', 'Westland (9 October 2018)', 'From the author of Five Point Someone and 2 States, comes a fast-paced, funny and unputdownable thriller about obsessive love and finding purpose in life against the backdrop of contemporary India.', '107', 'The Girl in Room 105.jpg', 'romance,ROMANCE,Romance'),
(32, 'You are the Best Wife A True Love Story', 12, 'Ajay K Pandey', 'Srishti Publishers & Distributors', 'From the author of Five Point Someone and 2 States, comes a fast-paced, funny and unputdownable thriller about obsessive love and finding purpose in life against the backdrop of contemporary India.', '93', 'You are the Best Wife A True Love Story.jpg', 'romance,ROMANCE,Romance'),
(33, 'Be My Perfect Ending ', 20, 'Arpit Vageria', 'Srishti Publishers & Distributors (30 December 2016)', 'From the author of Five Point Someone and 2 States, comes a fast-paced, funny and unputdownable thriller about obsessive love and finding purpose in life against the backdrop of contemporary India.', '105', 'Be My Perfect Ending .jpg', 'romance,Romance,Romance'),
(34, 'You are My Reason to Smile', 15, 'Arpit Vageria', 'Srishti Publishers & Distributors (30 December 2016)', 'From the author of Five Point Someone and 2 States, comes a fast-paced, funny and unputdownable thriller about obsessive love and finding purpose in life against the backdrop of contemporary India.', '93', 'You are My Reason to Smile.jpg', 'romance,Romance,Romance'),
(35, 'A Year of Wednesdays ', 20, 'Sonia Bahl ', 'Fingerprint Publishing (1 March 2019)', 'A flight from New Delhi to new York. Two strangers, seat 7A and seat 7B, who have nothing in common.', '219', 'A Year of Wednesdays .jpg', 'romance,ROMANCE,Romance,novels'),
(36, 'Falling in Love Again Stories of Love and Romance', 15, 'Ruskin Bond ', 'Rupa Publications India (1 May 2013)', 'A flight from New Delhi to new York. Two strangers, seat 7A and seat 7B, who have nothing in common.', '212', 'Falling in Love Again: Stories of Love and Romance.jpg', 'romance,Romance,Romance'),
(37, 'Wish I Could Tell You ', 20, 'Durjoy Datta ', ' Penguin Metro Reads (4 October 2019)', 'A disillusioned and heartbroken Anusha finds herself in the small world of WeDonate.com.', '139', 'Wish I Could Tell You .jpg', 'romance,ROMANCE,Romance,novels'),
(38, 'Flawed (Flawed 1) ', 12, 'Cecelia Ahern ', ' Harper Collins; Latest Edition edition (22 March 2016)', 'Flawed is set in a powerfully realised society where perfection is valued above humanity, with an intense love story at its centre.', '229', 'Flawed (Flawed 1) .jpg', 'romance,ROMANCE,Romance,novels'),
(39, 'It Ends With Us A Novel', 20, 'Colleen Hoover', 'Simon & Schuser India (5 August 2016)', 'The newest, highly anticipated novel from beloved #1 New York Times bestselling author, Colleen Hoover. ', '897', 'It Ends With Us A Novel.jpg ', 'romance,ROMANCE,Romance,novels'),
(40, 'Perfect (Flawed 2)', 15, 'Cecelia Ahern', 'HarperCollins Childrens Books (15 April 2017)', 'Celestine North lives in a society that demands perfection. After she was branded Flawed by a morality court, Celestine\'s life has completely fractured – all her freedoms gone.', '207', 'Perfect (Flawed 2).jpg', 'romance,Romance,Romance');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `login_id` varchar(60) NOT NULL,
  `b_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `login_id`, `b_id`) VALUES
(2113, 'mohdf078@gmail.com', 2),
(2114, 'mohdf078@gmail.com', 35);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `number` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `DOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `password`, `fname`, `lname`, `number`, `address`, `DOB`) VALUES
('aaksh@gmail.com', '4053', 'aakash', 'vachhani', '456225', 'Mnit jaipur', '1999-12-04'),
('mohdf078@gmail.com', '1202', 'Mohammad', 'Faizan', '2147483647', '263/H/1st Factory estate, o.c.f near veer abdul hameed chaurah', '1997-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `login_id` varchar(255) NOT NULL,
  `order_id` int(11) NOT NULL,
  `b_id` int(255) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`login_id`, `order_id`, `b_id`, `date`) VALUES
('mohdf078@gmail.com', 26, 2, '2019-11-19'),
('mohdf078@gmail.com', 27, 35, '2019-11-19'),
('mohdf078@gmail.com', 28, 2, '2019-11-19'),
('mohdf078@gmail.com', 29, 35, '2019-11-19');

-- --------------------------------------------------------

--
-- Table structure for table `returns`
--

CREATE TABLE `returns` (
  `login_id` varchar(255) NOT NULL,
  `b_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `returns`
--

INSERT INTO `returns` (`login_id`, `b_id`) VALUES
('mohdf078@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `mode` varchar(255) NOT NULL,
  `t_id` int(11) NOT NULL,
  `login_id` varchar(255) NOT NULL,
  `card_no` int(11) DEFAULT NULL,
  `expiry` varchar(255) DEFAULT NULL,
  `card_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`mode`, `t_id`, `login_id`, `card_no`, `expiry`, `card_name`) VALUES
('card', 66, 'mohdf078@gmail.com', NULL, '6', '6'),
('card', 67, 'mohdf078@gmail.com', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `b_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2115;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
