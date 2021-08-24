-- Gegenereerd op: 11 aug 2021 om 13:55 (DUJO)
-- Serverversie: 10.4.20-MariaDB
-- PHP-versie: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `w2opdrachten`
-- Database bij opdrachten week2 module laravel2 leerjaar2 SD.
-- Na import (of run) in laravel nog een "php artisan migrate" uitvoeren 
-- om de authenticatie tabellen te maken.
--

-- --------------------------------------------------------
CREATE DATABASE w2opdrachten;

--
-- Tabelstructuur voor tabel `jobs`
--
USE w2opdrachten;

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `job_desc` varchar(50) NOT NULL DEFAULT 'New Position - title not formalized yet',
  `min_lvl` int(11) NOT NULL,
  `max_lvl` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_desc`, `min_lvl`, `max_lvl`, `created_at`, `updated_at`) VALUES
(1, 'New Hire - Job not specified', 10, 10, '2021-08-10 12:51:44', '2021-08-10 12:53:53'),
(2, 'Chief Executive Officer', 200, 250, '2021-08-10 12:51:44', '2021-08-10 12:53:53'),
(3, 'Business Operations Manager', 175, 225, '2021-08-10 12:51:44', '2021-08-10 12:53:53'),
(4, 'Chief Financial Officier', 175, 250, '2021-08-10 12:51:44', '2021-08-10 12:53:53'),
(5, 'Publisher', 150, 250, '2021-08-10 12:51:44', '2021-08-10 12:53:53'),
(6, 'Managing Editor', 140, 225, '2021-08-10 12:51:44', '2021-08-10 12:53:53'),
(7, 'Marketing Manager', 120, 200, '2021-08-10 12:51:44', '2021-08-10 12:53:53'),
(8, 'Public Relations Manager', 100, 175, '2021-08-10 12:51:44', '2021-08-10 12:53:53'),
(9, 'Acquisitions Manager', 75, 175, '2021-08-10 12:51:44', '2021-08-10 12:53:53'),
(10, 'Productions Manager', 75, 165, '2021-08-10 12:51:44', '2021-08-10 12:53:53'),
(11, 'Operations Manager', 75, 150, '2021-08-10 12:51:44', '2021-08-10 12:53:53'),
(12, 'Editor', 25, 100, '2021-08-10 12:51:44', '2021-08-10 12:53:53'),
(13, 'Sales Representative', 25, 100, '2021-08-10 12:51:44', '2021-08-10 12:53:53'),
(14, 'Designer', 25, 100, '2021-08-10 12:51:44', '2021-08-10 12:53:53');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;
