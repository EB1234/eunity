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


-- Export de la structure de vue projet_europe. affichage_commentaire
-- Création d'une table temporaire pour palier aux erreurs de dépendances de VIEW
CREATE TABLE `affichage_commentaire` (
  `id_commentaire` INT(11) NOT NULL,
  `id_sujet` INT(11) NULL,
  `commentaire_sujet` VARCHAR(255) NULL COLLATE 'utf8_general_ci',
  `date_commentaire` DATETIME NULL,
  `id_membre` INT(11) NOT NULL,
  `pseudo` VARCHAR(20) NOT NULL COLLATE 'utf8_general_ci',
  `photo` VARCHAR(200) NULL COLLATE 'utf8_general_ci',
  `age_post` VARCHAR(3) NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;


-- Export de la structure de table projet_europe. centre_interet
CREATE TABLE IF NOT EXISTS `centre_interet` (
  `id_centre_interet` int(11) NOT NULL AUTO_INCREMENT,
  `nom_ci` varchar(20) DEFAULT NULL,
  `description_ci` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_centre_interet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Export de données de la table projet_europe.centre_interet : ~0 rows (environ)
/*!40000 ALTER TABLE `centre_interet` DISABLE KEYS */;
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
  `id_membre` int(11) DEFAULT NULL,
  `id_centre_interet` int(11) DEFAULT NULL
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
  `nom_sujet` varchar(20) DEFAULT NULL,
  `id_centre_interet` int(11) DEFAULT NULL,
  `photo_sujet` varchar(200) DEFAULT NULL,
  `description_sujet` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_sujet`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;

-- Export de données de la table projet_europe.sujet : ~6 rows (environ)
/*!40000 ALTER TABLE `sujet` DISABLE KEYS */;
INSERT INTO `sujet` (`id_sujet`, `nom_sujet`, `id_centre_interet`, `photo_sujet`, `description_sujet`) VALUES
  (62, 'Coucou', 0, '7PtWSwC.jpg', 'iuytgfrdeszq'),
  (64, 'sqdfghj', 0, '2zUy4G9.jpg', 'dfhgdhfdjrdyjdtyj'),
  (65, 'Jacques Chirac', 0, 'taco_cat_in_space_by_jayro_jones-d7o5mow.jpg', 'C\'est cool la Corse'),
  (78, 'jhgfds', 0, '2f4ce504c27185aa8719ca43710b74f6.jpg', 'test'),
  (79, 'Superbe', 0, 'G5pfP.jpg', 'Joli quand même'),
  (80, 'Les voyages ca forme', 0, 'wNnCYQy.jpg', 'C\'est bien les chocolatinesdd');
/*!40000 ALTER TABLE `sujet` ENABLE KEYS */;


-- Export de la structure de vue projet_europe. affichage_commentaire
-- Suppression de la table temporaire et création finale de la structure d'une vue
DROP TABLE IF EXISTS `affichage_commentaire`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `affichage_commentaire` AS select `commentaire_membre`.`id_commentaire` AS `id_commentaire`,`commentaire_membre`.`id_sujet` AS `id_sujet`,`commentaire_membre`.`commentaire_sujet` AS `commentaire_sujet`,`commentaire_membre`.`date_commentaire` AS `date_commentaire`,`membre`.`id_membre` AS `id_membre`,`membre`.`pseudo` AS `pseudo`,`membre`.`photo` AS `photo`,if((timestampdiff(DAY,`commentaire_membre`.`date_commentaire`,now()) < 1),'NEW','OLD') AS `age_post` from (`commentaire_membre` join `membre` on((`membre`.`id_membre` = `commentaire_membre`.`id_membre`))) ;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
