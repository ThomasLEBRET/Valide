-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8081
-- Généré le : mar. 12 avr. 2022 à 20:18
-- Version du serveur :  5.7.32
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données : `valide`
--

-- --------------------------------------------------------

--
-- Structure de la table `MUSIQUE`
--

CREATE TABLE `MUSIQUE` (
  `idMusique` varchar(50) NOT NULL,
  `codeRegion` varchar(100) NOT NULL,
  `cptRegion` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Index pour la table `MUSIQUE`
--
ALTER TABLE `MUSIQUE`
  ADD PRIMARY KEY (`idMusique`,`codeRegion`) USING BTREE;
COMMIT;
