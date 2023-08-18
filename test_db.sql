-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2023 at 05:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `textarea` text DEFAULT NULL,
  `image_url` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `textarea`, `image_url`, `published`, `deleted`) VALUES
(79, 'Backed by Science', '\"Humans have a thing called a learning bias. No matter how wise a saying is, we are much more apt to accept it as true if we trust the source. Not only that, but we\'re fascinated by ultimate truths that spur us into action.\" ', 'uploads/', 1, 0),
(100, 'Home tab', 'When you create pictures, charts, or diagrams, they also coordinate with your current document look. You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab.', 'uploads/', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `drafts`
--

CREATE TABLE `drafts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `draft_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drafts`
--

INSERT INTO `drafts` (`id`, `title`, `content`, `image_url`, `draft_token`) VALUES
(1, 'Apartment Therapy', 'Apartment Therapy is a blog focusing on interior design. It was launched by Maxwell Ryan in 2001. Ryan is an interior designer who turned to blogging (using the moniker “the apartment therapist”). The blog has reached 20 million followers and has expanded into a full-scale media company.', 'upload/', ''),
(2, 'Apartment Therapy', 'Apartment Therapy is a blog focusing on interior design. It was launched by Maxwell Ryan in 2001. Ryan is an interior designer who turned to blogging (using the moniker “the apartment therapist”). The blog has reached 20 million followers and has expanded into a full-scale media company.', 'upload/', ''),
(3, 'Apartment Therapy', 'Apartment Therapy is a blog focusing on interior design. It was launched by Maxwell Ryan in 2001. Ryan is an interior designer who turned to blogging (using the moniker “the apartment therapist”). The blog has reached 20 million followers and has expanded into a full-scale media company.', 'upload/', ''),
(4, 'Apartment Therapy', 'Apartment Therapy is a blog focusing on interior design. It was launched by Maxwell Ryan in 2001. Ryan is an interior designer who turned to blogging (using the moniker “the apartment therapist”). The blog has reached 20 million followers and has expanded into a full-scale media company.', 'upload/', ''),
(5, 'Apartment Therapy', 'Apartment Therapy is a blog focusing on interior design. It was launched by Maxwell Ryan in 2001. Ryan is an interior designer who turned to blogging (using the moniker “the apartment therapist”). The blog has reached 20 million followers and has expanded into a full-scale media company.', 'upload/', ''),
(6, 'Apartment Therapy', 'Apartment Therapy is a blog focusing on interior design. It was launched by Maxwell Ryan in 2001. Ryan is an interior designer who turned to blogging (using the moniker “the apartment therapist”). The blog has reached 20 million followers and has expanded into a full-scale media company.', 'upload/', ''),
(7, 'Apartment Therapy', 'Apartment Therapy is a blog focusing on interior design. It was launched by Maxwell Ryan in 2001. Ryan is an interior designer who turned to blogging (using the moniker “the apartment therapist”). The blog has reached 20 million followers and has expanded into a full-scale media company.', 'upload/', ''),
(8, 'Apartment Therapy', 'Apartment Therapy is a blog focusing on interior design. It was launched by Maxwell Ryan in 2001. Ryan is an interior designer who turned to blogging (using the moniker “the apartment therapist”). The blog has reached 20 million followers and has expanded into a full-scale media company.', 'upload/', ''),
(9, 'Apartment Therapy', 'Apartment Therapy is a blog focusing on interior design. It was launched by Maxwell Ryan in 2001. Ryan is an interior designer who turned to blogging (using the moniker “the apartment therapist”). The blog has reached 20 million followers and has expanded into a full-scale media company.', 'upload/', ''),
(10, 'Apartment Therapy', 'Apartment Therapy is a blog focusing on interior design. It was launched by Maxwell Ryan in 2001. Ryan is an interior designer who turned to blogging (using the moniker “the apartment therapist”). The blog has reached 20 million followers and has expanded into a full-scale media company.', 'upload/', ''),
(11, 'bb', 'gnvc ', '', '64d9017536994'),
(12, 'bb', 'gnvc ', '', '64d9017a8a70b'),
(13, 'bb', 'gnvc ', '', '64d9017ab3698'),
(14, 'bb', 'gnvc ', NULL, '64d901bb9c2ae'),
(15, 'ujb', 'jhjjnknjn', '', '64d9c6eef0704'),
(16, 'Backed by Science', '\"Humans have a thing called a learning bias. No matter how wise a saying is, we are much more apt to accept it as true if we trust the source. Not only that, but we\'re fascinated by ultimate truths that spur us into action.\" ', '', '64dc58115daed'),
(17, 'Home tab', 'You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.\r\n\r\n', '', '64dcee887fae6'),
(18, 'Theme ', 'You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.\r\n\r\n', NULL, '64dcef3b3e679'),
(19, 'Format', 'You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.\r\n\r\n', '', '64dcf09bdb3e8'),
(20, 'Format', 'You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.\r\n\r\n', NULL, '64dcf0cd1d1ad'),
(21, 'taab', 'You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab', NULL, '64dd1696a8318');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `img_name`) VALUES
(7, 'IMG-64d5cd6f02d9e9.60104050.jpg'),
(8, 'IMG-64d5d7d56e03f1.19085352.jpg'),
(9, 'IMG-64d5dd7102a724.82086378.jpg'),
(10, 'IMG-64d5e3e9a84820.46422840.jpg'),
(11, 'IMG-64d5e4e27f7780.37981651.jpg'),
(12, 'IMG-64d5e558510f90.68386799.jpg'),
(13, 'IMG-64d5e60b31ac35.23569228.jpg'),
(14, 'IMG-64d5eedb402bd8.07087205.jpg'),
(15, 'IMG-64d5f19b32c037.82981875.jpg'),
(16, 'IMG-64d5f3613b4510.04063444.jpg'),
(17, 'IMG-64d60fe52c4162.05767012.jpg'),
(18, 'IMG-64d6142d6caac5.94261060.jpg'),
(19, 'IMG-64d615975f2748.64533019.jpg'),
(20, 'IMG-64d618afb1c186.10312700.jpg'),
(21, 'IMG-64d679e92de357.90325824.jpg'),
(22, 'IMG-64d67cc3157214.08865594.jpg'),
(23, 'IMG-64d67f19856642.64804332.jpg'),
(24, 'IMG-64d73179dfed07.74173718.jpg'),
(25, 'IMG-64d73476108bf2.87595113.jpg'),
(26, 'IMG-64d734a526d474.86124763.jpg'),
(27, 'IMG-64d7431e96f0d3.29902390.jpg'),
(28, 'IMG-64d75955204530.06912456.jpg'),
(29, 'IMG-64d7b9b3137775.21533980.jpg'),
(30, 'IMG-64d7ba21823013.51642667.jpg'),
(31, 'IMG-64d7ba63e93802.88571227.jpg'),
(32, 'IMG-64d7c49c094177.07381898.jpg'),
(33, 'IMG-64d7c61db2dbb8.28794705.jpg'),
(34, 'IMG-64d7c85b36b1b3.59626441.jpg'),
(35, 'IMG-64d7ca34d056d8.98967094.jpg'),
(36, 'IMG-64d7d4f15d7130.93102712.jpg'),
(37, 'IMG-64d7d4f3d025e2.80246810.jpg'),
(38, 'IMG-64d7d9370c3098.48573946.jpg'),
(39, 'IMG-64d8feb94bf2a5.23429654.jpg'),
(40, 'IMG-64d90173590273.64189603.jpg'),
(41, 'IMG-64d9041383a436.76328979.jpg'),
(42, 'IMG-64d904d3a00867.76860983.jpg'),
(43, 'IMG-64d913510f17c7.38534846.jpg'),
(44, 'IMG-64d9276221ada0.17595344.jpg'),
(45, 'IMG-64d9c6e8aab539.53659474.jpg'),
(46, 'IMG-64d9dbfdb5d726.43730118.jpg'),
(47, 'IMG-64d9dc91a659f3.75408546.jpg'),
(48, 'IMG-64d9e136582560.39316155.jpg'),
(49, 'IMG-64db1cedcfe686.16476475.jpg'),
(50, 'IMG-64db1e0e1c34c0.78778215.jpg'),
(51, 'IMG-64db1f505826c5.44583442.jpg'),
(52, 'IMG-64db3967ed22e7.50130318.jpg'),
(53, 'IMG-64db62c18438d0.34633642.jpg'),
(54, 'IMG-64dbc487dd1241.03491400.jpg'),
(55, 'IMG-64dbc58d50eb06.95911211.jpg'),
(56, 'IMG-64dc51f86ad280.60746848.jpg'),
(57, 'IMG-64dc567936c390.98972867.jpg'),
(58, 'IMG-64dc58e631e217.50131175.jpg'),
(59, 'IMG-64dc5941f39ab8.46166539.jpg'),
(60, 'IMG-64dc5998d22209.89052676.jpg'),
(61, 'IMG-64dc59d51deef2.90984525.jpg'),
(62, 'IMG-64dc5a4e4650f7.97582182.jpg'),
(63, 'IMG-64dc6936c2aed4.35210118.jpg'),
(64, 'IMG-64dceb0b7134a8.33948939.jpg'),
(65, 'IMG-64dceb92935128.65497891.jpg'),
(66, 'IMG-64dcf020c8e5b9.36840531.jpg'),
(67, 'IMG-64dd16200dbd42.21830653.jpg'),
(68, 'IMG-64ddd437c8ae17.54395731.jpg'),
(69, 'IMG-64de3daca80265.12261285.jpg'),
(70, 'IMG-64de3e4e495967.44503848.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trash`
--

CREATE TABLE `trash` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trash`
--

INSERT INTO `trash` (`id`, `post_id`, `deleted_at`) VALUES
(6, 98, '2023-08-17 08:06:40'),
(7, 95, '2023-08-17 08:06:49'),
(8, 95, '2023-08-17 08:10:13'),
(9, 95, '2023-08-17 08:10:31'),
(10, 95, '2023-08-17 08:11:10'),
(11, 95, '2023-08-17 08:11:11'),
(12, 95, '2023-08-17 08:11:11'),
(13, 95, '2023-08-17 08:11:36'),
(14, 95, '2023-08-17 08:11:37'),
(15, 95, '2023-08-17 08:12:07'),
(16, 95, '2023-08-17 08:12:08'),
(17, 95, '2023-08-17 08:12:09'),
(18, 95, '2023-08-17 08:12:50'),
(19, 95, '2023-08-17 15:29:56'),
(20, 99, '2023-08-17 15:33:14'),
(21, 100, '2023-08-17 15:35:59'),
(22, 100, '2023-08-17 15:36:46'),
(23, 100, '2023-08-17 15:37:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drafts`
--
ALTER TABLE `drafts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trash`
--
ALTER TABLE `trash`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `drafts`
--
ALTER TABLE `drafts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trash`
--
ALTER TABLE `trash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trash`
--
ALTER TABLE `trash`
  ADD CONSTRAINT `trash_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `blog_posts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
