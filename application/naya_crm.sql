-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2021 at 11:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `naya_crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `audit_trail`
--

CREATE TABLE `audit_trail` (
                               `id` int(255) NOT NULL,
                               `action` varchar(255) NOT NULL,
                               `status` varchar(255) NOT NULL,
                               `time_of_action` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                               `ip_address` varchar(255) NOT NULL,
                               `user_id` int(255) NOT NULL,
                               `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audit_trail`
--

INSERT INTO `audit_trail` (`id`, `action`, `status`, `time_of_action`, `ip_address`, `user_id`, `username`) VALUES
(1, 'Create Quote', 'Success', '2021-07-05 11:39:08', '127.0.0.1', 1, ''),
(2, 'Create Quote', 'Success', '2021-07-05 11:40:24', '127.0.0.1', 1, ''),
(3, 'Create Quote', 'Success', '2021-07-05 11:40:30', '127.0.0.1', 1, ''),
(4, 'Create Quote', 'Success', '2021-07-05 11:40:48', '127.0.0.1', 1, ''),
(5, 'Create Quote', 'Success', '2021-07-05 11:41:02', '127.0.0.1', 1, ''),
(6, 'Create Quote', 'Success', '2021-07-05 11:41:43', '127.0.0.1', 1, ''),
(7, 'Create Quote', 'Success', '2021-07-05 11:42:06', '127.0.0.1', 1, ''),
(8, 'Create Quote', 'Success', '2021-07-05 11:42:47', '127.0.0.1', 1, ''),
(9, 'Create Quote', 'Success', '2021-07-05 11:43:12', '127.0.0.1', 1, ''),
(10, 'Create Quote', 'Success', '2021-07-05 11:44:45', '127.0.0.1', 1, ''),
(11, 'Create Quote', 'Success', '2021-07-05 11:44:48', '127.0.0.1', 1, ''),
(12, 'Create Quote', 'Success', '2021-07-05 11:47:46', '127.0.0.1', 1, ''),
(13, 'Create Quote', 'Success', '2021-07-05 11:51:33', '127.0.0.1', 1, ''),
(14, 'Create Quote', 'Success', '2021-07-05 11:51:43', '127.0.0.1', 1, ''),
(15, 'Create Quote', 'Success', '2021-07-05 11:57:14', '127.0.0.1', 1, ''),
(16, 'Create Quote', 'Success', '2021-07-05 11:57:23', '127.0.0.1', 1, ''),
(17, 'Create Quote', 'Success', '2021-07-05 11:59:10', '127.0.0.1', 1, ''),
(18, 'Create Quote', 'Success', '2021-07-05 12:03:30', '127.0.0.1', 1, ''),
(19, 'Create Quote', 'Success', '2021-07-05 12:06:39', '127.0.0.1', 1, ''),
(20, 'Create Quote', 'Success', '2021-07-05 12:06:43', '127.0.0.1', 1, ''),
(21, 'Create Quote', 'Success', '2021-07-05 12:13:26', '127.0.0.1', 1, ''),
(22, 'Create Quote', 'Success', '2021-07-05 12:14:00', '127.0.0.1', 1, ''),
(23, 'Create Quote', 'Success', '2021-07-05 12:14:18', '127.0.0.1', 1, ''),
(24, 'Create Quote', 'Success', '2021-07-05 12:18:10', '127.0.0.1', 1, ''),
(25, 'Create Quote', 'Success', '2021-07-05 12:20:34', '127.0.0.1', 1, ''),
(26, 'Create Quote', 'Success', '2021-07-05 12:22:20', '127.0.0.1', 1, ''),
(27, 'Create Quote', 'Success', '2021-07-05 12:27:53', '127.0.0.1', 1, ''),
(28, 'Create Quote', 'Success', '2021-07-05 12:51:24', '127.0.0.1', 1, ''),
(29, 'Create Quote', 'Success', '2021-07-05 12:51:45', '127.0.0.1', 1, ''),
(30, 'Create Quote', 'Success', '2021-07-05 12:57:18', '127.0.0.1', 1, ''),
(31, 'Create Quote', 'Success', '2021-07-05 12:57:51', '127.0.0.1', 1, ''),
(32, 'Create Quote', 'Success', '2021-07-05 12:57:57', '127.0.0.1', 1, ''),
(33, 'Create Quote', 'Success', '2021-07-05 12:58:11', '127.0.0.1', 1, ''),
(34, 'Create Quote', 'Success', '2021-07-05 12:58:16', '127.0.0.1', 1, ''),
(35, 'Create Quote', 'Success', '2021-07-05 12:59:38', '127.0.0.1', 1, ''),
(36, 'Create Quote', 'Success', '2021-07-05 12:59:45', '127.0.0.1', 1, ''),
(37, 'Create Quote', 'Success', '2021-07-05 12:59:47', '127.0.0.1', 1, ''),
(38, 'Create Quote', 'Success', '2021-07-05 13:00:14', '127.0.0.1', 1, ''),
(39, 'Create Quote', 'Success', '2021-07-05 13:04:06', '127.0.0.1', 1, ''),
(40, 'Create Quote', 'Success', '2021-07-05 13:05:10', '127.0.0.1', 1, ''),
(41, 'Create Quote', 'Success', '2021-07-05 13:06:38', '127.0.0.1', 1, ''),
(42, 'Create Quote', 'Success', '2021-07-05 13:08:10', '127.0.0.1', 1, ''),
(43, 'Create Quote', 'Success', '2021-07-05 13:08:25', '127.0.0.1', 1, ''),
(44, 'Create Quote', 'Success', '2021-07-05 13:08:32', '127.0.0.1', 1, ''),
(45, 'Create Quote', 'Success', '2021-07-05 13:08:47', '127.0.0.1', 1, ''),
(46, 'Create Quote', 'Success', '2021-07-05 13:09:15', '127.0.0.1', 1, ''),
(47, 'Create Quote', 'Success', '2021-07-05 13:11:12', '127.0.0.1', 1, ''),
(48, 'Create Quote', 'Success', '2021-07-05 13:11:27', '127.0.0.1', 1, ''),
(49, 'Create Quote', 'Success', '2021-07-05 13:24:08', '127.0.0.1', 1, ''),
(50, 'Create Quote', 'Success', '2021-07-05 13:24:45', '127.0.0.1', 1, ''),
(51, 'Create Quote', 'Success', '2021-07-05 13:24:56', '127.0.0.1', 1, ''),
(52, 'Create Quote', 'Success', '2021-07-05 13:25:23', '127.0.0.1', 1, ''),
(53, 'Create Quote', 'Success', '2021-07-05 13:25:48', '127.0.0.1', 1, ''),
(54, 'Create Quote', 'Success', '2021-07-05 13:26:32', '127.0.0.1', 1, ''),
(55, 'Create Quote', 'Success', '2021-07-05 13:27:23', '127.0.0.1', 1, ''),
(56, 'Create Quote', 'Success', '2021-07-05 13:27:53', '127.0.0.1', 1, ''),
(57, 'Create Quote', 'Success', '2021-07-05 13:28:53', '127.0.0.1', 1, ''),
(58, 'Create Quote', 'Success', '2021-07-05 13:32:48', '127.0.0.1', 1, ''),
(59, 'Create Quote', 'Success', '2021-07-05 13:34:18', '127.0.0.1', 1, ''),
(60, 'Create Quote', 'Success', '2021-07-05 13:34:43', '127.0.0.1', 1, ''),
(61, 'Create Quote', 'Success', '2021-07-05 13:35:15', '127.0.0.1', 1, ''),
(62, 'Create Quote', 'Success', '2021-07-05 13:35:37', '127.0.0.1', 1, ''),
(63, 'Create Quote', 'Success', '2021-07-05 13:35:51', '127.0.0.1', 1, ''),
(64, 'Create Quote', 'Success', '2021-07-05 13:36:24', '127.0.0.1', 1, ''),
(65, 'Create Quote', 'Success', '2021-07-05 13:36:28', '127.0.0.1', 1, ''),
(66, 'Create Quote', 'Success', '2021-07-05 13:36:43', '127.0.0.1', 1, ''),
(67, 'Create Quote', 'Success', '2021-07-05 13:37:12', '127.0.0.1', 1, ''),
(68, 'Create Quote', 'Success', '2021-07-05 13:37:32', '127.0.0.1', 1, ''),
(69, 'Create Quote', 'Success', '2021-07-05 13:37:39', '127.0.0.1', 1, ''),
(70, 'Create Quote', 'Success', '2021-07-05 13:38:10', '127.0.0.1', 1, ''),
(71, 'Create Quote', 'Success', '2021-07-05 13:39:46', '127.0.0.1', 1, ''),
(72, 'Create Quote', 'Success', '2021-07-05 13:45:40', '127.0.0.1', 1, ''),
(73, 'Create Quote', 'Success', '2021-07-05 13:46:19', '127.0.0.1', 1, ''),
(74, 'Create Quote', 'Success', '2021-07-05 13:49:39', '127.0.0.1', 1, ''),
(75, 'Create Quote', 'Success', '2021-07-05 13:50:26', '127.0.0.1', 1, ''),
(76, 'Create Quote', 'Success', '2021-07-05 13:50:48', '127.0.0.1', 1, ''),
(77, 'Create Quote', 'Success', '2021-07-05 13:52:16', '127.0.0.1', 1, ''),
(78, 'Create Quote', 'Success', '2021-07-05 13:52:40', '127.0.0.1', 1, ''),
(79, 'Create Quote', 'Success', '2021-07-05 13:53:34', '127.0.0.1', 1, ''),
(80, 'Create Quote', 'Success', '2021-07-05 13:53:57', '127.0.0.1', 1, ''),
(81, 'Create Quote', 'Success', '2021-07-05 13:55:14', '127.0.0.1', 1, ''),
(82, 'Create Quote', 'Success', '2021-07-05 13:55:48', '127.0.0.1', 1, ''),
(83, 'Create Quote', 'Success', '2021-07-05 13:55:58', '127.0.0.1', 1, ''),
(84, 'Create Quote', 'Success', '2021-07-05 13:57:03', '127.0.0.1', 1, ''),
(85, 'Create Quote', 'Success', '2021-07-05 13:57:21', '127.0.0.1', 1, ''),
(86, 'Create Quote', 'Success', '2021-07-05 13:57:46', '127.0.0.1', 1, ''),
(87, 'Create Quote', 'Success', '2021-07-05 13:57:52', '127.0.0.1', 1, ''),
(88, 'Create Quote', 'Success', '2021-07-05 13:58:10', '127.0.0.1', 1, ''),
(89, 'Create Quote', 'Success', '2021-07-05 13:59:05', '127.0.0.1', 1, ''),
(90, 'Create Quote', 'Success', '2021-07-05 13:59:51', '127.0.0.1', 1, ''),
(91, 'Create Quote', 'Success', '2021-07-05 14:00:14', '127.0.0.1', 1, ''),
(92, 'Create Quote', 'Success', '2021-07-05 14:00:18', '127.0.0.1', 1, ''),
(93, 'Create Quote', 'Success', '2021-07-05 14:00:51', '127.0.0.1', 1, ''),
(94, 'Create Quote', 'Success', '2021-07-05 14:01:00', '127.0.0.1', 1, ''),
(95, 'Create Quote', 'Success', '2021-07-05 14:01:22', '127.0.0.1', 1, ''),
(96, 'Create Quote', 'Success', '2021-07-05 14:01:50', '127.0.0.1', 1, ''),
(97, 'Create Quote', 'Success', '2021-07-05 14:05:18', '127.0.0.1', 1, ''),
(98, 'Create Quote', 'Success', '2021-07-05 14:05:53', '127.0.0.1', 1, ''),
(99, 'Create Quote', 'Success', '2021-07-05 14:06:21', '127.0.0.1', 1, ''),
(100, 'Create Quote', 'Success', '2021-07-05 14:06:50', '127.0.0.1', 1, ''),
(101, 'Create Quote', 'Success', '2021-07-05 14:07:00', '127.0.0.1', 1, ''),
(102, 'Create Quote', 'Success', '2021-07-05 14:07:20', '127.0.0.1', 1, ''),
(103, 'Create Quote', 'Success', '2021-07-05 14:08:24', '127.0.0.1', 1, ''),
(104, 'Create Quote', 'Success', '2021-07-05 14:08:52', '127.0.0.1', 1, ''),
(105, 'Create Quote', 'Success', '2021-07-05 14:10:05', '127.0.0.1', 1, ''),
(106, 'Create Quote', 'Success', '2021-07-05 14:10:40', '127.0.0.1', 1, ''),
(107, 'Create Quote', 'Success', '2021-07-05 14:10:53', '127.0.0.1', 1, ''),
(108, 'Create Quote', 'Success', '2021-07-05 14:11:44', '127.0.0.1', 1, ''),
(109, 'Create Quote', 'Success', '2021-07-05 14:11:53', '127.0.0.1', 1, ''),
(110, 'Create Quote', 'Success', '2021-07-05 14:12:41', '127.0.0.1', 1, ''),
(111, 'Create Quote', 'Success', '2021-07-05 14:14:04', '127.0.0.1', 1, ''),
(112, 'Create Quote', 'Success', '2021-07-05 14:14:24', '127.0.0.1', 1, ''),
(113, 'Create Quote', 'Success', '2021-07-05 14:14:41', '127.0.0.1', 1, ''),
(114, 'Create Quote', 'Success', '2021-07-05 14:14:45', '127.0.0.1', 1, ''),
(115, 'Create Quote', 'Success', '2021-07-05 14:17:19', '127.0.0.1', 1, ''),
(116, 'Create Quote', 'Success', '2021-07-05 14:17:50', '127.0.0.1', 1, ''),
(117, 'Create Quote', 'Success', '2021-07-05 14:20:17', '127.0.0.1', 1, ''),
(118, 'Create Quote', 'Success', '2021-07-05 14:20:54', '127.0.0.1', 1, ''),
(119, 'Create Quote', 'Success', '2021-07-05 14:21:26', '127.0.0.1', 1, ''),
(120, 'Create Quote', 'Success', '2021-07-05 14:23:10', '127.0.0.1', 1, ''),
(121, 'Create Quote', 'Success', '2021-07-05 14:23:36', '127.0.0.1', 1, ''),
(122, 'Create Quote', 'Success', '2021-07-05 14:24:29', '127.0.0.1', 1, ''),
(123, 'Create Quote', 'Success', '2021-07-05 14:24:54', '127.0.0.1', 1, ''),
(124, 'Create Quote', 'Success', '2021-07-05 14:25:26', '127.0.0.1', 1, ''),
(125, 'Create Quote', 'Success', '2021-07-05 14:26:18', '127.0.0.1', 1, ''),
(126, 'Create Quote', 'Success', '2021-07-05 14:27:22', '127.0.0.1', 1, ''),
(127, 'Create Quote', 'Success', '2021-07-05 14:28:21', '127.0.0.1', 1, ''),
(128, 'Create Quote', 'Success', '2021-07-05 14:28:43', '127.0.0.1', 1, ''),
(129, 'Create Quote', 'Success', '2021-07-05 14:30:07', '127.0.0.1', 1, ''),
(130, 'Create Quote', 'Success', '2021-07-05 14:31:54', '127.0.0.1', 1, ''),
(131, 'Create Quote', 'Success', '2021-07-05 14:33:01', '127.0.0.1', 1, ''),
(132, 'Create Quote', 'Success', '2021-07-05 14:34:11', '127.0.0.1', 1, ''),
(133, 'Create Quote', 'Success', '2021-07-05 14:36:06', '127.0.0.1', 1, ''),
(134, 'Create Quote', 'Success', '2021-07-05 14:36:36', '127.0.0.1', 1, ''),
(135, 'Create Quote', 'Success', '2021-07-05 14:37:32', '127.0.0.1', 1, ''),
(136, 'Create Quote', 'Success', '2021-07-05 14:40:00', '127.0.0.1', 1, ''),
(137, 'Create Quote', 'Success', '2021-07-05 14:41:48', '127.0.0.1', 1, ''),
(138, 'Create Quote', 'Success', '2021-07-05 14:42:06', '127.0.0.1', 1, ''),
(139, 'Create Quote', 'Success', '2021-07-05 14:42:36', '127.0.0.1', 1, ''),
(140, 'Create Quote', 'Success', '2021-07-05 14:42:55', '127.0.0.1', 1, ''),
(141, 'Create Quote', 'Success', '2021-07-05 14:44:18', '127.0.0.1', 1, ''),
(142, 'Create Quote', 'Success', '2021-07-05 14:48:53', '127.0.0.1', 1, ''),
(143, 'Create Quote', 'Success', '2021-07-05 14:49:18', '127.0.0.1', 1, ''),
(144, 'Create Quote', 'Success', '2021-07-05 14:49:35', '127.0.0.1', 1, ''),
(145, 'Create Quote', 'Success', '2021-07-05 14:49:45', '127.0.0.1', 1, ''),
(146, 'Create Quote', 'Success', '2021-07-05 14:50:32', '127.0.0.1', 1, ''),
(147, 'Create Quote', 'Success', '2021-07-05 14:50:47', '127.0.0.1', 1, ''),
(148, 'Create Quote', 'Success', '2021-07-05 14:51:44', '127.0.0.1', 1, ''),
(149, 'Create Quote', 'Success', '2021-07-05 14:52:09', '127.0.0.1', 1, ''),
(150, 'Create Quote', 'Success', '2021-07-05 14:53:00', '127.0.0.1', 1, ''),
(151, 'Create Quote', 'Success', '2021-07-05 14:53:36', '127.0.0.1', 1, ''),
(152, 'Create Quote', 'Success', '2021-07-05 14:54:01', '127.0.0.1', 1, ''),
(153, 'Create Quote', 'Success', '2021-07-05 14:54:43', '127.0.0.1', 1, ''),
(154, 'Create Quote', 'Success', '2021-07-05 14:55:11', '127.0.0.1', 1, ''),
(155, 'Create Quote', 'Success', '2021-07-05 14:55:28', '127.0.0.1', 1, ''),
(156, 'Create Quote', 'Success', '2021-07-05 14:56:26', '127.0.0.1', 1, ''),
(157, 'Create Quote', 'Success', '2021-07-05 14:57:23', '127.0.0.1', 1, ''),
(158, 'Create Quote', 'Success', '2021-07-05 14:59:12', '127.0.0.1', 1, ''),
(159, 'Create Quote', 'Success', '2021-07-05 15:00:01', '127.0.0.1', 1, ''),
(160, 'Create Quote', 'Success', '2021-07-05 15:13:01', '127.0.0.1', 1, ''),
(161, 'Create Quote', 'Success', '2021-07-05 15:13:50', '127.0.0.1', 1, ''),
(162, 'Create Quote', 'Success', '2021-07-05 15:14:46', '127.0.0.1', 1, ''),
(163, 'Create Quote', 'Success', '2021-07-05 16:26:20', '127.0.0.1', 1, ''),
(164, 'Create Quote', 'Success', '2021-07-05 17:54:46', '127.0.0.1', 1, ''),
(165, 'Create Quote', 'Success', '2021-07-06 06:03:13', '127.0.0.1', 1, ''),
(166, 'Create Quote', 'Success', '2021-07-06 06:09:51', '127.0.0.1', 1, ''),
(167, 'Create Quote', 'Success', '2021-07-06 06:13:13', '127.0.0.1', 1, ''),
(168, 'Create Quote', 'Success', '2021-07-06 06:15:42', '127.0.0.1', 1, ''),
(169, 'Create Quote', 'Success', '2021-07-06 06:27:07', '127.0.0.1', 1, ''),
(170, 'Create Quote', 'Success', '2021-07-06 06:28:24', '127.0.0.1', 1, ''),
(171, 'Create Quote', 'Success', '2021-07-06 06:29:35', '127.0.0.1', 1, ''),
(172, 'Create Quote', 'Success', '2021-07-06 06:31:49', '127.0.0.1', 1, ''),
(173, 'Create Quote', 'Success', '2021-07-06 06:32:21', '127.0.0.1', 1, ''),
(174, 'Create Quote', 'Success', '2021-07-06 06:33:39', '127.0.0.1', 1, ''),
(175, 'Create Quote', 'Success', '2021-07-06 06:34:11', '127.0.0.1', 1, ''),
(176, 'Create Quote', 'Success', '2021-07-06 06:34:39', '127.0.0.1', 1, ''),
(177, 'Create Quote', 'Success', '2021-07-06 06:34:48', '127.0.0.1', 1, ''),
(178, 'Create Quote', 'Success', '2021-07-06 06:35:57', '127.0.0.1', 1, ''),
(179, 'Create Quote', 'Success', '2021-07-06 06:37:31', '127.0.0.1', 1, ''),
(180, 'Create Quote', 'Success', '2021-07-06 06:39:09', '127.0.0.1', 1, ''),
(181, 'Create Quote', 'Success', '2021-07-06 06:40:13', '127.0.0.1', 1, ''),
(182, 'Create Quote', 'Success', '2021-07-06 06:43:09', '127.0.0.1', 1, ''),
(183, 'Create Quote', 'Success', '2021-07-06 06:44:03', '127.0.0.1', 1, ''),
(184, 'Create Quote', 'Success', '2021-07-06 06:45:21', '127.0.0.1', 1, ''),
(185, 'Create Quote', 'Success', '2021-07-06 06:45:46', '127.0.0.1', 1, ''),
(186, 'Create Quote', 'Success', '2021-07-06 06:55:59', '127.0.0.1', 1, ''),
(187, 'Create Quote', 'Success', '2021-07-06 06:57:12', '127.0.0.1', 1, ''),
(188, 'Create Quote', 'Success', '2021-07-06 06:59:58', '127.0.0.1', 1, ''),
(189, 'Create Quote', 'Success', '2021-07-06 07:04:07', '127.0.0.1', 1, ''),
(190, 'Create Quote', 'Success', '2021-07-06 07:07:52', '127.0.0.1', 1, ''),
(191, 'Create Quote', 'Success', '2021-07-06 07:09:51', '127.0.0.1', 1, ''),
(192, 'Create Quote', 'Success', '2021-07-06 09:51:35', '127.0.0.1', 1, ''),
(193, 'Create Quote', 'Success', '2021-07-06 09:56:17', '127.0.0.1', 1, ''),
(194, 'Create Quote', 'Success', '2021-07-06 09:57:04', '127.0.0.1', 1, ''),
(195, 'Create Quote', 'Success', '2021-07-06 09:57:28', '127.0.0.1', 1, ''),
(196, 'Create Quote', 'Success', '2021-07-06 10:29:27', '127.0.0.1', 1, ''),
(197, 'Create Quote', 'Success', '2021-07-06 10:29:51', '127.0.0.1', 1, ''),
(198, 'Create Quote', 'Success', '2021-07-06 10:31:08', '127.0.0.1', 1, ''),
(199, 'Create Quote', 'Success', '2021-07-06 10:32:26', '127.0.0.1', 1, ''),
(200, 'Create Quote', 'Success', '2021-07-06 10:32:54', '127.0.0.1', 1, ''),
(201, 'Create Quote', 'Success', '2021-07-06 10:33:02', '127.0.0.1', 1, ''),
(202, 'Create Quote', 'Success', '2021-07-06 10:34:29', '127.0.0.1', 1, ''),
(203, 'Create Quote', 'Success', '2021-07-06 10:55:08', '127.0.0.1', 1, ''),
(204, 'Create Quote', 'Success', '2021-07-06 10:57:41', '127.0.0.1', 1, ''),
(205, 'Create Quote', 'Success', '2021-07-06 10:58:15', '127.0.0.1', 1, ''),
(206, 'Create Quote', 'Success', '2021-07-06 11:00:36', '127.0.0.1', 1, ''),
(207, 'Create Quote', 'Success', '2021-07-06 11:02:24', '127.0.0.1', 1, ''),
(208, 'Create Quote', 'Success', '2021-07-06 11:02:38', '127.0.0.1', 1, ''),
(209, 'Create Quote', 'Success', '2021-07-06 11:03:08', '127.0.0.1', 1, ''),
(210, 'Create Quote', 'Success', '2021-07-06 11:05:58', '127.0.0.1', 1, ''),
(211, 'Create Quote', 'Success', '2021-07-06 11:07:19', '127.0.0.1', 1, ''),
(212, 'Create Quote', 'Success', '2021-07-06 11:10:13', '127.0.0.1', 1, ''),
(213, 'Create Quote', 'Success', '2021-07-06 12:03:12', '127.0.0.1', 1, ''),
(214, 'Create Quote', 'Success', '2021-07-06 12:05:39', '127.0.0.1', 1, ''),
(215, 'Create Quote', 'Success', '2021-07-06 12:07:27', '127.0.0.1', 1, ''),
(216, 'Create Quote', 'Success', '2021-07-07 06:43:00', '::1', 1, ''),
(217, 'Create Quote', 'Success', '2021-07-07 06:51:04', '::1', 1, ''),
(218, 'Create Quote', 'Success', '2021-07-07 06:53:00', '::1', 1, ''),
(219, 'Create Quote', 'Success', '2021-07-07 06:57:49', '::1', 1, ''),
(220, 'Create Quote', 'Success', '2021-07-07 07:00:56', '::1', 1, ''),
(221, 'Create Quote', 'Success', '2021-07-07 07:02:08', '::1', 1, ''),
(222, 'Create Quote', 'Success', '2021-07-07 07:11:37', '::1', 1, ''),
(223, 'Create Quote', 'Success', '2021-07-07 07:25:03', '::1', 1, ''),
(224, 'Create Quote', 'Success', '2021-07-09 06:11:11', '127.0.0.1', 1, ''),
(225, 'Create Quote', 'Success', '2021-07-09 06:41:41', '127.0.0.1', 1, ''),
(226, 'Create Quote', 'Success', '2021-07-17 14:20:21', '127.0.0.1', 1, ''),
(227, 'Create Quote', 'Success', '2021-07-17 14:25:00', '127.0.0.1', 1, ''),
(228, 'Create Quote', 'Success', '2021-07-17 14:26:05', '127.0.0.1', 1, ''),
(229, 'Create Quote', 'Success', '2021-07-17 14:27:42', '127.0.0.1', 1, ''),
(230, 'Create Quote', 'Success', '2021-07-17 14:30:02', '127.0.0.1', 1, ''),
(231, 'Create Quote', 'Success', '2021-07-17 14:30:43', '127.0.0.1', 1, ''),
(232, 'Create Quote', 'Success', '2021-07-17 14:40:16', '127.0.0.1', 1, ''),
(233, 'Create Quote', 'Success', '2021-07-17 14:41:15', '127.0.0.1', 1, ''),
(234, 'Create Quote', 'Success', '2021-07-17 14:41:49', '127.0.0.1', 1, ''),
(235, 'Create Quote', 'Success', '2021-07-17 14:42:18', '127.0.0.1', 1, ''),
(236, 'Create Quote', 'Success', '2021-07-17 14:43:18', '127.0.0.1', 1, ''),
(237, 'Create Quote', 'Success', '2021-07-21 10:05:37', '127.0.0.1', 1, ''),
(238, 'Create Quote', 'Success', '2021-07-21 10:06:02', '127.0.0.1', 1, ''),
(239, 'Create Quote', 'Success', '2021-07-21 10:07:11', '127.0.0.1', 1, ''),
(240, 'Create Quote', 'Success', '2021-07-21 10:07:37', '127.0.0.1', 1, ''),
(241, 'Create Quote', 'Success', '2021-07-21 10:10:55', '127.0.0.1', 1, ''),
(242, 'Create Quote', 'Success', '2021-07-21 10:12:52', '127.0.0.1', 1, ''),
(243, 'Create Quote', 'Success', '2021-07-21 10:13:28', '127.0.0.1', 1, ''),
(244, 'Create Quote', 'Success', '2021-07-21 10:15:25', '127.0.0.1', 1, ''),
(245, 'Create Quote', 'Success', '2021-07-21 10:18:58', '127.0.0.1', 1, ''),
(246, 'Create Quote', 'Success', '2021-07-21 10:20:08', '127.0.0.1', 1, ''),
(247, 'Create Quote', 'Success', '2021-07-21 10:20:42', '127.0.0.1', 1, ''),
(248, 'Create Quote', 'Success', '2021-07-21 10:21:01', '127.0.0.1', 1, ''),
(249, 'Create Quote', 'Success', '2021-07-21 10:22:08', '127.0.0.1', 1, ''),
(250, 'Create Quote', 'Success', '2021-07-21 10:22:53', '127.0.0.1', 1, ''),
(251, 'Create Quote', 'Success', '2021-07-21 10:23:28', '127.0.0.1', 1, ''),
(252, 'Create Quote', 'Success', '2021-07-21 10:23:50', '127.0.0.1', 1, ''),
(253, 'Create Quote', 'Success', '2021-07-21 10:24:01', '127.0.0.1', 1, ''),
(254, 'Create Quote', 'Success', '2021-07-21 10:27:29', '127.0.0.1', 1, ''),
(255, 'Create Quote', 'Success', '2021-07-21 10:28:31', '127.0.0.1', 1, ''),
(256, 'Create Quote', 'Success', '2021-07-21 10:30:08', '127.0.0.1', 1, ''),
(257, 'Create Quote', 'Success', '2021-07-21 10:30:14', '127.0.0.1', 1, ''),
(258, 'Create Quote', 'Success', '2021-07-21 10:30:56', '127.0.0.1', 1, ''),
(259, 'Create Quote', 'Success', '2021-07-21 10:31:31', '127.0.0.1', 1, ''),
(260, 'Create Quote', 'Success', '2021-07-21 10:33:56', '127.0.0.1', 1, ''),
(261, 'Create Quote', 'Success', '2021-07-21 10:36:02', '127.0.0.1', 1, ''),
(262, 'Create Quote', 'Success', '2021-07-21 10:36:45', '127.0.0.1', 1, ''),
(263, 'Create Quote', 'Success', '2021-07-21 10:37:35', '127.0.0.1', 1, ''),
(264, 'Create Quote', 'Success', '2021-07-21 10:41:41', '127.0.0.1', 1, ''),
(265, 'Create Quote', 'Success', '2021-07-21 10:42:06', '127.0.0.1', 1, ''),
(266, 'Create Quote', 'Success', '2021-07-21 10:42:59', '127.0.0.1', 1, ''),
(267, 'Create Quote', 'Success', '2021-07-21 10:43:20', '127.0.0.1', 1, ''),
(268, 'Create Quote', 'Success', '2021-07-21 10:45:59', '127.0.0.1', 1, ''),
(269, 'Create Quote', 'Success', '2021-07-21 10:46:37', '127.0.0.1', 1, ''),
(270, 'Create Quote', 'Success', '2021-07-21 10:47:03', '127.0.0.1', 1, ''),
(271, 'Create Quote', 'Success', '2021-07-21 10:47:41', '127.0.0.1', 1, ''),
(272, 'Create Quote', 'Success', '2021-07-21 10:48:44', '127.0.0.1', 1, ''),
(273, 'Create Quote', 'Success', '2021-07-21 16:38:07', '127.0.0.1', 1, ''),
(274, 'Create Quote', 'Success', '2021-07-21 16:56:55', '127.0.0.1', 1, ''),
(275, 'Create Quote', 'Success', '2021-07-21 17:13:36', '127.0.0.1', 1, ''),
(276, 'Create Quote', 'Success', '2021-07-21 17:16:01', '127.0.0.1', 1, ''),
(277, 'Create Quote', 'Success', '2021-07-21 17:17:06', '127.0.0.1', 1, ''),
(278, 'Create Quote', 'Success', '2021-07-21 17:18:30', '127.0.0.1', 1, ''),
(279, 'Create Quote', 'Success', '2021-07-21 17:19:11', '127.0.0.1', 1, ''),
(280, 'Create Quote', 'Success', '2021-07-21 17:19:42', '127.0.0.1', 1, ''),
(281, 'Create Quote', 'Success', '2021-07-21 17:20:16', '127.0.0.1', 1, ''),
(282, 'Create Quote', 'Success', '2021-07-21 17:21:32', '127.0.0.1', 1, ''),
(283, 'Create Quote', 'Success', '2021-07-21 17:23:25', '127.0.0.1', 1, ''),
(284, 'Create Quote', 'Success', '2021-07-21 17:24:29', '127.0.0.1', 1, ''),
(285, 'Create Quote', 'Success', '2021-07-21 17:30:58', '127.0.0.1', 1, ''),
(286, 'Create Quote', 'Success', '2021-07-21 17:45:43', '127.0.0.1', 1, ''),
(287, 'Create Quote', 'Success', '2021-07-21 17:46:31', '127.0.0.1', 1, ''),
(288, 'Create Quote', 'Success', '2021-07-21 17:47:18', '127.0.0.1', 1, ''),
(289, 'Create Quote', 'Success', '2021-07-21 17:48:16', '127.0.0.1', 1, ''),
(290, 'Create Quote', 'Success', '2021-07-21 17:50:46', '127.0.0.1', 1, ''),
(291, 'Create Quote', 'Success', '2021-07-21 17:53:34', '127.0.0.1', 1, ''),
(292, 'Create Quote', 'Success', '2021-07-21 17:55:31', '127.0.0.1', 1, ''),
(293, 'Create Quote', 'Success', '2021-07-21 18:01:05', '127.0.0.1', 1, ''),
(294, 'Create Quote', 'Success', '2021-07-21 18:01:54', '127.0.0.1', 1, ''),
(295, 'Create Quote', 'Success', '2021-07-21 18:05:07', '127.0.0.1', 1, ''),
(296, 'Create Quote', 'Success', '2021-07-21 18:05:56', '127.0.0.1', 1, ''),
(297, 'Create Quote', 'Success', '2021-07-21 18:08:14', '127.0.0.1', 1, ''),
(298, 'Create Quote', 'Success', '2021-07-21 18:09:02', '127.0.0.1', 1, ''),
(299, 'Create Quote', 'Success', '2021-07-21 18:10:05', '127.0.0.1', 1, ''),
(300, 'Create Quote', 'Success', '2021-07-21 18:12:56', '127.0.0.1', 1, ''),
(301, 'Create Quote', 'Success', '2021-07-21 18:13:39', '127.0.0.1', 1, ''),
(302, 'Create Quote', 'Success', '2021-07-21 18:21:26', '127.0.0.1', 1, ''),
(303, 'Create Quote', 'Success', '2021-07-21 18:22:38', '127.0.0.1', 1, ''),
(304, 'Create Quote', 'Success', '2021-07-21 18:23:03', '127.0.0.1', 1, ''),
(305, 'Create Quote', 'Success', '2021-07-21 18:23:47', '127.0.0.1', 1, ''),
(306, 'Create Quote', 'Success', '2021-07-21 18:24:42', '127.0.0.1', 1, ''),
(307, 'Create Quote', 'Success', '2021-07-21 18:25:37', '127.0.0.1', 1, ''),
(308, 'Create Quote', 'Success', '2021-07-21 18:26:36', '127.0.0.1', 1, ''),
(309, 'Create Quote', 'Success', '2021-07-21 18:27:41', '127.0.0.1', 1, ''),
(310, 'Create Quote', 'Success', '2021-07-21 18:28:35', '127.0.0.1', 1, ''),
(311, 'Create Quote', 'Success', '2021-07-21 18:29:33', '127.0.0.1', 1, ''),
(312, 'Create Quote', 'Success', '2021-07-21 18:29:57', '127.0.0.1', 1, ''),
(313, 'Create Quote', 'Success', '2021-07-21 18:30:35', '127.0.0.1', 1, ''),
(314, 'Create Quote', 'Success', '2021-07-21 18:31:43', '127.0.0.1', 1, ''),
(315, 'Create Quote', 'Success', '2021-07-21 18:33:14', '127.0.0.1', 1, ''),
(316, 'Create Quote', 'Success', '2021-07-21 19:29:39', '127.0.0.1', 1, ''),
(317, 'Create Quote', 'Success', '2021-07-21 19:31:09', '127.0.0.1', 1, ''),
(318, 'Create Quote', 'Success', '2021-07-21 19:32:48', '127.0.0.1', 1, ''),
(319, 'Create Quote', 'Success', '2021-07-21 19:33:29', '127.0.0.1', 1, ''),
(320, 'Create Quote', 'Success', '2021-07-21 19:38:19', '127.0.0.1', 1, ''),
(321, 'Create Quote', 'Success', '2021-07-21 19:38:50', '127.0.0.1', 1, ''),
(322, 'Create Quote', 'Success', '2021-07-21 19:39:29', '127.0.0.1', 1, ''),
(323, 'Create Quote', 'Success', '2021-07-21 19:39:40', '127.0.0.1', 1, ''),
(324, 'Create Quote', 'Success', '2021-07-21 19:40:37', '127.0.0.1', 1, ''),
(325, 'Create Quote', 'Success', '2021-07-21 19:41:14', '127.0.0.1', 1, ''),
(326, 'Create Quote', 'Success', '2021-07-21 19:41:32', '127.0.0.1', 1, ''),
(327, 'Create Quote', 'Success', '2021-07-21 19:47:49', '127.0.0.1', 1, ''),
(328, 'Create Quote', 'Success', '2021-07-21 19:48:12', '127.0.0.1', 1, ''),
(329, 'Create Quote', 'Success', '2021-07-21 19:48:33', '127.0.0.1', 1, ''),
(330, 'Create Quote', 'Success', '2021-07-21 19:49:46', '127.0.0.1', 1, ''),
(331, 'Create Quote', 'Success', '2021-07-21 19:50:21', '127.0.0.1', 1, ''),
(332, 'Create Quote', 'Success', '2021-07-21 19:50:47', '127.0.0.1', 1, ''),
(333, 'Create Quote', 'Success', '2021-07-21 19:51:11', '127.0.0.1', 1, ''),
(334, 'Create Quote', 'Success', '2021-07-21 19:51:32', '127.0.0.1', 1, ''),
(335, 'Create Quote', 'Success', '2021-07-21 19:51:57', '127.0.0.1', 1, ''),
(336, 'Create Quote', 'Success', '2021-07-21 19:52:13', '127.0.0.1', 1, ''),
(337, 'Create Quote', 'Success', '2021-07-21 19:52:47', '127.0.0.1', 1, ''),
(338, 'Create Quote', 'Success', '2021-07-21 19:53:15', '127.0.0.1', 1, ''),
(339, 'Create Quote', 'Success', '2021-07-21 19:53:42', '127.0.0.1', 1, ''),
(340, 'Create Quote', 'Success', '2021-07-21 19:54:51', '127.0.0.1', 1, ''),
(341, 'Create Quote', 'Success', '2021-07-21 19:55:31', '127.0.0.1', 1, ''),
(342, 'Create Quote', 'Success', '2021-07-21 20:01:56', '127.0.0.1', 1, ''),
(343, 'Create Quote', 'Success', '2021-07-21 20:04:29', '127.0.0.1', 1, ''),
(344, 'Create Quote', 'Success', '2021-07-21 20:06:38', '127.0.0.1', 1, ''),
(345, 'Create Quote', 'Success', '2021-07-21 20:13:05', '127.0.0.1', 1, ''),
(346, 'Create Quote', 'Success', '2021-07-21 20:13:33', '127.0.0.1', 1, ''),
(347, 'Create Quote', 'Success', '2021-07-21 20:13:44', '127.0.0.1', 1, ''),
(348, 'Create Quote', 'Success', '2021-07-22 08:26:44', '127.0.0.1', 1, ''),
(349, 'Create Quote', 'Success', '2021-07-22 08:37:44', '127.0.0.1', 1, ''),
(350, 'Create Quote', 'Success', '2021-07-22 08:37:57', '127.0.0.1', 1, ''),
(351, 'Create Quote', 'Success', '2021-07-22 08:39:06', '127.0.0.1', 1, ''),
(352, 'Create Quote', 'Success', '2021-07-22 08:39:30', '127.0.0.1', 1, ''),
(353, 'Create Quote', 'Success', '2021-07-22 08:40:35', '127.0.0.1', 1, ''),
(354, 'Create Quote', 'Success', '2021-07-22 08:41:14', '127.0.0.1', 1, ''),
(355, 'Create Quote', 'Success', '2021-07-22 08:41:21', '127.0.0.1', 1, ''),
(356, 'Create Quote', 'Success', '2021-07-22 08:41:46', '127.0.0.1', 1, ''),
(357, 'Create Quote', 'Success', '2021-07-22 08:43:39', '127.0.0.1', 1, ''),
(358, 'Create Quote', 'Success', '2021-07-22 08:44:06', '127.0.0.1', 1, ''),
(359, 'Create Quote', 'Success', '2021-07-22 08:44:58', '127.0.0.1', 1, ''),
(360, 'Create Quote', 'Success', '2021-07-22 08:46:06', '127.0.0.1', 1, ''),
(361, 'Create Quote', 'Success', '2021-07-22 08:46:32', '127.0.0.1', 1, ''),
(362, 'Create Quote', 'Success', '2021-07-22 08:55:42', '127.0.0.1', 1, ''),
(363, 'Create Quote', 'Success', '2021-07-22 08:57:32', '127.0.0.1', 1, ''),
(364, 'Create Quote', 'Success', '2021-07-22 08:58:44', '127.0.0.1', 1, ''),
(365, 'Create Quote', 'Success', '2021-07-22 09:00:29', '127.0.0.1', 1, ''),
(366, 'Create Quote', 'Success', '2021-07-22 09:01:20', '127.0.0.1', 1, ''),
(367, 'Create Quote', 'Success', '2021-07-22 09:01:49', '127.0.0.1', 1, ''),
(368, 'Create Quote', 'Success', '2021-07-22 09:06:04', '127.0.0.1', 1, ''),
(369, 'Create Quote', 'Success', '2021-07-22 09:09:21', '127.0.0.1', 1, ''),
(370, 'Create Quote', 'Success', '2021-07-22 09:10:02', '127.0.0.1', 1, ''),
(371, 'Create Quote', 'Success', '2021-07-22 09:12:58', '127.0.0.1', 1, ''),
(372, 'Create Quote', 'Success', '2021-07-22 12:46:21', '127.0.0.1', 1, ''),
(373, 'Create Quote', 'Success', '2021-07-22 12:49:11', '127.0.0.1', 1, ''),
(374, 'Create Quote', 'Success', '2021-07-22 12:49:36', '127.0.0.1', 1, ''),
(375, 'Create Quote', 'Success', '2021-07-22 10:20:41', '127.0.0.1', 1, ''),
(376, 'Create Quote', 'Success', '2021-07-22 10:22:21', '127.0.0.1', 1, ''),
(377, 'Create Quote', 'Success', '2021-07-22 19:28:33', '127.0.0.1', 1, ''),
(378, 'Create Quote', 'Success', '2021-07-23 07:16:19', '127.0.0.1', 1, ''),
(379, 'Create Quote', 'Success', '2021-07-23 07:55:41', '127.0.0.1', 1, ''),
(380, 'Create Quote', 'Success', '2021-07-23 07:56:20', '127.0.0.1', 1, ''),
(381, 'Create Quote', 'Success', '2021-07-23 07:57:56', '127.0.0.1', 1, ''),
(382, 'Create Quote', 'Success', '2021-07-23 08:19:26', '127.0.0.1', 1, ''),
(383, 'Create Quote', 'Success', '2021-07-23 10:36:37', '127.0.0.1', 1, ''),
(384, 'Create Quote', 'Success', '2021-07-23 11:34:01', '127.0.0.1', 1, ''),
(385, 'Create Quote', 'Success', '2021-07-23 11:36:17', '127.0.0.1', 1, ''),
(386, 'Create Quote', 'Success', '2021-07-23 11:52:49', '127.0.0.1', 1, ''),
(387, 'Create Quote', 'Success', '2021-07-23 11:53:13', '127.0.0.1', 1, ''),
(388, 'Create Quote', 'Success', '2021-07-23 11:56:38', '127.0.0.1', 1, ''),
(389, 'Create Quote', 'Success', '2021-07-23 12:38:14', '127.0.0.1', 1, ''),
(390, 'Create Quote', 'Success', '2021-07-23 12:40:05', '127.0.0.1', 1, ''),
(391, 'Create Quote', 'Success', '2021-07-23 12:43:53', '127.0.0.1', 1, ''),
(392, 'Create Quote', 'Success', '2021-07-23 12:46:03', '127.0.0.1', 1, ''),
(393, 'Create Quote', 'Success', '2021-07-23 12:47:10', '127.0.0.1', 1, ''),
(394, 'Create Quote', 'Success', '2021-07-23 12:48:01', '127.0.0.1', 1, ''),
(395, 'Create Quote', 'Success', '2021-07-23 12:48:40', '127.0.0.1', 1, ''),
(396, 'Create Quote', 'Success', '2021-07-23 12:49:37', '127.0.0.1', 1, ''),
(397, 'Create Quote', 'Success', '2021-07-23 12:50:36', '127.0.0.1', 1, ''),
(398, 'Create Quote', 'Success', '2021-07-23 12:50:51', '127.0.0.1', 1, ''),
(399, 'Create Quote', 'Success', '2021-07-23 12:51:37', '127.0.0.1', 1, ''),
(400, 'Create Quote', 'Success', '2021-07-23 12:52:30', '127.0.0.1', 1, ''),
(401, 'Create Quote', 'Success', '2021-07-23 12:55:42', '127.0.0.1', 1, ''),
(402, 'Create Quote', 'Success', '2021-07-23 12:56:50', '127.0.0.1', 1, ''),
(403, 'Create Quote', 'Success', '2021-07-23 12:57:36', '127.0.0.1', 1, ''),
(404, 'Create Quote', 'Success', '2021-07-23 12:57:56', '127.0.0.1', 1, ''),
(405, 'Create Quote', 'Success', '2021-07-23 12:58:36', '127.0.0.1', 1, ''),
(406, 'Create Quote', 'Success', '2021-07-23 12:59:46', '127.0.0.1', 1, ''),
(407, 'Create Quote', 'Success', '2021-07-23 13:01:40', '127.0.0.1', 1, ''),
(408, 'Create Quote', 'Success', '2021-07-23 13:02:59', '127.0.0.1', 1, ''),
(409, 'Create Quote', 'Success', '2021-07-23 13:05:22', '127.0.0.1', 1, ''),
(410, 'Create Quote', 'Success', '2021-07-23 13:05:51', '127.0.0.1', 1, ''),
(411, 'Create Quote', 'Success', '2021-07-23 13:06:35', '127.0.0.1', 1, ''),
(412, 'Create Quote', 'Success', '2021-07-23 13:09:31', '127.0.0.1', 1, ''),
(413, 'Create Quote', 'Success', '2021-07-23 13:09:50', '127.0.0.1', 1, ''),
(414, 'Create Quote', 'Success', '2021-07-23 13:11:20', '127.0.0.1', 1, ''),
(415, 'Create Quote', 'Success', '2021-07-23 13:12:01', '127.0.0.1', 1, ''),
(416, 'Create Quote', 'Success', '2021-07-23 13:15:29', '127.0.0.1', 1, ''),
(417, 'Create Quote', 'Success', '2021-07-23 13:15:49', '127.0.0.1', 1, ''),
(418, 'Create Quote', 'Success', '2021-07-23 13:18:13', '127.0.0.1', 1, ''),
(419, 'Create Quote', 'Success', '2021-07-23 13:18:38', '127.0.0.1', 1, ''),
(420, 'Create Quote', 'Success', '2021-07-23 13:19:08', '127.0.0.1', 1, ''),
(421, 'Create Quote', 'Success', '2021-07-23 13:20:25', '127.0.0.1', 1, ''),
(422, 'Create Quote', 'Success', '2021-07-23 13:21:50', '127.0.0.1', 1, ''),
(423, 'Create Quote', 'Success', '2021-07-23 13:22:18', '127.0.0.1', 1, ''),
(424, 'Create Quote', 'Success', '2021-07-23 13:23:11', '127.0.0.1', 1, ''),
(425, 'Create Quote', 'Success', '2021-07-23 13:24:54', '127.0.0.1', 1, ''),
(426, 'Create Quote', 'Success', '2021-07-23 13:25:40', '127.0.0.1', 1, ''),
(427, 'Create Quote', 'Success', '2021-07-23 13:26:18', '127.0.0.1', 1, ''),
(428, 'Create Quote', 'Success', '2021-07-23 13:26:38', '127.0.0.1', 1, ''),
(429, 'Create Quote', 'Success', '2021-07-23 13:27:31', '127.0.0.1', 1, ''),
(430, 'Create Quote', 'Success', '2021-07-23 13:28:00', '127.0.0.1', 1, ''),
(431, 'Create Quote', 'Success', '2021-07-23 13:37:29', '127.0.0.1', 1, ''),
(432, 'Create Quote', 'Success', '2021-07-23 13:38:15', '127.0.0.1', 1, ''),
(433, 'Create Quote', 'Success', '2021-07-23 13:45:26', '127.0.0.1', 1, ''),
(434, 'Create Quote', 'Success', '2021-07-23 13:59:40', '127.0.0.1', 1, ''),
(435, 'Create Quote', 'Success', '2021-07-23 14:01:09', '127.0.0.1', 1, ''),
(436, 'Create Quote', 'Success', '2021-07-23 14:04:14', '127.0.0.1', 1, ''),
(437, 'Create Quote', 'Success', '2021-07-23 14:05:11', '127.0.0.1', 1, ''),
(438, 'Create Quote', 'Success', '2021-07-23 14:06:22', '127.0.0.1', 1, ''),
(439, 'Create Quote', 'Success', '2021-07-23 14:06:54', '127.0.0.1', 1, ''),
(440, 'Added New Client', '1', '2021-07-25 09:21:16', '127.0.0.1', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
                           `client_id` int(255) NOT NULL,
                           `name` varchar(1000) NOT NULL,
                           `email` varchar(255) NOT NULL,
                           `mobile` varchar(255) NOT NULL,
                           `rep_name` varchar(255) NOT NULL,
                           `rep_email` varchar(255) NOT NULL,
                           `rep_mobile` varchar(255) NOT NULL,
                           `payment_terms` mediumtext NOT NULL,
                           `vat_type` int(255) NOT NULL,
                           `client_group` int(255) NOT NULL,
                           `address` varchar(1000) NOT NULL,
                           `logo` varchar(2000) NOT NULL,
                           `date_added` datetime NOT NULL DEFAULT current_timestamp(),
                           `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `name`, `email`, `mobile`, `rep_name`, `rep_email`, `rep_mobile`, `payment_terms`, `vat_type`, `client_group`, `address`, `logo`, `date_added`, `last_modified`) VALUES
(1, 'Liquid Intelligence Telecom', 'info@liquidtelecom.com', '07200000', 'Person X', 'x@liquidtelecom.com', '0722112334', '50% Deposit', 1, 1, '77 Rimiru Drive', 'logo.jpg', '2021-07-02 11:31:45', '2021-07-02 11:30:20'),
(2, 'NCBA', 'info@ncba.com', '07227738282', 'Jerry Rice', 'jerice@gmail.com', '08273844', '60% Deposit', 3, 2, '83 Fortis Suite ', '', '2021-07-17 16:10:40', '2021-07-25 11:02:27'),
(3, 'Nairobi Garage', 'helpdesk@nbigarage.com,', '0746332234', 'Sheila ', 'sheila@bigarage.com', '072233345', '40% Deposit, 40% on delivery, 20% on completion', 3, 2, '12 Watermark Garden Karen', '', '2021-07-25 12:15:49', '2021-07-25 12:15:49'),
(4, 'AEY Group', 'info@aey.group', '072579903', 'Oshwal', 'oshwal@aey.group', '073344488', '70% Deposit', 4, 1, 'Genral Mathenge Drive', '', '2021-07-25 12:21:16', '2021-07-25 12:21:16');

-- --------------------------------------------------------

--
-- Table structure for table `client_groups`
--

CREATE TABLE `client_groups` (
                                 `id` int(255) NOT NULL,
                                 `description` varchar(500) NOT NULL,
                                 `date_created` datetime NOT NULL DEFAULT current_timestamp(),
                                 `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_groups`
--

INSERT INTO `client_groups` (`id`, `description`, `date_created`, `last_modified`) VALUES
(1, 'Provider', '2021-07-17 16:04:01', '2021-07-17 16:03:32'),
(2, 'Company/Corporate', '2021-07-17 16:04:01', '2021-07-17 16:03:32'),
(3, 'Individual', '2021-07-17 16:04:15', '2021-07-17 16:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
                                   `company_id` int(255) NOT NULL,
                                   `name` varchar(1000) NOT NULL,
                                   `email` varchar(255) NOT NULL,
                                   `mobile` varchar(255) NOT NULL,
                                   `address` varchar(1000) NOT NULL,
                                   `logo` varchar(255) NOT NULL,
                                   `date_added` datetime NOT NULL DEFAULT current_timestamp(),
                                   `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`company_id`, `name`, `email`, `mobile`, `address`, `logo`, `date_added`, `last_modified`) VALUES
(1, 'Naya Solutions', 'info@naya.co.ke', '0722 124 444 ', '7th Floor Westside Towers, Westlands, Nairobi.\r\n', 'logo', '2021-07-02 10:38:12', '2021-07-02 10:36:33');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
                              `id` int(11) NOT NULL,
                              `name` varchar(255) NOT NULL,
                              `abbreviation` varchar(255) NOT NULL,
                              `conversion_rate` varchar(255) NOT NULL,
                              `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `abbreviation`, `conversion_rate`, `date_created`) VALUES
(1, 'Kenya Shilling', 'KES', '1', '2021-03-17 10:11:56'),
(2, 'United States Dollar', 'USD', '0.0091', '2021-03-17 10:11:56'),
(3, 'Tanzanian Shilling', 'TSH', '21.13', '2021-03-17 10:12:27'),
(4, 'Ugandan Shilling', 'UGS', '33.35', '2021-03-17 10:12:27'),
(5, 'Ghanaian Cedi', 'GHC', '18.76', '2021-04-22 01:20:18'),
(6, 'South African Rand', 'ZAR', '7.58', '2021-04-22 20:30:13'),
(7, 'Nigerian Naira', 'NGN', '0.26', '2021-04-23 02:32:35'),
(8, 'Sterling Pound', 'GBP', '150.08', '2021-04-23 19:46:23');

-- --------------------------------------------------------

--
-- Table structure for table `job_categories`
--

CREATE TABLE `job_categories` (
                                  `category_id` int(255) NOT NULL,
                                  `name` varchar(1000) NOT NULL,
                                  `description` varchar(1000) NOT NULL,
                                  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
                                  `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_categories`
--

INSERT INTO `job_categories` (`category_id`, `name`, `description`, `date_created`, `last_modified`) VALUES
(1, 'Wireless', 'Wireless Jobs ', '2021-07-02 11:36:27', '2021-07-02 11:35:45'),
(2, 'Fibre', 'Fibre Jobs', '2021-07-02 11:36:27', '2021-07-02 11:35:45'),
(3, 'UTP', 'UTP Jobs', '2021-07-02 11:36:52', '2021-07-02 11:36:33'),
(4, 'Hardware & Software', 'Hardware & Software', '2021-07-23 09:28:52', '2021-07-23 09:29:01'),
(5, 'Support', 'Professional Services', '2021-07-23 09:28:52', '2021-07-23 09:29:06'),
(6, 'Equipment Rental', 'Equipment Rental', '2021-07-23 09:30:26', '2021-07-23 09:29:33');

-- --------------------------------------------------------

--
-- Table structure for table `job_subcategories`
--

CREATE TABLE `job_subcategories` (
                                     `sub_cat_id` int(255) NOT NULL,
                                     `name` varchar(1000) NOT NULL,
                                     `description` varchar(1000) NOT NULL,
                                     `category_id` int(255) NOT NULL,
                                     `svg` longtext NOT NULL,
                                     `date_created` datetime NOT NULL DEFAULT current_timestamp(),
                                     `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_subcategories`
--

INSERT INTO `job_subcategories` (`sub_cat_id`, `name`, `description`, `category_id`, `svg`, `date_created`, `last_modified`) VALUES
(1, 'Base Station 1', 'Base Station Type One', 1, '<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"24\" height=\"24\"><path fill=\"none\" d=\"M0 0h24v24H0z\"/><path d=\"M12 13l6 9H6l6-9zm0 3.6L9.74 20h4.52L12 16.6zm-1.06-6.04a1.5 1.5 0 1 1 2.12-2.12 1.5 1.5 0 0 1-2.12 2.12zM5.281 2.783l1.415 1.415a7.5 7.5 0 0 0 0 10.606l-1.415 1.415a9.5 9.5 0 0 1 0-13.436zm13.436 0a9.5 9.5 0 0 1 0 13.436l-1.415-1.415a7.5 7.5 0 0 0 0-10.606l1.415-1.415zM8.11 5.611l1.414 1.414a3.5 3.5 0 0 0 0 4.95l-1.414 1.414a5.5 5.5 0 0 1 0-7.778zm7.778 0a5.5 5.5 0 0 1 0 7.778l-1.414-1.414a3.5 3.5 0 0 0 0-4.95l1.414-1.414z\" fill=\"rgba(163,119,61,1)\"/></svg>', '2021-07-02 11:40:24', '2021-07-02 11:38:45'),
(2, 'Base Station 2', 'Base Station Type Two', 1, '<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"24\" height=\"24\"><path fill=\"none\" d=\"M0 0h24v24H0z\"/><path d=\"M11 14v-3h2v3h5a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-6a1 1 0 0 1 1-1h5zM2.51 8.837C3.835 4.864 7.584 2 12 2s8.166 2.864 9.49 6.837l-1.898.632a8.003 8.003 0 0 0-15.184 0l-1.897-.632zm3.796 1.265a6.003 6.003 0 0 1 11.388 0l-1.898.633a4.002 4.002 0 0 0-7.592 0l-1.898-.633zM7 16v4h10v-4H7z\" fill=\"rgba(163,119,61,1)\"/></svg>', '2021-07-02 11:40:24', '2021-07-02 11:38:45'),
(3, 'P2P Links', 'Point to Point Installations', 1, '<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"24\" height=\"24\"><path fill=\"none\" d=\"M0 0h24v24H0z\"/><path d=\"M7.105 8.79A3.001 3.001 0 0 0 10 11h4a5.001 5.001 0 0 1 4.927 4.146A3.001 3.001 0 0 1 18 21a3 3 0 0 1-1.105-5.79A3.001 3.001 0 0 0 14 13h-4a4.978 4.978 0 0 1-3-1v3.17a3.001 3.001 0 1 1-2 0V8.83a3.001 3.001 0 1 1 2.105-.04z\" fill=\"rgba(98,77,50,1)\"/></svg>', '2021-07-02 11:41:36', '2021-07-02 11:40:28'),
(4, 'CPE Links', 'Customer Premise Equipment', 1, '<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"24\" height=\"24\"><path fill=\"none\" d=\"M0 0H24V24H0z\"/><path d=\"M18 3c1.657 0 3 1.343 3 3s-1.343 3-3 3h-3c-1.306 0-2.417-.834-2.829-2H11c-1.1 0-2 .9-2 2v.171c1.166.412 2 1.523 2 2.829 0 1.306-.834 2.417-2 2.829V15c0 1.1.9 2 2 2h1.17c.412-1.165 1.524-2 2.83-2h3c1.657 0 3 1.343 3 3s-1.343 3-3 3h-3c-1.306 0-2.417-.834-2.829-2H11c-2.21 0-4-1.79-4-4H5c-1.657 0-3-1.343-3-3s1.343-3 3-3h2c0-2.21 1.79-4 4-4h1.17c.412-1.165 1.524-2 2.83-2h3zm0 14h-3c-.552 0-1 .448-1 1s.448 1 1 1h3c.552 0 1-.448 1-1s-.448-1-1-1zM8 11H5c-.552 0-1 .448-1 1s.448 1 1 1h3c.552 0 1-.448 1-1s-.448-1-1-1zm10-6h-3c-.552 0-1 .448-1 1s.448 1 1 1h3c.552 0 1-.448 1-1s-.448-1-1-1z\" fill=\"rgba(98,77,50,1)\"/></svg>', '2021-07-02 11:41:36', '2021-07-02 11:40:28'),
(5, 'Hardware & Software', 'Hardware & Software', 4, '', '2021-07-23 10:03:22', '2021-07-23 09:56:25'),
(6, 'Support', 'Professional Services - Support', 5, '', '2021-07-23 10:03:22', '2021-07-23 09:56:25'),
(7, 'Equipment Rental', 'Equipment Rental', 6, '', '2021-07-23 10:03:54', '2021-07-23 10:03:28');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
                             `id` int(255) NOT NULL,
                             `description` varchar(1000) NOT NULL,
                             `unit_of_measurement` varchar(255) NOT NULL,
                             `quantity` int(255) NOT NULL,
                             `proposed_rate` varchar(255) NOT NULL,
                             `remarks` varchar(1000) NOT NULL,
                             `sub_cat_id` int(255) NOT NULL,
                             `date_created` datetime NOT NULL DEFAULT current_timestamp(),
                             `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `description`, `unit_of_measurement`, `quantity`, `proposed_rate`, `remarks`, `sub_cat_id`, `date_created`, `last_modified`) VALUES
(1, 'LMR Cable', 'mtr', 1, '250.00', '', 1, '2021-07-02 11:29:14', '2021-07-02 11:28:34'),
(2, 'B Cell', 'Per Piece', 1, '4000', '', 1, '2021-07-05 10:02:03', '2021-07-05 10:00:27'),
(3, 'LMR COnnector', 'Pcs', 0, '250.00', '', 1, '2021-07-05 10:02:03', '2021-07-05 10:00:27');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
                          `quote_id` int(255) NOT NULL,
                          `quote_ref` varchar(255) NOT NULL,
                          `job_no` varchar(255) NOT NULL,
                          `title` varchar(1000) NOT NULL,
                          `quote_type` int(255) NOT NULL,
                          `job_category` int(255) DEFAULT NULL,
                          `job_sub_category` int(255) DEFAULT NULL,
                          `rate_card_id` int(255) DEFAULT NULL,
                          `additional_materials` int(255) DEFAULT NULL,
                          `notes` varchar(1000) NOT NULL,
                          `assumptions` varchar(1000) NOT NULL,
                          `payment_terms` varchar(1000) NOT NULL,
                          `amount` varchar(255) NOT NULL,
                          `client_id` int(255) NOT NULL,
                          `user_id` int(255) NOT NULL,
                          `date_created` datetime NOT NULL DEFAULT current_timestamp(),
                          `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`quote_id`, `quote_ref`, `job_no`, `title`, `quote_type`, `job_category`, `job_sub_category`, `rate_card_id`, `additional_materials`, `notes`, `assumptions`, `payment_terms`, `amount`, `client_id`, `user_id`, `date_created`, `last_modified`) VALUES
(382, 'QT8176', '', 'hfgyf', 2, 4, 5, NULL, 0, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '60% Deposit', '0', 2, 1, '2021-07-23 10:16:19', '2021-07-23 10:16:19'),
(384, 'QT3741', '', 'Sample Provder Quote', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 10:56:19', '2021-07-23 10:56:19'),
(386, 'QT7178', '', 'Support Tester', 3, 5, 6, NULL, 0, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '60% Deposit', '0', 2, 1, '2021-07-23 11:19:25', '2021-07-23 11:19:25'),
(387, 'QT4213', '', 'LO098765', 1, 1, 1, NULL, 0, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 13:36:37', '2021-07-23 13:36:37'),
(388, 'QT1263', '', '', 2, 4, 5, NULL, 0, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '60% Deposit', '0', 2, 1, '2021-07-23 14:34:00', '2021-07-23 14:34:00'),
(389, 'QT1263', '', '', 2, 4, 5, NULL, 0, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '60% Deposit', '0', 2, 1, '2021-07-23 14:36:17', '2021-07-23 14:36:17'),
(390, 'QT1263', '', '', 2, 4, 5, NULL, 0, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '60% Deposit', '0', 2, 1, '2021-07-23 14:52:49', '2021-07-23 14:52:49'),
(391, 'QT3741', '', 'Sample Provder Quote', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 14:53:12', '2021-07-23 14:53:12'),
(392, 'QT1263', '', '', 2, 4, 5, NULL, 0, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '60% Deposit', '0', 2, 1, '2021-07-23 14:56:38', '2021-07-23 14:56:38'),
(393, 'QT3741', '', 'Sample Provder Quote', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 15:38:14', '2021-07-23 15:38:14'),
(394, 'QT3709', '', 'Font Check', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 15:40:05', '2021-07-23 15:40:05'),
(395, 'QT3709', '', 'Font Check', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 15:43:53', '2021-07-23 15:43:53'),
(396, 'QT3709', '', 'Font Check', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 15:46:03', '2021-07-23 15:46:03'),
(397, 'QT3709', '', 'Font Check', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 15:47:09', '2021-07-23 15:47:09'),
(398, 'QT3709', '', 'Font Check', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 15:48:01', '2021-07-23 15:48:01'),
(399, 'QT3709', '', 'Font Check', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 15:48:39', '2021-07-23 15:48:39'),
(400, 'QT3709', '', 'Font Check', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 15:49:37', '2021-07-23 15:49:37'),
(401, 'QT3709', '', 'Font Check', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 15:50:35', '2021-07-23 15:50:35'),
(402, 'QT3709', '', 'Font Check', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 15:50:51', '2021-07-23 15:50:51'),
(403, 'QT3709', '', 'Font Check', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 15:51:37', '2021-07-23 15:51:37'),
(404, 'QT3709', '', 'Font Check', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 15:52:30', '2021-07-23 15:52:30'),
(405, 'QT3709', '', 'Font Check', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 15:55:42', '2021-07-23 15:55:42'),
(406, 'QT3709', '', 'Font Check', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 15:56:49', '2021-07-23 15:56:49'),
(407, 'QT3709', '', 'Font Check', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 15:57:35', '2021-07-23 15:57:35'),
(408, 'QT3709', '', 'Font Check', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 15:57:55', '2021-07-23 15:57:55'),
(409, 'QT3709', '', 'Font Check', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 15:58:36', '2021-07-23 15:58:36'),
(410, 'QT3709', '', 'Font Check', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 15:59:45', '2021-07-23 15:59:45'),
(411, 'QT1460', '', 'Pasdding test', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:01:40', '2021-07-23 16:01:40'),
(412, 'QT3709', '', 'Font Check', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:02:59', '2021-07-23 16:02:59'),
(413, 'QT3709', '', 'Font Check', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:05:22', '2021-07-23 16:05:22'),
(414, 'QT3709', '', 'Font Check', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:05:51', '2021-07-23 16:05:51'),
(415, 'QT3709', '', 'Font Check', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:06:35', '2021-07-23 16:06:35'),
(416, 'QT3709', '', 'Font Check', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:09:30', '2021-07-23 16:09:30'),
(417, 'QT3709', '', 'Font Check', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:09:50', '2021-07-23 16:09:50'),
(418, 'QT6148', '', 'This is a long long long long long long long long long long long long long long long titile', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:11:19', '2021-07-23 16:11:19'),
(419, 'QT6148', '', 'This is a long long long long long long long long long long long long long long long titile', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:12:01', '2021-07-23 16:12:01'),
(420, 'QT6148', '', 'This is a long long long long long long long long long long long long long long long titile', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:15:28', '2021-07-23 16:15:28'),
(421, 'QT6148', '', 'This is a long long long long long long long long long long long long long long long titile', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:15:48', '2021-07-23 16:15:48'),
(422, 'QT8396', '', 'fgrehyusirkyrysteusgdsfhjdafgshdjeretysuyewqwwretwayruawetraysthjr', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:18:13', '2021-07-23 16:18:13'),
(423, 'QT8396', '', 'fgrehyusirkyrysteusgdsfhjdafgshdjeretysuyewqwwretwayruawetraysthjr', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:18:38', '2021-07-23 16:18:38'),
(424, 'QT8396', '', 'fgrehyusirkyrysteusgdsfhjdafgshdjeretysuyewqwwretwayruawetraysthjr', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:19:08', '2021-07-23 16:19:08'),
(425, 'QT8396', '', 'fgrehyusirkyrysteusgdsfhjdafgshdjeretysuyewqwwretwayruawetraysthjr', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:20:25', '2021-07-23 16:20:25'),
(426, 'QT8396', '', 'fgrehyusirkyrysteusgdsfhjdafgshdjeretysuyewqwwretwayruawetraysthjr', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:21:50', '2021-07-23 16:21:50'),
(427, 'QT8396', '', 'fgrehyusirkyrysteusgdsfhjdafgshdjeretysuyewqwwretwayruawetraysthjr', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:22:17', '2021-07-23 16:22:17'),
(428, 'QT8396', '', 'fgrehyusirkyrysteusgdsfhjdafgshdjeretysuyewqwwretwayruawetraysthjr', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:23:11', '2021-07-23 16:23:11'),
(429, 'QT8396', '', 'fgrehyusirkyrysteusgdsfhjdafgshdjeretysuyewqwwretwayruawetraysthjr', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:24:54', '2021-07-23 16:24:54'),
(430, 'QT8396', '', 'fgrehyusirkyrysteusgdsfhjdafgshdjeretysuyewqwwretwayruawetraysthjr', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:25:40', '2021-07-23 16:25:40'),
(431, 'QT8396', '', 'fgrehyusirkyrysteusgdsfhjdafgshdjeretysuyewqwwretwayruawetraysthjr', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:26:18', '2021-07-23 16:26:18'),
(432, 'QT8396', '', 'fgrehyusirkyrysteusgdsfhjdafgshdjeretysuyewqwwretwayruawetraysthjr', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:26:37', '2021-07-23 16:26:37'),
(433, 'QT8396', '', 'fgrehyusirkyrysteusgdsfhjdafgshdjeretysuyewqwwretwayruawetraysthjr', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:27:31', '2021-07-23 16:27:31'),
(434, 'QT8396', '', 'fgrehyusirkyrysteusgdsfhjdafgshdjeretysuyewqwwretwayruawetraysthjr', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:28:00', '2021-07-23 16:28:00'),
(435, 'QT4810', '', 'etryutrueyiurouo', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:37:29', '2021-07-23 16:37:29'),
(436, 'QT4810', '', 'etryutrueyiurouo', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:38:15', '2021-07-23 16:38:15'),
(437, 'QT4810', '', 'etryutrueyiurouo', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:45:26', '2021-07-23 16:45:26'),
(438, 'QT4810', '', 'etryutrueyiurouo', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 16:59:39', '2021-07-23 16:59:39'),
(439, 'QT4810', '', 'etryutrueyiurouo', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 17:01:09', '2021-07-23 17:01:09'),
(440, 'QT4810', '', 'etryutrueyiurouo', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 17:04:14', '2021-07-23 17:04:14'),
(441, 'QT4810', '', 'etryutrueyiurouo', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 17:05:09', '2021-07-23 17:05:09'),
(442, 'QT4810', '', 'etryutrueyiurouo', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 17:06:21', '2021-07-23 17:06:21'),
(443, 'QT4810', '', 'etryutrueyiurouo', 1, 1, 1, NULL, 1, '									# Autosaving!\n									Enter Notes Here\n                                ', '', '50% Deposit', '0', 1, 1, '2021-07-23 17:06:54', '2021-07-23 17:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `quote_references`
--

CREATE TABLE `quote_references` (
                                    `ref_id` int(255) NOT NULL,
                                    `index_id` int(255) NOT NULL,
                                    `quote_ref` varchar(255) NOT NULL,
                                    `date_created` datetime NOT NULL DEFAULT current_timestamp(),
                                    `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quote_references`
--

INSERT INTO `quote_references` (`ref_id`, `index_id`, `quote_ref`, `date_created`, `last_modified`) VALUES
(1, 0, 'QT2427', '2021-07-05 14:35:47', '2021-07-05 14:35:47'),
(2, 0, 'QT2427', '2021-07-05 14:36:50', '2021-07-05 14:36:50'),
(3, 0, 'QT2427', '2021-07-05 14:36:54', '2021-07-05 14:36:54'),
(4, 0, 'QT2427', '2021-07-05 14:38:04', '2021-07-05 14:38:04'),
(5, 0, 'QT2427', '2021-07-05 14:39:07', '2021-07-05 14:39:07'),
(6, 0, 'QT2427', '2021-07-05 14:40:24', '2021-07-05 14:40:24'),
(7, 0, 'QT2427', '2021-07-05 14:40:29', '2021-07-05 14:40:29'),
(8, 0, 'QT2427', '2021-07-05 14:40:47', '2021-07-05 14:40:47'),
(9, 0, 'QT2427', '2021-07-05 14:41:00', '2021-07-05 14:41:00'),
(10, 0, 'QT2427', '2021-07-05 14:41:42', '2021-07-05 14:41:42'),
(11, 0, 'QT2427', '2021-07-05 14:42:04', '2021-07-05 14:42:04'),
(12, 0, 'QT2427', '2021-07-05 14:42:47', '2021-07-05 14:42:47'),
(13, 0, 'QT2427', '2021-07-05 14:43:11', '2021-07-05 14:43:11'),
(14, 0, 'QT2427', '2021-07-05 14:44:44', '2021-07-05 14:44:44'),
(15, 0, 'QT2427', '2021-07-05 14:44:48', '2021-07-05 14:44:48'),
(16, 0, 'QT2427', '2021-07-05 14:47:46', '2021-07-05 14:47:46'),
(17, 0, 'QT2427', '2021-07-05 14:51:33', '2021-07-05 14:51:33'),
(18, 0, 'QT2427', '2021-07-05 14:51:42', '2021-07-05 14:51:42'),
(19, 0, 'QT2427', '2021-07-05 14:57:14', '2021-07-05 14:57:14'),
(20, 0, 'QT2427', '2021-07-05 14:57:23', '2021-07-05 14:57:23'),
(21, 0, 'QT2427', '2021-07-05 14:59:09', '2021-07-05 14:59:09'),
(22, 0, 'QT2427', '2021-07-05 15:03:29', '2021-07-05 15:03:29'),
(23, 0, 'QT8702', '2021-07-05 15:06:38', '2021-07-05 15:06:38'),
(24, 0, 'QT8702', '2021-07-05 15:06:42', '2021-07-05 15:06:42'),
(25, 0, 'QT8702', '2021-07-05 15:13:26', '2021-07-05 15:13:26'),
(26, 0, 'QT8702', '2021-07-05 15:14:00', '2021-07-05 15:14:00'),
(27, 0, 'QT8702', '2021-07-05 15:14:18', '2021-07-05 15:14:18'),
(28, 0, 'QT8702', '2021-07-05 15:18:10', '2021-07-05 15:18:10'),
(29, 0, 'QT7578', '2021-07-05 15:20:34', '2021-07-05 15:20:34'),
(30, 0, 'QT7578', '2021-07-05 15:22:19', '2021-07-05 15:22:19'),
(31, 0, 'QT7578', '2021-07-05 15:27:52', '2021-07-05 15:27:52'),
(32, 0, 'QT7578', '2021-07-05 15:51:24', '2021-07-05 15:51:24'),
(33, 0, 'QT7578', '2021-07-05 15:51:45', '2021-07-05 15:51:45'),
(34, 0, 'QT7578', '2021-07-05 15:57:17', '2021-07-05 15:57:17'),
(35, 0, 'QT7578', '2021-07-05 15:57:50', '2021-07-05 15:57:50'),
(36, 0, 'QT7578', '2021-07-05 15:57:56', '2021-07-05 15:57:56'),
(37, 0, 'QT7578', '2021-07-05 15:58:11', '2021-07-05 15:58:11'),
(38, 0, 'QT7578', '2021-07-05 15:58:16', '2021-07-05 15:58:16'),
(39, 0, 'QT7578', '2021-07-05 15:59:37', '2021-07-05 15:59:37'),
(40, 0, 'QT7578', '2021-07-05 15:59:45', '2021-07-05 15:59:45'),
(41, 0, 'QT7578', '2021-07-05 15:59:47', '2021-07-05 15:59:47'),
(42, 0, 'QT7578', '2021-07-05 16:00:13', '2021-07-05 16:00:13'),
(43, 0, 'QT7578', '2021-07-05 16:04:06', '2021-07-05 16:04:06'),
(44, 0, 'QT7578', '2021-07-05 16:05:09', '2021-07-05 16:05:09'),
(45, 0, 'QT7578', '2021-07-05 16:06:38', '2021-07-05 16:06:38'),
(46, 0, 'QT7578', '2021-07-05 16:08:09', '2021-07-05 16:08:09'),
(47, 0, 'QT7578', '2021-07-05 16:08:24', '2021-07-05 16:08:24'),
(48, 0, 'QT7578', '2021-07-05 16:08:32', '2021-07-05 16:08:32'),
(49, 0, 'QT7578', '2021-07-05 16:08:46', '2021-07-05 16:08:46'),
(50, 0, 'QT7578', '2021-07-05 16:09:15', '2021-07-05 16:09:15'),
(51, 0, 'QT5518', '2021-07-05 16:11:11', '2021-07-05 16:11:11'),
(52, 0, 'QT5518', '2021-07-05 16:11:26', '2021-07-05 16:11:26'),
(53, 0, 'QT5518', '2021-07-05 16:24:08', '2021-07-05 16:24:08'),
(54, 0, 'QT5518', '2021-07-05 16:24:44', '2021-07-05 16:24:44'),
(55, 0, 'QT5518', '2021-07-05 16:24:55', '2021-07-05 16:24:55'),
(56, 0, 'QT5518', '2021-07-05 16:25:20', '2021-07-05 16:25:20'),
(57, 0, 'QT5518', '2021-07-05 16:25:47', '2021-07-05 16:25:47'),
(58, 0, 'QT5518', '2021-07-05 16:26:31', '2021-07-05 16:26:31'),
(59, 0, 'QT5518', '2021-07-05 16:27:23', '2021-07-05 16:27:23'),
(60, 0, 'QT5518', '2021-07-05 16:27:51', '2021-07-05 16:27:51'),
(61, 0, 'QT5518', '2021-07-05 16:28:53', '2021-07-05 16:28:53'),
(62, 0, 'QT5518', '2021-07-05 16:32:48', '2021-07-05 16:32:48'),
(63, 0, 'QT5518', '2021-07-05 16:34:17', '2021-07-05 16:34:17'),
(64, 0, 'QT5518', '2021-07-05 16:34:43', '2021-07-05 16:34:43'),
(65, 0, 'QT5518', '2021-07-05 16:35:14', '2021-07-05 16:35:14'),
(66, 0, 'QT5518', '2021-07-05 16:35:36', '2021-07-05 16:35:36'),
(67, 0, 'QT5518', '2021-07-05 16:35:50', '2021-07-05 16:35:50'),
(68, 0, 'QT5518', '2021-07-05 16:36:23', '2021-07-05 16:36:23'),
(69, 0, 'QT5518', '2021-07-05 16:36:27', '2021-07-05 16:36:27'),
(70, 0, 'QT5518', '2021-07-05 16:36:42', '2021-07-05 16:36:42'),
(71, 0, 'QT5518', '2021-07-05 16:37:12', '2021-07-05 16:37:12'),
(72, 0, 'QT5518', '2021-07-05 16:37:31', '2021-07-05 16:37:31'),
(73, 0, 'QT5518', '2021-07-05 16:37:37', '2021-07-05 16:37:37'),
(74, 0, 'QT5518', '2021-07-05 16:38:10', '2021-07-05 16:38:10'),
(75, 0, 'QT5518', '2021-07-05 16:39:45', '2021-07-05 16:39:45'),
(76, 0, 'QT5518', '2021-07-05 16:45:40', '2021-07-05 16:45:40'),
(77, 0, 'QT5518', '2021-07-05 16:46:17', '2021-07-05 16:46:17'),
(78, 0, 'QT5518', '2021-07-05 16:49:38', '2021-07-05 16:49:38'),
(79, 0, 'QT5518', '2021-07-05 16:50:25', '2021-07-05 16:50:25'),
(80, 0, 'QT5518', '2021-07-05 16:50:47', '2021-07-05 16:50:47'),
(81, 0, 'QT5518', '2021-07-05 16:52:16', '2021-07-05 16:52:16'),
(82, 0, 'QT5518', '2021-07-05 16:52:39', '2021-07-05 16:52:39'),
(83, 0, 'QT5518', '2021-07-05 16:53:34', '2021-07-05 16:53:34'),
(84, 0, 'QT5518', '2021-07-05 16:53:56', '2021-07-05 16:53:56'),
(85, 0, 'QT5518', '2021-07-05 16:55:13', '2021-07-05 16:55:13'),
(86, 0, 'QT5518', '2021-07-05 16:55:47', '2021-07-05 16:55:47'),
(87, 0, 'QT5518', '2021-07-05 16:55:58', '2021-07-05 16:55:58'),
(88, 0, 'QT5518', '2021-07-05 16:57:03', '2021-07-05 16:57:03'),
(89, 0, 'QT5518', '2021-07-05 16:57:21', '2021-07-05 16:57:21'),
(90, 0, 'QT5518', '2021-07-05 16:57:46', '2021-07-05 16:57:46'),
(91, 0, 'QT5518', '2021-07-05 16:57:51', '2021-07-05 16:57:51'),
(92, 0, 'QT5518', '2021-07-05 16:58:10', '2021-07-05 16:58:10'),
(93, 0, 'QT5518', '2021-07-05 16:59:05', '2021-07-05 16:59:05'),
(94, 0, 'QT5518', '2021-07-05 16:59:51', '2021-07-05 16:59:51'),
(95, 0, 'QT5518', '2021-07-05 17:00:14', '2021-07-05 17:00:14'),
(96, 0, 'QT5518', '2021-07-05 17:00:18', '2021-07-05 17:00:18'),
(97, 0, 'QT5518', '2021-07-05 17:00:51', '2021-07-05 17:00:51'),
(98, 0, 'QT5518', '2021-07-05 17:00:59', '2021-07-05 17:00:59'),
(99, 0, 'QT5518', '2021-07-05 17:01:22', '2021-07-05 17:01:22'),
(100, 0, 'QT5518', '2021-07-05 17:01:50', '2021-07-05 17:01:50'),
(101, 0, 'QT5518', '2021-07-05 17:05:18', '2021-07-05 17:05:18'),
(102, 0, 'QT5518', '2021-07-05 17:05:53', '2021-07-05 17:05:53'),
(103, 0, 'QT5518', '2021-07-05 17:06:21', '2021-07-05 17:06:21'),
(104, 0, 'QT5518', '2021-07-05 17:06:50', '2021-07-05 17:06:50'),
(105, 0, 'QT5518', '2021-07-05 17:06:59', '2021-07-05 17:06:59'),
(106, 0, 'QT5518', '2021-07-05 17:07:20', '2021-07-05 17:07:20'),
(107, 0, 'QT5518', '2021-07-05 17:08:23', '2021-07-05 17:08:23'),
(108, 0, 'QT5518', '2021-07-05 17:08:51', '2021-07-05 17:08:51'),
(109, 0, 'QT5518', '2021-07-05 17:10:05', '2021-07-05 17:10:05'),
(110, 0, 'QT5518', '2021-07-05 17:10:40', '2021-07-05 17:10:40'),
(111, 0, 'QT5518', '2021-07-05 17:10:52', '2021-07-05 17:10:52'),
(112, 0, 'QT5518', '2021-07-05 17:11:44', '2021-07-05 17:11:44'),
(113, 0, 'QT5518', '2021-07-05 17:11:53', '2021-07-05 17:11:53'),
(114, 0, 'QT5518', '2021-07-05 17:12:41', '2021-07-05 17:12:41'),
(115, 0, 'QT5518', '2021-07-05 17:14:04', '2021-07-05 17:14:04'),
(116, 0, 'QT5518', '2021-07-05 17:14:24', '2021-07-05 17:14:24'),
(117, 0, 'QT5518', '2021-07-05 17:14:41', '2021-07-05 17:14:41'),
(118, 0, 'QT5518', '2021-07-05 17:14:45', '2021-07-05 17:14:45'),
(119, 0, 'QT5518', '2021-07-05 17:17:18', '2021-07-05 17:17:18'),
(120, 0, 'QT5518', '2021-07-05 17:17:49', '2021-07-05 17:17:49'),
(121, 0, 'QT5518', '2021-07-05 17:20:17', '2021-07-05 17:20:17'),
(122, 0, 'QT5518', '2021-07-05 17:20:54', '2021-07-05 17:20:54'),
(123, 0, 'QT5518', '2021-07-05 17:21:26', '2021-07-05 17:21:26'),
(124, 0, 'QT5518', '2021-07-05 17:23:10', '2021-07-05 17:23:10'),
(125, 0, 'QT5518', '2021-07-05 17:23:36', '2021-07-05 17:23:36'),
(126, 0, 'QT5518', '2021-07-05 17:24:29', '2021-07-05 17:24:29'),
(127, 0, 'QT5518', '2021-07-05 17:24:54', '2021-07-05 17:24:54'),
(128, 0, 'QT5518', '2021-07-05 17:25:26', '2021-07-05 17:25:26'),
(129, 0, 'QT5518', '2021-07-05 17:26:18', '2021-07-05 17:26:18'),
(130, 0, 'QT5518', '2021-07-05 17:27:22', '2021-07-05 17:27:22'),
(131, 0, 'QT5518', '2021-07-05 17:28:21', '2021-07-05 17:28:21'),
(132, 0, 'QT5518', '2021-07-05 17:28:42', '2021-07-05 17:28:42'),
(133, 0, 'QT5518', '2021-07-05 17:30:06', '2021-07-05 17:30:06'),
(134, 0, 'QT5518', '2021-07-05 17:31:54', '2021-07-05 17:31:54'),
(135, 0, 'QT5518', '2021-07-05 17:33:01', '2021-07-05 17:33:01'),
(136, 0, 'QT5518', '2021-07-05 17:34:11', '2021-07-05 17:34:11'),
(137, 0, 'QT5518', '2021-07-05 17:36:06', '2021-07-05 17:36:06'),
(138, 0, 'QT5518', '2021-07-05 17:36:35', '2021-07-05 17:36:35'),
(139, 0, 'QT5518', '2021-07-05 17:37:31', '2021-07-05 17:37:31'),
(140, 0, 'QT5518', '2021-07-05 17:40:00', '2021-07-05 17:40:00'),
(141, 0, 'QT5518', '2021-07-05 17:41:47', '2021-07-05 17:41:47'),
(142, 0, 'QT5518', '2021-07-05 17:42:04', '2021-07-05 17:42:04'),
(143, 0, 'QT5518', '2021-07-05 17:42:36', '2021-07-05 17:42:36'),
(144, 0, 'QT5518', '2021-07-05 17:42:53', '2021-07-05 17:42:53'),
(145, 0, 'QT5518', '2021-07-05 17:44:18', '2021-07-05 17:44:18'),
(146, 0, 'QT5518', '2021-07-05 17:48:52', '2021-07-05 17:48:52'),
(147, 0, 'QT5518', '2021-07-05 17:49:18', '2021-07-05 17:49:18'),
(148, 0, 'QT5518', '2021-07-05 17:49:35', '2021-07-05 17:49:35'),
(149, 0, 'QT5518', '2021-07-05 17:49:44', '2021-07-05 17:49:44'),
(150, 0, 'QT5518', '2021-07-05 17:50:32', '2021-07-05 17:50:32'),
(151, 0, 'QT5518', '2021-07-05 17:50:46', '2021-07-05 17:50:46'),
(152, 0, 'QT5518', '2021-07-05 17:51:44', '2021-07-05 17:51:44'),
(153, 0, 'QT5518', '2021-07-05 17:52:09', '2021-07-05 17:52:09'),
(154, 0, 'QT5518', '2021-07-05 17:53:00', '2021-07-05 17:53:00'),
(155, 0, 'QT5518', '2021-07-05 17:53:35', '2021-07-05 17:53:35'),
(156, 0, 'QT5518', '2021-07-05 17:54:00', '2021-07-05 17:54:00'),
(157, 0, 'QT5518', '2021-07-05 17:54:43', '2021-07-05 17:54:43'),
(158, 0, 'QT5518', '2021-07-05 17:55:10', '2021-07-05 17:55:10'),
(159, 0, 'QT5518', '2021-07-05 17:55:28', '2021-07-05 17:55:28'),
(160, 0, 'QT5518', '2021-07-05 17:56:24', '2021-07-05 17:56:24'),
(161, 0, 'QT5518', '2021-07-05 17:57:23', '2021-07-05 17:57:23'),
(162, 0, 'QT5518', '2021-07-05 17:59:12', '2021-07-05 17:59:12'),
(163, 0, 'QT5518', '2021-07-05 18:00:01', '2021-07-05 18:00:01'),
(164, 0, 'QT1143', '2021-07-05 18:13:01', '2021-07-05 18:13:01'),
(165, 0, 'QT1143', '2021-07-05 18:13:50', '2021-07-05 18:13:50'),
(166, 0, 'QT1143', '2021-07-05 18:14:45', '2021-07-05 18:14:45'),
(167, 0, 'QT1253', '2021-07-05 19:26:20', '2021-07-05 19:26:20'),
(168, 0, 'QT1778', '2021-07-05 20:54:46', '2021-07-05 20:54:46'),
(169, 0, 'QT9308', '2021-07-06 09:03:11', '2021-07-06 09:03:11'),
(170, 0, 'QT9098', '2021-07-06 09:09:51', '2021-07-06 09:09:51'),
(171, 0, 'QT2912', '2021-07-06 09:13:13', '2021-07-06 09:13:13'),
(172, 0, 'QT6888', '2021-07-06 09:15:42', '2021-07-06 09:15:42'),
(173, 0, 'QT3600', '2021-07-06 09:27:06', '2021-07-06 09:27:06'),
(174, 0, 'QT3600', '2021-07-06 09:28:23', '2021-07-06 09:28:23'),
(175, 0, 'QT3600', '2021-07-06 09:29:33', '2021-07-06 09:29:33'),
(176, 0, 'QT2852', '2021-07-06 09:31:49', '2021-07-06 09:31:49'),
(177, 0, 'QT2852', '2021-07-06 09:32:20', '2021-07-06 09:32:20'),
(178, 0, 'QT2852', '2021-07-06 09:33:39', '2021-07-06 09:33:39'),
(179, 0, 'QT2852', '2021-07-06 09:34:11', '2021-07-06 09:34:11'),
(180, 0, 'QT2852', '2021-07-06 09:34:39', '2021-07-06 09:34:39'),
(181, 0, 'QT2852', '2021-07-06 09:34:48', '2021-07-06 09:34:48'),
(182, 0, 'QT2852', '2021-07-06 09:35:57', '2021-07-06 09:35:57'),
(183, 0, 'QT2852', '2021-07-06 09:37:31', '2021-07-06 09:37:31'),
(184, 0, 'QT2852', '2021-07-06 09:39:08', '2021-07-06 09:39:08'),
(185, 0, 'QT2852', '2021-07-06 09:40:13', '2021-07-06 09:40:13'),
(186, 0, 'QT2852', '2021-07-06 09:43:09', '2021-07-06 09:43:09'),
(187, 0, 'QT2852', '2021-07-06 09:44:01', '2021-07-06 09:44:01'),
(188, 0, 'QT2852', '2021-07-06 09:45:21', '2021-07-06 09:45:21'),
(189, 0, 'QT2852', '2021-07-06 09:45:46', '2021-07-06 09:45:46'),
(190, 0, 'QT2852', '2021-07-06 09:55:59', '2021-07-06 09:55:59'),
(191, 0, 'QT2852', '2021-07-06 09:57:12', '2021-07-06 09:57:12'),
(192, 0, 'QT2852', '2021-07-06 09:59:58', '2021-07-06 09:59:58'),
(193, 0, 'QT2852', '2021-07-06 10:04:07', '2021-07-06 10:04:07'),
(194, 0, 'QT2852', '2021-07-06 10:07:52', '2021-07-06 10:07:52'),
(195, 0, 'QT2852', '2021-07-06 10:09:51', '2021-07-06 10:09:51'),
(196, 0, 'QT2078', '2021-07-06 12:51:35', '2021-07-06 12:51:35'),
(197, 0, 'QT2078', '2021-07-06 12:56:16', '2021-07-06 12:56:16'),
(198, 0, 'QT2078', '2021-07-06 12:57:03', '2021-07-06 12:57:03'),
(199, 0, 'QT2078', '2021-07-06 12:57:28', '2021-07-06 12:57:28'),
(200, 0, 'QT3731', '2021-07-06 13:29:27', '2021-07-06 13:29:27'),
(201, 0, 'QT2078', '2021-07-06 13:29:51', '2021-07-06 13:29:51'),
(202, 0, 'QT3731', '2021-07-06 13:31:08', '2021-07-06 13:31:08'),
(203, 0, 'QT3731', '2021-07-06 13:32:25', '2021-07-06 13:32:25'),
(204, 0, 'QT3731', '2021-07-06 13:32:54', '2021-07-06 13:32:54'),
(205, 0, 'QT3731', '2021-07-06 13:33:02', '2021-07-06 13:33:02'),
(206, 0, 'QT5358', '2021-07-06 13:34:29', '2021-07-06 13:34:29'),
(207, 0, 'QT8935', '2021-07-06 13:55:07', '2021-07-06 13:55:07'),
(208, 0, 'QT2078', '2021-07-06 13:57:40', '2021-07-06 13:57:40'),
(209, 0, 'QT8935', '2021-07-06 13:58:15', '2021-07-06 13:58:15'),
(210, 0, 'QT8935', '2021-07-06 14:00:36', '2021-07-06 14:00:36'),
(211, 0, 'QT8935', '2021-07-06 14:02:24', '2021-07-06 14:02:24'),
(212, 0, 'QT8935', '2021-07-06 14:02:37', '2021-07-06 14:02:37'),
(213, 0, 'QT8935', '2021-07-06 14:03:08', '2021-07-06 14:03:08'),
(214, 0, 'QT8935', '2021-07-06 14:05:58', '2021-07-06 14:05:58'),
(215, 0, 'QT8935', '2021-07-06 14:07:18', '2021-07-06 14:07:18'),
(216, 0, 'QT8935', '2021-07-06 14:10:13', '2021-07-06 14:10:13'),
(217, 0, 'QT6802', '2021-07-06 15:03:10', '2021-07-06 15:03:10'),
(218, 0, 'QT6802', '2021-07-06 15:05:39', '2021-07-06 15:05:39'),
(219, 0, 'QT6802', '2021-07-06 15:07:26', '2021-07-06 15:07:26'),
(220, 0, 'QT4624', '2021-07-07 09:42:59', '2021-07-07 09:42:59'),
(221, 0, 'QT6488', '2021-07-07 09:51:04', '2021-07-07 09:51:04'),
(222, 0, 'QT6488', '2021-07-07 09:53:00', '2021-07-07 09:53:00'),
(223, 0, 'QT1423', '2021-07-07 09:57:49', '2021-07-07 09:57:49'),
(224, 0, 'QT1423', '2021-07-07 10:00:55', '2021-07-07 10:00:55'),
(225, 0, 'QT1423', '2021-07-07 10:02:08', '2021-07-07 10:02:08'),
(226, 0, 'QT1338', '2021-07-07 10:11:36', '2021-07-07 10:11:36'),
(227, 0, 'QT4269', '2021-07-07 10:25:03', '2021-07-07 10:25:03'),
(228, 0, 'QT1901', '2021-07-09 09:11:11', '2021-07-09 09:11:11'),
(229, 0, 'QT9127', '2021-07-09 09:41:40', '2021-07-09 09:41:40'),
(230, 0, 'QT5235', '2021-07-17 17:20:20', '2021-07-17 17:20:20'),
(231, 0, 'QT5235', '2021-07-17 17:24:59', '2021-07-17 17:24:59'),
(232, 0, 'QT5235', '2021-07-17 17:26:05', '2021-07-17 17:26:05'),
(233, 0, 'QT5235', '2021-07-17 17:27:42', '2021-07-17 17:27:42'),
(234, 0, 'QT5235', '2021-07-17 17:30:02', '2021-07-17 17:30:02'),
(235, 0, 'QT5235', '2021-07-17 17:30:43', '2021-07-17 17:30:43'),
(236, 0, 'QT5235', '2021-07-17 17:40:16', '2021-07-17 17:40:16'),
(237, 0, 'QT5235', '2021-07-17 17:41:14', '2021-07-17 17:41:14'),
(238, 0, 'QT5235', '2021-07-17 17:41:49', '2021-07-17 17:41:49'),
(239, 0, 'QT5235', '2021-07-17 17:42:18', '2021-07-17 17:42:18'),
(240, 0, 'QT7680', '2021-07-17 17:43:17', '2021-07-17 17:43:17'),
(241, 0, 'QT7352', '2021-07-21 13:05:36', '2021-07-21 13:05:36'),
(242, 0, 'QT7352', '2021-07-21 13:06:02', '2021-07-21 13:06:02'),
(243, 0, 'QT7352', '2021-07-21 13:07:11', '2021-07-21 13:07:11'),
(244, 0, 'QT7352', '2021-07-21 13:07:37', '2021-07-21 13:07:37'),
(245, 0, 'QT7352', '2021-07-21 13:10:55', '2021-07-21 13:10:55'),
(246, 0, 'QT7352', '2021-07-21 13:12:52', '2021-07-21 13:12:52'),
(247, 0, 'QT7352', '2021-07-21 13:13:28', '2021-07-21 13:13:28'),
(248, 0, 'QT7352', '2021-07-21 13:15:25', '2021-07-21 13:15:25'),
(249, 0, 'QT7352', '2021-07-21 13:18:58', '2021-07-21 13:18:58'),
(250, 0, 'QT7352', '2021-07-21 13:20:08', '2021-07-21 13:20:08'),
(251, 0, 'QT7352', '2021-07-21 13:20:42', '2021-07-21 13:20:42'),
(252, 0, 'QT7352', '2021-07-21 13:21:01', '2021-07-21 13:21:01'),
(253, 0, 'QT7352', '2021-07-21 13:22:08', '2021-07-21 13:22:08'),
(254, 0, 'QT7352', '2021-07-21 13:22:52', '2021-07-21 13:22:52'),
(255, 0, 'QT7352', '2021-07-21 13:23:28', '2021-07-21 13:23:28'),
(256, 0, 'QT7352', '2021-07-21 13:23:50', '2021-07-21 13:23:50'),
(257, 0, 'QT7352', '2021-07-21 13:24:01', '2021-07-21 13:24:01'),
(258, 0, 'QT7352', '2021-07-21 13:27:27', '2021-07-21 13:27:27'),
(259, 0, 'QT7352', '2021-07-21 13:28:31', '2021-07-21 13:28:31'),
(260, 0, 'QT7352', '2021-07-21 13:30:08', '2021-07-21 13:30:08'),
(261, 0, 'QT7352', '2021-07-21 13:30:14', '2021-07-21 13:30:14'),
(262, 0, 'QT7352', '2021-07-21 13:30:56', '2021-07-21 13:30:56'),
(263, 0, 'QT7352', '2021-07-21 13:31:30', '2021-07-21 13:31:30'),
(264, 0, 'QT7352', '2021-07-21 13:33:56', '2021-07-21 13:33:56'),
(265, 0, 'QT7352', '2021-07-21 13:36:02', '2021-07-21 13:36:02'),
(266, 0, 'QT7352', '2021-07-21 13:36:44', '2021-07-21 13:36:44'),
(267, 0, 'QT7352', '2021-07-21 13:37:35', '2021-07-21 13:37:35'),
(268, 0, 'QT7352', '2021-07-21 13:41:41', '2021-07-21 13:41:41'),
(269, 0, 'QT7352', '2021-07-21 13:42:06', '2021-07-21 13:42:06'),
(270, 0, 'QT7352', '2021-07-21 13:42:58', '2021-07-21 13:42:58'),
(271, 0, 'QT7352', '2021-07-21 13:43:20', '2021-07-21 13:43:20'),
(272, 0, 'QT7352', '2021-07-21 13:45:58', '2021-07-21 13:45:58'),
(273, 0, 'QT7352', '2021-07-21 13:46:37', '2021-07-21 13:46:37'),
(274, 0, 'QT7352', '2021-07-21 13:47:03', '2021-07-21 13:47:03'),
(275, 0, 'QT7352', '2021-07-21 13:47:41', '2021-07-21 13:47:41'),
(276, 0, 'QT7352', '2021-07-21 13:48:44', '2021-07-21 13:48:44'),
(277, 0, 'QT7352', '2021-07-21 19:38:07', '2021-07-21 19:38:07'),
(278, 0, 'QT7352', '2021-07-21 19:56:55', '2021-07-21 19:56:55'),
(279, 0, 'QT7352', '2021-07-21 20:13:35', '2021-07-21 20:13:35'),
(280, 0, 'QT7352', '2021-07-21 20:16:00', '2021-07-21 20:16:00'),
(281, 0, 'QT7352', '2021-07-21 20:17:05', '2021-07-21 20:17:05'),
(282, 0, 'QT7352', '2021-07-21 20:18:29', '2021-07-21 20:18:29'),
(283, 0, 'QT7352', '2021-07-21 20:19:10', '2021-07-21 20:19:10'),
(284, 0, 'QT7352', '2021-07-21 20:19:42', '2021-07-21 20:19:42'),
(285, 0, 'QT7352', '2021-07-21 20:20:16', '2021-07-21 20:20:16'),
(286, 0, 'QT7352', '2021-07-21 20:21:30', '2021-07-21 20:21:30'),
(287, 0, 'QT7352', '2021-07-21 20:23:24', '2021-07-21 20:23:24'),
(288, 0, 'QT7352', '2021-07-21 20:24:29', '2021-07-21 20:24:29'),
(289, 0, 'QT7352', '2021-07-21 20:30:57', '2021-07-21 20:30:57'),
(290, 0, 'QT7352', '2021-07-21 20:45:42', '2021-07-21 20:45:42'),
(291, 0, 'QT7352', '2021-07-21 20:46:31', '2021-07-21 20:46:31'),
(292, 0, 'QT7352', '2021-07-21 20:47:18', '2021-07-21 20:47:18'),
(293, 0, 'QT7352', '2021-07-21 20:48:16', '2021-07-21 20:48:16'),
(294, 0, 'QT7352', '2021-07-21 20:50:46', '2021-07-21 20:50:46'),
(295, 0, 'QT7352', '2021-07-21 20:53:34', '2021-07-21 20:53:34'),
(296, 0, 'QT7352', '2021-07-21 20:55:31', '2021-07-21 20:55:31'),
(297, 0, 'QT7352', '2021-07-21 21:01:05', '2021-07-21 21:01:05'),
(298, 0, 'QT7352', '2021-07-21 21:01:49', '2021-07-21 21:01:49'),
(299, 0, 'QT7352', '2021-07-21 21:05:06', '2021-07-21 21:05:06'),
(300, 0, 'QT7352', '2021-07-21 21:05:55', '2021-07-21 21:05:55'),
(301, 0, 'QT7352', '2021-07-21 21:08:12', '2021-07-21 21:08:12'),
(302, 0, 'QT7352', '2021-07-21 21:09:01', '2021-07-21 21:09:01'),
(303, 0, 'QT7352', '2021-07-21 21:10:05', '2021-07-21 21:10:05'),
(304, 0, 'QT7352', '2021-07-21 21:12:56', '2021-07-21 21:12:56'),
(305, 0, 'QT7352', '2021-07-21 21:13:39', '2021-07-21 21:13:39'),
(306, 0, 'QT7352', '2021-07-21 21:21:26', '2021-07-21 21:21:26'),
(307, 0, 'QT7352', '2021-07-21 21:22:38', '2021-07-21 21:22:38'),
(308, 0, 'QT7352', '2021-07-21 21:23:02', '2021-07-21 21:23:02'),
(309, 0, 'QT7352', '2021-07-21 21:23:47', '2021-07-21 21:23:47'),
(310, 0, 'QT7352', '2021-07-21 21:24:41', '2021-07-21 21:24:41'),
(311, 0, 'QT7352', '2021-07-21 21:25:37', '2021-07-21 21:25:37'),
(312, 0, 'QT7352', '2021-07-21 21:26:35', '2021-07-21 21:26:35'),
(313, 0, 'QT7352', '2021-07-21 21:27:41', '2021-07-21 21:27:41'),
(314, 0, 'QT7352', '2021-07-21 21:28:34', '2021-07-21 21:28:34'),
(315, 0, 'QT7352', '2021-07-21 21:29:33', '2021-07-21 21:29:33'),
(316, 0, 'QT7352', '2021-07-21 21:29:57', '2021-07-21 21:29:57'),
(317, 0, 'QT7352', '2021-07-21 21:30:35', '2021-07-21 21:30:35'),
(318, 0, 'QT7352', '2021-07-21 21:31:43', '2021-07-21 21:31:43'),
(319, 0, 'QT7352', '2021-07-21 21:33:14', '2021-07-21 21:33:14'),
(320, 0, 'QT7352', '2021-07-21 22:29:39', '2021-07-21 22:29:39'),
(321, 0, 'QT7352', '2021-07-21 22:31:09', '2021-07-21 22:31:09'),
(322, 0, 'QT7352', '2021-07-21 22:32:48', '2021-07-21 22:32:48'),
(323, 0, 'QT7352', '2021-07-21 22:33:28', '2021-07-21 22:33:28'),
(324, 0, 'QT7352', '2021-07-21 22:38:19', '2021-07-21 22:38:19'),
(325, 0, 'QT7352', '2021-07-21 22:38:50', '2021-07-21 22:38:50'),
(326, 0, 'QT7352', '2021-07-21 22:39:28', '2021-07-21 22:39:28'),
(327, 0, 'QT7352', '2021-07-21 22:39:40', '2021-07-21 22:39:40'),
(328, 0, 'QT7352', '2021-07-21 22:40:37', '2021-07-21 22:40:37'),
(329, 0, 'QT7352', '2021-07-21 22:41:13', '2021-07-21 22:41:13'),
(330, 0, 'QT7352', '2021-07-21 22:41:31', '2021-07-21 22:41:31'),
(331, 0, 'QT7352', '2021-07-21 22:47:48', '2021-07-21 22:47:48'),
(332, 0, 'QT7352', '2021-07-21 22:48:10', '2021-07-21 22:48:10'),
(333, 0, 'QT7352', '2021-07-21 22:48:32', '2021-07-21 22:48:32'),
(334, 0, 'QT7352', '2021-07-21 22:49:46', '2021-07-21 22:49:46'),
(335, 0, 'QT7352', '2021-07-21 22:50:20', '2021-07-21 22:50:20'),
(336, 0, 'QT7352', '2021-07-21 22:50:47', '2021-07-21 22:50:47'),
(337, 0, 'QT7352', '2021-07-21 22:51:11', '2021-07-21 22:51:11'),
(338, 0, 'QT7352', '2021-07-21 22:51:32', '2021-07-21 22:51:32'),
(339, 0, 'QT7352', '2021-07-21 22:51:57', '2021-07-21 22:51:57'),
(340, 0, 'QT7352', '2021-07-21 22:52:13', '2021-07-21 22:52:13'),
(341, 0, 'QT7352', '2021-07-21 22:52:47', '2021-07-21 22:52:47'),
(342, 0, 'QT7352', '2021-07-21 22:53:14', '2021-07-21 22:53:14'),
(343, 0, 'QT7352', '2021-07-21 22:53:42', '2021-07-21 22:53:42'),
(344, 0, 'QT7352', '2021-07-21 22:54:51', '2021-07-21 22:54:51'),
(345, 0, 'QT7352', '2021-07-21 22:55:31', '2021-07-21 22:55:31'),
(346, 0, 'QT7352', '2021-07-21 23:01:55', '2021-07-21 23:01:55'),
(347, 0, 'QT4804', '2021-07-21 23:04:29', '2021-07-21 23:04:29'),
(348, 0, 'QT4804', '2021-07-21 23:06:38', '2021-07-21 23:06:38'),
(349, 0, 'QT4804', '2021-07-21 23:13:05', '2021-07-21 23:13:05'),
(350, 0, 'QT4804', '2021-07-21 23:13:32', '2021-07-21 23:13:32'),
(351, 0, 'QT4804', '2021-07-21 23:13:44', '2021-07-21 23:13:44'),
(352, 0, 'QT7745', '2021-07-22 11:26:43', '2021-07-22 11:26:43'),
(353, 0, 'QT7745', '2021-07-22 11:37:43', '2021-07-22 11:37:43'),
(354, 0, 'QT7745', '2021-07-22 11:37:57', '2021-07-22 11:37:57'),
(355, 0, 'QT7745', '2021-07-22 11:39:05', '2021-07-22 11:39:05'),
(356, 0, 'QT7745', '2021-07-22 11:39:30', '2021-07-22 11:39:30'),
(357, 0, 'QT7745', '2021-07-22 11:40:35', '2021-07-22 11:40:35'),
(358, 0, 'QT7745', '2021-07-22 11:41:13', '2021-07-22 11:41:13'),
(359, 0, 'QT7745', '2021-07-22 11:41:21', '2021-07-22 11:41:21'),
(360, 0, 'QT7745', '2021-07-22 11:41:46', '2021-07-22 11:41:46'),
(361, 0, 'QT7745', '2021-07-22 11:43:39', '2021-07-22 11:43:39'),
(362, 0, 'QT7745', '2021-07-22 11:44:06', '2021-07-22 11:44:06'),
(363, 0, 'QT7745', '2021-07-22 11:44:58', '2021-07-22 11:44:58'),
(364, 0, 'QT7745', '2021-07-22 11:46:05', '2021-07-22 11:46:05'),
(365, 0, 'QT7745', '2021-07-22 11:46:32', '2021-07-22 11:46:32'),
(366, 0, 'QT7745', '2021-07-22 11:55:41', '2021-07-22 11:55:41'),
(367, 0, 'QT7745', '2021-07-22 11:57:32', '2021-07-22 11:57:32'),
(368, 0, 'QT7745', '2021-07-22 11:58:44', '2021-07-22 11:58:44'),
(369, 0, 'QT7745', '2021-07-22 12:00:29', '2021-07-22 12:00:29'),
(370, 0, 'QT7745', '2021-07-22 12:01:20', '2021-07-22 12:01:20'),
(371, 0, 'QT7745', '2021-07-22 12:01:49', '2021-07-22 12:01:49'),
(372, 0, 'QT7745', '2021-07-22 12:06:04', '2021-07-22 12:06:04'),
(373, 0, 'QT7745', '2021-07-22 12:09:21', '2021-07-22 12:09:21'),
(374, 0, 'QT7745', '2021-07-22 12:10:02', '2021-07-22 12:10:02'),
(375, 0, 'QT7745', '2021-07-22 12:12:57', '2021-07-22 12:12:57'),
(376, 0, 'QT7745', '2021-07-22 15:46:21', '2021-07-22 15:46:21'),
(377, 0, 'QT7745', '2021-07-22 15:49:11', '2021-07-22 15:49:11'),
(378, 0, 'QT7745', '2021-07-22 15:49:36', '2021-07-22 15:49:36'),
(379, 0, 'QT7745', '2021-07-22 13:20:40', '2021-07-22 13:20:40'),
(380, 0, 'QT1883', '2021-07-22 13:22:21', '2021-07-22 13:22:21'),
(381, 0, 'QT9516', '2021-07-22 22:28:32', '2021-07-22 22:28:32'),
(382, 0, 'QT8176', '2021-07-23 10:16:19', '2021-07-23 10:16:19'),
(383, 0, 'QT3741', '2021-07-23 10:55:41', '2021-07-23 10:55:41'),
(384, 0, 'QT3741', '2021-07-23 10:56:19', '2021-07-23 10:56:19'),
(385, 0, 'QT8031', '2021-07-23 10:57:55', '2021-07-23 10:57:55'),
(386, 0, 'QT7178', '2021-07-23 11:19:25', '2021-07-23 11:19:25'),
(387, 0, 'QT4213', '2021-07-23 13:36:37', '2021-07-23 13:36:37'),
(388, 0, 'QT1263', '2021-07-23 14:34:00', '2021-07-23 14:34:00'),
(389, 0, 'QT1263', '2021-07-23 14:36:17', '2021-07-23 14:36:17'),
(390, 0, 'QT1263', '2021-07-23 14:52:49', '2021-07-23 14:52:49'),
(391, 0, 'QT3741', '2021-07-23 14:53:12', '2021-07-23 14:53:12'),
(392, 0, 'QT1263', '2021-07-23 14:56:38', '2021-07-23 14:56:38'),
(393, 0, 'QT3741', '2021-07-23 15:38:14', '2021-07-23 15:38:14'),
(394, 0, 'QT3709', '2021-07-23 15:40:05', '2021-07-23 15:40:05'),
(395, 0, 'QT3709', '2021-07-23 15:43:53', '2021-07-23 15:43:53'),
(396, 0, 'QT3709', '2021-07-23 15:46:03', '2021-07-23 15:46:03'),
(397, 0, 'QT3709', '2021-07-23 15:47:09', '2021-07-23 15:47:09'),
(398, 0, 'QT3709', '2021-07-23 15:48:01', '2021-07-23 15:48:01'),
(399, 0, 'QT3709', '2021-07-23 15:48:39', '2021-07-23 15:48:39'),
(400, 0, 'QT3709', '2021-07-23 15:49:37', '2021-07-23 15:49:37'),
(401, 0, 'QT3709', '2021-07-23 15:50:35', '2021-07-23 15:50:35'),
(402, 0, 'QT3709', '2021-07-23 15:50:51', '2021-07-23 15:50:51'),
(403, 0, 'QT3709', '2021-07-23 15:51:37', '2021-07-23 15:51:37'),
(404, 0, 'QT3709', '2021-07-23 15:52:30', '2021-07-23 15:52:30'),
(405, 0, 'QT3709', '2021-07-23 15:55:42', '2021-07-23 15:55:42'),
(406, 0, 'QT3709', '2021-07-23 15:56:49', '2021-07-23 15:56:49'),
(407, 0, 'QT3709', '2021-07-23 15:57:35', '2021-07-23 15:57:35'),
(408, 0, 'QT3709', '2021-07-23 15:57:55', '2021-07-23 15:57:55'),
(409, 0, 'QT3709', '2021-07-23 15:58:36', '2021-07-23 15:58:36'),
(410, 0, 'QT3709', '2021-07-23 15:59:45', '2021-07-23 15:59:45'),
(411, 0, 'QT1460', '2021-07-23 16:01:40', '2021-07-23 16:01:40'),
(412, 0, 'QT3709', '2021-07-23 16:02:59', '2021-07-23 16:02:59'),
(413, 0, 'QT3709', '2021-07-23 16:05:22', '2021-07-23 16:05:22'),
(414, 0, 'QT3709', '2021-07-23 16:05:51', '2021-07-23 16:05:51'),
(415, 0, 'QT3709', '2021-07-23 16:06:35', '2021-07-23 16:06:35'),
(416, 0, 'QT3709', '2021-07-23 16:09:30', '2021-07-23 16:09:30'),
(417, 0, 'QT3709', '2021-07-23 16:09:50', '2021-07-23 16:09:50'),
(418, 0, 'QT6148', '2021-07-23 16:11:19', '2021-07-23 16:11:19'),
(419, 0, 'QT6148', '2021-07-23 16:12:01', '2021-07-23 16:12:01'),
(420, 0, 'QT6148', '2021-07-23 16:15:28', '2021-07-23 16:15:28'),
(421, 0, 'QT6148', '2021-07-23 16:15:48', '2021-07-23 16:15:48'),
(422, 0, 'QT8396', '2021-07-23 16:18:13', '2021-07-23 16:18:13'),
(423, 0, 'QT8396', '2021-07-23 16:18:38', '2021-07-23 16:18:38'),
(424, 0, 'QT8396', '2021-07-23 16:19:08', '2021-07-23 16:19:08'),
(425, 0, 'QT8396', '2021-07-23 16:20:25', '2021-07-23 16:20:25'),
(426, 0, 'QT8396', '2021-07-23 16:21:50', '2021-07-23 16:21:50'),
(427, 0, 'QT8396', '2021-07-23 16:22:17', '2021-07-23 16:22:17'),
(428, 0, 'QT8396', '2021-07-23 16:23:11', '2021-07-23 16:23:11'),
(429, 0, 'QT8396', '2021-07-23 16:24:54', '2021-07-23 16:24:54'),
(430, 0, 'QT8396', '2021-07-23 16:25:40', '2021-07-23 16:25:40'),
(431, 0, 'QT8396', '2021-07-23 16:26:18', '2021-07-23 16:26:18'),
(432, 0, 'QT8396', '2021-07-23 16:26:37', '2021-07-23 16:26:37'),
(433, 0, 'QT8396', '2021-07-23 16:27:31', '2021-07-23 16:27:31'),
(434, 0, 'QT8396', '2021-07-23 16:28:00', '2021-07-23 16:28:00'),
(435, 0, 'QT4810', '2021-07-23 16:37:29', '2021-07-23 16:37:29'),
(436, 0, 'QT4810', '2021-07-23 16:38:15', '2021-07-23 16:38:15'),
(437, 0, 'QT4810', '2021-07-23 16:45:26', '2021-07-23 16:45:26'),
(438, 0, 'QT4810', '2021-07-23 16:59:39', '2021-07-23 16:59:39'),
(439, 0, 'QT4810', '2021-07-23 17:01:09', '2021-07-23 17:01:09'),
(440, 0, 'QT4810', '2021-07-23 17:04:14', '2021-07-23 17:04:14'),
(441, 0, 'QT4810', '2021-07-23 17:05:09', '2021-07-23 17:05:09'),
(442, 0, 'QT4810', '2021-07-23 17:06:21', '2021-07-23 17:06:21'),
(443, 0, 'QT4810', '2021-07-23 17:06:54', '2021-07-23 17:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `quote_status`
--

CREATE TABLE `quote_status` (
                                `id` int(255) NOT NULL,
                                `quote_ref` int(255) NOT NULL,
                                `status_id` int(255) NOT NULL,
                                `date_created` datetime NOT NULL DEFAULT current_timestamp(),
                                `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quote_status`
--

INSERT INTO `quote_status` (`id`, `quote_ref`, `status_id`, `date_created`, `last_modified`) VALUES
(1, 0, 1, '2021-07-05 14:35:47', '2021-07-05 14:35:47'),
(2, 0, 1, '2021-07-05 14:36:50', '2021-07-05 14:36:50'),
(3, 0, 1, '2021-07-05 14:36:54', '2021-07-05 14:36:54'),
(4, 0, 1, '2021-07-05 14:38:04', '2021-07-05 14:38:04'),
(5, 0, 1, '2021-07-05 14:39:07', '2021-07-05 14:39:07'),
(6, 0, 1, '2021-07-05 14:40:24', '2021-07-05 14:40:24'),
(7, 0, 1, '2021-07-05 14:40:29', '2021-07-05 14:40:29'),
(8, 0, 1, '2021-07-05 14:40:47', '2021-07-05 14:40:47'),
(9, 0, 1, '2021-07-05 14:41:00', '2021-07-05 14:41:00'),
(10, 0, 1, '2021-07-05 14:41:42', '2021-07-05 14:41:42'),
(11, 0, 1, '2021-07-05 14:42:04', '2021-07-05 14:42:04'),
(12, 0, 1, '2021-07-05 14:42:47', '2021-07-05 14:42:47'),
(13, 0, 1, '2021-07-05 14:43:11', '2021-07-05 14:43:11'),
(14, 0, 1, '2021-07-05 14:44:44', '2021-07-05 14:44:44'),
(15, 0, 1, '2021-07-05 14:44:48', '2021-07-05 14:44:48'),
(16, 0, 1, '2021-07-05 14:47:46', '2021-07-05 14:47:46'),
(17, 0, 1, '2021-07-05 14:51:33', '2021-07-05 14:51:33'),
(18, 0, 1, '2021-07-05 14:51:42', '2021-07-05 14:51:42'),
(19, 0, 1, '2021-07-05 14:57:14', '2021-07-05 14:57:14'),
(20, 0, 1, '2021-07-05 14:57:23', '2021-07-05 14:57:23'),
(21, 0, 1, '2021-07-05 14:59:09', '2021-07-05 14:59:09'),
(22, 0, 1, '2021-07-05 15:03:29', '2021-07-05 15:03:29'),
(23, 0, 1, '2021-07-05 15:06:38', '2021-07-05 15:06:38'),
(24, 0, 1, '2021-07-05 15:06:42', '2021-07-05 15:06:42'),
(25, 0, 1, '2021-07-05 15:13:26', '2021-07-05 15:13:26'),
(26, 0, 1, '2021-07-05 15:14:00', '2021-07-05 15:14:00'),
(27, 0, 1, '2021-07-05 15:14:18', '2021-07-05 15:14:18'),
(28, 0, 1, '2021-07-05 15:18:10', '2021-07-05 15:18:10'),
(29, 0, 1, '2021-07-05 15:20:34', '2021-07-05 15:20:34'),
(30, 0, 1, '2021-07-05 15:22:19', '2021-07-05 15:22:19'),
(31, 0, 1, '2021-07-05 15:27:52', '2021-07-05 15:27:52'),
(32, 0, 1, '2021-07-05 15:51:24', '2021-07-05 15:51:24'),
(33, 0, 1, '2021-07-05 15:51:45', '2021-07-05 15:51:45'),
(34, 0, 1, '2021-07-05 15:57:17', '2021-07-05 15:57:17'),
(35, 0, 1, '2021-07-05 15:57:50', '2021-07-05 15:57:50'),
(36, 0, 1, '2021-07-05 15:57:56', '2021-07-05 15:57:56'),
(37, 0, 1, '2021-07-05 15:58:11', '2021-07-05 15:58:11'),
(38, 0, 1, '2021-07-05 15:58:16', '2021-07-05 15:58:16'),
(39, 0, 1, '2021-07-05 15:59:37', '2021-07-05 15:59:37'),
(40, 0, 1, '2021-07-05 15:59:45', '2021-07-05 15:59:45'),
(41, 0, 1, '2021-07-05 15:59:47', '2021-07-05 15:59:47'),
(42, 0, 1, '2021-07-05 16:00:13', '2021-07-05 16:00:13'),
(43, 0, 1, '2021-07-05 16:04:06', '2021-07-05 16:04:06'),
(44, 0, 1, '2021-07-05 16:05:09', '2021-07-05 16:05:09'),
(45, 0, 1, '2021-07-05 16:06:38', '2021-07-05 16:06:38'),
(46, 0, 1, '2021-07-05 16:08:09', '2021-07-05 16:08:09'),
(47, 0, 1, '2021-07-05 16:08:24', '2021-07-05 16:08:24'),
(48, 0, 1, '2021-07-05 16:08:32', '2021-07-05 16:08:32'),
(49, 0, 1, '2021-07-05 16:08:46', '2021-07-05 16:08:46'),
(50, 0, 1, '2021-07-05 16:09:15', '2021-07-05 16:09:15'),
(51, 0, 1, '2021-07-05 16:11:11', '2021-07-05 16:11:11'),
(52, 0, 1, '2021-07-05 16:11:26', '2021-07-05 16:11:26'),
(53, 0, 1, '2021-07-05 16:24:08', '2021-07-05 16:24:08'),
(54, 0, 1, '2021-07-05 16:24:44', '2021-07-05 16:24:44'),
(55, 0, 1, '2021-07-05 16:24:55', '2021-07-05 16:24:55'),
(56, 0, 1, '2021-07-05 16:25:20', '2021-07-05 16:25:20'),
(57, 0, 1, '2021-07-05 16:25:47', '2021-07-05 16:25:47'),
(58, 0, 1, '2021-07-05 16:26:31', '2021-07-05 16:26:31'),
(59, 0, 1, '2021-07-05 16:27:23', '2021-07-05 16:27:23'),
(60, 0, 1, '2021-07-05 16:27:51', '2021-07-05 16:27:51'),
(61, 0, 1, '2021-07-05 16:28:53', '2021-07-05 16:28:53'),
(62, 0, 1, '2021-07-05 16:32:48', '2021-07-05 16:32:48'),
(63, 0, 1, '2021-07-05 16:34:17', '2021-07-05 16:34:17'),
(64, 0, 1, '2021-07-05 16:34:43', '2021-07-05 16:34:43'),
(65, 0, 1, '2021-07-05 16:35:14', '2021-07-05 16:35:14'),
(66, 0, 1, '2021-07-05 16:35:36', '2021-07-05 16:35:36'),
(67, 0, 1, '2021-07-05 16:35:50', '2021-07-05 16:35:50'),
(68, 0, 1, '2021-07-05 16:36:23', '2021-07-05 16:36:23'),
(69, 0, 1, '2021-07-05 16:36:27', '2021-07-05 16:36:27'),
(70, 0, 1, '2021-07-05 16:36:42', '2021-07-05 16:36:42'),
(71, 0, 1, '2021-07-05 16:37:12', '2021-07-05 16:37:12'),
(72, 0, 1, '2021-07-05 16:37:31', '2021-07-05 16:37:31'),
(73, 0, 1, '2021-07-05 16:37:37', '2021-07-05 16:37:37'),
(74, 0, 1, '2021-07-05 16:38:10', '2021-07-05 16:38:10'),
(75, 0, 1, '2021-07-05 16:39:45', '2021-07-05 16:39:45'),
(76, 0, 1, '2021-07-05 16:45:40', '2021-07-05 16:45:40'),
(77, 0, 1, '2021-07-05 16:46:17', '2021-07-05 16:46:17'),
(78, 0, 1, '2021-07-05 16:49:38', '2021-07-05 16:49:38'),
(79, 0, 1, '2021-07-05 16:50:25', '2021-07-05 16:50:25'),
(80, 0, 1, '2021-07-05 16:50:47', '2021-07-05 16:50:47'),
(81, 0, 1, '2021-07-05 16:52:16', '2021-07-05 16:52:16'),
(82, 0, 1, '2021-07-05 16:52:39', '2021-07-05 16:52:39'),
(83, 0, 1, '2021-07-05 16:53:34', '2021-07-05 16:53:34'),
(84, 0, 1, '2021-07-05 16:53:56', '2021-07-05 16:53:56'),
(85, 0, 1, '2021-07-05 16:55:13', '2021-07-05 16:55:13'),
(86, 0, 1, '2021-07-05 16:55:47', '2021-07-05 16:55:47'),
(87, 0, 1, '2021-07-05 16:55:58', '2021-07-05 16:55:58'),
(88, 0, 1, '2021-07-05 16:57:03', '2021-07-05 16:57:03'),
(89, 0, 1, '2021-07-05 16:57:21', '2021-07-05 16:57:21'),
(90, 0, 1, '2021-07-05 16:57:46', '2021-07-05 16:57:46'),
(91, 0, 1, '2021-07-05 16:57:51', '2021-07-05 16:57:51'),
(92, 0, 1, '2021-07-05 16:58:10', '2021-07-05 16:58:10'),
(93, 0, 1, '2021-07-05 16:59:05', '2021-07-05 16:59:05'),
(94, 0, 1, '2021-07-05 16:59:51', '2021-07-05 16:59:51'),
(95, 0, 1, '2021-07-05 17:00:14', '2021-07-05 17:00:14'),
(96, 0, 1, '2021-07-05 17:00:18', '2021-07-05 17:00:18'),
(97, 0, 1, '2021-07-05 17:00:51', '2021-07-05 17:00:51'),
(98, 0, 1, '2021-07-05 17:00:59', '2021-07-05 17:00:59'),
(99, 0, 1, '2021-07-05 17:01:22', '2021-07-05 17:01:22'),
(100, 0, 1, '2021-07-05 17:01:50', '2021-07-05 17:01:50'),
(101, 0, 1, '2021-07-05 17:05:18', '2021-07-05 17:05:18'),
(102, 0, 1, '2021-07-05 17:05:53', '2021-07-05 17:05:53'),
(103, 0, 1, '2021-07-05 17:06:21', '2021-07-05 17:06:21'),
(104, 0, 1, '2021-07-05 17:06:50', '2021-07-05 17:06:50'),
(105, 0, 1, '2021-07-05 17:06:59', '2021-07-05 17:06:59'),
(106, 0, 1, '2021-07-05 17:07:20', '2021-07-05 17:07:20'),
(107, 0, 1, '2021-07-05 17:08:23', '2021-07-05 17:08:23'),
(108, 0, 1, '2021-07-05 17:08:51', '2021-07-05 17:08:51'),
(109, 0, 1, '2021-07-05 17:10:05', '2021-07-05 17:10:05'),
(110, 0, 1, '2021-07-05 17:10:40', '2021-07-05 17:10:40'),
(111, 0, 1, '2021-07-05 17:10:52', '2021-07-05 17:10:52'),
(112, 0, 1, '2021-07-05 17:11:44', '2021-07-05 17:11:44'),
(113, 0, 1, '2021-07-05 17:11:53', '2021-07-05 17:11:53'),
(114, 0, 1, '2021-07-05 17:12:41', '2021-07-05 17:12:41'),
(115, 0, 1, '2021-07-05 17:14:04', '2021-07-05 17:14:04'),
(116, 0, 1, '2021-07-05 17:14:24', '2021-07-05 17:14:24'),
(117, 0, 1, '2021-07-05 17:14:41', '2021-07-05 17:14:41'),
(118, 0, 1, '2021-07-05 17:14:45', '2021-07-05 17:14:45'),
(119, 0, 1, '2021-07-05 17:17:18', '2021-07-05 17:17:18'),
(120, 0, 1, '2021-07-05 17:17:49', '2021-07-05 17:17:49'),
(121, 0, 1, '2021-07-05 17:20:17', '2021-07-05 17:20:17'),
(122, 0, 1, '2021-07-05 17:20:54', '2021-07-05 17:20:54'),
(123, 0, 1, '2021-07-05 17:21:26', '2021-07-05 17:21:26'),
(124, 0, 1, '2021-07-05 17:23:10', '2021-07-05 17:23:10'),
(125, 0, 1, '2021-07-05 17:23:36', '2021-07-05 17:23:36'),
(126, 0, 1, '2021-07-05 17:24:29', '2021-07-05 17:24:29'),
(127, 0, 1, '2021-07-05 17:24:54', '2021-07-05 17:24:54'),
(128, 0, 1, '2021-07-05 17:25:26', '2021-07-05 17:25:26'),
(129, 0, 1, '2021-07-05 17:26:18', '2021-07-05 17:26:18'),
(130, 0, 1, '2021-07-05 17:27:22', '2021-07-05 17:27:22'),
(131, 0, 1, '2021-07-05 17:28:21', '2021-07-05 17:28:21'),
(132, 0, 1, '2021-07-05 17:28:42', '2021-07-05 17:28:42'),
(133, 0, 1, '2021-07-05 17:30:06', '2021-07-05 17:30:06'),
(134, 0, 1, '2021-07-05 17:31:54', '2021-07-05 17:31:54'),
(135, 0, 1, '2021-07-05 17:33:01', '2021-07-05 17:33:01'),
(136, 0, 1, '2021-07-05 17:34:11', '2021-07-05 17:34:11'),
(137, 0, 1, '2021-07-05 17:36:06', '2021-07-05 17:36:06'),
(138, 0, 1, '2021-07-05 17:36:35', '2021-07-05 17:36:35'),
(139, 0, 1, '2021-07-05 17:37:31', '2021-07-05 17:37:31'),
(140, 0, 1, '2021-07-05 17:40:00', '2021-07-05 17:40:00'),
(141, 0, 1, '2021-07-05 17:41:47', '2021-07-05 17:41:47'),
(142, 0, 1, '2021-07-05 17:42:04', '2021-07-05 17:42:04'),
(143, 0, 1, '2021-07-05 17:42:36', '2021-07-05 17:42:36'),
(144, 0, 1, '2021-07-05 17:42:53', '2021-07-05 17:42:53'),
(145, 0, 1, '2021-07-05 17:44:18', '2021-07-05 17:44:18'),
(146, 0, 1, '2021-07-05 17:48:52', '2021-07-05 17:48:52'),
(147, 0, 1, '2021-07-05 17:49:18', '2021-07-05 17:49:18'),
(148, 0, 1, '2021-07-05 17:49:35', '2021-07-05 17:49:35'),
(149, 0, 1, '2021-07-05 17:49:44', '2021-07-05 17:49:44'),
(150, 0, 1, '2021-07-05 17:50:32', '2021-07-05 17:50:32'),
(151, 0, 1, '2021-07-05 17:50:46', '2021-07-05 17:50:46'),
(152, 0, 1, '2021-07-05 17:51:44', '2021-07-05 17:51:44'),
(153, 0, 1, '2021-07-05 17:52:09', '2021-07-05 17:52:09'),
(154, 0, 1, '2021-07-05 17:53:00', '2021-07-05 17:53:00'),
(155, 0, 1, '2021-07-05 17:53:35', '2021-07-05 17:53:35'),
(156, 0, 1, '2021-07-05 17:54:00', '2021-07-05 17:54:00'),
(157, 0, 1, '2021-07-05 17:54:43', '2021-07-05 17:54:43'),
(158, 0, 1, '2021-07-05 17:55:10', '2021-07-05 17:55:10'),
(159, 0, 1, '2021-07-05 17:55:28', '2021-07-05 17:55:28'),
(160, 0, 1, '2021-07-05 17:56:24', '2021-07-05 17:56:24'),
(161, 0, 1, '2021-07-05 17:57:23', '2021-07-05 17:57:23'),
(162, 0, 1, '2021-07-05 17:59:12', '2021-07-05 17:59:12'),
(163, 0, 1, '2021-07-05 18:00:01', '2021-07-05 18:00:01'),
(164, 0, 1, '2021-07-05 18:13:01', '2021-07-05 18:13:01'),
(165, 0, 1, '2021-07-05 18:13:50', '2021-07-05 18:13:50'),
(166, 0, 1, '2021-07-05 18:14:45', '2021-07-05 18:14:45'),
(167, 0, 1, '2021-07-05 19:26:20', '2021-07-05 19:26:20'),
(168, 0, 1, '2021-07-05 20:54:46', '2021-07-05 20:54:46'),
(169, 0, 1, '2021-07-06 09:03:11', '2021-07-06 09:03:11'),
(170, 0, 1, '2021-07-06 09:09:51', '2021-07-06 09:09:51'),
(171, 0, 1, '2021-07-06 09:13:13', '2021-07-06 09:13:13'),
(172, 0, 1, '2021-07-06 09:15:42', '2021-07-06 09:15:42'),
(173, 0, 1, '2021-07-06 09:27:06', '2021-07-06 09:27:06'),
(174, 0, 1, '2021-07-06 09:28:23', '2021-07-06 09:28:23'),
(175, 0, 1, '2021-07-06 09:29:33', '2021-07-06 09:29:33'),
(176, 0, 1, '2021-07-06 09:31:49', '2021-07-06 09:31:49'),
(177, 0, 1, '2021-07-06 09:32:20', '2021-07-06 09:32:20'),
(178, 0, 1, '2021-07-06 09:33:39', '2021-07-06 09:33:39'),
(179, 0, 1, '2021-07-06 09:34:11', '2021-07-06 09:34:11'),
(180, 0, 1, '2021-07-06 09:34:39', '2021-07-06 09:34:39'),
(181, 0, 1, '2021-07-06 09:34:48', '2021-07-06 09:34:48'),
(182, 0, 1, '2021-07-06 09:35:57', '2021-07-06 09:35:57'),
(183, 0, 1, '2021-07-06 09:37:31', '2021-07-06 09:37:31'),
(184, 0, 1, '2021-07-06 09:39:08', '2021-07-06 09:39:08'),
(185, 0, 1, '2021-07-06 09:40:13', '2021-07-06 09:40:13'),
(186, 0, 1, '2021-07-06 09:43:09', '2021-07-06 09:43:09'),
(187, 0, 1, '2021-07-06 09:44:01', '2021-07-06 09:44:01'),
(188, 0, 1, '2021-07-06 09:45:21', '2021-07-06 09:45:21'),
(189, 0, 1, '2021-07-06 09:45:46', '2021-07-06 09:45:46'),
(190, 0, 1, '2021-07-06 09:55:59', '2021-07-06 09:55:59'),
(191, 0, 1, '2021-07-06 09:57:12', '2021-07-06 09:57:12'),
(192, 0, 1, '2021-07-06 09:59:58', '2021-07-06 09:59:58'),
(193, 0, 1, '2021-07-06 10:04:07', '2021-07-06 10:04:07'),
(194, 0, 1, '2021-07-06 10:07:52', '2021-07-06 10:07:52'),
(195, 0, 1, '2021-07-06 10:09:51', '2021-07-06 10:09:51'),
(196, 0, 1, '2021-07-06 12:51:35', '2021-07-06 12:51:35'),
(197, 0, 1, '2021-07-06 12:56:16', '2021-07-06 12:56:16'),
(198, 0, 1, '2021-07-06 12:57:03', '2021-07-06 12:57:03'),
(199, 0, 1, '2021-07-06 12:57:28', '2021-07-06 12:57:28'),
(200, 0, 1, '2021-07-06 13:29:27', '2021-07-06 13:29:27'),
(201, 0, 1, '2021-07-06 13:29:51', '2021-07-06 13:29:51'),
(202, 0, 1, '2021-07-06 13:31:08', '2021-07-06 13:31:08'),
(203, 0, 1, '2021-07-06 13:32:25', '2021-07-06 13:32:25'),
(204, 0, 1, '2021-07-06 13:32:54', '2021-07-06 13:32:54'),
(205, 0, 1, '2021-07-06 13:33:02', '2021-07-06 13:33:02'),
(206, 0, 1, '2021-07-06 13:34:29', '2021-07-06 13:34:29'),
(207, 0, 1, '2021-07-06 13:55:07', '2021-07-06 13:55:07'),
(208, 0, 1, '2021-07-06 13:57:40', '2021-07-06 13:57:40'),
(209, 0, 1, '2021-07-06 13:58:15', '2021-07-06 13:58:15'),
(210, 0, 1, '2021-07-06 14:00:36', '2021-07-06 14:00:36'),
(211, 0, 1, '2021-07-06 14:02:24', '2021-07-06 14:02:24'),
(212, 0, 1, '2021-07-06 14:02:37', '2021-07-06 14:02:37'),
(213, 0, 1, '2021-07-06 14:03:08', '2021-07-06 14:03:08'),
(214, 0, 1, '2021-07-06 14:05:58', '2021-07-06 14:05:58'),
(215, 0, 1, '2021-07-06 14:07:18', '2021-07-06 14:07:18'),
(216, 0, 1, '2021-07-06 14:10:13', '2021-07-06 14:10:13'),
(217, 0, 1, '2021-07-06 15:03:10', '2021-07-06 15:03:10'),
(218, 0, 1, '2021-07-06 15:05:39', '2021-07-06 15:05:39'),
(219, 0, 1, '2021-07-06 15:07:26', '2021-07-06 15:07:26'),
(220, 0, 1, '2021-07-07 09:42:59', '2021-07-07 09:42:59'),
(221, 0, 1, '2021-07-07 09:51:04', '2021-07-07 09:51:04'),
(222, 0, 1, '2021-07-07 09:53:00', '2021-07-07 09:53:00'),
(223, 0, 1, '2021-07-07 09:57:49', '2021-07-07 09:57:49'),
(224, 0, 1, '2021-07-07 10:00:55', '2021-07-07 10:00:55'),
(225, 0, 1, '2021-07-07 10:02:08', '2021-07-07 10:02:08'),
(226, 0, 1, '2021-07-07 10:11:36', '2021-07-07 10:11:36'),
(227, 0, 1, '2021-07-07 10:25:03', '2021-07-07 10:25:03'),
(228, 0, 1, '2021-07-09 09:11:11', '2021-07-09 09:11:11'),
(229, 0, 1, '2021-07-09 09:41:40', '2021-07-09 09:41:40'),
(230, 0, 1, '2021-07-17 17:20:20', '2021-07-17 17:20:20'),
(231, 0, 1, '2021-07-17 17:24:59', '2021-07-17 17:24:59'),
(232, 0, 1, '2021-07-17 17:26:05', '2021-07-17 17:26:05'),
(233, 0, 1, '2021-07-17 17:27:42', '2021-07-17 17:27:42'),
(234, 0, 1, '2021-07-17 17:30:02', '2021-07-17 17:30:02'),
(235, 0, 1, '2021-07-17 17:30:43', '2021-07-17 17:30:43'),
(236, 0, 1, '2021-07-17 17:40:16', '2021-07-17 17:40:16'),
(237, 0, 1, '2021-07-17 17:41:14', '2021-07-17 17:41:14'),
(238, 0, 1, '2021-07-17 17:41:49', '2021-07-17 17:41:49'),
(239, 0, 1, '2021-07-17 17:42:18', '2021-07-17 17:42:18'),
(240, 0, 1, '2021-07-17 17:43:17', '2021-07-17 17:43:17'),
(241, 0, 1, '2021-07-21 13:05:36', '2021-07-21 13:05:36'),
(242, 0, 1, '2021-07-21 13:06:02', '2021-07-21 13:06:02'),
(243, 0, 1, '2021-07-21 13:07:11', '2021-07-21 13:07:11'),
(244, 0, 1, '2021-07-21 13:07:37', '2021-07-21 13:07:37'),
(245, 0, 1, '2021-07-21 13:10:55', '2021-07-21 13:10:55'),
(246, 0, 1, '2021-07-21 13:12:52', '2021-07-21 13:12:52'),
(247, 0, 1, '2021-07-21 13:13:28', '2021-07-21 13:13:28'),
(248, 0, 1, '2021-07-21 13:15:25', '2021-07-21 13:15:25'),
(249, 0, 1, '2021-07-21 13:18:58', '2021-07-21 13:18:58'),
(250, 0, 1, '2021-07-21 13:20:08', '2021-07-21 13:20:08'),
(251, 0, 1, '2021-07-21 13:20:42', '2021-07-21 13:20:42'),
(252, 0, 1, '2021-07-21 13:21:01', '2021-07-21 13:21:01'),
(253, 0, 1, '2021-07-21 13:22:08', '2021-07-21 13:22:08'),
(254, 0, 1, '2021-07-21 13:22:52', '2021-07-21 13:22:52'),
(255, 0, 1, '2021-07-21 13:23:28', '2021-07-21 13:23:28'),
(256, 0, 1, '2021-07-21 13:23:50', '2021-07-21 13:23:50'),
(257, 0, 1, '2021-07-21 13:24:01', '2021-07-21 13:24:01'),
(258, 0, 1, '2021-07-21 13:27:27', '2021-07-21 13:27:27'),
(259, 0, 1, '2021-07-21 13:28:31', '2021-07-21 13:28:31'),
(260, 0, 1, '2021-07-21 13:30:08', '2021-07-21 13:30:08'),
(261, 0, 1, '2021-07-21 13:30:14', '2021-07-21 13:30:14'),
(262, 0, 1, '2021-07-21 13:30:56', '2021-07-21 13:30:56'),
(263, 0, 1, '2021-07-21 13:31:30', '2021-07-21 13:31:30'),
(264, 0, 1, '2021-07-21 13:33:56', '2021-07-21 13:33:56'),
(265, 0, 1, '2021-07-21 13:36:02', '2021-07-21 13:36:02'),
(266, 0, 1, '2021-07-21 13:36:44', '2021-07-21 13:36:44'),
(267, 0, 1, '2021-07-21 13:37:35', '2021-07-21 13:37:35'),
(268, 0, 1, '2021-07-21 13:41:41', '2021-07-21 13:41:41'),
(269, 0, 1, '2021-07-21 13:42:06', '2021-07-21 13:42:06'),
(270, 0, 1, '2021-07-21 13:42:58', '2021-07-21 13:42:58'),
(271, 0, 1, '2021-07-21 13:43:20', '2021-07-21 13:43:20'),
(272, 0, 1, '2021-07-21 13:45:58', '2021-07-21 13:45:58'),
(273, 0, 1, '2021-07-21 13:46:37', '2021-07-21 13:46:37'),
(274, 0, 1, '2021-07-21 13:47:03', '2021-07-21 13:47:03'),
(275, 0, 1, '2021-07-21 13:47:41', '2021-07-21 13:47:41'),
(276, 0, 1, '2021-07-21 13:48:44', '2021-07-21 13:48:44'),
(277, 0, 1, '2021-07-21 19:38:07', '2021-07-21 19:38:07'),
(278, 0, 1, '2021-07-21 19:56:55', '2021-07-21 19:56:55'),
(279, 0, 1, '2021-07-21 20:13:35', '2021-07-21 20:13:35'),
(280, 0, 1, '2021-07-21 20:16:00', '2021-07-21 20:16:00'),
(281, 0, 1, '2021-07-21 20:17:05', '2021-07-21 20:17:05'),
(282, 0, 1, '2021-07-21 20:18:29', '2021-07-21 20:18:29'),
(283, 0, 1, '2021-07-21 20:19:10', '2021-07-21 20:19:10'),
(284, 0, 1, '2021-07-21 20:19:42', '2021-07-21 20:19:42'),
(285, 0, 1, '2021-07-21 20:20:16', '2021-07-21 20:20:16'),
(286, 0, 1, '2021-07-21 20:21:30', '2021-07-21 20:21:30'),
(287, 0, 1, '2021-07-21 20:23:24', '2021-07-21 20:23:24'),
(288, 0, 1, '2021-07-21 20:24:29', '2021-07-21 20:24:29'),
(289, 0, 1, '2021-07-21 20:30:57', '2021-07-21 20:30:57'),
(290, 0, 1, '2021-07-21 20:45:42', '2021-07-21 20:45:42'),
(291, 0, 1, '2021-07-21 20:46:31', '2021-07-21 20:46:31'),
(292, 0, 1, '2021-07-21 20:47:18', '2021-07-21 20:47:18'),
(293, 0, 1, '2021-07-21 20:48:16', '2021-07-21 20:48:16'),
(294, 0, 1, '2021-07-21 20:50:46', '2021-07-21 20:50:46'),
(295, 0, 1, '2021-07-21 20:53:34', '2021-07-21 20:53:34'),
(296, 0, 1, '2021-07-21 20:55:31', '2021-07-21 20:55:31'),
(297, 0, 1, '2021-07-21 21:01:05', '2021-07-21 21:01:05'),
(298, 0, 1, '2021-07-21 21:01:49', '2021-07-21 21:01:49'),
(299, 0, 1, '2021-07-21 21:05:06', '2021-07-21 21:05:06'),
(300, 0, 1, '2021-07-21 21:05:55', '2021-07-21 21:05:55'),
(301, 0, 1, '2021-07-21 21:08:12', '2021-07-21 21:08:12'),
(302, 0, 1, '2021-07-21 21:09:01', '2021-07-21 21:09:01'),
(303, 0, 1, '2021-07-21 21:10:05', '2021-07-21 21:10:05'),
(304, 0, 1, '2021-07-21 21:12:56', '2021-07-21 21:12:56'),
(305, 0, 1, '2021-07-21 21:13:39', '2021-07-21 21:13:39'),
(306, 0, 1, '2021-07-21 21:21:26', '2021-07-21 21:21:26'),
(307, 0, 1, '2021-07-21 21:22:38', '2021-07-21 21:22:38'),
(308, 0, 1, '2021-07-21 21:23:02', '2021-07-21 21:23:02'),
(309, 0, 1, '2021-07-21 21:23:47', '2021-07-21 21:23:47'),
(310, 0, 1, '2021-07-21 21:24:41', '2021-07-21 21:24:41'),
(311, 0, 1, '2021-07-21 21:25:37', '2021-07-21 21:25:37'),
(312, 0, 1, '2021-07-21 21:26:35', '2021-07-21 21:26:35'),
(313, 0, 1, '2021-07-21 21:27:41', '2021-07-21 21:27:41'),
(314, 0, 1, '2021-07-21 21:28:34', '2021-07-21 21:28:34'),
(315, 0, 1, '2021-07-21 21:29:33', '2021-07-21 21:29:33'),
(316, 0, 1, '2021-07-21 21:29:57', '2021-07-21 21:29:57'),
(317, 0, 1, '2021-07-21 21:30:35', '2021-07-21 21:30:35'),
(318, 0, 1, '2021-07-21 21:31:43', '2021-07-21 21:31:43'),
(319, 0, 1, '2021-07-21 21:33:14', '2021-07-21 21:33:14'),
(320, 0, 1, '2021-07-21 22:29:39', '2021-07-21 22:29:39'),
(321, 0, 1, '2021-07-21 22:31:09', '2021-07-21 22:31:09'),
(322, 0, 1, '2021-07-21 22:32:48', '2021-07-21 22:32:48'),
(323, 0, 1, '2021-07-21 22:33:28', '2021-07-21 22:33:28'),
(324, 0, 1, '2021-07-21 22:38:19', '2021-07-21 22:38:19'),
(325, 0, 1, '2021-07-21 22:38:50', '2021-07-21 22:38:50'),
(326, 0, 1, '2021-07-21 22:39:28', '2021-07-21 22:39:28'),
(327, 0, 1, '2021-07-21 22:39:40', '2021-07-21 22:39:40'),
(328, 0, 1, '2021-07-21 22:40:37', '2021-07-21 22:40:37'),
(329, 0, 1, '2021-07-21 22:41:13', '2021-07-21 22:41:13'),
(330, 0, 1, '2021-07-21 22:41:31', '2021-07-21 22:41:31'),
(331, 0, 1, '2021-07-21 22:47:48', '2021-07-21 22:47:48'),
(332, 0, 1, '2021-07-21 22:48:10', '2021-07-21 22:48:10'),
(333, 0, 1, '2021-07-21 22:48:32', '2021-07-21 22:48:32'),
(334, 0, 1, '2021-07-21 22:49:46', '2021-07-21 22:49:46'),
(335, 0, 1, '2021-07-21 22:50:20', '2021-07-21 22:50:20'),
(336, 0, 1, '2021-07-21 22:50:47', '2021-07-21 22:50:47'),
(337, 0, 1, '2021-07-21 22:51:11', '2021-07-21 22:51:11'),
(338, 0, 1, '2021-07-21 22:51:32', '2021-07-21 22:51:32'),
(339, 0, 1, '2021-07-21 22:51:57', '2021-07-21 22:51:57'),
(340, 0, 1, '2021-07-21 22:52:13', '2021-07-21 22:52:13'),
(341, 0, 1, '2021-07-21 22:52:47', '2021-07-21 22:52:47'),
(342, 0, 1, '2021-07-21 22:53:14', '2021-07-21 22:53:14'),
(343, 0, 1, '2021-07-21 22:53:42', '2021-07-21 22:53:42'),
(344, 0, 1, '2021-07-21 22:54:51', '2021-07-21 22:54:51'),
(345, 0, 1, '2021-07-21 22:55:31', '2021-07-21 22:55:31'),
(346, 0, 1, '2021-07-21 23:01:55', '2021-07-21 23:01:55'),
(347, 0, 1, '2021-07-21 23:04:29', '2021-07-21 23:04:29'),
(348, 0, 1, '2021-07-21 23:06:38', '2021-07-21 23:06:38'),
(349, 0, 1, '2021-07-21 23:13:05', '2021-07-21 23:13:05'),
(350, 0, 1, '2021-07-21 23:13:32', '2021-07-21 23:13:32'),
(351, 0, 1, '2021-07-21 23:13:44', '2021-07-21 23:13:44'),
(352, 0, 1, '2021-07-22 11:26:43', '2021-07-22 11:26:43'),
(353, 0, 1, '2021-07-22 11:37:43', '2021-07-22 11:37:43'),
(354, 0, 1, '2021-07-22 11:37:57', '2021-07-22 11:37:57'),
(355, 0, 1, '2021-07-22 11:39:05', '2021-07-22 11:39:05'),
(356, 0, 1, '2021-07-22 11:39:30', '2021-07-22 11:39:30'),
(357, 0, 1, '2021-07-22 11:40:35', '2021-07-22 11:40:35'),
(358, 0, 1, '2021-07-22 11:41:13', '2021-07-22 11:41:13'),
(359, 0, 1, '2021-07-22 11:41:21', '2021-07-22 11:41:21'),
(360, 0, 1, '2021-07-22 11:41:46', '2021-07-22 11:41:46'),
(361, 0, 1, '2021-07-22 11:43:39', '2021-07-22 11:43:39'),
(362, 0, 1, '2021-07-22 11:44:06', '2021-07-22 11:44:06'),
(363, 0, 1, '2021-07-22 11:44:58', '2021-07-22 11:44:58'),
(364, 0, 1, '2021-07-22 11:46:05', '2021-07-22 11:46:05'),
(365, 0, 1, '2021-07-22 11:46:32', '2021-07-22 11:46:32'),
(366, 0, 1, '2021-07-22 11:55:41', '2021-07-22 11:55:41'),
(367, 0, 1, '2021-07-22 11:57:32', '2021-07-22 11:57:32'),
(368, 0, 1, '2021-07-22 11:58:44', '2021-07-22 11:58:44'),
(369, 0, 1, '2021-07-22 12:00:29', '2021-07-22 12:00:29'),
(370, 0, 1, '2021-07-22 12:01:20', '2021-07-22 12:01:20'),
(371, 0, 1, '2021-07-22 12:01:49', '2021-07-22 12:01:49'),
(372, 0, 1, '2021-07-22 12:06:04', '2021-07-22 12:06:04'),
(373, 0, 1, '2021-07-22 12:09:21', '2021-07-22 12:09:21'),
(374, 0, 1, '2021-07-22 12:10:02', '2021-07-22 12:10:02'),
(375, 0, 1, '2021-07-22 12:12:57', '2021-07-22 12:12:57'),
(376, 0, 1, '2021-07-22 15:46:21', '2021-07-22 15:46:21'),
(377, 0, 1, '2021-07-22 15:49:11', '2021-07-22 15:49:11'),
(378, 0, 1, '2021-07-22 15:49:36', '2021-07-22 15:49:36'),
(379, 0, 1, '2021-07-22 13:20:40', '2021-07-22 13:20:40'),
(380, 0, 1, '2021-07-22 13:22:21', '2021-07-22 13:22:21'),
(381, 0, 1, '2021-07-22 22:28:32', '2021-07-22 22:28:32'),
(382, 0, 1, '2021-07-23 10:16:19', '2021-07-23 10:16:19'),
(383, 0, 1, '2021-07-23 10:55:41', '2021-07-23 10:55:41'),
(384, 0, 1, '2021-07-23 10:56:19', '2021-07-23 10:56:19'),
(385, 0, 1, '2021-07-23 10:57:55', '2021-07-23 10:57:55'),
(386, 0, 1, '2021-07-23 11:19:25', '2021-07-23 11:19:25'),
(387, 0, 1, '2021-07-23 13:36:37', '2021-07-23 13:36:37'),
(388, 0, 1, '2021-07-23 14:34:00', '2021-07-23 14:34:00'),
(389, 0, 1, '2021-07-23 14:36:17', '2021-07-23 14:36:17'),
(390, 0, 1, '2021-07-23 14:52:49', '2021-07-23 14:52:49'),
(391, 0, 1, '2021-07-23 14:53:12', '2021-07-23 14:53:12'),
(392, 0, 1, '2021-07-23 14:56:38', '2021-07-23 14:56:38'),
(393, 0, 1, '2021-07-23 15:38:14', '2021-07-23 15:38:14'),
(394, 0, 1, '2021-07-23 15:40:05', '2021-07-23 15:40:05'),
(395, 0, 1, '2021-07-23 15:43:53', '2021-07-23 15:43:53'),
(396, 0, 1, '2021-07-23 15:46:03', '2021-07-23 15:46:03'),
(397, 0, 1, '2021-07-23 15:47:09', '2021-07-23 15:47:09'),
(398, 0, 1, '2021-07-23 15:48:01', '2021-07-23 15:48:01'),
(399, 0, 1, '2021-07-23 15:48:39', '2021-07-23 15:48:39'),
(400, 0, 1, '2021-07-23 15:49:37', '2021-07-23 15:49:37'),
(401, 0, 1, '2021-07-23 15:50:35', '2021-07-23 15:50:35'),
(402, 0, 1, '2021-07-23 15:50:51', '2021-07-23 15:50:51'),
(403, 0, 1, '2021-07-23 15:51:37', '2021-07-23 15:51:37'),
(404, 0, 1, '2021-07-23 15:52:30', '2021-07-23 15:52:30'),
(405, 0, 1, '2021-07-23 15:55:42', '2021-07-23 15:55:42'),
(406, 0, 1, '2021-07-23 15:56:49', '2021-07-23 15:56:49'),
(407, 0, 1, '2021-07-23 15:57:35', '2021-07-23 15:57:35'),
(408, 0, 1, '2021-07-23 15:57:55', '2021-07-23 15:57:55'),
(409, 0, 1, '2021-07-23 15:58:36', '2021-07-23 15:58:36'),
(410, 0, 1, '2021-07-23 15:59:45', '2021-07-23 15:59:45'),
(411, 0, 1, '2021-07-23 16:01:40', '2021-07-23 16:01:40'),
(412, 0, 1, '2021-07-23 16:02:59', '2021-07-23 16:02:59'),
(413, 0, 1, '2021-07-23 16:05:22', '2021-07-23 16:05:22'),
(414, 0, 1, '2021-07-23 16:05:51', '2021-07-23 16:05:51'),
(415, 0, 1, '2021-07-23 16:06:35', '2021-07-23 16:06:35'),
(416, 0, 1, '2021-07-23 16:09:30', '2021-07-23 16:09:30'),
(417, 0, 1, '2021-07-23 16:09:50', '2021-07-23 16:09:50'),
(418, 0, 1, '2021-07-23 16:11:19', '2021-07-23 16:11:19'),
(419, 0, 1, '2021-07-23 16:12:01', '2021-07-23 16:12:01'),
(420, 0, 1, '2021-07-23 16:15:28', '2021-07-23 16:15:28'),
(421, 0, 1, '2021-07-23 16:15:48', '2021-07-23 16:15:48'),
(422, 0, 1, '2021-07-23 16:18:13', '2021-07-23 16:18:13'),
(423, 0, 1, '2021-07-23 16:18:38', '2021-07-23 16:18:38'),
(424, 0, 1, '2021-07-23 16:19:08', '2021-07-23 16:19:08'),
(425, 0, 1, '2021-07-23 16:20:25', '2021-07-23 16:20:25'),
(426, 0, 1, '2021-07-23 16:21:50', '2021-07-23 16:21:50'),
(427, 0, 1, '2021-07-23 16:22:17', '2021-07-23 16:22:17'),
(428, 0, 1, '2021-07-23 16:23:11', '2021-07-23 16:23:11'),
(429, 0, 1, '2021-07-23 16:24:54', '2021-07-23 16:24:54'),
(430, 0, 1, '2021-07-23 16:25:40', '2021-07-23 16:25:40'),
(431, 0, 1, '2021-07-23 16:26:18', '2021-07-23 16:26:18'),
(432, 0, 1, '2021-07-23 16:26:37', '2021-07-23 16:26:37'),
(433, 0, 1, '2021-07-23 16:27:31', '2021-07-23 16:27:31'),
(434, 0, 1, '2021-07-23 16:28:00', '2021-07-23 16:28:00'),
(435, 0, 1, '2021-07-23 16:37:29', '2021-07-23 16:37:29'),
(436, 0, 1, '2021-07-23 16:38:15', '2021-07-23 16:38:15'),
(437, 0, 1, '2021-07-23 16:45:26', '2021-07-23 16:45:26'),
(438, 0, 1, '2021-07-23 16:59:39', '2021-07-23 16:59:39'),
(439, 0, 1, '2021-07-23 17:01:09', '2021-07-23 17:01:09'),
(440, 0, 1, '2021-07-23 17:04:14', '2021-07-23 17:04:14'),
(441, 0, 1, '2021-07-23 17:05:09', '2021-07-23 17:05:09'),
(442, 0, 1, '2021-07-23 17:06:21', '2021-07-23 17:06:21'),
(443, 0, 1, '2021-07-23 17:06:54', '2021-07-23 17:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `quote_types`
--

CREATE TABLE `quote_types` (
                               `id` int(255) NOT NULL,
                               `description` varchar(500) NOT NULL,
                               `date_created` datetime NOT NULL DEFAULT current_timestamp(),
                               `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quote_types`
--

INSERT INTO `quote_types` (`id`, `description`, `date_created`, `last_modified`) VALUES
(1, 'Provider Installations', '2021-07-17 15:52:48', '2021-07-17 15:52:10'),
(2, 'Hardware & Software', '2021-07-17 15:52:48', '2021-07-17 15:52:10'),
(3, 'Professional Services', '2021-07-17 15:53:42', '2021-07-17 15:53:52'),
(4, 'Equipment Rental', '2021-07-17 15:53:42', '2021-07-17 15:54:07');

-- --------------------------------------------------------

--
-- Table structure for table `rate_cards`
--

CREATE TABLE `rate_cards` (
                              `id` int(255) NOT NULL,
                              `description` varchar(1000) NOT NULL,
                              `unit_of_measurement` varchar(255) NOT NULL,
                              `quantity` int(255) NOT NULL,
                              `proposed_rate` varchar(255) NOT NULL,
                              `remarks` varchar(1000) NOT NULL,
                              `sub_cat_id` int(255) NOT NULL,
                              `client_id` int(255) NOT NULL DEFAULT 1,
                              `date_created` datetime NOT NULL DEFAULT current_timestamp(),
                              `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rate_cards`
--

INSERT INTO `rate_cards` (`id`, `description`, `unit_of_measurement`, `quantity`, `proposed_rate`, `remarks`, `sub_cat_id`, `client_id`, `date_created`, `last_modified`) VALUES
(1, 'Install One Sector, ODU,IDU ,Network Switch ,Run and terminate related cables', 'Pcs', 1, '15000', '', 1, 1, '2021-07-02 11:46:34', '2021-07-02 11:44:22'),
(2, 'P2P Back-haul installation (Both Sides), Run /terminate related cables', 'Set', 2, '30000', '', 1, 1, '2021-07-02 11:46:34', '2021-07-02 11:44:22'),
(3, 'Power Back up Installation :- (UPS/Inverter plus Batteries and related cables', 'Set', 1, '10000', 'Minimum 4 Batteries', 1, 1, '2021-07-02 11:48:50', '2021-07-02 11:46:39'),
(4, 'Simple Placement Cabinet -Installation and Powering', 'Pcs', 1, '8000', '42U Cabinet', 1, 1, '2021-07-02 11:48:50', '2021-07-02 11:46:39'),
(5, 'Complex placement Cabinet :- Installation and powering', 'Pcs', 1, '25000', 'Concrete or Slab Base', 1, 1, '2021-07-02 11:50:40', '2021-07-02 11:48:54'),
(6, 'Small Wall mount Cabinets :-6U, 9U and 12U installation and Powering', 'Pcs', 1, '5000', '', 1, 1, '2021-07-02 11:50:40', '2021-07-02 11:48:54'),
(7, 'Install 4x90 Degrees or 6x60 Degrees Sectors, Bs Chasis, Network Switch, Run and terminate related cables', 'Set', 1, '30000', '', 2, 1, '2021-07-02 11:54:59', '2021-07-02 11:53:40'),
(8, 'P2P Back-haul installation (Both Sides) Run /terminate related cables ', 'Set', 2, '30000', '', 2, 1, '2021-07-02 11:54:59', '2021-07-02 11:53:40'),
(9, 'Power Back up Installation (UPS/Inverter plus Batteries)and related cables ', 'Set', 1, '10000', 'Minimum 4 Batteries', 2, 1, '2021-07-02 11:56:37', '2021-07-02 11:55:04'),
(10, 'Simple Placement Cabinet :- Installation and Powering', 'Pcs', 1, '8000', '42U Cabinet', 2, 1, '2021-07-02 11:56:37', '2021-07-02 11:55:04'),
(11, 'Complex placement Cabinet :- Installation and powering', 'Pcs', 1, '25000', 'Concrete or Slab base', 2, 1, '2021-07-02 11:59:02', '2021-07-02 11:56:40'),
(12, 'Small Wall mount Cabinets :- 6U, 9U and 12U installation and Powering', 'Pcs', 1, '5000', '', 2, 1, '2021-07-02 11:59:02', '2021-07-02 11:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
                         `staff_id` int(255) NOT NULL,
                         `name` varchar(255) NOT NULL,
                         `email` varchar(255) NOT NULL,
                         `mobile` varchar(255) NOT NULL,
                         `department` varchar(255) NOT NULL,
                         `usergroup` int(255) NOT NULL,
                         `date_added` datetime NOT NULL DEFAULT current_timestamp(),
                         `last_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `name`, `email`, `mobile`, `department`, `usergroup`, `date_added`, `last_modified`) VALUES
(1, 'Mwaura Gitonga', 'mwaura.gitonga@naya.co.ke', '0725 807 288', 'DevOps', 1, '2021-07-02 11:24:17', '2021-07-02 08:24:17');

-- --------------------------------------------------------

--
-- Table structure for table `status_flags`
--

CREATE TABLE `status_flags` (
                                `status_id` int(255) NOT NULL,
                                `name` varchar(1000) NOT NULL,
                                `description` varchar(1000) NOT NULL,
                                `date_created` datetime NOT NULL DEFAULT current_timestamp(),
                                `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_flags`
--

INSERT INTO `status_flags` (`status_id`, `name`, `description`, `date_created`, `last_modified`) VALUES
(1, 'Sent To Customer', 'Quote Prepared & Shared with Client, Awaiting Purchase Order', '2021-07-02 11:27:01', '2021-07-02 11:26:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
                         `user_id` int(255) NOT NULL,
                         `username` varchar(255) NOT NULL,
                         `password` varchar(255) NOT NULL,
                         `usergroup` int(255) NOT NULL,
                         `date_created` datetime NOT NULL DEFAULT current_timestamp(),
                         `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `usergroup`, `date_created`, `last_modified`) VALUES
(1, 'mwaura', '12345', 1, '2021-07-02 11:25:58', '2021-07-02 11:25:43');

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
                               `group_id` int(255) NOT NULL,
                               `name` varchar(255) NOT NULL,
                               `description` varchar(1000) NOT NULL,
                               `date_created` datetime NOT NULL DEFAULT current_timestamp(),
                               `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`group_id`, `name`, `description`, `date_created`, `last_modified`) VALUES
(1, 'Admin', 'Have full application access', '2021-07-02 11:25:14', '2021-07-02 11:25:29');

-- --------------------------------------------------------

--
-- Table structure for table `vat`
--

CREATE TABLE `vat` (
                       `id` int(11) NOT NULL,
                       `description` varchar(255) NOT NULL,
                       `rate` varchar(255) NOT NULL,
                       `date_created` datetime NOT NULL DEFAULT current_timestamp(),
                       `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vat`
--

INSERT INTO `vat` (`id`, `description`, `rate`, `date_created`, `last_modified`) VALUES
(1, 'Zero Rated', '0', '2021-03-25 23:35:25', '0000-00-00 00:00:00'),
(2, 'VAT Exempt', '0', '2021-03-25 23:35:35', '0000-00-00 00:00:00'),
(3, '16% VAT ', '16.00', '2021-03-25 23:35:39', '0000-00-00 00:00:00'),
(4, '14% VAT', '14.00', '2021-03-25 23:35:43', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audit_trail`
--
ALTER TABLE `audit_trail`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
    ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `client_groups`
--
ALTER TABLE `client_groups`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
    ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_categories`
--
ALTER TABLE `job_categories`
    ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `job_subcategories`
--
ALTER TABLE `job_subcategories`
    ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
    ADD PRIMARY KEY (`quote_id`);

--
-- Indexes for table `quote_references`
--
ALTER TABLE `quote_references`
    ADD PRIMARY KEY (`ref_id`);

--
-- Indexes for table `quote_status`
--
ALTER TABLE `quote_status`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote_types`
--
ALTER TABLE `quote_types`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate_cards`
--
ALTER TABLE `rate_cards`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
    ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `status_flags`
--
ALTER TABLE `status_flags`
    ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
    ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
    ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `vat`
--
ALTER TABLE `vat`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audit_trail`
--
ALTER TABLE `audit_trail`
    MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=441;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
    MODIFY `client_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client_groups`
--
ALTER TABLE `client_groups`
    MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
    MODIFY `company_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `job_categories`
--
ALTER TABLE `job_categories`
    MODIFY `category_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `job_subcategories`
--
ALTER TABLE `job_subcategories`
    MODIFY `sub_cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
    MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
    MODIFY `quote_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=444;

--
-- AUTO_INCREMENT for table `quote_references`
--
ALTER TABLE `quote_references`
    MODIFY `ref_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=444;

--
-- AUTO_INCREMENT for table `quote_status`
--
ALTER TABLE `quote_status`
    MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=444;

--
-- AUTO_INCREMENT for table `quote_types`
--
ALTER TABLE `quote_types`
    MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rate_cards`
--
ALTER TABLE `rate_cards`
    MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
    MODIFY `staff_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status_flags`
--
ALTER TABLE `status_flags`
    MODIFY `status_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
    MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
    MODIFY `group_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vat`
--
ALTER TABLE `vat`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
