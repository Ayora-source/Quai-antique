CREATE TABLE `type` (
  `id` int(10) NOT NULL PRIMARY KEY,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `type` (`id`, `type`) VALUES
(1, 'entree'),
(2, 'plat'),
(3, 'dessert');