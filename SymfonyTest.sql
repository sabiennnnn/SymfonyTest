-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Gegenereerd op: 09 nov 2021 om 15:10
-- Serverversie: 5.7.34
-- PHP-versie: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SymfonyTest`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `artiest`
--

CREATE TABLE `artiest` (
  `id` int(11) NOT NULL,
  `naam` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `omschrijving` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `afbeelding_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `artiest`
--

INSERT INTO `artiest` (`id`, `naam`, `genre`, `omschrijving`, `afbeelding_url`, `website`) VALUES
(1, 'Son Mieux', 'Dansbare indiepop', 'Son Mieux is het zeskoppige collectief rondom singer/songwriter Camiel Meiresonne. De band staat garant voor afgeronde popliedjes met onweerstaanbare hooks en refreinen. Met een persoonlijk verhaal als in de beste folk, maar ook met een elektronische onderlaag. Voilà: het DNA van de Son Mieux-sound.', 'https://www.tivolivredenburg.nl/wp-content/uploads/2021/05/Persfoto-1-kopie.jpg', 'https://sonmieux.com'),
(2, 'HAEVN', 'Ambient pop', 'HAEVN brak in 2015 door met hun debut single ‘Finding out More’, dat meteen werd genomineerd voor een Edison en een 3FM-Award. Een gelukstreffer? Zeker niet. Ingetogen werkjes als ‘The Sea’, ‘We Are’ en ‘Fortitude’ luisteren als slow motionscènes in Scandinavische setting, met lieflijke gitaar- en piano melodieën, dramaverhogende strijkers en een falsetrijke finale. ', 'https://www.doornroosje.nl/app/uploads/2021/09/HAEVN-2020-1920x1080-1-1934x1088-c-default.webp', 'https://www.haevnmusic.com'),
(3, 'Suzan & Freek', 'Dutch pop', 'Het populaire duo Suzan & Freek scoort hit na hit met hun pakkende popnummers en harmonieuze samenzang. De carrière van het tweetal lijkt voor velen uit het niets ontstaan, maar ze timmeren al jaren aan de weg.', 'https://tinyurl.com/72r83fcn', 'https://suzanenfreek.nl'),
(4, 'White Lies', 'Indie rock', '\'To Lose My Life\' en \'Farewell To The Fairground\' brachten White Lies eind jaren \'00 naar de top van de Britse alternatieve indiescene. Het donkere maar pakkende postpunkgeluid van White Lies is van stadionwaardig niveau. Nu zijn ze terug met een nieuwe plaat. Op hun zesde album komt die kenmerkende duistere humor in de teksten naar voren, gecombineerd met scherpe hooks en melancholische zang.', 'https://www.dansendeberen.be/wp-content/uploads/white-lies.jpg', 'https://www.whitelies.com');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20211103100911', '2021-11-03 11:10:19', 123),
('DoctrineMigrations\\Version20211109150310', '2021-11-09 15:09:41', 122);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `optreden`
--

CREATE TABLE `optreden` (
  `id` int(11) NOT NULL,
  `poppodium_id` int(11) NOT NULL,
  `artiest_id` int(11) NOT NULL,
  `omschrijving` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datum` datetime NOT NULL,
  `prijs` int(11) NOT NULL,
  `ticket_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `afbeelding_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `optreden`
--

INSERT INTO `optreden` (`id`, `poppodium_id`, `artiest_id`, `omschrijving`, `datum`, `prijs`, `ticket_url`, `afbeelding_url`) VALUES
(1, 3, 4, 'Het nieuwe album van White Lies komt eraan in 2022 en daarom trekt de band weer Europa in! Met ‘As I Try Not To Fall Apart’ pakt de Londonse band weer uit, wij kunnen niet wachten.', '2022-04-21 19:30:00', 33, 'https://muziekgieterij.stager.nl/web/tickets/111053679', 'https://muziekgieterij.nl/wp-content/uploads/2021/09/white-lies-1920x1080-1.jpg'),
(2, 1, 2, 'Tijdens hun Unfold Tour nemen ze je mee in hun volgende stap naar het tweede album en zul je worden ondergedompeld in een wereld waar pop- en filmmuziek hun ultieme samensmelting vinden. ', '2021-12-10 20:00:00', 27, 'https://www.plt.nl/bestel/6927', 'https://www.plt.nl/resolve/image/6927/1230x500.jpg'),
(3, 2, 1, 'In 2021 verschijnt veel nieuwe muziek, met de singles ‘1992′ en ‘Drive’ voorop. Ook live weet de band te imponeren met een energieke, muzikale en overdonderende show.', '2021-11-20 20:00:00', 20, 'https://tickets.doornroosje.nl/nl-NL/Show/Details/2677495', 'https://www.spotgroningen.nl/wp-content/uploads/2021/06/son-mieux-scaled-e1623071575904.jpeg'),
(4, 2, 3, 'In maart 2021 wordt Goud uitgebracht, waarmee Suzan & Freek voor de zevende keer de Top 40 bereiken en het Nederlandse duo zijn geworden dat het meest succesvol is in de Nederlandse taal in de Top 40.', '2021-11-12 19:30:00', 35, 'https://www.spotgroningen.nl/programma/suzan-freek-extra-show/', 'https://www.spotgroningen.nl/wp-content/uploads/2021/05/SuzanFreek-credits-Mark-Uyl-1440x1551.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `poppodium`
--

CREATE TABLE `poppodium` (
  `id` int(11) NOT NULL,
  `naam` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adres` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `woonplaats` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefoonnummer` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `afbeelding_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `poppodium`
--

INSERT INTO `poppodium` (`id`, `naam`, `adres`, `postcode`, `woonplaats`, `telefoonnummer`, `email`, `website`, `logo_url`, `afbeelding_url`) VALUES
(1, 'Parkstad Limburg Theaters', 'Burgemeester van Grunsvenplein 145', '6411AS', 'Heerlen', '045 571 6607', 'info@plt.nl', 'http://www.plt.nl', 'https://theaterinclusief.nl/wp-content/uploads/2020/10/logo-PLt-klein.jpg', 'https://www.visitzuidlimburg.nl/mxms/mediastore/media/24127?t=636681185858026553&size=2000x2000&resizemode=1'),
(2, 'Effenaar', 'Dommelstraat 2', '5611CK', 'Eindhoven', '+3140 224 8861', 'info@effenaar.nl', 'https://www.effenaar.nl', 'https://www.effenaar.nl/assets/frontend/build/images/logo.185a26ff7571da91006e3f1934cb402a.svg', 'https://cultuurmarketing.nl/content/uploads/2020/06/Uitgelichte-foto-1-1.jpg'),
(3, 'Muziekgieterij', 'Boschstraat 5', '6211AS', 'Maastricht', '043 343 3337', 'info@muziekgieterij.nl', 'https://muziekgieterij.nl', 'https://muziekgieterij.nl/wp-content/uploads/2021/05/mlogo-500.png', 'https://muziekgieterij.nl/wp-content/uploads/2019/09/MBO_6202a-1.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `first_name`, `last_name`) VALUES
(1, 'test@test.nl', '[]', '$2y$13$Ye5AMwKejwvlgIB4dFCIP.ovLm6vZWHeedAtG12.79Y1eDJZWASsu', NULL, NULL);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `artiest`
--
ALTER TABLE `artiest`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexen voor tabel `optreden`
--
ALTER TABLE `optreden`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6286F65DA2EEBB18` (`poppodium_id`),
  ADD KEY `IDX_6286F65DAED85528` (`artiest_id`);

--
-- Indexen voor tabel `poppodium`
--
ALTER TABLE `poppodium`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `artiest`
--
ALTER TABLE `artiest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `optreden`
--
ALTER TABLE `optreden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `poppodium`
--
ALTER TABLE `poppodium`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `optreden`
--
ALTER TABLE `optreden`
  ADD CONSTRAINT `FK_6286F65DA2EEBB18` FOREIGN KEY (`poppodium_id`) REFERENCES `poppodium` (`id`),
  ADD CONSTRAINT `FK_6286F65DAED85528` FOREIGN KEY (`artiest_id`) REFERENCES `artiest` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
