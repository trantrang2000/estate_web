-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 05:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `thumbnail`, `url`, `position`, `page`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Repellendus sint mollitia unde sit tempora.', 'https://fakeimg.pl/1920x1080/?text=aut', 'http://vu.ac.vn/ea-qui-sit-illo-dolorem-dolorem-maxime-vel-voluptas', 'sidebar', 'home', 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(2, 'Dolores quo tempora commodi assumenda.', 'https://fakeimg.pl/1920x1080/?text=in', 'http://www.s.com/beatae-nesciunt-aperiam-est-ab-est-inventore-vel.html', 'sidebar', 'home', 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(3, 'Animi aperiam eos omnis voluptas.', 'https://fakeimg.pl/1920x1080/?text=aliquid', 'http://ch.net/', 'sidebar', 'home', 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(4, 'Laboriosam tenetur et eaque repudiandae id.', 'https://fakeimg.pl/1920x1080/?text=rerum', 'http://www.da.pro.vn/eos-ipsum-aut-dicta-facilis-exercitationem', 'sidebar', 'home', 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(5, 'Minus architecto iusto commodi neque dolorum cum.', 'https://fakeimg.pl/1920x1080/?text=id', 'https://uong.health.vn/dolorum-et-velit-ducimus-voluptas-repellat.html', 'sidebar', 'home', 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(6, 'Inventore iure rerum sunt dolorem.', 'https://fakeimg.pl/1920x1080/?text=laboriosam', 'http://www.ha.org.vn/non-et-magni-sunt-odio', 'sidebar', 'home', 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(7, 'Aliquid culpa odit numquam accusamus enim soluta dolore dolorum.', 'https://fakeimg.pl/1920x1080/?text=sit', 'http://www.ong.org.vn/voluptas-eligendi-aut-non-qui-dolor-et.html', 'sidebar', 'home', 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(8, 'Neque rerum similique et et.', 'https://fakeimg.pl/1920x1080/?text=quia', 'http://ha.com/consequatur-deserunt-quia-molestiae-et-quia', 'sidebar', 'home', 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(9, 'Enim laudantium est voluptas nesciunt est perferendis.', 'https://fakeimg.pl/1920x1080/?text=iste', 'http://dung.ac.vn/', 'sidebar', 'home', 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(10, 'Explicabo numquam cum nesciunt minus eum dolorem magnam.', 'https://fakeimg.pl/1920x1080/?text=iste', 'https://www.than.com/quia-accusantium-consequatur-ullam-ea-nobis-quia-iure-natus', 'sidebar', 'home', 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24');

-- --------------------------------------------------------

--
-- Table structure for table `categories_news`
--

CREATE TABLE `categories_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories_news`
--

INSERT INTO `categories_news` (`id`, `parent_id`, `title`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Ducimus voluptas sit repudiandae asperiores quam ipsam.', '2021-05-04 09:19:23', '2021-05-04 09:19:23'),
(2, NULL, 'Facilis atque sed est dolorem sequi dicta doloribus aut.', '2021-05-04 09:19:23', '2021-05-04 09:19:23'),
(3, NULL, 'Aperiam culpa repudiandae facere et beatae qui omnis modi.', '2021-05-04 09:19:23', '2021-05-04 09:19:23'),
(4, NULL, 'Et blanditiis dolorum sunt.', '2021-05-04 09:19:23', '2021-05-04 09:19:23'),
(5, NULL, 'Et esse vel quibusdam dolores illo excepturi.', '2021-05-04 09:19:23', '2021-05-04 09:19:23'),
(6, NULL, 'Quas veniam repellendus voluptatibus placeat quis nobis.', '2021-05-04 09:19:23', '2021-05-04 09:19:23'),
(7, NULL, 'Consequatur est dolorem facilis et aut.', '2021-05-04 09:19:23', '2021-05-04 09:19:23'),
(8, NULL, 'Totam ullam qui incidunt asperiores quod quo omnis odio.', '2021-05-04 09:19:23', '2021-05-04 09:19:23'),
(9, NULL, 'Qui vero sunt ut quo fuga.', '2021-05-04 09:19:23', '2021-05-04 09:19:23'),
(10, NULL, 'Odit et voluptas ipsam ipsam magni.', '2021-05-04 09:19:23', '2021-05-04 09:19:23');

-- --------------------------------------------------------

--
-- Table structure for table `categories_product`
--

CREATE TABLE `categories_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories_product`
--

INSERT INTO `categories_product` (`id`, `parent_id`, `title`, `type`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Bán đất nền dự án', 0, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(2, NULL, 'Cho thuê căn hộ chung cư', 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(3, NULL, 'Cho thuê nhà riêng', 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(4, NULL, 'Cho thuê nhà mặt phố', 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(5, NULL, 'Bán nhà mặt phố', 0, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(6, NULL, 'Bán nhà biệt thự, liền kề', 0, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(7, NULL, 'Cho thuê nhà trọ, phòng trọ', 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(8, NULL, 'Bán nhà riêng', 0, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(9, NULL, 'Cho thuê văn phòng', 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(10, NULL, 'Bán căn hộ chung cư', 0, '2021-05-04 09:19:24', '2021-05-04 09:19:24');

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
(2, '2021_05_03_111253_create_categories_news_table', 1),
(3, '2021_05_03_111346_create_news_table', 1),
(4, '2021_05_03_111551_create_slides_table', 1),
(5, '2021_05_03_111653_create_banners_table', 1),
(6, '2021_05_03_111833_create_categories_product_table', 1),
(7, '2021_05_03_111940_create_products_table', 1),
(8, '2021_05_03_112338_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `category_news_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `content`, `author`, `source`, `thumbnail`, `views`, `category_news_id`, `created_at`, `updated_at`) VALUES
(1, 'Cumque voluptates perferendis ad eius totam eveniet accusamus.', 'Quis dolores voluptatem et suscipit fuga aspernatur. Minima amet quos nisi in quia. Accusantium qui voluptate voluptatem ullam molestiae cupiditate est.', 'Sit incidunt voluptas architecto architecto aspernatur necessitatibus pariatur. Necessitatibus qui et dolorum aperiam sed. Est repellat et velit voluptatem.', 'Lý Mẫn', 'http://www.don.org.vn/magnam-itaque-tenetur-harum-quisquam-similique-molestiae-nisi', 'https://fakeimg.pl/1920x1080/?text=sit', 51, 4, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(2, 'Maxime et recusandae quo suscipit nulla nobis.', 'Aut est dolore in vitae officia. Est iure eum voluptas. Dolor eos sequi neque sit et. Sint sed beatae id nisi minus sed et.', 'Ut voluptates non et aliquam cum excepturi. Rerum et necessitatibus quo non sed. Quod esse eum labore ut.', 'Ông. Xa Khai Hiếu', 'http://liu.net.vn/occaecati-quia-doloribus-doloribus.html', 'https://fakeimg.pl/1920x1080/?text=enim', 45, 8, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(3, 'Amet eaque dolor incidunt illum rerum.', 'In quisquam laboriosam et non qui consectetur nulla harum. Maiores molestiae nostrum quidem veniam id quo sed ipsum.', 'Voluptas et in consequatur qui sunt sint. Delectus beatae ea et inventore rerum natus excepturi. Quidem accusantium minima sit qui molestiae labore quaerat.', 'Anh. Cam Tiển', 'http://ca.org/non-quas-excepturi-minus-autem-error-ducimus-consectetur', 'https://fakeimg.pl/1920x1080/?text=aspernatur', 24, 5, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(4, 'Et animi dolores aut sequi atque eveniet accusantium.', 'Et quas labore aut vero. Architecto sed quidem quibusdam repudiandae nihil qui amet. Facilis ad est maiores. Qui impedit aliquid maxime explicabo veritatis impedit nam.', 'Voluptatum necessitatibus soluta sed nihil. Enim ipsa tempore omnis cumque ullam. Placeat ipsa a itaque veniam sint ut aliquid omnis. Vero non aliquid ut qui.', 'Bác. Uông Hoàn Trang', 'http://khau.org/neque-nihil-autem-nemo-aut-dolorum-sed', 'https://fakeimg.pl/1920x1080/?text=sunt', 38, 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(5, 'Asperiores velit vitae neque ut aut velit.', 'Aliquam quis placeat ab. Dolorem provident atque voluptate deleniti voluptate cum quis. Est voluptates voluptatem quia corrupti sed ea est officia. Odit quae vel et blanditiis corrupti.', 'Quia sunt libero vel. Cum aut adipisci eum libero aperiam dolorem qui.', 'Bà. Phương Hoa Thảo', 'http://www.tiep.gov.vn/', 'https://fakeimg.pl/1920x1080/?text=esse', 32, 3, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(6, 'Sed eum voluptate facilis sunt quisquam.', 'Ullam architecto qui sequi labore praesentium. Et nemo voluptas et suscipit voluptates iusto.', 'Veniam aliquid culpa quis fugiat. Nemo amet quia dicta maxime aliquam velit cum. Id debitis quis nobis tenetur ex qui.', 'Trương Hảo', 'http://www.kim.org.vn/ea-ut-voluptas-aut.html', 'https://fakeimg.pl/1920x1080/?text=ratione', 61, 7, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(7, 'Consequatur et voluptatem eligendi.', 'Qui quia ut officiis excepturi quidem cupiditate illum. Incidunt illum molestias quia ducimus. Quibusdam ipsum maxime molestias expedita.', 'Aut fuga qui culpa earum. Alias alias tempore inventore ipsum. Doloremque eaque laborum maiores autem ab omnis. Unde sequi rerum iste amet eligendi qui.', 'Lữ Khương Lạc', 'http://www.bac.org/soluta-non-non-et-veritatis-totam-quas', 'https://fakeimg.pl/1920x1080/?text=aut', 10, 5, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(8, 'Dignissimos voluptas fugiat reprehenderit.', 'Voluptatem sapiente natus et sunt et minima ut. Quod voluptatum et magnam eos perspiciatis et id. Nisi et magni omnis vero. Quaerat distinctio molestias laudantium sunt qui rerum sit.', 'Dicta natus est aut ut culpa. Soluta doloremque est porro incidunt occaecati est nihil. Eos quas expedita dolores cupiditate eligendi. Aut repellendus quos maxime rerum cum quia ut beatae.', 'Bác. Sơn Thiện', 'http://diep.com/recusandae-enim-est-blanditiis-nostrum-vitae', 'https://fakeimg.pl/1920x1080/?text=eos', 39, 6, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(9, 'Alias odit debitis doloremque.', 'Sed eum molestiae voluptatum quam et aliquam. Ducimus voluptatem quia voluptatem commodi repudiandae deserunt. Et qui nisi et debitis.', 'Impedit rerum laborum iusto. Tempora nostrum qui unde voluptatem sunt expedita. Ut et iusto ratione dolore. Veritatis aut itaque quas corporis.', 'Âu Cát Ninh', 'http://www.nhiem.net/', 'https://fakeimg.pl/1920x1080/?text=et', 64, 7, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(10, 'Laborum sint distinctio doloribus ipsum illum perspiciatis itaque.', 'Placeat rem et sint aut qui. Veritatis voluptatem voluptate adipisci accusamus aspernatur earum ducimus.', 'Quis et numquam optio sed. Minima voluptas facere consequuntur nam atque voluptatem accusamus odit. Eum culpa dolor veniam eaque vel odit est. Voluptas culpa quas exercitationem voluptatum amet.', 'Bác. Thiều Song Thắm', 'http://nh.com/debitis-eligendi-velit-sint-et-magnam-voluptatem.html', 'https://fakeimg.pl/1920x1080/?text=suscipit', 59, 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `garages` int(11) DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `bedrooms` int(11) NOT NULL DEFAULT 1,
  `bathrooms` int(11) NOT NULL DEFAULT 1,
  `floors` int(11) NOT NULL DEFAULT 1,
  `direction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_build` int(11) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `features` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `views` int(11) NOT NULL DEFAULT 0,
  `category_product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `address`, `city`, `district`, `garages`, `type`, `bedrooms`, `bathrooms`, `floors`, `direction`, `year_build`, `size`, `description`, `content`, `images`, `thumbnail`, `features`, `price`, `status`, `views`, `category_product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Deserunt alias eius in consectetur porro nostrum aperiam.', '3, Thôn Thanh Bích, Phường Xuân, Quận Khương Quế\nHà Nam', '563, Ấp Vượng Kim, Phường 14, Huyện Khanh\nVĩnh Long', '3 Phố Cung Thể Ân, Phường An, Quận Thanh\nHà Nội', 9, 0, 8, 3, 1, 'Đông Nam', 2013, 119, 'Dolorum doloremque voluptates dolores distinctio. Sunt pariatur est ut minus inventore optio ut et. Delectus non et saepe aperiam blanditiis vel. Porro voluptatem repudiandae autem.', 'Totam odio quidem soluta a quia similique. Necessitatibus ea aut laboriosam quibusdam. Dolor eum quod consequuntur nulla modi. Labore possimus minus ducimus quas exercitationem porro.', NULL, 'https://fakeimg.pl/1920x1080/?text=hic', NULL, 119934453, 0, 76, 7, 7, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(2, 'Aut accusantium unde nisi quasi et aliquid sint et.', '31, Ấp Tiến Lý, Xã 9, Huyện Lạc\nBắc Giang', '222 Phố Nhiên, Xã 4, Huyện Trương Vi\nHải Phòng', '2, Ấp Hán, Xã Lý, Huyện Ty Điệp\nBình Thuận', 5, 1, 3, 9, 3, 'Đông Nam', 2021, 184, 'Exercitationem magnam illo labore. Molestiae ad sed ratione quidem quo perspiciatis. Atque ut facere qui est repellendus.', 'Doloribus veritatis doloremque est et magni. Labore mollitia nemo et pariatur veritatis deserunt dolor aut. Ea et impedit sed sunt.', NULL, 'https://fakeimg.pl/1920x1080/?text=hic', NULL, 126757743, 0, 41, 6, 4, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(3, 'Vel eligendi eveniet aspernatur inventore nulla.', '6, Thôn Loan Hán, Xã Trầm Ngô, Huyện Nguyễn Lộc\nAn Giang', '93 Phố Hòa, Xã Vi Từ Sương, Quận 9\nQuảng Nam', '97 Phố Lực, Xã 33, Quận Yên Khanh\nĐà Nẵng', 7, 3, 1, 7, 6, 'Đông Nam', 2006, 48, 'Exercitationem cum hic libero ipsa amet tempore consequatur. Iure odit ullam eum numquam eos aut. Nam et et earum sed mollitia possimus non nulla.', 'Autem et quis quis dolore aut omnis. Rerum et asperiores necessitatibus assumenda tempora dolor. Sit occaecati omnis accusantium itaque odit. Laborum ut qui ut.', NULL, 'https://fakeimg.pl/1920x1080/?text=et', NULL, 196836154, 0, 21, 10, 9, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(4, 'Ullam est qui atque corporis eligendi iure aut.', '2010, Thôn Như Lĩnh, Xã Hiệp Giáp, Huyện 5\nVĩnh Long', '7549 Phố Thy, Xã Mạch Hoa Bảo, Quận Lễ\nĐà Nẵng', '28, Thôn Doãn Anh, Phường Nhâm Mạnh Ca, Quận Khánh\nHưng Yên', 10, 0, 5, 1, 10, 'Đông Nam', 2005, 161, 'Inventore quibusdam aut eum. Omnis enim alias repellat vitae accusantium. Assumenda et aperiam ipsa voluptatem. Beatae cupiditate quis assumenda voluptas sed numquam.', 'Ab voluptas aut adipisci ea praesentium delectus laboriosam aut. Qui quidem ullam aut fugit commodi repudiandae. Architecto iusto architecto exercitationem voluptatum non.', NULL, 'https://fakeimg.pl/1920x1080/?text=accusantium', NULL, 269800477, 0, 49, 4, 4, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(5, 'Facere vel et esse dolor rem at magni.', '4 Phố Trác, Xã 30, Huyện Du\nĐà Nẵng', '817, Ấp Huệ Quý, Xã Duy, Quận Từ Hoán\nLào Cai', '0 Phố Hình Tấn Hiền, Phường Cúc, Quận Du Định\nHà Nội', 2, 1, 10, 2, 10, 'Đông Nam', 2003, 120, 'Officiis omnis explicabo fugiat animi. Debitis sit consequatur culpa. Eos suscipit qui rem praesentium sit praesentium.', 'Temporibus qui consequatur magni sint quia. Ut qui sunt ab possimus placeat. Perferendis libero fuga neque sit voluptas accusantium quis. Ut aspernatur delectus a.', NULL, 'https://fakeimg.pl/1920x1080/?text=inventore', NULL, 305593638, 0, 97, 7, 8, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(6, 'Nulla quasi id inventore dolore.', '8, Ấp Lò, Phường Phi Đình Đào, Quận 38\nLạng Sơn', '2374 Phố Nhữ Diệp Chung, Phường 06, Quận Thân Sáng Hoài\nHồ Chí Minh', '53, Thôn Vi, Phường Bích Hùng, Huyện Hàn\nVĩnh Long', 6, 2, 2, 9, 5, 'Đông Nam', 2021, 99, 'Autem quia rerum fugit quis aspernatur nobis. Quibusdam ipsum nulla quae voluptatem aut sapiente dolor. Facilis excepturi id consequatur sit illo accusantium.', 'Sed qui architecto culpa distinctio. Commodi omnis quia tenetur dolorum ut est. In cupiditate qui voluptate. Molestiae qui ea rerum omnis id deleniti.', NULL, 'https://fakeimg.pl/1920x1080/?text=aperiam', NULL, 129119033, 1, 96, 7, 7, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(7, 'Et vel modi impedit qui.', '16 Phố Hán, Xã 32, Quận Bạc\nYên Bái', '569, Thôn Nghi, Xã 55, Quận Nhã Đài\nHà Tĩnh', '85 Phố Triệu Thiện Hữu, Phường Khương Đình Giang, Huyện 69\nVĩnh Long', 3, 1, 2, 8, 4, 'Đông Nam', 2005, 162, 'Excepturi id corrupti numquam dolorem. Qui possimus quam et adipisci autem et. Tempore pariatur numquam qui consequuntur. Illum quo quo consequatur praesentium.', 'Ea ea et dolor tempora voluptate. Atque non animi et veniam placeat. Fugiat perspiciatis consequatur ut harum. Quidem veritatis perferendis voluptatem earum rerum.', NULL, 'https://fakeimg.pl/1920x1080/?text=veniam', NULL, 106748215, 1, 33, 4, 11, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(9, 'Molestiae odio quia ad illum perferendis.', '686 Phố Bế Nhiên Đăng, Xã 60, Quận Phụng\nThái Nguyên', '337, Thôn Oanh, Phường Hồng Ái Mỹ, Huyện Thập\nLạng Sơn', '1217, Ấp Hiền Kiệt, Xã Hảo Hà, Huyện Cảnh Hiệp\nQuảng Nam', 3, 2, 9, 6, 10, 'Đông Nam', 2004, 126, 'Quia perferendis neque et fugit perferendis earum nesciunt. Consequuntur fugiat sequi sunt. Quas qui aliquam reprehenderit nostrum fugit corrupti. Distinctio eos culpa rerum voluptas.', 'Iusto molestiae totam sint minima a. Occaecati laborum tempora soluta est. Numquam vitae sit officiis voluptatem recusandae. Incidunt quod molestias numquam non sunt et optio.', NULL, 'https://fakeimg.pl/1920x1080/?text=aut', NULL, 187971927, 1, 19, 2, 3, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(12, 'Bán nhà Định Công Hạ, ô tô vào nhà, gần hồ Định Công. Giá chưa đến 4,5 t', 'số 44 ngõ 421 phường Xuân Đỉnh', '', 'Quận Bắc Từ Liêm', 1, 0, 5, 5, 5, 'Đông Nam', 2020, 200, '<p>Nhà đẹp</p>', '<p>Bán nhà Định Công Hạ, ô tô vào nhà. Gần hồ Định Công. Giá chưa đến 4,5 tỷ.<br>+ Vị trí: Rất đẹp, ngõ thông tứ tung, đi bộ ra hồ Định Công tập thể dục. Giao thông cực thuận tiện, thông Trần Hòa, Linh Đàm, hồ Định Công. Khu vực đông dân cư, an ninh tốt, dễ sống.<br>+ Tương lai trước nhà mở đường rộng thông ra hồ, giá trị tăng cao.<br>+ Nhà 2 thoáng, vượng khí, cực lộc. Nhà xây 4 tầng, 4 phòng ngủ, bếp, khách, 4 vệ sinh, chỗ để xe.<br>+ Chủ đang sửa sang lại, 1 tuần nữa nhà long lanh như mới. Khách mua chỉ việc dọn về ở.<br>+ Sổ đỏ chính chủ, phân lô, rất đẹp.</p>', '', 'http://localhost/estate_web/public/upload/product/162031465422424285_1915822648671514_7439351036829734123_o-1024x576.jpg', '{\"0\":\"0\",\"3\":\"3\",\"4\":\"4\"}', 2147483647, 1, 0, 8, 1, '2021-05-06 15:24:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title`, `thumbnail`, `url`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Odit odio reprehenderit eum dolorem deserunt modi.', 'https://fakeimg.pl/1920x1080/?text=autem', 'http://www.be.edu.vn/consequatur-non-voluptate-quia-enim', 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(2, 'Enim praesentium perspiciatis dolorum aperiam praesentium suscipit delectus.', 'https://fakeimg.pl/1920x1080/?text=et', 'http://www.tu.com/natus-corrupti-animi-fugit-iure-optio', 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(3, 'Voluptatem rem labore aliquid ipsum quia maiores quo.', 'https://fakeimg.pl/1920x1080/?text=maiores', 'https://www.bac.edu.vn/eos-dolores-laborum-est-et-molestiae-accusantium', 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(4, 'Deserunt vitae dolores eveniet nulla asperiores eum minus omnis.', 'https://fakeimg.pl/1920x1080/?text=nihil', 'http://www.tong.edu.vn/ut-quaerat-nisi-eius-eligendi.html', 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(5, 'Ad porro architecto numquam blanditiis nulla eligendi.', 'https://fakeimg.pl/1920x1080/?text=officiis', 'https://chu.org.vn/sed-rem-occaecati-molestiae-nihil-modi-nostrum.html', 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(6, 'Eveniet aut ullam consequatur natus modi.', 'https://fakeimg.pl/1920x1080/?text=consequatur', 'https://www.don.com.vn/sed-culpa-est-deserunt-ea', 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(7, 'Fugiat quia aut adipisci nisi.', 'https://fakeimg.pl/1920x1080/?text=enim', 'http://han.biz/sequi-perferendis-minus-dicta-hic-sed', 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(8, 'Necessitatibus dolore veniam rerum alias vitae occaecati.', 'https://fakeimg.pl/1920x1080/?text=maiores', 'http://le.org.vn/id-nulla-voluptatibus-nemo-et-aliquid-explicabo-et-qui', 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(9, 'Dolor dolores magni vitae incidunt sint consectetur molestiae.', 'https://fakeimg.pl/1920x1080/?text=sapiente', 'http://nham.com.vn/', 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24'),
(10, 'In sed eligendi qui vel.', 'https://fakeimg.pl/1920x1080/?text=minima', 'http://khut.com/quisquam-ea-occaecati-reiciendis-adipisci-architecto-eos-voluptatem', 1, '2021-05-04 09:19:24', '2021-05-04 09:19:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `fullname`, `phone`, `address`, `password`, `permission`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'trangtth', 'trang2000@gmail.com', 'Tran Thi Huyen Trang', '0973793711', NULL, '5f4dcc3b5aa765d61d8327deb882cf99', 1, 'GlNdQFiEjv', NULL, NULL),
(2, 'd.nha', 'viet.trinh@bac.gov.vn', 'Bì Ngôn', '(84)(188)243-5306', '69 Phố Lữ, Phường 46, Quận 8\nVĩnh Long', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 'pAlpFH6ymt', '2021-05-04 09:19:23', '2021-05-04 09:19:23'),
(3, 'xbach', 'akhut@tieu.biz.vn', 'Thái Họa Châu', '(055) 401 9380', '24, Thôn Ung Hoán, Phường Bạch Phong Phương, Huyện Phúc Hàng\nKiên Giang', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 'f36PW1NEsm', '2021-05-04 09:19:23', '2021-05-04 09:19:23'),
(4, 'phuc34', 'gia.tram@hotmail.com', 'Trà Đoan Mi', '072 213 2213', '3557 Phố Lưu, Xã Mạnh, Huyện 1\nCần Thơ', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 'rbcj38r8V5', '2021-05-04 09:19:23', '2021-05-04 09:19:23'),
(5, 'm.lam', 'trung.thap@gmail.com', 'Bác. Doãn Hậu', '(84)(210)685-8679', '8782 Phố Khâu Dương Sương, Phường Hạnh, Quận Hiển Vi\nĐà Nẵng', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 'WMQUed6vDJ', '2021-05-04 09:19:23', '2021-05-04 09:19:23'),
(6, 'han.quc', 'th.cn@yahoo.com', 'Cụ. Nông Sỹ Nghiêm', '08 5090 9158', '97, Ấp Khánh Khu, Phường Khổng, Huyện Thúy Thiện\nHải Dương', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, '2JAZl55unQ', '2021-05-04 09:19:23', '2021-05-04 09:19:23'),
(7, 'khanh75', 'oca@danh.com', 'Anh. Nghị Bách Minh', '(84)(126)772-9351', '35 Phố Trác Vĩ Quyên, Xã 91, Huyện Quế Khang\nCần Thơ', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, '1whsUVUPFP', '2021-05-04 09:19:23', '2021-05-04 09:19:23'),
(8, 'thao37', 'nha27@gmail.com', 'Chú. Khương Quốc Tiền', '84-164-618-2467', '08 Phố Vương Tâm Hương, Xã Thuận Văn, Quận Kim\nHà Nội', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 'v12NoW5hR4', '2021-05-04 09:19:23', '2021-05-04 09:19:23'),
(9, 'khuc.v', 'ivu@ha.health.vn', 'Đoàn Lương Khiếu', '84-96-858-6738', '45 Phố Nhu, Phường Trường Lĩnh, Huyện 6\nĐà Nẵng', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 'irxVPYbUOa', '2021-05-04 09:19:23', '2021-05-04 09:19:23'),
(10, 'vung02', 'hue08@di.com', 'Cụ. Cái Lạc', '092 811 9230', '3641 Phố Tăng Liêm Đôn, Phường Trịnh, Quận Mã\nĐắk Lắk', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, '4MnNWZcutd', '2021-05-04 09:19:23', '2021-05-04 09:19:23'),
(11, 'lta', 'bche@gmail.com', 'Bà. Quản Đào', '0710 464 6897', '8 Phố Phí Tú Hiếu, Xã 87, Quận Nhiên Nương\nCần Thơ', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 'fuobrKMz0X', '2021-05-04 09:19:23', '2021-05-04 09:19:23'),
(12, 'tungdd', 'tungdd98@gmail.com', 'Dang Duc Tung', '0973793711', 'số 44 ngõ 421 phường Xuân Đỉnh', '202cb962ac59075b964b07152d234b70', 0, NULL, '2021-05-06 15:21:02', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories_news`
--
ALTER TABLE `categories_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories_product`
--
ALTER TABLE `categories_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_category_news_id_foreign` (`category_news_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_product_id_foreign` (`category_product_id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories_news`
--
ALTER TABLE `categories_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories_product`
--
ALTER TABLE `categories_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_category_news_id_foreign` FOREIGN KEY (`category_news_id`) REFERENCES `categories_news` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_product_id_foreign` FOREIGN KEY (`category_product_id`) REFERENCES `categories_product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
