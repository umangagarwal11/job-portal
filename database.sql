-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 18, 2020 at 08:19 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codebinary`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

DROP TABLE IF EXISTS `admintable`;
CREATE TABLE IF NOT EXISTS `admintable` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `lastlogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`username`, `password`, `lastlogin`) VALUES
('abcd', '81dc9bdb52d04dc20036dbd8313ed055', '2020-06-18 12:55:50'),
('umang', '81dc9bdb52d04dc20036dbd8313ed055', '2020-03-21 10:41:23'),
('ua11', '81dc9bdb52d04dc20036dbd8313ed055', '2020-06-17 13:36:03'),
('abcde', '81dc9bdb52d04dc20036dbd8313ed055', '2020-03-29 00:58:57'),
('CodeBinary', '123272bdfaa95801081f5b0703c6a0ff', '2020-03-26 14:07:21'),
('test', '81dc9bdb52d04dc20036dbd8313ed055', '2020-06-18 18:29:57'),
('test1', '81dc9bdb52d04dc20036dbd8313ed055', '2020-06-17 13:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

DROP TABLE IF EXISTS `applications`;
CREATE TABLE IF NOT EXISTS `applications` (
  `username` varchar(100) NOT NULL,
  `job` text NOT NULL,
  `status` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `test` int(1) NOT NULL DEFAULT '0',
  `end` int(1) NOT NULL DEFAULT '0',
  `beg` date DEFAULT NULL,
  `fin` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`username`, `job`, `status`, `time`, `id`, `test`, `end`, `beg`, `fin`) VALUES
('HR/Offer/CBI/APD/2020/0616/1', 'CBI2020APD3', 'Rejected', '2020-04-14 11:05:58', 9, 0, 0, NULL, NULL),
('HR/Offer/CBI/APD/2020/0616/1', 'CBI2020BLB2', 'Shortlisted', '2020-04-14 11:06:46', 10, 1, 0, NULL, NULL),
('HR/Offer/CBI/APD/2020/0616/1', 'CBI2020BLB1', 'Hired', '2020-04-14 11:08:29', 11, 0, 0, '2020-06-15', NULL),
('HR/Offer/CBI/APD/2020/0616/1', 'CBI2020APD2', 'Hired', '2020-04-14 11:55:25', 14, 0, 1, '2020-06-15', '2020-06-15'),
('HR/Offer/CBI/APD/2020/0616/1', 'CBI2020APD4', 'Hired', '2020-04-15 13:45:10', 15, 0, 1, '2020-06-16', '2020-06-18'),
('HR/Offer/CBI/APD/2020/0616/1', 'CBI2020APD9', 'Hired', '2020-06-09 19:26:40', 19, 0, 0, '2020-06-16', NULL),
('HR/Offer/CBI/APD/2020/0616/1', 'CBI2020MAR1', 'Hired', '2020-06-09 19:28:16', 20, 0, 0, '2020-06-16', NULL),
('HR/Offer/CBI/APD/2020/0616/1', 'CBI2020APD3', 'Hired', '2020-06-15 10:41:59', 21, 0, 0, '2020-06-16', NULL),
('HR/Offer/CBI/APD/2020/0616/1', 'CBI2020MLE10', 'In progress', '2020-06-15 16:48:44', 22, 0, 0, NULL, NULL),
('HR/Offer/CBI/APD/2020/0616/1', 'CBI2020APD10', 'Hired', '2020-06-16 18:40:49', 23, 0, 0, '2020-06-16', NULL),
('HR/Offer/CBI/APD/2020/0616/1', 'CBI2020MLE10', 'In progress', '2020-06-16 18:57:11', 24, 0, 0, NULL, NULL),
('HR/Offer/CBI/APD/2020/0616/1', 'CBI2020APD11', 'Hired', '2020-06-16 18:57:20', 25, 0, 0, '2020-06-16', NULL),
('HR/Offer/CBI/APD/2020/0616/1', 'CBI2020MLE10', 'Hired', '2020-06-16 18:59:15', 26, 0, 1, '2020-06-16', '2020-06-16'),
('HR/Offer/CBI/APD/2020/0616/1', 'CBI2020APD9', 'Hired', '2020-06-16 18:59:31', 27, 0, 0, '2020-06-16', NULL),
('HR/Offer/CBI/APD/2020/0616/1', 'CBI2020MLE10', 'Hired', '2020-06-16 19:01:31', 28, 0, 0, NULL, NULL),
('HR/Offer/CBI/APD/2020/0616/1', 'CBI2020APD9', 'Hired', '2020-06-16 19:01:42', 29, 0, 0, '2020-06-16', NULL),
('HR/Offer/CBI/APD/2020/0616/1', 'CBI2020APD8', 'Hired', '2020-06-16 19:03:27', 30, 0, 0, '2020-06-16', NULL),
('HR/Offer/CBI/BLB/2020/0616/1', 'CBI2020APD8', 'Hired', '2020-06-16 19:07:19', 31, 0, 0, '2020-06-16', NULL),
('HR/Offer/CBI/BLB/2020/0616/1', 'CBI2020MLE10', 'Hired', '2020-06-16 19:08:59', 32, 0, 0, '2020-06-16', NULL),
('HR/Offer/CBI/BLB/2020/0616/1', 'CBI2020BLB6', 'Hired', '2020-06-16 19:09:41', 33, 0, 0, '2020-06-16', NULL),
('HR/Offer/CBI/BLB/2020/0616/1', 'CBI2020MLE6', 'Hired', '2020-06-16 19:12:23', 34, 0, 0, '2020-06-16', NULL),
('HR/Offer/CBI/BLB/2020/0616/1', 'CBI2020APD7', 'Hired', '2020-06-16 19:12:38', 35, 0, 0, '2020-06-16', NULL),
('HR/Offer/CBI/BLB/2020/0616/1', 'CBI2020BLB5', 'Hired', '2020-06-16 19:15:23', 36, 0, 0, '2020-06-16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ccommunity`
--

DROP TABLE IF EXISTS `ccommunity`;
CREATE TABLE IF NOT EXISTS `ccommunity` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `domain` varchar(100) NOT NULL,
  `division` varchar(100) NOT NULL,
  `institution` varchar(100) NOT NULL,
  `reference_code` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=203 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ccommunity`
--

INSERT INTO `ccommunity` (`id`, `fname`, `lname`, `position`, `domain`, `division`, `institution`, `reference_code`, `email`, `level`) VALUES
(1, 'Nilay', 'Jayswal', 'Founder', '', 'CodeBinary Initiatives', 'IIM Kozhikode, India', '', 'nilayjayswalnj@gmail.com', 'CORE'),
(2, 'Rohit', 'Saini', 'Lead- ', 'Technical Design and Development', 'CodeBinary Initiatives', 'Delhi Technological University, India', '', 'rohitsainirs169@gmail.com', 'CORE'),
(4, 'Aayush', 'Mittal', 'Lead- ', 'Strategy', 'CodeBinary Initiatives', 'IIM Kashipur, India', '', 'aayush.imsec@gmail.com', 'CORE'),
(5, 'Bhawna', 'Ohri', 'Intern-', 'Human Resources', 'CodeBinary Initiatives', 'Delhi University, India', 'HR/Offer/PCB/2019/0302', 'bhawnaohri95@gmail.com', 'INTERN'),
(6, 'Trisihita', 'Chatterjee', 'Lead- ', 'Content Creation and Development', 'CodeBinary Initiatives', 'Khalisani Mahavidyalaya, India', '', 'trishita.chatterjee.48@gmail.com', 'CORE'),
(7, 'Krunal', 'Astik', 'Intern-', 'Web Development', 'CodeBinary Initiatives', 'R.K. University, India', 'HR/Offer/PCB/2019/0303', 'krunalastik7@gmail.com', 'INTERN'),
(8, 'Kanav', 'Hurria', 'Intern-', 'Legal Research', 'CodeBinary Initiatives', 'S.R.M. University, India', 'HR/Offer/PCB/2019/0304', 'kanavhurria.kh@gmail.com', 'INTERN'),
(9, 'Abhishek', 'Mishra', 'Intern- ', 'Back-End Development', 'CodeBinary Initiatives', 'Dr. Ambedkar Institute of Technology for Handicapped, India\r\n', 'HR/Offer/PCB/2019/0305', 'abhishekm7376@gmail.com', 'INTERN'),
(10, 'Dharmveer', 'Sharma', 'Co-Founder', '', 'Sprouting Wings', 'Shri Mata Vaishno Devi University, India', '', 'sdvsharma98@gmail.com', 'CORE'),
(11, 'Gajendra', 'Chaudhary', 'Co- Founder', '', 'Sprouting Wings', 'Shri Mata Vaishno Devi University, India', '', 'gajendra.choudhary117@gmail.com', 'CORE'),
(13, 'Akhil', 'Kalsi', 'Intern-', 'Machine Learning', 'CodeBinary Initiatives', 'Shri Mata Vaishno Devi University, India', 'HR/Offer/PCB/2019/0307', 'kalsiakhil47@gmail.com', 'INTERN'),
(14, 'Shrrayan', 'Goel', 'Intern-', 'Android Developer', 'CodeBinary Initiatives', 'Shri Mata Vaishno Devi University, India', 'HR/Offer/PCB/2019/0308', 'goelshrrayan123@gmail.com', 'INTERN'),
(15, 'Mithali', 'Bhat', 'Intern-', 'Front-End Developer', 'CodeBinary Initiatives', 'Shri Mata Vaishno Devi University, India', 'HR/Offer/PCB/2019/0309', 'mithalibhat8@gmail.com', 'INTERN'),
(16, 'Abhinav', 'Sehrawat', 'Intern-', 'Legal Research', 'Sprouting Wings', 'BITS Pilani, India', 'HR/Offer/SWDM/2019/0402', 'sehrawatabhinav@gmail.com', 'INTERN'),
(17, 'Shivam', 'Sharma', 'Intern-', 'React JS Developer', 'CodeBinary Initiatives', 'Shri Mata Vaishno Devi University, India', 'HR/Offer/PCB/2019/0310', 'shivamhc005@gmail.com', 'INTERN'),
(18, 'Chhavi', 'Maheswari', 'Intern-', 'Legal Research', 'Sprouting Wings', 'Maharashtra National Law University, India', 'HR/Offer/SWDM/2019/0403', 'chhavi2103@gmail.com', 'INTERN'),
(19, 'Saba', 'Nishar', 'Lead-', 'Legal Development', 'CodeBinary Initiatives', 'South Calcutta Law College, India', '', 'sabanishar@gmail.com', 'INTERN'),
(20, 'Savitri', 'Varanasi', 'Intern -', 'Legal Research', 'Sprouting Wings', 'ICFAI Law School, India', 'HR/Offer/SWDM/2019/0405', 'varanasisavi28@gmail.com', 'INTERN'),
(21, 'Reeti', 'Prakash', 'Intern -', 'Legal Research', 'Sprouting Wings', 'O.P. Jindal Global University, India', 'HR/Offer/SWDM/2019/0406', 'reeti.prakash3005@gmail.com', 'INTERN'),
(23, 'Paarth', 'Gupta', 'Student Mentor', '', 'CodeBinary Initiatives', 'IISc Bangalore, India', '', 'paarthgupta09@gmail.com', 'CORE'),
(24, 'Chitranshi', 'Yadav', 'Lead- ', 'Customer Relations', 'CodeBinary Initiatives', 'G. B. Pant University of Agriculture and Technology, India\r\n', '', 'chitranshiyadav1998@gmail.com', 'CORE'),
(25, 'Gopika', 'G.', 'Lead- ', 'Creative Design and Development', 'CodeBinary Initiatives', 'NIFT Jodhpur, India', '', 'gopalakrishnangopika2000@gmail.com', 'CORE'),
(26, 'Shubhi', 'Sharma', 'Student Mentor', '', 'CodeBinary Initiatives', 'FAU Erlangen-Nurnberg, Germany', '', 'sharma.shubhi0995@gmail.com', 'CORE'),
(27, 'Chandni', 'Parmar', 'Intern - ', 'Back-End Developer', 'CodeBinary Initiatives', 'R.K. University, India', 'HR/Offer/PCB/2019/0311', 'chandniparmar096@gmail.com', 'INTERN'),
(28, 'Annushikha', 'Sharma', 'Intern- ', 'Back-End Developer', 'CodeBinary Initiatives', 'R.K. University, India', 'HR/Offer/PCB/2019/0312', 'annushikha1403@gmail.com', 'INTERN'),
(29, 'Nalin', 'Haldwani', 'Intern- ', 'Human Resources', 'CodeBinary Initiatives', 'IIM Tiruchirappalli, India', '', 'nalinhal@yahoo.co.in', 'CORE'),
(30, 'Raahul', 'Saxena', 'Student Mentor', '', 'CodeBinary Initiatives', 'IIM Calcutta, India', '', 'raahulsaxena95@gmail.com', 'CORE'),
(31, 'Priya', 'Gupta', 'Founder', '', 'Sarvpriye Foundation', 'Lady Shri Ram College For Women, India', '', 'priya.guptaiim@gmail.com', 'CORE'),
(32, 'Keshav', 'Parth Purohit', 'Intern- ', 'Event Manager', 'Sarvpriye Foundation', 'IIIT Vadodara, India', '', 'purohit.keshav21@gmail.com', 'INTERN'),
(33, 'Priyam', 'Mehra', 'Intern- ', 'Human Resource Manager', 'Sarvpriye Foundation', 'The NorthCap University, India', '', 'priyam.mehra.pm@gmail.com', 'INTERN'),
(34, 'Hardik', 'Jain', 'Intern- ', 'Operations Manager', 'Sarvpriye Foundation', 'ICEEM, India', '', 'hardikjainhd13@gmail.com', 'INTERN'),
(35, 'Arpita', 'Yadav', 'Intern- ', 'Branding and Strategy Development', 'CodeBinary Initiatives', 'IIM Indore, India', '', 'arpitasrn05@gmail.com', 'INTERN'),
(37, 'Yaman', 'Mohanpuria', 'Intern- ', 'Digital Strategy Developer', 'SproutingWings', 'IIM Kozhikode, India', 'HR/Offer/SWDM/2019/0107', 'yaman.mohanpuria@gmail.com', 'INTERN'),
(38, 'Sakshi', 'Ahuja', 'Intern- ', 'Legal Research', 'CodeBinary Initiatives', 'ICAI, India', 'HR/Offer/PCB/2019/0313', 'ahujasakshi14@gmail.com', 'INTERN'),
(39, 'Rahul', 'Sharma', 'Founder', '', 'EngiGyan Techno Private Limited', 'Shri Mata Vaishno Devi University, India', '', 'rahulsharmathank@gmail.com', 'CORE'),
(41, 'Himanshi', 'Rajput', 'Intern-', 'Content Writer', 'Sarvpriye Foundation', 'Lovely Professional University, India', 'HR/Offer/SF/2019/0801', 'himanshiirajput@gmail.com', 'INTERN'),
(42, 'Meghana', 'N', 'Intern-', 'Content Writer', 'Sarvpriye Foundation', 'CMR Institute of Technology, India', 'HR/Offer/SF/2019/0802', 'nageshmeghana12@gmail.com', 'INTERN'),
(43, 'Deepak', 'Singh', 'Intern-', 'Project Manager', 'Sarvpriye Foundation', 'IIM Visakhapatnam, India', 'HR/Offer/SF/2019/0804', 'd8968484910@gmail.com', 'INTERN'),
(44, 'Jayitha', 'Devineni', 'Intern-', 'Project Manager', 'Sarvpriye Foundation', 'Vellore Institute of Technology, India', 'HR/Offer/SF/2019/0805', 'jayithaone@gmail.com', 'INTERN'),
(45, 'Shivangi', 'Joshi', 'Intern-', 'Project Manager', 'Sarvpriye Foundation', 'IIM Indore, India', 'HR/Offer/SF/2019/0806', 'shivangi17021996@gmail.com', 'INTERN'),
(46, 'Mann', 'Garg', 'Founder', '', 'EMGE', 'Lady Shri Ram College for Women, India', '', 'garggmann@gmail.com', 'CORE'),
(47, 'Amit', 'Paswan', 'Intern-', 'Project Manager', 'Sarvpriye Foundation', 'IIM Bodh Gaya, India', 'HR/Offer/SF/2019/0808', 'ak.paswan03@gmail.com', 'INTERN'),
(48, 'Preeti', 'Yadav', 'Intern-', 'Event Organizer', 'Sarvpriye Foundation', 'IIIT Vadodara, India', '', 'preetiy301998@gmail.com\r\n', 'Intern'),
(49, 'Vaidehi', 'Vaishnav', 'Intern- ', 'Event Organizer', 'Sarvpriye Foundation', 'IIIT Vadodara, India', '', 'vdvaishnav1222@gmail.com', 'Intern'),
(50, 'J Prem', 'Shanker', 'Intern- ', 'Event Organizer', 'Sarvpriye Foundation', 'IIIT Vadodara, India', '', 'premjps1@gmail.com', 'Intern'),
(51, 'Prakhar', 'Gupta', 'Intern- ', 'Event Organizer', 'Sarvpriye Foundation', 'IIIT Vadodara, India', '', 'prakharmoon@gmail.com', 'Intern'),
(52, 'Shivani', 'Kalyani', 'Intern- ', 'Event Organizer', 'Sarvpriye Foundation', 'Lady Shri Ram College For Women, India', '', 'kalyanshivani99@gmail.com', 'Intern'),
(53, 'Manvi', 'Sharma', 'Intern- ', 'Event Organizer', 'Sarvpriye Foundation', 'Delhi University, India', '', 'manvi25121999@gmail.com', 'Intern'),
(55, 'Sri Manikanta', 'Palakollu', 'Intern- ', 'IOS Developer', 'Sarvpriye Foundation', 'Sri Indu College of Engineering & Technology, India', 'HR/Offer/SF/2019/0810', 'srimanikantapalakollu@gmail.com', 'Intern'),
(56, 'Smita', 'Prakash', 'Intern- ', 'Android Developer', 'Sarvpriye Foundation', 'IIIT Bhubaneswar, India', 'HR/Offer/SF/2019/0811', 'smitaprakashsonam@gmail.com', 'Intern'),
(57, 'Ashwani', 'Prasad', 'Intern- ', 'Android Developer', 'Sarvpriye Foundation', 'G.B. Pant Govt. Engineering College, India', 'HR/Offer/SF/2019/0812', 'ashwani.p30@gmail.com', 'Intern'),
(58, 'Mubeen', 'Patel', 'Intern- ', 'Wordpress Developer', 'Sarvpriye Foundation', 'MHSS College of Engineering, India', 'HR/Offer/SF/2019/0813', 'patel.mubeen99@gmail.com', 'Intern'),
(59, 'Zafar', 'Imam', 'Intern- ', 'Graphic Designer', 'Sarvpriye Foundation', 'BIT Sindri, India', 'HR/Offer/SF/2019/0814', 'imamzafar100@gmail.com', 'Intern'),
(60, 'Priyanka', 'Malame', 'Founder', '', 'TrashCan', 'IIM Kozhikode, India', '', 'piyu.malame@gmail.com', 'CORE'),
(61, 'Sameer', 'Sanadi', 'Intern-', 'Operations', 'EMGE', 'IIM Jammu, India', 'HR/Offer/CBI/2019/0111', 'mba19093@iimj.ac.in', 'INTERN'),
(62, 'Shridhar', 'Jha', 'Intern-', 'Operations', 'EMGE', 'IIM Indore, India', 'HR/Offer/CBI/2019/0112', 'i19shridharj@iimidr.ac.in', 'INTERN'),
(63, 'Aruja', 'Bhatnagar', 'Intern-', 'Sales & Marketing', 'EMGE', 'T.A.Pai Management Institute, India', 'HR/Offer/CBI/2019/0113', 'arujabhatnagar@gmail.com', 'INTERN'),
(64, 'Shashwat', 'Sharma', 'Intern-', 'Legal Research', 'CodeBinary Initiatives', 'Government Law College,Mumbai, India', 'HR/Offer/CBI/2019/0114', 'shashwatsharma2330@gmail.com', 'INTERN'),
(65, 'Sushmita', 'Kaligiti', 'Intern-', 'Operations', 'EMGE', 'IIM Kozhikode, India', 'HR/Offer/CBI/2019/0115', 'sushmithakaligiti@gmail.com', 'INTERN'),
(66, 'Harish', 'Uginval', 'Intern-', 'Android Development', 'Sarvpriye Foundation', 'Lancaster University', 'HR/Offer/SF/2019/0111', 'dass.harish@gmail.com', 'INTERN'),
(67, 'Jyotiprakash', 'Das', 'Intern-', 'Android Development', 'Sarvpriye Foundation', 'Government College of Engineering, Kalahandi, India', 'HR/Offer/SF/2019/0112', 'dasjp7@gmail.com', 'INTERN'),
(68, 'Tanvi', 'Bhave', 'Intern-', 'Business Research', 'EMGE', 'School Of Data Science And Forecasting, DAVV, India', 'HR/Offer/CBI/2019/0117', 'tanvibhave956@gmail.com', 'INTERN'),
(69, 'Deblina', 'De', 'Intern-', 'Human Resources', 'CodeBinary Initiatives', 'KIIT University, Bhubaneshwar, India', 'HR/Offer/CBI/2019/0118', 'contact.deblina@gmail.com', 'INTERN'),
(70, 'Sayantan', 'Ghatak', 'Intern-', 'Human Resources', 'CodeBinary Initiatives', 'XUB, India', 'HR/Offer/CBI/2019/0119', 'uh19047@xustudent.edu.in', 'INTERN'),
(72, 'Smriti', 'Bhuwania', 'Intern-', 'Human Resources', 'CodeBinary Initiatives', 'Dr. Bhim Rao Ambedkar College, India', 'HR/Offer/CBI/BLB/2020/0616/1', 'smritibhuwania@gmail.com', 'INTERN'),
(73, 'Harshita', 'Mittal', 'Intern-', 'Business Development', 'EMGE', 'Daulat Ram College, India', 'HR/Offer/CBI/2019/0122', 'harshitamttl14@gmail.com', 'INTERN'),
(74, 'Himanshi', 'Dhanuka', 'Intern-', 'Marketing', 'EMGE', 'Daulat Ram College, India', 'HR/Offer/CBI/2019/0123', 'anjalidhanuka.1234@gmail.com', 'INTERN'),
(75, 'Priti', 'Aggarwal', 'Intern-', 'Event Management', 'EMGE', 'Thapar Institute of Engineering and Technology, India', 'HR/Offer/CBI/2019/0124', 'aggarwalpriti14@gmail.com', 'INTERN'),
(76, 'Muskan', 'Arora', 'Intern-', 'Operations', 'EMGE', 'Daulat Ram College, India', 'HR/Offer/CBI/2019/0125', 'arora.muskan6@gmail.com', 'INTERN'),
(77, 'Khyati', 'Bansal', 'Intern-', 'Business Development', 'EMGE', 'Daulat Ram College, India', 'HR/Offer/CBI/2019/0126', 'khyatibansal110@gmail.com', 'INTERN'),
(78, 'Shivansh', 'Sinha', 'Intern-', 'Human Resources', 'CodeBinary Initiatives', 'Dr. Bhim Rao Ambedkar College, India', 'HR/Offer/CBI/2019/0127', 'shivanshsinha181000@gmail.com', 'INTERN'),
(79, 'Parikshit', 'Ahuja', 'Intern-', 'Market Research', 'Sarvpriye Foundation', '', 'HR/Offer/SF/2019/0113', 'parikshitahuja413@gmail.com', 'INTERN'),
(80, 'Palak', 'Satsangi', 'Intern-', 'Fashion Design', 'EMGE', 'NIFT Delhi, India', 'HR/Offer/CBI/2019/0128', 'palak.satsangi@nift.ac.in', 'INTERN'),
(81, 'Nehaa', 'Karthikeyan', 'Intern-', 'Social Media Marketing', 'Sarvpriye Foundation', 'PSG College of Arts and Science, India', 'HR/Offer/SF/2019/0121', 'nehaa01042002@gmail.com', 'INTERN'),
(82, 'Sultan', 'Ahmed', 'Intern-', 'Merchandising and Business Research', 'EMGE', 'NIFT Kangra, India', 'HR/Offer/CBI/2019/0129', 'sultan.ahmed@nift.ac.in', 'INTERN'),
(83, 'Sayalee', 'Falle', 'Intern-', 'Graphic Design', 'EMGE', 'PVPPCoE, India', 'HR/Offer/CBI/2019/01210', 'sayaleefalle@gmail.com', 'INTERN'),
(84, 'Vinay', 'Kumar', 'Chartered Accountant', '', 'Prakash Saboo & Co.', '', '', 'sharmavinay.ca@gmail.com', 'CORE'),
(85, 'Rachel', 'Jose', 'Intern-', 'Web Development', 'Sarvpriye Foundation', 'Fr. Conceicao Rodrigues College of Engineering, India', 'HR/Offer/SF/2019/0122', 'racheljose21@gmail.com', 'INTERN'),
(86, 'Abdul Kamar', 'Shaikh', 'Intern-', 'Web Development', 'CodeBinary Initiatives', 'Shah & Anchor Kutchhi Engineering College, India', 'HR/Offer/CBI/2019/1211', 'theabdul97@gmail.com', 'Intern'),
(87, 'Ankur', 'Sharma', 'Intern-', 'Web Development', 'Sarvpriye Foundation', 'IIT Roorke, India', 'HR/Offer/SF/2019/0123', 'ankursharma05031999@gmail.com', 'INTERN'),
(88, 'Mohammad Saad', 'Nalband', 'Intern-', 'Market Research', 'CodeBinary Initiatives', 'AISSME IOIT, India', 'HR/OFFER/CBI/MAR/2020/0161/1', 'nalbandsaad@gmail.com', 'Intern'),
(89, 'Diksha', 'Wadhwa', 'Intern-', 'Finance', 'Sarvpriye Foundation', 'Jesus and Mary College, Delhi University, India', 'HR/Offer/SF/2019/0124', 'dikshawadhwa02@gmail.com', 'INTERN'),
(90, 'Anisha', 'Gandhi', 'Intern-', 'Human Resources', 'CodeBinary Initiatives', 'Daulat Ram College, India', 'HR/Offer/CBI/2019/01213', 'anisha123gandhi@gmail.com', 'Intern'),
(91, 'Suman', '', 'Intern-', 'Marketing', 'EMGE', 'Kirorimal College, India', 'HR/Offer/CBI/2019/01214', 's8285361049@gmail.com', 'INTERN'),
(92, 'Cassia', 'Vaz', 'Intern-', 'Web Developer', 'CodeBinary Initiatives', 'Fr. Conceicao Rodrigues College of Engineering, India', 'HR/Offer/CBI/2019/01215', 'cassiavaz.33.cv@gmail.com', 'Intern'),
(93, 'Dhiren', 'Kharat', '', 'Live Project', 'EMGE', 'IIM Kozhikode, India', 'HR/Offer/CBI/2019/01216', 'dhirenkharat8@gmail.com', 'INTERN'),
(94, 'Rupina', 'Papan', '', 'Live Project', 'EMGE', 'IIM Kozhikode, India', 'HR/Offer/CBI/2019/01217', 'rupinap23@iimklive.com', 'Intern'),
(95, 'Nibedita', 'Das', 'Intern-', 'Human Resources', 'EMGE', 'Dayanand Sagar College, India', 'HR/Offer/CBI/2019/01218', 'nivedas10@gmail.com', 'Intern'),
(96, 'Thejesh', 'S.', 'Intern-', 'Operations', 'EMGE', 'Dayanand Sagar College, India', 'HR/Offer/CBI/2019/01219', 'thejesh200021@gmail.com', 'Intern'),
(97, 'Jahnavi', 'Yadav', 'Intern-', 'Operations', 'EMGE', 'Kirori Mal College, India', 'HR/Offer/CBI/2019/01220', 'jahnaviyadavk@gmail.com', 'Intern'),
(99, 'Radhika', 'Kohli', 'Intern-', 'Business Development', 'EMGE', 'Daulat Ram College, India', 'HR/Offer/CBI/2019/01222', 'kohl.radhika@gmail.com', 'Intern'),
(100, 'Ayush', 'Rana', 'Intern-', 'Business Development', 'EMGE', 'Hansraj College, India', 'HR/Offer/CBI/2019/01223', 'rana.ayush1509@gmail.com', 'Intern'),
(101, 'Minakshi', 'Goyal', 'Intern-', 'Operations', 'EMGE', 'NIFT Delhi, India', 'HR/Offer/CBI/2019/01224', 'minakshi26g@gmail.com', 'Intern'),
(102, 'Deepika', 'Meena', '', 'Live Project', 'Sarvpriye Foundation', 'IIM Kozhikode, India', 'HR/OFFER/CBI/MAR/2020/013/1', 'deepikam23@iimk.ac.in', 'Intern'),
(103, 'Swati', 'Sachdeva', '', 'Live Project', 'Sarvpriye Foundation', 'IIM Kozhikode, India', 'HR/OFFER/CBI/MAR/2020/013/2', 'swatis23@iimk.ac.in', 'Intern'),
(104, 'Niharika', '', '', 'Live Project', 'Sarvpriye Foundation', 'IIM Kozhikode, India', 'HR/OFFER/CBI/MAR/2020/013/3', 'niharika23@iimk.ac.in', 'Intern'),
(105, 'Rajit', 'Meena', '', 'Live Project', 'Sarvpriye Foundation', 'IIM Kozhikode, India', 'HR/OFFER/CBI/MAR/2020/013/4', 'rajitr23@iimk.ac.in', 'Intern'),
(106, 'Trishul Paul', 'Chowdhury', '', 'Live Project', 'Sarvpriye Foundation', 'IIM Kozhikode, India', 'HR/OFFER/CBI/MAR/2020/013/5', 'trishulc23@iimk.ac.in', 'Intern'),
(107, 'Shikha', 'Kansal', '', 'Live Project', 'Sarvpriye Foundation', 'IIM Kozhikode, India', 'HR/OFFER/CBI/MAR/2020/013/6', 'shikha23@iimk.ac.in', 'Intern'),
(108, 'Aman', 'Kumar', '', 'Live Project', 'Sarvpriye Foundation', 'IIM Kozhikode, India', 'HR/OFFER/CBI/MAR/2020/013/7', 'amank23@iimklive.com', 'Intern'),
(109, 'Samarth', 'Mehta', '', 'Live Project', 'Sarvpriye Foundation', 'IIM Kozhikode, India', 'HR/OFFER/CBI/MAR/2020/013/8', 'samarthm23@iimk.ac.in', 'Intern'),
(110, 'Oshin', 'Dewan', 'Intern-', 'Human Resources', 'CodeBinary Initiatives', 'XUB, India', 'HR/Offer/CBI/2019/01239', 'oshindewan@gmail.com', 'Intern'),
(111, 'Taranjeet', 'Singh', 'Director', '', 'TYFRIO Agri Innovations Private Limited', '', '', 'director@tyfrio.co.in', 'Core'),
(112, 'Taranjeet', 'Singh', 'Director', '', 'Innvocon Learning Solutions Private Limited', '', '', 'director@innvocon.co.in', 'Core'),
(113, 'Prajwal', 'Deepak Malame', 'Intern-', 'Medical Research', 'CodeBinary Initiatives', 'Grant Government Medical College, India', 'HR/OFFER/CBI/BRDA/2020/0281/1', 'prajwaldnm@gmail.com', 'Intern'),
(114, 'Manish', 'Harish Mane', 'Intern-', 'Medical Research', 'CodeBinary Initiatives', 'Grant Government Medical College, India', 'HR/OFFER/CBI/BRDA/2020/0281/2', 'manishmane000@gmail.com', 'Intern'),
(115, 'Shabbir', 'Mohammed Lehri', 'Intern-', 'Medical Research', 'CodeBinary Initiatives', 'Grant Government Medical College, India', 'HR/OFFER/CBI/BRDA/2020/0281/3', 'shabbirmohammedlehri@gmail.com', 'Intern'),
(116, 'Mansi', 'Bhola', '\r\nIntern-', 'Human Resources', 'CodeBinary Initiatives', 'Amity University, India', 'HR/OFFER/CBI/HRP/2020/0210', 'mansibhola55@gmail.com', 'intern'),
(117, 'NIKHEEL', 'RAJ', 'Intern-', 'Web Development', 'Innvocon Learning Solutions Private Limited', 'DIT University, India', '', 'nikheelraj13@gmail.com\r\n', 'intern'),
(118, 'Ankit', 'Shukla', 'Intern-', 'Web Development', 'Innvocon Learning Solutions Private Limited', 'DIT University, India', '', 'shuklaankit59430900@gmail.com', 'Intern'),
(119, 'Ridhima', 'Goyal', 'Intern-', 'Web Development', 'Innvocon Learning Solutions Private Limited', 'DIT University, India', '', 'goyalridhima30@gmail.com', 'intern'),
(120, 'Amandeep', '', 'Intern-', 'Web Development', 'Innvocon Learning Solutions Private Limited', 'DIT University, India', '', 'amanxyx@gmail.com', 'intern'),
(121, 'Prathmesh', 'Jain', 'Intern-', 'App Development', 'Innvocon Learning Solutions Private Limited', 'DIT University, India', '', 'prathmeshjain24@gmail.com', 'Intern'),
(122, 'Manas', 'Lohani', 'Intern-', 'App Development', 'Innvocon Learning Solutions Private Limited', 'DIT University, India', '', 'manaslohani22@gmail.com', 'Intern'),
(123, 'Aarushi', 'Bansal', 'Intern-', 'App Development', 'Innvocon Learning Solutions Private Limited', 'DIT University, India', '', 'arushibansalabc@gmail.com\r\n', 'Intern'),
(124, 'Anish', 'Bhattacharya', 'Intern-', 'Cyber Security', 'Innvocon Learning Solutions Private Limited', 'DIT University, India', '', 'anish_bhattacharya@outlook.com', 'Intern'),
(125, 'Yash', 'Saxena', 'Intern-', 'Cyber Security', 'Innvocon Learning Solutions Private Limited', 'DIT University, India', '', 'yashsaxena986@gmail.com', 'Intern'),
(126, 'Rishabh', 'Pant', 'Intern-', 'Cyber Security', 'Innvocon Learning Solutions Private Limited', 'DIT University, India', '', 'dewangpant@gmail.com', 'Intern'),
(127, 'Rohit', 'Gupta', 'Intern-', 'Cyber Security', 'Innvocon Learning Solutions Private Limited', 'DIT University, India', '', 'rohitguptarg016@gmail.com', 'Intern'),
(128, 'Harish', 'Jaiswal', 'Intern-', 'Cyber Security', 'Innvocon Learning Solutions Private Limited', 'DIT University, India', '', 'hj101998@gmail.com', 'Intern'),
(129, 'Ajitabh', 'Anand', 'Intern-', 'Marketing', 'Innvocon Learning Solutions Private Limited', 'DIT University, India', '', 'ajitabhanand01@gmail.com', 'intern'),
(130, 'Laveena', 'Parwani', 'Intern-', 'Marketing', 'Innvocon Learning Solutions Private Limited', 'DIT University, India', '', 'l.parwani.28@gmail.com', 'intern'),
(131, 'Nandini', 'Gautam', 'Intern-', 'Marketing', 'Innvocon Learning Solutions Private Limited', 'DIT University, India', '', 'rasmigautam98@gmail.com', 'intern'),
(132, 'Simran', 'Bhist', 'Intern-', 'Marketing', 'Innvocon Learning Solutions Private Limited', 'DIT University, India', '', 'simranbisht2006@gmail.com\r\n', 'intern'),
(133, 'Shivam', 'Raj Rai', 'Intern-', 'Marketing', 'Innvocon Learning Solutions Private Limited', 'DIT University, India', '', 'shivamrajrai299@gmail.com\r\n', 'intern'),
(134, 'Samiksha', 'Keshri', 'Intern-', 'Marketing', 'Innvocon Learning Solutions Private Limited', 'DIT University, India', '', 'samikshakeshri@gmail.com', 'intern'),
(135, 'Apurva', '', 'Intern-', 'Business Development', 'Innvocon Learning Solutions Private Limited', 'DIT University, India', '', 'apurva27299@gmail.com', 'intern'),
(136, 'Shivam', 'Pandey', 'Intern-', 'Business Development', 'Innvocon Learning Solutions Private Limited', 'DIT University, India', '', 'pandeyshivam185@gmail.com\r\n', 'Intern'),
(137, 'Karan', 'Gupta', 'Intern-', 'Business Development', 'Innvocon Learning Solutions Private Limited', 'DIT University, India', '', 'guptakaran9916@gmail.com\r\n', 'intern'),
(138, 'Sunny', 'Kathuria', 'Intern-', 'Business Development', 'Innvocon Learning Solutions Private Limited', 'DIT University, India', '', '51099.sk@gmail.com', 'Intern'),
(139, 'Rohan', 'Shukla', 'Intern-', 'Business Development', 'Innvocon Learning Solutions Private Limited', 'DIT University, India', '', 'shuklarohan261@gmail.com', 'Intern'),
(140, 'Sandeep', 'Singh', 'Intern-', 'Business Development', 'Innvocon Learning Solutions Private Limited', 'DIT University, India', '', 'negisandeep110@gmail.com', 'Intern'),
(141, 'Riyanshi', 'Agarwal', 'Intern-', 'Data Analytics', 'TYFRIO Agri Innovations Private Limited', 'DIT University, India', '', 'ag.riyanshi2@gmail.com', 'Intern'),
(142, 'Srishti', 'Singh Rathour', 'Intern-', 'Marketing', 'TYFRIO Agri Innovations Private Limited', 'DIT University, India', '', 'srishtisrathour@gmail.com\r\n', 'intern'),
(143, 'Komal', 'Kathore', 'Intern-', 'Marketing', 'TYFRIO Agri Innovations Private Limited', 'DIT University, India', '', 'komalkhator15@gmail.com\r\n', 'Intern'),
(144, 'Harpreet', 'Singh', 'Intern-', 'Marketing', 'TYFRIO Agri Innovations Private Limited', 'DIT University, India', '', 'harpreetsingh2.2.1999@gmail.com\r\n', 'Intern'),
(145, 'Rishabh', 'Jain', 'Intern-', 'Data Analytics', 'TYFRIO Agri Innovations Private Limited', 'DIT University, India', '', 'rishabhjain9440@gmail.com\r\n', 'Intern'),
(146, 'Sparsh', 'Agarwal', 'Intern-', 'General Management', 'TYFRIO Agri Innovations Private Limited', 'DIT University, India', '', 'ssparsh.agarwal16@gmail.com\r\n', 'Intern'),
(147, 'Syed', 'Shavez Zamir Rizvi\r\n', 'Intern-', 'General Management', 'TYFRIO Agri Innovations Private Limited', 'DIT University, India', '', 'shavezrizvi7861@gmail.com\r\n', 'Intern'),
(148, 'Akashdeep', 'Chakraborty', 'Intern-', 'IoT', 'TYFRIO Agri Innovations Private Limited', 'DIT University, India', '', 'a.d.chaks@gmail.com\r\n', 'Intern'),
(149, 'Gaurang', 'Dwivedi', 'Intern-', 'IoT', 'TYFRIO Agri Innovations Private Limited', 'DIT University, India', '', 'gaurang99.dwivedi@gmail.com\r\n', 'Intern'),
(150, 'Anushka', 'Agarwal', 'Intern-', 'IoT', 'TYFRIO Agri Innovations Private Limited', 'DIT University, India', '', 'agarwalanushka4@gmail.com\r\n', 'Intern'),
(151, 'Muskan', 'Bhatia', 'Intern-', 'IoT', 'TYFRIO Agri Innovations Private Limited', 'DIT University, India', '', 'muskan.1902bhatia@gmail.com\r\n', 'Intern'),
(152, 'Nishchay', 'Singh Muktawat\r\n', 'Intern-', 'IoT', 'TYFRIO Agri Innovations Private Limited', 'DIT University, India', '', 'nishchay1999@gmail.com\r\n', 'Intern'),
(153, 'Harsh', 'Jaiswal', 'Intern-', 'Data Security', 'TYFRIO Agri Innovations Private Limited', 'DIT University, India', '', 'hj101998@gmail.com\r\n', 'Intern'),
(154, 'Rohit', 'Gupta', 'Intern-', 'Data Security', 'TYFRIO Agri Innovations Private Limited', 'DIT University, India', '', 'rohitguptarg016@gmail.com\r\n', 'Intern'),
(155, 'Anish', 'Bhattacharya', 'Intern-', 'Data Security', 'TYFRIO Agri Innovations Private Limited', 'DIT University, India', '', 'anish_bhattacharya@outlook.com\r\n', 'Intern'),
(156, 'Yash', 'Saxena', 'Intern-', 'Data Security', 'TYFRIO Agri Innovations Private Limited', 'DIT University, India', '', 'yashsaxena986@gmail.com\r\n', 'Intern'),
(157, 'Vinay', 'Suyal', 'Intern-', 'App Development', 'TYFRIO Agri Innovations Private Limited', 'DIT University, India', '', 'vinaysuyal2012@gmail.com\r\n', 'Intern'),
(158, 'Izma', 'Arshad', 'Intern-', 'App Development', 'TYFRIO Agri Innovations Private Limited', 'DIT University, India', '', 'arshadizma04@gmail.com\r\n', 'Intern'),
(159, 'Misha', 'Kumari', 'Intern-', 'App Development', 'TYFRIO Agri Innovations Private Limited', 'DIT University, India', '', 'mishasingh141@gmail.com\r\n', 'Intern'),
(160, 'Rishabh', 'Pant', 'Intern-', 'Data Security', 'TYFRIO Agri Innovations Private Limited', 'DIT University, India', '', 'dewangpant@gmail.com\r\n', 'Intern'),
(161, 'Sneha', 'Dhapola', 'Intern-', 'Web Development', 'TYFRIO Agri Innovations Private Limited', 'DIT University, India', '', 'dhapolasneha3699@gmail.com\r\n', 'Intern'),
(162, 'Sandeep', 'Gusain', 'Intern-', 'Web Development', 'TYFRIO Agri Innovations Private Limited', 'DIT University, India', '', 'gusain.sandeep9@gmail.com\r\n', 'Intern'),
(163, 'Shambhavi', 'Mishra', 'Intern-', 'Web Development', 'TYFRIO Agri Innovations Private Limited', 'DIT University, India', '', 'shambhavimishra13.sm@gmail.com\r\n', 'Intern'),
(164, 'Pavi', 'Gupta', 'Intern-', 'Business Development', 'CodeBinary Initiatives', 'Dr. Bhim Rao Ambedkar College, India', 'HR/OFFER/CBI/BD/2020/0220/1', 'pavigupta1234567@gmail.com', 'Intern'),
(165, 'Anishka', 'Taneja', 'Intern-', 'Business Development', 'CodeBinary Initiatives', 'Dr. Bhim Rao Ambedkar College, India', 'HR/OFFER/CBI/BD/2020/0220/2', 'anishkataneja.26@gmail.com', 'Intern'),
(166, 'Satvik', 'Sethi', 'Intern-', 'Business Development', 'CodeBinary Initiatives', 'Dr. Bhim Rao Ambedkar College, India', 'HR/OFFER/CBI/BD/2020/0220/3', 'sethisatvik3142@gmail.com', 'Intern'),
(167, 'Apurva', '', 'Intern-', 'Content Creation and Development', 'CodeBinary Initiatives', 'DIT University, India', 'HR/OFFER/CBI/CCD/2020/0305/1', 'apurva27299@gmail.com', 'Intern'),
(168, 'Swapnil', 'Agrahari', 'Intern-', 'Business Development - Sales', 'CodeBinary Initiatives', 'Vellore Institute of Technology, India', 'HR/OFFER/CBI/BD/2020/0302/1', 'swapnil.agrahari2017@vitstudent.ac.in', 'Intern'),
(169, 'N V S Bhaskar', 'Yadavilli', 'Intern-', 'Business Development - Sales', 'CodeBinary Initiatives', 'IIM Raipur, India', 'HR/OFFER/CBI/BD/2020/0302/3', 'bhaskar.yadavilli001@gmail.com', 'Intern'),
(170, 'Ishika', 'Agarwal', 'Intern-', 'Business Development - Sales', 'CodeBinary Initiatives', 'IIPS (DAVV), India', 'HR/OFFER/CBI/BD/2020/0302/5', 'gargishu99@gmail.com', 'Intern'),
(171, 'Srushti', 'Gaikwad', 'Intern-', 'Business Development - Sales', 'CodeBinary Initiatives', 'IIM Raipur, India', 'HR/OFFER/CBI/BD/2020/0302/6', 'srushtigaikwad30@gmail.com', 'Intern'),
(172, 'Rajinder', 'Singh', 'Intern-', 'Business Development - Sales', 'CodeBinary Initiatives', 'G. B. Pant University of Agriculture and Technology, India ', 'HR/OFFER/CBI/BD/2020/0308/1', 'srajinders139@gmail.com', 'Intern'),
(173, 'Manish ', 'Arora', 'Intern-', 'Business Development - Sales', 'CodeBinary Initiatives', 'Ramanujan College, India', 'HR/OFFER/CBI/BD/2020/0311/1', 'mkarora2401@gmail.com', 'Intern'),
(174, 'Mayank', 'Singh', 'Intern-', 'Business Development - Sales', 'CodeBinary Initiatives', 'Dr. Bhim Rao Ambedkar College, India', 'HR/OFFER/CBI/BD/2020/0311/2', 'mayank989975@gmail.com', 'Intern'),
(175, 'Tanya', 'Gupta', 'Intern-', 'Business Development - Sales', 'CodeBinary Initiatives', 'Kirori Mal College, India', 'HR/OFFER/CBI/BD/2020/0314/1', 'tanyagupta434@gmail.com', 'Intern'),
(176, 'Nihala', 'Parveen', 'Co-Founder', '', 'Let\'s Put A Smile', 'IIM Kozhikode, India', '', 'mailto:nihalaparveen1@mail.com', 'CORE'),
(177, 'Ayush', 'Bhist', 'Intern-', 'Business Development - Sales', 'CodeBinary Initiatives', 'G. B. Pant University of Agriculture and Technology, India ', 'HR/OFFER/CBI/BD/2020/0315/1', 'bishtayush1999@gmail.com', 'Interncom'),
(178, 'Sarikonda', 'Meghana', 'Intern-', 'Android App Development', 'Sarvpriye Foundation', 'Sphoorthy Engineering College, India', 'HR/OFFER/CBI/APD/2020/0321/1', 'meghanauttami6806@gmail.com', 'Intern'),
(179, 'Umang', 'Agarwal', 'Intern-', 'Web Development', 'Sarvpriye Foundation', 'Vellore Institute of Technology, India', 'HR/OFFER/CBI/APD/2020/0322/1', 'agarwalumang012@gmail.com', 'Intern'),
(180, 'Subham', 'Hazra', 'Intern-', 'Android App Development', 'Sarvpriye Foundation', 'IIIT Bhubaneshwar', 'HR/OFFER/CBI/APD/2020/0322/2', 'subhamhazra25@gmail.com', 'Intern'),
(181, 'Ayush', 'Bisht', 'Intern-', 'Business Development - Sales', 'CodeBinary Initiatives', 'G. B. Pant University of Agriculture and Technology, India', 'HR/Offer/CBI/BD/2020/0315/1', 'bishtayush1999@gmail.com', 'Intern'),
(182, 'Ranit', 'Nath', 'Intern-', 'Web Development', 'Sarvpriye Foundation', 'NIT Silchar, India', 'HR/OFFER/CBI/APD/2020/0327/1', 'ranitnathrn88@gmail.com', 'Intern'),
(183, 'Prince', 'Philip', 'Intern-', 'Business Development - Sales', 'Sarvpriye Foundation', 'Marian College, India', 'HR/Offer/CBI/BD/2020/0331/1', 'princephilip887@gmail.com', 'Intern'),
(184, 'Vishal', 'Mishra', 'Intern-', 'Business Development - Sales', 'Sarvpriye Foundation', 'NIT Jalandhar, India', 'HR/Offer/CBI/BD/2020/0331/2', 'mishravishal189@gmail.com', 'Intern'),
(185, 'Shreyas', 'Vasoya', 'Intern-', 'Business Development - Sales', 'Sarvpriye Foundation', 'Hemchandracharya North Gujarat University, India', 'HR/Offer/CBI/BD/2020/0331/3', 'shreyashvasoya8@gmail.com', 'Intern'),
(186, 'Rupa', 'Kumari', 'Intern-', 'Business Development - Sales', 'Sarvpriye Foundation', 'NIT Allahabad, India', 'HR/Offer/CBI/BD/2020/0331/4', 'gprupa@gmail.com', 'Intern'),
(187, 'Tanishi', 'Garg', 'Intern-', 'Business Development - Sales', 'Sarvpriye Foundation', 'The Northcap University, India', 'HR/Offer/CBI/BD/2020/0331/5', 'tanishigarg20@gmail.com', 'Intern'),
(188, 'Shraddha', 'Rajput', 'Intern-', 'Business Development - Sales', 'Sarvpriye Foundation', 'BIT Mesra, India', 'HR/Offer/CBI/BD/2020/0331/6', 'rajputshraddha133@gmail.com', 'Intern'),
(189, 'Nitesh', 'Kumar', 'Intern-', 'Business Development - Sales', 'Sarvpriye Foundation', 'BIT Sindri, India', 'HR/Offer/CBI/BD/2020/0331/7', 'nitesh443me@gmail.com', 'Intern'),
(190, 'Hemant', 'Tiwari', 'Intern-', 'Business Development - Sales', 'Sarvpriye Foundation', 'Babu Banarasi Das National Institute of Technology & Management, India', 'HR/Offer/CBI/BD/2020/0331/8', 'htjnvk@gmail.com', 'Intern'),
(191, 'Gauransh', 'Joneja', 'Intern-', 'Business Development - Sales', 'Sarvpriye Foundation', 'Sri Guru Tegh Bahadur Khalsa College, India', 'HR/Offer/CBI/BD/2020/0331/9', 'gauranshjoneja@gmail.com', 'Intern'),
(192, 'Anusha', 'Deshapaka', 'Intern-', 'Business Development - Sales', 'Sarvpriye Foundation', 'Kasturba Gandhi Degree and PG college For Women, India', 'HR/Offer/CBI/BD/2020/0331/10', 'anushadeshapaka2906@gmail.com', 'Intern'),
(193, 'Nikita', 'Tiwari', 'Intern-', 'Business Development - Sales', 'Sarvpriye Foundation', 'BIT Mesra, India', 'HR/Offer/CBI/BD/2020/0331/11', 'tiwari.nikita01@gmail.com', 'Intern'),
(194, 'Anikesh', 'Jaiswal', 'Intern-', 'Business Development - Sales', 'Sarvpriye Foundation', 'DMS IIT Delhi, India', 'HR/Offer/CBI/BD/2020/0331/12', 'profanikeshjaiswal1@gmail.com', 'Intern'),
(195, 'Preeti', 'Gabel', 'Intern-', 'Business Development - Sales', 'Sarvpriye Foundation', 'BIT Durg, India', 'HR/Offer/CBI/BD/2020/0331/13', 'preeti07gabelj@gmail.com', 'Intern'),
(196, 'Nirmalya', 'Basu', 'Intern-', 'Business Development - Sales', 'Sarvpriye Foundation', 'IIT ISM Dhanbad, India', 'HR/Offer/CBI/BD/2020/0331/14', 'basunir2013@gmail.com', 'Intern'),
(197, 'Shreya', 'Goyal', 'Intern-', 'Business Development - Sales', 'Sarvpriye Foundation', 'TAPMI, India', 'HR/Offer/CBI/BD/2020/0331/15', 'shreyagoyal223@gmail.com', 'Intern'),
(198, 'Biprajit', 'Roy', 'Intern-', 'Business Development - Sales', 'Sarvpriye Foundation', 'Future Institute of Engineering and Management, India', 'HR/Offer/CBI/BD/2020/0331/16', 'biprajit.roy.456@gmail.com', 'Intern'),
(199, 'Mohammad', 'Ayaan', 'Intern-', 'Business Development - Sales', 'Sarvpriye Foundation', 'NIT Silchar, India', 'HR/Offer/CBI/BD/2020/0331/17', 'mdayaan72@gmail.com', 'Intern'),
(200, 'Roshni', 'Kar', 'Intern-', 'Business Development - Sales', 'Sarvpriye Foundation', 'Trident Academy of Creative Technology, India', 'HR/Offer/CBI/BD/2020/0331/18', 'roshnikar2000188@gmail.com', 'Intern'),
(201, 'Purvi', 'Purohit', 'Intern-', 'Business Development - Sales', 'Sarvpriye Foundation', 'K C College, India', 'HR/Offer/CBI/BD/2020/0331/19', 'purohitpurvi12@gmail.com', 'Intern'),
(202, 'Abhijeet', 'Thakur', 'Intern-', 'Business Development - Sales', 'Sarvpriye Foundation', 'Universal College of Engineering, India', 'HR/Offer/CBI/BD/2020/0331/20', 'tabhijeet9@gmail.com', 'Intern');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `name` text NOT NULL,
  `code` varchar(40) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`name`, `code`) VALUES
('Human Resource & Planning', 'HRP'),
('Marketing', 'MAR'),
('Finance', 'FIN'),
('Operations', 'OPS'),
('Information Technology & Infrastructure Services', 'ITIS'),
('Legal and Ethical Compliance', 'LEC'),
('Content Creation and Development', 'CCD'),
('Social Media Handling', 'SMH'),
('Applications Development', 'APD'),
('Business Research and Data Analytics', 'BRDA'),
('Business Development', 'BD'),
('Fashion Designing and Creation', 'FDC'),
('Logistics', 'LOG'),
('Corporate Relations', 'CR'),
('Event Management', 'EVENT'),
('Machine Learning', 'MLE'),
('Blockchain and Business', 'BLB'),
('try', 'try');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

DROP TABLE IF EXISTS `experience`;
CREATE TABLE IF NOT EXISTS `experience` (
  `name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`name`) VALUES
('0-12 Weeks'),
('12-24 Weeks'),
('24-48 Weeks'),
('>48 Weeks');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `pos` varchar(40) NOT NULL,
  `domain` varchar(40) NOT NULL,
  `department` text NOT NULL,
  `org` text NOT NULL,
  `exp` text NOT NULL,
  `description` longtext NOT NULL,
  `count` int(100) NOT NULL,
  `addd` longtext,
  `id` varchar(40) NOT NULL,
  `stip` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `period` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`pos`, `domain`, `department`, `org`, `exp`, `description`, `count`, `addd`, `id`, `stip`, `time`, `period`) VALUES
('Lead', 'Web Applications Development', 'Applications Development', 'CodeBinary', '12-24 Weeks', '.............................................................................................................................................................................................................................................................................................................................................................................', 0, '#none', 'CBI2020APD1', 'Unpaid', '2020-04-15 16:48:29', 0),
('Lead', 'try', 'Blockchain and Business', 'Bhooklagi', '0-12 Weeks', '...................TRY.............................................................................................................................................................................................................................................................................', -2, 'none', 'CBI2020BLB1', 'Unpaid', '2020-04-15 16:46:47', 0),
('Lead', 'css', 'Applications Development', 'Bhooklagi', '0-12 Weeks', 'TRY...........................................................................................................................................................................................................', -1, '', 'CBI2020APD2', '1000 per month', '2020-04-15 19:17:56', 0),
('Lead', 'Event management', 'Blockchain and Business', 'CodeBinary', '0-12 Weeks', '............................................................................................  .............................................................................. ........................................................................ ..........', 3, '', 'CBI2020BLB2', 'Unpaid', '2020-04-22 12:17:30', 0),
('Intern', 'Web Applications Development', 'Applications Development', 'CodeBinary', '0-12 Weeks', '..............................................................................................................................................................................................................................................', 0, '#none', 'CBI2020APD3', 'Unpaid', '2020-04-13 18:57:02', 0),
('Intern', 'Web Applications Development', 'Applications Development', 'Prakash', '24-48 Weeks', '........................................................................................................................................................................................................................................................', 1, '#none', 'CBI2020APD4', '1000 per month', '2020-04-22 06:34:03', 6),
('Lead', 'New1', 'Machine Learning', 'CodeBinary', '0-12 Weeks', '.............', 3, '#none', 'CBI2020MLE2', 'Unpaid', '2020-04-22 20:32:45', 0),
('Lead', 'New1', 'Marketing', 'CodeBinary', '0-12 Weeks', '.............', 3, '#none', 'CBI2020MAR2', 'Unpaid', '2020-04-22 20:32:45', 0),
('Lead', 'New1', 'Applications Development', 'CodeBinary', '0-12 Weeks', '.............', 3, '#none', 'CBI2020APD6', 'Unpaid', '2020-04-22 20:32:45', 0),
('Lead', 'New1', 'Machine Learning', 'CodeBinary', '0-12 Weeks', '.............', 3, '#none', 'CBI2020MLE1', 'Unpaid', '2020-04-22 20:31:43', 0),
('Lead', 'New1', 'Applications Development', 'CodeBinary', '0-12 Weeks', '.............', 3, '#none', 'CBI2020APD5', 'Unpaid', '2020-04-22 20:31:43', 0),
('Lead', 'New1', 'Marketing', 'CodeBinary', '0-12 Weeks', '.............', 2, '#none', 'CBI2020MAR1', 'Unpaid', '2020-04-22 20:31:43', 0),
('Lead', 'New1', 'Blockchain and Business', 'CodeBinary', '0-12 Weeks', '.............Wapas try \r\n', 3, '#none', 'CBI2020BLB3', 'Unpaid', '2020-04-22 20:32:45', 0),
('Lead', 'New', 'Marketing', 'CodeBinary', '0-12 Weeks', '.............', 3, '#none', 'CBI2020MAR3', 'Unpaid', '2020-04-22 20:34:40', 0),
('Lead', 'New2', 'Applications Development', 'CodeBinary', '0-12 Weeks', '.............', 2, '#none', 'CBI2020APD7', 'Unpaid', '2020-04-22 20:34:40', 0),
('Lead', 'New', 'Machine Learning', 'CodeBinary', '0-12 Weeks', '.............', 3, '#none', 'CBI2020MLE3', 'Unpaid', '2020-04-22 20:34:40', 0),
('Lead', 'New', 'Marketing', 'CodeBinary', '0-12 Weeks', '.............', 3, '#none', 'CBI2020MAR4', 'Unpaid', '2020-04-22 20:39:56', 0),
('Lead', 'New2', 'Applications Development', 'CodeBinary', '0-12 Weeks', '.............', 1, '#none', 'CBI2020APD8', 'Unpaid', '2020-04-22 20:39:56', 0),
('Lead', 'New', 'Machine Learning', 'CodeBinary', '0-12 Weeks', '.............', 3, '#none', 'CBI2020MLE4', 'Unpaid', '2020-04-22 20:39:56', 0),
('Lead', 'New', 'Blockchain and Business', 'CodeBinary', '0-12 Weeks', '.............', 3, '#none', 'CBI2020BLB4', 'Unpaid', '2020-04-22 20:39:56', 0),
('Lead', 'New2', 'Applications Development', 'CodeBinary', '0-12 Weeks', '.............', 0, '#none', 'CBI2020APD9', 'Unpaid', '2020-04-22 20:42:43', 0),
('Lead', 'New', 'Machine Learning', 'CodeBinary', '0-12 Weeks', '.............', 3, '#none', 'CBI2020MLE5', 'Unpaid', '2020-04-22 20:42:43', 0),
('Lead', 'New', 'Blockchain and Business', 'CodeBinary', '0-12 Weeks', '.............', 1, '#none', 'CBI2020BLB5', 'Unpaid', '2020-04-22 20:42:43', 0),
('umang', 'umang', 'Machine Learning', ' CodeBinary', ' 0-12 Weeks', 'umangumangumangumangumangumangumangumangumangumangumangumang', 2, '', 'CBI2020MLE6', '3', '2020-06-11 18:00:45', 0),
('Lead', 'umang', 'Machine Learning', 'Bhooklagi', '0-12 Weeks', 'umangumangumangumangumangumangumangumangumangumangumangumang', 3, '', 'CBI2020MLE7', '3', '2020-06-11 18:01:10', 2),
('Lead', 'umang', 'Machine Learning', 'CodeBinary', '12-24 Weeks', 'v', 5, 'v', 'CBI2020MLE8', '2', '2020-06-15 10:31:37', 2),
('Lead', 'Umang', 'Applications Development', 'Bhooklagi', '0-12 Weeks', 'VBDJKB RWKAJSDGBV RBSNDGV NWEB SDVJKJBE KJFBNjb     sidjbvkrsj bkjfb kjsrgkjxnbgkjdfnbnkdjfncbdjfdgkjdfbg s, d', 0, '', 'CBI2020APD10', 'Unpaid', '2020-06-15 10:06:02', 3),
('Intern', 'web dev', 'Blockchain and Business', 'Bhooklagi', '0-12 Weeks', '................................................................................................ ... ..', 0, '', 'CBI2020BLB6', 'Unpaid', '2020-06-15 10:34:48', 2),
('Lead', 'umang', 'Machine Learning', 'CodeBinary', '12-24 Weeks', 'v', 5, 'v', 'CBI2020MLE9', '2', '2020-06-15 10:35:09', 2),
('Lead', 'web dev', 'Applications Development', 'Bhooklagi', '0-12 Weeks', '.................................................................. sczsjhhj ncDJZhxfcnb ewkjadzhxb cej svhbxfcchj sbnFck jwrhsvdzbckuwsjhxbn', 0, '', 'CBI2020APD11', 'Unpaid', '2020-06-15 10:37:53', 1),
('Lead', 'umang', 'Machine Learning', 'CodeBinary', '12-24 Weeks', 'v', 2, 'v', 'CBI2020MLE10', '2', '2020-06-15 10:38:08', 2),
('Lead', 'umang', 'Machine Learning', 'CodeBinary', '12-24 Weeks', 'v', 5, 'v', 'CBI2020MLE11', '2', '2020-06-18 18:31:10', 2);

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

DROP TABLE IF EXISTS `organizations`;
CREATE TABLE IF NOT EXISTS `organizations` (
  `name` text NOT NULL,
  `des` longtext NOT NULL,
  `site` varchar(400) NOT NULL DEFAULT '#',
  `repname` text NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`name`, `des`, `site`, `repname`, `mail`) VALUES
('CodeBinary Initiatives', 'CodeBinary Initiatives is a student-run organization and is built around the idea of addressing issues that act as a hindrance to the development of a nation. It has been envisioned as a platform where crucial problems are identified, surfaced and conscious efforts are made towards building remedies.', 'https://codebinary.in/', 'Nilay Jayswal', 'nilayjayswal@gmail.com'),
('Sprouting Wings', '........................................................................', '#', '....', 'abc@def.com'),
('Sarvpriye Foundation', '........................................................................', '#', '....', 'abc@def.com'),
('Prakash Saboo & Co.', '........................................................................', '#', '....', 'abc@def.com'),
('Innvocon Learning Solutions', '........................................................................HO GAYA  \r\nYAYYYY', '#', '....', 'abc@def.com'),
('TYFRIO Agri Solutions', '........................................................................', '#', '....', 'abc@def.com'),
('TrashCan', '........................................................................', '#', '....', 'abc@def.com'),
('Let\'s Put A Smile', '........................................................................', '#', '....', 'abc@def.com'),
('Konnect - IIM Kozhikode', '........................................................................', '#', '....', 'abc@def.com'),
('Bhooklagi - IIM Kozhikode', '........................................................................', '#', '....', 'abc@def.com');

-- --------------------------------------------------------

--
-- Table structure for table `posi`
--

DROP TABLE IF EXISTS `posi`;
CREATE TABLE IF NOT EXISTS `posi` (
  `name` varchar(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posi`
--

INSERT INTO `posi` (`name`) VALUES
('Lead'),
('Intern');

-- --------------------------------------------------------

--
-- Table structure for table `shadows`
--

DROP TABLE IF EXISTS `shadows`;
CREATE TABLE IF NOT EXISTS `shadows` (
  `href` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`href`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shadows`
--

INSERT INTO `shadows` (`href`, `email`) VALUES
('HR/Offer/CBI/APD/2020/0616/1', 'ag@ngg.com'),
('HR/Offer/CBI/BLB/2020/0616/1', 'agarwal@gmail.com'),
('abcd', 'agarwalumang012@gay.com');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

DROP TABLE IF EXISTS `statuses`;
CREATE TABLE IF NOT EXISTS `statuses` (
  `name` text NOT NULL,
  `color` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`name`, `color`) VALUES
('In progress', '000000'),
('Shortlisted', '38b0de'),
('Hired', '29ab87'),
('Rejected', 'ab0505');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

DROP TABLE IF EXISTS `userdata`;
CREATE TABLE IF NOT EXISTS `userdata` (
  `href` varchar(40) NOT NULL,
  `domain` text,
  `linkedin` text,
  `git` text,
  `insta` text,
  `dribbble` text,
  `mail` text,
  `abt` longtext,
  `pic` int(11) NOT NULL DEFAULT '0',
  `resume` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`href`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`href`, `domain`, `linkedin`, `git`, `insta`, `dribbble`, `mail`, `abt`, `pic`, `resume`) VALUES
('HR/Offer/CBI/BLB/2020/0616/1', 'BD Executive', 'https://www.linkedin.com/in/umang-agarwal-5b227617b', '', '', '', 'agarwal@gmail.com', 'A Business Management student venturing out into the exhilarating world of entrepreneurship. Aspires to invigorate the youth by imparting industrial skills through CodeBinary. Has an inconsumable desire to empower women and is doing his bit by bringing up their household business up in the global front and giving them a platform: Kalpanaa, to showcase their entrepreneurial skills. ', 1, 1),
('HR/Offer/CBI/APD/2020/0616/1', NULL, NULL, NULL, NULL, NULL, 'ag@ngg.com', NULL, 0, 0),
('abcd', 's', '', '', '', '', 'agarwalumang012@gay.com', 's', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

DROP TABLE IF EXISTS `usertable`;
CREATE TABLE IF NOT EXISTS `usertable` (
  `fullname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `href` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `lastlogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `block` int(11) NOT NULL DEFAULT '0',
  `online` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`href`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`fullname`, `lname`, `href`, `password`, `lastlogin`, `block`, `online`) VALUES
('Smriti', 'Bhuwania', 'HR/Offer/CBI/BLB/2020/0616/1', '81dc9bdb52d04dc20036dbd8313ed055', '2020-06-16 14:45:28', 0, 1),
('Umang', 'Agarwal', 'HR/Offer/CBI/APD/2020/0616/1', '81dc9bdb52d04dc20036dbd8313ed055', '2020-06-16 18:39:04', 0, 1),
('nouns', '', 'abcd', '81dc9bdb52d04dc20036dbd8313ed055', '2020-06-17 13:36:38', 0, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
