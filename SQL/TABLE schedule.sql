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