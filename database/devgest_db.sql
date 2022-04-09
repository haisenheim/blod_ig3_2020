-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 09 avr. 2022 à 16:59
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `devgest_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `quantite` int(11) DEFAULT 0,
  `prix` int(11) DEFAULT NULL,
  `categorie_id` int(11) NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `seuil` int(11) NOT NULL DEFAULT 5,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `designation`, `quantite`, `prix`, `categorie_id`, `active`, `seuil`, `created_at`, `updated_at`) VALUES
(1, 'AMARULA 1L', 4, 5750, 1, 1, 5, NULL, '2022-04-09 14:57:09'),
(2, 'MACARONS', 24, 15400, 0, 1, 60, '2022-02-26 14:57:10', '2022-04-09 14:57:09'),
(3, 'POULETS DE CHAIR', 589, 25400, 0, 0, 150, '2022-02-26 15:00:05', '2022-04-09 14:29:50'),
(4, 'CUISSES DE DINDE', 41, 71, 0, 0, 5, '2022-02-26 15:01:43', '2022-04-09 14:29:43'),
(5, 'Machine à laver', 8, 155000, 2, 1, 10, '2022-03-05 15:40:12', '2022-04-09 14:51:01'),
(6, 'SAVON DURU', 45, 500, 1, 1, 5, '2022-04-09 14:30:33', '2022-04-09 14:30:33');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'AGROALIMENTAIRE'),
(2, 'ELECTROMENAGER');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `fournisseur_id` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE `employes` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`id`, `nom`, `prenom`, `telephone`) VALUES
(1, 'SNEFROU', 'KHEOPS', '065757898');

-- --------------------------------------------------------

--
-- Structure de la table `fournisseurs`
--

CREATE TABLE `fournisseurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fournisseurs`
--

INSERT INTO `fournisseurs` (`id`, `nom`, `telephone`) VALUES
(1, 'MINOCO', '06458454'),
(2, 'PARK & SHOP', '02458754555');

-- --------------------------------------------------------

--
-- Structure de la table `lignecommandes`
--

CREATE TABLE `lignecommandes` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `quantité` int(11) DEFAULT NULL,
  `commande_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `lignelivraisons`
--

CREATE TABLE `lignelivraisons` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `quantité` int(11) DEFAULT NULL,
  `livraison_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ligneventes`
--

CREATE TABLE `ligneventes` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `vente_id` int(11) NOT NULL DEFAULT 0,
  `quantity` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ligneventes`
--

INSERT INTO `ligneventes` (`id`, `article_id`, `vente_id`, `quantity`) VALUES
(1, 3, 2, 4),
(2, 5, 2, 6),
(3, 1, 3, 30),
(4, 1, 4, 30),
(5, 1, 5, 30),
(6, 1, 6, 30),
(7, 1, 7, 30),
(8, 1, 8, 30),
(9, 1, 9, 30),
(10, 1, 10, 30),
(11, 1, 11, 30),
(12, 1, 12, 30),
(13, 6, 13, 3),
(14, 2, 14, 12),
(15, 1, 15, 12),
(16, 2, 16, 345),
(17, 2, 17, 420),
(18, 1, 17, 43);

-- --------------------------------------------------------

--
-- Structure de la table `livraisons`
--

CREATE TABLE `livraisons` (
  `id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `commande_id` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ventes`
--

CREATE TABLE `ventes` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `employe_id` int(11) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ventes`
--

INSERT INTO `ventes` (`id`, `name`, `employe_id`, `created_at`, `updated_at`) VALUES
(2, '14225310', 1, '2022-04-02 14:53:10', '2022-04-02 14:53:10'),
(3, '14223509', 1, '2022-04-09 14:35:09', '2022-04-09 14:35:09'),
(4, '14223519', 1, '2022-04-09 14:35:19', '2022-04-09 14:35:19'),
(5, '14223520', 1, '2022-04-09 14:35:20', '2022-04-09 14:35:20'),
(6, '14223521', 1, '2022-04-09 14:35:21', '2022-04-09 14:35:21'),
(7, '14223521', 1, '2022-04-09 14:35:21', '2022-04-09 14:35:21'),
(8, '14223521', 1, '2022-04-09 14:35:21', '2022-04-09 14:35:21'),
(9, '14223521', 1, '2022-04-09 14:35:21', '2022-04-09 14:35:21'),
(10, '14223522', 1, '2022-04-09 14:35:22', '2022-04-09 14:35:22'),
(11, '14223522', 1, '2022-04-09 14:35:22', '2022-04-09 14:35:22'),
(12, '14223535', 1, '2022-04-09 14:35:35', '2022-04-09 14:35:35'),
(13, '14223936', 1, '2022-04-09 14:39:36', '2022-04-09 14:39:36'),
(14, '14224126', 1, '2022-04-09 14:41:26', '2022-04-09 14:41:26'),
(15, '14224309', 1, '2022-04-09 14:43:09', '2022-04-09 14:43:09'),
(16, '14224726', 1, '2022-04-09 14:47:26', '2022-04-09 14:47:26'),
(17, '14225709', 1, '2022-04-09 14:57:09', '2022-04-09 14:57:09');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk1` (`fournisseur_id`);

--
-- Index pour la table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lignecommandes`
--
ALTER TABLE `lignecommandes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lignelivraisons`
--
ALTER TABLE `lignelivraisons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ligneventes`
--
ALTER TABLE `ligneventes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `livraisons`
--
ALTER TABLE `livraisons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk2` (`commande_id`);

--
-- Index pour la table `ventes`
--
ALTER TABLE `ventes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk3` (`employe_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `fournisseurs`
--
ALTER TABLE `fournisseurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `lignecommandes`
--
ALTER TABLE `lignecommandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `lignelivraisons`
--
ALTER TABLE `lignelivraisons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ligneventes`
--
ALTER TABLE `ligneventes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `livraisons`
--
ALTER TABLE `livraisons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ventes`
--
ALTER TABLE `ventes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
