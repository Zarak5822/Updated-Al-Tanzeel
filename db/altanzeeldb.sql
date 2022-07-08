-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 05:48 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

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
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `answers` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `answers`) VALUES
(5, 'پانی سے وضو کرنا حقیقی طہارت ہے اور مٹی سے تیمم کرنے کو حکمی طہارت کہتے ہیں۔\r\n\r\nتیمم دو صورتوں میں کرنا جائز ہے :\r\n\r\nایسے مریض کے لیے جو پانی استعمال کرے تو اس کا مرض بڑھنے کا یا فالج وغیرہ کا خطرہ ہو۔\r\nایسے شخص کے لئے جسے ایک میل کے فاصلے تک کہیں بھی پانی دستیاب نہ ہو۔\r\nآپ حتی الامکان کوشش کریں کہ وضو کے لئے پانی ساتھ لے جائیں۔ اگر ایسا ممکن نہ ہو یا شدید سردی کی وجہ سے پانی کے برف بن جانے کا مسئلہ درپیش ہو تو فقہاء کا کہنا ہے کہ ایسے علاقے میں جاتے وقت لکڑی، لوہے یا کسی اور چیز کا تختہ ساتھ لے جائیں اور اس کے اوپر مٹی کا پلستر کر لیں۔ اس تختے کے اوپر تیمم کیا جا سکتا ہے۔\r\n\r\nجو چیزیں زمین کی جنس سے نہیں ان پر براہ راست تیمم جائز نہیں، اس لئے ان پر گرد و غبار ہونے یا مٹی کا پلستر کئے ہونے کی صورت میں ان پر تیمم کرنا جائز ہوتا ہے۔\r\n\r\nواللہ و رسولہ اعلم بالصواب۔'),
(8, 'خواتین مسواک کر سکتی ہیں۔ شرعاً خواتین پر ایسی کوئی پابندی نہیں ہے۔\r\n\r\nواللہ و رسولہ اعلم بالصواب۔');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

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
(9, 'Bilal', 'bilal123@gmail.com', 300345457, 'Kemari', 'Karachi', 'Pakistan', 'کیا ذلت بھی اللہ تعالیٰ‌ کی طرف سے ہوتی ہے؟', 'ایمانیات'),
(10, 'Chao', 'chao@gmail.com', 923003645822, '1a Gordon street', 'Sydney', 'Australia', 'اپنا ای میل درج کری', 'تصوف');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
