-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 19 juil. 2022 à 12:21
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ordishops`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_email` text NOT NULL,
  `admin_pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'name', 'email', 'mdps');

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `p_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`, `p_price`) VALUES
(1, '::1', 54, 7764);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_img`) VALUES
(0, 'Ordinateurs de bureau', ''),
(1, 'Ordinateurs Portables', ''),
(2, 'Mini PC', ''),
(3, 'Nos Coffrets', '');

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` text NOT NULL,
  `customer_pass` text NOT NULL,
  `customer_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- --------------------------------------------------------

--
-- Structure de la table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `invoice_no` int(100) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `customer_orders`
--

INSERT INTO `customer_orders` (`invoice_no`, `customer_id`, `product_id`, `qty`, `subtotal`, `date`) VALUES
(223273889, 1489619733, 1, 5, 38820, '2022-07-19 09:59:19'),
(315293309, 679097577, 3, 10, 36370, '2022-07-18 11:38:33'),
(920151508, 1489619733, 1, 3, 23292, '2022-07-19 02:49:15'),
(1157955084, 1184319756, 1, 2, 15528, '2022-07-19 00:55:36'),
(1736153933, 408816636, 1, 7, 54348, '2022-07-19 10:01:46');

-- --------------------------------------------------------

--
-- Structure de la table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `manufacturer_id` int(10) NOT NULL,
  `manufacturer_name` text NOT NULL,
  `manufacturer_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `manufacturers`
--

INSERT INTO `manufacturers` (`manufacturer_id`, `manufacturer_name`, `manufacturer_img`) VALUES
(0, 'SANS MARQUE', 'SANSMARQUE.jpg'),
(1, 'APPLE', 'Apell.jpg'),
(2, 'Lenovo', 'Lenovo.jpg'),
(3, 'DELL', 'Dell.jpg'),
(4, 'HP', 'Hp.jpg'),
(5, 'ASUS', 'Asus.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `invoice_no` int(10) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `due_amount` decimal(10,0) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_status` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`invoice_no`, `date`, `due_amount`, `customer_id`, `order_status`, `address`) VALUES
(223273889, '2022-07-19', '38820', 1489619733, 'pending', 'N°82 BLOC 54 QU ZOUHOUR SAFI'),
(315293309, '2022-07-18', '36370', 679097577, 'livrée', 'L?HQDUGFQDIF'),
(920151508, '2022-07-19', '23292', 1489619733, 'livrée', 'N°82 BLOC 54 QU ZOUHOUR SAFI'),
(1157955084, '2022-07-19', '15528', 1184319756, 'pending', 'KJB'),
(1736153933, '2022-07-19', '54348', 408816636, 'livrée', 'N°82 BLOC 54 QU ZOUHOUR SAFI');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `manufacturer_id` int(10) NOT NULL,
  `product_title` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_url` text NOT NULL,
  `product_img` text NOT NULL,
  `product_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`product_id`, `cat_id`, `manufacturer_id`, `product_title`, `product_price`, `product_url`, `product_img`, `product_desc`) VALUES
(1, 1, 4, '	HP ENVY 13-ba1342nf', 7764, 'HPENVY', 'P-Dell-1.jpg', 'Windows 11 Famille Intel® Core™ i5 1135G7 (11ème génération) 16 Go RAM 512 Go Disque SSD 33.8 cm (13.3	'),
(2, 1, 4, 'HP Pavilion 15-eh2025nf', 7284, 'HPPavi', 'P-Dell-2.jpg', 'Windows 11 Famille AMD Ryzen™ 5 5625U 16 Go RAM 512 Go Disque SSD 39.6 cm (15.6 \"), FHD (1920 x 1080), 250 nits, 45% NTSC'),
(3, 0, 4, 'HP Slim S01-aF0075nf', 3637, 'HPSlim', 'P-Dell-3.jpg', 'Windows 11 Famille AMD Athlon™ Silver 3050U 8 Go RAM 256 Go Disque SSD Carte graphique AMD Radeon™ Inclus: Clavier filaire noir USB HP 125 & Souris filaire noire USB HP 125'),
(4, 0, 4, 'HP Pavilion TP01-3119nf', 9369, 'HPPavT', 'P-Dell-4.jpg', 'Windows 11 Famille Intel® Core™ i7 12700 (12ème génération) 16 Go RAM 512 Go Disque SSD + 1 To HDD Carte graphique Intel® UHD 770 Inclus: Combiné clavier et souris filaires blancs USB HP 310 '),
(5, 3, 0, 'Cooler Master MasterBox TD500 MESH White ARGB', 1390, 'Master', 'P-Dell-5.jpg', 'Boîtier Moyen Tour Noir avec façade maille et fenêtre en verre trempé'),
(6, 2, 4, 'HP Z2 G5 Mini G5 Mini', 2032, 'HPZ', 'P-Dell-6.jpg', 'Windows 10 Professionnel pour stations de travail (disponible par le biais de droits d’utilisation d’une version antérieure à partir de Windows 11 Professionnel pour stations de travail) Intel® Core™ i7 10700 (10e génération) 16 Go RAM 512 Go Disque SSD NVIDIA® Quadro® T1000 (4 Go) Inclus: Clavier filaire USB HP & Souris filaire HP 320M'),
(7, 3, 5, 'ASUS TUF Gaming GT301', 1690, 'ATUF', 'P-Asus-1.jpg', 'Conçu pour les joueurs intrépides, l\'ASUS TUF GT301 propose d\'excellentes finitions pour les gamers à la recherche d\'un boitier spacieux avec un design gaming assumé. Il propose par ailleurs un support pour casque-micro pour un rangement facilité.'),
(8, 3, 0, 'Antec NX210', 599, 'Antec', 'SANS-MARK-3.jpg', 'Boitier PC Moyen Tour - ATX / mATX / Mini-ITX - USB 3.0 - Avec fenêtre (pleine taille)'),
(9, 3, 0, 'MetallicGear', 1300, 'perla-beton\r\n', 'SANS-MARK-4.jpg', 'Panneau avant décoratif en verre trempé pour une construction élégante. Contrôleur D-RGB intégré avec 2 ventilateurs Skiron D-RGB préinstallés qui peuvent se synchroniser avec les cartes mères compatibles pour créer un effet époustouflant. Tour compacte avec support de carte mère ATX. Accès facile aux E/S avec 2 ports USB 3 0 micro, bouton de réinitialisation du casque et contrôleur D-RVB. Support de radiateur jusqu\'à 280 mm pour les systèmes de refroidissement par liquide et montage vertical GPU avec support en option (vendu séparément).');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Index pour la table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Index pour la table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`invoice_no`,`product_id`);

--
-- Index pour la table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`invoice_no`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
