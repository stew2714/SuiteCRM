-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: mariadb
-- Generation Time: May 04, 2018 at 10:43 AM
-- Server version: 10.2.13-MariaDB-10.2.13+maria~jessie-log
-- PHP Version: 7.1.9

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suitecrm-mmodal`
--

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `date_entered`, `date_modified`, `modified_user_id`, `created_by`, `published`, `name`, `description`, `subject`, `body`, `body_html`, `deleted`, `assigned_user_id`, `text_only`, `type`) VALUES
('15e76853-885d-d2e0-3e5f-5aec39ddd067', '2018-05-04 10:42:36', '2018-05-04 10:42:36', '1', '1', 'off', 'Meeting Cancellation Notification', 'The template to be sent to attendants when a meeting is cancelled', 'Meeting cancelled', '', '<div class=\"mozaik-inner\" style=\"font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:22.4px;color:rgb(68,68,68);padding:0px 30px;margin:0px;\"><h2 style=\"font-family:Arial, Helvetica, sans-serif;font-size:18px;line-height:28.8px;color:#444444;padding:0px;margin:0px;\">Hello,</h2><p style=\"font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:22.4px;color:#444444;padding:0px;margin:0px;\"> </p><p style=\"font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:22.4px;color:#444444;padding:0px;margin:0px;\">The meeting $meeting_name , scheduled for $meeting_date_start has been cancelled.</p><div class=\"mozaik-clear\" style=\"font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:22.4px;color:#444444;padding:0px;margin:0px;height:0px;\"> </div></div>', 0, '1', 0, '');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
