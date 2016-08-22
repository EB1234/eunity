DROP DATABASE IF EXISTS `projet_europe`;

CREATE DATABASE IF NOT EXISTS `projet_europe` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projet_europe`;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 04 Août 2016 à 12:59
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_europe`
--

-- --------------------------------------------------------

--
-- Structure de la table `centre_interet`
--
CREATE TABLE `centre_interet` (
  `id_centre_interet` int(11) NULL,
  `nom_ci` varchar(20) NULL,
  `description_ci` varchar(100) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_membre`
--

CREATE TABLE `commentaire_membre` (
  `id_membre` int(11) NULL,
  `id_sujet` int(11) NULL,
  `commentaire_sujet` varchar(11) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `interesse`
--

CREATE TABLE `membre_sujet` (
  `id_sujet` int(11) NULL,
  `id_membre` int(11) NULL,
  `commentaire_sujet` varchar(200) NULL,
  `statut` int(1) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_membre` int(11) NULL,
  `prenom` varchar(20) NULL,
  `nom` varchar(20) NULL,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(60) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `nationalite` varchar(20) NULL,
  `statut` int(1) NULL,
  `photo` varchar(200) NULL,
  `genre` enum('m','f','autre') NULL,
  `date_naissance` date NOT NULL,
  `age_public` int(11) NULL,
  `date_inscription` datetime NULL,
  `autre` text NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `membre_centre_interet`
--

CREATE TABLE `membre_centre_interet` (
  `id_membre` int(11) NULL,
  `id_centre_interet` int(11) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `participer`
--

CREATE TABLE `participer` (
  `id_salon` int(11) NULL,
  `id_membre` int(11) NULL,
  `statut` int(11) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `salon_rdv`
--

CREATE TABLE `salon_rdv` (
  `id_salon` int(11) NULL,
  `id_sujet` int(11) NULL,
  `nombre_participants` int(11) NULL,
  `id_membre_maitre` int(11) NULL,
  `lieu_rdv` varchar(50) NULL,
  `date_rdv` date NULL,
  `heure_rdv` time NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sujet`
--

CREATE TABLE `sujet` (
  `id_sujet` int(11) NULL,
  `nom_sujet` varchar(20) NULL,
  `id_centre_sujet` int(11) NULL,
  `photo_sujet` varchar(200) NULL,
  `description_sujet` varchar(50) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

CREATE TABLE `statut` (
  `nom_table` varchar(30) NULL,
  `nom_champ` varchar(30) NULL,
  `valeur` int(11) NULL,
  `libelle` varchar(30) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`),
  ADD UNIQUE KEY `pseudo` (`pseudo`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Index pour la table `centre_interet`
--
ALTER TABLE `centre_interet`
  ADD PRIMARY KEY (`id_centre_interet`),
  ADD UNIQUE KEY `nom_ci` (`nom_ci`);

--
-- Index pour la table `salon_rdv`
--
ALTER TABLE `salon_rdv`
  ADD PRIMARY KEY (`id_salon`);

--
-- Index pour la table `sujet`
--
ALTER TABLE `sujet`
  ADD PRIMARY KEY (`id_sujet`),
  ADD UNIQUE KEY `nom_sujet` (`nom_sujet`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(11) NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `centre_interet`
--
ALTER TABLE `centre_interet`
  MODIFY `id_centre_interet` int(11) NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `salon_rdv`
--
ALTER TABLE `salon_rdv`
  MODIFY `id_salon` int(11) NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sujet`
--
ALTER TABLE `sujet`
  MODIFY `id_sujet` int(11) NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
