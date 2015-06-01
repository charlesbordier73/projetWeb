-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Client: 127.2.204.2:3306
-- Généré le: Lun 01 Juin 2015 à 08:53
-- Version du serveur: 5.5.41
-- Version de PHP: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `php`
--

-- --------------------------------------------------------

--
-- Structure de la table `Article`
--

CREATE TABLE IF NOT EXISTS `Article` (
  `idArticle` int(11) NOT NULL AUTO_INCREMENT,
  `idVendeur` int(11) NOT NULL,
  `nomArticle` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `DateMiseEnLigne` date NOT NULL,
  `url` text NOT NULL,
  PRIMARY KEY (`idArticle`),
  UNIQUE KEY `idArticle` (`idArticle`),
  KEY `idVendeur` (`idVendeur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=114 ;

--
-- Contenu de la table `Article`
--

INSERT INTO `Article` (`idArticle`, `idVendeur`, `nomArticle`, `description`, `DateMiseEnLigne`, `url`) VALUES
(1, 1, 'ut, pharetra', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', '2015-05-20', ''),
(2, 1, 'at pretium', 'Lorem ipsum dolor sit amet, consectetuer adipiscing', '0000-00-00', ''),
(3, 2, 'dictum. Phasellus', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', '0000-00-00', ''),
(4, 3, 'dolor.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec', '0000-00-00', ''),
(5, 3, 'varius. Nam', 'Lorem ipsum dolor sit amet, consectetuer', '0000-00-00', ''),
(6, 2, 'habitant', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu', '0000-00-00', ''),
(7, 2, 'enim commodo', 'Lorem ipsum dolor sit amet, consectetuer adipiscing', '0000-00-00', ''),
(8, 3, 'dapibus ligula.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', '0000-00-00', ''),
(9, 7, 'vitae nibh.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', '0000-00-00', ''),
(10, 9, 'sem egestas', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', '0000-00-00', ''),
(11, 5, 'luctus lobortis.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', '0000-00-00', ''),
(12, 6, 'molestie', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.', '0000-00-00', ''),
(13, 9, 'non magna.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', '0000-00-00', ''),
(14, 10, 'cursus', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', '0000-00-00', ''),
(15, 10, 'magna tellus', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur', '0000-00-00', ''),
(16, 14, 'eleifend', 'Lorem ipsum', '0000-00-00', ''),
(17, 12, 'adipiscing', 'Lorem ipsum dolor sit amet, consectetuer adipiscing', '0000-00-00', ''),
(18, 17, 'dui,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur', '0000-00-00', ''),
(19, 13, 'arcu.', 'Lorem ipsum dolor sit', '0000-00-00', ''),
(20, 14, 'nascetur ridiculus', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', '0000-00-00', ''),
(21, 14, 'ultrices.', 'Lorem ipsum dolor', '0000-00-00', ''),
(22, 6, 'augue,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', '0000-00-00', ''),
(23, 6, 'in', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', '0000-00-00', ''),
(24, 11, 'vestibulum', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', '0000-00-00', ''),
(25, 2, 'dui nec', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur', '0000-00-00', ''),
(26, 16, 'est.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.', '0000-00-00', ''),
(27, 4, 'adipiscing fringilla,', 'Lorem ipsum dolor sit amet, consectetuer', '0000-00-00', ''),
(28, 20, 'varius. Nam', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', '0000-00-00', ''),
(29, 9, 'penatibus', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna', '0000-00-00', ''),
(30, 18, 'risus.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', '0000-00-00', ''),
(31, 9, 'Morbi', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu', '0000-00-00', ''),
(32, 16, 'molestie in,', 'Lorem', '0000-00-00', ''),
(33, 1, 'dui.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', '0000-00-00', ''),
(34, 2, 'a,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu', '0000-00-00', ''),
(35, 3, 'erat. Vivamus', 'Lorem ipsum dolor sit amet, consectetuer adipiscing', '0000-00-00', ''),
(36, 17, 'Donec est.', 'Lorem', '0000-00-00', ''),
(37, 10, 'varius ultrices,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', '0000-00-00', ''),
(38, 26, 'lacus. Quisque', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna', '0000-00-00', ''),
(39, 30, 'viverra.', 'Lorem ipsum dolor', '0000-00-00', ''),
(40, 20, 'lorem', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna', '0000-00-00', ''),
(41, 21, 'ut, pellentesque', 'Lorem ipsum dolor', '0000-00-00', ''),
(42, 12, 'et, rutrum', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', '0000-00-00', ''),
(43, 36, 'consectetuer euismod', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', '0000-00-00', ''),
(44, 29, 'Vivamus', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '0000-00-00', ''),
(45, 39, 'Duis', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu', '0000-00-00', ''),
(46, 19, 'tortor,', 'Lorem ipsum dolor sit', '0000-00-00', ''),
(47, 36, 'semper', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', '0000-00-00', ''),
(48, 43, 'congue. In', 'Lorem ipsum dolor sit amet, consectetuer', '0000-00-00', ''),
(49, 42, 'at,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '0000-00-00', ''),
(50, 31, 'ultricies adipiscing,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', '0000-00-00', ''),
(51, 34, 'Integer', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', '0000-00-00', ''),
(52, 31, 'malesuada', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus.', '0000-00-00', ''),
(53, 49, 'molestie orci', 'Lorem ipsum dolor sit amet, consectetuer adipiscing', '0000-00-00', ''),
(54, 4, 'eget laoreet', 'Lorem ipsum dolor sit', '0000-00-00', ''),
(55, 39, 'sed', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', '0000-00-00', ''),
(56, 38, 'Cras', 'Lorem ipsum dolor', '0000-00-00', ''),
(57, 6, 'rhoncus', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut', '0000-00-00', ''),
(58, 28, 'scelerisque', 'Lorem ipsum dolor', '0000-00-00', ''),
(59, 33, 'taciti', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', '0000-00-00', ''),
(60, 40, 'interdum.', 'Lorem ipsum dolor sit amet,', '0000-00-00', ''),
(61, 25, 'non', 'Lorem ipsum dolor sit', '0000-00-00', ''),
(62, 44, 'amet, dapibus', 'Lorem ipsum dolor sit amet, consectetuer', '0000-00-00', ''),
(63, 7, 'quis, pede.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec', '0000-00-00', ''),
(64, 57, 'tristique', 'Lorem ipsum dolor', '0000-00-00', ''),
(65, 13, 'primis', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna', '0000-00-00', ''),
(66, 35, 'quam', 'Lorem ipsum dolor sit', '0000-00-00', ''),
(67, 53, 'Phasellus nulla.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', '0000-00-00', ''),
(68, 52, 'at pretium', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', '0000-00-00', ''),
(69, 31, 'magna. Praesent', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec', '0000-00-00', ''),
(70, 14, 'Phasellus', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna et', '0000-00-00', ''),
(71, 1, 'dictum eu,', 'Lorem', '0000-00-00', ''),
(72, 7, 'orci.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', '0000-00-00', ''),
(73, 72, 'amet', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', '0000-00-00', ''),
(74, 21, 'ligula tortor,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', '0000-00-00', ''),
(75, 42, 'fringilla euismod', 'Lorem ipsum', '0000-00-00', ''),
(77, 61, 'erat', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', '0000-00-00', ''),
(78, 39, 'id', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', '0000-00-00', ''),
(79, 23, 'Duis', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec', '0000-00-00', ''),
(80, 69, 'metus facilisis', 'Lorem ipsum dolor sit amet, consectetuer', '0000-00-00', ''),
(81, 66, 'Duis', 'Lorem ipsum dolor', '0000-00-00', ''),
(82, 30, 'molestie sodales.', 'Lorem', '0000-00-00', ''),
(83, 3, 'tempor', 'Lorem ipsum dolor sit amet, consectetuer', '0000-00-00', ''),
(84, 58, 'iaculis quis,', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '0000-00-00', ''),
(85, 75, 'Duis ac', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec', '0000-00-00', ''),
(86, 1, 'ante ipsum', 'Lorem ipsum dolor sit amet, consectetuer adipiscing', '0000-00-00', ''),
(87, 46, 'quis, tristique', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', '0000-00-00', ''),
(88, 82, 'sed consequat', 'Lorem ipsum dolor sit', '0000-00-00', ''),
(89, 86, 'habitant morbi', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', '0000-00-00', ''),
(90, 67, 'porta', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', '0000-00-00', ''),
(91, 36, 'eu turpis.', 'Lorem ipsum', '0000-00-00', ''),
(92, 56, 'sapien,', 'Lorem ipsum dolor sit amet, consectetuer', '0000-00-00', ''),
(94, 31, 'eget magna.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur', '0000-00-00', ''),
(95, 73, 'faucibus', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing', '0000-00-00', ''),
(96, 15, 'arcu.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec', '0000-00-00', ''),
(97, 50, 'ipsum.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', '0000-00-00', ''),
(98, 41, 'dictum. Phasellus', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', '0000-00-00', ''),
(99, 61, 'augue ut', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adipiscing lacus. Ut nec urna', '0000-00-00', ''),
(100, 98, 'nibh', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', '0000-00-00', ''),
(101, 101, 'raquette', 'Raquette d''occasion, tres bon Ã©tat, 25â‚¬', '2015-05-29', './images/raquette-junior-tecnifibre-rebound-66.jpg'),
(103, 101, 'bureau', 'Vends bureau tout neuf.', '2015-05-29', './images/1446195-un-bureau-en-cuir-et-bois.jpg'),
(105, 101, '307 break', 'Vends break.130 000 km. Prix Ã  nÃ©gocier...', '2015-05-29', './images/Peugeot_307_break_occasion_brest_(4).JPG'),
(106, 104, 'babyfoot', 'Vends baby presque neuf. Les pieds sont un peu branlant. Prix a negocier.', '2015-05-29', './images/smoby-baby-foot-n-1-evolution.jpg'),
(111, 114, 'Salut', 'Au revoir', '2015-06-01', './images/'),
(112, 114, '&lt;script&gt;alert(&quot;jjjj&quot;);&lt;/script&', 'okzekfkz', '2015-06-01', './images/081024115033894498.png'),
(113, 114, 'Hot', 'hot', '2015-06-01', './images/081024115033894498.png');

--
-- Déclencheurs `Article`
--
DROP TRIGGER IF EXISTS `after_insert_article`;
DELIMITER //
CREATE TRIGGER `after_insert_article` AFTER INSERT ON `Article`
 FOR EACH ROW UPDATE Vendeur
SET categorie = 2
where nbArticlePost >= 2
//
DELIMITER ;
DROP TRIGGER IF EXISTS `before_insert_article`;
DELIMITER //
CREATE TRIGGER `before_insert_article` BEFORE INSERT ON `Article`
 FOR EACH ROW UPDATE Vendeur
SET nbArticlePost = nbArticlePost+1
where id = NEW.idVendeur
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `CategorieVendeur`
--

CREATE TABLE IF NOT EXISTS `CategorieVendeur` (
  `idCat` int(11) NOT NULL AUTO_INCREMENT,
  `libCat` varchar(50) NOT NULL,
  PRIMARY KEY (`idCat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `CategorieVendeur`
--

INSERT INTO `CategorieVendeur` (`idCat`, `libCat`) VALUES
(1, 'Novice'),
(2, 'Vendeur confirmé');

-- --------------------------------------------------------

--
-- Structure de la table `Vendeur`
--

CREATE TABLE IF NOT EXISTS `Vendeur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `login` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `nbArticlePost` int(11) NOT NULL DEFAULT '0',
  `categorie` int(11) NOT NULL DEFAULT '1',
  `token` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categorie` (`categorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=115 ;

--
-- Contenu de la table `Vendeur`
--

INSERT INTO `Vendeur` (`id`, `Nom`, `Prenom`, `mail`, `tel`, `login`, `mdp`, `nbArticlePost`, `categorie`, `token`) VALUES
(1, 'Conrad', 'Hedwig', 'Vestibulum@acfacilisis.co.uk', '04 98 99 7', 'eget', 'Sed', 0, 1, ''),
(2, 'Webster', 'Caldwell', 'tristique.senectus.et@Uttincidunt.co.uk', '05 78 72 9', 'risus', 'dictum', 0, 1, ''),
(3, 'Smith', 'Dara', 'hendrerit.Donec.porttitor@fringillacursus.net', '05 06 42 6', 'vulputate', 'porttitor', 0, 1, ''),
(4, 'Frazier', 'Katell', 'egestas@adipiscing.co.uk', '06 76 95 8', 'a', 'ligula.', 0, 1, ''),
(5, 'Newman', 'Brett', 'metus.In@malesuada.net', '02 57 28 8', 'odio.', 'molestie', 0, 1, ''),
(6, 'Galloway', 'Wynter', 'et.arcu@sem.co.uk', '02 34 53 8', 'nunc', 'cursus', 0, 1, ''),
(7, 'Key', 'Dacey', 'amet@dictum.org', '07 31 61 2', 'dolor', 'consectetuer', 0, 1, ''),
(8, 'Gibbs', 'Xyla', 'aliquam.eros.turpis@magna.net', '07 85 14 3', 'Etiam', 'Sed', 0, 1, ''),
(9, 'Kerr', 'Christine', 'elementum.sem@arcuet.com', '08 78 36 0', 'lobortis,', 'magna.', 0, 1, ''),
(10, 'Kinney', 'Valentine', 'imperdiet.non.vestibulum@venenatis.org', '06 14 22 5', 'enim.', 'quis', 0, 1, ''),
(11, 'Ferrell', 'Rafael', 'sagittis@Sedeu.org', '09 26 57 5', 'Nullam', 'blandit', 0, 1, ''),
(12, 'Yang', 'Preston', 'vestibulum.Mauris.magna@nonlobortisquis.net', '07 64 44 3', 'tempor', 'orci', 0, 1, ''),
(13, 'Dotson', 'Joel', 'natoque@Nunc.edu', '06 39 97 4', 'pellentesque', 'eu', 0, 1, ''),
(14, 'Underwood', 'Whilemina', 'a@convallisconvallisdolor.edu', '04 25 44 7', 'aka', 'vitae', 0, 1, ''),
(15, 'Gould', 'Zeph', 'semper@Donecelementum.edu', '02 73 49 4', 'at', 'augue', 0, 1, ''),
(16, 'Wells', 'Ciara', 'nunc.risus@elementumsemvitae.ca', '03 27 32 3', 'turpis', 'a', 0, 1, ''),
(17, 'Knowles', 'Guinevere', 'sem@ornareInfaucibus.co.uk', '09 14 18 4', 'ullamcorper,', 'pharetra', 0, 1, ''),
(18, 'Calhoun', 'Renee', 'purus.sapien@leoinlobortis.com', '08 70 23 5', 'lacus.', 'faucibus', 0, 1, ''),
(19, 'Boyer', 'Porter', 'Nulla.interdum@augue.ca', '06 65 95 4', 'pretium', 'mollis', 0, 1, ''),
(20, 'Lynn', 'Wayne', 'et.netus.et@MaurisnullaInteger.edu', '01 42 13 6', 'kkaa', 'in', 0, 1, ''),
(21, 'Mccullough', 'Dominique', 'aliquet.diam.Sed@diam.edu', '09 94 80 7', 'hymenaeos.', 'fringilla.', 0, 1, ''),
(22, 'Chaney', 'Conan', 'sociosqu@eu.net', '01 67 62 0', 'laoreet,', 'non', 0, 1, ''),
(23, 'Winters', 'Marah', 'non.feugiat@vestibulumMaurismagna.net', '08 96 52 9', 'odio,', 'ligula.', 0, 1, ''),
(24, 'Porter', 'Xyla', 'metus@indolor.com', '02 64 67 5', 'bibendum', 'ridiculus', 0, 1, ''),
(25, 'Guzman', 'Odette', 'vitae.mauris@risus.org', '06 99 13 0', 'lectus', 'orci,', 0, 1, ''),
(26, 'Monroe', 'Liberty', 'nec.cursus.a@pharetrased.co.uk', '06 23 26 3', 'ante', 'amet,', 0, 1, ''),
(27, 'Cash', 'Maxine', 'lorem.eget.mollis@fermentum.edu', '05 20 23 9', 'tincidunt', 'lorem', 0, 1, ''),
(28, 'Riley', 'Philip', 'sagittis@magnaSed.org', '01 26 78 7', 'tempor', 'eu', 0, 1, ''),
(29, 'Stout', 'Camilla', 'adipiscing.enim.mi@auctorullamcorper.net', '04 91 76 2', 'Nunc', 'lorem', 0, 1, ''),
(30, 'Finch', 'Selma', 'Sed@variusNamporttitor.ca', '02 35 45 6', 'quis', 'sodales.', 0, 1, ''),
(31, 'Howell', 'April', 'elit.sed.consequat@Nuncmauris.co.uk', '04 56 53 2', 'eget,', 'pede', 0, 1, ''),
(32, 'Jordan', 'Mannix', 'semper.Nam@Fuscediam.edu', '06 44 54 6', 'amet', 'Nullam', 0, 1, ''),
(33, 'Sullivan', 'Amy', 'id.risus@metusInlorem.co.uk', '04 80 38 0', 'lacinia.', 'non', 0, 1, ''),
(34, 'Kerr', 'Lillian', 'elit.dictum@ametmetusAliquam.edu', '02 62 66 1', 'pede.', 'malesuada', 0, 1, ''),
(35, 'Cameron', 'Jennifer', 'Vestibulum.ut@luctusipsumleo.net', '05 91 72 5', 'sagittis', 'lacus.', 0, 1, ''),
(36, 'Larson', 'Dai', 'lectus@vulputatenisisem.ca', '03 82 54 2', 'risus,', 'turpis', 0, 1, ''),
(37, 'Black', 'Hadley', 'adipiscing@magnaSedeu.ca', '09 16 62 4', 'Quisque', 'fringilla', 0, 1, ''),
(38, 'Mcintyre', 'Dalton', 'turpis.egestas.Aliquam@turpisNullaaliquet.com', '06 60 21 5', 'felis,', 'dictum', 0, 1, ''),
(39, 'Buckley', 'Cameron', 'lacus.Etiam@lacinia.ca', '03 28 75 6', 'erat.', 'fermentum', 0, 1, ''),
(40, 'Dean', 'Pamela', 'tempor.diam@ipsumsodales.org', '03 00 82 0', 'Donec', 'sem', 0, 1, ''),
(41, 'Grant', 'Lacey', 'dui.semper@rutrummagnaCras.org', '03 55 40 8', 'eu,', 'elementum', 0, 1, ''),
(42, 'Roth', 'Aphrodite', 'arcu.Curabitur@euismod.com', '02 89 86 0', 'Lorem', 'eget', 0, 1, ''),
(43, 'Turner', 'Zeph', 'lectus@tellusimperdiet.org', '03 59 57 3', 'tristique', 'tellus', 0, 1, ''),
(44, 'Rios', 'Yael', 'et.arcu.imperdiet@sapienimperdiet.org', '06 40 01 3', 'elit', 'luctus', 0, 1, ''),
(45, 'Macdonald', 'Deacon', 'libero.Integer.in@turpis.net', '02 82 03 1', 'malesuada', 'Mauris', 0, 1, ''),
(46, 'Luna', 'Prescott', 'cursus.Integer.mollis@Loremipsumdolor.co.uk', '09 73 50 8', 'orci.', 'mauris', 0, 1, ''),
(47, 'Rosario', 'Iliana', 'a@pedeblandit.ca', '06 54 90 4', 'erat', 'nisi', 0, 1, ''),
(48, 'Christensen', 'Shelley', 'orci.Phasellus@fermentummetusAenean.ca', '08 90 90 9', 'sed,', 'et', 0, 1, ''),
(49, 'Dickerson', 'Imelda', 'Duis.at@nisimagnased.org', '02 61 33 4', 'at,', 'consectetuer', 0, 1, ''),
(50, 'Alexander', 'Kyra', 'primis@Crasdictumultricies.co.uk', '05 82 38 8', 'mauris', 'Sed', 0, 1, 'b6360f558631342102b5085f9107c62a0b6ff771'),
(51, 'Schultz', 'Sonya', 'leo@egestashendrerit.org', '03 28 88 6', 'et', 'et,', 0, 1, ''),
(52, 'Crosby', 'Cyrus', 'Vestibulum.ante.ipsum@fringillacursus.co.uk', '03 24 73 8', 'ko', 'ligula.', 0, 1, ''),
(53, 'Whitfield', 'Luke', 'mauris.ut@natoquepenatibus.org', '09 36 60 4', 'urna.', 'magna', 0, 1, ''),
(54, 'Burch', 'Gail', 'semper@Proin.com', '02 89 61 8', 'arcu.', 'elit', 0, 1, ''),
(55, 'Moore', 'Ebony', 'ac.mattis.semper@Namconsequatdolor.net', '02 19 83 1', 'Etiam', 'Integer', 0, 1, ''),
(56, 'French', 'Sigourney', 'molestie.arcu.Sed@lacusQuisquepurus.ca', '08 23 21 0', 'elit', 'adipiscing', 0, 1, ''),
(57, 'Carver', 'Paula', 'purus.in.molestie@Maurismolestie.net', '09 26 47 2', 'Pellentesque', 'sed', 0, 1, ''),
(58, 'Nichols', 'Dennis', 'sit.amet.nulla@sodales.edu', '08 55 58 6', 'ligula.', 'ac', 0, 1, ''),
(59, 'Torres', 'Kibo', 'sit.amet@sagittisfelis.edu', '01 44 83 9', 'et', 'mollis', 0, 1, ''),
(60, 'Huber', 'Allistair', 'mauris@sitametornare.ca', '03 40 90 0', 'non,', 'Etiam', 0, 1, ''),
(61, 'Rodgers', 'Branden', 'aliquam.arcu.Aliquam@Quisque.net', '08 66 69 3', 'Duis', 'ut,', 0, 1, ''),
(62, 'Kim', 'Ursula', 'laoreet.posuere@scelerisque.org', '09 60 05 5', 'Quisque', 'Cras', 0, 1, ''),
(63, 'Le', 'Kalia', 'ipsum.sodales.purus@pedemalesuadavel.net', '05 37 69 3', 'sit', 'ut', 0, 1, ''),
(64, 'Lynn', 'Julie', 'elit.Aliquam@pedeCum.co.uk', '09 19 79 9', 'Nulla', 'orci', 0, 1, ''),
(65, 'Hays', 'Flynn', 'lacus@vulputateposuere.co.uk', '01 56 49 9', 'imperdiet', 'lobortis,', 0, 1, ''),
(66, 'Rush', 'Kirby', 'sed.pede.Cum@Nullam.ca', '05 45 34 6', 'tortor.', 'Aliquam', 0, 1, ''),
(67, 'Fisher', 'Joshua', 'Nam@idnuncinterdum.com', '02 41 12 3', 'diam.', 'nec,', 0, 1, ''),
(68, 'Stevens', 'Igor', 'Morbi.metus@ridiculusmusProin.ca', '03 09 40 1', 'Curae;', 'a', 0, 1, ''),
(69, 'Madden', 'Holly', 'facilisis.eget.ipsum@dignissimMaecenasornare.co.uk', '02 43 50 4', 'quis,', 'pede.', 0, 1, ''),
(70, 'Velasquez', 'Michael', 'dictum@rutrumnon.com', '05 90 81 1', 'odio', 'porta', 0, 1, ''),
(71, 'Blair', 'Hyatt', 'sem.eget.massa@natoque.edu', '04 70 75 7', 'Aliquam', 'est', 0, 1, ''),
(72, 'Callahan', 'Fatima', 'arcu.ac@Suspendissedui.org', '06 91 70 4', 'non,', 'Morbi', 0, 1, ''),
(73, 'Humphrey', 'Rajah', 'auctor.non.feugiat@tortorNunc.edu', '02 94 78 7', 'mi', 'dui', 0, 1, ''),
(74, 'Stein', 'Ina', 'Curabitur@arcu.edu', '07 96 83 0', 'accumsan', 'sit', 0, 1, ''),
(75, 'Stuart', 'Blake', 'in.cursus.et@dolor.edu', '09 74 40 0', 'quis', 'magnis', 0, 1, ''),
(76, 'Hartman', 'Kerry', 'diam.Proin@vestibulum.co.uk', '07 93 88 8', 'accumsan', 'lectus', 0, 1, ''),
(77, 'Saunders', 'Clayton', 'Phasellus.dolor.elit@tempus.com', '02 32 79 5', 'euismod', 'Cum', 0, 1, ''),
(78, 'Britt', 'Cara', 'imperdiet@urna.com', '01 70 26 4', 'vulputate,', 'ridiculus', 0, 1, ''),
(79, 'Gay', 'Sade', 'eu@actellus.net', '09 90 60 8', 'sagittis.', 'a', 0, 1, ''),
(80, 'Burton', 'Brody', 'erat@idliberoDonec.org', '01 85 74 8', 'Aenean', 'egestas', 0, 1, ''),
(81, 'Roberts', 'Jeremy', 'ullamcorper.Duis@metus.edu', '05 74 22 1', 'diam', 'lobortis', 0, 1, ''),
(82, 'Simon', 'Reese', 'per.conubia.nostra@nequeSedeget.org', '04 10 86 5', 'Nunc', 'auctor', 0, 1, ''),
(83, 'Sandoval', 'Channing', 'vestibulum.lorem@fermentumconvallis.com', '03 44 97 6', 'porttitor', 'nonummy.', 0, 1, ''),
(84, 'Trujillo', 'Kennan', 'accumsan.sed@Suspendisse.net', '07 74 64 7', 'hendrerit', 'tincidunt', 0, 1, ''),
(85, 'Maldonado', 'Patricia', 'dictum@Uttincidunt.edu', '07 03 33 6', 'quis,', 'quam,', 0, 1, ''),
(86, 'Brewer', 'Brett', 'hendrerit@aliquet.edu', '09 27 63 7', 'aliquam', 'In', 0, 1, ''),
(87, 'George', 'Derek', 'et.magnis.dis@sagittis.net', '03 66 23 5', 'id,', 'ornare', 0, 1, ''),
(88, 'Armstrong', 'Alika', 'eu@ligulaeuenim.edu', '03 11 68 8', 'eu', 'Ut', 0, 1, ''),
(89, 'Chen', 'Erasmus', 'Nunc.sollicitudin.commodo@Nullamvitaediam.org', '09 08 36 3', 'tempor', 'laoreet', 0, 1, ''),
(90, 'Flowers', 'Dylan', 'iaculis.nec.eleifend@eu.edu', '01 09 12 1', 'at,', 'scelerisque', 0, 1, ''),
(91, 'Garrett', 'Judah', 'ipsum.dolor.sit@eros.net', '09 05 44 4', 'Suspendisse', 'eget', 0, 1, ''),
(92, 'Solomon', 'Yael', 'nibh.Aliquam@dolorNullasemper.ca', '07 92 83 0', 'est,', 'tellus', 0, 1, ''),
(93, 'Jordan', 'Odette', 'nunc@ligula.com', '09 01 45 6', 'Suspendisse', 'sed,', 0, 1, ''),
(94, 'Cooper', 'Reagan', 'quis.pede.Suspendisse@egetipsumSuspendisse.ca', '09 78 87 1', 'tempus', 'ante', 0, 1, ''),
(95, 'Brewer', 'Jaquelyn', 'sem@duiSuspendisse.co.uk', '06 53 78 4', 'penatibus', 'lacus,', 0, 1, ''),
(96, 'Graham', 'Tanya', 'amet.diam.eu@tortorIntegeraliquam.org', '04 58 82 4', 'nec', 'rutrum', 0, 1, ''),
(97, 'Rosario', 'Jaden', 'semper.Nam@netuset.ca', '05 11 34 4', 'dui.', 'lobortis,', 0, 1, ''),
(98, 'Bell', 'Zane', 'Nunc.laoreet.lectus@temporest.co.uk', '03 46 45 1', 'Proin', 'Pellentesque', 0, 1, ''),
(99, 'Coleman', 'Walker', 'auctor.velit.eget@ut.org', '07 79 68 6', 'amet', 'porta', 0, 1, ''),
(100, 'Brennan', 'Shay', 'nunc.In@Donec.com', '06 87 92 1', 'in', 'egestas', 0, 1, ''),
(101, 'Charles', 'Bordier', 'charles.bordier@yahoo.fr', '0606531354', 'charloz', 'epineguyon', 2, 2, '99389d703bf83127736452a9a6a9384563da7fde'),
(103, 'marco', 'marco', 'marco@marco.co', '0000000000', 'marco', 'marco', 0, 1, 'd5bf3fc2c727fe5ca4a1a2daa39c9c8242abf2c6'),
(104, 'Lagrange', 'Joe', 'test@yahoo.fr', '0634567806', 'toto', 'mdp', 0, 1, 'b6f770d09f0e3d7f9be284fc5ed0889b0c69f889'),
(105, 'SARBACANE', 'Lou', 'plouis.faure@gmail.com', '0665647478', 'pute', 'pute', 0, 1, '1760e932fd0d118c64db83babb6050f64d9d5060'),
(106, 'mo', 'mo', 'mo@mo.mo', '0606060606', 'momo', 'mmo', 0, 1, '3b8ff9fb1aab3013d2fbe3a41b8fd1c699f4b9a2'),
(107, 'clement', 'clement', 'clement@clement.fr', 'clement', 'clement', 'clement', 0, 1, '88bbe589e1776c0a701644e95c505e6d641b55c0'),
(108, 'moi', 'moi', 'moi@moi', 'moi', 'moi', 'moi', 0, 1, '32232a32b2f08d7cb6b158dd9cda30e871d73e6d'),
(109, 'Lama', 'Master', 'lama@yopmail.com', '0607080901', 'lama', 'lama', 0, 1, '5928f10638a47347805e682e8cd1ab49696e1622'),
(110, 'zeubi', 'yo', 'pouet@pouet.pouet', 'lala', 'lolo', 'lili''', 0, 1, '916f4efdcafb2ff2cccdd5ec1dd4ab5fb8fc7842'),
(111, 'a', 'a', 'a@a.a', '012345678', 'a', '123', 0, 1, NULL),
(112, 'fgh', 'fg', 'fg@gh', 'xcv', 'fg', 'gh', 0, 1, '7c2f5a5b0a9df5ffe6fc0cfe5a5af22ef1f55ce5'),
(113, 'ntm', 'ntm', 'ntm@tamere.com', '0248965284', 'ntm', 'ntm', 3, 2, '73ecc943a2e75b6a2a0875afad6a74b8133c6009'),
(114, 'test', 'test', 'tes@gmail.com', '0606060606', 'test', 'test', 3, 2, '6e0302324c253633879863dc9472f283dc7ca007');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Article`
--
ALTER TABLE `Article`
  ADD CONSTRAINT `fk_idVendeur` FOREIGN KEY (`idVendeur`) REFERENCES `Vendeur` (`id`);

--
-- Contraintes pour la table `Vendeur`
--
ALTER TABLE `Vendeur`
  ADD CONSTRAINT `fk_categorie` FOREIGN KEY (`categorie`) REFERENCES `CategorieVendeur` (`idCat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
