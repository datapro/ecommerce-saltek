-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2025 at 03:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Men Wears', 'men-wears', 'All kinds of men wears', 'categories/KRzRhq5wMofBVmrydod9hHDp30r6WOw20nRAcBm1.webp', 1, '2025-11-29 04:52:25', '2025-11-29 04:52:25'),
(2, 'Cookie and Bakery', 'cookie-and-bakery', 'All cookies and bakeries', 'categories/cn7AGHSQ0d8sdUlmDXKH8hvnHLghDWHxv986AXDY.webp', 1, '2025-11-29 04:54:02', '2025-11-29 04:54:02'),
(3, 'Decor Ornament', 'decor-ornament', 'All ornament', 'categories/iexMBpxptiWynMIdWaCaEQEs3s84Tb6ZcVxUQsN9.webp', 1, '2025-11-29 04:55:32', '2025-11-29 04:55:32'),
(4, 'Women\'s Wear', 'womens-wear', 'all women wears', 'categories/V7sqnift4PQs4JuJgBhr40edOJnrFuEIV2BxuePv.webp', 1, '2025-11-29 04:56:16', '2025-11-29 04:56:16'),
(5, 'Materials', 'magnetic-lick', 'magnets', 'categories/82X22Co0Dy0vle2UgEeYcNtZUa3leKWqbBHIT0rN.webp', 1, '2025-11-29 04:57:40', '2025-11-29 04:58:42'),
(6, 'Electronics', 'electronics', 'all electronics', 'categories/LnV5KMqSEQeO0Eczpg29H4l4HlfqPobJK4ueyUJ6.webp', 1, '2025-11-29 04:59:36', '2025-11-29 04:59:36'),
(7, 'Shoes', 'shoes', 'All shoes', 'categories/pcdDuP84oAnzf2HlEImkaepd3OkUtvJ5Vl9bQLFO.webp', 1, '2025-11-29 05:00:42', '2025-11-29 05:00:42'),
(8, 'T-Shirt', 't-shirt', 'all t-shirts', 'categories/WMc92TeqdiCza57E3THMDoxMfgwoqzqpzVMV6gcU.webp', 1, '2025-11-29 05:01:30', '2025-11-29 05:01:30'),
(9, 'short', 'short', 'all shortd', 'categories/zTLInRG8bTUTTjLbXj5WeCW8jZ4n7iomfycY18PR.webp', 1, '2025-11-29 05:02:17', '2025-11-29 05:02:17'),
(10, 'Kictchen utensils', 'kictchen-utensils', 'all kitchen utencils', 'categories/ivmcYvIMs9VahlWP5xHmpWhwviVApEpxFLiScFyQ.webp', 1, '2025-11-29 05:03:13', '2025-11-29 05:03:13'),
(11, 'Bags', 'bags', 'all bags', 'categories/veqCSC2PRKnskE2mzPyDA3RK4YrDoFgW8Ti7A4nX.webp', 1, '2025-11-29 05:04:15', '2025-11-29 05:04:15'),
(12, 'Home Material', 'home-material', 'allhome materials', 'categories/7hHmcLh6pYhcpm19AVoMB5I0KPpAgg13Y4TZgQ8Q.webp', 1, '2025-11-29 05:05:03', '2025-11-29 05:05:03'),
(13, 'Jewelries', 'jewelrries', 'all jewelries', 'categories/NsAJd9yAIhePKIWuvhCm7ln6DjxTEr5DmcekBQ4E.webp', 1, '2025-11-29 05:06:39', '2025-11-30 16:49:19');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '0001_01_01_000000_create_users_table', 1),
(14, '0001_01_01_000001_create_cache_table', 1),
(15, '0001_01_01_000002_create_jobs_table', 1),
(16, '2025_11_27_154749_create_products_table', 1),
(17, '2025_11_28_052336_create_categories_table', 1),
(18, '2025_11_28_055753_add_category_id_to_products_table', 1),
(19, '2025_11_29_064945_remove_category_from_products_table', 2),
(20, '2025_11_29_070005_create_product_images_table', 3),
(21, '2025_11_30_102538_add_size_to_products_table', 4),
(22, '2025_11_30_230957_add_role_to_users_table', 5),
(23, '2025_12_01_142145_create_contacts_table', 6),
(25, '2025_12_03_203132_create_orders_table', 7),
(26, '2025_12_03_210735_create_order_items_table', 8),
(27, '2025_12_03_213150_add_product_name_to_order_items_table', 9),
(28, '2025_12_04_104722_add_image_to_order_items_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `customer_phone` varchar(255) DEFAULT NULL,
  `customer_address` text DEFAULT NULL,
  `customer_say` text DEFAULT NULL,
  `total` decimal(10,2) NOT NULL DEFAULT 0.00,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `customer_email`, `customer_phone`, `customer_address`, `customer_say`, `total`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Emmanuel Ogbebor', 's@gmail.com', '07032446095', '27th solanke Street', 'yes', 11.00, 'paid', '2025-12-04 13:38:21', '2025-12-04 13:38:21');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `subtotal` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `name`, `image`, `price`, `quantity`, `subtotal`, `created_at`, `updated_at`) VALUES
(6, '7', '28', 'Men’s Medieval Knight Graphics T-shirt Light Shirt with St George’s Cross', NULL, '10.50', '1', '10.5', '2025-12-04 13:38:21', '2025-12-04 13:38:21');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `productname` varchar(255) NOT NULL,
  `size` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `tax` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `productname`, `size`, `description`, `price`, `stock`, `image`, `slug`, `brand`, `weight`, `tax`, `color`, `sku`, `created_at`, `updated_at`) VALUES
(4, 2, '10 PCs Red Christmas Tree Cookie And Bakery Box', NULL, 'This product is a set of 10 medium-sized red Christmas tree cookie and bakery boxes, perfect for gifting baked goods during the festive season. The boxes are designed in a tree shape, adding a cute and festive touch to your presents. With a vibrant red colour, these boxes are sure to make your gifts stand out and help spread some Christmas cheer. Ideal for homemade treats or purchased baked goods, these boxes are a stylish and practical way to wrap and present your festive treats.', 20.00, 40, NULL, '10-pcs-red-christmas-tree-cookie-and-bakery-box', 'Unbranded', '1kg', 'taxable', 'red', '6565678', '2025-11-29 06:20:26', '2025-11-29 06:20:26'),
(5, 3, 'Reptile Basking Hide Cave, Decor Ornament with Climbing Terrace, Safe Hiding', NULL, 'The Reptile Basking Hide Cave is a plastic ornament designed for terraces, providing a safe hiding place for reptiles. The grey colour and climbing terrace add a decorative element to the space, while also offering a practical hiding spot for pets. This DIY tool is perfect for creating a comfortable and secure environment for reptiles in your home.', 11.99, 60, NULL, 'reptile-basking-hide-cave-decor-ornament-with-climbing-terrace-safe-hiding', 'Terrace', '1kg', 'taxable', 'black', '5667867', '2025-11-29 06:23:25', '2025-11-29 06:23:25'),
(6, 4, '3 Pcs Womens Plus Sizes Long Sleeve Crew Neck T-shirt Soft Stretch Round Neck', NULL, 'This product is a set of three women\'s plus size long sleeve crew neck t-shirts in soft stretch fabric.\r\n\r\n*Colours include Purple, pink and Green.\r\n\r\n\r\nThe t-shirts feature a solid pattern in multicoloured hues, with a round neck and oversized fit. Ideal for the spring season, these basic style shirts are designed for a comfortable and relaxed look. Perfect for everyday wear or as a casual staple in any wardrobe.', 20.00, 554565, NULL, '3-pcs-womens-plus-sizes-long-sleeve-crew-neck-t-shirt-soft-stretch-round-neck', 'Unbranded', '1kg', 'non taxable', 'blue', '78788', '2025-11-29 06:25:49', '2025-11-29 06:25:49'),
(7, 5, '5mm Thick Acrylic Stackable Booster Box Display Case Unit With Magnetic Lid', NULL, 'The Thick brand\'s 5mm acrylic stackable booster box display case unit is a decorative storage box with a magnetic lid. This medium-sized cuboid unit is free-standing and transparent, making it perfect for displaying and storing small items. With dimensions of 16.8cm in height, 19cm in length, and 9cm in width, this acrylic box is both practical and stylish for organising your home decor. Its stackable design allows for versatile storage solutions, while the magnetic lid ensures secure closure. Ideal for any room in need of a tidy storage solution.', 20.00, 60, NULL, '5mm-thick-acrylic-stackable-booster-box-display-case-unit-with-magnetic-lid', 'Thick', '1kg', 'taxable', 'red', '53666756', '2025-11-29 06:28:24', '2025-11-29 06:28:24'),
(8, 5, 'Rubber Dog Squeaky Chew Toy Christmas Tree For Small Medium Dog', NULL, 'This Christmas tree rubber dog squeaky chew toy is perfect for small and medium-sized dogs. Made from vinyl, it provides a fun and durable toy for your furry friend to play with and chew on. The squeaker inside adds an element of entertainment, making playtime even more enjoyable for your canine companion. This toy is sure to keep your pet entertained and engaged during the festive season.', 7.50, 60, NULL, 'rubber-dog-squeaky-chew-toy-christmas-tree-for-small-medium-dog', 'Unbranded', '1kg', 'taxable', 'black', '56565656', '2025-11-29 06:31:42', '2025-11-29 06:31:42'),
(9, 4, '3 PCs Combo ComfortableWomen Solid Colour Pocket Simple Long Pants Autumn Winter', NULL, 'This 3 PCs combo set of comfortable women\'s solid colour pocket trousers in a jogger style is perfect for the autumn and winter seasons. The wide-leg design and pockets add practicality to the trousers, making them ideal for travel and casual occasions. The simple yet colourful design makes them versatile for various outfits, while the wide-leg style offers a more relaxed fit for ultimate comfort.', 31.50, 60, NULL, '3-pcs-combo-comfortablewomen-solid-colour-pocket-simple-long-pants-autumn-winter', 'Unbranded', '1kg', 'taxable', 'yellow', '5665767', '2025-11-29 06:33:10', '2025-11-29 06:33:10'),
(10, 4, 'Women Elegant Evening Dress With Off Shoulder And Flattering Front Slit', NULL, 'This elegant evening dress is perfect for women looking for a sophisticated and flattering silhouette. The off-shoulder neckline and front slit add a touch of glamour, while the A-line style and knee-length hem make it suitable for various formal occasions. The dress comes in a stylish apricot colour, making it a chic and elegant choice for any evening event.', 17.00, 60, NULL, 'women-elegant-evening-dress-with-off-shoulder-and-flattering-front-slit', 'Unbranded', '1kg', 'taxable', 'green', '5778787', '2025-11-29 06:36:16', '2025-11-29 06:36:16'),
(11, 6, 'Massage Gun Deep Tissue Muscle Therapy Percussion Message Relax Back Neck 4 head', NULL, 'This Massage Gun is designed for deep tissue muscle therapy, offering percussion massage functions to help relax the back, neck, and other areas of the body. With four interchangeable massage heads and a cordless, handheld design, it provides customizable and convenient therapy. The massage gun is rechargeable and powered by USB, making it a versatile and efficient tool for self-care and relaxation. Crafted from durable plastic in a sleek black colour, this massage gun is a must-have for anyone looking to alleviate muscle tension and improve overall well-being.', 23.00, 60, NULL, 'massage-gun-deep-tissue-muscle-therapy-percussion-message-relax-back-neck-4-head', 'Unbranded', '1kg', 'taxable', 'black', '3414354544', '2025-11-29 06:37:51', '2025-11-29 06:37:51'),
(12, 3, '12 PCs Felt Mask For Gothic Theatre Or Party', NULL, 'This product is a set of 12 felt masks designed for a Gothic theatre theme, perfect for Halloween costumes. The masks come in a variety of multi-coloured options, suitable for both male and female wearers. Made from felt, these masks offer a unique and stylish accessory for any costume or outfit, adding a touch of theatrical flair to the wearer\'s appearance. Ideal for those looking to make a statement at themed events or parties.', 10.00, 60, NULL, '12-pcs-felt-mask-for-gothic-theatre-or-party', 'Unbranded', '1kg', 'taxable', 'black', '6767567', '2025-11-29 06:39:25', '2025-11-29 06:39:25'),
(13, 7, 'New It\'s free to sell on eBay Excludes Vehicles and business sellers Sell one like this  Share Fashionable Casual Sports Shoe With PuLeather Upper And Interior Height Increase', NULL, 'This fashionable casual sports shoe for women in UK size 6 features a PU leather upper and interior, offering a comfortable and stylish option for everyday wear. With a high heel height of 7.6-10 cm, this multicoloured shoe combines sporty elegance with practicality, making it perfect for those looking for a versatile and trendy footwear choice.', 15.00, 60, NULL, 'new-its-free-to-sell-on-ebay-excludes-vehicles-and-business-sellers-sell-one-like-this-share-fashionable-casual-sports-shoe-with-puleather-upper-and-interior-height-increase', 'Unbranded', '1kg', 'taxable', 'black', '44465656', '2025-11-29 06:40:46', '2025-11-29 06:40:46'),
(14, 8, 'Black Halloween Town T-shirt', NULL, 'The Black Halloween Town T-shirt is a stylish and iconic addition to any man\'s wardrobe. This regular fit T-shirt in size L features a striking black colour, perfect for adding a spooky touch to your outfit. Whether you\'re dressing up for Halloween or just want to add a bit of edge to your everyday look, this T-shirt is sure to make a statement.', 15.00, 60, NULL, 'black-halloween-town-t-shirt', 'Unbranded', '1kg', 'taxable', 'black', '5443553', '2025-11-29 06:42:15', '2025-11-29 06:42:15'),
(15, 5, 'New It\'s free to sell on eBay Excludes Vehicles and business sellers Sell one like this  Share 1 PCs Doughnut Making Set With Non-stick PP Plastic Cutter', NULL, 'This Doughnut Making Set includes a non-stick PP plastic cutter with a round shape, perfect for creating delicious doughnuts. The yellow colour and doughnut theme add a fun touch to your baking experience. The set is easy to use and clean, making it a must-have for any home baker looking to add a unique twist to their cookie cutter collection.', 8.00, 60, NULL, 'new-its-free-to-sell-on-ebay-excludes-vehicles-and-business-sellers-sell-one-like-this-share-1-pcs-doughnut-making-set-with-non-stick-pp-plastic-cutter', 'Unbranded', '1kg', 'taxable', 'black', '5654566556', '2025-11-29 06:43:22', '2025-11-29 06:43:22'),
(16, 9, '3pc Men\'S Orange Basketball Shorts - Casual Sports Shorts with Drawstring Waist,', NULL, 'These Men\'s Orange Basketball Shorts are perfect for casual sports activities, featuring a drawstring waist for a comfortable fit in size XXL. The elastic waist design ensures a secure and adjustable waist size, while the grey and black colour scheme adds a stylish touch to the sweat style shorts. Ideal for men looking for a combination of comfort and style in their sports attire, these shorts are perfect for basketball or any other casual sports occasion.', 15.55, 60, NULL, '3pc-mens-orange-basketball-shorts-casual-sports-shorts-with-drawstring-waist', 'Unbranded', '1kg', 'taxable', 'black', '343555443', '2025-11-29 06:45:11', '2025-11-29 06:45:11'),
(17, 6, 'New It\'s free to sell on eBay Excludes Vehicles and business sellers Sell one like this  Share Double Ended Measuring Spoon Set Stainless Steel', NULL, 'This Double Ended Measuring Spoon Set is a versatile addition to any kitchen. Made from high-quality stainless steel, this set includes 9 measuring spoons, each with a double end for measuring both wet and dry ingredients. The sleek stainless steel colour adds a touch of modern style to your culinary tools, making it both practical and aesthetically pleasing for any home cook.', 31.00, 60, NULL, 'new-its-free-to-sell-on-ebay-excludes-vehicles-and-business-sellers-sell-one-like-this-share-double-ended-measuring-spoon-set-stainless-steel', 'Unbranded', '1kg', 'taxable', 'black', '545355', '2025-11-29 06:47:02', '2025-11-29 06:47:02'),
(18, 11, 'Women Elegant Wallet With Detachable Zipper Closure Purse Multi-compartment', NULL, 'This elegant wallet purse is made from faux leather in a stylish khaki colour. It features a detachable zipper closure and multiple compartments, perfect for keeping your essentials organized. The wallet can also be used as a clutch with the detachable strap, making it a versatile accessory for any woman on the go. Its sleek design and high-quality materials make it a fashionable and practical choice for everyday use.', 15.00, 60, NULL, 'women-elegant-wallet-with-detachable-zipper-closure-purse-multi-compartment', 'Unbranded', '1kg', 'taxable', 'pink', '52455545', '2025-11-29 06:48:33', '2025-11-29 06:48:33'),
(19, 12, 'New It\'s free to sell on eBay Excludes Vehicles and business sellers Sell one like this  Share 30 PCs Premium Purple Floral Gift Bag For Party, Shopping Birthday Wedding', NULL, 'This product is a set of 30 premium purple floral gift bags perfect for various occasions like parties, shopping, birthdays, and weddings. Made from plastic, these medium-sized bags feature a floral theme, making them ideal for gifting presents. The elegant purple colour adds a touch of sophistication to any gift, making them a must-have for those looking to impress their recipients with their gift presentation.', 10.00, 60, NULL, 'new-its-free-to-sell-on-ebay-excludes-vehicles-and-business-sellers-sell-one-like-this-share-30-pcs-premium-purple-floral-gift-bag-for-party-shopping-birthday-wedding', 'Unbranded', '1kg', 'taxable', 'pink', '656676', '2025-11-29 06:50:07', '2025-11-29 06:50:07'),
(20, 4, 'Solid Crisscross Backless Cami Bodycon With Cowl Neck', NULL, 'The Solid Crisscross Backless Cami Bodycon dress is a stylish and flattering choice for women. With a cowl neck and sleeveless design, this dress exudes a modern and sleek look. The black colour and midi length make it versatile for various occasions, while the crisscross detailing adds a touch of sophistication. Made from stretchy material, this dress is comfortable to wear and perfect for a night out or special event.', 12.00, 60, NULL, 'solid-crisscross-backless-cami-bodycon-with-cowl-neck', 'Unbranded', '1kg', 'taxable', 'black', '54555545443', '2025-11-29 06:51:30', '2025-11-29 06:51:30'),
(21, 12, 'New It\'s free to sell on eBay Excludes Vehicles and business sellers Sell one like this  Share 2 Rolls Of Door And Window Seal Strip', NULL, 'The product is a pack of 2 grey wind deflector door and window seal strips, suitable for use on doors and windows. These seal strips help to reduce noise and draughts, providing a more comfortable and secure environment. Easy to install, they are a practical DIY solution to improve the insulation of your home.', 8.50, 60, NULL, 'new-its-free-to-sell-on-ebay-excludes-vehicles-and-business-sellers-sell-one-like-this-share-2-rolls-of-door-and-window-seal-strip', 'Unbranded', '1kg', 'taxable', 'black', '6776767755', '2025-11-29 06:52:59', '2025-11-29 06:52:59'),
(22, 9, '4 PCs Comfortable Floral Briefs With Full Coverage For Women', 'm', 'This product is a set of four comfortable floral briefs designed for women in size L. Made from soft cotton fabric, these briefs feature a high rise and full coverage for a secure fit. The multicoloured floral pattern adds a feminine touch to the classic brief style, making them a lovely addition to any lingerie collection. Perfect for everyday wear or as a thoughtful gift for a loved one.', 10.00, 60, NULL, '4-pcs-comfortable-floral-briefs-with-full-coverage-for-women', 'Unbranded', '1kg', 'taxable', 'red', '65454565634', '2025-11-29 06:54:32', '2025-12-04 13:34:04'),
(23, 13, 'Ethic Diam 1Pcs RS6.5mm 1.00ct Engagement Ring 6-sprong Moissanite For Women', NULL, 'The Ethic Diam 1Pcs RS6.5mm 1.00ct Engagement Ring is a stunning piece of fine jewellery designed for women. This sterling silver ring features a 6-sprong setting with a beautiful white Moissanite stone, making it perfect for an engagement occasion. With excellent cut grade and hallmarked quality, this ring exudes elegance and sophistication, making it a perfect symbol of love and commitment for the special someone in your life.', 20.00, 60, NULL, 'ethic-diam-1pcs-rs65mm-100ct-engagement-ring-6-sprong-moissanite-for-women', 'Unbranded', '1kg', 'taxable', 'red', '6454566', '2025-11-29 06:56:09', '2025-11-29 06:56:09'),
(24, 4, 'Elegant Sequin V-neckBodycon Dress Glow In The Dark', 'm', 'This Elegant Sequin V-neck Bodycon Dress is a stunning option for any woman looking to make a statement. The black dress features strappy sleeves and beautiful sequin accents, adding a touch of glamour. The V-neck neckline and bodycon style flatter the figure, making it a perfect choice for a special occasion or night out. The dress also has a midi length, making it suitable for various events. Glow in the dark character adds a unique and eye-catching element to the overall design.', 18.00, 60, NULL, 'elegant-sequin-v-neckbodycon-dress-glow-in-the-dark', 'Unbranded', '1kg', 'taxable', 'black', '3443', '2025-11-29 06:57:57', '2025-12-04 13:33:13'),
(25, 1, 'Men’s Black Winter Warm Jacket With Hood', NULL, 'Stay warm and stylish this winter with this Men\'s Black Winter Warm Jacket from Hood. Made from polyester, this puffer jacket features a practical hood for added protection against the elements. The regular fit and XS size make it a perfect choice for cold weather, while the sleek black colour adds a modern touch to your wardrobe. Whether you\'re out for a chilly walk or running errands, this jacket is sure to keep you cosy and looking sharp.', 30.00, 60, NULL, 'mens-black-winter-warm-jacket-with-hood', 'Unbranded', '1kg', 'taxable', 'black', '4545535', '2025-11-29 07:57:54', '2025-11-29 07:57:54'),
(28, 1, 'Men’s Medieval Knight Graphics T-shirt Light Shirt with St George’s Cross', 'XL', 'This Men’s Medieval Knight Graphics T-shirt by George features a design of a knight with St George\'s Cross, perfect for those interested in medieval history and British culture. The shirt is in a classic white and red colour scheme, made from polyester material for comfort and durability. With a regular fit and XL size, this t-shirt is ideal for men looking to make a statement with their clothing choice. Perfect for casual wear or for showing off your historical and patriotic spirit.', 10.50, 40, NULL, 'mens-medieval-knight-graphics-t-shirt-light-shirt-with-st-georges-cross', 'George', '1kg', 'taxable', 'red', '3437376', '2025-12-04 13:32:03', '2025-12-04 13:32:03');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(6, 4, 'products/6YecnfxE47KeBaP0vhawupqcWMh2PttnxzEm7m3s.webp', '2025-11-29 06:20:26', '2025-11-29 06:20:26'),
(7, 5, 'products/VqJECsRbeLrbf98LMxbaJRfW33V0EUK7IF553ufD.webp', '2025-11-29 06:23:26', '2025-11-29 06:23:26'),
(8, 6, 'products/RsohNeKshEGd3XfQllWTlDUDH8z4SXKgG8qUBKSI.webp', '2025-11-29 06:25:49', '2025-11-29 06:25:49'),
(9, 7, 'products/YR9Oopz8kn6pvNw7jRb2bG64j54r3pDmh0Edudp6.webp', '2025-11-29 06:28:24', '2025-11-29 06:28:24'),
(10, 8, 'products/kAyyGa75FL1ER0xXLiIq6pWjVlMUzm4A0c2pZv2D.webp', '2025-11-29 06:31:42', '2025-11-29 06:31:42'),
(11, 9, 'products/I9xf664UaS8c5NQEom2qVvxkFnML4ntdOftHc9dr.webp', '2025-11-29 06:33:10', '2025-11-29 06:33:10'),
(12, 10, 'products/R6ZM2OaPQqjv01IpAznLXIOUqewzI2Q0ofB84xb8.webp', '2025-11-29 06:36:16', '2025-11-29 06:36:16'),
(13, 11, 'products/PN2WFfxtC3Qbz3tkgi3ppOFDgsfpVQ4QN0nKZDQM.webp', '2025-11-29 06:37:52', '2025-11-29 06:37:52'),
(14, 12, 'products/3ALHLzUYGtivCTwFATiZ4UYHTimUFY2QKgqWmzh0.webp', '2025-11-29 06:39:25', '2025-11-29 06:39:25'),
(15, 13, 'products/rmhBVZ8yeNs6Q6Ut9cec4qCFRJg5ujOUu5qmybi4.webp', '2025-11-29 06:40:46', '2025-11-29 06:40:46'),
(16, 14, 'products/ppkSkp6dgEcxNs2AzRTfjl6eOipwc4esSiVgVQKP.webp', '2025-11-29 06:42:15', '2025-11-29 06:42:15'),
(17, 15, 'products/hyapuo9bbHiTSGVUEdPHZIW15t4PF7uVFF888SWm.webp', '2025-11-29 06:43:22', '2025-11-29 06:43:22'),
(18, 16, 'products/NlFzkpeI7TbeyRubuvMBQzDARUZTaBbW0v7bv5J0.webp', '2025-11-29 06:45:11', '2025-11-29 06:45:11'),
(19, 17, 'products/K77xRkm7vFzsmKyrjrYO9BoFdwzmW8kXkirHuOWu.webp', '2025-11-29 06:47:02', '2025-11-29 06:47:02'),
(20, 18, 'products/gdba1DNC1ccmuUwx5vbe2Tu4xAzKhPZxjRejCGUw.webp', '2025-11-29 06:48:33', '2025-11-29 06:48:33'),
(21, 19, 'products/qmGE9WHGHnB0GdlYmjORkywQg6JqDd9YK5WpwtYr.webp', '2025-11-29 06:50:07', '2025-11-29 06:50:07'),
(22, 20, 'products/QmAfmgLhgCVQQLHMI2LBDbTOIPHfQxrSCU31XQpF.webp', '2025-11-29 06:51:31', '2025-11-29 06:51:31'),
(23, 21, 'products/6hKiDo5kVVelUTjzcWtzdLJvGLB6hVHbR0r9iFvV.webp', '2025-11-29 06:52:59', '2025-11-29 06:52:59'),
(24, 22, 'products/FhLzPYgu1m37WKEGbiIExiOi8cXqJQqmp1b101VT.webp', '2025-11-29 06:54:32', '2025-11-29 06:54:32'),
(25, 23, 'products/KVslfCBrxZuvPDweXJ5TTrYATmM4Tc5D3nAEtrst.webp', '2025-11-29 06:56:09', '2025-11-29 06:56:09'),
(26, 24, 'products/i2IBpWcvRNlnByWPb0w4fXInfqG3Iccf8s0NyRrf.webp', '2025-11-29 06:57:57', '2025-11-29 06:57:57'),
(27, 24, 'products/9jOqhxzj7gHC98xCDGukhg0KJ7Kzm82Gfmweezod.webp', '2025-11-29 07:42:21', '2025-11-29 07:42:21'),
(28, 24, 'products/UdUgNRzQnUjGip5V9Bg9DZLnJHyCGxDZfRjlzeOD.webp', '2025-11-29 07:42:21', '2025-11-29 07:42:21'),
(29, 24, 'products/Jp9YJxVztMVwBpUVjpsvis5BoYaTewnXLZzWZ1KM.webp', '2025-11-29 07:42:21', '2025-11-29 07:42:21'),
(30, 24, 'products/X3dhVF7cJwCywwlHQy5KhOC0V7vcRZQ9zYBrdKDB.webp', '2025-11-29 07:42:21', '2025-11-29 07:42:21'),
(31, 24, 'products/W7Og1o1LbfrYStd7t65NlIqZg4V2hrUxjQCWAQyK.webp', '2025-11-29 07:44:53', '2025-11-29 07:44:53'),
(32, 24, 'products/4tdMaXtSYgunUhRjvcJuW12Er6y5G1SCtYQlGHAI.webp', '2025-11-29 07:46:39', '2025-11-29 07:46:39'),
(33, 24, 'products/FuGaqtMfDGjVoLLhiTwpIg0Fw3u1Fep76YoXSWlf.webp', '2025-11-29 07:46:58', '2025-11-29 07:46:58'),
(34, 24, 'products/sW1gMNsgNGRFiaEJvEQMiF7n7avferjZvngU3yXJ.webp', '2025-11-29 07:49:26', '2025-11-29 07:49:26'),
(35, 25, 'products/Wo36PyXmZ1VpXWerNTM4fH1tah00pF6DLh9v31sd.webp', '2025-11-29 07:57:54', '2025-11-29 07:57:54'),
(36, 25, 'products/iWKb9jup0StgM8ZPlig4yEk3ZPY2wDwVECI1luNj.webp', '2025-11-29 07:57:54', '2025-11-29 07:57:54'),
(37, 25, 'products/XSVLue9rIkewxFYbSOrKsihiJYIK42YyAzmzDFI5.webp', '2025-11-29 07:57:54', '2025-11-29 07:57:54'),
(38, 25, 'products/Kzwz0ecyiGkarFey9RSZHC9rqxkHc92kvCI4PxBU.webp', '2025-11-29 07:57:54', '2025-11-29 07:57:54'),
(39, 25, 'products/XHxHAasCM96lANF7PhdGNr62mWcwTydeIuO14X7k.webp', '2025-11-29 07:57:54', '2025-11-29 07:57:54'),
(40, 25, 'products/rHRKxZlnJcSvFA0X6tp7ePUDJReb3a7dPsJ3rta9.webp', '2025-11-29 07:58:28', '2025-11-29 07:58:28'),
(44, 28, 'products/ji99vFE2UKymDbnX2gdyqbrFkC330OgVEnCsCPOR.webp', '2025-12-04 13:32:03', '2025-12-04 13:32:03'),
(45, 28, 'products/i2pcC8PadHhP7VXvtRydHOups0NTnjj4BcLGdue4.webp', '2025-12-04 13:32:04', '2025-12-04 13:32:04'),
(46, 28, 'products/5KhJvbGPgo2thnZ3eoj1GSn4SiFT7oDiZ6jlyPF5.webp', '2025-12-04 13:32:04', '2025-12-04 13:32:04'),
(47, 24, 'products/j49LC1Yf3rrIR8O6BXenMEUR1AYaz2MU3hxzB1j9.webp', '2025-12-04 13:33:12', '2025-12-04 13:33:12'),
(48, 24, 'products/12PVnYBnJScUP0A9H6j7IgSOaNhAp157Y3MisSEa.webp', '2025-12-04 13:33:12', '2025-12-04 13:33:12'),
(49, 22, 'products/9jOMql9Tb1CZrifAuEHbPr2Wqbkya1q7mWElj3pe.webp', '2025-12-04 13:34:04', '2025-12-04 13:34:04'),
(50, 22, 'products/eOvjru9JRD36Aye4MsnxlmT492rYG5od1VxEepvP.webp', '2025-12-04 13:34:04', '2025-12-04 13:34:04');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6uit1MgJrQiQkCJQUxL0OBN78gixLLAi4CwsEIK8', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoidE5FbDdlUkhFTk12VmJVZWpFZnJFMExuWXAxZWFtOHo4VFZ3dkdGaCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9vcmRlcnMiO3M6NToicm91dGUiO3M6Njoib3JkZXJzIjt9czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzY0ODQwMTQzO319', 1764859114);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `contact`, `address`, `city`, `state`, `country`, `zipcode`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Emmanuel Ogbebor', '+2347032446095', '27th solanke Street', 'Ado-ekiti', 'Ekiti', 'Nigeria', '233323', 'datapro2014@gmail.com', 'admin', NULL, '$2y$12$eBp8.jI9VNnZshYH5d/ih.jZo8zA7jV6BHI9k9xdGi6rtZe.Wkc5G', 'ybl0s1mLiSpIhcOYK8YTOIxHt4A5K0YjuOaYLplkyJlnXtWUnDepzxZlLw5r', '2025-11-29 08:01:24', '2025-11-29 08:01:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD UNIQUE KEY `products_sku_unique` (`sku`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
