-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 05 Décembre 2017 à 08:23
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `immotuto`
--

-- --------------------------------------------------------

--
-- Structure de la table `affilates`
--

CREATE TABLE `affilates` (
  `id` int(11) NOT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `contact_name` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `affilates`
--

INSERT INTO `affilates` (`id`, `name`, `type`, `address`, `phone`, `contact_name`, `email`) VALUES
(1, 'qsdsq', 'w<cwxc', 'qqsdqsd', 2008676565, 'sdfsdfsd', 'info@sdfsd.com');

-- --------------------------------------------------------

--
-- Structure de la table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `departments`
--

INSERT INTO `departments` (`id`, `name`) VALUES
(1, 'Ardennes'),
(2, 'Aube'),
(3, 'Marne'),
(4, 'Haute-Marne'),
(5, 'Meurthe-et-Moselle'),
(6, 'Meuse'),
(7, 'Moselle'),
(8, 'Bas-Rhin'),
(9, 'Haut-Rhin'),
(10, 'Vosges');

-- --------------------------------------------------------

--
-- Structure de la table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `ridge_height` int(11) DEFAULT NULL,
  `picture_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` int(6) DEFAULT NULL,
  `subdividable` tinyint(1) NOT NULL DEFAULT '0',
  `surface` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `pdf_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `commission_included` tinyint(1) NOT NULL DEFAULT '0',
  `departement_id` int(11) NOT NULL,
  `transaction_types_id` int(11) NOT NULL,
  `offer_types_id` int(11) NOT NULL,
  `affilate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `offers`
--

INSERT INTO `offers` (`id`, `description`, `ridge_height`, `picture_url`, `address`, `city`, `postal_code`, `subdividable`, `surface`, `price`, `pdf_url`, `latitude`, `longitude`, `commission_included`, `departement_id`, `transaction_types_id`, `offer_types_id`, `affilate_id`) VALUES
(1, 'qsdqsdqsqsd', 2, NULL, 'dsfsdfsf', 'qsdqsd', 56999, 0, 10000, 10000, NULL, NULL, NULL, 0, 10, 2, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `offers_types`
--

CREATE TABLE `offers_types` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `offers_types`
--

INSERT INTO `offers_types` (`id`, `name`) VALUES
(1, 'Bureau'),
(2, 'Commerce'),
(3, 'Entrepôt'),
(4, 'Industrie'),
(5, 'Terrain');

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `offers_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `pictures`
--

INSERT INTO `pictures` (`id`, `url`, `offers_id`) VALUES
(1, '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `transactions_types`
--

CREATE TABLE `transactions_types` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `transactions_types`
--

INSERT INTO `transactions_types` (`id`, `name`) VALUES
(1, 'Location'),
(2, 'Location / Vente'),
(3, 'Vente');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `affilates`
--
ALTER TABLE `affilates`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offers_fk0a` (`departement_id`),
  ADD KEY `offers_fk1a` (`transaction_types_id`),
  ADD KEY `offers_fk2a` (`offer_types_id`),
  ADD KEY `offers_fk3a` (`affilate_id`);

--
-- Index pour la table `offers_types`
--
ALTER TABLE `offers_types`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pictures_fk0` (`offers_id`);

--
-- Index pour la table `transactions_types`
--
ALTER TABLE `transactions_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `affilates`
--
ALTER TABLE `affilates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `offers_types`
--
ALTER TABLE `offers_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `transactions_types`
--
ALTER TABLE `transactions_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_fk0a` FOREIGN KEY (`departement_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `offers_fk1a` FOREIGN KEY (`transaction_types_id`) REFERENCES `transactions_types` (`id`),
  ADD CONSTRAINT `offers_fk2a` FOREIGN KEY (`offer_types_id`) REFERENCES `offers_types` (`id`),
  ADD CONSTRAINT `offers_fk3a` FOREIGN KEY (`affilate_id`) REFERENCES `affilates` (`id`);

--
-- Contraintes pour la table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `pictures_fk0` FOREIGN KEY (`offers_id`) REFERENCES `offers` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
