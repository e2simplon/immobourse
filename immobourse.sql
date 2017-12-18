-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 18 Décembre 2017 à 16:24
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `immobourse`
--

-- --------------------------------------------------------

--
-- Structure de la table `affilates`
--

CREATE TABLE `affilates` (
  `id` int(11) UNSIGNED NOT NULL,
  `nom` varchar(80) DEFAULT NULL,
  `type` varchar(80) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` int(10) UNSIGNED ZEROFILL DEFAULT NULL,
  `contact_name` varchar(80) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `site` varchar(150) DEFAULT NULL,
  `societe` varchar(100) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `id_ville` int(11) UNSIGNED NOT NULL,
  `couleur` varchar(7) DEFAULT '#FFFFFF',
  `logo` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `affilates`
--

INSERT INTO `affilates` (`id`, `nom`, `type`, `address`, `phone`, `contact_name`, `email`, `site`, `societe`, `prenom`, `id_ville`, `couleur`, `logo`) VALUES
(1, 'imaj immo', 'agence immobiliÃ¨re', 'centre ville, epinal', 0309090909, 'madame', 'imajimmo@hotmail.fr', '', NULL, NULL, 0, '#999966', 'logo-1.png'),
(2, '', 'professionnel', '6 Rue d Epinal - ', 0637881940, NULL, 'julien.b@gdim.fr', 'https://www.agdim.fr/', 'AGDIM ', NULL, 16, '#ff6699', 'default.png'),
(3, NULL, 'professionnel', '9 Quai Contades -', 0329822626, NULL, 'contact@delbet.fr', 'http://www.delbet.fr/', 'Agence DELBET', NULL, 5, '#ffcc00', 'default.png'),
(4, NULL, 'professionel', '108 rue d Alsace', 0673481889, NULL, 'johann.grandgirard@orange.fr', 'http://www.immod.fr/', 'Agence ImmoD.fr', NULL, 17, '#660066', 'default.png'),
(5, NULL, 'professionnel', '1 Place Emile Stein', 0684364610, NULL, 'gdevesinne@gmail.com', 'http://www.apostrophes.fr/', 'APOSTROPHES', NULL, 5, '#cc33ff', 'default.png'),
(6, NULL, 'professionnel', '22 PLace des Vosges', 0329333000, NULL, 'philipe.bigaut@fonciafrance.fr', 'http://agence.foncia.com/epinal-88000/agence-immobiliere/foncia-aubert-1871', 'FONCIA Aubert', NULL, 5, '#0066cc', 'default.png'),
(7, NULL, 'professionnel', '8 rue Dauphine', 0608729020, NULL, 'philipe.bigaut@fonciafrance.fr', 'http://agence.foncia.com/saint-die-des-vosges-88100/agence-immobiliere/foncia-dauphine-1686', 'FONCIA Dauphine', NULL, 12, '#00ff00', 'default.png'),
(8, NULL, 'professionnel', ' 50 Rue Charles de Gaulle ', 0329636030, NULL, 'marie.vaxelaire@fonciafrance.fr', 'http://agence.foncia.com/gerardmer-88400/agence-immobiliere/foncia-pont-du-lac-1687', 'FONCIA Pont du Lac', NULL, 6, '#ff0000', 'default.png');

-- --------------------------------------------------------

--
-- Structure de la table `connection`
--

CREATE TABLE `connection` (
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `statut` tinyint(1) NOT NULL DEFAULT '0',
  `id_affilates` int(11) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `description` text,
  `bridge_height` int(11) DEFAULT NULL,
  `picture_url` varchar(255) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `subdividable` tinyint(1) DEFAULT '0',
  `surface` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `suiviName` varchar(80) DEFAULT NULL,
  `suiviTel` varchar(10) DEFAULT NULL,
  `pdf_url` varchar(255) DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `commission_included` tinyint(1) NOT NULL DEFAULT '0',
  `transaction_types_ids` varchar(255) NOT NULL,
  `offer_types_ids` varchar(255) NOT NULL,
  `affilate_id` int(11) NOT NULL,
  `id_zoneActivite` tinyint(2) UNSIGNED DEFAULT NULL,
  `priceTaxe` tinyint(1) NOT NULL DEFAULT '0',
  `priceM2` smallint(5) UNSIGNED DEFAULT NULL,
  `priceM2Taxe` tinyint(1) NOT NULL DEFAULT '0',
  `dateDispo` date DEFAULT NULL,
  `id_ville` int(10) UNSIGNED NOT NULL,
  `suiviMail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `offers`
--

INSERT INTO `offers` (`id`, `description`, `bridge_height`, `picture_url`, `address`, `subdividable`, `surface`, `price`, `suiviName`, `suiviTel`, `pdf_url`, `latitude`, `longitude`, `commission_included`, `transaction_types_ids`, `offer_types_ids`, `affilate_id`, `id_zoneActivite`, `priceTaxe`, `priceM2`, `priceM2Taxe`, `dateDispo`, `id_ville`, `suiviMail`) VALUES
(2, '800m² de plein pied\r\ntransformation possible à la demande pour bureau\r\ngrand paking\r\nprix indiqué pour commerce, à étudier pour transformation en bureau\r\nSurface (en m²) : 800 (Surface divisible)\r\nPrix : 50 €/m²\r\nLocalisation (canton par défaut) : EPINAL ZA : Zone de la Voivre\r\nHauteur sous faîtage :\r\nCommission incluse : Non précisé\r\nRéférence offre commercialisateur : ', NULL, '6_1.jpg', 'Zone de la Voivre', 1, 800, 40000, 'MARX Catherine', '0675660784', 'ficheoffre_pdf.php?id=35', 40.7344, -73.8671, 0, '1', '1,2', 9, NULL, 0, 50, 0, NULL, 5, NULL),
(3, 'blfgsf ii g dghi d dhihnvlkdfn fv  fh ihoi v xkvbfx fvj nf cjk bkbjfvbjfdv\r\n ufhv fv  flxbnl kn vmk\r\n uxv lknv f hbbn,bv fgbn   gfd h hgf gh hgf  fgh f cdx dfg hg vfc dfgh..\r\n\r\n\r\nkjhgfd fj hgf d fgh jhgfds dfgh jh gvfcdx xsdfgh gf cdxdfghj hgfd fghjko poi uyt rez ertyuj nbvgfr tyu ijh gftyuk,jn\r\ngh jkljhgfgh jhgf df ghjjnd\r\nhj gfdfgh hgf ghjhg.', 5, '2_1.jpg', 'zone de l\'imaginaire', NULL, 400, 20000, NULL, NULL, 'ficheoffre_pdf.php?id=35', 40.7344, -73.8671, 1, '2', '3', 5, 2, 1, NULL, 0, '2018-01-01', 5, NULL),
(4, ' a a a a aaaaaaaaaaa dhihnvlkdfn fv  fh ihoi v xkvbfx fvj nf cjk bkbjfvbjfdv\r\n ufhv fv  flxbnl kn vmk\r\n uxv lknvaaa aaaaf hbbn,bv fgbn   gfd h hgf gh hgf  fgh f cdx dfg hg vfc dfgh\r\nkjhgfd fj hgf d fgh jhgfds dfgh jh gvfcdx xsdfgh gf cdxdfgh aaaaaaaaaaa a a aj hgfd fghjko poi uyt rez ertyuj nbvgfr tyu ijh gftyuk,jn\r\ngh jkljhgfgh jhgf df ghjjnd\r\nhj gfdfgh hgf ghjhg.', NULL, '3_1.jpg', '7 rue du centre ville', 1, 100, 10000, 'MONSIEUR monsieur', '0675660784', 'ficheoffre_pdf.php?id=34', 40.7344, -73.8671, 0, '2,3', '5', 3, 1, 1, NULL, 0, '2018-01-02', 5, NULL),
(5, ' bbbbbb b  b b b b b b  b bbbbbb dhihnvlkdfn fv  fh ihoi v xkvbfx fvj nf cjk bgf d fgh jhgfds dfgh jh gvfcdx xsdfgh gf cdxdfgh bbbbbbbb a a aj hgfd fghjko poi uyt rez ertyuj nbvgfr tyu ijh gftyuk,jn\r\ngh jkljhgfgh jhgf df ghjjnd\r\nhj gfdfgh hgf ghjhg.', NULL, '4_1.jpg', '7 rue du centre ville', 0, 500, 15000, 'MADAME monsieur', '0675660784', 'ficheoffre_pdf.php?id=4', 40.7344, -73.8671, 1, '3', '8', 3, NULL, 0, 60, 1, '2017-12-01', 1, NULL),
(6, 'cccc c c c c ccccccc ccccccccccc cc dhihnvlkdfn fv  fh ihoi v xkvbfx fvj nf cjk bgf d fgh jhgfds dfgh jh gvfcdx xsdfgh gf cdxdfgh bbbbbbbb a a aj hgfd fghjkccccc ertyuj nbvgfr tyu ijh gftyuk,jn\r\ngh jkljhgfgh jhgf df ghjjnd\r\nhj gfdfgh hgf ghjhg.cccc  c c c c cccccc', 12, '5_1.jpg', '12 rue de la mairie', 1, 500, NULL, 'MONSIEUR madame', '0675660784', 'ficheoffre_pdf.php?id=5', 40.7344, -73.8671, 0, '3,2', '6', 2, 3, 0, 30, 1, '2018-01-11', 2, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `offers_types`
--

CREATE TABLE `offers_types` (
  `id` int(11) NOT NULL,
  `nameType` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `offers_types`
--

INSERT INTO `offers_types` (`id`, `nameType`) VALUES
(1, 'Bureau'),
(2, 'Commerce'),
(3, 'Entrepôt'),
(4, 'Industrie'),
(5, 'Terrain'),
(6, 'Laboratoire'),
(7, 'Salle de séminaire'),
(8, 'Espace congrès'),
(9, 'Coworking');

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

CREATE TABLE `pictures` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `offers_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pictures`
--

INSERT INTO `pictures` (`id`, `url`, `offers_id`) VALUES
(2, '2_1.jpg', 2),
(3, '2_2.jpg', 2),
(4, '3_1.jpg', 3),
(5, '3_2.jpg', 3),
(6, '3_3.jpg', 3),
(7, '4_1.jpg', 4),
(8, '5_1.jpg', 5),
(9, '5_2.jpg', 5),
(10, '5_3.jpg', 5),
(11, '5_6.jpg', 5),
(12, '6_1.jpg', 6),
(13, '6_2.jpg', 6);

-- --------------------------------------------------------

--
-- Structure de la table `transactions_types`
--

CREATE TABLE `transactions_types` (
  `id` int(11) NOT NULL,
  `nameTransac` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `transactions_types`
--

INSERT INTO `transactions_types` (`id`, `nameTransac`) VALUES
(1, 'Location'),
(2, 'Location / Vente'),
(3, 'Vente');

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `id` int(10) UNSIGNED NOT NULL,
  `codePostal` int(5) UNSIGNED NOT NULL,
  `nameVille` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `villes`
--

INSERT INTO `villes` (`id`, `codePostal`, `nameVille`) VALUES
(1, 88250, 'La Bresse'),
(2, 88600, 'Bruyères'),
(3, 88130, 'Charmes'),
(4, 88260, 'Darney'),
(5, 88000, 'Épinal'),
(6, 88400, 'Gérardmer'),
(7, 88190, 'Golbey'),
(8, 88500, 'Mirecourt'),
(9, 88300, 'Neufchâteau'),
(10, 88110, 'Raon-l\'Etape'),
(11, 88200, 'Remiremont'),
(12, 88100, 'Saint-Dié-des-Vosges'),
(13, 88160, 'Le Thillot'),
(14, 88340, 'Le Val-d\'Ajol'),
(15, 88800, 'Vittel'),
(16, 88150, 'Chavelot'),
(17, 88150, 'Thaon vosges');

-- --------------------------------------------------------

--
-- Structure de la table `zones_activites`
--

CREATE TABLE `zones_activites` (
  `id` tinyint(2) UNSIGNED NOT NULL,
  `nameZone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `zones_activites`
--

INSERT INTO `zones_activites` (`id`, `nameZone`) VALUES
(1, 'Centre ville'),
(2, ' Zone d\'activité'),
(3, 'Périphérie');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `affilates`
--
ALTER TABLE `affilates`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offers_fk1a` (`transaction_types_ids`),
  ADD KEY `offers_fk2a` (`offer_types_ids`),
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
-- Index pour la table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `zones_activites`
--
ALTER TABLE `zones_activites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `affilates`
--
ALTER TABLE `affilates`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `offers_types`
--
ALTER TABLE `offers_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `transactions_types`
--
ALTER TABLE `transactions_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
