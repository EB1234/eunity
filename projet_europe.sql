-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 17 Août 2016 à 11:58
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
  `id_centre_interet` int(11) NOT NULL,
  `nom_ci` varchar(20) NOT NULL,
  `description_ci` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `centre_interet`
--

INSERT INTO `centre_interet` (`id_centre_interet`, `nom_ci`, `description_ci`) VALUES
(1, 'Ecology', 'Ecologie europeenne'),
(2, 'Politic', 'la politique européenne'),
(3, 'Religion', 'parler des differents religions d''europe '),
(4, 'New technologies', ''),
(5, 'Health', '');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_membre`
--

CREATE TABLE `commentaire_membre` (
  `id_membre` int(11) NOT NULL,
  `id_sujet` int(11) NOT NULL,
  `commentaire_sujet` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `interesse`
--

CREATE TABLE `interesse` (
  `id_sujet` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `commentaire_sujet` varchar(200) NOT NULL,
  `statut` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_membre` int(11) NOT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `pseudo` varchar(20) NOT NULL,
  `mdp` varchar(60) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `nationalite` varchar(20) DEFAULT NULL,
  `statut` int(1) DEFAULT NULL,
  `photo` varchar(200) DEFAULT 'defaultAvatar.png',
  `genre` enum('m','f','autre') DEFAULT NULL,
  `date_naissance` date NOT NULL,
  `age_public` int(11) DEFAULT NULL,
  `date_inscription` datetime DEFAULT NULL,
  `autre` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `prenom`, `nom`, `pseudo`, `mdp`, `mail`, `nationalite`, `statut`, `photo`, `genre`, `date_naissance`, `age_public`, `date_inscription`, `autre`) VALUES
(2, '', '', 'bobama', '$2y$10$rSqYJPnZHSvP9s.VixcI.ugl6y78LHYnx5vjRTvuVU0Ha11wuCkVG', '', '', 0, 'photo_portrait1.jpg', 'm', '1977-02-10', 0, '2016-08-12 16:01:50', ''),
(3, '', '', 'baba', '$2y$10$X4GNQpDyuzeGLHtvbUMXMOUnmt9qIKqrza1KwfWJtadCz1VA5MtTa', 'baba@gmail.com', '', 0, '', '', '1992-02-15', 0, '2016-08-12 16:07:38', ''),
(4, '', '', 'veve', '$2y$10$AMXtfuADYbtMpd/bB/sfoOcuL8QlvNo4Yeki6HAc2VpuWW0ZpTYg2', 'vero@gmail.com', '', 0, '', '', '1969-06-21', 0, '2016-08-12 16:08:57', ''),
(5, '', '', 'nana', '$2y$10$funfPKaQ.HPxD0erE3hBwea/HuvQnEqq1TqsUB6fA8lbbC3e05j1C', 'nana@gmail.com', '', 0, '', '', '1990-06-20', 0, '2016-08-12 16:10:22', ''),
(6, '', '', 'emem', '$2y$10$gHhPIht6uEZ77wcoa/NGV.NUafWGA9eg8y1wa6z4xjbJWMeo5ezK6', 'emem@gmail.com', '', 0, '', '', '1965-05-20', 0, '2016-08-12 16:12:40', ''),
(8, '', '', 'hugo', '$2y$10$c8rsW05chPRqxky79eM8V.oCYf8ETT0cYH22qydK4eQlg5QhzuIem', 'hugo_liegeard@yahoo.fr', '', 0, '', '', '1985-05-20', 0, '2016-08-12 16:15:30', ''),
(11, '', '', 'vava', '$2y$10$5FIlqa.iPoLE3f1hOONasuZvJ2WNILP2VlSgGQ563esOLCfb3dwOO', 'vava@gmail.com', '', 0, '', '', '1973-08-20', 0, '2016-08-12 16:22:44', ''),
(12, '', '', 'hehe', '$2y$10$2QzE4oUVJPon9GcBL/XadOBqGNhgpr5ywST4c20jHE1Zo3c7NLOPm', 'hehe@gmail.com', '', 0, '', '', '1985-12-14', 0, '2016-08-12 16:24:18', ''),
(13, 'martin', 'martin', 'gege', '$2y$10$.HbG.tKjHmzBne0OxekNbOZGMb5Plyf6gUcP0InjJsz71iwY3kfVm', 'martinbptst@gmail', 'France', 0, 'photo_portrait1.jpg', 'm', '1985-07-16', 0, '2016-08-12 16:28:22', '');

-- --------------------------------------------------------

--
-- Structure de la table `membre_centre_interet`
--

CREATE TABLE `membre_centre_interet` (
  `id_membre` int(11) NOT NULL,
  `id_centre_interet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `participer`
--

CREATE TABLE `participer` (
  `id_salon` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `statut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `salon_rdv`
--

CREATE TABLE `salon_rdv` (
  `id_salon` int(11) NOT NULL,
  `id_sujet` int(11) NOT NULL,
  `nombre_participants` int(11) NOT NULL,
  `id_membre_maitre` int(11) NOT NULL,
  `lieu_rdv` varchar(50) NOT NULL,
  `date_rdv` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sujet`
--

CREATE TABLE `sujet` (
  `id_sujet` int(11) NOT NULL,
  `nom_sujet` varchar(50) NOT NULL,
  `id_centre_interet` int(11) NOT NULL,
  `photo_sujet` varchar(200) NOT NULL,
  `description_sujet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sujet`
--

INSERT INTO `sujet` (`id_sujet`, `nom_sujet`, `id_centre_interet`, `photo_sujet`, `description_sujet`) VALUES
(1, 'Secularism in Europe', 3, '/is_secularism_under_threat_in_Europe.jpg', 'Secularism is one of the bedrocks of European liberal democracy. Across the continent, people take it for granted that governments are separated from religious institutions. Even in states that maintain an official established religion (such as England or Malta) secularism is essentially followed in practice.\n\nBut is all that changing? Is secularism now under threat in parts of Europe? We had a comment sent in from Jon on our ‘Suggest a Debate’ page, arguing that immigration is fundamentally changing European society, and is putting secularism under threat.\n\nAccording to a 2012 Eurobarometer survey, 72% of people living in the EU define themselves as Christian, whereas only 23% think of themselves as atheist or agnostic (and 2% define themselves as Muslim, whilst less than 1% call themselves Buddhist, Sikh, Hindu, or Jewish). It’s true that religious minorities are often concentrated in urban areas, and they seem to receive a disproportionate amount of (often negative) attention via the media. But it seems a stretch to argue that immigration is ‘threatening’ European secularism.\n\nIs secularism under threat in Europe? Or has Europe never been more secular? Are fears about the erosion of secularism being overblown? Let us know your thoughts and comments in the form below, and we’ll take them to policymakers and experts for their reactions!'),
(2, 'Human Rights in 2016', 2, '/sakharov.jpg', 'est-ce que c''est le début de la dictature?'),
(3, 'Brexit', 3, '/Brexit.jpg', 'Erasmus contribue_t_il à la cohesion de l''europe '),
(4, 'Urban Air Pollution', 1, '/Pollution.jpg', 'Urban air pollution has emerged as a major health, economic and social threat, since cities expand at unprecedented rates across the world. In 1950, one-third of the world’s population lived in cities – today this has risen to one-half, and will reach two-thirds by 2050.'),
(6, 'Electric Car', 1, '/Electric_Car.jpg', ''),
(7, 'Robotic hand', 4, '/robotic_hand.jpg', ''),
(8, 'Sense of community', 4, '/sense_of_community.jpg', ''),
(9, 'Models of healthcare', 5, '/healthcare.jpg', 'European healthcare systems are in urgent need of reform. Converging pressures of an ageing population, the growing burden of chronic diseases, shortages of healthcare workers and increased demand for care are significant challenges for healthcare systems.'),
(10, 'LiveWell for LIFE', 5, '/Livewell.jpg', ''),
(11, 'Helsinki welfare state', 2, '/Helsinki_welfare_state.jpg', ''),
(12, 'Cop 21 conference', 1, '/Cop21_conference.jpg', ''),
(13, 'Better understanding of the Quran', 3, '/Quran.jpg', '');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `sujet_ci`
--
CREATE TABLE `sujet_ci` (
`id_sujet` int(11)
,`nom_sujet` varchar(50)
,`photo_sujet` varchar(200)
,`description_sujet` text
,`id_centre_interet` int(11)
,`nom_ci` varchar(20)
,`description_ci` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure de la vue `sujet_ci`
--
DROP TABLE IF EXISTS `sujet_ci`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sujet_ci`  AS  select `sujet`.`id_sujet` AS `id_sujet`,`sujet`.`nom_sujet` AS `nom_sujet`,`sujet`.`photo_sujet` AS `photo_sujet`,`sujet`.`description_sujet` AS `description_sujet`,`centre_interet`.`id_centre_interet` AS `id_centre_interet`,`centre_interet`.`nom_ci` AS `nom_ci`,`centre_interet`.`description_ci` AS `description_ci` from (`sujet` join `centre_interet` on((`sujet`.`id_centre_interet` = `centre_interet`.`id_centre_interet`))) ;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `centre_interet`
--
ALTER TABLE `centre_interet`
  ADD PRIMARY KEY (`id_centre_interet`),
  ADD UNIQUE KEY `nom_ci` (`nom_ci`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`);

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
-- AUTO_INCREMENT pour la table `centre_interet`
--
ALTER TABLE `centre_interet`
  MODIFY `id_centre_interet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `salon_rdv`
--
ALTER TABLE `salon_rdv`
  MODIFY `id_salon` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `sujet`
--
ALTER TABLE `sujet`
  MODIFY `id_sujet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
