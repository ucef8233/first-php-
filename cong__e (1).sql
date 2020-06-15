-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 15 juin 2020 à 23:12
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `congée`
--

-- --------------------------------------------------------

--
-- Structure de la table `demande_conge`
--

CREATE TABLE `demande_conge` (
  `id_conger` int(11) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `confirmation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `demande_conge`
--

INSERT INTO `demande_conge` (`id_conger`, `date_debut`, `date_fin`, `id_user`, `confirmation`) VALUES
(1, '2020-06-14', '2020-06-27', 86, 'valider'),
(2, '2020-06-21', '2020-06-27', 86, 'refuser'),
(3, '2020-06-28', '2020-07-05', 86, 'valider'),
(4, '2020-06-21', '2020-06-17', 86, 'valider'),
(5, '2020-06-21', '2020-06-17', 86, 'valider'),
(6, '2020-06-21', '2020-06-26', 90, 'refuser'),
(7, '2020-06-14', '2020-06-28', 86, 'refuser'),
(8, '2020-06-21', '2020-06-28', 86, 'refuser'),
(9, '2020-07-12', '2020-07-19', 90, 'valider'),
(10, '2020-07-11', '2020-07-18', 86, 'refuser');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `niveau` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `Nom`, `slug`, `niveau`) VALUES
(2, 'youssef', 'employé', 1),
(3, 'adam', 'admin', 2),
(4, 'marouan', 'directeur', 3);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(150) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `adress` varchar(250) DEFAULT NULL,
  `type_user` varchar(250) NOT NULL,
  `CIN` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `adress_postal` varchar(255) DEFAULT NULL,
  `tell` int(100) DEFAULT NULL,
  `date_integration` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `adress`, `type_user`, `CIN`, `nom`, `prenom`, `adress_postal`, `tell`, `date_integration`) VALUES
(31, 'salim', '$2y$10$SXVqbGegvcmkPpC/j9sXmO.GeSUhVqOj1L552e/wfzOW6DywBNrjm', 'ucefsalim@gmail.com', 'admin', 'BK604045', 'Salim', 'Youssef', 'adress dirrecteur test', 620202020, '2020-01-21'),
(86, 'user', '$2y$10$5MPWQ7j/dqM5rzLNXKbwA.Tzp11YiD8msUmV00CTvpjYrT9r78rTu', 'testing@gmail.com', 'user', 'TS555555', 'hakim', 'nasifi', 'test adreess 12 hakim', 909090909, '2020-01-07'),
(88, 'marouan', '$2y$10$bQpeFpBdH5M3ZSq7LuAOZuHJPZy60yoa3V0Oz2tEG5xfPU4thGbF6', 'marouan@gmail.com', 'dirrecteur', 'BK222222', 'marouan', 'khadiri', 'test adreess 12 olpa', 666666666, '2020-05-17'),
(90, 'testing', '$2y$10$JKWtnaRJl4UofT7pfWBPd.PKog.h9UyhN6CIXstuKB3OCy56GxNoO', 'testing22@gmail.com', 'user', 'BK44675', 'testT', 'teseeeeh', 'test adreess 12 olpaaaaaaa', 909090909, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `demande_conge`
--
ALTER TABLE `demande_conge`
  ADD PRIMARY KEY (`id_conger`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `demande_conge`
--
ALTER TABLE `demande_conge`
  MODIFY `id_conger` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `demande_conge`
--
ALTER TABLE `demande_conge`
  ADD CONSTRAINT `demande_conge_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
