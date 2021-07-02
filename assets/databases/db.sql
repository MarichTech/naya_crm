-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 09:40 PM
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
                               `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
                           `client_i` int(255) NOT NULL,
                           `name` varchar(1000) NOT NULL,
                           `email` varchar(255) NOT NULL,
                           `mobile` varchar(255) NOT NULL,
                           `rep_name` varchar(255) NOT NULL,
                           `rep_email` varchar(255) NOT NULL,
                           `rep_mobile` varchar(255) NOT NULL,
                           `address` varchar(1000) NOT NULL,
                           `logo` varchar(2000) NOT NULL,
                           `date_added` datetime NOT NULL DEFAULT current_timestamp(),
                           `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `job_subcategories`
--

CREATE TABLE `job_subcategories` (
                                     `sub_cat_id` int(255) NOT NULL,
                                     `name` varchar(1000) NOT NULL,
                                     `description` varchar(1000) NOT NULL,
                                     `category_id` int(255) NOT NULL,
                                     `date_created` datetime NOT NULL DEFAULT current_timestamp(),
                                     `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
                          `quote_id` int(255) NOT NULL,
                          `quote_ref` varchar(255) NOT NULL,
                          `job_no` varchar(255) NOT NULL,
                          `title` varchar(1000) NOT NULL,
                          `job_category` int(255) NOT NULL,
                          `job_sub_category` int(255) NOT NULL,
                          `rate_card_id` int(255) NOT NULL,
                          `additional_materials` int(255) NOT NULL,
                          `notes` varchar(1000) NOT NULL,
                          `assumptions` varchar(1000) NOT NULL,
                          `payment_terms` varchar(1000) NOT NULL,
                          `amount` varchar(255) NOT NULL,
                          `client_id` int(255) NOT NULL,
                          `user_id` int(255) NOT NULL,
                          `date_created` datetime NOT NULL DEFAULT current_timestamp(),
                          `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quote_status`
--

CREATE TABLE `quote_status` (
                                `id` int(255) NOT NULL,
                                `quote_id` int(255) NOT NULL,
                                `status_id` int(255) NOT NULL,
                                `date_created` datetime NOT NULL DEFAULT current_timestamp(),
                                `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
                              `date_created` datetime NOT NULL DEFAULT current_timestamp(),
                              `last_modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
    ADD PRIMARY KEY (client_id);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
    ADD PRIMARY KEY (`company_id`);

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
-- Indexes for table `quote_status`
--
ALTER TABLE `quote_status`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audit_trail`
--
ALTER TABLE `audit_trail`
    MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
    MODIFY client_id int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
    MODIFY `company_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_categories`
--
ALTER TABLE `job_categories`
    MODIFY `category_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_subcategories`
--
ALTER TABLE `job_subcategories`
    MODIFY `sub_cat_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
    MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
    MODIFY `quote_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quote_status`
--
ALTER TABLE `quote_status`
    MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rate_cards`
--
ALTER TABLE `rate_cards`
    MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
    MODIFY `staff_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_flags`
--
ALTER TABLE `status_flags`
    MODIFY `status_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
    MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
    MODIFY `group_id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
