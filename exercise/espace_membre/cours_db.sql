-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 29 août 2023 à 16:49
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cours_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id_like` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id_membre` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `mdp` varchar(250) NOT NULL,
  `profil_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id_membre`, `email`, `pseudo`, `mdp`, `profil_img`) VALUES
(1, 'anilexs@gmail.com', 'anilexs', '$2y$10$/9.Ky53ZApFvdTiznmrAJuRoAgVlk47gWrcxTg/7FTz8WbQ1xfotK', 'phantom.jpg'),
(8, 'anilexs2@gmail.com', 'anilexs2', '$2y$10$pKMiXrXSb7MZlpj3DwR7dONdk2kYDQxhQuoVA0ZaGJsQJ.Utkuudy', 'phantom.jpg'),
(9, 'anilexsv3@gmail.com', 'anilexs3', '$2y$10$xMhj4c/UeAZdzUNIh8riMO4GcFJTzdBoEJV8g87qjD4M6fTa02Blq', 'cannon.png'),
(11, 'silica@sao.com', 'silica', '$2y$10$eW21Id/QNL9eeMWLIP5YremhjYCOOa5n.IjLrkoiqE9iYPtPYpLxa', 'silica.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL,
  `membre_id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `likes` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id_post`, `membre_id`, `photo`, `text`, `likes`) VALUES
(3, 11, 'silica.jpg', 'silica et pina', 0),
(4, 11, 'silica.jpg', 'anilexs', 0),
(5, 1, '0_phantom.jpg', 'jouer phantom de puit 2020', 0);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateurs` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateurs`, `nom`, `prenom`, `email`, `mdp`) VALUES
(1, 'alexis', 'simoes', 'redeye@94.com', '$2y$10$m78s9Rw8zD2UF.D7ib4u9uxzV9i4WT70Ox2jkySo9ljjK/CUqmyWO'),
(3, 'anilexs', 'sxelina', 'anilexs@gmail.com', '$2y$10$xjQlz5izHTFycma7K2MutuUlbRPHQj2liGFvjtcsWwhOR8e3/9xxG'),
(4, 'silica', 'ayano', 'ayano.silica@gmail.com', '$2y$10$V06tJasJyS.iD5o3IQTJ8./pEDi7VHdqG7F1J4J.f7ejhZSqgtuCq'),
(7, 'kirito', 'kazuto', 'kirito@94.com', '$2y$10$EhfLer2Pv8BNZPnD.YEoc.A.rWnj8DnAY.oZsRX.JPJWFDK7q0L12'),
(10, 'kirito', 'kazuto', 'kirito2@94.com', '$2y$10$xnl76PMj7S6FG5vesyEkzuLrTirH16DYgjlSu42Q4fnAjhaS8Qfyi');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id_like`),
  ADD KEY `id_membre` (`user_id`),
  ADD KEY `id_post` (`post_id`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id_membre`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `membre_id` (`membre_id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateurs`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id_membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateurs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `membres` (`id_membre`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id_post`);

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`membre_id`) REFERENCES `membres` (`id_membre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
