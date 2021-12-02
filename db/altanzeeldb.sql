-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 01:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `altanzeeldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `post_name` varchar(100) NOT NULL,
  `post_category` varchar(222) NOT NULL,
  `post_image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_name`, `post_category`, `post_image`) VALUES
(1, '12 Rabius Sani', 'Daily Post', 0x706f7374312e6a7067),
(2, '12 Rabius Sani', 'Daily Post', 0x706f7374322e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `Questioner_name` varchar(100) NOT NULL,
  `Questioner_email` varchar(100) NOT NULL,
  `Questioner_whatappno` bigint(20) NOT NULL,
  `Questioner_address` varchar(200) NOT NULL,
  `Questioner_city` varchar(50) NOT NULL,
  `Questioner_country` varchar(50) NOT NULL,
  `Questions` varchar(1000) NOT NULL,
  `categories` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `Questioner_name`, `Questioner_email`, `Questioner_whatappno`, `Questioner_address`, `Questioner_city`, `Questioner_country`, `Questions`, `categories`) VALUES
(1, 'Zarak khan', 'zarak.khan@dropboxdigital.com', 3003645822, '31 street', 'DHA', 'Pakistan', 'اگر آپ ایک دفعہ سوال بھیج چکے/چکی ہیں اور آپ کو اب تک جواب موصول نہیں ہوا تو فکر مند نہ ہوں، دوبارہ سوال بھیجنے کی ضرورت نہیں ہے۔\r\n\r\n', 'ایمانیات'),
(2, 'Faraz Ahemd', 'faraz@dropbox.com', 20200000, 'FB Area', 'Karachi', 'Pakistan', ' ویب سائٹ پر ہر سوال کے نیچے اسے پرنٹ کرنے کی سہولت مہیا کر دی گئی ہے، جہاں سے آپ کسی بھی سوال کا مطبوعہ نسخہ حاصل کر سکتے ہیں', 'عقائد'),
(3, 'زاکر', 'zakir@gmail.com', 3003645822, 'DHA Phase 5', 'DHA', 'Pakistan', 'السلام علیکم! مسواک کی لمبائی کے بارے شریعت نے کیا حد مقرر کی ہے؟', 'عبادات'),
(4, 'Rizwan Shakeel', 'rizwan@gmail.com', 3003645822, '12 street Korangi 2/1 No', 'Korangi', 'Pakistan', 'کیا تیمم کے لئے برف پر مسح کیا جا سکتا ہے؟', 'عبادات'),
(5, 'Rizwan Shakeel', 'rizwan@gmail.com', 3003645822, '12 street Korangi 2/1 No', 'Korangi', 'Pakistan', 'کیا تیمم کے لئے برف پر مسح کیا جا سکتا ہے؟', ''),
(6, 'Azeem Rizzvi', 'azeem@gmail.com', 20200000, '2/1 No Korangi', 'Karachi', 'Pakistan', 'کیا عورت حالت حیض میں مہندی لگا سکتی ہے', 'عقائد'),
(7, 'Jhanzaib Ahmed', 'jhanzaib@gmail.com', 1, 'P&T Society Korangi', 'Karachi', 'Pakistan', 'میرا سوال یہ ہے کہ عورت کو حالت حیض میں د م کروایا جا سکتا ہے؟', 'عقائد'),
(8, 'Zohaib khan', 'zohaib@hotmail.com', 330000000, 'Naya Nazimabad ', 'Karachi', 'Pakistan', 'السلام علیکم! کیا خواتین مسواک کر سکتی ہیں؟', 'ایمانیات'),
(9, 'Bilal', 'bilal123@gmail.com', 300345457, 'Kemari', 'Karachi', 'Pakistan', 'کیا ذلت بھی اللہ تعالیٰ‌ کی طرف سے ہوتی ہے؟', 'ایمانیات');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
