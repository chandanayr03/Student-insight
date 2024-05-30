-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 07:01 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_insight`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(3, 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `f_id` int(10) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `afile` varchar(30) NOT NULL,
  `sdate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`f_id`, `branch`, `semester`, `subject`, `afile`, `sdate`) VALUES
(1, 'BCA', '1st', 'Java', 'uploads/pathasala (1).sql', '2024-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `a_id` int(10) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `month` varchar(20) NOT NULL,
  `aweek` varchar(20) NOT NULL,
  `studentid` varchar(50) NOT NULL,
  `total_cls` varchar(50) NOT NULL,
  `attended_cls` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`a_id`, `branch`, `semester`, `subject`, `month`, `aweek`, `studentid`, `total_cls`, `attended_cls`) VALUES
(22, 'BA', '1st', 'C', '1', '1', 'sachin', '30', '20'),
(23, 'BA', '1st', 'C', '1', '1', 'suresh', '30', '18');

-- --------------------------------------------------------

--
-- Table structure for table `cls_cancellation`
--

CREATE TABLE `cls_cancellation` (
  `c_id` int(10) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `faculty_id` varchar(30) NOT NULL,
  `note` varchar(30) NOT NULL,
  `mdate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cls_cancellation`
--

INSERT INTO `cls_cancellation` (`c_id`, `branch`, `semester`, `date`, `faculty_id`, `note`, `mdate`) VALUES
(1, 'BA', '1st', '2024-04-28', 'sachina', 'cls cancelled', '2024-04-22 18:29:53'),
(2, 'BA', '1st', 'qwerty', 'adawd', '2024-04-25', '2024-04-22 19:19:14');

-- --------------------------------------------------------

--
-- Table structure for table `doctorprofile`
--

CREATE TABLE `doctorprofile` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `clinicname` varchar(100) NOT NULL,
  `phonenumber` varchar(13) NOT NULL,
  `doctorid` varchar(20) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `workexperience` varchar(20) NOT NULL,
  `tfrom` varchar(20) NOT NULL,
  `tto` varchar(20) NOT NULL,
  `specilisation` varchar(20) NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctorprofile`
--

INSERT INTO `doctorprofile` (`id`, `firstname`, `lastname`, `clinicname`, `phonenumber`, `doctorid`, `address`, `workexperience`, `tfrom`, `tto`, `specilisation`, `city`) VALUES
(1, 'madusudan', 'm p', 'appoloclinic', '8884644589', 'madusudan', '8th Phase, JP Nagar, Bengaluru, Karnataka, India', '3', '13:00', '17:00', 'Nephrologist', 'MYSORE'),
(2, 'arpitha', 's', 'arpitha multi-speciality hospital', '7353441555', 'arpitha', '12, 7th Main 2nd Cross Road, Vidayaranya Puram, Mysuru, Karnataka, India', '1', '14:00', '17:00', 'cardiologist', 'MYSORE'),
(3, 'siddharth', 'roy', 'roy clinic', '9980564217', 'siddharth', '12th Main Road, Vijayanagar 1st Stage, Vijayanagar, Mysuru, Karnataka, India', '2', '11:00', '16:30', 'Dermatologist', 'BANGLORE'),
(4, 'mithun', 'raj', 'raj  hospital', '8123113911', 'mithun', '5th Cross, K R Puram, Hassan, Karnataka, India', '1', '10:00', '15:00', 'cardiology', 'HASSAN'),
(5, 'samruddhi', 'rao', 'rao clinic', '8557894521', 'samruddhi', '6th Main Road, Vani Vilas Mohalla, Mysuru, Karnataka, India', '2', '10:00', '15:00', 'Neurologist', 'MYSORE'),
(6, 'samruddhi', 'rao', 'rao clinic', '8556548921', 'samruddhi', '6th Main Road, 3rd Block, Jayalakshmipuram, Mysuru, Karnataka, India', '2', '10:00', '15:00', 'orthopedics', 'MYSORE'),
(7, 'sandya', 'shetty', 'sandya hospital', '9900458967', 'sandya', '9th phase Jp Nagar, JP Nagar, Bengaluru, Karnataka, India', '2', '10:00', '15:00', 'Dermatologist', 'BANGLORE'),
(8, 'nandish', 'KP', 'nandish hospital', '9964115795', 'nandish', '7th B Main, Subramanya Nagar, Hebbal 1st Stage, Mysuru, Karnataka, India', '1', '10:00', '16:00', 'cardiology', 'MYSORE'),
(9, 'gokul', 'sachi', 'gokul hospital', '9611148335', 'gokul', '44, 1st Cross Road, 4th Block, Jayalakshmipuram, Mysuru, Karnataka, India', '2', '09:00', '16:00', 'cardiologist', 'MYSORE'),
(10, 'deviprasad', 'KS', 'prasad clinic', '9663168954', 'deviprasad', '4th Block, Jayalakshmipuram, Mysuru, Karnataka, India', '2', '11:00', '15:00', 'Neurologist', 'MYSORE'),
(11, 'Lavanya', 'shetty', 'shetty  clinic', '8884644589', 'Lavanya', '5th Cross Road, TK Layout, Mysuru, Karnataka, India', '2', '10:30', '16:30', 'Nephrologist', 'MYSORE'),
(12, 'Shradha', 'Shrinath', 'Shrinath clinic', '9742456868', 'Shradha', '12, Sayyaji Rao Road, Medar Block, Yadavagiri, Mysuru, Karnataka, India', '3', '10:00', '15:00', 'orthopedics', 'MYSORE'),
(13, 'Varsha', 'Bhardwaj', 'Bhardwaj clinic', '8088897999', 'Varsha Bhardwaj', '6th Main Road, Vani Vilas Mohalla, Mysuru, Karnataka, India', '2', '10:00', '17:00', 'Dermatologist', 'MYSORE'),
(14, 'mahadeva', 'm', 'mahadeva clinc', '8884455896', 'mahadeva', 'Saraswathipuram, Mysuru, Karnataka, India', '2', '11:11', '09:09', 'Neurologist', 'MYSORE'),
(15, 'kushal', 'mp', 'kushal speech and hearing', '8884644589', 'kushal', 'Mysore Palace, Agrahara, Chamrajpura, Mysuru, Karnataka', '2', '11:00', '17:02', 'SPEECH/HEARING', 'MYSORE'),
(16, 'SAGAR', 'D', 'qwerty', '09071198727', 'sagar', 'SAGAR', '3', '14:12', '20:12', 'Audiometrists', 'Cuttack'),
(20, 'SAGAR', 'D', 'doctor123', '1234567889', 'doctor123', 'Jss college of arts, commerce and science college ooty road, mysuru\r\nNear shakthidhama', '1', '01:26', '10:26', 'SPEECH/HEARING', 'Bhubaneswar'),
(21, '', '', '', '', 'sachina', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `emmergencynoti`
--

CREATE TABLE `emmergencynoti` (
  `userid` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `messege` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emmergencynoti`
--

INSERT INTO `emmergencynoti` (`userid`, `latitude`, `longitude`, `messege`, `phone`) VALUES
('ravikumar', '12.3203939', '76.60876139999999', 'i need ambulance service ', '8884644589'),
('ravikumar', '12.3170231', '76.61445429999999', 'i need ambulance servuce', '8884644589'),
('roja', '', '', '', ''),
('prashanth', '12.3106805', '76.62274289999999', 'NBM', '2132656556'),
('roja', '12.9715987', '77.5945627', 'met with accident need ambulance', '7892852401'),
('roja', '12.9715987', '77.5945627', 'met with accident need ambulance', '7892852401'),
('OTHER', 'https://www.youtube.com/embed/H0KDQ1LOSPw', 'Indian sign language good manners', '', ''),
('OTHER', 'https://www.youtube.com/embed/mYEaV0uKKb0', 'Indian sign language good manners', '', ''),
('OTHER', 'https://www.youtube.com/embed/mYEaV0uKKb0', 'Indian sign language good manners', '', ''),
('sagar', '12.3508111', '76.6123884', 'i need help', '1234567890'),
('sagar', '12.4059648', '75.743232', 'uyjuhjpik', '1234567890'),
('sagar', '12.3379161', '76.6213766', 'need help urjently', '1234567890'),
('sagar', '12.337965', '76.6213396', 'i need emergency Help', '123457890'),
('sagar', '12.295820', '76.595740', 'i need Emergency Help , Plz Help Me', '123457890');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eid` int(10) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `about` varchar(150) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eid`, `subject`, `about`, `date`) VALUES
(1, 'ppp', '', '2024-04-26'),
(2, 'asdas', 'asdas', '2024-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `username`, `email`, `password`, `trn_date`, `status`) VALUES
(1, 'madhusudan', 'madhusudan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2018-04-20 07:27:52', 0),
(3, 'shalini', 'shalini@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2018-04-21 13:13:07', 0),
(4, 'ramesh', 'ramesh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2018-04-21 13:13:59', 0),
(6, 'lokesh', 'lockesh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2018-04-23 18:24:52', 0),
(8, 'siddharth', 'siddharth93@gmail.com', '6562c5c1f33db6e05a082a88cddab5ea', '2018-04-24 08:04:19', 0),
(11, 'samruddhi', 'sam@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2018-04-24 08:16:29', 0),
(12, 'sandya', 'sandy@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2018-04-25 09:14:10', 0),
(13, 'nandish', 'nan@gmail.com', '910243c6517bfb01f11ba9bf7afe7647', '2018-05-09 06:55:56', 0),
(15, 'deviprasad', 'prasad@gmail.com', 'c246ad314ab52745b71bb00f4608c82a', '2018-05-09 07:04:21', 0),
(16, 'Lavanya', 'Lav@gmail.com', 'b738b8a6782bd4639fe6db46435bc91c', '2018-05-09 07:07:12', 0),
(17, 'Shradha', 'Shradha@gmail.com', '2ea3c6010c84a750f4fc93483c0c6abc', '2018-05-09 07:11:09', 0),
(18, 'Varsha Bhardwaj', 'Varsha@gmail.com', 'ff2f87e3b76f13788e41d6feae7c5dbb', '2018-05-09 07:14:48', 0),
(19, 'sachin', 'sachinsimha1997@gmail.com', '9787ea62b45fa1024bb40bd6866e3a5d', '2018-11-06 10:08:31', 0),
(20, 'praveen', 'praveen@gmail.com', 'de9e6a74cefc14848ce6db4c8c3092ca', '2018-11-06 13:24:34', 0),
(21, 'mahadeva', 'mahadeva@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-02-22 16:07:11', 0),
(22, 'kushal', 'kushal@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-11-20 12:54:33', 0),
(25, 'sagar', 'sagarsmarty84@gmail.com', '41ed44e3038dbeee7d2ffaa7f51d8a4b', '2023-12-04 08:47:01', 0),
(26, 'chethanhn', 'chethanchethu222@gmail.com', '38f4640e50c53bb07b61468df3891d1a', '2024-02-07 09:45:51', 0),
(27, 'faculty123', 'sagarsmarty56@gmail.com', 'f9f16d97c90d8c6f2cab37bb6d1f1992', '2024-02-26 11:56:11', 0),
(28, 'sachina', 'sachin@gmail.com', '202cb962ac59075b964b07152d234b70', '2024-04-20 14:00:13', 0),
(29, 'rohit', 'r@gmail.com', '202cb962ac59075b964b07152d234b70', '2024-04-20 23:10:29', 1),
(32, 'Raji', 'r@gmail.com', '202cb962ac59075b964b07152d234b70', '2024-04-24 12:12:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `facultyprofile`
--

CREATE TABLE `facultyprofile` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `phonenumber` varchar(13) NOT NULL,
  `facultyid` varchar(20) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `workexperience` varchar(20) NOT NULL,
  `specilisation` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `facultyprofile`
--

INSERT INTO `facultyprofile` (`id`, `firstname`, `lastname`, `branch`, `phonenumber`, `facultyid`, `address`, `workexperience`, `specilisation`, `email`, `password`) VALUES
(26, 'rohit', 'g', 'NULL', '7090225253', 'rohit', 'mysore', '1', 'SPEECH/HEARING', 'rohit@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fb_id` int(10) NOT NULL,
  `f_id` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `feedback` varchar(250) NOT NULL,
  `fdate` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fb_id`, `f_id`, `subject`, `feedback`, `fdate`) VALUES
(1, 'sachin', 'ALPHABETS', 'qww', '2024-04-20 22:52:06'),
(2, 'suresh', 'Python', 'good', '2024-04-21 13:30:48');

-- --------------------------------------------------------

--
-- Table structure for table `feereminder`
--

CREATE TABLE `feereminder` (
  `fid` int(10) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `sid` varchar(30) NOT NULL,
  `about` varchar(150) NOT NULL,
  `total_amount` varchar(30) NOT NULL,
  `first_installment_amount` varchar(50) NOT NULL,
  `first_installment_due_date` varchar(50) NOT NULL,
  `second_installment_amount` varchar(50) NOT NULL,
  `second_installment_due_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feereminder`
--

INSERT INTO `feereminder` (`fid`, `branch`, `semester`, `subject`, `sid`, `about`, `total_amount`, `first_installment_amount`, `first_installment_due_date`, `second_installment_amount`, `second_installment_due_date`) VALUES
(3, 'BA', '1st', 'fee reminder', 'sachin', 'fee reminder', '50000', '25000', '2024-05-31', '25000', '2024-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `m_id` int(10) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `s_id` varchar(50) NOT NULL,
  `f_id` varchar(30) NOT NULL,
  `marks` varchar(30) NOT NULL,
  `mdate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`m_id`, `branch`, `semester`, `subject`, `s_id`, `f_id`, `marks`, `mdate`) VALUES
(1, '0', '0', '0', '0', 'OTHER', '0', '2024'),
(2, '0', '0', '0', '0', 'asa', '0', '2024'),
(3, 'ALPHABETS', 'ALPHABETS', 'OTHER', 'sachin', 'dsd', 'SACHINA', '2024-04-20 20:59:34'),
(4, 'OTHER', 'ALPHABETS', 'ALPHABETS', 'ALPHABETS', 'asfa', 'SACHINA', '2024-04-20 21:00:35'),
(5, 'NUMBERS', 'ALPHABETS', 'ALPHABETS', 'sachin', 'SACHINA', '23', '2024-04-20 21:03:45'),
(6, 'BCA', '1st', 'Java', 'sachin', 'SACHINA', '75', '2024-04-21 11:30:13'),
(7, 'B.COM', '1st', 'Java', 'sachin', 'suresh', '87', '2024-04-21 13:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `n_id` int(10) NOT NULL,
  `f_id` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `note` varchar(500) NOT NULL,
  `ndate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`n_id`, `f_id`, `branch`, `semester`, `subject`, `note`, `ndate`) VALUES
(5, '', 'BA', '1st', 'C', 'uploads/pathashala project synopsis (16).docx', '2024-04-21 11:58:00'),
(6, '', 'BA', '1st', 'C++', 'uploads/pathashala project synopsis (16).docx', '2024-04-21 13:22:21'),
(7, '', 'BA', '1st', 'Java', 'uploads/pathasala (1).sql', '2024-04-22 17:43:17'),
(8, '', 'BCA', '1st', 'Java', 'uploads/MainActivityJava file.pdf', '2024-05-05 15:15:49');

-- --------------------------------------------------------

--
-- Table structure for table `qna`
--

CREATE TABLE `qna` (
  `q_id` int(10) NOT NULL,
  `s_id` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `question` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `f_id` varchar(50) NOT NULL,
  `qdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qna`
--

INSERT INTO `qna` (`q_id`, `s_id`, `branch`, `semester`, `subject`, `question`, `answer`, `f_id`, `qdate`) VALUES
(1, '0', '0', '0', '0', '0', '0', '0', '2024'),
(2, 'sachin', 'BCA', '1st', 'java', 'how r u?', 'good', 'rohit', '2024-04-20 22:43:45'),
(3, 'sachin', 'BCA', '2nd', 'Java', 'bjhddoua ', '', '', '2024-04-21 13:30:07');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `phonenumber` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`phonenumber`, `email`, `password`) VALUES
('9884644589', 'mpresh@gmail.com', '13456'),
('8884644589', 'mpsuresh@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(12, 'rohit', 'rohith@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2018-05-10 05:33:47'),
(21, 'sandy', 'sandy@gmail.com', '202cb962ac59075b964b07152d234b70', '2024-04-24 12:15:50'),
(23, 'sachin', 'sachin@gmail.com', '202cb962ac59075b964b07152d234b70', '2024-05-05 11:35:45');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `t_id` int(10) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `file` varchar(30) NOT NULL,
  `about` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`t_id`, `branch`, `semester`, `file`, `about`) VALUES
(1, 'BA', '1st', 'uploads/pathasala (1).sql', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `id` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `seccondname` varchar(50) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `studentid` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `bloodgroup` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`id`, `firstname`, `seccondname`, `phonenumber`, `studentid`, `branch`, `semester`, `address`, `gender`, `bloodgroup`, `password`) VALUES
(1, 'sachin', 'bv', '7090225253', 'sachin', 'MCA', '6th', 'myr', 'MALE', 'O', '123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `sid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `sid`, `password`, `trn_date`, `status`) VALUES
(74, 'rohit', 'sachin', '202cb962ac59075b964b07152d234b70', '2024-04-21 12:10:32', 0),
(75, 'suresh', 'rohit', '202cb962ac59075b964b07152d234b70', '2024-04-21 12:17:14', 0),
(76, 'sagar', 'suresh', '202cb962ac59075b964b07152d234b70', '2024-04-21 13:33:05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `v_id` int(10) NOT NULL,
  `f_id` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `video` varchar(100) NOT NULL,
  `vdate` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`v_id`, `f_id`, `branch`, `semester`, `subject`, `video`, `vdate`) VALUES
(3, 'ALPHABETS', 'NUMBERS', 'NUMBERS', 'c', 'uploads/OOPS.mp4', '2024-04-20 21:38:40'),
(4, 'sachin', 'ALPHABETS', 'ALPHABETS', 'java', 'uploads/pathashala project synopsis.docx', '2024-04-20 21:41:26'),
(5, 'sachin', 'ALPHABETS', 'ALPHABETS', 'python', 'uploads/pathashala project synopsis.docx', '2024-04-20 21:43:15'),
(6, 'suresh', 'BA', '1st', 'Java', 'uploads/OOPS.mp4', '2024-04-21 13:22:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `cls_cancellation`
--
ALTER TABLE `cls_cancellation`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `doctorprofile`
--
ALTER TABLE `doctorprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facultyprofile`
--
ALTER TABLE `facultyprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `feereminder`
--
ALTER TABLE `feereminder`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `qna`
--
ALTER TABLE `qna`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`,`phonenumber`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `cls_cancellation`
--
ALTER TABLE `cls_cancellation`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctorprofile`
--
ALTER TABLE `doctorprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `facultyprofile`
--
ALTER TABLE `facultyprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fb_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feereminder`
--
ALTER TABLE `feereminder`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `n_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `qna`
--
ALTER TABLE `qna`
  MODIFY `q_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `v_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
