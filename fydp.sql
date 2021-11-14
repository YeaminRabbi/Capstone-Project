-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2021 at 05:33 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fydp`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_table`
--

CREATE TABLE IF NOT EXISTS `course_table` (
  `course_id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_group` varchar(255) NOT NULL,
  `course_credit` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_table`
--

INSERT INTO `course_table` (`course_id`, `course_code`, `course_name`, `course_group`, `course_credit`, `department`) VALUES
(1, 'ENG 101 ', 'Englis I', 'Language', '3', 'CSE'),
(2, 'ENG 1013', 'English II', 'Language', '3', 'CSE'),
(3, 'SOC 2101', ' Society, Environment and Engineering Ethics', 'General Education', '3', 'CSE'),
(4, ' PMG 4101', ' Project Management', 'General Education', '3', 'CSE'),
(5, 'ECO 4101', 'Economics', 'General Education', '3', 'CSE'),
(6, 'SOC 4101', 'Introduction to Sociology', 'General Education', '3', 'CSE'),
(7, 'ACT 2111', ' Financial and Managerial Accounting', 'General Education', '3', 'CSE'),
(8, 'IPE 3401', 'Industrial and Operational Management', 'General Education', '3', 'CSE'),
(9, 'TEC 2499', 'Technology Entrepreneurship', 'General Education', '3', 'CSE'),
(10, 'PSY 2101', 'Psychology', 'General Education', '3', 'CSE'),
(11, 'BDS 2201', 'Bangladesh Studies', 'General Education', '3', 'CSE'),
(12, 'BAN 2501', 'Bangla', 'General Education', '3', 'CSE'),
(13, ' PHY 2105', 'Physics', 'Basic_Sciences', '3', 'CSE'),
(14, ' PHY 2106', 'Physics Laboratory', 'Basic_Sciences', '1', 'CSE'),
(15, 'BIO 3105', 'Biology for Engineers', 'Basic_Sciences', '3', 'CSE'),
(16, ' MATH 1151', ' Fundamental Calculus', 'Mathematics', '3', 'CSE'),
(17, ' MATH 2183', 'Calculus and Linear Algebra', 'Mathematics', '3', 'CSE'),
(18, ' MATH 2201', 'Coordinate Geometry and Vector Analysis', 'Mathematics', '3', 'CSE'),
(19, 'MATH 2205', 'Probability and Statistics', 'Mathematics', '3', 'CSE'),
(20, 'EEE 2113', 'Electrical Circuits', 'Other_Engineering', '3', 'CSE'),
(21, ' EEE 2123', 'Electronics', 'Other_Engineering', '3', 'CSE'),
(22, 'EEE 2124', ' Electronics Laboratory', 'Other_Engineering', '1', 'CSE'),
(23, ' EEE 4261', ' Green Computing', 'Other_Engineering', '3', 'CSE'),
(24, ' CSE 1110', 'Introduction to Computer Systems', 'Programming_Courses', '1', 'CSE'),
(25, 'CSE 1111', 'Structured Programming Language', 'Programming_Courses', '3', 'CSE'),
(26, ' CSE 1112', 'Structured Programming Language Laboratory', 'Programming_Courses', '1', 'CSE'),
(27, 'CSE 1115', 'Object Oriented Programming', 'Programming_Courses', '3', 'CSE'),
(28, 'CSE 1116', ' Object Oriented Programming Laboratory', 'Programming_Courses', '1', 'CSE'),
(29, 'CSE 2118', 'Advanced Object Oriented Programming Laboratory', 'Programming_Courses', '1', 'CSE'),
(30, 'CSE 4165', 'Web Programming', 'Programming_Courses', '3', 'CSE'),
(31, 'CSE 4181', ' Mobile Application Development', 'Programming_Courses', '3', 'CSE'),
(32, 'CSE 1325', 'Digital Logic Design', 'Hardware', '3', 'CSE'),
(33, 'CSE 1326', 'Digital Logic Design Laboratory', 'Hardware', '1', 'CSE'),
(34, ' CSE 3313', 'Computer Architecture', 'Hardware', '3', 'CSE'),
(35, 'CSE 4325', 'Microprocessors and Microcontrollers', 'Hardware', '3', 'CSE'),
(36, 'CSE 4326', 'Microprocessors and Microcontrollers Laboratory', 'Hardware', '1', 'CSE'),
(37, 'CSE 2213', ' Discrete Mathematics', 'Logics_Algorithms', '3', 'CSE'),
(38, 'CSE 2215', 'Data Structure and Algorithms I', 'Logics_Algorithms', '3', 'CSE'),
(39, 'CSE 2216', ' Data Structure and Algorithms I Laboratory', 'Logics_Algorithms', '1', 'CSE'),
(40, 'CSE 2217', ' Data Structure and Algorithms II', 'Logics_Algorithms', '3', 'CSE'),
(41, ' CSE 2218', 'Data Structure and Algorithms II Laboratory', 'Logics_Algorithms', '1', 'CSE'),
(42, 'CSE 2233', 'Theory of Computation', 'Logics_Algorithms', '3', 'CSE'),
(43, 'CSE 3411', 'System Analysis and Design', 'Software_Engineering', '3', 'CSE'),
(44, 'CSE 3412', ' System Analysis and Design Laboratory', 'Software_Engineering', '1', 'CSE'),
(45, 'CSE 3421', ' Software Engineering', 'Software_Engineering', '3', 'CSE'),
(46, ' CSE 3422', 'Software Engineering Laboratory', 'Software_Engineering', '1', 'CSE'),
(47, 'CSE 4531', 'Computer Security', 'System', '3', 'CSE'),
(48, ' CSE 3521', ' Database Management Systems', 'System', '3', 'CSE'),
(49, 'CSE 3522', 'Database Management Systems Laboratory', 'System', '1', 'CSE'),
(50, ' CSE 4509', 'Operating Systems', 'System', '3', 'CSE'),
(51, 'CSE 4510', 'Operating Systems Laboratory', 'System', '1', 'CSE'),
(52, 'CSE 3711', 'Computer Networks', 'System', '3', 'CSE'),
(53, 'CSE 3712', 'Computer Networks Laboratory', 'System', '1', 'CSE'),
(54, 'CSE 3811', ' Artificial Intelligence', 'System', '3', 'CSE'),
(55, 'CSE 3812', ' Artificial Intelligence Laboratory', 'System', '1', 'CSE'),
(56, ' CSE 4601', ' Mathematical Analysis for Computer Science', 'Elective_Courses', '3', 'CSE'),
(57, 'CSE 4633', 'Basic Graph Theory', 'Elective_Courses', '3', 'CSE'),
(58, 'CSE 4655', 'Algorithm Engineering', 'Elective_Courses', '3', 'CSE'),
(59, ' CSE 4611', 'Compiler Design', '--Select Option--', '--Select Option--', 'CSE'),
(60, 'CSE 4611', 'Compiler Design', 'Elective_Courses', '3', 'CSE'),
(61, ' CSE 4613', 'Computational Geometry', 'Elective_Courses', '3', 'CSE'),
(62, 'CSE 4621', 'Computer Graphics', 'Elective_Courses', '3', 'CSE'),
(63, 'CSE 3715', ' Data Communication', 'Elective_Courses', '3', 'CSE'),
(64, 'CSE 4759', 'Wireless and Cellular Communication', 'Elective_Courses', '3', 'CSE'),
(65, 'CSE 4793', 'Advanced Network Services and Management', 'Elective_Courses', '3', 'CSE'),
(66, ' CSE 4783', 'Cryptography', 'Elective_Courses', '3', 'CSE'),
(67, 'CSE 4777', ' Networks Security', 'Elective_Courses', '3', 'CSE'),
(68, ' CSE 4763', 'Electronic Business', 'Elective_Courses', '3', 'CSE'),
(69, 'CSE 4547 ', 'Multimedia Systems Design', 'Elective_Courses', '3', 'CSE'),
(70, 'CSE 4519', 'Distributed Systems', 'Elective_Courses', '3', 'CSE'),
(71, ' CSE 4523', ' Simulation and Modeling', 'Elective_Courses', '3', 'CSE'),
(72, 'CSE 4521', ' Computer Graphics', 'Elective_Courses', '3', 'CSE'),
(73, 'CSE 4587', ' Cloud Computing', 'Elective_Courses', '3', 'CSE'),
(74, 'CSE 4567', ' Advanced Database Management Systems', 'Elective_Courses', '3', 'CSE'),
(75, 'CSE 4889', 'Machine Learning', 'Elective_Courses', '3', 'CSE'),
(76, 'CSE 4891', 'Data Mining', 'Elective_Courses', '3', 'CSE'),
(77, ' CSE 4893', 'Introduction to Bioinformatics', 'Elective_Courses', '3', 'CSE'),
(78, 'CSE 4883', 'Digital Image Processing', 'Elective_Courses', '3', 'CSE'),
(79, ' CSE 4817', 'Big Data Analytics', 'Elective_Courses', '3', 'CSE'),
(80, 'CSE 4451', ' Human Computer Interaction', 'Elective_Courses', '3', 'CSE'),
(81, ' CSE 4435', ' Software Architecture', 'Elective_Courses', '3', 'CSE'),
(82, 'CSE 4165', 'Web Programming', 'Elective_Courses', '3', 'CSE'),
(83, 'CSE 4181', ' Mobile Application Development', 'Elective_Courses', '3', 'CSE'),
(84, 'CSE 4495', ' Software Testing and Quality Assurance', 'Elective_Courses', '3', 'CSE'),
(85, ' CSE 4485', ' Game Design and Development', 'Elective_Courses', '3', 'CSE'),
(86, ' CSE 4329', ' Digital System Design', 'Elective_Courses', '3', 'CSE'),
(87, 'CSE 4379', 'Real-time Embedded Systems', 'Elective_Courses', '3', 'CSE'),
(88, ' CSE 4327', ' VLSI Design', 'Elective_Courses', '3', 'CSE'),
(89, 'CSE 4337', 'Robotics', 'Elective_Courses', '3', 'CSE'),
(90, 'CSE 4397', 'Interfacing', 'Elective_Courses', '3', 'CSE'),
(91, ' CSE 4941', 'Enterprise Systems: Concepts and Practice', 'Elective_Courses', '3', 'CSE'),
(92, 'CSE 4943', 'Web Application Security', 'Elective_Courses', '3', 'CSE'),
(93, ' CSE 4463', ' Electronic Business', 'Elective_Courses', '3', 'CSE'),
(94, 'CSE 4165', 'Web Programming', 'Elective_Courses', '3', 'CSE'),
(95, ' CSE 4181', 'Mobile Application Development', 'Elective_Courses', '3', 'CSE'),
(96, ' CSE 4945', 'UI: Concepts and Design', 'Elective_Courses', '3', 'CSE'),
(97, 'CSE 4949', 'IT Audit: Concepts and Practice', 'Elective_Courses', '3', 'CSE'),
(98, 'CSE 4587', 'Cloud Computing', 'Elective_Courses', '3', 'CSE'),
(99, ' CSE 4495', ' Software Testing and Quality Assurance', 'Elective_Courses', '3', 'CSE'),
(100, 'URC 1103', 'Life Skills for Success', 'Compolsary_Courses', '2', 'CSE'),
(101, 'CSE 4000A', 'Final Year Design Project - I', 'FYDP', '2', 'CSE'),
(102, ' CSE 4000B', ' Final Year Design Project - II', 'FYDP', '2', 'CSE'),
(103, 'CSE 4000B', 'Final Year Design Project - II', 'FYDP', '2', 'CSE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_table`
--
ALTER TABLE `course_table`
  ADD PRIMARY KEY (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_table`
--
ALTER TABLE `course_table`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=104;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
