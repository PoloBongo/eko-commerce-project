-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 10 Février 2023 à 07:52
-- Version du serveur :  5.6.20-log
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `baimoxpolo`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`id_c` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `numero` varchar(15) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id_c`, `nom`, `email`, `numero`, `message`) VALUES
(2, 'aze', 'aze@aze', '0665464', 'azezaesdfqdgdqsgf');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE IF NOT EXISTS `inscription` (
`id_compte` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `num_tel` int(11) NOT NULL,
  `date_of_birthday` date NOT NULL,
  `birthday_notif` varchar(50) DEFAULT NULL,
  `admin` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Contenu de la table `inscription`
--

INSERT INTO `inscription` (`id_compte`, `nom`, `prenom`, `mdp`, `email`, `num_tel`, `date_of_birthday`, `birthday_notif`, `admin`) VALUES
(1, 'a', 'b', 'c', 'aaaaaaaaaa@gmail.com', 6456456, '2023-02-18', NULL, '1'),
(3, 'dsfsdf', 'sdfdsf', 'dfgdfhgfh', 'sdfsdf@dfg', 231564, '0000-00-00', NULL, '0'),
(4, 'sdfsdf', 'dsfsdf', 'sddfgdfg', 'sdfds@fghgf', 5404523, '0000-00-00', NULL, '0'),
(9, 'yo', 'bongo', 'polo', 'polo@gmail.com', 612564, '2004-10-25', '-', '0'),
(10, 'aze', 'rtrty', 'azeaze', 'rtyrty@gyiuyi', 6456456, '2004-10-25', '-', '0'),
(11, 'arthur', 'bongo', 'polo', 'abru@gaming.tech', 625302569, '2023-02-06', '-', '0'),
(15, 'try', 'try', 'bongo', 'artheu@gmail.com', 61825639, '2023-02-24', NULL, '0'),
(21, 'aze', 'aze', '', 'aze', 544656456, '2014-02-12', NULL, '0'),
(22, 'test', 'test', 'test', 'mail@gmail.com', 618216093, '2004-10-25', '-', '0'),
(23, 'Polo', 'Leaks', '$2y$10$geeGFkTscqsrOLK8GXSfN.9YjMxhYpgslW3VBc4ldhJh5RKYhnUpO', 'polo.officialchannel@gmail.com', 618216093, '2004-10-25', '-', '0'),
(24, 'aze', 'aze', '$2y$10$lYJFaehBpnJwdPYHC6egme0xK4nUZs20dHHeXBcMsXm1K8LOgxseW', 'aze@qsd', 452, '2004-10-25', '-', '0'),
(25, 'aze', 'aze', '$2y$10$A/Vt/FoG9e3XiSi9n8s3K.5TrhMrsaxno1oV2qpw/U6TiSPZMgYiu', 'aze@qsd', 452, '2004-10-25', '-', '0'),
(26, 'aze', 'aze', '$2y$10$krIwe.zjWALIRzUmSR8.V.979doAljDAYC6EpkGBsacBl9ykxuTMe', 'aze@qsd', 452, '2004-10-25', '-', '0'),
(27, 'Polo', 'Leaks', '$2y$10$cbpO65ApoR6EwqPN0MnrKuT77fq9m7w6PZevyTqfPjSRjM3BV/T1e', 'polo.officialchannel@gmail.com', 618216093, '2004-10-25', '-', '0'),
(28, 'Polo', 'Leaks', '$2y$10$4oUrPP5IvHgtPFzstlz8g.TFiTQKrkE0kWoWoWAsOuSOdFbIu9j6m', 'earthrp.polo@gmail.com', 618216093, '2000-10-25', '-', '0'),
(29, 'Polo', 'Leaks', '$2y$10$vEI0o0p7xSU4.Z2Ekjlx1ub.xaewcCvxsmQMhCM7mz/ebAYuD682u', 'dede37200@gmail.com', 618216093, '2000-10-25', '-', '0'),
(30, 'Polo', 'Leaks', '$2y$10$6uT5fDOjp95FwcqRp30E6.TpZ0QfIUUogpkCTc/T4Aye3eWzjEexC', 'polo.officialchannel@gmail.com', 618216093, '2004-10-25', '-', '0'),
(31, 'Arthu', 'Bru', '$2y$10$vmK9NsyEjr1i1OEcwr5qOuzWOWE6gMroUBXxwyueMDjEly6djgIge', 'polo.officialchannel@gmail.com', 618216093, '2004-10-25', '-', '0');

-- --------------------------------------------------------

--
-- Structure de la table `order_item`
--

CREATE TABLE IF NOT EXISTS `order_item` (
`order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_item_name` varchar(250) NOT NULL,
  `order_item_quantity` int(11) NOT NULL,
  `order_item_price` double(12,2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Contenu de la table `order_item`
--

INSERT INTO `order_item` (`order_item_id`, `order_id`, `order_item_name`, `order_item_quantity`, `order_item_price`) VALUES
(1, 1, 'T-shirt 3', 1, 400.00),
(2, 2, 'T-shirt 2', 1, 460.00),
(3, 2, 'T-shirt 1', 1, 350.00),
(4, 3, 'T-shirt 1', 1, 350.00),
(5, 4, 'T-shirt 2', 1, 460.00),
(6, 5, 'T-shirt 2', 1, 460.00),
(7, 6, 'T-shirt 7', 1, 270.00),
(8, 6, 'T-shirt 3', 1, 400.00),
(9, 7, 'T-shirt 1', 3, 350.00),
(10, 8, 'T-shirt 3', 3, 10.00),
(11, 9, 'T-shirt 1', 1, 3.00),
(12, 10, 'Clou', 1, 2.50),
(13, 11, 'T-shirt 4', 2, 20.00),
(14, 12, 'T-shirt 1', 1, 3.00),
(15, 13, 'T-shirt 1', 1, 3.00),
(16, 14, 'T-shirt 1', 1, 3.00),
(17, 15, 'T-shirt 1', 1, 3.00),
(18, 16, 'T-shirt 1', 1, 3.00),
(19, 17, 'T-shirt 1', 1, 3.00),
(20, 18, 'T-shirt 1', 1, 3.00),
(21, 19, 'T-shirt 1', 1, 3.00),
(22, 20, 'T-shirt 1', 1, 3.00),
(23, 21, 'T-shirt 1', 1, 3.00),
(24, 22, 'T-shirt 1', 1, 3.00),
(25, 23, 'T-shirt 1', 1, 3.00),
(26, 24, 'T-shirt 1', 1, 3.00),
(27, 25, 'T-shirt 1', 1, 3.00),
(28, 26, 'T-shirt 1', 1, 3.00),
(29, 27, 'T-shirt 1', 1, 3.00),
(30, 28, 'T-shirt 1', 2, 3.00),
(31, 29, 'T-shirt 1', 1, 3.00),
(32, 30, 'T-shirt 1', 1, 3.00),
(33, 31, 'T-shirt 3', 1, 10.00),
(34, 32, 'Ghost of Tsuchima', 1, 20.00),
(35, 33, 'T-shirt 2', 1, 4.00),
(36, 34, 'T-shirt 2', 1, 4.00),
(37, 35, 'clavier', 1, 100.00),
(38, 36, 'clavier', 1, 100.00),
(39, 37, 'clavier', 1, 100.00),
(40, 38, 'clavier', 1, 100.00),
(41, 39, 'clavier', 1, 100.00),
(42, 40, 'clavier', 1, 100.00),
(43, 41, 'stretcher_ems', 1, 10.00),
(44, 42, 'T-shirt 3', 1, 10.00),
(45, 43, 'clavier', 1, 100.00),
(46, 44, 'clavier', 1, 100.00),
(47, 45, 'clavier', 1, 100.00);

-- --------------------------------------------------------

--
-- Structure de la table `order_table`
--

CREATE TABLE IF NOT EXISTS `order_table` (
`order_id` int(11) NOT NULL,
  `order_number` int(11) NOT NULL,
  `order_total_amount` double(12,2) NOT NULL,
  `transaction_id` varchar(200) NOT NULL,
  `card_cvc` int(5) NOT NULL,
  `card_expiry_month` varchar(30) NOT NULL,
  `card_expiry_year` varchar(30) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `card_holder_number` varchar(250) NOT NULL,
  `email_address` varchar(250) NOT NULL,
  `customer_name` varchar(250) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_city` varchar(250) NOT NULL,
  `customer_pin` varchar(30) NOT NULL,
  `customer_state` varchar(250) NOT NULL,
  `customer_country` varchar(250) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Contenu de la table `order_table`
--

INSERT INTO `order_table` (`order_id`, `order_number`, `order_total_amount`, `transaction_id`, `card_cvc`, `card_expiry_month`, `card_expiry_year`, `order_status`, `card_holder_number`, `email_address`, `customer_name`, `customer_address`, `customer_city`, `customer_pin`, `customer_state`, `customer_country`) VALUES
(7, 461312, 1050.00, 'txn_3MX2gGGUygaHYSJ31McCD5QV', 100, '10', '2025', 'succeeded', '4242424242424242', 'earthrp.polo@gmail.com', 'bongo', '7 rue', 'Paris', '94230', '94', 'France'),
(8, 258807, 30.00, 'txn_3MX56GGUygaHYSJ31HJ10hBz', 100, '10', '2025', 'succeeded', '4242424242424242', 'earthrp.polo@gmail.com', 'bongo', '785674', 'Paris', '94230', '94', 'France'),
(9, 661611, 3.00, 'txn_3MYxt1GUygaHYSJ32kXNntDI', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', 'huki', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(10, 548028, 2.50, 'txn_3MZ9hUGUygaHYSJ31rEk66eO', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', 'huki', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(11, 374815, 40.00, 'txn_3MZD0TGUygaHYSJ32d5kU2E8', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', '									arthur', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(12, 735000, 3.00, 'txn_3MZW4JGUygaHYSJ33udBZY3k', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', '									arthur', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(13, 479485, 3.00, 'txn_3MZW4kGUygaHYSJ33o0mQTUP', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', '									arthur', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(14, 955968, 3.00, 'txn_3MZaPQGUygaHYSJ31TkH2R2G', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', '									arthur', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(15, 914490, 3.00, 'txn_3MZaQ9GUygaHYSJ31ORyQopd', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', '									a', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(16, 261052, 3.00, 'txn_3MZaR0GUygaHYSJ32XndBqiA', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', '									a', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(17, 555371, 3.00, 'txn_3MZaSFGUygaHYSJ31LHWwWPB', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', '									a', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(18, 262231, 3.00, 'txn_3MZaToGUygaHYSJ30wtQdobb', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', '									a', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(19, 850351, 3.00, 'txn_3MZaVFGUygaHYSJ31tn2Gqk9', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', '									a', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(20, 191733, 3.00, 'txn_3MZaYEGUygaHYSJ325zVepIp', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', '									a', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(21, 567677, 3.00, 'txn_3MZaZxGUygaHYSJ31cGV9OSQ', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', '									a', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(22, 365634, 3.00, 'txn_3MZab9GUygaHYSJ33fu3imnS', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', '									a', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(23, 494814, 3.00, 'txn_3MZacMGUygaHYSJ33MosOgOR', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', '									a', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(24, 624371, 3.00, 'txn_3MZaeLGUygaHYSJ32tZghm59', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', '									a', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(25, 871120, 3.00, 'txn_3MZafGGUygaHYSJ33BP0BErO', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', '									a', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(26, 443531, 3.00, 'txn_3MZajaGUygaHYSJ30AcYW19h', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', '									a', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(27, 199297, 3.00, 'txn_3MZamtGUygaHYSJ31OkD8IxV', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', '									a', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(28, 213151, 6.00, 'txn_3MZaxIGUygaHYSJ33qAEXigh', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', '									Polo', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(29, 271471, 3.00, 'txn_3MZdWTGUygaHYSJ30sZZXlfU', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', '									test', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(30, 527857, 3.00, 'txn_3MZeXsGUygaHYSJ32pA6ZWLq', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', '									arthur', 'ezgtzer', 'zerzer', '356', '78', 'france'),
(31, 512885, 10.00, 'txn_3MZegvGUygaHYSJ31dxAFJ0x', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', '									a', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(32, 656895, 20.00, 'txn_3MZfvfGUygaHYSJ30Uyrb4y9', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', '									Polo', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(33, 521069, 4.00, 'txn_3MZgEzGUygaHYSJ30k4HASvs', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', 'a', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(34, 102632, 4.00, 'txn_3MZgHbGUygaHYSJ32n3jeAv3', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', 'a', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(35, 423224, 100.00, 'txn_3MZgcqGUygaHYSJ33fuIwKcn', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', 'D', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(36, 133614, 100.00, 'txn_3MZgfBGUygaHYSJ33SjPCzLe', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', 'D', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(37, 920105, 100.00, 'txn_3MZggAGUygaHYSJ30W9PynCD', 100, '10', '2025', 'succeeded', '4242424242424242', 'arthur.plfm@gmail.com', 'D', '47 Rue Marcel Bonnet', 'Arceuil-cachan', '94230', 'Loir-et-Cher', 'France'),
(38, 808739, 100.00, 'txn_3MZgjYGUygaHYSJ33lVG7gAA', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', 'D', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(39, 780250, 100.00, 'txn_3MZgkzGUygaHYSJ33SgPTfgy', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', 'D', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(40, 300421, 100.00, 'txn_3MZgnLGUygaHYSJ33CYTFtz1', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', 'D', 'dzad', 'dazfazfaz', '10650', '78', 'france'),
(41, 184628, 10.00, 'txn_3MZh6XGUygaHYSJ31tEjNPqa', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', 'a', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(42, 832484, 10.00, 'txn_3MZhBXGUygaHYSJ31rY7FWUC', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', 'a', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(43, 476435, 100.00, 'txn_3MZhavK9704tW3Zc02M8HcwD', 100, '10', '2025', 'succeeded', '4242424242424242', 'dede37200@gmail.com', 'DemonXlegenD', '7 Rue Paul Bert, Immeuble 7, 2eme etage, porte 25', 'La Riche', '37520', 'Loir-et-Cher', 'France'),
(44, 905992, 100.00, 'txn_3MZhowK9704tW3Zc0KaPNYhp', 100, '10', '2024', 'succeeded', '4242424242424242', 'flahalle@gaming.tech', 'DemonXlegenD', 'dssdsdv', 'dssdds', '10000', '78', 'france'),
(45, 563104, 100.00, 'txn_3MZhqpK9704tW3Zc0ThbBX5V', 100, '10', '2024', 'succeeded', '4242424242424242', 'flahalle@gaming.tech', 'DemonXlegenD', 'dssdsdv', 'dssdds', '10000', '78', 'France');

-- --------------------------------------------------------

--
-- Structure de la table `produit_categorie_1`
--

CREATE TABLE IF NOT EXISTS `produit_categorie_1` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `quantity_max` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=108 ;

--
-- Contenu de la table `produit_categorie_1`
--

INSERT INTO `produit_categorie_1` (`id`, `name`, `image`, `price`, `quantity_max`) VALUES
(1, 'T-shirt 1', 'image-1.jpg', 3.00, '93'),
(2, 'T-shirt 2', 'image-2.jpg', 4.00, '11'),
(3, 'T-shirt 3', 'image-3.png', 10.00, '9'),
(4, 'T-shirt 4', 'image-4.jpg', 20.00, '6'),
(5, 'T-shirt 5', 'image-5.jpg', 4.00, '5'),
(6, 'T-shirt 6', 'image-6.jpg', 3.20, '6'),
(7, 'T-shirt 7', 'image-7.jpg', 70.00, '3'),
(107, 'stretcher_ems', 'Fichier 7.png', 10.00, '9');

-- --------------------------------------------------------

--
-- Structure de la table `produit_categorie_2`
--

CREATE TABLE IF NOT EXISTS `produit_categorie_2` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `quantity_max` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Contenu de la table `produit_categorie_2`
--

INSERT INTO `produit_categorie_2` (`id`, `name`, `image`, `price`, `quantity_max`) VALUES
(58, 'Harry Potter #3', 'harry_potter_3.jpg', 6.50, '13'),
(57, 'Harry Potter #2', 'harry_potter_2.jpg', 7.50, '7'),
(55, 'Harry Potter', 'harry_potter.jpg', 7.50, '8'),
(59, 'Harry Potter #4', 'harry_potter_4.jpg', 5.50, '3'),
(60, 'Harry Potter #5', 'harry_potter_5.jpg', 2.50, '23');

-- --------------------------------------------------------

--
-- Structure de la table `produit_categorie_3`
--

CREATE TABLE IF NOT EXISTS `produit_categorie_3` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `quantity_max` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Contenu de la table `produit_categorie_3`
--

INSERT INTO `produit_categorie_3` (`id`, `name`, `image`, `price`, `quantity_max`) VALUES
(54, 'tournevis', 'tournevis.jpg', 4.00, '16'),
(53, 'marteau', 'marteau.jpg', 3.50, '33'),
(52, 'Clou', 'clou.jpg', 2.50, '75');

-- --------------------------------------------------------

--
-- Structure de la table `produit_categorie_4`
--

CREATE TABLE IF NOT EXISTS `produit_categorie_4` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `quantity_max` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Contenu de la table `produit_categorie_4`
--

INSERT INTO `produit_categorie_4` (`id`, `name`, `image`, `price`, `quantity_max`) VALUES
(53, 'The Witcher', 'the witcher.jpg', 60.00, '10'),
(52, 'Ghost of Tsuchima', 'ghost of tsuchima.jpg', 20.00, '7');

-- --------------------------------------------------------

--
-- Structure de la table `produit_categorie_5`
--

CREATE TABLE IF NOT EXISTS `produit_categorie_5` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `quantity_max` varchar(255) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Contenu de la table `produit_categorie_5`
--

INSERT INTO `produit_categorie_5` (`id`, `name`, `image`, `price`, `quantity_max`) VALUES
(54, 'Sirop de Toux', 'siroptoux.jpg', 12.50, '5'),
(53, 'Pancement', 'pancement.jpg', 1.50, '32'),
(52, 'Bandage', 'bande.jpg', 1.00, '55');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`id_c`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
 ADD PRIMARY KEY (`id_compte`);

--
-- Index pour la table `order_item`
--
ALTER TABLE `order_item`
 ADD PRIMARY KEY (`order_item_id`);

--
-- Index pour la table `order_table`
--
ALTER TABLE `order_table`
 ADD PRIMARY KEY (`order_id`);

--
-- Index pour la table `produit_categorie_1`
--
ALTER TABLE `produit_categorie_1`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit_categorie_2`
--
ALTER TABLE `produit_categorie_2`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit_categorie_3`
--
ALTER TABLE `produit_categorie_3`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit_categorie_4`
--
ALTER TABLE `produit_categorie_4`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit_categorie_5`
--
ALTER TABLE `produit_categorie_5`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
MODIFY `id_compte` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `order_item`
--
ALTER TABLE `order_item`
MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT pour la table `order_table`
--
ALTER TABLE `order_table`
MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT pour la table `produit_categorie_1`
--
ALTER TABLE `produit_categorie_1`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT pour la table `produit_categorie_2`
--
ALTER TABLE `produit_categorie_2`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT pour la table `produit_categorie_3`
--
ALTER TABLE `produit_categorie_3`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT pour la table `produit_categorie_4`
--
ALTER TABLE `produit_categorie_4`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT pour la table `produit_categorie_5`
--
ALTER TABLE `produit_categorie_5`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
