-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1:3306
-- Genereringstid: 08. 03 2024 kl. 16:33:35
-- Serverversion: 8.2.0
-- PHP-version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interdisplay`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `categoryId` int NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(150) NOT NULL,
  `categoryPicture` text NOT NULL,
  `catColor` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  PRIMARY KEY (`categoryId`),
  KEY `categoryName` (`categoryName`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Data dump for tabellen `categories`
--

INSERT INTO `categories` (`categoryId`, `categoryName`, `categoryPicture`, `catColor`) VALUES
(1, 'Playstation 1', 'play1.webp', 'catCol1'),
(2, 'Playstation 2', 'play2.webp', 'catCol2'),
(3, 'Playstation 3', 'play3.webp', 'catCol3'),
(4, 'Sega Dreamcast', 'dream.webp', 'catCol4'),
(5, 'Xbox', 'xbox.webp', 'catCol5'),
(6, 'Xbox 360', '360.webp', 'catCol6'),
(7, 'Game Boy', 'gameboy.webp', 'catCol7'),
(8, 'Nintendo DS', 'ds.webp', 'catCol8'),
(9, 'Nintendo 64', '64.webp', 'catCol9'),
(10, 'Nintendo GameCube', 'gamecube.webp', 'catCol10'),
(11, 'DVD Film', 'film.webp', 'catCol11'),
(12, 'LP Plader', 'lpplader.webp', 'catCol12');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `demoscreens`
--

DROP TABLE IF EXISTS `demoscreens`;
CREATE TABLE IF NOT EXISTS `demoscreens` (
  `demoScreenId` int NOT NULL AUTO_INCREMENT,
  `demoScreenName` varchar(150) NOT NULL,
  PRIMARY KEY (`demoScreenId`),
  KEY `demoScreenName` (`demoScreenName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE IF NOT EXISTS `genres` (
  `genreId` int NOT NULL AUTO_INCREMENT,
  `genreName` varchar(150) NOT NULL,
  PRIMARY KEY (`genreId`),
  KEY `genreName` (`genreName`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Data dump for tabellen `genres`
--

INSERT INTO `genres` (`genreId`, `genreName`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(4, 'Fantasy'),
(7, 'Gyser'),
(12, 'Kamp'),
(5, 'Komedie'),
(17, 'Metal'),
(13, 'Musik'),
(6, 'Mysterie'),
(15, 'Pop'),
(11, 'Real Life'),
(16, 'Rock'),
(8, 'Romance'),
(9, 'RPG'),
(14, 'Sandbox'),
(3, 'Sci-fi'),
(10, 'Sport');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `productId` int NOT NULL AUTO_INCREMENT,
  `productName` varchar(150) NOT NULL,
  `productGenre1` int DEFAULT NULL,
  `productGenre2` int DEFAULT NULL,
  `produktGenre3` int DEFAULT NULL,
  `productDescription` text NOT NULL,
  `productPicture` text NOT NULL,
  `productPrice` int NOT NULL,
  `productCategoryId` int DEFAULT NULL,
  `productTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`productId`),
  KEY `productType` (`productCategoryId`),
  KEY `productGenre1` (`productGenre1`),
  KEY `productGenre2` (`productGenre2`),
  KEY `produktGenre3` (`produktGenre3`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Data dump for tabellen `products`
--

INSERT INTO `products` (`productId`, `productName`, `productGenre1`, `productGenre2`, `produktGenre3`, `productDescription`, `productPicture`, `productPrice`, `productCategoryId`, `productTime`) VALUES
(1, 'Star Wars, Original udgivelse', 3, 1, NULL, 'In a lorem far far ipsum', 'starwars.webp', 200, 11, '2024-03-04 20:26:18'),
(2, 'Call of Duty 1', 1, NULL, NULL, 'Smoke weed everyday.', 'codps1.webp', 198, 1, '2024-03-07 11:09:41'),
(3, 'Crash Bandicoot 2: Cortex Strikes Back', 2, NULL, NULL, 'Awookawakka!', 'crash-bandicoot-2-cortex-strikes-back.webp', 350, 1, '2024-03-07 11:09:41'),
(4, 'Final Fantasy VIII', 9, NULL, NULL, 'Suposedly the best Final Fantasy from the PlayStation 2 Era!', 'ffs.webp', 700, 1, '2024-03-07 11:09:41'),
(5, 'FIFA 99', 10, NULL, NULL, 'Fussbal!', 'fifa99-Done.webp', 120, 1, '2024-03-07 11:09:41'),
(6, 'Grand Theft Auto 1', 1, NULL, NULL, 'Uh huh HUH!', 'gtaps1.webp', 460, 1, '2024-03-07 11:09:41'),
(7, 'Playstation 1 Konsol', 11, NULL, NULL, 'Tip top stand, set efter de bedste i branchen.', 'ps1.webp', 2000, 1, '2024-03-07 11:09:41'),
(8, 'Playstation 1 kontroller', 11, NULL, NULL, 'Perfekt stand!', 'ps1pad.webp', 500, 1, '2024-03-07 11:09:41'),
(9, 'Tomb Raider', 2, NULL, NULL, 'Lara Croft i bedste polygonerede stand!', 'tombraider.webp', 160, 1, '2024-03-07 11:09:41'),
(10, 'Ps2-Tekken5', 12, NULL, NULL, 'Det femte spil i Tekken-serien, som blev udgivet i 2005', 'tekken5-ps2.webp', 200, 2, '2024-03-07 12:04:50'),
(11, 'Lego Batman-ps2', 2, NULL, NULL, 'Batman, MEN LEGO!!!', 'legobatps2.webp', 150, 2, '2024-03-07 12:04:50'),
(12, 'Guitar Hero - PS2', 13, NULL, NULL, 'Guitar Hero er et computerspil, der handler om at spille guitar ', 'guitarherops2.webp', 300, 2, '2024-03-07 12:04:50'),
(13, 'Buzz-the BIG quiz', 11, NULL, NULL, 'Buzzere medfølger ikke og skal købes separat.', 'buzzps2.webp', 100, 2, '2024-03-07 12:04:50'),
(14, 'Ratchet and Clank 3', 2, NULL, NULL, 'Rachet og Clank drager atter ud på eventyr. skal du med?', 'Ratchetps2.webp', 250, 2, '2024-03-07 12:04:50'),
(15, 'Spyro', 2, NULL, NULL, 'Spyro, the eternal night', 'spyrops2.webp', 250, 2, '2024-03-07 12:04:50'),
(16, 'Fifa Street 2', 10, NULL, NULL, 'For the streets', 'fifastreetps2.webp', 250, 2, '2024-03-07 12:04:50'),
(17, 'Call of duty - ps2', 1, NULL, NULL, 'Call of duty. finest hour', 'codps2.webp', 250, 2, '2024-03-07 12:04:50'),
(18, 'Shrek 2', 2, NULL, NULL, 'Shrek. en \"goated\" franchise, nu også som spil', 'shrek.webp', 250, 2, '2024-03-07 12:04:50'),
(19, 'Minecraft', 14, NULL, NULL, 'the kids, yearn for the mines', 'ps3-minecraft.webp', 250, 3, '2024-03-07 12:04:50'),
(20, 'Killzone 3', 1, NULL, NULL, 'populær singleplayer shooter, med en interessant story ', 'ps3-killzone.webp', 350, 3, '2024-03-07 12:04:50'),
(21, 'Ratchet and Clank - Tools of destruction', 2, NULL, NULL, 'Ratchet and Clank - Tools of destruction er et yderst populær single player spil', 'ps3-rachet.webp', 350, 3, '2024-03-07 12:04:50'),
(22, 'GTA 5', 1, NULL, NULL, 'Grand theft auto, en klassiker uden lige. lad din indre \"thug\" komme frem, eller invester i business. mulighederne er uendelige i denne finurlige verden', 'ps3-gta.webp', 350, 3, '2024-03-07 12:04:50'),
(23, 'Tekken Tag Tournament 2', 12, NULL, NULL, 'The king of the iron fist tournament er tilbage! Denne gang med et tagteam format. Find din partner, og udforsk jeres strategier, for at forbedre jeres chance for sejr.', 'ps3-ttt2.webp', 400, 3, '2024-03-07 12:04:50'),
(24, 'FIFA 17', 10, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'ps3fifa.webp', 100, 3, '2024-03-07 12:04:50'),
(25, 'Call of Duty - MW3', 1, NULL, NULL, 'en vaskeægte fanvorit i COD serien.', 'mw3ps3.webp', 100, 3, '2024-03-07 12:04:50'),
(26, 'Lego Marvel Super Heroes', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'ps3lego.webp', 100, 3, '2024-03-07 12:04:50'),
(27, 'Half-Life', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'dream-half.webp', 250, 4, '2024-03-07 12:04:50'),
(29, 'Crazy Taxi 2', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'dream-crazy.webp', 250, 4, '2024-03-07 12:04:50'),
(30, 'Bomberman Online', 1, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'dream-bomb.webp', 250, 4, '2024-03-07 12:04:50'),
(31, 'Marvel vs Capcom 2', 12, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'dream-marvelvscapcom.webp', 250, 4, '2024-03-07 12:04:50'),
(32, '102 Dalmatians - puppies to the rescue', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'dream-102dal.webp', 250, 4, '2024-03-07 12:04:50'),
(33, 'Championship Surfer', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'dream-surf.webp', 250, 4, '2024-03-07 12:04:50'),
(34, '3rd Strike', 12, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'dream-3rd-strike.webp', 250, 4, '2024-03-07 12:04:50'),
(35, 'Sonic adventure 2', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'dream-sonic.webp', 250, 4, '2024-03-07 12:04:50'),
(36, 'The Punisher', 1, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'xbox-punisher.webp', 250, 5, '2024-03-07 12:04:50'),
(37, 'Jet set radio future', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'xbox-jetset.webp', 250, 5, '2024-03-07 12:04:50'),
(38, 'Splinter Cell', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'xbox-splinter.webp', 250, 5, '2024-03-07 12:04:50'),
(39, 'Second sight', 1, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'xbox-secondsight.webp', 250, 5, '2024-03-07 12:04:50'),
(40, 'Halo - Combat evolved', 1, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'xbox-halo.webp', 500, 5, '2024-03-07 12:04:50'),
(41, 'Justice League Heroes', 12, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'xbox-justiceleague.webp', 650, 5, '2024-03-07 12:04:50'),
(42, 'Harry Potter - and the Philosophers stone\r\n', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'xbox-harrypotter.webp', 800, 5, '2024-03-07 12:04:50'),
(43, 'Burnout 3 - Takedown', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'xbox-burnout.webp', 450, 5, '2024-03-07 12:04:50'),
(44, 'Skylanders - Spyros adventure', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', '360-skylanders.webp', 350, 6, '2024-03-07 12:04:50'),
(45, 'Blur', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', '360-blur.webp', 350, 6, '2024-03-07 12:04:50'),
(46, 'WWE-Allstars', 12, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', '360-wwe.webp', 350, 6, '2024-03-07 12:04:50'),
(47, 'Call of Duty Black Ops', 1, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', '360-blackops.webp', 500, 6, '2024-03-07 12:04:50'),
(48, 'Call of Duty 4 - modern warfare', 1, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', '360-mw.webp', 500, 6, '2024-03-07 12:04:50'),
(49, 'The adventures of Tintin - The secret of the unicorn', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', '360-tintin.webp', 250, 6, '2024-03-07 12:04:50'),
(50, 'Prototype', 9, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', '360-prototype.webp', 250, 6, '2024-03-07 12:04:50'),
(51, 'The Sims 3', 11, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', '360-sims.webp', 250, 6, '2024-03-07 12:04:50'),
(52, 'Spiderman 2', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'gb-spiderman.webp', 250, 7, '2024-03-07 12:04:50'),
(53, 'The Castlevania Adventure', 1, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'gb-castle.webp', 200, 7, '2024-03-07 12:04:50'),
(54, 'tetris', 1, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'gb-tetris.webp', 150, 7, '2024-03-07 12:04:50'),
(55, 'Gargoyles quest', 9, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'gb-gargoyle.webp', 200, 7, '2024-03-07 12:04:50'),
(56, 'Mega Man - dr Wilys revenge', 1, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'gb-megaman.webp', 200, 7, '2024-03-07 12:04:50'),
(57, 'Super Mario Land', 1, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'gb-mario.webp', 200, 7, '2024-03-07 12:04:50'),
(58, 'Pokemon Red', 9, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'gb-pokemonred.webp', 750, 7, '2024-03-07 12:04:50'),
(59, 'Battletoads', 1, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'gb-battletoad.webp', 1000, 7, '2024-03-07 12:04:50'),
(60, 'Lego Star Wars 3', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'ds-starwars.webp', 300, 8, '2024-03-07 12:04:50'),
(61, 'Tigerz', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'ds-tigerz.webp', 50, 8, '2024-03-07 12:04:50'),
(62, 'Pokemon Pearl', 9, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'ds-pokemonpearl.webp', 550, 8, '2024-03-07 12:04:50'),
(63, 'Pokemon Mystery Dungeon - Explorers of sky', 9, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'ds-mysterydungeon.webp', 550, 8, '2024-03-07 12:04:50'),
(64, 'Gormiti the lords of nature', 9, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'ds-gormiti.webp', 400, 8, '2024-03-07 12:04:50'),
(65, 'Kirby Canvas Curse', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'ds-kirby.webp', 300, 8, '2024-03-07 12:04:50'),
(66, 'The Simpsons Game', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'ds-simpsons.webp', 300, 8, '2024-03-07 12:04:50'),
(67, 'MarioParty DS', 11, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'ds-mario.webp', 350, 8, '2024-03-07 12:04:50'),
(68, 'Perfect Dark', 1, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', '64-perfectdark.webp', 350, 9, '2024-03-07 12:04:50'),
(69, 'Pokemon Snap', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', '64-snap.webp', 350, 9, '2024-03-07 12:04:50'),
(70, 'Banjo-Kazooie', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', '64-banjo.webp', 350, 9, '2024-03-07 12:04:50'),
(71, 'MarioKart 64', 11, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', '64-mariokart.webp', 350, 9, '2024-03-07 12:04:50'),
(72, 'Super Mario 64', 1, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', '64-supermario.webp', 650, 9, '2024-03-07 12:04:50'),
(73, 'Pokemon Stadium', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', '64-stadium.webp', 650, 9, '2024-03-07 12:04:50'),
(74, 'The legend of Zelda - Ocarina of time', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', '64-zelda.webp', 650, 9, '2024-03-07 12:04:50'),
(75, 'Starfox  Adventures', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'cube-starfox.webp', 650, 10, '2024-03-07 12:04:50'),
(76, 'Def Jam Fight For NY', 12, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'cube-defjam.webp', 650, 10, '2024-03-07 12:04:50'),
(77, 'Animal crossing', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'cube-animalcrossing.webp', 650, 10, '2024-03-07 12:04:50'),
(78, 'Kirby airride', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'cube-kirby.webp', 650, 10, '2024-03-07 12:04:50'),
(79, 'TonyHawks American Wasteland', 10, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'cube-tonyh.webp', 700, 10, '2024-03-07 12:04:50'),
(80, 'pikmin', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'cube-pigmin.webp', 700, 10, '2024-03-07 12:04:50'),
(81, 'The legend of Zelda - Collectors edition', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'cube-zelda.webp', 700, 10, '2024-03-07 12:04:50'),
(82, 'Dragonball Z Sagas', 12, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'cube-dbz.webp', 800, 10, '2024-03-07 12:04:50'),
(83, 'The Lord Of The Rings', 4, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'dvd-lord.webp', 300, 11, '2024-03-07 12:04:50'),
(84, 'Casper the ghost', 7, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'dvd-casper.webp', 300, 11, '2024-03-07 12:04:50'),
(85, 'American psycho', 7, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'dvd-americanpsy.webp', 300, 11, '2024-03-07 12:04:50'),
(86, 'Scary Movie', 7, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'dvd-scarymovie.webp', 300, 11, '2024-03-07 12:04:50'),
(87, 'Pokemon the movie 2000', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'dvd-pokemon.webp', 300, 11, '2024-03-07 12:04:50'),
(88, 'The SpongeBob Squarepants movie', 2, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'dvd-sponge.webp', 300, 11, '2024-03-07 12:04:50'),
(89, 'Alpacino Scarface', 7, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'dvd-scarface.webp', 400, 11, '2024-03-07 12:04:50'),
(90, 'Matrix', 1, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'dvd-matrix.webp', 400, 11, '2024-03-07 12:04:50'),
(91, 'Kim Larsen - Midt om natten', 15, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'lp-kiml.webp', 50, 12, '2024-03-07 12:04:50'),
(92, 'Queen - greatest hits', 16, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'lp-queen.webp', 50, 12, '2024-03-07 12:04:50'),
(93, 'Pink floyd - The dark side of the moon', 16, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'lp-pinkfloyd.webp', 150, 12, '2024-03-07 12:04:50'),
(94, 'Michael Jackson thriller', 15, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'lp-michaelj.webp', 150, 12, '2024-03-07 12:04:50'),
(95, 'Elvis G.I blues', 16, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'lp-elvis.webp', 150, 12, '2024-03-07 12:04:50'),
(96, 'Metallica - Master of puppets', 17, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'lp-metallica.webp', 150, 12, '2024-03-07 12:04:50'),
(97, 'Kiss 88', 17, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'lp-kiss.webp', 150, 12, '2024-03-07 12:04:50'),
(98, 'The Beatles - A hard days night', 16, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing goat game elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus feugiat in ante metus dictum at.', 'lp-beatles.webp', 150, 12, '2024-03-07 12:04:50');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Begrænsninger for tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`productCategoryId`) REFERENCES `categories` (`categoryId`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`productGenre1`) REFERENCES `genres` (`genreId`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`productGenre2`) REFERENCES `genres` (`genreId`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_4` FOREIGN KEY (`produktGenre3`) REFERENCES `genres` (`genreId`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
