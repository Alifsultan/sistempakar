-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 03:06 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi_sistempakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Site Administrator'),
(2, 'user', 'Regular User');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 1),
(1, 2),
(1, 2),
(2, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 47),
(2, 34),
(2, 35),
(2, 36),
(2, 47);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'izmirtais28@gmail.com', NULL, '2021-06-02 21:24:18', 0),
(2, '::1', 'izmirtais28@gmail.com', 1, '2021-06-02 21:30:05', 1),
(3, '::1', 'izmirtais28@gmail.com', 1, '2021-06-03 08:24:11', 1),
(4, '::1', 'izmirtais28@gmail.com', NULL, '2021-06-03 11:35:30', 0),
(5, '::1', 'izmirtais', NULL, '2021-06-03 11:35:39', 0),
(6, '::1', 'izmirtais28@gmail.com', NULL, '2021-06-07 15:43:15', 0),
(7, '::1', 'izmirtais28@gmail.com', NULL, '2021-06-07 15:43:22', 0),
(8, '::1', 'izmirtais28@gmail.com', 3, '2021-06-07 15:44:12', 1),
(9, '::1', 'izmirtais28@gmail.com', 3, '2021-06-07 15:55:12', 1),
(10, '::1', 'ismirt@gmail.com', NULL, '2021-06-07 19:55:48', 0),
(11, '::1', 'ismirt@yahoo.com', 4, '2021-06-07 19:56:14', 1),
(12, '::1', 'ismirt@yahoo.com', 4, '2021-06-07 19:57:06', 1),
(13, '::1', 'izmirtais28@gmail.com', 3, '2021-06-07 20:02:40', 1),
(14, '::1', 'ismirt@yahoo.com', 4, '2021-06-07 20:02:56', 1),
(15, '::1', 'izmirtais28@gmail.com', 3, '2021-06-07 20:10:42', 1),
(16, '::1', 'ismirt@yahoo.com', 4, '2021-06-07 20:30:20', 1),
(17, '::1', 'izmirtais28@gmail.com', 3, '2021-06-07 20:36:33', 1),
(18, '::1', 'ismirt@yahoo.com', 4, '2021-06-07 20:38:55', 1),
(19, '::1', 'izmirtais28@gmail.com', 3, '2021-06-07 20:43:18', 1),
(20, '::1', 'ismirt@yahoo.com', 4, '2021-06-07 20:44:05', 1),
(21, '::1', 'izmirtais28@gmail.com', 3, '2021-06-07 20:48:25', 1),
(22, '::1', 'izmirtais28@gmail.com', 5, '2021-06-13 09:11:36', 1),
(23, '::1', 'izmirtais28@gmail.com', 5, '2021-06-14 08:22:36', 1),
(24, '::1', 'izmirtais28@gmail.com', 5, '2021-06-19 01:01:09', 1),
(25, '::1', 'admin@gmail.com', 6, '2021-06-19 01:07:03', 1),
(26, '::1', 'admin@gmail.com', 6, '2021-06-19 01:27:48', 1),
(27, '::1', 'admin@gmail.com', 6, '2021-06-19 10:11:57', 1),
(28, '::1', 'izmirtais28@gmail.com', 5, '2021-06-19 10:12:12', 1),
(29, '::1', 'izmirtais28@gmail.com', 5, '2021-06-19 10:38:23', 1),
(30, '::1', 'admin', NULL, '2021-06-19 10:48:07', 0),
(31, '::1', 'admin', NULL, '2021-06-19 10:48:18', 0),
(32, '::1', 'admin@gmail.com', 6, '2021-06-19 10:48:38', 1),
(33, '::1', 'admin@gmail.com', 7, '2021-06-22 04:21:50', 1),
(34, '::1', 'admin', NULL, '2021-06-24 03:12:19', 0),
(35, '::1', 'admin', NULL, '2021-06-24 03:12:39', 0),
(36, '::1', 'admin', NULL, '2021-06-24 03:13:24', 0),
(37, '::1', 'admin', NULL, '2021-06-24 03:13:36', 0),
(38, '::1', 'admin', NULL, '2021-06-24 03:13:57', 0),
(39, '::1', 'admin', NULL, '2021-06-24 03:14:03', 0),
(40, '::1', 'admin', NULL, '2021-06-24 03:14:21', 0),
(41, '::1', 'admin', NULL, '2021-06-24 03:14:34', 0),
(42, '::1', 'sultan22@gmail.com', 8, '2021-06-24 03:17:48', 1),
(43, '::1', 'sultan22@gmail.com', 8, '2021-06-24 03:19:13', 1),
(44, '::1', 'sultan22@gmail.com', 8, '2021-06-24 03:19:35', 1),
(45, '::1', 'sultan22@gmail.com', 8, '2021-06-24 03:20:41', 1),
(46, '::1', 'admin@gmail.com', NULL, '2021-06-24 03:21:47', 0),
(47, '::1', 'admin@gmail.com', NULL, '2021-06-24 03:21:59', 0),
(48, '::1', 'admin', NULL, '2021-06-24 03:22:10', 0),
(49, '::1', 'admin', NULL, '2021-06-24 03:22:27', 0),
(50, '::1', 'admin@gmail.com', 9, '2021-06-24 03:23:56', 1),
(51, '::1', 'admin@gmail.com', 9, '2021-06-24 03:24:05', 1),
(52, '::1', 'admin@gmail.com', 9, '2021-06-24 05:02:37', 1),
(53, '::1', 'admin@gmail.com', 9, '2021-06-24 05:11:20', 1),
(54, '::1', 'admin', NULL, '2021-07-07 04:25:35', 0),
(55, '::1', 'admin@gmail.com', 9, '2021-07-07 04:25:51', 1),
(56, '::1', 'khariza22@gmail.com', 10, '2021-07-07 06:28:26', 1),
(57, '::1', 'adm', NULL, '2021-07-07 06:29:12', 0),
(58, '::1', 'admin', NULL, '2021-07-07 06:29:21', 0),
(59, '::1', 'khariza22@gmail.com', 10, '2021-07-07 06:31:05', 1),
(60, '::1', 'admin', NULL, '2021-07-07 06:31:57', 0),
(61, '::1', 'khariza22@gmail.com', NULL, '2021-07-07 06:32:09', 0),
(62, '::1', 'khariza22@gmail.com', 10, '2021-07-07 06:32:19', 1),
(63, '::1', 'sultan@gmail.com', 11, '2021-07-07 07:22:01', 1),
(64, '::1', 'admin@gmail.com', 9, '2021-07-07 07:24:27', 1),
(65, '::1', 'admin@gmail.com', 9, '2021-07-07 07:26:02', 1),
(66, '::1', 'admin@gmail.com', 9, '2021-07-07 08:09:09', 1),
(67, '::1', 'admin@gmail.com', 9, '2021-07-07 08:11:20', 1),
(68, '::1', 'admin', NULL, '2021-07-07 08:13:04', 0),
(69, '::1', 'admin@gmail.com', 9, '2021-07-07 08:13:13', 1),
(70, '::1', 'admin@gmail.com', 9, '2021-07-07 15:53:10', 1),
(71, '::1', 'admin@gmail.com', 9, '2021-07-07 17:22:16', 1),
(72, '::1', 'admin@gmail.com', 9, '2021-07-08 08:02:11', 1),
(73, '::1', 'admin@gmail.com', 9, '2021-07-08 08:06:09', 1),
(74, '::1', 'admin@gmail.com', 9, '2021-07-08 08:23:05', 1),
(75, '::1', 'admin@gmail.com', 9, '2021-07-09 08:47:16', 1),
(76, '::1', 'admin@gmail.com', 9, '2021-07-09 08:49:34', 1),
(77, '::1', 'sultan@gmail.com', 11, '2021-07-09 08:51:07', 1),
(78, '::1', 'admin@gmail.com', 9, '2021-07-09 09:41:21', 1),
(79, '::1', 'admin@gmail.com', 9, '2021-07-09 09:42:11', 1),
(80, '::1', 'admin@gmail.com', 9, '2021-07-09 09:44:58', 1),
(81, '::1', 'admin@gmail.com', 9, '2021-07-09 10:03:15', 1),
(82, '::1', 'admin@gmail.com', 9, '2021-07-09 10:11:09', 1),
(83, '::1', 'admin@gmail.com', 9, '2021-07-09 10:42:12', 1),
(84, '::1', 'admin@gmail.com', 9, '2021-07-09 11:01:03', 1),
(85, '::1', 'admin', NULL, '2021-07-09 11:02:32', 0),
(86, '::1', 'admin@gmail.com', 9, '2021-07-09 11:02:39', 1),
(87, '::1', 'admin@gmail.com', 9, '2021-07-09 11:35:52', 1),
(88, '::1', 'admin@gmail.com', 9, '2021-07-09 11:41:08', 1),
(89, '::1', 'admin', NULL, '2021-07-09 11:52:25', 0),
(90, '::1', 'admin', NULL, '2021-07-09 11:52:25', 0),
(91, '::1', 'admin@gmail.com', 9, '2021-07-09 11:52:33', 1),
(92, '::1', 'admin@gmail.com', 9, '2021-07-09 14:00:49', 1),
(93, '::1', 'admin@gmail.com', 9, '2021-07-09 14:02:19', 1),
(94, '::1', 'admin@gmail.com', 9, '2021-07-09 14:48:15', 1),
(95, '::1', 'admin@gmail.com', 9, '2021-07-11 04:50:17', 1),
(96, '::1', 'admin', NULL, '2021-07-11 05:03:20', 0),
(97, '::1', 'admin@gmail.com', 9, '2021-07-11 05:03:31', 1),
(98, '::1', 'admin@gmail.com', 9, '2021-07-11 05:45:06', 1),
(99, '::1', 'admin@gmail.com', 9, '2021-07-12 06:34:13', 1),
(100, '::1', 'admin@gmail.com', 9, '2021-07-12 07:07:36', 1),
(101, '::1', 'admin@gmail.com', 9, '2021-07-13 03:51:57', 1),
(102, '::1', 'sultan', NULL, '2021-07-13 03:58:05', 0),
(103, '::1', 'sultan', NULL, '2021-07-13 03:58:20', 0),
(104, '::1', 'arkaleonant@gmail.com', 12, '2021-07-13 03:59:18', 1),
(105, '::1', 'arkaleonant@gmail.com', 12, '2021-07-13 04:01:49', 1),
(106, '::1', 'admin@gmail.com', 9, '2021-07-13 09:19:03', 1),
(107, '::1', 'admin@gmail.com', 9, '2021-07-14 04:15:51', 1),
(108, '::1', 'faiz@gmail.com', 13, '2021-07-14 04:17:38', 1),
(109, '::1', 'admin', NULL, '2021-07-14 04:18:37', 0),
(110, '::1', 'admin@gmail.com', 9, '2021-07-14 04:18:54', 1),
(111, '::1', 'admin@gmail.com', 9, '2021-07-14 04:37:58', 1),
(112, '::1', 'admin@gmail.com', 9, '2021-07-14 07:39:12', 1),
(113, '::1', 'admin@gmail.com', 9, '2021-07-14 09:36:12', 1),
(114, '::1', 'admin', NULL, '2021-07-14 09:40:52', 0),
(115, '::1', 'admin', NULL, '2021-07-14 09:41:03', 0),
(116, '::1', 'admin@gmail.com', 14, '2021-07-14 09:43:07', 1),
(117, '::1', 'admin', NULL, '2021-07-14 09:47:05', 0),
(118, '::1', 'admin@gmail.com', 15, '2021-07-14 09:47:13', 1),
(119, '::1', 'admin@gmail.com', 16, '2021-07-14 09:51:50', 1),
(120, '::1', 'admin@gmail.com', 17, '2021-07-14 09:57:26', 1),
(121, '::1', 'admin@gmail.com', 17, '2021-07-14 09:58:04', 1),
(122, '::1', 'admin@gmail.com', 18, '2021-07-14 09:59:47', 1),
(123, '::1', 'admin@gmail.com', 18, '2021-07-14 14:07:45', 1),
(124, '::1', 'arka', NULL, '2021-07-14 14:14:18', 0),
(125, '::1', 'khariza22@gmail.com', 20, '2021-07-14 14:15:05', 1),
(126, '::1', 'admin@gmail.com', 18, '2021-07-15 06:52:29', 1),
(127, '::1', 'admin@gmail.com', 18, '2021-07-15 14:40:27', 1),
(128, '::1', 'admin@gmail.com', 21, '2021-07-15 17:14:42', 1),
(129, '::1', 'admin@gmail.com', 22, '2021-07-15 17:21:42', 1),
(130, '::1', 'admin@gmail.com', 23, '2021-07-15 17:23:30', 1),
(131, '::1', 'admin@gmail.com', 24, '2021-07-15 17:45:49', 1),
(132, '::1', 'admin', NULL, '2021-07-15 17:50:32', 0),
(133, '::1', 'admin@gmail.com', 25, '2021-07-15 17:57:40', 1),
(134, '::1', 'admin', NULL, '2021-07-15 18:02:31', 0),
(135, '::1', 'admin@gmail.com', 26, '2021-07-15 18:02:39', 1),
(136, '::1', 'admin@gmail.com', 27, '2021-07-15 18:05:50', 1),
(137, '::1', 'admin@gmail.com', 28, '2021-07-15 18:21:28', 1),
(138, '::1', 'admin@gmail.com', 29, '2021-07-15 18:29:38', 1),
(139, '::1', 'admin@gmail.com', 29, '2021-07-15 18:41:49', 1),
(140, '::1', 'admin@gmail.com', 32, '2021-07-15 18:42:56', 1),
(141, '::1', 'admin@gmail.com', 33, '2021-07-15 18:44:28', 1),
(142, '::1', 'admin@gmail.com', 33, '2021-07-15 18:44:38', 1),
(143, '::1', 'admin@gmail.com', 33, '2021-07-15 18:49:41', 1),
(144, '::1', 'admin@gmail.com', 37, '2021-07-15 18:51:19', 1),
(145, '::1', 'admin@gmail.com', 38, '2021-07-15 18:54:29', 1),
(146, '::1', 'admin@gmail.com', 39, '2021-07-15 19:01:29', 1),
(147, '::1', 'admin@gmail.com', 40, '2021-07-15 19:06:27', 1),
(148, '::1', 'admin@gmail.com', 41, '2021-07-15 19:11:34', 1),
(149, '::1', 'admin@gmail.com', 42, '2021-07-15 19:19:33', 1),
(150, '::1', 'admin@gmail.com', 43, '2021-07-15 19:28:28', 1),
(151, '::1', 'admin', NULL, '2021-07-17 07:59:59', 0),
(152, '::1', 'admin@gmail.com', 44, '2021-07-17 08:00:35', 1),
(153, '::1', 'admin@gmail.com', 45, '2021-07-17 08:02:12', 1),
(154, '::1', 'admin@gmail.com', 45, '2021-07-17 08:02:21', 1),
(155, '::1', 'admin@gmail.com', 45, '2021-07-19 02:31:39', 1),
(156, '::1', 'admin@gmail.com', 45, '2021-07-19 08:28:51', 1),
(157, '::1', 'admin@gmail.com', 46, '2021-07-19 09:39:27', 1),
(158, '::1', 'faiz@gmail.com', 36, '2021-07-19 09:40:09', 1),
(159, '::1', 'admin@gmail.com', 46, '2021-07-19 19:50:54', 1),
(160, '::1', 'admin@gmail.com', 47, '2021-07-19 19:53:55', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'Manage All User'),
(2, 'manage-profile', 'manage user\'s profile');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1622686619, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `alamat` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `username`, `fullname`, `user_image`, `alamat`, `tempat_lahir`, `tgl`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(34, NULL, NULL, 'khariza22@gmail.com', 'iqbal', NULL, 'default.svg', NULL, NULL, NULL, '$2y$10$qoh.xY1W34OMUJQFwKlTvOiAKfhSDvnbI4tIirydeJXW02L.lwXja', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-07-15 18:48:40', '2021-07-15 18:48:40', NULL),
(35, NULL, NULL, 'arkaleonant@gmail.com', 'arka', NULL, 'default.svg', NULL, NULL, NULL, '$2y$10$zRI73apfyQBWBWtogrpTTOZfQIQ3oDfFftXI3l3ERAY7mR.YeOvbi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-07-15 18:49:05', '2021-07-15 18:49:05', NULL),
(36, NULL, NULL, 'faiz@gmail.com', 'faiz', NULL, 'default.svg', NULL, NULL, NULL, '$2y$10$JLuh5uR5XS/loVI/NUA8CeMyItV89AUihIzFdivCDT4l7eom7V8jG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-07-15 18:49:35', '2021-07-15 18:49:35', NULL),
(47, NULL, NULL, 'admin@gmail.com', 'admin', NULL, 'default.svg', NULL, NULL, NULL, '$2y$10$YZbGfSL1HCOMPx9mlEjc4.Lhkebd/NO/Yj32TqbVWe9DKJzPDEfpm', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-07-19 19:53:02', '2021-07-19 19:53:02', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
