-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2019 at 10:34 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_match`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_members`
--

CREATE TABLE `tbl_members` (
  `member_id` int(11) NOT NULL,
  `member_full_name` varchar(255) NOT NULL,
  `member_email` varchar(50) NOT NULL,
  `member_pass` varchar(50) NOT NULL,
  `member_confirm_pass` varchar(50) NOT NULL,
  `member_phone` varchar(14) NOT NULL,
  `member_present_address` varchar(100) NOT NULL,
  `member_parmanent_address` varchar(100) NOT NULL,
  `member_division` text NOT NULL,
  `member_age` varchar(50) NOT NULL,
  `member_gender` text NOT NULL,
  `member_edu_qualification` varchar(50) NOT NULL,
  `member_profession` varchar(50) NOT NULL,
  `member_image` varchar(100) NOT NULL,
  `member_height` varchar(70) NOT NULL,
  `member_weight` varchar(150) NOT NULL,
  `member_marital_status` varchar(150) NOT NULL,
  `member_birth` varchar(150) NOT NULL,
  `member_smoke` varchar(150) NOT NULL,
  `member_diet` varchar(150) NOT NULL,
  `memeber_familytype` varchar(150) NOT NULL,
  `member_father_name` varchar(150) NOT NULL,
  `member_father_occupation` varchar(150) NOT NULL,
  `member_mother_name` varchar(150) NOT NULL,
  `member_mother_occupation` varchar(150) NOT NULL,
  `memeber_sibling_details` text NOT NULL,
  `memeber_living_with_parents` varchar(150) NOT NULL,
  `memeber_living` varchar(150) NOT NULL,
  `ssc_pass_year` int(150) NOT NULL,
  `ssc_cgpa` varchar(150) NOT NULL,
  `hsc_pass_year` int(150) NOT NULL,
  `hsc_cgpa` varchar(150) NOT NULL,
  `ug_subject` varchar(150) NOT NULL,
  `ug_cgpa` varchar(150) NOT NULL,
  `ug_pass_year` varchar(150) NOT NULL,
  `higher_education` varchar(150) NOT NULL,
  `occupation` varchar(150) NOT NULL,
  `working_industry` varchar(150) NOT NULL,
  `monthly_income` varchar(150) NOT NULL,
  `office_address` varchar(150) NOT NULL,
  `write_yourself` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_members`
--

INSERT INTO `tbl_members` (`member_id`, `member_full_name`, `member_email`, `member_pass`, `member_confirm_pass`, `member_phone`, `member_present_address`, `member_parmanent_address`, `member_division`, `member_age`, `member_gender`, `member_edu_qualification`, `member_profession`, `member_image`, `member_height`, `member_weight`, `member_marital_status`, `member_birth`, `member_smoke`, `member_diet`, `memeber_familytype`, `member_father_name`, `member_father_occupation`, `member_mother_name`, `member_mother_occupation`, `memeber_sibling_details`, `memeber_living_with_parents`, `memeber_living`, `ssc_pass_year`, `ssc_cgpa`, `hsc_pass_year`, `hsc_cgpa`, `ug_subject`, `ug_cgpa`, `ug_pass_year`, `higher_education`, `occupation`, `working_industry`, `monthly_income`, `office_address`, `write_yourself`) VALUES
(1, 'rohima', 'rohima@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', '0154554', 'fsgg', 'gg', 'Sylhet', '25', 'Female', 'ggr', 'gsw', 'public/member_img/20273202935caf8402d14a7.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', ''),
(2, 'sdfsdf', 'admin@admin.com', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', '25454545', 'sfsd', 'sgsg', 'Dhaka', '24', 'Male', 'BSC', 'Developer', 'public/member_img/8875901245caf9878bac94.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', ''),
(3, 'sfs', 'admin@bladephp.co', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', '5432453453', 'fsg', 'sgsgs', ' 	Sylhet', '26', 'Male', 'dfff', 'sdsd', 'public/member_img/noimage.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', ''),
(4, 'dsf', 'admin@hotel.com', '7a674153c63cff1ad7f0e261c369ab2c', '7a674153c63cff1ad7f0e261c369ab2c', '54445', 'dffs', 'sfsf', 'Chittagong', '28', 'Male', 'sdsds', 's', 'public/member_img/noimage.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_members`
--
ALTER TABLE `tbl_members`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_members`
--
ALTER TABLE `tbl_members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
