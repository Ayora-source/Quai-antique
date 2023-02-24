CREATE TABLE `menu` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `type` varchar(100) NOT NULL,
  `starter` varchar(100) NOT NULL,
  `main` varchar(100) NOT NULL,
  `dessert` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
