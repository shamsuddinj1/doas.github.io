-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 05:32 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tinzer`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `username`, `email`, `contact`, `category_id`, `doctor_id`, `date`) VALUES
(1, 'farrukh', 'farrukh@gmail.com', '66987686', 1, 4, '11/17/2021'),
(2, 'shaista', 'alishaista368@gmail.com', '12345', 1, 1, '12/27/2021'),
(3, 'shaista', 'alishaista368@gmail.com', '12345', 4, 1, '12/27/2021'),
(7, 'shaista', 'alishaista368@gmail.com', '12345', 1, 2, '12/14/2021');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Cardiologists'),
(2, 'Dermatologists'),
(3, 'Typhoid'),
(4, 'Fever'),
(5, 'Allergists'),
(6, 'Medicine'),
(7, 'Malaria'),
(8, 'testing'),
(9, 'testing'),
(11, 'Tuber Closis (TB)');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `msg_subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone_number`, `msg_subject`, `message`) VALUES
(1, 'farrukh', 'farrukh@gmail.com', '823783456', 'hkjshfakhjvh', 'jkhfaskdhfakdhdakj'),
(2, 'ali', 'alishaista368@gmail.com', '12345', 'fever', 'djhfdhvfibhlg'),
(9, 'shaista', 'alishaista368@gmail.com', '12345', 'fever', 'nc,dnv,fnbf'),
(10, 'isra', 'isra@gmail.com', '123456', 'fever', 'fjgkguk.yzg dxf bhd ht');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `image`, `category_id`) VALUES
(1, 'Dr. Iqra', 'image8.jpg', 9),
(2, 'Dr. Shahzad', 'image2.jpg', 2),
(3, 'Dr. Zeeshan', 'image3.jpg', 3),
(4, 'Dr. Sara', 'image4.jpg', 4),
(5, 'Dr.Aisha', 'image7.jpg', 5),
(6, 'Dr.Shaista', 'image5.jpg', 6),
(10, 'Dr.Summera', 'image9.jpg', 11);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `image`, `description`) VALUES
(1, 'image Reducing Hospitalization-Related Stress: Improving Patient Satisfaction and Outcomes', 'image1.jpg', 'The Objective of this was to determine stress level during hospitalization in patients with Chronic Obstructive Pulmonary Disease (COPD). We relate stress to previous level of quality of life and patients Social Support.\r\n\r\nCOPD patients stress levels are lower then expected independently expected from the severity or number of previous hospitalizations.\r\n\r\nLinear regression analysis shows the predictive value of Quality of \r\nLife and Social Support on stress level during hospitalization.\r\n\r\nHRQQL and social support can be associated with the stress during hospitalization. '),
(2, 'testing ', 'image6.jpg', 'As the COVID-19 pandemic progresses, patients that have recovered from COVID-19-related hospitalization require resumption of care for other medical issues. Thus far, the literature has not detailed the experience of stress testing in this patient population.\r\n\r\n Over time,more patients that recover from COVID-19 infection will require MPI testing for Myocardial Ischemia Evaluation.\r\n\r\nOur study provides some information regarding performing stress testing in patients who have recently recovered from COVID-19 infections requiring hospitalization.');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `password`) VALUES
(1, 'farrukh', 'farrukh@gmail.com', '123'),
(6, 'admin', 'admin@admin.com', 'admin'),
(25, 'shaista', 'alishaista368@gmail.com', '456'),
(28, 'aisha', 'aisha@gmail.com', '678'),
(29, 'shayan', 'shayan@gmail.com', '12345'),
(30, 'shaista', 'alishaista368@gmail.com', '123'),
(31, 'ali', 'ali@gmail.com', '1234'),
(32, 'Atta', 'atta@gmail.com', '12345'),
(33, 'amarmotiani', 'amarmotiani@gmail.com', '12345678'),
(34, 'amarmotiani', 'amarmotiani@gmail.com', '12345678'),
(35, 'amarmotiani', 'amarmotiani@gmail.com', '12345678'),
(36, 'Mudasir', 'shaikh786@gmail.com', '12346789'),
(37, '', '', ''),
(38, 'isra', 'isra@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`) VALUES
(1, 'COVID-19 Consulting', 'Added to the fear of contracting the virus in a pandemic such as COVID-19 are the significant changes to our daily lives as our movements are restricted in support of efforts to contain and slow down the spread of the virus. '),
(2, 'Cardiologist', 'A Cardiologist is a doctor with special training and skill in finding,treating and preventing diseases of the heart and blood vessels.'),
(3, 'Dermatology', 'Dermatology is the branch of medicine dealing with the skin. It is specially with both medical and surgical aspects. A Dermatologist is a specialist medical doctor who manages diseases related to skin,hair,nails,and some cosmetic problems.'),
(4, 'Tuberculosis (TB)', 'Tuberculosis (TB) is caused by a bacterium called Mycobacterium tuberculosis.The bacteria usually attack the lungs,but TB bacteria can attack any part of the body such as the kidney,spine and brain.Not everyone infected with TB bacteria becomes sick. '),
(5, 'Malaria', 'Malaria is a serious sometimes fatal disease caused by a parasite that commonly infects a certain type of mosquito which feeds on humans.People who get malaria are typically very sick with high fevers,shaking chills,and flu-like illness.'),
(6, 'Fever', 'A Fever is a temporary increase in your body temperature,often due to an illness.Having a fever is a sign that something out of the ordinary is going on in your body.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
