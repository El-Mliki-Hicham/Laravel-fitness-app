-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 20 juin 2022 à 00:16
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `spartel-gym`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categorie` int(10) UNSIGNED NOT NULL,
  `nom_categorie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_categorie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_categorie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `nom_categorie`, `description_categorie`, `photo_categorie`, `created_at`, `updated_at`) VALUES
(4, 'basketball', 'programme de musculation special pour Basket-ball', 'basketball.png', NULL, NULL),
(5, 'vollyball', 'programme de musculation special pour volley-ball', 'vollyball.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `categories_exerices`
--

CREATE TABLE `categories_exerices` (
  `id_categorie_exercice` int(10) UNSIGNED NOT NULL,
  `nom_categorie_exercice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_categorie_exercice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories_exerices`
--

INSERT INTO `categories_exerices` (`id_categorie_exercice`, `nom_categorie_exercice`, `photo_categorie_exercice`, `created_at`, `updated_at`) VALUES
(1, 'Biceps', 'biceps.png', NULL, NULL),
(2, 'Triceps', 'triceps.png', NULL, NULL),
(3, 'Cuisses', 'Cuisses.png', NULL, NULL),
(4, 'epaules', 'epaules.png', NULL, NULL),
(5, 'Pectoraux', 'Pectoraux.png', NULL, NULL),
(6, 'Dor', 'dor.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `exercices`
--

CREATE TABLE `exercices` (
  `id_exercice` int(10) UNSIGNED NOT NULL,
  `nom_exercice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categorie_exercice` int(10) UNSIGNED DEFAULT NULL,
  `description_exercice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `repetition_exercice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_exercice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `exercices`
--

INSERT INTO `exercices` (`id_exercice`, `nom_exercice`, `categorie_exercice`, `description_exercice`, `repetition_exercice`, `photo_exercice`, `created_at`, `updated_at`) VALUES
(100, 'seated dumbell bicep curl', 1, 'curl the dumbell while sitting down only using one hand', '3 series of 12', 'biceps1.gif', NULL, NULL),
(101, 'seated dumbell preacher curl', 1, 'two handed bicep curl xhile sitting down', '3 series of 12', 'biceps2.gif', NULL, NULL),
(102, 'standing cable bicep curl', 1, 'curl your arms upwards towards your head while standing up', '3 series of 12', 'biceps3.gif', NULL, NULL),
(103, 'cable bicep curl ', 1, 'curl the cable with one hand', '3 series of 12', 'biceps4.gif', NULL, NULL),
(104, 'standing dumbell biceps curl', 1, 'curl the dumbell while standing ', '3 series of 12', 'biceps5.gif', NULL, NULL),
(105, 'standing barbell biceps curl', 1, 'curl the barbell with both hands while standing up', '3 series of 12', 'biceps6.gif', NULL, NULL),
(106, 'seated bicep curl ', 1, 'sit down in a 90? degrees angle and curl the dumbell with one arm', '3 series of 12', 'biceps1.gif', NULL, NULL),
(107, 'negative barbell bench press', 5, 'lift the barbell off ur chest straight up while lying down in a 45 degree angle ', '3 series of 12', 'pectoraux1.gif', NULL, NULL),
(108, 'chest dips', 5, 'hang on the machine and pull ur bpdy up using ur arms solely', '3 series of 12', 'pectoraux2.gif', NULL, NULL),
(109, 'barbell bench press', 5, 'press the barbell straight up  and downwhile controlling the movement ', '3 series of 12', 'pectoraux3.gif', NULL, NULL),
(110, 'cable fly', 5, 'pull the machine hands towards the cnter of ur body then pull back', '6 series of 12', 'pectoraux4.gif', NULL, NULL),
(111, 'dumbell bench press', 5, 'press the dumbells straight up and down', '7 series of 12', 'pectoraux5.gif', NULL, NULL),
(112, 'incline bench press', 5, 'press the dumbells straight up and down on an incline bench', '8 series of 12', 'pectoraux6.gif', NULL, NULL),
(113, 'chest fly', 5, 'press the barbell straight up  and downwhile controlling the movement ', '9 series of 12', 'pectoraux7.gif', NULL, NULL),
(114, 'reverse butterfly', 6, 'pull the weight of the machine until u reach shoulder level', '3 series of 12', 'dos1.gif', NULL, NULL),
(115, 'seated shrug', 6, 'pull your shoulders up  ', '3 series of 12', 'dos2.gif', NULL, NULL),
(116, 'dumbell standing row', 6, 'pull the dumbells towards your back while standing up ', '3 series of 12', 'dos3.gif', NULL, NULL),
(117, 'incline back row', 6, 'pull the dumbells towards your back while lying down on an incline bench', '3 series of 12', 'dos4.gif', NULL, NULL),
(118, 'dumbell row', 6, 'pull the dumbells to ur body using the machine', '3 series of 12', 'dos5.gif', NULL, NULL),
(119, 'wide grip pulldown', 6, 'pull the bar down towards your chest', '3 series of 12', 'dos6.gif', NULL, NULL),
(120, 'one handed cable pulldown', 6, 'pull the cable down to ur back', '3 series of 12', 'dos7.gif', NULL, NULL),
(121, 'machine row ', 6, 'pull the weight of the machine until u reach shoulder level', '3 series of 12', 'dos8.gif', NULL, NULL),
(122, 'vertical row', 6, 'pull the weight down towardsyour chest', '3 series of 12', 'dos9.gif', NULL, NULL),
(123, 'closed grip pulldown', 6, 'pull the bar down towards your chest', '3 series of 12', 'dos10.gif', NULL, NULL),
(124, 'dumbell one handed press up', 2, 'press the dumbell up towards the sky and then down ', '3 series of 12', 'triceps1.gif', NULL, NULL),
(125, 'cable side raises', 2, 'pull the cables to both sides of ur body until u reach shoulder level', '3 series of 12', 'triceps2.gif', NULL, NULL),
(126, 'lying triceps extensions', 2, 'push the dumbells up while lying down on a bench', '3 series of 12', 'triceps3.gif', NULL, NULL),
(127, 'lying one handed extensions', 2, 'push one dumbell up while lying down on the bench', '3 series of 12', 'triceps4.gif', NULL, NULL),
(128, 'overhead triceps extensions', 2, 'pull the weight over your head and back ', '3 series of 12', 'triceps5.gif', NULL, NULL),
(129, 'cable pushdowns', 2, 'pull the cable down towards the ground with one hand', '3 series of 12', 'triceps6.gif', NULL, NULL),
(130, 'bar pushdowns', 2, 'pull the bar towards the ground with two hands', '3 series of 12', 'triceps7.gif', NULL, NULL),
(131, 'lying dumbell pushup', 2, 'push the dumbells up while lying down on a bench', '3 series of 12', 'triceps8.gif', NULL, NULL),
(132, 'inverted thigh press', 3, 'push the weight to the side using the machine', '3 series of 12', '1-cuisses.gif', NULL, NULL),
(133, 'hamstring curl', 2, 'curl the weight up towards your body using the machine', '3 series of 12', '2-cuisses.gif', NULL, NULL),
(134, 'sitting calves extension', 3, 'extend your calves upwards while sitting', '3 series of 12', '3-cuisses.gif', NULL, NULL),
(135, 'standing calves extension', 3, 'extend your calves upwards while standing', '3 series of 12', '4-cuisses.gif', NULL, NULL),
(136, 'hyperextension', 3, 'extend your legs forward', '3 series of 12', '5-cuisses.gif', NULL, NULL),
(137, 'dumbell squat', 3, 'squat down using dumbbells', '3 series of 12', '6-cuisses.gif', NULL, NULL),
(138, 'standing sumo squat', 3, 'squat down while holding the barbell on your shoulders', '3 series of 12', '7-cuisses.gif', NULL, NULL),
(139, 'leg extension', 3, 'push the weight up with your legs using the machine', '3 series of 12', '8-cuisses.gif', NULL, NULL),
(140, 'one legged squat ', 3, 'squat only using on leg on the ground and the other one on a bench with dumbbells', '3 series of 12', '9-cuisses.gif', NULL, NULL),
(141, 'dumbell standing squat', 3, 'squat using dumbbells', '3 series of 12', '10-cuisses.gif', NULL, NULL),
(142, 'deadlift squat', 3, 'pull the bar up on your shoulders then push up', '3 series of 12', '11-cuisses.gif', NULL, NULL),
(143, 'incline bench lateral raise', 4, 'push the weight to the side while sitting on an inclined bench', '3 series of 12', '1 epaules.gif', NULL, NULL),
(144, 'standing dumbbell raise', 4, 'pull the weight to the side to your shoulder level', '3 series of 12', '2 epaules.gif', NULL, NULL),
(145, 'front delt raise', 4, 'pull the dumbbells straight up and down', '3 series of 12', '3 epaules.gif', NULL, NULL),
(146, 'sitting lateral raise', 4, 'pull the weight to the side while sitting down', '3 series of 12', '4 epaules.gif', NULL, NULL),
(147, 'barbell shoulder raise', 4, 'pull the weight with your shoulders only', '3 series of 12', '5 epaules.gif', NULL, NULL),
(148, 'shoulder raise', 4, 'push the weight up towards the sky', '3 series of 12', '6 epaules.gif', NULL, NULL),
(149, 'one handed shoulder raise', 4, 'pull the weight up on top of your shoulders only using one hand', '3 series of 12', '7 epaules.gif', NULL, NULL),
(150, 'front shoulder raise', 4, 'pull the weight up using cable', '3 series of 12', '8 epaules.gif', NULL, NULL),
(151, 'barbell shoulder raise', 4, 'push the weight up using a barbell', '3 series of 12', '9 epaules.gif', NULL, NULL),
(152, 'sitting lateral raise with machine', 4, 'pull the weight up using the machine', '3 series of 12', '10 epaules.gif', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `exercices_de_jours`
--

CREATE TABLE `exercices_de_jours` (
  `id_programme` int(11) NOT NULL,
  `categorie_id` int(10) UNSIGNED DEFAULT NULL,
  `jour_id` int(10) UNSIGNED DEFAULT NULL,
  `exercice_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `exercices_de_jours`
--

INSERT INTO `exercices_de_jours` (`id_programme`, `categorie_id`, `jour_id`, `exercice_id`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 100, NULL, NULL),
(2, 4, 1, 101, NULL, NULL),
(3, 4, 1, 102, NULL, NULL),
(4, 5, 1, 103, NULL, NULL),
(5, 5, 1, 104, NULL, NULL),
(6, 5, 1, 105, NULL, NULL),
(7, 4, 1, 107, NULL, NULL),
(8, 4, 1, 108, NULL, NULL),
(9, 4, 1, 109, NULL, NULL),
(10, 4, 1, 110, NULL, NULL),
(11, 4, 1, 111, NULL, NULL),
(12, 5, 1, 112, NULL, NULL),
(13, 5, 1, 113, NULL, NULL),
(14, 5, 1, 109, NULL, NULL),
(15, 5, 1, 108, NULL, NULL),
(16, 5, 1, 107, NULL, NULL),
(17, 4, 2, 114, NULL, NULL),
(18, 4, 2, 115, NULL, NULL),
(19, 4, 2, 116, NULL, NULL),
(20, 4, 2, 117, NULL, NULL),
(21, 4, 2, 118, NULL, NULL),
(22, 5, 2, 119, NULL, NULL),
(23, 5, 2, 120, NULL, NULL),
(24, 5, 2, 121, NULL, NULL),
(25, 5, 2, 122, NULL, NULL),
(26, 5, 2, 123, NULL, NULL),
(27, 4, 2, 124, NULL, NULL),
(28, 4, 2, 125, NULL, NULL),
(29, 4, 2, 126, NULL, NULL),
(30, 5, 2, 127, NULL, NULL),
(31, 5, 2, 128, NULL, NULL),
(32, 5, 2, 129, NULL, NULL),
(33, 4, 3, 134, NULL, NULL),
(34, 4, 3, 135, NULL, NULL),
(35, 4, 3, 136, NULL, NULL),
(36, 4, 3, 137, NULL, NULL),
(37, 4, 3, 138, NULL, NULL),
(38, 4, 3, 139, NULL, NULL),
(39, 4, 3, 140, NULL, NULL),
(40, 5, 3, 141, NULL, NULL),
(41, 5, 3, 142, NULL, NULL),
(42, 5, 3, 136, NULL, NULL),
(43, 5, 3, 135, NULL, NULL),
(44, 5, 3, 140, NULL, NULL),
(45, 5, 3, 139, NULL, NULL),
(46, 4, 4, 143, NULL, NULL),
(47, 4, 4, 144, NULL, NULL),
(48, 4, 4, 145, NULL, NULL),
(49, 4, 4, 146, NULL, NULL),
(50, 4, 4, 147, NULL, NULL),
(51, 4, 4, 148, NULL, NULL),
(52, 5, 4, 149, NULL, NULL),
(53, 5, 4, 150, NULL, NULL),
(54, 5, 4, 151, NULL, NULL),
(55, 5, 4, 152, NULL, NULL),
(56, 5, 4, 147, NULL, NULL),
(57, 5, 4, 148, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jours`
--

CREATE TABLE `jours` (
  `id_jour` int(10) UNSIGNED NOT NULL,
  `jour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_jour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jours`
--

INSERT INTO `jours` (`id_jour`, `jour`, `description_jour`, `created_at`, `updated_at`) VALUES
(1, 'jour 1', NULL, NULL, NULL),
(2, 'jour 2', NULL, NULL, NULL),
(3, 'jour 3', NULL, NULL, NULL),
(4, 'jour 4', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_30_143807_creat_solisport_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `categories_exerices`
--
ALTER TABLE `categories_exerices`
  ADD PRIMARY KEY (`id_categorie_exercice`);

--
-- Index pour la table `exercices`
--
ALTER TABLE `exercices`
  ADD PRIMARY KEY (`id_exercice`),
  ADD KEY `exercices_categorie_exercice_foreign` (`categorie_exercice`);

--
-- Index pour la table `exercices_de_jours`
--
ALTER TABLE `exercices_de_jours`
  ADD PRIMARY KEY (`id_programme`),
  ADD KEY `exercices_de_jours_categorie_id_foreign` (`categorie_id`),
  ADD KEY `exercices_de_jours_jour_id_foreign` (`jour_id`),
  ADD KEY `exercices_de_jours_exercice_id_foreign` (`exercice_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `jours`
--
ALTER TABLE `jours`
  ADD PRIMARY KEY (`id_jour`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categorie` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `categories_exerices`
--
ALTER TABLE `categories_exerices`
  MODIFY `id_categorie_exercice` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `exercices`
--
ALTER TABLE `exercices`
  MODIFY `id_exercice` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT pour la table `exercices_de_jours`
--
ALTER TABLE `exercices_de_jours`
  MODIFY `id_programme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jours`
--
ALTER TABLE `jours`
  MODIFY `id_jour` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `exercices`
--
ALTER TABLE `exercices`
  ADD CONSTRAINT `exercices_categorie_exercice_foreign` FOREIGN KEY (`categorie_exercice`) REFERENCES `categories_exerices` (`id_categorie_exercice`) ON DELETE CASCADE;

--
-- Contraintes pour la table `exercices_de_jours`
--
ALTER TABLE `exercices_de_jours`
  ADD CONSTRAINT `exercices_de_jours_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id_categorie`) ON DELETE CASCADE,
  ADD CONSTRAINT `exercices_de_jours_exercice_id_foreign` FOREIGN KEY (`exercice_id`) REFERENCES `exercices` (`id_exercice`) ON DELETE CASCADE,
  ADD CONSTRAINT `exercices_de_jours_jour_id_foreign` FOREIGN KEY (`jour_id`) REFERENCES `jours` (`id_jour`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
