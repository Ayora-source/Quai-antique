CREATE TABLE `card` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `id_type` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE `guest` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `guest` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `guest` (`id`, `guest`) VALUES
(1, 10);



CREATE TABLE `menu` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `type` varchar(100) NOT NULL,
  `starter` varchar(100) NOT NULL,
  `main` varchar(100) NOT NULL,
  `dessert` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `menu` (`id`, `type`, `starter`, `main`, `dessert`, `price`) VALUES
(1, 'Formule Déjeuner', 'Salade de Chèvre & Lard Paysan', 'Rouille de Seiches à la Sétoise', 'Café Gourmand', '18€'),
(2, 'Formule Diner', 'poisson', 'poisson', 'poisson', '3');


CREATE TABLE `photos` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `reservation` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `tel` varchar(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `covers` int(11) NOT NULL,
  `allergy` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `schedule` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `day` varchar(100) NOT NULL,
  `opening_m` varchar(100) NOT NULL,
  `closure_m` varchar(100) NOT NULL,
  `opening_s` varchar(100) NOT NULL,
  `closure_s` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `schedule` (`id`, `day`, `opening_m`, `closure_m`, `opening_s`, `closure_s`) VALUES
(1, 'Lundi', '11:00', '13:15', '19:00', '13:15'),
(2, 'Mardi', '11:00', '13:15', '19:00', '13:15'),
(3, 'Mercredi', '12:00', '14:00', '19:00', '23:00'),
(4, 'jeudi', 'fermé', '13:00', '19:00', '13:00'),
(5, 'vendredi', '11:00', '12:00', '22:30', '23:00'),
(6, 'Samedi', '12:00', '14:00', '19:00', '23:00'),
(7, 'Dimanche', '12:00', '14:00', '19:00', '23:00');


CREATE TABLE `type` (
  `id` int(10) NOT NULL PRIMARY KEY,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `type` (`id`, `type`) VALUES
(1, 'entree'),
(2, 'plat'),
(3, 'dessert');


CREATE TABLE `users` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `covers` int(10) NOT NULL,
  `allergy` varchar(500) CHARACTER SET utf8 NOT NULL,
  `type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `users` (`id`, `username`, `firstname`, `email`, `covers`, `allergy`, `type`, `password`) VALUES
(1, 'admin', 'test', 'testadmin@testadmin', 0, '', 'admin', '616c1af8cc7f4556975b7cbe50bce072e87a5e5c4c14b3ccb87575fc547b3167');

