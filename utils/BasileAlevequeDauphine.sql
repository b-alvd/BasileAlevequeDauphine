-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.2.0 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour dauphineexam
CREATE DATABASE IF NOT EXISTS `dauphineexam` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `dauphineexam`;

-- Listage de la structure de la table dauphineexam. annonce
CREATE TABLE IF NOT EXISTS `annonce` (
  `id` int NOT NULL AUTO_INCREMENT,
  `imageUrl` varchar(250) DEFAULT NULL,
  `contenu` text NOT NULL,
  `titre` varchar(250) NOT NULL,
  `auteur` varchar(250) NOT NULL,
  `datePublication` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `annonce_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

-- Listage des données de la table dauphineexam.annonce : ~9 rows (environ)
INSERT INTO `annonce` (`id`, `imageUrl`, `contenu`, `titre`, `auteur`, `datePublication`) VALUES
	(30, './uploads/medium.webp', 'Dans la société moderne où le stress et les distractions abondent, la méditation émerge comme une pratique salvatrice. L\'article explore en profondeur les nombreux bienfaits de la méditation sur la santé mentale et physique, ainsi que son impact sur la gestion du stress et l\'amélioration de la concentration. En examinant les différentes techniques de méditation et en fournissant des conseils pratiques pour débuter, l\'article vise à encourager les lecteurs à intégrer la méditation dans leur vie quotidienne pour une meilleure qualité de vie.', 'L\'Importance de la Méditation dans la Vie Moderne', 'jose', '2024-04-26 20:22:34'),
	(31, './uploads/medium.webp', 'Alors que l\'intelligence artificielle (IA) continue de se développer à un rythme fulgurant, cet article examine les questions éthiques cruciales soulevées par son utilisation généralisée. Du biais algorithmique à la confidentialité des données en passant par la perte d\'emplois, l\'article explore les implications éthiques de l\'IA dans divers domaines tels que la santé, la justice et l\'éducation. En mettant en lumière les dilemmes éthiques complexes auxquels nous sommes confrontés, l\'article appelle à un dialogue mondial sur la manière de guider le développement de l\'IA de manière responsable et éthique.', 'Les Enjeux Éthiques de l\'Intelligence Artificielle', 'jose', '2024-04-26 20:22:17'),
	(32, './uploads/medium.webp', 'Dans une ère où l\'exploration spatiale connaît un renouveau, cet article plonge dans les dernières avancées et les projets futurs de l\'exploration de l\'espace. De la mission habitée sur Mars aux missions d\'exploration des exoplanètes, en passant par l\'exploitation des ressources spatiales, l\'article offre un aperçu captivant des défis et des découvertes qui attendent l\'humanité au-delà de notre planète. En célébrant les réalisations passées et en anticipant les prochaines étapes audacieuses, l\'article inspire à rêver de nouveaux horizons cosmiques.', 'L\'Exploration de l\'Espace: Vers de Nouveaux Horizons', 'jose', '2024-04-26 20:21:56'),
	(33, './uploads/medium.webp', 'Dans un monde confronté à des défis environnementaux et alimentaires croissants, l\'agriculture urbaine émerge comme une solution innovante et durable. Cet article explore les nombreux avantages de l\'agriculture urbaine, de la sécurité alimentaire à la réduction des émissions de carbone en passant par la revitalisation des communautés urbaines. En examinant les différentes méthodes d\'agriculture urbaine, des jardins communautaires aux fermes verticales, l\'article met en lumière le potentiel de cette pratique à transformer nos villes en des environnements plus verts et plus résilients.', 'La Renaissance de l\'Agriculture Urbaine', 'jose', '2024-04-26 20:21:40'),
	(34, './uploads/medium.webp', 'Depuis les premiers récits transmis de génération en génération jusqu\'aux blockbusters hollywoodiens, les histoires ont toujours exercé un pouvoir profond sur l\'humanité. Cet article explore comment la narration façonne nos perceptions, influence nos attitudes et crée des liens entre les individus. En analysant les éléments clés de la narration, tels que les personnages, les conflits et les thèmes, l\'article révèle comment les histoires nous permettent de comprendre le monde qui nous entoure et de partager notre expérience humaine commune.', 'L\'Art de la Narration: Puissance et Influence des Histoires', 'jose', '2024-04-26 20:21:24'),
	(36, './uploads/medium.webp', 'Alors que la lutte pour l\'égalité des genres continue de progresser, cet article examine les défis persistants et les progrès réalisés dans la quête de l\'égalité entre les sexes. De l\'écart salarial à la représentation politique en passant par la violence fondée sur le genre, l\'article explore les obstacles systémiques qui entravent encore la pleine égalité des genres à travers le monde. En mettant en lumière les initiatives et les mouvements pour le changement, l\'article inspire à poursuivre la lutte pour un avenir plus juste et plus égalitaire pour tous.', 'La Quête de l\'Égalité des Genres: Défis et Réalisations', 'jose', '2024-04-26 20:21:07'),
	(37, './uploads/medium.webp', 'La médecine régénérative ouvre de nouvelles voies passionnantes dans le traitement des maladies et des blessures en exploitant la capacité du corps à s\'auto-réparer. Cet article explore les dernières avancées dans ce domaine, telles que la thérapie cellulaire, l\'ingénierie tissulaire et la médecine génique. En examinant les applications potentielles de la médecine régénérative dans le traitement des maladies dégénératives, des lésions de la moelle épinière et d\'autres affections, l\'article illustre comment cette approche révolutionnaire offre de l\'espoir pour l\'amélioration de la santé humaine à long terme.', 'Les Avancées Révolutionnaires dans le Domaine de la Médecine Régénérative', 'jose', '2024-04-26 20:24:02'),
	(38, './uploads/medium.webp', 'Les cryptomonnaies ont captivé l\'attention du monde financier avec leur promesse de décentralisation et de liberté financière. Cet article explore les défis et les opportunités associés à l\'adoption croissante des cryptomonnaies. En examinant les questions de réglementation, de sécurité et de volatilité des prix, l\'article offre un aperçu approfondi des défis auxquels sont confrontés les investisseurs et les régulateurs. Tout en soulignant les avantages potentiels des cryptomonnaies, tels que la réduction des frais de transaction et l\'inclusion financière, l\'article met en garde contre les risques inhérents et appelle à une approche équilibrée dans l\'exploration de ce nouveau paysage financier.', 'La Montée en Puissance des Cryptomonnaies: Défis et Opportunités', 'jose', '2024-04-26 20:24:22'),
	(39, './uploads/medium.webp', 'Face aux défis environnementaux croissants, l\'économie circulaire gagne en importance en tant que modèle alternatif axé sur la durabilité et la réutilisation des ressources. Cet article explore les principes fondamentaux de l\'économie circulaire, tels que la conception de produits durables, la réduction des déchets et la promotion de la réutilisation et du recyclage. En mettant en lumière les entreprises et les initiatives qui adoptent ce modèle, l\'article illustre comment l\'économie circulaire offre des avantages tant sur le plan environnemental que économique. En encourageant une transition vers des pratiques de consommation plus durables, l\'article appelle à une action collective pour façonner un avenir plus circulaire et résilient.', 'L\'Émergence de l\'Économie Circulaire: Vers un Modèle de Consommation Durable', 'jose', '2024-04-26 20:24:36');

-- Listage de la structure de la table dauphineexam. utilisateur
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `utilisateur_id_uindex` (`id`),
  UNIQUE KEY `utilisateur_login_uindex` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Listage des données de la table dauphineexam.utilisateur : ~1 rows (environ)
INSERT INTO `utilisateur` (`id`, `username`, `nom`, `prenom`, `password`) VALUES
	(2, 'jose', 'Bové', 'José', '$2y$10$c2giF7GE3qMPSp8yx7Lma.jx8UYf9Y9uFL5LBEo58dK4z5//VkMZ6');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
