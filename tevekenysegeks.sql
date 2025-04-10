-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2025. Ápr 10. 14:19
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `vizsga`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `tevekenysegeks`
--

CREATE TABLE `tevekenysegeks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kat_id` bigint(20) UNSIGNED NOT NULL,
  `tev_nev` varchar(255) NOT NULL,
  `allapot` enum('kész','nincs kész') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `tevekenysegeks`
--

INSERT INTO `tevekenysegeks` (`id`, `kat_id`, `tev_nev`, `allapot`, `created_at`, `updated_at`) VALUES
(1, 6, 'teendő_4', 'nincs kész', '2025-04-10 09:49:01', '2025-04-10 09:49:01'),
(2, 7, 'teendő_2', 'nincs kész', '2025-04-10 09:49:01', '2025-04-10 09:49:01'),
(3, 8, 'teendő_2', 'kész', '2025-04-10 09:49:01', '2025-04-10 09:49:01'),
(4, 9, 'teendő_1', 'nincs kész', '2025-04-10 09:49:01', '2025-04-10 09:49:01'),
(5, 10, 'teendő_4', 'nincs kész', '2025-04-10 09:49:01', '2025-04-10 09:49:01'),
(6, 11, 'teendő_3', 'nincs kész', '2025-04-10 09:49:01', '2025-04-10 09:49:01'),
(7, 12, 'teendő_4', 'kész', '2025-04-10 09:49:01', '2025-04-10 09:49:01'),
(8, 13, 'teendő_3', 'nincs kész', '2025-04-10 09:49:01', '2025-04-10 09:49:01'),
(9, 14, 'teendő_2', 'nincs kész', '2025-04-10 09:49:01', '2025-04-10 09:49:01'),
(10, 15, 'teendő_4', 'nincs kész', '2025-04-10 09:49:01', '2025-04-10 09:49:01');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `tevekenysegeks`
--
ALTER TABLE `tevekenysegeks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tevekenysegeks_kat_id_foreign` (`kat_id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `tevekenysegeks`
--
ALTER TABLE `tevekenysegeks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `tevekenysegeks`
--
ALTER TABLE `tevekenysegeks`
  ADD CONSTRAINT `tevekenysegeks_kat_id_foreign` FOREIGN KEY (`kat_id`) REFERENCES `kategoriaks` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
