 -- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2017 at 01:24 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookmark-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` char(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(1, 'test@test.com', '$2y$14$kefF6aqkuOEWo7CIFduNf.7O8BuGR4uWrIAFcHWm2u99OcLPDFWOe');

-- --------------------------------------------------------

--
-- Table structure for table `bookmark`
--

CREATE TABLE `bookmark` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` char(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `url` char(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `category_id` int(11) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bookmark`
--

INSERT INTO `bookmark` (`id`, `name`, `url`, `category_id`) VALUES
(1, 'hostinger', 'https://cpanel.hostinger.co.il', 2),
(2, 'jsfiddle', 'https://jsfiddle.net/', 10),
(3, 'alternativet', 'http://alternativeto.net/software/codecademy/', 1),
(53, 'dark-web', 'https://www.deepweb-sites.com/top-50-dark-web-onion-domains-pagerank/', 24),
(35, 'nasa', 'https://www.nasa.gov/', 18),
(7, 'Youtube2mp4', 'http://youtubeinmp4.com/', 1),
(8, 'codepen', 'http://codepen.io', 10),
(9, 'ocr', ' https://www.newocr.com/', 1),
(10, 'Web tools', 'https://www.browserling.com/tools/', 1),
(11, 'layoutit', 'http://www.layoutit.com/build', 10),
(12, 'color', 'https://www.w3schools.com/colors/colors_picker.asp', 10),
(13, 'bootstrap', 'https://www.bootply.com/new?visual=1#', 10),
(14, 'Web Crawler', 'https://www.youtube.com/watch?v=nOBKMwL_1gs&list=PLBOh8f9FoHHjdsAWwUjKk-QOlmBw-0Bvr', 11),
(15, 'Photo edit', 'https://pixlr.com/editor/', 1),
(16, 'Pandas', 'https://www.youtube.com/watch?v=6ohWS7J1hVA', 7),
(17, 'Intro Data Sc', 'https://www.youtube.com/watch?v=uy1_hccQDSI&index=2&list=PLAwxTw4SYaPk41og7PER4HBpGciPw6n3x', 19),
(19, 'ajax derek', ' https://www.youtube.com/watch?v=k-i7OS3AkMk&index=1&list=PLE0071B4091E8948D', 8),
(20, 'Jqueryui', 'http://jqueryui.com/development/', 8),
(21, 'botwiki', 'https://botwiki.org/bots/', 12),
(22, 'bootsnipp', 'https://bootsnipp.com/', 10),
(23, 'php classes', 'https://www.phpclasses.org/browse/', 11),
(25, 'Reddit', 'https://www.reddit.com/r/news/', 14),
(26, ' Scrape Data', 'https://www.youtube.com/watch?v=hjRCdaG1WYY', 19),
(50, 'webtoolhub', 'http://www.webtoolhub.com/', 17),
(29, 'Nakdan', 'http://www.nakdan.com/Nakdan.aspx', 6),
(30, ' athenaeum', 'http://www.the-athenaeum.org/', 3),
(54, 'wordpress', 'https://www.youtube.com/watch?v=y1tpusD9UwA', 0),
(55, 'wordpree', 'https://www.youtube.com/watch?v=kwmvGpcJux0', 0),
(57, 'colourlovers', 'http://www.colourlovers.com/', 10),
(58, ' myownfreehost', 'http://myownfreehost.net/signup.php', 2),
(68, 'kali', 'https://www.youtube.com/playlist?list=PLkpY6D9q0Zg5RXT0UKLxSI9af1TFpbrco', 0),
(70, 'blog-simple', 'http://www.killersites.com/community/index.php?/topic/1969-basic-php-system-vieweditdeleteadd-records/', 11),
(62, ' Caliber-Training', 'https://www.youtube.com/channel/UCqYxQkhL0qKkR0bQAR14IIw', 17),
(63, 'TORCH Search Engine', 'http://xmh57jrzrnw6insl.onion/', 24),
(64, 'exploit-db', 'https://www.exploit-db.com/', 24);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(0, 'temp'),
(1, 'tools'),
(2, 'hosts'),
(3, 'painting'),
(4, 'music'),
(5, 'photo'),
(6, 'literature'),
(7, 'python'),
(8, 'javascript'),
(9, 'java'),
(10, 'html'),
(11, 'php'),
(12, 'blog'),
(13, 'history'),
(14, 'news'),
(15, 'youtube'),
(16, 'jewish'),
(25, 'security'),
(18, 'science'),
(19, 'Data Science'),
(20, 'linux'),
(21, 'Coursera'),
(22, 'Software'),
(23, 'math'),
(24, 'drk');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `body` longtext NOT NULL,
  `createdDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `createdDate`) VALUES
(1, ' המושג שדה', '	\r\n		 	 \r\n  המושג שדה.\r\n  וכפל בעלות תשע התכונות הבאות המתקיימות עבור כל בחירה של איברים מהקבוצה a,b,c:\r\n\r\n  \r\nא) החיבור הוא קומוטטבי  a+b = b+a :   (חוק החילוף)\r\n  :+ c  (a + (b + c) = (a + b  (חוק הקיבוץ)\r\n 0 + a = a, 0 הוא המספר היחיד בעל תכונה זו ( 0 איבר אדיש (נטרלי) ביחס לחיבור).\r\n  a  יש איבר יחיד  a -  , כך ש-  a + (-a) = 0 ( הפעולה b + (-a) , כלומר b - a היא  פעולת החיסור).\r\n\r\n\r\nה) הכפל הוא קומוטטבי:  a b = b a.\r\n\r\n \r\n\r\nו) הכפל הוא אסוציאטיבי : c  (a  (b  c) = (a  b .\r\n\r\n \r\n\r\nז) a*1= a ו- 1 הוא האיבר היחיד שמקיים זאת.  ( 1 איבר אדיש (נטרלי) ביחס לכפל).\r\n\r\n \r\n\r\nח) לכל  a  ששונה מ-0 יש איבר יחיד a-1 , כך ש- a*a-1 = 1  (איבר הופכי)\r\n\r\n \r\n\r\nט) מתקיים חוק הפילוג: (a + b) c = a*c + b*c  (דסטריבוטיביות)\r\n\r\n \r\n\r\n \r\n\r\n \r\n\r\n \r\n\r\nדוגמאות\r\n\r\n \r\n\r\nא) שדה המרוכבים  C,  שדה הממשי R, ושדה הרציונלי Q.\r\n\r\n \r\n\r\nב) הקבוצה Z אינה שדה כי רק ל- 1 ול- 1-  יש איבר הופכי.\r\n\r\n \r\n\r\nג) קבוצת המספרים הזוגיים   היא לא שדה. (בדקו!)\r\n\r\n \r\n\r\nד) נתונה קבוצת המטריצות    נוכיח ש- F שדה.\r\n\r\n \r\n\r\nצריך להוכיח את כל תשע התכונות של שדה.\r\n\r\n \r\n\r\nנוכיח ש-F סגורה לגבי חיבור וכפל, כלומר סכום ומכפלה של שתי מטריצות מ-F הן מטריצות ב-F.\r\n\r\n \r\n\r\nתהיינה  \r\n\r\n \r\n\r\nאזי \r\n\r\n \r\n\r\n \r\n\r\nחיבור וכפל של מטריצות מ-F מקיימים את התכונות א''-ז'' ו-ט''. נבדוק את תכונה ח''.\r\n\r\nמספיק להראות שכל מטריצה A השונה מ- 0 הפיכה ב-F , ואמנם אם A   שונה מ-0 הדטרמיננט   A = a2 - 2b2 שונה מ- 0 לכל  a ,b  רציונאליים, לכן היא הפיכה.\r\n\r\nכל התכונות מתקיימות ולכן F שדה.\r\n\r\n \r\n\r\n עכשיו נוכל להסביר את המושג מרחבים וקטורים!	   ', '2017-06-26 11:41:57'),
(3, ' כָּל כָּךְ קְרוֹבִים הָיוּ אֶל הַמַּטָּרָה', ' וְאוּלָם אַף עַל פִּי שֶׁמַּחְשָׁבָה זוֹ וַדָּאִי עָלְתָה עַל דַּעַת כֻּלָּם, לֹא המעיטה אֶת אֹמֶץ רוּחוֹ שֶׁל כָּל אֶחָד וְאַחֵד מֵהֶם. כָּל כָּךְ קְרוֹבִים הָיוּ אֶל הַמַּטָּרָה, וְהִנֵּה נִתְקְלוּ בַּמַּעֲצוֹר! וּמָה גָּדוֹל הוּא הַמַּעֲצוֹר! גְּדוּד שֶׁל דְּרוֹמִיִּים, וְאוּלַי מִבָּנַי סיעתו שֶׁל טקסר, שֶׁהָלְכוּ לְהִתְחַבֵּר אֶל ההישפני באורגלדיס, כְּדֵי לְהַמְתִּין שָׂם עַד שתגיעה הַשָּׁעָה, שֶׁיּוּכְלוּ לְהוֹפִיעַ שׁוּב בפלורידה הַצְּפוֹנִית! אָמְנָם כֵּן, מִפְּנֵי דָּבָר זֶה וַדָּאִי הָיָה לָהֶם להתירא, הַכֹּל הֻכְּרוּ זֹאת יָפֶה וּלְפִיכָךְ לְאַחֵר הַהִתְלַהֲבוּת הָרִאשׁוֹנָה דָּמְמוּ וְהִשְׁתַּקְּעוּ בַּמַּחְשָׁבוֹת וְהִבִּיטוּ אֶל מַנְהִיגָם הַצָּעִיר, כָּאֵלּוּ שָׁאֲלוּ אֶת נַפְשָׁם, מָה צַו שֶׁיִּתֵּן לָהֶם. אַף ג''ילברט נִשְׁתַּעְבֵּד לָרֹשֶׁם, שֶׁתָּקַף אוֹתָהּ שָׁעָה עַל כֻּלָּם. וְאַף עַל פִּי כֵן הִתְאוֹשֵׁשׁ מִיָּד, וְהַגָּבִיעַ אֶת רֹאשׁוֹ וְאָמַר: ” קְדִימָה ', '0000-00-00 00:00:00');

 
 
 
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
