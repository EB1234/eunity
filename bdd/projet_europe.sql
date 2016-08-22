-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           10.1.13-MariaDB - mariadb.org binary distribution
-- SE du serveur:                Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Export de la structure de la base pour projet_europe
CREATE DATABASE IF NOT EXISTS `projet_europe` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `projet_europe`;


-- Export de la structure de table projet_europe. centre_interet
CREATE TABLE IF NOT EXISTS `centre_interet` (
  `id_centre_interet` int(11) NOT NULL AUTO_INCREMENT,
  `nom_ci` varchar(20) NOT NULL,
  `description_ci` varchar(100) NOT NULL,
  PRIMARY KEY (`id_centre_interet`),
  UNIQUE KEY `nom_ci` (`nom_ci`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Export de données de la table projet_europe.centre_interet : ~5 rows (environ)
/*!40000 ALTER TABLE `centre_interet` DISABLE KEYS */;
INSERT INTO `centre_interet` (`id_centre_interet`, `nom_ci`, `description_ci`) VALUES
	(1, 'Ecology', 'Ecologie europeenne'),
	(2, 'Politic', 'la politique européenne'),
	(3, 'Religion', 'parler des differents religions d\'europe '),
	(4, 'New technologies', ''),
	(5, 'Health', '');
/*!40000 ALTER TABLE `centre_interet` ENABLE KEYS */;


-- Export de la structure de table projet_europe. commentaire_membre
CREATE TABLE IF NOT EXISTS `commentaire_membre` (
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `id_membre` int(11) DEFAULT NULL,
  `id_sujet` int(11) DEFAULT NULL,
  `commentaire_sujet` varchar(255) DEFAULT NULL,
  `date_commentaire` datetime DEFAULT NULL,
  PRIMARY KEY (`id_commentaire`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Export de données de la table projet_europe.commentaire_membre : ~4 rows (environ)
/*!40000 ALTER TABLE `commentaire_membre` DISABLE KEYS */;
INSERT INTO `commentaire_membre` (`id_commentaire`, `id_membre`, `id_sujet`, `commentaire_sujet`, `date_commentaire`) VALUES
  (1, 1, 65, 'Superbe collection de calmars', '2000-08-20 18:00:13'),
  (2, 3, 65, 'Ok, ça m\'intéresse, j\'aime ces trucs', '2016-08-20 18:37:48'),
  (3, 3, 79, 'Oui je suis d\'accord. Les gens sont très intemporels de nos jours...', '2016-08-20 21:00:44'),
  (4, 1, 65, 'OUioui', '2016-08-22 09:00:00');
/*!40000 ALTER TABLE `commentaire_membre` ENABLE KEYS */;


-- Export de la structure de table projet_europe. membre
CREATE TABLE IF NOT EXISTS `membre` (
  `id_membre` int(11) NOT NULL AUTO_INCREMENT,
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
  `autre` text,
  PRIMARY KEY (`id_membre`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Export de données de la table projet_europe.membre : ~3 rows (environ)
/*!40000 ALTER TABLE `membre` DISABLE KEYS */;
INSERT INTO `membre` (`id_membre`, `prenom`, `nom`, `pseudo`, `mdp`, `mail`, `nationalite`, `statut`, `photo`, `genre`, `date_naissance`, `age_public`, `date_inscription`, `autre`) VALUES
  (1, '', '', 'admin', '$2y$10$xj1XB9Jb5dQLlN/b5LO6ouOMGLKqxoVniMmeTOIkOPZshWMCACbTW', 'admin@admin.com', '', 0, 'defaultAvatar.png', '', '1983-06-09', 0, '2016-08-10 15:42:40', ''),
  (2, '', 'Chevenement', 'Jean', '$2y$10$HL/G0.bMxX6RXX4I3PQ2oewaNYtbsnYJGFFsV57ySBiP8ZEagWBeK', 'dujardin@gmail.com', '', 0, 'defaultAvatar.png', '', '1988-06-06', 0, '2016-08-15 16:17:54', ''),
  (3, 'Marc', 'Etez', 'Marc', '$2y$10$7nkeqnsd9WGzWrKRIdYKf.kYtjnCcTxv3si1lqq5z6PAS5ThNNApi', 'chamallow@yopmail.com', 'France', 1, '_homme_portrait.jpg', 'f', '1987-04-01', 1, '2016-08-15 16:18:55', 'Je suis un passionné de la choucroutte. J\'en ai une collectiond e cent-soixante-quinze.');
/*!40000 ALTER TABLE `membre` ENABLE KEYS */;


-- Export de la structure de table projet_europe. membre_centre_interet
CREATE TABLE IF NOT EXISTS `membre_centre_interet` (
  `id_membre` int(11) NOT NULL,
  `id_centre_interet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Export de données de la table projet_europe.membre_centre_interet : ~0 rows (environ)
/*!40000 ALTER TABLE `membre_centre_interet` DISABLE KEYS */;
/*!40000 ALTER TABLE `membre_centre_interet` ENABLE KEYS */;

-- Export de la structure de table projet_europe. participer
CREATE TABLE IF NOT EXISTS `participer` (
  `id_salon` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `statut` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_salon`,`id_membre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Export de données de la table projet_europe.participer : ~2 rows (environ)
/*!40000 ALTER TABLE `participer` DISABLE KEYS */;
INSERT INTO `participer` (`id_salon`, `id_membre`, `statut`) VALUES
  (1, 1, 0),
  (1, 3, 1);
/*!40000 ALTER TABLE `participer` ENABLE KEYS */;


-- Export de la structure de table projet_europe. salon_rdv
CREATE TABLE IF NOT EXISTS `salon_rdv` (
  `id_salon` int(11) NOT NULL AUTO_INCREMENT,
  `id_sujet` int(11) DEFAULT NULL,
  `nombre_participants` int(11) DEFAULT NULL,
  `id_membre_maitre` int(11) DEFAULT NULL,
  `lieu_rdv` varchar(50) DEFAULT NULL,
  `date_rdv` date DEFAULT NULL,
  `heure_rdv` time DEFAULT NULL,
  PRIMARY KEY (`id_salon`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Export de données de la table projet_europe.salon_rdv : ~0 rows (environ)
/*!40000 ALTER TABLE `salon_rdv` DISABLE KEYS */;
INSERT INTO `salon_rdv` (`id_salon`, `id_sujet`, `nombre_participants`, `id_membre_maitre`, `lieu_rdv`, `date_rdv`, `heure_rdv`) VALUES
  (1, 65, 5, 3, '16, rue Barbes Levallois Perret', '2016-06-20', '19:00:00');
/*!40000 ALTER TABLE `salon_rdv` ENABLE KEYS */;


-- Export de la structure de table projet_europe. sujet
CREATE TABLE IF NOT EXISTS `sujet` (
  `id_sujet` int(11) NOT NULL AUTO_INCREMENT,
  `nom_sujet` varchar(50) NOT NULL,
  `id_centre_interet` int(11) NOT NULL,
  `photo_sujet` varchar(200) NOT NULL,
  `description_sujet` text NOT NULL,
  PRIMARY KEY (`id_sujet`),
  UNIQUE KEY `nom_sujet` (`nom_sujet`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Export de données de la table projet_europe.sujet : ~12 rows (environ)
/*!40000 ALTER TABLE `sujet` DISABLE KEYS */;
INSERT INTO `sujet` (`id_sujet`, `nom_sujet`, `id_centre_interet`, `photo_sujet`, `description_sujet`) VALUES
	(1, 'Secularism in Europe', 3, 'is_secularism_under_threat_in_Europe.jpg', 'Secularism is one of the bedrocks of European liberal democracy. Across the continent, people take it for granted that governments are separated from religious institutions. Even in states that maintain an official established religion (such as England or Malta) secularism is essentially followed in practice.\n\nBut is all that changing? Is secularism now under threat in parts of Europe? We had a comment sent in from Jon on our ‘Suggest a Debate’ page, arguing that immigration is fundamentally changing European society, and is putting secularism under threat.\n\nAccording to a 2012 Eurobarometer survey, 72% of people living in the EU define themselves as Christian, whereas only 23% think of themselves as atheist or agnostic (and 2% define themselves as Muslim, whilst less than 1% call themselves Buddhist, Sikh, Hindu, or Jewish). It’s true that religious minorities are often concentrated in urban areas, and they seem to receive a disproportionate amount of (often negative) attention via the media. But it seems a stretch to argue that immigration is ‘threatening’ European secularism.\n\nIs secularism under threat in Europe? Or has Europe never been more secular? Are fears about the erosion of secularism being overblown? Let us know your thoughts and comments in the form below, and we’ll take them to policymakers and experts for their reactions!'),
	(2, 'Human Rights in 2016', 2, 'sakharov.jpg', 'est-ce que c\'est le début de la dictature?'),
	(3, 'Brexit', 3, 'Brexit.jpg', 'Erasmus contribue_t_il à la cohesion de l\'europe '),
	(4, 'Urban Air Pollution', 1, 'Pollution.jpg', 'Urban air pollution has emerged as a major health, economic and social threat, since cities expand at unprecedented rates across the world. In 1950, one-third of the world’s population lived in cities – today this has risen to one-half, and will reach two-thirds by 2050.'),
	(6, 'Electric Car', 1, 'Electric_Car.jpg', ''),
	(7, 'Robotic hand', 4, 'robotic_hand.jpg', ''),
	(8, 'Sense of community', 4, 'sense_of_community.jpg', ''),
	(9, 'Models of healthcare', 5, 'healthcare.jpg', 'European healthcare systems are in urgent need of reform. Converging pressures of an ageing population, the growing burden of chronic diseases, shortages of healthcare workers and increased demand for care are significant challenges for healthcare systems.'),
	(10, 'LiveWell for LIFE', 5, 'Livewell.jpg', ''),
	(11, 'Helsinki welfare state', 2, 'Helsinki_welfare_state.jpg', ''),
	(12, 'Cop 21 conference', 1, 'Cop21_conference.jpg', ''),
	(13, 'Better understanding of the Quran', 3, 'Quran.jpg', '');
/*!40000 ALTER TABLE `sujet` ENABLE KEYS */;


-- Export de la structure de vue projet_europe. sujet_ci
-- Création d'une table temporaire pour palier aux erreurs de dépendances de VIEW
CREATE TABLE `sujet_ci` (
	`id_sujet` INT(11) NOT NULL,
	`nom_sujet` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`photo_sujet` VARCHAR(200) NOT NULL COLLATE 'utf8_general_ci',
	`description_sujet` TEXT NOT NULL COLLATE 'utf8_general_ci',
	`id_centre_interet` INT(11) NOT NULL,
	`nom_ci` VARCHAR(20) NOT NULL COLLATE 'utf8_general_ci',
	`description_ci` VARCHAR(100) NOT NULL COLLATE 'utf8_general_ci'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;


-- Export de la structure de vue projet_europe. sujet_plusieurs_salons
-- Création d'une table temporaire pour palier aux erreurs de dépendances de VIEW
CREATE TABLE `sujet_plusieurs_salons` (
	`id_salon` INT(11) NOT NULL,
	`lieu_rdv` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`date_rdv` DATETIME NOT NULL,
	`open_close` ENUM('o','c') NOT NULL COLLATE 'utf8_general_ci',
	`id_membre_maitre` INT(11) NOT NULL,
	`nom` VARCHAR(20) NULL COLLATE 'utf8_general_ci',
	`photo` VARCHAR(200) NOT NULL COLLATE 'utf8_general_ci',
	`id_sujet` INT(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;


-- Export de la structure de vue projet_europe. sujet_salon_rdv
-- Création d'une table temporaire pour palier aux erreurs de dépendances de VIEW
CREATE TABLE `sujet_salon_rdv` (
	`id_salon` INT(11) NOT NULL,
	`nombre_participants` INT(11) NOT NULL,
	`id_sujet` INT(11) NOT NULL,
	`nom_sujet` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;


-- Export de la structure de vue projet_europe. sujet_ci
-- Suppression de la table temporaire et création finale de la structure d'une vue
DROP TABLE IF EXISTS `sujet_ci`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `sujet_ci` AS select `sujet`.`id_sujet` AS `id_sujet`,`sujet`.`nom_sujet` AS `nom_sujet`,`sujet`.`photo_sujet` AS `photo_sujet`,`sujet`.`description_sujet` AS `description_sujet`,`centre_interet`.`id_centre_interet` AS `id_centre_interet`,`centre_interet`.`nom_ci` AS `nom_ci`,`centre_interet`.`description_ci` AS `description_ci` from (`sujet` join `centre_interet` on((`sujet`.`id_centre_interet` = `centre_interet`.`id_centre_interet`))) ;


-- Export de la structure de vue projet_europe. sujet_plusieurs_salons
-- Suppression de la table temporaire et création finale de la structure d'une vue
DROP TABLE IF EXISTS `sujet_plusieurs_salons`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `sujet_plusieurs_salons` AS SELECT salon_rdv.id_salon,salon_rdv.lieu_rdv,salon_rdv.date_rdv,salon_rdv.id_membre_maitre,
membre.nom,membre.photo,sujet.id_sujet  FROM salon_rdv, membre, sujet
WHERE salon_rdv.id_membre_maitre = membre.id_membre
AND sujet.id_sujet = salon_rdv.id_sujet ;


-- Export de la structure de vue projet_europe. sujet_salon_rdv
-- Suppression de la table temporaire et création finale de la structure d'une vue
DROP TABLE IF EXISTS `sujet_salon_rdv`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `sujet_salon_rdv` AS select `salon_rdv`.`id_salon` AS `id_salon`,`salon_rdv`.`nombre_participants` AS `nombre_participants`,`sujet`.`id_sujet` AS `id_sujet`,`sujet`.`nom_sujet` AS `nom_sujet` from (`sujet` join `salon_rdv`) where (`sujet`.`id_sujet` = `salon_rdv`.`id_sujet`) ;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
