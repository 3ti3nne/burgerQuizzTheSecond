-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 11 oct. 2022 à 14:31
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
-- Base de données : `burgerquizzetienne`
--

-- --------------------------------------------------------

--
-- Structure de la table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `question_id` int(11) UNSIGNED NOT NULL,
  `answer` varchar(255) NOT NULL,
  `answer_check` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `answer`
--

INSERT INTO `answer` (`id`, `question_id`, `answer`, `answer_check`) VALUES
(1, 1, 'Jean-Claude Vandamme', 1),
(2, 1, 'Javascript ? (c\'est aussi une bonne réponse, mais c\'est pas gentil)', 0),
(3, 1, 'Obi-Wan Kenobi', 0),
(4, 2, '1500 heures', 0),
(5, 2, '1800 heures', 1),
(6, 2, '2437 heures', 0),
(7, 2, '1 million d\'heures', 0),
(8, 3, 'Moe', 1),
(9, 3, 'Joe', 0),
(10, 3, 'Gourio', 0),
(11, 3, 'Sue Ellen', 0),
(12, 4, 'Les Charlots contre Dracula', 0),
(13, 4, 'Dracula conte Frankenstein\r\n', 0),
(14, 4, 'Billy le Kid conte Dracula', 0),
(15, 4, 'Dracula conte Godzilla', 1),
(16, 5, 'La peinture à l\'oeuf', 0),
(17, 5, 'La peinture à la cire', 0),
(18, 5, 'La peinture à la harissa', 1),
(19, 5, 'La peinture au couteau\r\n', 0),
(20, 6, 'La peinture à l\'oeuf', 0),
(21, 6, 'La peinture à la cire', 0),
(22, 6, 'La peinture à la harissa', 1),
(23, 6, 'La peinture au couteau', 0),
(24, 7, 'Il ressemble au géant vert', 0),
(25, 7, 'Il ne pense pas à faire du yoga', 0),
(26, 7, 'Il déchire tous ses vêtements, sauf son short et son caleçon. C\'est fou, il a une toute petite bite finalement !', 1),
(27, 7, 'Il change de nom alors qu\'il ne sait pas parler', 0),
(28, 8, 'Il n\'y aura plus d\'air', 0),
(29, 8, 'On sera dead et plus alive', 0),
(30, 8, 'Tous les oiseaux tomberaient par terre', 1),
(31, 8, 'Il faudrait aller vivre sous l\'eau', 0),
(32, 9, 'Je lui ai mis la rondelle comme ça', 0),
(33, 9, 'Ta blague, elle vaut zéro', 0),
(34, 9, 'Je vais bien, tout va bien\r\n', 1),
(35, 9, 'Vas-y, vise là dedans avec ton harpon ', 0),
(36, 10, 'La peut de jouer au Kéno', 0),
(37, 10, 'La peur des fromages', 0),
(38, 10, 'La peur de Ken le survivant\r\n', 0),
(39, 10, 'La peur de la nuit', 1),
(40, 11, 'Le gang des chaussons aux pommes', 0),
(41, 11, 'La gang des chanteurs à moustache', 1),
(42, 11, 'Le gang des pianos à bretelle', 0),
(43, 11, 'Le gang du dimanche', 0),
(44, 12, 'Appelait toutes ses vaches avec des noms de la famille royale', 0),
(45, 12, 'Lançait des vaches mortes avec une catapulte', 1),
(46, 12, 'Tuait des vaches à main nues', 0),
(47, 12, 'Avait offert un piercing à sa vache', 0),
(48, 13, 'La drogue', 0),
(49, 13, 'Le J de leur prénom', 0),
(50, 13, 'Ils sont tous morts au même âge, 27 ans', 0),
(51, 13, 'a,b, c et donc d', 1),
(52, 14, '13 jours', 0),
(53, 14, 'deux siècles', 0),
(54, 14, '60 ans', 1),
(55, 14, 'Comme Christophe Lambert, le termite est immortel', 0),
(56, 15, '\"Réchauffe l\'hiver\"', 0),
(57, 15, '\"Donne-moi ta friandise\"', 0),
(58, 15, '\"Suce ma banane\"', 1),
(59, 15, '\"T\'es chiant(e)\"', 0),
(60, 16, 'Aux hippopotames', 0),
(61, 16, 'Aux potagers', 0),
(62, 16, 'Aux fleuves', 1),
(63, 16, 'Aux potins', 0),
(64, 17, 'Les moutons', 0),
(65, 17, 'Les mouflons', 1),
(66, 17, 'Les chanteurs', 0),
(67, 17, 'Putain moins fort y\'en a marre', 0),
(68, 18, 'Le mont Frolic\r\n', 0),
(69, 18, 'Le mont Canigou', 1),
(70, 18, 'Le mont Royal Canin', 0),
(71, 18, 'Le mont Pal', 0),
(72, 19, 'Un régime politique où le pouvoir appartient aux riches', 1),
(73, 19, 'Un régime politique merveilleux ou le pouvoir appartient à Pluto et à tous ces amis', 0),
(74, 19, 'Un régime politique où le pouvoir appartient aux plus forts', 0),
(75, 19, 'Un régime amaincissant à base de ploutes', 0),
(76, 20, '10 personnes, et c\'est la bonne réponse', 1),
(77, 20, '100 personnes', 0),
(78, 20, '2000 personnes', 0),
(79, 20, 'Ca dépend combien de fois t\'as vu les dents de la mer', 0),
(80, 21, 'Dans son lit comme tout le monde', 0),
(81, 21, 'Dans le lit de sa femme, comme tout le monde', 0),
(82, 21, 'Dans un accident d\'avion\r\n', 0),
(83, 21, 'En sautant de la Tour Eiffel, le con', 1),
(84, 22, '\"Homme araignée\" en japonais', 0),
(85, 22, '\"Homme fort\" en zaïrois\r\n', 1),
(86, 22, 'Yamakaso, au pluriel', 0),
(87, 22, 'Homme moitié Yamaha, moitié Kawasaki', 0),
(88, 23, 'Skip', 0),
(89, 23, 'Ariel', 1),
(90, 23, 'Omo Micro', 0),
(91, 23, 'Dash 3 en 1', 0),
(92, 24, 'Pour se cacher', 0),
(93, 24, 'Pour protéger leurs oeufs', 1),
(94, 24, 'Pour avoir moins chaud', 0),
(95, 24, 'Pour déconner', 0);

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`id`, `question`) VALUES
(1, 'Qui a dit que 1+1 pouvait faire \"même peut-être 11\"'),
(2, 'En combien d\'heures les protagonistes du \"Tour de monde\" en 80 jours de Jules Verne font-ils le tour du monde'),
(3, 'Dans \"les Simpson\", le gérant du bar s\'appelle'),
(4, 'Qui n\'a jamais combattu Dracula au cinéma'),
(5, 'Laquelle de ces peintures n\'existe pas'),
(6, 'Laquelle de ces peintures n\'existe pas'),
(7, 'Qu\'est-ce qui est surpenant quand David Banner se transforme en Hulk'),
(8, 'Jean-Claude Vandamme a déclaré dans Première : \"Je suis fasciné par l\'air. Si vous enlever l\'air du ciel...\"'),
(9, 'En plongée, qui signifie le geste pouce et index joints faisant un cercle'),
(10, 'Qu\'est-ce que la kénophobie'),
(11, 'Quel gang n\'a jamais existé au cinéma'),
(12, 'Un anglais a reçu un avertissement de la SPA anglaise parce qu\'il :'),
(13, 'Quel est le point commun ente Janis Joplin, Jimi Hendrix et Jim Morisson'),
(14, 'Quelle est la durée de vie d\'un termite'),
(15, 'Une seule de ces chansons de Fancky Vincent n\'est pas dans l\'album Franky Vincent'),
(16, 'A quoi s\'intéresse-t-on quand on fait de la potamologie'),
(17, 'Que signifie le nom du groupe corse \'I Muvrini\''),
(18, 'Laquelle de ces montagnes existe'),
(19, 'Qu\'est-ce qu\'une ploutocratie'),
(20, 'En l\'an 2000, combien de personnes ont été tuées par des requins'),
(21, 'Comment est mort l\'inventeur du parachute'),
(22, 'Yamakasi veut dire :'),
(23, 'Quel est le nom de la petite Sirène de Disney'),
(24, 'Pourquoi les autruches enfouissent-elles leut tête dans le sol');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_question_id_question_id` (`question_id`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `fk_question_id_question_id` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
