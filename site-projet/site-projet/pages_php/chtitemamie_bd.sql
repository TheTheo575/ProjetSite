-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 25, 2024 at 02:46 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chtitemamie_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `plats`
--

CREATE TABLE `plats` (
  `Id` int(11) NOT NULL,
  `nom` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `recette` text NOT NULL,
  `recipe` text NOT NULL,
  `image` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plats`
--

INSERT INTO `plats` (`Id`, `nom`, `name`, `recette`, `recipe`, `image`, `type`) VALUES
(1, 'Salade César', 'Cesar Salad', 'Salade<br />Mozzarella<br />Poulet<br />', 'Salad<br />Mozzarella<br />Chiken<br />', '../images/Plats/salade-cesar.jpeg', 'entree'),
(2, 'Quiche Aux Poireaux', 'Leeks Quiche', 'Oeuf<br />Poireaux<br />Gruyère<br />', 'Egg<br />Leeks<br />Gruyere<br />', '../images/Plats/Quiche.jpeg', 'entree'),
(3, 'Oeufs Cocottes Maroilles', 'Eggs Cocottes Maroilles', 'Oeuf<br />Maroille<br /> Crème<br />', 'Egg<br />Maroille<br />Cream<br />', '../images/Plats/Oeuf-Cocotte-Maroille.jpeg', 'entree'),
(4, 'Chicons à la Béchamel', 'Bechamel Chicon', 'Chicon<br />Béchamel<br />Jambon<br />', 'Chicon<br />Bechamel<br />Ham<br />', '../images/Plats/Chicon-Bechamel.jpeg', 'entree'),
(5, 'Potjevleesch', 'Potjevleesch', 'Poulet<br />Lapin<br />Veau<br />', 'Chiken<br />Bunny<br />Calf<br />', '../images/Plats/Potjevleesch.jpeg', 'plat'),
(6, 'Fricadelle', 'Fricadelle', 'secret de mamie', 'Secret Ingredients', '../images/Plats/Fricadelle.jpeg', 'plat'),
(7, 'Américain', 'American', 'Frite<br />Sauce au choix<br />Saucisse, Merguez ou Fricadelle<br />', 'French Fries<br />Sauce of your choice<br />Sausage, Merguez or Fricadelle<br />', '../images/Plats/Americain.jpeg', 'plat'),
(8, 'Frites', 'French Fries', 'Pommes de Terre<br />', 'Potato<br />', '../images/Plats/Frites.jpeg', 'plat'),
(9, 'Moules de Mamie', 'Sea Mussels', 'Moules<br />Maroille<br />', 'Sea Mussel<br />Maroille<br />', '../images/Plats/Moules.jpeg', 'plat'),
(10, 'Carbonade Flamande', 'Flemish Carbonnade', 'Lard Fumé<br />Beauf<br />Carotte<br />', 'Smoked Bacon<br />Beauf<br />Carrot<br />', '../images/Plats/Carbonade-Flamande.jpeg', 'plat'),
(11, 'Welsh', 'Welsh', 'Oeuf<br />Jambon<br />Cheddar<br />', 'Egg<br />Ham<br />Cheddar<br />', '../images/Plats/Welsh.jpeg', 'plat'),
(12, 'Chtiramisu', 'Chtiramisu', 'Speculos<br />Café<br />Cacao<br />', 'Speculos<br />Coffe<br />Cocoa<br />', '../images/Plats/Tiramisu.jpeg', 'dessert'),
(13, 'Tarte au Sucre', 'Sugar Pie', 'Du Sucre<br />Du Sucre<br />Et encore du sucre<br />', 'Sugar<br />Sugar<br />And Sugar Again<br />', '../images/Plats/Tarte-Sucre.jpg', 'dessert'),
(14, 'Café Liégeois', 'Liegeois Coffe', 'Café<br />Vanille<br />Crème Fouettée<br />', 'Coffe<br />Vanilla<br />Whipped Cream<br />', '../images/Plats/Cafe-Liegeois.jpg', 'dessert'),
(15, 'Crème Brulée à la Chicorée', 'Chicorrée Creme Brulee', 'Chicorée<br />Vanille<br />Crème<br />', 'Chicorée<br />Vanilla<br />Cream<br />', '../images/Plats/Creme-Brulee.jpg', 'dessert'),
(16, 'Café Gourmand', 'Gourmet Coffee', 'Coffe<br />', 'Desserts of the day<br />', '../images/Plats/Cafe-Gourmand.jpg', 'dessert'),
(17, 'Soft', 'Soft', 'Eau , Perrier , Coca<br />Diabolo , Oasis , Fanta , Ice Tea<br />Schweppes <br />', 'Water , Sparkling Water , Cola<br />Diabolo , Oasis , Fanta , Ice Tea<br />Schweppes<br />', '../images/Plats/Soft.jpg', 'boisson'),
(18, 'Bières', 'Beer', 'Goudale , Anosteke , Cuvé des Trolls<br />Paix Dieux , Grimbergen , Bush<br />', 'Goudale , Anosteke , Cuvé des Trolls<br />Paix Dieux , Grimbergen , Bush<br />', '../images/Plats/Biere.jpg', 'boisson'),
(19, 'Digestifs', 'Digestive', 'Get 27/31 , Vodka Citron/Fraise<br />Rhum , Digestif Maison', 'Get 27/31 , Vodka Lemon/Strawberry<br />Rhum , Digestif Maison', '../images/Plats/Digestif.jpg', 'boisson'),
(20, 'Vins', 'Wines', 'Vin Rouge : Bordeaux , Côte du Rhône<br />Vin Blanc : Grand Cru , Chardonnay<br />Rosé : Côte de Provence , Argali Rosé<br />', 'Red Wine : Bordeaux , Côte du Rhône<br />White Wine : Grand Cru , Chardonnay<br />Rosé : Côte de Provence , Argali Rosé<br />', '../images/Plats/Vin.jpg', 'boisson');

-- --------------------------------------------------------

--
-- Table structure for table `profils`
--

CREATE TABLE `profils` (
  `Id` int(11) NOT NULL,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Telephone` text NOT NULL,
  `Email` text NOT NULL,
  `MotDePasse` text NOT NULL,
  `Admin` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profils`
--

INSERT INTO `profils` (`Id`, `Nom`, `Prenom`, `Telephone`, `Email`, `MotDePasse`, `Admin`) VALUES
(1, 'NEVEU', 'Théo', '0767120955', 'theo.neveu@student.junia.com', 'Theo12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Id` int(11) NOT NULL,
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Date` date NOT NULL,
  `Heure` text NOT NULL,
  `Nombre` int(11) NOT NULL,
  `Event` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `plats`
--
ALTER TABLE `plats`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plats`
--
ALTER TABLE `plats`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
