-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 01, 2016 at 09:05 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `udemy_az`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `lec_count` (IN `c_id` INT)  NO SQL
SELECT count(lec.id) as lec_count FROM `courses` cor 
INNER JOIN sections s on cor.id = s.course_id
INNER JOIN	lectures lec on s.id = lec.section_id

where cor.id = c_id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lec_duration` (IN `lec_id` INT)  NO SQL
SELECT sum(lec.duration) as lec_duration FROM `courses` cor INNER JOIN sections s on cor.id = s.course_id INNER JOIN lectures lec on s.id = lec.section_id where cor.id = lec_id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sara Esgerova', 'sara.a@code.edu.az', '$2y$10$pFOyoQqxqDMnL9rhY333Y.JNsSAshrjtrpNCGMbPI4rOegX0eMNnO', NULL, '2016-09-30 13:12:49', '2016-09-30 13:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `icon`) VALUES
(1, 'Proqramlaşdırma', 'proqramlasdirma', 'ud_development'),
(2, 'IT ve Proqram təminati', 'it-ve-proqram-teminati', 'ud_it-and-software'),
(3, 'Dizayn', 'dizayn', 'ud_design'),
(4, 'Şirkət Məhsulları', 'sirket-mehsullari', 'ud_office-productivity'),
(6, 'Fotoqrafçılıq', 'fotoqrafciliq', 'ud_photography');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `headline` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `subcategory_id` int(10) UNSIGNED NOT NULL,
  `level_id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `headline`, `description`, `slug`, `image`, `status`, `teacher_id`, `subcategory_id`, `level_id`, `language_id`, `created_at`, `updated_at`) VALUES
(1, 'Complete PHP MVC tutorial. Create your own PHP MVC framework', 'Create your own PHP MVC framework and CMS step by step. Learn in which way popular PHP frameworks work.', '<h3>Course Description</h3>\r\n\r\n<p><strong>Learn MVC by creating your own PHP framework step by step!</strong></p>\r\n\r\n<p>MVC pattern, which stands for Model View Controller, is a widely &ndash; used programming technology and the most popular technique in web applications development.</p>\r\n\r\n<p>The most popular frameworks such as Laravel, Symphony, Yii, Zend are based on MVC pattern. So, it undoubtedly worth learning.</p>\r\n\r\n<p><strong>The best way of learning it is creating your own MVC framework and CMS.</strong></p>\r\n\r\n<p>Step by step we`ll be creating MVC web application. Further the result of application developing during this course may be put into practice.</p>\r\n\r\n<p>As a consequence, we will create a light-weight framework and CMS which may be used in your project. It would contain pages view and editing, contact form, admin section and authorization.</p>\r\n\r\n<p>During this course you will learn the best practices in PHP OOP, sessions and MySQL interaction.</p>\r\n\r\n<p>If you always wanted to know how modern web applications and frameworks work, this course is definitely for you!</p>\r\n\r\n<p>Basic knowledge of PHP OOP is all that you need.</p>\r\n\r\n<p>Feel free to ask about free web hosting for this course learning. You can obtain domain, ftp and mysql accounts absolutely free in order to work with this course.</p>\r\n\r\n<p>On completing this course you will be a PHP-Academy certified developer.</p>\r\n\r\n<h3>What are the requirements?</h3>\r\n\r\n<ul>\r\n	<li>You should already be familiar with PHP basics</li>\r\n	<li>You should have web server and MySQL installed on your system or hosting. I you haven&#39;t - ask us for free hosting for this course students</li>\r\n	<li>You should have IDE installed. We recommend PHP Storm but Notepad++ is also affordable</li>\r\n</ul>\r\n\r\n<h3>What am I going to get from this course?</h3>\r\n\r\n<ul>\r\n	<li>Knowing about how MVC framework works</li>\r\n	<li>You will create your own MVC framework</li>\r\n	<li>You will also create a simple CMS based on that framework</li>\r\n	<li>After completing this course it would be easier to you to learn popular MVC frameworks such as Laravel, Symfony, Yii, Zend etc</li>\r\n</ul>\r\n\r\n<h3>What is the target audience?</h3>\r\n\r\n<ul>\r\n	<li>This course is created for those who are familiar with PHP basics and would like to learn how modern web projects work</li>\r\n</ul>\r\n', 'complete-php-mvc-tutorial-create-your-own-php-mvc-framework', '20160930193152-3.jpg', 1, 1, 1, 1, 4, '2016-09-30 11:31:52', '2016-09-30 11:31:52'),
(2, 'Yeni başlayanlar üçün HTML5 Dərsləri', 'Təməl HTML dərslərinin öyrənilməsi', '', 'html5-dersleri', '20160930201806-2.jpg', 1, 2, 1, 2, 2, '2016-09-30 16:18:06', '2016-09-30 16:18:06'),
(3, 'Web Tasarım ve Programlama', 'Bir web sitesi yapımına sıfırdan başlamak isteyenler için - Uygulamalı HTML dersini uzmanından öğrenin.', '<p>Web sitelerinin temelini HTML oluşturur. T&uuml;m web sitelerinin (microsoft.com, facebook.com, vb.) aray&uuml;z&uuml; hep HTML ile oluşturulmuştur.&nbsp;</p>\r\n\r\n<p>HTML &nbsp;kursumuzda daha &ccedil;ok HTML in temel yapısını oluşturan etiketler &uuml;zerinde duracağız. Fazla detaylara girilmeden, &ouml;rnekler ile kolay ve pratik olarak HTML i hep beraber &ouml;ğreneceğiz.</p>\r\n\r\n<p>Bu kursun ana amacı kendi web sitelerinizi oluşturacak altyapıyı sizlere sunmaktır.&nbsp;</p>\r\n\r\n<p>Bu kursu bitirdikten sonra;</p>\r\n\r\n<ul>\r\n	<li>HTML etiketlerini tanıyor olacaksınız.</li>\r\n	<li>Bir web sayfasının nasıl oluşturulduğunu &ouml;ğrenmiş olacaksınız.</li>\r\n	<li>Statik ve dinamik web sayfaları arasındaki farkı anlamış olacaksınız.</li>\r\n</ul>\r\n\r\n<p>HTML kursu, HTML Temel ve HTML + CSS şeklinde iki seri halinde olacaktır. Bu kursumuz daha &ccedil;ok teorik ağırlıklı ve sadece HTML etiketleri &uuml;zerine olmasına rağmen, diğer kursumuz ise HTML + CSS etiketleri &uuml;zerine detaylı ve uygulama ağırlıklı olacaktır. &nbsp;Bu iki kursu bitirdikten sonra profesyonel web sitelerinin nasıl tasarlandığını &ouml;ğrenmiş olacaksınız ve kendi web sitenizi tasarlamaya başlayabileceksiniz.</p>\r\n\r\n<h3>Əsas tələblər nədir?</h3>\r\n\r\n<ul>\r\n	<li>Windows PC</li>\r\n	<li>Text Editor (Sublime)</li>\r\n	<li>Tarayıcı (Chrome, Firefox, IE vs.)</li>\r\n</ul>\r\n\r\n<h3>Bu kursdan nə &ouml;yrənəcəm?</h3>\r\n\r\n<ul>\r\n	<li>HTML etiketlerini tanıyor olacaksınız.</li>\r\n	<li>Bir web sayfasının nasıl oluşturulduğunu &ouml;ğrenmiş olacaksınız.</li>\r\n	<li>Statik ve dinamik web sayfaları arasındaki farkı anlamış olacaksınız.</li>\r\n	<li>Kendi web sayfalarınızı oluşturabileceksiniz.</li>\r\n</ul>\r\n\r\n<h3>Kimlər &uuml;&ccedil;&uuml;nd&uuml;r?</h3>\r\n\r\n<ul>\r\n	<li>Kendi web sitesini oluşturmak isteyenler i&ccedil;in</li>\r\n	<li>Wordpress, Vbulletin, Joomla gibi web sitelerinin tasarımlarını d&uuml;zenlemek isteyenler i&ccedil;in</li>\r\n	<li>Web tasarımcısı yada programcısı olmak isteyenler i&ccedil;in</li>\r\n	<li>Web sitelerinin nasıl oluştuğunu merak edenler i&ccedil;in</li>\r\n</ul>\r\n', 'web-tasarim-ve-programlama', '20161001164251-1.jpg', 1, 2, 1, 2, 2, '2016-10-01 12:42:51', '2016-10-01 12:42:51'),
(4, 'A''dan Z''ye Front-End Geliştirme (html5 css3 javascript)', 'A''dan Z''ye front-end kursu sonunda javascript tabanli web programlari ve dinamik web siteleri yapabiliyor olacaksiniz.', '<h3>Kurs toplam 5 b&ouml;l&uuml;mden oluşmaktadır.</h3>\r\n\r\n<p>İlk b&ouml;l&uuml;mde html &ouml;ğreneceksiniz. Html dili nedir? Html dilinin yapısı . Html 5 yenilikleri ve standartları. Vs.</p>\r\n\r\n<p>İkinci b&ouml;l&uuml;m css b&ouml;l&uuml;m&uuml;d&uuml;r. Bu b&ouml;l&uuml;mde stil sayfalarını tanıyacaksınız. Stil sayfalarını kullanarak html i&ccedil;erigini bi&ccedil;imlendirmeyi ve css 3 ile gelen animasyon gibi &ouml;zellikleri tanıyacaksınız.</p>\r\n\r\n<p>&Uuml;&ccedil;&uuml;nc&uuml; b&ouml;l&uuml;m javascript b&ouml;l&uuml;m&uuml;d&uuml;r. Bu b&ouml;l&uuml;mde javascript dilini tanıyacaksınız ve html dok&uuml;manlarını ve css stillerini degistirmeyi animasyonlar yapmayı html atributelarını degistirmeyi ve regexp &ouml;greneceksiniz.B&ouml;l&uuml;m sonunda bilgimizi sınayan bir form yapacağız.</p>\r\n\r\n<p>D&ouml;rd&uuml;nc&uuml; b&ouml;l&uuml;m jQuery b&ouml;l&uuml;m&uuml;d&uuml;r. Bu b&ouml;l&uuml;mde jQuery k&uuml;t&uuml;phanesini tanıyacak ve programlar yazabileceksiniz.</p>\r\n\r\n<p>Son b&ouml;l&uuml;mde gelişmiş javascript işlevlerine girecegiz ve javascript dilini sadece web sitelerini g&ouml;rselleştirmek i&ccedil;in değil web uygulamalari yazmak i&ccedil;in ger&ccedil;ek bir programlama dili olarak kullanacağız.</p>\r\n\r\n<h3>Əsas tələblərimiz nələrdir?</h3>\r\n\r\n<ul>\r\n	<li>herhangi bir ozel materyal gerekli degildir</li>\r\n	<li>kursa baslamadan once ogrencilerin bir text editoru secmelerinde fayda vardir ama olmazsa olmaz degildir kursta buna deginecegiz</li>\r\n</ul>\r\n\r\n<h3>Bu kursdan nələr &ouml;yrənəcəksiniz?</h3>\r\n\r\n<ul>\r\n	<li>Statik ve dinamik web sitesi yapabileceksiniz</li>\r\n	<li>css 3 animasyonlari ve transformlari yapabileceksiniz</li>\r\n	<li>javascript diline hakim olacaksiniz</li>\r\n	<li>javascript ile interaktif websiteleri yapabileceksiniz</li>\r\n	<li>javascript dilinde web uygulamalari yazabileceksiniz</li>\r\n	<li>regexp ogrenmis olacaksiniz</li>\r\n</ul>\r\n', 'adan-zye-front-end-gelistirme-html5-css3-javascript', '20161001171821-4.jpg', 1, 4, 1, 2, 2, '2016-10-01 13:18:21', '2016-10-01 13:18:21'),
(5, 'JavaScript Öğreniyorum', 'JavaScript''in temellerinden başlayarak gerçek hayat örnekleri ile bu alandaki eksikliğinizi tamamlayabileceksiniz.', '<h3>JavaScript i&ccedil;erisinde function nedir?, body ile head tag&#39;leri arasına yazılan function arasındaki farklar nelerdir?, ger&ccedil;ek hayat &ouml;rnekleri, a&ccedil;ılır kapanır men&uuml; &ouml;rneği, etkileşimli &uuml;yelik formları, textbox kontrolleri yapmak ve son olarak harici javascript dosyaları ile &ccedil;alışmaya kadar uzanan ger&ccedil;ek hayat &ouml;rneklerini bularak kalıcı &ouml;ğrenmeyi ve JavaScript ile ilgili bir daha hayatınız boyunca sıkıntıya girmeyeceğiniz bir eğitimin ikinci b&ouml;l&uuml;m&uuml;d&uuml;r.</h3>\r\n\r\n<p>JavaScript eğitimini iki b&ouml;l&uuml;me ayırdım. Bu iki b&ouml;l&uuml;m&uuml; tamamladığınızda, kendinizde tekrar ederek ve &uuml;zerinde &ccedil;alışarak artık JavaScript ile ilgili web geliştirme s&uuml;re&ccedil;lerinde herhangi bir sorun yaşamayacaksınız.</p>\r\n\r\n<h3>Nə tələb olunur?</h3>\r\n\r\n<ul>\r\n	<li>Visual Studio 2012 Express veya Herhangi Bir Visual Studio S&uuml;r&uuml;m&uuml;</li>\r\n</ul>\r\n\r\n<h3>Bu kursdan nə əldə edəcəksiniz?</h3>\r\n\r\n<ul>\r\n	<li>Function Nedir &ouml;ğrenir</li>\r\n	<li>Head ve Body Tag&rsquo;leri Arasına Yazılın Function Farkları &ouml;ğrenir</li>\r\n	<li>Geriye değer d&ouml;nd&uuml;ren function nedir &ouml;ğrenir</li>\r\n	<li>&Ccedil;eşitli TextBox Kontrolleri Yapmayı &ouml;ğrenir</li>\r\n	<li>Etkileşimli &Uuml;yelik Form İşlemleri &ouml;ğrenir</li>\r\n	<li>JavaScript ile A&ccedil;ılır Kapanır Men&uuml; Yapmayı &ouml;ğrenir</li>\r\n	<li>İleri JavaScript &Ouml;rnekleri CSS ile İ&ccedil;i&ccedil;e kullanımını &ouml;ğrenir</li>\r\n	<li>Harici JavaScript Dosyaları İle &Ccedil;alışmayı &ouml;ğrenir</li>\r\n</ul>\r\n\r\n<p>Hədəfləriniz nələr olacaq?</p>\r\n\r\n<ul>\r\n	<li>Yazılımcılar</li>\r\n	<li>Web Geliştiricileri</li>\r\n	<li>Web Tasarımcıları</li>\r\n	<li>Web Uzmanları</li>\r\n	<li>Web Sayfası Geliştirmek İsteyenler</li>\r\n</ul>\r\n', 'javascript-oegreniyorum', '20161001172932-5.jpg', 1, 4, 1, 2, 2, '2016-10-01 13:29:32', '2016-10-01 13:29:32');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`) VALUES
(1, 'Azərbaycanca'),
(4, 'İngiliscə'),
(3, 'Rusca'),
(2, 'Türkcə');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `duration` time NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci,
  `order` int(11) NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`id`, `name`, `video_link`, `youtube_link`, `duration`, `slug`, `text`, `order`, `section_id`, `created_at`, `updated_at`) VALUES
(1, 'Introduction to MVC', '20160930193354-001 Introduction to MVC.mp4', '', '00:04:54', 'introduction-to-mvc', '', 1, 1, '2016-09-30 11:33:54', '2016-09-30 11:33:54'),
(2, 'Project structure', '20160930193702-001 Project structure.mp4', '', '00:02:18', 'project-structure', 'During this lecture you will create directories of your MVC framework.\r\n\r\nClassically, MVC framework consists of a set of directories, which help us organize source code files correctly.\r\n\r\nFor instance, the source code files of controllers are stored in controllers directory, the source code files of models are stored in corresponding models directory, the views files – in views directory as a consequence. There is no direct access to the content of these directories in a browser, since all the requests to the web-site are redirected to the webroot directory, which we have already created.\r\n\r\nThe webroot directory stores static content as well as any other files, which may be accessed via direct links. It also contains index.php file – the basic application file, which accepts requests and processes them (creating index.php file and redirecting requests will be implemented in the next lecture).\r\n\r\nAll the directories will be created in the DocumentRoot directory of your web-server. If you use XAMPP, for example, that sort of directory may be c:\\xampp\\htdocs, and the access to this directory may be received using http://localhost/address.', 1, 2, '2016-09-30 11:37:02', '2016-09-30 11:37:02'),
(3, 'Requests processing  Preview', '20160930193743-002 Requests processing.mp4', '', '00:05:50', 'requests-processing-preview', '', 2, 2, '2016-09-30 11:37:43', '2016-09-30 11:37:43'),
(4, 'Adding core classes. Autoload  Preview', '20160930193826-003 Adding core classes. Autoload.mp4', '', '00:08:00', 'adding-core-classes-autoload-preview', 'In this lecture core classes such as Router and Config will be added. Also, class autoloading will be implemented.', 3, 2, '2016-09-30 11:38:26', '2016-09-30 11:38:26'),
(5, 'URL parsing with Router', '20160930194131-004 URL parsing with Router.mp4', '', '00:13:55', 'url-parsing-with-router', '', 4, 2, '2016-09-30 11:41:31', '2016-09-30 11:41:31'),
(6, 'Controllers', '20160930194203-005 Controllers.mp4', '', '00:09:46', 'controllers', '', 5, 2, '2016-09-30 11:42:03', '2016-09-30 11:42:03'),
(7, 'Views', '20160930194241-006 Views.mp4', '', '00:12:46', 'views', '', 6, 2, '2016-09-30 11:42:41', '2016-09-30 11:42:41'),
(8, 'Adding multi language support', '20160930194532-001 Adding multi language support.mp4', '', '00:06:18', 'adding-multi-language-support', '', 1, 3, '2016-09-30 11:45:32', '2016-09-30 11:45:32'),
(9, 'Bootstrap adding ', '20160930194645-001 Bootstrap adding.mp4', '', '00:06:13', 'bootstrap-adding', '', 1, 4, '2016-09-30 11:46:45', '2016-09-30 11:46:45'),
(10, 'Database interaction ', '20160930194741-001 Database interaction.mp4', '', '00:06:45', 'database-interaction', '', 1, 5, '2016-09-30 11:47:41', '2016-09-30 11:47:41'),
(11, 'Models ', '20160930194809-002 Models.mp4', '', '00:05:36', 'models', '', 2, 5, '2016-09-30 11:48:09', '2016-09-30 11:48:09'),
(12, 'Sessions', '20160930194927-001 Sessions.mp4', '', '00:08:59', 'sessions', '', 1, 6, '2016-09-30 11:49:27', '2016-09-30 11:49:27'),
(13, 'Admin section (part 1 of 2) ', '20160930195000-002 Admin section part 1 of 2.mp4', '', '00:19:46', 'admin-section-part-1-of-2', '', 2, 6, '2016-09-30 11:50:00', '2016-09-30 11:50:00'),
(14, 'Admin section (part 2 of 2)', '20160930195034-003 Admin section part 2 of 2.mp4', '', '00:02:08', 'admin-section-part-2-of-2', '', 3, 6, '2016-09-30 11:50:34', '2016-09-30 11:50:34'),
(15, 'Authorization', '20160930195108-004 Authorization.mp4', '', '00:12:58', 'authorization', '', 4, 6, '2016-09-30 11:51:08', '2016-09-30 11:51:08'),
(16, 'Summary', '20160930195202-001 Summary.mp3', '', '00:00:30', 'summary', '', 1, 7, '2016-09-30 11:52:02', '2016-09-30 11:52:02'),
(17, 'HTML5 Dersleri  01 html css icin gerekli programlar', '20160930201916-HTML5 Dersleri  01 html css icin gerekli programlar Akıllıport.mp4', '', '00:04:43', 'html5-dersleri-01-html-css-icin-gerekli-programlar', '', 1, 8, '2016-09-30 16:19:16', '2016-09-30 16:19:16'),
(18, 'HTML5 Dersleri  02 html sayfasinin yapisini anlamak', '20160930202205-HTML5 Dersleri  02 html sayfasinin yapisini anlamak Akıllıport.mp4', '', '00:06:06', 'html5-dersleri-02-html-sayfasinin-yapisini-anlamak', '', 1, 9, '2016-09-30 16:22:05', '2016-09-30 16:22:05'),
(19, 'HTML5 Dersleri  03 tarayicimizda gerekli eklentilerin kurulması', '20160930202231-HTML5 Dersleri  03 tarayicimizda gerekli eklentilerin kurulması Akıllıport.mp4', '', '00:04:17', 'html5-dersleri-03-tarayicimizda-gerekli-eklentilerin-kurulmasi', '', 2, 9, '2016-09-30 16:22:31', '2016-09-30 16:22:31'),
(20, 'HTML5 Dersleri  04 html etiketi ve ilk sayfamizin olusturulmasi', '20160930202346-HTML5 Dersleri  04 html etiketi ve ilk sayfamizin olusturulmasi Akıllıport.mp4', '', '00:04:56', 'html5-dersleri-04-html-etiketi-ve-ilk-sayfamizin-olusturulmasi', '', 1, 10, '2016-09-30 16:23:46', '2016-09-30 16:23:46'),
(21, 'HTML5 Dersleri  05 head ve title etikenin kullanimi', '20160930202437-HTML5 Dersleri  05 head ve title etikenin kullanimi Akıllıport.mp4', '', '00:04:59', 'html5-dersleri-05-head-ve-title-etikenin-kullanimi', '', 2, 10, '2016-09-30 16:24:37', '2016-09-30 16:24:37'),
(22, 'HTML5 Dersleri  06 title etiketinin seo icin onemi ve meta taqlari', '20160930202506-HTML5 Dersleri  06 title etiketinin seo icin onemi ve meta taqlari Akıllıport.mp4', '', '00:06:07', 'html5-dersleri-06-title-etiketinin-seo-icin-onemi-ve-meta-taqlari', '', 3, 10, '2016-09-30 16:25:06', '2016-09-30 16:25:06'),
(23, 'HTML5 Dersleri  07 body etiketi ve paragraf etiketi', '20160930202541-HTML5 Dersleri  07 body etiketi ve paragraf etiketi Akıllıport.mp4', '', '00:04:54', 'html5-dersleri-07-body-etiketi-ve-paragraf-etiketi', '', 4, 10, '2016-09-30 16:25:41', '2016-09-30 16:25:41'),
(24, 'Web Tasarım ve Programlama', '', 'xXfg3aUSLfA', '00:06:29', 'web-tasarim-ve-programlama', '', 1, 11, '2016-10-01 12:48:49', '2016-10-01 12:48:49'),
(25, 'HTML Dersleri - 1', '', 'u6ghym5VJ08', '00:37:57', 'html-dersleri-1', '', 1, 12, '2016-10-01 12:50:54', '2016-10-01 12:50:54'),
(26, 'HTML Dersleri - 2', '', '3yVfp78hQr8', '00:32:24', 'html-dersleri-2', '', 2, 12, '2016-10-01 12:51:37', '2016-10-01 12:51:37'),
(27, 'HTML5 ve CSS3''e Giriş', '', '9U4EnvIfz44', '00:15:38', 'html5-ve-css3e-giris', '', 1, 13, '2016-10-01 13:19:47', '2016-10-01 13:19:47'),
(28, 'HTML5 ve CSS3 Editör İndirme ve İlk Basit HTML5 Sayfası', '', 'XyzUXJB6Yjk', '00:12:07', 'html5-ve-css3-editoer-indirme-ve-ilk-basit-html5-sayfasi', '', 2, 13, '2016-10-01 13:20:28', '2016-10-01 13:20:28'),
(29, 'HTML5&CSS3''te CSS dosyası ve değişken çağırma', '', 'Tvc1yZ2Jz2A', '00:17:17', 'html5css3te-css-dosyasi-ve-degisken-cagirma', '', 3, 13, '2016-10-01 13:22:48', '2016-10-01 13:22:48'),
(30, 'Javascript''e Giriş', '', 'k-G9yvnqFUo', '00:05:36', 'javascripte-giris', '', 0, 14, '2016-10-01 13:30:57', '2016-10-01 13:30:57'),
(31, 'Javascript''te Değişken Tanımlama ve Değişken Türleri', '', 'Nf_3yofxtbU', '00:07:37', 'javascriptte-degisken-tanimlama-ve-degisken-tuerleri', '', 0, 15, '2016-10-01 13:32:49', '2016-10-01 13:32:49'),
(32, 'Javascript''te Çoklu Değişken Atama ve Kullanma', '', 'MbIw_ZrsX0k', '00:07:36', 'javascriptte-coklu-degisken-atama-ve-kullanma', '', 2, 15, '2016-10-01 13:33:21', '2016-10-01 13:33:21');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `name`) VALUES
(2, 'Başlanğıc səviyyə'),
(1, 'Bütün səviyyələr'),
(3, 'Orta səviyyə'),
(4, 'Üst səviyyə');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_05_24_073233_create_admins_table', 1),
('2016_09_23_122111_create_languages_table', 1),
('2016_09_23_122222_create_levels_table', 1),
('2016_09_23_133443_create_categories_table', 1),
('2016_09_23_133456_create_subcategories_table', 1),
('2016_09_23_152222_create_teachers_table', 1),
('2016_09_23_153138_create_courses_table', 1),
('2016_09_23_153355_create_sections_table', 1),
('2016_09_23_153413_create_lectures_table', 1),
('2016_09_23_153819_create_watchings_table', 1),
('2016_09_23_160645_create_questions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci,
  `lecture_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`, `order`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 'Introduction', 1, 1, '2016-09-30 11:32:53', '2016-09-30 11:32:53'),
(2, 'Basics. Core classes', 2, 1, '2016-09-30 11:34:28', '2016-09-30 11:34:28'),
(3, 'Multiple languages support', 3, 1, '2016-09-30 11:43:48', '2016-09-30 11:43:48'),
(4, 'Styling', 4, 1, '2016-09-30 11:46:10', '2016-09-30 11:46:10'),
(5, 'Using a database. Models', 5, 1, '2016-09-30 11:47:13', '2016-09-30 11:47:13'),
(6, 'Extra features', 6, 1, '2016-09-30 11:48:51', '2016-09-30 11:48:51'),
(7, 'Summary', 7, 1, '2016-09-30 11:51:36', '2016-09-30 11:51:36'),
(8, 'Giriş', 1, 2, '2016-09-30 16:18:30', '2016-09-30 16:18:30'),
(9, 'Başlanğıc sturuktur', 2, 2, '2016-09-30 16:21:30', '2016-09-30 16:21:30'),
(10, 'Sayfa oluşdurma', 3, 2, '2016-09-30 16:23:20', '2016-09-30 16:23:20'),
(11, 'Giriş', 1, 3, '2016-10-01 12:43:11', '2016-10-01 12:43:11'),
(12, 'HTML Dərsləri', 2, 3, '2016-10-01 12:50:16', '2016-10-01 12:50:16'),
(13, 'HTML5 ve CSS3''e Giriş', 1, 4, '2016-10-01 13:18:48', '2016-10-01 13:18:48'),
(14, 'Giriş', 1, 5, '2016-10-01 13:30:17', '2016-10-01 13:30:17'),
(15, 'Dəyişkənlər', 2, 5, '2016-10-01 13:31:31', '2016-10-01 13:31:31');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `name`, `slug`, `icon`, `category_id`) VALUES
(1, 'Web Proqramlaşdırma', 'web-proqramlasdirma', 'ud_web-development', 1),
(2, 'Mobil Proqramlaşdırma', 'mobil-proqramlasdirma', 'ud_mobile-apps', 1),
(5, 'Verilənlər Bazası', 'verilenler-bazasi', 'ud_databases', 1),
(6, 'Zəiflik Aşkarlanması', 'zeiflik-askarlanmasi', 'ud_software-testing', 1),
(8, ' Proqramlama Alətləri', 'proqramlama-aletleri', 'ud_development-tools', 1),
(9, 'İT Sertifikasiyası', 'it-sertifikasiyasi', 'ud_it-certification', 2),
(10, 'Şəbəkə &amp; Təhlükəsizlik', 'sebeke-amp-tehluekesizlik', 'ud_network-and-security', 2),
(11, 'Texniki Təminat', 'texniki-teminat', 'ud_hardware', 2),
(12, 'Əməliyyat Sistemi', 'emeliyyat-sistemi', 'ud_operating-systems', 2),
(13, 'Web Dizayn', 'web-dizayn', 'ud_web-design', 3),
(14, 'Qrafik Dizayn', 'qrafik-dizayn', 'ud_graphic-design', 3),
(15, 'Dizayn Alətləri', 'dizayn-aletleri', 'ud_design-tools', 3),
(16, 'Oyun Dizaynı', 'oyun-dizayni', 'ud_game-design', 3),
(17, '3D &amp; Animasiya', '3d-amp-animasiya', 'ud_3d-and-animation', 3),
(19, 'Linux', 'linux', 'fa fa-linux', 4),
(20, 'Microsoft', 'microsoft', 'ud_microsoft', 4),
(21, 'Apple', 'apple', 'ud_apple', 4),
(22, 'Google', 'google', 'ud_google', 4),
(23, 'Oracle', 'oracle', 'ud_oracle', 4),
(24, 'Video Dizayn', 'video-sizayn', 'ud_mobile-photography', 3),
(26, 'Rəqəmsal Fotoqrafçılıq', 'reqemsal-fotoqrafciliq', 'ud_digital-photography', 6),
(27, 'Fotoqrafçılığın Təməlləri', 'fotoqrafciligin-temelleri', 'ud_photography-fundamentals', 6),
(28, 'Portret Görünüşlü', 'portret-goeruenueslue', 'ud_portraits', 6),
(29, 'Mənzərə Görünüşlü', 'menzere-goeruenueslue', 'ud_portraits', 6),
(30, 'Fotoqrafçılıq Alətləri', 'fotoqrafciliq-aletleri', 'ud_photography-tools', 6),
(31, 'Telefon Fotoqrafçılığı', 'telefon-fotoqrafciligi', 'ud_mobile-photography', 6),
(32, 'Oyun Proqramlaşdırma', 'oyun-proqramlasdirma', 'ud_game-development', 1),
(33, 'Desktop Proqramlaşdırma', 'desktop-proqramlasdirma', 'ud_programming-languages', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `biography` text COLLATE utf8_unicode_ci,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linked_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `job`, `biography`, `email`, `facebook_link`, `linked_link`, `twitter_link`, `youtube_link`, `website_link`, `image`, `password`, `number`, `age`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'PHP - Academy', 'Web development courses', 'PHP Academy is surely one of the most effective ways for you to acquire all the necessary skills in web development since we truly wish all of our students to become really talented professionals.\r\n\r\nWe have a great experience in teaching which means that we already have our own magic formula of providing foundation knowledge, so that you will be able to create your own web sites, get the desired job and well-paid position. What is more, we constantly improve ourstrategy of teaching to make our students feel more comfortable, confident and satisfied. Our aim is to deliver valuable knowledge, provide you with pretty simple, succinct, comprehensible and qualitative materials at quite acceptable price. We are absolutely open to our students that`s why you are welcome to ask any questions which we are really thankful for.\r\n\r\nYou should also notice, that all of our courses have money back guarantee, which lasts 30 days.\r\n\r\nWe wish you happy learning and successful digesting of our materials!', 'sara.a@code.edu.az', NULL, 'http://ua.linkedin.com/in/oshumar', NULL, NULL, NULL, '10349174_b683_6.jpg', '123456', NULL, NULL, NULL, NULL, NULL),
(2, 'Ismail Karaca', 'Web Programlaşdırmacı və Müəllim', NULL, 'sara.esgerova2@gmail.com', NULL, NULL, NULL, NULL, NULL, 'ismayilkaraca.jpg', '123456', NULL, NULL, NULL, NULL, NULL),
(4, 'Yakin Kampus', 'Education System', 'Yakın Kampus''ün eğitim videolarıyla geleceğinizi elinize almanıza yardımcı olur\r\n\r\nAyrıca yazılım ve tasarımla ilgili sorularınızı toplulukla paylaşabilir ve başkalarının sorularını cevaplayabilirsiniz', 'sara@code.edu.az', 'https://www.facebook.com/YakinKampus', NULL, 'https://twitter.com/YakinKampus', NULL, 'www.yakinkampus.com', '5653386_9a47_3.jpg', '123456', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.png',
  `last_login_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `watchings`
--

CREATE TABLE `watchings` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `feedback` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_slug_unique` (`slug`),
  ADD KEY `courses_teacher_id_foreign` (`teacher_id`),
  ADD KEY `courses_subcategory_id_foreign` (`subcategory_id`),
  ADD KEY `courses_level_id_foreign` (`level_id`),
  ADD KEY `courses_language_id_foreign` (`language_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `languages_name_unique` (`name`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lectures_slug_unique` (`slug`),
  ADD KEY `lectures_section_id_foreign` (`section_id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `levels_name_unique` (`name`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_lecture_id_foreign` (`lecture_id`),
  ADD KEY `questions_user_id_foreign` (`user_id`),
  ADD KEY `questions_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_course_id_foreign` (`course_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subcategories_slug_unique` (`slug`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `watchings`
--
ALTER TABLE `watchings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `watchings_course_id_foreign` (`course_id`),
  ADD KEY `watchings_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lectures`
--
ALTER TABLE `lectures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `watchings`
--
ALTER TABLE `watchings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `courses_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `courses_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `courses_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lectures`
--
ALTER TABLE `lectures`
  ADD CONSTRAINT `lectures_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_lecture_id_foreign` FOREIGN KEY (`lecture_id`) REFERENCES `lectures` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `questions_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `questions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `watchings`
--
ALTER TABLE `watchings`
  ADD CONSTRAINT `watchings_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `watchings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
