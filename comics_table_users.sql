
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `favoriteSuperhero` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `favoriteSuperhero`) VALUES
('DrewM', 'THEFLASH28', 'The Flash'),
('Drew', 'jfhj', 'The Flash'),
('Henry', 'jfhdk', 'Batman'),
('Drew', 'gduktn', 'KidFlash');
