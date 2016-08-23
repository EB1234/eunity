-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 23 Août 2016 à 10:47
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
-- Doublure de structure pour la vue `affichage_commentaire`
--
CREATE TABLE `affichage_commentaire` (
`id_commentaire` int(11)
,`id_sujet` int(11)
,`commentaire_sujet` varchar(255)
,`date_commentaire` datetime
,`id_membre` int(11)
,`pseudo` varchar(20)
,`photo` varchar(200)
,`age_post` varchar(3)
);

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
(2, 'Politic', 'la politique europ?enne'),
(3, 'Religion', 'parler des differents religions d''europe '),
(4, 'New technologies', ''),
(5, 'Health', '');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_membre`
--

CREATE TABLE `commentaire_membre` (
  `id_commentaire` int(11) NOT NULL,
  `id_membre` int(11) DEFAULT NULL,
  `id_sujet` int(11) DEFAULT NULL,
  `commentaire_sujet` varchar(255) DEFAULT NULL,
  `date_commentaire` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `commentaire_membre`
--

INSERT INTO `commentaire_membre` (`id_commentaire`, `id_membre`, `id_sujet`, `commentaire_sujet`, `date_commentaire`) VALUES
(1, 1, 65, 'Superbe collection de calmars', '2000-08-20 18:00:13'),
(2, 3, 65, 'Ok, ?a m''int?resse, j''aime ces trucs', '2016-08-20 18:37:48'),
(3, 3, 79, 'Oui je suis d''accord. Les gens sont tr?s intemporels de nos jours...', '2016-08-20 21:00:44'),
(4, 1, 65, 'OUioui', '2016-08-22 09:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `telephone` int(255) NOT NULL,
  `pays` int(255) NOT NULL,
  `commentaire` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `nom`, `prenom`, `mail`, `telephone`, `pays`, `commentaire`) VALUES
(1, 'Moni', 'Penny', 'moni@yop.fr', 601020304, 0, 'coucocucocuc ocucocucocuccaevravf vreavaervzrebvzrt'),
(2, 'toto', 'tototo', 'toto@yop.fr', 601020304, 0, 'Hola hola hola hola hola');

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
  `photo` varchar(200) DEFAULT NULL,
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
(1, '', '', 'admin', '$2y$10$xj1XB9Jb5dQLlN/b5LO6ouOMGLKqxoVniMmeTOIkOPZshWMCACbTW', 'admin@admin.com', '', 0, 'defaultAvatar.png', '', '1983-06-09', 0, '2016-08-10 15:42:40', ''),
(2, '', 'Chevenement', 'Jean', '$2y$10$HL/G0.bMxX6RXX4I3PQ2oewaNYtbsnYJGFFsV57ySBiP8ZEagWBeK', 'dujardin@gmail.com', '', 0, 'defaultAvatar.png', '', '1988-06-06', 0, '2016-08-15 16:17:54', ''),
(3, 'Marc', 'Etez', 'Marc', '$2y$10$7nkeqnsd9WGzWrKRIdYKf.kYtjnCcTxv3si1lqq5z6PAS5ThNNApi', 'chamallow@yopmail.com', 'France', 1, '_homme_portrait.jpg', 'f', '1987-04-01', 1, '2016-08-15 16:18:55', 'Je suis un passionn? de la choucroutte. J''en ai une collectiond e cent-soixante-quinze.');

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
  `statut` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `participer`
--

INSERT INTO `participer` (`id_salon`, `id_membre`, `statut`) VALUES
(1, 1, 0),
(1, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `salon_rdv`
--

CREATE TABLE `salon_rdv` (
  `id_salon` int(11) NOT NULL,
  `id_sujet` int(11) DEFAULT NULL,
  `nombre_participants` int(11) DEFAULT NULL,
  `id_membre_maitre` int(11) DEFAULT NULL,
  `lieu_rdv` varchar(50) DEFAULT NULL,
  `date_rdv` date DEFAULT NULL,
  `heure_rdv` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `salon_rdv`
--

INSERT INTO `salon_rdv` (`id_salon`, `id_sujet`, `nombre_participants`, `id_membre_maitre`, `lieu_rdv`, `date_rdv`, `heure_rdv`) VALUES
(1, 6, 5, 3, '16, rue Barbes Levallois Perret', '2016-06-20', '19:00:00');

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
(1, 'Secularism in Europe', 3, '/is_secularism_under_threat_in_Europe.jpg', 'Secularism is one of the bedrocks of European liberal democracy. Across the continent, people take it for granted that governments are separated from religious institutions. Even in states that maintain an official established religion (such as England or Malta) secularism is essentially followed in practice. But is all that changing? Is secularism now under threat in parts of Europe? We had a comment sent in from Jon on our ‘Suggest a Debate’ page, arguing that immigration is fundamentally changing European society, and is putting secularism under threat.According to a 2012 Eurobarometer survey, 72% of people living in the EU define themselves as Christian, whereas only 23% think of themselves as atheist or agnostic (and 2% define themselves as Muslim, whilst less than 1% call themselves Buddhist, Sikh, Hindu, or Jewish). It’s true that religious minorities are often concentrated in urban areas, and they seem to receive a disproportionate amount of (often negative) attention via the media. But it seems a stretch to argue that immigration is ‘threatening’ European secularism. Is secularism under threat in Europe? Or has Europe never been more secular? Are fears about the erosion of secularism being overblown? Let us know your thoughts and comments in the form below, and we’ll take them to policymakers and experts for their reactions!'),
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
-- Doublure de structure pour la vue `sujet_plusieurs_salons`
--
CREATE TABLE `sujet_plusieurs_salons` (
`id_salon` int(11)
,`lieu_rdv` varchar(50)
,`date_rdv` date
,`id_membre_maitre` int(11)
,`nom` varchar(20)
,`photo` varchar(200)
,`id_sujet` int(11)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `sujet_salon_rdv`
--
CREATE TABLE `sujet_salon_rdv` (
`id_salon` int(11)
,`nombre_participants` int(11)
,`id_sujet` int(11)
,`nom_sujet` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure de la vue `affichage_commentaire`
--
DROP TABLE IF EXISTS `affichage_commentaire`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `affichage_commentaire`  AS  select `commentaire_membre`.`id_commentaire` AS `id_commentaire`,`commentaire_membre`.`id_sujet` AS `id_sujet`,`commentaire_membre`.`commentaire_sujet` AS `commentaire_sujet`,`commentaire_membre`.`date_commentaire` AS `date_commentaire`,`membre`.`id_membre` AS `id_membre`,`membre`.`pseudo` AS `pseudo`,`membre`.`photo` AS `photo`,if((timestampdiff(DAY,`commentaire_membre`.`date_commentaire`,now()) < 1),'NEW','OLD') AS `age_post` from (`commentaire_membre` join `membre` on((`membre`.`id_membre` = `commentaire_membre`.`id_membre`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `sujet_ci`
--
DROP TABLE IF EXISTS `sujet_ci`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sujet_ci`  AS  select `sujet`.`id_sujet` AS `id_sujet`,`sujet`.`nom_sujet` AS `nom_sujet`,`sujet`.`photo_sujet` AS `photo_sujet`,`sujet`.`description_sujet` AS `description_sujet`,`centre_interet`.`id_centre_interet` AS `id_centre_interet`,`centre_interet`.`nom_ci` AS `nom_ci`,`centre_interet`.`description_ci` AS `description_ci` from (`sujet` join `centre_interet` on((`sujet`.`id_centre_interet` = `centre_interet`.`id_centre_interet`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `sujet_plusieurs_salons`
--
DROP TABLE IF EXISTS `sujet_plusieurs_salons`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sujet_plusieurs_salons`  AS  select `salon_rdv`.`id_salon` AS `id_salon`,`salon_rdv`.`lieu_rdv` AS `lieu_rdv`,`salon_rdv`.`date_rdv` AS `date_rdv`,`salon_rdv`.`id_membre_maitre` AS `id_membre_maitre`,`membre`.`nom` AS `nom`,`membre`.`photo` AS `photo`,`sujet`.`id_sujet` AS `id_sujet` from ((`salon_rdv` join `membre`) join `sujet`) where ((`salon_rdv`.`id_membre_maitre` = `membre`.`id_membre`) and (`sujet`.`id_sujet` = `salon_rdv`.`id_sujet`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `sujet_salon_rdv`
--
DROP TABLE IF EXISTS `sujet_salon_rdv`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sujet_salon_rdv`  AS  select `salon_rdv`.`id_salon` AS `id_salon`,`salon_rdv`.`nombre_participants` AS `nombre_participants`,`sujet`.`id_sujet` AS `id_sujet`,`sujet`.`nom_sujet` AS `nom_sujet` from (`sujet` join `salon_rdv`) where (`sujet`.`id_sujet` = `salon_rdv`.`id_sujet`) ;

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
-- Index pour la table `commentaire_membre`
--
ALTER TABLE `commentaire_membre`
  ADD PRIMARY KEY (`id_commentaire`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`);

--
-- Index pour la table `participer`
--
ALTER TABLE `participer`
  ADD PRIMARY KEY (`id_salon`,`id_membre`);

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
-- AUTO_INCREMENT pour la table `commentaire_membre`
--
ALTER TABLE `commentaire_membre`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `salon_rdv`
--
ALTER TABLE `salon_rdv`
  MODIFY `id_salon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `sujet`
--
ALTER TABLE `sujet`
  MODIFY `id_sujet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;