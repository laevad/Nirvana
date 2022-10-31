-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2022 at 02:26 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(20) NOT NULL,
  `book_title` text NOT NULL,
  `book_author` varchar(200) DEFAULT NULL,
  `book_publisher` varchar(50) NOT NULL,
  `book_pic` varchar(20) NOT NULL,
  `book_review` varchar(50) NOT NULL,
  `book_genre_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_title`, `book_author`, `book_publisher`, `book_pic`, `book_review`, `book_genre_id`) VALUES
(1, 'Game of thrones', 'George R. R. Martin', 'Bantam Spectra', 'LF1.jpg', '568', 1),
(2, 'Stardust', 'Neil Gaiman', 'DC Comics', 'LF6.jpg', '350', 1),
(3, 'The Lord of the Rings', 'J. R. R. Tolkien', 'Allen & Unwin', 'LF3.jpg', '325', 1),
(4, 'Howl\'s Moving Castle', 'Diana Wynne Jones', 'Greenwillow Books', 'LF4.jpg', '546', 1),
(5, 'Who Fears Death', 'Nnedi Okorafor', 'DAW/Penguin', 'LF5.jpg', '287', 1),
(6, 'Jade City', 'Fonda Lee', 'Orbit', 'LF7.jpg', '143', 1),
(7, 'Shadow and Bone', 'Siege and Storm', 'Macmillan Publishers', 'LF8.jpg', '243', 1),
(8, 'The Hobbit', 'J. R. R. Tolkien', 'George Allen & Unwin (UK)', 'LF9.jpg', '280', 1),
(9, 'Harry Potter and the Philosopher\'s Stone', 'J. K. Rowling', 'Bloomsbury', 'LF10.jpg', '430', 1),
(10, 'The Silent Patient', 'Alex Michaelides', '', 'LF1.jpg', '298', 2),
(11, 'Long Shadows', 'David Baldacci', '', 'LF6.jpg', '298', 2),
(12, 'The Maze', 'Nelson DeMille', '', 'LF3.jpg', '478', 2),
(13, 'Verity', 'Colleen Hoover', '', 'LF4.jpg', '326', 2),
(14, 'A Good Girl\'s Guide to Murder', 'Holly Jackson', '', 'LF5.jpg', '567', 2),
(15, 'The Alienist', 'Caleb Carr', '', 'LF7.jpg', '293', 2),
(16, 'Da Vinci Code', 'David Brown', '', 'LF8.jpg', '565', 2),
(17, 'One of Us Is Lying', 'Karen M. McManus', '', 'LF9.jpg', '178', 2),
(18, 'Dracula', 'Bram Stoker', '', 'LF1.jpg', '478', 3),
(19, 'It', 'Stephen King', '', 'LF6.jpg', '692', 3),
(20, 'Frankenstein', 'Mary Shelley', '', 'LF3.jpg', '524', 3),
(21, 'The Exorcist', 'William Peter Blatty', '', 'LF4.jpg', '267', 3),
(22, 'Ring', 'Koji Suzuki', '', 'LF5.jpg', '456', 3),
(23, 'Carmilla', 'Sheridan Le Fanu', '', 'LF7.jpg', '363', 3),
(24, 'World War Z', 'Max Brooks', '', 'LF8.jpg', '765', 3),
(25, 'Salem\'s Lot', 'Stephen King', '', 'LF9.jpg', '478', 3),
(36, 'Pride and Prejudice', 'Jane Austen', '', 'LF1.jpg', '325', 4),
(37, 'The Fault In Our Stars', 'John Green', '', 'LF6.jpg', '300', 4),
(38, 'The Catcher in the Rye', 'J. D. Salinger', '', 'LF3.jpg', '200', 4),
(39, 'Where The Crawdads Sing', 'Delia Owens', '', 'LF4.jpg', '105', 4),
(40, 'November 9', 'Collen Hoover', '', 'LF5.jpg', '225', 4),
(41, 'The Song Of Achilles', 'Madeline Miller', '', 'LF7.jpg', '200', 4),
(42, 'Tomorrow, and Tomorrow, and Tomorrow', 'Gabrielle Zevin', '', 'LF8.jpg', '90', 4),
(43, 'The Seven Husbands of Evelyn Hugo', 'Taylor Jenkins Reid', '', 'LF9.jpg', '280', 4),
(44, 'Dreamland', 'Nicholas Sparks', '', 'LF10.jpg', '250', 4),
(45, 'Before The Fall', 'Noah Hawley', '', 'LF2.jpg', '150', 4),
(46, 'Van Gogh. The Complete Paintings', 'Rainer Metzger, Ingo F. Walther', '', 'Art.jpg', '', 5),
(47, 'Hayao Miyazaki', 'Jessica Niebel, Daniel Kothenschulte (Text by), Hayao Miyazaki\n                            (Artist), Toshio Suzuki (Foreword by), Pete Docter (Text by)', '', 'AsianArt.jpg', '', 5),
(48, 'Starry Messenger: Cosmic Perspectives on Civilization', 'Neil deGrasse Tyson', '', 'Astronomy.jpg', '', 5),
(49, 'The Song of the Cell: An Exploration of Medicine and the New Human', 'Siddhartha Mukherjee', '', 'Biology.jpg', '', 5),
(50, 'Harry Styles: And the Clothes he Wears', 'Terry Newman', '', 'fashion.jpg', '', 5),
(51, 'Dinner in One: Exceptional & Easy One-Pan Meals: A Cookbook', 'Melissa Clark', '', 'food.jpg', '', 5),
(52, 'Code Girls: The Untold Story of the American Women Code Breakers of World War II', 'Liza Mundy', '', 'Math.jpg', '', 5),
(53, 'What If? 2: Additional Serious Scientific Answers to Absurd Hypothetical Questions', 'Randall Munroe', '', 'physics.jpg', '', 5),
(54, 'Atomic Habits: An Easy & Proven Way to Build Good Habits & Break Bad Ones', 'James Clear', '', 'Self.jpg', '', 5),
(55, 'Speed of Advance: How the U.S. Navy\'s Convergence of People, Process, and Technology Can Help Your Business Win in the 4th Industrial Revolution', 'Marty Groover', '', 'Technology.jpg', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `book_genre`
--

CREATE TABLE `book_genre` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_genre`
--

INSERT INTO `book_genre` (`id`, `name`) VALUES
(1, 'Fantasy'),
(2, 'Mystery'),
(3, 'Horror'),
(4, 'Fiction'),
(5, 'Non-Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(6, 'Con', 'sospa@gmail.com', '50eca404ef4b850f80a94151d5d764a1', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_genre_id` (`book_genre_id`);

--
-- Indexes for table `book_genre`
--
ALTER TABLE `book_genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `book_genre`
--
ALTER TABLE `book_genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`book_genre_id`) REFERENCES `book_genre` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
