-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2019 at 12:25 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projects_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_clients`
--

CREATE TABLE `portfolio_clients` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_contactus`
--

CREATE TABLE `portfolio_contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(350) NOT NULL,
  `email` varchar(350) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_contactus`
--

INSERT INTO `portfolio_contactus` (`id`, `name`, `email`, `mobile`, `content`, `status`, `created`, `updated`) VALUES
(1, 'Harshavardhan', '8019660099', 8019660099, 'Hello', 1, '2019-12-30 10:14:28', '2019-12-30 10:14:28'),
(2, 'Harshavardhan', '8019660099', 8019660099, 'Hello', 1, '2019-12-30 10:25:22', '2019-12-30 10:25:22'),
(3, 'Harshavardhan', '8019660099', 8019660099, 'Hello', 1, '2019-12-30 10:25:24', '2019-12-30 10:25:24'),
(4, 'Harshavardhan', '8019660099', 8019660099, 'Hello', 1, '2019-12-30 10:25:31', '2019-12-30 10:25:31'),
(5, 'Harshavardhan', '8019660099', 8019660099, 'Hello', 1, '2019-12-30 10:25:33', '2019-12-30 10:25:33'),
(6, 'harsha', '8019660099', 8019660099, 'sf', 1, '2019-12-30 10:27:05', '2019-12-30 10:27:05'),
(7, 'harsha', '8019660099', 8019660099, 'sf', 1, '2019-12-30 10:27:07', '2019-12-30 10:27:07'),
(8, 'harsha', '8019660099', 8019660099, 'sf', 1, '2019-12-30 10:27:07', '2019-12-30 10:27:07'),
(9, 'harsha', '8019660099', 8019660099, 'sf', 1, '2019-12-30 10:27:08', '2019-12-30 10:27:08'),
(10, 'harsha', '8019660099', 8019660099, 'sf', 1, '2019-12-30 10:27:08', '2019-12-30 10:27:08'),
(11, 'harsha', '8019660099', 8019660099, 'sf', 1, '2019-12-30 10:27:08', '2019-12-30 10:27:08'),
(12, 'harsha', '8019660099', 8019660099, 'sf', 1, '2019-12-30 10:28:16', '2019-12-30 10:28:16'),
(13, 'harsha', '8019660099', 8019660099, 'sf', 1, '2019-12-30 10:28:18', '2019-12-30 10:28:18'),
(14, 'harsha', '8019660099', 8019660099, 'sf', 1, '2019-12-30 10:28:21', '2019-12-30 10:28:21'),
(15, 'harsha', '8019660099', 8019660099, 'sf', 1, '2019-12-30 10:28:24', '2019-12-30 10:28:24'),
(16, 'Harshavardhan', '8019660099', 8019660099, 'Hello', 1, '2019-12-30 10:29:48', '2019-12-30 10:29:48'),
(17, 'Harsha', '8019660099', 8019660099, 'Hello', 1, '2019-12-30 10:32:06', '2019-12-30 10:32:06'),
(18, 'Harsha', '8019660099', 8019660099, 'Hello', 1, '2019-12-30 10:32:30', '2019-12-30 10:32:30'),
(19, 'Harsha', '8019660099', 8019660099, 'Hello', 1, '2019-12-30 10:32:32', '2019-12-30 10:32:32'),
(20, 'Harsha', '8019660099', 8019660099, 'Hello', 1, '2019-12-30 10:33:46', '2019-12-30 10:33:46'),
(21, 'Harsha', '8019660099', 8019660099, 'Hello', 1, '2019-12-30 10:33:52', '2019-12-30 10:33:52'),
(22, 'Harsha', '8019660099', 8019660099, 'Hello', 1, '2019-12-30 10:38:01', '2019-12-30 10:38:01'),
(23, 'Harsha', '8019660099', 8019660099, 'Hello', 1, '2019-12-30 10:39:29', '2019-12-30 10:39:29'),
(24, 'Harsha', '8019660099', 8019660099, 'Hello', 1, '2019-12-30 10:39:50', '2019-12-30 10:39:50'),
(25, 'Harshavardhan', '8019660099', 8019660099, 'Hello.. I\'m harsha', 1, '2019-12-30 10:46:06', '2019-12-30 10:46:06'),
(26, 'Harsha', '8796543210', 8796543210, 'Hello..!', 1, '2019-12-30 10:48:42', '2019-12-30 10:48:42'),
(27, 'Ravindra', '8745693210', 8745693210, 'hello.. Hi', 1, '2019-12-30 11:15:10', '2019-12-30 11:15:10'),
(28, 'harsha', '8019660099', 8019660099, 'Hai', 1, '2019-12-30 11:17:37', '2019-12-30 11:17:37'),
(29, 'Hello', '8215698745', 8215698745, 'Hello', 1, '2019-12-30 11:21:27', '2019-12-30 11:21:27');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_education`
--

CREATE TABLE `portfolio_education` (
  `id` int(11) NOT NULL,
  `education` varchar(250) NOT NULL,
  `institute_name` varchar(350) NOT NULL,
  `university` varchar(350) DEFAULT NULL,
  `percent_age` varchar(15) DEFAULT NULL,
  `pass_out` varchar(50) NOT NULL,
  `location` varchar(150) DEFAULT NULL,
  `content` varchar(350) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_education`
--

INSERT INTO `portfolio_education` (`id`, `education`, `institute_name`, `university`, `percent_age`, `pass_out`, `location`, `content`, `status`, `created`, `updated`) VALUES
(1, '10th Class', 'Oxford English Medium High School', 'SSC Board', '65', '2010-11', 'Dachepalli', 'Hello', 1, '2019-12-17 13:59:39', '2019-12-18 11:32:32'),
(2, 'Polytechnic - CSE', 'Newtons Institute Of Engineering & Technology', 'SBTET Board', '68', '2011-14', 'Macheralla', NULL, 1, '2019-12-17 14:02:19', '2019-12-17 14:02:19'),
(3, 'Degree - Bsc Computers', 'Acharya Nagarjuna University', 'ANU', '68', '2014-17', 'Guntur', NULL, 1, '2019-12-17 14:05:00', '2019-12-17 14:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_experiences`
--

CREATE TABLE `portfolio_experiences` (
  `id` int(11) NOT NULL,
  `company_name` varchar(350) NOT NULL,
  `degination` varchar(250) DEFAULT NULL,
  `experience` varchar(15) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `join_date` varchar(25) DEFAULT NULL,
  `end_date` varchar(25) DEFAULT NULL,
  `location` varchar(250) DEFAULT NULL,
  `content` varchar(350) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_experiences`
--

INSERT INTO `portfolio_experiences` (`id`, `company_name`, `degination`, `experience`, `salary`, `join_date`, `end_date`, `location`, `content`, `status`, `created`, `updated`) VALUES
(1, 'Spearhead Wealth & Risk Advisory Pvt. Ltd', 'Software Developer', '2.6', 320000, '2017-07-03', '2019-12-29', 'Hyderabad', 'I have participated in developing applications. I have learned new skills that help to develop an application on my own. I\'m a good team player and a self-learner.', 1, '2019-12-29 14:13:07', '2019-12-29 14:13:07'),
(2, 'Freelancer', 'Web Develoepr', '2.6', 25000, '2018-02-26', '2019-12-29', 'Hyderabad', 'I have participated in developing applications. I have learned new skills that help to develop an application on my own. I\'m a good team player and a self-learner.', 1, '2019-12-29 14:14:52', '2019-12-29 14:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_failed_jobs`
--

CREATE TABLE `portfolio_failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_formdata`
--

CREATE TABLE `portfolio_formdata` (
  `id` int(11) NOT NULL,
  `name` varchar(350) NOT NULL DEFAULT 'NULL',
  `short_name` varchar(25) NOT NULL DEFAULT 'NULL',
  `type` varchar(25) NOT NULL DEFAULT 'NULL',
  `content` varchar(350) NOT NULL DEFAULT 'NULL',
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_formdata`
--

INSERT INTO `portfolio_formdata` (`id`, `name`, `short_name`, `type`, `content`, `status`, `created`, `updated`) VALUES
(1, 'UI Development', 'ui', 'portfolio', 'NULL', 1, '2019-12-17 11:39:32', '2019-12-17 11:39:32'),
(2, 'Application Development', 'app', 'portfolio', 'NULL', 1, '2019-12-17 11:39:32', '2019-12-17 11:39:32'),
(3, 'Photoshop', 'ps', 'portfolio', 'NULL', 1, '2019-12-17 11:49:04', '2019-12-17 11:49:04');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_password_resets`
--

CREATE TABLE `portfolio_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_projects`
--

CREATE TABLE `portfolio_projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(350) NOT NULL,
  `project_duration` varchar(25) DEFAULT NULL,
  `project_type` varchar(11) NOT NULL,
  `project_skills` text NOT NULL,
  `project_cover_img` text NOT NULL,
  `project_link` varchar(350) NOT NULL,
  `start_date` varchar(15) NOT NULL DEFAULT 'NULL',
  `end_date` varchar(15) NOT NULL DEFAULT 'NULL',
  `project_mode` varchar(25) NOT NULL DEFAULT 'NULL',
  `company_id` varchar(5) DEFAULT NULL,
  `client_name` varchar(350) DEFAULT NULL,
  `project_content` longtext DEFAULT NULL,
  `mini_content` text DEFAULT NULL,
  `github` varchar(350) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_projects`
--

INSERT INTO `portfolio_projects` (`id`, `project_name`, `project_duration`, `project_type`, `project_skills`, `project_cover_img`, `project_link`, `start_date`, `end_date`, `project_mode`, `company_id`, `client_name`, `project_content`, `mini_content`, `github`, `status`, `created`, `updated`) VALUES
(1, 'Anuehub', '1.5-Y', 'app', 'a:7:{i:0;s:1:\"9\";i:1;s:1:\"6\";i:2;s:1:\"5\";i:3;s:1:\"4\";i:4;s:1:\"3\";i:5;s:1:\"2\";i:6;s:1:\"1\";}', 'public/uploads/projects/1577631736RD117.png', 'http://school.anuehub.com', '2017-07-10', '2019-12-29', 'company', '1', 'Spearhead', '<p>It is an application for educational institution Management. Basically, it is developed for Single &amp; Multi-branch institutions. It allows a teacher/trainer and Student/trainer, total management can communicate in a single platform anywhere and anytime, and here is no need of live(physical) appearance. It improves digitalization in educational institutions. It tracks and maintains records each and every person in an educational institution for an academic year and more if it continues</p>', 'It is an application for educational institution Management. Basically, it is developed for Single & Multi-branch institutions. It allows a teacher/trainer and Student/trainer, total management can communicate in a single platform anywhere and anytime, and here is no need to live(physical) appearance. It improves digitalization in educational institutions. It tracks and maintains records each and every person in an educational institution for an academic year and more if it continues', 'https://github.com/yhvreddy/schools.anuehub.com', 1, '2019-12-29 15:02:16', '2019-12-30 05:31:00'),
(2, 'Beemaseva', '10-M', 'app', 'a:8:{i:0;s:2:\"11\";i:1;s:2:\"10\";i:2;s:1:\"8\";i:3;s:1:\"7\";i:4;s:1:\"6\";i:5;s:1:\"4\";i:6;s:1:\"3\";i:7;s:1:\"2\";}', 'public/uploads/projects/1577632016RD703.png', 'http://beemaseva.com', '2019-08-03', '2019-12-29', 'company', '1', 'Spearhead', '<p>It is an insurance application for selling retail insurance products and also provides service through an integrated CRM. It was developed with some essential features only, and is now being re-developed with additional features and with new technologies.<br></p>', 'It is an insurance application for selling retail insurance products and also provides service through an integrated CRM. It was developed with some essential features only, and is now being re-developed with additional features and with new technologies.', 'https://github.com/yhvreddy/beemaseva.com', 1, '2019-12-29 15:06:56', '2019-12-30 05:31:04'),
(3, 'JM.Puram (village Site)', '1-M', 'ui', 'a:5:{i:0;s:1:\"9\";i:1;s:1:\"8\";i:2;s:1:\"5\";i:3;s:1:\"2\";i:4;s:1:\"1\";}', 'public/uploads/projects/1577687666RD540.png', 'http://jmpuram.com', '2019-01-01', '2019-01-30', 'freelancer', '2', 'JM.Puram - Chandrasekhar', '<p>Jm.puram is village located at Gurazala, Andhrapradesh, It as get Smart village by ICICI bank.&nbsp;<br></p>', 'Jm.puram is village located at Gurazala, Andhrapradesh, It as get Smart village by ICICI bank.', 'https://github.com/yhvreddy/jmpuram.com', 1, '2019-12-30 06:34:26', '2019-12-30 06:34:26'),
(4, 'AP-Specials', '1.5M', 'app', 'a:5:{i:0;s:1:\"9\";i:1;s:1:\"6\";i:2;s:1:\"5\";i:3;s:1:\"2\";i:4;s:1:\"1\";}', 'public/uploads/projects/1577688075RD183.png', 'http://apspecials.com/', '2018-11-26', '2018-12-31', 'freelancer', '2', 'SS Lotus Global Soft Solutions', '<p>APSpecials means All People Heart, it is used for all needs for all ages. Every human life become a sudden age will come to some needs are there, that time to more then helpful for ApSpecials Site. This Site will place the needs in across world wide and you can search for any need this site is always avaliable. We are composed of creative designers and experienced developers. This Site will helpful for All People\'s.<br></p>', 'APSpecials means All People Heart, it is used for all needs for all ages. Every human life become a sudden age will come to some needs are there, that time to more then helpful for ApSpecials Site. This Site will place the needs in across world wide and you can search for any need this site is always avaliable. We are composed of creative designers and experienced developers. This Site will helpful for All People\'s.', 'https://github.com/yhvreddy/', 1, '2019-12-30 06:41:15', '2019-12-30 06:41:15'),
(5, 'way2learn4jobs', '2-M', 'app', 'a:5:{i:0;s:2:\"10\";i:1;s:1:\"7\";i:2;s:1:\"5\";i:3;s:1:\"2\";i:4;s:1:\"1\";}', 'public/uploads/projects/1577689108RD57.png', 'http://www.way2learn4jobs.com/', '2019-10-01', '2019-12-30', 'freelancer', '2', 'way2learn4jobs', '<p>way2learn4jobs<br></p>', 'way2learn4jobs', 'https://github.com/yhvreddy/', 1, '2019-12-30 06:58:28', '2019-12-30 06:58:28'),
(6, 'Bookstore', '1.8-M', 'app', 'a:6:{i:0;s:1:\"9\";i:1;s:1:\"7\";i:2;s:1:\"6\";i:3;s:1:\"4\";i:4;s:1:\"3\";i:5;s:1:\"1\";}', 'public/uploads/projects/1577691301RD500.png', 'http://demos.anuehub.com/bookstore/', '2019-02-12', '2019-03-27', 'freelancer', '2', 'Bookstore', '<p>Online Books Store. free books can read only in online and paid books cant access to read.<br></p>', 'Online Books Store', 'https://github.com/yhvreddy/', 1, '2019-12-30 07:35:01', '2019-12-30 07:35:01');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_self_introduction`
--

CREATE TABLE `portfolio_self_introduction` (
  `id` int(11) NOT NULL,
  `first_name` varchar(350) DEFAULT NULL,
  `last_name` varchar(350) DEFAULT NULL,
  `middel_name` varchar(350) DEFAULT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(350) NOT NULL,
  `resume` varchar(350) NOT NULL,
  `profession` text NOT NULL,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `location` varchar(350) DEFAULT NULL,
  `logo` varchar(350) DEFAULT NULL,
  `banner_img` varchar(350) DEFAULT NULL,
  `about_img` varchar(350) DEFAULT NULL,
  `other_img` varchar(350) DEFAULT NULL,
  `facebook` varchar(350) DEFAULT NULL,
  `linkedin` varchar(350) DEFAULT NULL,
  `twitter` varchar(350) DEFAULT NULL,
  `github` varchar(350) DEFAULT NULL,
  `instagram` varchar(350) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_self_introduction`
--

INSERT INTO `portfolio_self_introduction` (`id`, `first_name`, `last_name`, `middel_name`, `mobile`, `email`, `resume`, `profession`, `short_description`, `description`, `location`, `logo`, `banner_img`, `about_img`, `other_img`, `facebook`, `linkedin`, `twitter`, `github`, `instagram`, `status`, `created`, `updated`) VALUES
(1, 'Harshavardhan', 'Yenumula', 'Reddy', 9492411708, 'yhvreddyjobs@gmail.com', 'public/uploads/resume/1577631142RD466.pdf', 'UI Developer & Web Developer', '<p>Hi... I\'m working as a web developer for two years of experience in this filed.&nbsp; I have good knowledge of skills on HTML, CSS, PHP, MySql, Javascript, jQuery, Photoshop, and frameworks link Codeigniter, Laravel to develop both static and dynamic web applications as faster and deploy into the server. I\'m interested to know new technologies and self learn to improve my skills.&nbsp;</p>', '<p>Hi... I\'ve graduated Bsc Computers and I\'m working as a web developer for two years of experience in this filed.&nbsp; I have good knowledge of skills on HTML, CSS, PHP, MySql, Javascript, Ajax, jQuery, Photoshop, and frameworks link Codeigniter, Laravel and integrating the SMS and Payment gateways to e-commerce applications and also develop both static and dynamic web applications as faster and deploy into the server. We can make Restful APIs for communicating mobile applications to database servers.</p><p>I\'m interested to learn new technologies to develop my skills | Good Team player and also have the ability to work independently | Easily mingle with any environment and hardworking nature.</p>', 'Hyderabad', 'public/uploads/sitedetails/1576676264RD866.png', '', '', '', 'http://facebook.com/yhvreddy', 'http://linkedin.com', 'http://twitter.com/vardhan7794', 'http://github.com/yhvreddy', 'http://instagram.com', 1, '2019-12-18 02:27:18', '2019-12-30 07:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_services`
--

CREATE TABLE `portfolio_services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(350) DEFAULT NULL,
  `service_image` varchar(350) NOT NULL,
  `service_icon` varchar(50) DEFAULT NULL,
  `service_content` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_services`
--

INSERT INTO `portfolio_services` (`id`, `service_name`, `service_image`, `service_icon`, `service_content`, `status`, `created`, `updated`) VALUES
(1, 'Web Application', '', 'fa fa-desktop', 'I\'m using PHP and it\'s frameworks as backend and MySql as Database for web applications and also integrating SMS & Payment gateways.', 1, '2019-12-29 13:17:31', '2019-12-30 05:07:17'),
(2, 'Web Desgning', '', 'fa fa-html5', 'I convert PSD into the browser understandable format. I develop both static and dynamic websites.', 1, '2019-12-29 13:23:04', '2019-12-29 13:28:32'),
(3, 'Site Maintenance', '', 'fa fa-server', 'Website maintenance includes revising, editing, and changing existing websites to keep updated.', 1, '2019-12-29 13:46:20', '2019-12-29 13:52:14'),
(4, 'SEO', '', 'fa fa-globe', 'We can make SEO services to the website always shows up in the right place at the right time.', 0, '2019-12-29 14:04:31', '2019-12-30 05:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_skills`
--

CREATE TABLE `portfolio_skills` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `experience` varchar(10) NOT NULL,
  `rating` double DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_skills`
--

INSERT INTO `portfolio_skills` (`id`, `name`, `experience`, `rating`, `status`, `created`, `updated`) VALUES
(1, 'HTML', '2.5-Y', 4, 1, '2019-12-17 02:38:56', '2019-12-17 02:39:33'),
(2, 'CSS', '2-Y', 3.5, 1, '2019-12-17 02:43:43', '2019-12-17 02:43:43'),
(3, 'PHP', '1.8-Y', 4, 1, '2019-12-17 02:45:41', '2019-12-17 02:45:41'),
(4, 'MySQL', '1-Y', 3, 1, '2019-12-17 02:46:06', '2019-12-17 02:46:06'),
(5, 'Javascript', '1-Y', 3, 1, '2019-12-17 02:46:37', '2019-12-17 02:46:37'),
(6, 'jQuery', '1.5-Y', 3.5, 1, '2019-12-17 02:46:59', '2019-12-17 02:47:16'),
(7, 'Ajax', '1-Y', 3, 1, '2019-12-17 02:47:42', '2019-12-17 02:47:42'),
(8, 'Bootstrap', '1.5-Y', 4, 1, '2019-12-17 02:48:14', '2019-12-17 02:48:26'),
(9, 'Codeigniter', '1.5-Y', 3.8, 1, '2019-12-17 02:49:14', '2019-12-17 02:49:14'),
(10, 'Laravel', '5-M', 2.5, 1, '2019-12-17 02:49:46', '2019-12-17 02:49:46'),
(11, 'Restful API\'s', '8-M', 3.5, 1, '2019-12-17 02:50:55', '2019-12-18 03:34:42');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_testimonials`
--

CREATE TABLE `portfolio_testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(350) NOT NULL,
  `profession` varchar(350) NOT NULL,
  `comment` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_testimonials`
--

INSERT INTO `portfolio_testimonials` (`id`, `name`, `profession`, `comment`, `status`, `created`, `updated`) VALUES
(1, 'Jm.Puram', 'Teacher @Govt HighSchool', 'Thank you for fast and in time product delivery and giving support and services..!', 1, '2019-12-30 08:52:05', '2019-12-30 08:55:36'),
(2, 'Way2learn4jobs', 'Business-Team', '“You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change and click save.\r\n\r\nThanks, guys!”', 1, '2019-12-30 09:06:36', '2019-12-30 09:06:36'),
(3, 'SS LOTUS GLOBAL SOFT SOLUTIONS', 'Software Company @Guntur', 'Thank you for working with us and I\'m impressed for your working skills and Hardworking to done the project.', 1, '2019-12-30 09:22:28', '2019-12-30 09:22:28');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_users`
--

CREATE TABLE `portfolio_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_users`
--

INSERT INTO `portfolio_users` (`id`, `name`, `email`, `mobile`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Harshavardhan Reddy', 'yhvreddyinfo@gmail.com', NULL, NULL, '$2y$10$1bsr6zStV53mWMedi9gYuu3msizRTMUT6y1rrsUBM4xwM204aCnLG', NULL, '2019-12-08 10:43:33', '2019-12-08 10:43:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_clients`
--
ALTER TABLE `portfolio_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_contactus`
--
ALTER TABLE `portfolio_contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_education`
--
ALTER TABLE `portfolio_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_experiences`
--
ALTER TABLE `portfolio_experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_failed_jobs`
--
ALTER TABLE `portfolio_failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_formdata`
--
ALTER TABLE `portfolio_formdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_password_resets`
--
ALTER TABLE `portfolio_password_resets`
  ADD KEY `portfolio_password_resets_email_index` (`email`);

--
-- Indexes for table `portfolio_projects`
--
ALTER TABLE `portfolio_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_self_introduction`
--
ALTER TABLE `portfolio_self_introduction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_services`
--
ALTER TABLE `portfolio_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_skills`
--
ALTER TABLE `portfolio_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_testimonials`
--
ALTER TABLE `portfolio_testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_users`
--
ALTER TABLE `portfolio_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `portfolio_users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolio_clients`
--
ALTER TABLE `portfolio_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolio_contactus`
--
ALTER TABLE `portfolio_contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `portfolio_education`
--
ALTER TABLE `portfolio_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolio_experiences`
--
ALTER TABLE `portfolio_experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `portfolio_failed_jobs`
--
ALTER TABLE `portfolio_failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolio_formdata`
--
ALTER TABLE `portfolio_formdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolio_projects`
--
ALTER TABLE `portfolio_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `portfolio_self_introduction`
--
ALTER TABLE `portfolio_self_introduction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio_services`
--
ALTER TABLE `portfolio_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portfolio_skills`
--
ALTER TABLE `portfolio_skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `portfolio_testimonials`
--
ALTER TABLE `portfolio_testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolio_users`
--
ALTER TABLE `portfolio_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
