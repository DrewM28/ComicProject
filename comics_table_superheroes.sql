
-- --------------------------------------------------------

--
-- Table structure for table `superheroes`
--

CREATE TABLE `superheroes` (
  `name` varchar(25) NOT NULL,
  `power` varchar(50) DEFAULT NULL,
  `universe` varchar(25) DEFAULT NULL,
  `team` varchar(20) DEFAULT NULL,
  `Links` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `superheroes`
--

INSERT INTO `superheroes` (`name`, `power`, `universe`, `team`, `Links`) VALUES
('AquaMan', 'King of the Ocean', 'DC', 'Justice League', NULL),
('Atom', 'Shrinking', 'DC', 'Justice League', NULL),
('Batman', 'Rich, Orphan', 'DC', 'Justice League', NULL),
('Beast', 'Mutant, superhuman strength, agility', 'Marvel', 'X-Men', NULL),
('BeastBoy', 'Animal Shapeshifting', 'DC', 'Justice League', NULL),
('Black Widow', 'Spy', 'Marvel', 'Avengers', NULL),
('Captain America', 'SuperSoldier', 'Marvel', 'Avengers', NULL),
('Cyborg', 'Cyborg', 'DC', 'Justice League', NULL),
('Cyclops', 'Energy Vision, Mutant', 'Marvel', 'X-Men', NULL),
('DareDevil', 'Blind', 'Marvel', 'Avengers', NULL),
('Gambit', 'Mutant, manipulate kinetic energy', 'Marvel', 'X-Men', NULL),
('Green Lantern', 'Lantern Ring', 'DC', 'Justice League', NULL),
('HawkEye', 'Bow and Arrows', 'Marvel', 'Avengers', NULL),
('Invincible', 'SuperStrength, Invincible', 'Other', NULL, NULL),
('IronMan', 'Iront Suit', 'Marvel', 'Avengers', NULL),
('KidFlash', 'SuperSpeed', 'DC', 'Teen Titans', NULL),
('Martian Manhunter', 'Shapeshift, Martian', 'DC', 'Justice League', NULL),
('MoonKnight', 'Schizophrenia', 'Marvel', 'Avengers', NULL),
('OmniMan', 'SuperStrength, Invincible', 'Other', NULL, NULL),
('Professor X', 'Telepathy, Mutant', 'Marvel', 'X-Men', NULL),
('QuickSilver', 'SuperSpeed, Mutant', 'Marvel', 'Avengers', NULL),
('Raven', 'Demon', 'DC', 'Teen Titans', NULL),
('Robin', 'Orphan', 'DC', 'Teen Titans', NULL),
('SpiderMan', 'Webs, Wallcrawling, Spidersense', 'Marvel', 'Avengers', NULL),
('Starfire', 'Energy Blasts', 'DC', 'Teen Titans', NULL),
('Storm', 'Weather, Mutant', 'Marvel', 'X-Men', NULL),
('SuperMan', 'SuperStrength, Flying', 'DC', 'Justice League', NULL),
('The Flash', 'SuperSpeed', 'DC', 'Justice League', NULL),
('The Hulk', 'SuperStrength', 'Marvel', 'Avengers', NULL),
('Thor', 'NorseGod', 'Marvel', 'Avengers', NULL),
('Wolverine', 'Mutant, Claws, Healing Factor', 'Marvel', 'X-Men', NULL),
('Wonder Woman', 'SuperStrength', 'DC', 'Justice League', NULL);
