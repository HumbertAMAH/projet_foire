-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 10 déc. 2022 à 16:58
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_foire`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `id_etd` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` varchar(100) NOT NULL,
  `annee` varchar(20) NOT NULL,
  `filiere` varchar(50) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `dateN` varchar(20) NOT NULL,
  `lieuN` varchar(200) NOT NULL,
  `nationalite` varchar(100) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `situation_matrimoniale` varchar(50) NOT NULL,
  `diplome_obtenu` varchar(100) NOT NULL,
  `BP` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `emailE` varchar(100) NOT NULL,
  `addresse` varchar(1000) NOT NULL,
  `type_payement` varchar(50) NOT NULL,
  `frais_scolarite` int(50) NOT NULL,
  `date_payement` varchar(20) NOT NULL,
  PRIMARY KEY (`id_etd`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id_etd`, `matricule`, `annee`, `filiere`, `nom`, `prenom`, `dateN`, `lieuN`, `nationalite`, `sexe`, `situation_matrimoniale`, `diplome_obtenu`, `BP`, `phone`, `email`, `emailE`, `addresse`, `type_payement`, `frais_scolarite`, `date_payement`) VALUES
(49, ' esig-0049-2021 ', 'annee 3', 'GMP', 'Robinson', 'ererr', '2022-12-22', 'erererer', 'erereer', 'feminin', 'mariÃ©', 'Bac', 'rtrt', '65656565', 'dffdfdfdf@mdm.dpfdf', '', 'fdfdfdfdfdfdfd', 'unique', 53454, '2022-12-22'),
(52, ' esig00512021', 'annee 1', 'SIL', 'ODOH', 'Simon', '2022-12-15', 'sdsdsd', 'lkjdlfdjflkdjflkf', 'feminin', 'celibataire', 'bac', '25', '92045717', 'simonodoh8@gmail.com', '', 'LomÃ©, BÃ¨-kpota', 'unique', 550000, '2022-12-23'),
(53, ' esig00512021', 'annee 1', 'SIL', 'ODOH', 'Simon', '2022-12-15', 'sdsdsd', 'lkjdlfdjflkdjflkf', 'feminin', 'celibataire', 'bac', '25', '92045717', 'simonodoh8@gmail.com', '', 'LomÃ©, BÃ¨-kpota', 'unique', 550000, '2022-12-23'),
(54, ' esig00512021', 'annee 1', 'SIL', 'ODOH', 'Simon', '2022-12-15', 'sdsdsd', 'lkjdlfdjflkdjflkf', 'feminin', 'celibataire', 'bac', '25', '92045717', 'simonodoh8@gmail.com', '', 'LomÃ©, BÃ¨-kpota', 'unique', 550000, '2022-12-23'),
(55, ' esig-0055-2021 ', 'annee 1', 'SIL', 'ODOH', 'Simon', '2022-12-05', 'ipeutetjuoietuo', 'lkjdlfdjflkdjflkf', 'masculin', 'celibataire', 'bac', '25', '92045717', 'simonodoh8@gmail.com', '', 'LomÃ©, BÃ¨-kpota', 'unique', 547822, '2022-12-28'),
(56, 'lTninabHrcuiIeVYWLFn3g==', 'annee 1', 'SIL', 'ODOH', 'Simon', '2022-12-15', 'Careeee', 'Togolaise', 'feminin', 'celibataire', 'BAC', 'LomÃ©', '92045717', 'simonodoh8@gmail.com', '', 'LomÃ©, BÃ¨-kpota', 'unique', 6556154, '2022-12-22'),
(57, 'lTninabHrcuiIOVYWLFn3g==', 'annee 1', 'SIL', 'esig00512021', 'Simon', '2022-12-30', 'Amou-Oblo', 'ddfhjf', 'feminin', 'mariÃ©', 'bac2', '15, golfe 2', '0922544578', 'simonodoh8@gmail.com', '', 'LomÃ©, BÃ¨-kpota', 'unique', 65854, '2022-12-23'),
(58, 'lTninabHrcuiL+VYWLFn3g==', 'annee 1', 'SIL', 'ODOH', 'Simon', '2022-12-24', 'Amou-Oblo', 'AAAAAAAAAAA', 'masculin', 'mariÃ©', 'bac2', 'LomÃ©', '92045717', 'simonodoh8@gmail.com', '', 'LomÃ©, BÃ¨-kpota', 'unique', 55655581, '2022-12-24'),
(59, 'lTninabHrcuiLuVYWLFn3g==', 'annee 1', 'SIL', 'ODOH', 'Simon', '2022-12-22', 'sdsdsd', 'lkjdlfdjflkdjflkf', 'masculin', 'celibataire', 'bac', '25', '92045717', 'simonodoh8@gmail.com', '', 'LomÃ©, BÃ¨-kpota', 'unique', 548265, '2022-12-21'),
(60, 'lTninabHrcuhJ+VYWLFn3g==', 'annee 1', 'SIL', 'esig00512021', 'Simon', '2023-01-04', 'Amou-Oblo', 'oikoikkikjii', 'masculin', 'celibataire', 'BAC', '15, golfe 2', '0922544578', 'simonodoh8@gmail.com', '', 'LomÃ©, BÃ¨-kpota', 'unique', 54548, '2022-12-15'),
(61, 'lTninabHrcuhJuVYWLFn3g==', 'annee 1', 'SIL', 'esig-0049-2021', 'potitÃ§irÃ§ti', '2022-12-22', 'dsfdfdf', 'AAAAAAAAAAA', 'masculin', 'mariÃ©', 'BAC', 'LomÃ©', '0922544578', 'simonodoh8@gmail.com', '', 'LomÃ©, BÃ¨-kpota', 'unique', 8798, '2022-12-24'),
(62, 'lTninabHrcuhJuVYWLFn3g==', 'annee 1', 'SIL', 'esig-0049-2021', 'potitÃ§irÃ§ti', '2022-12-22', 'dsfdfdf', 'AAAAAAAAAAA', 'masculin', 'mariÃ©', 'BAC', 'LomÃ©', '0922544578', 'simonodoh8@gmail.com', '', 'LomÃ©, BÃ¨-kpota', 'unique', 87989, '2022-12-24'),
(63, 'lTninabHrcuhJOVYWLFn3g==', 'annee 1', 'SIL', 'ODOH', 'Simon', '2022-12-14', 'iyty_Ã¨y', 'iu_u__u', 'masculin', 'celibataire', 'bac', '25', '92045717', 'simonodoh8@gmail.com', '', 'LomÃ©, BÃ¨-kpota', 'unique', 548885, '2022-12-23'),
(64, 'lTninabHrcuhI+VYWLFn3g==', 'annee 1', 'SIL', 'ZZZZZZZZZ', 'potitÃ§irÃ§ti', '2022-12-21', 'drdtett', 'ddtererere', 'masculin', 'mariÃ©', 'bac2', 'LomÃ©', '0922544578', 'simonodoh8@gmail.com', 'potitÃ§irÃ§tiZZZZZZZZZetu@esig.tg', 'LomÃ©, BÃ¨-kpota', 'unique', 659559, '2022-12-16'),
(65, 'lTninabHrcuhIuVYWLFn3g==', 'annee 1', 'SIL', 'esig-0047-2021', 'Simon', '2022-12-22', 'Amou-Oblo', 'dfftretrer', 'masculin', 'celibataire', 'BAC', 'ererrerereer', '545488848', 'simonodoh8@gmail.com', 'Simon', 'LomÃ©, BÃ¨-kpota', 'unique', 5454455, '2022-12-23'),
(66, 'lTninabHrcuhIuVYWLFn3g==', 'annee 1', 'SIL', 'esig-0047-2021', 'Simon', '2022-12-22', 'Amou-Oblo', 'dfftretrer', 'masculin', 'celibataire', 'BAC', 'ererrerereer', '545488848', 'simonodoh8@gmail.com', 'Simon.esig-0047-2021.etu@esig.tg', 'LomÃ©, BÃ¨-kpota', 'unique', 5454455, '2022-12-23'),
(67, 'lTninabHrcuhIuVYWLFn3g==', 'annee 1', 'SIL', 'esig-0047-2021', 'Simon', '2022-12-22', 'Amou-Oblo', 'dfftretrer', 'masculin', 'celibataire', 'BAC', 'ererrerereer', '545488848', 'simonodoh8@gmail.com', 'Simon.esig-0047-2021.etu@esig.tg', 'LomÃ©, BÃ¨-kpota', 'unique', 5454455, '2022-12-23'),
(68, 'lTninabHrcuhIuVYWLFn3g==', 'annee 1', 'SIL', 'esig-0047-2021', 'Simon', '2022-12-22', 'Amou-Oblo', 'dfftretrer', 'masculin', 'celibataire', 'BAC', 'ererrerereer', '545488848', 'simonodoh8@gmail.com', 'Simon.esig-0047-2021.etu@esig.tg', 'LomÃ©, BÃ¨-kpota', 'unique', 5454455, '2022-12-23'),
(69, 'lTninabHrcuhLuVYWLFn3g==', 'annee 1', 'SIL', 'esig-0047-2021', 'Simon', '2022-12-17', 'Amou-Oblo', 'Togolaise', 'masculin', 'celibataire', 'BAC', 'ererrerereer', '0545488848', 'simonodoh8@gmail.com', 'Simon.esig-0047-2021.etu@esig.tg', 'LomÃ©, BÃ¨-kpota', 'unique', 54684, '2022-12-21'),
(70, 'lTninabHrcugJ+VYWLFn3g==', 'annee 1', 'SIL', 'esig-0047-2021', 'Simon', '2022-12-17', 'dfdfdf', 'tetetdfdf', 'masculin', 'celibataire', 'BAC', 'ererrerereer', '0545488848', 'simonodoh8@gmail.com', 'Simon.esig-0047-2021.etu@esig.tg', 'LomÃ©, BÃ¨-kpota', 'unique', 51535, '2022-12-22'),
(71, 'lTninabHrcugJ+VYWLFn3g==', 'annee 1', 'SIL', 'esig-0047-2021', 'Simon', '2022-12-17', 'dfdfdf', 'tetetdfdf', 'masculin', 'celibataire', 'BAC', 'ererrerereer', '0545488848', 'simonodoh8@gmail.com', 'Simon.esig-0047-2021.etu@esig.tg', 'LomÃ©, BÃ¨-kpota', 'unique', 51535, '2022-12-22'),
(72, 'lTninabHrcugJeVYWLFn3g==', 'annee 1', 'SIL', 'ZZZZZZZZZ', 'potitÃ§irÃ§ti', '2022-12-22', 'Amou-Oblo', 'AAAAAAAAAAA', 'masculin', 'celibataire', 'BAC', 'LomÃ©', '0922544578', 'simonodoh8@gmail.com', 'potitÃ§irÃ§ti.ZZZZZZZZZ.etu@esig.tg', 'LomÃ©, BÃ¨-kpota', 'unique', 544451, '2022-12-22'),
(73, 'lTninabHrcugJeVYWLFn3g==', 'annee 1', 'SIL', 'ZZZZZZZZZ', 'potitÃ§irÃ§ti', '2022-12-22', 'Amou-Oblo', 'AAAAAAAAAAA', 'masculin', 'celibataire', 'BAC', 'LomÃ©', '0922544578', 'simonodoh8@gmail.com', 'potitÃ§irÃ§ti.ZZZZZZZZZ.etu@esig.tg', 'LomÃ©, BÃ¨-kpota', 'unique', 544451, '2022-12-22'),
(74, 'lTninabHrcugJeVYWLFn3g==', 'annee 1', 'SIL', 'ZZZZZZZZZ', 'potitÃ§irÃ§ti', '2022-12-22', 'Amou-Oblo', 'AAAAAAAAAAA', 'masculin', 'celibataire', 'BAC', 'LomÃ©', '0922544578', 'simonodoh8@gmail.com', 'potitÃ§irÃ§ti.ZZZZZZZZZ.etu@esig.tg', 'LomÃ©, BÃ¨-kpota', 'unique', 544451, '2022-12-22'),
(75, 'lTninabHrcugIuVYWLFn3g==', 'annee 1', 'SIL', 'esig-0047-2021', 'Simon', '2022-12-22', 'Amou-Oblo', 'fgfrrgggrr', 'feminin', 'celibataire', 'BAC', 'ererrerereer', '0545488848', 'simonodoh8@gmail.com', 'Simon.esig-0047-2021.etu@esig.tg', 'LomÃ©, BÃ¨-kpota', 'unique', 442525, '2022-12-20'),
(76, 'lTninabHrcugIeVYWLFn3g==', 'annee 1', 'SIL', 'QQQQQQQQQQ', 'potitÃ§irÃ§ti', '2022-12-20', 'Amou-Oblo', 'uyuyuyu', 'masculin', 'celibataire', 'BAC', 'LomÃ©', '0922544578', 'simonodoh8@gmail.com', 'potitÃ§irÃ§ti.QQQQQQQQQQ.etu@esig.tg', 'LomÃ©, BÃ¨-kpota', 'unique', 2353552, '2022-12-20'),
(77, 'lTninabHrcugIeVYWLFn3g==', 'annee 1', 'SIL', 'QQQQQQQQQQ', 'potitÃ§irÃ§ti', '2022-12-20', 'Amou-Oblo', 'uyuyuyu', 'masculin', 'celibataire', 'BAC', 'LomÃ©', '0922544578', 'simonodoh8@gmail.com', 'potitÃ§irÃ§ti.QQQQQQQQQQ.etu@esig.tg', 'LomÃ©, BÃ¨-kpota', 'unique', 2353552, '2022-12-20'),
(78, 'lTninabHrcugL+VYWLFn3g==', 'annee 1', 'SIL', 'ZZZZZZZZZ', 'potitÃ§irÃ§ti', '2022-12-21', 'LOME', 'AAAAAAAAAAA', 'masculin', 'celibataire', 'BAC', 'LomÃ©', '0922544578', 'simonodoh8@gmail.com', 'potitÃ§irÃ§ti.ZZZZZZZZZ.etu@esig.tg', 'LomÃ©, BÃ¨-kpota', 'unique', 858868, '2022-12-20'),
(79, 'lTninabHrcugL+VYWLFn3g==', 'annee 1', 'SIL', 'ZZZZZZZZZ', 'potitÃ§irÃ§ti', '2022-12-21', 'LOME', 'AAAAAAAAAAA', 'masculin', 'celibataire', 'BAC', 'LomÃ©', '0922544578', 'simonodoh8@gmail.com', 'potitÃ§irÃ§ti.ZZZZZZZZZ.etu@esig.tg', 'LomÃ©, BÃ¨-kpota', 'unique', 858868, '2022-12-20'),
(80, 'lTninabHrcugL+VYWLFn3g==', 'annee 1', 'SIL', 'ZZZZZZZZZ', 'potitÃ§irÃ§ti', '2022-12-21', 'LOME', 'AAAAAAAAAAA', 'masculin', 'celibataire', 'BAC', 'LomÃ©', '0922544578', 'simonodoh8@gmail.com', 'potitÃ§irÃ§ti.ZZZZZZZZZ.etu@esig.tg', 'LomÃ©, BÃ¨-kpota', 'unique', 858868, '2022-12-20'),
(81, 'lTninabHrcuvJuVYWLFn3g==', 'annee 1', 'SIL', 'siabi', 'jesoue', '2015-03-08', 'Amou-Oblo', 'Togolaise', 'masculin', 'celibataire', 'BAC', 'ererrerereer', '0545488848', 'simonodoh8@gmail.com', 'jesoue.siabi.etu@esig.tg', 'LomÃ©, BÃ¨-kpota', 'unique', 550000, '2023-04-07'),
(82, 'lTninabHrcuvJeVYWLFn3g==', 'annee 1', 'SIL', 'BONJOUR', 'Demain', '2016-07-09', 'Amou-Oblo', 'TogoLaise', 'masculin', 'mariÃ©', 'bac2', 'LomÃ©', '0922544578', 'simonodoh8@gmail.com', 'Demain.BONJOUR.etu@esig.tg', 'LomÃ©, BÃ¨-kpota', 'unique', 4587154, '2023-03-10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
