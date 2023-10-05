-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 08, 2023 at 09:49 AM
-- Server version: 10.6.14-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unicoit_3dhomes`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `banner_title` varchar(255) NOT NULL,
  `banner_url` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_title`, `banner_url`, `banner_image`, `created_at`, `updated_at`) VALUES
(1, 'Everyday Fresh & Clean with Our Products', 'https://www.facebook.com/', 'upload/banner/1760169014404797.png', NULL, NULL),
(2, 'Make your Breakfast Healthy and Easy', 'https://www.youtube.com/', 'upload/banner/1760169040457901.png', NULL, NULL),
(3, 'The best Organic Products Online', 'https://www.youtube.com/', 'upload/banner/1760169066354601.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE IF NOT EXISTS `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_category_name` varchar(255) NOT NULL,
  `blog_category_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `blog_category_name`, `blog_category_slug`, `created_at`, `updated_at`) VALUES
(1, 'Clothing', 'clothing', '2023-03-16 02:21:01', NULL),
(2, 'Pet Foods', 'pet-foods', '2023-03-16 02:21:15', NULL),
(3, 'Fresh Fruit', 'fresh-fruit', '2023-03-16 02:21:30', NULL),
(4, 'Baking Material', 'baking-material', '2023-03-16 02:21:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE IF NOT EXISTS `blog_posts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_slug` varchar(255) NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `post_short_description` text NOT NULL,
  `post_long_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `category_id`, `post_title`, `post_slug`, `post_image`, `post_short_description`, `post_long_description`, `created_at`, `updated_at`) VALUES
(1, 2, '9 Tasty Ideas That Will Inspire You to Grow', '9-tasty-ideas-that-will-inspire-you-to-grow', 'upload/blog/1760512883695254.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>', '2023-03-16 02:38:41', NULL),
(2, 2, 'You to Grow a Home Herb Garden Today', 'you-to-grow-a-home-herb-garden-today', 'upload/blog/1760513063541596.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '<p class=\"single-excerpt\">Helping everyone live happier, healthier lives at home through their kitchen. Kitchn is a daily food magazine on the Web celebrating life in the kitchen through home cooking and kitchen intelligence.</p>\r\n<p>We\'ve reviewed and ranked all of the best smartwatches on the market right now, and we\'ve made a definitive list of the top 10 devices you can buy today. One of the 10 picks below may just be your perfect next smartwatch.</p>\r\n<p>Those top-end wearables span from the Apple Watch to Fitbits, Garmin watches to Tizen-sporting Samsung watches. There\'s also Wear OS which is Google\'s own wearable operating system in the vein of Apple\'s watchOS - you&rsquo;ll see it show up in a lot of these devices.</p>\r\n<h5 class=\"mt-50\">Lorem ipsum dolor sit amet cons</h5>\r\n<p>Throughout our review process, we look at the design, features, battery life, spec, price and more for each smartwatch, rank it against the competition and enter it into the list you\'ll find below.</p>\r\n<p><img class=\"mb-30\" src=\"file:///C:/Users/USER/Videos/2.1%20Multi%20Vendor%20Ecommerce%20Excise_File/Excise_File/Frontend%20Theme/assets/imgs/blog/blog-21.png\" alt=\"\" /></p>\r\n<p>Tortor, lobortis semper viverra ac, molestie tortor laoreet amet euismod et diam quis aliquam consequat porttitor integer a nisl, in faucibus nunc et aenean turpis dui dignissim nec scelerisque ullamcorper eu neque, augue quam quis lacus pretium eros est amet turpis nunc in turpis massa et eget facilisis ante molestie penatibus dolor volutpat, porta pellentesque scelerisque at ornare dui tincidunt cras feugiat tempor lectus</p>\r\n<blockquote>\r\n<p>Integer eu faucibus <a>dolor</a><sup><a>[5]</a></sup>. Ut venenatis tincidunt diam elementum imperdiet. Etiam accumsan semper nisl eu congue. Sed aliquam magna erat, ac eleifend lacus rhoncus in.</p>\r\n</blockquote>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet id enim, libero sit. Est donec lobortis cursus amet, cras elementum libero convallis feugiat. Nulla faucibus facilisi tincidunt a arcu, sem donec sed sed. Tincidunt morbi scelerisque lectus non. At leo mauris, vel augue. Facilisi diam consequat amet, commodo lorem nisl, odio malesuada cras. Tempus lectus sed libero viverra ut. Facilisi rhoncus elit sit sit.</p>\r\n<p>&nbsp;</p>', '2023-03-16 02:41:32', NULL),
(3, 3, '1Easy Italian Chicken Dinner I Make Over and Over Again', '1easy-italian-chicken-dinner-i-make-over-and-over-again', 'upload/blog/1760513585859704.jpg', '1Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatu', '<p>1Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatu</p>', '2023-03-16 02:42:41', '2023-03-16 02:49:50'),
(4, 1, '1Easy Italian Chicken Dinner I Make Over and Over Again', '1easy-italian-chicken-dinner-i-make-over-and-over-again', 'upload/blog/1760513707796948.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '<p class=\"single-excerpt\">Helping everyone live happier, healthier lives at home through their kitchen. Kitchn is a daily food magazine on the Web celebrating life in the kitchen through home cooking and kitchen intelligence.</p>\r\n<p>We\'ve reviewed and ranked all of the best smartwatches on the market right now, and we\'ve made a definitive list of the top 10 devices you can buy today. One of the 10 picks below may just be your perfect next smartwatch.</p>\r\n<p>Those top-end wearables span from the Apple Watch to Fitbits, Garmin watches to Tizen-sporting Samsung watches. There\'s also Wear OS which is Google\'s own wearable operating system in the vein of Apple\'s watchOS - you&rsquo;ll see it show up in a lot of these devices.</p>\r\n<h5 class=\"mt-50\">Lorem ipsum dolor sit amet cons</h5>\r\n<p>Throughout our review process, we look at the design, features, battery life, spec, price and more for each smartwatch, rank it against the competition and enter it into the list you\'ll find below.</p>\r\n<p><img class=\"mb-30\" src=\"file:///C:/Users/USER/Videos/2.1%20Multi%20Vendor%20Ecommerce%20Excise_File/Excise_File/Frontend%20Theme/assets/imgs/blog/blog-21.png\" alt=\"\" /></p>\r\n<p>Tortor, lobortis semper viverra ac, molestie tortor laoreet amet euismod et diam quis aliquam consequat porttitor integer a nisl, in faucibus nunc et aenean turpis dui dignissim nec scelerisque ullamcorper eu neque, augue quam quis lacus pretium eros est amet turpis nunc in turpis massa et eget facilisis ante molestie penatibus dolor volutpat, porta pellentesque scelerisque at ornare dui tincidunt cras feugiat tempor lectus</p>\r\n<blockquote>\r\n<p>Integer eu faucibus <a>dolor</a><sup><a>[5]</a></sup>. Ut venenatis tincidunt diam elementum imperdiet. Etiam accumsan semper nisl eu congue. Sed aliquam magna erat, ac eleifend lacus rhoncus in.</p>\r\n</blockquote>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Amet id enim, libero sit. Est donec lobortis cursus amet, cras elementum libero convallis feugiat. Nulla faucibus facilisi tincidunt a arcu, sem donec sed sed. Tincidunt morbi scelerisque lectus non. At leo mauris, vel augue. Facilisi diam consequat amet, commodo lorem nisl, odio malesuada cras. Tempus lectus sed libero viverra ut. Facilisi rhoncus elit sit sit.</p>\r\n<p>&nbsp;</p>', '2023-03-16 02:51:47', NULL),
(6, 4, 'fgsfgsfg', 'fgsfgsfg', 'upload/blog/1770854687117840.jpg', 'sfgsfgsfgsfg', '<p>sfgsfgsfg</p>', '2023-07-08 06:17:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) NOT NULL,
  `brand_slug` varchar(255) NOT NULL,
  `brand_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_slug`, `brand_image`, `created_at`, `updated_at`, `description`) VALUES
(5, 'Xiaomi', 'xiaomi', 'upload/brand/1760176007461826.jpg', NULL, NULL, 'As part of its Corporate Social Responsibility (CSR), Shanta Holdings Ltd. is the main founder and primary financier of Ashulia Women and Children Hospital (AWCH). It is a fully philanthropic non-profit hospital located in Beron , Ashulia right on the Tongi -Ashulia-EPZ bypass road. This hospital’s mission is to support the overall development of women and children and the medical needs of the underprivileged segment of society. The Hospital runs and operates under a trust chaired by renowned national pediatrician Prof. Dr. M Q-K Talukder. Mr. Khondoker Monir Uddin, the Managing Director of Shanta, is a member of the Board of Trustees who acts as the chief advisor and counselor to the trust.\r\n <br><br>\r\nThis hospital has been in operation since 2004, occupying a land area of 12 bighas with a current built-up area of approximately 250,000 sft. in an 8 storied building. It caters mainly to outpatient services 24 hours x 7 days a week. There are 171 beds including 12 ICU, 08 HDU, 12 NICU, 12 Neonatology and over 100 doctors and physicians of various specialties including a number of senior consultants. The hospital is also equipped with a modern diagnostic lab.\r\n <br><br>\r\nAWCH has research programs to identify the sufferings of women and children and suggests the government to address the same issues nationally to achieve the MDG set in terms of reducing child mortality and making other improvements. A couple of research findings have been submitted to the Government and also published in international medical journals with appreciation. AWCH has adopted a master plan to construct a Nursing College and also a Medical College in near future.');

-- --------------------------------------------------------

--
-- Table structure for table `b_o_d_images`
--

CREATE TABLE IF NOT EXISTS `b_o_d_images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `background_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `b_o_d_images`
--

INSERT INTO `b_o_d_images` (`id`, `background_image`, `created_at`, `updated_at`) VALUES
(1, 'upload/bod/1770382154669559.jpg', NULL, '2023-07-03 01:06:35');

-- --------------------------------------------------------

--
-- Table structure for table `b_o_d_s`
--

CREATE TABLE IF NOT EXISTS `b_o_d_s` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `b_o_d_s`
--

INSERT INTO `b_o_d_s` (`id`, `image`, `name`, `designation`, `description`, `created_at`, `updated_at`) VALUES
(1, 'upload/bod/1771843711217642.jpg', 'Demo Name 1', 'MANAGING DIRECTOR', '<div class=\"board-member-details\">\r\n<p style=\"text-align: justify;\">A distinguished and perceptive entrepreneur, Mr. Khondoker Monir Uddin, the founder promoter of Shanta, opts to do business by providing world-class products and services in Bangladesh. With his visionary leadership and extensive business knowledge, Shanta drives forward to not only provide superior quality products and services but to demonstrate unparalleled foresight by developing iconic projects which are the epitome of modern architecture, safe, functional&nbsp;and comfortable living. The reputation and success of Shanta are testaments to his&nbsp;strong ethics and relentless&nbsp;focus on quality, innovation and social&nbsp;responsibility.</p>\r\n<p style=\"text-align: justify;\"><br />Mr. Monir completed both his Bachelors with honors&nbsp;and Masters degrees from the Department of Accounting, University of Dhaka.&nbsp;Over the past three decades, he has established Shanta as one of the leading corporate houses in Bangladesh,&nbsp;with successful investments in diversified sectors and thus has been continually recognized as a Commercially Important Person (CIP) by the Government of Bangladesh since 2000 till date. Mr. Monir is also a founder and Managing Director of the prestigious&nbsp;STS Group -&nbsp;which revolutionized the healthcare and education sectors&nbsp;of the country by establishing international standard institutions like Evercare Hospital Dhaka (previously Apollo Hospitals Dhaka), International School Dhaka (ISD) and the DPS STS schools. He is also a sponsor&nbsp;Director and former Chairman of Dhaka Bank Limited, and the Managing Director of Shanta Securities Limited.</p>\r\n</div>', NULL, '2023-07-19 08:17:20'),
(2, 'upload/bod/1771843787109591.jpg', 'Demo Name 2', 'Director', '<p>Mrs. Jasmine Sultana, wife of Mr. Khondoker Monir Uddin, obtained her Bachelor&rsquo;s degree from the University of Dhaka and has been a key stakeholder behind the success of Shanta Holdings Limited over the past decades. She is an experienced entrepreneur with a long track record and is also ex-Chairperson of Dhaka Bank Limited. She is also recognized as a Commercially Important Person (CIP) by the Government of Bangladesh for her contributions. Under her strong leadership and entrepreneurial spirit, Shanta has become one of the leading real estate developers in the country.</p>', NULL, '2023-07-19 08:18:32'),
(3, 'upload/bod/1771843802198157.jpg', 'Demo Name 3', 'DIRECTOR', '<p>Mr. Saif Khondoker completed his BBA with a specialization in Strategic Management from the University of Toronto, and his MBA from the prestigious Rotman School of Management, University of Toronto. He is also a certified Project Management Professional (PMP)&reg;.&nbsp;<br /><br />Under his leadership, Shanta strives to strengthen its strategic marketing and branding, enhance operational efficiencies, and incorporate state-of-the-art technologies and best practices. Moreover, his focus on quality and driving product innovation by incorporating modern features into Shanta projects continue to truly differentiate it from competitors, ensuring it remains unparalleled in design and quality.<br /><br />Apart from his active involvement in the management and executive decision-making of the company, he is also the Chairman of Shanta Asset Management Ltd.</p>', NULL, '2023-07-19 08:18:46'),
(4, 'upload/bod/1771843814414036.jpg', 'Demo Name 4', 'DIRECTOR', '<p>Ms. Mayesha Khondoker is the Founding Director of Shanta Lifestyle and Managing Director of Shanta Multiverse. Ms. Khondoker completed her Bachelor of Commerce (BCom) with Specialized Honors in Marketing from York University, and is currently completing her MBA from University of Warwick&rsquo;s prestigious Warwick Business School.&nbsp;<br /><br />Prior to joining Shanta, Ms. Khondoker was the Head of Marketing at Evercare Hospitals Dhaka where she led the development of an in-house communications team which drove the robust rebranding and modernization of the hospital in 2014. Under her leadership, the team increased hospital revenue by 120%.<br />&nbsp;<br />During her time at Evercare Hospital, Ms. Khondoker developed the Child Development Centre, Bangladesh&rsquo;s first private hospital pediatric department that specializes in the treatment and physiotherapy of children with disabilities and mental health issues. Ms. Khondoker also led the redesign of the paediatric ward and established a paediatric ER room, which were more interactive and child-friendly.<br />&nbsp;<br />In 2016, Ms. Khondoker founded Shanta Multiverse Ltd and The White Canary Cafe chain. The firm now operates 5 locations across the capital.&nbsp;<br /><br />In 2020, she founded Shanta Lifestyle Ltd alongside our Managing Director. A division of Shanta that provides complete interior design solutions and does so in direct partnership with renowned architects and international lifestyle brands Natuzzi, Molteni &amp; C, Lixil, Lutron, Cattelan Italia and more.</p>', NULL, '2023-07-19 08:18:58');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `category_image`, `created_at`, `updated_at`) VALUES
(1, 'Fashion', 'fashion', 'upload/category/1760169385129658.webp', NULL, '2023-03-12 07:38:55'),
(2, 'Electronics', 'electronics', 'upload/category/1760169406431482.webp', NULL, '2023-03-12 07:39:15'),
(3, 'Sweet Home', 'sweet-home', 'upload/category/1760175580202524.webp', NULL, '2023-03-12 09:17:23'),
(4, 'Appliances', 'appliances', 'upload/category/1760175601409120.webp', NULL, '2023-03-12 09:17:43'),
(5, 'Beauty', 'beauty', 'upload/category/1760175623525697.webp', NULL, '2023-03-12 09:18:04'),
(7, 'Meat & Fish', 'meat-&-fish', 'upload/category/1760175643687104.png', NULL, NULL),
(8, 'Furniture', 'furniture', 'upload/category/1760175658123809.webp', NULL, NULL),
(9, 'Mobiles', 'mobiles', 'upload/category/1760175670789215.webp', NULL, NULL),
(10, 'Grocery', 'grocery', 'upload/category/1760175688503245.webp', NULL, NULL),
(11, 'Travel', 'travel', 'upload/category/1760175706527260.webp', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `compares`
--

CREATE TABLE IF NOT EXISTS `compares` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE IF NOT EXISTS `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `coupon_name` varchar(255) NOT NULL,
  `coupon_discount` int(11) NOT NULL,
  `coupon_validity` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_name`, `coupon_discount`, `coupon_validity`, `status`, `created_at`, `updated_at`) VALUES
(2, 'EASYLEARNING', 30, '2023-04-28', 1, '2023-03-13 05:14:24', NULL),
(3, 'HAPPYLEARNING', 20, '2023-03-31', 1, '2023-03-13 05:15:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `c_s_r_galleries`
--

CREATE TABLE IF NOT EXISTS `c_s_r_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `c_s_r_galleries`
--

INSERT INTO `c_s_r_galleries` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'upload/CSRGallery/1771844167274354.png', NULL, '2023-07-19 08:24:35'),
(2, 'upload/CSRGallery/1771844367976668.png', NULL, '2023-07-19 08:27:46'),
(3, 'upload/CSRGallery/1771844413131001.png', NULL, '2023-07-19 08:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `c_s_r_s`
--

CREATE TABLE IF NOT EXISTS `c_s_r_s` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `c_s_r_s`
--

INSERT INTO `c_s_r_s` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Corporate Social Responsibility', '<p>As part of its Corporate Social Responsibility (CSR), Shanta Holdings Ltd. is the main founder and primary financier of Ashulia Women and Children Hospital (AWCH). It is a fully philanthropic non-profit hospital located in Beron , Ashulia right on the Tongi -Ashulia-EPZ bypass road. This hospital&rsquo;s mission is to support the overall development of women and children and the medical needs of the underprivileged segment of society. The Hospital runs and operates under a trust chaired by renowned national pediatrician Prof. Dr. M Q-K Talukder. Mr. Khondoker Monir Uddin, the Managing Director of Shanta, is a member of the Board of Trustees who acts as the chief advisor and counselor to the trust. <br /><br />This hospital has been in operation since 2004, occupying a land area of 12 bighas with a current built-up area of approximately 250,000 sft. in an 8 storied building. It caters mainly to outpatient services 24 hours x 7 days a week. There are 171 beds including 12 ICU, 08 HDU, 12 NICU, 12 Neonatology and over 100 doctors and physicians of various specialties including a number of senior consultants. The hospital is also equipped with a modern diagnostic lab. <br /><br />AWCH has research programs to identify the sufferings of women and children and suggests the government to address the same issues nationally to achieve the MDG set in terms of reducing child mortality and making other improvements. A couple of research findings have been submitted to the Government and also published in international medical journals with appreciation. AWCH has adopted a master plan to construct a Nursing College and also a Medical College in near future.</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `landing_abouts`
--

CREATE TABLE IF NOT EXISTS `landing_abouts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `landing_about_description` text NOT NULL,
  `landing_about_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `landing_abouts`
--

INSERT INTO `landing_abouts` (`id`, `landing_about_description`, `landing_about_image`, `created_at`, `updated_at`) VALUES
(1, '<p>Inventore aliquam beatae at et id alias. Ipsa dolores amet consequuntur minima quia maxime autem. Quidem id sed ratione. Tenetur provident autem in reiciendis rerum at dolor. Aliquam consectetur laudantium temporibus dicta minus dolor.</p>\r\n<ul>\r\n<li>Ullamco laboris nisi ut aliquip ex ea commo</li>\r\n<li>Duis aute irure dolor in reprehenderit in</li>\r\n<li>Ullamco laboris nisi ut aliquip ex ea</li>\r\n</ul>\r\n<p>Vitae autem velit excepturi fugit. Animi ad non. Eligendi et non nesciunt suscipit repellendus porro in quo eveniet. Molestias in maxime doloremque.</p>', 'upload/landing_about/1762235182563049.jpg', NULL, '2023-04-04 02:53:53');

-- --------------------------------------------------------

--
-- Table structure for table `landing_companies`
--

CREATE TABLE IF NOT EXISTS `landing_companies` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `landing_company_title` varchar(255) NOT NULL,
  `landing_company_url` varchar(255) DEFAULT NULL,
  `landing_company_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `landing_companies`
--

INSERT INTO `landing_companies` (`id`, `landing_company_title`, `landing_company_url`, `landing_company_image`, `created_at`, `updated_at`) VALUES
(2, 'Demo name 01', NULL, 'upload/landing_company/1771843917322246.jpg', NULL, '2023-07-19 08:20:36'),
(3, 'Demo name 02', NULL, 'upload/landing_company/1771843927253373.jpg', NULL, '2023-07-19 08:20:46');

-- --------------------------------------------------------

--
-- Table structure for table `landing_services`
--

CREATE TABLE IF NOT EXISTS `landing_services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `landing_service_title` varchar(255) NOT NULL,
  `landing_short_title` longtext NOT NULL,
  `landing_service_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `landing_services`
--

INSERT INTO `landing_services` (`id`, `landing_service_title`, `landing_short_title`, `landing_service_image`, `created_at`, `updated_at`) VALUES
(3, 'Nesciunt Mete', 'qui ut et autem uia reprehenderit sunt deleniti Matt Brandon Freelancer  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam. John Larson Entrepreneur  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid. Saul Goodman', 'upload/landing_service/1762235656875305.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `landing_sliders`
--

CREATE TABLE IF NOT EXISTS `landing_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `landing_slider_title` varchar(255) NOT NULL,
  `landing_short_title` varchar(255) NOT NULL,
  `landing_slider_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `landing_sliders`
--

INSERT INTO `landing_sliders` (`id`, `landing_slider_title`, `landing_short_title`, `landing_slider_image`, `created_at`, `updated_at`) VALUES
(3, 'Welcome to UpConstruction', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'upload/landing_slider/1762234838874363.jpg', NULL, NULL),
(4, 'Welcome to UpConstruction', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'upload/landing_slider/1762234869720466.jpg', NULL, NULL),
(5, 'Welcome to UpConstruction', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'upload/landing_slider/1762234900704700.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `landing_sub_teams`
--

CREATE TABLE IF NOT EXISTS `landing_sub_teams` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `landing_main_team_id` varchar(255) NOT NULL,
  `landing_sub_team_name` varchar(255) NOT NULL,
  `landing_sub_team_designation` varchar(255) NOT NULL,
  `landing_sub_team_paragraph` varchar(255) NOT NULL,
  `landing_sub_team_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `landing_sub_teams`
--

INSERT INTO `landing_sub_teams` (`id`, `landing_main_team_id`, `landing_sub_team_name`, `landing_sub_team_designation`, `landing_sub_team_paragraph`, `landing_sub_team_image`, `created_at`, `updated_at`) VALUES
(2, '3', 'adfdf', 'asdf', 'asdfdsf', 'upload/landing_sub_team/1762404894176885.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `landing_teams`
--

CREATE TABLE IF NOT EXISTS `landing_teams` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `landing_team_name` varchar(255) NOT NULL,
  `landing_team_designation` varchar(255) NOT NULL,
  `landing_team_paragraph` varchar(255) NOT NULL,
  `landing_team_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `landing_teams`
--

INSERT INTO `landing_teams` (`id`, `landing_team_name`, `landing_team_designation`, `landing_team_paragraph`, `landing_team_image`, `created_at`, `updated_at`) VALUES
(2, 'Walter White', 'Chief Executive Officer', 'Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire  flow', 'upload/landing_team/1762400587739878.jpg', NULL, NULL),
(3, 'Saiful', 'Jr. Web Developer', 'He is a good employee.', 'upload/landing_team/1762400640820883.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `landing_testimonials`
--

CREATE TABLE IF NOT EXISTS `landing_testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `landing_testimonial_name` varchar(255) NOT NULL,
  `landing_testimonial_designation` varchar(255) NOT NULL,
  `landing_testimonial_paragraph` longtext NOT NULL,
  `landing_testimonial_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `landing_testimonials`
--

INSERT INTO `landing_testimonials` (`id`, `landing_testimonial_name`, `landing_testimonial_designation`, `landing_testimonial_paragraph`, `landing_testimonial_image`, `created_at`, `updated_at`) VALUES
(2, 'John Larson', 'Entrepreneur', 'Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster                                 veniam enim                                 culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi                                 cillum                                 quid.', 'upload/landing_testimonial/1762235313010523.jpg', NULL, NULL),
(3, 'Faisal', 'Entrepreneur', 'Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.', 'upload/landing_testimonial/1762235410769811.jpg', NULL, NULL),
(4, 'Saiful', 'Entrepreneur', 'Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa', 'upload/landing_testimonial/1762235448622879.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `management_teams`
--

CREATE TABLE IF NOT EXISTS `management_teams` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `management_teams`
--

INSERT INTO `management_teams` (`id`, `image`, `name`, `designation`, `description`, `created_at`, `updated_at`) VALUES
(1, 'upload/managementTeam/1773011430354009.jpg', 'Demo Name 1', 'CHIEF EXECUTIVE OFFICER', '<p>Mr. M Habibul Basit, a well seasoned professional with an illustrious track record, joined Shanta in October 2015 taking up the role of Chief Executive Officer. Prior to joining, Mr. Basit held the position of Managing Director at Archroma Bangladesh Limited for two years, and Chief Operating Officer of Rahimafrooz Accumulators Limited from November 2008 till January 2013. Before Rahimafrooz Mr. Basit worked in Toronto, Canada for Strip Tech, a company specializing in metal stripping and sand blasting.<br /><br />Mr. Basit worked for Rekitt Benckiser in Bangladesh as a Sales Director from January 1998 to July 2001, before which he worked as a National Sales Manager for New Zealand Milk Products, Bangladesh for a span of 4 years. The start of Mr. Basit&rsquo;s illustrious career was at British American Tobacco, Bangladesh, where he started as a Trainee District Sales Officer in 1985 and went on to become Area Sales &amp; Marketing Manager by 1991.<br /><br />Mr. Basit completed his Masters of Commerce in Marketing from the University of Dhaka, following which he acquired a Post Graduate Diploma in &ldquo;Marketing Management and Physical Distribution&rdquo; from Netherlands International Institute for Executive Development, Holland.</p>', NULL, '2023-08-01 05:37:43'),
(2, 'upload/managementTeam/1773011422397760.jpg', 'Demo Name 2', 'EXECUTIVE DIRECTOR', '<p>Mr. Md. Mujibur Rahman is a seasoned management professional with over 35 years of extensive experience in managing renowned local and multinational organizations.<br /><br />He has been a part of SHL since inception and is currently the Executive Director of Procurement and Legal.</p>', NULL, '2023-08-01 05:37:36'),
(3, 'upload/managementTeam/1771843880360002.jpg', 'Demo Name 3', 'EXECUTIVE DIRECTOR', '<p>Mr. Mir Mahmud Ali Dilip is a stellar real estate professional with a broad experience of over 34 years. His leadership has resulted in numerous signature projects, such as the world class Apollo Hospitals Dhaka, International School Dhaka (ISD), and Delhi Public School, Dhaka. Digonto - the first true condominium of Bangladesh, The Glass House &ndash; The first steel and glass structure and many more.<br /><br />He is currently the Executive Director of the Planning and Coordination team at SHL.</p>', NULL, '2023-07-19 08:20:01'),
(4, 'upload/managementTeam/1771843892889408.jpg', 'Demo Name 4', 'Executive Director, Group Finance', '<p>Mr. M. Anisul Haque is a result oriented finance professional with over 18 years of progressive and diverse accomplishments in renowned local and multinational organizations.<br /><br />He is currently practicing as a Cost and Management Accountant and Consultant and is a Fellow Member (FCMA) of The Institute of Cost and Management Accountants of Bangladesh (ICMAB).</p>', NULL, '2023-07-19 08:20:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_11_165619_create_brands_table', 2),
(6, '2023_03_11_183930_create_categories_table', 3),
(7, '2023_03_11_193217_create_sub_categories_table', 4),
(8, '2023_03_12_065110_create_products_table', 5),
(9, '2023_03_12_065207_create_multi_imgs_table', 5),
(10, '2023_03_12_125307_create_sliders_table', 6),
(11, '2023_03_12_131901_create_banners_table', 7),
(12, '2023_03_13_093520_create_wishlists_table', 8),
(13, '2023_03_13_100536_create_compares_table', 9),
(14, '2023_03_13_105625_create_coupons_table', 10),
(15, '2023_03_13_133204_create_ship_divisions_table', 11),
(16, '2023_03_13_133338_create_ship_districts_table', 11),
(17, '2023_03_13_133432_create_ship_states_table', 11),
(18, '2023_03_14_093851_create_orders_table', 12),
(19, '2023_03_14_094002_create_order_items_table', 12),
(20, '2023_03_16_071811_create_blog_categories_table', 13),
(21, '2023_03_16_072029_create_blog_posts_table', 13),
(22, '2023_03_16_094854_create_reviews_table', 14),
(23, '2023_03_16_122555_create_site_settings_table', 15),
(24, '2023_03_16_124742_create_seos_table', 16),
(25, '2023_03_17_165719_create_permission_tables', 17),
(26, '2023_03_18_144206_create_notifications_table', 18),
(27, '2023_04_02_081551_create_landing_sliders_table', 19),
(28, '2023_04_02_092627_create_landing_abouts_table', 20),
(29, '2023_04_04_043519_create_landing_services_table', 21),
(30, '2023_04_04_051334_create_landing_companies_table', 22),
(31, '2023_04_04_061000_create_landing_teams_table', 23),
(32, '2023_04_04_081935_create_landing_testimonials_table', 24),
(33, '2023_04_06_045948_create_landing_sub_teams_table', 25),
(34, '2023_04_06_050939_create_landing_sub_teams_table', 26),
(35, '2023_06_26_075931_create_our_story_images_table', 27),
(36, '2023_06_26_102921_create_our_stories_table', 28),
(37, '2023_07_03_063812_create_b_o_d_images_table', 29),
(38, '2023_07_03_103237_create_w_o_b_s_table', 30),
(39, '2023_07_03_112028_create_b_o_d_s_table', 31),
(40, '2023_07_09_053758_create_management_teams_table', 32),
(41, '2023_07_09_094235_create_mission_vision_values_table', 33),
(42, '2023_07_11_052439_create_c_s_r_s_table', 34),
(43, '2023_07_11_062123_create_c_s_r_galleries_table', 35);

-- --------------------------------------------------------

--
-- Table structure for table `mission_vision_values`
--

CREATE TABLE IF NOT EXISTS `mission_vision_values` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mission_vision_values`
--

INSERT INTO `mission_vision_values` (`id`, `name`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Vision', 'upload/missionVisionValues/1773008878250020.jpg', '<p><strong>For Our Clients:</strong> To offer a global touch, maintaining Bangladeshi culture in living and work places, with utmost uncompromising service to our clients and value for money.</p>\r\n<p><strong>&nbsp;For Our Investors:</strong> To ensure a smooth upward-reasonable trend of return on investment.</p>\r\n<p><strong>For Our Employees:</strong> To give employees a feeling of satisfaction by maximizing their potentials and providing means for their personal well-being and career development.</p>', NULL, '2023-08-01 04:57:10'),
(2, 'Mission', 'upload/missionVisionValues/1770937466843989.jpg', '<h3 class=\"mission-slogan\">To set SHL as an icon for both clients and competitors in the fields of innovation, product quality, service standard, profitability and community work.</h3>\n<p>&nbsp;</p>', NULL, NULL),
(3, 'Values', 'upload/missionVisionValues/1770937747390804.jpg', '<p>Our vision &amp; mission are being made into reality through the belief and implementation of 6 core values. Excellence, Innovation, Commitment, Quality, Valuing People &amp; Customer Satisfaction are embedded in our DNA and drives toward our motto of &ldquo;setting standards&rdquo;.<br /><br /><strong>Excellence:</strong> Excellence in every aspect of each project is how SHL aims to win the hearts of their clients, because at the end of the day &ndash; home is where the heart is.</p>\r\n<p><br /><strong>Innovation:</strong> Continuous improvement and innovation is key to remaining at the top of the industry. SHL aims to set new standards in each project, so having an innovative mindset is what drives them to go further.</p>\r\n<p><strong>Commitment:</strong> Commitment to their customers and landowners in terms of on-time delivery of their dream projects, with the promised quality and specifications. Commitment to their team members, to maximize their potentials and provide means for their well-being and career development.</p>\r\n<p><strong>Quality:</strong> Quality is the core guiding principle at SHL, it&rsquo;s what sets them apart. They aim to set new benchmarks of quality without compromise, both in terms of their products and their customer service.</p>\r\n<p><strong>Value People:</strong> SHL value the talent, time and intentions of everyone they work with. They take interest in and embrace each other&rsquo;s individuality, stay true to who they are, stand up for what they believe in, and are always mindful of others.</p>\r\n<p><strong>Customer Satisfaction</strong>: Ensuring utmost uncompromising service to the clients and value for money is the key of their loyal customer base.<br /><br /><br /></p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(4, 'App\\Models\\User', 16);

-- --------------------------------------------------------

--
-- Table structure for table `multi_imgs`
--

CREATE TABLE IF NOT EXISTS `multi_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `photo_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_imgs`
--

INSERT INTO `multi_imgs` (`id`, `project_id`, `photo_name`, `created_at`, `updated_at`) VALUES
(1, 17, 'upload/products/multi-image/1772210083232318.jpg', '2023-07-03 02:11:25', '2023-07-23 09:20:40'),
(2, 17, 'upload/products/multi-image/1772210083686814.jpg', '2023-07-03 02:11:29', '2023-07-23 09:20:40'),
(3, 17, 'upload/products/multi-image/1772210083780597.jpg', '2023-07-03 02:11:32', '2023-07-23 09:20:40'),
(4, 17, 'upload/products/multi-image/1772210083892644.jpg', '2023-07-23 04:21:00', '2023-07-23 09:20:40'),
(5, 16, 'upload/products/multi-image/1772211456847943.jpg', '2023-07-23 04:21:00', '2023-07-23 09:42:29'),
(6, 15, 'upload/products/multi-image/1772211844579447.jpg', '2023-07-23 04:21:00', '2023-07-23 09:48:40'),
(7, 15, 'upload/products/multi-image/1772211845294296.jpg', '2023-07-23 04:21:01', '2023-07-23 09:48:40'),
(8, 20, 'upload/products/multi-image/1772191231289636.png', '2023-07-23 04:21:01', NULL),
(9, 21, 'upload/products/multi-image/1772192547775816.png', '2023-07-23 04:41:56', NULL),
(10, 22, 'upload/products/multi-image/1772279299870536.jpg', '2023-07-24 03:40:50', NULL),
(11, 22, 'upload/products/multi-image/1772279300414286.jpg', '2023-07-24 03:40:50', NULL),
(12, 22, 'upload/products/multi-image/1772279300978169.jpg', '2023-07-24 03:40:51', NULL),
(13, 22, 'upload/products/multi-image/1772279301259119.jpg', '2023-07-24 03:40:52', NULL),
(14, 22, 'upload/products/multi-image/1772279303082974.jpg', '2023-07-24 03:40:53', NULL),
(15, 22, 'upload/products/multi-image/1772279303528578.jpg', '2023-07-24 03:40:53', NULL),
(16, 22, 'upload/products/multi-image/1772279303973537.jpg', '2023-07-24 03:40:54', NULL),
(17, 23, 'upload/products/multi-image/1772281365716196.jpg', '2023-07-24 04:13:40', NULL),
(18, 23, 'upload/products/multi-image/1772281365953201.jpg', '2023-07-24 04:13:40', NULL),
(19, 23, 'upload/products/multi-image/1772281366143975.jpg', '2023-07-24 04:13:40', NULL),
(20, 23, 'upload/products/multi-image/1772281366331904.jpg', '2023-07-24 04:13:40', NULL),
(21, 23, 'upload/products/multi-image/1772281366518122.jpg', '2023-07-24 04:13:40', NULL),
(22, 23, 'upload/products/multi-image/1772281366698970.jpg', '2023-07-24 04:13:40', NULL),
(23, 23, 'upload/products/multi-image/1772281366786296.jpg', '2023-07-24 04:13:41', NULL),
(24, 23, 'upload/products/multi-image/1772281366997407.jpg', '2023-07-24 04:13:41', NULL),
(25, 24, 'upload/products/multi-image/1772827330480615.jpg', '2023-07-30 04:51:32', NULL),
(26, 24, 'upload/products/multi-image/1772827330573810.jpg', '2023-07-30 04:51:32', NULL),
(27, 24, 'upload/products/multi-image/1772827330670262.jpg', '2023-07-30 04:51:32', NULL),
(28, 24, 'upload/products/multi-image/1772827330772520.jpg', '2023-07-30 04:51:32', NULL),
(29, 24, 'upload/products/multi-image/1772827330867372.jpg', '2023-07-30 04:51:33', NULL),
(30, 24, 'upload/products/multi-image/1772827331015151.jpg', '2023-07-30 04:51:33', NULL),
(31, 24, 'upload/products/multi-image/1772827331104635.jpg', '2023-07-30 04:51:33', NULL),
(32, 24, 'upload/products/multi-image/1772827331197246.jpg', '2023-07-30 04:51:33', NULL),
(33, 24, 'upload/products/multi-image/1772827331286669.jpg', '2023-07-30 04:51:33', NULL),
(34, 24, 'upload/products/multi-image/1772827331381974.jpg', '2023-07-30 04:51:33', NULL),
(35, 24, 'upload/products/multi-image/1772827331470763.jpg', '2023-07-30 04:51:33', NULL),
(36, 24, 'upload/products/multi-image/1772827331559297.jpg', '2023-07-30 04:51:33', NULL),
(37, 24, 'upload/products/multi-image/1772827331662004.jpg', '2023-07-30 04:51:33', NULL),
(38, 24, 'upload/products/multi-image/1772827331756346.jpg', '2023-07-30 04:51:33', NULL),
(39, 24, 'upload/products/multi-image/1772827331858775.jpg', '2023-07-30 04:51:33', NULL),
(40, 24, 'upload/products/multi-image/1772827331962507.jpg', '2023-07-30 04:51:34', NULL),
(41, 24, 'upload/products/multi-image/1772827332105772.jpg', '2023-07-30 04:51:34', NULL),
(42, 25, 'upload/products/multi-image/1772917983618074.jpg', '2023-07-31 04:52:26', NULL),
(43, 25, 'upload/products/multi-image/1772917983718530.jpg', '2023-07-31 04:52:26', NULL),
(44, 25, 'upload/products/multi-image/1772917983799452.jpg', '2023-07-31 04:52:26', NULL),
(45, 25, 'upload/products/multi-image/1772917984198155.jpg', '2023-07-31 04:52:26', NULL),
(46, 25, 'upload/products/multi-image/1772917984444487.jpg', '2023-07-31 04:52:27', NULL),
(47, 26, 'upload/products/multi-image/1772919872468507.jpg', '2023-07-31 05:22:27', NULL),
(48, 26, 'upload/products/multi-image/1772919872572652.jpg', '2023-07-31 05:22:27', NULL),
(49, 26, 'upload/products/multi-image/1772919872973308.jpg', '2023-07-31 05:22:28', NULL),
(50, 26, 'upload/products/multi-image/1772919873409987.jpg', '2023-07-31 05:22:28', NULL),
(51, 26, 'upload/products/multi-image/1772919873789264.jpg', '2023-07-31 05:22:29', NULL),
(52, 26, 'upload/products/multi-image/1772919874221283.jpg', '2023-07-31 05:22:29', NULL),
(53, 26, 'upload/products/multi-image/1772919874587730.jpg', '2023-07-31 05:22:29', NULL),
(54, 27, 'upload/products/multi-image/1772920278572473.jpg', '2023-07-31 05:28:54', NULL),
(55, 27, 'upload/products/multi-image/1772920278812461.jpg', '2023-07-31 05:28:55', NULL),
(56, 27, 'upload/products/multi-image/1772920278997719.jpg', '2023-07-31 05:28:55', NULL),
(57, 27, 'upload/products/multi-image/1772920279137001.jpg', '2023-07-31 05:28:55', NULL),
(58, 27, 'upload/products/multi-image/1772920279275952.jpg', '2023-07-31 05:28:55', NULL),
(59, 27, 'upload/products/multi-image/1772920279417317.jpg', '2023-07-31 05:28:55', NULL),
(60, 27, 'upload/products/multi-image/1772920279558683.jpg', '2023-07-31 05:28:55', NULL),
(62, 28, 'upload/products/multi-image/1772920613305757.jpg', '2023-07-31 05:34:14', NULL),
(63, 28, 'upload/products/multi-image/1772920613513422.jpg', '2023-07-31 05:34:14', NULL),
(64, 28, 'upload/products/multi-image/1772920613576255.jpg', '2023-07-31 05:34:14', NULL),
(65, 28, 'upload/products/multi-image/1772920613728443.jpg', '2023-07-31 05:34:14', NULL),
(66, 29, 'upload/products/multi-image/1772921237493491.jpg', '2023-07-31 05:44:09', NULL),
(67, 29, 'upload/products/multi-image/1772921237536339.jpg', '2023-07-31 05:44:09', NULL),
(68, 29, 'upload/products/multi-image/1772921237578732.jpg', '2023-07-31 05:44:09', NULL),
(69, 29, 'upload/products/multi-image/1772921237619203.jpg', '2023-07-31 05:44:09', NULL),
(71, 31, 'upload/products/multi-image/1772936901181042.jpg', '2023-07-31 09:51:11', '2023-07-31 09:53:07'),
(73, 31, 'upload/products/multi-image/1772936901244857.jpg', '2023-07-31 09:51:11', '2023-07-31 09:53:07'),
(74, 32, 'upload/products/multi-image/1773017637975499.jpg', '2023-08-01 07:16:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('2d89f903-a4ae-4c1d-a901-bf86f3dc8bb0', 'App\\Notifications\\RegisterUserNotification', 'App\\Models\\User', 16, '{\"message\":\"New User Register In Shop\"}', NULL, '2023-03-18 09:27:13', '2023-03-18 09:27:13'),
('3726ed04-1967-441e-8c10-01e7054a992d', 'App\\Notifications\\VendorApproveNotification', 'App\\Models\\User', 14, '{\"message\":\"Admin Approve Your Account\"}', NULL, '2023-03-18 10:00:40', '2023-03-18 10:00:40'),
('5bd21692-a0de-4a0e-8240-e49d90ba6717', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 16, '{\"message\":\"New Order Added in Shop\"}', NULL, '2023-03-18 09:02:29', '2023-03-18 09:02:29'),
('643aaba3-5e15-4025-bd85-c10e0c2ec46a', 'App\\Notifications\\VendorApproveNotification', 'App\\Models\\User', 18, '{\"message\":\"Admin Approve Your Account\"}', NULL, '2023-03-18 10:00:40', '2023-03-18 10:00:40'),
('67669746-595b-4a28-97cc-a154eaceaf8a', 'App\\Notifications\\RegisterUserNotification', 'App\\Models\\User', 1, '{\"message\":\"New User Register In Shop\"}', NULL, '2023-03-18 09:27:13', '2023-03-18 09:27:13'),
('70c50e24-3168-4485-9598-6b66bdea6754', 'App\\Notifications\\VendorRegNotification', 'App\\Models\\User', 1, '{\"message\":\"New Vendor Request\"}', NULL, '2023-03-18 09:28:22', '2023-03-18 09:28:22'),
('7845ac0a-43b8-4079-901e-1bb76ebbc3ec', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 16, '{\"message\":\"New Order Added in Shop\"}', NULL, '2023-03-18 09:12:14', '2023-03-18 09:12:14'),
('7fef5cd2-b48a-4096-958c-edb598ce4ed2', 'App\\Notifications\\VendorApproveNotification', 'App\\Models\\User', 13, '{\"message\":\"Admin Approve Your Account\"}', NULL, '2023-03-18 10:00:40', '2023-03-18 10:00:40'),
('8a4ffe2a-c765-41f9-ba52-6ee6f2ee76a7', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 1, '{\"message\":\"New Order Added in Shop\"}', NULL, '2023-03-18 09:12:14', '2023-03-18 09:12:14'),
('a2e22ccc-4301-4db8-ace9-5b92e2157e48', 'App\\Notifications\\VendorRegNotification', 'App\\Models\\User', 16, '{\"message\":\"New Vendor Request\"}', NULL, '2023-03-18 09:28:22', '2023-03-18 09:28:22'),
('ae8f03a5-659b-4c5c-87af-369b15f77f2e', 'App\\Notifications\\VendorApproveNotification', 'App\\Models\\User', 12, '{\"message\":\"Admin Approve Your Account\"}', NULL, '2023-03-18 10:00:40', '2023-03-18 10:00:40'),
('b8de3431-5e7e-4ad3-83f0-8abbab70f9ef', 'App\\Notifications\\VendorApproveNotification', 'App\\Models\\User', 2, '{\"message\":\"Admin Approve Your Account\"}', NULL, '2023-03-18 10:00:40', '2023-03-18 10:00:40'),
('db728de9-7135-4759-9cdc-2df813d74f3a', 'App\\Notifications\\OrderComplete', 'App\\Models\\User', 1, '{\"message\":\"New Order Added in Shop\"}', NULL, '2023-03-18 09:02:29', '2023-03-18 09:02:29');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `post_code` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `currency` varchar(255) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `order_number` varchar(255) DEFAULT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `order_month` varchar(255) NOT NULL,
  `order_year` varchar(255) NOT NULL,
  `confirmed_date` varchar(255) DEFAULT NULL,
  `processing_date` varchar(255) DEFAULT NULL,
  `picked_date` varchar(255) DEFAULT NULL,
  `shipped_date` varchar(255) DEFAULT NULL,
  `delivered_date` varchar(255) DEFAULT NULL,
  `cancel_date` varchar(255) DEFAULT NULL,
  `return_date` varchar(255) DEFAULT NULL,
  `return_reason` varchar(255) DEFAULT NULL,
  `return_order` varchar(255) DEFAULT '0',
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `division_id`, `district_id`, `state_id`, `name`, `email`, `phone`, `adress`, `post_code`, `notes`, `payment_type`, `payment_method`, `transaction_id`, `currency`, `amount`, `order_number`, `invoice_no`, `order_date`, `order_month`, `order_year`, `confirmed_date`, `processing_date`, `picked_date`, `shipped_date`, `delivered_date`, `cancel_date`, `return_date`, `return_reason`, `return_order`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 1, 3, 'User', 'user@user.com', '540-025-124553', 'Dhaka, Bangladesh', '1111', NULL, 'card_1MlUlKI9052CIRJPhMryBVZu', 'Stripe', 'txn_3MlUlMI9052CIRJP0NUXlP5s', 'usd', 1145.00, '6410475b15993', 'EOS86781290', '14 March 2023', 'March', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'confirm', '2023-03-14 04:07:25', '2023-03-15 10:39:30'),
(2, 3, 1, 2, 4, 'User', 'user@user.com', '540-025-124553', 'Dhaka, Bangladesh', '1029', 'hi, dfhsdfidshfoae dshfoidashf hoi dihfiasod', 'card_1MlX5KI9052CIRJPxFr2PK9Y', 'Stripe', 'txn_3MlX5MI9052CIRJP1jQc4Aih', 'usd', 631.00, '64106a3a84ee5', 'EOS94705542', '14 March 2023', 'March', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'pending', '2023-03-14 06:36:13', NULL),
(3, 3, 1, 2, 4, 'User', 'user@user.com', '540-025-124553', 'Dhaka, Bangladesh', '1029', 'hi, dfhsdfidshfoae dshfoidashf hoi dihfiasod', 'card_1MlX6xI9052CIRJPsu4vbmYF', 'Stripe', 'txn_3MlX6zI9052CIRJP0qLEEZbL', 'usd', 631.00, '64106a9f9e9f0', 'EOS32391342', '14 March 2023', 'March', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'pending', '2023-03-14 06:37:53', NULL),
(4, 3, 1, 2, 4, 'User', 'user@user.com', '540-025-124553', 'Dhaka, Bangladesh', '12345', 'dsfsdfeasf', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 18000.00, NULL, 'EOS85278118', '14 March 2023', 'March', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'pending', '2023-03-14 06:53:11', NULL),
(5, 3, 1, 2, 4, 'User', 'user@user.com', '540-025-124553', 'Dhaka, Bangladesh', '12345', 'dsfsdfeasf', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 18000.00, NULL, 'EOS29811150', '14 March 2023', 'March', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'pending', '2023-03-14 06:53:42', NULL),
(6, 3, 1, 2, 4, 'User', 'user@user.com', '540-025-124553', 'Dhaka, Bangladesh', '12345', 'dsfsdfeasf', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 18000.00, NULL, 'EOS10470531', '14 March 2023', 'March', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'pending', '2023-03-14 06:54:34', NULL),
(7, 3, 1, 2, 4, 'User', 'user@user.com', '540-025-124553', 'Dhaka, Bangladesh', '12345', 'dsfsdfeasf', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 18000.00, NULL, 'EOS76784577', '14 March 2023', 'March', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'processing', '2023-03-14 06:56:10', '2023-03-15 10:47:00'),
(8, 3, 1, 2, 4, 'User', 'user@user.com', '540-025-124553', 'Dhaka, Bangladesh', '12345', 'dsfsdfeasf', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 18000.00, NULL, 'EOS20401357', '14 March 2023', 'March', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'pending', '2023-03-14 06:56:22', NULL),
(9, 3, 1, 2, 4, 'User', 'user@user.com', '540-025-124553', 'Dhaka, Bangladesh', '12345', 'dsfsdfeasf', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 18000.00, NULL, 'EOS19248719', '14 March 2023', 'March', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'pending', '2023-03-14 06:58:03', NULL),
(10, 3, 1, 2, 4, 'User', 'user@user.com', '540-025-124553', 'Dhaka, Bangladesh', '12345', 'dsfsdfeasf', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 18000.00, NULL, 'EOS66018609', '14 March 2023', 'March', '2023', NULL, NULL, NULL, NULL, NULL, NULL, '15 March 2023', 'Broken Product', '2', 'deliverd', '2023-03-14 07:00:24', '2023-03-15 11:53:15'),
(11, 3, 1, 2, 4, 'User', 'user@user.com', '540-025-124553', 'Dhaka, Bangladesh', '3242', NULL, 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 79999.00, NULL, 'EOS31951204', '14 March 2023', 'March', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'deliverd', '2023-03-14 07:03:15', '2023-03-15 10:27:30'),
(12, 3, 1, 2, 4, 'User', 'user@user.com', '540-025-124553', 'Dhaka, Bangladesh', '3242', NULL, 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 0.00, NULL, 'EOS11756579', '14 March 2023', 'March', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'pending', '2023-03-14 07:05:29', NULL),
(13, 3, 1, 2, 4, 'User', 'user@user.com', '540-025-124553', 'Dhaka, Bangladesh', '1223', 'fdgdafgdfdasf dsfdsfdsfsd', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 630.00, NULL, 'EOS13954370', '14 March 2023', 'March', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'deliverd', '2023-03-14 07:09:09', '2023-03-15 10:28:34'),
(14, 3, 1, 1, 2, 'User', 'user@user.com', '540-025-124553', 'Dhaka, Bangladesh', '11111', 'test', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 201.00, NULL, 'EOS99172942', '15 March 2023', 'March', '2023', NULL, NULL, NULL, NULL, NULL, NULL, '15 March 2023', 'Bad Product', '1', 'deliverd', '2023-03-15 08:29:19', '2023-03-15 11:17:59'),
(15, 3, 1, 1, 2, 'User', 'user@user.com', '540-025-124553', 'Dhaka, Bangladesh', '1028', 'Hi, I\'m buying this wonderful product of yours. I hope, it will be awesome.', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 370.00, NULL, 'EOS63692104', '15 March 2023', 'March', '2023', NULL, NULL, NULL, NULL, NULL, NULL, '15 March 2023', 'Very Bad Product.', '2', 'deliverd', '2023-03-15 12:04:05', '2023-03-15 12:21:48'),
(16, 3, 1, 2, 5, 'User', 'user@user.com', '540-025-124553', 'Dhaka, Bangladesh', '36546', 'gsfghgh', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 500.00, NULL, 'EOS81878844', '15 March 2023', 'March', '2023', NULL, NULL, NULL, NULL, NULL, NULL, '15 March 2023', 'Not Happy', '1', 'deliverd', '2023-03-15 12:17:25', '2023-03-15 12:19:38'),
(17, 3, 1, 2, 4, 'User', 'user@user.com', '540-025-124553', 'Dhaka, Bangladesh', '1029', NULL, 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 559993.00, NULL, 'EOS49823553', '16 March 2023', 'March', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'deliverd', '2023-03-16 07:47:31', '2023-03-16 07:49:11'),
(18, 3, 1, 2, 4, 'User', 'user@user.com', '540-025-124553', 'Dhaka, Bangladesh', '1029', 'dsfdsf', 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 201.00, NULL, 'EOS74531231', '18 March 2023', 'March', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'pending', '2023-03-18 09:02:23', NULL),
(19, 3, 1, 1, 1, 'User', 'user@user.com', '540-025-124553', 'Dhaka, Bangladesh', '1111', NULL, 'Cash On Delivery', 'Cash On Delivery', NULL, 'Usd', 350.00, NULL, 'EOS44109414', '18 March 2023', 'March', '2023', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'pending', '2023-03-18 09:12:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE IF NOT EXISTS `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `qty` varchar(255) NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_items_order_id_foreign` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `vendor_id`, `color`, `size`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, 'Red', 'Small', '1', 500.00, '2023-03-14 04:07:25', NULL),
(2, 1, 6, NULL, 'Black', '6.55 inches', '1', 529.00, '2023-03-14 04:07:25', NULL),
(3, 1, 5, '12', 'Red', 'Midium', '2', 201.00, '2023-03-14 04:07:25', NULL),
(4, 3, 1, '2', 'Red', 'Small', '1', 500.00, '2023-03-14 06:37:59', NULL),
(5, 3, 2, NULL, 'Red', 'Small', '1', 201.00, '2023-03-14 06:37:59', NULL),
(6, 3, 5, '12', 'Red', 'Small', '1', 201.00, '2023-03-14 06:37:59', NULL),
(7, 10, 10, '13', 'Antique', 'L-800 x W-760 x H-695MM ( 300MM= 1Feet)', '1', 18000.00, '2023-03-14 07:00:30', NULL),
(8, 11, 8, NULL, 'Ceramic White', '6.73 inches', '1', 79999.00, '2023-03-14 07:03:23', NULL),
(9, 13, 7, '12', 'White', '6.36 inches', '1', 900.00, '2023-03-14 07:09:14', NULL),
(10, 14, 2, NULL, 'Red', 'Small', '1', 201.00, '2023-03-15 08:29:24', NULL),
(11, 15, 6, '2', 'Black', '6.55 inches', '1', 529.00, '2023-03-15 12:04:10', NULL),
(12, 16, 1, '2', 'Red', 'Small', '1', 500.00, '2023-03-15 12:17:30', NULL),
(13, 17, 8, NULL, 'Ceramic Black', '6.73 Inches', '10', 79999.00, '2023-03-16 07:47:36', NULL),
(14, 18, 5, '12', 'Black', 'Small', '1', 201.00, '2023-03-18 09:02:28', NULL),
(15, 19, 1, '2', '11', 'Small', '1', 500.00, '2023-03-18 09:12:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `our_stories`
--

CREATE TABLE IF NOT EXISTS `our_stories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_stories`
--

INSERT INTO `our_stories` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Background', '<p class=\"MsoNormal\">3D Homes started its journey in 1988 in the ready-made garment (RMG) sector and became one of the forerunners in RMG export by establishing leading industries such as 3D Homes Garments Ltd, 3D Homes Industries Ltd, 3D Homes Washworks Ltd, GDS Chemicals Ltd and 3D Homes Denims Ltd. Earning a solid reputation as an important vendor for some of the most renowned apparel brands of USA and Europe.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">3D Homes is also a key founding member and majority stakeholder of the STS Group - the promoter of the world-class Evercare Hospitals Dhaka (previously Apollo Hospital) and Chattogram, International School Dhaka (ISD), Glenrich International School, Universal College Bangladesh (UCB) and the Delhi Public Schools, Dhaka. Moreover, 3D Homes Securities Ltd., 3D Homes Asset Management Ltd. and 3D Homes Equity Ltd. were established in 2015 with the aim of setting higher standards in financial market.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">3D Homes has a long track record of construction since 1991, having been involved in various projects of its own and of the STS Group. It has built the iconic Safura Tower- the 16 storied commercial landmark at Banani, the 200,000 sft multi-facility centrally air conditioned International School Dhaka (ISD) at Bashundhara, the 125,000 sft Delhi Public School at Uttara, state-of-the-art RMG factories such as its 150,000 sft 3D Homes Industries Ltd, the 150,000 sft 3D Homes Denims Ltd and the 35,000 sft 3D Homes Washworks Ltd at Dhaka EPZ. Furthermore, the team was also involved in the construction of Apollo Hospitals Dhaka - the 550,000 sft first multi-disciplinary super-specialty hospital of the country.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Eventually exiting the RMG sector and dissolving it\'s interests to pursue the passion for construction, 3D Homes Holdings Limited (SHL) was established in 2005 with a mission to change the lifestyle of city dwellers by providing modern, functional and aesthetic living and working spaces that can only be compared to the most successful developers of the globe.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">With the belief that construction is not just about building structures - but an Art, SHL goes beyond the traditional scopes of property development and integrates the best the world has to offer. Since then, SHL has emerged as the most reputed and fastest growing real estate developer of the country.</p>\r\n<p>&nbsp;</p>', 'upload/our_story/1771843576426479.png', NULL, '2023-07-19 08:15:12'),
(2, 'Who we are', '<p>A powerful portfolio of the country&rsquo;s most distinctive and selective developments, with an excellent reputation in the Real Estate market, and enviable relationships that give our clients exclusive access to the ultimate in luxury apartments and exquisite commercial spaces, all in prime locations of Dhaka city.<br />&nbsp;<br />Our promise remains to develop a portfolio of luxury spaces and offer investors as well as buyers an unparalleled quality of service, inimitable by competitors. &nbsp;It is the commitment to both impeccably high standards and attention to detail that drive us to our success.<br /><br />Besides building beyond expectation, SHL moreover sets standards for itself, for you and for others, which is why we proudly declare our driving philosophy to be \"Setting Standards\".</p>', 'upload/our_story/1771843598319833.png', NULL, '2023-07-19 08:15:32'),
(3, 'Our Approach', '<p>Acquiring an apartment, a home or even an office space is a person\'s life-long dream. This dream drives him or her to accumulate the required finance slowly and gradually, which is the start of shaping this dream into reality. This relentless pursuit of realizing such a dream can flow from generation to generation. But finally when a space is purchased, has anyone thought to what extent this &ldquo;dream&rdquo; is actually fulfilled?<br /><br />We know that moment is an important stepping-stone for you, and hence we at Shanta Holdings have been preparing for just that. Our apartments, condominiums and commercial complexes compete with the best that the modern world has to offer. From temperature-controlled swimming pools to lush rooftop gardens and terraces, from state-of-the-art gymnasiums to spacious walkways and children&rsquo;s play facilities, you&rsquo;ll find the solution to your need for stylish urban living with us at Shanta.<br /><br />Even business becomes pleasure in our exquisite commercial spaces with central air-conditioning, triple height lobby areas, multilayered parking facilities, and much more. Show the world you&rsquo;ve arrived, by owning your own little piece of luxury.</p>', 'upload/our_story/1770852147742401.jpg', NULL, '2023-07-08 05:36:51'),
(4, 'Our Logo', '<p>The concept for our logo is derived from the shape of human hands, the shape they make when held with the palms facing each other.<br /><br />Usually, when we hold an object in our palms, it is something we care about, something valuable to us. Like when a blow of air attempts to put off a candle that gives us light, we protect it with our palms. When a tiny bird falls from its nest, we hold it up and protect it in our palms. When a sculptor sculpts a masterpiece, he shapes it using his fingers and palms. Hence, our logo depicts the amount of care and emotion we put into each and every creation.<br /><br />Moreover, it is a symbol that inspires us on a daily basis to be caring towards our clients and protect their interests by providing an uncompromising level of service and superior products.</p>', 'upload/our_story/1771843644338219.jpg', NULL, '2023-07-19 08:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `our_story_images`
--

CREATE TABLE IF NOT EXISTS `our_story_images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `background_image` varchar(255) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_story_images`
--

INSERT INTO `our_story_images` (`id`, `background_image`, `page_name`, `created_at`, `updated_at`) VALUES
(1, 'upload/our_story/1773003463646128.png', 'Our Story', NULL, '2023-08-01 03:31:06'),
(2, 'upload/our_story/1771843373964903.png', 'Vision, Mission & Values', NULL, '2023-07-19 08:11:58'),
(3, 'upload/our_story/1771843387472545.png', 'Board of Directors', NULL, '2023-07-19 08:12:12'),
(4, 'upload/our_story/1771843403333234.png', 'Management Team', NULL, '2023-07-19 08:12:27'),
(5, 'upload/our_story/1771843434045284.png', 'Companies', NULL, '2023-07-19 08:12:56'),
(6, 'upload/our_story/1770931571014846.jpeg', 'Our Clients', NULL, '2023-07-09 02:39:16'),
(7, 'upload/our_story/1771843973767638.png', 'CSR', NULL, '2023-07-19 08:21:31'),
(8, 'upload/our_story/1771843527978311.png', 'Career', NULL, '2023-07-19 08:14:25'),
(9, 'upload/our_story/1772117157944903.png', 'Contact', NULL, NULL),
(10, 'upload/our_story/1772193707578968.png', 'Ongoing', NULL, NULL),
(11, 'upload/our_story/1772193795112939.png', 'Upcoming', NULL, NULL),
(12, 'upload/our_story/1772193894442909.png', 'Completed', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'brand.menu', 'web', 'brand', '2023-03-17 11:43:11', '2023-03-17 11:43:11'),
(2, 'brand.list', 'web', 'brand', '2023-03-17 11:48:19', '2023-03-17 11:48:19'),
(3, 'brand.add', 'web', 'brand', '2023-03-17 11:58:11', '2023-03-17 11:58:11'),
(4, 'brand.edit', 'web', 'brand', '2023-03-17 12:01:22', '2023-03-17 12:01:22'),
(5, 'brand.delete', 'web', 'brand', '2023-03-17 12:01:36', '2023-03-17 12:01:36'),
(6, 'cat.menu', 'web', 'category', '2023-03-17 12:03:33', '2023-03-17 12:03:33'),
(7, 'category.list', 'web', 'category', '2023-03-17 12:03:49', '2023-03-17 12:03:49'),
(8, 'category.add', 'web', 'category', '2023-03-17 12:04:04', '2023-03-17 12:04:04'),
(9, 'category.edit', 'web', 'category', '2023-03-17 12:04:18', '2023-03-17 12:04:18'),
(10, 'category.delete', 'web', 'category', '2023-03-17 12:04:33', '2023-03-17 12:04:33'),
(11, 'subcategory.menu', 'web', 'subcategory', '2023-03-17 12:05:55', '2023-03-17 12:05:55'),
(12, 'subcategory.list', 'web', 'subcategory', '2023-03-17 12:06:56', '2023-03-17 12:06:56'),
(13, 'subcategory.add', 'web', 'subcategory', '2023-03-17 12:07:17', '2023-03-17 12:07:17'),
(14, 'subcategory.edit', 'web', 'subcategory', '2023-03-17 12:07:31', '2023-03-17 12:07:31'),
(15, 'subcategory.delete', 'web', 'subcategory', '2023-03-17 12:07:47', '2023-03-17 12:07:47'),
(16, 'product.menu', 'web', 'product', '2023-03-17 12:08:13', '2023-03-17 12:08:13'),
(17, 'product.list', 'web', 'product', '2023-03-17 12:08:31', '2023-03-17 12:08:31'),
(18, 'product.add', 'web', 'product', '2023-03-17 12:08:47', '2023-03-17 12:08:47'),
(19, 'product.edit', 'web', 'product', '2023-03-17 12:09:05', '2023-03-17 12:09:05'),
(20, 'product.delete', 'web', 'product', '2023-03-17 12:09:21', '2023-03-17 12:09:21'),
(21, 'slider.menu', 'web', 'slider', '2023-03-17 12:09:39', '2023-03-17 12:09:39'),
(22, 'slider.list', 'web', 'slider', '2023-03-17 12:10:00', '2023-03-17 12:10:00'),
(23, 'slider.add', 'web', 'slider', '2023-03-17 12:10:19', '2023-03-17 12:10:19'),
(24, 'slider.edit', 'web', 'slider', '2023-03-17 12:10:41', '2023-03-17 12:10:41'),
(25, 'slider.delete', 'web', 'slider', '2023-03-17 12:11:48', '2023-03-17 12:11:48'),
(26, 'ads.menu', 'web', 'ads', '2023-03-17 12:12:04', '2023-03-17 12:12:04'),
(27, 'ads.list', 'web', 'ads', '2023-03-17 12:12:21', '2023-03-17 12:12:21'),
(28, 'ads.add', 'web', 'ads', '2023-03-17 12:12:36', '2023-03-17 12:12:36'),
(29, 'ads.edit', 'web', 'ads', '2023-03-17 12:12:52', '2023-03-17 12:12:52'),
(30, 'ads.delete', 'web', 'ads', '2023-03-17 12:13:09', '2023-03-17 12:13:09'),
(31, 'coupon.menu', 'web', 'coupon', '2023-03-17 12:14:12', '2023-03-17 12:14:12'),
(32, 'coupon.list', 'web', 'coupon', '2023-03-17 12:15:29', '2023-03-17 12:15:29'),
(33, 'coupon.add', 'web', 'coupon', '2023-03-17 12:15:52', '2023-03-17 12:15:52'),
(34, 'coupon.edit', 'web', 'coupon', '2023-03-17 12:16:07', '2023-03-17 12:16:07'),
(35, 'coupon.delete', 'web', 'coupon', '2023-03-17 12:16:32', '2023-03-17 12:16:32'),
(36, 'area.menu', 'web', 'area', '2023-03-17 12:18:46', '2023-03-17 12:18:46'),
(37, 'vendor.menu', 'web', 'vendor', '2023-03-17 12:19:03', '2023-03-17 12:19:03'),
(38, 'order.menu', 'web', 'order', '2023-03-17 12:19:20', '2023-03-17 12:19:20'),
(39, 'order.list', 'web', 'order', '2023-03-17 12:19:35', '2023-03-17 12:19:35'),
(40, 'order.edit', 'web', 'order', '2023-03-17 12:20:40', '2023-03-17 12:20:40'),
(41, 'order.delete', 'web', 'order', '2023-03-17 12:21:01', '2023-03-17 12:21:01'),
(42, 'return.order.menu', 'web', 'return', '2023-03-17 12:21:28', '2023-03-17 12:21:28'),
(43, 'user.management.menu', 'web', 'user', '2023-03-17 12:21:48', '2023-03-17 12:21:48'),
(44, 'review.menu', 'web', 'review', '2023-03-17 12:22:06', '2023-03-17 12:22:06'),
(45, 'blog.menu', 'web', 'blog', '2023-03-17 12:22:29', '2023-03-17 12:22:29'),
(46, 'site.menu', 'web', 'setting', '2023-03-17 12:22:59', '2023-03-17 12:22:59'),
(47, 'role.permission.menu', 'web', 'role', '2023-03-17 12:23:16', '2023-03-17 12:23:16'),
(48, 'admin.user.menu', 'web', 'admin', '2023-03-17 12:23:35', '2023-03-17 12:23:35'),
(49, 'stock.menu', 'web', 'stock', '2023-03-17 12:23:52', '2023-03-17 12:23:52'),
(51, 'report.menu', 'web', 'report', '2023-03-17 15:00:02', '2023-03-17 15:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_name` varchar(255) NOT NULL,
  `project_slug` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `project_address` varchar(255) NOT NULL,
  `project_category` varchar(255) NOT NULL,
  `project_video` varchar(400) NOT NULL,
  `project_glance` longtext NOT NULL,
  `features` longtext NOT NULL,
  `product_thambnail` varchar(400) NOT NULL,
  `first_image` varchar(400) NOT NULL,
  `feature_image` varchar(400) NOT NULL,
  `project_status` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `project_name`, `project_slug`, `status`, `created_at`, `updated_at`, `project_address`, `project_category`, `project_video`, `project_glance`, `features`, `product_thambnail`, `first_image`, `feature_image`, `project_status`) VALUES
(15, 'Antora', 'antora', 1, '2023-07-19 10:30:49', '2023-07-23 09:46:26', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Residential', '#!', '• Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n<br><br>\n• Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n<br><br>\n• Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n<br><br>\n• Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n<br><br>\n• Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n<br><br>\n• Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n<br><br>\n• Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n<br><br>\n• Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n<br><br>\n• Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n<br><br>\n• Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '• Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n<br><br>\n• Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n<br><br>\n• Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n<br><br>\n• Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n<br><br>\n• Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n<br><br>\n• Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n<br><br>\n• Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n<br><br>\n• Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n<br><br>\n• Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n<br><br>\n• Lorem Ipsum is simply dummy text of the printing and typesetting industry.\n', 'upload/products/thambnail/1772211704789238.jpg', 'upload/products/thambnail/1771852165850649.jpg', 'upload/products/thambnail/1772194425362659.jpg', 'Completed'),
(16, 'Rose Garden', 'rose_garden', 1, '2023-07-03 02:08:21', '2023-07-19 10:29:39', '1057, EAST SHEWRAPARA', 'Residential', '#!', '• Architect: Mozaharul Islam\n<br><br>\n• Land Area: 15 Kathas\n<br><br>\n• Orientation of the Land: South-West Facing\n<br><br>\n• Specialty of the Plot: Park Side Corner Plot\n<br><br>\n• Front Road Width: 30 Feet and 15 Feet\n<br><br>\n• Number of Floors: G + 6\n<br><br>\n• Number of Apartments: 30\n<br><br>\n• Size of Units: 1620,1550,1350, 910 sft (approx.)\n<br><br>\n• Number of Car Parking: 29\n<br><br>\n• Architect: Mozaharul Islam\n<br><br>\n• Land Area: 15 Kathas\n<br><br>\n• Orientation of the Land: South-West Facing\n<br><br>\n• Specialty of the Plot: Park Side Corner Plot\n<br><br>\n• Front Road Width: 30 Feet and 15 Feet\n<br><br>\n• Number of Floors: G + 6\n<br><br>\n• Number of Apartments: 30\n<br><br>\n• Size of Units: 1620,1550,1350, 910 sft (approx.)\n<br><br>\n• Number of Car Parking: 29', '• Beautiful Entrance\n<br><br>\n• Elegant Reception and Waiting Lounge\n<br><br>\n• Fully Equipped State-of-the-Prayer room\n<br><br>\n• Elegantly Furnished Party Room\n<br><br>\n• 8 Person 2 Lift\n<br><br>\n• Lush Green Lawn\n<br><br>\n• Children\'s Play Area\n<br><br>\n• Professional Landscaping and Lighting\n<br><br>\n• Management Office\n<br><br>\n• Car Parking with Ventilation System\n<br><br>\n• Waiting Room', 'upload/products/thambnail/1771851993508987.jpg', 'upload/products/thambnail/1771852028170556.jpg', 'upload/products/thambnail/1771852035697514.jpg', 'upcomming'),
(22, 'Noor Empire', 'noor-empire', 1, '2023-07-24 04:28:02', '2023-07-24 04:28:02', '461/1,2,3 PAIKPARA, MIRPUR, DHAKA', 'Residential', '#!', '• Land Area: 15 kathas\n<br><br>\n• Architect: Ar. M. Mahbubur Rashid\n<br><br>\n• Orientation of the Land : North-East  Corner Plot\n<br><br>\n• Front Road: 30 feet  & 15 feet wide\n<br><br>\n• Number of Floor’s :B + G + 9\n<br><br>\n• Number of Apartments: Two Tower (36+36)= 72 Aprt.\n<br><br>\n• Size of Units:  1175,1200,1240,1257,1265,1270, 1339sft\n<br><br> \n• Lift Facilities :  4 Lift (8 Person)\n<br><br>            \n• Number of Car Parking: 52', '• Ground floor fully Interior Decorated\n<br><br>\n• Reception & Waiting Lounge\n<br><br>\n• Round The Clock Security\n<br><br>\n• Driver Rest Room\n<br><br>\n• Fully Under CCTV Coverage\n<br><br> \n• Gymnasium\n<br><br>\n• Multipurpose Hall\n<br><br>\n• Building Management Office\n<br><br>\n• Prayer Room\n<br><br>\n• Game Zone\n<br><br> \n• BBQ Area\n<br><br>\n• Party Area (with Kitchen & Wash Room)\n<br><br>\n• Natural Ventilation\n<br><br>\n• Well Casting With Decorative Pavement Tiles\n<br><br>\n• Cloth Lines For Drying In Separated Area\n<br><br>\n• Organized Kitchen With Cooking Facilities\n<br><br>\n• Aesthetic Beauty & Relaxing\n<br><br>\n• Proper Utilization of  Natural Elements Like Air ,Light etc\n<br><br>\n• Bank Loan Facilities/Support are Available Client Service\n', 'upload/products/thambnail/2.jpg', 'upload/products/thambnail/2.jpg', 'upload/products/thambnail/1772279299599744.jpg', 'Ongoing'),
(23, 'Chayaneer', 'chayaneer', 1, '2023-07-24 04:22:50', '2023-07-24 04:22:50', '32, Middle Paikpara, Mirpur, Dhaka-1216', 'Residential', '#!', '• Land Area: 4 kathas\n<br> \n<br>\n• Architect: Nasrin Akter\n<br> \n<br>\n• Orientation of the Land: South-West Corner plot\n<br> \n<br>\n• Front Road: 20 feet  & 15 feet wide\n<br> \n<br>\n• Number of floor’s : G + 6\n<br>\n<br> \n• Number of Apartments: 12\n<br>\n<br> \n• Size of Units: 1100, 1070 sft (approx.)\n<br>\n<br>\n• Number of Car Parking: 5', '<p>&bull; Beautiful Entry<br /><br />&bull; Elegant Reception &amp; Waiting Room<br /><br />&bull; Seating at Rooftop<br /><br />&bull; Rooftop Party Space<br /><br />&bull; Management Office<br /><br />&bull; Car Parking with Ventilation System</p>', 'upload/products/thambnail/1772281364288499.jpg', 'upload/products/thambnail/1772281365538948.jpg', 'upload/products/thambnail/1772281365652407.jpg', 'Completed'),
(24, 'Dewdrop', 'dewdrop', 1, '2023-07-30 04:51:32', NULL, '@ 461, 461-1/2/3, Paikpara, Kallyanpur, Mirpur, Dhaka', 'Residential', '#!', '• Architect: Nasrin Akter\n<br><br>\n• Land Area: 4 kathas (approx.)\n<br><br>\n• Orientation of the Land: North-East Corner plot\n<br><br>\n• Front Road: 15 feet  & 10 feet wide\n<br><br>\n• Number of Apartments: 12\n<br><br>\n• Size of Units: 1150 sft (approx.)\n<br><br>\n• Number of Car Parking: 6', '• Beautiful Entry\n<br><br>\n• Elegant Reception \n<br><br>\n• Seating at Rooftop\n<br><br>\n• Rooftop Party Space\n<br><br>\n• Management Office\n<br><br>\n• Car Parking with Ventilation System\n<br><br>\n• Waiting Room', 'upload/products/thambnail/1772827328161111.jpg', 'upload/products/thambnail/1772827329706874.jpg', 'upload/products/thambnail/1772827329979684.jpg', 'Ongoing'),
(25, 'Baitul Aman', 'baitul-aman', 1, '2023-07-31 04:52:26', NULL, '97, KALLYANPUR NATUNBAZAR, DHAKA', 'Residential', '#!', '• Land Area: 3.5 Kathas\n<br><br>\n• Architect: Md Mashiur Rahman Khan\n<br><br>\n• Orientation of the Land: North Facing\n<br><br>\n• Front Road: 25 feet\n<br><br> \n• Number of floor’s : G + 6\n<br><br>\n• Number of Apartments: 12\n<br><br>\n• Size of Units: 1025 sft\n<br><br>\n• Number of Car Parking: 6', '• Beautiful Entrance\n<br><br>\n• Elegant Reception\n<br><br> \n• Prayer Room\n<br><br>\n• Elegantly Furnished Party Room\n<br><br>\n• Lush Green Lawn\n<br><br>\n• Roof Seating Space\n<br><br> \n• Professional Landscaping and Lighting Management Office\n<br><br>\n• Car Parking with Ventilation System', 'upload/products/thambnail/1772917981565025.jpg', 'upload/products/thambnail/1772917982830693.jpg', 'upload/products/thambnail/1772917983243233.jpg', 'Completed'),
(26, 'Tulip', 'tulip', 1, '2023-07-31 05:22:27', NULL, 'PLOT# 23,25 LANE#17, AVENUE#5 MIRPUR, DHAKA.', 'Residential', '#!', '• Land Area: 3.5 Khatas\n<br><br>\n• Architect: Nasrin Akter\n<br><br>\n• Orientation of the Land: North Facing\n<br><br>\n• Front Road: 40 Feet\n<br><br>\n• Number of floor’s : G 6\n<br><br>\n• Number of Apartments: 24\n<br><br>\n• Size of Units: 650,670 sft\n<br><br>\n• Number of Car Parking: 6\n<br><br>\n• Number of Lift 1 Lift 8 Person', '• Beautiful Entrance\n<br><br>\n• Elegant Reception\n<br><br> \n• Elegantly Furnished Party Room\n<br><br>\n• Lush Green Lawn\n<br><br>\n• Childrens Play Area\n<br><br>\n• Roof Seatting Space\n<br><br>\n• Management Office\n<br><br>\n• Car Parking with Ventilition System\n<br><br>\n• Waiting Room', 'upload/products/thambnail/1772919870471022.jpg', 'upload/products/thambnail/1772919871791599.jpg', 'upload/products/thambnail/1772919872236915.jpg', 'Ongoing'),
(27, 'Taruchaya', 'taruchaya', 1, '2023-07-31 05:28:54', NULL, '225, BAROBAGH BAZER, MIRPUR-10, DHAKA', 'Residential', '#!', '• Land Area: 3.5 Kathas\n<br><br>\n• Architect: Md Mashiur Rahman Khan\n<br><br>\n• Orientation of the Land: East Facing\n<br><br>\n• Front Road: 20 feet\n<br><br> \n• Number of floor’s : G + 6\n<br><br>\n• Number of Apartments: 12\n<br><br>\n• Size of Units: 1260,907 sft\n<br><br>\n• Number of Car Parking: 6', '• Beautiful Entrance\n<br><br>\n• Elegant Reception\n<br><br> \n• Prayer Room\n<br><br>\n• Elegantly Furnished Party Room\n<br><br>\n• Lush Green Lawn\n<br><br>\n• Roof Seating Space\n<br><br> \n• Professional Landscaping and Lighting Management Office\n<br><br>\n• Car Parking with Ventilation System', 'upload/products/thambnail/1772920278061570.jpg', 'upload/products/thambnail/1772920278267013.jpg', 'upload/products/thambnail/1772920278358941.jpg', 'Ongoing'),
(28, 'Primerose', 'primerose', 1, '2023-07-31 05:34:13', NULL, 'PLOT# 12, ROAD#3, SECTOR#7, UTTARA, DHAKA.', 'Residential', '#!', '• Architect: Nasrin Akter\n<br><br>\n• Land Area: 4.5 kathas\n<br><br>\n• Orientation of the Land: South Facing\n<br><br>\n• Front Road: 30 feet wide\n<br><br>\n• Number of Apartments: 12\n<br><br>\n• Size of Units: 1190, 2380 sft (approx.)\n<br><br>\n• Number of Car Parking: 6', '• Beautiful Entry\n<br><br>\n• Elegant Reception \n<br><br>\n• Seating at Rooftop\n<br><br>\n• Rooftop Party Space\n<br><br>\n• Management Office\n<br><br>\n• Car Parking with Ventilation System\n<br><br>\n• Waiting Room', 'upload/products/thambnail/1772920612948604.jpg', 'upload/products/thambnail/1772920613065870.jpg', 'upload/products/thambnail/1772920613185615.jpg', 'Ongoing'),
(29, 'Maya', 'maya', 1, '2023-07-31 05:44:09', NULL, 'PLOT#25, BLOCK C, KHILGAON,DHAKA.', 'Residential', '#!', '• Architect: Mozharul Islam\n<br><br>\n• Land Area: 4 Kathas\n<br><br>\n• Orientation of the Land:West Facing\n<br><br>\n• Front Road Width: 30 Feet and\n<br><br> \n• Number of Floors: G + 8\n<br><br>\n• Number of Apartments: 8\n<br><br>\n• Size of Units: 1900,2150 sft (approx.)\n<br><br>\n• Number of Car Parking: 8', '• Beautiful Entrance\n<br><br>\n• Elegant Reception and Waiting Lounge\n<br><br>\n• Fully Equipped State-of-the-Prayer room\n<br><br>\n• Elegantly Furnished Party Room\n<br><br>\n• 8 Person 2 Lift\n<br><br>\n• Lush Green Lawn\n<br><br>\n• Children\'s Play Area\n<br><br>\n• Professional Landscaping and Lighting\n<br><br>\n• Management Office\n<br><br>\n• Car Parking with Ventilation System\n<br><br>\n• Waiting Room', 'upload/products/thambnail/1772921236778352.jpg', 'upload/products/thambnail/1772921236998275.jpg', 'upload/products/thambnail/1772921237224175.jpg', 'Ongoing'),
(30, 'Shefaly', 'shefaly', 1, '2023-07-19 07:59:41', '2023-07-19 10:15:21', 'ROAD NO: 8, PLOT NO: 1, KALLYANPUR', 'Residential', '#!', '• Architect: Md. Mashiur Rahman Khan\n<br><br>\n• Land Area: 5 Kathas\n<br><br>\n• Orientation of the Land: South Facing\n<br><br>\n• Specialty of the Plot: 2 Side Open Plot\n<br><br>\n• Front Road Width: 20 Feet\n<br><br>\n• Number of Floors: G + 7\n<br><br>\n• Number of Apartments: 14\n<br><br>\n• Size of Units: 1325 - 1210 sft (approx.)\n<br><br>\n• Ground Floor Car Parking: 08', '• Beautiful Entrance\n<br><br>\n• Reception and Waiting Lounge\n<br><br>\n• Elegantly Furnished Party Room\n<br><br>\n• Lush Green Lawn\n<br><br>\n• Professional Landscaping and Lighting\n<br><br>\n• Management Office\n<br><br>\n• Car Parking with Ventilation System\n<br><br>\n• Waiting Room', 'upload/products/thambnail/1771851107395722.jpg', 'upload/products/thambnail/1771851125488073.jpg', 'upload/products/thambnail/1771851136571886.jpg', 'ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `vendor_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reviews_product_id_foreign` (`product_id`),
  KEY `reviews_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', 'web', '2023-03-17 14:43:50', '2023-03-17 14:43:50'),
(2, 'Admin', 'web', '2023-03-17 14:44:07', '2023-03-17 14:44:07'),
(3, 'CEO', 'web', '2023-03-17 14:44:22', '2023-03-17 14:44:22'),
(4, 'Account', 'web', '2023-03-17 14:44:41', '2023-03-17 14:44:41');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 4),
(2, 1),
(2, 4),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(16, 2),
(16, 3),
(17, 1),
(17, 2),
(17, 3),
(18, 1),
(18, 2),
(19, 1),
(19, 2),
(19, 3),
(20, 1),
(20, 2),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(26, 2),
(27, 1),
(27, 2),
(28, 1),
(28, 2),
(29, 1),
(29, 2),
(30, 1),
(30, 2),
(31, 1),
(31, 2),
(32, 1),
(32, 2),
(33, 1),
(33, 2),
(34, 1),
(34, 2),
(35, 1),
(35, 2),
(36, 1),
(36, 2),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(42, 3),
(43, 1),
(44, 1),
(44, 3),
(45, 1),
(45, 4),
(46, 1),
(46, 3),
(47, 1),
(48, 1),
(49, 1),
(49, 4),
(51, 1),
(51, 3),
(51, 4);

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE IF NOT EXISTS `seos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_author` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `meta_title`, `meta_author`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'sqube ecommerce', 'Sqube Group', 'best online shop, best tshirt, best shop', 'Bangladesh\'s best online shopping store with 17+ million products at resounding discounts in dhaka, ctg & All across Bangladesh with cash on delivery (COD)', NULL, '2023-03-16 07:06:17');

-- --------------------------------------------------------

--
-- Table structure for table `ship_districts`
--

CREATE TABLE IF NOT EXISTS `ship_districts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_districts`
--

INSERT INTO `ship_districts` (`id`, `division_id`, `district_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Faridpur', NULL, NULL),
(2, 1, 'Gazipur', NULL, NULL),
(3, 1, 'Gopalganj', NULL, NULL),
(4, 2, 'Comilla', NULL, NULL),
(5, 2, 'Cox\'s Bazar', NULL, NULL),
(6, 2, 'Lakshmipur', NULL, NULL),
(7, 2, 'Noakhali', NULL, NULL),
(8, 3, 'Kushtia', NULL, NULL),
(9, 3, 'Magura', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ship_divisions`
--

CREATE TABLE IF NOT EXISTS `ship_divisions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `division_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_divisions`
--

INSERT INTO `ship_divisions` (`id`, `division_name`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', NULL, NULL),
(2, 'Chittagong', NULL, NULL),
(3, 'Khulna', NULL, NULL),
(4, 'Mymensingh', NULL, NULL),
(5, 'Rajshahi', NULL, NULL),
(6, 'Rangpur', NULL, NULL),
(7, 'Sylhet', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ship_states`
--

CREATE TABLE IF NOT EXISTS `ship_states` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ship_states`
--

INSERT INTO `ship_states` (`id`, `division_id`, `district_id`, `state_name`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Charbhadrasan Upazila', NULL, NULL),
(2, 1, 1, 'Faridpur Sadar Upazila', NULL, NULL),
(3, 1, 1, 'Madhukhali Upazila', NULL, NULL),
(4, 1, 2, 'Gazipur Sadar upazila', NULL, NULL),
(5, 1, 2, 'Kaliakair Upazila', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE IF NOT EXISTS `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) DEFAULT NULL,
  `support_phone` varchar(255) DEFAULT NULL,
  `phone_one` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `company_address` text DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `copyright` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `logo`, `support_phone`, `phone_one`, `email`, `company_address`, `facebook`, `twitter`, `youtube`, `copyright`, `created_at`, `updated_at`) VALUES
(1, 'upload/logo/1760528179783321.png', '1900 - 8888', '540-025-124553', 'demo@demo.com', 'Campbell Ave undefined Kent, Utah 53127 United States', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.youtube.com/', '© Sqube Ecommerce 2023', NULL, '2023-03-16 06:41:48');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `slider_title` varchar(255) DEFAULT NULL,
  `short_title` varchar(255) DEFAULT NULL,
  `slider_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_title`, `short_title`, `slider_image`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'upload/slider/1772116433362491.png', NULL, '2023-07-22 08:32:08'),
(2, NULL, NULL, 'upload/slider/1772116444498119.png', NULL, '2023-07-22 08:32:19'),
(6, NULL, NULL, 'upload/slider/1772116467087604.png', NULL, NULL),
(7, NULL, NULL, 'upload/slider/1772116477784837.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE IF NOT EXISTS `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `subcategory_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name`, `subcategory_slug`, `created_at`, `updated_at`) VALUES
(2, 1, 'Mans Bottom Ware', 'mans-bottom-ware', NULL, NULL),
(3, 2, 'Computer Peripherals', 'computer-peripherals', NULL, NULL),
(4, 2, 'Mobile Accessory', 'mobile-accessory', NULL, NULL),
(5, 3, 'Home Furnishings', 'home-furnishings', NULL, NULL),
(6, 1, 'Mans Top Ware', 'mans-top-ware', NULL, NULL),
(7, 1, 'Women Footwear', 'women-footwear', NULL, NULL),
(8, 3, 'Living Room', 'living-room', NULL, NULL),
(9, 3, 'Home Decor', 'home-decor', NULL, NULL),
(10, 4, 'Televisions', 'televisions', NULL, NULL),
(11, 4, 'Washing Machines', 'washing-machines', NULL, NULL),
(12, 4, 'Refrigerators', 'refrigerators', NULL, NULL),
(13, 9, 'Xiaomi', 'xiaomi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `vendor_join` varchar(255) DEFAULT NULL,
  `vendor_short_info` text DEFAULT NULL,
  `role` enum('admin','vendor','user') NOT NULL DEFAULT 'user',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `last_seen` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `photo`, `phone`, `address`, `vendor_join`, `vendor_short_info`, `role`, `status`, `last_seen`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@admin.com', NULL, '$2y$10$322BWXQ739HLMpgEB6cj5.4P7UhKeMlyqyszzBXck/wVO4kUuslHO', '202303091956202207202021download.jpg', '01624823163', 'Dhaka, Bangladesh', NULL, NULL, 'admin', 'active', '2023-08-01 16:13:41', NULL, NULL, '2023-08-01 14:13:41'),
(2, 'Nest Food.,Ltd', 'vendor', 'vendor@vendor.com', NULL, '$2y$10$iecuzCBo8/B1g4ELGk0ybufHLrRHLFXiuwsvsjTAeDjGejz4Ki/n2', '202303101612202207212102vendor-16 (1).png', '540-025-124553', 'Campbell Ave undefined', '2023', 'Got a smooth, buttery spread in your fridge? Chances are good that it\'s Good Chef. This brand made Lionto\'s list of the most popular grocery brands across the country.', 'vendor', 'active', '2023-03-16 11:47:08', NULL, NULL, '2023-03-16 05:47:08'),
(3, 'User', 'user', 'user@user.com', NULL, '$2y$10$Of2jNvyjQsC1N7cF0jLWSeX/v/LQBikFnqvI26PL1rAmS8mtEB3gG', '2023031106262022082912100bfc3c5b20c439c4972383592e1c26bc.jpg', '540-025-124553', 'Dhaka, Bangladesh', NULL, NULL, 'user', 'active', '2023-03-18 16:08:45', NULL, NULL, '2023-03-18 10:08:45'),
(12, 'Walton', 'walton', 'walton@gmail.com', NULL, '$2y$10$OmjMRJtFqdiJvO7ftmXh1exPgf/Ec9ilTQycx6BZW82jXgs51B2TG', '202303120511202207291913121859823-male-avatar-icon-or-portrait-handsome-young-man-face-with-beard-vector-illustration-.jpg', '540-025-124553', 'India', '2023', 'dfasdfsd sdfsdf sdfsdfsdf', 'vendor', 'active', NULL, NULL, NULL, '2023-03-11 23:49:28'),
(13, 'Sony', 'sony', 'sony@gmail.com', NULL, '$2y$10$NVIPMEpBzQzW5H7R1.pNjOjkV2wbHNXQaZBol2rBn6X1VS.wonxhq', NULL, '34343434', NULL, '2023', NULL, 'vendor', 'active', NULL, NULL, NULL, '2023-03-11 23:50:56'),
(14, 'Expart Fashion', 'expart', 'expart@gmail.com', NULL, '$2y$10$.3/xnL/Pscpyrtbdx.MHr.87OsNVRuRLC3mIQS75.DlYcjcnNdc.O', NULL, '122343252', NULL, '2023', NULL, 'vendor', 'active', NULL, NULL, NULL, '2023-03-12 22:49:38'),
(16, 'Demo', 'demo', 'demo@demo.com', NULL, '$2y$10$Rm8yfSdCVMNANmGb4cwKDuO0OiQp5DACT1KRh1rcSroGjsGkFHFha', NULL, '12345', 'Dhaka, Bangladesh', NULL, NULL, 'admin', 'active', '2023-03-18 13:17:18', NULL, '2023-03-18 07:03:01', '2023-03-18 07:17:18'),
(17, 'Demo User', NULL, 'demouser@gmail.com', NULL, '$2y$10$uOMGa7lRA7WLqY4zlndef.Lfvnu69iHvsMoM.ut3HIT9Q9dmplXsW', NULL, NULL, NULL, NULL, NULL, 'user', 'active', NULL, NULL, '2023-03-18 09:27:12', '2023-03-18 09:27:12'),
(18, 'Demo Shop', 'Demo Vendor', 'demovendor@gmail.com', NULL, '$2y$10$PkkaQXkiDuDFPuan8Ji8uuKZTPa6fRSN3ULO5aXoaTw6ibXxnM2ry', NULL, '12345', NULL, '2023', NULL, 'vendor', 'active', '2023-03-18 16:01:58', NULL, NULL, '2023-03-18 10:01:58');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE IF NOT EXISTS `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `w_o_b_s`
--

CREATE TABLE IF NOT EXISTS `w_o_b_s` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `background_image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `w_o_b_s`
--

INSERT INTO `w_o_b_s` (`id`, `background_image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'upload/career/1773013379238633.jpg', 'HR Philosophy', '<h2>We reward you for arguing and implementing your ideas!</h2>\r\n<p>At Shanta, your potential is limited only by your talents and ambitions. Within Shanta or beyond, our people make a difference because of the leaders they become while here. You will do more than just build! Our aspiration is to change lifestyles, business practices and even society.<br /><br />Do you wonder why one competitor in a \"mature\" industry thrives while others fail? Do you have huge ambitions about what you and a team of committed people can do to positively change an organization like Shanta? Your voice and ideas are valued regardless of your tenure. Shanta Holdings&rsquo; continuous growth demands that we attract the most exceptional people. Applicants from different backgrounds are welcome.</p>', NULL, '2023-08-01 06:08:42');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
