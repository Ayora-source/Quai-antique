CREATE TABLE `guest` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `guest` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `guest` (`id`, `guest`) VALUES
(1, 10);


CREATE TABLE `card` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `id_type` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `price` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



CREATE TABLE `menu` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `type` varchar(100) NOT NULL,
  `starter` varchar(100) NOT NULL,
  `main` varchar(100) NOT NULL,
  `dessert` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
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
  `opening-m` varchar(100) NOT NULL,
  `closure-m` varchar(100) NOT NULL,
  `opening-s` varchar(100) NOT NULL,
  `closure-s` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `schedule` (`id`, `day`, `opening-m`, `closure-m`, `opening-s`, `closure-s`) VALUES
(1, 'Lundi', 'fermé', 'fermé', '19:00', '19:00'),
(2, 'Mardi', '11:45', '11:00', '19:00', '19:00'),
(3, 'Mercredi', '12:00', '14:00', '19:00', '23:00'),
(4, 'jeudi', '12:00', '14:00', '19:00', '23:00'),
(5, 'vendredi', '12:00', '13:30', '20:00', '22:45'),
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
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `covers` int(10) NOT NULL,
  `allergy` varchar(500) CHARACTER SET utf8 NOT NULL,
  `type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;