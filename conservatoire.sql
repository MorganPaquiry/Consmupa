-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 06 Juin 2013 à 18:46
-- Version du serveur: 5.5.29
-- Version de PHP: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `conservatoire`
--

-- --------------------------------------------------------

--
-- Structure de la table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `dt` date NOT NULL,
  `lieu` varchar(100) NOT NULL,
  `event` text NOT NULL,
  `obra` text NOT NULL,
  `autor` varchar(200) NOT NULL,
  `pianista` varchar(200) NOT NULL,
  `alumno` text NOT NULL,
  `professora` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=95 ;

--
-- Contenu de la table `agenda`
--

INSERT INTO `agenda` (`id`, `dt`, `lieu`, `event`, `obra`, `autor`, `pianista`, `alumno`, `professora`) VALUES
(70, '2013-05-27', '20:00', 'Sala de Camara', 'Blues for Gilbert(5)', 'M.Glentworth', 'Alvaro Rodriguez Fermandez', 'Marco Antonio Guardado del Valle(2 de percusion)', 'Julio Sanchez-Andrade Fernandez'),
(71, '2013-05-27', '20:00', 'Auditorio', 'Inspiraciones diabÃ³licas(4)', 'R.Tagawa', '', 'Miguel Altable Soto(2 de percusion)', 'Julio Sanchez-Andrade Fernandez'),
(72, '2013-05-27', '20:00', 'Sala de Camara', 'Konzer for xylophon og orkester (10)', 'K.Roikjer', 'Abraham Gallo Calvo', 'Adrian Higuera Rueda(2 de percussion)', 'Gabriel Alberto Elias Casal'),
(73, '2013-05-27', '20:00', 'Auditorio', 'KonzerstÃ¼ck fÃ¼r snare drum & orchestra', 'A.MÃ sson', 'Francisco Javier Aizpiri MÃ¹gica', 'Jesus Lorenzo PÃ©rez', 'Gabriel Alberto Elias Casal'),
(74, '2013-05-27', '20:00', 'Auditorio', 'Topft-Tanz(8)', 'E.Kopetzki', '', 'Marco Diaz PÃ©rez', 'Julio Sanchez-Andrade Fernandez'),
(92, '2013-06-06', '12:00', 'Auditorio', 'Jean-Paul', 'De Larbonne', 'george', 'Melin (2 percussion)', 'Diego Gonsalez PÃ©rez'),
(93, '2013-06-05', 'Morgan', 'Sala de Camara', 'Morgan', 'Morgan', 'Morgan', 'Morgan', 'Morgan'),
(94, '2013-06-11', '', 'Sala de Camara', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `pass_md5` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `login`, `pass_md5`) VALUES
(2, 'morgan', '06c56a89949d617def52f371c357b6db'),
(4, 'diego', 'b69466b536f8ce43b6356ec1332e05a4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
