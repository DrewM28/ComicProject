
--
-- Indexes for dumped tables
--

--
-- Indexes for table `superheroes`
--
ALTER TABLE `superheroes`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD KEY `favoriteSuperhero` (`favoriteSuperhero`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`favoriteSuperhero`) REFERENCES `superheroes` (`name`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`favoriteSuperhero`) REFERENCES `superheroes` (`name`);
