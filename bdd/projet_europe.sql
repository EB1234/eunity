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
  `id_membre` int(11) NOT NULL,
  `id_sujet` int(11) NOT NULL,
  `commentaire_sujet` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Export de données de la table projet_europe.commentaire_membre : ~0 rows (environ)
/*!40000 ALTER TABLE `commentaire_membre` DISABLE KEYS */;
/*!40000 ALTER TABLE `commentaire_membre` ENABLE KEYS */;


-- Export de la structure de table projet_europe. interesse
CREATE TABLE IF NOT EXISTS `interesse` (
  `id_sujet` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `commentaire_sujet` varchar(200) NOT NULL,
  `statut` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Export de données de la table projet_europe.interesse : ~0 rows (environ)
/*!40000 ALTER TABLE `interesse` DISABLE KEYS */;
/*!40000 ALTER TABLE `interesse` ENABLE KEYS */;


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
  `photo` varchar(200) NOT NULL DEFAULT 'defaultAvatar.png',
  `genre` enum('m','f','autre') DEFAULT NULL,
  `date_naissance` date NOT NULL,
  `age_public` int(11) DEFAULT NULL,
  `date_inscription` datetime DEFAULT NULL,
  `autre` text,
  PRIMARY KEY (`id_membre`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Export de données de la table projet_europe.membre : ~10 rows (environ)
/*!40000 ALTER TABLE `membre` DISABLE KEYS */;
INSERT INTO `membre` (`id_membre`, `prenom`, `nom`, `pseudo`, `mdp`, `mail`, `nationalite`, `statut`, `photo`, `genre`, `date_naissance`, `age_public`, `date_inscription`, `autre`) VALUES
	(2, 'martin ', 'martin', 'bobama', '$2y$10$rSqYJPnZHSvP9s.VixcI.ugl6y78LHYnx5vjRTvuVU0Ha11wuCkVG', '', '', 0, 'photo_portrait1.jpg', 'm', '1977-02-10', 0, '2016-08-12 16:01:50', ''),
	(3, '', '', 'baba', '$2y$10$X4GNQpDyuzeGLHtvbUMXMOUnmt9qIKqrza1KwfWJtadCz1VA5MtTa', 'baba@gmail.com', '', 0, '	defaultAvatar.png	', '', '1992-02-15', 0, '2016-08-12 16:07:38', ''),
	(4, '', '', 'veve', '$2y$10$AMXtfuADYbtMpd/bB/sfoOcuL8QlvNo4Yeki6HAc2VpuWW0ZpTYg2', 'vero@gmail.com', '', 0, '	defaultAvatar.png	', '', '1969-06-21', 0, '2016-08-12 16:08:57', ''),
	(5, '', '', 'nana', '$2y$10$funfPKaQ.HPxD0erE3hBwea/HuvQnEqq1TqsUB6fA8lbbC3e05j1C', 'nana@gmail.com', '', 0, '	defaultAvatar.png	', '', '1990-06-20', 0, '2016-08-12 16:10:22', ''),
	(6, 'em', 'emilie', 'emem', '$2y$10$gHhPIht6uEZ77wcoa/NGV.NUafWGA9eg8y1wa6z4xjbJWMeo5ezK6', 'emem@gmail.com', '', 0, '	defaultAvatar.png	', '', '1965-05-20', 0, '2016-08-12 16:12:40', ''),
	(8, '', '', 'hugo', '$2y$10$c8rsW05chPRqxky79eM8V.oCYf8ETT0cYH22qydK4eQlg5QhzuIem', 'hugo_liegeard@yahoo.fr', '', 0, '	defaultAvatar.png	', '', '1985-05-20', 0, '2016-08-12 16:15:30', ''),
	(11, '', '', 'vava', '$2y$10$5FIlqa.iPoLE3f1hOONasuZvJ2WNILP2VlSgGQ563esOLCfb3dwOO', 'vava@gmail.com', '', 0, '	defaultAvatar.png	', '', '1973-08-20', 0, '2016-08-12 16:22:44', ''),
	(12, '', '', 'hehe', '$2y$10$2QzE4oUVJPon9GcBL/XadOBqGNhgpr5ywST4c20jHE1Zo3c7NLOPm', 'hehe@gmail.com', '', 0, '	defaultAvatar.png	', '', '1985-12-14', 0, '2016-08-12 16:24:18', ''),
	(13, 'martin', 'martin', 'gege', '$2y$10$.HbG.tKjHmzBne0OxekNbOZGMb5Plyf6gUcP0InjJsz71iwY3kfVm', 'martinbptst@gmail', 'France', 0, 'photo_portrait1.jpg', 'm', '1985-07-16', 0, '2016-08-12 16:28:22', ''),
	(14, 'baptiste', 'martin', 'huhu', '$2y$10$.wtjhITfwL/fdrHzR6DSyu5JnN06Iu/ibILnRfZEhzqdlO0t6.VBG', 'huhu@gmail.com', '', 0, '	defaultAvatar.png	', '', '0000-00-00', 25, '2016-08-17 16:22:52', '');
/*!40000 ALTER TABLE `membre` ENABLE KEYS */;


-- Export de la structure de table projet_europe. membre_centre_interet
CREATE TABLE IF NOT EXISTS `membre_centre_interet` (
  `id_membre` int(11) NOT NULL,
  `id_centre_interet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Export de données de la table projet_europe.membre_centre_interet : ~0 rows (environ)
/*!40000 ALTER TABLE `membre_centre_interet` DISABLE KEYS */;
/*!40000 ALTER TABLE `membre_centre_interet` ENABLE KEYS */;


-- Export de la structure de vue projet_europe. membre_salon_rdv_sujet
-- Création d'une table temporaire pour palier aux erreurs de dépendances de VIEW
CREATE TABLE `membre_salon_rdv_sujet` (
	`id_salon` INT(11) NOT NULL,
	`nombre_participants` INT(11) NOT NULL,
	`id_membre_maitre` INT(11) NOT NULL,
	`lieu_rdv` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`date_rdv` DATETIME NOT NULL,
	`id_membre` INT(11) NOT NULL,
	`prenom` VARCHAR(20) NULL COLLATE 'utf8_general_ci',
	`nom` VARCHAR(20) NULL COLLATE 'utf8_general_ci',
	`pseudo` VARCHAR(20) NOT NULL COLLATE 'utf8_general_ci',
	`mail` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`statut` INT(1) NULL,
	`photo` VARCHAR(200) NOT NULL COLLATE 'utf8_general_ci',
	`genre` ENUM('m','f','autre') NULL COLLATE 'utf8_general_ci',
	`age_public` INT(11) NULL,
	`date_inscription` DATETIME NULL,
	`id_sujet` INT(11) NOT NULL,
	`nom_sujet` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci',
	`id_centre_interet` INT(11) NOT NULL,
	`photo_sujet` VARCHAR(200) NOT NULL COLLATE 'utf8_general_ci',
	`description_sujet` TEXT NOT NULL COLLATE 'utf8_general_ci'
) ENGINE=MyISAM;


-- Export de la structure de table projet_europe. participer
CREATE TABLE IF NOT EXISTS `participer` (
  `id_salon` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `statut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Export de données de la table projet_europe.participer : ~0 rows (environ)
/*!40000 ALTER TABLE `participer` DISABLE KEYS */;
/*!40000 ALTER TABLE `participer` ENABLE KEYS */;


-- Export de la structure de table projet_europe. salon_rdv
CREATE TABLE IF NOT EXISTS `salon_rdv` (
  `id_salon` int(11) NOT NULL AUTO_INCREMENT,
  `id_sujet` int(11) NOT NULL,
  `nombre_participants` int(11) NOT NULL,
  `id_membre_maitre` int(11) NOT NULL,
  `lieu_rdv` varchar(50) NOT NULL,
  `date_rdv` datetime NOT NULL,
  `open_close` enum('o','c') NOT NULL,
  PRIMARY KEY (`id_salon`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Export de données de la table projet_europe.salon_rdv : ~4 rows (environ)
/*!40000 ALTER TABLE `salon_rdv` DISABLE KEYS */;
INSERT INTO `salon_rdv` (`id_salon`, `id_sujet`, `nombre_participants`, `id_membre_maitre`, `lieu_rdv`, `date_rdv`, `open_close`) VALUES
	(1, 2, 15, 2, 'Fort de France', '2016-08-17 12:00:00', 'c'),
	(2, 3, 10, 6, 'paris', '2016-08-09 00:00:00', 'o'),
	(3, 2, 4, 6, 'Lyon', '2016-08-11 00:00:00', 'o'),
	(4, 10, 5, 2, 'Pointe de pitre', '2016-08-12 00:00:00', 'o');
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
	(1, 'Secularism in Europe', 3, '/is_secularism_under_threat_in_Europe.jpg', 'Secularism is one of the bedrocks of European liberal democracy. Across the continent, people take it for granted that governments are separated from religious institutions. Even in states that maintain an official established religion (such as England or Malta) secularism is essentially followed in practice.\n\nBut is all that changing? Is secularism now under threat in parts of Europe? We had a comment sent in from Jon on our ‘Suggest a Debate’ page, arguing that immigration is fundamentally changing European society, and is putting secularism under threat.\n\nAccording to a 2012 Eurobarometer survey, 72% of people living in the EU define themselves as Christian, whereas only 23% think of themselves as atheist or agnostic (and 2% define themselves as Muslim, whilst less than 1% call themselves Buddhist, Sikh, Hindu, or Jewish). It’s true that religious minorities are often concentrated in urban areas, and they seem to receive a disproportionate amount of (often negative) attention via the media. But it seems a stretch to argue that immigration is ‘threatening’ European secularism.\n\nIs secularism under threat in Europe? Or has Europe never been more secular? Are fears about the erosion of secularism being overblown? Let us know your thoughts and comments in the form below, and we’ll take them to policymakers and experts for their reactions!'),
	(2, 'Human Rights in 2016', 2, '/sakharov.jpg', 'est-ce que c\'est le début de la dictature?'),
	(3, 'Brexit', 3, '/Brexit.jpg', 'Erasmus contribue_t_il à la cohesion de l\'europe '),
	(4, 'Urban Air Pollution', 1, '/Pollution.jpg', 'Urban air pollution has emerged as a major health, economic and social threat, since cities expand at unprecedented rates across the world. In 1950, one-third of the world’s population lived in cities – today this has risen to one-half, and will reach two-thirds by 2050.'),
	(6, 'Electric Car', 1, '/Electric_Car.jpg', ''),
	(7, 'Robotic hand', 4, '/robotic_hand.jpg', ''),
	(8, 'Sense of community', 4, '/sense_of_community.jpg', ''),
	(9, 'Models of healthcare', 5, '/healthcare.jpg', 'European healthcare systems are in urgent need of reform. Converging pressures of an ageing population, the growing burden of chronic diseases, shortages of healthcare workers and increased demand for care are significant challenges for healthcare systems.'),
	(10, 'LiveWell for LIFE', 5, '/Livewell.jpg', ''),
	(11, 'Helsinki welfare state', 2, '/Helsinki_welfare_state.jpg', ''),
	(12, 'Cop 21 conference', 1, '/Cop21_conference.jpg', ''),
	(13, 'Better understanding of the Quran', 3, '/Quran.jpg', '');
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
) ENGINE=MyISAM;


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
) ENGINE=MyISAM;


-- Export de la structure de vue projet_europe. sujet_salon_rdv
-- Création d'une table temporaire pour palier aux erreurs de dépendances de VIEW
CREATE TABLE `sujet_salon_rdv` (
	`id_salon` INT(11) NOT NULL,
	`nombre_participants` INT(11) NOT NULL,
	`id_sujet` INT(11) NOT NULL,
	`nom_sujet` VARCHAR(50) NOT NULL COLLATE 'utf8_general_ci'
) ENGINE=MyISAM;


-- Export de la structure de vue projet_europe. membre_salon_rdv_sujet
-- Suppression de la table temporaire et création finale de la structure d'une vue
DROP TABLE IF EXISTS `membre_salon_rdv_sujet`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `membre_salon_rdv_sujet` AS select `salon_rdv`.`id_salon` AS `id_salon`,`salon_rdv`.`nombre_participants` AS `nombre_participants`,`salon_rdv`.`id_membre_maitre` AS `id_membre_maitre`,`salon_rdv`.`lieu_rdv` AS `lieu_rdv`,`salon_rdv`.`date_rdv` AS `date_rdv`,`membre`.`id_membre` AS `id_membre`,`membre`.`prenom` AS `prenom`,`membre`.`nom` AS `nom`,`membre`.`pseudo` AS `pseudo`,`membre`.`mail` AS `mail`,`membre`.`statut` AS `statut`,`membre`.`photo` AS `photo`,`membre`.`genre` AS `genre`,`membre`.`age_public` AS `age_public`,`membre`.`date_inscription` AS `date_inscription`,`sujet`.`id_sujet` AS `id_sujet`,`sujet`.`nom_sujet` AS `nom_sujet`,`sujet`.`id_centre_interet` AS `id_centre_interet`,`sujet`.`photo_sujet` AS `photo_sujet`,`sujet`.`description_sujet` AS `description_sujet` from ((`salon_rdv` join `membre`) join `sujet`) where ((`salon_rdv`.`id_membre_maitre` = `membre`.`id_membre`) and (`sujet`.`id_sujet` = `salon_rdv`.`id_sujet`)) ;


-- Export de la structure de vue projet_europe. sujet_ci
-- Suppression de la table temporaire et création finale de la structure d'une vue
DROP TABLE IF EXISTS `sujet_ci`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `sujet_ci` AS select `sujet`.`id_sujet` AS `id_sujet`,`sujet`.`nom_sujet` AS `nom_sujet`,`sujet`.`photo_sujet` AS `photo_sujet`,`sujet`.`description_sujet` AS `description_sujet`,`centre_interet`.`id_centre_interet` AS `id_centre_interet`,`centre_interet`.`nom_ci` AS `nom_ci`,`centre_interet`.`description_ci` AS `description_ci` from (`sujet` join `centre_interet` on((`sujet`.`id_centre_interet` = `centre_interet`.`id_centre_interet`))) ;


-- Export de la structure de vue projet_europe. sujet_plusieurs_salons
-- Suppression de la table temporaire et création finale de la structure d'une vue
DROP TABLE IF EXISTS `sujet_plusieurs_salons`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `sujet_plusieurs_salons` AS SELECT salon_rdv.id_salon,salon_rdv.lieu_rdv,salon_rdv.date_rdv,salon_rdv.open_close,salon_rdv.id_membre_maitre,
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
