-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 28 déc. 2022 à 20:51
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pi`
--

-- --------------------------------------------------------

--
-- Structure de la table `brut`
--

CREATE TABLE `brut` (
  `CLIENT` varchar(10) DEFAULT NULL,
  `classe` varchar(1) DEFAULT NULL,
  `Débit_en_compte` int(11) DEFAULT NULL,
  `Impayés` int(11) DEFAULT NULL,
  `Escompte_commercial` int(11) DEFAULT NULL,
  `Crédits_amortissables` int(11) DEFAULT NULL,
  `Eng_Directs` int(11) DEFAULT NULL,
  `Credoc` int(11) DEFAULT NULL,
  `Caution` int(11) DEFAULT NULL,
  `Eng_Indire` int(11) DEFAULT NULL,
  `Dépôts` int(11) DEFAULT NULL,
  `autre_depot` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `brut`
--

INSERT INTO `brut` (`CLIENT`, `classe`, `Débit_en_compte`, `Impayés`, `Escompte_commercial`, `Crédits_amortissables`, `Eng_Directs`, `Credoc`, `Caution`, `Eng_Indire`, `Dépôts`, `autre_depot`) VALUES
(303662, 'D', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(303669, 'D', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(302845, 'D', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(303537, 'D', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
