-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 12:59 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bridginglogpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin@admin.com', '$2y$10$ZC45mO.uFNxB.2vNtCXQ4ujJ0n/V8l00IQu361Mh9ljOaPqr.lKDe', '2021-06-22 05:10:05', '2021-06-22 05:10:05');

-- --------------------------------------------------------

--
-- Table structure for table `airlines`
--

CREATE TABLE `airlines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `awb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `airlines`
--

INSERT INTO `airlines` (`id`, `name`, `iata`, `icao`, `awb`, `country`, `status`, `created_at`, `updated_at`) VALUES
(1, '1Time', '1T', 'RNX', NULL, 'South Africa', '1', '2021-06-24 04:07:40', '2021-06-24 04:07:40');

-- --------------------------------------------------------

--
-- Table structure for table `airports`
--

CREATE TABLE `airports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `airports`
--

INSERT INTO `airports` (`id`, `name`, `iata`, `icao`, `country`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Aalborg Airport AMBA', 'AAL', 'EKYT', 'Denmark', '1', '2021-06-24 04:58:08', '2021-06-24 05:05:59'),
(2, 'Aarhus Airport', 'AAR', 'EKAH', 'Denmark', '1', '2021-06-24 04:59:07', '2021-06-24 04:59:07');

-- --------------------------------------------------------

--
-- Table structure for table `certificate-company`
--

CREATE TABLE `certificate-company` (
  `company_id` int(11) NOT NULL,
  `certificate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certificate-company`
--

INSERT INTO `certificate-company` (`company_id`, `certificate_id`) VALUES
(2, 1),
(2, 2),
(4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `name`, `image`, `detail`, `status`, `created_at`, `updated_at`) VALUES
(1, 'IATA', '60d4405a37458.png', 'test', 1, '2021-06-24 03:20:42', '2021-06-28 04:53:29'),
(2, 'Chamber of Commerce', '60d442abba92d.png', 'test', 1, '2021-06-24 03:30:35', '2021-06-30 07:40:01');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `country_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Islamabad', '1', '1', '2021-06-24 02:54:05', '2021-06-28 04:50:27'),
(2, 'Lahore', '1', '1', '2021-06-24 02:55:09', '2021-06-24 02:55:09'),
(3, 'Karachi', '1', '1', '2021-06-24 02:55:19', '2021-06-24 02:55:19'),
(4, 'Karachi', '1', '1', '2021-06-24 02:55:19', '2021-06-24 02:55:19'),
(5, 'Mumbai', '2', '1', '2021-06-24 02:55:31', '2021-06-24 02:55:31'),
(6, 'Mumbai', '2', '1', '2021-06-24 02:55:31', '2021-06-24 02:55:31'),
(7, 'Peshawar', '1', '1', '2021-06-28 03:35:55', '2021-06-28 03:35:55'),
(8, 'Faisalabad', '1', '1', '2021-06-28 03:36:35', '2021-06-28 03:36:35'),
(9, 'Multan', '1', '1', '2021-06-28 04:52:12', '2021-06-28 04:52:23');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_employees` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_branches` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `establish_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working_hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `more_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `member_id`, `name`, `address`, `country_id`, `city_id`, `zip_code`, `email`, `phone`, `mobile`, `website`, `no_of_employees`, `no_of_branches`, `establish_year`, `working_hours`, `profile`, `logo`, `more_info`, `status`, `created_at`, `updated_at`) VALUES
(1, '2', 'techno', 'test', '2', '5', '5', 'amirtariq3@gmail.com', '03045569873', NULL, NULL, '1-50', NULL, NULL, '12', 'test1', '60dc3269027bc.png', NULL, '1', '2021-06-30 03:59:21', '2021-07-02 02:23:35'),
(2, '1', 'Aries Global Logistics JSC', '196/1/29 Cong Hoa Rd., Ward 12, Tan Binh Dist.', '1', '1', '1', 'rfq@ariesglobal.vn', '+842862662999', NULL, 'www.ariesglobal.vn', '1-50', NULL, '2018', '08:00 - 18:00', 'test2', '60dda62c32495.jpg', NULL, '1', '2021-06-30 05:15:38', '2021-07-01 06:25:32'),
(3, '1', 'HKT Mobile', 'Main Hall Road Lahore', '1', '2', NULL, 'hktmobile@gmail.com', '03045569873', NULL, NULL, '100-200', NULL, NULL, '12', 'HKT Mobile Phone Accessories Company', '60dedad7d8232.png', NULL, '1', '2021-07-02 04:22:31', '2021-07-02 04:22:31'),
(4, '5', 'HKT Designs', 'HKT, Main Hall Road, Lahore', '1', '2', '2', 'hkmobile@gmail.com', '03036864075', NULL, NULL, '1-50', NULL, NULL, '08:00 - 18:00', 'Mobile Accessories Companys', '60e826f4682a9.jpg', NULL, '1', '2021-07-02 04:32:27', '2021-07-09 05:37:40'),
(6, '4', 'SL Shipping And Logistics Pvt.Ltd', 'ROOM NO-301, 3RD FLOOR, AGGARWAL SQUARE,\r\nPLOT-10 POCKET- 4, DWARKA,\r\nNEW DELHI -110075. INDIA', '2', '5', NULL, 'aminahmad09@gmail.com', '011-455 961 88 / 456 816 77', '+91-11-9717687697.', 'www.sllogistics.in', '1-50', NULL, NULL, '00:09 to 18:00', 'SL Shipping And Logistics Pvt.Ltd. is a specialist in the services of Freight Forwarding, Warehousing and Project Cargo Handling. We can provide all logistics support to the most demanding sectors of the industries. SL Shipping And Logistics Pvt.Ltd. is a service oriented company and we work closely with our clients so that we can focus on the customer’s requirement, their objectives and expectations in order to provide optimum value and support. We are committed to surpass all highest level of expectations and strive for success on a daily basis.\r\n\r\nWe have a dynamic team which is capable of handling the most challenging environment as well as monitor and manage the operations from end to end. We aim to be recognized as one of the best in the services of Freight forwarding and logistics companies in India and worldwide by our customers, competitors and supply chain.\r\n\r\nWe aim to provide utmost satisfaction by providing our customers with high quality and cost effective services through constant update of information to accomplish a long term successful business relation.', '60deed19323f1.png', NULL, '1', '2021-07-02 05:40:25', '2021-07-02 05:40:25'),
(7, '3', 'ADC LINE JAPAN CORPORATION', 'BAYSIDE KANNAI BLDG 6F, 3-8-1 , OUGI-CHO, NAKA-KU, \r\nYOKOHAMA-SHI , JAPAN, POST CODE: 231-0027', '1', '3', '231-0027', 'kumara@adcline.com', '+81-(0)45-228-8303', '+81-(0)80-4611-4370', 'www.adcline.com', '100-200', NULL, '2006', '00:09 to 18:00', 'Established in December 2006, ADC Line Japan Corporation specializes in packing & shipping of motor vehicles in containers for used & new vehicles from Japan to any part of the world. ADC Line Japan currently have office in Yokohama plus have own packing & shipping establishments in Chiba through Yokohama port & in Nagoya..', '60e028125951a.png', NULL, '1', '2021-07-03 04:04:18', '2021-07-03 04:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `company_branches`
--

CREATE TABLE `company_branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_branches`
--

INSERT INTO `company_branches` (`id`, `company_id`, `branch`, `address`, `country_id`, `city_id`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, '4', 'Aries Global Logistics JSC - Ha Noi Bran', '23 Tran Kim Xuyen Rd., Yen Hoa Ward, Cau Giay Dist.', '1', '1', '+842462662999', 'rfq@ariesglobal.vn', '2021-07-01 03:25:27', '2021-07-05 07:04:22'),
(2, '4', 'JMH Logistics Ltd.', '1125/A, B Nag Lane, Rahaman Height,Gosaildanga, Agrabad C/A,Chittagong-4100', '1', '1', '+8801929912854', 'cgp@jmhlogisticsgroup.com', '2021-07-09 06:35:17', '2021-07-09 06:35:17');

-- --------------------------------------------------------

--
-- Table structure for table `company_certificates`
--

CREATE TABLE `company_certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_certificates`
--

INSERT INTO `company_certificates` (`id`, `company_id`, `certificate_id`, `created_at`, `updated_at`) VALUES
(1, '2', '2', '2021-06-30 07:44:10', '2021-07-01 05:27:30');

-- --------------------------------------------------------

--
-- Table structure for table `company_directors`
--

CREATE TABLE `company_directors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_directors`
--

INSERT INTO `company_directors` (`id`, `company_id`, `name`, `email`, `phone`, `designation`, `image`, `detail`, `created_at`, `updated_at`) VALUES
(1, '2', 'Philibert Challan Belvals', 'philibert@asia-relocation.com', '9175725210', 'CEO', '60dc4f6d00abd.jpg', NULL, '2021-06-30 06:03:09', '2021-07-05 05:54:41'),
(2, '4', 'Dhivessh K Padayachee', 'dhivessh@ariesglobal.co.za', '27828720858', 'Director', '60e19247d9d66.jpg', NULL, '2021-07-04 05:49:43', '2021-07-04 05:49:43'),
(5, '4', 'Bruce Chung', 'ops@triumphgates.com', '84903724716', 'CEO', '60e82b04020c3.jpg', NULL, '2021-07-09 05:55:00', '2021-07-09 05:55:00'),
(6, '7', 'Bruce Chung', 'ops@triumphgates.com', '84903724716', 'CEO', '60ec13d4679d0.jpg', NULL, '2021-07-12 05:05:08', '2021-07-12 05:05:08');

-- --------------------------------------------------------

--
-- Table structure for table `company_documents`
--

CREATE TABLE `company_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_documents`
--

INSERT INTO `company_documents` (`id`, `company_id`, `image`, `document`, `detail`, `created_at`, `updated_at`) VALUES
(1, '2', '60dd874d6ba4b.jpg', '60dd874d6be0b.pdf', 'test123', '2021-07-01 04:13:49', '2021-07-05 05:55:45');

-- --------------------------------------------------------

--
-- Table structure for table `company_representatives`
--

CREATE TABLE `company_representatives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsupp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `representative_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_representatives`
--

INSERT INTO `company_representatives` (`id`, `company_id`, `name`, `email`, `phone`, `whatsupp`, `representative_id`, `created_at`, `updated_at`) VALUES
(1, '4', 'Kate Nguyen', 'cus03.hcm@ariesglobal.vn', '+842862662999', NULL, '1', '2021-06-30 06:44:43', '2021-06-30 06:44:43'),
(2, '4', 'Joyce Min', 'joyce@ltfcargo.com', '+82 2 722 5253', NULL, '1', '2021-07-04 06:36:41', '2021-07-04 06:36:41'),
(4, '4', 'Steven', 'steven@qdzhongqi.cn', '03045569873', NULL, '2', '2021-07-09 06:14:26', '2021-07-09 06:14:26'),
(5, '7', 'Kate Nguyen', 'cus03.hcm@ariesglobal.vn', '+8801929912854', NULL, '1', '2021-07-12 05:06:02', '2021-07-12 05:06:02');

-- --------------------------------------------------------

--
-- Table structure for table `company_service`
--

CREATE TABLE `company_service` (
  `company_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_service`
--

INSERT INTO `company_service` (`company_id`, `service_id`) VALUES
(1, 6),
(1, 5),
(1, 4),
(2, 5),
(2, 6),
(2, 4),
(2, 3),
(4, 3),
(4, 4),
(4, 5),
(4, 6),
(4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `company_services`
--

CREATE TABLE `company_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_services`
--

INSERT INTO `company_services` (`id`, `company_id`, `service_id`, `created_at`, `updated_at`) VALUES
(1, '2', '5', '2021-06-30 05:37:35', '2021-07-01 06:01:31'),
(3, '2', '4', '2021-07-03 04:45:08', '2021-07-03 04:45:08');

-- --------------------------------------------------------

--
-- Table structure for table `continents`
--

CREATE TABLE `continents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `continents`
--

INSERT INTO `continents` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'AFRICA', '1', '2021-06-24 02:05:59', '2021-06-24 02:21:46'),
(2, 'ASIA', '1', '2021-06-24 02:07:00', '2021-06-24 02:07:00'),
(3, 'NORTH AMERICA', '1', '2021-06-24 02:07:26', '2021-06-24 02:07:26'),
(4, 'SOUTH AMERICA', '1', '2021-06-24 02:07:36', '2021-06-24 02:07:36'),
(5, 'EUROPE', '1', '2021-06-24 02:07:49', '2021-06-24 02:07:49'),
(6, 'AUSTRALIA', '1', '2021-06-24 02:08:08', '2021-06-24 02:08:08'),
(7, 'AUSTRALIA', '1', '2021-06-24 02:08:08', '2021-06-24 02:08:08'),
(8, 'ANTARCTICA', '1', '2021-06-24 02:08:36', '2021-06-24 02:08:36');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `continent_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `code`, `continent_id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pakistan', '5400', 2, '60d32ae0d3df6.png', '1', '2021-06-23 07:08:24', '2021-06-28 05:30:54'),
(2, 'India', '12345', 2, '60d32a5f53a1f.png', '1', '2021-06-23 07:09:25', '2021-06-23 07:41:29'),
(3, 'Ethiopia', 'ET', 1, '60d43649456cd.png', '1', '2021-06-24 02:37:45', '2021-06-24 02:37:45'),
(4, 'Kenya', 'KE', 1, '60d9a52507377.png', '1', '2021-06-28 05:32:05', '2021-06-28 05:32:05');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsupp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gtalk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `membership_type_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `gender`, `company`, `designation`, `phone`, `mobile`, `email`, `image`, `password`, `skype`, `whatsupp`, `viber`, `gtalk`, `line`, `other`, `membership_type_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tempomos Gut', 'mail', 'google', 'worker', '83432424916', 'worker', 'tempоо9999@gmail.com', '60dedccbd1a80.jpg', '$2y$10$.Sy2J2ib1YnUFwcgsirdu.v/P0..F40zbKwmFpUB66ifKDmYTLwK2', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '2021-06-29 03:06:32', '2021-07-02 02:34:19'),
(2, 'AldesylGualk', 'mail', 'google', 'worker', '88339535332', 'worker', 'alex980vasiljeva@yandex.ru', 'alex980vasiljeva@yandex.ru', '$2y$10$0sZQpP9wMHIYoT0oNg3OQOlJZ2EaoqknwzjpkOXKxVDUMHSwKjSwm', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '2021-06-29 03:07:55', '2021-06-29 08:49:00'),
(3, 'Aamir Tariq', 'Male', 'Codewoxy', 'Worker', '0302-3485948', 'Workers', 'amirtariq3@gmail.com', '60e824f051ac4.jpg', '$2y$10$hiRPt4Ia8tYSC.k11sfsE.Gs4.CWExvEPH9CkUSq45w9wZIqqgi12', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '2021-07-02 04:30:52', '2021-07-09 05:30:09'),
(4, 'Umair Tariq', 'Male', 'AT Alpha', 'Director', '03045569873', NULL, 'umair3@gmail.com', '60e592ef9d300.jpg', '$2y$10$c4BJ6kZV9zSSNeD3ryIqM.BP6gWyYrPV2JumTg6Fq.sHNvG/u60nO', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '2021-07-07 06:41:35', '2021-07-07 06:41:35'),
(5, 'Umair', 'mail', 'AT Alpha', 'worker', '03023125562', NULL, 'umair34@gmail.com', '60e593de23e3b.jpg', '$2y$10$2KStlS9J6WPu4WZ5EZvsIe2JhOdw9oMVgKNspFvzoajjRzzia5Qti', NULL, NULL, NULL, NULL, NULL, NULL, '1', '1', '2021-07-07 06:45:34', '2021-07-07 06:45:34');

-- --------------------------------------------------------

--
-- Table structure for table `membershiptypes`
--

CREATE TABLE `membershiptypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `membership_fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration_of_membership` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `benefits` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `membershiptypes`
--

INSERT INTO `membershiptypes` (`id`, `name`, `membership_fee`, `currency`, `duration_of_membership`, `benefits`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ANNUL SUBSCRIPTION - 365', '100.00', 'USD', '365', NULL, '1', '2021-06-28 07:18:37', '2021-06-29 02:55:12'),
(2, 'FREE - 30', '0.00', 'USD', '30', NULL, '1', '2021-06-28 07:19:09', '2021-06-29 02:55:24');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_06_22_095136_create_admins_table', 1),
(4, '2021_06_23_113440_create_countries_table', 2),
(5, '2021_06_24_065008_create_continents_table', 3),
(6, '2021_06_24_074009_create_cities_table', 4),
(7, '2021_06_24_081155_create_certificates_table', 5),
(8, '2021_06_24_085627_create_airlines_table', 6),
(9, '2021_06_24_092022_create_airports_table', 7),
(10, '2021_06_24_100709_create_trackntraces_table', 8),
(11, '2021_06_24_103034_create_tools_table', 9),
(12, '2021_06_28_104112_create_news_categories_table', 10),
(13, '2021_06_28_114046_create_membershiptypes_table', 11),
(14, '2021_06_29_071310_create_members_table', 12),
(15, '2021_06_29_094107_create_news_table', 13),
(16, '2021_06_30_065642_create_companies_table', 14),
(17, '2021_06_30_101948_create_company_services_table', 15),
(18, '2021_06_30_104413_create_company_directors_table', 16),
(19, '2021_06_30_112601_create_company_representatives_table', 17),
(20, '2021_06_30_115734_create_trade_references_table', 18),
(21, '2021_06_30_123034_create_company_certificates_table', 19),
(22, '2021_07_01_073921_create_reviews_table', 20),
(23, '2021_07_01_080648_create_company_branches_table', 21),
(24, '2021_07_01_084609_create_company_documents_table', 22);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shares` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_category_id`, `title`, `image`, `short_detail`, `description`, `member_id`, `shares`, `status`, `created_at`, `updated_at`) VALUES
(1, '2', 'AGL Supply Chain (Pvt) Limited', '60db0794a77a4.jpg', 'During novel Coronavirus pandemic AGL Pakistan offices are working normally from Monday to Friday.', 'During novel Coronavirus pandemic AGL Pakistan offices are working normally from Monday to Friday.\r\n\r\nWe are available to support you even after working hours: \r\n\r\nSend email:\r\n\r\nLahore / Islamabad/ Faisalabad/ Sialkot inquiries to:\r\n\r\nAWAISALI@AGL-SC.COM \r\nZafarali@AGL-SC.COM \r\n\r\nKarachi/ Port Qasim / Afghanistan inquiries:\r\n\r\nNISHAASIM@AGL-SC.COM \r\nTOUQIR@ARIESGLOBAL.COM\r\n\r\nCorporate issue:\r\nCorporate@ariesglobal.com \r\nCell: +92 336 419 4449\r\nWhatsApp and WeChat \r\n\r\nWWW.ARIESGLOBAL.COM', '1', NULL, '1', '2021-06-29 06:17:36', '2021-06-29 08:19:30'),
(2, '1', 'CMA CGM sells first eight ports in refin', '60e6ac59137f8.jpg', 'The Emirates group has announced a cost-reduction plan, as the outlook for travel demand remains weak due to the coronavirus (COVID-19) pandemic.', 'Emirates chairman and chief executive, HH Sheikh Ahmed bin Saeed Al Maktoum, explained: �Emirates Group has a strong balance sheet, and substantial cash liquidity, and we can, and will, with appropriate and timely action, survive through a prolonged period of reduced flight schedules, so that we are adequately prepared for the return to normality.�\r\n\r\nThe group�s cost-saving plan includes: postponing or cancelling discretionary expenditure; a freeze on all non-essential recruitment and consultancy work; working with suppliers to find cost savings and efficiency; encouraging employees to take paid or unpaid leave in light of reduced flying capacity; a temporary reduction of basic salary for the majority of Emirates Group employees for three months, ranging from 25% to 50% (junior level employees exempt from this); and the presidents of Emirates and dnata, Sir Tim Clark and Gary Chapman, will take a 100% basic salary cut for three months.\r\n\r\nOn the decision to reduce basic salary, Sheikh Ahmed explained: �Rather than ask employees to leave the business, we chose to implement a temporary basic salary cut as we want to protect our workforce and keep our talented and skilled people, as much as possible. We want to avoid cutting jobs. When demand picks up again, we also want to be able to quickly ramp up and resume services for our customers.�\r\n\r\nEmirates also stated that it is monitoring the current situation and that it keeps in regular contact with relevant authorities so that it can implement the latest guidance to its customers and staff safe and healthy.\r\n\r\nThe group has provided its frontline employees, such as crew and airport teams, with support to stay safe while on duty, including hand sanitizers and masks where required.\r\n\r\nSheikh Ahmed said: �These are unprecedented times for the airline and travel industry, but we will get through it. Our business is taking a hit, but what matters in the long run is that we do the right thing for our customers, our employees, and the communities we serve. With the support and unity that we have seen from our employees, partners, customers, and other stakeholders, I�m confident that Emirates can tackle this challenge and come out stronger.�\r\n\r\nVirgin Atlantic implemented a �drastic� cost-cutting exercise to offset a slump in demand as a result of the coronavirus outbreak.', '1', '0', '1', '2021-06-29 06:20:33', '2021-07-08 02:42:17'),
(3, '1', 'Swiss to offer up passenger aircraft', '60e6be0bd4645.jpg', 'Swiss WorldCargo, the air cargo division of SWISS, will operate cargo-only flights on some passenger aircraft beginning this week.', 'Swiss WorldCargo is a belly carrier, transporting high-value and care-intensive goods on the existing SWISS passenger network.\r\n\r\nIn these unprecedented times, the carrier is committed to continue maintaining global supply chains and delivering goods on behalf of its customers.\r\n\r\nThis week, Swiss WorldCargo will fly twice between Zurich and Hong Kong, the first of several planned charter flights.\r\n\r\nThe route will be serviced by the Airbus A340-300, and additional destinations and aircraft may be selected based on customer needs for global shipping.\r\n\r\n�Despite the slowdown in global air travel, we are seeing an ongoing demand for the transportation of goods,� said Ashwin Bhat, head of cargo, Swiss International Air Lines.\r\n\r\n�At Swiss WorldCargo, we are therefore committed to supporting logistics and customer needs, especially for the shipping of sensitive goods such as medicines or pharmaceuticals. We aim to continue to offer the Swiss quality and consistency we are known for throughout the industry.�\r\n\r\nOver the last few days several other airlines have taken similar steps:', '1', NULL, '1', '2021-07-08 03:57:47', '2021-07-08 03:57:47'),
(4, '1', 'Astral adjusts freighter schedule', '60e6bf5665060.jpg', 'African freighter operator Astral Aviation has adjusted its flight schedule in response to the coronavirus outbreak.', 'The carrier said that key staff will continue working at its headquarters at the Jomo Kenyatta International Airport while the rest of its staff will be working from home and will be accessible at all times by phone and email.\r\n\r\nAstral crew will be in compliance with the Kenya CAA Directives, it added.\r\n\r\nWhile aircraft will continue to fly, it has made some adjustments to its schedules.\r\n\r\nFlights from Nairobi to Juba, Mogadishu and Mwanza will each be halved from two to one per week.\r\n\r\nFlights to Zanzibar and Pemba will operate every two weeks.\r\n\r\nIn addition, Astral will operate full-charters within East, Central, Southern, Horn of Africa & Indian Ocean.\r\n\r\nThe carrier�s fleet includes B747-400F, B727F, DC-9F and F27F aircraft.', '1', NULL, '1', '2021-07-08 04:03:18', '2021-07-08 04:03:18'),
(5, '2', '4 People on board Ruby Princess', '60e8382b1d4a7.png', 'Four people onboard Ruby Princess cruise ship, operated by Princess Cruises, have tested positive to coronavirus, the New South Wales Ministry of Health (NSW Health) informed.', 'These include three guests and a crew member, according to Princess Cruises.\r\n\r\n�Please be advised that all four had reported flu-like symptoms during the cruise and, along with their stateroom occupants, were in isolation on board the ship minimising contact with other guests and crew.\r\n\r\n�We have assisted NSW Health to make contact with all guests who arrived in Sydney yesterday,� the company said on Thursday.\r\n\r\nThe Ruby Princess cruise to New Zealand left Sydney on March 8, and returned to Sydney and docked on March 18.\r\n\r\n�2647 passengers were on board and disembarked yesterday (March 18) and all were advised to self-isolate at home or in their accommodation for a period of 14 days as part of the management of returned travellers, in accordance with the Public Health Order for quarantine that is in place in New South Wales,� NSW Health said.\r\n\r\nThe three passengers have disembarked the ship and are receiving medical attention, while the crew member is in isolation on board the vessel.\r\n\r\nQuarantine of other crew on board is underway in consultation with the on board medical team, the health ministry said.\r\n\r\nNinety-eight of the 1148 crew disembarked the ship and have left NSW for their home countries. The rest of the crew remain in isolation on board the ship which is currently offshore.\r\n\r\nNSW Health added that five people on board with influenza-like illness were tested in Wellington, New Zealand on March 14, and were all negative for COVID-19.\r\n\r\n�NSW Health officials have emailed and sent text messages to all cruise passengers today to advise of the confirmed cases on board and to reinforce the importance of self-isolation and regular self-monitoring for symptoms. Phone calls are also being made to all passengers,� the health ministry said.\r\n\r\n�NSW Health has notified other states and territories and the National Incident Room of this situation.�\r\n\r\nSixty-three per cent of the passengers are Australian residents, 20 per cent are residents of the United States and the rest are from a variety of other countries.\r\n\r\nAll close contacts of the confirmed cases are expected to be identified and informed.\r\n\r\nNSW has confirmed 382 cases of COVID-19, including interstate residents in NSW health care facilities.\r\n\r\nCoral Princess Update\r\nCoral Princess was required to abruptly depart the port of Buenos Aires late on March 19, before all guests were disembarked, to comply with a decree issued by the President of Argentine, Alberto Fernandez.\r\n\r\n�The decree would require the ship to remain in port for an indeterminate number of days, and no guests would have been permitted to disembark during that time. Therefore, the decision was made to leave port immediately,� Princess Cruises said.\r\n\r\nCoral Princess set sail to Montevideo, Uruguay, where it is scheduled to take delivery of supplies and fuel on March 20.\r\n\r\n�We have been, and will continue to, seek permission to complete guest disembarkation there. Princess Cruises port operations is exploring all avenues, including diplomatic channels. Also, we are working with our shoreside teams on several options to disembark should there be any issues with Montevideo,� the company added.', '3', '0', 'Hidden', '2021-07-09 06:51:07', '2021-07-09 06:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Airline', '60e59f366b5d6.jpg', '1', '2021-06-28 06:04:06', '2021-07-07 07:33:58'),
(2, 'Cargo Airports', '60e59f3e7aa80.jpg', '1', '2021-06-28 06:05:51', '2021-07-07 07:34:06'),
(4, 'Freight Operator', '60e59f4710c86.jpg', '1', '2021-06-28 06:28:25', '2021-07-07 07:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `representatives`
--

CREATE TABLE `representatives` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `status` int(255) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `representatives`
--

INSERT INTO `representatives` (`id`, `name`, `detail`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Customs Dept. Managers', 'test', 1, '2021-06-24 03:45:20', '2021-06-24 03:54:43'),
(2, 'Pharma and TC Manager', NULL, 1, '2021-06-24 03:46:23', '2021-06-24 03:46:23'),
(3, 'Drop Shipments', NULL, 1, '2021-06-24 03:46:57', '2021-06-24 03:46:57');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `company_id`, `member_id`, `review`, `rating`, `created_at`, `updated_at`) VALUES
(1, '2', '2', 'test', '5', '2021-07-01 02:55:56', '2021-07-05 05:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `image`, `detail`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Packing and labelling', '60e585a8b1249.png', 'test4', 1, '2021-06-23 03:21:46', '2021-07-07 05:44:56'),
(2, 'Express Handling', '60e585c63b64c.png', 'test 1', 1, '2021-06-23 03:22:15', '2021-07-07 05:45:26'),
(3, 'Express Handling', '60e585d2bfd18.png', 'test2', 1, '2021-06-23 03:22:33', '2021-07-07 05:45:38'),
(4, 'Inland trucking', '60e585e70b7f0.png', 'test3', 1, '2021-06-23 03:26:09', '2021-07-07 05:45:59'),
(5, 'Express', '60e585ff28b22.png', NULL, 1, '2021-06-25 05:33:43', '2021-07-07 05:46:23'),
(6, 'Inland trucking', '60e58613d7fbf.png', 'test3', 1, '2021-06-28 05:14:59', '2021-07-07 05:46:43');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id`, `name`, `detail`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Currency Converters', 'Foreign exchange conversion tool', 'http://www.oanda.com/currency/converter/', '1', '2021-06-24 05:43:14', '2021-06-25 05:30:19'),
(2, 'Customs', 'Customs information from many countries with thanks to WCA', 'http://resourcecenter.wcaworld.com/wcaworld/custom.asp', '1', '2021-06-24 05:44:04', '2021-06-24 05:51:12');

-- --------------------------------------------------------

--
-- Table structure for table `trackntraces`
--

CREATE TABLE `trackntraces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `awb_Prefix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trackntraces`
--

INSERT INTO `trackntraces` (`id`, `name`, `iata`, `icao`, `awb_Prefix`, `url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Aban Airs', 'K5', 'ABE', NULL, 'http://www.abanaircargo.com/index.php', '1', '2021-06-24 05:20:24', '2021-06-25 05:31:19'),
(2, 'ABSA Cargo Airline', 'M3', 'TUS', '549', 'http://www.absacargo.com.br/en/MultiRastreamento.asp', '1', '2021-06-24 05:20:59', '2021-06-24 05:20:59');

-- --------------------------------------------------------

--
-- Table structure for table `trade_references`
--

CREATE TABLE `trade_references` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trade_references`
--

INSERT INTO `trade_references` (`id`, `company_id`, `name`, `country_id`, `city_id`, `contact_person`, `email`, `phone`, `detail`, `created_at`, `updated_at`) VALUES
(1, '4', 'Hansa Shipping Agency', '1', '1', 'Shideh Ordiyan', 'shideh@hansanav.com', '+982143312105', 'Thanks and Best Regards,\r\n\r\nShideh Ordiyan  | Sales Coordinator\r\n\r\n                             \r\n\r\nTel :  +9821 43312000 â€“ EXT:105     Direct:   +982143312105           Fax :  +9821 43853940 5th Floor , No. 18 ,  Alvand St. , Argentina Sq.\r\n\r\nTehran â€“ 1514938117  | IRAN\r\n\r\nwebsite | Vcard | Email | map', '2021-06-30 07:24:22', '2021-06-30 07:24:22'),
(2, '4', 'Maltacourt (Canada) Ltd.', '2', '5', 'Jonathann Morco', 'jonathann.morco@maltacourt.ca', '(604) 278-3410', NULL, '2021-07-09 06:24:59', '2021-07-09 06:24:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aamir', 'amirtariq3@gmail.com', NULL, '$2y$10$pz11KGwB/35q/cSiRt0ZD.Ob6q4C6DNbbxx9eh93iCHLVQS9h31jG', NULL, '2021-06-22 07:19:05', '2021-06-22 07:19:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airlines`
--
ALTER TABLE `airlines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airports`
--
ALTER TABLE `airports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_branches`
--
ALTER TABLE `company_branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_certificates`
--
ALTER TABLE `company_certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_directors`
--
ALTER TABLE `company_directors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_documents`
--
ALTER TABLE `company_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_representatives`
--
ALTER TABLE `company_representatives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_services`
--
ALTER TABLE `company_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `continents`
--
ALTER TABLE `continents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membershiptypes`
--
ALTER TABLE `membershiptypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `representatives`
--
ALTER TABLE `representatives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trackntraces`
--
ALTER TABLE `trackntraces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trade_references`
--
ALTER TABLE `trade_references`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `airlines`
--
ALTER TABLE `airlines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `airports`
--
ALTER TABLE `airports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `company_branches`
--
ALTER TABLE `company_branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company_certificates`
--
ALTER TABLE `company_certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_directors`
--
ALTER TABLE `company_directors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company_documents`
--
ALTER TABLE `company_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_representatives`
--
ALTER TABLE `company_representatives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company_services`
--
ALTER TABLE `company_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `continents`
--
ALTER TABLE `continents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `membershiptypes`
--
ALTER TABLE `membershiptypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `representatives`
--
ALTER TABLE `representatives`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trackntraces`
--
ALTER TABLE `trackntraces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trade_references`
--
ALTER TABLE `trade_references`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
