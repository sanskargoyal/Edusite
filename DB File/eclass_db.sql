-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2021 at 07:46 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eclass_db`
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
(1, 'admin', 'admin@gmail.com', 'admin', '2021-08-11 06:11:31', '2021-08-11 06:11:31');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` int(11) NOT NULL,
  `branch_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `department_id`, `branch_name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 'Information Technology', 'Information Technology: Basic course details. It is a 4 years long Undergraduate Level Degree program. ... Information Technology branch consists of topics related to Information management (storage and retrieving) , Information security, Software engineering, Computer Science, web scripting etc.', 1, '2021-08-12 21:10:39', '2021-08-12 21:10:39'),
(3, 2, 'Computer Science', 'Computer Science Engineering (CSE) encompasses a variety of topics that relates to computation, like analysis of algorithms, programming languages, program design, software, and computer hardware. Computer Science engineering has roots in electrical engineering, mathematics, and linguistics.', 1, '2021-08-12 21:11:05', '2021-08-12 21:11:05'),
(4, 2, 'Mechanical', 'Mechanical engineering is an engineering branch that combines engineering physics and mathematics principles with materials science to design, analyze, manufacture, and maintain mechanical systems. ... It is the branch of engineering that involves the design, production, and operation of machinery.', 1, '2021-08-12 21:11:29', '2021-08-12 21:11:29'),
(5, 2, 'Civil', 'Civil engineering is a professional engineering discipline that deals with the design, construction, and maintenance of the physical and naturally built environment, including public works such as roads, bridges, canals, dams, airports, sewage systems, pipelines, structural components of buildings, and railways.', 1, '2021-08-12 21:11:47', '2021-08-12 21:11:47');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Sanskar Goyal', '167sanskargoyal@gmail.com', 'a', 'a', '2021-08-12 03:49:55', '2021-08-12 03:49:55'),
(2, 'Sanskar Goyal', '167sanskargoyal@gmail.com', 'a', 'a', '2021-08-12 03:50:25', '2021-08-12 03:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'B.tech', 'B. Tech or Bachelor of Technology is an undergraduate degree programme in the engineering field. It is offered in various disciplines like computer science and engineering, civil engineering, mechanical engineering, electrical engineering, electronics engineering etc', 1, '2021-08-12 21:07:03', '2021-08-12 21:07:03'),
(3, 'M.Tech', 'In India, the ME/MTech degree is offered across various specializations. These specializations include Civil Engineering, Computer Science and Engineering, Chemical Engineering, Electrical Engineering, VLSI, Mechanical Engineering, Electronics and Communication Engineering etc', 1, '2021-08-12 21:07:35', '2021-08-12 21:07:35'),
(4, 'BCA', 'BACHELOR OF COMPUTER APPLICATION (BCA) The Department of Computer Science & Engineering was established in the year 2018. ... One is to provide students with the fundamental knowledge and problem solving skills in Computer Science and Application required for a fulfilling career.', 1, '2021-08-12 21:07:53', '2021-08-12 21:07:53'),
(5, 'MCA', 'About MCA. The Department of Computer Applications (MCA) was started in the year 2001, started with an intake of 60 students. ... It comprises a comprehensive and integrated sequence of courses aiming to develop knowledge and skills in all areas of Computer Applications.', 1, '2021-08-12 21:08:10', '2021-08-12 21:08:10');

-- --------------------------------------------------------

--
-- Table structure for table `examinations`
--

CREATE TABLE `examinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `exam_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass_mark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `re_exam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `terms` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `examinations`
--

INSERT INTO `examinations` (`id`, `department_id`, `branch_id`, `subject_id`, `exam_name`, `start_date`, `deadline`, `start_time`, `end_time`, `pass_mark`, `re_exam`, `terms`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 2, 'Mid Semester', '2021-08-13', '2021-08-13', '21:19', '12:19', '33', '15', 'Everyone', 1, '2021-08-13 01:16:05', '2021-08-13 01:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `fname`, `lname`, `gender`, `email`, `password`, `phone`, `dob`, `department_id`, `branch_id`, `address`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Sunil', 'Kumar', 'Male', 'sunil@gmail.com', 'sunil', '12345678', '2021-08-06', 2, 2, 'Kanpur', 1, '2021-08-12 21:25:40', '2021-08-12 21:25:40'),
(3, 'Subhendra', 'Kumar', 'Male', 'subhendra@gmail.com', '', '123456', '2021-08-10', 2, 2, 'Kanpur', 1, '2021-08-12 21:26:21', '2021-08-12 21:26:21');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `lecture_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`id`, `department_id`, `branch_id`, `subject_id`, `lecture_video`, `topic`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 2, '1628833464.mp4', 'abc', 1, '2021-08-13 00:14:24', '2021-08-13 03:27:26'),
(3, 2, 2, 2, '1628844915.mp4', 'a', 1, '2021-08-13 03:25:16', '2021-08-13 03:25:16');

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
(1, '2021_08_11_055548_create_admins_table', 1),
(2, '2021_08_11_071643_create_departments_table', 2),
(3, '2021_08_11_075712_create_branches_table', 3),
(4, '2021_08_11_063105_create_students_table', 4),
(5, '2021_08_11_090858_create_faculties_table', 5),
(6, '2021_08_12_020034_create_subjects_table', 6),
(7, '2021_08_12_021656_create_lectures_table', 7),
(8, '2021_08_12_023859_create_notices_table', 8),
(9, '2021_08_12_025047_create_examinations_table', 9),
(10, '2021_08_12_035418_create_questions_table', 10),
(11, '2021_08_12_091404_contact', 11);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ABC', 'abc', 1, '2021-08-11 21:18:36', '2021-08-11 21:19:53'),
(2, 'Assessments', 'every student is required to take his/her assessment on time, fail to do that the instructor wont re-enable the assessment again.', 1, '2021-08-13 02:09:37', '2021-08-13 02:09:37');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` int(11) NOT NULL,
  `question` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `opt1` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `opt2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `opt3` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `opt4` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `exam_id`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'b', 'a', 'a', 'a', 'a', 'option1', 1, '2021-08-11 23:54:41', '2021-08-12 00:39:20'),
(2, 1, 'a', 'a', 'a', 'a', 'a', 'option3', 1, '2021-08-11 23:54:54', '2021-08-11 23:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `gender`, `email`, `password`, `phone`, `dob`, `department_id`, `branch_id`, `address`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Sanskar', 'Goyal', 'Male', 'sanskargoyal@gmail.com', 'sanskar', '9870891172', '2021-08-11', 2, 2, 'Gautam Nagar Colony Krishna Puri Chaurah Mathura', 1, '2021-08-12 21:24:31', '2021-08-12 21:24:31'),
(4, 'Aman', 'Kumar', 'Male', 'aman@gmail.com', NULL, '1234567890', '2021-08-11', 2, 2, 'Bareily', 1, '2021-08-12 21:25:04', '2021-08-12 21:25:04');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `subject_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `department_id`, `branch_id`, `subject_name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 'Operating System', 'An operating system (OS) is system software that manages computer hardware, software resources, and provides common services for computer programs. ... Operating systems are found on many devices that contain a computer – from cellular phones and video game consoles to web servers and supercomputers.', 1, '2021-08-12 21:13:35', '2021-08-12 21:13:35'),
(3, 2, 2, 'Data Structure', 'A data structure is a particular way of organizing data in a computer so that it can be used effectively. For example, we can store a list of items having the same data-type using the array data structure. This page contains detailed tutorials on different data structures (DS) with topic-wise problems.', 1, '2021-08-12 21:14:17', '2021-08-12 21:14:17'),
(4, 2, 2, 'Algorithm', 'Algorithm Basics. The word Algorithm means “a process or set of rules to be followed in calculations or other problem-solving operations', 1, '2021-08-12 21:14:44', '2021-08-12 21:14:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examinations`
--
ALTER TABLE `examinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `examinations`
--
ALTER TABLE `examinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lectures`
--
ALTER TABLE `lectures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
