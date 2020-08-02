-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2017 at 03:55 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitfeedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, 'Yernuj', 'Do Kai', 'ducjunrey', 'junrey');

-- --------------------------------------------------------

--
-- Table structure for table `evaluationform`
--

CREATE TABLE IF NOT EXISTS `evaluationform` (
  `evaluate_id` int(11) NOT NULL,
  `evaluate_description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluationform`
--

INSERT INTO `evaluationform` (`evaluate_id`, `evaluate_description`) VALUES
(35, 'TIME MANAGEMENT'),
(36, 'PROFESSIONALISM');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation_content`
--

CREATE TABLE IF NOT EXISTS `evaluation_content` (
  `evaluation_content_id` int(11) NOT NULL,
  `evaluationheader_id` int(11) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation_content`
--

INSERT INTO `evaluation_content` (`evaluation_content_id`, `evaluationheader_id`, `Description`) VALUES
(114, 35, '1. Punctual in starting and ending classes on specified time.'),
(115, 36, '1. Has a happy attitude towards students.'),
(116, 36, '2. Has a pleasing personality.'),
(117, 36, '3. Attends classes regularly, absences are rare and reasonable.'),
(118, 36, '4. Manifests initiative in one work.'),
(119, 36, '5. Is emotionally well-balanced.'),
(120, 35, '2. Makes self available to students beyond official time.'),
(121, 35, '3. Keeps accurate records of students performance and prompt submission of the same.');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE IF NOT EXISTS `facilities` (
  `facilities_id` int(11) NOT NULL,
  `facilities_description` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`facilities_id`, `facilities_description`) VALUES
(1, 'Computer Laboratory 1'),
(2, 'Computer Laboratory 2'),
(3, 'Library'),
(4, 'C.R 1st floor'),
(5, 'C.R 2nd floor'),
(6, 'C.R 3rd floor');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(11) NOT NULL,
  `comments` text NOT NULL,
  `idnumber` varchar(11) NOT NULL,
  `teacher_category` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=248 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL,
  `student_firstname` varchar(25) NOT NULL,
  `student_lastname` varchar(25) NOT NULL,
  `student_course` varchar(50) NOT NULL,
  `student_section` varchar(2) NOT NULL,
  `student_year` varchar(5) NOT NULL,
  `idnumber` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_firstname`, `student_lastname`, `student_course`, `student_section`, `student_year`, `idnumber`) VALUES
(48, 'Peter', 'Villaceran ', 'BSMAR-E', 'A', '2nd', 'ID1111'),
(49, 'Darlyn', 'Doble', 'BSINFO', 'B', '4th', 'ID2222'),
(50, 'Judy', 'Alojacin', 'BSBA', 'C', '3rd', 'ID3333'),
(51, 'Junrey', 'Ducay', 'BSIT', 'F', '4th', 'ID4444');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(11) NOT NULL,
  `teacher_firstname` varchar(25) NOT NULL,
  `teacher_lastname` varchar(25) NOT NULL,
  `idnumber` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_firstname`, `teacher_lastname`, `idnumber`) VALUES
(43, 'Reymond', 'Elmedulan', 'INS1111'),
(44, 'Leo', 'Tinga', 'INS2222'),
(45, 'Gaby', 'Figuracion', 'INS3333'),
(46, 'Eric James', 'Sevillano', 'INS4444');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_evaluation_result`
--

CREATE TABLE IF NOT EXISTS `teacher_evaluation_result` (
  `teacher_evaluation_result_id` int(11) NOT NULL,
  `evaluation_content_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `ratings` int(11) NOT NULL,
  `school_year` varchar(20) NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `evaluationform`
--
ALTER TABLE `evaluationform`
  ADD PRIMARY KEY (`evaluate_id`);

--
-- Indexes for table `evaluation_content`
--
ALTER TABLE `evaluation_content`
  ADD PRIMARY KEY (`evaluation_content_id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`facilities_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `teacher_evaluation_result`
--
ALTER TABLE `teacher_evaluation_result`
  ADD PRIMARY KEY (`teacher_evaluation_result_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `evaluationform`
--
ALTER TABLE `evaluationform`
  MODIFY `evaluate_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `evaluation_content`
--
ALTER TABLE `evaluation_content`
  MODIFY `evaluation_content_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=122;
--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `facilities_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=248;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `teacher_evaluation_result`
--
ALTER TABLE `teacher_evaluation_result`
  MODIFY `teacher_evaluation_result_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=153;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
