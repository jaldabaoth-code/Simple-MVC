CREATE TABLE `item` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO `item` (`id`, `title`) VALUES (1, 'Stuff'), (2, 'Doodads');
ALTER TABLE `item` ADD PRIMARY KEY (`id`);
ALTER TABLE `item` MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
