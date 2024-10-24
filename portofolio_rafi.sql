-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 24, 2024 at 03:28 AM
-- Server version: 9.0.1
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio_rafi`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone_number`, `message`) VALUES
(1, 'Paloma Mcleod', 'qakenecu@mailinator.com', '+1 (322) 906-4493', 'Alias nisi laboris i'),
(3, 'Karyn Ford', 'reqoqe@mailinator.com', '+1 (456) 622-9104', 'Neque illo id tempor'),
(4, 'Naomi Craig', 'zaciw@mailinator.com', '+1 (892) 522-4098', 'Quis repudiandae ex '),
(5, 'Jolene Ramsey', 'gypydugi@mailinator.com', '+1 (254) 722-9249', 'Dolores ullam nisi q'),
(6, 'Shelly Payne', 'wanipuke@mailinator.com', '+1 (461) 978-6703', 'Vitae aut vero paria'),
(7, 'Iola Mckay', 'qeduge@mailinator.com', '+1 (447) 685-5652', 'Sapiente porro aut d'),
(8, 'Wanda Mcknight', 'zezenelid@mailinator.com', '+1 (648) 438-4276', 'Velit qui commodi ut');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int NOT NULL,
  `type` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `type`, `value`) VALUES
(1, 'Email', 'rafiirfan@example.com'),
(2, 'Alamat', 'Villa Bintaro Indah'),
(3, 'No. Telp', '08121038715');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int NOT NULL,
  `date` varchar(100) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `date`, `institution`, `location`, `jurusan`, `description`) VALUES
(1, '2023 - Now', 'Universitas Pembangunan Jaya', 'Tangerang Selatan - ID', 'Informatics', 'I am currently pursuing a degree in Informatics at Universitas Pembangunan Jaya, where I began my studies in 2023. My goal is to graduate with a high GPA, reflecting both my academic dedication and passion for the field. I am committed to excelling in my coursework and gaining the skills necessary to succeed in the ever-evolving tech industry.'),
(2, '2020 - 2023', 'SMK Bina Informatika', 'Tangerang Selatan - ID', 'Software Engineering', 'I completed my high school education at SMK Bina Informatika, majoring in Software Engineering. I was part of the 2020 cohort and graduated in 2023 with excellent academic results. During my time there, I developed a strong foundation in software development, which has been essential to my continued growth and success in the field of web development.'),
(3, '2017 - 2020', 'MTS Soebono Mantofani', 'Tangerang Selatan - ID', NULL, 'I attended MTS Soebono Mantofani for my junior high school education. I enrolled in 2020 and successfully graduated in 2023. My time there provided me with a solid educational foundation, which has contributed to my personal and academic development, preparing me for the challenges of higher education and beyond.'),
(4, '2011 - 2017', 'MI Soebono Mantofani', 'Tangerang Selatan - ID', NULL, 'I completed my elementary education at MI Soebono Mantofani, where I enrolled in 2020 and graduated in 2023. My time there helped shape the foundational skills and values that continue to guide me in my academic and personal growth.');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int NOT NULL,
  `date` varchar(100) NOT NULL,
  `position` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `date`, `position`, `company`, `location`, `description`) VALUES
(1, 'Sep - Des 2023', 'Web Developer - Internship', 'PT Enam Dua Teknologi', 'Jakarta Selatan, ID', 'I successfully completed my internship as a Web Developer at PT Enam Dua Teknologi, where I was assigned to work in a team with my peers. I took on the role of team leader, guiding my group through the entire project until completion. This experience not only strengthened my technical skills but also honed my leadership and collaboration abilities.'),
(2, 'Feb - Jun 2024', 'Full Stack Web Developer - Freelance', 'PT Atlantis Services Indonesia', 'Jakarta Selatan, ID', 'I successfully developed a sales website for PT Atlantis Services Indonesia. I handled the entire project independently, managing every aspect from start to finish, ensuring a seamless end-to-end process that met the client\'s satisfaction. This project allowed me to demonstrate my ability to deliver high-quality solutions while adhering to client requirements and deadlines.');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int NOT NULL,
  `lead` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `lead`, `description`, `img_url`) VALUES
(1, 'I can help your business to', 'Get online and grow FAST with <strong>WEBSITES</strong>', 'assets/profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `name`) VALUES
(1, 'JavaScript'),
(2, 'Python'),
(3, 'React'),
(4, 'Django'),
(5, 'Quart.py'),
(6, 'Laravel');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `id` int NOT NULL,
  `type` varchar(100) NOT NULL,
  `value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id`, `type`, `value`) VALUES
(1, 'Name', 'Muhammad Rafi Irfan'),
(2, 'Age', '19 Years Old'),
(3, 'Degree', 'S1 Informatics'),
(4, 'Hobbies', 'Coding, Content Creation, Playing Strategy Games'),
(5, 'Job Status', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `project_url` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `project_url`, `img_url`) VALUES
(1, 'Web Penjualan PT Atlantis Services Indonesia', 'I successfully developed a sales website for PT Atlantis Services Indonesia. I handled the entire project independently, managing every aspect from start to finish, ensuring a seamless end-to-end process that met the client’s satisfaction. This project allowed me to demonstrate my ability to deliver high-quality solutions while adhering to client requirements and deadlines.', 'https://github.com/Xifted/website-penjualan-atsi', 'assets/projects/atsi.png');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`) VALUES
(1, 'UI/UX Designing'),
(2, 'Database Designer'),
(3, 'Frontend Development'),
(4, 'Backend Development');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
