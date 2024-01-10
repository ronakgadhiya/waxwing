-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 11:15 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waxwing`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `categorie_id` int(10) UNSIGNED DEFAULT 0,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `delete_by` bigint(20) NOT NULL DEFAULT 0,
  `created_by` bigint(20) NOT NULL DEFAULT 0,
  `updated_by` bigint(20) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `categorie_id`, `name`, `img`, `slug`, `desc`, `meta_tag`, `meta_title`, `meta_desc`, `status`, `delete_by`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'China’s drive towards a low-carbon future and challenges ahead', '1_1649250146.jpg', 'chinas-drive-towards-a-low-carbon-future-and-challenges-ahead', NULL, 'steelblog , environment', 'environment', 'A wave of decarbonisation measures\r\nChina’s central government is the core driver behind the wave of actions towards decarbonisation. On 24 October, the central government issued top-level working guidance on actions to be taken. Subsequently, at COP-26 in Glasgow, China submitted to the secretariat of the UNFCCC documents relating to its nationally determined contributions (NDCs) and its long-term emission control strategies.\r\n\r\nTwo days later, on 26 October, the State Council announced an action plan for carbon emissions peaking by 2030, which outlined specific goals for the energy and industrial sectors, including steel, construction, transportation and the circular economy.\r\n\r\nOn 16 July, the national trading system for carbon emissions was officially inaugurated. This marked the start of the nationwide trading system for the world’s largest emissions trading market. This year the trading system addresses the power generation sector, and it accounts for approximately 40% of China’s total carbon emissions. The government has reiterated that the trading system will cover the steel industry before 2025.\r\n\r\nSteel’s decarbonisation programme\r\nSteel is one of the focal points of the government’s decarbonisation ambition. In addition to national policies, steel-specific measures were introduced in 2021. A detailed action plan dedicated to peaking carbon emissions in the steel industry is almost ready and is expected to be made publicly available shortly.\r\n\r\nIn 2021, the most straightforward measure the government took to restrict steel emissions was the cap on steel production, which sets up a mandate of no year-on-year increase in steel production compared to 2020. According to the NBS statistics, an immediate concrete result is that in 2021 China’s crude steel production declined by 31.9 Mt to 1032.8 Mt, marking the first year-on-year decline over the past six years.\r\n\r\nTo reduce domestic steel production further, the Ministry of Finance decided to restrict exports of steel products by removing tax rebates for exports of most steel products from 1 May. According to the announcement, tax rebates for cold-rolled sheets, colour-coated coils, hot-rolled coils, high-alloyed rebar, seamless pipes, stainless steel sheets, and plates will be completely eradicated, from its previous 13%. The duty for pig iron exports was lifted from 10% to 15%, and the export duty for steel scrap remains unchanged at 40%.\r\n\r\nMaximisation of scrap use and circular economy\r\nChinese policymakers are very keen to maximise steel scrap to replace iron ore to reduce carbon emissions from the steel industry. In January 2021, the Ministry of Industry and Information Technology (MIIT) released guidance on the steel industry’s high-quality development, which sets a goal to increase domestic steel scrap supply to 300 Mt/a by 2025 from 260 Mt in 2020.\r\n\r\nIn July, the National Development and Reform Commission (NDRC) announced a plan for the development of the circular economy during the 14th five-year plan (2021-2025), which lifts the target for domestic steel scrap supply to 320 Mt/a by 2025 to increase scrap’s contribution to the total crude steel production to 30% from only 10% in 2020. China introduced a ban on steel scrap imports in July 2019, which was partially removed from January 2021. However, the actual steel scrap imports in 2021 were only 0.56 Mt for various reasons, which is much lower than the peak of 13.69 Mt in 2009.\r\n\r\nAssociation and steel company initiatives\r\nAs an industry association, the China Iron and Steel Association (CISA) is playing an active role in this decarbonisation programme. In April 2021, a new Low Carbon Steering Committee was created by CISA with 360 individual experts from Chinese steel producers, universities and research institutes. CISA has organised training sessions on carbon emissions and has set up relevant industry standards towards low-carbon emissions.\r\n\r\nThe Chinese steelmakers are also taking concrete actions on decarbonisation. In 2021 four leading Chinese steel companies, China Baowu Group, the world’s largest steelmaker, HBIS Group, Ansteel Group and Baotou Steel Group, have announced their roadmap for decarbonisation by 2050. HBIS Group has set up an ambitious target to peak its carbon emissions by 2022, and China Baowu Group announced to peak emissions by 2023. In November, China Baowu Group initiated the Global Alliance on Low-Carbon Metallurgy Innovation and the budget of the alliance is funding the first 25 R&D projects.', 1, 1, 1, 1, '2022-04-07 05:32:33', '2022-04-06 05:26:48', '2022-04-07 05:32:33'),
(2, 1, 'cvnhjgfj', '2_1649510204.jpg', 'cvnhjgfj', '<p>l.jkljllkjlkljkljkljkljkll</p>', 'jhgjmhgj', 'jhgj', 'jhjhgj', 1, 1, 1, 1, '2022-04-11 07:52:42', '2022-04-07 05:30:23', '2022-04-11 07:52:42'),
(3, 1, 'Blog: China’s drive towards a low-carbon future and challenges ahead', '3_1649683357.jpg', 'blog-chinas-drive-towards-a-low-carbon-future-and-challenges-ahead', '<h3>A wave of decarbonisation measures</h3><p>China’s central government is the core driver behind the wave of actions towards decarbonisation. On 24 October, the central government issued top-level working guidance on actions to be taken. Subsequently, at COP-26 in Glasgow, China submitted to the secretariat of the UNFCCC documents relating to its nationally determined contributions (NDCs) and its long-term emission control strategies.</p><p>Two days later, on 26 October, the State Council announced an action plan for carbon emissions peaking by 2030, which outlined specific goals for the energy and industrial sectors, including steel, construction, transportation and the circular economy.</p><p>On 16 July, the <a href=\"https://icapcarbonaction.com/en/?option=com_etsmap&amp;task=export&amp;format=pdf&amp;layout=list&amp;systems%5B%5D=55\">national trading system for carbon emissions</a> was officially inaugurated. This marked the start of the nationwide trading system for the world’s largest emissions trading market. This year the trading system addresses the power generation sector, and it accounts for approximately 40% of China’s total carbon emissions. The government has reiterated that the trading system will cover the steel industry before 2025.</p><h3>Steel’s decarbonisation programme</h3><p>Steel is one of the focal points of the government’s decarbonisation ambition. In addition to national policies, steel-specific measures were introduced in 2021. A detailed action plan dedicated to peaking carbon emissions in the steel industry is almost ready and is expected to be made publicly available shortly.</p><p>In 2021, the most straightforward measure the government took to restrict steel emissions was the cap on steel production, which sets up a mandate of no year-on-year increase in steel production compared to 2020. According to the NBS statistics, an immediate concrete result is that in 2021 China’s crude steel production declined by 31.9 Mt to 1032.8 Mt, marking the first year-on-year decline over the past six years.</p><p>To reduce domestic steel production further, the Ministry of Finance decided to restrict exports of steel products by removing tax rebates for exports of most steel products from 1 May. According to the announcement, tax rebates for cold-rolled sheets, colour-coated coils, hot-rolled coils, high-alloyed rebar, seamless pipes, stainless steel sheets, and plates will be completely eradicated, from its previous 13%. The duty for pig iron exports was lifted from 10% to 15%, and the export duty for steel scrap remains unchanged at 40%.</p><h3>Maximisation of scrap use and circular economy</h3><p>Chinese policymakers are very keen to maximise steel scrap to replace iron ore to reduce carbon emissions from the steel industry. In January 2021, the Ministry of Industry and Information Technology (MIIT) released guidance on the steel industry’s high-quality development, which sets a goal to increase domestic steel scrap supply to 300 Mt/a by 2025 from 260 Mt in 2020.</p><p>In July, the National Development and Reform Commission (NDRC) announced a plan for the development of the circular economy during the 14th five-year plan (2021-2025), which lifts the target for domestic steel scrap supply to 320 Mt/a by 2025 to increase scrap’s contribution to the total crude steel production to 30% from only 10% in 2020. China introduced a ban on steel scrap imports in July 2019, which was partially removed from January 2021. However, the actual steel scrap imports in 2021 were only 0.56 Mt for various reasons, which is much lower than the peak of 13.69 Mt in 2009.</p><h3>Association and steel company initiatives</h3><p>As an industry association, the China Iron and Steel Association (CISA) is playing an active role in this decarbonisation programme. In April 2021, a new Low Carbon Steering Committee was created by CISA with 360 individual experts from Chinese steel producers, universities and research institutes. CISA has organised training sessions on carbon emissions and has set up relevant industry standards towards low-carbon emissions.</p><p>The Chinese steelmakers are also taking concrete actions on decarbonisation. In 2021 four leading Chinese steel companies, <a href=\"http://www.baowugroup.com/en/home\">China Baowu Group</a>, the world’s largest steelmaker, HBIS Group, <a href=\"http://en.ansteel.cn/news/xinwenzixun/2021-10-09/2654.html\">Ansteel Group</a> and <a href=\"https://equalocean.com/briefing/20210515230046787\">Baotou Steel Group</a>, have announced their roadmap for decarbonisation by 2050. <a href=\"https://www.hbisco.com/site/en/groupnewssub/info/2021/15999.html\">HBIS Group</a> has set up an ambitious target to peak its carbon emissions by 2022, and China Baowu Group announced to peak emissions by 2023. In November, China Baowu Group initiated the <a href=\"http://www.baowugroup.com/en/media_center/news_detail/221297\">Global Alliance on Low-Carbon Metallurgy Innovation</a> and the budget of the alliance is funding the first 25 R&amp;D projects.</p>', 'steel', 'Blog: China’s drive towards a low-carbon future and challenges ahead', 'A wave of decarbonisation measures\r\n\r\nChina’s central government is the core driver behind the wave of actions towards decarbonisation. On 24 October, the central government issued top-level working guidance on actions to be taken. Subsequently, at COP-26 in Glasgow, China submitted to the secretariat of the UNFCCC documents relating to its nationally determined contributions (NDCs) and its long-term emission control strategies.\r\n\r\nTwo days later, on 26 October, the State Council announced an action plan for carbon emissions peaking by 2030, which outlined specific goals for the energy and industrial sectors, including steel, construction, transportation and the circular economy.\r\n\r\nOn 16 July, the national trading system for carbon emissions was officially inaugurated. This marked the start of the nationwide trading system for the world’s largest emissions trading market. This year the trading system addresses the power generation sector, and it accounts for approximately 40% of China’s total carbon emissions. The government has reiterated that the trading system will cover the steel industry before 2025.\r\n\r\nSteel’s decarbonisation programme\r\n\r\nSteel is one of the focal points of the government’s decarbonisation ambition. In addition to national policies, steel-specific measures were introduced in 2021. A detailed action plan dedicated to peaking carbon emissions in the steel industry is almost ready and is expected to be made publicly available shortly.\r\n\r\nIn 2021, the most straightforward measure the government took to restrict steel emissions was the cap on steel production, which sets up a mandate of no year-on-year increase in steel production compared to 2020. According to the NBS statistics, an immediate concrete result is that in 2021 China’s crude steel production declined by 31.9 Mt to 1032.8 Mt, marking the first year-on-year decline over the past six years.\r\n\r\nTo reduce domestic steel production further, the Ministry of Finance decided to restrict exports of steel products by removing tax rebates for exports of most steel products from 1 May. According to the announcement, tax rebates for cold-rolled sheets, colour-coated coils, hot-rolled coils, high-alloyed rebar, seamless pipes, stainless steel sheets, and plates will be completely eradicated, from its previous 13%. The duty for pig iron exports was lifted from 10% to 15%, and the export duty for steel scrap remains unchanged at 40%.\r\n\r\nMaximisation of scrap use and circular economy\r\n\r\nChinese policymakers are very keen to maximise steel scrap to replace iron ore to reduce carbon emissions from the steel industry. In January 2021, the Ministry of Industry and Information Technology (MIIT) released guidance on the steel industry’s high-quality development, which sets a goal to increase domestic steel scrap supply to 300 Mt/a by 2025 from 260 Mt in 2020.\r\n\r\nIn July, the National Development and Reform Commission (NDRC) announced a plan for the development of the circular economy during the 14th five-year plan (2021-2025), which lifts the target for domestic steel scrap supply to 320 Mt/a by 2025 to increase scrap’s contribution to the total crude steel production to 30% from only 10% in 2020. China introduced a ban on steel scrap imports in July 2019, which was partially removed from January 2021. However, the actual steel scrap imports in 2021 were only 0.56 Mt for various reasons, which is much lower than the peak of 13.69 Mt in 2009.\r\n\r\nAssociation and steel company initiatives\r\n\r\nAs an industry association, the China Iron and Steel Association (CISA) is playing an active role in this decarbonisation programme. In April 2021, a new Low Carbon Steering Committee was created by CISA with 360 individual experts from Chinese steel producers, universities and research institutes. CISA has organised training sessions on carbon emissions and has set up relevant industry standards towards low-carbon emissions.\r\n\r\nThe Chinese steelmakers are also taking concrete actions on decarbonisation. In 2021 four leading Chinese steel companies, China Baowu Group, the world’s largest steelmaker, HBIS Group, Ansteel Group and Baotou Steel Group, have announced their roadmap for decarbonisation by 2050. HBIS Group has set up an ambitious target to peak its carbon emissions by 2022, and China Baowu Group announced to peak emissions by 2023. In November, China Baowu Group initiated the Global Alliance on Low-Carbon Metallurgy Innovation and the budget of the alliance is funding the first 25 R&D projects.', 1, 0, 1, 1, NULL, '2022-04-11 07:51:21', '2022-04-11 07:52:37'),
(4, 1, 'IS BLACK STAINLESS STEEL RELIABLE?', '4_1649684927.jpg', 'is-black-stainless-steel-reliable', '<p><strong>Black stainless steel</strong> is truly stainless steel. It is just its charcoal-grey color which gives it a bright matt finish and premium glance. Black stainless steel is introduced for domestic appliances. It is the first visual of the sleeker trend in the appliance range.</p><p>Black stainless steel has an identical composition to stainless steel i.e. iron, chromium, nickel, etc. It has an extra coating of black oxide on its outer surface. Even its surface is less prone to smudges and minor abrasions.</p><p>So it features all the stainless steel quality. It offers corrosion resistance, strength, and durability. It has an outer coating of black oxide and is smudge-proof but it is expected to peel and scratches in long-term use.</p><p>Black stainless steel becomes famous for kitchen appliances, cabinets, fridges, ovens, etc. It has an interesting black surface that adds characters to the applications. It was expected to be timeless, trend, and easy to maintain. Yes, it can be cleaned easily, but trends are always old with times.</p>', 'steel', 'IS BLACK STAINLESS STEEL RELIABLE?', 'Black stainless steel is truly stainless steel. It is just its charcoal-grey color which gives it a bright matt finish and premium glance. Black stainless steel is introduced for domestic appliances. It is the first visual of the sleeker trend in the appliance range.\r\n\r\nBlack stainless steel has an identical composition to stainless steel i.e. iron, chromium, nickel, etc. It has an extra coating of black oxide on its outer surface. Even its surface is less prone to smudges and minor abrasions.\r\n\r\nSo it features all the stainless steel quality. It offers corrosion resistance, strength, and durability. It has an outer coating of black oxide and is smudge-proof but it is expected to peel and scratches in long-term use.\r\n\r\nBlack stainless steel becomes famous for kitchen appliances, cabinets, fridges, ovens, etc. It has an interesting black surface that adds characters to the applications. It was expected to be timeless, trend, and easy to maintain. Yes, it can be cleaned easily, but trends are always old with times.', 1, 0, 1, 0, NULL, '2022-04-11 08:18:47', '2022-04-11 08:18:47'),
(5, 1, 'PROS AND CONS OF ALUMINIUM VERSUS STAINLESS STEEL', '5_1649685068.jpg', 'pros-and-cons-of-aluminium-versus-stainless-steel', '<p>Every design has intricate minute details and fashion. Many industries use <strong>stainless steel and aluminum</strong>, or both in manufacturing structures and components. Like food and catering industry is amazed by the performance of both. Both are superior and come with their bashes also. What suits the best? Is it the best?</p><p><strong>Stainless steel</strong> is the alloy and aluminum is the metal. Stainless steel and aluminum are corrosion resistant. Stainless steel and aluminum are commonly used in the food and cookware industry. Commercial kitchen chefs may use aluminum cookware as it has efficient heat conductance property, but stainless steel cookware is safe to use as it does not leech into food because of its non-reactive nature.</p><p>Stainless steel has more strength, but aluminum displays a more strength-to-weight ratio. Some stainless steel can be magnetic, aluminum is non-magnetic in nature.</p><p>Aluminum is lightweight metal than stainless steel and conducts electricity well. It is an economical option when strength and lightweight are the demanded necessary baseline for applications. That is why structural components are made of aluminum.</p><p>In the end, aluminum and stainless steel have accelerating benefits for no and go competition. Stainless steel has more strength, and aluminum is more economical. It is a product design that corporate the use of metal for the future.</p>', 'steel', 'PROS AND CONS OF ALUMINIUM VERSUS STAINLESS STEEL', 'Every design has intricate minute details and fashion. Many industries use stainless steel and aluminum, or both in manufacturing structures and components. Like food and catering industry is amazed by the performance of both. Both are superior and come with their bashes also. What suits the best? Is it the best?\r\n\r\nStainless steel is the alloy and aluminum is the metal. Stainless steel and aluminum are corrosion resistant. Stainless steel and aluminum are commonly used in the food and cookware industry. Commercial kitchen chefs may use aluminum cookware as it has efficient heat conductance property, but stainless steel cookware is safe to use as it does not leech into food because of its non-reactive nature.\r\n\r\nStainless steel has more strength, but aluminum displays a more strength-to-weight ratio. Some stainless steel can be magnetic, aluminum is non-magnetic in nature.\r\n\r\nAluminum is lightweight metal than stainless steel and conducts electricity well. It is an economical option when strength and lightweight are the demanded necessary baseline for applications. That is why structural components are made of aluminum.\r\n\r\nIn the end, aluminum and stainless steel have accelerating benefits for no and go competition. Stainless steel has more strength, and aluminum is more economical. It is a product design that corporate the use of metal for the future.', 1, 0, 1, 0, NULL, '2022-04-11 08:21:08', '2022-04-11 08:21:08'),
(6, 1, 'How much longer does aluminium lasts compared to steel or stainless steel when exposed to elements?', '6_1649685607.jpg', 'how-much-longer-does-aluminium-lasts-compared-to-steel-or-stainless-steel-when-exposed-to-elements', '<p>Aluminum and stainless steel are comparable elements and are demanded too. Both have created their niche in incalculable applications. The pros and cons are necessary terms when qualities are compared.</p><p>Stainless steel is a versatile material and offers superior corrosion resistance in even adverse conditions. <a href=\"https://ambicasteels.com/sae-304-stainless-steel/\"><strong>Grade 304</strong></a> and 316 are the perfect examples. The <a href=\"https://ambicasteels.com/stainless-steel-316-316l-grade/\"><strong>grade 316</strong></a> can survive in chloride conditions. It has strength and toughness in various corrosive mediums. The medical and cookware applications are durable and famous for stainless steel use. The aluminum is more prone to galvanic and pitting corrosion.</p><p>The aluminum will pose difficulty in harsh environments. The anodized aluminum can support adverse conditions. Saltwater and other corrosive mediums make aluminum vulnerable.</p><p>In addition, <strong>Stainless steel</strong> has more strength than aluminum. It has more weight and hardness. Stainless steel features considerable toughness at elevated and cryogenic applications.</p><p>In an adverse environment, stainless steel is durable when compared to steel and aluminum. Numerous grades are available according to requirements.</p>', 'steel', 'How much longer does aluminium lasts compared to steel or stainless steel when exposed to elements?', 'Aluminum and stainless steel are comparable elements and are demanded too. Both have created their niche in incalculable applications. The pros and cons are necessary terms when qualities are compared.\r\n\r\nStainless steel is a versatile material and offers superior corrosion resistance in even adverse conditions. Grade 304 and 316 are the perfect examples. The grade 316 can survive in chloride conditions. It has strength and toughness in various corrosive mediums. The medical and cookware applications are durable and famous for stainless steel use. The aluminum is more prone to galvanic and pitting corrosion.\r\n\r\nThe aluminum will pose difficulty in harsh environments. The anodized aluminum can support adverse conditions. Saltwater and other corrosive mediums make aluminum vulnerable.\r\n\r\nIn addition, Stainless steel has more strength than aluminum. It has more weight and hardness. Stainless steel features considerable toughness at elevated and cryogenic applications.\r\n\r\nIn an adverse environment, stainless steel is durable when compared to steel and aluminum. Numerous grades are available according to requirements.', 1, 0, 1, 0, NULL, '2022-04-11 08:30:07', '2022-04-11 08:30:07');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `delete_by` bigint(20) NOT NULL DEFAULT 0,
  `created_by` bigint(20) NOT NULL DEFAULT 0,
  `updated_by` bigint(20) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `status`, `delete_by`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'steel', 1, 0, 1, 1, NULL, '2022-04-06 05:23:11', '2022-04-09 07:49:16');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `massage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` bigint(20) NOT NULL DEFAULT 0,
  `updated_by` bigint(20) NOT NULL DEFAULT 0,
  `deleted_by` bigint(20) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `number`, `subject`, `massage`, `created_by`, `updated_by`, `deleted_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'vdsgfdgb', 'gadhiyaronak3@gmail.com', '21345678654321', 'gbfcvbvfcx', 'brefdhfgdcvb', 0, 0, 0, '2022-04-09 05:28:33', '2022-04-07 09:02:06', '2022-04-09 05:28:33'),
(2, 'user', 'gadhiyaronak3@gmail.com', 'dsg', 'fxb', 'dfdvc', 0, 0, 0, '2022-04-09 05:28:28', '2022-04-07 09:03:52', '2022-04-09 05:28:28'),
(3, 'user', 'gadhiyaronak3@gmail.com', '21345678654321', '1 contact', 'contact', 0, 0, 0, '2022-04-09 05:28:23', '2022-04-07 09:06:13', '2022-04-09 05:28:23'),
(4, 'ghgh', 'gfhh@gmail.com', 'hgfhf', 'hgfhg', 'hgfhgfhf', 0, 0, 0, '2022-04-09 05:28:17', '2022-04-08 08:31:33', '2022-04-09 05:28:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `delete_by` bigint(20) NOT NULL DEFAULT 0,
  `created_by` bigint(20) NOT NULL DEFAULT 0,
  `updated_by` bigint(20) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `name`, `desc`, `status`, `delete_by`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'One of the most frequently asked questions about steel; What is steel and how is it made?', '<p>When Iron is alloyed with carbon and other elements it is called steel. The resultant alloy has applications as the main component of buildings, infrastructure, tools, ships, automobiles, machines, various appliances, and weapons. The uses are myriad because of steels high tensile strength and relatively low cost.</p>', 1, 0, 1, 0, NULL, '2022-04-09 07:23:23', '2022-04-09 07:23:23'),
(2, 'Who discovered it?', '<p>The earliest examples of steel have been discovered in Turkey and date back to 1800BC. The modern production of steel dates back to <a href=\"https://en.wikipedia.org/wiki/Henry_Bessemer\">Sir Henry Bessemer</a> of England who discovered a method of production we high volume and low cost.</p>', 1, 0, 1, 0, NULL, '2022-04-09 07:24:48', '2022-04-09 07:24:48'),
(3, 'What is the difference between Iron and Steel?', '<p>Iron is a naturally occurring element found in nature within Iron Ore. Iron is the main component of Steel, which is an alloy of Iron with the main addition of Steel. Steel is stronger than Iron, with better tension and compression properties.</p>', 1, 0, 1, 1, NULL, '2022-04-09 07:25:14', '2022-04-09 08:17:43'),
(4, 'What are the properties of steel?', '<ul><li>Steel has high Tensile Strength</li><li>It is malleable – allowing it to be easily shaped</li><li>Durability – allowing the steel to withstand external forces.</li><li>Conductivity – it is good at conducting heat and electricity, useful for cookware and wiring.</li><li>Lustre – steel has an attractive, silvery appearance.</li><li>Rust Resistance – the addition of various elements in varying percentages can give steel in the form of stainless steel it’s high corrosion resistance.</li></ul>', 1, 0, 1, 0, NULL, '2022-04-09 07:34:20', '2022-04-09 07:34:20');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_by` bigint(20) NOT NULL DEFAULT 0,
  `updated_by` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `img`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(5, '5_1649654111.jpg', 1, 1, 0, '2022-04-10 23:45:11', '2022-04-10 23:45:11'),
(6, '6_1649654119.jpg', 1, 1, 0, '2022-04-10 23:45:19', '2022-04-10 23:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `measurements`
--

CREATE TABLE `measurements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_01_25_051215_create_blog_categories_table', 1),
(5, '2022_01_26_122947_create_blogs_table', 1),
(6, '2022_02_16_101448_create_galleries_table', 1),
(7, '2022_03_15_052819_create_product_categories_table', 1),
(8, '2022_03_15_052903_create_products_table', 1),
(9, '2022_03_16_131801_create_product_inquiries_table', 1),
(10, '2022_04_06_044047_create_measurements_table', 2),
(11, '2022_04_06_064238_add_products_table', 2),
(12, '2022_04_06_111732_create_pages_table', 3),
(13, '2022_04_07_050454_create_sliders_table', 4),
(14, '2022_04_07_140423_create_aboutuses_table', 5),
(15, '2022_04_07_142231_create_contacts_table', 6),
(16, '2022_04_07_142340_create_contacts_table', 7),
(17, '2022_04_09_100724_create_faqs_table', 8),
(18, '2022_04_12_060532_create_socials_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `delete_by` bigint(20) NOT NULL DEFAULT 0,
  `created_by` bigint(20) NOT NULL DEFAULT 0,
  `updated_by` bigint(20) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `img`, `desc`, `meta_tag`, `meta_title`, `meta_desc`, `status`, `delete_by`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'about-us', '1_1649655390.png', '<p>Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.<br><br>Under the supervision of Mr. Chirag Tanti, who has vast experience and vast industrial knowledge in the respective domain, has helped us to run the entire business in systematic and proper manner. Further, he motivates the employees to work hard with complete dedication.</p>', 'About', 'About', 'Under the supervision of Mr. Chirag Tanti, who has vast experience and vast industrial knowledge in the respective domain, has helped us to run the entire business in systematic and proper manner. Further, he motivates the employees to work hard with complete dedication.', 1, 1, 1, 1, NULL, '2022-04-06 07:19:04', '2022-04-11 08:42:45'),
(2, 'gh', 'gh', 'C:\\xampp\\tmp\\phpEA55.tmp', '<p>dvgfdgdfgdfgfgd</p>', 'bvhnjbvn', 'nhbvnbv', 'bvnbvnvbn', 0, 1, 1, 1, NULL, '2022-04-06 07:21:51', '2022-04-10 23:30:25'),
(3, 'edfxcf', 'edfxcf', '3_1649425313.jpg', '<p>c zxdczxcz</p>', 'zxcczxc', 'zxccz', 'zxczxcczxc', 0, 1, 1, 1, NULL, '2022-04-06 07:45:39', '2022-04-10 23:30:27'),
(4, 'user', 'user', '4_1649421856.jpg', '<p>test</p>', 'test', 'test', 'test', 0, 0, 1, 1, NULL, '2022-04-08 07:01:46', '2022-04-10 23:30:28'),
(5, 'FAQ', 'faq', '5_1649737906.jpg', '<p>FAQ</p>', 'FAQ', 'FAQ', 'FAQ', 1, 0, 1, 1, NULL, '2022-04-08 07:06:04', '2022-04-11 23:01:46'),
(6, 'gfgfg', 'gfgfg', '6_1649509123.jpg', '<p>gfhfh</p>', 'gf', 'gfvb', 'g', 0, 0, 1, 1, NULL, '2022-04-09 07:28:43', '2022-04-10 23:30:31');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT 0,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `delete_by` bigint(20) NOT NULL DEFAULT 0,
  `created_by` bigint(20) NOT NULL DEFAULT 0,
  `updated_by` bigint(20) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `measurement` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_id`, `name`, `slug`, `img`, `desc`, `meta_tag`, `meta_title`, `meta_desc`, `status`, `delete_by`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`, `measurement`) VALUES
(8, 4, 'Silver KB - 0102 Stainless Steel Cabinet Handle', 'silver-kb-0102-stainless-steel-cabinet-handle', '8_1649659050.jpg', '<p>Available Finish: COMBI</p><ul><li>Diameter : 13*7mm oval (D Handle)</li><li>Material : Stainless Steel</li></ul>', 'Stainless Steel Cabinet Handle', 'Silver KB - 0102 Stainless Steel Cabinet Handle', 'Available Finish: COMBI\r\n\r\nDiameter : 13*7mm oval (D Handle)\r\nMaterial : Stainless Steel', 1, 0, 1, 1, NULL, '2022-04-11 01:07:30', '2022-04-11 01:18:03', '<figure class=\"table\"><table><tbody><tr><td>Holes Distance</td><td>PCS/BOX</td></tr><tr><td>96 MM</td><td>50</td></tr><tr><td>128 MM</td><td>30</td></tr><tr><td>192 MM</td><td>30</td></tr><tr><td>256 MM</td><td>30</td></tr><tr><td>288 MM</td><td>25</td></tr></tbody></table></figure>'),
(11, 4, 'Silver KB - 0104-H Stainless Steel Cabinet Pull Handle', 'silver-kb-0104-h-stainless-steel-cabinet-pull-handle', '11_1649660037.jpg', '<p>Available Finish: COMBI</p><ul><li>Diameter : 13*7mm oval (H Handle)</li><li>Material : Stainless Steel</li></ul>', 'Stainless Steel Cabinet Handle', 'Silver KB - 0104-H Stainless Steel Cabinet Pull Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 1, NULL, '2022-04-11 01:23:57', '2022-04-11 03:51:02', '<figure class=\"table\"><table><tbody><tr><td>Holes Distance</td><td>PCS/BOX</td></tr><tr><td>96 MM</td><td>50</td></tr><tr><td>128 MM</td><td>30</td></tr><tr><td>192 MM&nbsp;</td><td>30</td></tr><tr><td>256 MM</td><td>30</td></tr><tr><td>288 MM</td><td>25</td></tr></tbody></table></figure>'),
(12, 4, 'Silver KB - 0109 Stainless Steel Cabinet Handle', 'silver-kb-0109-stainless-steel-cabinet-handle', '12_1649660479.jpg', '<p>Available Finish: METTE/COMBI</p><ul><li>Diameter : 16*8mm Radius</li><li>Material : Stainless Steel</li></ul>', 'Stainless Steel Cabinet Handle', 'Silver KB - 0109 Stainless Steel Cabinet Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 1, NULL, '2022-04-11 01:31:19', '2022-04-11 01:34:07', '<figure class=\"table\"><table><tbody><tr><td>Holes Distance</td><td>PCS/BOX</td></tr><tr><td>96 MM</td><td>35</td></tr><tr><td>128 MM</td><td>25</td></tr><tr><td>160 MM</td><td>20</td></tr><tr><td>192 MM</td><td>20</td></tr><tr><td>224 MM</td><td>20</td></tr><tr><td>256 MM</td><td>20</td></tr><tr><td>288 MM</td><td>20</td></tr></tbody></table></figure>'),
(13, 4, 'Kb0110 - Matte Black Stainless Steel Cabinet Handle', 'kb0110-matte-black-stainless-steel-cabinet-handle', '13_1649660957.jpg', '<p>Available Finish : MATTE/COMBI</p><ul><li>Diameter : 12mm Squre</li><li>Material : Stainless Steel<br>&nbsp;</li></ul>', 'Stainless Steel Cabinet Handle', 'Kb0110 - Matte Black Stainless Steel Cabinet Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 1, NULL, '2022-04-11 01:37:49', '2022-04-11 01:39:17', '<figure class=\"table\"><table><tbody><tr><td>Holes Distance</td><td>PCS/BOX</td></tr><tr><td>96 MM</td><td>25</td></tr><tr><td>128N MM</td><td>25</td></tr><tr><td>160 MM</td><td>20</td></tr><tr><td>192 MM</td><td>20</td></tr><tr><td>224 MM</td><td>20</td></tr><tr><td>256 MM</td><td>20</td></tr><tr><td>288 MM</td><td>20</td></tr></tbody></table></figure>'),
(14, 4, '6YUJTJU', '6yujtju', '14_1649662309.jpg', '<p>JGHJGHJ</p>', 'JGHJGHJJGH', 'JGHJ', 'JGHJGHJ', 1, 1, 1, 1, '2022-04-11 02:02:57', '2022-04-11 02:01:49', '2022-04-11 02:02:57', '<p>GHJHGJGH</p>'),
(15, 4, 'WERR', 'werr', '15_1649662364.jpg', '<p>FDSFD</p>', 'FSDFSDF', 'SDFSD', 'SDFS', 1, 1, 1, 0, '2022-04-11 02:02:51', '2022-04-11 02:02:44', '2022-04-11 02:02:51', '<p>FSDF</p>'),
(16, 4, 'Silver KB - 0119 Stainless Steel Cabinet Handle', 'silver-kb-0119-stainless-steel-cabinet-handle', '16_1649662589.jpg', '<p>Available Finish: METTE</p><ul><li>Diameter : 8*12 Mini rado</li><li>Material : Stainless Steel</li></ul>', 'Stainless Steel Cabinet Handle', 'Silver KB - 0119 Stainless Steel Cabinet Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 1, NULL, '2022-04-11 02:06:29', '2022-04-11 04:24:40', '<figure class=\"table\"><table><tbody><tr><td>Holes Distance</td><td>PCS/BOX</td></tr><tr><td>96 MM</td><td>35</td></tr><tr><td>128 MM</td><td>25</td></tr><tr><td>192 MM</td><td>20</td></tr><tr><td>256 MM</td><td>20</td></tr><tr><td>288 MM</td><td>20</td></tr></tbody></table></figure>'),
(17, 4, 'Silver KB - 0122 Stainless Steel Cabinet Handle', 'silver-kb-0122-stainless-steel-cabinet-handle', '17_1649663043.jpg', '<p>Available Finish: METTE</p><ul><li>Diameter : 10mm rado &amp; 10*20mm leg</li><li>Material : Stainless Steel</li></ul>', 'Stainless Steel Cabinet Handle', 'Silver KB - 0122 Stainless Steel Cabinet Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 1, NULL, '2022-04-11 02:14:03', '2022-04-11 04:24:58', '<figure class=\"table\"><table><tbody><tr><td>Holes Distance</td><td>PCS/BOX</td></tr><tr><td>96 MM</td><td>35</td></tr><tr><td>128 MM</td><td>25</td></tr><tr><td>192 MM</td><td>20</td></tr><tr><td>256 MM</td><td>20</td></tr><tr><td>288 MM</td><td>20</td></tr></tbody></table></figure>'),
(18, 4, 'Kb0103- Hcabinet Handle', 'kb0103-hcabinet-handle', '18_1649663354.jpg', '<p>Available Finish: METTE</p><ul><li>Diameter : 9*5 Round MM</li><li>Material : Stainless Steel</li></ul>', 'Stainless Steel Cabinet Handle', 'Kb0103- Hcabinet Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 0, NULL, '2022-04-11 02:19:14', '2022-04-11 02:19:14', '<figure class=\"table\"><table><tbody><tr><td>Holes Distance</td><td>PCS/BOX</td></tr><tr><td>96 MM</td><td>50</td></tr><tr><td>128 MM</td><td>30</td></tr><tr><td>192 MM</td><td>30</td></tr><tr><td>256 MM</td><td>30</td></tr><tr><td>288 MM</td><td>25</td></tr></tbody></table></figure>'),
(19, 4, 'Silver KB - 0104 Stainless Steel Cabinet Pull Handle', 'silver-kb-0104-stainless-steel-cabinet-pull-handle', '19_1649663591.jpg', '<p>Available Finish : COMBI</p><ul><li>Diameter : 13*7mm oval (D Handle)</li><li>Material : Stainless Steel</li></ul>', 'Stainless Steel Cabinet Pull Handle', 'Silver KB - 0104 Stainless Steel Cabinet Pull Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 1, NULL, '2022-04-11 02:23:11', '2022-04-11 03:50:52', '<figure class=\"table\"><table><tbody><tr><td>Holes Distance</td><td>PCS/BOX</td></tr><tr><td>96 MM</td><td>50</td></tr><tr><td>128 MM</td><td>30</td></tr><tr><td>192 MM</td><td>30</td></tr><tr><td>256 MM</td><td>30</td></tr><tr><td>288 MM</td><td>25</td></tr></tbody></table></figure>'),
(20, 4, 'Kb0106- Ss Cabinet Handle', 'kb0106-ss-cabinet-handle', '20_1649669420.jpg', '<p>Available Finish : COMBI</p><ul><li>Diameter : 16mm Half Round</li><li>Material : Stainless Steel</li></ul>', 'Stainless Steel Cabinet Pull Handle', 'Kb0106- Ss Cabinet Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 1, NULL, '2022-04-11 04:00:20', '2022-04-11 04:06:11', '<figure class=\"table\"><table><tbody><tr><td>Holes Dstance&nbsp;</td><td>PCS/BOX</td></tr><tr><td>96 MM</td><td>35</td></tr><tr><td>128 MM</td><td>25</td></tr><tr><td>192 MM</td><td>20</td></tr><tr><td>256 MM</td><td>20</td></tr><tr><td>288 MM</td><td>20</td></tr></tbody></table></figure>'),
(21, 4, 'KB - 0106 B Stainless Steel Cabinet Handle', 'kb-0106-b-stainless-steel-cabinet-handle', '21_1649669759.jpg', '<p>Available Finish : COMBI</p><ul><li>Diameter : 12mm Half Round</li><li>Material : Stainless Steel</li></ul>', 'Stainless Steel Cabinet Handle', 'KB - 0106 B Stainless Steel Cabinet Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 1, NULL, '2022-04-11 04:05:59', '2022-04-11 04:06:05', '<figure class=\"table\"><table><tbody><tr><td>Holes Distance</td><td>PCS/BOx</td></tr><tr><td>96 MM</td><td>50</td></tr><tr><td>128 MM</td><td>30</td></tr><tr><td>192 MM</td><td>30</td></tr><tr><td>256 MM</td><td>30</td></tr><tr><td>288 MM</td><td>30</td></tr></tbody></table></figure>'),
(22, 4, 'KB - 0113 Stainless Steel Cabinet Handle', 'kb-0113-stainless-steel-cabinet-handle', '22_1649670124.jpg', '<p>Available Finish : MATTE/GLOSY</p><ul><li>Diameter: 16*4 mm Patti</li><li>Material : Stainless Steel</li></ul>', 'Stainless Steel Cabinet Handle', 'KB - 0113 Stainless Steel Cabinet Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 1, NULL, '2022-04-11 04:12:04', '2022-04-11 04:12:13', '<figure class=\"table\"><table><tbody><tr><td>Holes Distance</td><td>Matte</td><td>Glossy</td></tr><tr><td>96 MM</td><td>25</td><td>25</td></tr><tr><td>128 MM</td><td>25</td><td>25</td></tr><tr><td>160 MM</td><td>20</td><td>00</td></tr><tr><td>192 MM</td><td>20</td><td>20</td></tr><tr><td>224 MM</td><td>20</td><td>00</td></tr><tr><td>256 MM</td><td>20</td><td>20</td></tr><tr><td>288 MM</td><td>20</td><td>20</td></tr></tbody></table></figure>'),
(23, 4, 'KB - 0118 Stainless Steel Cabinet Handle', 'kb-0118-stainless-steel-cabinet-handle', '23_1649670601.jpg', '<p>Available Finish : COMBI</p><ul><li>Diameter : 12mm Rado</li><li>Material : Stainless Steel</li></ul>', 'Stainless Steel Cabinet Handle', 'KB - 0118 Stainless Steel Cabinet Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 0, NULL, '2022-04-11 04:20:01', '2022-04-11 04:20:01', '<figure class=\"table\"><table><tbody><tr><td>Holes Distance</td><td>PCS/BOX</td></tr><tr><td>96 MM</td><td>35</td></tr><tr><td>128 MM</td><td>25</td></tr><tr><td>192 MM</td><td>20</td></tr><tr><td>256 MM</td><td>25</td></tr><tr><td>288 MM</td><td>20</td></tr></tbody></table></figure>'),
(24, 4, 'KB - 0125 Stainless Steel Cabinet Handle', 'kb-0125-stainless-steel-cabinet-handle', '24_1649671082.jpg', '<p>Available Finish: COMBI</p><ul><li>Diameter : Kitket</li><li>Material : Stainless Steel</li></ul>', 'Stainless Steel Cabinet Handle', 'KB - 0125 Stainless Steel Cabinet Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 0, NULL, '2022-04-11 04:28:02', '2022-04-11 04:28:02', '<figure class=\"table\"><table><tbody><tr><td>Holes Distance</td><td>PCS/BOX</td></tr><tr><td>96 MM</td><td>50</td></tr><tr><td>128 MM</td><td>30</td></tr><tr><td>192 MM</td><td>30</td></tr><tr><td>256 MM</td><td>30</td></tr><tr><td>288 MM</td><td>30</td></tr></tbody></table></figure>'),
(25, 4, 'KB - 0126 Stainless Steel Cabinet Handle', 'kb-0126-stainless-steel-cabinet-handle', '25_1649671343.jpg', '<p>Available Finish : MATTE/GLOSY</p><ul><li>Diameter : 25*8 Squre</li><li>Material : Stainless Steel</li></ul>', 'Stainless Steel Cabinet Handle', 'KB - 0126 Stainless Steel Cabinet Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 1, NULL, '2022-04-11 04:32:23', '2022-04-11 04:32:29', '<figure class=\"table\"><table><tbody><tr><td>Holes Distance</td><td>Matte</td><td>Glossy</td></tr><tr><td>96 MM</td><td>40</td><td>40</td></tr><tr><td>128 MM</td><td>25</td><td>25</td></tr><tr><td>192 MM</td><td>20</td><td>20</td></tr><tr><td>256 MM</td><td>20</td><td>20</td></tr><tr><td>288 MM</td><td>20</td><td>20</td></tr></tbody></table></figure>'),
(26, 4, 'KB - 0128 Stainless Steel Cabinet Handle', 'kb-0128-stainless-steel-cabinet-handle', '26_1649671681.jpg', '<p>Available : COLOR SATIN / GLOSY [CHROME FINISH]</p><ul><li>Diameter : 10*12 MM Zupdi</li><li>Material : Stainless Steel</li></ul>', 'Stainless Steel Cabinet Handle', 'KB - 0128 Stainless Steel Cabinet Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 0, NULL, '2022-04-11 04:38:01', '2022-04-11 04:38:01', '<figure class=\"table\"><table><tbody><tr><td>Holes Distance</td><td>&nbsp;Glosy</td><td>Color Satin</td></tr><tr><td>96 MM</td><td>35</td><td>30</td></tr><tr><td>128 MM</td><td>25</td><td>20</td></tr><tr><td>192 MM</td><td>20</td><td>20</td></tr><tr><td>256 MM</td><td>20</td><td>20</td></tr><tr><td>288 MM</td><td>20</td><td>20</td></tr></tbody></table></figure>'),
(27, 4, 'KB - 0129 Stainless Steel Cabinet Handle', 'kb-0129-stainless-steel-cabinet-handle', '27_1649671892.jpg', '<p>Available : SATIN / GLOSY&nbsp;</p><ul><li>Diameter : 16*8 MM [D-handle]</li><li>Material : Stainless Steel</li></ul>', 'Stainless Steel Cabinet Handle', 'KB - 0129 Stainless Steel Cabinet Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 0, NULL, '2022-04-11 04:41:32', '2022-04-11 04:41:32', '<figure class=\"table\"><table><tbody><tr><td>Holes Distance</td><td>Glosy</td><td>Satin</td></tr><tr><td>96 MM</td><td>30</td><td>30</td></tr><tr><td>128 MM</td><td>20</td><td>20</td></tr><tr><td>192 MM</td><td>20</td><td>20</td></tr><tr><td>256 MM</td><td>20</td><td>20</td></tr><tr><td>288 MM</td><td>20</td><td>20</td></tr></tbody></table></figure>'),
(28, 4, 'KB - 0130 Stainless Steel Cabinet Handle', 'kb-0130-stainless-steel-cabinet-handle', '28_1649672211.jpg', '<p>Available : GLOSY(CHROME FINISH) /COLOR SATIN</p><ul><li>Diameter : 16mm Half Round</li><li>Material : Stainless Steel</li></ul>', 'Stainless Steel Cabinet Handle', 'KB - 0130 Stainless Steel Cabinet Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 0, NULL, '2022-04-11 04:46:51', '2022-04-11 04:46:51', '<figure class=\"table\"><table><tbody><tr><td>Holes Distance</td><td>Glosy</td><td>Color Satin</td></tr><tr><td>96 MM</td><td>40</td><td>30</td></tr><tr><td>128 MM</td><td>25</td><td>20</td></tr><tr><td>192 MM</td><td>20</td><td>20</td></tr><tr><td>256 MM</td><td>20</td><td>20</td></tr><tr><td>288 MM</td><td>20</td><td>20</td></tr></tbody></table></figure>'),
(29, 4, 'KB - 0136 Stainless Steel Cabinet Handle', 'kb-0136-stainless-steel-cabinet-handle', '29_1649672396.jpg', '<p>Available : GLOSY(CHROME FINISH) /COLOR SATIN</p><ul><li>Diameter : 16*8mm Heavy</li><li>Material : Stainless Steel</li></ul>', 'Stainless Steel Cabinet Handle', 'KB - 0136 Stainless Steel Cabinet Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 0, NULL, '2022-04-11 04:49:56', '2022-04-11 04:49:56', '<figure class=\"table\"><table><tbody><tr><td>Holes Distance</td><td>Glosy</td><td>Color Satin</td></tr><tr><td>96 MM</td><td>25</td><td>25</td></tr><tr><td>128 MM</td><td>15</td><td>15</td></tr><tr><td>192 MM</td><td>15</td><td>15</td></tr><tr><td>256 MM</td><td>15</td><td>15</td></tr><tr><td>288 MM</td><td>15</td><td>15</td></tr></tbody></table></figure>'),
(30, 4, 'KB - 0138 Stainless Steel Cabinet Handle', 'kb-0138-stainless-steel-cabinet-handle', '30_1649672690.jpg', '<p>Available : GLOSY(CHROME FINISH) /COLOR SATIN</p><ul><li>Diameter : 10*12mm Zopdi</li><li>Material : Stainless Steel</li></ul>', 'Stainless Steel Cabinet Handle', 'KB - 0138 Stainless Steel Cabinet Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 0, NULL, '2022-04-11 04:54:50', '2022-04-11 04:54:50', '<figure class=\"table\"><table><tbody><tr><td>Holes Distance</td><td>Glosy</td><td>Color Satin</td></tr><tr><td>96 MM</td><td>40</td><td>30</td></tr><tr><td>128 MM</td><td>25</td><td>20</td></tr><tr><td>192 MM</td><td>20</td><td>20</td></tr><tr><td>256 MM</td><td>20</td><td>20</td></tr><tr><td>288 MM</td><td>20</td><td>20</td></tr></tbody></table></figure>'),
(31, 4, 'KB - 0137 Stainless Steel Cabinet Handle', 'kb-0137-stainless-steel-cabinet-handle', '31_1649672971.jpg', '<p>Available Finish : COMBI</p><ul><li>Diameter : Capsule Handle</li><li>Material : Stainless Steel</li></ul>', 'Stainless Steel Cabinet Handle', 'KB - 0137 Stainless Steel Cabinet Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 1, NULL, '2022-04-11 04:58:57', '2022-04-11 04:59:37', '<figure class=\"table\"><table><tbody><tr><td>Holes Distance</td><td>PCS/BOX</td></tr><tr><td>96 MM</td><td>50</td></tr><tr><td>128 MM</td><td>30</td></tr><tr><td>192 MM</td><td>30</td></tr><tr><td>256 MM</td><td>30</td></tr><tr><td>288 MM</td><td>25</td></tr></tbody></table></figure>'),
(32, 4, 'KB - 0139 Stainless Steel Cabinet Handle', 'kb-0139-stainless-steel-cabinet-handle', '32_1649673373.jpg', '<p>Available : GLOSY(CHROME FINISH) , SATIN ,BLACK SATIN</p><ul><li>Diameter : 18mm Round Jump</li><li>Material : Stainless Steel</li></ul>', 'Stainless Steel Cabinet Handle', 'KB - 0139 Stainless Steel Cabinet Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 0, NULL, '2022-04-11 05:06:13', '2022-04-11 05:06:13', '<figure class=\"table\"><table><tbody><tr><td>Holes Distance</td><td>PCS/BOX</td></tr><tr><td>96 MM</td><td>25</td></tr><tr><td>128 MM</td><td>20</td></tr><tr><td>192 MM</td><td>15</td></tr><tr><td>256 MM</td><td>20</td></tr><tr><td>288 MM</td><td>20</td></tr></tbody></table></figure>'),
(33, 4, 'KB - 0140 Stainless Steel Cabinet Handle', 'kb-0140-stainless-steel-cabinet-handle', '33_1649673622.jpg', '<p>Available : GLOSY(CHROME FINISH) , SATIN ,BLACK SATIN</p><ul><li>Diameter : 12*8mm 2-STEP</li><li>Material : Stainless Steel</li></ul>', 'Stainless Steel Cabinet Handle', 'KB - 0140 Stainless Steel Cabinet Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 0, NULL, '2022-04-11 05:10:22', '2022-04-11 05:10:22', '<figure class=\"table\"><table><tbody><tr><td>Holes Distance</td><td>PCS/BOX</td></tr><tr><td>96 MM</td><td>30</td></tr><tr><td>128 MM</td><td>25</td></tr><tr><td>192 MM</td><td>20</td></tr><tr><td>256 MM</td><td>20</td></tr><tr><td>288 MM</td><td>20</td></tr></tbody></table></figure>'),
(34, 5, 'MD-001 Stainless Steel Main Door Handle', 'md-001-stainless-steel-main-door-handle', '34_1649673920.jpg', '<p>Available Finish: MATTE</p>', 'Stainless Steel Main Door Handle', 'MD-001 Stainless Steel Main Door Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 0, NULL, '2022-04-11 05:15:20', '2022-04-11 05:15:20', '<p>Size(C2C) : 8” , 10\" , 12\"</p><p>PCS/BOX : 1</p><p>FINISH : MATTE</p>'),
(35, 5, 'MD-003 Stainless Steel Main Door Handle', 'md-003-stainless-steel-main-door-handle', '35_1649674088.jpg', '<p>Available Finish : MATTE/MATTE BLACK</p>', 'Stainless Steel Main Door Handle', 'MD-003 Stainless Steel Main Door Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 0, NULL, '2022-04-11 05:18:08', '2022-04-11 05:18:08', '<p>25*6 Patti</p><p>Size(C2C) : 8” , 10\" , 12\"</p><p>PCS/BOX : 1</p><p>FINISH : MATTE</p><p>FINISH : MATTE BLACK</p>'),
(36, 5, 'MD-006 Stainless Steel Main Door Handle', 'md-006-stainless-steel-main-door-handle', '36_1649674256.jpg', '<p>Available Finish : Glosy(Laser Design)</p>', 'Stainless Steel Main Door Handle', 'MD-006 Stainless Steel Main Door Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 1, NULL, '2022-04-11 05:20:56', '2022-04-11 05:21:06', '<p>Glosy (Laser Design)</p><p>Size(C2C) : 8” , 10\" , 12\"</p><p>PCS/BOX : 1</p><p>FINISH : Glosy(Laser Design)</p>'),
(37, 5, 'MD-007 Stainless Steel Main Door Handle', 'md-007-stainless-steel-main-door-handle', '37_1649674486.jpg', '<p>Available FInish : Glosy (T-T)</p>', 'Stainless Steel Main Door Handle', 'MD-007 Stainless Steel Main Door Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 0, NULL, '2022-04-11 05:24:46', '2022-04-11 05:24:46', '<p>Glosy (T-T) Finish Pipe Handle</p><p>Size(C2C) : 8”</p><p>PCS/BOX : 1</p><p>FINISH : GLosy(T-T)</p>'),
(38, 5, 'MD008 - Waxwing SS Maindoor Handle', 'md008-waxwing-ss-maindoor-handle', '38_1649674681.jpg', '<p>Available Finish : Glosy Chrome</p>', 'Waxwing SS Maindoor Handle', 'MD008 - Waxwing SS Maindoor Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 0, NULL, '2022-04-11 05:28:01', '2022-04-11 05:28:01', '<p>Glosy Chrome</p><p>Size(C2C) : 8” , 10\" , 12\"</p><p>PCS/BOX &nbsp;: 1</p><p>FINISH : Glosy Chrome</p>'),
(39, 6, 'SS Shelf L Bat', 'ss-shelf-l-bat', '39_1649674975.jpg', '<p>Available Finish : MATTE</p>', 'SS Shelf L Bat', 'SS Shelf L Bat', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 0, NULL, '2022-04-11 05:32:55', '2022-04-11 05:32:55', '<p><strong>LB-01</strong></p><ul><li>Diamnetine: 25*5mm Stainless Steel</li><li>size : 12.5mm - 200 pcs / box</li></ul><p><strong>LB-02</strong></p><ul><li>25*5mm Stainless Steel</li><li>Size : 25mm - 100pcs / Box</li></ul>'),
(40, 7, 'Th - 001 Telephone Handle', 'th-001-telephone-handle', '40_1649676192.jpg', '<p>Available Finish : Brass Antique ,GLosy</p>', 'Telephone Handle', 'Th - 001 Telephone Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 0, NULL, '2022-04-11 05:53:12', '2022-04-11 06:32:30', '<p>&nbsp;Brass Antique ,GLosy</p><p>Size (C2C) : 8\"</p><p>PCS/BOX : 10</p>'),
(41, 7, 'Th - 002 Telephone Handle', 'th-002-telephone-handle', '41_1649676285.jpg', '<p>Available Finish : Brass Antique ,GLosy</p>', 'Telephone Handle', 'Th - 002 Telephone Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 0, NULL, '2022-04-11 05:54:45', '2022-04-11 06:32:29', '<p>&nbsp;Brass Antique ,GLosy</p><p>Size (C2C) : 8\"</p><p>PCS/BOX : 10</p>'),
(42, 7, 'Th - 003 Telephone Handle', 'th-003-telephone-handle', '42_1649676354.jpg', '<p>Available Finish : Brass Antique ,GLosy</p>', 'Telephone Handle', 'Th - 003 Telephone Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 0, NULL, '2022-04-11 05:55:54', '2022-04-11 06:32:28', '<p>&nbsp;Brass Antique ,GLosy</p><p>Size (C2C) : 8\"</p><p>PCS/BOX : 10</p>'),
(43, 7, 'Th - 004 Telephone Handle', 'th-004-telephone-handle', '43_1649676897.jpg', '<p>Available Finish : Brass Antique ,GLosy</p>', 'Telephone Handle', 'Th - 004 Telephone Handle', 'Established in the year 2003, Waxwing Manufacture is a leading company, engaged in Manufacturer a wide array of Stainless Steel Cabinet Handle, Stainless Steel Main Door Handle, SS L Bolt and many more. We source these products from the prestigious and certified vendors of the industry, who use finest quality material in the manufacturing of these products. Due to the support of our vendors, we are able to meet the diverse requirements of the clients. On the other hand, these products are known for their perfect finishing, flexible design, easy installation, high strength and corrosion resistance. Further, these products are also highly acclaimed due to their low maintenance, high performance, longer working life and seamless operation. Apart from this, to ensure their flawlessness at clients’ premises, the entire range is checked through various quality parameters before finally dispatching to our patrons.', 1, 0, 1, 1, NULL, '2022-04-11 05:59:30', '2022-04-11 06:32:27', '<p>&nbsp;Brass Antique ,GLosy</p><p>Size (C2C) : 8\"</p><p>PCS/BOX : 10</p>');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `delete_by` bigint(20) NOT NULL DEFAULT 0,
  `created_by` bigint(20) NOT NULL DEFAULT 0,
  `updated_by` bigint(20) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `img`, `status`, `delete_by`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 'Stainless Steel Cabinet Handle', '4_1649657575.jpg', 1, 0, 1, 0, NULL, '2022-04-11 00:42:55', '2022-04-11 00:42:55'),
(5, 'Stainless Steel Main Door Handle', '5_1649657913.jpg', 1, 0, 1, 1, NULL, '2022-04-11 00:44:35', '2022-04-11 00:48:33'),
(6, 'Vacuum Bat', '6_1649657711.jpg', 1, 0, 1, 0, NULL, '2022-04-11 00:45:11', '2022-04-11 00:45:11'),
(7, 'Telephone Handle', '7_1649676004.jpg', 1, 0, 1, 0, NULL, '2022-04-11 05:50:04', '2022-04-11 06:32:35');

-- --------------------------------------------------------

--
-- Table structure for table `product_inquiries`
--

CREATE TABLE `product_inquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT 0,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) NOT NULL DEFAULT 0,
  `updated_by` bigint(20) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_inquiries`
--

INSERT INTO `product_inquiries` (`id`, `product_id`, `name`, `email`, `mobile`, `message`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 6, NULL, NULL, NULL, '', 0, 0, '2022-04-08 08:13:18', '2022-04-08 05:35:14', '2022-04-08 08:13:18'),
(2, 6, NULL, NULL, NULL, '', 0, 0, '2022-04-08 08:13:13', '2022-04-08 05:35:25', '2022-04-08 08:13:13'),
(3, 6, 'Ronak Gadhiya', 'gadhiyaronak3@gmail.com', '09586213110', 'ASDFGHJKL', 0, 0, '2022-04-09 05:25:54', '2022-04-08 05:36:04', '2022-04-09 05:25:54'),
(4, 40, 'Ronak Gadhiya', 'gadhiyaronak3@gmail.com', '09586213110', 'I Need 50 pcs.', 0, 0, NULL, '2022-04-11 06:33:30', '2022-04-11 06:33:30'),
(5, 40, 'Ronak Gadhiya', 'gadhiyaronak3@gmail.com', '09586213110', 'I Need 50 pcs.', 0, 0, '2022-04-11 09:43:40', '2022-04-11 06:35:40', '2022-04-11 09:43:40'),
(6, 40, 'Ronak Gadhiya', 'gadhiyaronak3@gmail.com', '09586213110', 'I Need 50 pcs.', 0, 0, '2022-04-11 09:43:37', '2022-04-11 06:36:16', '2022-04-11 09:43:37'),
(7, 40, 'Ronak Gadhiya', 'gadhiyaronak3@gmail.com', '09586213110', 'I Need 50 pcs.', 0, 0, '2022-04-11 09:43:34', '2022-04-11 06:37:49', '2022-04-11 09:43:34'),
(8, 40, 'Ronak Gadhiya', 'gadhiyaronak3@gmail.com', '09586213110', 'I Need 50 pcs.', 0, 0, '2022-04-11 09:43:31', '2022-04-11 06:39:00', '2022-04-11 09:43:31'),
(9, 42, 'Ronak Gadhiya', 'gadhiyaronak3@gmail.com', '09586213110', 'efdgtdfg', 0, 0, '2022-04-11 09:43:43', '2022-04-11 06:40:09', '2022-04-11 09:43:43'),
(10, 38, 'Ronak Gadhiya', 'gadhiyaronak3@gmail.com', '09586213110', 'wdsgf', 0, 0, NULL, '2022-04-11 06:41:16', '2022-04-11 06:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `delete_by` bigint(20) NOT NULL DEFAULT 0,
  `created_by` bigint(20) NOT NULL DEFAULT 0,
  `updated_by` bigint(20) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `img`, `status`, `delete_by`, `created_by`, `updated_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'gdfgfgfg', '1_1649309934.jpg', 1, 1, 1, 1, '2022-04-10 23:30:49', '2022-04-07 00:04:38', '2022-04-10 23:30:49'),
(2, 'gngnjgh', '2_1649316486.jpg', 1, 1, 1, 1, '2022-04-10 23:30:45', '2022-04-07 01:58:06', '2022-04-10 23:30:45'),
(3, 'Living Luxury', '3_1649689828.jpg', 1, 0, 1, 0, NULL, '2022-04-11 09:40:28', '2022-04-11 09:40:28'),
(4, 'Office Style', '4_1649689884.jpg', 1, 0, 1, 0, NULL, '2022-04-11 09:41:24', '2022-04-11 09:41:24');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook_link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intragram_link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `printrest_link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_by` bigint(20) NOT NULL DEFAULT 0,
  `created_by` bigint(20) NOT NULL DEFAULT 0,
  `updated_by` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `facebook_link`, `intragram_link`, `youtube_link`, `google_link`, `printrest_link`, `delete_by`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/parth.manufacture', 'https://instagram.com/waxwing_india?utm_medium=copy_link', 'https://youtube.com/channel/UC8v97DGZ_hTrUHeGuoKrrqA', NULL, NULL, 0, 0, 0, '2022-04-12 00:53:49', '2022-04-12 01:36:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', NULL, '$2y$10$TZ94iWNi9TgC8BDl7I52luSMRkwHkQ7N4HIkjFXuMp8xI7YjE/x8q', NULL, '2022-04-05 22:46:16', '2022-04-05 22:46:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_categorie_id_foreign` (`categorie_id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `measurements`
--
ALTER TABLE `measurements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_inquiries`
--
ALTER TABLE `product_inquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `measurements`
--
ALTER TABLE `measurements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_inquiries`
--
ALTER TABLE `product_inquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `blog_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
