-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 21 Novembre 2014 à 18:17
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `mydb`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE IF NOT EXISTS `annonce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `annonce_type_id` int(11) DEFAULT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nbr_place` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_refuser` tinyint(1) NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_debut` datetime DEFAULT NULL,
  `date_fin` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F65593E5A76ED395` (`user_id`),
  KEY `IDX_F65593E53F2316F3` (`annonce_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`id`, `user_id`, `annonce_type_id`, `titre`, `description`, `nbr_place`, `is_active`, `is_refuser`, `adresse`, `ville`, `cp`, `date_debut`, `date_fin`, `updated`, `created`) VALUES
(23, 1, 1, 'Bowling2', 'testtest', 28, 1, 0, 'testtesttesttesttesttest', 'testtesttesttesttesttest', 'testtesttesttesttesttest', '2009-01-01 00:00:00', '2009-01-01 00:00:00', '2014-11-20 16:16:47', '2014-11-20 16:16:47'),
(24, 2, 2, 'Aniversaire', 'testtest', 15, 1, 0, 'testtesttesttest', 'testtesttesttest', '92300', '2009-01-01 00:00:00', '2009-01-01 00:00:00', '2014-11-20 16:21:28', '2014-11-20 16:21:28'),
(25, 2, 3, 'Course', 'Course de rue !!', 6, 0, 0, '20 rue de Paris', 'Paris', '92000', '2012-01-19 00:00:00', '2015-02-20 00:00:00', '2014-11-20 17:10:02', '2014-11-20 17:10:02'),
(26, 1, 4, 'Réunion mensuel - Novembre', 'Rdv avec toutes la boite lundi matin 9h !!', 40, 0, 0, '12 rue Rouget de l''Isle', 'Suresne', '92150', '2014-11-17 00:00:00', '2014-11-17 00:00:00', '2014-11-21 14:10:05', '2014-11-21 14:10:05'),
(27, 2, 5, 'Déjeuner', 'Petit déjeuner avec les directeur et client. RDV à l''amphi', 20, 0, 0, '14 place de Normand', 'Asnière sur seine', '92000', '2014-12-10 00:00:00', '2014-12-19 00:00:00', '2014-11-21 15:16:03', '2014-11-21 15:16:03');

-- --------------------------------------------------------

--
-- Structure de la table `annonce_photo`
--

CREATE TABLE IF NOT EXISTS `annonce_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `annonce_id` int(11) DEFAULT NULL,
  `file_photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_principal` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_33A4F878805AB2F` (`annonce_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Contenu de la table `annonce_photo`
--

INSERT INTO `annonce_photo` (`id`, `annonce_id`, `file_photo`, `is_principal`) VALUES
(13, 23, 'upload/23/glibowlingagenda.jpg', NULL),
(14, 24, 'upload/24/ScreenShot011.bmp', NULL),
(15, 25, 'upload/25/1430681-bugatti-veyron-super-sport.jpg', NULL),
(16, 26, 'upload/26/reunionbureautravail.jpg', NULL),
(17, 27, 'upload/27/e19e9ed2.jpg', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `annonce_type`
--

CREATE TABLE IF NOT EXISTS `annonce_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `annonce_type`
--

INSERT INTO `annonce_type` (`id`, `nom`) VALUES
(1, 'Divertissement'),
(2, 'Anniverssaire'),
(3, 'Autres'),
(4, 'Réunions'),
(5, 'Repas');

-- --------------------------------------------------------

--
-- Structure de la table `annonce_user`
--

CREATE TABLE IF NOT EXISTS `annonce_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `annonce_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nbr_personne` int(11) DEFAULT NULL,
  `note` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B7E60AD78805AB2F` (`annonce_id`),
  KEY `IDX_B7E60AD7A76ED395` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Contenu de la table `annonce_user`
--

INSERT INTO `annonce_user` (`id`, `annonce_id`, `user_id`, `nbr_personne`, `note`) VALUES
(14, 23, 1, NULL, NULL),
(15, 24, 2, NULL, NULL),
(16, 25, 2, NULL, NULL),
(17, 26, 1, NULL, NULL),
(18, 27, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE IF NOT EXISTS `departement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `message_annonce`
--

CREATE TABLE IF NOT EXISTS `message_annonce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `annonce_id` int(11) DEFAULT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_66DDA9E9A76ED395` (`user_id`),
  KEY `IDX_66DDA9E98805AB2F` (`annonce_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Contenu de la table `message_annonce`
--

INSERT INTO `message_annonce` (`id`, `user_id`, `annonce_id`, `message`, `created`, `updated`) VALUES
(26, 1, 25, 'L''utilisateur POUBADY barath participe a cette événement', '2014-11-21 12:50:52', '2014-11-21 12:50:52'),
(27, 1, 26, 'L''utilisateur POUBADY barath participe a cette événement', '2014-11-21 14:11:01', '2014-11-21 14:11:01'),
(28, 2, 27, 'L''utilisateur POUBADY2 barath2 participe a cette événement', '2014-11-21 15:42:24', '2014-11-21 15:42:24');

-- --------------------------------------------------------

--
-- Structure de la table `message_user`
--

CREATE TABLE IF NOT EXISTS `message_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `user_destinataire_id` int(11) DEFAULT NULL,
  `message` longtext COLLATE utf8_unicode_ci,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_24064D90A76ED395` (`user_id`),
  KEY `IDX_24064D90B62423E1` (`user_destinataire_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `message_user`
--

INSERT INTO `message_user` (`id`, `user_id`, `user_destinataire_id`, `message`, `created`, `updated`) VALUES
(1, 2, 2, 'Bonjour \r\n\r\nJe m''inscrit a votre ....', '2014-11-21 17:32:02', '2014-11-21 17:32:02'),
(2, 2, 2, 'trhtrsdfds gsdfg sdfgreh trh rth', '2014-11-21 17:33:00', '2014-11-21 17:33:00'),
(3, 2, 2, 'dghdr hthtrhj rtjh rtjh', '2014-11-21 17:33:25', '2014-11-21 17:33:25'),
(4, 2, NULL, 'ergyre heh trh trzhrz', '2014-11-21 17:34:00', '2014-11-21 17:34:00'),
(5, 2, NULL, 'fhbdf ngf gf', '2014-11-21 17:37:06', '2014-11-21 17:37:06'),
(6, 2, 1, 'retyr yt tr', '2014-11-21 17:38:44', '2014-11-21 17:38:44');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nom_role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`id`, `role`, `nom_role`) VALUES
(1, 'ROLE_ADMIN', 'ROLE_ADMIN'),
(2, 'ROLE_USER', 'ROLE_USER');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_newsletter` tinyint(1) NOT NULL,
  `is_desactiver` tinyint(1) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `salt`, `email`, `nom`, `prenom`, `cp`, `ville`, `avatar`, `is_newsletter`, `is_desactiver`, `date_created`, `date_updated`) VALUES
(1, 'admin', '123', NULL, 'barath.poubady@gmail.com', 'POUBADY', 'barath', '93800', 'Epinay sur seine', 'img/1.png', 0, 0, '2014-11-19 00:00:00', '2014-11-19 00:00:00'),
(2, 'admin2', '123', NULL, 'barath.poubady@gmail.com', 'POUBADY2', 'barath2', '93800', 'Epinay sur seine', 'img/2.jpg', 0, 0, '2014-11-19 00:00:00', '2014-11-19 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `user_departement`
--

CREATE TABLE IF NOT EXISTS `user_departement` (
  `departement_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`departement_id`,`user_id`),
  KEY `IDX_686D92F6CCF9E01E` (`departement_id`),
  KEY `IDX_686D92F6A76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `IDX_2DE8C6A3A76ED395` (`user_id`),
  KEY `IDX_2DE8C6A3D60322AC` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `user_role`
--

INSERT INTO `user_role` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `FK_F65593E53F2316F3` FOREIGN KEY (`annonce_type_id`) REFERENCES `annonce_type` (`id`),
  ADD CONSTRAINT `FK_F65593E5A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `annonce_photo`
--
ALTER TABLE `annonce_photo`
  ADD CONSTRAINT `FK_33A4F878805AB2F` FOREIGN KEY (`annonce_id`) REFERENCES `annonce` (`id`);

--
-- Contraintes pour la table `annonce_user`
--
ALTER TABLE `annonce_user`
  ADD CONSTRAINT `FK_B7E60AD7A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_B7E60AD78805AB2F` FOREIGN KEY (`annonce_id`) REFERENCES `annonce` (`id`);

--
-- Contraintes pour la table `message_annonce`
--
ALTER TABLE `message_annonce`
  ADD CONSTRAINT `FK_66DDA9E98805AB2F` FOREIGN KEY (`annonce_id`) REFERENCES `annonce` (`id`),
  ADD CONSTRAINT `FK_66DDA9E9A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `message_user`
--
ALTER TABLE `message_user`
  ADD CONSTRAINT `FK_24064D90B62423E1` FOREIGN KEY (`user_destinataire_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_24064D90A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `user_departement`
--
ALTER TABLE `user_departement`
  ADD CONSTRAINT `FK_686D92F6A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_686D92F6CCF9E01E` FOREIGN KEY (`departement_id`) REFERENCES `departement` (`id`);

--
-- Contraintes pour la table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `FK_2DE8C6A3D60322AC` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`),
  ADD CONSTRAINT `FK_2DE8C6A3A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
