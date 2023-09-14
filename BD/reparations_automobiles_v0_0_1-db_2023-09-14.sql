-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 14 sep. 2023 à 22:24
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `reparations_automobiles_v0_0_1`
--

-- --------------------------------------------------------

--
-- Structure de la table `reparations`
--

CREATE TABLE `reparations` (
  `id` int NOT NULL,
  `id_vehicule` int NOT NULL,
  `date_reparation_debut` date NOT NULL,
  `date_reparation_fin` date NOT NULL,
  `description_reparations` text NOT NULL,
  `montant_paye` int NOT NULL,
  `mechanicien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `reparations`
--

INSERT INTO `reparations` (`id`, `id_vehicule`, `date_reparation_debut`, `date_reparation_fin`, `description_reparations`, `montant_paye`, `mechanicien`) VALUES
(1, 1, '2023-08-01', '2023-08-01', 'Changement de pneu arrière gauche', 100, 'Michel Alvaro'),
(2, 2, '2023-08-01', '2023-08-01', 'Changement d\'huile', 60, 'Jean Desjardins'),
(3, 3, '2023-08-04', '2023-08-05', 'Remplacement de pare-brise', 300, 'Michel Alvaro'),
(4, 3, '2023-09-01', '2023-09-03', 'Réparation complète de valise arrière', 6000, 'Danny Tremblay'),
(7, 9, '2023-09-14', '2023-09-14', 'Remplacement de vitre côté passager', 100, 'Danny Tremblay');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `age` int NOT NULL,
  `telephone` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `courriel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `adresse`, `age`, `telephone`, `courriel`) VALUES
(1, 'Benca', 'Charles', '5830 Rue de Parme', 22, '450-478-5454', 'charlesbenca26@gmail.com'),
(2, 'Myre', 'Brandon', '3208 Rue de Modène\r\n', 19, '450-256-6899', 'brandonmyre12@hotmail.com'),
(4, 'Toupet', 'Florentin', '122 Rue Jean-De Ronceray', 18, '450-569-4141', 'florentintoupet33@yahoo.com'),
(6, 'Joola', 'Antonii', '1265 rue Vidéo', 65, '450-430-8754', 'antoniijoola@unsafemails.com');

-- --------------------------------------------------------

--
-- Structure de la table `vehicules`
--

CREATE TABLE `vehicules` (
  `id` int NOT NULL,
  `id_utilisateur` int NOT NULL,
  `marque` varchar(50) NOT NULL,
  `modele` varchar(50) NOT NULL,
  `plaque` varchar(20) NOT NULL,
  `kilometrage` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `vehicules`
--

INSERT INTO `vehicules` (`id`, `id_utilisateur`, `marque`, `modele`, `plaque`, `kilometrage`) VALUES
(1, 1, 'Toyota', 'Tercel SR5 1980', '755 WYC', 80000),
(2, 2, 'Hyundai', 'Tiburon 2004', '896 JKL', 45000),
(3, 4, 'Ford', 'Focus SE 2012', '451 HBC', 19000),
(4, 1, 'Mazda', 'Modèle 3 2005', '553 HYT', 96000),
(6, 6, 'Mercedes', 'GL 450 2012', '741 AHG', 60000),
(9, 6, 'Mazda', 'GX 5 2019', '568 HHH', 23000);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `reparations`
--
ALTER TABLE `reparations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reparation_vehicule` (`id_vehicule`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vehicules`
--
ALTER TABLE `vehicules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vehicule_utilisateur` (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reparations`
--
ALTER TABLE `reparations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `vehicules`
--
ALTER TABLE `vehicules`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reparations`
--
ALTER TABLE `reparations`
  ADD CONSTRAINT `fk_reparation_vehicule` FOREIGN KEY (`id_vehicule`) REFERENCES `vehicules` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `vehicules`
--
ALTER TABLE `vehicules`
  ADD CONSTRAINT `fk_vehicule_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateurs` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
