-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2024 at 01:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobseeker_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(30) NOT NULL,
  `admin_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `admin_id`, `first_name`, `last_name`, `contact`, `password`, `date`) VALUES
(1, '10002', 'Adnan', 'Mahmud', '013585426874', '1234', '2024-04-17 13:11:49');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `ApplicationID` varchar(14) NOT NULL,
  `UserID` varchar(14) NOT NULL,
  `CompanyID` varchar(14) NOT NULL,
  `EmploymentType` varchar(100) DEFAULT NULL,
  `JobPostID` varchar(14) NOT NULL,
  `ApplyDate` datetime NOT NULL,
  `condition` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`ApplicationID`, `UserID`, `CompanyID`, `EmploymentType`, `JobPostID`, `ApplyDate`, `condition`) VALUES
('15634553', '15656656', '14615966', 'Full time', '', '2024-04-06 13:17:51', ''),
('01253636', '2151003', '20240315174017', 'Full time', '20240315190028', '2024-04-06 14:52:38', 'Approved'),
('11111', '11111', '11111', '11111', '11111', '2024-04-08 11:05:57', 'requesting');

-- --------------------------------------------------------

--
-- Table structure for table `awards_info`
--

CREATE TABLE `awards_info` (
  `awards_info_Id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `awardTitle` varchar(255) DEFAULT NULL,
  `dateReceived` varchar(10) DEFAULT NULL,
  `reasonForAward` varchar(2555) DEFAULT NULL,
  `contextOfAward` varchar(2555) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `awards_info`
--

INSERT INTO `awards_info` (`awards_info_Id`, `user_id`, `awardTitle`, `dateReceived`, `reasonForAward`, `contextOfAward`) VALUES
(11111, 11111, '11111', '11111', '11111', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `certifications_info`
--

CREATE TABLE `certifications_info` (
  `user_id` int(11) DEFAULT NULL,
  `Certification_Id` int(11) NOT NULL,
  `certificationTitle` varchar(255) DEFAULT NULL,
  `instituteName` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `startDate` varchar(10) DEFAULT NULL,
  `endDate` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certifications_info`
--

INSERT INTO `certifications_info` (`user_id`, `Certification_Id`, `certificationTitle`, `instituteName`, `location`, `startDate`, `endDate`) VALUES
(11111, 11111, '11111', '11111', '11111', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `company_id` varchar(14) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_description` text DEFAULT NULL,
  `website_link` varchar(255) DEFAULT NULL,
  `company_type` varchar(100) DEFAULT NULL,
  `company_location` varchar(255) DEFAULT NULL,
  `social_link` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`company_id`, `company_name`, `company_description`, `website_link`, `company_type`, `company_location`, `social_link`, `status`) VALUES
('20240315174017', 'xyzCompany', 'It company', 'xyzcompany.com', 'IT', 'Dhaka\r\nSavar', 'facebook', ''),
('20240417221253', 'ADFGAERBAE', 'ASFABAEBN', 'ASFFAFB', 'ADFABHB', 'ARGAB', 'ADDBADFB', 'unpublished');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `Contact_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `present_address` varchar(255) NOT NULL,
  `permanent_address` varchar(255) NOT NULL,
  `secondary_phone_no` varchar(15) NOT NULL,
  `emergency_phone_no` varchar(15) NOT NULL,
  `secondary_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`Contact_id`, `user_id`, `present_address`, `permanent_address`, `secondary_phone_no`, `emergency_phone_no`, `secondary_email`) VALUES
(11111, 11111, '11111', '1111111111', '11111', '11111', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `co_curricular_activities_info`
--

CREATE TABLE `co_curricular_activities_info` (
  `co_cur_act_Id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `activitiesName` varchar(255) DEFAULT NULL,
  `workexperience` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `co_curricular_activities_info`
--

INSERT INTO `co_curricular_activities_info` (`co_cur_act_Id`, `user_id`, `activitiesName`, `workexperience`) VALUES
(11111, 11111, '11111', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `education_history`
--

CREATE TABLE `education_history` (
  `user_id` int(11) DEFAULT NULL,
  `Ac_Quali_Id` int(11) NOT NULL,
  `levelOfEdu` varchar(255) DEFAULT NULL,
  `degreeTitle` varchar(255) DEFAULT NULL,
  `board` varchar(255) DEFAULT NULL,
  `groupandMajor` varchar(255) DEFAULT NULL,
  `institutionName` varchar(255) DEFAULT NULL,
  `result` varchar(255) DEFAULT NULL,
  `gpa` varchar(10) DEFAULT NULL,
  `passingYear` varchar(4) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education_history`
--

INSERT INTO `education_history` (`user_id`, `Ac_Quali_Id`, `levelOfEdu`, `degreeTitle`, `board`, `groupandMajor`, `institutionName`, `result`, `gpa`, `passingYear`, `duration`) VALUES
(11111, 11111, '11111', '11111', '11111', '11111', '11111', '11111', '11111', '1111', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `employe_info`
--

CREATE TABLE `employe_info` (
  `user_id` int(11) DEFAULT NULL,
  `employe_info_Id` int(11) NOT NULL,
  `present_salary` varchar(255) DEFAULT NULL,
  `expected_salary` varchar(255) DEFAULT NULL,
  `job_level` varchar(255) DEFAULT NULL,
  `job_nature` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employe_info`
--

INSERT INTO `employe_info` (`user_id`, `employe_info_Id`, `present_salary`, `expected_salary`, `job_level`, `job_nature`) VALUES
(11111, 11111, '11111', '11111', '11111', '11111'),
(2151003, 4564563, '7465\r\n', 'dgs', 'dfg', 'dfgsg');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` char(20) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_description` varchar(255) NOT NULL,
  `organizer_name` varchar(255) NOT NULL,
  `event_location` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `social_link` varchar(255) NOT NULL,
  `banner_path` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_description`, `organizer_name`, `event_location`, `start_date`, `end_date`, `social_link`, `banner_path`, `status`) VALUES
('20240502190129', 'ff', 'f', 'f', 'f', '2024-05-03', '2024-05-06', 'f', 'banner', 'published'),
('2147483647', 'Ccccppp', 'sDFasdv', 'adnan.com', 'sdavas', '2024-04-19', '2024-04-22', 'svSV', 'banner', 'published');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_register_info`
--

CREATE TABLE `jobseeker_register_info` (
  `user_id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobseeker_register_info`
--

INSERT INTO `jobseeker_register_info` (`user_id`, `name`, `phone_no`, `address`, `email`, `password`) VALUES
(11111, '11111', '11111', '11111', '11111', '11111'),
(2151003, 'ADnan', '01641378317', 'sfgadh', 'dafhatednh', 'adgndangt'),
(15656656, 'mahmmud', '01245863384', 'aefbaafbbaba', 'afbafbf', 'afdbadfb');

-- --------------------------------------------------------

--
-- Table structure for table `job_posts`
--

CREATE TABLE `job_posts` (
  `job_id` varchar(14) NOT NULL,
  `company_id` varchar(14) NOT NULL,
  `location` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `workplace_type` varchar(50) NOT NULL,
  `job_type` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `job_description` text DEFAULT NULL,
  `job_responsibilities` text DEFAULT NULL,
  `job_requirement` text DEFAULT NULL,
  `additional_requirement` text DEFAULT NULL,
  `vacancies` varchar(50) NOT NULL,
  `employment_type` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `education_level` varchar(90) NOT NULL,
  `experience` text NOT NULL,
  `benefits` text DEFAULT NULL,
  `deadline` date NOT NULL,
  `publish_status` varchar(20) NOT NULL,
  `read_before_apply` text NOT NULL,
  `additional_info` text NOT NULL,
  `quiz` text NOT NULL,
  `online_interview` text NOT NULL,
  `offline_interview` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_posts`
--

INSERT INTO `job_posts` (`job_id`, `company_id`, `location`, `job_title`, `workplace_type`, `job_type`, `salary`, `job_description`, `job_responsibilities`, `job_requirement`, `additional_requirement`, `vacancies`, `employment_type`, `gender`, `education_level`, `experience`, `benefits`, `deadline`, `publish_status`, `read_before_apply`, `additional_info`, `quiz`, `online_interview`, `offline_interview`) VALUES
('', '20240315174017', '', 'WE ARE HIARING WEB DEVELOPER', 'Hybrid', 'Contract', 'wrthwrth', 'wrthwrth', 'wrthwrth', 'wrtwrtn', 'wwthwth', 'wthwrnh', 'Part-time', 'Femal', '', 'twbstrb', 'tnewnr', '2024-05-02', 'published', 'aebearbewta', '', '1', '2', ''),
('20240420155907', '20240315174017', 'SDasdgd', 'WE ARE HIARING WEB DEVELOPER', 'Remote', 'Government', 'zsfbdazfbzfb', 'abfazdfsb', 'adfbadffb', 'sfasbadfsb', 'adfbadfb', '2', 'Contract', 'Both', 'asfdadfb', 'adfbadfb', 'asbaerb', '2024-04-20', 'published', 'zdbsdb', 'zfdbzdfb', '1', '1', '1'),
('20240502080310', '20240417221253', 'twehwth', 'qergew5gh', 'Hybrid', 'Private', 'ewthweth', 'ewthw', 'thweth', 'srthsrth', 'srtstrh', 'sthtsh', 'Internship', 'Femal', 'shth', 'sthhst', 'tsrhtrhsw', '2024-05-09', 'published', 'rnstsrnt', 'strsrtnh', '1', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `job_preferences`
--

CREATE TABLE `job_preferences` (
  `user_id` int(11) DEFAULT NULL,
  `job_preferences_Id` int(11) NOT NULL,
  `pref_func_job_cat` varchar(1000) DEFAULT NULL,
  `pref_special_skilled_job_cat` varchar(1000) DEFAULT NULL,
  `pref_org_type` varchar(1000) DEFAULT NULL,
  `pref_job_location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_preferences`
--

INSERT INTO `job_preferences` (`user_id`, `job_preferences_Id`, `pref_func_job_cat`, `pref_special_skilled_job_cat`, `pref_org_type`, `pref_job_location`) VALUES
(11111, 11111, '11111', '11111', '11111', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `language_skills_info`
--

CREATE TABLE `language_skills_info` (
  `user_id` int(11) DEFAULT NULL,
  `Language_Id` int(11) NOT NULL,
  `language` varchar(255) DEFAULT NULL,
  `readingLevel` varchar(255) DEFAULT NULL,
  `writingLevel` varchar(255) DEFAULT NULL,
  `speakingLevel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `language_skills_info`
--

INSERT INTO `language_skills_info` (`user_id`, `Language_Id`, `language`, `readingLevel`, `writingLevel`, `speakingLevel`) VALUES
(11111, 11111, '11111', '11111', '11111', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `onlinefairapplications`
--

CREATE TABLE `onlinefairapplications` (
  `OJF_job_application_id` varchar(14) NOT NULL,
  `user_id` varchar(14) NOT NULL,
  `company_id` varchar(14) NOT NULL,
  `JobFair_id` varchar(14) NOT NULL,
  `OJF_Job_post_id` varchar(14) NOT NULL,
  `Resume_id` varchar(14) NOT NULL,
  `ApplyDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `online_fair`
--

CREATE TABLE `online_fair` (
  `online_fair_id` varchar(14) NOT NULL,
  `online_fair_name` varchar(255) NOT NULL,
  `online_fair_description` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `social_link` varchar(255) NOT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `online_fair`
--

INSERT INTO `online_fair` (`online_fair_id`, `online_fair_name`, `online_fair_description`, `start_date`, `end_date`, `social_link`, `banner_image`, `status`, `date`) VALUES
('20240502072219', 'asfdgadfg', 'bdxgbsfn', '2024-05-02', '2024-05-11', 'facebook', 'rosary.png', 'published', '2024-05-02 11:22:19'),
('20240502104135', 'job uthsob 2092', 'ami job kortam na.', '2024-05-05', '2024-05-07', 'https:/facebook.com/jobuthsob2092', 'settings.png', 'published', '2024-05-02 14:41:35');

-- --------------------------------------------------------

--
-- Table structure for table `online_fair_allocate_company`
--

CREATE TABLE `online_fair_allocate_company` (
  `allocate_company_id` int(11) NOT NULL,
  `online_fair_id` varchar(14) DEFAULT NULL,
  `company_id` varchar(14) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `online_fair_allocate_company`
--

INSERT INTO `online_fair_allocate_company` (`allocate_company_id`, `online_fair_id`, `company_id`, `date`) VALUES
(2, '20240502072219', '20240315174017', '2024-05-02 11:22:42'),
(4, '20240502104135', '20240315174017', '2024-05-02 14:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `online_fair_job_posts`
--

CREATE TABLE `online_fair_job_posts` (
  `online_fair_job_id` varchar(20) NOT NULL,
  `online_fair_id` varchar(20) DEFAULT NULL,
  `company_id` varchar(14) NOT NULL,
  `location` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `workplace_type` varchar(50) NOT NULL,
  `job_type` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `job_description` text DEFAULT NULL,
  `job_responsibilities` text DEFAULT NULL,
  `job_requirement` text DEFAULT NULL,
  `additional_requirement` text DEFAULT NULL,
  `vacancies` varchar(50) NOT NULL,
  `employment_type` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `education_level` varchar(90) NOT NULL,
  `experience` text NOT NULL,
  `benefits` text DEFAULT NULL,
  `deadline` date NOT NULL,
  `publish_status` varchar(20) NOT NULL,
  `read_before_apply` text NOT NULL,
  `additional_info` text NOT NULL,
  `quiz` text NOT NULL DEFAULT '0',
  `online_interview` text NOT NULL DEFAULT '0',
  `offline_interview` text NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `online_fair_job_posts`
--

INSERT INTO `online_fair_job_posts` (`online_fair_job_id`, `online_fair_id`, `company_id`, `location`, `job_title`, `workplace_type`, `job_type`, `salary`, `job_description`, `job_responsibilities`, `job_requirement`, `additional_requirement`, `vacancies`, `employment_type`, `gender`, `education_level`, `experience`, `benefits`, `deadline`, `publish_status`, `read_before_apply`, `additional_info`, `quiz`, `online_interview`, `offline_interview`) VALUES
('20240502082244', '20240502072219', '20240315174017', 'etgrwetgh', 'WE ARE HIARING WEB DEVELOPER', 'Hybrid', 'Government', 'asgarg', 'aga', 'asrgrarg', 'argteht', 'eraheharg', 'erqag', 'Part-time', 'Male', 'aregaerg', 'erqagewhr', 'aergeqrgh', '2024-05-02', 'published', 'eargaeghaehr', 'eragherqh', '1', '1', ''),
('20240502183145', '20240502072219', '20240315174017', 'bc', 'bcl job baler ', 'On-site', 'Private', '50000', 'mc', 'fc', 'rc', 'tc', '96', 'Part-time', 'Male', 'intern', '6 years', 'nm', '2024-05-15', 'published', 'hh', 'ec', '1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `P_Details_Id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `religion` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `nid` varchar(20) NOT NULL,
  `passport_no` varchar(20) NOT NULL,
  `passport_issue_date` date NOT NULL,
  `blood_group` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`P_Details_Id`, `user_id`, `father_name`, `mother_name`, `date_of_birth`, `religion`, `gender`, `marital_status`, `nationality`, `nid`, `passport_no`, `passport_issue_date`, `blood_group`) VALUES
(11111, 11111, '11111', '11111', '2011-11-01', '11111', '11111', '11111', '11111', '11111', '11111', '2011-11-01', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL,
  `test_id` text NOT NULL,
  `question` varchar(255) NOT NULL,
  `optionA` varchar(255) NOT NULL,
  `optionB` varchar(255) NOT NULL,
  `optionC` varchar(255) NOT NULL,
  `optionD` varchar(255) NOT NULL,
  `answer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `test_id`, `question`, `optionA`, `optionB`, `optionC`, `optionD`, `answer`) VALUES
(30, '20240419151314', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaa', 'A'),
(31, '20240419151314', 'zdxfdzdgnb', 'gdhnchn', 'dnhmhdghmn', 'dghmngcfnh', 'cgcghmn', 'A'),
(32, '20240502191132', 'what is your name?', 'adnan', 'khairul', 'asif', 'none', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `set_quiz`
--

CREATE TABLE `set_quiz` (
  `job_id` varchar(30) NOT NULL,
  `test_id` varchar(30) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `set_quiz`
--

INSERT INTO `set_quiz` (`job_id`, `test_id`, `start_date`, `end_date`, `start_time`, `end_time`) VALUES
('20240420155907', '20240419151314', '2024-05-04', '2024-05-30', '03:00:00', '09:06:00'),
('', '20240502191132', '2024-05-02', '2024-05-02', '23:14:00', '12:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `skills_info`
--

CREATE TABLE `skills_info` (
  `skills_info_Id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `skillsTitle` varchar(255) DEFAULT NULL,
  `skillsDescription` varchar(255) DEFAULT NULL,
  `extraCurricularAct` varchar(255) DEFAULT NULL,
  `learnedFrom` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills_info`
--

INSERT INTO `skills_info` (`skills_info_Id`, `user_id`, `skillsTitle`, `skillsDescription`, `extraCurricularAct`, `learnedFrom`) VALUES
(11111, 11111, '11111', '11111', '11111', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `test_id` varchar(25) NOT NULL,
  `test_name` varchar(255) NOT NULL,
  `test_details` text DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`test_id`, `test_name`, `test_details`, `subject`, `duration`) VALUES
('20240419151314', 'wer', 'ewrg', 'ery', 30),
('20240501184853', 'wwwwwwww', 'aaaa', 'aaa', 20),
('20240502191132', 'mock test', 'hello', 'bangla', 15);

-- --------------------------------------------------------

--
-- Table structure for table `trainings_info`
--

CREATE TABLE `trainings_info` (
  `trainings_Id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `trainingTitle` varchar(355) DEFAULT NULL,
  `topicCovered` varchar(355) DEFAULT NULL,
  `institute` varchar(355) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `location` varchar(500) DEFAULT NULL,
  `trainingYear` varchar(10) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainings_info`
--

INSERT INTO `trainings_info` (`trainings_Id`, `user_id`, `trainingTitle`, `topicCovered`, `institute`, `country`, `location`, `trainingYear`, `duration`) VALUES
(11111, 11111, '11111', '11111', '11111', '11111', '11111', '11111', '11111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awards_info`
--
ALTER TABLE `awards_info`
  ADD PRIMARY KEY (`awards_info_Id`);

--
-- Indexes for table `certifications_info`
--
ALTER TABLE `certifications_info`
  ADD PRIMARY KEY (`Certification_Id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`Contact_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `co_curricular_activities_info`
--
ALTER TABLE `co_curricular_activities_info`
  ADD PRIMARY KEY (`co_cur_act_Id`);

--
-- Indexes for table `education_history`
--
ALTER TABLE `education_history`
  ADD PRIMARY KEY (`Ac_Quali_Id`);

--
-- Indexes for table `employe_info`
--
ALTER TABLE `employe_info`
  ADD PRIMARY KEY (`employe_info_Id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `jobseeker_register_info`
--
ALTER TABLE `jobseeker_register_info`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `phone_no` (`phone_no`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `job_posts`
--
ALTER TABLE `job_posts`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `job_preferences`
--
ALTER TABLE `job_preferences`
  ADD PRIMARY KEY (`job_preferences_Id`);

--
-- Indexes for table `language_skills_info`
--
ALTER TABLE `language_skills_info`
  ADD PRIMARY KEY (`Language_Id`);

--
-- Indexes for table `onlinefairapplications`
--
ALTER TABLE `onlinefairapplications`
  ADD PRIMARY KEY (`OJF_job_application_id`);

--
-- Indexes for table `online_fair`
--
ALTER TABLE `online_fair`
  ADD PRIMARY KEY (`online_fair_id`);

--
-- Indexes for table `online_fair_allocate_company`
--
ALTER TABLE `online_fair_allocate_company`
  ADD PRIMARY KEY (`allocate_company_id`);

--
-- Indexes for table `online_fair_job_posts`
--
ALTER TABLE `online_fair_job_posts`
  ADD PRIMARY KEY (`online_fair_job_id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`P_Details_Id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `skills_info`
--
ALTER TABLE `skills_info`
  ADD PRIMARY KEY (`skills_info_Id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `trainings_info`
--
ALTER TABLE `trainings_info`
  ADD PRIMARY KEY (`trainings_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `awards_info`
--
ALTER TABLE `awards_info`
  MODIFY `awards_info_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11112;

--
-- AUTO_INCREMENT for table `certifications_info`
--
ALTER TABLE `certifications_info`
  MODIFY `Certification_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11112;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `Contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11112;

--
-- AUTO_INCREMENT for table `co_curricular_activities_info`
--
ALTER TABLE `co_curricular_activities_info`
  MODIFY `co_cur_act_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11112;

--
-- AUTO_INCREMENT for table `education_history`
--
ALTER TABLE `education_history`
  MODIFY `Ac_Quali_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11112;

--
-- AUTO_INCREMENT for table `employe_info`
--
ALTER TABLE `employe_info`
  MODIFY `employe_info_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4564564;

--
-- AUTO_INCREMENT for table `jobseeker_register_info`
--
ALTER TABLE `jobseeker_register_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15656657;

--
-- AUTO_INCREMENT for table `job_preferences`
--
ALTER TABLE `job_preferences`
  MODIFY `job_preferences_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11112;

--
-- AUTO_INCREMENT for table `language_skills_info`
--
ALTER TABLE `language_skills_info`
  MODIFY `Language_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11112;

--
-- AUTO_INCREMENT for table `online_fair_allocate_company`
--
ALTER TABLE `online_fair_allocate_company`
  MODIFY `allocate_company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `P_Details_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11112;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `skills_info`
--
ALTER TABLE `skills_info`
  MODIFY `skills_info_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11112;

--
-- AUTO_INCREMENT for table `trainings_info`
--
ALTER TABLE `trainings_info`
  MODIFY `trainings_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
