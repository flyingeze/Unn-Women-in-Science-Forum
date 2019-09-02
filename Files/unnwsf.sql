-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2019 at 02:00 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unnwsf`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `cat_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`cat_id`, `cat_title`, `cat_slug`, `created_at`, `updated_at`) VALUES
(1, 'Health Science', 'health-science', '2019-07-31 21:59:44', '2019-07-31 21:59:44'),
(2, 'Physical Science', 'physical-science', '2019-07-31 21:59:44', '2019-07-31 21:59:44'),
(3, 'Engineering', 'engineering', '2019-07-31 21:59:44', '2019-07-31 21:59:44'),
(4, 'Technology', 'technology', '2019-07-31 21:59:44', '2019-07-31 21:59:44'),
(5, 'Chemistry', 'chemistry', '2019-07-31 21:59:45', '2019-07-31 21:59:45'),
(6, 'Physics', 'physics', '2019-07-31 21:59:45', '2019-07-31 21:59:45'),
(7, 'Biology', 'biology', '2019-07-31 21:59:45', '2019-07-31 21:59:45'),
(8, 'Geography', 'geography', '2019-07-31 21:59:45', '2019-07-31 21:59:45'),
(9, 'Mathematics', 'mathematics', '2019-07-31 21:59:45', '2019-07-31 21:59:45');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `department_title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_title`, `created_at`, `updated_at`) VALUES
(1, 'Agricultural and Bio-Resources Engineering', '2019-07-31 21:59:47', '2019-07-31 21:59:47'),
(2, 'Agriculture', '2019-07-31 21:59:47', '2019-07-31 21:59:47'),
(3, 'Animal Science', '2019-07-31 21:59:47', '2019-07-31 21:59:47'),
(4, 'Archaeology', '2019-07-31 21:59:48', '2019-07-31 21:59:48'),
(5, 'Architecture', '2019-07-31 21:59:48', '2019-07-31 21:59:48'),
(6, 'Biochemistry', '2019-07-31 21:59:48', '2019-07-31 21:59:48'),
(7, 'Biological Science', '2019-07-31 21:59:48', '2019-07-31 21:59:48'),
(8, 'Civil Engineering', '2019-07-31 21:59:48', '2019-07-31 21:59:48'),
(9, 'Computer Education', '2019-07-31 21:59:48', '2019-07-31 21:59:48'),
(10, 'Computer Science', '2019-07-31 21:59:48', '2019-07-31 21:59:48'),
(11, 'Computer with Statistics', '2019-07-31 21:59:49', '2019-07-31 21:59:49'),
(12, 'Crop Science', '2019-07-31 21:59:49', '2019-07-31 21:59:49'),
(13, 'Dentistry And Dental Surgery', '2019-07-31 21:59:49', '2019-07-31 21:59:49'),
(14, 'Dentistry and Dental Technology', '2019-07-31 21:59:49', '2019-07-31 21:59:49'),
(15, 'Education and Biology', '2019-07-31 21:59:49', '2019-07-31 21:59:49'),
(16, 'Education and Chemistry', '2019-07-31 21:59:49', '2019-07-31 21:59:49'),
(17, 'Education and Computer Science', '2019-07-31 21:59:49', '2019-07-31 21:59:49'),
(18, 'Education and Geography', '2019-07-31 21:59:49', '2019-07-31 21:59:49'),
(19, 'Education and Integrated Science', '2019-07-31 21:59:50', '2019-07-31 21:59:50'),
(20, 'Education and Mathematics', '2019-07-31 21:59:50', '2019-07-31 21:59:50'),
(21, 'Education and Physics', '2019-07-31 21:59:50', '2019-07-31 21:59:50'),
(22, 'Education and Science', '2019-07-31 21:59:50', '2019-07-31 21:59:50'),
(23, 'Electrical Engineering', '2019-07-31 21:59:50', '2019-07-31 21:59:50'),
(24, 'Electronics Engineering', '2019-07-31 21:59:50', '2019-07-31 21:59:50'),
(25, 'Food Science and Technology', '2019-07-31 21:59:51', '2019-07-31 21:59:51'),
(26, 'Geography', '2019-07-31 21:59:51', '2019-07-31 21:59:51'),
(27, 'Geology', '2019-07-31 21:59:51', '2019-07-31 21:59:51'),
(28, 'Health Education', '2019-07-31 21:59:51', '2019-07-31 21:59:51'),
(29, 'Home Science', '2019-07-31 21:59:51', '2019-07-31 21:59:51'),
(30, 'Industrial Technical Education', '2019-07-31 21:59:51', '2019-07-31 21:59:51'),
(31, 'Mechanical Engineering', '2019-07-31 21:59:51', '2019-07-31 21:59:51'),
(32, 'Medical Laboratory Technology / Science', '2019-07-31 21:59:51', '2019-07-31 21:59:51'),
(33, 'Medical Rehabilitation', '2019-07-31 21:59:52', '2019-07-31 21:59:52'),
(34, 'Medicine and Surgery', '2019-07-31 21:59:52', '2019-07-31 21:59:52'),
(35, 'Microbiology', '2019-07-31 21:59:52', '2019-07-31 21:59:52'),
(36, 'Nursing / Nursing Science', '2019-07-31 21:59:52', '2019-07-31 21:59:52'),
(37, 'Nutrition and Dietetics', '2019-07-31 21:59:52', '2019-07-31 21:59:52'),
(38, 'Pharmacy', '2019-07-31 21:59:52', '2019-07-31 21:59:52'),
(39, 'Physics', '2019-07-31 21:59:53', '2019-07-31 21:59:53'),
(40, 'Physics / Astrology', '2019-07-31 21:59:53', '2019-07-31 21:59:53'),
(41, 'Pure / Applied Chemistry', '2019-07-31 21:59:53', '2019-07-31 21:59:53'),
(42, 'Pure and Industrial Chemistry', '2019-07-31 21:59:53', '2019-07-31 21:59:53'),
(43, 'Radiography', '2019-07-31 21:59:53', '2019-07-31 21:59:53'),
(44, 'Soil Science', '2019-07-31 21:59:53', '2019-07-31 21:59:53'),
(45, 'Statistics', '2019-07-31 21:59:53', '2019-07-31 21:59:53'),
(46, 'Surveying And Geoinformatics', '2019-07-31 21:59:54', '2019-07-31 21:59:54'),
(47, 'Veterinary Medicine', '2019-07-31 21:59:54', '2019-07-31 21:59:54'),
(48, 'Zoology', '2019-07-31 21:59:54', '2019-07-31 21:59:54');

-- --------------------------------------------------------

--
-- Table structure for table `f_a_q_s`
--

CREATE TABLE `f_a_q_s` (
  `faq_id` bigint(20) UNSIGNED NOT NULL,
  `faq_question` varchar(255) NOT NULL,
  `faq_answer` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_a_q_s`
--

INSERT INTO `f_a_q_s` (`faq_id`, `faq_question`, `faq_answer`, `created_at`, `updated_at`) VALUES
(1, 'What this Forums all about?', 'The UNN Women in Science Forums is designed to provide answers to your science problems and issues.', '2019-07-31 21:59:56', '2019-07-31 21:59:56'),
(2, 'Who answers questions on the Forum?', 'Registered members answer all the questions on the UNN Women in Science Forums.', '2019-07-31 21:59:56', '2019-07-31 21:59:56'),
(3, 'Where do I get support from this Forum?', 'The official way to contact our support team is through the contact page', '2019-07-31 21:59:56', '2019-07-31 21:59:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(33, '2014_10_12_000000_create_users_table', 1),
(34, '2014_10_12_100000_create_password_resets_table', 1),
(35, '2019_07_24_231229_create_topics_table', 1),
(36, '2019_07_24_231843_create_repies_table', 1),
(37, '2019_07_25_072926_create_categorys_table', 1),
(38, '2019_07_25_223409_create_departments_table', 1),
(39, '2019_07_26_132501_create_settings_table', 1),
(40, '2019_07_27_192655_create_f_a_q_s_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `repies`
--

CREATE TABLE `repies` (
  `reply_id` bigint(20) UNSIGNED NOT NULL,
  `topic_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `reply_body` longtext NOT NULL,
  `reply_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repies`
--

INSERT INTO `repies` (`reply_id`, `topic_id`, `user_id`, `reply_body`, `reply_image`, `created_at`, `updated_at`) VALUES
(1, '1', '3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industtry\'s statndard dummy specimen book. Lorem Ipsum which looks reasonable. The generated Lorem Ipsum words etc.', NULL, '2019-07-31 22:37:38', '2019-07-31 22:37:38'),
(2, '2', '2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industtry\'s statndard dummy specimen book. Lorem Ipsum which looks reasonable. The generated Lorem Ipsum words etc.', '1564616347.jpg', '2019-07-31 22:39:07', '2019-07-31 22:39:07'),
(3, '1', '2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industtry\'s statndard dummy specimen book. Lorem Ipsum which looks reasonable. The generated Lorem Ipsum words etc.', '1564616373.png', '2019-07-31 22:39:34', '2019-07-31 22:39:34'),
(4, '1', '1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industtry\'s statndard dummy specimen book. Lorem Ipsum which looks reasonable. The generated Lorem Ipsum words etc.', NULL, '2019-07-31 22:41:38', '2019-07-31 22:41:38'),
(5, '2', '1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industtry\'s statndard dummy specimen book. Lorem Ipsum which looks reasonable. The generated Lorem Ipsum words etc.', '1564616539.jpg', '2019-07-31 22:42:20', '2019-07-31 22:42:20');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT 'UNN Women In Science Forum',
  `url` varchar(255) DEFAULT NULL,
  `banner_text` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `banner1` varchar(255) DEFAULT NULL,
  `banner2` varchar(255) DEFAULT NULL,
  `banner3` varchar(255) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `about` longtext,
  `info` longtext,
  `why_us` longtext,
  `by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `url`, `banner_text`, `email`, `address`, `telephone`, `banner1`, `banner2`, `banner3`, `image1`, `image2`, `image3`, `about`, `info`, `why_us`, `by`, `created_at`, `updated_at`) VALUES
(1, 'UNN Women In Science Forum', 'http://myproject.com', 'Connect, Share &amp; Engage. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum aspernatur repudiandae praesentium, accusantium quo eaque porro ut at corporis, ipsa omnis vero minima aliquam nulla, eos dolorem provident, deserunt asperiores!', 'admin@myproject.com', '3334 Radford Street Louisville, Victoria Melbourne, Australia', '+2348038831882', 'women-in-science.jpg', 'university-of-nigeria-nsukka.jpg', 'women-in-science-group.jpg', 'unn.png', 'university-of-nigeria-nsukka.jpg', 'UNN-logo.png', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum eius, nesciunt animi qui quaerat aliquam corrupti beatae, veniam excepturi maxime quas rerum asperiores dolore aliquid atque? Aperiam neque ex fugiat?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum eius, nesciunt animi qui quaerat aliquam corrupti beatae, veniam excepturi maxime quas rerum asperiores dolore aliquid atque? Aperiam neque ex fugiat?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam dicta fugiat voluptatibus aperiam officia quis asperiores animi error distinctio corporis, doloribus aliquam libero maiores modi dolores perspiciatis beatae nulla, eaque?</p>', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industtry\'s statndard dummy specimen book. Lorem Ipsum which looks reasonable. The generated Lorem Ipsum words etc.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in  esse cillum dolore eu fugiat nulla pariatur.</p>', 'Eze Paul Chidiebere', '2019-07-31 21:59:43', '2019-07-31 21:59:43');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `topic_id` bigint(20) UNSIGNED NOT NULL,
  `topic_title` varchar(255) NOT NULL,
  `topic_slug` varchar(255) NOT NULL,
  `topic_description` longtext NOT NULL,
  `topic_by` varchar(255) NOT NULL,
  `topic_category` varchar(255) NOT NULL,
  `topic_rule` longtext NOT NULL,
  `topic_picture` varchar(255) NOT NULL DEFAULT 'topic-default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_title`, `topic_slug`, `topic_description`, `topic_by`, `topic_category`, `topic_rule`, `topic_picture`, `created_at`, `updated_at`) VALUES
(1, 'Test Page', 'test-page', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industtry\'s statndard dummy specimen book. Lorem Ipsum which looks reasonable. The generated Lorem Ipsum words etc.', '3', '7', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industtry\'s statndard dummy specimen book. Lorem Ipsum which looks reasonable. The generated Lorem Ipsum words etc.', '1564616234.jpg', '2019-07-31 22:37:15', '2019-07-31 22:37:15'),
(2, 'Test Page two', 'test-page-two', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industtry\'s statndard dummy specimen book. Lorem Ipsum which looks reasonable. The generated Lorem Ipsum words etc.', '2', '1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industtry\'s statndard dummy specimen book. Lorem Ipsum which looks reasonable. The generated Lorem Ipsum words etc.', 'no-img.png', '2019-07-31 22:38:40', '2019-07-31 22:38:40'),
(3, 'Test Topic Three', 'test-topic-three', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industtry\'s statndard dummy specimen book. Lorem Ipsum which looks reasonable. The generated Lorem Ipsum words etc.', '1', '5', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industtry\'s statndard dummy specimen book. Lorem Ipsum which looks reasonable. The generated Lorem Ipsum words etc.', 'no-img.png', '2019-07-31 22:41:11', '2019-07-31 22:51:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `biography` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) NOT NULL DEFAULT 'user.png',
  `email` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'member',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `reg_no`, `department`, `age`, `biography`, `phone_number`, `website`, `address`, `profile_pic`, `email`, `type`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Member Staff', '193861', 'Computer Science', '18 to 25', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industtry\'s statndard dummy specimen book. Lorem Ipsum which looks reasonable. The generated Lorem Ipsum words etc.', '0800000001', NULL, 'UNN', '1564617141.png', 'staff1@unn.edu.ng', 'Staff', 'member', NULL, '$2y$10$lVioZhnl16nl5sPlgUpV9eDeyTLkqUcFeOT63cFniB8gwZC0rLWbK', NULL, '2019-07-31 21:59:58', '2019-07-31 22:52:22'),
(2, 'Member Student', '193862', 'Computer Science', '18 to 25', NULL, '0800000002', NULL, 'UNN', 'user.png', 'student1@unn.edu.ng', 'Student', 'member', NULL, '$2y$10$7JKnEvBTL65MsMlmLinS7uCMRogedKIAv8bzqJryJ8l.2fZ9vdS9e', NULL, '2019-07-31 21:59:59', '2019-07-31 21:59:59'),
(3, 'Admin Staff', '193863', 'Computer Science', '18 to 25', NULL, '0800000003', NULL, 'UNN', 'user.png', 'admin@unn.edu.ng', 'Staff', 'admin', NULL, '$2y$10$DC60MEDhzu7KaDwHE5jcS.gBrfhiyViw9Myzm8XktndXsjC5biAbi', NULL, '2019-07-31 21:59:59', '2019-07-31 21:59:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `categorys_cat_slug_unique` (`cat_slug`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  ADD PRIMARY KEY (`faq_id`),
  ADD UNIQUE KEY `f_a_q_s_faq_question_unique` (`faq_question`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `repies`
--
ALTER TABLE `repies`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`),
  ADD UNIQUE KEY `topics_topic_title_unique` (`topic_title`),
  ADD UNIQUE KEY `topics_topic_slug_unique` (`topic_slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_reg_no_unique` (`reg_no`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `cat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  MODIFY `faq_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `repies`
--
ALTER TABLE `repies`
  MODIFY `reply_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
