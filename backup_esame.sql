-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Creato il: Feb 19, 2026 alle 07:02
-- Versione del server: 5.5.64-MariaDB-1~trusty
-- Versione PHP: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_esame`utf8mb4
--

CREATE DATABASE IF NOT EXISTS `db_esame`
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Usa il database `db_esame`
--

USE `db_esame`;

-- --------------------------------------------------------

--
-- Struttura della tabella `clienti`
--

CREATE TABLE `clienti` (
  `cod_cliente` int(11) NOT NULL,
  `nome` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cognome` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `creato_il` date NOT NULL,
  `modificato_il` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `impiegati`
--

CREATE TABLE `impiegati` (
  `id_impiegato` int(11) NOT NULL,
  `nome` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cognome` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_ruolo` int(11) NOT NULL,
  `creato_il` date NOT NULL,
  `modificato_il` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `Ruoli`
--

CREATE TABLE `ruoli` (
  `cod_ruolo` varchar(2) NOT NULL,
  `Descrizione` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `stazioni`
--

CREATE TABLE `stazioni` (
  `cod_stazione` int(11) NOT NULL,
  `nome` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `distanza` float NOT NULL,
  `creato_il` date NOT NULL,
  `modificato_il` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `clienti`
--
ALTER TABLE `clienti`
  ADD PRIMARY KEY (`cod_cliente`);

--
-- Indici per le tabelle `impiegati`
--
ALTER TABLE `impiegati`
  ADD PRIMARY KEY (`id_impiegato`);


--
-- Indici per le tabelle `ruoli`
--
ALTER TABLE `ruoli`
  ADD PRIMARY KEY (`cod_ruolo`);

--
-- Indici per le tabelle `stazioni`
--
ALTER TABLE `stazioni`
  ADD PRIMARY KEY (`cod_stazione`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `clienti`
--
ALTER TABLE `clienti`
  MODIFY `cod_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `impiegati`
--
ALTER TABLE `impiegati`
  MODIFY `id_impiegato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `stazioni`
--
ALTER TABLE `stazioni`
  MODIFY `cod_stazione` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
-- --------------------------------------------------------

--
-- Inserimento dei dati per la tabella `stazioni`
--

INSERT INTO `stazioni` (cod_stazione, nome, distanza, creato_il, modificato_il) VALUES
(NULL, 'Torre Spaventa', 0.000, NOW(), NOW()),
(NULL, 'Prato Terra', 2.700, NOW(), NOW()),
(NULL, 'Rocca Pietrosa', 7.580, NOW(), NOW()),
(NULL, 'Villa Pietrosa', 12.680, NOW(), NOW()),
(NULL, 'Villa Santa Maria', 16.900, NOW(), NOW()),
(NULL, 'Pietra Santa Maria', 23.950, NOW(), NOW()),
(NULL, 'Castro Marino', 31.500, NOW(), NOW()),
(NULL, 'Porto Spigola', 39.500, NOW(), NOW()),
(NULL, 'Porto San Felice', 46.000, NOW(), NOW()),
(NULL, 'Villa San Felice', 54.680, NOW(), NOW());
-- --------------------------------------------------------

--
-- Inserimento dei dati per la tabella `Ruoli`
--

INSERT INTO `ruoli` (cod_ruolo, Descrizione) VALUES
('IA', 'Impiegato Amministrativo'),
('IE', 'Impiegato di Esercizio');

-- --------------------------------------------------------

ALTER TABLE `impiegati`
ADD CONSTRAINT `fk_impiegati_ruoli`
FOREIGN KEY (`cod_ruolo`) REFERENCES `ruoli`(`cod_ruolo`)
ON DELETE RESTRICT ON UPDATE CASCADE;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
