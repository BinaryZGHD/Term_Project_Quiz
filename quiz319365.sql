-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: DBquiz3
-- Generation Time: Mar 19, 2022 at 11:22 AM
-- Server version: 5.7.34
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz3`
--

-- --------------------------------------------------------

--
-- Table structure for table `choice`
--

CREATE TABLE `choice` (
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ch_qs_id` int(11) NOT NULL,
  `ch_no` int(11) NOT NULL,
  `ch_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `choice`
--

INSERT INTO `choice` (`created_at`, `ch_qs_id`, `ch_no`, `ch_desc`) VALUES
('2022-03-18 07:50:15', 1, 2, 'แล้วฉันเลือกอะไรได้ไหม'),
('2022-03-18 12:20:20', 1, 3, 'ให้มันได้อย่างงี้สิ'),
('2022-03-18 12:19:41', 1, 4, 'เธอช่วยบอกฉันหน่อยได้ไหม'),
('2022-03-17 06:20:40', 2, 2, 'ข้อมูลไม่เป็นอิสระต่อกัน'),
('2022-03-17 06:21:54', 3, 1, 'อะไรเอ๋ยสวยๆ เฟิร์น หรือ นิ้ง\r\nคำตอบ.... ชิน'),
('2022-03-18 07:23:47', 4, 1, 'จำไว้ฉันจะไม่ทน');

-- --------------------------------------------------------

--
-- Table structure for table `class_check`
--

CREATE TABLE `class_check` (
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cc_id` int(11) NOT NULL,
  `cc_year` char(4) NOT NULL,
  `cc_term` char(1) NOT NULL,
  `cc_crs_code` varchar(10) NOT NULL,
  `cc_sect` varchar(4) NOT NULL,
  `cc_date` date NOT NULL,
  `cc_time` time NOT NULL,
  `cc_ex_times` varchar(20) DEFAULT NULL,
  `cc_tch_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class_check`
--

INSERT INTO `class_check` (`created_at`, `cc_id`, `cc_year`, `cc_term`, `cc_crs_code`, `cc_sect`, `cc_date`, `cc_time`, `cc_ex_times`, `cc_tch_code`) VALUES
('2022-03-18 09:16:00', 1, '2565', '1', 'CSC001', '1', '2022-03-17', '00:09:00', NULL, 'TC0001'),
('2022-03-18 09:16:00', 2, '2565', '1', 'CSC002', '2', '2022-03-18', '09:00:00', NULL, 'TC0002'),
('2022-03-19 00:49:12', 6, '6', '6', '6', '6', '2022-03-19', '07:54:00', '6', '6'),
('2022-03-18 09:52:23', 9, '8', '7', '6', '5', '2022-03-19', '18:55:00', '99', '3');

-- --------------------------------------------------------

--
-- Table structure for table `class_check_student`
--

CREATE TABLE `class_check_student` (
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ccs_cc_id` int(11) NOT NULL,
  `ccs_std_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_check_student`
--

INSERT INTO `class_check_student` (`created_at`, `ccs_cc_id`, `ccs_std_code`) VALUES
('2022-03-18 09:14:16', 1, 'SC62030282'),
('2022-03-18 09:14:16', 2, 'SC62030316');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `crs_code` varchar(10) NOT NULL,
  `crs_name` varchar(45) NOT NULL,
  `crs_active` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`crs_code`, `crs_name`, `crs_active`) VALUES
('CSC001', 'Elementary Probability and Applications', '1'),
('CSC002', 'Introduction to Complex Variables', '2'),
('CSC003', 'Mathematical Analysis', '3'),
('CSC004', 'Graph Theory and Applications', '4');

-- --------------------------------------------------------

--
-- Table structure for table `course_config`
--

CREATE TABLE `course_config` (
  `ccf_year` char(4) NOT NULL,
  `ccf_term` char(1) NOT NULL,
  `ccf_crs_code` varchar(10) NOT NULL,
  `ccf_num_exam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course_config`
--

INSERT INTO `course_config` (`ccf_year`, `ccf_term`, `ccf_crs_code`, `ccf_num_exam`) VALUES
('2565', '1', 'CSC001', 1),
('2565', '1', 'CSC002', 2);

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `enr_year` char(4) NOT NULL,
  `enr_term` char(1) NOT NULL,
  `enr_crs_code` varchar(10) NOT NULL,
  `enr_sect` varchar(4) NOT NULL,
  `enr_seq` int(11) NOT NULL,
  `enr_std_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enroll`
--

INSERT INTO `enroll` (`enr_year`, `enr_term`, `enr_crs_code`, `enr_sect`, `enr_seq`, `enr_std_code`) VALUES
('2565', '1', 'CSC001', '0001', 1, 'SC62030282'),
('2565', '1', 'CSC002', '0002', 2, 'SC62030316'),
('2566', '2', 'TT12345', '0003', 3, 'TS62030080');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `ex_id` int(11) NOT NULL,
  `ex_year` char(4) NOT NULL,
  `ex_term` char(1) NOT NULL,
  `ex_crs_code` varchar(10) NOT NULL,
  `ex_crs_sect` varchar(4) NOT NULL,
  `ex_std_code` varchar(10) NOT NULL,
  `ex_time` int(11) NOT NULL,
  `ex_date_time_start` datetime DEFAULT NULL,
  `ex_date_time_end` datetime DEFAULT NULL,
  `ex_total_score` int(11) DEFAULT NULL,
  `ex_commit_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`ex_id`, `ex_year`, `ex_term`, `ex_crs_code`, `ex_crs_sect`, `ex_std_code`, `ex_time`, `ex_date_time_start`, `ex_date_time_end`, `ex_total_score`, `ex_commit_type`) VALUES
(1, '2565', '1', 'CSC001', '0001', 'SC62030282', 6, '2022-03-17 02:00:00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exam_control`
--

CREATE TABLE `exam_control` (
  `exc_id` int(11) NOT NULL,
  `exc_year` char(4) NOT NULL,
  `exc_term` char(1) NOT NULL,
  `exc_crs_code` varchar(10) NOT NULL,
  `exc_sect` varchar(4) NOT NULL,
  `exc_tch_code` varchar(20) NOT NULL,
  `exc_time` int(11) NOT NULL,
  `exc_status` varchar(10) DEFAULT NULL,
  `exc_date_start` datetime DEFAULT NULL,
  `exc_date_stop` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exam_control`
--

INSERT INTO `exam_control` (`exc_id`, `exc_year`, `exc_term`, `exc_crs_code`, `exc_sect`, `exc_tch_code`, `exc_time`, `exc_status`, `exc_date_start`, `exc_date_stop`) VALUES
(1, '2565', '1', 'CSC001', '0001', 'TC0001', 3, 'TRUE', '2022-03-17 00:00:00', '2022-03-17 02:00:00'),
(2, '2565', '1', 'CSC002', '0002', 'TC0002', 3, 'FALSE', '2022-03-18 00:00:00', '2022-03-18 03:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `exam_question`
--

CREATE TABLE `exam_question` (
  `eq_ex_id` int(11) NOT NULL,
  `eq_seq` int(11) NOT NULL,
  `eq_qs_id` int(11) NOT NULL,
  `eq_qs_ans` int(11) NOT NULL,
  `eq_qs_score` int(11) NOT NULL,
  `eq_date_time` datetime DEFAULT NULL,
  `eq_ans_no` int(11) DEFAULT NULL,
  `eq_score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exam_question`
--

INSERT INTO `exam_question` (`eq_ex_id`, `eq_seq`, `eq_qs_id`, `eq_qs_ans`, `eq_qs_score`, `eq_date_time`, `eq_ans_no`, `eq_score`) VALUES
(1, 1, 1, 1, 3, '2022-03-17 02:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fac_code` varchar(3) NOT NULL,
  `fac_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fac_code`, `fac_name`) VALUES
('F01', 'คณะวิทยาศาสตร์'),
('F02', 'คณะวิทยาการสารสนเทศ'),
('F03', 'คณะศึกษาศาสตร์'),
('F04', 'คณะวิศวกรรมศาสตร์');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(6, '2022_03_17_055301_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `qs_id` int(11) NOT NULL,
  `qs_question` text NOT NULL,
  `qs_ch_no_ans` int(11) NOT NULL,
  `qs_ex_time` varchar(11) NOT NULL,
  `qs_score` int(11) NOT NULL,
  `qs_crs_code` varchar(10) NOT NULL,
  `qs_tch_code` varchar(20) NOT NULL,
  `qs_ex_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qs_id`, `qs_question`, `qs_ch_no_ans`, `qs_ex_time`, `qs_score`, `qs_crs_code`, `qs_tch_code`, `qs_ex_date`) VALUES
(1, 'ข้อใดคือความหมายของฐานข้อมูล', 1, '6', 3, 'CSC001', 'TC0001', '2022-03-17 03:00:00'),
(2, 'ข้อใด ไม่ใช่ ความสำคัญของการนำฐานข้อมูลมาใช้', 1, '6', 3, 'CSC001', 'TC0001', '2022-03-17 00:17:00'),
(3, '<!-- ใน php เราเป็น int(11) เป็น vachar ของ qs_ex_time -->', 3, '10:33', 333, '54', '3', '2022-03-19 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('BdxwrqVv7bIkzdjoD7ASdL4aDgcU1LX86IxHqOdt', NULL, '10.70.20.134', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.74 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWGpIeXE2dHRhTXc0U1pNVjRQWXpvb0pneFB5ZlM4b0tvampEUHBsQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9kZWt3YXQuYnV1LmluLnRoOjE1MTEwL3N0YXR1c3dvcmsiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1647688959);

-- --------------------------------------------------------

--
-- Table structure for table `STATUS`
--

CREATE TABLE `STATUS` (
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ADMIN` varchar(10) NOT NULL,
  `ID` int(10) NOT NULL,
  `TIME` varchar(10) NOT NULL,
  `NUMEDIT` int(10) NOT NULL,
  `DETAIL` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `STATUS`
--

INSERT INTO `STATUS` (`created_at`, `update_at`, `ADMIN`, `ID`, `TIME`, `NUMEDIT`, `DETAIL`) VALUES
('2022-03-19 10:37:46', '2022-03-19 10:37:46', 'คำแช่ง', 1, '', 404, 'ออน์ไลน์'),
('2022-03-19 00:00:00', '2022-03-19 00:00:00', 'ต้นสาย', 2, '', 404, 'ออฟไลน์'),
('2022-03-19 10:37:12', '2022-03-19 10:37:12', 'หน่องนิ้ง', 3, '', 404, 'ออฟไลน์'),
('2022-03-19 10:40:05', '2022-03-19 10:40:05', '404', 4, '', 404, '404'),
('2022-03-19 10:40:24', '2022-03-19 10:40:24', '404', 5, '', 404, '404'),
('2022-03-19 10:40:28', '2022-03-19 10:40:28', '404', 6, '', 404, '404'),
('2022-03-19 11:10:28', '2022-03-19 11:10:28', 'ICN', 8, '10:42', 0, 'ทดสอบสถานะเริ่มต้น 1'),
('2022-03-19 00:00:00', '2022-03-19 11:11:22', 'ICN', 9, '10:48', 1, 'เพิ่ม status  teacher student question ปรับชื่อ ไม่ตรงกันของ  | choice | class_check | class_check_student | teacher_teach |  ปรับลิงค์ให้ตรงกับไฟล์web  สำรอง https://github.com/62030340/Term_Project_Quiz_MATH.gitและhttp://gitlab.buu.in.th/62030340/term_project_quiz_3_math.git'),
('2022-03-19 00:00:00', '2022-03-19 11:12:07', 'TS', 10, '13:55', 1, 'Add enroll and edit course_config *can\'t make delete of enroll with 2 var*'),
('2022-03-19 11:09:22', '2022-03-19 18:20:06', 'ICN', 11, '18:08', 2, 'แก้ exam  ต่อจากสาย แก้ ในController index edit update store  create || destroy ลบ หลายตัวแปลยังไม่ได้ นำ exam มาโชว์ เพิ่ม แก้ไข้ได้แล้ว แต่หลายตัวแปรยังไม่ได้ทุกตาราง');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `std_code` varchar(10) NOT NULL,
  `std_name` varchar(45) NOT NULL,
  `std_email` varchar(45) DEFAULT NULL,
  `std_fac_code` varchar(3) DEFAULT NULL,
  `std_user_login` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_code`, `std_name`, `std_email`, `std_fac_code`, `std_user_login`) VALUES
('SC62030282', 'นางสาวสุทธิดา ตองติดรัมย์', '62030282@student.com', 'F01', 'SUL62030282'),
('SC62030316', 'นายชนาธิป พึ่งธรรมศักดา', '62030316@student.com', 'F02', 'SUL62030316');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tch_code` varchar(20) NOT NULL,
  `tch_name` varchar(45) NOT NULL,
  `tch_email` varchar(45) DEFAULT NULL,
  `tch_fac_code` varchar(3) DEFAULT NULL,
  `tch_user_login` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`created_at`, `tch_code`, `tch_name`, `tch_email`, `tch_fac_code`, `tch_user_login`) VALUES
('2022-03-18 13:11:35', 'TC0001', 'รองศาสตราจารย์ ดร.วัชรินทร์ กาสลัก', 'TCE0001@tch.com', 'F01', 'TUL0001'),
('2022-03-18 13:11:35', 'TC0002', 'รองศาสตราจารย์ ดร.สมถวิล จริตควร', 'TCE0002@tch.com', 'F02', 'TUL0002'),
('2022-03-18 13:11:35', 'TC0003', 'รองศาสตราจารย์ ดร.จิตติมา เจริญพานิช', 'TCE0003@tch.com', 'F03', 'TUL0003'),
('2022-03-18 13:11:35', 'TC0004', 'ผู้ช่วยศาสตราจารย์ ดร.เอกวิทย์ โทปุรินทร์', 'TCE0004@tch.com', 'F04', 'TUL0004');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_teach`
--

CREATE TABLE `teacher_teach` (
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tt_year` char(4) NOT NULL,
  `tt_term` char(1) NOT NULL,
  `tt_crs_code` varchar(10) NOT NULL,
  `tt_sect` varchar(4) NOT NULL,
  `tt_tch_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher_teach`
--

INSERT INTO `teacher_teach` (`created_at`, `tt_year`, `tt_term`, `tt_crs_code`, `tt_sect`, `tt_tch_code`) VALUES
('2022-03-18 13:11:15', '2565', '1', 'CSC001', '0001', 'TC0001'),
('2022-03-18 13:11:15', '2565', '1', 'CSC002', '0002', 'TC0002');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_login` varchar(50) NOT NULL DEFAULT '"',
  `user_pwd` varchar(32) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `user_type` char(1) NOT NULL,
  `user_authen_ldap` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_login`, `user_pwd`, `user_name`, `user_type`, `user_authen_ldap`) VALUES
(1, 'SUL62030282', '123456', 'นางสาวสุทธิดา ตองติดรัมย์', '1', '1'),
(2, 'TUL0001', '123456', 'รองศาสตราจารย์ ดร.วัชรินทร์ กาสลัก', '0', '0');

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'ADMINELLE9', 'oonniihhcc@gmail.com', NULL, '$2y$10$6b77W1MQ87z9cy2lhdAqruXuZPApWIh0/5LaDnzoH192m9GJGJHl6', NULL, NULL, NULL, '2022-03-17 05:59:15', '2022-03-17 05:59:15'),
(4, 't', 't@gmail.com', NULL, '$2y$10$OJ3xHeCZwjnyYCt51Ibk6.pA/a/goacv7R2Jl2ehmZsCtCye5S/U6', NULL, NULL, NULL, '2022-03-17 06:05:03', '2022-03-17 06:05:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choice`
--
ALTER TABLE `choice`
  ADD PRIMARY KEY (`ch_qs_id`,`ch_no`);

--
-- Indexes for table `class_check`
--
ALTER TABLE `class_check`
  ADD PRIMARY KEY (`cc_id`);

--
-- Indexes for table `class_check_student`
--
ALTER TABLE `class_check_student`
  ADD PRIMARY KEY (`ccs_cc_id`,`ccs_std_code`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`crs_code`);

--
-- Indexes for table `course_config`
--
ALTER TABLE `course_config`
  ADD PRIMARY KEY (`ccf_year`,`ccf_term`,`ccf_crs_code`);

--
-- Indexes for table `enroll`
--
ALTER TABLE `enroll`
  ADD PRIMARY KEY (`enr_year`,`enr_term`,`enr_crs_code`,`enr_sect`,`enr_seq`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`ex_id`);

--
-- Indexes for table `exam_control`
--
ALTER TABLE `exam_control`
  ADD PRIMARY KEY (`exc_id`);

--
-- Indexes for table `exam_question`
--
ALTER TABLE `exam_question`
  ADD PRIMARY KEY (`eq_ex_id`,`eq_seq`,`eq_qs_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fac_code`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qs_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `STATUS`
--
ALTER TABLE `STATUS`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_code`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tch_code`),
  ADD UNIQUE KEY `tch_user_login` (`tch_user_login`);

--
-- Indexes for table `teacher_teach`
--
ALTER TABLE `teacher_teach`
  ADD PRIMARY KEY (`tt_year`,`tt_term`,`tt_crs_code`,`tt_sect`,`tt_tch_code`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_login` (`user_login`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `STATUS`
--
ALTER TABLE `STATUS`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
