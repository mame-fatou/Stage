-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2021 at 02:36 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tipi`
--

-- --------------------------------------------------------

--
-- Table structure for table `super_membre`
--

CREATE TABLE `super_membre` (
  `id_membre` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_ut` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `adresse` text NOT NULL,
  `numero` varchar(20) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `mdp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id_ut`, `nom`, `prenom`, `adresse`, `numero`, `mail`, `mdp`) VALUES
(979, 'chabanol', 'jean', '2 boulevard saint MICHEL', '+3374576876', 'JC@yahoo.com', '1111'),
(980, 'haja', 'jino', '1 bd froit', '336875432', 'jinohaj@hotmailcom', 'gino'),
(981, 'DINE', 'stephane', '4 avenue mari sagna', '0643256134', 'stdi45@gmail.com', 'ST1234'),
(982, 'DON', 'DIVINE', '196 RUE EMILE ZOLA', '0763452814', 'don@gmail.com', 'don'),
(983, 'kharfati', 'zeinab', '5 avenue victor hugo', '0753213390', 'khaf@gmail.com', '12345'),
(984, 'Roumani', 'Adama', '7rue Camille Bane', '0762456388', 'ada@gmail.com', 'adama'),
(985, 'FAYE', 'OUMAR', '6 RUE AMINA', '0771234567', 'oumar@gmail.com', 'oumar'),
(986, 'Bringa', 'Sandra', '66 RUE FERDINA OYONO', '0654327722', 'sb@yahoo.com', 'sandra'),
(987, 'Robin', 'Maxime', '234 rue TABANE', '0762456388', 'robin@gmail.com', 'robin'),
(988, 'GUEYE', 'MAME', '25 RUE ERNEST MICHEL', ' 33761529428', '25 RUE ERNEST MICHEL', 'AAA'),
(994, 'DON', 'DIVINE', '196 RUE EMILE ZOLA', '0763452814', 'don@gmail.com', 'ffff'),
(995, 'MUGISHA', 'kelly', '196 rue emille gaboriau', '+33766890426', 'mughushu@gmail.com', '111'),
(996, 'GUEYE', 'MAME', '25 RUE ERNEST MICHEL', '+33761529428', 'uyg', 'qsd'),
(997, 'GUEYE', 'MAME', '25 RUE ERNEST MICHEL', '+33761529428', 'WDYFXHGJVHKBN.', 'ZZZ'),
(998, 'DON', 'DIVINE', '196 RUE EMILE ZOLA', '0763452814', 'don@gmail.com', 'SSS'),
(999, 'sene', 'saynabou', '5 rue emile zola', '+33766890426', 'saye@gmail.com', 'VVV'),
(1000, 'GUEYE', 'MAME', '25 RUE ERNEST MICHEL', '+33761529428', 'ndeyelebayame@gmail.com', 'vvvv'),
(1001, 'GUEYE', 'MAME', '25 RUE ERNEST MICHEL', '+33761529428', 'ndeyelebayame@gmail.com', 'bbbbb'),
(1002, 'GUEYE', 'MAME', '25 RUE ERNEST MICHEL', '+33761529428', 'ndeyelebayame@gmail.com', 'ccc'),
(1003, 'sene', 'saynabou', '5 rue emile zola', '+33766890426', 'saye@gmail.com', 'BBBB'),
(1004, 'FAYE', 'OUMAR', '6 RUE AMINA', '0771234567', 'oumar@gmail.com', 'vvv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `super_membre`
--
ALTER TABLE `super_membre`
  ADD PRIMARY KEY (`id_membre`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_ut`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `super_membre`
--
ALTER TABLE `super_membre`
  MODIFY `id_membre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_ut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
