-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 05 mai 2024 à 21:05
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `paradb`
--

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(29) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(46, ' Effaclar Gel ', 180, 'uploaded_image/16636bfa2d1eac.jpeg', 1),
(48, ' eyes cream', 85, 'uploaded_image/16636bee916772.jpeg', 0),
(49, ' eyes cream', 85, 'uploaded_image/16636bee916772.jpeg', 1),
(50, ' Cetaphin Gel', 125, 'uploaded_image/16636bf3c952b1.jpeg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `usertype` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'admin@gmail.com', '1234', 'admin'),
(2, 'sanae@gmail.com', '$2y$10$6tUz6u4Y1Wes5', 'user'),
(3, 'elhaddouchiasmae@gma', '$2y$10$BcsjcUQNyu0Uc', 'user'),
(4, 'salma@gmail.com', '$2y$10$vCerT1mTDmgqw', 'user'),
(5, 'elhaddouchiasmae1@gm', '$2y$10$eO44/Fhz37fBB', 'user');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `method` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(20) NOT NULL,
  `adress` varchar(20) NOT NULL,
  `pin_code` int(11) NOT NULL,
  `total_products` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `method`, `city`, `country`, `adress`, `pin_code`, `total_products`, `total_price`) VALUES
(1, 'ASMAE ELHADDOUCHI', 'elhaddouchiasmae@gmail.com', 0, 'casablanca', 'Maroc', 'bab lbayda bouskoura', 27182, 0, 590),
(2, 'ASMAE ELHADDOUCHI', 'elhaddouchiasmae@gmail.com', 0, 'casablanca', 'Maroc', 'bab lbayda bouskoura', 27182, 0, 590),
(3, 'ASMAE ELHADDOUCHI', 'elhaddouchiasmae@gmail.com', 0, 'casablanca', 'Maroc', 'bab lbayda bouskoura', 27182, 0, 590),
(4, 'ASMAE ELHADDOUCHI', 'elhaddouchiasmae@gmail.com', 0, 'casablanca', 'Maroc', 'bab lbayda bouskoura', 27182, 0, 590),
(5, 'ASMAE ELHADDOUCHI', 'elhaddouchiasmae@gmail.com', 0, 'casablanca', 'Maroc', 'bab lbayda bouskoura', 27182, 0, 590),
(6, 'ASMAE ELHADDOUCHI', 'elhaddouchiasmae@gmail.com', 0, 'casablanca', 'Maroc', 'bab lbayda bouskoura', 27182, 0, 590),
(7, 'ASMAE ELHADDOUCHI', 'elhaddouchiasmae@gmail.com', 0, 'casablanca', 'Maroc', 'bab lbayda bouskoura', 27182, 0, 590),
(8, 'ASMAE ELHADDOUCHI', 'elhaddouchiasmae@gmail.com', 0, 'casablanca', 'Maroc', 'bab lbayda bouskoura', 27182, 0, 590),
(9, 'ASMAE ELHADDOUCHI', 'elhaddouchiasmae@gmail.com', 0, 'casablanca', 'Maroc', 'bab lbayda bouskoura', 27182, 0, 590),
(10, 'ASMAE ELHADDOUCHI', 'elhaddouchiasmae@gmail.com', 0, 'casablanca', 'Maroc', 'bab lbayda bouskoura', 27182, 0, 590),
(11, 'ASMAE ELHADDOUCHI', 'elhaddouchiasmae@gmail.com', 0, 'casablanca', 'Maroc', 'bab lbayda bouskoura', 27182, 0, 590),
(12, 'ASMAE ELHADDOUCHI', 'elhaddouchiasmae@gmail.com', 0, 'casablanca', 'Maroc', 'bab lbayda bouskoura', 27182, 0, 590),
(13, 'salma', 'salma@gmail.com', 0, 'NY', 'USA', 'bab lbayda bouskoura', 27182, 0, 440),
(14, 'aya', 'aya@gmail.com', 0, 'casablanca', 'Maroc', 'bouskoura 1', 27182, 0, 715),
(15, 'ASMAE ELHADDOUCHI', 'elhaddouchiasmae@gmail.com', 0, 'casablanca', 'Maroc', 'bab lbayda bouskoura', 27182, 0, 420);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(29) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(4, 'ordinary', 250, 'uploaded_image/28 Skincare Products That Stand the Test of Time.jpeg'),
(5, 'bioderma', 240, 'uploaded_image/16634f8577c603.jpeg'),
(15, 'sun screen', 120, 'uploaded_image/16634fb2a8b8df.jpeg'),
(17, 'gel ', 120, 'uploaded_image/16634fd1db493b.jpeg'),
(21, '    créme', 200, 'uploaded_image/Effaclar _ Acne & Oily Skin Care _ La Roche-Posay.jpeg'),
(28, 'Lips patches ', 75, 'uploaded_image/166366b1b87431.jpeg'),
(29, 'bene tint', 75, 'uploaded_image/166366cc7ed047.jpeg'),
(30, 'ordinary', 300, 'uploaded_image/16636b85a2e55a.jpeg'),
(31, 'ordinary', 300, 'uploaded_image/16636b8e86efba.jpeg'),
(32, ' Lip Balms ', 60, 'uploaded_image/16636bec334709.jpeg'),
(33, 'eyes cream', 85, 'uploaded_image/16636bee916772.jpeg'),
(34, 'Vaseline', 35, 'uploaded_image/16636bf1e4f2be.jpeg'),
(35, 'Cetaphin Gel', 125, 'uploaded_image/16636bf3c952b1.jpeg'),
(36, 'Effaclar Gel ', 180, 'uploaded_image/16636bfa2d1eac.jpeg'),
(37, 'Salicylic Acid', 240, 'uploaded_image/16636c0a600762.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `sellers`
--

CREATE TABLE `sellers` (
  `Id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `sellers`
--

INSERT INTO `sellers` (`Id`, `name`, `email`, `password`, `user_name`) VALUES
(2, 'ASMAE EL HADDOUCHI', 'elhaddouchiasmae@gmail.com', '1234', ''),
(3, 'ASMAE EL HADDOUCHI', 'elhaddouchiasmae1@gmail.com', '1234', ''),
(4, 'ghita ', 'ghita@gmail.com', 'ghita', ''),
(5, 'salma', 'salma@gmail.com', '1234', ''),
(6, 'salma', 'salma1@gmail.com', '$2y$10$bxyzDlZzxo8kqypzEPVyVu8', ''),
(7, 'ghita ', 'ghitato@gmail.com', '$2y$10$Magnl1LdndeCK6V54EjbQ.D', ''),
(8, 'ghita ', 'Ghita2@gmail.com', '$2y$10$8PAWaQDO/.CoQHgy/u70keh', ''),
(9, 'admin', 'admin@gmail.com', '$2y$10$oyqOtgCAAT7lF3Y.ozTahu1', ''),
(10, 'ASMAE EL HADDOUCHI', 'elhaddouchiasmae6@gmail.com', '$2y$10$RewIfNpB/3v9pGNm/PoaK.B', ''),
(11, 'salma', 'salma2@gmail.com', '$2y$10$OyMVcnQ.yfWOnmMW1agw6u6', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
