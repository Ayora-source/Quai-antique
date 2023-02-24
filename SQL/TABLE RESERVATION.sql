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