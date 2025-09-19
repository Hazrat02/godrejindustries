-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 29, 2025 at 07:52 PM
-- Server version: 10.11.10-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u653172670_wimbledoninvst`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

CREATE TABLE `bank_details` (
  `id` int(11) NOT NULL,
  `beneficiary` varchar(200) DEFAULT NULL,
  `ac_num` varchar(244) DEFAULT NULL,
  `ac_type` varchar(244) DEFAULT NULL,
  `ex_rate` int(200) NOT NULL DEFAULT 70,
  `branch` varchar(222) DEFAULT NULL,
  `ifsc_code` varchar(200) DEFAULT NULL,
  `status` int(200) NOT NULL DEFAULT 1,
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank_details`
--

INSERT INTO `bank_details` (`id`, `beneficiary`, `ac_num`, `ac_type`, `ex_rate`, `branch`, `ifsc_code`, `status`, `updated_at`, `created_at`) VALUES
(1, 'test3', '1221214ee5', 'testsf', 77, 'test', 'testfsdsadada', 1, '2025-06-29 19:49:53.000000', '2025-06-29 17:07:20.112043');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sub` varchar(255) DEFAULT NULL,
  `sms` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `sub`, `sms`, `created_at`, `updated_at`) VALUES
(4, 'Chintan chauhan', 'chintanchauhan36@gmail.com', 'Investment purpose', 'Please email me or contact me directly.', '2024-07-08 08:37:42', '2024-07-08 08:37:42'),
(5, 'Vallepu Suchendra', 'vallepusuchendra877@gmail.com', 'Invest ment', 'Give me contact number', '2024-07-13 17:13:18', '2024-07-13 17:13:18'),
(6, 'test', 'test@gmail.com', 'test', 'test', '2024-07-17 08:01:43', '2024-07-17 08:01:43'),
(7, 'test', 'test@gmail.com', 'test', 'test', '2024-07-17 08:02:19', '2024-07-17 08:02:19'),
(8, 'test', 'test@gmail.com', 'test', 'test', '2024-07-17 08:29:25', '2024-07-17 08:29:25'),
(9, 'Sonu', 'skjdhanvantary@gmail.com', 'About investment', 'WhatsApp 8873040008 or call 8077643037', '2024-07-18 14:43:38', '2024-07-18 14:43:38'),
(10, 'Mukund Rathi', 'rathi.mukund5@gmail.com', 'Investment', 'Plz call', '2024-07-20 13:55:24', '2024-07-20 13:55:24'),
(11, 'ASUTOSH AIKAT', 'asutosh.aikat@gmail.com', 'REGARDING IRREGULARITIES IN PAYOUTS AND AGREEMENT', 'I AM YET TO RECEIVE OFFICIAL AGREEMENT FROM WIMBELDON CAPITAL EVEN THOUGH I DEPOSITED 4210 USDT THROUGH JANAVI MADAM MOBILE 8722486125 AND THEIR MANAGER RAJESH WHO KEEPS ON PLAYING WITH COMMITMENTS , THERE IS NO EFFORTS TO PAY ME BACK ONLY THEY ARE TELLING ME TO PUT MORE INVESTMENTS.', '2024-07-25 07:49:20', '2024-07-25 07:49:20'),
(12, 'ASUTOSH AIKAT', 'asutosh.aikat@gmail.com', 'enquiry', 'please let me know the minimum investment and also the process to invest', '2024-08-01 19:09:05', '2024-08-01 19:09:05'),
(13, 'ASUTOSH AIKAT', 'asutosh.aikat@gmail.com', 'enquiry', 'please let me know the minimum investment and also the process to invest', '2024-08-01 19:09:13', '2024-08-01 19:09:13'),
(14, 'Vinayak', 'patilvinayak245@gmail.com', 'Regarding investment', 'Hi\r\nI m interested to invest in your firm.\r\nPls share me details', '2024-08-02 11:04:39', '2024-08-02 11:04:39'),
(15, 'Aashish Tuli', 'aashishtuli802@gmail.com', 'I am interested in this business', 'Contact me', '2024-08-05 12:31:43', '2024-08-05 12:31:43'),
(16, 'Aashish Tuli', 'aashishtuli802@gmail.com', 'I am interested in this business', 'Contact me', '2024-08-05 12:31:48', '2024-08-05 12:31:48'),
(17, 'Deepak', 'ashok15121967@gmail.com', 'For investment', 'Please call me +91 9917512022\r\nin hindi language for investment and capital protection', '2024-08-13 11:51:57', '2024-08-13 11:51:57'),
(18, 'Goutam Dass', 'gdexports.786@gmail.com', 'Relationship between wimbeldon investment & Binance', 'Are you accepting investments from Indian people and giving them returns of 10% through cryptocurrency by using the  exchange portal?', '2024-09-01 16:31:01', '2024-09-01 16:31:01'),
(19, 'Goutam Dass', 'gdexports.786@gmail.com', 'Relationship between wimbeldon investment & Binance', 'Are you accepting investments from Indian people and giving them returns of 10% through cryptocurrency by using the  exchange portal?  Do you have anyone by the name Janavi . Rohit and Ashish from accounts department?', '2024-09-01 16:32:29', '2024-09-01 16:32:29'),
(20, 'Goutam Dass', 'gdexports.786@gmail.com', 'Relationship between wimbeldon investment & Binance', 'Are you accepting investments from Indian people and giving them returns of 10% through cryptocurrency by using the  Binance exchange portal?  Do you have anyone by the name Janavi . Rohit and Ashish from accounts department?', '2024-09-01 16:46:10', '2024-09-01 16:46:10'),
(21, 'Prabhat', 'prabhatpuri170@gmail.com', 'Investment', 'Investment', '2024-09-06 14:48:07', '2024-09-06 14:48:07'),
(22, 'Smitesh Shah', 'smitesh01@gmail.com', 'Investment', 'I wanted to know about investment', '2024-09-08 05:27:17', '2024-09-08 05:27:17'),
(23, 'Smitesh Shah', 'smitesh01@gmail.com', 'Investment', 'I wanted to know about investment', '2024-09-08 05:27:20', '2024-09-08 05:27:20'),
(24, 'Sagar', 'sagarprajapati8285@gmail.com', 'Investment', 'Call me 8285981552', '2024-09-12 09:14:15', '2024-09-12 09:14:15'),
(25, 'Pallavi vijay donde', 'vijaypallavi66@gmail.com', 'Details please', 'Minimum investment', '2024-09-20 08:27:15', '2024-09-20 08:27:15'),
(26, 'Ravi Singh', 'ravisinghrajput.singh2@gmail.com', 'How deposit function', 'How deposit function', '2024-09-26 09:17:44', '2024-09-26 09:17:44'),
(27, 'Manish kumar bansal', 'manish1221bansal@gmail.com', NULL, 'Call me', '2024-10-03 17:41:06', '2024-10-03 17:41:06'),
(28, 'Manish kumar bansal', 'manish1221bansal@gmail.com', NULL, 'Call me', '2024-10-15 11:45:44', '2024-10-15 11:45:44'),
(29, 'Eswaran Krishnan', 'easu1961@gmail.com', 'Withdrawal of $10378', 'I have made investment as I am in need of money back. Already I have requested for money back', '2024-10-19 14:48:22', '2024-10-19 14:48:22'),
(30, 'Eswaran Krishnan', 'easu1961@gmail.com', 'Withdrawal of $10378', 'I have made investment as I am in need of money back. Already I have requested for money back', '2024-10-19 14:48:26', '2024-10-19 14:48:26'),
(31, 'Adarsh', 'adarshsalot1984@gmail.com', 'Need to talk on investment', 'Please call me / reach out on +91 8879844991', '2024-10-23 08:20:46', '2024-10-23 08:20:46'),
(32, 'Zoey Marketing', 'zoey.mkt@gmail.com', 'Quick Question about your website', 'Hi,  I am trying to get in touch regarding your website. Do you want to build a professional website or re-do your existing one cost-effectively?  We build attractive websites that convert visitors into customers.  Please let me know if you are interested, I will send through some price indicative and my work.  Yours Sincerely Zoey', '2024-12-02 10:18:17', '2024-12-02 10:18:17'),
(33, 'Zoey Marketing', 'zoey.mkt@gmail.com', 'Quick Question about your website', 'Hi,  I am trying to get in touch regarding your website. Do you want to build a professional website or re-do your existing one cost-effectively?  We build attractive websites that convert visitors into customers.  Please let me know if you are interested, I will send through some price indicative and my work.  Yours Sincerely Zoey', '2024-12-02 10:18:28', '2024-12-02 10:18:28'),
(34, 'M Khan', 'Msk14373@yahoo.com', 'Investment', 'How this investment system work', '2024-12-17 09:52:11', '2024-12-17 09:52:11'),
(35, 'Vinay Mago', 'vkmago17@yahoo.com', NULL, 'Request details', '2024-12-19 03:12:58', '2024-12-19 03:12:58'),
(36, 'Vinay Mago', 'vkmago17@yahoo.com', NULL, 'Request details', '2024-12-19 03:13:02', '2024-12-19 03:13:02'),
(37, 'Viraaj', 'viraaj.dxb@gmail.com', 'Interested', 'Hi please contact me \r\nMy number is +971509747313', '2024-12-20 11:14:29', '2024-12-20 11:14:29'),
(38, 'ASUTOSH AIKAT', 'asutosh.aikat@gmail.com', 'REFUND OF investment done previously amounting to 4 lakhs', 'Refund my 4 lakh amount invested in your company \r\nyour mail address is showing delivery failure\r\nYour representative has cheated me along with finance department \r\ni have already lodged a police complaiant', '2024-12-28 05:44:36', '2024-12-28 05:44:36'),
(39, 'ASUTOSH AIKAT', 'asutosh.aikat@gmail.com', 'REFUND OF investment done previously amounting to 4 lakhs', 'Refund my 4 lakh amount invested in your company \r\nyour mail address is showing delivery failure\r\nYour representative has cheated me along with finance department \r\ni have already lodged a police complaiant', '2024-12-28 05:44:42', '2024-12-28 05:44:42'),
(40, 'Shivam Rastogi', 'shivam_rastogi1988@yahoo.com', 'I’m', 'Hello', '2025-01-10 11:27:09', '2025-01-10 11:27:09'),
(41, 'Kushmeet Singh', 'kushmeetsingh11@gmail.com', 'Indian office', 'For business', '2025-01-13 11:51:25', '2025-01-13 11:51:25'),
(42, 'jitendra behera', 'oddibaba@yahoo.com', 'For investment', 'How many investors right now??', '2025-02-10 06:10:51', '2025-02-10 06:10:51'),
(43, 'jitendra behera', 'oddibaba@yahoo.com', 'For investment', 'How many investors right now??', '2025-02-10 06:11:43', '2025-02-10 06:11:43'),
(44, 'Sunil Kumar', 'ksunil03509@gmail.com', 'AC technician', 'Details', '2025-02-15 02:22:24', '2025-02-15 02:22:24'),
(45, 'Sunil Kumar', 'ksunil03509@gmail.com', 'AC technician', 'Details', '2025-02-15 02:22:36', '2025-02-15 02:22:36'),
(46, 'Sunil Kumar', 'ksunil03509@gmail.com', 'Investment', 'Details', '2025-02-15 03:45:53', '2025-02-15 03:45:53'),
(47, 'Sunil Kumar', 'ksunil03509@gmail.com', 'Investment', 'Details', '2025-02-15 03:46:01', '2025-02-15 03:46:01'),
(48, 'Ritesh', 'admirable82@gmail.com', 'Want to know more about it whether it is secured by collateral', 'Call', '2025-02-19 03:01:14', '2025-02-19 03:01:14'),
(49, 'DB Prakash', 'prakashdb2011@gmail.com', 'My investment Rs 1,10,000/. Not getting ROI', 'I hv investment of Rs1,10,000/  Through your Bangalore office.  I am not getting ROI. No proper person to contact.   Pl reply', '2025-04-22 10:57:44', '2025-04-22 10:57:44'),
(50, 'DB Prakash', 'prakashdb2011@gmail.com', 'My investment Rs 1,10,000/. Not getting ROI', 'I hv investment of Rs1,10,000/  Through your Bangalore office.  I am not getting ROI. No proper person to contact.   Pl reply', '2025-04-22 10:57:59', '2025-04-22 10:57:59'),
(51, 'Aditi Anand', 'adiflying05@gmail.com', 'investment', 'i want to invest but what about security for my capital.', '2025-05-15 10:40:47', '2025-05-15 10:40:47'),
(52, 'Rajesh Hadiya', 'rajesh.h@iitgn.ac.in', 'Investment', 'I would like to invest big amount, please email me', '2025-06-09 19:37:23', '2025-06-09 19:37:23');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kycs`
--

CREATE TABLE `kycs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `id_front` varchar(255) DEFAULT NULL,
  `id_back` varchar(255) DEFAULT NULL,
  `id_file` varchar(255) DEFAULT NULL,
  `id_status` varchar(255) NOT NULL DEFAULT 'pending',
  `ad_front` varchar(255) DEFAULT NULL,
  `ad_back` varchar(255) DEFAULT NULL,
  `ad_file` varchar(255) DEFAULT NULL,
  `ad_status` varchar(255) NOT NULL DEFAULT 'pending',
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `postel` varchar(255) DEFAULT NULL,
  `ot_front` varchar(255) DEFAULT NULL,
  `ot_back` varchar(255) DEFAULT NULL,
  `ot_file` varchar(255) DEFAULT NULL,
  `ot_status` varchar(255) NOT NULL DEFAULT 'pending',
  `se_front` varchar(255) DEFAULT NULL,
  `se_back` varchar(255) DEFAULT NULL,
  `se_file` varchar(255) DEFAULT NULL,
  `se_status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kycs`
--

INSERT INTO `kycs` (`id`, `user_id`, `type`, `id_front`, `id_back`, `id_file`, `id_status`, `ad_front`, `ad_back`, `ad_file`, `ad_status`, `country`, `city`, `address`, `postel`, `ot_front`, `ot_back`, `ot_file`, `ot_status`, `se_front`, `se_back`, `se_file`, `se_status`, `created_at`, `updated_at`) VALUES
(4, 21, NULL, 'https://api.wimbeldoninvestments.com/img/kyc/639962WhatsApp Image 2024-04-19 at 11.20.09_85ef6a3e.jpg', 'https://api.wimbeldoninvestments.com/img/kyc/590497WhatsApp Image 2024-04-19 at 11.20.09_85ef6a3e.jpg', '', 'pending', '', '', 'https://api.wimbeldoninvestments.com/img/kyc/574455WhatsApp Image 2024-04-19 at 11.20.09_85ef6a3e.jpg', 'pending', 'India', 'Maharashtra', 'FLAT NO 202 BLDG NO -04 OSTWAL KESAR PARK, BETEGAON, BOISAR EAST, BETEGAON , PALGHAR', '401501', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2024-04-19 06:20:11', '2024-04-19 06:22:54'),
(5, 22, NULL, 'https://api.wimbeldoninvestments.com/img/kyc/423506Pancard (4).jpg', '', '', 'pending', '', '', 'https://api.wimbeldoninvestments.com/img/kyc/370681Amruta Adhaar.JPG', 'pending', 'India', 'Pune', 'A402 Kumar piccadilly near Akshara internatonal school', '411057', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2024-04-22 15:07:20', '2024-04-22 15:11:55'),
(6, 23, NULL, 'https://api.wimbeldoninvestments.com/img/kyc/503634WhatsApp Image 2024-04-23 at 12.51.12_807dcf96.jpg', 'https://api.wimbeldoninvestments.com/img/kyc/662771WhatsApp Image 2024-04-23 at 12.51.12_807dcf96.jpg', '', 'pending', '', '', 'https://api.wimbeldoninvestments.com/img/kyc/598719WhatsApp Image 2024-04-23 at 12.51.12_807dcf96.jpg', 'pending', 'India', 'Uttar pradesh', 'D/O Ramesh chandra , van vibhag gali sadabad, halthras, sadabad, uttar pradesh', 'undefined', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2024-04-25 06:22:12', '2024-04-25 06:26:41'),
(7, 26, NULL, 'https://api.wimbeldoninvestments.com/img/kyc/18220Saroj-Aadhar-Back.pdf', 'https://api.wimbeldoninvestments.com/img/kyc/804670Saroj-Aadhar-Front.pdf', '', 'pending', '', '', 'https://api.wimbeldoninvestments.com/img/kyc/41649Saroj-Aadhar-Front.pdf', 'pending', 'India', 'Haryana', 'W/O Birendra Singh 106,2ND FLOOR, BLOCK-5 CHARMWOOD VILLAGE, EROS GARDEN SURAJKUND FARIDABAD', '121009', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2024-05-14 07:45:39', '2024-05-14 07:49:53'),
(8, 27, NULL, 'https://api.wimbeldoninvestments.com/img/kyc/50615927994faf-f5bd-4360-8e31-7e8937fd2d9d.jpeg', 'https://api.wimbeldoninvestments.com/img/kyc/738372c1a2efda-f444-4bbf-8c1c-c042b6e858be.jpeg', '', 'pending', '', '', 'https://api.wimbeldoninvestments.com/img/kyc/7287553f6ba685-9040-4acf-a22a-317dcf4ebe1d.jpeg', 'pending', 'India', 'Assam', 'W/O Biswa Bikash Gogoi ,Near Gonesh Mondir, Borbil No.3, Borbil Gaon No,3, Tinsukia, Assam', '786171', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2024-05-17 11:57:27', '2024-05-17 12:00:17'),
(10, 34, NULL, 'https://api.wimbeldoninvestments.com/img/kyc/581840IMG-20240430-WA0049.jpg', 'https://api.wimbeldoninvestments.com/img/kyc/505592IMG-20240430-WA0046.jpg', '', 'pending', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, 'https://api.wimbeldoninvestments.com/img/kyc/106099IMG_20240619_222813.jpg', 'pending', '2024-07-05 10:39:16', '2024-07-05 10:46:30'),
(11, 37, NULL, 'https://api.wimbeldoninvestments.com/img/kyc/199718IMG-20240625-WA0005.jpg', 'https://api.wimbeldoninvestments.com/img/kyc/125519IMG-20240706-WA0008.jpg', '', 'pending', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2024-07-06 17:58:44', '2024-07-06 17:58:44'),
(12, 38, NULL, '', '', '', 'pending', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2024-07-10 11:44:58', '2024-07-10 11:46:52'),
(13, 39, NULL, 'https://api.wimbeldoninvestments.com/img/kyc/85829New Doc 07-11-2022 09.28.37_1.jpg', 'https://api.wimbeldoninvestments.com/img/kyc/755427New Doc 07-11-2022 09.28.37_2.jpg', '', 'pending', '', '', 'https://api.wimbeldoninvestments.com/img/kyc/639021Screenshot_20240708_123126_Adobe Acrobat.jpg', 'pending', 'India', 'Bhilwara', 'Keshrpura Salawatiya', '311602', NULL, NULL, NULL, 'pending', NULL, NULL, 'https://api.wimbeldoninvestments.com/img/kyc/76754517206193106555596009826807992480.jpg', 'pending', '2024-07-10 13:47:06', '2024-07-10 13:49:03'),
(14, 41, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, 'https://api.wimbeldoninvestments.com/img/kyc/847896IMG_20230612_131057.jpg', 'pending', NULL, NULL, NULL, 'pending', '2024-07-12 07:40:14', '2024-07-12 07:40:14'),
(15, 43, NULL, 'https://api.wimbeldoninvestments.com/img/kyc/649451ASISH Aadhaar Bbsr address (1) (1).pdf', 'https://api.wimbeldoninvestments.com/img/kyc/383667ASISH Aadhaar Bbsr address (1) (1).pdf', '', 'pending', '', '', 'https://api.wimbeldoninvestments.com/img/kyc/688673ASISH Aadhaar Bbsr address (1) (1).pdf', 'pending', 'India', 'odisha', 'Asish kumar Pramanik, B 401, Laxmi Residency , Phase 1, balianta, before Laxmi RESIDENCY Pase 2, Hanspal, Balianta, Khorda', '752101', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2024-07-15 08:11:20', '2024-07-15 08:15:24'),
(21, 55, NULL, 'https://api.wimbeldoninvestments.com/img/kyc/918644Amol-PAN.JPG', '', '', 'pending', '', '', 'https://api.wimbeldoninvestments.com/img/kyc/873984Amol-Masked-AADHAAR-back.jpg', 'pending', 'India', 'Pune', '503 Navarang CHS, Lane No. 7,, Dahanukar Colony, Kothrud', '411038', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2024-07-26 13:03:48', '2024-07-26 13:04:55'),
(22, 58, NULL, '', '', '', 'pending', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2024-08-03 13:14:55', '2024-08-03 13:15:11'),
(23, 74, NULL, 'https://wim.capitalswealthmanagement.com/img/kyc/553110d1.jpeg', 'https://wim.capitalswealthmanagement.com/img/kyc/670542d2.jpeg', '', 'pending', '', '', 'https://wim.capitalswealthmanagement.com/img/kyc/836721d2.jpeg', 'pending', 'India', 'Ahmedabad', 'Near Jupiter Tower Behind Grand Bhagwati Hotel Bodakdev', '380054', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2024-08-12 07:24:32', '2024-08-12 08:12:35'),
(26, 77, NULL, 'https://wim.capitalswealthmanagement.com/img/kyc/92948918949fc6-53e3-4eef-9ba7-029a9a062653.jfif', 'https://wim.capitalswealthmanagement.com/img/kyc/7622194995780d-7587-42ea-9b13-489174a9785b.jfif', '', 'pending', '', '', 'https://wim.capitalswealthmanagement.com/img/kyc/33763718949fc6-53e3-4eef-9ba7-029a9a062653.jfif', 'pending', 'India', 'Maharashtra', 'S/O : Suresh Salot A/10, Ratnadeep Sevaram Lalvani Road Mulund West Mumbai', '400080', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2024-08-21 05:21:22', '2024-08-21 05:28:38'),
(27, 79, NULL, 'https://wim.capitalswealthmanagement.com/img/kyc/63978043f46ddd-6f43-4414-941e-ba275a41d15e.jfif', 'https://wim.capitalswealthmanagement.com/img/kyc/95450344776114-82d1-4b0b-95ae-9802f31d70b5.jfif', '', 'pending', '', '', 'https://wim.capitalswealthmanagement.com/img/kyc/28231543f46ddd-6f43-4414-941e-ba275a41d15e.jfif', 'pending', 'India', 'Uttar Pradesh', 'S/O : Salikram , C k 62/71, baluva Gali, Kashipura, Balua,Varanasi', '221001', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2024-08-27 08:41:51', '2024-09-02 08:40:49'),
(28, 81, NULL, 'https://wim.capitalswealthmanagement.com/img/kyc/372712Passport.pdf', 'https://wim.capitalswealthmanagement.com/img/kyc/636696PP 2 addressn_1.jpg', '', 'pending', '', '', 'https://wim.capitalswealthmanagement.com/img/kyc/190755PNG image 2.png', 'pending', 'India', 'Kolkata', '19 G Dum Dum Road', '700030', NULL, NULL, NULL, 'pending', NULL, NULL, '', 'pending', '2024-08-29 16:14:09', '2024-09-01 16:13:14'),
(29, 85, NULL, 'https://wim.capitalswealthmanagement.com/img/kyc/37327144776114-82d1-4b0b-95ae-9802f31d70b5.jfif', 'https://wim.capitalswealthmanagement.com/img/kyc/86218143f46ddd-6f43-4414-941e-ba275a41d15e.jfif', '', 'pending', '', '', 'https://wim.capitalswealthmanagement.com/img/kyc/69939243f46ddd-6f43-4414-941e-ba275a41d15e.jfif', 'pending', 'India', 'Uttar Pradesh', 'S/O : Salikram , C K 62 /71, Baluva gali, Kashipura,Balua , Varanasi', '2210001', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2024-09-02 08:42:17', '2024-09-02 08:44:09'),
(30, 86, NULL, 'https://wim.capitalswealthmanagement.com/img/kyc/584873New Doc 09-03-2024 12.06.pdf', 'https://wim.capitalswealthmanagement.com/img/kyc/43948New Doc 09-03-2024 12.09.pdf', '', 'pending', '', '', 'https://wim.capitalswealthmanagement.com/img/kyc/707939WhatsApp Image 2024-09-03 at 12.14.12 PM.jpeg', 'pending', 'India', 'JADCHERLA', 'H.No: 11-218, Hanuman Street, Netajiroad, Post : JADCHERLA, Dist : Mahabubnagar, Telangana', '509301', NULL, NULL, '', 'pending', NULL, NULL, '', 'pending', '2024-09-03 06:42:10', '2024-09-03 06:51:51'),
(31, 87, NULL, 'https://wim.capitalswealthmanagement.com/img/kyc/7008504199832a-3b1e-45fa-a9aa-6a4dc4b0cbfa.jfif', 'https://wim.capitalswealthmanagement.com/img/kyc/3904114461d733-b001-401d-af65-3b796eab66f2.jfif', '', 'pending', '', '', 'https://wim.capitalswealthmanagement.com/img/kyc/4500804461d733-b001-401d-af65-3b796eab66f2.jfif', 'pending', 'India', 'West Delhi', 'c-3 307 B. First Floor Janakpuri Janakpuri VTC Janakpuri B-1', '110058', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2024-09-10 06:01:07', '2024-09-10 06:03:42'),
(32, 99, NULL, 'https://backend.wimbledoninvestments.com/img/kyc/73538Swapnaja_PAN.jpeg', 'https://backend.wimbledoninvestments.com/img/kyc/603690Swapnaja_PAN.jpeg', '', 'pending', '', '', 'https://backend.wimbledoninvestments.com/img/kyc/245727Swapnaja_AADHAAR_Back.jpeg', 'pending', 'India', 'Pune', '503 Navarang Apartments, Lion CHS, Lane No. 7, Kothrud,', '411038', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2025-01-21 05:23:27', '2025-01-21 05:24:58'),
(33, 100, NULL, 'https://backend.wimbledoninvestments.com/img/kyc/427726WhatsApp Image 2025-01-18 at 10.38.06 AM.jpeg', 'https://backend.wimbledoninvestments.com/img/kyc/69434WhatsApp Image 2025-01-18 at 10.38.32 AM.jpeg', '', 'pending', '', '', 'https://backend.wimbledoninvestments.com/img/kyc/828645WhatsApp Image 2025-01-18 at 10.38.32 AM.jpeg', 'pending', 'India', 'hyderabad', 'S/O , Dumpala Basaiah, Flat No 303, 4th Floor , PEACE Court, Street No-1 Country Club Exit Gate, uma Nagar Begumepet , Hyderbad', '500016', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2025-01-21 05:59:24', '2025-01-21 06:04:52'),
(34, 101, NULL, 'https://backend.wimbledoninvestments.com/img/kyc/580795WhatsApp Image 2025-01-21 at 10.27.08_f180b4b3.jpg', 'https://backend.wimbledoninvestments.com/img/kyc/757231WhatsApp Image 2025-01-21 at 10.27.08_95cbd104.jpg', '', 'pending', '', '', '', 'pending', 'India', 'Maharashtra', 'Ramchandra Madukar Phatale 25/957/1 sangali Road rk nagar, Shahapur ichalkaranji Yadrav sut Girani Samor', NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2025-01-21 07:17:27', '2025-01-21 07:20:22'),
(35, 105, NULL, 'https://backend.wimbledoninvestments.com/img/kyc/87739Aadhaar-front.jpg', 'https://backend.wimbledoninvestments.com/img/kyc/53732Aadhaar-back.jpg', '', 'pending', '', '', '', 'pending', 'India', NULL, NULL, '600089', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2025-02-07 09:39:20', '2025-02-07 10:27:38'),
(36, 8, NULL, 'https://backend.wimbledoninvestments.com/img/kyc/119590Screenshot_116.png', 'https://backend.wimbledoninvestments.com/img/kyc/629730Screenshot_16.png', '', 'pending', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2025-02-09 14:41:04', '2025-02-09 14:41:04'),
(37, 110, NULL, 'https://backend.wimbledoninvestments.com/public/img/kyc/131489aadhar card jaymin.pdf', 'https://backend.wimbledoninvestments.com/public/img/kyc/282541aadhar card jaymin.pdf', '', 'pending', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2025-02-13 08:51:24', '2025-02-13 08:51:24'),
(38, 111, NULL, 'https://backend.wimbledoninvestments.com/public/img/kyc/484311Alappa_Aadhar_Front.jpeg', 'https://backend.wimbledoninvestments.com/public/img/kyc/776151Alappa_Aadhar_back.jpeg', '', 'pending', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, 'https://backend.wimbledoninvestments.com/public/img/kyc/891880Alappa_Photo.JPG', 'pending', '2025-02-13 19:00:13', '2025-02-13 19:00:46'),
(39, 114, NULL, '', '', '', 'pending', '', '', '', 'pending', 'India', NULL, NULL, '682306', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2025-02-20 10:10:37', '2025-02-20 10:30:12'),
(40, 158, NULL, 'https://backend.wimbledoninvestments.com/public/img/kyc/7039571.jpg', 'https://backend.wimbledoninvestments.com/public/img/kyc/893642.png', '', 'pending', '', '', 'https://backend.wimbledoninvestments.com/public/img/kyc/8006583.jpg', 'pending', 'India', 'Bangalore', '#123', '560001', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2025-03-19 11:29:44', '2025-03-19 11:30:19'),
(41, 164, NULL, 'https://backend.wimbledoninvestments.com/public/img/kyc/134761a6c3fe2f-4c6e-42cb-bfe2-a9f621ed33c4.jpeg', 'https://backend.wimbledoninvestments.com/public/img/kyc/52216a6c3fe2f-4c6e-42cb-bfe2-a9f621ed33c4.jpeg', '', 'pending', '', '', 'https://backend.wimbledoninvestments.com/public/img/kyc/670565e3dfaec4-d470-45ef-b5f9-1f46c364ba2b.jpeg', 'pending', 'India', 'Chitradurga', 'C/o Sayed Ghouse, #122, Kalgoud Mohalla, Molakalmuru, Chitradurga, Karnataka, India', '577535', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2025-05-19 08:14:33', '2025-05-19 08:16:48'),
(42, 166, NULL, 'https://backend.wimbledoninvestments.com/public/img/kyc/622684b3d08be6-a625-4005-8fb9-0775d0881913.jpeg', 'https://backend.wimbledoninvestments.com/public/img/kyc/724662b3d08be6-a625-4005-8fb9-0775d0881913.jpeg', '', 'pending', '', '', 'https://backend.wimbledoninvestments.com/public/img/kyc/5918022c3b1964-b749-4820-a212-a756c2f398de.jpeg', 'pending', 'India', 'Chitradurga', '#122, Kalgoud, Mohalla, Molakalmuru, Chitradurga', '577535', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2025-05-27 09:38:37', '2025-05-27 09:40:49'),
(43, 167, NULL, 'https://backend.wimbledoninvestments.com/public/img/kyc/835945IMG_20241231_155853.jpg', 'https://backend.wimbledoninvestments.com/public/img/kyc/248987IMG_20241231_155923.jpg', '', 'pending', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, '', 'pending', '2025-06-05 07:59:43', '2025-06-06 13:01:04'),
(44, 168, NULL, 'https://backend.wimbledoninvestments.com/public/img/kyc/265638WhatsApp Image 2025-06-13 at 3.24.50 PM.jpeg', 'https://backend.wimbledoninvestments.com/public/img/kyc/179060WhatsApp Image 2025-06-13 at 3.24.50 PM (1).jpeg', '', 'pending', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2025-06-13 09:55:40', '2025-06-13 09:55:40'),
(45, 170, NULL, '', '', '', 'pending', NULL, NULL, NULL, 'pending', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pending', NULL, NULL, NULL, 'pending', '2025-06-15 18:47:31', '2025-06-15 18:47:38'),
(46, 171, NULL, '', '', '', 'pending', '', '', 'https://backend.wimbledoninvestments.com/public/img/kyc/618353Screenshot_2024-08-27-21-54-52-63_c37d74246d9c81aa0bb824b57eaf7062.jpg', 'pending', 'India', 'Mohali', '3370 LIG Flats Sector 70 Mohali Near Community Center SAS Nagar', '160071', NULL, NULL, '', 'pending', NULL, NULL, NULL, 'pending', '2025-06-16 10:50:09', '2025-06-16 10:57:04'),
(47, 172, NULL, NULL, NULL, NULL, 'pending', '', '', '', 'pending', 'India', NULL, NULL, '201301', NULL, NULL, NULL, 'pending', NULL, NULL, '', 'pending', '2025-06-19 10:44:27', '2025-06-19 10:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `name` varchar(200) DEFAULT NULL,
  `phone` varchar(60) NOT NULL DEFAULT '0',
  `city` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL,
  `updated_at` timestamp(6) NULL DEFAULT current_timestamp(6),
  `country` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`name`, `phone`, `city`, `created_at`, `id`, `updated_at`, `country`) VALUES
('Hazrat alli', '01783195999', 'rangpur', '2024-07-12 18:43:43', 362, '2024-07-12 18:43:43.000000', 'Bangladesh'),
('Gad Nwigbalor', '07015321066', 'Port Harcourt', '2024-07-12 21:07:24', 363, '2024-07-12 21:07:24.000000', 'Nigeria'),
('kingsley emeka', '07010227447', 'Warri osubi town', '2024-07-13 13:40:56', 364, '2024-07-13 13:40:56.000000', 'Nigeria'),
('Prabhat', '9026146332', 'Kanpur', '2024-07-14 09:49:35', 365, '2024-07-14 09:49:35.000000', 'India'),
('Ashish', '8866550367', 'Ankleshwar', '2024-07-14 10:40:45', 366, '2024-07-14 10:40:45.000000', 'India'),
('Jimoh adeniyi mumini', '08106249762', 'oloffa way', '2024-07-16 16:48:12', 367, '2024-07-16 16:48:12.000000', 'Nigeria'),
('Rishabh Garg', '8630415398', 'Shamli', '2024-07-16 18:03:10', 368, '2024-07-16 18:03:10.000000', 'India'),
('Samuel', '08035103842', 'Port Harcourt', '2024-07-16 18:24:25', 369, '2024-07-16 18:24:25.000000', 'Nigeria'),
('ravinder pal Singh', '9815700280', 'Mohali', '2024-07-17 02:05:25', 370, '2024-07-17 02:05:25.000000', 'India'),
('Rabin Chakraborty', '7319245692', 'PIRULIA', '2024-07-17 03:46:37', 371, '2024-07-17 03:46:37.000000', 'India'),
('MEHBOOB ALI SHAIKH', '8433873092', 'KALYAN', '2024-07-17 04:59:10', 372, '2024-07-17 04:59:10.000000', 'India'),
('test', '915846587655', 'test', '2024-07-17 07:07:48', 373, '2024-07-17 07:07:48.000000', 'India'),
('Thonthaolung Kamei', '7085972417', 'Imphal', '2024-07-17 08:17:01', 374, '2024-07-17 08:17:01.000000', 'India'),
('Daberechi nzube okeke', '09037354991', 'Aba', '2024-07-17 10:28:52', 375, '2024-07-17 10:28:52.000000', 'Nigeria'),
('Ameer Syed Arif', '+919844384549', 'Bellary', '2024-07-17 17:58:58', 376, '2024-07-17 17:58:58.000000', 'India'),
('abdul gaffar', '9290030476', 'vijayawada', '2024-07-17 18:18:29', 377, '2024-07-17 18:18:29.000000', 'India'),
('Chimenem Williams', '08160256416', 'Ph', '2024-07-18 02:42:50', 378, '2024-07-18 02:42:50.000000', 'Nigeria'),
('satish shetty', '9611603158', 'Mangalore', '2024-07-18 05:57:56', 379, '2024-07-18 05:57:56.000000', 'India'),
('Prabhat Puri', '9026146332', 'Kanpur', '2024-07-18 15:53:40', 380, '2024-07-18 15:53:40.000000', 'India'),
('Lamino Muhammad Salihu', '09097058129', 'Abuja', '2024-07-31 23:43:52', 381, '2024-07-31 23:43:52.000000', 'Nigeria'),
('Tapas Sarkar', '6205573214', 'Dhanbad', '2024-08-01 10:40:44', 382, '2024-08-01 10:40:44.000000', 'India'),
('Piyush', '9975411775', 'Thane', '2024-08-02 08:19:29', 383, '2024-08-02 08:19:29.000000', 'India'),
('Ravi Singh', '9415353574', 'Varanasi', '2024-08-02 08:23:45', 384, '2024-08-02 08:23:45.000000', 'India'),
('Sagar Kharat', '070665 99079', 'Satara', '2024-08-02 14:48:07', 385, '2024-08-02 14:48:07.000000', 'India'),
('Laxmee', '8375908864', 'Jalna', '2024-08-02 17:01:23', 386, '2024-08-02 17:01:23.000000', 'India'),
('VAIBHAV Pachore', '94212 21021', 'Jaysingpur', '2024-08-03 01:33:35', 387, '2024-08-03 01:33:35.000000', 'India'),
('L satyanarayana', '9848205840', 'Giddalur', '2024-08-03 06:48:59', 388, '2024-08-03 06:48:59.000000', 'India'),
('Suresh Abburi', '91606 86555', 'Nellore', '2024-08-03 07:05:15', 389, '2024-08-03 07:05:15.000000', 'India'),
('Govind Verma', '89236 68936', 'Saharanpur', '2024-08-03 10:31:27', 390, '2024-08-03 10:31:27.000000', 'India'),
('Mukesh kumar', '8368326854', 'New Delhi', '2024-08-03 11:34:38', 391, '2024-08-03 11:34:38.000000', 'India'),
('PHANI KUMAR RANGEPALLI', '7550056922', 'Bangalore', '2024-08-03 15:49:09', 392, '2024-08-03 15:49:09.000000', 'India'),
('Tarun Mandawariya', '96676 25290', 'New delhi', '2024-08-04 02:23:55', 393, '2024-08-04 02:23:55.000000', 'India'),
('SUBHASH DUTTA', '8860711188', 'Shahdara', '2024-08-04 08:49:48', 394, '2024-08-04 08:49:48.000000', 'India'),
('Kangkan', '09101762197', 'Barpeta', '2024-08-04 21:01:30', 395, '2024-08-04 21:01:30.000000', 'India'),
('Mohammad Aftab Hussain', '79090 77447', 'Patna', '2024-08-05 17:45:58', 396, '2024-08-05 17:45:58.000000', 'Country'),
('Surendra', '7380404027', 'Jhansi', '2024-08-05 18:04:25', 397, '2024-08-05 18:04:25.000000', 'India'),
('Alex Thomas', '9551527747', 'Chennal', '2024-08-06 01:45:17', 398, '2024-08-06 01:45:17.000000', 'India'),
('Shadha', '9900910136', 'Belgaum', '2024-08-06 01:52:53', 399, '2024-08-06 01:52:53.000000', 'India'),
('Ritesh Sarkar', '8343981880', 'Bardhaman', '2024-08-06 01:53:23', 400, '2024-08-06 01:53:23.000000', 'India'),
('Rahul verma', '+919907686239', 'Satna', '2024-08-06 15:47:31', 401, '2024-08-06 15:47:31.000000', 'India'),
('Madan', '+18999051485', 'Washim', '2024-08-06 18:16:53', 402, '2024-08-06 18:16:53.000000', 'India'),
('Sunil Kumar reddy pallavali', '9542896870', 'Mydukuru chapadu mandal annavaram village', '2024-08-07 06:34:22', 403, '2024-08-07 06:34:22.000000', 'India'),
('satishjain', '9826206150', 'Bhind', '2024-08-07 08:03:18', 404, '2024-08-07 08:03:18.000000', 'Country'),
('Vishal chourasiya48', '83195 09213', 'Sagar', '2024-08-07 13:28:49', 405, '2024-08-07 13:28:49.000000', 'India'),
('Deepak Kumar Gupta', '9517187083', 'Ballia', '2024-08-08 12:38:27', 406, '2024-08-08 12:38:27.000000', 'India'),
('Kani Raj', '7339480210', 'Kayathar', '2024-08-09 01:05:49', 407, '2024-08-09 01:05:49.000000', 'India'),
('MAIBAM ARUNKUMAR', '90893 59109', 'IMPHAL EAST', '2024-08-09 01:44:51', 408, '2024-08-09 01:44:51.000000', 'India'),
('Pawan Singh', '9996084779', 'Kharkoda', '2024-08-09 03:16:08', 409, '2024-08-09 03:16:08.000000', 'India'),
('Jk mangang', '9366812231', 'Arapti', '2024-08-09 04:23:52', 410, '2024-08-09 04:23:52.000000', 'India'),
('prabhu gwoda', '9393073485', 'Kolar', '2024-08-09 04:31:09', 411, '2024-08-09 04:31:09.000000', 'India'),
('Sampangi', '9619066137', 'Daravi', '2024-08-09 05:21:47', 412, '2024-08-09 05:21:47.000000', 'Afghanistan'),
('Jitender', '7454041059', 'Rampur', '2024-08-09 06:06:08', 413, '2024-08-09 06:06:08.000000', 'Country'),
('Koushik', '9052596789', 'Vizag', '2024-08-09 07:13:59', 414, '2024-08-09 07:13:59.000000', 'India'),
('Bapusaheb jadhav', '9637196146', 'Jat', '2024-08-09 13:25:08', 415, '2024-08-09 13:25:08.000000', 'India'),
('Akash dhibar', '+917324955852', 'Akash dhibar', '2024-08-09 13:43:08', 416, '2024-08-09 13:43:08.000000', 'Afghanistan'),
('RaNviR', '7863001417', 'RaNviR', '2024-08-09 13:53:57', 417, '2024-08-09 13:53:57.000000', 'Country'),
('Sanjay Bhoi', '+918094271689', 'DUNGARPUR', '2024-08-09 15:25:43', 418, '2024-08-09 15:25:43.000000', 'India'),
('Kamal Hazowary', '7002087281', 'Goalpara', '2024-08-09 18:24:15', 419, '2024-08-09 18:24:15.000000', 'India'),
('Adarsh Salot', '8879844991', 'Mumbai', '2024-08-09 18:31:18', 420, '2024-08-09 18:31:18.000000', 'India'),
('Abhi Dogra', '7889324554', 'Bakshi nagar jammu', '2024-08-10 01:43:16', 421, '2024-08-10 01:43:16.000000', 'India'),
('lawma', '9466409821', 'Aizawl', '2024-08-10 02:10:31', 422, '2024-08-10 02:10:31.000000', 'India'),
('Suresh j chaudhary', '+916353113297', 'Palanpur', '2024-08-10 02:13:13', 423, '2024-08-10 02:13:13.000000', 'India'),
('kadirHussain', '+919161230746', 'Belthararod', '2024-08-10 02:26:22', 424, '2024-08-10 02:26:22.000000', 'India'),
('Niranjan sahu', '9668411992', 'Kolasini', '2024-08-10 02:39:53', 425, '2024-08-10 02:39:53.000000', 'India'),
('Gerry', '8413803655', 'Jiribam', '2024-08-10 03:26:13', 426, '2024-08-10 03:26:13.000000', 'India'),
('Jigar N Solanki', '8980417345', 'Rajkot', '2024-08-10 03:37:08', 427, '2024-08-10 03:37:08.000000', 'India'),
('Vikas BHEEL', '9145947612', 'Thakur', '2024-08-10 04:38:41', 428, '2024-08-10 04:38:41.000000', 'Country'),
('Vishal Gupta', '6390451321', 'Kanpur nagar', '2024-08-10 06:53:42', 429, '2024-08-10 06:53:42.000000', 'India'),
('Gopal sharma', '9889327267', 'Varanasi', '2024-08-10 07:03:56', 430, '2024-08-10 07:03:56.000000', 'India'),
('Rajesh kumar', '9792907226', 'Baharaich', '2024-08-10 07:21:03', 431, '2024-08-10 07:21:03.000000', 'India'),
('Gh mohi ud din tragwal', '6005748681', 'Trigam lover A wr no 06 Tragan', '2024-08-10 07:33:38', 432, '2024-08-10 07:33:38.000000', 'India'),
('Syed', '9398792989', 'Nandyal', '2024-08-10 09:33:57', 433, '2024-08-10 09:33:57.000000', 'India'),
('SANJAy oraon', '+918629894709', 'Oraon', '2024-08-10 09:51:55', 434, '2024-08-10 09:51:55.000000', 'India'),
('Rakesh', '6207266374', 'Kumar', '2024-08-10 11:46:43', 435, '2024-08-10 11:46:43.000000', 'India'),
('Mukesh pal', '+917667259425', 'Garhwa', '2024-08-10 11:51:15', 436, '2024-08-10 11:51:15.000000', 'India'),
('Pradum Kashyap', '8090618537', 'Bahraich', '2024-08-10 12:42:18', 437, '2024-08-10 12:42:18.000000', 'India'),
('दिनेश', '7690862619', '7690862619', '2024-08-10 14:58:18', 438, '2024-08-10 14:58:18.000000', 'Afghanistan'),
('Deepak Rajput', '9719135210', 'Ganga', '2024-08-10 16:14:28', 439, '2024-08-10 16:14:28.000000', 'India'),
('Harsh Desai', '7387154712', 'Pune', '2024-08-10 17:01:42', 440, '2024-08-10 17:01:42.000000', 'India'),
('Aasif', '9596975862', 'Lolab', '2024-08-10 18:04:34', 441, '2024-08-10 18:04:34.000000', 'Country'),
('Neeraj kumar', '9582237795', 'Ajit Nagar', '2024-08-10 18:11:25', 442, '2024-08-10 18:11:25.000000', 'India'),
('Ashok', '+919067595313', 'पंचगणी', '2024-08-10 18:14:56', 443, '2024-08-10 18:14:56.000000', 'India'),
('Mohsin khan', '7742344826', 'Udaipur', '2024-08-10 19:20:30', 444, '2024-08-10 19:20:30.000000', 'India'),
('प्रितम', '+917876256573', 'प्रितम', '2024-08-10 20:02:01', 445, '2024-08-10 20:02:01.000000', 'Afghanistan'),
('Ashik', '+917268836037', 'YOB', '2024-08-10 23:41:33', 446, '2024-08-10 23:41:33.000000', 'Anguilla'),
('Vikas', '9812261465', 'Sirsa', '2024-08-11 00:45:14', 447, '2024-08-11 00:45:14.000000', 'India'),
('Ravi', '8528160025', 'Ghazipur', '2024-08-11 02:23:16', 448, '2024-08-11 02:23:16.000000', 'India'),
('Moharlal yadaw', '7067235867', 'Sarguja', '2024-08-11 02:33:59', 449, '2024-08-11 02:33:59.000000', 'India'),
('Bishanlal', '9799895493', 'Alwar', '2024-08-11 02:55:58', 450, '2024-08-11 02:55:58.000000', 'India'),
('Atul vishwakarma', '9201074284', 'Chhindwara', '2024-08-11 04:26:05', 451, '2024-08-11 04:26:05.000000', 'India'),
('Brijlal kumar', '9341653052', 'Brijlal kumar', '2024-08-11 08:01:24', 452, '2024-08-11 08:01:24.000000', 'Afghanistan'),
('R.Nongrum', '7085364152', 'Shillong', '2024-08-11 09:45:48', 453, '2024-08-11 09:45:48.000000', 'India'),
('Gopal Singh', '+919368453279', 'Bareilly', '2024-08-11 11:54:57', 454, '2024-08-11 11:54:57.000000', 'Afghanistan'),
('MO.BILAL HAFIZ SAFI PATEL PATEL', '8128756486', 'LUNAWADA', '2024-08-11 17:39:45', 455, '2024-08-11 17:39:45.000000', NULL),
('Swayam', '9052223554', 'Hyderabad', '2024-08-20 10:38:05', 456, '2024-08-20 10:38:05.000000', 'India'),
('FAIZ AHMED', '8892261481', 'BANGALORE', '2024-08-22 09:09:14', 457, '2024-08-22 09:09:14.000000', 'India'),
('Zenith charaniya', '7600709850', 'Una', '2024-08-22 10:58:03', 458, '2024-08-22 10:58:03.000000', 'India'),
('FAIZ AHMED', '8892261481', 'BANGALORE', '2024-08-23 09:54:36', 459, '2024-08-23 09:54:36.000000', 'India'),
('Archana Gupta', '6394222817', 'LUCKNOW', '2024-08-24 09:11:57', 460, '2024-08-24 09:11:57.000000', 'India'),
('Satish', '7249673705', 'Jaipur', '2024-08-29 12:21:46', 461, '2024-08-29 12:21:46.000000', 'India'),
('Goutam Dass', '08420190102', 'KOLKATA', '2024-08-29 16:27:32', 462, '2024-08-29 16:27:32.000000', 'India'),
('Goutam Dass', '8420190102', 'Kolkata', '2024-08-30 10:52:16', 463, '2024-08-30 10:52:16.000000', 'India'),
('satish jain', '7249673705', 'Jaipur', '2024-09-03 05:28:03', 464, '2024-09-03 05:28:03.000000', 'India'),
('Faiz Ahmef', '8892261481', 'Bengaluru', '2024-09-06 14:19:48', 465, '2024-09-06 14:19:48.000000', 'Country'),
('Manoj Shukla', '918384002975', 'City*', '2024-09-07 14:23:56', 466, '2024-09-07 14:23:56.000000', 'India'),
('mukesh', '8852698052', 'H', '2024-09-11 13:37:01', 467, '2024-09-11 13:37:01.000000', NULL),
('Manish kumar bansal', '07415541592', 'Korba', '2024-09-12 06:55:26', 468, '2024-09-12 06:55:26.000000', 'India'),
('RAHUL KULKARNI', '7972604723', 'Tuljapur', '2024-09-12 09:55:23', 469, '2024-09-12 09:55:23.000000', 'India'),
('VINOTH KUMAR', '8939206461', 'Chennai', '2024-09-12 10:29:53', 470, '2024-09-12 10:29:53.000000', 'India'),
('Firoj Paigambar Mahajan', '8788313727', 'Pune', '2024-09-12 15:29:59', 471, '2024-09-12 15:29:59.000000', 'India'),
('JITENDRA KUMAR RAY', '9065884942', 'Mahrajganj', '2024-09-13 05:49:12', 472, '2024-09-13 05:49:12.000000', 'India'),
('Kacha Mayur', '7046188074', 'Junagadh', '2024-09-13 08:25:14', 473, '2024-09-13 08:25:14.000000', 'India'),
('Kacha mayur kishorbhai', '70461 88074', 'Junagadh', '2024-09-17 12:00:30', 474, '2024-09-17 12:00:30.000000', 'India'),
('Rahuol Verma', '8717965512', 'Satna', '2024-09-21 15:45:14', 475, '2024-09-21 15:45:14.000000', 'India'),
('Surendra Kumar Sahu', '7525927236', 'Barhni', '2024-09-23 19:23:08', 476, '2024-09-23 19:23:08.000000', 'India'),
('Swapnaja Jog', '9422506717', 'Pune', '2024-10-15 12:04:15', 477, '2024-10-15 12:04:15.000000', 'India'),
('Manish bansal', '74155 41592', 'Jamnipali', '2024-10-15 12:33:26', 478, '2024-10-15 12:33:26.000000', 'India'),
('Aaditya Shrivastava', '8719999978', 'Indore', '2024-10-22 18:02:29', 479, '2024-10-22 18:02:29.000000', 'India'),
('Devansh Gurjar', '9157230464', 'Ahmedabad', '2024-10-23 07:24:57', 480, '2024-10-23 07:24:57.000000', 'India'),
('DINESH NAMDEO SHENDE', '9403730547', 'Nasik', '2024-10-24 09:32:13', 481, '2024-10-24 09:32:13.000000', 'India'),
('jgvir singh', '8460216076', 'Kanour', '2024-10-24 11:48:16', 482, '2024-10-24 11:48:16.000000', 'India'),
('Satish', '7249673705', 'Jaipur', '2024-11-05 05:30:39', 483, '2024-11-05 05:30:39.000000', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_10_185138_create_sessions_table', 1),
(7, '2023_07_27_175326_create_transactions_table', 1),
(8, '2023_07_31_172926_create_asks_table', 1),
(9, '2023_08_03_061234_create_vips_table', 1),
(10, '2023_08_03_062702_create_vipunlocks_table', 1),
(11, '2023_08_04_085114_create_earns_table', 1),
(13, '2023_08_12_123916_create_workdetails_table', 1),
(14, '2023_11_22_160506_create_kycs_table', 1),
(15, '2023_07_24_160329_create_payments_table', 2),
(16, '2023_08_05_083422_create_works_table', 3),
(17, '2023_08_03_061234_create_contacts_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `nominees`
--

CREATE TABLE `nominees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `id_font` varchar(255) NOT NULL DEFAULT 'No',
  `id_back` varchar(255) NOT NULL DEFAULT 'No',
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `postal` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nominees`
--

INSERT INTO `nominees` (`id`, `name`, `email`, `user_id`, `Phone`, `id_font`, `id_back`, `country`, `city`, `address`, `postal`, `file`, `created_at`, `updated_at`) VALUES
(4, 'julhas mondol', 'allii@gmai.com', 8, '1783195999', '', '', 'Bangladesh', 'rangpur', 'Rangpur', '5460', 'https://backend.wimbledoninvestments.com/public/img/profile/44034Screenshot_11.png', '2025-02-17 03:14:41', '2025-05-08 13:32:55'),
(5, 'Hazrat alli', 'Hazratbd80@gmail.com', 157, '1783195999', '', '', 'Bangladesh', 'rangpur', 'Rangpur', '5460', 'https://backend.wimbledoninvestments.com/public/img/profile/503689Screenshot_1.png', '2025-03-19 11:45:45', '2025-03-19 11:45:45'),
(6, 'Syed Khaza Mohiddin', 'ammumlk3@gmail.com', 166, '8105222690', '', '', 'India', 'Chitradurga', 'Monakalmuru, Chitradurga', '577535', 'https://backend.wimbledoninvestments.com/public/img/profile/92570271237ad9-71b1-4627-a373-0007878b3316.jpeg', '2025-05-27 09:45:35', '2025-05-27 09:45:35'),
(7, 'Keerthi karasani', 'kannareddy1912@gmail.com', 175, '9492123916', '', '', 'India', 'Ongole', 'Ongole', '523001', '', '2025-06-26 07:24:29', '2025-06-26 07:24:29');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `method` varchar(255) DEFAULT NULL,
  `wallet_address` varchar(255) DEFAULT NULL,
  `bank_address` varchar(255) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `qr` varchar(255) DEFAULT NULL,
  `holder` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `ifsc` varchar(255) DEFAULT NULL,
  `doc` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `method`, `wallet_address`, `bank_address`, `tag`, `qr`, `holder`, `bank_name`, `ifsc`, `doc`, `created_at`, `updated_at`) VALUES
(7, 1, 'TRON TRC (20)', 'TQb1gaK5YgxWjB69hmLqk5ZiRRvwx4tNsf', NULL, NULL, '', NULL, NULL, NULL, '', '2025-03-19 11:34:56', '2025-03-19 11:34:56'),
(8, 3, 'TRON TRC (20)', 'TQb1gaK5YgxWjB69hmLqk5ZiRRvwx4tNsf', NULL, NULL, '', NULL, NULL, NULL, '', '2025-03-19 11:35:53', '2025-03-19 11:35:53'),
(9, 4, 'TRON TRC (20)', 'TQb1gaK5YgxWjB69hmLqk5ZiRRvwx4tNsf', NULL, NULL, '', NULL, NULL, NULL, '', '2025-03-19 11:36:04', '2025-03-19 11:36:04');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `platforms`
--

CREATE TABLE `platforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `platforms`
--

INSERT INTO `platforms` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'BINANCE', '2025-02-24 17:57:04', '2025-02-24 17:57:04'),
(3, 'TRUST WALLET', '2025-02-24 19:12:57', '2025-02-24 19:12:57'),
(4, 'BYBIT', '2025-02-24 19:13:50', '2025-02-24 19:13:50');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(200) NOT NULL,
  `file` varchar(244) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `file`, `created_at`, `updated_at`) VALUES
(58, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/204979_app_inventor_1747341509891.3gp', '2025-05-15 20:48:54', '2025-05-15'),
(59, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/181115_app_inventor_1747376590097.3gp', '2025-05-16 06:26:41', '2025-05-16'),
(60, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/359150_app_inventor_1747380226650.3gp', '2025-05-16 07:26:18', '2025-05-16'),
(61, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/183573_app_inventor_1747380452160.3gp', '2025-05-16 07:36:05', '2025-05-16'),
(62, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/779620_app_inventor_1747381158934.3gp', '2025-05-16 07:53:01', '2025-05-16'),
(63, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/260793_app_inventor_1747382191926.3gp', '2025-05-16 08:04:26', '2025-05-16'),
(64, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/358993_app_inventor_1747382654018.3gp', '2025-05-16 08:09:07', '2025-05-16'),
(65, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/496946_app_inventor_1747382935681.3gp', '2025-05-16 08:13:37', '2025-05-16'),
(66, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/955972_app_inventor_1747383209102.3gp', '2025-05-16 08:26:19', '2025-05-16'),
(67, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/516609_app_inventor_1747388613523.3gp', '2025-05-16 09:44:23', '2025-05-16'),
(68, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/712604_app_inventor_1747389073835.3gp', '2025-05-16 09:52:11', '2025-05-16'),
(69, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/204000_app_inventor_1747389135819.3gp', '2025-05-16 09:52:26', '2025-05-16'),
(70, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/617335_app_inventor_1747390910564.3gp', '2025-05-16 10:22:48', '2025-05-16'),
(71, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/471601_app_inventor_1747390972454.3gp', '2025-05-16 10:22:48', '2025-05-16'),
(72, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/447659_app_inventor_1747390982076.3gp', '2025-05-16 10:23:37', '2025-05-16'),
(73, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/296958_app_inventor_1747391044280.3gp', '2025-05-16 10:23:38', '2025-05-16'),
(74, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/738975_app_inventor_1748087821088.3gp', '2025-05-24 11:59:11', '2025-05-24'),
(75, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/619776_app_inventor_1748087852725.3gp', '2025-05-24 12:00:38', '2025-05-24'),
(76, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/680520_app_inventor_1748087997720.3gp', '2025-05-24 12:06:27', '2025-05-24'),
(77, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/991717_app_inventor_1748088275350.3gp', '2025-05-24 12:13:57', '2025-05-24'),
(78, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/806337_app_inventor_1748088724489.3gp', '2025-05-24 12:15:01', '2025-05-24'),
(79, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/118673_app_inventor_1748088790842.3gp', '2025-05-24 12:20:42', '2025-05-24'),
(80, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/959774_app_inventor_1748089129795.3gp', '2025-05-24 12:23:30', '2025-05-24'),
(81, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/865526_app_inventor_1748089296485.3gp', '2025-05-24 12:42:46', '2025-05-24'),
(82, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/535056_app_inventor_1748090452194.3gp', '2025-05-24 13:07:30', '2025-05-24'),
(83, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/879559_app_inventor_1748091935246.3gp', '2025-05-24 13:30:44', '2025-05-24'),
(84, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/275085_app_inventor_1748093330344.3gp', '2025-05-24 14:10:24', '2025-05-24'),
(85, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/111889_app_inventor_1748095708998.3gp', '2025-05-24 14:48:51', '2025-05-24'),
(86, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/524188_app_inventor_1748098015067.3gp', '2025-05-24 15:36:25', '2025-05-24'),
(87, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/560419_app_inventor_1748100868974.3gp', '2025-05-24 16:33:21', '2025-05-24'),
(88, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/704968_app_inventor_1748104284609.3gp', '2025-05-24 17:08:51', '2025-05-24'),
(89, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/117667_app_inventor_1748106415435.3gp', '2025-05-24 19:25:41', '2025-05-24'),
(90, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/497249_app_inventor_1748114624860.3gp', '2025-05-24 22:24:14', '2025-05-24'),
(91, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/979254_app_inventor_1748125336263.3gp', '2025-05-25 08:00:55', '2025-05-25'),
(92, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/742274_app_inventor_1748159929318.3gp', '2025-05-25 11:36:39', '2025-05-25'),
(93, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/124701_app_inventor_1748172878845.3gp', '2025-05-25 13:06:48', '2025-05-25'),
(94, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/215952_app_inventor_1748178290586.3gp', '2025-05-25 15:59:27', '2025-05-25'),
(95, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/598069_app_inventor_1748188649433.3gp', '2025-05-25 18:05:53', '2025-05-25'),
(96, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/795141_app_inventor_1748196237638.3gp', '2025-05-25 23:18:02', '2025-05-25'),
(97, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/519608_app_inventor_1748214961081.3gp', '2025-05-26 10:12:57', '2025-05-26'),
(98, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/642478_app_inventor_1748254248295.3gp', '2025-05-26 11:51:24', '2025-05-26'),
(99, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/807920_app_inventor_1748260167215.3gp', '2025-05-26 11:52:28', '2025-05-26'),
(100, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/248548_app_inventor_1748260234354.3gp', '2025-05-26 11:57:33', '2025-05-26'),
(101, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/483539_app_inventor_1748260537672.3gp', '2025-05-26 12:04:54', '2025-05-26'),
(102, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/445189_app_inventor_1748260981981.3gp', '2025-05-26 12:14:40', '2025-05-26'),
(103, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/320109_app_inventor_1748261563707.3gp', '2025-05-26 12:25:11', '2025-05-26'),
(104, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/814143_app_inventor_1748262195520.3gp', '2025-05-26 18:01:48', '2025-05-26'),
(105, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/904197_app_inventor_1748345152745.3gp', '2025-05-27 11:27:03', '2025-05-27'),
(106, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/920357_app_inventor_1748418046422.3gp', '2025-05-28 08:36:46', '2025-05-28'),
(107, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/340362_app_inventor_1748421341684.3gp', '2025-05-28 11:35:55', '2025-05-28'),
(108, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/417598_app_inventor_1748432051312.3gp', '2025-05-28 12:11:23', '2025-05-28'),
(109, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/981988_app_inventor_1748443908499.3gp', '2025-05-28 18:49:35', '2025-05-28'),
(110, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/752233_app_inventor_1748458071981.3gp', '2025-05-28 21:03:34', '2025-05-28'),
(111, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/604345_app_inventor_1748466112848.3gp', '2025-05-29 06:24:38', '2025-05-29'),
(112, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/456382_app_inventor_1748867192956.3gp', '2025-06-02 12:30:58', '2025-06-02'),
(113, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/998010_app_inventor_1748906425217.3gp', '2025-06-02 23:21:51', '2025-06-02'),
(114, 'https://backend.wimbledoninvestments.com/api/auth/record-status-update/297966_app_inventor_1749644471526.3gp', '2025-06-11 12:22:58', '2025-06-11');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('07GkthudhBCuPlP81k1qhmFnQsJXNce6XR1EezXm', NULL, '2a02:4780:11:c0de::e', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiQXBQWjI0OHE3T1RVcTVET1J3dFdjaXVCSkdUWHViV1BnZTlTZFBTQiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1751162379),
('3ae6xj1lXO67hQZO3rmlYwyOmw6fOz5Jq50Nx93A', NULL, '188.166.246.136', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4859.172 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV3A2VUVCbjhwM2FYRHI3WUdscW9MelB0TVlRblJJYXhlMEpndE1haSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vYmFja2VuZC53aW1ibGVkb25pbnZlc3RtZW50cy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749429340),
('5NY45iPDqIQ7krNm14dTYh2DGzDgGfuJr3bQygIF', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiaGcxa2w2WVdTTzRZc0R1d0NiUUV5N2Y0SWtSZDUzVE9FMmZ3S1hBdSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750637418),
('5OsxQJI7WamewJEPz2cSSQxrXpgTIY0ISFZkyIWW', NULL, '2a02:4780:11:c0de::e', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiNkFibWlHVFhEcFdaMVhXMTc1Q09CVHVIR3JKZTRZaFlySWNtdUNkeSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749619019),
('7zz8beELocPQOM9vhWCpkpnfV5n4NksretvTwufg', NULL, '2a02:4780:11:c0de::e', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoicGFSZkpTak9jMXY0ZFJVQmZLNm9wVEpiUVJPdWM2MXB1NFRGM3oyWCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750388735),
('8aPzbuCHQ21S9L4pgj5Ipj4pB2TP7jkB0xpt6IuS', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiUndXdTMzNkcxZm1OT0xFR0MwVWRpbWZ1ZUFUS20zaFg5VHE5SDd0bSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750986709),
('8lQ4NhoFXaEurnqzGFSvJTZhWqXKrMXgGS6Thv9B', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiV0JBNnRKMERTY0xPQW5YSGR1bWRvYUtuZkxPVlpMdXdiQ0M3ZGRsYiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750310833),
('8pYhpcq2MmKNVdcB2P7as446iTpBpE4VNr4LD9wa', NULL, '2a02:4780:11:c0de::e', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiOVR1b0VpTTFWZHNKUEkzdEFnczNYNDRVNGZtOGJXbUl3amNxWlNGdCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749476249),
('8Rs1BcWytdtepyjAe0bpCLs7oY3be1J8tE0NW2lZ', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoic2MwYUp2OEJnVGpuN1M1cUoweFhVNGNvWHdwZXBhaW01VDVnV1dObyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1748874102),
('A1DLHmr2QM8dMScvOPHFOE64ZKH1sL1nAQ7aUusf', NULL, '20.171.207.93', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; GPTBot/1.2; +https://openai.com/gptbot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoialFqY3R2VTBhNU5FV2IzdnE3SlExeU1uZEVuU1Nva2lNaWp1M2JMeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vYmFja2VuZC53aW1ibGVkb25pbnZlc3RtZW50cy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749784573),
('aBqu4sBzg1YrhxCJk58QBLpvkO9nQBP7BMCn6PRK', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiWFRkRVl0ZTFvalNBMWVVVWdyTFhnaUlNcU83dHl2WGVKV0c0bUR2VyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749612667),
('aVgvWJ4TRXurUmVwYbJYJua1N5DpaeR5HRa3a9kN', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoidGN1YXRDdjlVT0hNYkJsSHZIOGdRNlgzZUI2Wk0yeElyZW9MOHNZYyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749299849),
('bL5qaQkDoekfe5aiERG3uiQUc7uDVriKTS7swJuP', NULL, '3.248.254.148', 'Mozilla/5.0 (compatible; NetcraftSurveyAgent/1.0; +info@netcraft.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid0hFMm85TDRDTHUwUHd0QlpEU09vejd0alBCNGRFS1V6a1g1QldsSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vYmFja2VuZC53aW1ibGVkb25pbnZlc3RtZW50cy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749308537),
('boClvHGZ4nulyE2kJFWX3jiDBWbYHWDkJQjKsjRO', NULL, '150.40.242.182', 'Mozilla/5.0 (Windows NT 6.1; WOW64; iPhone) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.4567.82 Safari/537.36 HuaweiCrawler', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWGtDZmlIUDlzbGxkMER0WnVRVHNVWXlkNExRY1NkamQ3bWxrdnJKNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vYmFja2VuZC53aW1ibGVkb25pbnZlc3RtZW50cy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1748937473),
('BZjmwzEf7JLroEoPud1djv4aMEQN65I7ASoHz0qe', NULL, '46.17.174.172', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:98.0) Gecko/20100101 Firefox/98.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNE9UMGt5clhWR0hhajV6aVVMNFdnU1laU0pTOTdQaDNtR21EU1FNdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vYmFja2VuZC53aW1ibGVkb25pbnZlc3RtZW50cy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749034530),
('CDlDpdYz5uIia291mNoWTlUXYQxscCdg84ZyvKEZ', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiclBUZmkxcEJDNlI1VDY4U0d0OG9aaDdRdHh4TlY0MmV5ZE16Nm55dCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749893931),
('CiN6LjzsVMy7717mZfn0OBQJrNIgcLJdLtDvXxjS', NULL, '2a02:4780:11:c0de::e', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiQ3ZRQVdFZ0R4Rm9iOVVtQkppbDV2eHF6RkZlaDFiQ2J6UXFiVkMzRCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750742899),
('cZKBSgMZXVTj6Eojk1F0wHfpmTLu3PrHI9HS8iO0', NULL, '2a02:4780:11:c0de::e', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiMEdVOTZMTHBJeUdoYkU3ZjB2ZmpXTDl2MGxpMklSdUE4bjlDS1lxYSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749868720),
('DaBHiJMNJ2rOyKwb7S46kABjebz1co44q2bP5EG4', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiSEluWjZ4T25SRVg5bG5oOURwWGFkc2N3bXJNWnNSdUtSQndrR1locyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1748697362),
('ElPQG7kooqEy1nA7xieHDZsMp45XfN0tixvLusak', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiQkFqMFkyb21HMFplQ04yajNlODVHRU00UEJybmFXUDdTYlZiQ3laNyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1748761142),
('Et6uIuxvmypMgK9JjXe8cOgHHXBghTrdVcaV0295', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiTG1YVTJ5VWZKdzllVDhydVJnWVQ0Y3hQdXRKVzNmNlJOTDQwRHJLbCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1748350633),
('FLPpud0ESfSYfHPcfzXF3BttO3aCzt6ZkDO5BlVe', NULL, '2a02:4780:11:c0de::e', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiSUVqRnlRdmxnNElPc0xWb2R1OFdoaGJzUmtjMnhDcXZjaUpyd0k5OSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750238217),
('FTOXrrWKgxeDg8sYkrF4PxBUgU4VY4oU72NND5w0', NULL, '2a02:4780:11:c0de::e', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiaDlwN2gxSmpSdGdGR3k1TnA3ZFFxMHJPZVNSeEdtaXF3MWVETlozbyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750908967),
('fyw9lSF31UsVUTebjy5mhxw7Mhwxz2eDqsbQIf6i', NULL, '2a02:4780:11:c0de::e', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiNXBMS0NaVExHd0x2UzJLbXpmRkVQOHNPYkFET3EzTzV1a0hzM2NZeSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749784384),
('GC0iu3mC48sMUy7CcXREfMX6UFy340ByPw6QRzlq', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoibGEyZUYyM1E1Zlh6aWE4aVlyTXN6QnBKemk1R0NOSDRWaGxDd3pnSCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749791361),
('gg3eG0d0fXwV8IyRRDrO05oqfLLqqbDzj3m4iP0t', NULL, '2a02:4780:11:c0de::e', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiOFhBbUJ4RmU3dzdsVjFWREJyQm01dGhzWG53TlZKdzBxbVBGQ0FFNSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750813261),
('gICXxCPsBGG0nABBIAqT4Hh2UoJhjht4pWoPtfDT', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiUUF3NWtBVGRvSExxYk9XTjR0aTA3dVBWdFhTQldnMU5GYVFvYUd4eCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750915666),
('gV86M6J37CxIAPQAdBxm8pet1LQ8xdqQ8Pe5jh1q', NULL, '13.36.37.195', 'Mozilla/5.0 (Linux; Android 7.0; SM-G892A Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/60.0.3112.107 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTlFYOEZaZHRqWHRvZE9wcHhxdHBFa3RQZGxuUDJDMk9kUVg3c2s3ZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vYmFja2VuZC53aW1ibGVkb25pbnZlc3RtZW50cy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1750300237),
('gWkyJ61JdeXUG8EXULmwl23PNVfgArCJiqYYzEvY', NULL, '2a02:4780:11:c0de::e', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiRkVjWU5wNW1PUFpkZ3NlZ0x4aEZuSG5mN1V4RjBGZGdJYVlla3pzRyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750486567),
('H7ogSrEwbUHa5hYGwzsDFy4BQxe0HrzytQo4JCn3', NULL, '2a02:4780:11:c0de::e', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiN1VSMmR2TlNlenNrdU5abkVDeTMzcHc0eTloa0JHaHJIeVlLYnJrWSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749385903),
('HghtbJsVbPLBdvrkWgfR7TBjsb4XEIoTKK8fPQRl', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiVDI0RmlhRTJCZ2dtT1daV1NEZGdaZXc0NTVkcWE1c1p6ZUg5Wlh2bCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750723435),
('hY2qhhJBmeWtX4JPWGtNaUDgdDjHuhEEkUswIsWf', NULL, '159.203.37.83', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVUdlUVNxSUhlMExCc2k3NzREVEpWdVBZM3ZqYllsRWxLbFlqSWNTYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vYmFja2VuZC53aW1ibGVkb25pbnZlc3RtZW50cy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749815558),
('IDmkSF81RhQg1kX1CxdJXdCPebSKYnWqV5J7nmZo', NULL, '46.17.174.172', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:98.0) Gecko/20100101 Firefox/98.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic29yTEhERzBMYUVLRzdoekpwN3JZSnE2UEttTGw0MHVqNG5xcUdocCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vYmFja2VuZC53aW1ibGVkb25pbnZlc3RtZW50cy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1748322377),
('iMBmnYIQsJIDoCVsiv8P98qXN4Hasz8daiknIRzA', NULL, '2a0b:4142:d08::2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36 Edg/135.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNkVveG9Menp4MG1YeGpQSW16VEc5VDBpQXBuQjVQQVZUNldXMElUdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vYmFja2VuZC53aW1ibGVkb25pbnZlc3RtZW50cy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1750191175),
('IzcTHY9UqVDsITNqVqaLkJ2y6LKq2tisefEtGF0w', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiZkxwNXNKVTVMa1pGYXNYWWdjUU1OeTFERFhrbnNHcmI0SHNPa29jYiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749115260),
('j8wZK6ylix1TTwO6fVNmwPHqyA2YtkLlRjG9iTo4', NULL, '178.62.71.202', 'Mozilla/5.0 (X11; Linux x86_64; rv:136.0) Gecko/20100101 Firefox/136.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib3ZEVWw1ZEU1czhvUUJKZFZuTGN3NnVGd2NkdWsyQlZqZUpWWW9xOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vYmFja2VuZC53aW1ibGVkb25pbnZlc3RtZW50cy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1748611117),
('JhF8tqlqcBvzWNybdDT1QaivazwmAli7Ak3gNzzd', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiaUEzcG9nckluYWt1WFR1MDYxMFp3SHVBZlVYakc2RmRpM3JyWnYwSCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750597968),
('kbNzZLxBI3Kc7tfxboqSMhEGBcHDypF5LNi90SrZ', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiclJIOFJYVlpHY3JnVEhzVmx1dEJIOTgwM01yVkJlUEY3RVFWQzI1NiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1748403809),
('kCLZKyRza4vULO1rzMxds5lye6ug8OvGYKxNNu4P', NULL, '194.233.72.214', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieEdDWGRERUJHRVV1UENPMXJESVNYNG9tNk1jTzQzb2w1S1ZSS0pTMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vYmFja2VuZC53aW1ibGVkb25pbnZlc3RtZW50cy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1750819180),
('KjhPkDol6G1SqBinja7fZWxoILk0wTql3rYFTJ3O', NULL, '35.94.160.251', 'Mozilla/5.0 (compatible; wpbot/1.3; +https://forms.gle/ajBaxygz9jSR8p8G9)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ0NGTkZ6aGxWSFY3UUNGNllHYU9tOTAwMW56cURQTExDUnZneEZBRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vYmFja2VuZC53aW1ibGVkb25pbnZlc3RtZW50cy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749674179),
('Kji1zPmYpiiTK0RN2zggYCJZuiIIbMPehnTErqKU', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiTzRweHdlUnZ2bWw3QkJFcW5PMDVQSVZtaG15cG9hcUJtZ0kxUDE3aiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750072038),
('KS8IdWzGOiVee78ANwnchsz9JIZ8SwRY7nHSQ3Ej', NULL, '2a02:4780:11:c0de::e', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiWVBHR3BiYVRNS3pPbWhLRVBDSTc2dHhmOU5VZTR5aExNckEzNDZVWiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749324038),
('kwxSEEWYXMC2SfLggOSxlXpfQwiq2n0xQGYV3QQh', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiYUhIcm9sekdYUjk5N01MYlBwQmNqVE9pVWdrdmd0SkJPekZVcnBUVCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1748943890),
('m5O2oTh2eCPQ8826PzeaVBOFjA3cvZo8FidILNp3', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoickV5WWk4ZU9Wbk5kaUdXOEVBcFVDcU9ndnVCMzBZYTA2VkttNlRUTSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1748998779),
('mCMuqZSORmsdPfwwxJQwn7qpipIc5LnZt25uztzh', NULL, '2a02:4780:11:c0de::e', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiVjhYakxsZFFrbHlLOHJzbXVjaVhFNU0zbm03TU5odEd0MFExSWNSZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750335235),
('MkQhjogbcUCBogWc0kJ9WlfVxNYcmPF5vDa9VAWt', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiSFFERk5ualBLcExGWkJmbXByR3lQVHpRR1llNVY1MFh6UE9QNndKaSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1748500540),
('NDZu6uUh5FKLZ8iEfHK7BLkGCv1JZ1F2mPHAz6BZ', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiYlJ3UVMzZk5vU1JKbFlBZnNpMkZOVEdjSGI0NFNnSGgySDBmZmp2dSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749393114),
('NK46Wk5r3zzeZeqaHLTUjM1vKqs9IkUr8zBtsF0z', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiR3J4Q3U5QnM1OFBiRWp5QzdoUFR1dG9wekRpaGVRWXVreExJdHhTcCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750205801),
('OczFm2Xgz4o895qPqPzvmxEPKnITe3Yq8y7gR0sd', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiaVJZb3c1bDBmUXFkS0JiSGwxeWZZbDQ4WVdmOWxmYk1acDlRcEdUaiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1751171356),
('OxGS4pIcTdIp02jJJiund0ZLHFOhPUkbo45Jiwut', NULL, '146.190.79.47', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRFFkRGdTWG41d2pHeFFYQnFnRFA2Uzc0MGxCS3RxOHIweHB6UWM3NyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vYmFja2VuZC53aW1ibGVkb25pbnZlc3RtZW50cy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1748225756),
('oXzURN1DyZxds2R84aUCnE9iXVXzKvTLsxeRrs4A', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiS3B2NERqRnRTYWV0VWtrcTVtTTgxYzJWalJXalVUQWdmbTh4WFNrQiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1748589639),
('pbsA9kKwouWvuS4dgjxN5bodw8sc1GLcZBU7qqGe', NULL, '37.111.238.48', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWUxIU1dhTjRGb24yemRHNFFHZENNTVZGekNaRTVEajFDU2ZYZENNTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vYmFja2VuZC53aW1ibGVkb25pbnZlc3RtZW50cy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1751021602),
('piwOs4Y1MURVXGomyLRfLdpE2u76jg77Yuy6OB5U', NULL, '2a02:4780:11:c0de::e', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiTjQyb2ZUOVdXQ1VRbkxWdlFnVXdzTk16cGNxNXJEVDlydzMwOGlocyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750064601),
('PlHo8IQ5yyd80AUJXBu7AhtUn1xBn3ozGCeuwYlI', NULL, '2a02:4780:11:c0de::e', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiQVFqOURmQnljc05xckRYWmcydkNYdWFqcXhOcVJVZzNHekVDOGlYcCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1751032504),
('pnmyGZjAF65CoeKoP8qlBw4CrTwoFr90EvGrzebp', NULL, '2a02:4780:11:c0de::e', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoid3NpZUQ2YWlFWXIzZjRKa0xQMUVwR0M1WEVldEJtdHJFdmo4amp3bSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750605607),
('QIiJpsO0vBufULYBKFfLwGOdMILxuJpdp1feXDZn', NULL, '54.220.168.212', 'Mozilla/5.0 (compatible; NetcraftSurveyAgent/1.0; +info@netcraft.com)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicVJybHY3RHNEZnhlenZSVmt3d0N1eDczbTJHOGhWWWd3VUxNRGs5YSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vYmFja2VuZC53aW1ibGVkb25pbnZlc3RtZW50cy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1748781101),
('QS4jPeu2OIF9N4bodr9hbYLTWnftk1HipjBaUQlL', NULL, '2a02:4780:11:c0de::e', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiVWhLbHpLdVRhNTFnelp0VDloWEN3MFBpY25aNmk3OFpnMlJPalowbSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1751119809),
('QYMV4nun2y6F7RBQgcCxhfOjLsJZ4dAdagZEi6d5', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiSHhUVUF6VWdlMkJPbFc0YXExUlR4U3VWVmJmaUxiWXZlQm1zUVI1eiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749521966),
('QZx4Ohgs4NsCvH1PloqZZFikvcLqidPhFPQXIrJ3', NULL, '209.38.31.133', 'curl/7.88.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiODFLV1FrVFdhY25MWmJmWXoxb2NxYkRIakZuVkdUNnlKVkNmUlgyeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vYmFja2VuZC53aW1ibGVkb25pbnZlc3RtZW50cy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1750555022),
('Sd0b3VHKbSmGsQAMsMmpzgCYgNvgB1TjpYEOV2CF', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoidFlXNnBYVFM5dFo3MzVjUk9Nd1hxWjRqSnBSZXVwM0hjaDdvNWJraCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1751080281),
('sV4XWh3jM1Gjpd9kjz5HmIaR0bz0xAtZQnjH79h5', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiNUt4T0czVUtLY1dyTVdDekJYWnI0MGp4OUgwUmpPempPbDljdGpLZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749718028),
('TdGTJDEP6k2aJAnBdJRtXF7k9ax1YZjuCdFZaDdo', NULL, '49.0.237.214', 'Java/1.8.0_322', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiUmt4dUFtcHZCNFZWMFdPUVBWVk9hbmxoQVppdG45Tkdyend1Zjg2aSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1748937472),
('tJSYy36c1FeijwN0Ur4WLeL3DvdYci4efQgsMYQ3', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiUGNpYnZKdVRaYmU1SzFnOEthVFVtaE5ubzdDWVZiU3ZFZ0ZNVHV5TSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750468062),
('TlXPc1GzMgqeeOzJmCo0tx3GjJVdK2np84zRxAMF', NULL, '209.38.31.133', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4859.172 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY3g4N0g2Y2l2WFZaVnMwQXJzbmdMQzZsMzFXbXZ4RmxLWDRPWXR0eiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vYmFja2VuZC53aW1ibGVkb25pbnZlc3RtZW50cy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1750554913),
('u6X6ovQBbpOTRFYj9dnrYdQvdpTJMOLz7XQtzBHl', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiczBWZVpIS0diT1FhR0JWT2NIdzVaVURnUDF2VHJPNGUwdWxFeThNUSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749173666),
('uiOeBKZLKrNWbQkOW7rS0CfzE99X2QAtNQ2Wv1Ok', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiWlZDVjJCMldpekxTbFBhVzNCdU51MG5BTVBSVnV5b2U3bTdPMGFrdCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750412897),
('VaBjNtXpywB6f6RD3fw34m8zbbyuFOBXcqG72kkV', NULL, '194.233.72.214', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.129 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYlJNSXd3bEVxYlNzbFlFWXdFZGhFVUc0aHZhdmxSY2lUMXNmdFB5ZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHBzOi8vYmFja2VuZC53aW1ibGVkb25pbnZlc3RtZW50cy5jb20vP3BocGluZm89MSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1750819220),
('VEHJVMV4hRbNNhux63D8FWAFs162zLxJfEOK0uUL', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiVjRlOXZ2ckNrUXZnVThUeWx6WVVtUXF1QVpVZGRLQUppNjZmb1lOdCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749462535),
('vl5li9o77Iqzr0pjjtDWjVi2hEQBRxOHaQ0thRjZ', NULL, '2a02:4780:11:c0de::e', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoicHUwOVpaSTJUT1lscUZVRTFQMmxIblF6enJCMlVLcTFPc2dsZGtzdSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749729014),
('VW6UZRTDTjXOsEO1cchXJlzyEYzvH48PbyuJCngV', NULL, '2a02:4780:11:c0de::e', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiVFNub1VXOHBEWHZOcHlTd0FnajU5MEJlQnVkUlJidGNCcGNSY2ZxQSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750679132),
('VXTUv5x1hjP7t7MEca6PEioO5xHpUTcv3jcTltYZ', NULL, '188.166.246.136', 'curl/7.88.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZENiOUY1eXl6U1pKUThQTE52YVZ2dFVTVXRTWnpPYW5KREtENnJINCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vYmFja2VuZC53aW1ibGVkb25pbnZlc3RtZW50cy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749429437),
('We5d7qjypkUj2dolxQk0g0IvTryzLWUAvsvRvWiT', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiTWZFb3ZjbTlwUlJRVU9FdUdDcFZJMmJEZGd4RHFLOFFyUXpNRzNtMiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750824590),
('wMeNyWWP9DeDEZPC8hNV4nb66Qr877S1vuSzK0Fb', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiWkNQc2drTmpqTkQ4aTB1eXZNZVpZUzR2WEFRTjlWQmFzWTc5MXhJSyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750128969),
('WRdIGsIDDo6jK5VNSZMs8CpamxMFLON06awGwgLy', NULL, '2a02:4780:11:c0de::e', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiUno2UXV3WTV1dXhva2o0UVhhNWxSUGdqMmw0S0wyckdRbTlKeTN6biI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749547149),
('XFJ6xCZCN4NKa5HbpzLARBfDKasTTbpbjihZ6jTs', NULL, '165.232.185.203', 'Mozilla/5.0 (X11; Linux x86_64; rv:137.0) Gecko/20100101 Firefox/137.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTURDS0xSVjRESFdSbkdFSzVrdDNaNnVQVXI2RGszQXJOcjMzcVhYeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vYmFja2VuZC53aW1ibGVkb25pbnZlc3RtZW50cy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1751015636),
('XmVOccmvRfRiONZDHu5I23pdBrAfhZU6P6qDQA71', NULL, '2a02:4780:11:c0de::e', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiQlYwU295TmNncmM1Z2x3eWFPOXVOdlp3Wld2TXJaYWI0R2J3N1RnNyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750168622),
('xq96IQZ5KHaG12PeyYJykvxT0fcWXqw9UY29NchC', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiRTVtMG1qdWdGTEdzWVZ2ZjROSDM0RjJBbkpXS2R1aFhEd1hqdVgwZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1750000971),
('YCQHIdKkpVMoPe7B9yCBohtpVyToQpkgB7tpmPet', NULL, '161.35.156.82', 'Mozilla/5.0 (X11; Linux x86_64; rv:136.0) Gecko/20100101 Firefox/136.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaHlVOG1vbG9CNVNqeExZVzJ6WXRyeUtQVzZuZUtuNFppVFFLRVo4WCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vYmFja2VuZC53aW1ibGVkb25pbnZlc3RtZW50cy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1748393424),
('YFIODhzu7Pkhj6sPrjE4Ru5lj9ouTAGlSwJkdy1k', NULL, '2a02:4780:11:c0de::e', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiODVJa2tDaHZVQ2pSWlMybUNSZW8xTWVqRHkzMDlFRjlwVVZpSDVnUiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1749984813),
('YnGUEySIrvJegYj8Scfheixdth2OUuhvTOG9T5p8', NULL, '46.17.174.172', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:98.0) Gecko/20100101 Firefox/98.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaEU1MDJwaGlXVW9FdHJ3S2xUR0k1R3dvRHBPM0h3bE55TmVpU1BaYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vYmFja2VuZC53aW1ibGVkb25pbnZlc3RtZW50cy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1750667683),
('ZFFIkVoIThUQZsXu3WKgesBUhFWthjnrixFDDyBs', NULL, '2a02:4780:11:c0de::21', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiZ0k3QndERmhpY0U4SmZVTHh1WXdSVTJsaXR4Z3ZZdmtrdlVmM0hoUSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1748252656);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `method` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `trx_id` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `method`, `type`, `status`, `amount`, `address`, `trx_id`, `created_at`, `updated_at`) VALUES
(114, 9, 'btc', 'deposit', 'rejected', 100000000, 'Wallet', NULL, '2024-03-22 10:35:10', '2024-04-19 06:08:44'),
(115, 22, 'btc', 'deposit', 'success', 108, 'Wallet', NULL, '2024-04-26 06:53:15', '2024-05-01 05:57:39'),
(116, 23, 'Bit Pay', 'deposit', 'success', 449, 'Wallet', NULL, '2024-04-29 10:20:30', '2024-04-29 11:52:57'),
(117, 22, 'Bit Pay', 'withdraw', 'rejected', 108, 'Wallet', NULL, '2024-05-01 06:00:09', '2024-05-01 08:08:33'),
(118, 22, 'Bit Pay', 'deposit', 'success', 540, 'Wallet', NULL, '2024-05-01 08:08:52', '2024-05-01 08:08:52'),
(119, 23, 'btc', 'deposit', 'success', 4800, 'Wallet', NULL, '2024-05-07 07:36:37', '2024-05-07 07:36:37'),
(120, 22, 'btc', 'deposit', 'success', 561, 'Wallet', NULL, '2024-05-14 06:23:39', '2024-05-14 06:23:39'),
(121, 22, 'btc', 'deposit', 'success', 540, 'Wallet', NULL, '2024-05-14 06:23:55', '2024-05-14 06:23:55'),
(122, 26, 'Bit Pay', 'deposit', 'rejected', 10, 'Wallet', NULL, '2024-05-14 07:51:38', '2024-07-02 07:31:57'),
(123, 23, 'Trust Wallet', 'withdraw', 'rejected', 5249, 'Wallet', NULL, '2024-05-22 07:24:45', '2024-07-02 07:31:56'),
(124, 22, 'btc', 'deposit', 'success', 1142, 'Wallet', NULL, '2024-06-01 05:53:10', '2024-06-01 05:53:10'),
(125, 22, 'Bit Pay', 'withdraw', 'rejected', 2891, 'Wallet', NULL, '2024-06-03 06:31:50', '2024-07-02 07:31:54'),
(126, 28, 'btc', 'deposit', 'rejected', 10, 'Live', NULL, '2024-06-25 10:41:04', '2024-07-02 07:31:53'),
(130, 39, 'ltc', 'deposit', 'rejected', 10, 'Live', NULL, '2024-07-10 13:45:21', '2024-08-24 04:58:49'),
(131, 39, 'ltc', 'deposit', 'rejected', 10, 'Live', NULL, '2024-07-10 13:49:46', '2024-08-24 04:58:48'),
(132, 39, 'Trust Wallet', 'deposit', 'rejected', 20, 'Live', NULL, '2024-07-10 13:52:30', '2024-08-24 04:58:46'),
(133, 40, 'bnb', 'deposit', 'rejected', 5059, 'Wallet', NULL, '2024-07-11 07:46:04', '2024-08-24 04:58:14'),
(135, 43, 'btc', 'deposit', 'rejected', 1500, 'Live', NULL, '2024-07-15 09:09:26', '2024-08-24 04:58:03'),
(139, 48, 'Trust Wallet', 'deposit', 'success', 7500, 'Wallet', NULL, '2024-07-19 11:50:03', '2024-07-19 11:58:37'),
(144, 52, 'btc', 'deposit', 'pending', 1000, 'Wallet', NULL, '2024-07-22 16:25:19', '2024-07-22 16:25:19'),
(148, 55, 'Trust Wallet', 'deposit', 'success', 213, 'Wallet', NULL, '2024-07-27 08:08:49', '2024-07-27 08:22:57'),
(149, 48, 'ltc', 'deposit', 'success', 3500, 'Wallet', NULL, '2024-07-27 08:36:15', '2024-07-27 08:37:19'),
(152, 8, 'bnb', 'deposit', 'success', 20, 'Wallet', NULL, '2024-07-31 06:09:20', '2024-07-31 06:09:20'),
(153, 61, 'bnb', 'deposit', 'rejected', 10, 'Wallet', NULL, '2024-08-02 08:29:44', '2024-08-24 04:59:58'),
(154, 61, 'bnb', 'deposit', 'rejected', 25, 'Live', NULL, '2024-08-02 08:31:34', '2024-08-24 05:00:11'),
(156, 55, 'Trust Wallet', 'deposit', 'success', 861, 'Wallet', NULL, '2024-08-03 05:41:08', '2024-08-03 05:41:08'),
(159, 68, 'Bit Pay', 'deposit', 'pending', 500, 'Live', NULL, '2024-08-09 01:14:14', '2024-08-09 01:14:14'),
(160, 74, 'Trust Wallet', 'deposit', 'pending', 1500, 'Wallet', NULL, '2024-08-12 09:13:54', '2024-08-12 09:13:54'),
(168, 77, 'Trust Wallet', 'deposit', 'success', 212, 'Wallet', NULL, '2024-08-21 10:35:51', '2024-08-21 10:35:51'),
(170, 77, 'Trust Wallet', 'deposit', 'success', 512, 'Wallet', NULL, '2024-08-22 06:46:29', '2024-08-22 06:46:29'),
(171, 77, 'Trust Wallet', 'deposit', 'success', 17, 'Wallet', NULL, '2024-08-22 08:34:12', '2024-08-22 08:34:12'),
(172, 77, 'bnb', 'deposit', 'success', 316, 'Wallet', NULL, '2024-08-23 04:57:52', '2024-08-23 04:57:52'),
(173, 81, 'btc', 'deposit', 'rejected', 1, 'Wallet', NULL, '2024-08-29 16:26:36', '2024-09-03 12:29:24'),
(174, 58, 'Trust Wallet', 'deposit', 'pending', 1000, 'Live', NULL, '2024-08-30 04:50:13', '2024-08-30 04:50:13'),
(175, 81, 'btc', 'deposit', 'rejected', 10, 'Live', NULL, '2024-08-30 09:04:32', '2024-09-03 12:29:29'),
(176, 84, 'Trust Wallet', 'deposit', 'pending', 100, 'Wallet', NULL, '2024-09-02 14:01:42', '2024-09-02 14:01:42'),
(177, 81, 'bnb', 'deposit', 'rejected', 10, 'Wallet', NULL, '2024-09-03 09:00:40', '2024-09-03 12:29:32'),
(178, 81, 'Trust Wallet', 'deposit', 'rejected', 10, 'Wallet', NULL, '2024-09-03 09:10:00', '2024-09-03 12:29:19'),
(179, 77, 'bnb', 'deposit', 'success', 2599, 'Wallet', NULL, '2024-09-03 12:28:34', '2024-09-03 12:28:34'),
(180, 86, 'Select', 'deposit', 'pending', 100, 'Wallet', NULL, '2024-09-03 15:52:12', '2024-09-03 15:52:12'),
(181, 86, 'btc', 'deposit', 'pending', 100, 'Wallet', NULL, '2024-09-03 15:53:15', '2024-09-03 15:53:15'),
(182, 77, 'bnb', 'deposit', 'success', 599, 'Wallet', NULL, '2024-09-04 12:37:40', '2024-09-04 12:37:40'),
(184, 87, 'bnb', 'deposit', 'success', 1038, 'Wallet', NULL, '2024-09-11 11:00:08', '2024-09-11 11:00:08'),
(186, 61, 'Trust Wallet', 'deposit', 'pending', 10, 'Wallet', NULL, '2024-09-11 15:29:47', '2024-09-11 15:29:47'),
(187, 61, 'Trust Wallet', 'deposit', 'pending', 10, 'Wallet', NULL, '2024-09-11 15:30:18', '2024-09-11 15:30:18'),
(188, 61, 'Trust Wallet', 'deposit', 'pending', 10, 'Wallet', NULL, '2024-09-11 15:31:07', '2024-09-11 15:31:07'),
(189, 61, 'Trust Wallet', 'deposit', 'pending', 10, 'Wallet', NULL, '2024-09-11 15:37:11', '2024-09-11 15:37:11'),
(190, 61, 'Trust Wallet', 'deposit', 'pending', 10, 'Wallet', NULL, '2024-09-11 15:38:00', '2024-09-11 15:38:00'),
(191, 84, 'Trust Wallet', 'deposit', 'pending', 500, 'Wallet', NULL, '2024-09-13 02:24:24', '2024-09-13 02:24:24'),
(192, 84, 'Trust Wallet', 'deposit', 'pending', 100, 'Live', NULL, '2024-09-13 02:25:07', '2024-09-13 02:25:07'),
(193, 84, 'btc', 'deposit', 'pending', 100, 'Wallet', NULL, '2024-09-13 02:51:24', '2024-09-13 02:51:24'),
(194, 84, 'Trust Wallet', 'deposit', 'pending', 10, 'Wallet', NULL, '2024-09-24 01:47:23', '2024-09-24 01:47:23'),
(195, 61, 'Trust Wallet', 'deposit', 'pending', 19, 'Live', NULL, '2024-09-26 08:57:49', '2024-09-26 08:57:49'),
(197, 88, 'Trust Wallet', 'deposit', 'pending', 1000, 'Wallet', NULL, '2024-09-29 19:07:59', '2024-09-29 19:07:59'),
(198, 55, 'Trust Wallet', 'withdraw', 'pending', 10, 'Wallet', NULL, '2024-10-07 11:31:48', '2024-10-07 11:31:48'),
(199, 77, 'btc', 'deposit', 'success', 1389, 'Wallet', NULL, '2024-10-09 11:57:31', '2024-10-09 11:57:31'),
(200, 55, 'Trust Wallet', 'deposit', 'pending', 10, 'Wallet', NULL, '2024-10-09 12:37:34', '2024-10-09 12:37:34'),
(201, 77, 'bnb', 'deposit', 'success', 1214, 'Wallet', NULL, '2024-10-18 12:24:48', '2024-10-18 12:24:48'),
(202, 77, 'btc', 'deposit', 'success', 531, 'Wallet', NULL, '2024-10-21 09:03:23', '2024-10-21 09:03:23'),
(203, 77, 'bnb', 'withdraw', 'pending', 10, 'Wallet', NULL, '2024-10-23 11:25:09', '2024-10-23 11:25:09'),
(204, 100, 'bnb', 'deposit', 'success', 900, 'Wallet', NULL, '2025-01-21 08:45:41', '2025-01-21 08:45:41'),
(205, 99, 'bnb', 'deposit', 'success', 10, 'Wallet', NULL, '2025-01-22 05:48:08', '2025-01-22 05:48:08'),
(206, 101, 'Trust Wallet', 'deposit', 'success', 498, 'Wallet', NULL, '2025-01-22 07:12:27', '2025-01-22 07:12:27'),
(207, 101, 'bnb', 'deposit', 'success', 499, 'Wallet', NULL, '2025-01-24 07:00:27', '2025-01-24 07:00:27'),
(208, 100, 'bnb', 'deposit', 'success', 110, 'Wallet', NULL, '2025-01-24 08:22:54', '2025-01-24 08:22:54'),
(209, 99, 'Trust Wallet', 'withdraw', 'success', 10, 'Wallet', NULL, '2025-01-24 11:34:23', '2025-01-24 11:46:58'),
(210, 101, 'bnb', 'deposit', 'success', 20, 'Wallet', NULL, '2025-01-25 04:59:38', '2025-01-25 04:59:38'),
(211, 101, 'Trust Wallet', 'withdraw', 'success', 100, 'Wallet', NULL, '2025-01-28 09:02:27', '2025-01-28 09:51:43'),
(212, 8, 'ltc', 'deposit', 'pending', 223, 'Live', NULL, '2025-02-06 17:56:22', '2025-02-06 17:56:22'),
(213, 8, 'ltc', 'withdraw', 'pending', 10, 'Wallet', NULL, '2025-02-06 18:18:57', '2025-02-06 18:18:57'),
(214, 8, 'bnb', 'deposit', 'pending', 100, 'Live', NULL, '2025-02-06 19:14:18', '2025-02-06 19:14:18'),
(215, 8, 'Select', 'deposit', 'pending', 3, 'Select', NULL, '2025-02-08 10:24:54', '2025-02-08 10:24:54'),
(216, 8, 'Select', 'deposit', 'pending', 44, 'Select', NULL, '2025-02-08 10:25:35', '2025-02-08 10:25:35'),
(217, 8, 'Trust Wallet', 'deposit', 'pending', 30, 'Wallet', NULL, '2025-02-08 13:14:28', '2025-02-08 13:14:28'),
(218, 8, 'btc', 'deposit', 'pending', 100, 'Wallet', NULL, '2025-02-08 13:40:03', '2025-02-08 13:40:03'),
(219, 8, 'btc', 'deposit', 'pending', 100, 'Wallet', NULL, '2025-02-08 13:40:29', '2025-02-08 13:40:29'),
(220, 8, 'Select', 'deposit', 'pending', 100, 'Select', NULL, '2025-02-08 13:40:39', '2025-02-08 13:40:39'),
(221, 8, 'btc', 'withdraw', 'success', 10, 'Wallet', NULL, '2025-02-08 13:57:15', '2025-02-09 21:06:49'),
(222, 8, 'btc', 'withdraw', 'rejected', 0, 'Wallet', NULL, '2025-02-08 14:20:56', '2025-02-09 21:06:46'),
(223, 90, 'Select', 'deposit', 'rejected', 100, 'Wallet', NULL, '2025-02-09 02:33:47', '2025-02-09 21:06:43'),
(224, 8, 'MUDREX', 'deposit', 'rejected', 3, 'Ethereum (ERC-20)', NULL, '2025-02-09 13:48:48', '2025-02-09 21:06:40'),
(225, 8, 'BINANCE', 'deposit', 'success', 5454, 'Solana', NULL, '2025-02-09 13:56:17', '2025-02-09 21:06:29'),
(226, 8, 'BINANCE', 'deposit', 'pending', 100, 'trc-20', NULL, '2025-02-09 17:37:47', '2025-02-09 17:37:47'),
(227, 8, 'BINANCE', 'deposit', 'success', 100, 'trc-20', NULL, '2025-02-09 17:38:04', '2025-02-09 21:06:25'),
(228, 8, 'BINANCE', 'deposit', 'success', 100, 'trc-20', NULL, '2025-02-09 17:44:54', '2025-02-09 21:06:23'),
(229, 8, 'MUDREX', 'deposit', 'rejected', 12, 'BNB Smart Chain (BEP20)', NULL, '2025-02-09 19:59:38', '2025-02-09 21:07:10'),
(230, 8, 'BINANCE', 'withdraw', 'success', 50, 'Ethereum (ERC-20)', NULL, '2025-02-09 21:09:28', '2025-02-09 23:19:20'),
(231, 8, 'BINANCE', 'deposit', 'pending', 100, 'trc-20', NULL, '2025-02-10 03:36:54', '2025-02-10 03:36:54'),
(232, 105, 'BIT PAY', 'deposit', 'success', 468, 'trc-20', NULL, '2025-02-10 11:32:39', '2025-02-10 11:43:39'),
(233, 105, 'Bit Pay', 'deposit', 'success', 485, 'Live', NULL, '2025-02-11 13:21:58', '2025-02-11 13:21:58'),
(234, 8, 'TRUST WALLET', 'deposit', 'pending', 10, 'Ethereum (ERC-20)', NULL, '2025-02-11 15:59:01', '2025-02-11 15:59:01'),
(235, 108, 'TRUST WALLET', 'deposit', 'pending', 10, 'BNB Smart Chain (BEP20)', NULL, '2025-02-11 18:52:46', '2025-02-11 18:52:46'),
(236, 108, 'TRUST WALLET', 'deposit', 'pending', 10, 'BNB Smart Chain (BEP20)', NULL, '2025-02-11 18:55:49', '2025-02-11 18:55:49'),
(237, 8, 'BINANCE', 'withdraw', 'pending', 10, 'Ethereum (ERC-20)', NULL, '2025-02-12 07:57:41', '2025-02-12 07:57:41'),
(238, 8, 'Trust Wallet', 'withdraw', 'success', 10, 'Select', NULL, '2025-02-12 08:02:02', '2025-02-12 08:02:02'),
(239, 8, 'MUDREX', 'withdraw', 'pending', 14, 'BNB Smart Chain (BEP20)', NULL, '2025-02-12 08:05:57', '2025-02-12 08:05:57'),
(240, 8, 'BINANCE', 'deposit', 'success', 1000, 'Solana', NULL, '2025-02-12 09:14:11', '2025-02-12 09:15:22'),
(241, 8, 'MUDREX', 'deposit', 'success', 20, 'Ethereum (ERC-20)', NULL, '2025-02-12 10:00:44', '2025-02-12 10:01:13'),
(242, 8, 'MUDREX', 'withdraw', 'success', 14, 'Ethereum (ERC-20)', NULL, '2025-02-12 10:02:58', '2025-02-12 10:03:42'),
(243, 109, 'BINANCE', 'deposit', 'pending', 100, 'BNB Smart Chain (BEP20)', NULL, '2025-02-12 17:19:42', '2025-02-12 17:19:42'),
(244, 101, 'BINANCE', 'withdraw', 'pending', 200, 'trc-20', NULL, '2025-02-18 03:36:28', '2025-02-18 03:36:28'),
(245, 101, 'BINANCE', 'withdraw', 'pending', 200, 'trc-20', NULL, '2025-02-18 04:50:42', '2025-02-18 04:50:42'),
(246, 101, 'BINANCE', 'withdraw', 'pending', 100, 'trc-20', NULL, '2025-02-18 06:54:49', '2025-02-18 06:54:49'),
(247, 101, 'BINANCE', 'withdraw', 'pending', 17, 'trc-20', NULL, '2025-02-18 07:12:04', '2025-02-18 07:12:04'),
(248, 101, 'BINANCE', 'withdraw', 'pending', 200, 'trc-20', NULL, '2025-02-18 07:48:13', '2025-02-18 07:48:13'),
(249, 101, 'BINANCE', 'withdraw', 'pending', 100, 'trc-20', NULL, '2025-02-18 08:49:27', '2025-02-18 08:49:27'),
(250, 112, 'BIT PAY', 'deposit', 'pending', 10000, 'Optimism', NULL, '2025-02-18 19:11:59', '2025-02-18 19:11:59'),
(251, 101, 'BINANCE', 'withdraw', 'pending', 50, 'trc-20', NULL, '2025-02-19 11:32:49', '2025-02-19 11:32:49'),
(252, 8, 'BINANCE', 'deposit', 'success', 20, 'BNB Smart Chain (BEP20)', NULL, '2025-02-19 19:13:37', '2025-02-19 19:14:53'),
(253, 8, 'MUDREX', 'withdraw', 'success', 20, 'Solana', NULL, '2025-02-19 19:26:39', '2025-02-19 19:27:01'),
(254, 8, 'MUDREX', 'deposit', 'success', 500, 'Solana', NULL, '2025-02-19 19:29:28', '2025-02-19 19:29:53'),
(255, 8, 'MUDREX', 'deposit', 'success', 30, 'BNB Smart Chain (BEP20)', NULL, '2025-02-19 19:34:09', '2025-02-19 19:34:24'),
(256, 8, 'BINANCE', 'deposit', 'success', 200, 'Solana', NULL, '2025-02-19 19:37:02', '2025-02-19 19:37:28'),
(257, 8, 'TRUST WALLET', 'deposit', 'success', 20, 'BNB Smart Chain (BEP20)', NULL, '2025-02-19 19:39:02', '2025-02-19 19:39:28'),
(258, 8, 'MUDREX', 'withdraw', 'success', 40, 'BNB Smart Chain (BEP20)', NULL, '2025-02-19 19:40:52', '2025-02-19 19:41:14'),
(259, 113, 'Select', 'deposit', 'pending', 10, 'BNB Smart Chain (BEP20)', NULL, '2025-02-20 05:47:02', '2025-02-20 05:47:02'),
(260, 113, 'Select', 'deposit', 'pending', 10, 'BNB Smart Chain (BEP20)', NULL, '2025-02-20 05:48:05', '2025-02-20 05:48:05'),
(262, 61, 'BINANCE', 'deposit', 'pending', 10, 'trc-20', NULL, '2025-02-23 17:26:49', '2025-02-23 17:26:49'),
(263, 8, 'BINANCE', 'deposit', 'success', 13, 'TRON (Trc-20)', 'sfsd4535354dfgd', '2025-02-24 18:15:09', '2025-02-24 18:30:20'),
(264, 8, 'BINANCE', 'deposit', 'success', 10, 'TRON (Trc-20)', NULL, '2025-02-24 18:26:21', '2025-02-24 18:26:21'),
(265, 8, 'BINANCE', 'withdraw', 'success', 43, 'TRON (Trc-20)', 'ADMINULYLS5ZQUZ', '2025-02-24 18:29:48', '2025-02-24 18:29:48'),
(266, 8, 'BINANCE', 'deposit', 'success', 20, 'BEP-20', 'Jdddnxvsikakzb', '2025-02-24 19:12:27', '2025-02-24 19:19:01'),
(267, 8, 'BINANCE', 'withdraw', 'success', 10, 'BEP-20', 'TRXWGSWKI77W4', '2025-02-24 19:17:44', '2025-02-28 06:50:03'),
(268, 105, 'BINANCE', 'deposit', 'success', 516, 'TRON TRC (20)', 'ADMINEMYRBD9SF5', '2025-03-14 06:08:20', '2025-03-14 06:08:20'),
(269, 8, 'BINANCE', 'deposit', 'success', 20, 'TRON TRC (20)', 'Hsksjshh', '2025-03-19 09:19:18', '2025-03-19 09:20:50'),
(270, 158, 'BINANCE', 'deposit', 'success', 199, 'TRON TRC (20)', 'TQb1gaK5YgxWjB69hmLqk5ZiRRvwx4tNsf', '2025-03-19 11:37:36', '2025-03-24 08:00:07'),
(271, 8, 'BINANCE', 'deposit', 'pending', 30, 'TRON TRC (20)', 'TRXPCMD20SSF9', '2025-03-20 13:04:08', '2025-03-20 13:04:08'),
(272, 8, 'BINANCE', 'deposit', 'pending', 40, 'TRON TRC (20)', 'TRXSIYJNV6NTC', '2025-03-20 13:10:24', '2025-03-20 13:10:24'),
(273, 8, 'BINANCE', 'deposit', 'pending', 33, 'TRON TRC (20)', 'TRX84OL7QE7EU', '2025-03-20 13:14:23', '2025-03-20 13:14:23'),
(274, 8, 'BINANCE', 'deposit', 'pending', 10, 'TRON TRC (20)', 'TRXEJBCON0BRK', '2025-03-20 13:18:52', '2025-03-20 13:18:52'),
(275, 158, 'BINANCE', 'deposit', 'success', 1111, 'TRON TRC (20)', 'TRX1SUVFK0H8N', '2025-03-24 07:48:53', '2025-03-24 08:00:04'),
(276, 158, 'BINANCE', 'withdraw', 'pending', 111, 'TRON TRC (20)', 'TRX19BE75P9ZU', '2025-03-24 08:01:49', '2025-03-24 08:01:49'),
(277, 158, 'BINANCE', 'withdraw', 'pending', 111, 'TRON TRC (20)', 'TRX54IXLZ7HEN', '2025-03-24 08:02:09', '2025-03-24 08:02:09'),
(278, 159, 'BINANCE', 'deposit', 'pending', 1000000, 'TRON TRC (20)', 'TRX9VJSQWT0PY', '2025-03-26 10:15:13', '2025-03-26 10:15:13'),
(279, 105, 'BINANCE', 'deposit', 'success', 951, 'TRON TRC (20)', 'ADMINE8JULFX1VB', '2025-04-08 11:36:13', '2025-04-08 11:36:13'),
(280, 105, 'BINANCE', 'deposit', 'success', 1470, 'TRON TRC (20)', 'ADMINE8JULFX1VB', '2025-04-08 11:37:28', '2025-04-08 11:37:28'),
(281, 55, 'BINANCE', 'withdraw', 'pending', 10, 'TRON TRC (20)', 'TRXS7QBA416O7', '2025-04-08 11:54:21', '2025-04-08 11:54:21'),
(282, 159, 'BINANCE', 'deposit', 'pending', 1000, 'TRON TRC (20)', 'TRXNIIYO1XJ5O', '2025-04-08 12:09:52', '2025-04-08 12:09:52'),
(283, 164, 'BINANCE', 'deposit', 'success', 1063, 'TRON TRC (20)', 'TRX8AVLF8I65Y', '2025-05-19 10:07:04', '2025-05-19 10:18:04'),
(284, 166, 'TRUST WALLET', 'deposit', 'success', 1054, 'TRON TRC (20)', 'TRXR48E0D1INA', '2025-05-27 10:13:53', '2025-05-27 10:54:28'),
(285, 165, 'TRUST WALLET', 'deposit', 'pending', 10000, 'TRON TRC (20)', 'TRXSHO36NU7QF', '2025-05-30 16:12:27', '2025-05-30 16:12:27'),
(286, 166, 'BINANCE', 'deposit', 'success', 10, 'TRON TRC (20)', 'ADMINKALOCVSAIT', '2025-06-02 17:14:29', '2025-06-02 17:14:29'),
(287, 164, 'TRUST WALLET', 'deposit', 'success', 18, 'TRON TRC (20)', 'ADMIN39GA3Y1NPD', '2025-06-04 06:20:55', '2025-06-04 06:20:55'),
(288, 167, 'Select', 'deposit', 'pending', 10, 'Select', 'TRX7VWVUAT570', '2025-06-05 08:00:45', '2025-06-05 08:00:45'),
(289, 167, 'TRUST WALLET', 'deposit', 'pending', 10, 'TRON TRC (20)', 'TRXYRZK4UJIGQ', '2025-06-06 01:34:37', '2025-06-06 01:34:37'),
(290, 167, 'TRUST WALLET', 'deposit', 'success', 102, 'TRON TRC (20)', 'TRX6OZ6FQCXDB', '2025-06-06 13:36:39', '2025-06-06 13:42:56'),
(291, 167, 'TRUST WALLET', 'deposit', 'success', 918, 'TRON TRC (20)', 'TRXK8TXAJFA2Q', '2025-06-06 14:26:56', '2025-06-06 14:31:48'),
(292, 164, 'TRUST WALLET', 'deposit', 'success', 10, 'TRON TRC (20)', 'ADMIN0P5K4NGAT5', '2025-06-10 02:33:29', '2025-06-10 02:33:29'),
(293, 166, 'Select', 'deposit', 'success', 10, 'Select', 'ADMINWDJOLT3SVC', '2025-06-10 02:35:56', '2025-06-10 02:35:56'),
(294, 166, 'TRUST WALLET', 'deposit', 'success', 1042, 'TRON TRC (20)', 'TRX172X27462C', '2025-06-11 15:54:33', '2025-06-11 16:07:37'),
(295, 170, 'BINANCE', 'deposit', 'pending', 10, 'TRON TRC (20)', 'TRXNJWKQPFP2E', '2025-06-15 18:48:33', '2025-06-15 18:48:33'),
(296, 167, 'TRUST WALLET', 'deposit', 'success', 10, 'TRON TRC (20)', 'ADMINRFCUWD5ODZ', '2025-06-17 04:21:07', '2025-06-17 04:21:07'),
(297, 166, 'TRUST WALLET', 'deposit', 'success', 15, 'TRON TRC (20)', 'ADMIN6YM5ATYJ1G', '2025-06-17 04:24:20', '2025-06-17 04:24:20'),
(298, 164, 'TRUST WALLET', 'deposit', 'success', 10, 'TRON TRC (20)', 'ADMINBXGSPLPDF9', '2025-06-17 15:07:52', '2025-06-17 15:07:52'),
(299, 166, 'TRUST WALLET', 'deposit', 'success', 18, 'TRON TRC (20)', 'ADMINF3H1MM2NCV', '2025-06-23 03:18:28', '2025-06-23 03:18:28'),
(300, 167, 'Select', 'deposit', 'success', 10, 'Select', 'ADMIN1C6XKSTWUX', '2025-06-23 03:25:22', '2025-06-23 03:25:22'),
(301, 8, 'BINANCE', 'deposit', 'pending', 20, 'TRON TRC (20)', 'TRX6BKSVNYWAS', '2025-06-26 13:41:14', '2025-06-26 13:41:14'),
(302, 8, 'BANK', 'deposit', 'pending', 30, '1221214ee5', 'TRX8FG8OIPPQN', '2025-06-29 19:21:45', '2025-06-29 19:21:45'),
(303, 8, 'BANK', 'deposit', 'success', 12, '1221214ee5', 'TRXFBS0I4PM3D', '2025-06-29 19:26:09', '2025-06-29 19:27:24'),
(304, 8, 'BANK', 'deposit', 'success', 12, '1221214ee5', 'ADMINZ8Q5X29L0F', '2025-06-29 19:28:14', '2025-06-29 19:28:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT '1',
  `main_balance` varchar(255) NOT NULL DEFAULT '0',
  `live_balance` varchar(255) NOT NULL DEFAULT '0',
  `platform` varchar(200) DEFAULT NULL,
  `network` varchar(200) DEFAULT NULL,
  `birth` varchar(255) NOT NULL DEFAULT '1000',
  `country` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `ad_kyc` varchar(255) NOT NULL DEFAULT 'No',
  `id_kyc` varchar(255) NOT NULL DEFAULT 'No',
  `ec_kyc` varchar(255) NOT NULL DEFAULT 'No',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `wallet` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `profile`, `role`, `main_balance`, `live_balance`, `platform`, `network`, `birth`, `country`, `Phone`, `ad_kyc`, `id_kyc`, `ec_kyc`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `wallet`) VALUES
(5, 'devloper', 'developer@gmail.com', 'http://127.0.0.1:8000/public/img/profile/310314Screenshot_10.png', '0', '0', '0', NULL, NULL, '2023-12-18', 'Bangladesh', '454645', 'No', 'No', 'No', NULL, '$2y$10$ogbHZJb5LubLV/8rBVirR.Mvl5R4J0sY/vZ/L77jXaH6PMBdaN1Ty', NULL, '2023-12-02 16:39:46', '2023-12-02 16:39:46', NULL),
(8, 'Hazrat alli', 'Hazratbd80@gmail.com', 'https://backend.wimbledoninvestments.com/public/img/profile/583094Screenshot_67.png', '1', '750', '', 'BINANCE', 'TRON TRC (20)', '2025-02-19', 'Bangladesh', '2323345354345', 'No', 'pending', 'No', NULL, '$2y$10$x2QDAWlGJBRrE2QQewWPoeyXiokPzM633CJAyFKKTkhYBZE7T4kfK', NULL, '2024-03-22 09:21:03', '2025-06-29 19:28:14', 'dsadasdasdad'),
(9, 'deepak', 'mahafi1952@ikumaru.com', '', '1', '0', '0', NULL, NULL, '1333-12-13', 'India', '874556145', 'No', 'No', 'No', NULL, '$2y$10$GRU4L0yWaDNrHsRfKDCWM.cpRDAzHQOrZqfIJ76Gve2yv63Qvgt.e', NULL, '2024-03-22 10:33:15', '2024-03-22 10:33:15', NULL),
(10, 'foxemo1', 'foxemo1174@sentrau.com', '', '1', '0', '0', NULL, NULL, '1989-06-08', 'India', '8523697412', 'No', 'No', 'No', NULL, '$2y$10$u4TcUDQhL1aI0Gz3LPeHaui1EhfYTD3jEyQMKLmy65VyAesvcz4/C', NULL, '2024-03-22 10:34:26', '2024-03-22 10:34:26', NULL),
(11, 'Sanjit Singh', 'sanjitgsp1.ss@gmail.com', '', '1', '0', '0', NULL, NULL, '2024-04-02', 'India', '8727824616', 'No', 'No', 'No', NULL, '$2y$10$tTsuE4.6wxBWfued7Fe9OOR17mX4Nlt3rAOXewwPbFRFPg2FLM.Sy', NULL, '2024-04-02 15:52:25', '2024-04-02 15:52:25', NULL),
(12, 'Mude Prasad naik', 'mudehasini8096@gmail.com', '', '1', '0', '0', NULL, NULL, '1984-01-01', 'India', '8096413003', 'No', 'No', 'No', NULL, '$2y$10$cYC3tKuwqCVrFEuxBpQ0jOD9mOZU56GG8rTv.QPCgPrC3Jt3Z6vyi', NULL, '2024-04-06 06:27:04', '2024-04-06 08:58:46', NULL),
(13, 'Duraivasan', 'duraivasan007.dv@gmail.com', '', '1', '0', '0', NULL, NULL, '2024-04-06', 'India', '9940381990', 'No', 'No', 'No', NULL, '$2y$10$2pxDiglyAtIemgpQmKTajuXg94mHNZ7p5tkyAyMPJqq0u.E0bhSuy', NULL, '2024-04-06 13:49:12', '2024-04-06 13:49:12', NULL),
(14, 'Aryan Saharan', 'iamaryansaharan@gmail.com', '', '1', '0', '0', NULL, NULL, '1998-02-25', 'India', '6350108731', 'No', 'No', 'No', NULL, '$2y$10$H/gHNeao/xf.ukbBkplIAeRvUW7JdkHq.J5r1oYn3v9d1K85JCMA6', NULL, '2024-04-08 07:33:44', '2024-04-08 07:33:44', NULL),
(15, 'Anurag Ravi', 'saikripa0505@gmail.com', '', '1', '0', '0', NULL, NULL, '1990-05-05', 'India', '8292695500', 'No', 'No', 'No', NULL, '$2y$10$TUgEddqtCgO7ngiu5RsuQOHu8G/hnoH57FkVYdjlZXhAl0fF9Fr8y', NULL, '2024-04-10 08:00:33', '2024-04-10 08:00:33', NULL),
(16, 'Prasenjit Barman', 'prasenjitb128@gmail.com', '', '1', '0', '0', NULL, NULL, '1996-06-20', 'India', '7585082008', 'No', 'No', 'No', NULL, '$2y$10$oWaPFxdvHs7wUiuKIg/lmeDeMACQsI84uGU.uklXESl.Lqx9mjK32', NULL, '2024-04-12 08:13:13', '2024-04-12 08:13:13', NULL),
(17, 'Ravi Shankar mandal', 'ravirulesvit@gmail.com', '', '1', '0', '0', NULL, NULL, '1985-07-30', 'India', '8077630984', 'No', 'No', 'No', NULL, '$2y$10$2JMG5A4L01aNTMVjzcZKAu.vcc/.1pYAmL3UhE.QWZfB/eRdwufzO', NULL, '2024-04-13 11:54:46', '2024-04-13 11:54:46', NULL),
(18, 'Ankur Mohta', 'ankurmohtafinal@gmail.com', '', '1', '0', '0', NULL, NULL, '1980-09-20', 'India', '9891610804', 'No', 'No', 'No', NULL, '$2y$10$XDwuUEcGmOsiOv98d7zEAuq9Q2TkC2IvLs3Sh/FoH1CT8dl/Lr4mW', NULL, '2024-04-15 06:48:45', '2024-04-15 06:48:45', NULL),
(19, 'Dhiren Patel', 'dhirennita@gmail.com', '', '1', '0', '0', NULL, NULL, '2024-04-16', 'India', '9909901257', 'No', 'No', 'No', NULL, '$2y$10$1mGofcPiauC8u5B4ZRqDW.av2qpXdFldIhdbibvWifYfx8gawfSke', NULL, '2024-04-16 08:24:40', '2024-04-16 08:24:40', NULL),
(20, 'Manju Yadav', 'manjuy363@gmail.com', '', '1', '0', '0', NULL, NULL, '2024-04-18', 'India', '9893416979', 'No', 'No', 'No', NULL, '$2y$10$oiDrGvp1y1eEheL/WuSbnuhKE.HAgh2VD8EfaAfu1Rr.s5RI4y4jK', NULL, '2024-04-18 06:57:31', '2024-04-18 06:57:31', NULL),
(21, 'Parikh Ankur Surendrabhai', 'ankur2293.ap@gmail.com', '', '1', '0', '0', NULL, NULL, '1983-12-29', 'India', '9699697771', 'success', 'success', 'success', NULL, '$2y$10$vz4cT7iiqH5D1AzHhsePUeQCCpUyyKHRjpBnrhtW858.Oh32iL2H6', NULL, '2024-04-19 06:17:50', '2024-04-19 06:24:42', NULL),
(22, 'Amruta Gattani', 'gattanimanish83@gmail.com', '', '1', '2891', '0', NULL, NULL, '1985-03-22', 'India', '7249673705', 'success', 'success', 'No', NULL, '$2y$10$Aud27zcfAuSxJ7ygtAsLw.MoqsYusqmQttPETFfwxGcIw40TsytDa', NULL, '2024-04-22 05:34:33', '2024-09-03 05:37:00', NULL),
(23, 'Shivani', 'shivanigandhar@outlook.com', '', '1', '5249', '0', NULL, NULL, '2003-12-23', 'India', '8394944359', 'success', 'success', 'pending', NULL, '$2y$10$NDTOn43cSYQPsGoKEKWsaeRcVrDBrm.xZSgYWmo5tYbZmkDvSg9Vq', NULL, '2024-04-25 06:20:08', '2024-07-02 07:31:56', NULL),
(26, 'Soraj singh', 'sarojsingh06@yahoo.co.in', '', '1', '0', '0', NULL, NULL, '1969-02-08', 'India', '801380209387', 'pending', 'pending', 'pending', NULL, '$2y$10$Q5WSH3y7FY8.WSFUpyVQk.eFVQBMY4fyyQAmo1vj5vzJqsVdGRr1O', NULL, '2024-05-14 07:42:54', '2024-05-14 07:49:53', NULL),
(27, 'Bristy Saikia Gogol', 'biswa131979@gmail.com', '', '1', '0', '0', NULL, NULL, '1986-01-04', 'India', '8876494639', 'pending', 'pending', 'pending', NULL, '$2y$10$R/wNnz/PRzn0eP2V5sZuTu81t6TCZZuWjnemqHIVjlx3WgUa48Gm.', NULL, '2024-05-17 11:54:29', '2024-05-17 12:00:42', NULL),
(28, 'Indrajeet', 'indrajeet_p@rediffmail.com', '', '1', '0', '0', NULL, NULL, '1983-03-02', 'India', '9840579814', 'No', 'No', 'No', NULL, '$2y$10$MgOwYsIOSHzlbEZxtv54W.cOoi7Tmw1Q65xpgErA.GcXSE5IyOeP6', NULL, '2024-06-25 10:39:53', '2024-06-25 10:39:53', NULL),
(29, 'sanjay kumar', 'sanjayrajvanshi1969@gmail.com', '', '1', '0', '0', NULL, NULL, '1969-10-11', 'India', '7505580059', 'No', 'No', 'No', NULL, '$2y$10$tyG/63yw8S1e3r3axonvveLw1bvYQFlzlBR0O29I3lH6YsCm4tvyC', NULL, '2024-06-27 11:43:41', '2024-06-27 11:43:41', NULL),
(30, 'Arindam Saha', 'arindam685@gmail.com', '', '1', '0', '0', NULL, NULL, '1988-09-14', 'India', '9038523456', 'No', 'No', 'No', NULL, '$2y$10$9dyTOJT2teT3u55wk7FYn.b0aSw4JtNzodUM0jlsZolzYFLNXXg6a', NULL, '2024-06-28 11:36:59', '2024-06-28 11:36:59', NULL),
(31, 'ASHISH KUMAR', 'ASHISH991272@GMAIL.COM', '', '1', '0', '0', NULL, NULL, '2024-05-08', 'Bahrain', '9632587459', 'No', 'No', 'No', NULL, '$2y$10$dqtlDkHKOfAdipH.a90BuencLQp1BoYaRqNBkKhQdCnZZA5wajYAm', NULL, '2024-06-29 06:22:33', '2024-06-29 06:22:33', NULL),
(33, 'Onyekwelle francis', 'te3ment@gmail.com', '', '1', '0', '0', NULL, NULL, '1988-11-22', 'Nigeria', '2348132343133', 'No', 'No', 'No', NULL, '$2y$10$WW6H5QFVMLFR3/Y/9X03Fenp40d29993IQJlEI7OcYpAwYzxkavra', NULL, '2024-07-01 14:18:38', '2024-07-01 14:18:38', NULL),
(34, 'Sachin jawla', 'sachinjawla25061998@gmail.com', 'https://api.wimbeldoninvestments.com/img/profile/984728IMG-20240430-WA0049.jpg', '1', '0', '0', NULL, NULL, '1998-06-25', 'India', '7078468898', 'No', 'pending', 'pending', NULL, '$2y$10$QbNirUskR5VnpO9x55WcRu7Z8DvUHdau1KYsY05uYDAEwWDB2dt2e', NULL, '2024-07-03 12:20:42', '2024-07-05 10:39:16', NULL),
(35, 'GAUTHAM KANNAN', 'gauthamkannan3@gmail.com', '', '1', '0', '0', NULL, NULL, '1997-12-21', 'India', '9750825737', 'No', 'No', 'pending', NULL, '$2y$10$IHA4NwpZAMx3uOLAfP9h3udZfCoUqpLd0ux94/9vRS9AX4zChXRja', NULL, '2024-07-04 08:27:27', '2024-07-04 08:35:50', NULL),
(36, 'Bamisam', 'bamisam250@yahoo.com', '', '1', '0', '0', NULL, NULL, '1995-03-26', 'Nigeria', '8032776543', 'No', 'No', 'No', NULL, '$2y$10$Wv7XHfJq72qPAzZ7VpAbtuzEYUXyrysbaFWL5hvNlQ6COHmseZ992', NULL, '2024-07-04 16:56:21', '2024-07-04 16:56:21', NULL),
(37, 'Rohit Ramchanadra Hingnikae', 'rohithingnikar@gmail.com', '', '1', '0', '0', NULL, NULL, '1983-02-26', 'India', '9766540021', 'No', 'pending', 'pending', NULL, '$2y$10$f2O/ZYcb3xe1iHmnOkFxPeeZiPHjjJndfaSKY/bpIMniQu2OQ4Fg2', NULL, '2024-07-06 17:57:19', '2024-07-06 17:59:25', NULL),
(38, 'Ramswaroop sharma', 'abcschooljaipur@gmail.com', '', '1', '0', '0', NULL, NULL, '1979-06-30', 'India', '9829628481', 'No', 'pending', 'pending', NULL, '$2y$10$X93iSAb.m71eVmCNcgs6n.9.Jk8KBlaVWC9CCJm22zLdWUQ2zlC7m', NULL, '2024-07-10 11:30:50', '2024-07-10 11:48:18', NULL),
(39, 'Om Prakash Dhaker', 'ompdhakar54@gmail.com', '', '1', '0', '0', NULL, NULL, '1985-06-12', 'India', '8094903335', 'pending', 'pending', 'No', NULL, '$2y$10$I/71i8xVd91ayYQ1zJMJoOmw42PQ0ERp.d3hSgjAiXa3eUKI14f3C', NULL, '2024-07-10 13:42:23', '2024-07-10 13:48:18', NULL),
(40, 'Deepak Mishra', 'aarohi7832@gmail.com', '', '1', '0', '0', NULL, NULL, '1998-03-05', 'India', '8596741236', 'No', 'No', 'No', NULL, '$2y$10$0schZFJ6G5bXizmgkJvicunDn9nnbM/hZP3sIs30pr6M4ooar6tfK', NULL, '2024-07-11 07:45:16', '2024-07-11 07:45:16', NULL),
(41, 'VIKAS KUMAR', 'vk8285569@gmail.com', '', '1', '0', '0', NULL, NULL, '1992-01-17', 'India', '9749326063', 'No', 'success', 'No', NULL, '$2y$10$flXXP0JEag0guuqWrEmdC.T7uS6yZTanmX4bUtTeXMY5ErKArKPm2', NULL, '2024-07-12 07:38:14', '2024-07-12 11:41:59', NULL),
(42, 'Kushal Moitra', 'kushal.moitra@gmail.com', '', '1', '0', '0', NULL, NULL, '2024-07-12', 'India', '9730017022', 'No', 'No', 'No', NULL, '$2y$10$vwrGYKGE.DLPXbp5ZH3OQeqneHBk/e.E/XyM/Gdp0zKgF48g9nGsK', NULL, '2024-07-12 07:53:54', '2024-07-12 07:53:54', NULL),
(43, 'Asish Kumar Pramanik', 'asishkumar31@gmail.com', '', '1', '0', '0', NULL, NULL, '1988-07-03', 'India', '998409695', 'pending', 'pending', 'pending', NULL, '$2y$10$rvZecAqrlQ3jX/OMnuisuOdpZlLqaLbgnmFl4Ex0cfKLftTQimOg.', NULL, '2024-07-15 08:04:45', '2024-07-15 08:15:35', NULL),
(44, 'MEHBOOB ALI SHAIKH', 'atozfishtraders@gmail.com', '', '1', '0', '0', NULL, NULL, '1980-02-13', 'India', '8433873092', 'No', 'No', 'No', NULL, '$2y$10$wSigTJuLKeY7/UB46VgTIO5JGZTxaESqE1tamBo/kjEZv/Pz21Hly', NULL, '2024-07-17 05:01:28', '2024-07-17 05:01:28', NULL),
(48, 'suraj sharma', 'meera1999choudhary@gmail.com', '', '1', '11000', '0', NULL, NULL, '1995-12-03', 'India', '8217293208', 'No', 'No', 'No', NULL, '$2y$10$..e9RUzRhyMCEaezIku5fOQhiqsGjcf/031x4hFW7.BrlZl0nPgpy', NULL, '2024-07-19 11:47:54', '2024-07-27 08:37:19', NULL),
(50, 'Dattatray Dnyaneshwar Sakore', 'dsdattani@gmail.com', '', '1', '0', '0', NULL, NULL, '1983-10-27', 'India', '9762362298', 'No', 'No', 'No', NULL, '$2y$10$mBF2CX5iqN4JfhYnwz70yuuzyIo5TgMs/9sRdRTWiBmjmGHxTIy96', NULL, '2024-07-20 11:19:51', '2024-07-20 11:19:51', NULL),
(52, 'SURSHA GOPALAKRISHNA RAO', 'sureshbiligiri@gmail.com', '', '1', '0', '0', NULL, NULL, '1974-07-22', 'India', '9880301230', 'No', 'No', 'No', NULL, '$2y$10$zSATj7UhJN5VKSd9OakOS.gcwTJulGzx4E0kujFNMUTmLYg8Il5ua', NULL, '2024-07-22 12:38:50', '2024-07-22 12:38:50', NULL),
(55, 'Amol Bhat', 'bhat.amol@gmail.com', '', '1', '1054', '0', 'BINANCE', 'TRON TRC (20)', '1981-09-10', 'India', '9604036520', 'success', 'success', 'success', NULL, '$2y$10$.OpXG6CQJ3pcZdv8CgMQtuWLfN0iq/OoJ.oqD8ISLMxYu6hDrlIZW', NULL, '2024-07-26 12:30:58', '2025-04-08 11:54:21', NULL),
(56, 'Kirpal Singh Jandu', 'sonukirpal@gmail.com', '', '1', '0', '0', NULL, NULL, '1972-11-16', 'India', '9811259926', 'No', 'No', 'No', NULL, '$2y$10$td13zK5rkXkOW5zbV6Ec/uOf3qTvM20VPXK2nQNLqofo5HwHG4NFq', NULL, '2024-07-27 06:02:10', '2024-07-27 06:02:10', NULL),
(57, 'deepak', 'kogimet475@hostlace.com', '', '1', '0', '0', NULL, NULL, '1889-07-06', 'Albania', '8926896521', 'No', 'No', 'No', NULL, '$2y$10$gOv3kqk5/LvGopLlm4x2duxwPBBIowgqU3AlyEieJUHkfNyBYo0iq', NULL, '2024-07-30 06:59:57', '2024-07-30 06:59:57', NULL),
(58, 'Sunil Krishna Rade', 'sunilrade.1974@gmail.com', '', '1', '0', '0', NULL, NULL, '1974-07-19', 'India', '9167390777', 'No', 'pending', 'pending', NULL, '$2y$10$85/B5yUfWQMq4k7XlQiHIebo2SP1AZCVu8Xd4Jjwtt8TCE.io1VMO', NULL, '2024-07-31 12:17:07', '2024-08-03 13:34:52', NULL),
(59, 'Mitul Nathwani', 'nathwanimitul@gmail.com', '', '1', '0', '0', NULL, NULL, '1992-06-08', 'India', '9429189747', 'No', 'No', 'No', NULL, '$2y$10$oOOqXeISS1pyegKf2vkEAuKKRm2Z8f8F8.o.SA46h/2QPFs.5B0Ve', NULL, '2024-08-01 12:51:13', '2024-08-01 12:51:13', NULL),
(60, 'G Hemanth Kumar', 'hemanthkumar6g@gmail.com', '', '1', '0', '0', NULL, NULL, '2024-08-02', 'India', '9700649421', 'No', 'No', 'No', NULL, '$2y$10$haSI2hABPYAoMLF4cV3iselHvQQasZnN8tQ4SkhK3oAtKxqawzr5q', NULL, '2024-08-02 06:13:23', '2024-08-02 06:13:23', NULL),
(61, 'Ravi Singh', 'ravisinghrajput.singh2@gmail.com', '', '1', '0', '0', NULL, NULL, '2024-08-02', 'India', '9415353574', 'No', 'No', 'No', NULL, '$2y$10$/rWeV29MVeseLBGQT/sx0.Ri9vKq0lsl0a9B5MZieZ47lOMD43Nmq', NULL, '2024-08-02 08:27:30', '2024-08-02 08:27:30', NULL),
(63, 'RAMANI RANJAN NAIK', 'naikranjan1@gmail.com', '', '1', '0', '0', NULL, NULL, '1982-07-14', 'India', '8018588003', 'No', 'No', 'No', NULL, '$2y$10$SLzBZ6p3OBavVDLNhyeMl.3RiAn96yQn.5ZC9dCaD1oIL.CRVTdSu', NULL, '2024-08-05 01:18:57', '2024-08-05 01:18:57', NULL),
(64, 'Msalihu3636@gmail.com', 'Msalihu3636@gmail.com', '', '1', '0', '0', NULL, NULL, '2004-09-24', 'Nigeria', '9097058129', 'No', 'No', 'No', NULL, '$2y$10$gp0ZvQT2KckF/jHeZhXEoOHy/dzZXQ5kOU2WqEIzHdp5lOfXJ6/A.', NULL, '2024-08-05 20:58:19', '2024-08-05 20:58:19', NULL),
(66, 'Rahul verma', 'cyberzone133@gmail.com', '', '1', '0', '0', NULL, NULL, '1993-03-15', 'India', '9907686239', 'No', 'No', 'No', NULL, '$2y$10$HvPMN89.mN89JcOLItL23Op9hVx01YncQ2or9RFwDYTGYszvP9H7W', NULL, '2024-08-06 15:49:32', '2024-08-06 15:49:32', NULL),
(67, 'Deepak Langhi', 'deepaklanghi@gmail.com', '', '1', '0', '0', NULL, NULL, '1986-03-24', 'India', '8275697761', 'No', 'No', 'No', NULL, '$2y$10$C8GNBFUOuf5fx2bsD3qldOwK0sf4uMdIzYqFRj.bqlVz.UZJfGcke', NULL, '2024-08-06 16:35:40', '2024-08-06 16:35:40', NULL),
(68, 'Kani Raj', 'Kaniraj1906@gmail.com', '', '1', '0', '0', NULL, NULL, '2014-05-08', 'India', '7339480210', 'No', 'No', 'No', NULL, '$2y$10$4vOqbcmw.RoNfDKvRZkmqOPLo8FsWRICAFVX6g2h0SC9OIPjYInQm', NULL, '2024-08-09 01:09:51', '2024-08-09 01:09:51', NULL),
(69, 'Deepak Kumar Gupta', 'gupta09132@gmail.com', '', '1', '0', '0', NULL, NULL, '1998-05-04', 'India', '9517187083', 'No', 'No', 'No', NULL, '$2y$10$7dg3yW7TRJ0eb9y62QQOVOWaqC.POLkGFBFY8a9FlgSibT4WVuwqa', NULL, '2024-08-09 05:17:05', '2024-08-09 05:17:05', NULL),
(70, 'Sanjay bhoi', '7976sbaba@gmail.com', '', '1', '0', '0', NULL, NULL, '1995-01-01', 'India', '917976139884', 'No', 'No', 'No', NULL, '$2y$10$aYab4RIUcTxPN3UypMkFPuzF0V6hUdg0LqddMZDNaRSv07i5H3ikq', NULL, '2024-08-09 15:30:36', '2024-08-09 15:30:36', NULL),
(71, 'Kousik Kumar', 'elatebusinesssolutions@gmail.com', '', '1', '0', '0', NULL, NULL, '1991-08-23', 'India', '9117770786', 'No', 'No', 'No', NULL, '$2y$10$Wk.k8l0N8RL7sLrlxSLRwuGPQxq/Mke5E8mA9G67LWtJ3F/dfkY5O', NULL, '2024-08-10 12:40:52', '2024-08-10 12:40:52', NULL),
(72, 'Dhanajayan', 'dhanujayan.p@gmail.com', '', '1', '0', '0', NULL, NULL, '1998-11-28', 'India', '9884271888', 'No', 'No', 'No', NULL, '$2y$10$yah31vQvBqg/93y1XfWiAeHrj7youN9cKHnNrdC1mCXIe3tLFIB5q', NULL, '2024-08-10 13:27:44', '2024-08-10 13:27:44', NULL),
(73, 'Ankit gupta', 'atbsslmp0@gmail.com', '', '1', '0', '0', NULL, NULL, '2024-08-11', 'India', '7267898024', 'No', 'No', 'No', NULL, '$2y$10$uPsu6/wJzLEy/Zj7G1D6MORXqNplfLxPhAbECV4bv.AECekX//yGa', NULL, '2024-08-11 12:13:42', '2024-08-11 12:13:42', NULL),
(74, 'Patel Dilipbhai Popatbhai', 'dilippatel1588@gmail.com', '', '1', '0', '0', NULL, NULL, '1983-01-29', 'India', '9824474164', 'success', 'success', 'success', NULL, '$2y$10$dtDwpHEHUM5QrgWrtatBu.63cZHibfgtM2EFR0JRNiq9WHFWUTzQ.', NULL, '2024-08-12 07:23:17', '2024-08-12 09:58:40', NULL),
(75, 'Smitesh Shah', 'smitesh01@gmail.com', '', '1', '0', '0', NULL, NULL, '2024-08-14', 'India', '7875089389', 'No', 'No', 'No', NULL, '$2y$10$X3XUn2XuTqnC4Kvb4nDWE.Oh3HVQ.6YZcjqBNHeTD7M1cbQ/OYekS', NULL, '2024-08-14 05:50:19', '2024-08-14 05:50:19', NULL),
(77, 'Adharsh Suresh Salot', 'adarsh.salot@gmail.com', '', '1', '7379', '0', NULL, NULL, '1984-07-22', 'India', '8879844991', 'success', 'success', 'success', NULL, '$2y$10$hFtRhVWRY2QqiNE1lKGB1u7q3q/BGdpXmOPtrG80hbZmVrwapxuw2', NULL, '2024-08-21 04:58:03', '2024-10-23 11:25:09', NULL),
(79, 'Archana Gupta', 'albkrkgupta@gmail.com', '', '1', '0', '0', NULL, NULL, '1963-06-10', 'India', '6394222817', 'pending', 'pending', 'success', NULL, '$2y$10$RYZJSzAtwVUvUj8sbuuP0.PPjn2Z6aVFNShRb8VStyg9FdpNESYMG', NULL, '2024-08-27 08:40:37', '2024-09-02 08:40:49', NULL),
(80, 'Bisworanjan Das', 'tiku77204@gmail.com', '', '1', '0', '0', NULL, NULL, '2024-08-29', 'India', '7019712090', 'No', 'No', 'No', NULL, '$2y$10$LeOqmC36bnEEmW3HDk01xe3ddBJPwON6NYNxx47zElMMinoqeMTha', NULL, '2024-08-29 06:14:55', '2024-08-29 06:14:55', NULL),
(81, 'Goutam Dass', 'gdexports.786@gmail.com', '', '1', '0', '0', NULL, NULL, '2024-08-29', 'India', '8420190102', 'success', 'success', 'success', NULL, '$2y$10$PkQ0g6goB61MYiGstjT1s.rxjC5wsQF.tihKl46CxAalIthbPHUtq', NULL, '2024-08-29 07:15:05', '2024-09-02 04:38:51', NULL),
(82, 'Sunil', 'ratami1937@ndiety.com', '', '1', '0', '0', NULL, NULL, '1999-02-15', 'India', '889547126', 'No', 'No', 'No', NULL, '$2y$10$EDi3XbvS34eGLda1kMNf1eopkVb936ysuoUwJPn19oPQ7EVWv/HQa', NULL, '2024-08-29 09:53:39', '2024-08-29 09:53:39', NULL),
(84, 'CHANDAN KUMAR SAHOO', 'cs500020@gmail.com', '', '1', '0', '0', NULL, NULL, '1983-05-09', 'India', '9494983605', 'No', 'No', 'No', NULL, '$2y$10$NFutXsYkJltfibMhDM4dzu35VIDssafZuOkSm3qQX/y1o92GTsJWW', NULL, '2024-09-02 03:00:13', '2024-09-02 03:00:13', NULL),
(85, 'Dhirendra Kumar Sharma', 'dhirendravns52@gmail.com', '', '1', '0', '0', NULL, NULL, '1983-08-12', 'India', '8429957904', 'success', 'success', 'success', NULL, '$2y$10$h9gXf/oyXyi2Mgr/vrhdyegqvaG6tGlj7pkr4kShycAjG89DdbwrO', NULL, '2024-09-02 08:36:36', '2024-09-02 08:47:09', NULL),
(86, 'MANCHUKANTI SRINIVAS', 'manchukantisrinivas@gmail.com', '', '1', '0', '0', NULL, NULL, '1969-04-12', 'India', '9705567231', 'success', 'success', 'success', NULL, '$2y$10$6bj7th./NoeT3dy6bGxe8.XefeqmbySRgzEc/Q2b.a376SbcwmqsK', NULL, '2024-09-03 06:19:03', '2024-09-03 12:30:15', NULL),
(87, 'Anil Kumar Chanuhan', 'chauhanair70@gmail.com', '', '1', '1038', '0', NULL, NULL, '1970-07-25', 'India', '9810690811', 'success', 'success', 'success', NULL, '$2y$10$5iLi6nDSWk43R2ZyEUT1VemjaJ6gm0FCJUp.q4hb8qbLUexTc3f1C', NULL, '2024-09-10 06:00:05', '2024-09-11 11:00:08', NULL),
(88, 'Manish kumar bansal', 'manish1221bansal@gmail.com', '', '1', '0', '0', NULL, NULL, '2024-09-12', 'India', '7415541592', 'No', 'No', 'No', NULL, '$2y$10$KFp5wwQOg8LtZGk.kE02tuQPdFZ0Rln5hEBAccl0clzBv3beq5z.q', NULL, '2024-09-12 07:11:37', '2024-09-12 07:11:37', NULL),
(89, 'Kacha mayur kishorbhai', 'Mayurk1412@gmail.com', '', '1', '0', '0', NULL, NULL, '1998-03-11', 'India', '7046188074', 'No', 'No', 'No', NULL, '$2y$10$jGiH41xmHrXO5PLD16ulDe8R6JNM/MEM3qo6NQULmIX/DY0Q2hSzC', NULL, '2024-09-14 11:53:03', '2024-09-14 11:53:03', NULL),
(90, 'Admin', 'Admin@gmail.com', '', '0', '0', '0', NULL, NULL, '2024-10-18', 'Bangladesh', '1783195999', 'No', 'No', 'No', NULL, '$2y$10$Pjo3FuJUgDxXhvREpEGOo.IQw0HXT4W5EorORlZ0bcT59Ut9rpV4C', NULL, '2024-10-18 12:12:10', '2024-10-18 12:12:10', NULL),
(91, 'Divya Patel', 'pnihar_1993@yahoo.com', '', '1', '0', '0', NULL, NULL, '1996-09-28', 'India', '8155828706', 'No', 'No', 'No', NULL, '$2y$10$DgEBWn0P4gNc9LbeRyqoReyrDAjQ5uNLt8Dtif5K54Bq8RQZLHU/G', NULL, '2024-10-23 02:50:42', '2024-10-23 02:50:42', NULL),
(92, 'jgvir singh', 'jagviryadav0198@gmail.com', '', '1', '0', '0', NULL, NULL, '1998-10-01', 'India', '8460216076', 'No', 'No', 'No', NULL, '$2y$10$Hu9VHupiGxJv1wC15q57OuZvB9zDNKJ5lPp5AsBTfWKq2IFextgTq', NULL, '2024-10-24 11:52:34', '2024-10-24 11:52:34', NULL),
(93, 'Vivek Soni', 'wodoso5445@inikale.com', '', '1', '0', '0', NULL, NULL, '1998-02-04', 'India', '8697683522', 'No', 'No', 'pending', NULL, '$2y$10$Am4EEOMSNdzonMLFQ6pD/ueo12xF/wToTwsslI8GObqc5agjzs1.G', NULL, '2024-11-16 08:09:57', '2024-11-16 08:13:03', NULL),
(94, 'krishna kumar', 'krishnachef@rediffmail.com', '', '1', '0', '0', NULL, NULL, '1984-09-30', 'India', '9608422283', 'No', 'No', 'No', NULL, '$2y$10$sk43jdZm5p2qH3hcSAQ2aOoKDPB6jus7cjyYL6eTo4qqBeCu0v.12', NULL, '2024-11-16 08:39:17', '2024-11-16 08:39:17', NULL),
(95, 'prakash sheth', 'p_g_sheth@yahoo.co.in', '', '1', '0', '0', NULL, NULL, '1959-07-25', 'India', '9825157293', 'No', 'No', 'No', NULL, '$2y$10$5fGEbvd1dV/0g12rODo38eOt2RHCHyLiXSqItQboKXp.uNy74Si.S', NULL, '2024-11-27 10:13:17', '2024-11-27 10:13:17', NULL),
(96, 'rolenx', 'rolen98558@eoilup.com', '', '1', '0', '0', NULL, NULL, '2000-04-29', 'Japan', '81237818888', 'No', 'No', 'No', NULL, '$2y$10$j9zPEML15VcZa43cNwxJJOHvEyxyvsWWrxzCBlSy4srt0tSTHmIUO', NULL, '2024-12-10 10:41:16', '2024-12-10 10:41:16', NULL),
(99, 'Swapnaja Bhat', 'swapnajajog@gmail.com', '', '1', '0', '0', NULL, NULL, '1984-05-05', 'India', '9422506717', 'success', 'success', 'No', NULL, '$2y$10$xHLq/laGgyuUBZxeoaKKjufsLUMJAmbBxKn.VbkNybSgxpnpP8k9e', NULL, '2025-01-21 05:16:41', '2025-01-24 11:34:23', NULL),
(100, 'Dumpala Basaveswara Prakash', 'prakashdb2011@gmail.com', '', '1', '1010', '0', NULL, NULL, '1956-02-01', 'India', '9000904119', 'success', 'success', 'success', NULL, '$2y$10$BxzFDB18jVaE.HrWjhxm9egHZqQogXbEaAs3AvwnsNGP.7QYlp1a6', NULL, '2025-01-21 05:56:48', '2025-01-24 08:22:54', NULL),
(101, 'Ramchandra Madhukar Phatale', 'ramphatale@gmail.com', '', '1', '50', '0', NULL, NULL, '1979-03-25', 'India', '7020469124', 'success', 'success', 'success', NULL, '$2y$10$Oe9uIuEXrLpa1qfwjBb0tOYcg7I15QBfA3Du3W.Z13JnzBApIqGyy', NULL, '2025-01-21 07:15:33', '2025-02-19 11:32:49', NULL),
(103, 'NIKHIL B', 'nikhilbandri@gmail.com', '', '1', '0', '0', NULL, NULL, '1995-02-07', 'India', '9118811166', 'No', 'No', 'No', NULL, '$2y$10$N.bZzQufyrH1Q8WIy9TfxuMaEb9cLV8FXp27c1j5poTm1jmexCOLy', NULL, '2025-01-25 04:56:45', '2025-01-25 04:56:45', NULL),
(104, 'Nirupam Barman', 'nirupam0007@gmail.com', '', '1', '0', '0', NULL, NULL, '1982-03-08', 'India', '9160197794', 'No', 'No', 'No', NULL, '$2y$10$aCzqzR7psV3TJpTxOyLY7OfcVGxf4Wq4iajChbbb52a3jgICQQGqO', NULL, '2025-01-25 05:07:18', '2025-01-25 05:07:18', NULL),
(105, 'GURUMURTHY NARAYANAN', 'narayanang1983@gmail.com', '', '1', '2937', '953', NULL, NULL, '1961-05-17', 'India', '8838711870', 'success', 'success', 'success', NULL, '$2y$10$F6mzoYENtIGw3jIvpBsgt.qec4U1DuIQ9XAPMdumZeyGgojvfmA3e', NULL, '2025-02-07 07:41:18', '2025-04-08 11:37:28', NULL),
(107, 'Dhru', 'sehel61897@owlny.com', '', '1', '0', '0', NULL, NULL, '1999-02-10', 'India', '9632587412', 'No', 'No', 'No', NULL, '$2y$10$fWq0tV4yma1Nr4qpuhdVO.xGhyXZsYVfCuiayaHWMZcm/JL8YxbJ.', NULL, '2025-02-10 06:41:51', '2025-02-10 06:41:51', NULL),
(108, 'Raghav', 'rs3586737@gmail.com', '', '1', '0', '0', NULL, NULL, '1985-02-02', 'India', '8855669988', 'No', 'No', 'No', NULL, '$2y$10$eejuT0rYmAAS7jXcDoYIXeyTmRkRjRoLkzcU4xG2k.FMC31PIINmS', NULL, '2025-02-11 18:51:33', '2025-02-11 18:51:33', NULL),
(109, 'MAHESH PATIL', 'mbpatil361@gmail.com', '', '1', '0', '0', NULL, NULL, '1998-05-10', 'India', '7619325193', 'No', 'No', 'No', NULL, '$2y$10$rKO7d0GsMYrfNldJjYVd2.ExVmdbVBVFugEDOQb24EbQz2QLbVZHu', NULL, '2025-02-12 17:18:56', '2025-02-12 17:18:56', NULL),
(110, 'Kapadia jaymin', 'jkapadia4167@gmail.com', '', '1', '0', '0', NULL, NULL, '1984-05-11', 'India', '8469441414', 'No', 'success', 'No', NULL, '$2y$10$./N1mFw3CQUrdmX6aCrmneFjpiPPRRLRHOo8brjarZPI6Y6qr32Mu', NULL, '2025-02-13 08:45:51', '2025-02-14 11:14:07', NULL),
(111, 'Allappa C', 'd.sachindra@gmail.com', '', '1', '0', '0', NULL, NULL, '1956-01-06', 'India', '9845674455', 'No', 'success', 'No', NULL, '$2y$10$6u1oIZYumq1AtVpsfaPYTOJ2B19ea7.6Tpsm4D7GX3U.BZqWLN45C', NULL, '2025-02-13 18:42:26', '2025-02-14 11:13:45', NULL),
(112, 'danish', 'danishkassar3045@gmail.com', '', '1', '0', '0', NULL, NULL, '1995-04-14', 'India', '9058840571', 'No', 'No', 'No', NULL, '$2y$10$Dx5udWT7Zm/pokiwnuP86OYhoD6A5p5GxR8F.8TWONvp78e2ytUW.', NULL, '2025-02-18 19:07:25', '2025-02-18 19:07:25', NULL),
(113, 'Mahendran Mani', 'mahedcx@gmail.com', '', '1', '0', '0', NULL, NULL, '1991-07-28', 'India', '8300644552', 'No', 'No', 'No', NULL, '$2y$10$Nk/JSoQK.cGLOh4X8V4qXOQof86mFXYHSOi0hwLYwtfiEjlEtH/jK', NULL, '2025-02-20 05:45:32', '2025-02-20 05:45:32', NULL),
(114, 'THULASIDAS,N', 'ntdakshathi@yahoo.co.in', '', '1', '0', '0', NULL, NULL, '1963-07-15', 'India', '9446683402', 'pending', 'pending', 'No', NULL, '$2y$10$4eP8nZdL0TmFAJ5wADDbIOEGTkRuWZ./BRbN6WMLC30kdh2OzGIMO', NULL, '2025-02-20 10:07:49', '2025-02-20 10:15:54', NULL),
(116, 'Parmeshwar singh gour', 'psgaur1986@gmail.com', '', '1', '0', '0', NULL, NULL, '1984-07-10', 'India', '9555077735', 'No', 'No', 'No', NULL, '$2y$10$fLm85EJUg0NTC/85rcxHle1vr.cpnTfPdg84/sPYjDC.KJKn/Ld6y', NULL, '2025-02-26 17:41:31', '2025-02-26 17:41:31', NULL),
(157, 'Hazrat alli', 'Hazratbd8.0@gmail.com', '', '1', '0', '0', NULL, NULL, '2025-03-20', 'Bangladesh', '1783195999', 'No', 'No', 'No', NULL, '$2y$10$wpk3RkbL0ZAO0hJlEgI0c.nFcjkj42vMrrW59NvTUFomzGDLFa1Ji', NULL, '2025-03-19 11:23:41', '2025-03-19 11:23:41', NULL),
(158, 'Nanya', 'raftelsingapore@gmail.com', '', '1', '1088', '0', 'BINANCE', 'TRON TRC (20)', '1998-01-20', 'India', '9036887154', 'success', 'success', 'No', NULL, '$2y$10$jsoq3Fu.THNLcsigtx43COJ5NUDhwFllfeVqwL62y8cSnSp8glzpC', NULL, '2025-03-19 11:27:48', '2025-03-24 08:02:09', 'TVK1omZL8pct42xwDPqgL6VCsQrLbQcif9'),
(159, 'nidhar', 'peacemain2020@gmail.com', '', '1', '0', '0', NULL, NULL, '1989-07-16', 'India', '7829593541', 'No', 'No', 'No', NULL, '$2y$10$g7YRomQXba2.E9cnLOTmc.TUclnxkdmtOGGXIyjdZPIIsszFYEkri', NULL, '2025-03-26 10:13:30', '2025-03-26 10:13:30', NULL),
(160, 'Ram Kumar', 'ramk69444@gmail.com', '', '1', '0', '0', NULL, NULL, '1980-01-01', 'India', '9893540403', 'No', 'No', 'No', NULL, '$2y$10$vOT8/TZqNmLpqX61BGFwle98KJhhGmA0Q4.7SkPEZyHyYAfWYLetG', NULL, '2025-03-27 07:39:58', '2025-03-27 07:39:58', NULL),
(161, 'Debjeet', 'dev_jeet18@yahoo.com', '', '1', '0', '0', NULL, NULL, '1988-03-21', 'India', '7046033233', 'No', 'No', 'No', NULL, '$2y$10$35ik8PW/WoUPSEi47qK84OJzaZTUwzpJxntac7Ez49Icyl2HWOtkK', NULL, '2025-03-27 09:32:24', '2025-03-27 09:32:24', NULL),
(163, 'Lalith Madanu', 'madanulalithmohan@gmail.com', '', '1', '0', '0', NULL, NULL, '1996-03-07', 'India', '7842263930', 'No', 'No', 'No', NULL, '$2y$10$VX3WGSMO85BrjMXoKgGh0OsMvihmirJa6YAWBuwBkmI9lljGhIxD.', NULL, '2025-04-17 12:09:19', '2025-04-17 12:09:19', NULL),
(164, 'Syed Khaja Mohiddin', 'ammumlk3@gmail.com', '', '1', '1101', '0', NULL, NULL, '1989-12-07', 'India', '8105222690', 'success', 'success', 'No', NULL, '$2y$10$mtx5acq6zme5lkQOujloEec3SagJu1na64C1gEZ3U7ym0a3Os807O', NULL, '2025-05-19 08:04:53', '2025-06-17 15:07:52', NULL),
(165, 'SUBHAJIT SARKAR', 'subhajit09.sarkar@gmail.com', '', '1', '0', '0', NULL, NULL, '1985-09-01', 'India', '7710092395', 'No', 'No', 'No', NULL, '$2y$10$1DJ6FUhEKXNx0kFSLFbWm.akV7JUe5WqSxYImoI5ASfjcvqWM77e6', NULL, '2025-05-19 16:49:35', '2025-05-30 15:26:35', NULL),
(166, 'Saleem Farheen Anjum', 'fareenanjum417@gmail.com', '', '1', '2149', '0', NULL, NULL, '1998-08-23', 'India', '7075070644', 'success', 'success', 'No', NULL, '$2y$10$mXGIeOmmkwIbJsyXKCxPwenkBzpijeQtNpuoyHHFyCakcFDMvsK/.', NULL, '2025-05-27 09:32:26', '2025-06-23 03:18:28', NULL),
(167, 'Toriya', 'toriya1600@gmail.com', 'https://backend.wimbledoninvestments.com/public/img/profile/842629IMG_20241117_124717.jpg', '1', '1040', '0', NULL, NULL, '1971-06-23', 'India', '919827540910', 'No', 'success', 'No', NULL, '$2y$10$9loTV2hrOUdKYxv5p69pS.TkLIayfCpiQB3FmJJUitW2zcVNVqgMu', NULL, '2025-06-05 07:16:31', '2025-06-23 03:25:22', NULL),
(168, 'PULLURI MAHESH', 'maheshammu@gmail.com', '', '1', '0', '0', NULL, NULL, '1984-08-05', 'India', '9989391188', 'No', 'success', 'No', NULL, '$2y$10$m9LeQOZKx6BAyTsIZ/qtIOcU90J9kdXQv2oU0jmJ.pg.rowLnzD8q', NULL, '2025-06-13 09:53:00', '2025-06-15 06:32:31', NULL),
(169, 'Arun Mangalkar', 'a.mangalkar@yahoo.com', '', '1', '0', '0', NULL, NULL, '1972-05-06', 'India', '9503110540', 'No', 'No', 'No', NULL, '$2y$10$NfofBHmvQOPVXc3gFlV7f.lx/woTRH.vevTYRiVO5ZFydsBe5qQ2.', NULL, '2025-06-15 04:07:45', '2025-06-15 04:07:45', NULL),
(170, 'Vijaykumar Budati', 'vijaykumarbudati@gmail.com', '', '1', '0', '0', NULL, NULL, '1982-07-10', 'India', '9000052911', 'No', 'pending', 'No', NULL, '$2y$10$QB5DP/g9jd9Zv.vt6Ukbg.1NHfkgNJmvBqAHBKJAFQ7dSeavIxu4y', NULL, '2025-06-15 18:42:49', '2025-06-15 18:47:31', NULL),
(171, 'Mandeep Singh Sandhu', 'sk.jobs@yahoo.com', '', '1', '0', '0', NULL, NULL, '1982-07-29', 'India', '9780401349', 'pending', 'pending', 'No', NULL, '$2y$10$0Q5G6Ya94NlTzZt11zDq4u6Yruc8WOeHkhdCaBVKFJw1lr48l0AO2', NULL, '2025-06-16 09:53:22', '2025-06-16 10:52:52', NULL),
(172, 'Bhavesh', 'Gem.bhavesh@gmail.com', '', '1', '0', '0', NULL, NULL, '1992-12-24', 'India', '9971174553', 'pending', 'pending', 'No', NULL, '$2y$10$Not/qKwWAYGuIbePANFEfuIkccJw.QBavTGx8HLBT6WL1ko9cp5ra', NULL, '2025-06-19 10:35:44', '2025-06-25 06:28:49', NULL),
(173, 'Siva', 'ananthasivamanik@gmail.com', '', '1', '0', '0', NULL, NULL, '1992-12-19', 'India', '9688361312', 'No', 'No', 'No', NULL, '$2y$10$kamwaEWlwDdSgAX.vjNTZuQCGXngiYh.fTmi.OycxgfBqMwJS5NrS', NULL, '2025-06-19 14:38:00', '2025-06-19 14:38:00', NULL),
(174, 'DINESH', 'drasticdinesh@gmail.com', '', '1', '0', '0', NULL, NULL, '1990-07-06', 'India', '9344520138', 'No', 'No', 'No', NULL, '$2y$10$BekM3WCfzCdXombi/NiqAeQoPR6eX15GhRbXFc0x6j/YHflkvhVkC', NULL, '2025-06-20 06:03:10', '2025-06-20 06:03:10', NULL),
(175, 'Sandeep', 'mallavarapusandeep.009@gmail.com', '', '1', '0', '0', NULL, NULL, '1992-01-19', 'India', '9121641817', 'No', 'No', 'No', NULL, '$2y$10$kiuOUXCi3XyEbVFKuMGe7OLow2gV.DZCgepiZXxUJYiWHJj8pbHN6', NULL, '2025-06-26 07:09:46', '2025-06-26 07:09:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `industry` varchar(255) DEFAULT NULL,
  `source_of_income` varchar(255) DEFAULT NULL,
  `est_annual_income` varchar(255) DEFAULT NULL,
  `est_net_worth` varchar(255) DEFAULT NULL,
  `ever_traded` varchar(255) DEFAULT NULL,
  `previous_work_exp` varchar(255) DEFAULT NULL,
  `are_you_us_citizen` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `employ` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `user_id`, `industry`, `source_of_income`, `est_annual_income`, `est_net_worth`, `ever_traded`, `previous_work_exp`, `are_you_us_citizen`, `created_at`, `updated_at`, `employ`) VALUES
(5, 21, 'Select', 'Other', 'Select', 'Less than 15,000', 'No', 'Select', 'Select', '2024-04-19 06:23:47', '2024-04-19 06:23:47', 'Self Employed'),
(6, 23, 'Select', 'Other', 'Select', 'Less than 15,000', 'No', 'Select', 'Select', '2024-04-25 06:28:49', '2024-04-25 06:28:49', 'Self Employed'),
(7, 26, 'Select', 'Other', 'Select', 'Less than 15,000', 'No', 'Select', 'Select', '2024-05-14 07:46:26', '2024-05-14 07:46:26', 'Retired'),
(8, 27, 'Select', 'Savings/ Investments', 'Select', '15001 – 25000', 'No', 'Select', 'Select', '2024-05-17 12:00:42', '2024-05-17 12:00:42', 'Employed'),
(9, 34, 'Education', 'Savings/ Investments', '15001 – 25000', '25001 – 50000', 'Yes', 'Yes', 'No', '2024-07-03 12:25:26', '2024-07-03 12:25:26', 'Student'),
(10, 35, 'Financial Services – Banking', 'Benefits/ Borrowing', 'Less than 15,000', 'Less than 15,000', 'Yes', 'Yes', 'No', '2024-07-04 08:35:50', '2024-07-04 08:35:50', 'Self Employed'),
(11, 37, 'IT', 'Savings/ Investments', 'Less than 15,000', '15001 – 25000', 'No', 'Yes', 'No', '2024-07-06 17:59:25', '2024-07-06 17:59:25', 'Employed'),
(12, 38, 'Other', 'Other', '15001 – 25000', '15001 – 25000', 'No', 'No', 'No', '2024-07-10 11:48:18', '2024-07-10 11:48:18', 'Employed'),
(13, 43, 'Select', 'Employment', 'Select', 'Less than 15,000', 'No', 'Select', 'Select', '2024-07-15 08:15:35', '2024-07-15 08:15:35', 'Employed'),
(19, 55, 'Telecommunications', 'Employment', 'Select', 'Select', 'No', 'Yes', 'No', '2024-07-26 13:23:22', '2024-07-26 13:23:22', 'Employed'),
(20, 58, 'IT', 'Savings/ Investments', 'Select', 'Less than 15,000', 'Yes', 'No', 'No', '2024-08-03 13:34:52', '2024-08-03 13:34:52', 'Employed'),
(22, 74, 'Financial Services – Insurance', 'Employment', 'Less than 15,000', 'Less than 15,000', 'No', 'No', 'No', '2024-08-12 07:26:10', '2024-08-12 07:26:10', 'Employed'),
(25, 77, 'Other', 'Employment', 'Less than 15,000', 'Less than 15,000', 'No', 'No', 'No', '2024-08-21 05:39:17', '2024-08-21 05:39:17', 'Employed'),
(26, 79, 'Other', 'Other', 'Select', 'Less than 15,000', 'No', 'No', 'No', '2024-08-27 08:45:30', '2024-09-02 08:41:22', 'Employed'),
(27, 81, 'Financial Services – Banking', 'Employment', '25001 – 50000', '50001 – 100000', 'Yes', 'Yes', 'No', '2024-08-29 16:25:46', '2024-08-29 16:25:46', 'Employed'),
(28, 85, 'Health/Medicine', 'Employment', 'Less than 15,000', 'Less than 15,000', 'No', 'No', 'No', '2024-09-02 08:46:53', '2024-09-02 08:46:53', 'Employed'),
(29, 86, 'Manufacturing', 'Employment', 'Less than 15,000', 'Less than 15,000', 'No', 'No', 'No', '2024-09-03 06:53:29', '2024-09-03 06:53:29', 'Employed'),
(30, 87, 'Select', 'Savings/ Investments', 'Select', 'Less than 15,000', 'No', 'Select', 'Select', '2024-09-10 06:03:59', '2024-09-10 06:03:59', 'Retired'),
(31, 93, 'Select', 'Select', 'Select', 'Select', 'Select', 'Select', 'Select', '2024-11-16 08:13:03', '2024-11-16 08:13:03', 'Select'),
(32, 100, 'Admin/ Secretarial', 'Employment', 'Less than 15,000', 'Less than 15,000', 'No', 'No', 'No', '2025-01-21 06:05:31', '2025-01-21 06:05:31', 'Employed'),
(33, 101, 'Accountancy', 'Other', '15001 – 25000', '15001 – 25000', 'No', 'No', 'No', '2025-01-21 07:20:49', '2025-01-21 07:20:49', 'Employed'),
(34, 105, 'Engineering', 'Savings/ Investments', 'Select', '15001 – 25000', 'No', 'No', 'No', '2025-02-07 10:29:15', '2025-02-07 10:29:15', 'Retired');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kycs`
--
ALTER TABLE `kycs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kycs_user_id_foreign` (`user_id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nominees`
--
ALTER TABLE `nominees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nominees_email_unique` (`email`),
  ADD KEY `nominees_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_user_id_foreign` (`user_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `platforms`
--
ALTER TABLE `platforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`),
  ADD KEY `works_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kycs`
--
ALTER TABLE `kycs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=484;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `nominees`
--
ALTER TABLE `nominees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `platforms`
--
ALTER TABLE `platforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kycs`
--
ALTER TABLE `kycs`
  ADD CONSTRAINT `kycs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nominees`
--
ALTER TABLE `nominees`
  ADD CONSTRAINT `nominees_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `platforms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `works`
--
ALTER TABLE `works`
  ADD CONSTRAINT `works_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
